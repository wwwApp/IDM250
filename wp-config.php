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
define('DB_NAME', 'local_idm250');

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
define('AUTH_KEY',         'X4mdsqmfLHuLOe7N&_9UsNdlfCr`6#$ve+Da%2Gg`g@>5$D(Vg(_2=LifE`WhZUd');
define('SECURE_AUTH_KEY',  '@f-pB^&4D^.e/C u![ crB5}!I?*H5yid8<  lkQ&1v&L?.r}aK>GP*u+L+*.@!;');
define('LOGGED_IN_KEY',    'b7dPyPS>eQ*:;`*5*^Vf;wcIP!)SGltC8/p7pXB<L,DPB}V-CKrvN=d}Gi&!7[2U');
define('NONCE_KEY',        'n3],.]V13dp!$k2)slcmI`=#=H2D%6uP|Oi? FqwQsD&_SI;1..<fWz8Y55TsoIn');
define('AUTH_SALT',        '~:[FI*@CS_]m@u}5b!hY.]8T+x5M4613w)&RWPT4]}}22e>tDm?P?-+yDnd^j>VS');
define('SECURE_AUTH_SALT', 'JGTYG*|eHH&(Hko?giHJH])yGn1/YsB?F`y5hG3D2(Pw?!+?h?w&gV7|Z5`EI&qc');
define('LOGGED_IN_SALT',   '/P$*SmR7%cK~Lr/(Sa}3=c$mrROGST~G0dN.9OF$Ga%}|sEvE+IL[NE)#,plEj^A');
define('NONCE_SALT',       '6s,P5I+PBETd3$/~uQUy*K,TS>yc.9}8X[(GDB#A#hUkm|w?J.l|!;}]c$t/wJ)c');

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
