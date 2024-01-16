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
define( 'AUTH_KEY',          ':&&whE9^4IaxpNlI $|;JPLKZD=I5*c^FPrbay^s@nhdE0dGMj>(J[VS8>n*;y/*' );
define( 'SECURE_AUTH_KEY',   '77-5A]EKQZl,d^J4~H@m!_y|z]^W,B;J)cSUKu?BxB]wrVI,u+L+$kfeu-_sbM|~' );
define( 'LOGGED_IN_KEY',     'S?t8QwS&@yR+_m}Fp|,ShvjBniU*-+<+iRD;ZWgJjnc?ofe3O$!46+|hNA%KR;ci' );
define( 'NONCE_KEY',         'E91?g,+1V32,9I&$xuC99Tr#da_(W}94Ip~?jm;fA?0U,Xs<`8pH7dH|K-39IP:`' );
define( 'AUTH_SALT',         ' ?DrX !w:#INiQfUP]Z`:+nK[/Ndq4U?N(MGm:-TzU?C*@>yD6*Z`:c{.T2YvNl7' );
define( 'SECURE_AUTH_SALT',  '1k,>=oJXuu:WUXoo2xx~m<PUgb^.h7xpZ@%83m~/6G>hiD5%mMx6d$Rjv>ni]~wB' );
define( 'LOGGED_IN_SALT',    'P,v{Ow+.y/$w;=}g#bxG^Y0B1(=^bKXEncR!8/ef9PkZ~r; Z@YJ<$i<)tR(KYQT' );
define( 'NONCE_SALT',        'eGg4l-:@&yR1&oSoS%dO#9vmvCa|)Z/}Ut;XFz]BT[wMz j8T6$z,+JhP8BK$Z*X' );
define( 'WP_CACHE_KEY_SALT', 'F.VR(;;(WZNYPbxo,[[kJr496_uQp}LsEO(87e!O%OJGogE,BM,%N`zy~Ja>!a}@' );


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
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
