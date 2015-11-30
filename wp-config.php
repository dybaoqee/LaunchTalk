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
define('DB_NAME', 'launchtalk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'f_V} O=Zmzmr U0|SDB!eOK8trnBlFjLx/>dRR5On^+Z;a U[IigHrjR0+*1GFue');
define('SECURE_AUTH_KEY',  '3T{q%{7oUT,bc(wa6~jD7H7r$uS+$C|CKPR9j&_tASh5s_(Fjfmr e `raOPUN%B');
define('LOGGED_IN_KEY',    'Hu^cAAcou_j>8|VgGJ+@0=7i+?>SsDMfgZs`f{4>GV96Km)?ouFeFi#55GH?lI66');
define('NONCE_KEY',        '${|c4]Wj~w$_Y}k[:se }q#%lwc+T5o77/fG4M3g`V-qyG@,iU(9^-fi)4qxuJS}');
define('AUTH_SALT',        'AP7TJ=C@qAwv_?PKfvo|SP-XNIlre=S~W9I-<Udqa8Vf;&5ES/1 H:S:9`|2)eKM');
define('SECURE_AUTH_SALT', 'AT&(j+wNagK<}_]{m-cw-4| ):H$dWE<KXNGC7.kJPs$,V)F?7>!O^N?TV8h&2UT');
define('LOGGED_IN_SALT',   '-lF/>Uf(pW<VhROtu?j:r94x`u*@KCSgR>^0-YRA!dfIv&&9O2SY.Cjs^Z^]B!_p');
define('NONCE_SALT',       'J^*0K?tTU0BQM+~;kBq)a#{~T7%][94{`C[?y`vo2k`X+=`=F@H[^b|%^nQmkQlG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lt_';

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
