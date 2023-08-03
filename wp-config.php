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
define( 'DB_NAME', 'ironcodesoftware_db' );

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
define( 'AUTH_KEY',         'qtd7d2)_:+pXNyu^CA4)*$XZS!jBzqer(:}**bR:TnxmZ$L/Yam;hQH&./@w90NS' );
define( 'SECURE_AUTH_KEY',  'h}1mvF/-J3UGG#-+s0H~`H&Rb @5NFwcNB(<YxQiMd$tB#}q$HGwr3$D,L4v?0Bu' );
define( 'LOGGED_IN_KEY',    'D5Nh?3C6`X(x2zW(zRrJd9pzNg&3e|NM9z)d]S7K.%9qM})$BFyn*HRQf>Ew^~S3' );
define( 'NONCE_KEY',        'Rn`RHqH>/RxcUct11xukp[DjP19|E0WQ?=m3/u;npChM[d*dIn -MQVT,3b[AA#E' );
define( 'AUTH_SALT',        '1a<[WF)<@4o3? m`Z4j/,%OWaE4Ju/Ps<Q&ZonP^=`Kcllvs%l2X ayR$~X>4~RE' );
define( 'SECURE_AUTH_SALT', 'r$+:78YCHGVj$f@}0q2w5uZ#whsBvH~eD0^*GJl[t5:&-OrbUBOibo=.Pvz. =ud' );
define( 'LOGGED_IN_SALT',   '/T#KwW})5I2`H#a0NiA1:AxB85_2@uejL8GLGf~wzDP555El@f:[*?RiZ[<VM<5k' );
define( 'NONCE_SALT',       'Rtl+XlO2c(L>6m&pT|ve)/l-GTZLwV<[;NXaGcB5&!dM&}J:BTav{Q[LPfoLaf`B' );

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
