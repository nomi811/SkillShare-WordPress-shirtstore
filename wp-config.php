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
define('DB_NAME', 'ecommerce');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ';ip)o%D(PqPNbg7hfW=Qb/tuUD[>7/SoOI>-hGn}He_dX0|qo4R4W-xjh%g)Y>V1');
define('SECURE_AUTH_KEY',  '&,sWNFe*ntcw_gav&%ZKlc2rJSK#2D<IE6&ELu?Me3ye:4>O^drNosq;1+]03wEr');
define('LOGGED_IN_KEY',    'Hdzm$I:jEKXxY{D(8,7?E=`=;Q[|xLA=/!zdkn#Gz*mi)A:U`im%TWW#lii$R&jy');
define('NONCE_KEY',        '*J:98#<kpyq<}|7x=b)&1bN<:)sjK@fS_bfb5u&2,C{%kIgFV]{!<[3pF<-zB6]y');
define('AUTH_SALT',        'iysc(:R`]H:ujxY7Js*(J7e]y-Po)z]ysqn<//z`]ZUE^q[kb{u*t#A7nR&nKumU');
define('SECURE_AUTH_SALT', 'K^M(/Egw_L&V$i/C8./y?X}<&bv(&EOiE!ClV,1:_|PE7l.6z^B,*aqQ/rk3a(=q');
define('LOGGED_IN_SALT',   'L|+S`#(6`}L6b/X]Atoxh|S[)CDR5)lX#@&1vt4&4x((b]mgxWY~^B7S4f?98S}r');
define('NONCE_SALT',       '>xY;[3<,8SQy)#c2;ci,emge.o&/MKGL8c2E,%i#uI?3w=[nX,{7B2Q}=!OWDwkI');

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
