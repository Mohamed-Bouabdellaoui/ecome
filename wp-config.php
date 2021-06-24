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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'yKHh_R8,<V#hCf rOH.+!s8ODV{{7SAG6@WfKj)xjSQu=1#0xj>&OS}-D}ICAX3*');
define('SECURE_AUTH_KEY',  'I/z9:6(6[yJmn zF^c]u+d&IB/hWIA1E>^8VUr&|HomtSvNw%TnDR^d5];*MY!.P');
define('LOGGED_IN_KEY',    '5nv{y%W|rd|n#9ZLM{3]v~w4;ZtD;,.,%_F!`K1*qBTG+AL10e:bs$(-EBiv~Qd1');
define('NONCE_KEY',        'g9tr8lMb1DnlRp})#q@aK$P%|;vV0DLz+62(UL2jUUO]L2AP,kL2OLc![Nu6iO>>');
define('AUTH_SALT',        'z !y_c1}vpAZ.wN#03IX7W0jHO`x&xcA30hF&^4)Fh#+n#tFb_LI2B*VTKKW[yR#');
define('SECURE_AUTH_SALT', '%70O/9rhS!_Z~es(RtR<yk#g$#nQ9!}W7YDZ?CV,9d5`Ak6LB0J754!;A8pYTb+]');
define('LOGGED_IN_SALT',   '`wK&Q[9GYrORlc`Gxzn%#|`MLvIeMG0>xil.~dtl q7m<h7I6{PKl3wCGP)Uh@f0');
define('NONCE_SALT',       'ow|Bdm~cD(I/%8P46RBaRRbyiA4C$1$3BK(AkrotcgWVqW[,m*#&Y]&sS8AGGMOi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/* Multisite */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
