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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'QS^-&7|yb]WD0!hw1g`SH8PNnFMae=`JAka@}EY[VZZO{!gV&W$kb5AX(`@rDw^P' );
define( 'SECURE_AUTH_KEY',  'eU4R4G3E^{h8O@sy}KiojPCL@}Om/]p`Lb:.7?-vz4/vW2s8OO;ON:PviAD||0qG' );
define( 'LOGGED_IN_KEY',    '#+}~e%ed< |5(xy]^wq@I#*`>yNKu=*`z|h?RTg2{~Fl-;:L-xM.VwKXD[#2N|q~' );
define( 'NONCE_KEY',        'K31L/JzfD9wq[Yyy|4%<%cfAG*^l,r8a8s@)(k_]Sr@:!_e%0>X`zGFow41:zpH4' );
define( 'AUTH_SALT',        'S1NP:|f7|@5HjO4=FF_,#QxcAU5?!(|xuCmu?HoD4E?=oONRem:ri=)xpP{#k[Jx' );
define( 'SECURE_AUTH_SALT', 'R#1R]r+[>V^P^FR8}w*s%uqF@.2E>O71T(1}Ox;nqAlFbG)RQ.A6&z!C1;HjB+R-' );
define( 'LOGGED_IN_SALT',   '5Uh7aQz|u  ;$B@.j6=^;Rj0&W`eFlargN@)N/gkCQn/|fOLlZ.,*G]~,)MIlq+7' );
define( 'NONCE_SALT',       'YgOr.2eFf/:kwLPI?rp**9KOoJ7vIH.fOGPzuEEv8i[Y[6)=;Jl:[Bg^*BZj_=Ye' );

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
