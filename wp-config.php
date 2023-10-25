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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'N@b[w2+x~wRFqg=ofMnMFv<Y gQGF2&d=T2ZklGIT@{_GDY4j9 3myE:#XUY0Gv=' );
define( 'SECURE_AUTH_KEY',  'Jf`=(w@H!a*wsIO#-%@D,rPuBm]?*-bO@5j_[g62k~H KLr66XFxpSQS(y!Zd>5v' );
define( 'LOGGED_IN_KEY',    'L,J,isF%wP(~]]yDt1Yh9?Bt.u_r3s$Kil%?Er1,k/+_OG/3<BM5<zu$sFR-o1XV' );
define( 'NONCE_KEY',        ':K;DH{e}h{`=%cTo%3aXskBjmh0G9+NL/7a :n9g6;ZLu)_Tj9^zV4irmk]E.ER`' );
define( 'AUTH_SALT',        'g>2tPq3^*jX@3ke>IZwes[tXIM3[<{V+F8GnLcbB/@nWZuT4br&~6Qy*+N>~k~BN' );
define( 'SECURE_AUTH_SALT', 'gPecmZePn/CU0-P}A{VE]|V1iL2uSc_:9c?:n}Xp,2M0Zr~bg(jLjS>Ti&iO5+cb' );
define( 'LOGGED_IN_SALT',   '|90vE4 .O-un!N0^b/q|<N#.(M(El-TKVe!4.m<X3#WfTRmFQ!O;ccz9,O@m%1-a' );
define( 'NONCE_SALT',       '~D!nc,wo@iR;:gr2Z=Qv{ZzYjO8V#,bzKt`rwL%0{3Y#QHAG?>#BL}7t1*>H}27^' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
