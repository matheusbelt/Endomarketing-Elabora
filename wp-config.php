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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'dSaJqV0oW4IzBVm0o7PxD/Ov3HBneCi9DgZ2afEUwieA3KNkXLrZAr9O6DaWZt1aPMDyzS6kVwg02C5aJdW4ew==');
define('SECURE_AUTH_KEY',  'bGqZ4SEbu/UxU2MAIGgSY55foi+uTe1ihlobeoBvn+ZQ4FYFrlO3R2eUuEdrLVqn40Z01kxe3jYV8xYsa3D/TQ==');
define('LOGGED_IN_KEY',    'BunSrO9eDpHx6I2VFaMntFslhm62Bekpko+kerASEwKBwsXvYtB/x6FI8Na5wrlNr2Gi0RpD4dfZuWOAx8Ck4A==');
define('NONCE_KEY',        'W16dwHHreDWImCcEI8TkrlndopNl96n+guTwnrAgRo+UoK5vNSVOdTSJoObuFxCx1/5rI/xAjGLMN4wxXKgXjw==');
define('AUTH_SALT',        'Q/7B2LhKyPUHMUc3QLX37HXG2Pm6aDXUmp4k1IFPCLCUJv5KIDfBiu+ixybbvvIK5GJ8/zXmdOLkU7jZPi8pDQ==');
define('SECURE_AUTH_SALT', 'Q25Ynqs68eZ1X9C5KdqXaKpXBUxjAmaUUkdAqqX5XBKJNwSeINzSq0APX7ehONL1aa9aKQAphIqe/3DNfoP8Mw==');
define('LOGGED_IN_SALT',   'DWituSrxEdEmoOyatlrVhs5vsN07PQ7Owg5txb7F+U1po6+V4/2STtk9bow0HmnB1WbwqEE9cK1ZkFBalvsAFA==');
define('NONCE_SALT',       '/oW5UGXbzrF+d5DiZhzgorHAsl2WZH8PHw3aHWX9EKpouYgN7RKX1MuctzKTOkdkL8c13UjBK95MNEK0ri5VLA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
