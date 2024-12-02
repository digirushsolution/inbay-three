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
define( 'DB_NAME', 'inbay_three_website' );

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
define( 'AUTH_KEY',         '00nA7!b/RwR|&q7F<}Ad)sxU}D<Lfr4u4l HL!:`CyktgAUV7.jQ)QYGG[f#m*_H' );
define( 'SECURE_AUTH_KEY',  'lB].{]ik?rbn63%{Le3ip+cPZ@xqc4<9UbISQrbLOm^la54.F0Oa&j&7+7(nt.#]' );
define( 'LOGGED_IN_KEY',    '2a9GAmT#&%B.1A7MDOJwm+}MP?[SV6rvN_5whj7CLt{!_j>:N&E$O^Dg,Q9cI~-t' );
define( 'NONCE_KEY',        'P/L3Q_zB8[#h2{Tr42EF5l]b|($qDj42tB~>%K9snY;W~ikk3JHM-XI>P|<{ARK$' );
define( 'AUTH_SALT',        ':L$=b Go_U(k&f{NcZh!khaq?dY}D|A]&?btn@/X7,*Y1)*R F=n6eB8/6oza92H' );
define( 'SECURE_AUTH_SALT', '@N?VIsk10l@+d9q-7x@<=3 Ck?kW0NaMWDfFCA[h+kXXs!.1|)P*L|x=epf1Sl`!' );
define( 'LOGGED_IN_SALT',   '`%%t g,4ZVjn]/s.i8I)x3j]9@nWn>F.)lhfy;4LpzF:p^|KTRoLVj}qCBMxe^#S' );
define( 'NONCE_SALT',       's.<cAs?)zO>iP9Sg[#sU$0i~.Uhr=A()r$y4_}$bngCmqSyMxC}#BYNTHqCWgYpz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
