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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ccit520_wp1' );

/** MySQL database username */
define( 'DB_USER', 'ccit520_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'woJhIjzrRoNf' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'C%W-L/37F*KqWep`z#y._D( ej B~p]j4n)V<v*B?g#T;op51-UwE{OIS b[41Fo' );
define( 'SECURE_AUTH_KEY',   '~dJVj!WN#H;TJ;In{AQX?b~3(#FRi5{AhiNED0uP_-vv9LR3a0{Rcn6I>yZX2%}G' );
define( 'LOGGED_IN_KEY',     '$y}HN52|uVu`Xt0fIb5JI;IFW<qqj,t?H~^fRWS11$J4k.YnQ5JS[]9%0oBo8*K,' );
define( 'NONCE_KEY',         '*E~cL&*17R/dH-|&OIW4&ZRlvEextp[kpFR=z*E^fl*ZXx!CdOM.j<`1 7CkDA)_' );
define( 'AUTH_SALT',         'Jyb:]o7Wua-DorFpd{_:t>m:tYBkD~U`MAeuY83zJV:]_(!6PIr8j(l&~/i:7C.2' );
define( 'SECURE_AUTH_SALT',  '%g$]|Pxb+Z)Qq-RJ)W$5EXH#7j?va9hS6QVbzLm%IUx.Rzlm:1.<$(EJA,.e1m9u' );
define( 'LOGGED_IN_SALT',    'tr(Po~J)KxvG>{TN}g=fo|O(xzX&rijw:;$6;@]]52LL70JEEaIezOtz2Y?JSMpA' );
define( 'NONCE_SALT',        '81uc8<V@(obxZpvLa0{B@9<_k:uTLDDMhqT>9pNagHs%Q>Ix^KHrR-M,LE:JSa_h' );
define( 'WP_CACHE_KEY_SALT', '?!Lhb .P09`!m tk,n~Z.W2 :kbMyA}Hv(bkhRJGX~aT./%~H9/<]DKnyUq7DgOh' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
