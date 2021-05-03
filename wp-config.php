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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'AsnvdB8sxs >#-q8*vKgO&li2pK?3<ZQp/zfHw|#CQ2x7@D*ffNR~]Bftzn#[`T<' );
define( 'SECURE_AUTH_KEY',  ' 3t#MPiLC}pm9..h6Ui8*B;qs~0~lh`EzgpBj>[7[?2vqR%UJS|v,j+0T7 so,!T' );
define( 'LOGGED_IN_KEY',    ';_!p<bSu9>?N]iZ!6:BsDm^2Rr$Yp iZ^?wE6TCEdDb^{8^POwR|VS*ilOicuU!.' );
define( 'NONCE_KEY',        'jL 7<e)_Al((*I(wx!3o-nZiNa)Bi^f-C31{9`@8n-,t ~aa6UVLy?Qxsv<h#1HD' );
define( 'AUTH_SALT',        'QNkwTIe;nf4{B!_<h-<(Bwa_2YvwO/79hB;d&+,(z/:KLfwqmjPQMS1fh[i0_U!X' );
define( 'SECURE_AUTH_SALT', '}mi/1Rt8vB1B#rwh&/ztsISZnD=r~qMc>5xYz<..==|Ozi?Xf~+oO:H*{?c;%Xgl' );
define( 'LOGGED_IN_SALT',   'J?9z=vkn3aw,yEltl?A-s=#;+J5(;+i)n>k}.>wBKi;8~ NNoG.N+S`8UJDcVd%3' );
define( 'NONCE_SALT',       ')>m|JaW7`-rS.O^jo%^m4EJLx@p0fD<G[#UYTxMF/q{T79koxJ]b5jhUYcD_S:k~' );

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
