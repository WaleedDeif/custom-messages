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
define( 'DB_NAME', 'paymob' );

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
define( 'AUTH_KEY',         'MN![gRzra69joIJJUmqr/iur- FXaY7cpJQ`I7Q^BtlF21sJq/k`G&%#A^J^Ypq+' );
define( 'SECURE_AUTH_KEY',  'cTm[5UB R*3Z.)<!M[:y8`&1tp=YM?r~A[Mwljo`:[<JY,-*%F<o/D1Y2vKp()eZ' );
define( 'LOGGED_IN_KEY',    '75,|Z1rI<Vq(Bo7mE]rDE*<nqKCwLgBO#*6AR1M9-fLC4vZoJnUsj&fjpezI*6Ng' );
define( 'NONCE_KEY',        '>8a6-.)c7odqN[TbmZR7A5VV (m*xvCzC{<FuZ5L`<WSv*L.K z3<4lp.M!b;IP)' );
define( 'AUTH_SALT',        '+c _=Axc?iS[8wYTv,9`O K|KAX^#]_~u?S(LhTu.7&ENF?e`XGs+52(%jJjdEKA' );
define( 'SECURE_AUTH_SALT', 'NY>gECDgzQm|$a)j_Qy>j6pR]C:Kw88F(0E-MR|IAP):% em(sRJ I3_qJhEodg]' );
define( 'LOGGED_IN_SALT',   ':mA.;.mYDChH:8CcnT ,;-Av2v:oE7(3L*{p6^{gg-=]=ff*{P*EiwI[s9(EFqAs' );
define( 'NONCE_SALT',       '{<Ex1AiBr|N,MWJ,ZFZ.$Eapav`+dhfyXtgg=0TL$j2}ewdNUXx3BhL98B3S?QG)' );

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
