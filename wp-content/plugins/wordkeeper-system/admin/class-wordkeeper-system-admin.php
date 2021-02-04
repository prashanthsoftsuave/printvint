<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://wordkeeper.com
 * @since      1.0.0
 *
 * @package    WordKeeper_System
 * @subpackage WordKeeper_System/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * @package    WordKeeper_System
 * @subpackage WordKeeper_System/admin
 * @author     Lance Dockins <info@wordkeeper.com>
 */
class WordKeeper_System_Admin
{

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
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version     = $version;

    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {
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

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/wordkeeper-system-admin.css', array(), $this->version, 'all');
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {
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

        $screen = get_current_screen();
        if($screen->id == 'toplevel_page_wordkeeper-system') {
            wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/wordkeeper-system-admin.js', array('jquery'), $this->version, false);
        }
    }

    /**
     * Add settings page
     *
     * @since  1.0.0
     */
    public function add_settings_page()
    {
        $data = get_userdata( get_current_user_id() );
      	if (current_user_can('manage_options')){
      		$cap = 'manage_options';
      	} else {
      		$cap = 'publish_pages';
      	}

        $this->plugin_screen_hook_suffix = add_menu_page(
    			__('WordKeeper Settings', 'wordkeeper-system'),
    			__('WordKeeper', 'wordkeeper-system'),
    			$cap,
    			$this->plugin_name,
    			array($this, 'display_settings_page'),
    			plugin_dir_url(dirname(__FILE__)) . 'wordkeeper-system.svg',
    			3
    		);
    }

    /**
     * Render the settings page for plugin
     *
     * @since  1.0.0
     */
    public function display_settings_page()
    {
        $message               = '';
        $settings              = get_option('wordkeeper-system-settings');
        $options               = array(
            'heartbeat-frequency'  => array(
                'default' => 'WordPress Default',
                '15'      => '15',
                '20'      => '20',
                '25'      => '25',
                '30'      => '30',
                '35'      => '35',
                '40'      => '40',
                '45'      => '45',
                '50'      => '50',
                '60'      => '60',
            ),
            'heartbeat-permission' => array(
                'default'                      => 'WordPress Default',
                'disable-heartbeat-completely' => 'Disable Completely',
                'disable-heartbeat-dashboard'  => 'Disable on Dashboard',
                'allow-heartbeat-post-edit'    => 'Allow Only on Post Edit Pages',
            ),
        );


        if (!empty($_POST)) {
            error_reporting(E_ERROR | E_PARSE);

            $user = explode('/', trim(ABSPATH, '/'));
            $user = $user[1];

            switch ($_POST['form']) {
                case 'purge-form':
                    switch ($_POST['purge']) {
                        case 'purge-all':
                            $response = WordKeeper_Utilities::http_post(
                                'http://localhost/purge.php',
                                http_build_query(
                                    array(
                                        'user'  => $user,
                                        'cache' => 'all',
                                        'auth'  => CACHE_AUTH,
                                        'path'	=> ABSPATH,
                                    )
                                )
                            );
                            if (!empty($response) && $response['response'] == 'OK') {
                                $message = 'All caches purged successfully';
                            }
                            else {
	                            echo $response['response'];
                            }
                            break;
                        default:
                            $response = null;
                            break;
                    }
                    break;
                case 'settings-form':
                    $settings['query-strings']        = (isset($_POST['query-strings'])) ? true : false;
                    $settings['protocol-agnostic']    = (isset($_POST['protocol-agnostic'])) ? true : false;
                    $settings['defer-javascript']     = (isset($_POST['defer-javascript'])) ? true : false;
                    $settings['heartbeat-frequency']  = (array_key_exists($_POST['heartbeat-frequency'], $options['heartbeat-frequency'])) ? $_POST['heartbeat-frequency'] : $settings['heartbeat-frequency'];
                    $settings['heartbeat-permission'] = (array_key_exists($_POST['heartbeat-permission'], $options['heartbeat-permission'])) ? $_POST['heartbeat-permission'] : $settings['heartbeat-permission'];
                    update_option('wordkeeper-system-settings', $settings, false);
                    $message = 'Settings Saved';
                    break;
                default:
                    break;
            }
        }

        include_once 'partials/wordkeeper-system-admin-display.php';
    }

    /**
     * purge cache
     * @return void
     */
    public function purge_cache() {
        $response = WordKeeper_Utilities::http_post(
            'http://localhost/purge.php?cache=all',
            http_build_query(
                array(
                    'user'  => $user,
                    'cache' => 'all',
                    'auth'  => CACHE_AUTH,
                    'path' => ABSPATH,
                )
            )
        );
        if (!empty($response) && $response['response'] == 'OK') {
            //All caches purged successfully
        }
    }

	/**
	 * purge_post function.
	 *
	 * @access public
	 * @param mixed $post_id
	 * @return void
	 */
	public static function _purge_post($post_id) {
		if(is_admin() && is_user_logged_in() && current_user_can('publish_posts') && current_user_can('edit_posts')) {
			if(is_numeric($post_id)) {

		        if(false !== wp_is_post_revision($post_id)) {
		            return;
		        }

				$post = get_post($post_id);
				if($post->post_type == 'shop_order') {
					return;
				}

				$url = get_permalink($post_id);

				$pages = array(
					'pages' => array()
				);

				if(!filter_var($url, FILTER_VALIDATE_URL) === false) {
					$pages['pages'][] = $url;
				}

				$home = get_option('home');
				$pages['pages'][] = rtrim($home, '/');
				$pages['pages'][] = rtrim($home, '/') . '/';

				$taxonomies = get_object_taxonomies($post);
				$categories = array();
				foreach($taxonomies as $taxonomy) {
					$terms = get_the_terms($post_id, $taxonomy);

					if(!is_wp_error($terms)) {
						if(is_array($terms)) {
							foreach($terms as $term) {
								$url = get_term_link($term, $taxonomy);

								if(!is_wp_error($url)) {
									$categories[] = $url;
								}
							}
						}
					}
				}

				foreach($categories as $category) {
					if(!filter_var($category, FILTER_VALIDATE_URL) === false) {
						$pages['pages'][] = $category;
					}
				}

				foreach($pages['pages'] as $page) {
					if(strpos($page, '/wp-json/') !== false) {
						continue;
					}
				}

				$pages = json_encode($pages['pages']);
				$user = explode('/', trim(__DIR__, '/'));
				$user = $user[1];

		        $response = WordKeeper_Utilities::http_post(
		            'http://localhost/purge.php?cache=url',
		            http_build_query(
		                array(
		                    'user'  => $user,
		                    'cache' => 'url',
		                    'auth'  => CACHE_AUTH,
		                    'pages' => $pages,
		                    'path' => ABSPATH,
		                )
		            )
		        );
		        if (!empty($response) && $response['response'] == 'OK') {
		            //All caches purged successfully
		        }
			}

			clean_post_cache($post_id);
		}
	}

	/**
	 * _purge_comment function.
	 *
	 * @access public
	 * @param mixed $comment_id
	 * @return void
	 */
	public static function _purge_comment($comment_id) {
      if(is_admin() && is_user_logged_in() && current_user_can('publish_posts') && current_user_can('edit_posts')) {
          if(is_numeric($comment_id)) {
              $comment = get_comment($comment_id);
              $post_id = $comment->comment_post_ID;

              self::_purge_post($post_id);
          }
      }
	}

	/**
	 * _purge_term function.
	 *
	 * @access public
	 * @param mixed $term_id
	 * @return void
	 */
	public static function _purge_term($term_id) {
      if(is_admin() && is_user_logged_in() && current_user_can('publish_posts') && current_user_can('edit_posts')) {
          if(is_numeric($term_id)) {
              $term = get_term($term_id);

              $args = array(
                  'post_type' => 'post',
                  'tax_query' => array(
                      array(
                          'taxonomy' => $term->taxonomy,
                          'field'    => 'term_id',
                          'terms'    => $term->term_id,
                      ),
                  ),
              );

              $query = new WP_Query( $args );

              foreach ($query->posts as $post) {
                  self::_purge_post($post->ID);
              }
          }
      }
	}
} //class end
