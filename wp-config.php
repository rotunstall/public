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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'C5({hYnzEJ.ENaclI}kx@o9>V.ME26QtP>ssN{[bIhJy.4L3wp}=s=6&@1&O8^QS' );
define( 'SECURE_AUTH_KEY',   '*/dJ9c,)1(x;PHrbdp&WH3IPNc,ST#+m,C |zgKPTaBB-Y(}C1y^dP)-n9LL$J A' );
define( 'LOGGED_IN_KEY',     'dA^_x(_mtNYhvh|x@rP7Leq@HxHS{zl8O,#5=(Q*);3:J5]3-E7ypbAqTEpxv5jv' );
define( 'NONCE_KEY',         'vX|lON%8&)0D0ww2y5Yzu18:$VYU#57Jc-*@o^`^{i$`v<~g_1%r(/@8IxD8Sh-m' );
define( 'AUTH_SALT',         'gG/lY(-#LeHoNEhD{x;rY+e<}z`gks{nu!yu=7C-d^0TPz;OVjf@z4tW^(D|<%d%' );
define( 'SECURE_AUTH_SALT',  'x 5,,?!0BOLM$r&Bu9K{E$UprR;w:j;`6Rj$.K3ymL<#|r~j0h{E:hEm0G58OR`y' );
define( 'LOGGED_IN_SALT',    'KPIFrt$+?*PBeRgA{nU9-`~OeAPYF%%=xh|jPm+sq@,n]ZNlwmbKkPG47OH4iax(' );
define( 'NONCE_SALT',        'Hy!f~!4?svP9z&?-RCgZF&1dr!EOFgcBw3H7bEXX-_D97-.+z9`9B:DbLoLpR{GK' );
define( 'WP_CACHE_KEY_SALT', '>7SwlfyEZR~re@/(` V3xjK6WPngSh;3M<m~;Qh&qi0F9W(Ak{Xs$[v.jzv2u]${' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
