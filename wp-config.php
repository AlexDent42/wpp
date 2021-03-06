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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'V|/Yl8W6wo e:5|Js:eEe7(A|&/DU#P`$j![uo)(#U`%]Ai[s]jP{_Afk`6;MP#r' );
define( 'SECURE_AUTH_KEY',  'O?$t#9 5;*C0aF@.Q2[:tbye>8rs3%#!Dou^mZB8D$O~CQ11W,A/j/tJ)c:UUKT#' );
define( 'LOGGED_IN_KEY',    'w7MpQ%Yp+^m:+.9`gl)Pe_sO7(RL`[Bn^F#no}x2]6k8PN<]J*(~&SsxGdV&#vE;' );
define( 'NONCE_KEY',        '.C/vkc}E^(NX!8Yd)e {e[]88qlo@ !rPY8hw)J}Xwv}$p%aN%^/iwCu#,YwfsC=' );
define( 'AUTH_SALT',        '$gaQ)-(N+HNghJ9*Ma7;RGiv}q-!nxXEGDwSA 8MPU9jhl& UlO=R2,9_EB<V^=F' );
define( 'SECURE_AUTH_SALT', '3E/vx/cTymb)qc1w:7J]7t6n#a~c`@2~_sjD=ETkK8%wwD>A+shq->amiv(v:24d' );
define( 'LOGGED_IN_SALT',   'hz?%?w*y3Hr_SZH0=GU$o<u@.m.[%dSet!mVn~6!I1}(l+H&dMWJ5ootq{9:leS1' );
define( 'NONCE_SALT',       'T]A5en]a4@izCh~lgG$0_6DBt$1]!Mk?$b>?.1#[niI[1Y#at:X:8:8tAuv]fQdK' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
