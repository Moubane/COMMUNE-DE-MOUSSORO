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
define( 'DB_NAME', 'moussoro' );

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
define( 'AUTH_KEY',         '1M%O*B$!kRka~~it}aBo9E6`n% DO9&^1//SB1s?Bks.{qL6&~K:L?cyz?F`E!LW' );
define( 'SECURE_AUTH_KEY',  '.:b!I$S|Bb[MSJ%]oxz%+3i&-wrj/&KxL4a^[i-Sr{}Yzykdz +2Y,#*_,M?,lHq' );
define( 'LOGGED_IN_KEY',    '<BV(Z#AyPxB>Ri(+r@[:fW1t=FT_`7[H;7YrZI?AGF^&;C8dspuGYxqB!}@h2/1n' );
define( 'NONCE_KEY',        '<e{*^gcX@;E[E6Bvn0Kc)UkYP7T*)ua9[2@y qxU2@9`%2BQ;xjzOG9>_%dc^#8v' );
define( 'AUTH_SALT',        '(?-($^$O}JiV[F0i2W4|C0}U=:EF*WM,qs,lRtEtpbz16Rh_J37}uP(dX_qYBZ (' );
define( 'SECURE_AUTH_SALT', '.>|T%6)%bg-d]N4T!?Jq7Z={i,o5f:SCsWF=jN4Q@<-P}U!MQ<(}cjms^xIyi!Ww' );
define( 'LOGGED_IN_SALT',   'u#)(VDJ:0ITzRX_,.Yv@!-i.G==  R1,(C6M3o;H$M`oa/5;41vjU,E-*mUx9DOt' );
define( 'NONCE_SALT',       'C7$`{`L_%#-ds,V~[]wpXk:$sDv~:no=jEa3Ly8>RJLg(N40hvq)k7*R~=yPGx(O' );

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
