<?php
/* 
Plugin Name: Equipement
Author: Moi
Version: 0
Description: Ajout de la catégorie equipements avec affichage

*/

add_action('init', 'custom_post_equipement');

function custom_post_equipement() {
	register_post_type('equipement',
		array(
				'labels' => array(
						'name' => 'equipement',
						'singular_name' => 'cequipementoach',
					      'all_items' => 'equipements',
					      'add_new_item' => 'Ajouter un equipement',
					      'edit_item' => 'Éditer le equipement',
					      'new_item' => 'Nouveau equipement',
					      'view_item' => 'Voir le equipement',
					      'search_items' => 'Rechercher parmi les equipements',
					      'not_found' => 'Pas de equipement trouvé',
					      'not_found_in_trash'=> 'Pas de equipement dans la corbeille'
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


function affichageequipements(){
	$equipements = new WP_query("post_type=equipement");
	$equipements->the_post();
	while ($equipements->have_posts()) {
		echo '<div style="height: 200px; width:20%; float:left;"><a href="';
		echo the_permalink();
		echo '">';
		the_post_thumbnail();
		echo '</a></div>';
		$equipements->the_post();
		global $post;

	}
}

?>