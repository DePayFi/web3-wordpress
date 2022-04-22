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
define( 'AUTH_KEY',         'VJ} .: DM52y@fJ`dM}-!_yc]E1;3[qH<hDO7/]KP!oElv.N)sB6r3^VIQ?l{Oz|' );
define( 'SECURE_AUTH_KEY',  '=G>^z,}$}6mnT0C,W6ZydE*J`aTL@TQK}:<}>ix|Ol<0x< ~=,/_HmtkM:)g^z>^' );
define( 'LOGGED_IN_KEY',    '_j49kAQ6hLD`>9kw&f]hVBd{rg{51F:E~::;@/*4kK`QtE4JO-Q_-N0BTv$t/RB-' );
define( 'NONCE_KEY',        '{D#*ezA^1fLjXgku;dY6TBI5C?+CtjOcA#AuYu@bu2Ej@9U-nAp=Ef(JhI<7an7!' );
define( 'AUTH_SALT',        'MKL:+<jNdD_>7s7gnm<I::xVm))M~ 2m*[BMluvD]k~]^SBM$V.RUIt6pF^Q1i/2' );
define( 'SECURE_AUTH_SALT', '3;N|K+m6-J4dmv_&Ul1V[+t3Zly[)vYHUCV8OLNTF5.^R-yYD|(4y-XiDjf@:q9`' );
define( 'LOGGED_IN_SALT',   '#kniiBAA=F8eN&5z8nq[q-gZ<zJ1GZSny.NCz[3;[Qp8P!dIO*[ZFVTqgSX[:ia(' );
define( 'NONCE_SALT',       '`ZB1bDuxmI/>dK7U0aJ.nr{Q@c,v3_4yUX@qwO#C-EW1Pgz#BM4w^ *d$ !YvnH?' );

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
