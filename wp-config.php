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
define('DB_NAME', 'mobilezone');

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
define('AUTH_KEY',         'f`&x,NV@).j!|>Y-HRP7hLJ!7T#GVri#H}p|r|&}!`,T>+JVbgR8ZT@G^yDWekkj');
define('SECURE_AUTH_KEY',  'Y<B9YUUg !Jv|KdjG9Pho)/MG>sH>uYoMZqKD9e~l*u?@|+)|QnGinu_<%wB$Po?');
define('LOGGED_IN_KEY',    ')1}4^(I;F7of?uMLg@mPeQi_YQ`O$.;K9`IHpSi.-U<]$X=!!?hWMY_hz)L0ji~T');
define('NONCE_KEY',        '1L{jAU`dG(1mFIBo~ex]us*|?i-|}/LBXiMegee}VOJ/!b^/m [euUSX,b-NtuH!');
define('AUTH_SALT',        '/ gMmr>9IUzn2A<;t9+u*#w### %qr/T9szgL9&||l?xpE-Qt:8oLG4[wM?2cI+>');
define('SECURE_AUTH_SALT', ' AbeLplOixpu(CX/8=&KO?)Me~h}/[?UqKM:1a&Lu |E(VDjj/Z kPhJW^AFeriD');
define('LOGGED_IN_SALT',   'jR:r1|kk1BYVk7{qcfU[`Hp3m:FfC9 TS(]Mo`;ePW>`t5vrbnG4_O@I^Cr@^Gu1');
define('NONCE_SALT',       'wfEzDPd?*~2URo6a)S|gh5kf gFT]x=:/ p/qp O`D?;C?Kv@#I#T{8>O>z@Sz95');

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
