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
define( 'DB_NAME', 'dichvu24h_demo01' );

/** Database username */
define( 'DB_USER', 'dichvu24h_demo01' );

/** Database password */
define( 'DB_PASSWORD', 'brEOETHJvR' );

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
define( 'AUTH_KEY',          'bz{jZ9AYSHIv<icF?m|%NbXUBubZWO6)s6HsgPq]>x,6a.J{pu/:CBOQD2]PiM6%' );
define( 'SECURE_AUTH_KEY',   '3  IXpQznWn%ba5()D 4_9ao T7[^HH>Y$?<MW!xk|-GNas9U%^#H91G{WRj=63B' );
define( 'LOGGED_IN_KEY',     '*q0S-P}ZIR> M-`O078;BnJ6 L`05=tHb-I-&`I4z`dC3i;<C]Ds@av.DNElVMDQ' );
define( 'NONCE_KEY',         'Jy`o=q.MKrk!$:z$CB&RQq(5B@`&Vh$,Vm1l>4Hp@4=KZ w7)@Bx+#-hhpX=lUhR' );
define( 'AUTH_SALT',         '|Y{UiVd58SHcnVkV.gRl?3C ?0%OxZs]^`XUrUX:|u*Sj%:aaM{#y<0+{FW7PXDS' );
define( 'SECURE_AUTH_SALT',  '8 CY1G>D}bb7+_t.J lhboZd4N|2Q(!&6vh9$l>],1[`k[/jNZE]Y]{Fm[vzR9RZ' );
define( 'LOGGED_IN_SALT',    'b}Bw H[5om>PA!eL7`*^FZ2EIttuz].;XpRk7z`q5=G4gslq|oSDdKmpfgn<743!' );
define( 'NONCE_SALT',        'GymF{Rs*Kle&:,0qS8-:wqVb110J(`{Vr/whe6*(Qc>Rd,07*V3EMt.#/Go=B]5X' );
define( 'WP_CACHE_KEY_SALT', '<R(^Bzz]6K&=#ml2U~WnN] 3hNP1*./KHW<uU&W?A<zrAETCi W8ja;@ryZ`mq@k' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
