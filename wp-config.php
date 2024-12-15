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
define( 'DB_NAME', 'healthcare' );

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
define( 'AUTH_KEY',         'T6+m=KUT[K}Z5m-G}u75O:rem+gBVtqec!~=s&/@QP+X8v9zt-%.oMeKW2Lp{If]' );
define( 'SECURE_AUTH_KEY',  'xf.Xbp/`xbtKpA)kW|B_i1hP1NSLD`8Bv4P !^(kyaaY> a)Ba?0tpxIk,=_[~Y,' );
define( 'LOGGED_IN_KEY',    'hye@W)v:gv x]LAj5jueV]m?x0m(y(-xX|Pv:2ia),}#ZskO&Rt,w:/_fbWB!)-)' );
define( 'NONCE_KEY',        'ezwfbT.1}guGVA{?mQ$?#8ltm8>t3:Jc/yJD/R6B^rWAkwfGky9y7EuelcMu+S${' );
define( 'AUTH_SALT',        'Y8]NI> R7$mG 0N4-=gPsKJa&xo-SPReBtyyfqO6<JBQIDVbnCb,,8D]c$O]Qed<' );
define( 'SECURE_AUTH_SALT', 'RPRlj;qv,Zq7fGqXk3/^}fCd+vJ^#Z4bTK-r&ZPV=x .jyTA+;7h-we7fuyzj^h6' );
define( 'LOGGED_IN_SALT',   '!6BXb{b<L2_p_ zmQ&1d@xh9+4ru$6f,$&R_g@qF+tAw:VGwP.{B}1aaXOQR56:n' );
define( 'NONCE_SALT',       'quS%6T>w8SI.,W0.N^j01e0NfV2wfAU4r$|-~@_)-T0w`Ak1-nSjK&l],R<]BS2q' );

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
