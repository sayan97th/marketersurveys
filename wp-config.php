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
define( 'DB_NAME', 'marketersurveys' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'kjT]K}/O<*HBZGKYZ)MkOJTTrKRI<f@lmiJopG!]i%_Q=Q3h49hko.*[r)B6kRGs' );
define( 'SECURE_AUTH_KEY',  'TYARa;vPB+s 2B&2+m$mliH7Tfv(S&g1}xQDzR[9;+&:D8uIaP;V*&H{RmR^>77I' );
define( 'LOGGED_IN_KEY',    'M$G>YPG_%.U^T! 9Eep=>(k!<<Xs#6ap%YtRA)F~>|:aF]v_e&D(-NZwL5dOeb9M' );
define( 'NONCE_KEY',        'q2k?a1;|M=CW(dB+@Vgh$ECR:-$/eQ=]nCJel&*YF/Ck}]KK[^{]&$r~u>6p pb8' );
define( 'AUTH_SALT',        '@o9j (Ww*<~~(h38{*Z!PRCx:s(#7,;9P)9 eV^p|(Yjp;9_rxtir$sraaf{]wDy' );
define( 'SECURE_AUTH_SALT', '2(/%o+Nrj&~{P&@:r=YI^A!SEd=k6OZ%@` g#N]p*8tF@6Ao_@9y=3w[Qq,k!P1a' );
define( 'LOGGED_IN_SALT',   'IB6%%*^HR5N2dWV($ hAB!)XU*owd2__s)&3n&}9Mr>H`i62P]qCU6/B_X=n[+%a' );
define( 'NONCE_SALT',       '}b:?<U4B >HZ^le<Vt#xSW`HD6CI7Wdz}w)X-hG!V2?93OOc`2gl?V Uj+hy,r#$' );

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
