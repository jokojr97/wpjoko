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
define( 'DB_NAME', 'wpjoko' );

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
define( 'AUTH_KEY',         'Fz>Nj-|RPG+}3@-}hSmgOg.rM f%os:u?#:1B%J.6H+)?9d16WipruzsSxX`L9As' );
define( 'SECURE_AUTH_KEY',  '+C_^p,Sh`sO0)ZAIsroPvJyA}u8gaN~wEMTWjC|)ubc(9+4=(rzmkP:p|[e]@ZG=' );
define( 'LOGGED_IN_KEY',    'C^FhpWJd^NQ~7C|=mw(x`.+m{#>tqt3Kz>C`LS+T(p0qawT1(`hN=L%~bwwO{iU^' );
define( 'NONCE_KEY',        '-EoA-QeY5c#OB!L&F6I3e-7~/2>?sOTE@(8sYl6h:)93NzR$VQ@>Li.N7C)+5YaE' );
define( 'AUTH_SALT',        'Dt4`6-oW:fD@Udw8?l.ec,Mc)dT#@F:/EQynGEq6np P<BBF7tT_0f7rOO$:D&Mx' );
define( 'SECURE_AUTH_SALT', '?zXX2<%ORB/&pz=>/4hR;*&F`P@{%%^cv{#t}_[v7O=lH/Kgau?[YepS.r0Dz/yJ' );
define( 'LOGGED_IN_SALT',   'rI] >)-FJlt- #tc3H7G!I_wj-.I<-EJC.)fban9yfQT-<#<6*Ol48LXU@M?p%zj' );
define( 'NONCE_SALT',       'e?gjpbJnjZVtQ2hG$@ZF8YM|ewcSEcLa];MJq7v/B m9]nQuz2xKF``V%&mquB6t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpjr';

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
