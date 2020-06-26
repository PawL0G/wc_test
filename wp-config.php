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
define( 'DB_NAME', 'test_it' );

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
define( 'AUTH_KEY',         'Y?U URKhhDBjS>H)<b1D!9B|5`}Z1z?iH@yPPE{:^9V{1%-BsC^}zv>.Eb%/_;7{' );
define( 'SECURE_AUTH_KEY',  ')CTs&`,[%<.O%GT>}SZao2Z_ZW:iF0h_$*fD=a>%Gf4L(Xci iEw[`wmoqoL1`!U' );
define( 'LOGGED_IN_KEY',    'TIxs#,enI{39HC9By-BA;*t}Pv5uOrAg*|K c%1[Hq9-/|h}1<L a;G*8`:^MF_%' );
define( 'NONCE_KEY',        '@``JDR qv-NK<8F{H5(8?rs~ojc|-Dd3FBbK5u+?,>F-Ngo*S]oL2re_6$d8fq+n' );
define( 'AUTH_SALT',        'Pr2_t|jX[$w.oI]3t83]ww1`Y,cUC6j7**kt 5SWpD*@coUuj^Aklys>3Xwqn)S5' );
define( 'SECURE_AUTH_SALT', 'Xl3#+y,d@x]PH{n-<8,Xsx?[%33bvjkn_y6VB$,min< o`9%<!Tx}fZz++e`m@Rk' );
define( 'LOGGED_IN_SALT',   'E*9fg?t`IY+1rbAVfnBl%7|;P0g%~h|(1l*JWv9L~M|Ue75C-eTaVu3B_V>h96iU' );
define( 'NONCE_SALT',       'uBKC~U7jO>Pn^y{rSaaOP+aNOG_Gw{Z+0J?yJ#JN:T0oP$7wzk+<o.a7/bYWfZe8' );

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
