<?php
	
	add_theme_support( 'post-thumbnails' ); 
	
	function custom_style_sheet() {
wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts', 'custom_style_sheet');