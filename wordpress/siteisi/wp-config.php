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
define( 'DB_NAME', 'sitewebisi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'o95zv2>++qr&s`+#~jzD%/;cZ2HEY%U<Wzaer]Vt&Ncu+al9Uw;(X_XjsDTz-NgX' );
define( 'SECURE_AUTH_KEY',  'g@LZ(I^1v[~V,$Y(T<RB+*18peY1ch{rV~9B `5obf0wPv?-gC}mm;t Tx*3QqV ' );
define( 'LOGGED_IN_KEY',    'fz5SFJ({StMg<v|NIPcM`NM!o<4I@}SAr@3}3&%jr5o0Em.o AJqTqR.k%Y275F7' );
define( 'NONCE_KEY',        'Ciz>t/qQe JJC3QzdvRKdW8Uzw^{FY_w]KG6IZ&[3I^TKomKcq%Ob]<s]@5ouTH*' );
define( 'AUTH_SALT',        'GS!F=rn0Z}y.<mYCJDSt>~QI:`Ee wuo4-pug2OiVR+$_*p@^:&}?=gOj9UC(`+l' );
define( 'SECURE_AUTH_SALT', 'R-RD/*Nh]#U{3Pn6ZKTcDwkJ<)aWG*gx-uSSLa<EJO[g{4Dz8rpo.?wHxmwK;kF9' );
define( 'LOGGED_IN_SALT',   '&70Gw,tQH1/4Y6|kx%WWV%[[.>P3&4pA540Y{@.EEIlam=&B>)!H-}{ibAd=@F[Z' );
define( 'NONCE_SALT',       '/m=V)a$p-w8gR@)0)W$nux^PfH6s(8)bnO|g~:A/qI-e)emX8%YOb4e 9l)NUSe6' );

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
