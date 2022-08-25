<?php
# BEGIN SecuPress debugging
define( 'WP_DEBUG_DISPLAY', false );
# END SecuPress


# BEGIN SecuPress repair
define( 'WP_ALLOW_REPAIR', false );
# END SecuPress


# BEGIN SecuPress locations
define( 'RELOCATE', false );
define( 'WP_SITEURL', 'http://wp3.local' );
define( 'WP_HOME', 'http://wp3.local' );
# END SecuPress


# BEGIN SecuPress dieondberror
define( 'DIEONDBERROR', false );
# END SecuPress


# BEGIN SecuPress unfiltered_uploads
define( 'ALLOW_UNFILTERED_UPLOADS', false );
# END SecuPress


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
define( 'DB_NAME', "wp3" );

/** Database username */
define( 'DB_USER', "wp3" );

/** Database password */
define( 'DB_PASSWORD', "123" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
/** If you want to add secret keys back in wp-config.php, get new ones at https://api.wordpress.org/secret-key/1.1/salt, then delete this file. */
define( 'WP_CACHE_KEY_SALT', '@;$<heeA>Yc/aLrSwIp[9CqcA&lsV-NuHrbi=%pW*L :Knmt)o<d3>dL~W2UCX43' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2_';

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
define( 'WP_DEBUG', false );

// Force l'affichage des erreurs PHP.
// @ini_set( 'display_errors', 'On' );
// // Désactive l'interception des erreurs fatales
// define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
// // Active le mode de déboggage
// define( 'WP_DEBUG', true );
// // Affiche les erreurs de Wordpress
// define( 'WP_DEBUG_DISPLAY', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
