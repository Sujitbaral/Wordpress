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
define( 'DB_NAME', 'intern' );

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
define( 'AUTH_KEY',         'fc=%z]IZu?;pZQs[z>1o&f1-S##a&S^c2ZQGz;%&Gw02T>)Hi8d^!xov{R+jF&Yc' );
define( 'SECURE_AUTH_KEY',  'n!ePWJ=C@+$Z.Ya,+lKg;}u?=yqqK8q;a.$hS+^$?sX3[o{S+:K(|FUl_>t7u+rh' );
define( 'LOGGED_IN_KEY',    ' 9En{b< E4d;PR[.XAc*`uJak,m(fXCJP$T30J<_Sh#fD/Fgg)ceImYM,NKT<hF(' );
define( 'NONCE_KEY',        ';3>=$L+{!9aXJl].S<iUmt58tL|Bz$m?yC]W_i]61/no;$cSBb9|tao hE5a#h>+' );
define( 'AUTH_SALT',        ' vKnw:+Kn(Q6LN}:-7oZYAie+o9 dk_4.yAb|+s/g2<G#W;/KhM[P9_#zzuU(v2o' );
define( 'SECURE_AUTH_SALT', ')j-OH6L4f$r#:=%6_COeB{?rXVLtkcsJ~q?b+a2n`1pQ;xUk~8n:Ens v(^Cwzft' );
define( 'LOGGED_IN_SALT',   '<n8k*4,};`I:c7z)0=iL=$O15U.iqP)E5H9n ;]1hj++yx?}y@y1C!7a;FYEn4er' );
define( 'NONCE_SALT',       'cR_ZX j/B<mb;B(O{(]lQ<VM]yM0$OmCJ6L[rEy[uFnNup4e)qzyQzlZ8N.]4j_:' );

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
