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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'smdyan' );

/** MySQL database password */
define( 'DB_PASSWORD', '1' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E+qzC>ZoP9Wkx bn.4/tlj)Bw%o`/*|W`vWr%@w7TF?%qx zYDP<x|@W+yr:;~S_');
define('SECURE_AUTH_KEY',  'Z-X>bki7pxW-l@L-t%bMzsGl@IYiM*snAf-PMR{EnwY[j?Pi|%IuDAV)+s=N:H~C');
define('LOGGED_IN_KEY',    '(#VoxhH?=1s)_-Vh%MSnkN|r0_Tw]P@LwrglG |jlG~X$Z^f6M@eNx{;x<B7-P|#');
define('NONCE_KEY',        '{+X.yRW`Rixe+<I6R|wf+,s>P2|6X%6I.1]55wmn#-%:Q05Ekp[c=K+2y^xl)f=2');
define('AUTH_SALT',        'tD]>>[,KjyNo9[kNpVZI#%@#}=`8$zy $X_={Z^%6i|&Y]nmb(/6gi@5{46Q)2`-');
define('SECURE_AUTH_SALT', '55;6OND[.l+_wM,de.(+~9?txSdd>W:#jTKl1}<B+]!|x=`/*|y.[ +i|swg|6t{');
define('LOGGED_IN_SALT',   '%!Z/LnUa{DA5VWz e5$5_|f|KwKc=`-|BlIaFFsLRDn-Y#54*OCO34$+Ub[.v%22');
define('NONCE_SALT',       'dk|Y-(`WV~GiN+JHZ~z_S/xs^zR~N_c+eXcCww} !LKiP!ZDbbOT5M:,Hl>1N;``');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

 /* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


// добавил по совету в слаке - ничего не изменилось
/** WP_SITEURL позволяет определить адрес WordPress (URL).
 * Определенное значение — это адрес, по которому находятся
 * ваши основные файлы WordPress. **/
// define( 'WP_SITEURL', 'http://smdyan.42.fr/wordpress' );

/** Подобно WP_SITEURL, WP_HOME переопределяет значение таблицы
 * wp_options для дома , но не изменяет его в базе данных.
 * home — это адрес, который вы хотите, чтобы люди вводили в
 * своем браузере, чтобы добраться до вашего блога WordPress. **/
// define( 'WP_HOME', 'http://smdyan.42.fr/wordpress' );

// define( 'WP_CONTENT_URL', 'http://smdyan.42.fr/blog/wp-content' );


/* delete добавил как референс

'http://localhost:8000/'
define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
define( 'WP_CONTENT_URL', "{$http_host}/wp-content" );
define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
define( 'WP_PLUGIN_URL', WP_CONTENT_URL . "/plugins" );
define( 'WPMU_PLUGIN_DIR', WP_CONTENT_DIR . '/mu-plugins' );
define( 'WPMU_PLUGIN_URL', WP_CONTENT_URL . "/mu-plugins" );
define( 'WP_DROPIN_DIR', WP_CONTENT_DIR . '/dropins' );
define( 'WP_DROPIN_URL', WP_CONTENT_URL . "/dropins" );

define( 'WP_HOME', $http_host );
define( 'WP_SITEURL', $http_host )
*/