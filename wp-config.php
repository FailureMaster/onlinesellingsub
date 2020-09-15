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
define( 'DB_NAME', 'ramircapit_wp322' );

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
define( 'AUTH_KEY',         'fi1UnN:.bz&JZy<]s{Qo*~J&#CnL~C22t8%1eBIQf$n&g~K8Z.a:.kpI(Dj!6nx_' );
define( 'SECURE_AUTH_KEY',  'M?G_B5AQ[y&Lg9:7?1AZK?|}?TH=6;q:TqVE!Gg(F>MQi$ajG+;9$u*r1=`oua@n' );
define( 'LOGGED_IN_KEY',    '2}/qrh]A0!&U!t2,@n_.ac!W5Z~~.(EeaXb}$tc/qB+*}zamGSp@,]^O~bGu-$gs' );
define( 'NONCE_KEY',        '0xQv;kn v8oe *#~x+>Yq{K@S@{!u0*DII7KxoPl~@f&!6cDwF>|hqf9FbeoaF^u' );
define( 'AUTH_SALT',        '0~oebXs? [SY,DDF[33bZ4uP%t:UU+ZE@cJTAr<q1gi8HTg*Vx.8/Brh|PJ[y71M' );
define( 'SECURE_AUTH_SALT', '5{hvW=/6VN`O[G%:l?+xMwPm6TrE,%GL6VGhjZ*C6i4Nt}#lU!;G%<2$_]4yL$0p' );
define( 'LOGGED_IN_SALT',   'B5K`N~-]|5.6+iV+~&-ZBgUXCW4=*p&=Z0c6NQ-}b/`G>jRCgc@5HeWgioF*ZQ?`' );
define( 'NONCE_SALT',       'dSbTG~b~,Z`8_%ol4M>(qDOg)aTOFG3nTR~*1gqH#;gbyc_;vpAuUQT/l>4iogk+' );

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
