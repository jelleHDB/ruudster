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
define( 'DB_NAME', 'ruudster' );

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
define( 'AUTH_KEY',         '*8Ila-E TF~7#qk@m5K8 ~!6N=UL/W+XXluSg(y9%:XtU5^8PIJ**8!zm/zPn+i)' );
define( 'SECURE_AUTH_KEY',  'l#>4u(S#!V2)~-W1)y.~V[mU3T;bN1seDR:k_Gb|dFoC[Ahf[V@Q&;73^&B [wm`' );
define( 'LOGGED_IN_KEY',    '82#MDRG2dVUlrI##yxmku@=Ujuhf%!xOQd4[x,q<G4Gu9K9R!k/-?.M|td9i@GFH' );
define( 'NONCE_KEY',        'ZYUG7Y6LC$B2DDy/JVGtfy.ay~yK+q`lH@QV]Fh,EQ$`D@Dv76M+Z2@g(s8Fy~o0' );
define( 'AUTH_SALT',        '/yC@?iM;{EFc?{8_&`G,$`ii#`s8Z:g=kO/|m}z!N5`@9`]0vr} +MKSL.$/1$eQ' );
define( 'SECURE_AUTH_SALT', '>u%|/&urJbT3hS[)tjke))|^g;yx+ER|5Py54fJ?K3>-Lj?,oyhE3%<]vc^ex3kh' );
define( 'LOGGED_IN_SALT',   'Zeb9$vvt~R4hz[<_gU=gezA+{TS-raPp_kcO3,(CTxY&!U`$QM1[au75`s@*+^a?' );
define( 'NONCE_SALT',       'Zv4Li8Z2?d~NDN`-MJ]>&sCC!s?8|Lu9$lUx_sHWRD_dndXoCrJ;@fuTKmd$AL1q' );

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
