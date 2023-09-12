<?php

/************************************************************************************/
/* Register menus */
/************************************************************************************/
function register_my_menus() {
	register_nav_menus(
		array(
			'main-menu' => 'Main menu',
		)
	);
}
add_action( 'init', 'register_my_menus' );
