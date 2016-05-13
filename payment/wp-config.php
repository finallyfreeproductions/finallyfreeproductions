<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'finajppa_payment');

/** MySQL database username */
define('DB_USER', 'finajppa_ffp');

/** MySQL database password */
define('DB_PASSWORD', 'ffpmovement69');

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
define('AUTH_KEY', 'Hhu|JDVxKR(THTJFnPANWZX;+BR]Xm_DzfUCo]H]nxNUOBR_/d=@Uz]m-ZCyDNQhBDRfLQBRs(qz{e$pnk>?<o)dBgIx<X+Vn<k%hZ_W;DzjJAX=sqLP>j*=[^oL*_tv');
define('SECURE_AUTH_KEY', 'fOBv_Q{yJ;Go?izImF_vuS]}{/ya!!Mx+Upso}xRH&L!LDwRC;HBgek!^VM)-m{TQQlZkWJQQXx[GWW</cll>/*>ioJMB[bIFEP_NuyIxCt%kRd=+?yoJrFtpy/smoWi');
define('LOGGED_IN_KEY', 'dpc&Y]@MqtnPo};PKZmtb}qsC=YsKpT/FE?m)e-JDno@vi(uHx$NDu|-ycDsk>$pNuM+wdaCIDg-V=LmUa_e?PDzy/zyIj}i>Pi/Q-jRe/EXHy?KCTz}P[sRR%w^DOIP');
define('NONCE_KEY', 'rWPRqp%INZpLAL_Q;iT-vh<NE<-AYaTMuT*PHr^Yvi/TBEORd^h=Ak=}@OFCJl!D}/JO/db?^Lbyt_ZhK=JXiqd|NqPh}z&tU=DzIcDE%gImGMMMH;!]?dS*=fK%a+!y');
define('AUTH_SALT', 'Ei!g{C!YPBI*y^s&Z{Zvtlp=kW!*^rY?Ej}%Dt]+!@}YM<jwu+(S)mJEU)HD=Kbq*t{|Q(Tj>?I|!BNY@j[M^wP;rmTqCm%YG@$GD}>b;AHRQM]-hTn?(qOo@MUdc|dh');
define('SECURE_AUTH_SALT', '_{]x^k^gN-FqyqaP@o}rSb^a/*!;cf)G/Fy![TanOFU?ifCV]PJrxG<?sbs%XdA;G{?iIFtBYJ{@bCAWx?UP(Cm)hjkj%i{w?gc}Yrq/(i]U)tWUR$I&F]<U]nTbrIy<');
define('LOGGED_IN_SALT', '@Y*pXC*a}Dy{HH/PHDClqOLuxh+mCQbxR?JwOo?;Avv$ZnADnXV{mCh=_VncV_V[JTSF!GzAs%WdPn{@KiP%U;TSONFqfa(rwSK[RPLuyHFpLfJgv]AVoMJIQW;<iAky');
define('NONCE_SALT', 'ZmWQpP}iJbpohiG^NFM>>rVhbamzcWb$f;&nZeu!Iq{Io>t|bnM$g<q]etCoFW/SxjW<W]C(d%dtK(/B{fHTUs!$R+yfRglG]oZ&|tNbsQL>FrU>zhQZ?fvJCzj;/|!K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_muhn_';

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
