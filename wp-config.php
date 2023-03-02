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
/** The name of the database for WordPress */
define( 'DB_NAME', 'nkme_db' );

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
define( 'AUTH_KEY',         'mX[43):g-_Q~+g]pC;a#^0(|Y@*N8$9FVJOW+cG!M/.+Q*_Am{EU/1o9.MJ?MVJq' );
define( 'SECURE_AUTH_KEY',  'ImO>W+Mj61S:(0bFgiyCPJNHZ[U{_`L`50&c!*4T(3;PJI2G31@1PPuTL%o_Pd?p' );
define( 'LOGGED_IN_KEY',    'zg/(ORR%O~^-ZhY2%#V.C5M {EL]/-lmMW8lWy]fFN8%Q6c)<xQv9:=.$#A[Vn J' );
define( 'NONCE_KEY',        '#S Jzn@Si@+I=oPoI2t`zheOw#iBMN4;(]$i[H.vjJQ-el(~tLGQR4[MNEr1wl{f' );
define( 'AUTH_SALT',        '.}&{X^{}$[`,)H{&&)nl,#p;}6i_^jt}K|m4mFM$:Mld[}vbvyK=|](^8xx<`E`M' );
define( 'SECURE_AUTH_SALT', 'Z:w00pt3&/=Y.AdN_eD19hQ{c9lj!+psW3 ?ms~g{fZ(2WX*iy)zvv>:$`7-$3.y' );
define( 'LOGGED_IN_SALT',   'nbP=`lns0]V</(ul-Ttub#dZZz%4t<Tqr1^J3wZMZmavIJ1O:dbTwy#pTv*x4fYM' );
define( 'NONCE_SALT',       'Cs^U`&hA`_q;aY,ls*`:<MH&@!b~U+|CT_.RN.{X)tO>/OchG^#Cs#F6opTzXBx0' );

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
