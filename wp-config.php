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
define('DB_NAME', 'cftscom_w0rdp3zz_db_054');

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
define('AUTH_KEY',         ']8} Y8cgD!9A_HHY.ZU83jUPB:`WLUq(rEI25Ionn-1T!(zdO=Gv<^C8;Cg0Z$%-');
define('SECURE_AUTH_KEY',  '3r <?!(Rclnuk/,R54d3k~GBzz3+R/5`rfy?N`G+#;Owxw_G0LzgO9[#OiCXuo9(');
define('LOGGED_IN_KEY',    'ULvlp=umY$c:l;`F,vq<~a3dwA}IF<TuG:xLu}|xBpF^5]iswTP&qV?0t7Qm0HEJ');
define('NONCE_KEY',        '8DF@}+vF_`MP23J>_jeC/U_`]TU%8yh%A}RneiZ I05:PphQoJBnp=sm~q%`<bD-');
define('AUTH_SALT',        '5~2Z$}Y(X_1iYdFv+MG_G<)JN7dK~Em(Dav)b=//>oTYT8Z?bW*ZB+Q+z-=o<?-|');
define('SECURE_AUTH_SALT', '2qY;z:ac0[-$k-s)mI{QajiNrd]1Q,PD^Yxjp*7*18$yyjRvepR*6v(-:1C.u<76');
define('LOGGED_IN_SALT',   'z6fui}%Aby0rU2w+MOo*yiB|,5xh[vG%>aOotB6@LH>n?Bv,/2p/WvyOti,Tog~S');
define('NONCE_SALT',       ']fkp1Q3Kdt~HK#|.STGEysYVZ@.+7!}w#?tEtf&>h$oA fn0X2T&u|F(?zUGrtZ1');

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




//local site redirection
define('WP_HOME','http://contempfin2.local');
define('WP_SITEURL','http://contempfin2.local');