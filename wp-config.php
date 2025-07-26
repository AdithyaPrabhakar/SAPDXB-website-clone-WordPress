<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u983114563_QCKMj' );

/** Database username */
define( 'DB_USER', 'u983114563_stliV' );

/** Database password */
define( 'DB_PASSWORD', '7JOVzgxigs' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'D;m`(P}=BT|mBm%QZ9xtm9yBn#M<oGCckkc55PfpYtB?H.j2cn,$%?d{5iF?>JY%' );
define( 'SECURE_AUTH_KEY',   '/=ARst5#zFnO`v>f#GDzAA==58n$eaR&nu2P7gO0=%lFg+h[;6{V4Bo)PnPix[7q' );
define( 'LOGGED_IN_KEY',     'cQE1$A.p[WEDPw|^G5:0om[ry/AfDe*L3-xZ|dr&tK)CU;Jao*vGlsldO4<F-O<W' );
define( 'NONCE_KEY',         '[G-:#Zjnu[EGbLBR^E|ZHf Do/!i_QZdKF4kd/U?K<55H{%r3cRCs p7W3fi5:3K' );
define( 'AUTH_SALT',         'htoR/J1j nMSSU~Zc}b8b$F-rL2iH(rGo,Pery+<a1n`fA}eFjfdDHWb%~}n!5i+' );
define( 'SECURE_AUTH_SALT',  '|%T:~(&vI|kTZ6QU6[r5UrK=SyGcV7:`bpjLk:N}Yav[@u3<%(6G(bK~~qzQiqEb' );
define( 'LOGGED_IN_SALT',    'N81wNDG6=},^|99 a&%99e<EIG*pVMY[Plnc>047>>3~UD6h?mcdN3O~I=CMc%-9' );
define( 'NONCE_SALT',        'IvXxBMmQfX[7T>VlgLrZT@e6Nn[nPS!VmY7gT3AMXQaDy[,|pu*Sq~7:yi`ZKJ:o' );
define( 'WP_CACHE_KEY_SALT', 'LHgt|Vt=<zi,7^|rq^AzK?n-{^~,ymU-#UN,m$|*f%?avyrY=4(vNbB;kg;*Z;3<' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '923b3df330eeac51713f12a7008dae15' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
