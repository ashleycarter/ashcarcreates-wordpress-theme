<?php

//Load Theme CSS
function theme_styles() {

	wp_enqueue_style( 'base', get_template_directory_uri() . '/css/base.css');
	wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/css/skeleton.css');
	wp_enqueue_style( 'googlefont', 'http://fonts.googleapis.com/css?family=Raleway:200');
	wp_enqueue_style( 'googlefont', 'http://fonts.googleapis.com/css?family=Vollkorn');
	wp_enqueue_style( 'googlefont', 'http://fonts.googleapis.com/css?family=Montserrat:400,700');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css');

	wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css');
	if( is_page( 'home' ) ) {
		wp_enqueue_style( 'flexslider' );
	}

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

//Load Theme JS
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
   function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

//Enable custom menus
//add_theme_support( 'menus' )
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

?>
