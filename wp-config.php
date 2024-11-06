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
define( 'DB_NAME', 'wordpresss' );

/** Database username */
define( 'DB_USER', 'wordpresss' );

/** Database password */
define( 'DB_PASSWORD', 'yD2$Lg9k!4oHd$' );

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
define( 'AUTH_KEY',         'w)^KocP7>+ZPvdZ&NZ2Nd8~%yr0u^p3mq+@r0MxId(3{4Sjv!5.n+f}}30~>zkuT' );
define( 'SECURE_AUTH_KEY',  'qxV+Pv,Eh/?+O$,Xj9xu8|+8h:88Nqv2(m<2@knY#2{7Ky?-gcw!Tksc.k-dJmC|' );
define( 'LOGGED_IN_KEY',    'bZ^CY0=V~tiffqAB^%p>f@#Qd3*!yRDU;oE[o(^B;]:4_eYTw&# )zu7Hf:V-&ew' );
define( 'NONCE_KEY',        '**)RfYVo30al$e-jqzm*0`#|XXnlEeD;}t%*x%Uo;}rAh0&]k>A@_EmKtK_Ox$Ay' );
define( 'AUTH_SALT',        'laU_>_ZKb;~O]lLH5Wh$.@dV#nbVNTg&b#5U#)hptug>v#fek95}0x;cY;g QlD-' );
define( 'SECURE_AUTH_SALT', '>q2z-j#8f0}7pjeVplLc{+sYa};G{Y~LaR7z2Z)`Itzcj2Zf2bjo=,L&Y!Kz1w>s' );
define( 'LOGGED_IN_SALT',   '}1A;$fW$YtM.2r+zs@TwSa)ipWYQPhY4)<^<GRM[k{M=n-.t&3l).!NZrm}7<*ur' );
define( 'NONCE_SALT',       '[v$HUPH0$b)FU3|m/YdPfB*0V1W35J}oJQ&b-j75Sn6F$7s&e:~pL[pRa`CQn.<*' );

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
