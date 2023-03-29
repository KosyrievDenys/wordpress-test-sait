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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '&],n^7VC4;8d;Qqe/d:&;GQZ!g3u7NElQ=5aK3p)O%r$o$,9zubHG?H9zlVrq-LF' );
define( 'SECURE_AUTH_KEY',  '*Y:I@4/<9YRuCq.^~4)z_gkj+PO1R_uv|`3/,2=XA3RLGGDj*0`t3x=4B8_$(!L;' );
define( 'LOGGED_IN_KEY',    'qdO.70,O&B .c1-u|{OtdRget(1#!@R=m?hb{h2rDO=@L[ uo.dboat|.OO HPp0' );
define( 'NONCE_KEY',        'E${ Zu<,2).)_1++-Ui+3 DO##wH_KRg*],k.N_lSoNaj>4QqW<.54~Rm`U6_>pj' );
define( 'AUTH_SALT',        '}EZ!kx5i25|wu%5T;/(Nal4!c{dI6[@YD=!>0Ld#J$v)2_)Ubeo[N;6<-tJV z7+' );
define( 'SECURE_AUTH_SALT', 'XvXmsjew&Gu|S#cJr2z,+^zNP>Fxcsm/b_6t&|vHxlwqJR7h,G{qgQL=v$dmHyIu' );
define( 'LOGGED_IN_SALT',   'TYAWu9.3;UY[a`mBY|5$>o^~7<]Agw+xB`Lh })h_~Z`N7cq`x*&T{o>K-;nIt1c' );
define( 'NONCE_SALT',       'o81mbAv7!K0D6cvE6?X)(i._tl{TqiB%o++6:/U#!{4-e5WNCwxvsnV3!Ov`hB-u' );

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
