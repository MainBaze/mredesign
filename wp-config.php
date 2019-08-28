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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mredesign_db' );

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
define( 'AUTH_KEY',         ':!5}FI`y1#oiB),xbgowTlXX0Z9]]5CGmA59]_bB_;W>7;*aa1w.h[R|/~b`c_u8' );
define( 'SECURE_AUTH_KEY',  'zUYn4qmMg%d2^Y5|Kf;*4nja>IsMEo:Q0B0]Ith# j]qc0D!/ZL:M2-Y|`I`IVaj' );
define( 'LOGGED_IN_KEY',    'id!q`y>6_w+xx%o<e0VsZk71j U??jO~HC9URA[`XW/R1tV*3G6Aj{Q}Rw5C-*d{' );
define( 'NONCE_KEY',        '.jueCn=N4^XYIry0f.&sFm<cwC;5RJdzq {D3&)T3*9?GK>15TdGh3OS2TytWj:X' );
define( 'AUTH_SALT',        '!Qbb7Af(7_5DEpD>AMg7IbZnwgj)d)kg<aB]HwhbH:p8&8xkl7ugbUI=cjr9Tjpn' );
define( 'SECURE_AUTH_SALT', 'CIK9G SE7-XL#W246-+=FFne66`lU$^If}H{_ 2b9hGk<1t87`<aOL.PCx2>gZ7+' );
define( 'LOGGED_IN_SALT',   'OQ_@`NN|a3;V`lxLryE>9g(cOQ3?1zyK`#o:NU(!(-:`7(8,z:3dk*Q]vtN_8;0Y' );
define( 'NONCE_SALT',       '9{rA&vk=P27e)F0WZ]_[DiC8+KshWDhsh<5@3qtFnA%%v?CvjE>xJF3EJzwHphO;' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
