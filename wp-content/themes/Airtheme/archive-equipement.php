 <?php
/*
Template Name: Coach
*/
?>

<?php 
get_header();
?>

	<!-- 1er Bloc -->
			<section>
				<article class="col texte-center unecolonne diff center-block">
					<div class="col single">
						<h1>Equipements</h1>
						<div class=" single quatre col center-bloc diff hbanniere">
					<?php affichageequipements(); ?>
						</div>
					</div>
				</article>

			</section>
<?php
get_footer(); 
?>