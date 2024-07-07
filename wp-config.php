<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'maricacha' );

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
define( 'AUTH_KEY',         '@jde~kN[!0dayzv9iX%LkfL<b-F3z.EqyNf[~iu{#ktN#tQ`sUhJM5R_kP8e=|?n' );
define( 'SECURE_AUTH_KEY',  'K,rpYwi8{O$uq9xI#Yh%$m-(L4Vl*/j=jfs_9@72iuOb0xXMfErN^,lqA~__JTxK' );
define( 'LOGGED_IN_KEY',    '{~O6bQ`dh02Z%eJH[xWl9:BHDR.$@*JYw5cl#):>SjZV-)>A?iP7m@R_6e>kG+gb' );
define( 'NONCE_KEY',        'P75@sDg|]ifI;2%V-nKM h7JX7F45|@ICY{#9k:hFeU)|q!C@k~,Bz*SC`T+8j^U' );
define( 'AUTH_SALT',        'X0/!}g_in9Q0(m^WjfV*o&:;::]f5=tg?Nl%t98w(fhTkd9sa(?lW+kykh[Si$KO' );
define( 'SECURE_AUTH_SALT', 'PHlbfN!@|9#56_|}nebD2h7/1mJevjRDUhehkqE!r-cEQ)wp)n1 +P9ux^+m6[10' );
define( 'LOGGED_IN_SALT',   '=5tIR^O<Ku@4!-?O6^8J^,(HU;[ *%*P.V_66%n>GQy3DiHqe`)*R@!E<?^qC.xn' );
define( 'NONCE_SALT',       'eCh<hTDrCmt77$*W=H_AmB[D{pFndAHg%fDm.bG=^k*6K?N{N-|^d[JN*0<wR^#c' );

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
