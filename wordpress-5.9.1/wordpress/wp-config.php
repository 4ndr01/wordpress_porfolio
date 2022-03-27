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
define( 'AUTH_KEY',         'mi7g}L-X4pDwe^%Ba%T`[c|7$Znz>nO){W0$8nIvo0m8`u&i%ty`@V[/$[LHa#]R' );
define( 'SECURE_AUTH_KEY',  ',tn@Ky`>X@nVko[rAwrfrqR@v#.qvkUt[D:fq}x?hRZy/Mr2qM~07 qmXnj]r/J9' );
define( 'LOGGED_IN_KEY',    'KV N,EuYWPo|OMO r#*L/BJ%q/YCy:BNXvvPBbJo!1AdpN0O:7ts]zHwVYO%xaa$' );
define( 'NONCE_KEY',        'Qczd>_:LH~-E;ix#smR/fnvi9$,~Geo=U_GB,><3`O/_);|AR>fQr_}7+jl#,J?s' );
define( 'AUTH_SALT',        ';cmmGJRqM-QI`ly8hC{zOGH2?T()B^o-3o|- Q2+Ij_llI]xL9w>5[3>$:8$CN;c' );
define( 'SECURE_AUTH_SALT', '~iU9B_Lh<YTBz++f-[38apTYE.5KdDf{wx^:#$<gkTlt4lgG1:xQAA^)3pe7s Gy' );
define( 'LOGGED_IN_SALT',   '@D?I1Q5r-Ir86j9p~y{qvYzljboM*RtzM0P$d2V~@3{?,[uyF ^RJG+o;Y2^eS{X' );
define( 'NONCE_SALT',       '#8?Dk~w2(:o/)Q63yv<fu_r?E2>psT6hS4Gk M{Azeh&oNsq!_iz,^*sUlQZl}>l' );

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
