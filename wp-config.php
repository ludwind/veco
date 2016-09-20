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
define('DB_NAME', 'vecocars');

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
define('AUTH_KEY',         ']S:pp3dp}z*:U@ai&9V/O75w>IZ|ong?4.cX,)L^pV=0/jKcCE1q<wE6/Q3)ZpRF');
define('SECURE_AUTH_KEY',  'mfl#te?ICTy@}y9@dnVc#jT6w_65HY87$Us(Y:TiF~5u.i8aD^(#o|A=]}}lVCq0');
define('LOGGED_IN_KEY',    'W0AQO?&a{]DKD-3>rSi:?sm&S:d@-ntMnJWN(tP&|PIpYJ88,NGqh3ir>vCA@8P3');
define('NONCE_KEY',        ']Tz:X?^[$I@=MK8vH0[:L/f02W*l1f~v4BN25M{mqN>s1/z%^F<QIUk5z(BFYary');
define('AUTH_SALT',        'N}5z];w(-hjZ4T)X}~sGhfvf?*!O[S8F|kprx?%i;KWKS9MEAeGh4b@DWM5P(trG');
define('SECURE_AUTH_SALT', 'i:KN^l&+iBW{`&*7}C`k&oN-ACQrFDSrwlm1AkQIR0mQ|PeksTahRN$v)7(a@#Wv');
define('LOGGED_IN_SALT',   ')`f~h#XCfEE5yZF[/$-FiOI$`<xkR[oIl,BPUHSKjBx@7{kmsFB?1Ohb<W1wSt9v');
define('NONCE_SALT',       '@c;d;KEf#I7vp^}f+>#A;{h+OrS;/TCaZ&JC@@:O3qP:e7J><`$Fv!3tmf$uv`1K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
 
 
$table_prefix  = 'vecocars_';

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
