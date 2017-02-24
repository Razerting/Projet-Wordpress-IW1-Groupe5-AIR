<?php
/*
Template Name: Coach
*/
?>

<?php 
get_header();
the_post();
?>
<!-- 1er Bloc -->

<section>
	<article class="col block" style="width:100%;">
		<div class="texte-center unecolonne diff"><h1><?php the_title(); ?></h1></div>
		<div class="center-block bot">
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