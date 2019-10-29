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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogsite' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '0ed00f43f572bc2ab26791a356e1830bc7710f8d456d0950' );

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
define( 'AUTH_KEY',         'k! I`3fu}NswgNaM&0/(jP1(_P5{jCXUM{/a|=6&k&=DEv{X~Z,G_31+rTp1^Qfg' );
define( 'SECURE_AUTH_KEY',  'm<-MA9)N4DrWh7;)I|,DI@=`7aLHBD::F@pkKDT8;owV;iLl|sx*&FKTt$C!]i~<' );
define( 'LOGGED_IN_KEY',    'Mk1xwYcEoJOaO(@:]f;1,;!YL|yv,}a3Zg,v-70<<^b?pxgI^Z/YFj 0%o,$&h?O' );
define( 'NONCE_KEY',        'h#y)J}8U%Y)$kV$7jfg@5h7K@#8}@9BWENVBsi:V,n):Z^F.^93cRdVBzF8Cs?2>' );
define( 'AUTH_SALT',        '=+$G7Va;KmPxumP-=O<nBiDGc{(~C9-m6G`&lkS@fs~5Sv_A^i2YUE$_)9I:<>aQ' );
define( 'SECURE_AUTH_SALT', 'g@P}vn<6BRMO,U8EWZuxvb_s.Y`wAt1g1 ^T*XP|P_(=^3w*&3/E5%20/8]QvYW_' );
define( 'LOGGED_IN_SALT',   'o$nxi=W[<qON-a;g2[V=y MCo;7ogb6x@*}5[4gRi+o1h=T@mjtO7q;#F.M3gGOd' );
define( 'NONCE_SALT',       ';kXsc&Q{=<.{FAhM$<LA5Jbd8V.Dg *(@V!s},HE.o`2OhnzpHaO3]8(eg)ld{ag' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
