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
define( 'DB_NAME', 'rmerhgmy_2JKwFaRwU' );

/** MySQL database username */
define( 'DB_USER', 'rmerhgmy_t9I33WSIp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'TVUDRJwVvpCzqA8Ii4mCwr2hhrVDbspr' );

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
define( 'AUTH_KEY',          '{[P{w[W$[?^YZH]Yi=H}qlTu6NzxqV_!JsM?p86F%w-YQF{Hs}9UG%>ROHC8,lBf' );
define( 'SECURE_AUTH_KEY',   'wgwyZ8.Ilm g~!Q/~IZ6P<yQ kBHPke~r=5BO~O+4{#YRn,wsT9?4h56X:B3N._5' );
define( 'LOGGED_IN_KEY',     '.E!`1ud,-!fu?RpYfyOqX%,QE{_jKLxjMfvOeyMR_k9]wpR=1`i7hT}N-XWJ}k:O' );
define( 'NONCE_KEY',         'c.dD{Pqqylwr.aa)ilzQ61K9Ry^y-v,h-x0e yvfP0EI=dK6v<KHZFBO3]SVy]sg' );
define( 'AUTH_SALT',         '7mSMPLT/0$~6fEY#3:*/DT~UMTCcerb:k{GmtyRv!yzt4v!* H5=$h}iB:DQ&D+A' );
define( 'SECURE_AUTH_SALT',  '1B+n|$UZ1tM_*MnD8:>1c*a8w/$._G}!3&(75-yLtb>J1xy-;@6`2wWBli:aoF=`' );
define( 'LOGGED_IN_SALT',    'zPWIKa+s<h`za!GL[nHS:;xF#L4QZh4ZQH!l$nEwB,<`2lesPs=?3 PZi{=Mdb=~' );
define( 'NONCE_SALT',        'S=I4E-;$HtxcI)-4oHrrR.0YPUY;IdV>+`?{RVbw[~:3|#LDJ _,:z:=^[P@R6Bj' );
define( 'WP_CACHE_KEY_SALT', '5UJd25>Rx;#HoB$AkE,Y-D,tp!iMP/5`]I#8H]5i^/ie@;gG}fHS%.dN`8%j;scY' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
