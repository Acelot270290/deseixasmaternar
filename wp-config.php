<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u805504236_Ec1w0' );

/** MySQL database username */
define( 'DB_USER', 'u805504236_WEVpJ' );

/** MySQL database password */
define( 'DB_PASSWORD', 'EUqK5xrg1L' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          '587}u_V2+vt{QkJkw<Z55iF&GD?W4s=PJ_ku4d{zK[qrzRrh={qM*mgOebT/( Pm' );
define( 'SECURE_AUTH_KEY',   '.T0D@N($_xAbV=q}pr|CfD:5y=|HB],y)z!0TP6o}JZR,KZB6GZOQ/owhTT]@<Uc' );
define( 'LOGGED_IN_KEY',     '^)t1{!B>|sFArCnI0a?>x-yfTo?Dp]kub[BFEg!^wHTzR(t/<wfHs&& 4#a[fTMm' );
define( 'NONCE_KEY',         'R{/-#[IFcd+X!CytiU4e3HZgszf[YNE%]C+?g_O4}AV/ $I~+]7w#a3]v;KJEdnx' );
define( 'AUTH_SALT',         '/fO1;x{UFMu(0/_M$2[Jj2kBB,~^^~j*jf3FhA?/IOYu;o5tAd8Q72*:P/St):35' );
define( 'SECURE_AUTH_SALT',  'CY x?8^P&<glKUF=9kCmXEC85E>A.izsbz([b]jY8N}zo2J7X]4&N<j[)45[_O5!' );
define( 'LOGGED_IN_SALT',    '+71L^qljDfs`V^iX{F9I=t83_(C]=^onOLS4fwlC#0?s<l8U93U(!M6|RUq-{~b[' );
define( 'NONCE_SALT',        '&Um: n0gkH)%lc{_dXo_h/!hM}t)HoXBEA9[ztS0~XSiRx3K dSz[8;_#,SiWtpF' );
define( 'WP_CACHE_KEY_SALT', 'M[|77@wek>p}f<J]`)%,]nO BTVpwX^<P#A+Z9?7Yu4z*Ivn}0:+9<HL<VG_zr^2' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
