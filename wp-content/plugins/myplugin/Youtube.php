<?php
/* 
Plugin Name: Youtube
Author: Moi
Version: 0
Description: Ajouter des  vidéo youtube facilement

*/
//shortcode Youtube
add_shortcode('youtube','youtube_shortcode');
function youtube_shortcode($atts){
	shortcode_atts(array(
		'id'=> '',
		'height'=> 350,
		'width'=> 350
		),$atts);
extract($atts);

return '<div class="col unecolonne diff">
<div class="center-block vertical-center">
<iframe width="'.$width.'" height="'.$height.'" src="https://www.youtube.com/embed/'.$id.'" frameborder="0" allowfullscreen></iframe> 
</div>
</div>
';
} 
?>