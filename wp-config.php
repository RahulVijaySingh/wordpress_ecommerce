<?php
define( 'WP_CACHE', true );
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
define( 'AUTH_KEY',         'Ggo[Rf_^4.jUF(o`jU(ThT*xeXGo0eO>vJfZ#]TKk=d]-0O Q}eBt5^uBpp~%SLg' );
define( 'SECURE_AUTH_KEY',  '{dXE=X2;f(7v6x$V<#iyF$moSz`=>=r+m+JgK<dY2#P,nYaU@V`98?Mk !YnYwYl' );
define( 'LOGGED_IN_KEY',    '.0*wowgPH4)3,yPg(MBm/w4~jx6tl8=ILYshl_=_Veu[(v6@]^][csn{xW(I`hmh' );
define( 'NONCE_KEY',        '^^iRe%Fo(WU2jO{Hx6HO}(bYHiy98`3t5Nb,UWwp:$&e&`laD3%c}q,d-_!Kf v~' );
define( 'AUTH_SALT',        '2=dj3uF|;IQ;eCJZg#TEjVj],^prF%:llS/+<ib,UIQn#zPe;KdIse8B;f^Xye?&' );
define( 'SECURE_AUTH_SALT', '+ 4 Aq#f%5^`A$me/^oZFYK%&r>(h+X4|Sx6p=t3X%2Z`7(cBJ VeS|WNM-~NyIk' );
define( 'LOGGED_IN_SALT',   'c=aQd_emPJB2eG.E6hw&3}0jV-]Pjz:fqUPy/O;6JYXiF?Lsd?olz*zZFncQ NqX' );
define( 'NONCE_SALT',       'SdXq3q$)iy=~}/7~.ZeYWxyPns+r@-%Zoa0tE1VUt,+oTTE{C0/-~9cw#FJBlrSb' );

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
