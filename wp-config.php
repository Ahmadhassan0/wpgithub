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
define( 'DB_NAME', 'wpgithub' );

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
define( 'AUTH_KEY',         'i3E?Fih5`BQx&|7)-%!(J>Mc([Sxn9=Dn_7#B!dxG_W&#T06KG*XLDy# E(<X1(Q' );
define( 'SECURE_AUTH_KEY',  'C7njDlcRGOpSx-az,xV3v+I&/XZFZ?q~yRvcI614{=?c6Y+?ahD6iKPh-Fqt;vol' );
define( 'LOGGED_IN_KEY',    '`EaVBy$XM8]Fpuaqd3.9N%#WQ]1ow{6aXeM8fJ>)|5VszZ` whOw?$&QCgwCUk8-' );
define( 'NONCE_KEY',        '!<>r^a.^j-t0}qz~zrzliBazs_l/#Z-o9VG5h1M`M99+vG[`gX}4dT1>zhJrQ8gX' );
define( 'AUTH_SALT',        'udM?U]Q+C,1&_NS=Z,0baPU6I!f-2iIXEkpWw(Bm[<fcAU)ck3TI$-*VIfvi}!NK' );
define( 'SECURE_AUTH_SALT', 'tj+5ZmFr=l5* q/wWq> vWB-d`ltXJNFk-OGu>}~Fz`1S?cENt3*}66e?GD18 kw' );
define( 'LOGGED_IN_SALT',   'q] fmZ 7h ouNWb&m(t&eeyu)}rSMDb_->A5%Y]xvk=k}Ti(IonMl2rhBc&q%T8Z' );
define( 'NONCE_SALT',       '2(CkgSca@dBUf`F`2XLvEH/v~VxIo0DrcHIp#-7AZrNz+]yGc7Att.H!Ka$~mCzc' );

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
