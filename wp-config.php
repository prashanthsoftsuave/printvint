<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'printvin_diamanti');

/** MySQL database username */
define('DB_USER', 'printvin_diamanti');

/** MySQL database password */
define('DB_PASSWORD', 'oyROV-HdJ.SW');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('WP_MEMORY_LIMIT', '512M');
define('DISALLOW_FILE_EDIT', true); // Disable File Editor
define('WP_CACHE_KEY_SALT', '71ba276f2a325de263f40ee2ddd6cad8');
define('WP_REDIS_DATABASE', 1);
define('CACHE_AUTH', 'pnpIuP0DlEyqjhop');
define('WP_CRON_LOCK_TIMEOUT', '900');
define('AUTOSAVE_INTERVAL', '600');
define('WP_POST_REVISIONS', '2');
define('EMPTY_TRASH_DAYS', '30');
define( 'DB_CHARSET', 'utf8' );

/**define( 'WP_DEBUG', false );*/
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);


/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_general_ci' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^rb7S!PRQ^Y:kVu-_0%sWq>77tfh&F{XDOVG6I&:Pi5al@O!*uhn v9W~;vzK/9.' );
define( 'SECURE_AUTH_KEY',  '/T4I{CxI~&.lmW4t2h@`453L<hM* @byxEQSs5#N wWp-b[gl[T]JApx*Thdcbz{' );
define( 'LOGGED_IN_KEY',    '#z?;9YT.Fg&>4`9~99fKs(i4!EkyUSX[ox3jC`,.$tVbEUVWRWi<i|r-!&ln[I9~' );
define( 'NONCE_KEY',        ';kp/`m]vw0q<S-g$S?lzA0R)+[yXP*5Aw,&FoW?xUE69B@$A_^v)fh#+ZhU-&@d5' );
define( 'AUTH_SALT',        '[0P<%by<)Rn/fV9q{TqQ,2TJT4401mA79XAIG@v54mW@V4&`=KhbYYcFM^e+)Zz5' );
define( 'SECURE_AUTH_SALT', 'kbFt[XJ2=7Qvtl_:w6~s wp[.Izn23<xGq;4yN)|Yz@,~q={ K:+]D<GFM%q;U,h' );
define( 'LOGGED_IN_SALT',   'AYcf1Cc#44f2ky,!:&XEqDu8c>nl6G_hOkit;wiR/WBK+U|7y^vCFiZa?ZOb6$Z*' );
define( 'NONCE_SALT',       '8+_XuHIp4]b3wy`kGo*kKXKj J%/#2u2 Dx4vSW@oB,&^S5iXq7!}tW?vHp2~nK|' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
