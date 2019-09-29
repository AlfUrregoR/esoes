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
define('DB_NAME', 'esoes');


/** MySQL database username */
define('DB_USER', 'root');


/** MySQL database password */
define('DB_PASSWORD', '');


/** MySQL hostname */
define('DB_HOST', 'localhost');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');


/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y1FEK(XPXBqTIU[fT6Ims2yoISwqb0-#*HKI[,u]TddDc1@ai9<!Jo;/3c>{{QQ)');

define('SECURE_AUTH_KEY',  'ZCw,{8mXAeo.#YS+`Z89(^z)W2^Dygr7lA,o4m]r]q{k&g!]mf{Ah1T:Edo+sDhj');

define('LOGGED_IN_KEY',    ':Vg_i`yrj.PN!Zs5g-PoW|Wsmq4`KfLRnWy8UT2{(!1J|.0@$o%%or0j=>%TxEvh');

define('NONCE_KEY',        '-N?S7546%:.ZyO2_zG6zy9H&vP.l4mp^cn]O.U:HGD@?dKJGdImdtv^/%fsynEuy');

define('AUTH_SALT',        ':e[s^8FDl7AP@}tv$3T%cG|3l> 28$#J4kn,D*Mw^6+F13u[ssn`n:&FU#8:!C}J');

define('SECURE_AUTH_SALT', 'DaIo)!Z,t9Y(hVf!fM:Ja=^!6Sl,(<[ZlPA[I>B5_ji=Sv0<Yb!Ink~k(q3;7Us<');

define('LOGGED_IN_SALT',   '06T}1LXsB ZTqa2PIN<2c@7`p4FG.iOPEyr&f6,-D_JS,VwpTp6,}<]EBm<eI0}m');

define('NONCE_SALT',       '^m9 4L@.0@g:kTEFO.Q]@S0T5<B,3lA-=me/Bz^H9.EeNIP5||4Z$uI-9~,@Tp9D');


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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');