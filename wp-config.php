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
// The name of the database for WordPress
define( 'DB_NAME', 'wordpress' );

// Database username
define( 'DB_USER', 'root' );

// Database password
define( 'DB_PASSWORD', '' );

// Database hostname
define( 'DB_HOST', 'localhost' );

/*
// The name of the database for WordPress
define( 'DB_NAME', 'sql8591269' );

// Database username
define( 'DB_USER', 'sql8591269' );

// Database password
define( 'DB_PASSWORD', 'b1ZLUCz8IC' );

// Database hostname
define( 'DB_HOST', 'sql8.freesqldatabase.com' );
*/

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
define( 'AUTH_KEY',         '6rfPfYXMFx3NT6PjLDaigc5h0wqTK436KmOvIpe3DYpWPX6xV3GaVr0Plo32WGvg' );
define( 'SECURE_AUTH_KEY',  'kxdOBJKEi0cmaDjuqAgSq6dDlGM8XpRoVXlcpkE5964CK0rnv5KHmBblbrkgyxpi' );
define( 'LOGGED_IN_KEY',    'flL8X26qpcqXL1sqBsPK7etpTujyEI1rYIQK9R8TABvAvI43IBjuG9kjy0qChbq3' );
define( 'NONCE_KEY',        'UGfMJuQj2l9cpovKIGpjtwquV4PMfd9Yj7wDjXSC3VgpwnLBuv4ZOog6JZWRQjZ9' );
define( 'AUTH_SALT',        'AR4vUBrpH9e3P1MGhiyeZGYq9L8AjUWd4Yo3SYOttBxOWOlicfqYP2Ud0f5S6aVQ' );
define( 'SECURE_AUTH_SALT', 'ecxaG5dhjhVgupO1ow0MmYVualDOUp5Knl4W44ydUUiDXt4RY9auXiRZk5A8EjtW' );
define( 'LOGGED_IN_SALT',   'a16s3my4pkaS5MXWyoIF48bhH0bfAIdNr7ytMA33nrJBI3EvbFJhhP1XINGsnWvG' );
define( 'NONCE_SALT',       'YugtN5wZiKP6zganVE550M6DzpBmseGXPUeWWmKnPx7iNwKGDOI0XUov7NiEmGZU' );

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
