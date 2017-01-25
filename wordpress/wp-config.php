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
define('DB_NAME', 'mdaytree_wp');

/** MySQL database username */
define('DB_USER', 'mdaytree_admin');

/** MySQL database password */
define('DB_PASSWORD', 'Imake5$cash');

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
define('AUTH_KEY',         'EwI{oQ$v:C<+I:?0rz:c-V`YqUC.P{~^cj(e4v4NPLWlqINksV$#L12$Ia)5R|U0');
define('SECURE_AUTH_KEY',  'MQcB.<>u&kn*P>K*arvh>f,w[=429e+kJbrf7E#i|`pGb-EMxL2X|t9R^(W3)hU3');
define('LOGGED_IN_KEY',    'sdn#@+4aVWIE2Cg:?)j*D:_6m4I1E>/xH*egN9p6wZyQDK@WB0ta| HBLA{-inV|');
define('NONCE_KEY',        'wzP&(D/&ddq}H5e:@6pjb#FG8[d+@,iEW6;)}%}#/-#kD1*RfcsA`v=;U-@+#yJ9');
define('AUTH_SALT',        'Ip-|9.Of_-r3f?Ac(m_}Q3+$4K|N!b/%^{@o1#mk,u|M[$3e5l$+iKK7BRqZgBBS');
define('SECURE_AUTH_SALT', 'v{<B9S-Kip~P[x)`9|rM-Mp#vC7k9szWc!kB, _Fv;Wu-(nMZF ~t3j?N^Pj2Qc<');
define('LOGGED_IN_SALT',   'ECB|A+}>`^#<,hO1ba44CG|X<isu/-;nN,FdWv,y@EX[cjURA CJD48ij[4J3bBR');
define('NONCE_SALT',       'J[nFr5Xj+i#tp*t+Z/s|S8Y@^AL7._:B:-3Y.0QSGVm-`emKoc6Y[O$EvKWB@{&?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'md44_';

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
