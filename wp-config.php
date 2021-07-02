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
define( 'DB_NAME', 'businessagency_db' );

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
define( 'AUTH_KEY',         'XtIv2yLJacvvjx%)XVx-aqnVf3Y8|]N{AyC,)r>KIEf^M>/a$;2k_=pj*UtTQlC9' );
define( 'SECURE_AUTH_KEY',  '^UqUvv2Y;R!r`qW<Pkq/bS(F?o%*KD7jzd{.Yfp/^E{<Un;}n Io1+GpIJ[z42s:' );
define( 'LOGGED_IN_KEY',    '&8~icI1_cvlN4c6yD!kAUjT9Sl-=,~NV$_{O]^XL2JAZKzQH};xkZf$JSH&SX=pH' );
define( 'NONCE_KEY',        '7F@{u7TT L,y0Mg{jtzUZHd>}3+gaA@:kSf:&UOnt[+Pry?3~ro-[^4Y2dhRzUL.' );
define( 'AUTH_SALT',        '1j]9`X-cm}]~]7%T3qo!A,p9P%d6yidDock{m9PQfhPo  ;FS{bl>LXWwGy@zSdq' );
define( 'SECURE_AUTH_SALT', '1{/p92V/tdujHm<SC`.[P<GYV5.{Z.VFZHHsmi<R3#rQ-ia62h(&{X%fngOLwa`(' );
define( 'LOGGED_IN_SALT',   'g#T,f/Xowieo)/d*QG60pR&>z>F$,|yxM+:A] :^~O*k]PYM8xTdC(`SMC].c`2v' );
define( 'NONCE_SALT',       '^:-bS!hmZ.kziQgfPPFV]Xbaelr_/M6VA!a($vE!Ps?MAfOmK:eyeRGDud-(2WHj' );

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
