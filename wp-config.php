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
define('DB_NAME', 'rds');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'idvU4 ?L+0m$/^`=h H[*chV<)@V>+2sJ`H1@mX9o,gR@JNq-lhc3hSWE{@uDwbo');
define('SECURE_AUTH_KEY',  'aqi/m*l&X@/1Wm$P`;1=v8o|XMav4pRjxG< liy/:I|(H_KJRU`)89?Yt[@55m2X');
define('LOGGED_IN_KEY',    'OCuwa&Z^[/)Pq}l5![Ena6+.XzdW0z_wl~`:-*ExFLFSIEFo?|Fpj&OQ+5_@jU)C');
define('NONCE_KEY',        '>]>~| U=6~>f:9FPdQQ:6ulCJSGnG~>d1>^h(L>qtcr,=N|0gvGlO%<:NO1nv_&|');
define('AUTH_SALT',        'f_]q5WJNW_0uc#@y@y/:IVb~xd!)N0?k/=cYqKn0qM<P~o?ceKAsfq?aFZ#5v=e4');
define('SECURE_AUTH_SALT', 'cJ?]6f:o)?*FkQ=YW+,XmPi-jP%}0w%jq0oVB=Z]v?fjNc<*%aN{Nb&<2KLd<Tc/');
define('LOGGED_IN_SALT',   '5H$mrzy!1FxnxJNy #;UQ24}3B8QiM_9;+?022=0+xO!/zPX^jnRspr2ZoLs>9v4');
define('NONCE_SALT',       'Rni.quPjc8O.XHr3mxt*Pa%wzqS7`G9`p*F4E9:|8Cq sCn*([i?)Y9TwsI 4{Jq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rds_';

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
