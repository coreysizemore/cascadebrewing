<?php
	
	/*
		Color Palette Selector
	*/

	function generate_options_css() {
	    $ss_dir = get_stylesheet_directory();
	    ob_start(); // Capture all output into buffer
	    require($ss_dir . '/lib/colorpalette.php'); // Grab the custom-style.php file
	    $css = ob_get_clean(); // Store output in a variable, then flush the buffer
	    file_put_contents($ss_dir . '/css/colors.css', $css, LOCK_EX); // Save it as a css file
	}
	add_action( 'acf/save_post', 'generate_options_css' ); //Parse the output and write the CSS file on post save

?>