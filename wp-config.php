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
define('DB_NAME', 'linhchi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '?8mnnG?w^{)_3&@)^U3D01Cssb]9[oUFlFV5f;PHD3ve,cb4PBUjEHNxuD28N(;%');
define('SECURE_AUTH_KEY',  ',@Fr,V:)$74RrR[J6x;)5M#j[i+}=K().{V/hYaIjn!/a[hMx]l1=+p8@0,6W+>n');
define('LOGGED_IN_KEY',    'iDSz?e?fdU+<Gl3WMr07=;%)7/.By@@$ElD/Ry|;/>`L1E0Y)7vffnE _LD/E-=r');
define('NONCE_KEY',        'u-M):1jWw#.)l8<L85+PD-,]#-;UIb^^r.3aOJNE>f0PKyGT<(9MkICkdvo3}Aqs');
define('AUTH_SALT',        '8IEyY{qB:mnU?w=bH@<e%^[>!JoJeVG)P9=PsEw?v<mjd7)K,vs3j~yUy:TYPrD|');
define('SECURE_AUTH_SALT', 'EE`8*Fj,g(0{Z QIktgIT4^oL_RF2W9*C#u>e^1640ajERRLK%Ag9f{^??*~#?60');
define('LOGGED_IN_SALT',   'SJ2*wJF0?#)&M(*NT+:J{:*^:5p?3`0T7FC^M5ga }}*I0eMZLZ;F=D>cv#W~!/+');
define('NONCE_SALT',       'q_$&4v;X+;GEr3VPM|Gt~1|O-Q0*HHJ68EI^%Oc$Y+_AR^,^k_Ktt.<)Tgy[SlEV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
