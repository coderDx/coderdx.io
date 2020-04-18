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
define('DB_NAME', 'coderdx');

/** MySQL database username */
define('DB_USER', 'coderdx');

/** MySQL database password */
define('DB_PASSWORD', 'pringles');

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
define('AUTH_KEY',         '^J2@A0{]>yOif.ny5DghEEWn>w3+1M4vG}2~-1Rwt|&h2}x-~UnDL]^6.g qxj/x');
define('SECURE_AUTH_KEY',  '!y|jWv0>B!Z!evP|SFmne4<gYAcr&oX+pFi|J$zQZZrN!LE|^JH(.90hm%@I^AtJ');
define('LOGGED_IN_KEY',    'C*A8|<<M?,Z]ewl$0(-f`x+&Xh<Gns?/#4KaXP<9A(LoS|z #t]YvTR,_PhRlavf');
define('NONCE_KEY',        'C%-*OE*14MhOGs1;|Y.mRy IQt86^b^`uta4-9/=4^2A@&-/KRb2tO3Hy!w*iFnk');
define('AUTH_SALT',        'DP6L<Q8V/gM!Ivd#YM{zcPttOWwl^l5`ryV3Gxg{IaK?$A_CUKN)3<C.-1u0|`]3');
define('SECURE_AUTH_SALT', '0j~[Rv#2^8-/A*q Ok~Yf.;;> LpO^xq%xNs![JDVpZ-)wa$J5@S(,0;}L1s|O[%');
define('LOGGED_IN_SALT',   'v<jlklIvD<]crp5_W1cbnn[^rDS_Ba`}UhK7)uL|vf}!N>GGw.K$pBN#e&A5P&xw');
define('NONCE_SALT',       'bvfsRcM&`|0:Ro/*qXqg2{z_!sSU$CLltB]^h|6(D$8;WhflPycXh(SCJHRc|p)X');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

define('ALLOW_UNFILTERED_UPLOADS', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
