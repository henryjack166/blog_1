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
define( 'DB_NAME', 'eCommerce_project_1' );

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
define( 'AUTH_KEY',         'C$:gWxIe?T9(*J*^qe;Q(rmB}F&!}A/1LJ6}cTjcPae$X{(d>m1_?{2z~/8*jApk' );
define( 'SECURE_AUTH_KEY',  '4(OzzERp0R#RQw2A<#FZN1SA!co8pvt&n=c.^lp}Fn+Oq{iF#R(x?r6u%4cd~xY2' );
define( 'LOGGED_IN_KEY',    '_`/5LG;zK.sc{RO1FU5`0(4kl6.+?hI@G>_!;#EHMqVHWN{}.KnIliBBZM8OGFMd' );
define( 'NONCE_KEY',        'p@&)fK`x!V;u2^3{I|$_?{%ij99+TGTE|PKqf^qw6aoFyS<Z^8Y`re/>l9g9 +*]' );
define( 'AUTH_SALT',        '&xvQ>1x.;X]%gpQo61D.XhEKB)5?]>/,KiR4jaejZ7dAb/+:5y0:iaIm--XT?WFK' );
define( 'SECURE_AUTH_SALT', 'n@{~QUpYs?|htnV61sLl~GEPg.]eDY7lL{$8OGs*nnE>hR3c(}.{IEiPwP .]sk9' );
define( 'LOGGED_IN_SALT',   '2TzQ3esC$Pmae`b}G6Ek3aq!/>Y2G,y;sOSEC=u2!}>`9TEFST,9moR9w0~gVtpx' );
define( 'NONCE_SALT',       'KIet;ECB}wGc%BtHjDFWph,J@LG3x#`S4O|T)NWtd&wQ2x$jo7Y2YlfyDoezr/^f' );

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
