 <?php
/*
Template Name: Presentation
*/
?>

<?php 
get_header();
?>

	<!-- 1er Bloc -->
			<section>
				<article class="col texte-center unecolonne diff center-block">
					<div class="center-block vertical-center">
						<div class="col">
							<h1><?php the_field("titre","4"); ?></h1>
						</div>
						<div class="col center-block logo">
							<img src="<?php the_field("logo","4"); ?>" alt="AIRE GYM logo">
						</div>
						<div class="col texte-left">
							<h3><?php the_field("presentation","4"); ?></h3>
						</div>
					</div>
				</article>

			</section>
<?php
get_footer(); 
?>