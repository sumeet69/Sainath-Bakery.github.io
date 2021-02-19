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
define( 'DB_NAME', 'sainath' );

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
define( 'AUTH_KEY',         '3iro4U^GFD|Z=?yrzkDKQ&i5J#QU?.Mxqw!A$X]N[ojxd%#VO+?~M6(JZSvn2`us' );
define( 'SECURE_AUTH_KEY',  'tgiKPV+S:AJx{ ~xT/~:|j;GF>Tl;.}Mj$`8N<+3l3[Q[6+bR,viY:>$jWtZ$%;9' );
define( 'LOGGED_IN_KEY',    'F5-yoTAjG^]QJ1r8sGQVDFRJQDH3U6a>4zeH4aLHh;NgM 3o3zhC6AhiJIxoNh1v' );
define( 'NONCE_KEY',        '4Q-Uh*JqpCq0}OWbSE.*#0:Qs_BOjj_,s1(~M(+;/UX?&h%tN|3iyIJ4+,!5Ko7l' );
define( 'AUTH_SALT',        'Z`?g4nbqpg})@OI`l{;:)HMi*JPu#yP%l~4t{i0?LyEe`R(p(dNK,t$m?]GHOxH<' );
define( 'SECURE_AUTH_SALT', '0ZQgsqD7u D*>xeM?>,D>agk,uvl Y WKW*Ybb?{ALo8PA=O-ncdOv-1vkb>ac8Y' );
define( 'LOGGED_IN_SALT',   '(OObiCt+E}jTM,4`-qihK)fPlwMt$D5$9F|-lrm2v(+}||i?{Rkr(N$pBq#LV%jm' );
define( 'NONCE_SALT',       '|-X@2c>>S(0pJe_:r?cZyOPc-PFP1(@wuc#$j@QX@1 ?R~I+k5WtW^,MTOh2jo,k' );

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
