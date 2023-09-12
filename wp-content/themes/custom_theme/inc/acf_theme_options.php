<?php

/************************************************************************************/
/* Theme options with subpages */
/************************************************************************************/
if ( function_exists( 'acf_add_options_page' ) ) {

	$parent = acf_add_options_page(
		array (
			'page_title'    => 'Theme General Options',
			'menu_title'    => 'Options',
			'menu_slug'     => 'general-options',
			'capability'    => 'edit_posts',
			'redirect'  => false,
		)
	);

	acf_add_options_sub_page(
		array (
			'page_title'    => 'Header',
			'menu_title'    => 'Header',
			'parent_slug'   => $parent['menu_slug'],
			'capability'    => 'edit_posts',
			'redirect'  => false,
		)
	);

	acf_add_options_sub_page(
		array (
			'page_title'    => 'Footer',
			'menu_title'    => 'Footer',
			'parent_slug'   => $parent['menu_slug'],
			'capability'    => 'edit_posts',
			'redirect'  => false,
		)
	);

	acf_add_options_sub_page(
		array (
			'page_title'    => 'Cookies',
			'menu_title'    => 'Cookies',
			'parent_slug'   => $parent['menu_slug'],
			'capability'    => 'edit_posts',
			'redirect'  => false,
		)
	);

}
