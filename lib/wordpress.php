<?php
	
	/*
		Default wordpress functions
	*/


	// register menus
	function register_my_menus() {
	  register_nav_menus(
	    array(
	      'primary_nav' => __( 'Primary' ),
	      'home_page_nav' => __( 'Home Page' ),
	      'beer_nav' => __( 'Current Releases' )
	    )
	  );
	}
	add_action( 'init', 'register_my_menus' );
	
	
	// Changing excerpt length
	function new_excerpt_length($length) {
	return 28;
	}
	add_filter('excerpt_length', 'new_excerpt_length');
	
	// Changing excerpt more
	function new_excerpt_more($more) {
	return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	
	//This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );
	
	//Apply do_shortcode() to widgets so that shortcodes will be executed in widgets
	add_filter('widget_text', 'do_shortcode');
	
	//remove admin bar for anyone not an admin
	function remove_admin_bar() {

		if (!current_user_can('administrator') && !is_admin()) {
			show_admin_bar(false);
		}
	}
	add_action('after_setup_theme', 'remove_admin_bar');
	
	//Remove default Jquery plugin
/*
	function myphpinformation_scripts() {
		if( !is_admin()){
			wp_deregister_script('jquery');
		}
	}
*/
	
	add_action( 'wp_enqueue_scripts', 'myphpinformation_scripts' );
	
?>