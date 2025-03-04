<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'Q1VmRy89TjM4Y147LFFdU1tdRnVnXzVFVyVQeDFgXTdCcmZYVnlKPy85TWprMSNwPyVZQEVgKzYyUGp6SClbbw==' );

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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'YQY#Wb]@*mckR^vnD}8AOZA(T9{IDcO#!f{UvTm#=ARFKs>IMO4Ay)|oc3%7s6;0' );
define( 'SECURE_AUTH_KEY',   'o[).FO3Vqu$vo/W3m&f+-CM ACCi#8<%p$UN01&m0JS1t5%BX xKw_8/=F,sV,oT' );
define( 'LOGGED_IN_KEY',     'nTHXVJ#kn>Qr`1Z;W2p]Q$ijA2(6Q|[//UEp`x7dM.p] ql?BNQ.&xS;ZH.4-T}t' );
define( 'NONCE_KEY',         ' {^$Wtj|EF)})qR|8[?18%USP3{^ev7GhuV|Sw)/.vv#X6kER@%ExAfj|]N5MSz~' );
define( 'AUTH_SALT',         '7W*k&eLTBlDs;ZgH^~Ig,AT,FVi` 7CX@nwA(3{.g+n*Xg@A60rpa^^k+#tIhx$?' );
define( 'SECURE_AUTH_SALT',  '|8qPN;,dU<i*^oOq3DZ?cmpDUcI}NR:|={Z,@Mxln=6w([kgEl3ZOAG#Q,28*Q2e' );
define( 'LOGGED_IN_SALT',    'tN|,m9Niagp(t$qJz.n7L[Z=[j_qV58zJ%U%*Ff*.Wub[*b$odP5}H%5_GY{fj}5' );
define( 'NONCE_SALT',        'kUqqmxA^Z8~-eor<a1FsGJUoD%Muq&@Q[^s2;p/r]9D{rI9iO~Y/98:6L|Bpo5H>' );
define( 'WP_CACHE_KEY_SALT', 'd5GAi=rm6sxG+6JYIz`{)].SYKj*_IEh4To{:Xis@I*x>H*RA{E|umgcR.RCD5WR' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
