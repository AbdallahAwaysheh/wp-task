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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '0ON%35}u]o=x>kf:0k=&d%LWwHaC{B[G$,78_yzjAkS6J.Lg960BTR|-L8-c1U{b' );
define( 'SECURE_AUTH_KEY',  ':V3QpyHs~8a7*6QfX80p#iYB/_OY4Lq*cRdjuh>B8RqG$nCPCXjpec*GqWZUnK}9' );
define( 'LOGGED_IN_KEY',    ')>_.||Rxb6kOIZ_ZW:(2+oDxon_)?NWno~ZRQ,k}4hnwI3<6p7a,u)0Ka4j/DHf3' );
define( 'NONCE_KEY',        'CAc#MaZ!oihTlpUoQQ)0RLm+;y|n-FUb$AWNdNPHygV[gxxi])s>XqfU{/d!gaUc' );
define( 'AUTH_SALT',        'nfL>jIu035:?TAo6%w2632LK7~$|h:#2R;cpP@=S5y.m-3T9wR=e8!i*p3>xX(;c' );
define( 'SECURE_AUTH_SALT', 'oGoPzbg$UZ!`^vXzwJ5Jz*]IP: 6]$HM+Ed(u,raw!f.1cA9X-&t8(-zM9H;V;rY' );
define( 'LOGGED_IN_SALT',   'uz)#pbUOn%uz7-(Fm^zmI;dA;{X5e.x&E(KB!wf_=dDayRGTkMR-$k6EL$H|P{yu' );
define( 'NONCE_SALT',       ',M.41.Q8eAo!fDgx!KLX s^%e?{JB?17vQ*7YiTaXW[UKD~zGv%<J_|7OU44oJ#j' );

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
