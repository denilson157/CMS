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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'Xxk0k5@YHL(x=DPTW]7cs3+K4QxiN|7]?Wr^}~1eSm]GXJh.J!e1>FuIAr*-uAN)' );
define( 'SECURE_AUTH_KEY',  'ebs6L(_]wRG_#q?+32pH?W3b/TsWL0r8EG,-wJpHdHNoP$;|7MX(!l)Jg06t;Xp1' );
define( 'LOGGED_IN_KEY',    'W-]!hw:dJO3_?6J:v?-/e_s!RXN$]Ebr3o{p`-(2uvU2txu$g<6Qd%o_:bfR>HW3' );
define( 'NONCE_KEY',        '6PuKO^+.F-u]X;$f2jEkwH4PR <_NU1.JCw:d0<C~}qih)B#ng$l]*FX%o)_X+/W' );
define( 'AUTH_SALT',        'rrv:,CHFn7Fe,7a=/e7C7Q.N(|g6){d+#F<r/[ujRKRKWS>g0+CLEpQBfyb2eR|*' );
define( 'SECURE_AUTH_SALT', ']w]D|CKnIZg{!p?o}%fQMEv++2]d4^Wo0[ceHn4X+Oj3<B;`.R)V#lwO|mL&zGBG' );
define( 'LOGGED_IN_SALT',   'x+gE~6DVt_fb5P*>@~f;puKzQ W]r)R(To22A$KH_&|fot|.vcoaf!#^:q@vd,:&' );
define( 'NONCE_SALT',       'o(3&hP2iTfv)0i16!l3VB67XSk^qTat9-/.KQ?Kc2KQ|e,O|ak)UuyE&p1LmO+N*' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
