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
define( 'DB_NAME', 'kanij' );

/** MySQL database username */
define( 'DB_USER', 'kanij' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NgOHSDqItByrRsLY' );

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
define( 'AUTH_KEY',         '_0q]($?Q<4wLenMB+U?MQFTSmfRTI7| p@T~o33+PlO-?[osw;eC!8d$ =wQA-84' );
define( 'SECURE_AUTH_KEY',  'GH$o^Xxel]b0PE;C[MNy?l=fS[Ha}#RM@&/4*~~TRVcsEyW~<-#%aAhckhlIMm=:' );
define( 'LOGGED_IN_KEY',    'SnFyjk#}47ko6I8)1WRl>MRDB;d[)Rqvnh6BqrE)&&g6zFvg=9.]!7s<|KwO<< l' );
define( 'NONCE_KEY',        'JmGrccCHX}i(@XSzP.@HQD+Vui<SLG.NQ>aq#``9..(%P*C]YvPC.A&zXi%Vcn{)' );
define( 'AUTH_SALT',        'wv%;/vkynt<$t.p33)+|CflL*q]3Eg7qM8j_kQu[6Jur;fbrD1>Cj>di8%3EAZ!z' );
define( 'SECURE_AUTH_SALT', 'FAxej*cGEDodS-cfn/Zgiy_,?1&gWSZ(4S6JhHRB67wX3fY!D.NEYA48 }WEESA-' );
define( 'LOGGED_IN_SALT',   '_LDYJ0o_QU>+Y4DPuTD@5I]GW8rhZl`<Jua:[bO+>/.ZTiG%#P&(@Gd*>(mb vsC' );
define( 'NONCE_SALT',       '[5YTc|V<({9Q~=C&x9B-]H4U)KMA79!s$HJlbD_WO7zKZUhZ #|GX{+aG[L>(X* ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rk_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
