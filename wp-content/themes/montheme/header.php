<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); echo'|'; bloginfo('name');?></title>
	<?php wp_head(); ?>
</head>
<body>
	<?php 

		if (get_header_image()) {
			echo '<img src="'.get_header_image().'" alt="image logo" title="superbe image">';
		} else {
			echo "pas d'image d'en-tête";
		}

		wp_nav_menu(array(
			'theme_location' => 'main_menu'
		)); 
	?>

