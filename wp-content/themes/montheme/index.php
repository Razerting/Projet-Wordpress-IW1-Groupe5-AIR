<?php 
get_header();

//la boucle, recupere les articles
if (have_posts()) {
	while (have_posts()) {
		the_post();?>
		<h2><?php the_title();?></h2>

		<?php 

		the_post_thumbnail('thumbnail');

		the_content();
	}

} else {
	echo 'Aucun Article';
}

//afficher une zone de widgets
dynamic_sidebar('sidebar-1');

get_footer();
?>