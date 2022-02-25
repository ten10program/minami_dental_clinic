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
define('AUTH_KEY',         'obeh+M7blC8nQgXeNyxhze3S0exoVl2CK0W8nofaFacRxsWDmUxiqp6VcdPYXaSotEHrTy6spypn7yrhJiY2vg==');
define('SECURE_AUTH_KEY',  'VTj/xuhdJUUTC28nehuq2jiHG45v2/p0mbm7SWNOZ+WDfzLBZdGLFOug2FwD+SStNYKjVuY3xizbv3h9T7Qytw==');
define('LOGGED_IN_KEY',    'KtsNa5OC0Qac4sZjM2l2R/RnvDyoEGZ2R6lvTY40ZdD1VP73Pjyy8AlqFmTTChA+VCdTiV/y5eE2jgDcwI3Keg==');
define('NONCE_KEY',        'GME3rj3rmgfXwdKZZkTRXCnze6JOgircdPZBWb6yORrgSb+pf3oABR93KIQly/AM8jtdmAdVilvH1CzvgTZmpQ==');
define('AUTH_SALT',        'aN4siVd8o/FoCn13AUm+i1WMvfpPUe3v2KvrPNNiM394ksDuQ2hs0zkIhlSDC0NPO3ZpySfUzTOfgkHrtxBimw==');
define('SECURE_AUTH_SALT', 'lKdZCyQSOy10y5rCt/HAumFTAZS6HnEcfxPxTOVnDJI1FqR/Gel8wrOa8+xtWlEPyb1VBSnKaqHZ1SuC0IFtDw==');
define('LOGGED_IN_SALT',   '6xDXQrFJm4UlUyWqzy/bAidH8je4JE+taDsJJtR4psLa8BmP4IgR4Tkb+Od/XSzjgQIaKA1JFmS7O0Y+3nk9ig==');
define('NONCE_SALT',       'yfCQwHodcOxhHCiN3dG7f9lR+owzTbBZZQWhbsBkL1rfomtJJ4zc6i6GrTA6DPPiWFN//GlhvXEPywlgsn9TCg==');

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
