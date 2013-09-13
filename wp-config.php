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
define('DB_NAME', 'rcanedb');

/** MySQL database username */
define('DB_USER', 'rcaneadmin');

/** MySQL database password */
define('DB_PASSWORD', 'rcanepass');

/** MySQL hostname */
define('DB_HOST', 'rcanedb.c1ecpdj05erv.us-east-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         'dy<TCF@DqbK`~(8+!N/X7lXV~Ou*/_m +?nj<m3vrobvtrEC~&3SYcKP- W]-B+{');
define('SECURE_AUTH_KEY',  '7nq^]|U/G0p.u]*0`[i45RxxF7<pJL@UuRiA2(QYdpE4l;uiy e1qvWt>PA6Z<;X');
define('LOGGED_IN_KEY',    '.sRXUjkX$7Yx3u7oDH;Q^?@/-a]E$5hS:a<;s?/|c5RdKbOh S^a:?%g6~}pJLq-');
define('NONCE_KEY',        'mDnA]Mw%64*&FMi71P%3@o,%yd|x-mfh|-7fru|xvol2SZM==)v%;bdXOO#cy8q(');
define('AUTH_SALT',        '2$R/2`vICTY}(&BiT <0>$4_.o(hBx^){juO!EI:2NI.ZIzoZzYM2D0N7FH~6Dq3');
define('SECURE_AUTH_SALT', 'fcC?~?3C_2bsgUPSdt$2].~tAJ:&kE6]j>mvhw*FLW|.Yk?YCl|!Q<s+&#W5C|2t');
define('LOGGED_IN_SALT',   ';L1|yLs{5+|&dn9@BlzS9T.{-StV[+/XK36/0}Yl|m+l6V8wlx`gn;HQ~h<*)$`:');
define('NONCE_SALT',       'ug)!F{4;!u39OF/)IH;OnunsaRu$Tyk?EGvH1&c|/6@?bHcC?qd|lV/;MBdl3z16');

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
