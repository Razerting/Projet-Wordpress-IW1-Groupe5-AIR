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
define('DB_NAME', 'aire_gym');

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
define('AUTH_KEY',         'eE7+>K!z9c7%85D{#~rFU>7pF~C^e,dR8V.WV*S<+0s}9NO<[2,qs>f/wqnu]187');
define('SECURE_AUTH_KEY',  'YWI+}}).aUz|vZN8E[+4vFtxL:Hwt+{v?rHf)t?IKh_sXx]x1Xn#-[L}<wemAs_}');
define('LOGGED_IN_KEY',    '06:W/u~sgj%DZu])Q(Fzh_Z]]i[Fb ^.]euyFyIVl9D?<)=pftB D;#xR4<|#B{s');
define('NONCE_KEY',        'uA|:+wN!DQkjJY<ILy&v51$dhP3.+H{1-O8s7`DI{$@*:r$,4`xawBV?0{R(dL{w');
define('AUTH_SALT',        'h`EYl3#z]E&GPIeo#l4-aMbeneA9JMcf1-?thm7xkI{z]W{?a5f;kip`_K{m$EVa');
define('SECURE_AUTH_SALT', 'iVUBxmASO9mYOkPvU@B20a_K_ZC)~=RxV-kz5|J~f@Yar{fg@=cJO|`ZRT-=zxcF');
define('LOGGED_IN_SALT',   '8I/)c4zR[L^UOm5@J$_*+>K{g?MTcX]g~5,S7)/$M1a8,Q:~5kVYIO0m)HcXX bZ');
define('NONCE_SALT',       'F}D>?:]jyE0wGA_$Yo{bKv0k6:m}|v-]cxzo1$l4svCB^f{A3_I5p>.cL69c:j: ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aire_';

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
