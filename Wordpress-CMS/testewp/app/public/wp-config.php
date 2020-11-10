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
define('AUTH_KEY',         'dc4boTP1XzpsEUcFGvZ4zM4FiOYomTb9TgsbZABoeVkAP7QcwOIoEN55ykGmYODjvTp1EJ16gHI2xVaSCnbW3Q==');
define('SECURE_AUTH_KEY',  '61uNUnzqiMTKyD2citQF1ig7bpox318pKvGdhjZFbxKm+QRoUmsiBcOmOa6DG87N/NjYVLxnww5b9ftcZhzJYQ==');
define('LOGGED_IN_KEY',    '21gzAoFNFVJbUeMbocuRtBU4YUp/TyQupq/lWiF//9O5v17zbn+K0q2HMu57c2BldczvGD5sR4V4PT1ysoXDnA==');
define('NONCE_KEY',        'IbYBpn+MAovs7ySCpuzINcUkuLX7Lq1XuDlndMdjSh6waosl3gM6gof8F1kb1y/tYeQncgcz7eyfcosIE3u4Kw==');
define('AUTH_SALT',        'RFxFUiKHPw6wZPSV9uPV58hqLpCB5suwGSrU73/n7j84pAvkTHhA0OTv3EGzqYAT9xzBIWoRMbSl8CBuJu22Ew==');
define('SECURE_AUTH_SALT', 'FtGnzzfJV1TpMBFYr8951XCrAfOiVBM6aMjbtveeB4NLiAtitkL0mo6Uw6PKJ/976z/74LE6pidRWjaMzBie3Q==');
define('LOGGED_IN_SALT',   'wYsPw5+UQoYiv73Mv80gdoT5hFFBRpBDhHv3R0HZ0fi1I0ZKbdya/o7l/P0wjXBjwl3yXgwTXzVbsUJNLekS8w==');
define('NONCE_SALT',       'FSjXIvGAC6GGciXHt6z//BL9Dcc48QFJgklah/FwJyHHhX6e+GKeQcUxbXxHfzwlnysfWHZHY3P2QDMXkkaidg==');

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
