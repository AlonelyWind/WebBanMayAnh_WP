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
define( 'DB_NAME', 'TMDT_demo' );

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
define( 'AUTH_KEY',         '447wDXo~$2UshTLyz;GGm9 h1%?)25e=)<MBQ=N;mRcPBkH)uo0CQR$AovNd0q]4' );
define( 'SECURE_AUTH_KEY',  '?((dd+Too56/mY>=US!^b9TrX,-3JzvjNyg@,yv(UhnloPvpHT!BZnkc#3p`9y~C' );
define( 'LOGGED_IN_KEY',    ')dL(Lr_>?}&8%MA*C*;%MJHLlpoMc=QB-tD/=+2r01!=l^_=O#!Oj?NVEp%s85}x' );
define( 'NONCE_KEY',        'i1gaqMAJue<G6Nqh(q7pR*sXt9=LH<o6HRZkz]iW_t=_T=-px4I[(TTIVvA+hYYn' );
define( 'AUTH_SALT',        '&zw!8JG J~(e/{HEsw6EZ+omBBssx>9eP~sv3:!H=#xL&9?e+Tqr[wjU_m!-f8!j' );
define( 'SECURE_AUTH_SALT', ')@8UyH(oq@TpS%[-JMVB3v0i?:1526V^:-m@ KcF3k3[g G{{J0_j-LbSR1^mq%t' );
define( 'LOGGED_IN_SALT',   'hqrp<r.A;`;D*VLzubn6@U9yb<@`Yo8*BpF4-}/jL;5|0sd6$^chrm5ek*1cn}IW' );
define( 'NONCE_SALT',       '@x*KtZ~90-L6Z$W=K)TTPYK=:e %Jp Ls lI]F:JhI9Us(][_:yU&Cxu2gf`9s~x' );

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
