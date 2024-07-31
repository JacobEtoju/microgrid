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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ',V4f+ @TF+P NGM^qeL+`V[}h(WGG1S!wh<t1.LkHPafc9~8!Vg!7R1;x3QnP#||' );
define( 'SECURE_AUTH_KEY',   'WV<$4HO)M?TnSCB.acUG@.)gRo96DBiTz74he;<?1P):p(rM^*8]j{o3=Uw/hm.$' );
define( 'LOGGED_IN_KEY',     'phB4e<n?i<IpRS,Of~qZ)tfi uf{t^G&>Y$PpP(Pv]hkhnry+R5)vLr]`9yo]>4;' );
define( 'NONCE_KEY',         'J5N+rv/AAmWXw?SHaZ5{u+yo~>u!Tb!3^69d=rEYe7?.b[Pd_QL-bVYjs<M0EyP,' );
define( 'AUTH_SALT',         'Bj!u0e!h~394c:I[&KwH4U+ge&~rjnse5,,S3]Fk,3^#Ir:uZR|_#BSD)`PcwU^u' );
define( 'SECURE_AUTH_SALT',  '~dEX@U{{,1fWfXF>cVSR_`!S_[g 6^[{-nxtveTp!D6 1ph bh,.]nCf9o2W{&Hn' );
define( 'LOGGED_IN_SALT',    'Wa0_R}h718+v|Tddy<qe?.y>:Jh8*nG_?,G/i+P/B_`[2Z+>~r5Pog-TI^4!p&7v' );
define( 'NONCE_SALT',        '>1&I9tz$A:v1Kv!OXAm*!y-&>2|Tp0RL%d4atV~`f+t<bi6A@BL(+sWwzCi9AklU' );
define( 'WP_CACHE_KEY_SALT', '@1aaNC61i5t4LFoVlyO?p({s^-3#N:bon.:srvDx.a}}:bTW0~vjw|n8b9M<x93X' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
