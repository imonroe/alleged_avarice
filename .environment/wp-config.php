<?php

// Include composer dependencies, if necessary.
if (file_exists(__DIR__.'/wp-content/vendor/autoload.php')) {
	require_once (__DIR__.'/wp-content/vendor/autoload.php');
}


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
define( 'DB_NAME', getenv('DB_DATABASE'));

/** Database username */
define( 'DB_USER', getenv('DB_USERNAME') );

/** Database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD'));

/** Database hostname */
define( 'DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         'r-?#EX[<FFZ0z>{ZDU}wU6 nHZpK#@|= ~wYimRsJ[HG7CfB:@|]%AZf@w0s?8^J');
define('SECURE_AUTH_KEY',  '$>6X!M]9e/5.EjZZoGU19mr.a`D?VEx<zQ|$.dm-s+Aa@m52e&Q0L~t/B_&^:a;@');
define('LOGGED_IN_KEY',    'r2mLXhG].gftKK7eAGmb MnG+Tm+dw9|7LCt)cf/RZhm:^!c^-+eX--8&b<<;+ [');
define('NONCE_KEY',        'LHpQ[=k-A/+W*CX:||-VZd]7D22TAT1*Fz*!OAdxX^m?a@wx;0-a+H#(>Lg^k<tG');
define('AUTH_SALT',        '|#E,nM|NtY<|AM{dg)zBVJ@*[~ELm:_)+4_sIJW#2uO+[c,*mOTTf2!$,5!L&?0{');
define('SECURE_AUTH_SALT', '&LcXj+p>#+`Bs+gAGNmG_( G<L/uzQN^! cW=bpSy>om3=}uuEoEypeO3x-PxLKe');
define('LOGGED_IN_SALT',   'F-F/fLV(++{gAp^7|y/GS%Qi8x|eoF^,$H=RPQ)Z[u(SOP-h%F^ImCHC.*r2Yq%y');
define('NONCE_SALT',       'BW`c{Lhodj^BYOp}Xc<:@aN;5^f+iFHDHK=1~>R@#JTS-gfKO3308#a8W-$<8vrx');


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

if (getenv('APP_ENV') == 'local') {
	define( 'WP_DEBUG', true );
} else {
	define( 'WP_DEBUG', false );
}

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
