<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'makeABlogs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'smU4yQqZSrBBplBrc0qXri3xA6c11oEOFN08UzIZd8TtuzVxeB0ZQS4KKpNf3Y6N' );
define( 'SECURE_AUTH_KEY',  'dn9Vy5CrvyLTXpfukEuXZ38LuxZ5Zrdk6MvCSHKyZfT96qqOPMPJpEcW5St1wOgb' );
define( 'LOGGED_IN_KEY',    'vYdKAAbJjQ2fYcocI4fomHm9SX4tbsMYktNnUKSiI15erPLhncNmhY2PIRQUHODa' );
define( 'NONCE_KEY',        'w6fW2i08EcKe31qh4N3wptjNL96EiDk6QNguolhXpyyb3keFtYVHX3Ev0XEGIixt' );
define( 'AUTH_SALT',        'ARWgfhOW7TgpEgVChlWnK1qbZAHZjedEb79DFO4Q8O6gsmrirslZsQFU5UH46ed4' );
define( 'SECURE_AUTH_SALT', 'QBH2Saw2Rv9aTPPGdl0sXM6GeRYN437z1jeRjV1tQdJNoZVE32F8rONrttsaAvco' );
define( 'LOGGED_IN_SALT',   'gv08uhs0TpYTYuUTon8nUVGuhOav5Rk8UWlGWIUHzp1aprMBkQdEXAnJ6bjdwo8S' );
define( 'NONCE_SALT',       '2xnZvvFBvx8bxzxWxSbnsGKHbhWz4UTEkVGbURWglwZP1igRV1UowmxVpEZYZeih' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
