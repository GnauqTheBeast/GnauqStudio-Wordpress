<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'Gnauq-Studio' );

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
define( 'AUTH_KEY',         'HP9yVWzeJKlxZTtztnGJT9vig2UOh5NXYogBw68heZvwc6bmK6XeYoD41i3aBr4o' );
define( 'SECURE_AUTH_KEY',  'xaY1VSpeuyA5Od6WhrlpuoxhIjhLOcBgXc1KqL8BMNHyzsV6jUOscyPZ7yAzqlgs' );
define( 'LOGGED_IN_KEY',    'CHkAXoXIufWzFuX7B6LqgJQCEBMJmehQnassXwMPSez4FRkTjh1LAm25hHKnDXLy' );
define( 'NONCE_KEY',        'AAAHqj8l0qdsIjA9RgcPw38myNlmVxRh5AWUo8kWQzPhTivTP4IzP8dNeTnvdJjM' );
define( 'AUTH_SALT',        'Aw4zKtbKy9f3XVOuZDy5uPZliXxx7ZOhO2L3rX55M4Nu6tcFZws48Dg0Y43mrTVM' );
define( 'SECURE_AUTH_SALT', 'n3ogqtaBmVv8ee76QBhVflaAoE3M5H80i6SBLcOlMQjz7wGyx64S8zdH7tOLvRz8' );
define( 'LOGGED_IN_SALT',   'WT1pVhpMJsCqmMxG6iAPQSCY9giopN6duhm2WW2EKLE5Mr0uAQsTPCEqgqCQ549r' );
define( 'NONCE_SALT',       'Esf0a3QK6hgMYqBm24mpSJS34VqqwoK7WqnyJqnpPThITG4Rk3Rug5zgvnm03Y11' );

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
