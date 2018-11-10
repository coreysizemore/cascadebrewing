<?php
	
	/*
		Child Wordpress Funtions
	*/
	
	function csdd_child_scripts() {
	
		wp_enqueue_style( 'csdd-custom', get_stylesheet_directory_uri() . '/css/custom.css' );
	
	}
	add_action( 'wp_enqueue_scripts', 'csdd_child_scripts' );
	
	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' => 'Our Beer Pg. 1',
			'menu_title' => 'Our Beer Pg. 1',
			'menu_slug' => 'our-beer-1',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
		
		acf_add_options_page(array(
			'page_title' => 'Our Beer Pg. 2',
			'menu_title' => 'Our Beer Pg. 2',
			'menu_slug' => 'our-beer-2',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
	
	}

?>