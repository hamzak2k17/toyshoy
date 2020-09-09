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
define( 'DB_NAME', 'hashgblg_wp783' );

/** MySQL database username */
define( 'DB_USER', 'hashgblg_wp783' );

/** MySQL database password */
define( 'DB_PASSWORD', '.@@eSV45lp(536' );

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
define( 'AUTH_KEY',         'ihii8qbnlli08bqsnpryj6anhefwl3iacvog3niy4lxbismzpbnpsspqucnfadu5' );
define( 'SECURE_AUTH_KEY',  '7hcz1r4nnrg8dgcmzsihnzsy8cm4e54jp7wy9lhomfq7i6xcpb0j0ofginl4xj9o' );
define( 'LOGGED_IN_KEY',    '0bvgk82vcjfevzpnepjvbhirpjsedenciambfjtjwmifblzcunric2bztxgnoawc' );
define( 'NONCE_KEY',        'dutr1kdwvnr5gqydc8rmmro3vcmq8yorv2brfenml6snmgic1jg2pe3ik7mjdul1' );
define( 'AUTH_SALT',        '3axvmfor6sgqsovwdevqndjca4q7zwklsgtcogf5edgcwjoelh7nzo7lyuklzopv' );
define( 'SECURE_AUTH_SALT', 'bcffn0hlam8ymr5o29huvvxxzo1w4d1mc1yle6bfli63ge7juxumg7zfew6rezda' );
define( 'LOGGED_IN_SALT',   '3sqdwp9hccslccgbufbbw8hwlililcevlylqfzyu4gnpil5vk52ze9mbg5gfs9d4' );
define( 'NONCE_SALT',       'jnjtxqdbnqzjd4acxfkoisamiuay4co6vgvbfyotwhmwp5ojrby7wumc9q111c9z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdw_';

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

