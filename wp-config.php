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
define( 'DB_NAME', 'company-profile-wordpress' );

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
define( 'AUTH_KEY',         'ftNgkHfq.=>G-TOe+^m$1cX2g.PP-Z Hh!xxe&<`o.e{o~f@$KXs52D:6C)4E|Om' );
define( 'SECURE_AUTH_KEY',  'Q5Gm8G6h.eFy:wM=M[>U7X)oa,).(+wPRE>_/vxeLWHXR[A;Q.a#B[q$l7puywB2' );
define( 'LOGGED_IN_KEY',    '^-gmSRD.V?l10]T/D^xi!!7[~wc)prr?zVw@fie3rGYH-K4x&YTTZ;$XfL|Y1UP[' );
define( 'NONCE_KEY',        'g:*0JD4Yd4dspU)Wjwf=_TKP>d(rK OCx]~<v=Qdn%v!KANx;T9yRZi|bHm4zhv]' );
define( 'AUTH_SALT',        'GM0/v]yn9H3o?y/r,s~t+P88mq*;QQ,tnwTOLyG<nwP!^Lp@774f1Btk{F{~*4!K' );
define( 'SECURE_AUTH_SALT', 'l@Q)mm_GL=ilD!BHHujwwkSHwsDx!>WrSO,<EdbMD(sJd1B8WUzAfmrpd[5?Nhqo' );
define( 'LOGGED_IN_SALT',   ' ^{-u,k]3+(~C1tIL@Q]10ns;E?37-Dv^7;Me>~f$6?o&,4W6|AP&a^kntlz-Z3D' );
define( 'NONCE_SALT',       '>!$WH6f!K-lE{p7]L*aRwq|Amq0&FAJ_F;<Sn;jrk=bVCzb|2`2q?%@=O7#m8+J&' );

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
