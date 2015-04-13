<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         '&lsBMDWd>2-0|GPj{}Gj!na73=lPV+s <4=~#GyFY:Qx4u?Q]@^<{bK>tT=TTKKt');
define('SECURE_AUTH_KEY',  '{}c ZP,Mt4(4m8Y2EW[S_FVVXzuH$r.Ivk}Ra~aLYD<ADX2qQtO[Va|Z#e9B^CDx');
define('LOGGED_IN_KEY',    'BdLvMmN3c%o@4sJn<Sl^#aCW9/3mj-+0FxD2SRpC$C$-/mD*Jo{IYlQ.{o+Zuz ;');
define('NONCE_KEY',        '%+{e20-<19FIc_M5J|{q$fDg;Hj`~LRxH[Ua$Z=t0GbU}^wL[#Hona,3 {L{g{v!');
define('AUTH_SALT',        'S|_SFu1_zpy72pj#k>_e}BBpB$Q{4T;k#:D*-331+P@?$=Km~/-dK9Q|-r-I$ ^+');
define('SECURE_AUTH_SALT', 'woc%B`F_tfR!wfu8eYXy%sZ-OW:gK3 rz:Je^V$PwG#IS6qslS1T~O(4Y?s{2}T4');
define('LOGGED_IN_SALT',   '+b&*k<a 1*z=RAJ~Z*_Dsj#wV++A~n&O:koK:&&s_p!t`QV|SINL40IOH#+~_dj`');
define('NONCE_SALT',       'B+:7GpNItUR1SX>JFqDA]j{f2Wh:|$Vt8{AYqz}etLDsN-R$xO^:w:a^]-He5H*P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
