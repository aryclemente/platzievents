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
define( 'DB_NAME', 'platzi_eventos' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         'Mt[_Fu=Uz_L+0.r|7<k{#}0[<h]Y(;&{LmqL^^L[Mry||d$1m{!]qGjE&._tg fp');
	define('SECURE_AUTH_KEY',  ']Z*xU9#yI+b:o!+U{eI5T~hgJHDEMRx;[1L]oUZs<16UX{d-,GcDB1DXl/Tr?kqG');
	define('LOGGED_IN_KEY',    'I)+!rQ<FG~m(kk&0IoB>1Vg[(~qNxHJb##hX]ZLHFlIo`TOJlGdkdHi9.|tsM4,M');
	define('NONCE_KEY',        'Mc1P+sPm9e-7p|,F:au3>+[VzEz$oNcL#[179aWYmQzd3*9Jy3B{+F$8Q:3d]jfq');
	define('AUTH_SALT',        '.~(8Wx9D0@a5Q=<cusfj9Lwkq@?};;;7oh93c]5uG|m!2(C6l#4wS27TN[WzU4])');
	define('SECURE_AUTH_SALT', '`1YZ`uuWLcr?m3rvaC6C.[s~[c]m]1K<UG<4m/(.L$B`:8%r*rzHykV)m~)uO-@q');
	define('LOGGED_IN_SALT',   'hJ|8Z c` S.U--W9UilzJ[/,4-LpR|(N9<+@jv5zM1{}:Ex:gDO(sXE!QSz/NZ0_');
	define('NONCE_SALT',       'O2O?/k2UU1b7sjMc/^~Y|j0`iM9!6MfN&+ZPxy%Y#gm3{}|&!sV-%pgQFO^n[!+V');

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
