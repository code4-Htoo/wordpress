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
define( 'DB_NAME', 'my-web' );

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
define( 'AUTH_KEY',         'KpLezY8Amj6ZVUeUuZRpVOccE0XoDWbdzN6mUToOsCbaDzj3CaXUaPLnorW1hFJV' );
define( 'SECURE_AUTH_KEY',  'SQ0HBgsPUjom6BcuClR1y6uidS9TzWoeJ4mxYfyWaALpT9hUslF0ul0uOhdW34aK' );
define( 'LOGGED_IN_KEY',    'exZpFnIO9TSQYOktuy2mww6ZBcMU0RV8AcyO07T5ODjmJzlNShbw2NjJ6h29DmXS' );
define( 'NONCE_KEY',        'jA7yxjf7UedyIhAtKuLLkXXPEqbi8a8d9r7XasHesOHKfUpIMqv6fmY0pQR1JSEY' );
define( 'AUTH_SALT',        'nOSD1AVbEU0FFxCPy3XMYxeOxvN7DhEzgcsANRjg6DyylsAvKIabzxWdtX569GXr' );
define( 'SECURE_AUTH_SALT', 'D2H9SLEwHwslg74W51s2vl4Wqp7oRBbiSS3jMU52ICyNWC22l8J8nU4o2G1UFOAG' );
define( 'LOGGED_IN_SALT',   '72V9xsil9Jvdeb8pJPQR4hZ4thSIglo6mX3EyxbCn6b3s8AnusPnyOY4hqhg11Uj' );
define( 'NONCE_SALT',       'L2bxA4ZqSTUEPBzD77xUursjxXkxoiAdlWg6GNsX4HWHtdprhSPucT2Q2LhmsyyI' );

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
