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
define( 'DB_NAME', 'bdwebwp' );

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
define( 'AUTH_KEY',         'P<x!r]q~Cu%19>= 935PCY @np07zPUF:zk4>4L#/m{B@KWkX{-&BSiqb5ok:tn;' );
define( 'SECURE_AUTH_KEY',  'Biu;d&PcphZrKUs8THNw0}5p+aJoWip-CE`d61/huxd/!iyClQ&[XEkGZR&f<TVF' );
define( 'LOGGED_IN_KEY',    '0qF3Z{cINu K-3)YX4,kDZwXN0n6RjYo`h5v0nEf-`JZF%:1Ui|AsGp9<@TvYRk9' );
define( 'NONCE_KEY',        ':-Tzo6D/S!(;$:a|&3_$1&!E`|%;Z <z5-2JC 229H<dF;.Bl@LKs[#Ao0&NCw{<' );
define( 'AUTH_SALT',        'iUy#8mbbS;brlx)xYxOf 7ar;El;2}z`~oz$leyM@TNO5(xY~-6Ybz#%X2wQ<^]:' );
define( 'SECURE_AUTH_SALT', 'V`mVmczGg#oGO[eW&DcPlswcUv)s5O_c1c=7jcs:$?BnfE[>?@/b=mtP~ES.b-18' );
define( 'LOGGED_IN_SALT',   '`ilH!Tb+V*y:>C0M2aZKI{@jVU$JDG<#}1nJ)JaM3;wUxZfY(@/v$svC8G@if5zJ' );
define( 'NONCE_SALT',       'TL]ecV~J7g^+b,LED:GWYcI2w-a15w`WN4V9i?mld<@yAJ@--|)&/%Dso,ZN7~?g' );

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
