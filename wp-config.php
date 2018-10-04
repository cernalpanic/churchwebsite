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
define( 'DB_NAME', 'churchwebsite' );

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
define( 'AUTH_KEY',         'ILNpnu.9%TzJUu(t$M.V..-_Xop/ra/B.!H Kd>L:B@IL!b.c~ozj?.YouHdG7}q' );
define( 'SECURE_AUTH_KEY',  'Jex)tweS`vK3Py}#Ea8rQu:I}4tn.q4l`6_+PD<.iII ds2JQHT((I6%oL3k{b}$' );
define( 'LOGGED_IN_KEY',    '=PuGOB;APcV_d3C*_Tl(7},v>KB8r H@ln^YtSeIJ75PR5QMG@`>#3_b+P*$8OnH' );
define( 'NONCE_KEY',        's.i5)W|%{P(!m|V,K X69u:e[BXv7Nq=9V]@8 Z)flujwa<5 V44,2dm^<e%XNwM' );
define( 'AUTH_SALT',        'Sef]YU(0j{x6P{rGDA/Y?INS<2DzRN;FU_d]<Vt&zS)P(mHW5lAxm/eg|-N`>xtp' );
define( 'SECURE_AUTH_SALT', '{_}aPHIzs!32{+}$QB8b.9w[d#~.(J.CbOxTR:gz?+1pwTL*}>C[%#;XNZJ4|w{4' );
define( 'LOGGED_IN_SALT',   '$.6#!#aBmuy8V*_iG:)WZy4C#%3X[Le~3:95%._5;PdYd7eN1FEC=tTy#tIj_?q ' );
define( 'NONCE_SALT',       'WNG0=m~F6g7%~^<z)lZBI0S$!W*3X2sE(_#gaK33aL:V;{|eu>Z98}|aK3vg&F`k' );

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost:8888');
define('PATH_CURRENT_SITE', '/churchwebsite/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
