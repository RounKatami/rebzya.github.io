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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my-wp' );

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
define( 'AUTH_KEY',         'g-`x}R;;Qp*-T.9J2uvr@HruYI?1aFCln2-7ZF;ykgVX(X,/XkT+harTkYum?S8[' );
define( 'SECURE_AUTH_KEY',  '5B--5`]>I}}wDjbNz>]<ND]G9J@W-%%2YZDy{;>xT0XyZ%nxSKZ)TL>|(rB8Z-=-' );
define( 'LOGGED_IN_KEY',    'Ab8_$7.a1D4Y1%Q;l_r35^w0zJW(%K4L-GbSB.oBfqZ7mE s@Xy<}q4!)W 6?4CP' );
define( 'NONCE_KEY',        '&CQaV33`[Re}H93bRQ_MalOE:EjeP6|)#NWwj;CITp>#c6-},PtUf?4mw`egj8vm' );
define( 'AUTH_SALT',        'qju$:QLoUa6qA}5uHouwOws9gpZnkHd0~S2t0FD/v%A35!&zs{b]Skl9+6zNP-* ' );
define( 'SECURE_AUTH_SALT', 'a[cAO@u05#=Q>hnEk(qsUf+OrM<s09:y)/4nZG]{GQTDhydx,6w:]d:T t3!virI' );
define( 'LOGGED_IN_SALT',   'Gr.{gW2A;]kzr{NlIl2VN2?(@7GE>*fU(ZBrn9o@j9X=J{[*UW&O^SHs_j3&m12W' );
define( 'NONCE_SALT',       '1cU7}.^I#Q?ExotZ:7$^8bNKOg/81baa<$l:J[^mz[G}$UM,j8YY)Wn]<WAgI=h@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '1qbu7_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
