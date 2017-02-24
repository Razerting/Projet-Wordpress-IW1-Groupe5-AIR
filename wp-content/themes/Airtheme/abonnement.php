 <?php
/*
Template Name: Abonnement
*/
?>

<?php 
get_header();
?>

	<!-- 1er Bloc -->
			<section>
				<article class="col texte-center unecolonne diff center-block">
					<div class="col center-block vertical-center troiscolonnes diff white-back">
						<div class="col">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="col police-blue">
							<h2>Prix : <?php the_field("prix","8"); ?>$</h2>
						</div>
						<div class="col police-green">
							<h2>Durée : <?php the_field("duree","8"); ?></h2>
						</div>												
					</div>
					<div>
						<div class="col texte-left bot">
							<h5>Mention légale :<?php the_field("mention","8"); ?></h5>
						</div>
					</div>
				</article>

			</section>
<?php
get_footer(); 
?>