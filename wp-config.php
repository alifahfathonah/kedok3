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
define('FS_METHOD','direct');

define('DB_NAME', 'kedok3');

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
define('AUTH_KEY',         'Cn.IUtW}o}})UQJQjl (p2NlFw(ez`,mlrWne)%;>FZ,Wh_|0m$Y[E6g*HE|N}zA');
define('SECURE_AUTH_KEY',  'k[Rikuk2X^DP,[/QYDmt&vqsvJ5q(D[bdjl*3AC|4?G{D@+gzwy_Dr!_d5:sgQ`5');
define('LOGGED_IN_KEY',    'q45ud<wS)&NI)_>K!n=z-v]~(vtO|lGpz+/G4Z&#6&m3{dU4|G`@*Kq_~R;a^|RB');
define('NONCE_KEY',        'uGNj8@:|k2/FdfEM=!<>*H]kG}$XJZw$V/$)9VeV^}O@![+2FbZ+ez5g1HwbM0}9');
define('AUTH_SALT',        'Te 1l-+.axQt[yqVtAZhD=juo),,^*_6x&X!d3d+[j0~3tlN:~@d>}V6?&Zdx@Vu');
define('SECURE_AUTH_SALT', '`boh5DD4hV_H.,Ge1SQ~2.}?sR{+9:t4lhPxdPz)/E6.shbNLnID-L3:?M0.qw$T');
define('LOGGED_IN_SALT',   'BePhj7KukX.8as4aMNjWcFRkwi <ju`LJaSKdE16 _Je>Y4hCM7G^]rJ?a6/[fvl');
define('NONCE_SALT',       '1b:0p91i1xH]XOV<W>gq~Z3C[Jkf2BQN3A!st|@A$i&kVHDr>BpauIu Y_?Dg1}`');

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
