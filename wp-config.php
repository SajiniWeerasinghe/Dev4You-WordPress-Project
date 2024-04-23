<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newweb' );

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
define( 'AUTH_KEY',         '|LxB^6sJiZKY|M29h5SK$t.sFi|R6}Fnm}&_vyLg@yjbYcCjH8gn*ite=kd!s<lc' );
define( 'SECURE_AUTH_KEY',  'au7;YfKcxII3u8t{=EhHtZT4COTfIYO?(#$mEKK;RtcZ~]S@v7VjK-^EbfF7T1F>' );
define( 'LOGGED_IN_KEY',    'wkg59v;fSK#YqUaqzOm+`q&ESp7pQeLi /Hlv&Oye d^[9W+g?<0:(}v,/bBkBOB' );
define( 'NONCE_KEY',        'vhe2,,<qy,;.yYmKfD[o{1Fo!wIe`-)R`dH&qUMPakWr%tF0F?Ju!8E]wRCQFrZ;' );
define( 'AUTH_SALT',        'tVpAT;.!qPIoWw9H8jg+kQ=ag}vLUlIkO}{!gvrQ@G^AnJj]O1h/$.f@8JJC_fOc' );
define( 'SECURE_AUTH_SALT', '3ur!i?D0^dwI7}e*`jY<$Ux$/py%+E<nG6&aL_NrUm]K~!Bmc@mE)u`n3nE/DCG?' );
define( 'LOGGED_IN_SALT',   '|=etj]&^=+/Dl5nL;[qJxG//QDCiXo~-ZZu%khoT[:p`@Cu;nI.OR*7O,[AUdU8 ' );
define( 'NONCE_SALT',       'Oif^i<ZS@7gIxS:&+MO8/aWiEp8JMgeEV4hO>vPTpX-tf 4EANcs9>j-Pz6yxTdr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xak_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
