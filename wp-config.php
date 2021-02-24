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
define( 'DB_NAME', 'falconlabs' );

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
define( 'AUTH_KEY',         'U)If*?m8:O1.ed`k#OdE@;3]K5BSB@qk@S*[/uXytn=$l$|h9[!ja%&(@6>vW9vQ' );
define( 'SECURE_AUTH_KEY',  'yPK:W^uKf#2`>E/U>=cpLL>*B7nT~J0@EB%cyvkj_W#yc7o+,{4Lhi:Z[Ez4*`?O' );
define( 'LOGGED_IN_KEY',    '!N2.f^g~O_C mBli5o1sfe|RSaYpb*rA?;y*KYpH: yyh,r*eu^Kh@9_# EFMr*I' );
define( 'NONCE_KEY',        '$A5,FJ.:0;mia5|mDAd9KD0{7UxflhhWCz61y%~&}P}D4cjqIc)/WPwg8ZGbEo[K' );
define( 'AUTH_SALT',        'wu8P|HkR7D<SWH N-@<yVU7dG:S?U@5Z<:?O9F40[T(Yl<?YR{vXCNSb/mzjn m3' );
define( 'SECURE_AUTH_SALT', '/g-VTh2R/%y[m},71K9I0*`jykRcuAVw70_az/Ym1#^E3X(iwcy$/rnKITT^fEG7' );
define( 'LOGGED_IN_SALT',   '5CzSX!Vg{7PzB0I}1scLLE0cc[c<@/<nv+:N}SbjK|2!E1<SRjvO@lKsy`],IL92' );
define( 'NONCE_SALT',       'p]^8v-m-.#-B~(Xv5~;QlN{cB4)UkbCvsVg#j^eM}%&{1vo;0u<;ZFV?dL*2[/|;' );

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
