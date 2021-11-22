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
define( 'DB_NAME', 'utrechter' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'wiuFzoC=-t0UwOa)L2vw==5_e-(c;04T@1?}|ei)sJ*fLbe&sz_1-eYwZ*,Ij47G' );
define( 'SECURE_AUTH_KEY',  'Rf;~lSk<dluF;r9{iNI0.6cYi$Gi-Q2C_jEwee[3|HStu{lxcyA#`a _jS+eF )l' );
define( 'LOGGED_IN_KEY',    'z6X2Qv2yaF<.;bA 6`=,%hv@37y5ghBXz/$~~v.vbYQMF*D`RtACV+0TSsZt~Myk' );
define( 'NONCE_KEY',        'e^x29-_^Yl;Vt~C4Q}ZOR2taPlS?@&4w*rp=NNRqk?IKB,]XBv,r@>3LHg9bbQ;.' );
define( 'AUTH_SALT',        '#MW4@$_dO{neX(Ysk.O2*,:8:]SZnohR,+=7E)90LNhtV=~;1mZI#t5g^JW`;Iq@' );
define( 'SECURE_AUTH_SALT', '6,=mFP]w)Hr/Xz-DQi*UPV&E+i0jTsXLW&G)s6<gNG~q(m&y)r+MrU<MXHLbXTn*' );
define( 'LOGGED_IN_SALT',   '*UjgX4S[KG~HaNX O-h@<$sxk_@3o]+qf9N8P6]rOiTQ-1a{&|!a5Eqs@k!KZfZg' );
define( 'NONCE_SALT',       'sSy:(^c;D@H*uuLGa(e2u#Fr6u7`U .YHVM%Yj<Qb&R*4 *{$9ft/NEg5y2Kco=?' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
