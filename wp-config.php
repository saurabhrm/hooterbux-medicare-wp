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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '2d`E2;5^]tJYCDd;oFnr.xt0Ad&ZF^k, nvzQ}R6d{uwv0N|L+8@TNG<f;%Pq4S;' );
define( 'SECURE_AUTH_KEY',  '%P0gX.&JwaLG_zDgEQrrx:)_-p*u$yH^E}02s;ZOdcLh:rj^(2bsdY%We&C}:8:k' );
define( 'LOGGED_IN_KEY',    '7h(4v%e#eJE*:B2<%7zgD;YF*8GVBEiMZd4t6#{jB;zp7GXh<A2Nxql.YPsi@QQ,' );
define( 'NONCE_KEY',        'z9$LzhY,D>Q&5i@d&JvwCFN.}z><~Dy<2FhlZ1ULA+M/N9bo)C$mz4cL<Nh5)8 A' );
define( 'AUTH_SALT',        'nDA4B&l;K8,Ki v (z8x0tEpb:U7inS23?7$C({b!8H,leX:INB]_}lbJB4e*!jt' );
define( 'SECURE_AUTH_SALT', 'K8tO(cqrcW8aL4^ZGs%aKn^E&-``DE,VCR=:vc;#032jH53{]/^87;}F9N^WvY^g' );
define( 'LOGGED_IN_SALT',   '(EB_Hy%.6Ao/WB-[S<&jwsS{u>}Ye{##m+=6ANS,TEWRV1jw!q+nf%{$>q+-G&QY' );
define( 'NONCE_SALT',       '2eO43VV=(#sCX~4 -py7Y)kz=(RQg=NJQ.+l::B74Leo<_ab!XW(TD]bFQxx?t`u' );

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
