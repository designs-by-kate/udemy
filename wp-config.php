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
define( 'DB_NAME', 'udemy' );

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
define( 'AUTH_KEY',         'kh0#B[IEU#-E^<M{W_c}^%JbpbST5{GNp^KRRlW&o 3P0<vsF=BtMMz`d][Hw/U#' );
define( 'SECURE_AUTH_KEY',  'Qu=Xy^mx%.5=%YIr,[7Q!!lK{Y)E}Dtdq*N-5/J?o6>~v?0?nsde9F}u9.UeKerd' );
define( 'LOGGED_IN_KEY',    '.3NLEs1gY)od5:mH8U@#4a+-H@od8BN9!t(Zyjo)kitP?|>G1o1,&JWC9j@5[7?P' );
define( 'NONCE_KEY',        'dSRVC.~`bohRAXjRl2n4/)Zw?%46.o[>Da]]e8ueZb|e=Ble#*vY(7#[Hv}}^0c;' );
define( 'AUTH_SALT',        'ELK]%Vl~Ty(F&oc~;B(8k4JpF}i5M4.h8iEZXd{s4QEVFYBcuQPxwxWG(25Nk5NW' );
define( 'SECURE_AUTH_SALT', 'c&pb}l}+_/[siL*.*bG}_%qUyTx6MA{Y(t=E{1dG^L)*r2kI zVC}MKhpMdJDCjV' );
define( 'LOGGED_IN_SALT',   'I/bl @ctcCD[Sk`ipJ_S~jgS3.*Z7}!bvb9N_|R56Fyw*emABRGoB/} |mJXin%D' );
define( 'NONCE_SALT',       '2WJJju3HIEn<rjV4qb7X.cmCGq5E`~Ti[>,e6DK3ok}L5Z`g{WJmW>0nKL`8`&>_' );

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
define( 'WP_DEBUG', true );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
