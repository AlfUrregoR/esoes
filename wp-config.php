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
define( 'DB_NAME', 'esoes' );

/** MySQL database username */
define( 'DB_USER', 'admineso' );

/** MySQL database password */
define( 'DB_PASSWORD', '90y1BJZIcrNHiQZp' );

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
define( 'AUTH_KEY',         'R4p(T!MKi|I>!-[zf=(;C)7[C?Ra&G^cUvn3y42v>v%Pk^#+qUC[A)rJtO8|PWZV' );
define( 'SECURE_AUTH_KEY',  'dJSWlS1qFAeR*=QoS3ac&:u?j?g2A!S}B)SK6`2v:E8pjY5Yx`4.`shzm+U>AB$|' );
define( 'LOGGED_IN_KEY',    '$ZQ6MF?N7r)e&BDq<I:k_XtRF|.sm>ABeLO7Od<K%?TmM|MnbPc6|/5N2v][gkN!' );
define( 'NONCE_KEY',        '#]<:z#)I4xS,Y`]/sw8Urx?jRCCQ*rKG1(+6vxa}p[1Qw7xu5pA_i&(.gpHNFbqW' );
define( 'AUTH_SALT',        ')tqs45_V6#n`p_^!CFIT5K@EsP6S;/SwcY[H`f%NQhP[`%}H0_<,ifR8r_L>_Stk' );
define( 'SECURE_AUTH_SALT', '3HEiIM=(![U_jCMGSTM:/T ~T+Vr0Q.TX.39#iGK6Xw&2T**Ob##3=T%k.v_l=HO' );
define( 'LOGGED_IN_SALT',   '_NP8G?][<)#k~$d~qWD{Lt4Rx/j>.nam6FJPg_r%`o~?5:j$Txez|;}M$E4r#c7!' );
define( 'NONCE_SALT',       '4`ESk o1xV=K`G3gZ_~?)^y7!w_<Ivejg>C!q&~^P1re 65K/4?3Hit8CGEIn[o@' );

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
