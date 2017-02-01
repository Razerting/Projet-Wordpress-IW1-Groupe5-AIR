<?php
/* Inclure styles et scripts */
function theme_styles() {
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('main_style', get_stylesheet_uri());
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts','theme_styles');

/* Menus */
function my_menus() {
	register_nav_menu('main_menu', 'Menu Principal');
	register_nav_menu('footer_menu', 'Menu du pied de page');
}

add_action('init', 'my_menus');

/* Zones de widgets */
function my_sidebars() {
	register_sidebar(array(
			'name' 		  => 'Barre latérale',
			'id'    	  => 'sidebar-1',
			'description' => 'Cela apparait sur toutes les pages, pour l\'instant...'
		));
}

add_action('widgets_init', 'my_sidebars');

/* En-Tête */

add_theme_support('custom-header');


/* Image à la une */

add_theme_support('post-thumbnails');

/* Fond personnalisé */

add_theme_support('custom-background');


























?>