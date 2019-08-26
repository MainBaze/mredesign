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
define( 'AUTH_KEY',         'V[t#E1<9#% 2TLYbaf[OBNmspg)gKPlGQROf~KF[CQVVYe,)>aDhb:}kTFjagxVY' );
define( 'SECURE_AUTH_KEY',  '=}Y*fAf1s1pRvv!ZH!Z?C_<hv`$g?i|Hr[$pMp85r0$]bGOMenA f~IkjBT 2jdX' );
define( 'LOGGED_IN_KEY',    'mLz,,J!N(A&* h6},r?x[U|-4lr`Y!k&g_~4Lg+nTsl]V>:j7U7#]N~rLga+2{`O' );
define( 'NONCE_KEY',        'R3k6y_5o9>Vvn+uDxEoKS!.g+~QO-&e~*?lO wGf]s.fDP3n2u{=,xFG.;vg3&[h' );
define( 'AUTH_SALT',        '%sY54d&NMK0?$a-ZH|u? {DM>:t4Vag~Rq*pdL:3KB *Sy0][uJUg_-Zjx91&KxT' );
define( 'SECURE_AUTH_SALT', 'pI$p dN^{[m*]e#$!O (F2^1Nif%9t(S12p((#mnUG$64j+n:0c1Fo^(A~6eU;hl' );
define( 'LOGGED_IN_SALT',   'Wzj`pd2tym#.;uE@#1t`:[C?B44wc1@LaE5Q.fo:EVsw[S2xa%Y4= =l&MuU>B9*' );
define( 'NONCE_SALT',       ',G5^ByuHOmq={0||Z%q)c?;r$.&9>dn#6d;DfKYv&Kvr11Raeq_|v!*2$v`5r,5j' );

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
