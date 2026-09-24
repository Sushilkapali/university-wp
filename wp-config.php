<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database-fictional-university' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6wsZO/W|7>`[If,.TIO{rE89SP2X#AaH*0(O/aFEBR>3=M1]3mSuCGVKRLfbI#<`' );
define( 'SECURE_AUTH_KEY',  'SXf^;.n5Q,R}U~RoZ!%n/o6ufi2U:Ypf:*}Afr,!f7~%5 [L_^ )MdsCqJn:Y5)B' );
define( 'LOGGED_IN_KEY',    'vE#f}@0WmnjH{DUetk)ep1zec]`z5/6#Kod49{60O2RLz-X;$*{Dyl,7XTvHQnw*' );
define( 'NONCE_KEY',        'qIM@F)*4Y^fV.LXTc(gYR6[FLmHhd=0_CAVf-K?gl~~vEoiG$JD:iLa22_No1yxM' );
define( 'AUTH_SALT',        'v?o^`IcGriH&B%#Ohm>FGPsPjSB>XEqq`0:Wo>xErOHA_3Un$*LF5htN8,8MCxUn' );
define( 'SECURE_AUTH_SALT', '~KwLkeyHn>H?6|_03ahhr!IH]]mQ~*z4W8yepi?-lgCc&(44p>Tk$ b5&N6GqN,i' );
define( 'LOGGED_IN_SALT',   'bc7kZ!IOb?DEp02=hUI?2^q^pVw1R{,:FB;.b3 cg`R.o%#Os]WlU{RV~X 7E/l@' );
define( 'NONCE_SALT',       'f!2R~<t^e!<e+5.y5~+GS|jq<1A]_QQ^[x$Wr0Kltm`C|,1esFJ#<*0|* JOO*96' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
