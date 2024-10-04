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
define( 'DB_NAME', 'Wordpress_demo' );

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
define( 'AUTH_KEY',         'qCd$ nFZIb`9Qykn0!ka)Hg/o%YOhzqEQ YePL*D$zv}<4Ue~.As -~aOX!{i/RC' );
define( 'SECURE_AUTH_KEY',  'qrL>w^krb*-Sk3y63RR)r>o#iIr3*JehdlCJ~Ir0O=az1bT?2<wO]#sbHCUDN0]2' );
define( 'LOGGED_IN_KEY',    ';q6Sy&%B[PQ>t-YMRxEyj:L8>T.HcVCcrohW_hVWO{dYTP>i}tPY H4G4S}_6?V*' );
define( 'NONCE_KEY',        'h<T;0#Y{yEc^uS~9#jd4beOIbk?f9`OuNF^~d{w>FL$X$jge(/  M&gh2ZL7Z0${' );
define( 'AUTH_SALT',        'Hy9LN*Nxn:7:bx)7R/WuH,Mqa<wbcvArZj,e*xDg4by-2:P<%AAgM2u&#,Ry5EQW' );
define( 'SECURE_AUTH_SALT', 'A/m)z0AtkNm:y`W$$sTYnSwqEdjo|sIv./|4$1?[#trJhAw9-esj%}M^AhtNWcAl' );
define( 'LOGGED_IN_SALT',   'I Kqz]Bptp+q6p+t<V7Xy]*a;#z]wmqTRfcNo^:|=*T;f]pkifds=veXevTH>P@7' );
define( 'NONCE_SALT',       'r1kZtQMofj&&O>cK&pN5;jz1z4CCE)TZ610<^(di%Kl#o&jZ,B}JLwkWPRqq->p*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
define('FS_METHOD','direct');
