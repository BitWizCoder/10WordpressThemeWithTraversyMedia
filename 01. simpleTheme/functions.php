<?php

  // Enqueue css and js
  function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri('style.css') );

    wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', true);

    }
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

  // Add support for fetured image
  function theme_setup(){
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'theme_setup');

  // Remove brackets and add ... on excerpts.
  function new_excerpt_more( $more ) {
      return ' ...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

?>