<?php
/*
Template Name: Article
*/
?>

<?php 
get_header();
the_post(); 
?>
<!-- 1er Bloc -->

<section>
	<article class="col block">
		<div class="texte-center col unecolonne diff"><h1><?php the_title(); ?></h1></div>
		<div class=" col center-block">
			<div class=" news center-block single">
				<div class="imgarticle col">
					<?php the_post_thumbnail('thumbnail'); ?>
				</div>

				<div class="col left news-article bot single">
					<?php the_content(); ?>
				</div>
			</div>
	</div>
</article>
</section>

<?php
get_footer(); 
?>