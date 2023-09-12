<?php

/************************************************************************************/
/* Enqueue scripts and styles. */
/************************************************************************************/

/* Frontend */
add_action( 'wp_enqueue_scripts', 'custom_scripts' );
function custom_scripts() {

	// disables some new guttenberg features and default wp jquery
	wp_dequeue_script( 'jquery' );
	wp_dequeue_script( 'jquery-blockui' );
	wp_deregister_script( 'wp-embed' );
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wc-block-vendors-style' );
	wp_dequeue_style( 'wc-block-style' );

	$dir = get_template_directory_uri();
	if ( IS_LOCALHOST ) {
		$version = time();
	} else {
		$the_theme = wp_get_theme();
		$version = $the_theme->get( 'Version' );
	}

	// styles
	wp_enqueue_style( 'custom_styles', $dir . '/assets/css/app.css', array(), $version );
	wp_enqueue_style( 'theme_styles', $dir . '/style.css', array(), $version );

	// scripts
	wp_enqueue_script( 'custom_scripts', $dir . '/assets/js/app.js', array(), $version, true );
}


/* Backend */
add_action( 'admin_enqueue_scripts', 'admin_scripts' );
function admin_scripts() {

	$dir = get_template_directory_uri();
	if ( IS_LOCALHOST ) {
		$version = time();
	} else {
		$the_theme = wp_get_theme();
		$version = $the_theme->get( 'Version' );
	}

	// simpler wp admin
	wp_enqueue_style( 'style_admin', $dir . '/style_admin.css', array(), $version );

}


/* Languages */
function child_theme_text_domain() {
	load_child_theme_textdomain( 'custom_theme', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'child_theme_text_domain' );
