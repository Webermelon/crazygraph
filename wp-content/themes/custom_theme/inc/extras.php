<?php

add_action( 'init', 'remove_header_info' );
function remove_header_info()
{

	remove_action( 'wp_head', 'wp_generator' ); // removes the “generator” meta tag
	remove_action( 'wp_head', 'wlwmanifest_link' ); // removes windows live writer
	remove_action( 'wp_head', 'rsd_link' ); // removes api for external edit
	remove_action( 'wp_head', 'wp_shortlink_wp_head' ); // removes shortlink
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 ); // removes next/prev post from document reader
	add_filter( 'the_generator', '__return_false' ); // removes generator name for rss feed
	remove_action('set_comment_cookies', 'wp_set_comment_cookies' ); // removes comment cookies
	add_filter( 'xmlrpc_enabled', '__return_false' ); // removes xmlrpc vulnerability
	remove_action( 'wp_head', 'start_post_rel_link' ); // dont know yet
	remove_action( 'wp_head', 'index_rel_link' ); // dont know yet
	remove_action( 'wp_head', 'adjacent_posts_rel_link' ); // dont know yet

	// disable emoji
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); // removes emoji
	remove_action( 'wp_print_styles', 'print_emoji_styles' ); // removes emoji
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );

	// disable embed
	remove_action( 'rest_api_init', 'wp_oembed_register_route' );
	add_filter( 'embed_oembed_discover', '__return_false' );
	remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
	add_filter( 'tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin' );
	add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
	remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10 );

}


function disable_emojis_tinymce( $plugins )
{
	if ( is_array( $plugins ) )
	{
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else
	{
		return array();
	}
}

function disable_emojis_remove_dns_prefetch( $urls, $relation_type )
{
	if ( 'dns-prefetch' == $relation_type )
	{
		/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}

	return $urls;
}

function disable_embeds_tiny_mce_plugin( $plugins )
{
	return array_diff( $plugins, array( 'wpembed' ) );
}

function disable_embeds_rewrites( $rules )
{
	foreach ( $rules as $rule => $rewrite )
	{
		if ( false !== strpos( $rewrite, 'embed=true' ) )
		{
			unset( $rules[ $rule ] );
		}
	}

	return $rules;
}

// disable gutenberg for posts
add_filter( 'use_block_editor_for_post', '__return_false', 10 );
// disable gutenberg for post types
add_filter( 'use_block_editor_for_post_type', '__return_false', 10 );
// disable xml rpc
add_filter( 'xmlrpc_enabled', '__return_false' );
// remove "scaled" from image name
add_filter( 'big_image_size_threshold', '__return_false' );

// prevent user enum
if ( ! is_admin() )
{
	if ( preg_match( '/author=([0-9]*)/i', $_SERVER['QUERY_STRING'] ) )
	{
		add_filter( 'query_vars', 'remove_author_from_query_vars' );
	}
	add_filter( 'redirect_canonical', 'remove_author_from_redirects', 10, 2 );
}
function remove_author_from_redirects( $redirect, $request )
{
	if ( ! is_admin() && preg_match( '/author=([0-9]*)/i', $_SERVER['QUERY_STRING'] ) )
	{
		add_filter( 'query_vars', 'remove_author_from_query_vars' );
	}

	return $redirect;
}

function remove_author_from_query_vars( $query_vars )
{
	if ( ! is_admin() )
	{
		foreach ( array( 'author', 'author_name' ) as $var )
		{
			$key = array_search( $var, $query_vars );
			if ( false !== $key )
			{
				unset( $query_vars[ $key ] );
			}
		}
	}

	return $query_vars;
}

// Remove JQuery migrate
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );
function remove_jquery_migrate( $scripts )
{
	if ( ! is_admin() && isset( $scripts->registered['jquery'] ) )
	{
		$script = $scripts->registered['jquery'];

		if ( $script->deps )
		{ // Check whether the script has any dependencies
			$script->deps = array_diff( $script->deps, array(
				'jquery-migrate'
			) );
		}
	}
}

// Remove archives
add_action('wp', 'remove_wp_archives',  999);
function remove_wp_archives(){
	if( is_category() || is_tag() || is_date() || is_author() ) {
		global $wp_query;
		$wp_query->set_404();
		status_header( 404 );
		nocache_headers();
		require get_404_template();
		die;
	}
}

// remove dns-prefetch and other header links
add_action( 'init', 'remove_dns_prefetch' );
function  remove_dns_prefetch () {
	remove_action( 'wp_head', 'wp_resource_hints', 2, 99 );
}
remove_action( 'wp_head', 'rest_output_link_wp_head', 10);
remove_action( 'template_redirect', 'rest_output_link_header', 11);


/************************************************************************************/
/* Disable wordpress feeds */
/************************************************************************************/

// Redirect to the homepage all users trying to access feeds.
function disable_feeds() {
	wp_redirect( home_url() );
	die;
}

// Disable global RSS, RDF & Atom feeds.
add_action( 'do_feed',      'disable_feeds', -1 );
add_action( 'do_feed_rdf',  'disable_feeds', -1 );
add_action( 'do_feed_rss',  'disable_feeds', -1 );
add_action( 'do_feed_rss2', 'disable_feeds', -1 );
add_action( 'do_feed_atom', 'disable_feeds', -1 );

// Disable comment feeds.
add_action( 'do_feed_rss2_comments', 'disable_feeds', -1 );
add_action( 'do_feed_atom_comments', 'disable_feeds', -1 );

// Prevent feed links from being inserted in the <head> of the page.
add_action( 'feed_links_show_posts_feed',    '__return_false', -1 );
add_action( 'feed_links_show_comments_feed', '__return_false', -1 );
remove_action( 'wp_head', 'feed_links',       2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );


/************************************************************************************/
/* disable cf7 css */
/************************************************************************************/
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
	wp_deregister_style( 'contact-form-7' );
}
