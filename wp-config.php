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
define('DB_NAME', 'rcanewordpress');

/** MySQL database username */
define('DB_USER', 'rcaneadmin');

/** MySQL database password */
define('DB_PASSWORD', 'rcanepassword');

/** MySQL hostname */
define('DB_HOST', 'rcanedesign.c1ecpdj05erv.us-east-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         '}{E$Q/X6I4igvi3e1A!JA9)E3`g{(H3Rcc.A6Y`Z%1cS$S})T6P)Ita+g|-uv4rr');
define('SECURE_AUTH_KEY',  '$G,KnA2OY~JV5VkN5V((+uko$eH OgpAisRu-:-YUteHiGn4Qu5KD1#h3 M^t}4z');
define('LOGGED_IN_KEY',    '5.*F +aZMfTH&fs@GG;E`Z<i|#CJ V#3<5>JjgjiTA8vFy.-P+[H>WPg#v9cv0}T');
define('NONCE_KEY',        '?vGl`|*3MQB1]+bPhroMP0oX*(=r/<GRyma0f/-(=5S%()mg6+^##8E,rChb7dAc');
define('AUTH_SALT',        '@.A{}q:|D_8R9^gNrm=2t]uQm>,yv[<]N1E)Rl`?Zt=Zo9$?hjZ_<Tr+!Be9?Od.');
define('SECURE_AUTH_SALT', '!p|M1M<KH|F|r+d)!t*tSTLa|[?Sy&]<IG|WOXzLgfU32:!PfK$HrF@-`v]6q((%');
define('LOGGED_IN_SALT',   'LE]6Mldtv6`S[&6cRNu.5 A:B{8(7+$KzX8rP2ASN$)+93ueMwiha,1Hvl`>bM-b');
define('NONCE_SALT',       'r&Zwf`~{5sl4JTTl[GiFA-p4=%BU{)Yg<e)4lYQ2y=~hl+;w:PD G CVg!Xe_+CH');

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
