<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'university' );

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
define( 'AUTH_KEY',         'kBVi6Xml@R;iY,6NU$|R[z[{L?g1X~>^d-otB@kh>7^4Vu}BF]FWl1T<UhAg1$ V' );
define( 'SECURE_AUTH_KEY',  '&wlO0-Ihr@7vGwK7_51ZTw2CjWfpM]ZVb.vBy|:m8De>w&,&1usNoic*]GKlz+%r' );
define( 'LOGGED_IN_KEY',    'MLdor@|Qr,&AfYNng^VF&rR$;L/>#UnuM=^(F a3p<;TgWg6U]8?Sp:J+Om7cnR>' );
define( 'NONCE_KEY',        '=T}Wr^}AbmR/2@#fvL)ECan^a!D+2hLm{2&p)KkPPD{)mwFP}Xu?Mp{WK-*`gV(h' );
define( 'AUTH_SALT',        '^Ya)8MW1BM~g_Y)NE$7ZXXRnHCyVw^5?&hr}r|`T%*m/:EGyxuk3<~sNk=k/de<4' );
define( 'SECURE_AUTH_SALT', '$5NJ]6J^rbWP0BK.I&z<K(#EQTS{v#~a,m<Q wWw!AAMUTMF#9T5,(6kOA (uja)' );
define( 'LOGGED_IN_SALT',   'cGcV#s68l2.m[(g&E@us $=5H5~o~j@%_Ijg6LqlYQ+%E@9xHZ)=S-O*#PrHF!bb' );
define( 'NONCE_SALT',       'O={O)K-8FkDvDDe8:eKT#l*t .noqS/v-W4u7j3VQ|.^DRE;h]}H5lo`VJJD5oT#' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
