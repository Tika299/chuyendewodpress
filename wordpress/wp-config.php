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
define( 'DB_NAME', 'wordpress_581' );

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
define( 'AUTH_KEY',         'tf%qO%EuW;p)cAGqpUbf<vWS*xitfn mRo.JyWbKJ3MR,34^T83/{be1Ir;ne(T3' );
define( 'SECURE_AUTH_KEY',  '=|%*bpSH2w;R<u4;ApP:,Gdy3f;ec0LU35-{#eO!-ZIjsx*^Dmek&]#90Y83Aw9J' );
define( 'LOGGED_IN_KEY',    '7Dc:cq7MnVO;4d2avM+-7. vyxx`^wO<A%lO!jD]v?FwRAN}Zsh+0~S&Uq[z}z~^' );
define( 'NONCE_KEY',        ';=#9|c;6ALK{|2(IN<mJ-8Ew}m6* mV]wmQj~,T|H6jZkRtmCp8(XXNzxY|0k1A3' );
define( 'AUTH_SALT',        '^rg/A,R N>]7^ q)e]a,%f=4wYCVB.V*<1q;RCs8P8]>;rDT 4a[c4w;-wz%V{Q4' );
define( 'SECURE_AUTH_SALT', '&_yL@HBxIAQzaj25.3i*w|X3co$Tn?K_p`qh#zjMt48+f9Hdz>k{^=|@:g1=gwYn' );
define( 'LOGGED_IN_SALT',   'g>_cgQ[AJAJ7nl7i<7TV[F/Y7R 1D{h/w80wtU)EX}!}/Pj<_VA|_XFEo2Y#=r1:' );
define( 'NONCE_SALT',       '|n~r6^n^nFtOf+)+WKQuZW.-T2d-T[P6_(|>|:U~7BM_B@l9EIyH4?5tu??Upw-~' );

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
