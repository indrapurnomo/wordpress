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
define( 'DB_NAME',getenv('DB_NAMA') );

/** MySQL database username */
define( 'DB_USER',getenv('DB_PENGGUNA') );

/** MySQL database password */
define( 'DB_PASSWORD',getenv('DB_PASS') );

/** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST') );

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
define( 'AUTH_KEY',         '& FDp)X9R}PwyxqX:InSnk33mFlglcUC&Vb[XaH,-6]n|gp;j=/ajpCzNqb{C?Sk' );
define( 'SECURE_AUTH_KEY',  ';0U$%}nEbqI.DG(F 4zKIW#EBYFovLVsdA>b2q=+ U!N4A%Z!YIgkhBnPm{VIL7L' );
define( 'LOGGED_IN_KEY',    'h<_bU8e#}>x@H!0z@DfsNUK[<&f4/}|gnuR]8<b#+?^QEcJcP]QyFr^,h1TVl{NA' );
define( 'NONCE_KEY',        'G!y_&l+7p-8^>Yv(zGRGwu9ec,[]<^m5<:ymNZZuE1CzSqi;)v[TsRFT8~tXKR$}' );
define( 'AUTH_SALT',        'n_>hf!@$[r1v;C2gIDXdzv0U)u=P<h:7*;@#[ u6gvrfZoR8pV++ic/LQc)-srW ' );
define( 'SECURE_AUTH_SALT', 't-Er(SH9WFqojxmY9Btjf0{~;P.01iW 0j.sEFr>zC.2|))~,mbr+_R`w^l%{=bX' );
define( 'LOGGED_IN_SALT',   '.owvrZjg9`V:$Rm~)|q?AGcp~B`6|x~Fa0+CP0eUoCosuLYgB$:1~JF:r?Vvj? @' );
define( 'NONCE_SALT',       '^wwvDICG41$B+aM5inpCDXgezI`OCGcBI)(JP|aAGz|C&y`@Hyi @*t2{G_EUQ~a' );

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
