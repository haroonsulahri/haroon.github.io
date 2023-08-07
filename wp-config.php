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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '4cGx1]uW-[.>zb=5w):heyOkkm_Puxdi/!<.R`iK-D[,aGr2[@:IL*B^;O>Cz6*F' );
define( 'SECURE_AUTH_KEY',  'CXP6q]dSA/a}y2xmcjIG3g%kdNtSe~d%cFmH_%&<jl2HD3fQw><9:xySn!nAEBy-' );
define( 'LOGGED_IN_KEY',    'Ln)RiT[]uq.Jjm{_Qnb%?tWLg?3_Q%1d+umVk5RwDuuZ-uJ|-TM_Bba>jI*AuTWX' );
define( 'NONCE_KEY',        'N]Al,?|[X%. A>ZD^dWwS`~q)/a940i4OpFw_+*zl7}1%9z?D}Y?[V-xEH=n:!8g' );
define( 'AUTH_SALT',        'j,^!p^tKgd=iM,#za9tWov3;vI>nQjYtyDV&76Hu3O)@DfO4Y@ze=};~h`JdM7sq' );
define( 'SECURE_AUTH_SALT', '.V&/qw*c7Rl2vf6T.nPbE[Bq5 ]})}1AgHLsC3xUG**Vi>SQF/XXShu5H1e?8zYK' );
define( 'LOGGED_IN_SALT',   ':K1paghB?qiTQ;|F,LbVfI0:UpGaSR!M:;*7R! d3>&?p.A.f%2U1X|Rr:7ddP`o' );
define( 'NONCE_SALT',       'B-c$v<*Uy-Cy`Bh|wnJlfe)O7G7;R/TCd5[G%NP[7P-QrmWK9 <5VNtu6M(gg$}d' );

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
