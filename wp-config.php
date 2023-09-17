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
define( 'DB_NAME', 'wp-dev-task' );

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
define( 'AUTH_KEY',         '/0TM/Yd28vf GIdC a=s><dAz,?;@&ZE Ozs:OiD)milP0Z8HLiHkD~(f-.8bC39' );
define( 'SECURE_AUTH_KEY',  '`+kd%gKTKs%oBD$Y[Lmu,gC$UjkoiSN-m(]![MpAbUaE7V6`F7rg_U)u]w1HPr|/' );
define( 'LOGGED_IN_KEY',    'O7qyQ&t(UCHXMc(=^%4usqJ00 M_|KJ/I<-1&7t[iI{s.08CM+UQa(#@^KOy5U(L' );
define( 'NONCE_KEY',        ',F?r 9zev{=BLbsC,rMrE)|8(T*TCc<`[Hkx3)0-PvGAtyG+zo@efzd=|2H+M{m$' );
define( 'AUTH_SALT',        ',}9+iuTjcV~jq[0*|E)9E?kJ[7MXAdx0#4LOiPYS>=t4Brr-lTE`DoM&HS>bQ[nJ' );
define( 'SECURE_AUTH_SALT', 'CC(4Q:eoj2y]qJ w135ZlnY&UUs+?>abCm6i~uXKF?cj*HPAhot}1 a+1QGiN>5f' );
define( 'LOGGED_IN_SALT',   'N&!Bnj$eGhw04|ZeA](if;o_=fNgtZfCN-)gbVgrW0k*+1foVaKe]p0J#0]ZNORB' );
define( 'NONCE_SALT',       '<)VivJcMmOfapMAY:hiZ-1pKv-]vRb&[;e-5?ba{u#0fm(7:`.C5AXCn^bZdJfZ7' );

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
