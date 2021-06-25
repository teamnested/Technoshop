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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'technoshop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'EocLGEE0Rn1]=O(u22Ql,gQG4iH^MzDl@w,Cb-iB7[}U56MBO|:/kB{,0$LZr$43' );
define( 'SECURE_AUTH_KEY',  '3GFv/%c[vTr7h.TAf)aFFU`*pyAO4yc;>q6LAanU0L^_*gPs<94/n;jOWL&M4)@&' );
define( 'LOGGED_IN_KEY',    '=^A@gOh01kJrdJ@ &/@(XA8;0BX4+$8u,o)8R~+J}.$ $RgQyK+[RuETMyO|{g8X' );
define( 'NONCE_KEY',        '49cHI${k}@<f;Wm[yq%)VwI/$[sC.Xs}k^vuf}c[-D8}+<u$`+A[0O(u<AyDKmUu' );
define( 'AUTH_SALT',        'mz>|Rx~U[@0BM_Vt3#j-gJ{HJ6V5$x;WwBsH~0T`a3N&_pc-WbO*h2lG/DJ&o>3x' );
define( 'SECURE_AUTH_SALT', 'dijJm`=;|Z]hV`Gl6A)oBFD,JQx8`w3Nm/YaNrb1)5%5IO09)Y;mk&D=o|I<i4[}' );
define( 'LOGGED_IN_SALT',   '6SUPhHp38OTT}$/3uQVk@O.=q%3`COF-SYzsqBlq@Rwe5ZmMg[SQ/LWzJ:r^9)9n' );
define( 'NONCE_SALT',       'I!D+gtRY{$bPy}{kfYUQR~F;tNU_wmf%d+#O2)QT7D<&;RSZjyd-Z`(7pdv-<d!|' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
