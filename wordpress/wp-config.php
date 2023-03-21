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
define( 'DB_NAME', 'lavoixdelenfant' );

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
define( 'AUTH_KEY',         '=%SM=]fC|c;L@T+gX5 {vYEiEO7gK6ucEkL{lQ{/BK4qk&ixp*SP 9}-VX7{j`k~' );
define( 'SECURE_AUTH_KEY',  '*.P@[kbTqqN(9-1B fY&6j+M0i)I`d&On,>l?-#5R8%` ;gB{l`O}3{v;$B}q:O*' );
define( 'LOGGED_IN_KEY',    'Bm;inKb qJ.kn=W1;]rZeiBK-]<$K2rZ~+Wu8uz&99QPm2j[y(F,>d4)uVqL`RE?' );
define( 'NONCE_KEY',        'Gj:F$ZRxZq3Q6au:^u+M^;yWEbh@hH]bLo.g]uyLh,o;Sxr+#9M3xX`~_X^aFAkq' );
define( 'AUTH_SALT',        '$w@P$c{HteyfS4)bnOq)m wSrE{_R %Q58dQ1&Iit H%FBzY4eSx4riQ~1Fh<LE@' );
define( 'SECURE_AUTH_SALT', ';~eK~39pO>l-SmH#}(XvHfs>2RbT+kg3i}2M8.@#!Q}<(WFpj}{Dq Z:$O(^OU?W' );
define( 'LOGGED_IN_SALT',   '==]1+^|x0e-j`6={:fI-_,JRGB`DYI?MVqV*xxo9MtOF/8dx`xTMht90n-ORR5Em' );
define( 'NONCE_SALT',       'AN:[Av$?vlPDn`,`I0v%8v`jm,{U%:`Zf);e`l?Ia8w 1*MzA_tLh7YFMbA>yT6/' );

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
