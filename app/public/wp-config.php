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
define( 'AUTH_KEY',          '3U,N[.>q;&Bp^a7q3I+ <zd{/sJT(1u=m;YDSunK&vD,@y`ujR1cJV]Jw1E&nkV(' );
define( 'SECURE_AUTH_KEY',   'Sa0-_IisRQ9!ew=&*bw8+#v5oez :duv1=>Poq<sErb`eGxO5>^#q qAx>goO4,3' );
define( 'LOGGED_IN_KEY',     '^kyCI[JmUWf{j|W{j8}Ir1D}0KTKGH{DaO0AD,@zk1^o8@>OK|/L#^0{ycAxrDt/' );
define( 'NONCE_KEY',         'C8*im^mytNBG$Wv-#+#AKP BU=z4?!eY9&D2v9z0Dg~b$(a[XCG(vdKQU>|x Yd(' );
define( 'AUTH_SALT',         'kTIP#_f{n1<#Oq:><s&jlQ)B!nd8gIyj 0p? IhGu)I?PwL[Y:Y5P]Ky<f7fV~4y' );
define( 'SECURE_AUTH_SALT',  'DP4+O&0^?bbmK8YAE$N?o_.&hQ8;{=&,wvlQ^U4(3Y+W|)$0ljv?P1q?)%v&^u$t' );
define( 'LOGGED_IN_SALT',    'A$*AS-c]q7G[<<}9]W~Z=fC{2zrb]usH,8ddA^=d?s(/0B*kaz)v>p E)tpEq7Oa' );
define( 'NONCE_SALT',        ')/=gNRFga}YT?EC,kU>~^Uu3v(zXoJ:n^q^H@!;}|~HZ_~_GpEF%96k:b;aRN;.F' );
define( 'WP_CACHE_KEY_SALT', 'sp=QLNm`AK&=8/D`4FGGM2jy..3Vq)[SvfaimvhVYXh>D]o;4vu<GjB)4C_0;Q@g' );


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
