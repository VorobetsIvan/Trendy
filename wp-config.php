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
define('DB_NAME', 'trendy');

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
define('AUTH_KEY',         'T[;!Bv055;lzQvk>bt:4k8t;+5}mpN$}@`CH[.POFD-}P/L(~5LY7*F@9h_g%JH9');
define('SECURE_AUTH_KEY',  '2,,|LK/)VOZS}NN}JbMV0v^o IyPJ ~NT2.xckpjSyJHUYNhG3%1ZqIxo)`U.TO>');
define('LOGGED_IN_KEY',    '[ Zgliy&L6kR:yiS),36` (QVD@1Buhn`W3R/Dc2[$4JHPM4hRsb{D}DP^55eo`?');
define('NONCE_KEY',        'ZbY)`kPqa0@arl|<O;tw|{vKOrn##vX:lEQ&b#lZ]%134^+-br60E=i6 @c>xoqq');
define('AUTH_SALT',        'KU!Lgi>NT4M}!ko`N{)#m|`;]y$wY.!+^_fj[r2UHb/ vQ/.PA=VK`:=@o>+_`*a');
define('SECURE_AUTH_SALT', 'WX]g[v0DVNfPL.eCL=|p7Cc<fi`7>>6[CnBX_XXNc|0j9,BeC^Y*N&5[EGxIe&RT');
define('LOGGED_IN_SALT',   'P#(VybK?mZI-u?UyG}f09q_(F ]8B993UcJpKQak/_1]*fqm@$UVa=|9OFEKD?5/');
define('NONCE_SALT',       'i0s/6$ojK{>RiZtkLd5y mb,MjCD5oz@TJ2`uc3 5y-1&%A;Lwa8GjiUe/dtUj@2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tren_';

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
