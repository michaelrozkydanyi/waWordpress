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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'wordpresspass');

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
define('AUTH_KEY',         'cu)|GBx:Xq.a+i4|QvJ!pt9-u{a#_%m3gz@Rc^5_~+G8Ytb5?Ro~hS<+vceOfbm*');
define('SECURE_AUTH_KEY',  ' jw.gC#-T=t$3*nbTe&(2Y/+/N@kE@ 4XpA[PgN}+D4{#c(bvP+%uuTBvg,Mu4bU');
define('LOGGED_IN_KEY',    'c;@Lj3kCbI8}wJ6vpH4!e 0/{F|aXox}C+:v]}{au3<E6sGX|9S_Z5++ZR(}$^t)');
define('NONCE_KEY',        '-mjP5Uu@~ hB<+QRqdN4JX- &<Y4RyU(p@0XGLmLhui+TZo+.#F3%O)sr+hK&gyF');
define('AUTH_SALT',        'wK49v8%j+Q+d%(R?$Rq-W|YlH1#G<TR*J0,*<u8`|8=]FDo.)W+|,6G|2N48_V7<');
define('SECURE_AUTH_SALT', '/<Y]RY};zqDjBC_FzWP)UmsnR12@8M:V(1W-%(?%LTWuo$)W1greYBAN&P9e$a F');
define('LOGGED_IN_SALT',   'EAwS-Cny9#`[t%SB=18FJ2Vl_A(nkN{wcAkLgh0HUMM~QZ&|d-$c+y=zGkQ<-DCz');
define('NONCE_SALT',       'T*I!+uCkBwMw~XL;r,X}Z@u`H}07w]kk C_ZOIH<|[|)W|/XhS%tL-|]S0` >cE1');

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
