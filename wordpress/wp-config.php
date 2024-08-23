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
define( 'DB_NAME', 'gamalword' );

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
define( 'AUTH_KEY',         'XMbUs_sLc1CUHG*77E3pj*6^NA9$SY69>ezTp&)$4BeYj$PHBkX55.*K8o_>Riqc' );
define( 'SECURE_AUTH_KEY',  'O7!We,@BsQ,l1>8ruxiKF@E<~)}_f8g4S##-)NdvRJ(fc74$,)XJd4~m8q?W@ez9' );
define( 'LOGGED_IN_KEY',    '6Y/MyicCcAJ3qj@8B}RfRD$rB::XF$2y(/n~]etc8ywS8Qo3,`HRBRtK5))fHwDx' );
define( 'NONCE_KEY',        '$OH<J<4 g=0nkDs3@QQLsP-ch|#@2!YEijgNh/JZ P>l4?nn8&)+qd1i2i/63Ryu' );
define( 'AUTH_SALT',        'b24(Z07)kF<Y +:ECgn&+Ur`]5-2_Jxumssyq#_Y<-2]4WGA)Pa-2X1kKqzl%nEc' );
define( 'SECURE_AUTH_SALT', 'H]<|#:phYx31Qs}JzvNYV`#3BBRHKX?kDM2,PQDTmI.26grto0n,h_qvS<nK{5l/' );
define( 'LOGGED_IN_SALT',   '6i~>*b^`zU*&:K &$?oIp=az9W,Ef/tnk0>L4<&`n_[WD*x(Cs)norvNLca}Vwd~' );
define( 'NONCE_SALT',       '!AvNZhlJ!r1-FCnHqDn>[kU@QdIjokMBec$6z<!v95&)^jC?(@rm7+FY=FFb1&Ze' );

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
