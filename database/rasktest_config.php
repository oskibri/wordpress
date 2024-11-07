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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress0be0' );

/** Database username */
define( 'DB_USER', 'wordpress0be0' );

/** Database password */
define( 'DB_PASSWORD', 'W1FC<y81)@+Rf:$' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '~bhE8>ZK-S.}N@+wL6g)4%!g(ft0a{LPyeV,=L[NM-LV.UZsu:/w[5>L|(hB{]{L' );
define( 'SECURE_AUTH_KEY',   'F0a67Ql}FCnnE<jr{y4<n+bUV#UZ] mY$m=YaY1$yE;d2ExS&FIY>;huSLlQ[,}b' );
define( 'LOGGED_IN_KEY',     '~d;t-]7kj^*x@GEHN<Y=e&.0&vvaXv-G]a|ix`U^n@,oC9k<cc]Ei.c}0toYCoEA' );
define( 'NONCE_KEY',         'A<HBC|&K{]&xd_dG:j(u:J5w(X~fg[MW>[8F<b0*TzqQPl<ZdD4{[6pr;Im%D2{?' );
define( 'AUTH_SALT',         'O4Tpc8cYxr|QkMp. MbgKddYMHAdz&D5M96tCw%3k$R:puzl+C#@}Q&t#.r>SD5M' );
define( 'SECURE_AUTH_SALT',  '[zJ`LlhV=;/X!;|L&#z[1E5hMfY$8{v&;z/o.M!SDw5{v/h3kzt!^BD}Uh?L*PdF' );
define( 'LOGGED_IN_SALT',    ',5W];yAzb5E42(&O{wp7n1>Z@_:zPzI`SuAB[Emnc/:f7I:m.&?IxlO^J`h_{6FO' );
define( 'NONCE_SALT',        '0^4zAj#*nwru.mI-,3N4?=>#E=[ud{FJ?(B=P~12kLT>GF6}IAp{EZouNvM8Wxv6' );
define( 'WP_CACHE_KEY_SALT', '<3aZ2PL6_C%pL/ufWeMp%-lUuK@YJIub~il=om<3LkCn<w}bD;pFvEp,`y9G8c|L' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'DISABLE_WP_CRON', 'true' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
