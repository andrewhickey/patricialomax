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
define('DB_NAME', 'patricialomax_wp');

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
define('AUTH_KEY',         'B`6.SG4i*wK$SS7pthEE_-on7*c9Y] )u<`^JM@XyyW>7 ~{<yaCjX3V^o4~+{.e');
define('SECURE_AUTH_KEY',  'n)<VZ7.AOL]~kS*VbYU9G/H!#;,*TYT#O^}ihx6]D61WNNM8odq8wLT @3<Mt:<M');
define('LOGGED_IN_KEY',    'GW2hv$=H)A:b?N~%L_g<xAj2v^RCN:C(qERO(y`cQDMqeD!9{e$|`D,[AX-T@+tl');
define('NONCE_KEY',        'b|@=`TUh0P6Ruobi2R1^JBaZ,sO/FHkbD5wgcwy(7_WQZ!8[6c_ D>;J2*B#(]2>');
define('AUTH_SALT',        'F1&d/CO36%Zj1K ,-#HNs,j,dK&UIYie&A]CHv09c8XOe(R&;znHgFEXQk@mmvO!');
define('SECURE_AUTH_SALT', '0.5 J~`]8.kHcVdiv,SV,NP5FaYLZ.gt|6MK@l-~R:PX;d*H%~qJ/M#J2Z[Un2uQ');
define('LOGGED_IN_SALT',   '4av9{5-Xv_7uPx;[6!Nug<)C<6iV9#YBk>r;uB7.>[0EmmK!k<.#S~;C}Uk~_H/3');
define('NONCE_SALT',       'y}[UxQq)6T0!*w]}!J6$aT@a;^UP{~A6nj[/7<FBgxBH$G;8v$o]{2e&s`#FdcJ8');

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
