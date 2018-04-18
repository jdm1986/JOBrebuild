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
define('DB_NAME', 'JOBrebuild');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
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
define('AUTH_KEY',         'Alf[,^z;s #J}kw#X4?~X| vrkM=[0JUWDaO%,{iRB0H:&8HNCvzckaz@49i#)bG');
define('SECURE_AUTH_KEY',  'UiSfgTsmdP7x}Eh24<)j%VH9/ZadHK;,e2>0pI+YhLxGq1y6~Y4DGQmc0,E,6,#e');
define('LOGGED_IN_KEY',    ';nVh]W~!O,F;ZIs?0_<oM8(D2}{36v*z8T7Pj7S.eW`zRd]rbke:bNt$@mvn!B-z');
define('NONCE_KEY',        '8aPld4Z;CrAQC9M${Y{7{y Xm5#hn3,IOIIj%<YJmC|XHjP^vd_`}~/Z`#7Y>AHK');
define('AUTH_SALT',        '&2$H_?]dv9Psp0wxiaOqO<#|KOgf^sdu!MC!b}X7#HV+X|r:gY,H9sD%-^Y:$?Q;');
define('SECURE_AUTH_SALT', 'edD}lfN4q@ruZFSYlNUMjX&o#&{}I+HR@} Sdz^7:~hA,}cIm3t5y,kh^u-N<-Y(');
define('LOGGED_IN_SALT',   '=WwQf`k*uRGZjc?;Ie+UdXOR%L`*[^;i:Zjmj?c^=7tY=>(0MLleV4K*[aJ9M.6d');
define('NONCE_SALT',       '{mU#Df v*H21Bj{L;Z3j7R{zq0e}(:!:}3Z-E499ESLUb.:f-&G@hTG1em4vtoG~');

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
