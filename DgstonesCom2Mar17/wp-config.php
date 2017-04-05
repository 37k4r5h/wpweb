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
define('DB_NAME', 'dgstones_test');

/** MySQL database username */
define('DB_USER', 'dgstones_testuse');

/** MySQL database password */
define('DB_PASSWORD', 'WNKom=^nKwTc');

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
define('AUTH_KEY',         't-ePTAA@9+e sa,PHSddO%dm=|Z( ?YdV?{7gKnv+>A# pR~1NRswZq[%%VQm{tk');
define('SECURE_AUTH_KEY',  'fSf$ IKPtY.yD@4v_!:]y+IcK_m[u2rF.ii,&R `g}~=@|Vu}9?}<K(FfCB9?0iC');
define('LOGGED_IN_KEY',    '|Lw)s/Ci9# #X&Z?t$3BqWEcu7B_%WHCx=Cb/rezkaYA6PndQhV|#q@MB%x2LG(h');
define('NONCE_KEY',        'Z@l6hxg_FlAOLu5 $@&HCC>Cs{EK?wqAc5YkAS%>J$k[:-4&#fyUhe#u;S Xknm(');
define('AUTH_SALT',        'w5~DhD>cB.#GnA^t..nJY/av5@!!Yl?T0b]zl|O ,GNIuS]VR4p!X6 yKN5h:,C;');
define('SECURE_AUTH_SALT', 'oJf9AZS~+0e$&x`Z@PDlExyeg?VJUV&!c:aq`flX{Y>&uYkZ<[^D#{}115hNFa^o');
define('LOGGED_IN_SALT',   '1s:n=^x-oulT{Snk!T9s$t!lbaVMVe.n0[M_ZW:D_KNDq j9^j*y$5tUlOR@0Ct)');
define('NONCE_SALT',       'og0]k}sQ;C-0`{I33O~LN>W/w;M_&r1lkQ!+%MA0Qp%DC,5:*>hsqoo*Y2.O|2y ');

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
