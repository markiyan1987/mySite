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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'cTvPa_;`z!carr#$LzA}zR08%8$q3T)=p.nuXt|J ITUWearY^./!n9&j LP77jz');
define('SECURE_AUTH_KEY',  'n6AO];rF[6z(TpgVD;!@=A9)RMpSy8uY79VtjN!-lF@#hJ(}?w6xA~0{K0jd3f_8');
define('LOGGED_IN_KEY',    '6vo*$=UF/8QDTrnJ}z3H^i?[</:z)z$H)6Yc&;}C/*|ktThJFu&Da0@OHIa#AaK^');
define('NONCE_KEY',        'blKwa6B7C:wg;U&s~sNcPw8u`HQ) NG CCYDZhIpQ+3e*Ir,3;Ffq6iGW|i5m#(6');
define('AUTH_SALT',        '|ep_QT2OoB.pv~aFhlb]@g$|D)f-=v>Rx7[Nt?UFc.!Cy& =fFvDM$X,2%2ezhKa');
define('SECURE_AUTH_SALT', 'Ow>&7-,.^)qKL?Hy,6+zvP,M&#jjt?&B_7&M1{`1UMYB^iU:Vpu3@0Qp3:ylbgw<');
define('LOGGED_IN_SALT',   '?41 w3/fshDri@tM2ulW]<!i~J/g+Dg)4?Mvi7NsFuN8K5)@M(3/IY3w=a#,ZU,,');
define('NONCE_SALT',       '}p&HR){Pb$0/vV0Rl-A#/iMRf9<:Of(`M=r[!+[4pH,s4:Bv:=F(tUo~t4}87Zkz');

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
