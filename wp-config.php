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
define( 'DB_NAME', 'floomate_db' );

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
define( 'AUTH_KEY',         'tT@K=@7U0 s_!]jM+S5Ls1@,B@;(^Y+g1;2Y}e6JMm`8 f2Ah~|RJ(gsF;e<Izg)' );
define( 'SECURE_AUTH_KEY',  '$?/)C;m!8F;KwsV!Fq14?DnX|K_lK5K8]{Kq@xT;8[HT3FW<Vy/VP)XwTCD0K$kD' );
define( 'LOGGED_IN_KEY',    'xn_UK^dzdm_J=&P?gyVYEz@2V:*ZW3 8 uxWabts5>}#qBOZa.QI4?5LzS~[Y4?b' );
define( 'NONCE_KEY',        ',~p283LBaOzA5n{*@{rKj)LQY,k)-Gr*|<AF |xnh2U*u/Zq+_g#!|A18FSD^j%!' );
define( 'AUTH_SALT',        '3?7 d0kd*:!E|@IC7W!<DN:kD=6in4bk`|3%)ihi{r6Qp~dv,+D2ER@A]5>B,%o%' );
define( 'SECURE_AUTH_SALT', '[8-@QWEU]@@+}$&BJ3omM9/Rb|qKdk5Yu3)l^5~Y$.:s^x#m,[KzLC* vrl9XM=x' );
define( 'LOGGED_IN_SALT',   'L8rMeaig>E=S<CIE6.{ANGe/1-*%zrDO$9(C:w?Y9/.zp`B;t-]3?~4tcnd;FNnX' );
define( 'NONCE_SALT',       '&f9/mFNdcQ~EZ4<-fuTn~rV)(0uU5d)ri)u3cK-k[V.T#}8`m4SaSy+8=eoI4(`i' );

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
