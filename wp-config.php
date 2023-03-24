<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KQ;4FI2%+ 08~UGPQbo{@^7n8 ?@l0Ip(A]9/uJ-]m<h;hm$->b;RWyta/<5g=CU' );
define( 'SECURE_AUTH_KEY',  '-Dt$i*I^Z4/5}3sg=lX0U>jaX^gxdS8goodxOa=pe}Sq |~y&w0_[32WCaIi0+.K' );
define( 'LOGGED_IN_KEY',    '=g2MX],Opu?vtc#>:NUB-?ASD|4]N7u!3.wBqmtMP#Fx<Vu_YjW:cGv 69S{[c~E' );
define( 'NONCE_KEY',        '$iD^K;#4]L{/d`ssuAMMR>0ve`PVc<}?<up{X9A!3Qt(llJG&rKRS~@%79zPI7d_' );
define( 'AUTH_SALT',        'dFNv 2_l{Tr2:eF[gS9e!GCi-D%mAKD4G^HRW[c[=f4Jf%Er$p1Qn/9*@1LVWBBC' );
define( 'SECURE_AUTH_SALT', '4WJq$auVn8zMHuFm{r|$jZN,5$<bhbrVj[vys*Nye03/Rl.:>=OV2WF+6PcI6voS' );
define( 'LOGGED_IN_SALT',   'YibaK.%r09y9>$ewuh*r,d&fpfrYeu.;[KrerB%+h9cl-UI[n^]dt%zJ~]<6JAmo' );
define( 'NONCE_SALT',       'g^r|_u#X3gV~)S2:`xpO,X[cV2-T~GB8|]M&e#WT^6%,el/.SJ)^tMOh8p&,,C,D' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
