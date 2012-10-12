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
define('DB_NAME', 'wp_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'EAa:NpBjW+b*az<!X/hM%x*&Gb}!wq&4G-3CN_8)V29.5}{{sei+cTROzx8GllpD');
define('SECURE_AUTH_KEY',  '~T}o=0cj0&+hb9M0-..L[FC#!Co.&yHu;?:ok6FAE@f1|W7,?U*uBv|E@u6bV>:y');
define('LOGGED_IN_KEY',    'PB- 2{>1^xHBP8GV*KTfuokP04-C.O/%__lLn ~G0q<Kj[7+p@olGkJp_(=C?nV`');
define('NONCE_KEY',        '?:OK~(Q~~H;q~Y?yQT_o$@?.Dj!PQS_4,.V>,yG(S$:1.@O>1;JQPa]Ju3G/%HUW');
define('AUTH_SALT',        'nU9vQ^!ll)6W2:oU7,<UU$ekz,;YRw,>$- <)w4WY7]6z;*{-`3$EbKwykuM4amR');
define('SECURE_AUTH_SALT', ')% )H!3H&B6$*Ys-|;CJh.,o@Y9]335k?vyNsl3MC,J5majG tQ7)/EKVi[2p6`_');
define('LOGGED_IN_SALT',   'ooB iFYworg3Rg4[o6n:ZdLsnjhw@F,)j]NH`/As(/d.l7;Pyi+c+ZY&/UV$e);E');
define('NONCE_SALT',       'e_LXMhUq]V9kZzOCgC^xcobwV#G.|NoVO:A06T|F5:.[9V%+C >G/O=?/Fn/aX8,');

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
