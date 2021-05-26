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
define( 'DB_NAME', 'etestDBxrirj');

/** MySQL database username */
define( 'DB_USER', 'etestDBxrirj');

/** MySQL database password */
define( 'DB_PASSWORD', 'Rd4d2jG1ZF');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', '66M{6emxy<Pbi[5Chpw_t-_[OWdZhow4CKVGOVd_[18#;5aht-HOWealt5DODKx~');
define( 'SECURE_AUTH_KEY', 'Ug>07F04BJRv@|}w~|:NVdkVdls1RJRZg|[08[08CKow@|8FNVz@|}@|}4Zgoworz');
define( 'LOGGED_IN_KEY', 'LW-_][0Vcksdks-@CJRZRYck>08FJ4CJRvz![s-![ORZhoZh58GOGNVZh|:4C:48G');
define( 'NONCE_KEY', '}8FNsz![z!|}RZgoSVdls18CK5W-_[1|:4Chow-!s-![OVZhnv$,IMUcjUcjn}3BJ');
define( 'AUTH_SALT', '[~Wdhpwow~!GOVdhSZhl[18CKQYcj>07BJ4BFNrz@,},}3jry$nv$,FMUcFJRYg|>');
define( 'SECURE_AUTH_SALT', 'my^EIQXIQTbj<3A2AIMTy*<{3Xfmqybjrv3BIMUFMQY$,}73BIMqy^<u^,{QX');
define( 'LOGGED_IN_SALT', '0cjrzry$,{QXbjUbjrv3BIQt+_]PSaipaemt26DLTH#;59]29HLpx~#mu+.HLTbiT');
define( 'NONCE_SALT', 'it29HLAHLTx*#]2]29x~_t+_#LSaimPXei<;6EI2AIMqy*<{.;Aaiqximu+.HPhs-');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
