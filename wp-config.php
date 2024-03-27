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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'aoqY.U3D@~$cJML &:-94T6j.gRM|==sc|,CC0m:ZSrxtDFfZ+_8J/_Ww*H]io>k' );
define( 'SECURE_AUTH_KEY',  'qk,XyD2o5nz@g;(J5.T%Q,n)j:}_aBL4CSxfp15;`])_zS*A2i wJ(}3E5-WXB/.' );
define( 'LOGGED_IN_KEY',    'p~);,;X{(<1UVqN`_fpPi6hngi+2+juQv-c+!P]ufY&Bix@)F<o@<jZyps!oUoZb' );
define( 'NONCE_KEY',        '(|UM.{5}J}nzTs&MTgIxG(%L4ffW<.e4RlUu;y_gmHYZX-7=#ESNr=8pkY,*1jOk' );
define( 'AUTH_SALT',        ']sEgxy0E[S$kTXat{Cs&@x?fR>t<`>I2d:Q`C?^GC9}IEBaV{0L>(n[ov=lYz3S|' );
define( 'SECURE_AUTH_SALT', '|We$RVfw2-B!9SUp+*!W_026~JZ+i @87l[[~A j5!wSN3Im5xCdmAjJ-tTRZsrq' );
define( 'LOGGED_IN_SALT',   '=F73x-=pTzm#tUl~p7#w4TK3 @q.VNz?{,F<ElTco*>Up@@QADKsX 7O+mxm=Da.' );
define( 'NONCE_SALT',       '2zm#d/^2zAm$+i) 7bn:SJqCL.5ChjsE}^7Gc2wlm{+LaYp7cP?tYk8c`$al=IE:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gaurav_';

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
