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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'patlopes' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Wv2cM#^/.^p/,;F_XhQU>1Z`$17i@]X?-Y%UilP6$6Xk.,Tf`>}i0u|jg{Y{6F}b' );
define( 'SECURE_AUTH_KEY',   '3Y^503a8.xTy-<iiUPLsxU5%o7z:60v<pD`+p_:`=dFl*m+tC^_{Qub%P0x1VM+_' );
define( 'LOGGED_IN_KEY',     'Ae[-c Vx8oqvx{@3A0Q31{ 4bEa-<&F>N@L0G2C_!Pg=IAGD+J5jg(L22`c;?amz' );
define( 'NONCE_KEY',         '(acRiZqxc)v;bX*.}NW2:wT]j}.;kdm<|3_]AmbIIh/b _&]VMe0BqPE*/4eYPyR' );
define( 'AUTH_SALT',         'boM{T$cYj-0U&?Qv6+/Dg.2GZHHBk+3=$R(376F[10&b&nSfhnhe|27oKZ4R!lLr' );
define( 'SECURE_AUTH_SALT',  'IaB=k0v6X;c9-^=q^)Kn/2n Qh;*f{_$/dM{lNjh#PNP9oJ#,y4)}bQ`Z}u(-S<d' );
define( 'LOGGED_IN_SALT',    '1vdz?A@6qeM!90Qt/-RS2?VoZ1XaP-uEI(&tRC<m,P%j4|cXMOf]oI&[aUiTs5S*' );
define( 'NONCE_SALT',        'D; JPLZ@,o!Mb^ne(!*aZ![2_8$6W9Gju!*|]2xAY@H9dfWgR9$!}MtuC]RG:-7Z' );
define( 'WP_CACHE_KEY_SALT', '|fe)Xp=X_:OC,Kn?*58Qy]_j[|wR?#}&3Tv><,@G~DbVTYshc&}LOp~WE5KJSr%E' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
