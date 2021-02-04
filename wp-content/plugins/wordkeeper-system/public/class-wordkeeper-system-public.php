<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://wordkeeper.com
 * @since      1.0.0
 *
 * @package    WordKeeper_System
 * @subpackage WordKeeper_System/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * @package    WordKeeper_System
 * @subpackage WordKeeper_System/public
 * @author     Lance Dockins <info@wordkeeper.comm>
 */
class WordKeeper_System_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * The settings for this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $settings    The settings for the plugin
	 */
	private $settings;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $wordkeeper_system       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $wordkeeper_system, $version ) {

		$this->wordkeeper_system = $wordkeeper_system;
		$this->version = $version;
		$this->settings = get_option('wordkeeper-system-settings');

	}


	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in WordKeeper_System_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The WordKeeper_System_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// There are no public styles for this
		// wp_enqueue_style( $this->wordkeeper_system, plugin_dir_url( __FILE__ ) . 'css/wordkeeper-system-public.css', array(), $this->version, 'all' );

	}


	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in WordKeeper_System_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The WordKeeper_System_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// There are no public scripts for this
		// wp_enqueue_script( $this->wordkeeper_system, plugin_dir_url( __FILE__ ) . 'js/wordkeeper-system-public.js', array( 'jquery' ), $this->version, false );

	}


	/**
	 * Start output buffering
	 *
	 * @since    1.0.0
	 */
	public function buffer_start() {
		if ($this->settings['protocol-agnostic'] === true || $this->settings['defer-javascript'] === true) {
			if (!is_user_logged_in()) {
				@ob_start(array($this, 'buffer_callback'));
			}
		}
	}


	/**
	 * Stop output buffering
	 *
	 * @since    1.0.0
	 */
	public function buffer_stop() {
		if ($this->settings['protocol-agnostic'] === true || $this->settings['defer-javascript'] === true) {
			if (!is_user_logged_in()) {
				@ob_end_flush();
			}
		}
	}


	/**
	 * Output buffering callback
	 *
	 * @since    1.0.0
	 */
	public function buffer_callback($buffer) {
		// Check for a Content-Type header. Currently only apply rewriting to "text/html" or undefined
		$headers = headers_list();
		$content_type = null;

		foreach ($headers as $header) {
			if (strpos(strtolower($header), 'content-type:') === 0) {
				$pieces = explode(':', strtolower($header));
				$content_type = trim($pieces[1]);
				break;
			}
		}

		if (is_null($content_type) || substr($content_type, 0, 9) === 'text/html') {

			if ($this->settings['protocol-agnostic']) {
				//only domain specific url
				$url = get_site_url();
				$url = preg_replace('#^https?://#', '', $url);

				// replace href or src attributes within script, link, base, and img tags with just "//" for protocol
				$re     = "/(<(script|link|base|img|form)([^>]*)(href|src|action)=[\"'])https?:\\/\\/($url\/)/i";
				$subst  = "$1//$5";
				$return = preg_replace($re, $subst, $buffer);

				// on regex error, skip overwriting buffer
				if ($return) {
					$buffer = $return;
				}
			}

			if ($this->settings['defer-javascript'] === true) {
				preg_match_all('/(?s)<\s?script.*?(?:\/\s?>|<\s?\/\s?script\s?>)/', $buffer, $matches);

				foreach ($matches[0] as $script) {
					if (
						strpos($script, '.google-analytics.com') === false &&
						strpos($script, 'www.googleadservices.com') === false &&
						strpos($script, 'connect.facebook.net') === false &&
						strpos($script, 'var google_conversion_id') === false &&
						(strpos($script, '/jquery.js') === false || strpos($script, '/jquery.json') !== false) &&
						strpos($script, '/jquery.min.js') === false &&
						strpos($script, '/jquery-migrate.js') === false &&
						strpos($script, '/jquery-migrate.min.js') === false
					) {
						preg_match_all('/<\s?script.*?\s?>/', $script, $begin);

						if ($begin[0][0] == '<script>') {;
							$replace = str_replace('<script>', '<script defer="defer">', $script);
							$buffer = str_replace($script, $replace, $buffer);
						}
						elseif (strpos($begin[0][0], 'defer') === false) {
							$replace = str_replace('<script ', '<script defer="defer" ', $begin[0]);
							$replace = str_replace($begin[0], $replace, $script);
							$buffer = str_replace($script, $replace, $buffer);
						}
					}
				}
			}
		}

		return $buffer;
	}


	/**
	 * remove_query_strings function.
	 *
	 * @since    1.0.0
	 * @access public
	 * @param mixed $src
	 * @return void
	 */
	public function remove_query_strings($src) {

		if($this->settings['query-strings'] === true) {
			if (!is_admin() && !is_user_logged_in()) {

				$siteurl = get_site_url();
				$siteurl = parse_url($siteurl);
				$host = $_SERVER['HTTP_HOST'];

				if (strpos($src, '.php') === false && strpos($src, $host) !== false) {
					$parts = explode( '?', $src );
					$path = $parts[0];
					return $path;
				}
				else {
					return $src;
				}
			}
		}

		return $src;
	}


	/**
	 * heartbeat_control function.
	 *
	 * @since    1.0.0
	 * @access public
	 * @return void
	 */
	public function heartbeat_control() {
		global $pagenow;

		switch ($this->settings['heartbeat-permission']) {
			case 'disable-heartbeat-everywhere':
				wp_deregister_script('heartbeat');
				break;
			case 'disable-heartbeat-dashboard':
				if($pagenow == 'index.php') {
					wp_deregister_script('heartbeat');
				}
				break;
			case 'allow-heartbeat-post-edit':
				if($pagenow != 'post.php' && $pagenow != 'post-new.php') {
					wp_deregister_script('heartbeat');
				}
			break;
		default:
			break;
		}
	}


	/**
	 * heartbeat_frequency function.
	 *
	 * @since    1.0.0
	 * @access public
	 * @param mixed $settings
	 * @return void
	 */
	public function heartbeat_frequency($settings) {
		$settings['interval'] = $this->settings['heartbeat-frequency'];
		return $settings;
	}


	/**
	 * set heder to foribben
	 * @return
	 */
	private function forbidden() {
		ob_end_clean();
		header('HTTP/1.0 403 Forbidden');
		header('Content-Type: text/plain');
		exit('Forbidden');
	}

}
