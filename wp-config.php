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
define( 'DB_NAME', 'kidstoys_db' );

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
define( 'AUTH_KEY',         '$$unyiqO_#8Kh)Nb`[zD`JECdZ9 S:En(}WD;.C6+-4;c7WF?1^R*]n>Lg4KK+9p' );
define( 'SECURE_AUTH_KEY',  '$vW~Wdt3.u};~ib=IS%`iBNo{EgB53ix.Bc*n#.?MOJl[d}3u(St(Hd)1T>|HhH_' );
define( 'LOGGED_IN_KEY',    'KSa]u@{8TY .V{/7{+xmN=f{{jgTafN}D]FS$^ NEfz0U!CiO]c:y|[3YVCqc[&6' );
define( 'NONCE_KEY',        'k+8:nH ]XW Om99lS>x9.Zcengfj!A8yimALWf1$seV5zhS5Xa2&+%>3 Nw7d}nd' );
define( 'AUTH_SALT',        's*(lj1-v7t0<.e-M4!/GO]hsG ORw!,I{[7bpA4?5~#h>wk)N*^%XC7x+JHCDbhy' );
define( 'SECURE_AUTH_SALT', 'U682fwX`qm!,*)=QKOic8-z-@q4,Bb9.muh@yvIhfGPt^]*#ROpkVIznyF<?U^3$' );
define( 'LOGGED_IN_SALT',   '<yiQL:T7$94L1hv4uyhW;RC8+_8uNd-+^O|dJ*ZcD*(6+K~#^q?%I{fyM}C)}B3o' );
define( 'NONCE_SALT',       'P+#W,QQ9F0D,w6f5w+a8Q?U7:m;|fjd5ss`gSIe#xu&O(rD!jD3TJScW@8vz+9){' );

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
