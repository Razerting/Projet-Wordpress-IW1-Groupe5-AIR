<?php
/*
Template Name: Home
*/
?>

<?php 
get_header();
?>
<!-- 1er Bloc -->
<section>
	<article>
		<div class= "unecolonne col">
			<div id="slider" class="center-block unecolonne">
				<figure>
					<img src="<?php the_field("img1","22"); ?>"alt>
					<img src="<?php the_field("img2","22"); ?>" alt>
					<img src="<?php the_field("img3","22"); ?>" alt>
					<img src="<?php the_field("img4","22"); ?>" alt>
				</figure>
			</div>
		</div>
	</article>
</section>

<section>
	<article class="col block color-white">
		<div class="texte-center col unecolonne diff"><h2>Dernier article</h2></div>
		<div class=" col center-block">
			<?php
			if(have_posts()): 
				while(have_posts()): the_post();
			?>
			<div class=" news center-block thumbnail">
				<div class="imgarticle col">
					<?php the_post_thumbnail('thumbnail'); ?>
				</div>

				<div class="col left news-article">
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
<?php else: ?>
	<div>
		<h3>Pas d'article</h3>
	</div>
<?php endif; ?>
</article>
</section>

<?php
get_footer(); 
?>