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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'news' );

/** Database username */
define( 'DB_USER', 'admin2' );

/** Database password */
define( 'DB_PASSWORD', 'admin2' );

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
define( 'AUTH_KEY',         'R3:o}Vt&d#zP$5?Jn{V*p]$??dX|f]%,?EgpMaK`!GX8:)Qh218{4%t7`weq7p%M' );
define( 'SECURE_AUTH_KEY',  '4V1% z>5([oju$eqM?^`wWz9xOWKl`5}yM^GE0V+q$uru}jsVx$&Sjm=*NGLa&^m' );
define( 'LOGGED_IN_KEY',    '}<=*s/KJc_1<I_b6DI=J|:l_q=^@.faX#TpU8S916E&]%lXajFb.c>>e3!AwC /5' );
define( 'NONCE_KEY',        '90TWv8p,7vhDTPmMBmU;3,bJEnleaZH_KOM(H>h[u_G6D;<bYJBf)9BsC/9~PzOe' );
define( 'AUTH_SALT',        'P0%^;8fl @F_neG:lc]3<.^C1RktFnGnlgjvqg[m^qcNjnql?Xb<s$`(ULc#Vc6R' );
define( 'SECURE_AUTH_SALT', 'QOi@6&.[@.{7%9vo[ud7-Etdy>! qYy=VLCkuxwe%/}@GgqD|1NOhPL0^(I3GJ[G' );
define( 'LOGGED_IN_SALT',   'Z1KS-7b0 ;hk#0hJ~1B0cc0#06eA:.7 =7(>qh>>A_QiX$NTs|6;tHf`}{K_nEAp' );
define( 'NONCE_SALT',       'b7m+ {rImyaHZd4i,!D7qoXVtsI-Ij-==<T]vTAqyt,J#DMaTMr64EPb2c0bY#J_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_news';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
