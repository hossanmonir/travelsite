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
define( 'DB_NAME', 'travelsite' );

/** MySQL database username */
define( 'DB_USER', 'travel' );

/** MySQL database password */
define( 'DB_PASSWORD', 'travel' );

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
define( 'AUTH_KEY',         '~p/Z>C7g9I.-<NoL%S!qesE!Zjkz*UFcTV?WSdp*^$]h8IGqpqsb4A/P6?=}n(r#' );
define( 'SECURE_AUTH_KEY',  'dux|R@h>+dB9aIj&YrK<lr8~x]V-U14a0(:H6nkNS%W::#C`7CvRF)Th&!;G9;4u' );
define( 'LOGGED_IN_KEY',    'hiMQrQ1t+h]>l }t|8/i<D>3W)knq?*M)g 7z1ha!=dc nTRe+;LLt@SWHj92<ey' );
define( 'NONCE_KEY',        '.!b[PLdV<f$ID4<:`JAI&At%/|^ZZ`Y4r&M^f8fMLvLQi(0kDBieXyG8+`D`=}D-' );
define( 'AUTH_SALT',        ' p1VlWve!9A>slWKs7AzbFFo8L_^)b !nvi`/gtOiA_R3oUU&(h>vxsJEL+`Tih/' );
define( 'SECURE_AUTH_SALT', 'QKU%y8hKOBXFhAm5vx^96~t)uhPMtk{Ld?#t[i/Lh:f%Qyfp-S`HEta_~%74_&JC' );
define( 'LOGGED_IN_SALT',   'O}*VW&j3s4J_%OB#VH.0x~,oI-d4;=?xB-^L{Zd 7Mv.89Ez@Y(YNw2<dv06}+,>' );
define( 'NONCE_SALT',       '-m^kFRi{k s#P&hz.!iw7!WMchuu<?uPW>9NBaFMO:te$hV@<<Tj5!_390qKvFa|' );

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
