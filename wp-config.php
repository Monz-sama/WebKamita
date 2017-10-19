<?php

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);

define (‘WP_DEBUG’, false);
define(‘WP_DEBUG_DISPLAY’, false);
define( ‘DISALLOW_FILE_EDIT’, true );

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db704681490' );

/** MySQL database username */
define( 'DB_USER', 'dbo704681490' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sbqDfhVmOPTCBydJlGvY' );

/** MySQL hostname */
define( 'DB_HOST', 'db704681490.db.1and1.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fzEvS+<-lkv8>4U*ez<=G[]oh6)x<uks1pWhyd<J6.R?1H^!3Q*y3y+?Ht~n}qnT');
define('SECURE_AUTH_KEY',  'T@H8JSgx*qNB.JU<+qU+#bbPP`L_fe}~MOG9RHK|eAQo(I;;eHz-;9h&,#)9ce[p');
define('LOGGED_IN_KEY',    'yafW%H<3,AWLM;U]B`fS)*IrKMNvdDd-BDiIgn8^1!|vHYwHGxnVpbyc:;-?H!f!');
define('NONCE_KEY',        's}2d7?9Z%$7yU0?`-&&x:BcP[wb9~[UmDM~`~M?5d|WCr}Om|`.m=vt!YQvEQK?=');
define('AUTH_SALT',        ' YzRvC09yVK^W_d09T%THQ|9WcjVs/Q0M56;<N*@q|G_~HMt5pozQQ*tUmCR0+Kj');
define('SECURE_AUTH_SALT', 'DvkW gCo/0T0-4t{0J5!&|aA=#~ )`-kb+e@]`1^r|(0 P4^CZnz5S]xL,]:=|]S');
define('LOGGED_IN_SALT',   ':CIYSJ/s@B1wO?L2+#aj+XxwfW&qB6h#ak}XSUY0m7d*^]erMR{yoHK5!g> Q-Lt');
define('NONCE_SALT',       'p0|+e=9Ifa?`iaw$.R&k_LtwKz2GRbQ+b={ d<*S#??_;[M&Q$p/~Kl]ddC+oxt{');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'UXwsdBII';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
