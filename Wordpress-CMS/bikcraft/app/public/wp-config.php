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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'dBlSaA11ETWbUofzYBxJdBWt1Bdd1JyDQFDvdrI6Zx2L/eSJTmOH/PwolWvNhh4vBKFHVLn8isHARKrqHfejsQ==');
define('SECURE_AUTH_KEY',  '8IpyNXvg+hz9M6BZpddIu90TiyNx7l4NMO3X9n1Hmvk4E3mozcqO3cT+UFMyXXihDrD4Rm/KThN301QEJ6oQtQ==');
define('LOGGED_IN_KEY',    'xevXblzK/GWnnUqVG/8FYaGRhBDKmIrD5NbMWAZkHbBIZJ0/R7flzUA9PVnjtCVyrWpN3JzoEJ0EVYngOn6GOA==');
define('NONCE_KEY',        'QA4RAEDDBHQ/KAkDsUHug0tmtjdETeMqBEVwoiSMXZFGMQp+hJ9bD1riabW5MVZcKw/dx3VP6c1Ty26lEVZi6Q==');
define('AUTH_SALT',        'u7GCZwNZZd0HcfY98amzBHupWFTGzkmQKgHD6oJDguEVxobVsEUExJjcOze5WTBxSL35yEIlhQNZtHoE8hgAEg==');
define('SECURE_AUTH_SALT', '0i4EUmxF9R2CvKiWmvdAmiTAdbR2GsSwx3vJ4Foed+FLZYj/oM0mBC8O2lBFTFZ6sxORoxRKcAo2grK9Ls/qRA==');
define('LOGGED_IN_SALT',   'StTBTDV2JjDgW6uHhvErU15p9n0RAZqsYP74PMfbOa4Ecv2UY0kEtMBqO9DV0A4QVNtH04OX98LkpdnIxVASpQ==');
define('NONCE_SALT',       '1Y0FXkVLGRnPuaYehVVqws9+96GuyP5EXeDWiqS30ke3ULKIDVtDnAervEezJw0cz2qEfKva+/Bf6c9xHC/4EQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
