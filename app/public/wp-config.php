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
define( 'AUTH_KEY',          '-vR{W#jrPysHmFay43l8,=B9W%]u8/pcjm%&F*~pywQM!! V)2R&rTZ(s@e zhyR' );
define( 'SECURE_AUTH_KEY',   ';UTP%<jq/ceVQ!2/ZjJpJ6xKjb~Ko9~2]5a7],d0[P(Q1c`vokAMO&^goGL=g/*M' );
define( 'LOGGED_IN_KEY',     'i +t`K4!HrtDY!Iu[FZF:jtB2[GB,7e]w}+wo`R5p.,vzM2_yUKJ4ZW]My3K7Q;`' );
define( 'NONCE_KEY',         '4h5wyiY@]rrfSo%;5?{:Q>M|>$fv(WdO)UQ}6j/|9wPrk|n_>^Mffe0#b#O1zazc' );
define( 'AUTH_SALT',         'LU]tvx1WDDFf?W*%gyL?t7R2j*9^Pb_C r&IrN0_08.caRe8B~yly*NPt|R&R( V' );
define( 'SECURE_AUTH_SALT',  'rRdvp(m9h~]frJAQK)e7:o&FF0Wi*ZEdZ,F|dXR)Bv-3tY:_Q!m*T>aJ,*f:T%^G' );
define( 'LOGGED_IN_SALT',    '5eM[h7PJPg%x#RC$Sj]TbxImoh&9,jubfyc4K12]XZ87+d*-YQnlHh^iuiYXlcV[' );
define( 'NONCE_SALT',        'WcYCm?$&Ufrd#[B/7o7sGt}}7GziCn]bdi*ZxgDQ4o=:fk.)?*k>bxa;?n1viF!%' );
define( 'WP_CACHE_KEY_SALT', '1GB-fWk#zU=0Ttrx;x <*x6V#t}y-gI`&q3A-h;aeV2ooPJ-n&uw#6urw2Il#46^' );


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
