<?php 
	 add_action( 'wp_enqueue_scripts', 'governlia_child_theme_enqueue_styles' );
	 function governlia_child_theme_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 ?>