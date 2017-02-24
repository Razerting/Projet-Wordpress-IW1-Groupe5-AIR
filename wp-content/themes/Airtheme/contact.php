 <?php
/*
Template Name: contact
*/
?>

<?php 
get_header();
the_post(); 
?>

	<!-- 1er Bloc -->
			<section>
				<article class="col texte-center unecolonne diff center-block">
					<div class="col center-block vertical-center">
						<div class="col">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="col">
							<h3><?php the_content(); ?></h3>
						</div>
					</div>
				</article>

			</section>
<?php
get_footer(); 
?>