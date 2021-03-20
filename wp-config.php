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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'headless-test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3310' );

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
define( 'AUTH_KEY',         'owxC-(CMIL)ymQ+ qmFYcSnJ7Oy;<<7x<BM+Ob1;EGWj7.{M/1+f]GztP{ppL^,s' );
define( 'SECURE_AUTH_KEY',  'PXMAwl@j-t;M%%cS2Xm>W0Rh3JvQT|u8o|=KnIdZMu^_r.OHO1X6<A,l06r6F{a3' );
define( 'LOGGED_IN_KEY',    '-@+wyjlmhJE1tz.6sO6qjCIl-nJR3+k@1^H]V>6G)X+^_O<m8_}3eLX/<@~)WPFj' );
define( 'NONCE_KEY',        ';y6A^D`ox-,aM9P&fu*_&Lx+d%8k+v8:o]hMVD%Pc0ARvDV,hK2mLfI%&~fBZnKL' );
define( 'AUTH_SALT',        '~wU%HM.cLar]_#%H=H}yKrAwgeZGeWo<e4qImH_e#Oh=>k;KkeX-.c#Q}3Z!hbG,' );
define( 'SECURE_AUTH_SALT', 'i*!+F q5^Be@G|i11>l:&fUpWnsjD<BH{@n8I~>Q$9ok*7,3S&2<Z$60$66cx>hZ' );
define( 'LOGGED_IN_SALT',   '4<N# _x| )=$%mVh3}HV$#3LI)^_$<LCAy[4jw#MO#=nMRm,U,N;6xDZ0[GnkEr&' );
define( 'NONCE_SALT',       'MqTh<XN!>0o#BO6{%)dnIWb{v%2&45itu>(spIF^tB~HevVV&F}R+QaKoS%uZ`&a' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
