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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '#`}Eq|wt)!_IM;K?Lb$h!uR#S4]`V/fU79M5</r5Xn(Xfc.1@2:w,c.5%n?+{cS{' );
define( 'SECURE_AUTH_KEY',  '{{OGY%wK:E5+B:{:IXN4Y8~#JjNlBttnF9d!21u0r|ChSwT%%-G+}k-m8$|1hJ9+' );
define( 'LOGGED_IN_KEY',    'AP~#?-Z84D1C396jUtBj2?&@XbCJP~KIJI!;gFOjgPlY0.nqPSdc>,9H)r!yM*Dy' );
define( 'NONCE_KEY',        'BG;$*RH%f@rKYe2WU8n~{Npo0u`VVg=Kw1 ukr}4~h;rv*n0zL<lm$A/-=sv+lwc' );
define( 'AUTH_SALT',        'IEgo0P.aV))Zgol8R0M@AshIz}^OC^fQ`D)QwH^AH#*B:,I7eD{W[V<-Ro8!<}@:' );
define( 'SECURE_AUTH_SALT', 'BZ ^f~D7N&-SZ@X9zf]Pd6hEwGiJ>3&s9^Mgv-[;rBs{&@@;/7oUgSM &!mq Lkc' );
define( 'LOGGED_IN_SALT',   'o+u9#M3,<;2dYe)3/nJVk_L^$MTf&@=0+|F=Gq:B*R.v@2S&iUc6Js?-CPBNY+hG' );
define( 'NONCE_SALT',       'uh374.v|9o%Q{zs`YZuvLNGwfbnImG&:@ZX}]KxW<V1;}kW:}cI*/kTFj>8_Bg8t' );

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
