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
define( 'DB_NAME', 'trinityhardwood' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '$f@jqf%dzLU$9;ftbAz2OZ;iK8YbgVEP>TFRMQ:~^ r0/;I/+tu bbN D:#iC.yy' );
define( 'SECURE_AUTH_KEY',  'aB5s=,P3kiyj/2:^z.@z-@ekF<w/2%,_ZraQhnBmA+Wmy&)U]<OunB_Plhz/;s6W' );
define( 'LOGGED_IN_KEY',    '1RaC}UUe*?QJsV_+g>B5HV5o`LP>*v{P#3?1njB7`l9g&@v:d?.P`Ce`7.&}Ov>~' );
define( 'NONCE_KEY',        'kF:STcvbPi?R,f5(C!soxUl}{b[}NNk#]L|KUs*}[Q:kQp!sV.pHUaU?d14B0muT' );
define( 'AUTH_SALT',        'a@.6j%`t%Q4#%bCM5*0D5K<_|2rFDK4hdb6wBk}bnH[RlLLteX.ae&rm*Uj& Pwe' );
define( 'SECURE_AUTH_SALT', '!UD{HZ6i_M1lqSo/n_zvwJ<RQ}/.L<jEjaQwUYJQ.Gd2:#dz?fuB|)SL2UoV*OA&' );
define( 'LOGGED_IN_SALT',   'P[hoC-Y%1@1[ 2-:AN^T@ Q/+?I}bHPD63|#!%uK}6=?Fu!O<d+4@T~yS $AH9;Q' );
define( 'NONCE_SALT',       '%f=<Q^Mff<!e 1FBodUEolMSb4r~!6wH~_$daQM<*Rm9SDNV-0*j~ZZ|jrr3}SAC' );

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
