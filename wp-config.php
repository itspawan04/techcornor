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
define( 'DB_NAME', 'ecomerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>e^4x%vjd:)ilkmtD5tXqe H}}1{%PTu[_i%A#-QG(5)bCos>7o[4e@E.<vxKj-V' );
define( 'SECURE_AUTH_KEY',  '%@3:pGA(bS)coOojw/yoXeu]G^-[Gh9I`n(U}TdWvT;,2Q$[0AWf#2$&8nIPx%R>' );
define( 'LOGGED_IN_KEY',    '{on91x`$>,_X{~Hr2hK=z&R%)qYP:IQ15cqI.y9/x4dcD}#;7mvbkRT*0y)$SY1>' );
define( 'NONCE_KEY',        'ba1;M3^l`VA9e/aaO`SpFw^Mjml*ny7^F2#s7ib0YYJqlupm:&xZh,(]FqcwM/B+' );
define( 'AUTH_SALT',        '$5[5~Zf-bd)B3fmJLF8gi1sefQ0)uV|9cTfS=TWFXU?&h!6j{g>.k]i u )ug*, ' );
define( 'SECURE_AUTH_SALT', 'BLIxwu+WVHkI*iR:4~c8Wr,t??<M?bMy2EjZ_$&(+8MkL@+S=xM6~nmCa;48fWDM' );
define( 'LOGGED_IN_SALT',   'u/pPG MT}%<#u5zvIhRZ ,2~$xEbaY;R{f-}C((Ej7UQ0+&^:|xy@|D.nbvjrzIg' );
define( 'NONCE_SALT',       '4t#?n*2^{yoBOj`)d$Y0Ir_4mL>NB26Z~JN.Sff&~Y<_j0G*fdByOo$S=yf.^vu=' );

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
