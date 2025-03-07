<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pivov034_productiondatabase' );

/** Database username */
define( 'DB_USER', 'pivov034_productiondev' );

/** Database password */
define( 'DB_PASSWORD', 'ENYEnFA2M2n7BX8' );

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
define( 'AUTH_KEY',         'Y9(fgq7y`4NVP#tvI38Wrz?#gWC7C5Z&GyH$102n,umr:tt*mFhlV/Ya#o-Ba~KK' );
define( 'SECURE_AUTH_KEY',  '*HZb,?Wv>`[W2gHMADCR4m1{ k_1W/u>.pjqg`JB))qsc 2gM>P99$=xVj?w]7>y' );
define( 'LOGGED_IN_KEY',    '-NzM:Ar#6O,*VWim74UQ]jOqcoMQLaLt:]W,mU(&f9xA]*o<T&03hFn%*Lv*1h7n' );
define( 'NONCE_KEY',        'r{/Q~$1-Z>jG%J Uz~@u5ckz%(* E$J71&goR=CIp6Ks8T3!wQ8&7r-$dxyuN2,7' );
define( 'AUTH_SALT',        'OtflNaBlA;dfjI`i=J2]BI8gwIy5(I/nhMD0E+w^k:ZRTINkEqw1g2ED5*xO7K0-' );
define( 'SECURE_AUTH_SALT', '!9D6Jg80t5Slpv_h9gtH2][]2dKI?RGJph0[z<AgB_oSvDt4I3l8b,YaQ9QvmH|U' );
define( 'LOGGED_IN_SALT',   '7ux/!fV@@0&K67DY<nccxj_8Af({%&vSt2#xQ%%<Fa?sA](+vRGMZ}LOpl-T7fG(' );
define( 'NONCE_SALT',       'kn3{F;4([/&Eavge?c9:AN>hl%mKv;)yx|F@U>CY[hg-bEC9z8=&@<@AVh4NkNZ8' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
