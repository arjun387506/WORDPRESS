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
define( 'AUTH_KEY',          'YP^7}>jp<p4i=g.?>^g<!Q.0rX]D,sZgR/UXpY3BQ~rEX`CcK7,/HgBU%)@K:x7C' );
define( 'SECURE_AUTH_KEY',   'nq}6}jh~-)OKVhRFuh<g%w|.SumYzNp+Oh2z&)rum{l*ht.{G&Rw}S0x{h=,S3t.' );
define( 'LOGGED_IN_KEY',     'x=DSmYm>*sdT/To5-xPd}[VgW$4K @@Q*cHp-@0PngiN4?UDMYx>]F#22u5Wil+g' );
define( 'NONCE_KEY',         '=:1^w&#we)cHN5g_^}zv?5wO2dsjyf/Z^X>&<KYJ(]YW?n;.*U}Y6@&y.*d1y=uk' );
define( 'AUTH_SALT',         '8TC/>4Rb5onCFK2sGz}EO6d%UI`>Xt5?oJ44)4B&D<G[KxOORi{,C(d7,),o%S^n' );
define( 'SECURE_AUTH_SALT',  'PgOoq<{1dC~4Xw.zJM[{$0HWhDLt]%Xc;r[SvKmw0ygy8MYdI~cK| <WT%D6AMGl' );
define( 'LOGGED_IN_SALT',    'h+xgsSxVmQt!z)bI()lqK6(dolF^Y9?B35!g<8*7eCxI??%2V5oVlvON 3PXgZk~' );
define( 'NONCE_SALT',        'h7@gF(ou}=/NV$Q|M|c4.GV[!k;y%`3I.>IjuC6>y[$@ES}g1.^M@}HUQbK>-$`c' );
define( 'WP_CACHE_KEY_SALT', 'u*hAhFt}k=S3]mV(8WWVzD3`4#*n#):,k,=9Vc_^k1@dms**8om8a#<Hh@iK`)8E' );


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
