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
define( 'AUTH_KEY',          '7]T3=g3!>?I`N_axRm:mCpQjGuOc4E!w5HoyUN~Q7t09C R>:EpOpB>#MGi;=QNA' );
define( 'SECURE_AUTH_KEY',   'pNymwT25MFwGlHG[8_!9E$wGtT:xpL5Zk /,-C|mo`/oX34=S.geRRFlJ^VV_cxe' );
define( 'LOGGED_IN_KEY',     'je,)rkO~IHVIlMM$6um2<?1cRyC5/e]VuK.hBc~QN;H8tdW0g@0V?fLxGFraBIgn' );
define( 'NONCE_KEY',         '<&K4P(t:uU;Uwku]D^i<J5.Qb%nhm=#Y3H9N#-n)[z@PBE[7x6C&q.&ruK#s%N*&' );
define( 'AUTH_SALT',         'Kr3XNl2S|Pafe6X@m@ku]g[uXs$&m/4@vv@&O7gk$(DBkDnbjDc*~v&&b)@<]2G2' );
define( 'SECURE_AUTH_SALT',  '01}Q<>6pne5ad*8Q56pr%U<`WI<f`RpkftRnA`tTr^!KBu=t.t9S93U(3y^89$KK' );
define( 'LOGGED_IN_SALT',    '__[igaWD^d}SiaTSg`WoUxj`_+k`s2YCSmi)UYfTpt}miF2sT>J1Jf*_:5y$q]Ca' );
define( 'NONCE_SALT',        '8NJOgU tp#5ZLKH|^P$lr[:b(@.x`2]&3!~mFAI.yx]LdIw`~]l ^%C0xkpx$A5x' );
define( 'WP_CACHE_KEY_SALT', '#N(@eS:eYbj{#+90$G&Hc5LWLt3 7?mviYDo4U50BxJ3Dux:GlkAzc)8iKY-V0Mr' );


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
