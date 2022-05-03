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
define( 'DB_NAME', 'hello24news_db' );

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
define( 'AUTH_KEY',         ' C455JN<j*64W%jdyEI}Jd&Y!OPkFLZ-wMVfQqw2D.+0EX<`oa`% `3BOkY+&Zay' );
define( 'SECURE_AUTH_KEY',  'zuo bzQfh?,^#6YWF?%>eX2#fpiEg/v&l5IF?h6XDUz6e`2,;}j)iz+T[Mmv t+r' );
define( 'LOGGED_IN_KEY',    '0(fCVcwq([)KKj./EHD2,Df!ecYPo<yWh*)<@j5Pw6=_%#sZnjQ@;`1 {$C=#^TT' );
define( 'NONCE_KEY',        'gsyokIUC3t5#b_q9`9~tJo`w 7nh?T(QU3?4}r-_GjLQaKY-L7mG;Haf!I[4mDX%' );
define( 'AUTH_SALT',        '&p+.Py#ABK!ExF?|$B`#_{6,,*[x(CH<k{UrtW;O>}vS^e)4U/peN_ynJDFh?33 ' );
define( 'SECURE_AUTH_SALT', '89rK2`+Vy-Lv21xs:,dN)o+(eT,tBd|BJZh^(Ja?#uybo]4JM/%-yl-mF!<ODPV@' );
define( 'LOGGED_IN_SALT',   'rK@A*DJ%}lilYC#=i;k%hSnT/Br=qp^+%P0N_+gPAHXskRCd%iz[ U=1s>6boPMS' );
define( 'NONCE_SALT',       '6WHl2+F:t7XWxl`hvR3<hJP!*ZP[!fdf)Yb55D*+DzCn6vL<k(-5%bTsL!x,B]bk' );

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
