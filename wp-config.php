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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'magicmarket' );

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
define( 'AUTH_KEY',         'VT{QT?5Yrg~Q@$G?Mc6CchC$@Wwj0ILU.meV:lnxEn<l #bP$@Ib#F99yz:}T12+' );
define( 'SECURE_AUTH_KEY',  '@jT/0^vgVnv3xzJz{yU^O<+@(@X@gh1t(eF%TWEh,c~W$b{4/xA/XzWAUDJ&aAMj' );
define( 'LOGGED_IN_KEY',    'cR}f@5a}gOXwi%g1YU#NRxT~_8[I}7,=L=[N9ZuzW4%J5(<qFQ8Jvj@[;h+lt1We' );
define( 'NONCE_KEY',        '6Q))+s)XstGX;$~mKepEGYJ/tv8`U|,IRJXZ_<RR JX|1F<?oaXn=WG(I>dQ_ XN' );
define( 'AUTH_SALT',        '/#7bQzkzcH_Hfs9fMF=L2&XP+L,DS*zSHs3R5qA6x7x~C{`~#- t1<osd*7L$hEB' );
define( 'SECURE_AUTH_SALT', '3?sx5}!{v(K#r5wog~?<69SqSa[.f)CVu{WDM<)PBo3!2j4D>-lYaHIt:}C@*hL`' );
define( 'LOGGED_IN_SALT',   '&ksQx!0uakJLvGNhY`~}sqL ni~F]rH$;Oc7B&2-O{k##Aitua%d(u-}{l-}q)@:' );
define( 'NONCE_SALT',       'Y<[ZnPlQXLJh=J=>vkudNYH>OV%i!v|(`)^k/_eB_AO*SOFCrepo?`*M<zCsL&->' );

/**#@-*/

/**
 * WordPress database table prefix.
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
