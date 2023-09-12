<?php
//add_filter( 'body_class', 'custom_class' );
//
//function custom_class( $classes ) {
//	if ( get_page_template_slug() == 'templates/template-homepage.php' ) {
//		$classes[] = 'home-page';
//	} else if ( get_page_template_slug() == 'templates/template-produkty.php' || get_post_type() == 'product') {
//		$classes[] = 'products-page';
//	} else if ( get_page_template_slug() == 'templates/template-nase-poslani.php' ) {
//		$classes[] = 'about-page';
//	} else {
//		$classes[] = '404';
//	}
//
//	return $classes;
//}

function add_css()
{
    wp_register_style('first', get_template_directory_uri() . '/public/css/style.css', false,'1.1','all');
    wp_enqueue_style( 'first');
    wp_register_style('second', get_template_directory_uri() . '/public/css/responsive.css', false,'1.1','all');
    wp_enqueue_style( 'second');
    wp_register_style('third', get_template_directory_uri() . '/public/css/about.css', false,'1.1','all');
    wp_enqueue_style( 'third');
}
add_action('wp_enqueue_scripts', 'add_css');

add_filter ( 'the_content', 'wpautop' );

add_filter('wpcf7_spam', '__return_false');

// validacia, ci neexistuje rovnaka emailova adresa v databaze
add_filter( 'wpcf7_validate_email*', 'custom_email_confirmation_validation_filter', 10, 2 );

function custom_email_confirmation_validation_filter( $result, $tag ) {
	if ( 'studio-email' == $tag->name ) {
		$user = get_user_by('email',  $_POST['studio-email']);
		if($user->caps['approved'] == true) {
			$result->invalidate( $tag, "E-mail address already exists" );
		}
	}

	return $result;
}

// nastavenie classy pre respnse - aby sa vedeli merat konverzie
add_action( 'wp_footer', 'mycustom_wp_footer' );
function mycustom_wp_footer() {
	?>
	<script type="text/javascript">
        document.addEventListener( 'wpcf7submit', function( event ) {
            if(event.detail.status == 'mail_sent') {
                jQuery('.wpcf7-response-output').addClass('success-submit');
            }
        }, false );
	</script>
	<?php
}

add_action( 'admin_init', 'my_remove_menu_pages', 999 );
function my_remove_menu_pages() {


	global $user_ID;

	if ( $user_ID != 1 ) { //your user id

		remove_menu_page('link-manager.php'); // Links
		remove_menu_page('edit-comments.php'); // Comments
		//remove_menu_page('plugins.php'); // Plugins
		//remove_menu_page('themes.php'); // Appearance
		remove_menu_page('tools.php'); // Tools
		remove_menu_page('wpcf7'); // Formular
		remove_menu_page('wpseo_workouts');
		remove_menu_page('users.php');
		remove_menu_page('plugins.php');
		remove_menu_page('options-general.php');
		remove_menu_page('themes.php');
	}
}

function remove_acf_menu(){
	global $user_ID;

	if ( $user_ID != 1 ) {
		remove_menu_page( 'edit.php?post_type=acf-field-group' );
		remove_menu_page( 'admin.php?page=easy-wp-smtp' );
		remove_menu_page('easy-wp-smtp');
		remove_menu_page('media-cloud');
		remove_menu_page('media-cloud-tools');
		remove_menu_page('cfdb7-list.php');
	}
}
add_action( 'admin_menu', 'remove_acf_menu', 999 );

// For Navmenu
add_filter('nav_menu_css_class' , 'nav_class' , 10 , 2);
function nav_class($classes, $item){
    $classes[] = 'nav-item px-3';
    return $classes;
}

add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

function wpse156165_menu_add_class( $classes, $item, $args ) {
    if(isset($args->add_link_class)) {
        $classes['class'] = $args->add_link_class;
    }
    return $classes;
}


add_filter( 'nav_menu_link_attributes', 'add_class_to_href', 10, 2 );

function add_class_to_href( $classes, $item ) {
    if ( in_array('current_page_item', $item->classes) ) {
        $classes['class'] = 'nav-link active';
    }
    return $classes;
}
// For Navmenu

function removeFirstP($text){
	$remove_p = str_replace(array('<p>','</p>'),'',$text);
	return $remove_p;
}