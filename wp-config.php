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
define( 'DB_NAME', 'alibaugwp' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin@123' );

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
define( 'AUTH_KEY',         'KZ@3{mK>c. jy>GfJ~cmjcVkZ/B|v0NJW=Fh>}QO;6S|+o%6?$.ieMqclb1Cx01N' );
define( 'SECURE_AUTH_KEY',  'Y mRwLY[&oN]zRh#;842cU3.E%Xy{GhQA,>g#w2TzshM*j$tZvNdZC!33sflb&Y3' );
define( 'LOGGED_IN_KEY',    'F>d:!=VOZy~$a6z~wqD4z2$~<fAxP>#jeKFWLpNz^hqW#Kv*;S0{MKyb8Ld|8P%=' );
define( 'NONCE_KEY',        'uYYB3`20I_,:p]}6[mAUuzTZ`X$s~_BNszKr/pol,Jr&+W:SD1/h=fBy;iMYa.);' );
define( 'AUTH_SALT',        'rZeQvyRj84q%`R%!%C+kX-t[^iD$74W+I:B[QB)vAdb#Z*1?k{#I>;]DJuJw=`fT' );
define( 'SECURE_AUTH_SALT', 't?!km`[ }dh$TfkZ|l%g$=iGv{`iV$GMV9djHFtpF:F}!%~E+M)Fb_9g#h0|CW,1' );
define( 'LOGGED_IN_SALT',   'Z0~M$6,gpt7qI4n-Hv#W2bp,9/0hF^O<6-omL*)4tvL^BO9b<gm?% y#l1Qa,dfG' );
define( 'NONCE_SALT',       'xPgL9So6^b8T-cW|?KiEX~Gp[j:l}@y@.:cBb}[cy^$YQjI,RjU2P1JIHD%L(;Pw' );

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
