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
define( 'DB_NAME', 'kaurswor_wp531' );

/** Database username */
define( 'DB_USER', 'kaurswor_wp531' );

/** Database password */
define( 'DB_PASSWORD', '6t)pS43]27' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('DISABLE_WP_CRON', true);

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
define( 'AUTH_KEY',         'dn9p8d6mu9bryomvy1iojazjcnvjktvzfyql2kfhjfnaukxggzwtkhp16u7ekio6' );
define( 'SECURE_AUTH_KEY',  '3vfwm6lrmq21u26aayzsswk6ds0rqz5fvxkly9g8pkitudqutctigzdqnl1ixtxh' );
define( 'LOGGED_IN_KEY',    'kvnsu3zsjp5dz8b17qosf0snbjnqsu4wqqrdhrjd53wzt95k8boi71kptmrmlf6w' );
define( 'NONCE_KEY',        'jhrpgu7fq1yjicvonfwrglqvxitrajnos8poagxgbwl81zjtnygtjkpwmvxs8j2z' );
define( 'AUTH_SALT',        'iclxkazlk78ycqhclycvd9odqviudw7as3tqeqrdmtev0suzvoxue2aa8xa8k2pp' );
define( 'SECURE_AUTH_SALT', 'p9v1equ2i4ijrpjn0qqcaxfcydxth619kw4b33vdrdzuxt0n407vhkdvwr7bbghn' );
define( 'LOGGED_IN_SALT',   'knjqzow601w9s8rw717cgediqewrudgjfmuzdqcdog9wwnjvf5nv8ii06qzjnfm8' );
define( 'NONCE_SALT',       'zrouctjy5druvzsxywdbr9vw77jfnzosx30k9vg5saquk6cel60wnliktongk41f' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp43_';

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
define( 'WP_DEBUG', true );
define('ALLOW_UNFILTERED_UPLOADS', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
