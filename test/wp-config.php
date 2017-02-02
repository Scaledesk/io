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
define('DB_NAME', 'interior_wp306');

/** MySQL database username */
define('DB_USER', 'interior_wp306');

/** MySQL database password */
define('DB_PASSWORD', '[058q(5pS2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '5zf2uzn2bdizllq3riyb6feketlvoj0fe1sfatleqhm2pg0onct8hlrpbamr814n');
define('SECURE_AUTH_KEY',  'ctf5zc4fjhwrhiolih3g2qwrsvqmrq0mdc9ng6vclmbx7bba2p9rsoi1yjil9vdq');
define('LOGGED_IN_KEY',    'kyxpmaci0hgc17hhe4wamke5k9yhhmspn5tmzm2fzmch4jnw4ljkvfoa9rf4asnt');
define('NONCE_KEY',        'xg83vnmnv3xoiugyup7bcap7fhy4v9tlw5ieriph7mt0clq4nbug5hscryeukzgh');
define('AUTH_SALT',        'gb3tjnmtcdxu5bewqv3rar1ygjenpalp5juvlkrth1xm8gjfzqzkptkomhdvbgeh');
define('SECURE_AUTH_SALT', '1sz6igewdenr9hm4oz4cr9ezf82kkwlyki0la1qxgnk5h9oliyjcgwsl7iuz21rf');
define('LOGGED_IN_SALT',   'wwpzxp9rlzonavij9gogv8m4sk27pb9c0evbyieyg1z01wytppxqwltv4lmdhpmz');
define('NONCE_SALT',       'zifq7zxmrw9a7n0d611oqlshw9e4uco05wqiqi9g1awssyk5qyrif4qpxwf8mpum');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdm_';

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
