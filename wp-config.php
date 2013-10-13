<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'combodental_production');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'TeeeTh');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rSrX@)KJ.45dk?qGM>Nxt)q/Rpb?;!SJQPFP^Ax|[x`|kuZtQ?eake(-KE^eU{K}');
define('SECURE_AUTH_KEY',  ']uJ*HDCKl2,+s:8Dw]O.E.d].B()m$i$u,Sp_.eWN>Il7o2&?Ce|o,6vK047dT{0');
define('LOGGED_IN_KEY',    'R3$Z{itIV(z-LY?;#TQ}-/Z+E/%%l#1%=O1:SE~|nH7 h4R+j_k1VhMXD*bumGcY');
define('NONCE_KEY',        'wU/{)U(7Lq&9|(`U[ Q;`JCrujh>r[8|>XIa!Fl:6#^Co+>D-;#e/f:B_d):_z}S');
define('AUTH_SALT',        '-3AuW<n-|jZy-#rXc({@K/v#ly4(gQe[Fsmh8jw70|>z2WykMD.NBY+8p.PcF~)4');
define('SECURE_AUTH_SALT', '=Oeq4@C1_{+_2)J}KX%9It+Rp_|Q^(hDV:[9HacV_?fY6U+JSs%WopU/NYV$f/.0');
define('LOGGED_IN_SALT',   'C2Wl5:r6Idrmbf8SMpS6r@pf:{)_6+mVQuMcQDd(:B7M3 S`8M+7ZvR3+.L7|j/{');
define('NONCE_SALT',       'H@c@r==ZaVn:n?+Sv<LwIkO!>GM*|iXf|)UyE*jRJhSG;R[?+u,Y0>53vyN/MZny');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
