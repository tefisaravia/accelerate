<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'accelerate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n:x7f+]fyZdOq#R!~~*SW)D_+T?ebjAwtpk <&7=cD+LT_ISfyaG6?&X8tl^h :P' );
define( 'SECURE_AUTH_KEY',  'L:bNBtyYqc([,PeqIN(Wx-R9JpTdFrbF*G}~s!j4jLq`tqmi{Z0$1hM3H~A0V}SQ' );
define( 'LOGGED_IN_KEY',    '^6f[0XE_AR_|S Q;>L_||8c0#UR!r[_v24n=bNI?zC$>q!!)MAmL.$dRtJb$PFL1' );
define( 'NONCE_KEY',        '%HtJ?P]1:9iee-@w>#yt9h<umV-N@1[ irydz4&Z|#XF>od1D_fj<_tRr~~6*sP]' );
define( 'AUTH_SALT',        '/K??Er^9e00;=w#P[OlZf]45PJQ/bRc w_X>_C(SW4uLpr/|eG&Bn_xS}R$H*N<S' );
define( 'SECURE_AUTH_SALT', '|/dsI<BK:Tf^})$XYGs%gf=.z=)W;60mAc2j2VtI8yHKoj+$B}Q$xtH0}R##@z<w' );
define( 'LOGGED_IN_SALT',   '.+s_gfm]VU?(wQRlc{Ta:yTEppN0s-iDm%l=wUi[Fdxu.$~SCx?^9 OPYYu[RJr7' );
define( 'NONCE_SALT',       '6GWM:zw<!=xgYYS%rk i<4y2!BivhJ!XS1 u[6VRMGMYLp7kPB#jg[[@)p;z5O-q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
