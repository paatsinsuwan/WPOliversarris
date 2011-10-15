<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_os');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '<&dV!cdu9k`yR,Cb7ZxHc%q9-;jyi@Om;LbA.cse$x<^-A8s-Ak?[T6x[N]&+Pz;');
define('SECURE_AUTH_KEY',  'PYR?ut7XFxK#UyMx:UUAA#[ya}(|.F,=<simjx}Hk Q1zx@D2h-0,z/1/e(A-Gp,');
define('LOGGED_IN_KEY',    'CT0pZ.3KVi|IorAB-a`OqAV(p-=X,V++kO^@>!1l;-uF[]A{|h_;REL<j!)S0;4%');
define('NONCE_KEY',        '-W|9h+p1jqbr%:uQ*,n0+p%QOQ>!yP*~o#lq*tW!VD<2P1|c-{]31k52rg-1O=9h');
define('AUTH_SALT',        'w{fVY?M!tXV,aE-E!-XVYrzko|)< ?/2o32CwU$cCl:&e;--X0r{.@*?4j3GJac3');
define('SECURE_AUTH_SALT', 'W*MYy-`i.oO]|!Sd:3kk[6||B+8v:GCV*15Hi/Uau+e;=b+XPq@h4~xU04e0Ri o');
define('LOGGED_IN_SALT',   'W9G|Yq(.|~_NNMXAxF&-aPm@BLgpr-&o|keSy0R364LH`wjX`>-)C{A=?m$UkO:c');
define('NONCE_SALT',       '=!2/0Re0AWAs+kAI ES[:B+KC+-uI=8wm+1QElrU(q Z<vz:`Xt;8DrO+(AP2VD@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

