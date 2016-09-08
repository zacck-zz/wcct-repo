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
define('AUTH_KEY',         'ma{srddc>sH57N6rM)cF7sr^f1x{#6y@!xmC_q^bi[SNRc(|Y} 9e<<$~k(~i@Z_');
define('SECURE_AUTH_KEY',  'gTzZUWS?R_{b(el~+a4TGT&v;_pVc:#ffc_z%)]kEPmE/@k|5=:sO9emXT1nq7[f');
define('LOGGED_IN_KEY',    'B^$PX<z)JDvN+%4Po%i#X,Rq!KT!sj47(q8kF@aYZS[qpTUjF#U@`a9R/K%ViQ>E');
define('NONCE_KEY',        'LmQ3jO3EUK<xV}s@xA?UoigHLpHT.y{#m[bNIyx;sHV+5`{OjmigHwOw&>IsbK {');
define('AUTH_SALT',        'SN)lQc_pN)-5N9cT1b6#<Opy$RZ,aGxEwGwDK!}6D:U]om1 R{AqgXIy-S7lloWm');
define('SECURE_AUTH_SALT', 'OeF:i2o!vJ7IWDC9p:*{ynV|), X_%G[Gcr9*4gFPRTq)mHo&IgSY6%x<tYWnu!4');
define('LOGGED_IN_SALT',   '?{1b.3Q400N1#jZGjO7j!(nyh-G,iPE5-IBh;[ewPcu]_;w4?1|p#|e-fmi2>-#<');
define('NONCE_SALT',       '+xc<i:)d%R[x*G9`S3p0$n;QvH+!i)Nu^r8V;`tt*1o(fqEb?wUPo{Yz8lJKxV29');

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
