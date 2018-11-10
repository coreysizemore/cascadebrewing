<?php
	
	/*
		Login Page Functionality
	*/
	
	function my_custom_login() {
		echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/login/login.css" />';
	}
	add_action('login_head', 'my_custom_login');
	
	function my_login_logo_url() {
		return get_bloginfo( 'url' );
	}
	add_filter( 'login_headerurl', 'my_login_logo_url' );
	
	function my_login_logo_url_title() {
		return 'Sample';
	}
	add_filter( 'login_headertitle', 'my_login_logo_url_title' );
	
	
	function admin_login_redirect( $redirect_to, $request, $user )
	{
		global $user;
		if( isset( $user->roles ) && is_array( $user->roles ) ) {
			if( in_array( "administrator", $user->roles ) ) {
				return $redirect_to;
			} else {
				return home_url();
			}
		}
		else
		{
			return $redirect_to;
		}
	}
	add_filter("login_redirect", "admin_login_redirect", 10, 3);


?>