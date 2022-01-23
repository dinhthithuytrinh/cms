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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'V~WP5Yi_7EkSmWFYmfnK^Uo/#-XY/E}.o0&3fMYwJlCc.^h=m!Lz[.JC6u>Rz+}Q' );
define( 'SECURE_AUTH_KEY',  '0*sWgUWfY#FP(J1,_`I-AjKWn{e4~>PbwbR#h1*QGG?,zbzD<e{sP7VPPC$Xoes/' );
define( 'LOGGED_IN_KEY',    'TY|o72_Qd0 xy`mYiY/QitMTy-SJ<%zTaG~.d|oVP%sxFhT.niVnva;[r3iYlfGp' );
define( 'NONCE_KEY',        'kyDmxN_?HluM:sqk CP2`}rt],+p]_OvN;y)3p@ks*W.|&^eF1Xe/?ImHF#Z8*~S' );
define( 'AUTH_SALT',        '#Hc;oN=g8?|KX8u.i1}Nk,04y1BzD@SYVp~Hzi:mYEa5}]obDMl0T8%{KL}Ub]E)' );
define( 'SECURE_AUTH_SALT', '_$c;y;7Hy9<nTP7f:4CJ?doD?B~0}+Aj5gQ.0,IT}`vX46A`sv>Hj,6=)<<>9%3o' );
define( 'LOGGED_IN_SALT',   '~,;,D)o=9o`}vr}=tS)Cf`[O9;LuO^?{miLt(:S3QyXQzkTk*d#j^_[-giV;99%2' );
define( 'NONCE_SALT',       'PqmU;wq7e)G*ce|H*, S%zV}({] |dR;n][>yhcW.Q4,Y?K9cX;$E`I]-aEn^`b_' );

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
