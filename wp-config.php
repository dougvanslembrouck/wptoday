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
define('DB_NAME', 'wptoday');

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
define('AUTH_KEY',         '#P-6G<=s9HecI6||^ty d= @H2X5@L3pjX2|pO|4UKvNlwK+{t?B+#30*#]x;O_2');
define('SECURE_AUTH_KEY',  '5]{8-H|b|aJiq(zr+S@e.Sl|;@UQMxMYprFf !V-#eJ`uK9eZ|JveH7CReNSww|W');
define('LOGGED_IN_KEY',    '%-3jo]]vV6VVF8LYlZT/K=W;mH4gK+Mp8+v55w  @d_hk<rD.uKH`@Wd>1mO#d*0');
define('NONCE_KEY',        'a_:-X!:u@[j,Wy@aGE5;+-PF-1uH7iz%9oolz5Ptb2nxsH{H_al<~t^K+eS`}1/n');
define('AUTH_SALT',        '-mz3[=4!rH-UWn?M`5P -Y;4%JJuM%Pzqx2|F#M@~j0T&&}xae!H9hxm[W0Z|=u,');
define('SECURE_AUTH_SALT', 'jz-Vt8K8FNw?EcqHh48 ^ahTUEx*r`6XTL{lc[G5R!|vZEVgAy^2C~kb{Rb-~+Mh');
define('LOGGED_IN_SALT',   'oXr,{#Cq|3(d4FF@oXB,REHC!;r+tz1SA_G(zA6p|&ZdKWSU]{=s|R&XnbNL)%uD');
define('NONCE_SALT',       'DuZ*!j|nQ>5vFc+HS|w5/_!f%J`;PV572i(+%T/C~I4.>RxL`f.i~O 4#`~JT=F<');

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
