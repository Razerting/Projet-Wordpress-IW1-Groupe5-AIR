<?php
/* 
Plugin Name: Coach
Author: Moi
Version: 0
Description: Ajout de la catégorie coach avec affichage

*/

add_action('init', 'custom_post_coach');

function custom_post_coach() {
	register_post_type('coach',
		array(
				'labels' => array(
						'name' => 'coach',
						'singular_name' => 'coach',
					      'all_items' => 'coachs',
					      'add_new_item' => 'Ajouter un coach',
					      'edit_item' => 'Éditer le coach',
					      'new_item' => 'Nouveau coach',
					      'view_item' => 'Voir le coach',
					      'search_items' => 'Rechercher parmi les coachs',
					      'not_found' => 'Pas de coach trouvé',
					      'not_found_in_trash'=> 'Pas de coach dans la corbeille'
					),
				'public' => true,
    			'capability_type' => 'post',
    			'supports' => array(
    			  	'title',
      				'editor',
      				'thumbnail'
    ),
    'has_archive' => true
			)
		);
}

function affichagecoachs(){
	$coachs = new WP_query("post_type=coach");
	$coachs->the_post();
	while ($coachs->have_posts()) {
		echo '<div style="height: 200px; width:20%; float:left;"><a href="';
		echo the_permalink();
		echo '">';
		the_post_thumbnail();
		echo '</a></div>';
		$coachs->the_post();
		global $post;

	}
}

?>