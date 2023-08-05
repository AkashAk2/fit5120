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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'Monash@27' );

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
define( 'AUTH_KEY',         '<]~D;QdLosCK*LKDY-BoCTTn9eB!Ej(6HOUxUu#jRN[l D8G=/YxnSr,xP|pTFG#' );
define( 'SECURE_AUTH_KEY',  'O,S&.:kX;NIWu.FvM2OkH7AB{dj|%M]RFJz)&]]cckd@al_z}Q/#1f?(Q^,[QTx ' );
define( 'LOGGED_IN_KEY',    '[jF0&o$W?jr[03V-S)b=X6j@Yk)?wdY-XGU^^htIr4`LP-+765Y_BIDKy(1<P<;Q' );
define( 'NONCE_KEY',        '6`fenD#]PF4J$.{aYN!;BeNrmk0sMQ{_WU)u[hL7Y=grkbTM@tFRSA{8],:[3 Y,' );
define( 'AUTH_SALT',        '9}[N[Gz?IO_13[@%FCkS,ZA#2:7LG{W%l*rv/H{}ixWvjm*yuirf~9rE]X^n:Y4X' );
define( 'SECURE_AUTH_SALT', 'PI*v~?OH}9H7Zs?&^)rMB=6$LFoe4]2?exd:5P9#d<Loi3 ,We}dWC?j#7]E2(>n' );
define( 'LOGGED_IN_SALT',   'vg2Uj)U6fJR0-h=<Dn<38F9~<O_ 68D5,&X2>8W1YQ~Z-2_(&^LZ*NdCP8kT(8HY' );
define( 'NONCE_SALT',       'Kw3Q{9X`jU79I-`Tq~96r=%X#|.`v`~}|G%d19O7%b,jc:t-cWnerE} Oj2R_b63' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
