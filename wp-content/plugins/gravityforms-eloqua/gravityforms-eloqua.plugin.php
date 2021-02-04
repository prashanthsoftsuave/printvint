<?php
/**
 * Plugin Name: Gravity Forms Eloqua
 * Plugin URI: https://briandichiara.com/product/gravityforms-eloqua/
 * Description: Integrate Eloqua into Gravity Forms - passes your form data over to existing Eloqua Forms
 * Version: 2.3.1
 * Author: Brian DiChiara
 * Author URI: http://www.briandichiara.com
 *
 * @package GFEloqua
 */

define( 'GFELOQUA_VERSION', '2.3.1' );
define( 'GFELOQUA_OPT_PREFIX', 'gfeloqua_' );
define( 'GFELOQUA_PLUGIN_FILE', __FILE__ );
define( 'GFELOQUA_PATH', plugin_dir_path( GFELOQUA_PLUGIN_FILE ) );
define( 'GFELOQUA_URL', plugin_dir_url( GFELOQUA_PLUGIN_FILE ) );
define( 'GFELOQUA_DIR', GFELOQUA_URL );

require_once GFELOQUA_PATH . '/vendor/autoload.php';
require_once GFELOQUA_PATH . '/includes/class-gfeloqua-bootstrap.php';

add_action( 'gform_loaded', array( 'GFEloqua_Bootstrap', 'load' ), 5 );
