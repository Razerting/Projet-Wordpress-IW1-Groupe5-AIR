<?php 
if ( function_exists('register_sidebar') )
    register_sidebar();

function myMenus(){
	register_nav_menu('main_menu', 'Menu principal');
	register_nav_menu('footer_menu', 'Menu de pied de page');
}

add_action('init',myMenus);

function my_sidebars(){
	register_sidebar(array(
'name' => 'barre latérale test 1',
'id' => 'sidebar-1',
'description' => 'Description WP function'
		));
}

// Menus de navigation
register_nav_menus(array(
    'header' => 'Menu principal'
));

//Thumbnails
if (function_exists('add_theme_support')) {
 add_theme_support('post-thumbnails');
}


add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
