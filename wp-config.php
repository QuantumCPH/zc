<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'zc_mawj');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ZapnaLHR#@!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '0P$~y-:5n+!SZJ,1IY@]Lc)*G$7778kRr;4)NL5_*jS]i42uD_pr|`A(=jW^F^DR');
define('SECURE_AUTH_KEY',  ':>u=B+d%z%C<PcAd<>WD~AcD.,e8!HsNbr5u{*Dx-f@`7O&iQv2Y, >yZD*L^oT8');
define('LOGGED_IN_KEY',    '.CMfMSa?~W&c yg(^Sb!||ibJStT&M/|DQ<Kq5#lR)BaU1,9RTF2z&ulz]2*RbYu');
define('NONCE_KEY',        '0R70Z01xbQ)OI(OfR+-DsV72 5MM)9r[X9y[&oLHBKH*(`8e},fI-D=&doy<AET4');
define('AUTH_SALT',        '{mzpkZ.VTQo$.xwD7XGww;xr15-{R<3q#>4wgBM5I90es9F.L( Kzh,c<3vI21LP');
define('SECURE_AUTH_SALT', 'BD5eZ*eVjxPl%;}&(<hF4AZq6yA/B*wk~m,hIJO>h%Vm(|r5RP,jTu_u<@37NbDj');
define('LOGGED_IN_SALT',   '0UA>8We9fyqgzIu;@,&ZnNhNqE>;SO4QP=~W]MTxYz_)1!U6dpBdw$imYN .u%;s');
define('NONCE_SALT',       'd-CUh(eSo,oR_:X-CYtaTbz6Ttu.4!K.QvoElE`D)lT1Vh!c)|uK%/LzRxH402d2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
