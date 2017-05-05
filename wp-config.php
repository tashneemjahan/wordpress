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
define('AUTH_KEY',         'xLc7w7Mzt(^7Mr35,DkO3U&euU{^0Vkv<GSAlH9$?y&m|O>ze&riR-893;9Rxd~#');
define('SECURE_AUTH_KEY',  'g{vwXQuui]#b}Fb;;_OJ`%pcwZ4yf;Nl6C)TV@*^,,G@%#aq-uK7>oG-BEt[Xkq>');
define('LOGGED_IN_KEY',    '#(anL:kLwn*/4L-.K@_)$@3qSc.ptG^loc]<-Xdq.kSa^BAYd4hWQz~9,z|uj^3u');
define('NONCE_KEY',        'gxVv<XZP`Lst|a%GcnpKwKk**sbbE8XCg49oLsB}h}(cHyJOi^ .7}v3G i&<UTf');
define('AUTH_SALT',        'nFP2zfFYJu9*GfMh$X{hvS[=tvZ{)^l@k(M#<0D|}vHlwX^t jp+XBQjvV$p|q[H');
define('SECURE_AUTH_SALT', '88W,wFdRDI%(m$[mO09V8}P+wKU,JFzvZUGe&fn]fvBSZ#QrB2P1fZPqt@d#NTOX');
define('LOGGED_IN_SALT',   '??*p-_zxBcH/2P`;JKPpV@~k)|-/tWN]O>nR }ab2fI0zbbthH$Y7EgOkXc_w>oz');
define('NONCE_SALT',       'AB=13HxM3>x96;?2LU:b_URJ*%&1?)T!uaqY:3A`wdgkQh;hK|K6Z)x/?$3i^$+m');

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
