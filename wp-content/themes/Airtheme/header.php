<!DOCTYPE html>
	<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title><?php wp_title(); echo('|'); bloginfo('name'); ?></title>
	<?php wp_head(); ?></title>
	 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
	</head>
	<body>
		<header>
		<div class="unecolonne col Hbanniere">
			<img src="<?php the_field('banniere','40'); ?>" alt="Bannière" class="unecolonne">
		</div>
<div class='quatre police-mono texte-center maj' id='menu' role='navigation'>
		   <?php wp_nav_menu(array('theme_location' => 'header')); ?>
		</div>
	</header>