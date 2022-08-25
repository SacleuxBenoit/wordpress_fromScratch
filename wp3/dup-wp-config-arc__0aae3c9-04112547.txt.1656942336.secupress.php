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
define( 'AUTH_KEY',          '|3k>gYs_!J9>MMRis6+]w>[&2cF6,x&(meBUX4pf/or{=l}7^,I&}Ys/RLo+!Ux#' );
define( 'SECURE_AUTH_KEY',   '!4;,^w|/O>[,Rn@6!0bEi[788,3Zg?_V JLr^!&88*Stw,0#sdlu+.,>8{a62(G2' );
define( 'LOGGED_IN_KEY',     '${l5%pj@|y6zh x*>ZDK=DB !y#DndV;J+]7Pr{7KRf>{D?+F=e`YhR[?h(0vY}z' );
define( 'NONCE_KEY',         '30hWKrER_rxL;Up;heA(QdmE|-VMvTS_Fgf^3M)g%x*x7E%L;W3s3Py_BCJ-dH$W' );
define( 'AUTH_SALT',         'F7NjNu/@6G1g8b7KwLP*2zv}6B2$DB-jsMne].&vgo.1Gy02jG8[SPxR`-<B{r+C' );
define( 'SECURE_AUTH_SALT',  '(pN]Jfp<5J[41.C_^R/F*QV_;uq%>m&0oA49O?}PgJ:Z3<,YZYvTia9O/%7;%ncp' );
define( 'LOGGED_IN_SALT',    'N|ctW==)LE[3AjwaTwL0pdj5h3scHQccS[(FE0hT$ Zeq_=+Vin<)8liV3?CcE`k' );
define( 'NONCE_SALT',        'l{Q:v1]Z 1ae6pU=K]vP-pmZJ3fFroGnOVfmv!nY;A Vo&!SN)tz3;SS[XJcy^|u' );
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
// define( 'WP_DEBUG', false );

// Force l'affichage des erreurs PHP.
@ini_set( 'display_errors', 'On' );
// Désactive l'interception des erreurs fatales
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
// Active le mode de déboggage
define( 'WP_DEBUG', true );
// Affiche les erreurs de Wordpress
define( 'WP_DEBUG_DISPLAY', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
