<?php 

function load_stylesheets(){

	//Bootstrap 4 css files 

	wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),false,'all');
	wp_enqueue_style('bootstrap');


	//Theme css files
	wp_register_style('style',get_template_directory_uri().'/style.css',array(),false,'all');
	wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts','load_stylesheets');


//Include custom Jquery

function include_jquery(){

	wp_deregister_script('jquery');

	wp_enqueue_script('jquery',get_template_directory_uri().'/js/CustomJQuery.js',1,true);
	
	add_action('wp_enqueue_scripts','jquery');
} 

add_action('wp_enqueue_scripts','include_jquery');

//Adding our javascripts

function loadjs(){

	wp_register_script('customjs',get_template_directory_uri().'/js/scripts.js',1,true);
	wp_enqueue_script('customjs');

}
add_action('wp_enqueue_scripts','loadjs');


add_theme_support('menus');

add_theme_support('post-thumbnails');


register_nav_menus(

	array(
		'top-menu'=>__('Top Menu','theme'),
		'footer-menu'=>__('Footer Menu','theme')
	)

);

/*ADD CUSTOM LOGO*/

/*add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );*/

?>