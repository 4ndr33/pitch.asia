<?php

function wptuts_styles_with_the_lot()
{
    // Register the style like this for a theme:
    wp_register_style( 'custom-style', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '20120208', 'all' );
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style' );
	wp_register_style( 'custom-style2', get_template_directory_uri() . '/vendor/metisMenu/metisMenu.min.css', array(), '20120208', 'all' );
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style2' );
	
	wp_register_style( 'custom-style3', get_template_directory_uri() . '/dist/css/sb-admin-2.css', array(), '20120208', 'all' );
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style3' );
	
	wp_register_style( 'custom-style4', get_template_directory_uri() . '/vendor/morrisjs/morris.css', array(), '20120208', 'all' );
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style4' );
	
	wp_register_style( 'custom-style5', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css', array(), '20120208', 'all' );
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style5' );
	
	 // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), '20120208',true );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script');
	
	// Register the script like this for a theme:
    wp_register_script( 'custom-script2', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), '20120208',true );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script2');
	
	// Register the script like this for a theme:
    wp_register_script( 'custom-script3', get_template_directory_uri() . '/vendor/metisMenu/metisMenu.min.js', array(), '20120208',true );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script3');
	
	// Register the script like this for a theme:
    wp_register_script( 'custom-script4', get_template_directory_uri() . '/vendor/raphael/raphael.min.js', array(), '20120208',true );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script4');
	
	// Register the script like this for a theme:
    wp_register_script( 'custom-script5', get_template_directory_uri() . '/vendor/morrisjs/morris.min.js', array(), '20120208',true );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script5');
	
	// Register the script like this for a theme:
    wp_register_script( 'custom-script6', get_template_directory_uri() . '/data/morris-data.js', array(), '20120208',true );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script6');
	
	
	// Register the script like this for a theme:
    wp_register_script( 'custom-script7', get_template_directory_uri() . '/dist/js/sb-admin-2.js', array(), '20120208',true );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script7');
	
	
}
add_action( 'wp_enqueue_scripts', 'wptuts_styles_with_the_lot' );

/*
function wptuts_styles_with_the_lot2()
{
    // Register the style like this for a theme:
    wp_register_style( 'custom-style2', get_template_directory_uri() . '/vendor/metisMenu/metisMenu.min.css', array(), '20120208', 'all' );
 
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style2' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_styles_with_the_lot2' );



function wptuts_scripts_basic()
{
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_basic' );
*/
?>