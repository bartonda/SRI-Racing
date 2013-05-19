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
define('DB_NAME', 'dbartonp_wor1');

/** MySQL database username */
define('DB_USER', 'dbartonp_wor1');

/** MySQL database password */
define('DB_PASSWORD', 'TU3Oeu0P');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'D^y`;~#]Ks=?e&>n^U5l#cpT#-&z!L`xYL:#<nhkq:0u>~>o+pE@PNGiu,`*Pg&H');
define('SECURE_AUTH_KEY',  '2+,>bM/jPjb *{`IOG .-cl~hi[n5J*|)N|wlW0 H4yb[`w-$K/0j6sB?Yz*i&2n');
define('LOGGED_IN_KEY',    'l8~N4&:g[:W07dH#}N ZB+25o{B~Rt%+%j|b#j=M)A[QG]6=517/ZsJ|=z(ZWeD.');
define('NONCE_KEY',        'VW0|t|xMt[xV_Il+u3Fv2+o@%<hxK,Nhawx|F3/v3JK;AYumpZ!X}LSoO5K~MKK>');
define('AUTH_SALT',        'T6Lcr}}8:A;P&?hb+%J%saJ2|p+(xzhX-GH`I!ZRyo;hn!kSOvVph44.(E[h45B9');
define('SECURE_AUTH_SALT', '^hyGz<hZpE(0AKZq9Ywvx{G,aKoB=+/dN8&d(M}dcLZO(VQD)|=*#/yJ14<o>Yvm');
define('LOGGED_IN_SALT',   'S8,hzTk v @dI-f6R ;Qw4?`7HiaaZh}m<d#THW5zIJ~|)5ZYo^cS)4T-=NK`@$D');
define('NONCE_SALT',       'k|]-Gp8YU8-aP!iYW3Cq3O/O:<3/7NVNt]&&(T/O/`[bp3x+a++f[T +}GqKm]ZE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_sri';

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
