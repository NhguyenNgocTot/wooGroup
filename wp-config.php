<?php


//END Really Simple SSL

// // WP-Optimize Cache
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

// define('WP_HOME', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);
// define('WP_SITEURL',  ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);
//define('FORCE_SSL', false);
//define('FORCE_SSL_ADMIN', false);
define( 'WPCF7_AUTOP', 'false' );

//define('CONCATENATE_SCRIPTS', false);
// define('AUTOSAVE_INTERVAL', 300 ); // seconds
// define('WP_POST_REVISIONS', false );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'woogroup');
/* MySQL database username */
define('DB_USER', 'root');
/* MySQL database password */
define('DB_PASSWORD', '');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{PTK3G:e>1qgQYF<SGE]/@)YCZpI[yUrqRJX(#g?Q!x/&YIG P#vYZ{LL-%?d3gd');
define('SECURE_AUTH_KEY',  '|owzFt!S?g]WtnV/yP~)92pNPl7r#_,%Jv=Nt7+VJe_; wE- jWjP{(@QM|w@$*8');
define('LOGGED_IN_KEY',    'v,hNo?bzm`~FMJSX%8>qltW;CS2XkC]%L1am&b.g^>@Zlv{H/I#R4XE9 rsfn@?8');
define('NONCE_KEY',        '1az;9u$rs_,Z+kmfIS~sP5U_WH&`h:$LT_X`*BHutAWIkd>Mo).i~qjK3{]jnoTN');
define('AUTH_SALT',        'b;00NwIq/3,ohaYSRw5l49&%0HoKS<p{i9WcAJ|A`O8C l*?$#42LW`$0ioS>Xu/');
define('SECURE_AUTH_SALT', 'I)@?H}6&HmL#C&JhypZxI?-Out;tWxo$,Rp4Gc>?cl9n6^{{B%CawBMUFUCc2c$j');
define('LOGGED_IN_SALT',   '/SQ<8~8RggfUsk{%3&%Vds1%QQ^j4{~Sg4@!fKYgs??hObtaPGPE=oS$om;=nGgi');
define('NONCE_SALT',       'AGgY>fCw+EvEdK!Jh1XvW]5Lzs^%6(EABfj?.TI}U<qqLfVi3A@3/4@u$##2.PiS');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
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
define('WP_DEBUG', false);
define('WP_POST_REVISIONS', false );
/* Updates */
//define( 'WP_AUTO_UPDATE_CORE', true );
//define( 'DISALLOW_FILE_MODS', true );
//define( 'DISALLOW_FILE_EDIT', true );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');