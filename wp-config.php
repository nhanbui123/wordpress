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
define('DB_NAME', 'webbanhang');

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
define('AUTH_KEY',         '/Z+nWopdPF?dZV>,++@i8]e${wTffGN8ISU%xjsp@4^g(f$}8/;K25Dzvj6/~jcv');
define('SECURE_AUTH_KEY',  '0m!K$a^ 3b0Ff@je`NgIx$<90$V]bIc>iAeu|#5R4SWAiJX:|ylp#8:zY}Jc*9+d');
define('LOGGED_IN_KEY',    'qRmxNGy@zBY$V3(5DkxF)+^mIzLN_&[{UY /(*|WAjc+ch*YX1>ewEhlRwo-=%?$');
define('NONCE_KEY',        ',PdMoPP?9)kExrU)f%oqu+6R/UK_##7|rb2Bo8D[@jq >@e0uRjB2C*bF 4ZW>?n');
define('AUTH_SALT',        'sG5Z,Fd5gU~g^V$M4Z*V;wb.&wsiei @X*=XLQdJw<0ms`>wYl8=Dg9TujjeO&Jq');
define('SECURE_AUTH_SALT', 'bg2Vi`27RKBxzZ<,XSlR$[^!VBQsu$*[x9eG5Kht&2vhA#1#%Bwu DMN1}1Ojcq>');
define('LOGGED_IN_SALT',   'qRM?s:Sup7{5o0;w;:S]-(6$Zs5BVC])Uec>1z]s{`w-cEH!`#}@l{EF|1uMo|OG');
define('NONCE_SALT',       ':p;1SSsNDA0?$osEej yve=Id5w5Kv~e^T>nSdE|M=dT#KkJ~S4]6XY5WtN#Z7kl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_webbanhang';

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
