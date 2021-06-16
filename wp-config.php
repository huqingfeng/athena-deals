<?php

define('FS_METHOD', 'direct');

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
define( 'DB_NAME', "athena-deals" );

/** MySQL database username */
define( 'DB_USER', "alexhu" );

/** MySQL database password */
define( 'DB_PASSWORD', "hqf5201314" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',          '4JA!-j8Q`UBP<&~cUs!mRxPv/4`RY#f-g[}4s` < Ob~SV,AAtesO/2qo1$),U-u' );
define( 'SECURE_AUTH_KEY',   'oF8hIbWs+|E6qOMEc]qZbXS&oZ/&F6|ZkNz!P}{;4LU66JJ0(A!##NE_m$NG?Fs!' );
define( 'LOGGED_IN_KEY',     'O>uL97FHJz9/8RcGtbLn}!8fI-9~0/Mtv<!;F$Q[3B9adX]wu|4,!8r6*>ocGW/Y' );
define( 'NONCE_KEY',         '_,A]Z^zXdC/S=<k~OtL4GgwjyppS)1swfC`6;59=oDqiI;*YQV<DZY7zG|UVjZXo' );
define( 'AUTH_SALT',         'YM|L,)Io8Sj/,z1Uqfnk!9-E F+THm+c4aA}lz/vGXZIA:h#`RCrFH bYnF>V#k`' );
define( 'SECURE_AUTH_SALT',  'Kq1m/+7,z*_i1`cA|,>-kMCl>vW~{2xmX7$<}ACKc-XcfKP|_dNu[I&m 0fS2@ow' );
define( 'LOGGED_IN_SALT',    'gPa.<gGN.n3@{82NKyv>5R6ro:MwtvFwF2mGALZQEm@`;u*lVBhn%fcv<?TcDX@_' );
define( 'NONCE_SALT',        'l MR<>3=oM+xwexq.^|D2/1KpaF;<Pt?:#YOVq<?;T>fXEPN$Fs4tAsZvdH@__n`' );
define( 'WP_CACHE_KEY_SALT', 'aiBR_^uEIPIA6L|S?eoSU<-!4i@s+Dq~v)^,}qJA_-rmIIZ+n{;j+vhXOXZ#uDRO' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'IpIXqNJf';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
