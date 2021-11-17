<?php

function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri('style.css') );

	wp_enqueue_script( 'test', get_template_directory_uri() . '/script.js', true);

  }

  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>