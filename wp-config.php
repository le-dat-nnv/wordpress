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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'datlhph21045dethi3' );

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
define( 'AUTH_KEY',         'p6HPOPviOmEtNohdtUJcawV6HwvHdD4mjLIRZifLhMbQKUz2envYhJFnhu7nobqT' );
define( 'SECURE_AUTH_KEY',  'lsk5Q8PJxM3ZNzZhywnmdui0M97MvEokFj0ZymXomqsuLuAexwsT7IoGetaeaaZR' );
define( 'LOGGED_IN_KEY',    'p0lAtZy1tP1UTCDOqKe1QX1CxiPbBtocGNqbHbqusuNps98VA3ZIzaTqbbJeH47k' );
define( 'NONCE_KEY',        '0Z19mGQrbitMCusanTR9kJ10iJLgFMmBlT8IeyNwsyhlEFQzgUiBKoshOJf4nzZp' );
define( 'AUTH_SALT',        'DcV94cpcrwOUcBqvJM4iDviQI5sI7t1dH7c7BqCzqLAHu5zgrXpFDHwiuOPyAjMs' );
define( 'SECURE_AUTH_SALT', 'pqR17fwAUEeslGXrylWBW7ICY1aU8tZyZeCFbNlAvCfurPdR4Q7dTTOPdDNrVGph' );
define( 'LOGGED_IN_SALT',   'llruTfQLl5c31R0s4XiBF3U5oZKwVYGJyiAjpUe5FHbpNShUmaNlTuAu3rHAFOll' );
define( 'NONCE_SALT',       'Fd7PtZhspmSMUF8XXsh4asbMPCH60UoB5c10mjq1R5mb08QoUFhaQrDoNs2cECUW' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
