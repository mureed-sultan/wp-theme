<?php
register_nav_menus(
    array('primary-menu'=>'header')
);
add_theme_support('post-thumbnails');
add_theme_support('custom-header');

function theme_styles()  
{ 

	// Example of loading a jQuery slideshow plugin just on the homepage
	wp_register_style( 'flexslider', get_template_directory_uri() . '/dist/css/style.css' );

	// Load all of the styles that need to appear on all pages
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );

	// Conditionally load the FlexSlider CSS on the homepage
}
add_action('wp_enqueue_scripts', 'theme_styles');
?>