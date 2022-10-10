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
define( 'DB_NAME', 'modulecms' );

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
define( 'AUTH_KEY',         'o[a-`3F0IKH::^sR2Py)z!S>^Cf!Rx8XV^pA*P?5~;)yJ)l9u7=3Tt*TDlG#>nee' );
define( 'SECURE_AUTH_KEY',  'R2I`]5!WZ?^Y2r,k.jLyrS<Ts=jeECq0wt%Zpyd:-Q0ry^GxpV5Y?xRX~:>_fTkm' );
define( 'LOGGED_IN_KEY',    'D+a|52%,,S!Wm5#hubIcPG#] ]<.oqn4AmMU,-d|l@en+ 2yT `h9Z!uR23KO<}1' );
define( 'NONCE_KEY',        'QiTtKVj|3 284U3U<5?Ye1jkc4c@3v^=.yK1HmIdDQp@G:h6PvB.+ Su{|Bx[&Kr' );
define( 'AUTH_SALT',        '*z W}ksq{hJ) z4D8pC0uj@q`fO`I+$=&e9SizR#m*d{69WgL(Ea.j-z-AS14CG|' );
define( 'SECURE_AUTH_SALT', '2u8IL&zA]ufXU=P)L+yr$B/K&}0|Q9p2vc{j!tdVE>JR/6EJ%Y`[zp+$GVlY[5VA' );
define( 'LOGGED_IN_SALT',   'O6g&|hB=OlJ0T3!Q&-6Fd!/qD5+a^Qv:d|+|.2XRqK;)8)y&C|4C<C.1U2rug}PS' );
define( 'NONCE_SALT',       'Z~P&^U;!=`Y:T {$[r!lT?+k4P&|oI(TkN{a%j8:1%$WYY)~lijjNDtMSL3By*SE' );

define('SITECOOKIEPATH', '');
define('WP_ADMIN_DIR', 'admin');  
define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . WP_ADMIN_DIR);

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
