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
define( 'DB_NAME', 'propieta_dev' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*/FO}qivPB#t{pce$gk}38<A|yL.WHzaVqNh.LO^JK*N&kZj?*_WpJ^>YsUoH-F&' );
define( 'SECURE_AUTH_KEY',  'i~;HWb{zrgN%C& B!X%wK!hjH$*Oa;%G7AQm`ZcDb0$Ep6Z&O@>5?ryGUkd&F-A4' );
define( 'LOGGED_IN_KEY',    '48JP<`j_UXq=uJp*y_QgGMCEjS`T(gCZ88TO:WO/(  1o7il?b#O9ubn9`01zAcp' );
define( 'NONCE_KEY',        'OosJN%`fHo^^|.,2ZC+)os-d`N);^CN^-ICLLDiYor)30#XgLjZR}1ql9QqPF4xh' );
define( 'AUTH_SALT',        'vA}eo@pn]]:|I/w6^P;6:c+zYsJ8rX8:)`,XN0I{~Gj`qiN+R=c!p)ZMWb!8>3(M' );
define( 'SECURE_AUTH_SALT', 'BVt@;;fP5kl?M%|d9e}L?k),@2(s(_47!2uE=*1[S[,~EC?BE[*BjCj2YUq+CVai' );
define( 'LOGGED_IN_SALT',   '2:)}etKnu<l) -J4DdNSa^:I%Y$qOIeA)0Y]]+Z3~(;]ta_TcIJCn}#{H7oA`-gP' );
define( 'NONCE_SALT',       '#d&L^>@zfd>w7.SHb?)B2gDAu9mHNVu_)@2NzddBW%(euoYb2uO-EX^fo|*weR8L' );

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
