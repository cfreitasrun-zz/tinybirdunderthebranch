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
define('DB_NAME', 'tinybird');

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
define('AUTH_KEY',         '$a2#Go,pVGmcNOCHyq>@WunyJ?,aSyw*Nmc%;*WV8J`k3[iQ:oZiLQd]<hn0Q)Ua');
define('SECURE_AUTH_KEY',  'UJt~owimi? l7i84W;yeS7sc/L2J,0~Xf~H.1DMmXSU7@qNlctK *yl<CiA-KFjV');
define('LOGGED_IN_KEY',    'w!q3+mchsWjSw2{r2rmK%ZJs~ f){J02:PcykOFsx8|~{YAoTov9JY;8Ik;B,D+v');
define('NONCE_KEY',        ',C:dsUf/tJ=A_0gGO1#{7/)-2yu3 r$~l{6fX|Rc}Zg}:2sv+JbFyr^PKi_u:qgS');
define('AUTH_SALT',        'pos};Vz})l*}2R-O9fdq/CoFQp;K!!2_PWZn9}bkB{OmMqS`L^-r[Rw@.w0<}O[Z');
define('SECURE_AUTH_SALT', 'Cy$7z~+.,c[_-[FPC80!9%uH_goE0g?t_e$q/MI=JL2v8SJ?ez2@qj9e}&]/S7_Q');
define('LOGGED_IN_SALT',   'm]>#<A3~>{x.KIyQ69/=i4E)gjbptmq*UQcd%#Zr=Q6$D,3J(=cmQWyrzyb!<k/`');
define('NONCE_SALT',       'tR[zzG@`rK<qP T@Sk}1bBwS3#PZ+goJ$VB~Qv[15;*gD2kw$LLI]NY5i}}Ar/F<');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
