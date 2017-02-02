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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'interior_wp595');

/** MySQL database username */
define('DB_USER', 'interior_wp595');

/** MySQL database password */
define('DB_PASSWORD', ')S53[Cp6QI');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ockv1a8fvbkt6g9av43jqcie3imkittaklgmvgshatbkazerjexaz1nomajf1mzx');
define('SECURE_AUTH_KEY',  'aqdwkvr2gqmdeml48ztmnamqotcfkkltayky7thsv3fzo9n7jhgwkbvfzmxdoudr');
define('LOGGED_IN_KEY',    'ocq895oyjr5xa6ymbalmt7xnzijvgrkmpbp2mx3tklvxniojai0jg4deazoctwa3');
define('NONCE_KEY',        '9ke8leaw8rwhagtovgreol9volnvht40mgpzgucqenk5nbpurvafzdyv3wdrieix');
define('AUTH_SALT',        'kmcb80piox3lzku8jwlphnjwnumsjjyz4mhehytlvghm6tse7ii60jfebhuwqriw');
define('SECURE_AUTH_SALT', 'lxbaxp6nw0xyv4wqg1kkv7u3ozeum1dbst848kifkf5kwbt75c4j3d1mjqj5bj5a');
define('LOGGED_IN_SALT',   'glkf8jqxuo41rnfltcdlojvw5diojef6sapwd5kcdtasawbscodomwporg3nitt3');
define('NONCE_SALT',       'nsalx6at7jeluiacxb2az21oo1y0mfhngotl78giny2hwmbai1vn1te1eqlmxxr0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpn8_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
