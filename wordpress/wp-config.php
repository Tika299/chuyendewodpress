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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'W>gW9w9Xb;bY8z{z3}af!<#/qvO#=$g[YH+>a08s1NR.*s)n]4Z:XX0s5IH^uy(;' );
define( 'SECURE_AUTH_KEY',  'bYhD8%:D~7}/Sy[7Dh*cEV2;n+e<[O:n-mI&vOuP*APQjRp0b0 OB67E_6m,jx;`' );
define( 'LOGGED_IN_KEY',    '08#+L5oxK]=KfWtcsHoLpa`JfiMI9$$myw<h]47teGhC}wT;`@S%Thr4o}&ZsvcX' );
define( 'NONCE_KEY',        '}$Jr.4eWqZ//yP40$Jvvs:zLicU|Z=5R&{vYmjoq|vi3G#W/k-A|rybjgR3|A~/7' );
define( 'AUTH_SALT',        '^+HM<fSAe$5 >!hv:z6|eKp`w$9!Z&kyPxd^`g^uz[zC20lfg6k[_x%Cu,BlE6(k' );
define( 'SECURE_AUTH_SALT', '!tXh@ExD!#q;}{SjJI:dJ@vW$;QD,o:XI24=s%Cm&VXL5FQm5}lv.f8u,uu!B?LP' );
define( 'LOGGED_IN_SALT',   '-:?|6:8V:8Hf~4Q+elnfI+D>-z2R^15d&@5f8i=xZos+>8ChxV1q]-{X${lO]Gc$' );
define( 'NONCE_SALT',       'i1:c|B+g`^Y/b3i>,2v%OB }vof/dP#&efx$/& (Y?X]Q.VxSafM,2ya(a5$9jR>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
