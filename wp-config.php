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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'HMS-FTS' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'JC%!91a({mN&tr2u4`D+[a0 c1<UIQ,%2eS*&SZqj)X7$%k)thN)BY$&roVNh35w' );
define( 'SECURE_AUTH_KEY',  'H`3cZj,uaY%2<aZmC{LA8e#VWo>ER5v!cM5w:Hl+l[*!^&QpdA)EB4XS~4}?VQ^h' );
define( 'LOGGED_IN_KEY',    'NmHVmbNBr/ =x!AG<*arX*!nP;@/=KvN/XfIX6kQMk>V2!YVO(3:[h{M !)Wv%Qd' );
define( 'NONCE_KEY',        '5|{_jGp&qNZ$j`>OwvzPQ=`yG+*_BYq3vWlx}uLnH2dP2lm,L?&??q3w8S^Wv}jR' );
define( 'AUTH_SALT',        'EMfX@8~SaV9gaiI5clMWX{Fpq:_uCjL_MxW`@j4S6Q:08s!6>VgV|<qV<6+`FnES' );
define( 'SECURE_AUTH_SALT', 'T_ *Cs[x<X4O$N]/d*:N4f9h$d,oqME(ANaGZ8kc9;LC}`Mpw=H[*Aw>4VTR[5=W' );
define( 'LOGGED_IN_SALT',   'tQP`3%pIm+vxT<J!@2%w<{d4sMJj7iv^I-x/_%Bq|WiXbAS_K{Dk&(+CxB>e(=/F' );
define( 'NONCE_SALT',       '#-Y|IFg$QjD,i$wXstw?k. #MWE`P`>N;,QBrH:!!^n=xYhyAYZ8F5Xha_P~:YCZ' );

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
