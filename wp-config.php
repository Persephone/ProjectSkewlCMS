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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~K*5,`~<o(u0ls:saf|w?;-e$=^QraD97gIbltLY$FUcEO&3 mmgT0J wKXtv>bD' );
define( 'SECURE_AUTH_KEY',  'OKyi8iv^pc/mA;STk%;u1AU|:U~Et#Q,J_jq*n[(opmW]XBWVB}G]ym^3COI/qlb' );
define( 'LOGGED_IN_KEY',    'XG)L~wkx>(n+B]g6UG]Mw8PW}9l~9R0R[7XZ}43J^Ec5Ad8Iq OT4iEtSz,%U;?x' );
define( 'NONCE_KEY',        'F5>b:e5 Jhva+R+F%8wu66b%|,{-($vEDGk&-=er;0mVt:TDYp;S^({a>#Si&wTl' );
define( 'AUTH_SALT',        'e0#,&ToKhaNVH9w/BMS.6HJs~u%ms;e%Mh%!S{p/*K12Rsm*v5@K]qn f0|Aro2`' );
define( 'SECURE_AUTH_SALT', '64:1<>#,f?c^[z6Gn+ld)F{lS3<sn4Na$_ATR=FiOsfpL]R!GN>ed0he*5hG$hQV' );
define( 'LOGGED_IN_SALT',   'AGg-4/:s%qJ:$4?7vGI88.6M3@CnL,4Agt|+zW&O:oj`@uMD,I0cxgA.QN-od,I?' );
define( 'NONCE_SALT',       'B{=m8WCo}/u.P&ZZx3-#G,>G70iXFKz7*+Ph8{%^^Er/QFj.V<^S!LJt?nRo?Gy(' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
