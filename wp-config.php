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
define('DB_NAME', 'rweabschalten');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'test123');

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
define('AUTH_KEY',         '*RhLmmeMnk#+,yulQ71s-pyo9`i)u L$bRn_ 9?I hjE:o-Gn#iz(bVAx*pqGCqU');
define('SECURE_AUTH_KEY',  'cS+Ok<Rd[R>g[,pVo:!3{_EQm%2pLJR~l.s]m~+cSP3Z?9>N_`egbKPX;Tz-!}0H');
define('LOGGED_IN_KEY',    '1OYus9(]`~|i@`]KKxZ+9iF@A.%Stb#!oG:lt*tJ9uV(.O}~_#):}Q.&kKP`jc9i');
define('NONCE_KEY',        'HX=,0c+i%J 8ElN W@GhuX,OH1Kl?]~qPdx: gt1Uc6{I5WIk?/-M?d{L@B:Vimu');
define('AUTH_SALT',        'I1-q7X{aV>3.!(*EZ<XCOD?5JA%Mp4MLvj=xjKtEZ2dpbRyMk!m+Pt-TB~R06HB2');
define('SECURE_AUTH_SALT', 'i{4lw,)40A,SWW;W*:eY3g/{iIU9c;:~il]~Mi&Y8[zBx;0MA>Zw4vV+>LE_iBK ');
define('LOGGED_IN_SALT',   '`-]6am6o3qHQI^)yQIM4/K4i!dLSbwq+eg0NTIpf%x9|)|jp5vT{W!}Z=2P,;|+q');
define('NONCE_SALT',       '>PTwCq.GfD;^S:tY{)`>B1^V%Q}FyG@djC7T$_j4UCG fHkS&L`d;9[PS=#9lTa9');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
