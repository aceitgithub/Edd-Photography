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
define( 'AUTH_KEY',          'Bt[,p[OnY2-73>kH)65*GVF31lh$W-wQ6i$ac=z[@tm1dld>}H%#b6]iz:<6&ep!' );
define( 'SECURE_AUTH_KEY',   ')]62FlYy/}(lZNVgCK douNf L7#ud<(Xu,Q6T2MlN}ZTfG&w)-T%5UH2rBQ0-fV' );
define( 'LOGGED_IN_KEY',     '+SBiW{t[d?z_{j{<hx[F#`xi5&$St21c/6<MRH{/;G q4f]?`4M_CotI1mE#K=.H' );
define( 'NONCE_KEY',         'Syv/0VqJ>#)gtu58V3KjG^~>}Fu3BO<)=]LFIAB5y_8uLZo-^ 1%lP(cT.=Rq}u*' );
define( 'AUTH_SALT',         'hmI36@kJ+4*$.tu27&D&`cUFf(#Zh<cRZ|>s$Z}0scN:0Tg^|hU^^JL:h._fj^Jw' );
define( 'SECURE_AUTH_SALT',  '/)!7m:kR,z=M!8InbM0/}7h12J~{rd@<L^~-3c2F==RKuXsl:s!_6NO5,A`2=keQ' );
define( 'LOGGED_IN_SALT',    '87/xb+?&?{D`E~n-zL1Yv)!OzQ:QHdQU]&Gd9mKaW@<78{vz|]8&@6aL{Rii+eA[' );
define( 'NONCE_SALT',        'f!D@u##J0C7.bK#<S15N|dpLp:S8bUrrDU^Z3Yr++A@bHTd37B/+501ifrWK1g-T' );
define( 'WP_CACHE_KEY_SALT', '>fm0`{Mp{O9(C5CIQ!4e)POobsxz`2dYyyD9HC=n|C%NU8]yr u13t96GAw;8bCI' );


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
