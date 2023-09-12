<?php

/************************************************************************************/
/* Load local config file with sensitive informations. In production enviroment
	wp-config-local.php should be located in upper directory of document_root
	directory. */
/************************************************************************************/
if ( file_exists( dirname( __FILE__ ) . '/../.env' ) ) {
	require ( dirname( __FILE__ ) . '/../.env' );
} elseif ( file_exists( dirname( __FILE__ ) . '/.env' ) ) {
	require ( dirname( __FILE__ ) . '/.env' );
} else {
	die( '.env file is missing' );
}

/************************************************************************************/
/* Constants specific for local/server enviroment */
/************************************************************************************/
if ( IS_LOCALHOST ) {

	define( 'WP_DEBUG', true );
	define( 'WP_DEBUG_DISPLAY', true );
	define( 'WP_DEBUG_LOG', false );
	define( 'DISALLOW_FILE_MODS', false );
	define( 'ALLOW_UNFILTERED_UPLOADS', true );
	define( 'ENABLE_CACHE', false );

} else if ( ! IS_LOCALHOST ) {

	define( 'WP_DEBUG', false );
	define( 'WP_DEBUG_DISPLAY', false );
	define( 'WP_DEBUG_LOG', false );
	define( 'DISALLOW_FILE_MODS', true );
	define( 'ALLOW_UNFILTERED_UPLOADS', false );

} else {
	die( 'IS_LOCALHOST is undefined' );
}

/************************************************************************************/
/* Rest is same for all enviroments */
/************************************************************************************/
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

define( 'EMPTY_TRASH_DAYS', 14 );
define( 'WP_POST_REVISIONS', 3 );

define( 'DISALLOW_FILE_EDIT', true );

define( 'WP_AUTO_UPDATE_CORE', false );

// dont wrap form in <p> tag
define( 'WPCF7_AUTOP', false );

// issues with broken URLs for previous projects (alto)
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true); 


/**
 * Authentication Unique Keys and Salts.
 * Replace them with new salts after new project setup
 * https://api.wordpress.org/secret-key/1.1/salt/
*/
define( 'AUTH_KEY',         '[3R207I~xy99L|zB}.dy3Wh>E/R`j_!jb=]bmXo3)%H6xuWu?9OsTElp%+<xoX/j' );
define( 'SECURE_AUTH_KEY',  '%7VqDU%EG!Qv?#jcbD7~<&&Ej <!mqMOK=`}gz83a*D1[=yn|i3H2TbsGj5FF$|2' );
define( 'LOGGED_IN_KEY',    '4l{J>,nXasGTpEH(l!/Mp,PC4!{3^%7%s9XG<4|#ZDZbpj!/N$1)<ey2(5a{_T<B' );
define( 'NONCE_KEY',        'fkhI(&B&RbJ8$qDcAkRdg;x&<vow:yRAV?&zXaxDJqDCpl65DnjV,pN<Y?Ip,U<@' );
define( 'AUTH_SALT',        'n6R4hx#nv[ VEMY[%e}wMlh6*DanQbgjoye;}1Lh!f`G<IQoU/9{~m|+cHp_Dh<W' );
define( 'SECURE_AUTH_SALT', '?i<JXn5YG^cZV7TOHce=y5S?1kx=[#cry5en)9`Aj Fm>+cXfoX:n8`P )9%B^2s' );
define( 'LOGGED_IN_SALT',   'L]DVOASbm:Vasv(B&in<c@mASZ:?yFaU`$c~RCPZx5j1dP0S8Aq$Y#SVi<+yRN,#' );
define( 'NONCE_SALT',       '^&LVBjuBK5EGbvZWV!KH{%xCd/D}_Yp~a;4)OuUQ>0M<IT-W@3I$q<r<MtKZC,ja' );

/* WordPress Database Table prefix. */
$table_prefix  = 'wp_';

// for AWS
define( 'W3TC_CONFIG_DATABASE', true );
define( 'W3TC_CONFIG_DATABASE_TABLE', $table_prefix . 'options' );

/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
