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
define('DB_NAME', 'lesson8');

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
define('AUTH_KEY',         '$>yn9OoIME(,5-E+|8GGEWs=E+@yz1`mnHAg{G-T`sh@V+oq#C|y2vm_?l4_@`W=');
define('SECURE_AUTH_KEY',  'qJ|S^$-a-L5fju_kQixvl]}f=X65<QJ+eUb@<ZwSzR~%*)/y{%xSbrP&rWm/u^%<');
define('LOGGED_IN_KEY',    '!:$6&1-/9~-jJy&L^K._ydJf<YRKQCa|eSSMh9v.+_BH?4(<q5%O{+gMs6&RO*GR');
define('NONCE_KEY',        'lM8#q H57p$3!++IfcV;xq0&V;jL#INi7<2Z*IN1jt|Sap-HO4U-2Br$}G~`VLTl');
define('AUTH_SALT',        'Py-`yyE`7/X%WvfdcW1/y-!LJl_J$(}A% EdBvU#T/F?2;+^<&T7C:++}TO3@Q2)');
define('SECURE_AUTH_SALT', '[mQ$BwMhkW+h9bZb-)%[6xHLNj`R]-]W0eEAYlEa:QG4 `a+v_9]yN:=wW`ti#i1');
define('LOGGED_IN_SALT',   'k%/gf?&9_nC7n_t..hSx@wUpFYc0S5{71?psv0#zew-gALXE&++<jD![tp6^_W=M');
define('NONCE_SALT',       'V[mmjrKnLU5,1DD_`R| 91,x{mXz&/XYa*2e<>/8|]W/(t!17mP>5ug@&|ALO Rx');

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
