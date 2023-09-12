<?php
/**
 * custom_theme functions include
 *
 * @package WordPress
 * @subpackage custom_theme
 * @author Studio TEM
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$includes = array(
	'/setup.php',
	'/enqueue.php',
	'/acf_theme_options.php',
	'/extras.php',
	'/tracking_scripts.php',
	'/menu.php',
	'/image_sizes.php',
	'/custom_posts.php',
	'/theme_functions.php',
);

foreach ( $includes as $file ) {
	require_once get_stylesheet_directory() . '/inc' . $file;
}
