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
define('DB_NAME', 'cl60-a-wordp-6xj');

/** MySQL database username */
define('DB_USER', 'cl60-a-wordp-6xj');

/** MySQL database password */
define('DB_PASSWORD', 'GfVXBXX!3');

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
define('AUTH_KEY',         '3_p9X-E1Xumqy4TNgh2MdVwz)tUG75CKOh2^ZNpwlelbc1BVAZa9!AbTGikaH8_p');
define('SECURE_AUTH_KEY',  'coaOle(838s!nBnUV3q/S_Ftp2mGcGhKf0m31pd4ljhsPWl)k88O3e72eriG234R');
define('LOGGED_IN_KEY',    'Pcqlc_Bv+dOA=ibSau97K#GLn2rgQHaDsJIiP^x!zOe9YVIc#VNu5Clgf2BicbTs');
define('NONCE_KEY',        'EL+k/yji9WuUFPdgwKr8k(Wu-Bz3-GRf!=k)6wpNqg#^PcCmcLH#hdHhLNE2Z5om');
define('AUTH_SALT',        '6EyUz==MV+Ak6Zda0dzehewPzBP=J-3uO(Mpg0ZF6lCWV(6/9dLbi!vAtC-n5nGu');
define('SECURE_AUTH_SALT', 'Vz+WsCKSzx)!62DKhz!TUAZzL543iuApXPeF8OS5x0X/Rc^UPCwyM+n^c47h=e8-');
define('LOGGED_IN_SALT',   'mc+4!acq(_+6sbqd!l(+of8cv7ma!UgiYeZopP7xhmtTw!1a-ZvVOMWRJ(yn/p86');
define('NONCE_SALT',       'X##(ncq/6pEE2rT5C+VoB5(hi=hvtvPyQaVutn7H2J0dzhAqf)BMHFWv#=FyL3T(');

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
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
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

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

