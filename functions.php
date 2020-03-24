<?php
add_action('wp_enqueue_scripts', 'theme_styles');
// add_action('wp_footer', 'theme_scripts');
// add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
// add_action('after_setup_theme', 'theme_register_nav_menu')

// function theme_register_nav_menu() {
//   register_nav_menu( 'top', 'Меню в шапке' ); 
// }



function theme_styles() { 
  wp_enqueue_style('style', get_stylesheet_uri()); 
  wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
  wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
  wp_enqueue_style('media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
}

function theme_scripts() {
  wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js');
}
function my_scripts_method(){
	wp_enqueue_script( 'jquery' );
}
?>
