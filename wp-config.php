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
define( 'DB_NAME', 'custom' );

/** Database username */
define( 'DB_USER', 'admin9' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '|%2&vJ (74GzPY6BFWz=Ua,PBOn 8*4j1>EMjoX]kYfz^t<<T]]|>jWSI::T*.?Z' );
define( 'SECURE_AUTH_KEY',  'T461jnpYL~GB%[J;6C-J)RH74ti6AhmPL7n|J%J6q[ )65agacEy{9H#pG+%p`w^' );
define( 'LOGGED_IN_KEY',    '{h+st:_^6>. 7Z+ga%r:V^=n}6FzNq4Du:0@p|~05a]K@[+FlH#bwJJ/!-NKoA/b' );
define( 'NONCE_KEY',        'vrN);WS9fZGt4^hgb[oXuifak_m3qOms(I]yqM. 6- ?oG*5;FlJ:UCd){t`#E^4' );
define( 'AUTH_SALT',        'BqXD>o@?{BUfP2BRP&{uhDtVXMc|0Moj SqrJ1lMB^1D~8O.PhcV~7?b6S3YZ0?/' );
define( 'SECURE_AUTH_SALT', 'o9Z[k$>tvrESyy{qL3vB|0;.l?d:0Hu@m}y:m}R-IYurJ8m#ulj;E}A--$Twh9&I' );
define( 'LOGGED_IN_SALT',   'B##>lAcp^Z?-*7w@0PYcpYCIwF@TbzBO(-<&9/371gp.Iv-l,qt2w^BG%t0W#Fcn' );
define( 'NONCE_SALT',       '8.r7s?N3BM)+yby5>,=l^cDU.>,Nn>nVMIs;CGMnREswRxAS<E+Xo`yHK10}@pT4' );

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
