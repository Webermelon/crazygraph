<?php

/************************************************************************************/
/* Theme setup */
/************************************************************************************/
// Register Theme Features
function theme_support()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style( 'style_admin.css' );

}
add_action( 'after_setup_theme', 'theme_support' );


/************************************************************************************/
/* Disable updates */
/************************************************************************************/
add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );


/************************************************************************************/
/* Disable Author archives */
/************************************************************************************/
function wp_disable_author_archives() {
	if ( is_author() ) {
		global $wp_query;
		$wp_query->set_404();
		status_header(404);
	} else {
		redirect_canonical();
	}
}
remove_filter( 'template_redirect',  'redirect_canonical' );
add_action( 'template_redirect',  'wp_disable_author_archives' );


/************************************************************************************/
/* Disable insecure jsons - Users + Media */
/************************************************************************************/
add_filter('rest_endpoints', 'wp_disable_insecure_jsons');
function wp_disable_insecure_jsons($endpoints) {
	$paths = ['/wp/v2/users', '/wp/v2/users/(?P<id>[\d]+)', '/wp/v2/media', '/wp/v2/media/(?P<id>[\d]+)', '/wp/v2/media/(?P<id>[\d]+)/post-process', '/wp/v2/media/(?P<id>[\d]+)/edit'];
	foreach ($paths as $path) {
		if (isset($endpoints[$path])) {
			unset($endpoints[$path]);
		}
	}
	return $endpoints;
}


/************************************************************************************/
/* Remove autocomplete for password in wp-login.php */
/************************************************************************************/
function login_autocomplete_off() {
	echo '
		<script>
			document.getElementById( "user_pass" ).autocomplete = "off";
		</script>
	';
}
add_action( 'login_form', 'login_autocomplete_off' );


/************************************************************************************/
/* Dynamic web indexing */
/************************************************************************************/
if ( ENVIROMENT_IS_PRODUCTION ) {
	if ( get_option( 'blog_public' ) === '0' ) {
		update_option( 'blog_public', '1' );
	}
} else {
	if ( get_option( 'blog_public' ) === '1' ) {
		update_option( 'blog_public', '0' );
	}
}


/************************************************************************************/
/* SVG support */
/************************************************************************************/
function add_file_types_to_uploads( $file_types ){

	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );

	return $file_types;

}
add_action( 'upload_mimes', 'add_file_types_to_uploads' );


/************************************************************************************/
/* Remove from admin menu */
/************************************************************************************/
function menu_remove() {
	// remove_menu_page( 'edit.php' );
	// remove_menu_page( 'edit-comments.php' );
}
add_action('admin_menu', 'menu_remove');


/************************************************************************************/
/* Unregister post tags */
/************************************************************************************/
function unregister_post_tags() {
	// unregister_taxonomy_for_object_type( 'post_tag', 'post' );
}
add_action( 'init', 'unregister_post_tags' );
