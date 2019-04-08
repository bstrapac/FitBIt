<?php
	function media_icons()
		{
			$facebook = get_template_directory_uri() . '/img/facebook.png';
			$twitter= get_template_directory_uri() . '/img/twitter.png' ;
			$instagram= get_template_directory_uri() . '/img/instagram.png';
			return "
			<a class='facebook'><button class='social' style='background-image: url(".$facebook.");'></button></a>
			<a class=twitter'><button class='social' style='background-image: url(".$twitter.");'></button></a>
			<a class='instagram'><button class='social' style='background-image: url(".$instagram.");'></button></a>";
		}
	add_shortcode( 'icons', 'media_icons' );
?>