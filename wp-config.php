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
define( 'DB_NAME', 'alaindigDBwfxrc');

/** MySQL database username */
define( 'DB_USER', 'alaindigDBwfxrc');

/** MySQL database password */
define( 'DB_PASSWORD', 'e3TFkcNhq9');

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
define( 'AUTH_KEY', 'V!k}RV-Jo0Z,>RvFn}0Y,MvzEnYb{QyBMq3b{PT+Et26e]T+ADt5e_:W-Dt15a_S');
define( 'SECURE_AUTH_KEY', 'jX$EIq2b.EKoKw}swJszCJ@FNz@Qz^JQ^MU$,U^>QY<QX^MX.MT^{X*<Pe]TX.Ta.');
define( 'LOGGED_IN_KEY', 'Y>M$EMv$My$Ir*IqyEPuTyTu;W*HP+LS+_P~#OW_Sa_KS|[S~#Vd|SV[RZ|[Z|[V|');
define( 'NONCE_KEY', 'IMq3e<LuyDm;T_HLt9i];S_Kp;d_GKw8d|V-8V!C!8ey6m;X+*Pt6ep;W*Ktx5e:');
define( 'AUTH_SALT', 'sGrvRoUnFncg3bj{3j7jrAIq6Eu+EqyHP+EL+.Px*PW*HP_LS+_S~_hl5W1w:S~');
define( 'SECURE_AUTH_SALT', ']]S-DG-CKw-Nw@GO@JNzCRz!Jv^Nv@FU$JQz>Q$,Mb,MU$QX^<Q.<T$.Tb<PT<PX*');
define( 'LOGGED_IN_SALT', 'B^c3vQnIqIfIb6b;mPiEmDaHe9S5S;t]h|d~~@[C8NF@czQvQ>I,ujibbaq]i9e9x');
define( 'NONCE_SALT', 'wJo0YgMy$F<EnEn<QX<TX.Tb<{X#]X*<ae]Ta]1e#;d#;We:Zd]Sh[1d#4hk1Zo0');

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
