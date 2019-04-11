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
define('AUTH_KEY',         'yWvCtBjkpBoUvk+Pzuvmxex6CK1b3I+k+H4sXIvFn+LpjLwxycm0SlV4c08U6imKYa4Didm1D3aLPUN/28lO5A==');
define('SECURE_AUTH_KEY',  '0mslj6tlE4QAKzY970TdZIkCYtg5V+3VXkeGukvs8bpyXN12+VmJQ2pzcOweRFVMJmnEG0X6//lhQTzbWpwvLw==');
define('LOGGED_IN_KEY',    'VLUJTqBVxr9qRBhGJxFnKVsEjM2/7NWn8ftgJ1xFVLeqJk93RCuBA0zSP9b9Uwk/hyBt7GEwoZ80+4Xy5G7SbQ==');
define('NONCE_KEY',        'mutmBqNr3V60vcCai9lY/Mig9+FALN2QlTXx0u3gj8KR7zKRVkZTz4xZSHklNWv6fQY4uT2OTvjQYk3NEKsh8Q==');
define('AUTH_SALT',        '+qxp28Uv41wu+BXazXn747msQfYAmY9sTGCTbYwrrZMRrHm1MyH2pnlmCgezpf+mWDz5FI0I9DDMoEyODGCgLw==');
define('SECURE_AUTH_SALT', 'eKOYGmFRnjUCu6C3IdXSqJzQOZ8A5jjQBPHHwpwHd5v5unzTdVi7EUcfNe+pmkAAFJt3yeP5IJ9bHOE82F71OQ==');
define('LOGGED_IN_SALT',   'uzLTBX2Gx4vXjVuko7vpZKoXC2coBzAcdGu1F23n1taIAlVY/zL6kWG2vCvzMOKExDHk/MnlWf3E9HhvcDtkrQ==');
define('NONCE_SALT',       'rgRRYSx3FZ1Gc1m0nO0I/iurPMSHNZCVBpZLcUN0bxX1lVMNxlhrSHpRS2uVXpmhP0afZ/dO/Ywu76CtrJv7Pw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
