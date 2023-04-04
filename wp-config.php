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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         '61;]_ok;L.[rpA~69eld}V7gBH5Yg+h)AaCu_}Egv^:w+caTFbsG/1z(v5qg2caB' );
define( 'SECURE_AUTH_KEY',  '220d$lTjA($^AT-S.-9r&P-*PI.)pnj,#A1,>^]6P8-qgmjGo7|lYTRUN(W!<R7&' );
define( 'LOGGED_IN_KEY',    'q@p$Kq}E,rc-Ssm?/RM<-z]v`wC||gF2kI_G>9^,6JIs:YyN$T*t2gno[,A~<,Y,' );
define( 'NONCE_KEY',        '2n,_|>0Llb=/K1n+33niO>B:*&Fd!MIx;HMsMV_3K,`UGG}2bBDOH.ffCeu}UI,R' );
define( 'AUTH_SALT',        '^:EgOue*i{Kl(LiC[cO<PMCT2`K_;eg&XSRY[{L|T2?K-F#H=y zy)p+htn::B|f' );
define( 'SECURE_AUTH_SALT', '8I<Svn(<cgABDASvet2K6v?eC-%3.|=yehxQLt1k|Yn=0[Y!k.{8U6Ga%<?&Rh1{' );
define( 'LOGGED_IN_SALT',   'e?y=1=ZJC |]a}3I6WlhcMopwn|y3yN02xt*6W585[4<Z)G{`;)v{wPBahp2<o%m' );
define( 'NONCE_SALT',       'RupcLT0X/Y$ CuZLCbe^4>{xX2|#t-^F;2i[1(g-ovh_:),&zEF^I(ehfoW{z<6]' );

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
