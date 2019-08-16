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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vikrantr_wordpressphotography' );

/** MySQL database username */
define( 'DB_USER', 'vikrantr_vik' );

/** MySQL database password */
define( 'DB_PASSWORD', '/.,123pikiiscool' );

/** MySQL hostname */
define( 'DB_HOST', '192.185.103.168' );

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
define( 'AUTH_KEY',         'yv*|&/J@~D[7Rvz-l/Jo9uEq@*_Bhx+KV{W=W8;L-o<xcpzcT?QJgeL gmxe/at~' );
define( 'SECURE_AUTH_KEY',  ' ?OZCv06&_5Aq2ZDnulMf9*H{;y?@$+)#lJj%h~yV:V5;ORhujFF%n]P(MNhacLl' );
define( 'LOGGED_IN_KEY',    '*zC^mx~Z|Sv#iay$V+9Z`pix8%6#Tt^//V5=l)K/i[F]=ZhwA1sV.i@)>In})me$' );
define( 'NONCE_KEY',        'f2JB%|Yg&Pl3d,OKy=C=+zO9`5MslW%Qu_0;`nP?,YzMt-8mQx>Td?qPJ-i_dCf`' );
define( 'AUTH_SALT',        'r{x8N6MF3&-`%l-@1L}x2gXr=GLfGil$d|Zxo.,Xl<|J]6sU&5MKK@NzK..sJ6|4' );
define( 'SECURE_AUTH_SALT', '=OW]l8rMC{w~spd05 }gA*pGh|i2):U5]OvezAQ2[6quYA|wq9P c-*d),Ji1:qb' );
define( 'LOGGED_IN_SALT',   'C%m2!]d@$vP1/zhJln3+;YthRazXkG(>;rBV.mU-mbszOC6U47MXt {t H+ I 7<' );
define( 'NONCE_SALT',       'Le{: kB,TDw=%~JM0+!7VUvLBc]/W>N/A$&e83uf?{w6__=^P94V^s{j>$!#1}py' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
