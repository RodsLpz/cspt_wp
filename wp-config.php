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
define( 'DB_NAME', 'db_cspt' );

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
define( 'AUTH_KEY',         'r_x;soD*)LBG{Z4?P*Ci1$L&>M(jzXpU/8]%D+MFIb}72nu;+c(U~K{g&$I?l*ZF' );
define( 'SECURE_AUTH_KEY',  'w`M5ItEok)!p22s!KAH]*Ka%_%*vdpA;qc/z$1E>-<mdvZznyjj5`2bX8RYq3J8/' );
define( 'LOGGED_IN_KEY',    '.3&8qM=A~LssF!|u0YAf@<iPVMtl46H1| :#&~pq_QCVU_(%RyC#[$MANFy(%]Q=' );
define( 'NONCE_KEY',        'xoJq[4Ol@(x:N|(qWot(d9L&@&@BA3$-CE4vwJzQn .~`&xje%h=E_exuk2IG>9<' );
define( 'AUTH_SALT',        '4Cq}{`#unTy>-9I*J+D%bl=5a),(wgEG~`>72mp5+y,+9x%nV>d0E>N&uJ4RnLzX' );
define( 'SECURE_AUTH_SALT', 'pC7a:GL;N{^-SZ`rJB1UtI9.9u]|#3gg2k9z4&4DDO@B)r1_t8]BsGb8N/ff,G9J' );
define( 'LOGGED_IN_SALT',   '2)NJOK>K,Kg>!rlnw(q9^T&]m4[Qxu3Ox~tZP)LBD/]Z&N@l?;,F_@SS; (XuM_[' );
define( 'NONCE_SALT',       'fBui>/oQ9X#9-QDfC?`9o#71($<vwA@H;6/3l/93Wfz4=[s6rX7IQqiT&a63(Rtl' );

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
