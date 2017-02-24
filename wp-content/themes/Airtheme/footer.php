	<section>
		<article>
		<div style="background: url(<?php the_field("img-footer","40"); ?>) no-repeat top center;
	background-attachment: fixed; height: 300px; padding-top:200px;" class="unecolonne col back">
			<div class="col police-white texte-center">
				<h2>Contacts</h2>
				<br>
				<?php $id = 40; 
				$p = get_page($id); 
				echo apply_filters('the_content', $p->post_content); 
				?>
			</div>
		</div>
		</article>
	</section>
			
</body>
</html>	