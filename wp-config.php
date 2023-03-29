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
define( 'DB_NAME', 'cocktales' );

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
define( 'AUTH_KEY',         'BP9b{8$-+ X$mK`R}kTU:Vf^m>il.tyv51$|h;42c}^00GXJ^6-.@v`PRh*R8w2c' );
define( 'SECURE_AUTH_KEY',  '+c0dvA[Y_lm{cvy0PLy`j!&f!p~J4z5/M{Ze@m*(ICi1#_J3*kBgudqCfdmSi%At' );
define( 'LOGGED_IN_KEY',    'bS?kpfp|I.K<g8Gg_3C#}.*OD|.bRD}MY*;J@dzX`9H}%4K4>n 9%Y!(8WmSt2Fo' );
define( 'NONCE_KEY',        '=:FXTU`@pPa]JBr{-8@#A={{q9];D)zK>Cf|gN9#>27d3FH()_[siR&P9=2s`kTd' );
define( 'AUTH_SALT',        '*4yg2`Efs2K7DLv@R<3Pg*:_?}J-jAdA:-}j3wadk:h)SH.U6piN-yJR,7O:O8Ny' );
define( 'SECURE_AUTH_SALT', 'cVqEdR5UB>qwBB[k{.i; =LIf:Y.7A-FMV8Chj}v18tn0jaAOeg,84/O&]/X~:-_' );
define( 'LOGGED_IN_SALT',   'I,n,`5zqz ]E,))(z6a,{~s?[zPW%Sot5S+/OJ&vLqbTA]q@@Av[JsNu4dE5]V>d' );
define( 'NONCE_SALT',       'm3G8jJGiVK&Tbg,92fi|R{qaVlnwiWHe/;~w,n:Yh^QI-1AjLW|4.>iggiF4@dbw' );

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

define( 'WP_AUTO_UPDATE_CORE', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
