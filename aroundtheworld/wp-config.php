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
define( 'DB_NAME', 'aroundtheworld' );

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
define( 'AUTH_KEY',         '|yd5lY||BZYoWFv@]KHk2m-)(o^0FTV+95DGUZZ%:WzLwN~;Jz.#;{oS{~piQYrk' );
define( 'SECURE_AUTH_KEY',  'xD*_E0nuE=uXXN7$NXI%oO;O~GcSF6/Gh:C;_)hhHF+aSZ+jx%Y/U8QV23]&=@_^' );
define( 'LOGGED_IN_KEY',    'u,2]bOJz7#DRd{X 8ZoUrqEDKja^`Qo$vB[> %fvp!f{9cMUSICjG>bce<SPBHl;' );
define( 'NONCE_KEY',        '^itbTV<#!(>~l%GP:4;<e.81$4Nlv&8]q^7D,>.I$dTvd`NOJ4?mtgEucQS)=IN5' );
define( 'AUTH_SALT',        '1MzyZ0UYJNy~hpY190B^z:Ml]bL9RWySiMPXEiAEoKK/$<l{4}4FT!#$;|-2l*n[' );
define( 'SECURE_AUTH_SALT', 'Z7i2V/R(`1kpC86=Noh0qB#X?yzW<20ngQ6o#s0nz2Z|8#0,dorIx^sn0dCM@k,G' );
define( 'LOGGED_IN_SALT',   '9>Hl 51zPNJ)efyl1_i%^md)k1&|w:,/;V.(?%NW<Gj%0W&~tz35-iQ]j}#O(<01' );
define( 'NONCE_SALT',       '}H7{yf;~9lS8-VF;8#*T[a<J6tOw9{+U%m>2X!hufS*kB5]OlxoEpTVqEL= h1H,' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
