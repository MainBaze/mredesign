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
define( 'AUTH_KEY',         'RllMuvujKEM>Yi8M{3:B!N4R_q.phVkt,/`Opd RJ)iX[<ip7W$9lm(6zC1n18#;' );
define( 'SECURE_AUTH_KEY',  '%78l#,&rHlvWs4?!X@I%e--vSKdQ-[>a,rO@sc9HYWsV h{a}v5u^>JQ)Qd68[dX' );
define( 'LOGGED_IN_KEY',    ']4ezE)<(->QYy*<d4Z+=4>:6<u3j<Z-B?#`=qYo3o+yrnkhG3rSj)YsvLP(Jz@wI' );
define( 'NONCE_KEY',        '(Ev6XrJf]Gx>N2o&VlHJl.$eHH<8TAi`oD@_:uxtx0TQ`[ (SFGLTf;[M!3<>0:w' );
define( 'AUTH_SALT',        'uia);Gjt1O6IR! GM87bzNW/~JZy&}O)vJk;qL}Rq#+t$o@GB(X~bfc|/#spcLck' );
define( 'SECURE_AUTH_SALT', '[^}JL8>%*uGQFCCu)~sP6b[7XsgrBN~,Y_/r#H@INiTxZ!aMhf7rXG[cPd,ec<JF' );
define( 'LOGGED_IN_SALT',   '4c;[2;2/oH~ho^G `S:*2g|F7bkO+ c+)V%[sCFTR21<*{+Eh4,MF42WGP YKNDC' );
define( 'NONCE_SALT',       '&qYVeOMX1r1/2GECMovoC[x1!&@r&d>PC[z#uXu:xqY:6j@y.yAru$G}/4~4M;EW' );

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
