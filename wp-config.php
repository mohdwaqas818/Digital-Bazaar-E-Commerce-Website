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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '3OR&{T]1I R@CRUMm7QRyD@ie@nq1|/A^~oe,?aO%_&F3/  8x|gB^F;1Vn,:$BW' );
define( 'SECURE_AUTH_KEY',  '<(eMLMH7M5^m_u8yTP-ER# jGFrjsPb9Bgz{KPqwx5Jr?.Z2F% TsB{*[[,nqWd ' );
define( 'LOGGED_IN_KEY',    '_s=.eT]:%;G2I1;gO4il0m .Pr{DB.ARleRRhAca_)vWH(cA)`JG:Bz2k_RCApij' );
define( 'NONCE_KEY',        '|IE^%T`@1WMltP$DOtGc>*w1?=!Zx~]QU/KhZQ3TCt],8O,6e#LNePX,9mTOK<UP' );
define( 'AUTH_SALT',        'Na3[(UElYg>y]bb68myi4gdCi+-Bf9LL1>;yhLI o B9D^hvP,*40lBsVx3NU-s>' );
define( 'SECURE_AUTH_SALT', '*A2D(:@K/^a{MkbxOR]09}G*0b7B2`wbw pCU(#b`wK^X%x.`KmmJfvg8>8!~~b:' );
define( 'LOGGED_IN_SALT',   'XxYLaKgDBgPUhimPz OW[cB,T2]D}-u29OE1:B2V=9KWxx>b4^fMG]g:Mm^$W=so' );
define( 'NONCE_SALT',       'VVp&uPhQ;)Ls<n](k0|/;bRzo4XT@xn(J)G[N]I5JAK.gD2slr%9e&rA sBlmL-q' );

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
