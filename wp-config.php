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
define( 'DB_NAME', 'herbage0_wp0118' );

/** MySQL database username */
define( 'DB_USER', 'herbage0_wp0118' );

/** MySQL database password */
define( 'DB_PASSWORD', 'f7bc2ef6b54f05ae9ce5d5568b58a467' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '%+I~;zP{u?^*GtrJp?}qKz+NG1hx*.4aa hvkfVxBf<r.NgP-n}|Dha7Av1kDS;g' );
define( 'SECURE_AUTH_KEY',   'r6(Zwg( ?nFeyfc7`f%9%hwTv.9fT;/)XIcXs;Bdw!1#7pL,qT4z<UR_,nN%Iu/Z' );
define( 'LOGGED_IN_KEY',     'A9C]rBtv7%)2CqgI]-rT5$#(liWPOJ&%.;F1QxFHOz}nBl5Vu~E.w!P:n`0zr}o ' );
define( 'NONCE_KEY',         '?H[uf!+,6y8`~6.g70{xh(o(fVNcjD@D=P?7ue}X_s^U:0[s$SG{B92h{+>!!hv/' );
define( 'AUTH_SALT',         '8)mk*dNfOzf~P_r~AK95DWYLOG~uw+ ;}+:^bH-lTL#oP<E;J|@75UQ13@$qEc]t' );
define( 'SECURE_AUTH_SALT',  't@tse$qn=6RiVIiD;F}T(X<W5iP-qJf-XRZ*Do#CT*>bX1I;#-Dr*2mG7>yE KE2' );
define( 'LOGGED_IN_SALT',    '1OpBkA9|)X7tI+optNnzlx>(2Q,FanX@]u~PJET_&u8|A!_5)WR]5wg&BOwQ8EWd' );
define( 'NONCE_SALT',        'lRY?Jk[r^[6yCVsT%Wyy,~<r9Lk.B*-;,|Gg@T>{%?_P[FV#ad{dn5,l?c-lOcg0' );
define( 'WP_CACHE_KEY_SALT', '^~B&,s,Jg3$UPX=%.n.{e-neV^&46R[5X(?{|b|d1V4I()l2:g_6qGBb/h?.A{Kl' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpls_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

