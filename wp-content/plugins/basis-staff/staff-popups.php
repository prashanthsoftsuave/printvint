<?php require_once __DIR__.'/vendor/autoload.php';
use Basis\Staff\Plugin;

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://indevver.com
 * @since             1.0.0
 * @package           Staff_Popups
 *
 * @wordpress-plugin
 * Plugin Name:       Staff Popups
 * Plugin URI:        staff-popups
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Jeremy Ross
 * Author URI:        https://indevver.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       staff-popups
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'STAFF_POPUPS_VERSION', '1.0.0' );

$plugin = Plugin::instance(__FILE__);
$plugin->register();

