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
 
//define(WP_PROXY_PORT, 3131); // ваш порт
//define(WP_PROXY_USERNAME, 'vvryzhov');
//define(WP_PROXY_PASSWORD, 'Rhfrty347825');



// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'd51oqbqkd14djk');

/** MySQL database username */
define('DB_USER', 'oztincixmgawau');

/** MySQL database password */
define('DB_PASSWORD', 'ZFU1Uhkz7DLNdYb6qcrcdY3NXU');

/** MySQL hostname */
define('DB_HOST', 'ec2-23-21-71-9.compute-1.amazonaws.com:5432');

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
define('AUTH_KEY',         '6392c5cc42b9692aac39411791e8ccbb40c606b86ecfed65e3545bee93f5f33c');
define('SECURE_AUTH_KEY',  '5aa029a94a937ead2120482dc3a0580667e8a32dc31a7cddf2c5abaca13adea0');
define('LOGGED_IN_KEY',    '5389aee4416e1a28b5ee88b400095c353c32660809f635b7f70b464c7517b09e');
define('NONCE_KEY',        'e21cb10e9c23012d2348cbedf80f84a34ef28b69e2261883bcb16eb68dc7b69e');
define('AUTH_SALT',        '596fa98bfbf9a6bbb5220e3983418748c49ef2f233bd3bb6179f3647bd31c0e3');
define('SECURE_AUTH_SALT', 'ffe0b4dabedc7b0514e65322f2dc8959590b875fbc6cebee01e57aa401aa17a0');
define('LOGGED_IN_SALT',   '8a1ba351019d8904791c5efb8ff88199f696302bf2616f8c96e6ebd0c81e5ebe');
define('NONCE_SALT',       '4bf62ee32860f15749ee23940a1f5ff416fac288ca314f25b924c68b4c039564');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', 'C:\Bitnami\wordpress-4.4.2-2/apps/wordpress/tmp');

