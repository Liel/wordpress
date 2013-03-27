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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Ksefqw8^ZJ~+k_^msoY,-E-s-5-wfK}Sm.A?ae?nrmM]#gBBGk(=&>#xGe(y|<x{');
define('SECURE_AUTH_KEY',  '%@I;Q+c|5eng?#/ea1AT5cPz^[v!ZZW_FRk}zPOpWw(MW/m`Tq`2|JRWnvwr|6|O');
define('LOGGED_IN_KEY',    '-(*<<OJ)5H->Uw.NZnX.H`0!q=*U/5|mHG-=;M.>$l}_T6IlA}|8Iyt$&w.}ELGL');
define('NONCE_KEY',        'K+718gK$SQ2`b=y&p=]yG}|7q}oC``IUU+`K(q6Yq?NfLqIuVAz3AYd6IrSdC4Pm');
define('AUTH_SALT',        ')Q@%n EI][0$d}yO[z&./q&X-kky#-euS]n9]EO?*OC6&g&F/r]%20wJ>GUm-!`+');
define('SECURE_AUTH_SALT', '3Lb2@Q%-EkCx-8r^p<a=R9tK!HT*Sxy9ID?]PiOi$?r.Aiz^#EhBj|6~^0]t%8](');
define('LOGGED_IN_SALT',   '2pF+qrf=`Qg[tcnFE,aK|41Yy38k~Ea=aq>|DO+.rk--cE_:&0?CGSVa$zJ)S`&I');
define('NONCE_SALT',       'j:B/bA(KyX+R?fmp!VrU>!xdtpx.s!6p|AUvR6m8M73Q}N46?v4@4:#K!byZlTD ');

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
