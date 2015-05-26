<?php

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// Codio Site URL
//define('WP_HOME','http://viking-sponsor.codio.io:3000');
//define('WP_SITEURL','http://viking-sponsor.codio.io:3000/');

// Neyra Site URL
define('WP_HOME','http://docs.neyra.mx');
define('WP_SITEURL','http://docs.neyra.mx');

/** Codio Config */
//define('DB_NAME', 'neyradocs');
//define('DB_USER', 'neyradev');
//define('DB_PASSWORD', 'Aurea1618#@!$');
//define('DB_HOST', 'localhost');
//define('DB_CHARSET', 'utf8');
//define('DB_COLLATE', '');

/** Neyra Server -  Config */
define('DB_NAME', 'docsneyr_db');
define('DB_USER', 'docsneyr_dev');
define('DB_PASSWORD', 'Aurea1618#@!$');
define('DB_HOST', '23.229.121.186');
define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY',         '|.@1O1<m>q{;^r4?ASQ1 m^[qR9]+<?y<[Eo2H3&vUxuLxRho0yK}u? [3qr3B##');
define('SECURE_AUTH_KEY',  ':(a+9r.$u)pdcRUZkOp?RZv7>x$KF|jx6~V%>b+Ym+-A0|WdtM|+ocgOt/(I5>Kg');
define('LOGGED_IN_KEY',    'HzG]hh!j@dI=>}*ILhgh>o88T/u=bzVP&pjaqN[Fo@+:#zy%hn57S4kMSk%MM*qS');
define('NONCE_KEY',        'E~*=-f^c|X8bl0>})|Fi9R?.xQ^[p=iE~NACy+g#?OA]#4Tcji=N,9ggF)dS=?Y@');
define('AUTH_SALT',        'fQuPc;Y#u!(|~w=Y*,8)N-!/BGbH|{E^q5Y.qB>dU)ir~usuQN:]y{MY>}fV|v|2');
define('SECURE_AUTH_SALT', 'u>uLC_Q))]G1LPp{&$a~&%k|T{;NR*Z-Pgx/+|q;T!jnDv`Hfi3jlj0RqLoui)QY');
define('LOGGED_IN_SALT',   'Dk1[Fz1/W6cv0o)#Rp_{?0Fn|Vn1!~s`02CspcA:1v^Wz7d&LbGq]pG$DThM6d*r');
define('NONCE_SALT',       '41|>,?^8mN&I|G:fg|lg)m_q:q=$T/Ppo*CQH_vpSp+G$*|jK>N7@+UQ9UT]rBu1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rn_';

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
