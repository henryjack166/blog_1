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
define( 'DB_NAME', 'offersee' );

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
define( 'AUTH_KEY',         '%l2rl=4ahCNXz>SY(pb]aLloM#[lHtOUlVKVR|~:?l@g>j3xm+ N`* f3Y?|f`hp' );
define( 'SECURE_AUTH_KEY',  ']2{xD@5*NAq5vW*OAVSm=c/!j%J>)Fq_AeK1g7uEDAUICp<T,/]nj=2{Zt^k4 N>' );
define( 'LOGGED_IN_KEY',    'V{VuV62.L4fQ3tJK*1(bT^c[,JPd;)}U<|RHvl<rb4I+;[8#BINmejXx;X[u(W*f' );
define( 'NONCE_KEY',        'v@bJcs~@}+1Na%Bvw!uu,!*C9RKBz[2wk=1cyqKXs(!J)[AHb(D4G(b?&U[(6c3*' );
define( 'AUTH_SALT',        't%2^Ecp|1dK= 7T<2Am~uE7vA:SMN?;PZ9#~KV~iY7O$ k~T`?4HK424h{^U@,2L' );
define( 'SECURE_AUTH_SALT', 'yNmx~T+#H)!C{~1DxS/Zz&`;gzP><yx@^#6C9$Y=6-&WC4dn]@U1s#I+ %g`~ECr' );
define( 'LOGGED_IN_SALT',   '[PG+l@0lv;Fv]MU3f:i`8B*#+*jiQiey]=M2Et>1EXD^<rYL>sjp%9@/ BL*Zi<Y' );
define( 'NONCE_SALT',       'Ki|wh_9NXR_*)zc!3e#1i:4giBgo hnB={p#yZF-&C0GJ_Cz*^hV3=0clW~5nmsn' );

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
