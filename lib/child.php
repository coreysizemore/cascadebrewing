<?php
	
	/*
		Call Parent Default Styles
	*/


	function my_theme_enqueue_styles() {
	
	    $parent_style = 'hoth-style';
	
	    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	    wp_enqueue_style( 'child-style',
	        get_stylesheet_directory_uri() . '/style.css',
	        array( $parent_style ),
	        wp_get_theme()->get('Version')
	    );
	    
	}
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
	
/*
	function my_theme_enqueue_scripts() {
	
	    $parent_style = 'innexus_scenic_01-style';
	
	    wp_enqueue_script( $parent_style, get_template_directory_uri() . '/js/scripts.js' );
	    wp_enqueue_script( 'child-style',
	        get_stylesheet_directory_uri() . '/js/scripts.js',
	        array( $parent_style ),
	        wp_get_theme()->get('Version')
	    );
	    
	}
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );
*/
	
	
	
?>