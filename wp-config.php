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
define( 'DB_NAME', 'astra_wordpress' );

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
define( 'AUTH_KEY',         'p.AQ9:|``T_M] #xh8,?|lm[S&w4*P5v4Z_nqri%&H%ca1#U,]vOcyKBou}jZOcQ' );
define( 'SECURE_AUTH_KEY',  '{_PfgjNN>[=%u@bIS|n>aREOMUr]G-bxJ~2QH&QtVh,@/9uU[Uc[*[fg| E9CXA{' );
define( 'LOGGED_IN_KEY',    'L(?IG=*H3HftK5+AYx5<^fA1XT] .>{G6j!td1%N9>L/F/7>BA .T]#zj1V_XHA;' );
define( 'NONCE_KEY',        'E/tsr2-(#`2Xs?TmE*5Wb_ZcW%0$/0Q9lQYm7D:v9qa(:T)M{&u>1-jpCeYS:E)F' );
define( 'AUTH_SALT',        '&(CL1E zKsq.j^dY7}e|,3)*1A)4$<TNF:L,!e&2L<BWuSKK;iL d2D#eB!hH^9+' );
define( 'SECURE_AUTH_SALT', ':W?`X%V;j*=81{ZvYMGJQ=.IZi^4fVb 4q~vLa*MKGj,yx`2A8$RRqGvi5z9 COM' );
define( 'LOGGED_IN_SALT',   'IVFlSG-JJS|XopWrMpVY%|:5xfztPCE.Ia37_cG!BqM!p`W`hjEJ?@/B*cjyljP2' );
define( 'NONCE_SALT',       'f+C=nvN66lI$[?DiL@Ig8^@<]s]{3JIx^F24{g3N&}O.+L33(B8kn9XruJHZx(j{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'prueba';

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
