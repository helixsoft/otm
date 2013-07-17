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
define('DB_NAME', 'otm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'C^C[^Il>%MkPRRQa?Wq`} 1iJ(WFp=0VU|IH(^oDmh}<i2JAmH+Y2vV9MN40d%Aa');
define('SECURE_AUTH_KEY',  'ISbp/sfYiRsn3%(;NHwWL]MY3Sl@r)%N@0#1YV}4&0mhYx;`G:V6I+iaQG3n3IRb');
define('LOGGED_IN_KEY',    'U,HlYkq{Qa%fxWC9_.pa0QiIwqc64=^;+sLDMbwdBh>IZ2|JuL!K9HL=1xVj`>n5');
define('NONCE_KEY',        '7k?AzwBH;%)(0e!9ZM;2|Q.TU,Ak>|dEZA.6N>@&=1xhz-2clZt8)oS FpvR721M');
define('AUTH_SALT',        'SG /<DWTQ;,39!*6:e^d)(j=>XVpcIm!vfjc5e6^m;d:>:PtW4t$FV#E}=<qqFC`');
define('SECURE_AUTH_SALT', '9BT$%vJw3cMKA+eNPds<dIB8H@<BAWs]=NLIpC0dl~h^46!H8,y?%>K?_GWu{&3r');
define('LOGGED_IN_SALT',   '0~-hefmH|2cIQTibil[g!]z0AKoZD>8zzP8YNMZ^(FDw>>etc2^wS$<$VP]^JIS~');
define('NONCE_SALT',       '!4t@V}CA8B4R+Sxz5057m *Dcozq--6}*t9fsw~QX>pvI mh2uBBOTR0>Y$Rd/sE');

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
