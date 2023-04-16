<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'k4X8;b_4pv #> jy*~AQ29I=+.vtM{{fIx`FJH1Kf!!;]ju&gIsD&z`*%B4|?hDs' );
define( 'SECURE_AUTH_KEY',  'y=,A6pb<_|3a?s9PJO&Wj}L VCcJOc`+1p4K3=<cPLdaHUdUHv<gRi[z-WPRV2E|' );
define( 'LOGGED_IN_KEY',    't!6H=3L+1sp4H.M7yN5WOqk+`eLi `+?|3xkWu@WovmD=J1Vk,CZ1Ue v?.3%!uM' );
define( 'NONCE_KEY',        '*,75>~r.NLa:dyQ&j!lW:,@kWF/[od[Yo)7X7Mb;w8c&r |*{.?85px&]8$duhr ' );
define( 'AUTH_SALT',        'PhGy{ih~ _%-AU&[9KsNBoKiR$<.3WSYy2p+#N=y=?dJ&,vv%u;xverqSa9=,o3{' );
define( 'SECURE_AUTH_SALT', ':WGQzf&)wwc> v&jCRX:2/7|:=#_1WwUXi^`r(Zwx& <1^w?JzR8P=IrBd9S3jT9' );
define( 'LOGGED_IN_SALT',   '>5m0uq,9wq]ou#dHj -6CCFU#)Py> 1l#K1p UeIs8uclX!Pb8,n_RNbBPy0Oc[W' );
define( 'NONCE_SALT',       '1CAgI/WsT N;q-];*ke`1ptd>%0^,yDvKo3J&Z6S|A;cgvA3-L=-h;X?B@]CXif(' );

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
