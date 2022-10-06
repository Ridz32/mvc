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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'w31' );

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
define( 'AUTH_KEY',         '|NO0Lg9X3X>JRC,*3Zr ~0U!k9RAAbC*(s$`N-`_)W[pHF:>>}q=B:ov^C/_!+|<' );
define( 'SECURE_AUTH_KEY',  '0oM_n&SPjLK~[imJd3D/OL4wm, UtF4Nq8Y[Fb?dS^|MkmeugR~cxVGZc]r1fu/M' );
define( 'LOGGED_IN_KEY',    'Z&<)C62b*Mx:P-s&XFpw1N}v~8,2(K-oAXw#pk^v(tXxt?}HaT$#PU}F_.^(j #r' );
define( 'NONCE_KEY',        '%2;J,uEP<rwTmR}FT-cso+dFF1lIXBM4EP>fpkE0N:;qNUzwZg,ea^(F.;K6J~KF' );
define( 'AUTH_SALT',        'a|?`SKvQgHAAe<,kYxc0R*`E=f0+9WVPJj7he#cX8LbA?Iz+vGkC*c!S=XVtsQa.' );
define( 'SECURE_AUTH_SALT', 'uIU;&7}5uO LkDqAE_!G0)`u7wnxOzLZ:IHPyiz5E}.odF)9{U}%sS;tF{#e2x 5' );
define( 'LOGGED_IN_SALT',   'k0]J#R;yBe}0wC)=}{5C*X@:4c;J%:?#xU,o*r8|$o{eMa<4N?!6oTGy.++z,$1)' );
define( 'NONCE_SALT',       'HjjX;R,e/>gVo8!}Bemb*e$mOIV=)azCN)`csjw`ZGPyh*p.QR;SM*Yo:7Z.4sQp' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
