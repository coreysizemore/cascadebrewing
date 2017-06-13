/* Wordpress Theme Color Palette */
/* This CSS stylesheet should always be connected after the primary styles.css sheet or else the colors won't work. If no color is selected, it will default to theme default colors. */

<?php if( get_field('layout_use_colors', 'options')): ?>

	<?php if( get_field('layout_background_color', 'options')): ?>
	
		/* body */
	
		body,
		a#searchopen:link, a#searchopen:visited,
		article.blog_preview,
		.blog_sidebar #blog_sidebar_1, .blog_sidebar #blog_sidebar_2 {
			background: <?php the_field('layout_background_color', 'options');?>;
		}
	
	<?php endif; ?>
	
	<?php if( get_field('layout_blog_background_color', 'options')): ?>
	
		/* body */
	
		.main.coloredbg, .blog_sidebar {
			background: <?php the_field('layout_blog_background_color', 'options');?>;
		}
	
	<?php endif; ?>
	
	<?php if( get_field('layout_primary_color', 'options')): ?>
	
		/* primary color */
		
		.content h1,
		.content h3,
		.sidebar h3,
		.content form label,
		.breadcrumb_wrapper span.breadcrumbs a:link, .breadcrumb_wrapper span.breadcrumbs a:visited,
		article.blog_preview span.edit a:link, article.blog_preview span.edit a:visited,
		article.blog_preview span.author a:link, article.blog_preview span.author a:visited, article.blog_preview span.date a:link, article.blog_preview span.date a:visited,
		article.blog_entry .meta span.date a:link, article.blog_entry .meta span.date a:visited, article.blog_entry .meta span.author a:link, article.blog_entry .meta span.author a:visited, article.blog_entry .meta span.category a:link, article.blog_entry .meta span.category a:visited,
		a#searchopen:link, a#searchopen:visited,
		.sidebar a:link, .sidebar a:visited,
		.content a:link, .content a:visited,
		.blog_sidebar #blog_sidebar_1 ul li a:link, .blog_sidebar #blog_sidebar_1 ul li a:visited, .blog_sidebar #blog_sidebar_2 ul li a:link, .blog_sidebar #blog_sidebar_2 ul li a:visited,
		#accordion h3:hover, #accordion h3.ui-state-active,
		#accordion div.ui-accordion-content a:link, #accordion div.ui-accordion-content a:visited,
		#tabs ul li.ui-tabs-active a:link, #tabs ul li.ui-tabs-active a:visited,
		#tabs div.ui-tabs-panel a:link, #tabs div.ui-tabs-panel a:visited,
		#tabs ul li a:hover, #tabs ul li a:active,
		a#mobileopen:link, a#mobileopen:visited, a#mobileclose:link, a#mobileclose:visited {
			color: <?php the_field('layout_primary_color', 'options');?>;
		}
		
		hr.divider,
		.content form input[type="submit"],
		.appointment,
		.edit_button a:link, .edit_button a:visited,
		#home_logo #home_page_nav ul li a:link, #home_logo #home_page_nav ul li a:visited,
		.content a.button:link, .content a.button:visited,
		header .header_cover,
		.main.home .main_cushion.includes {
			background: <?php the_field('layout_primary_color', 'options');?>;
		}
		
		.content form input[type="text"], .content form input[type="email"], .content form input[type="number"], .content form input[type="submit"], .content form textarea {
			border: 1px solid <?php the_field('layout_primary_color', 'options');?>;
		}
		
		#accordion h3 {
			border-top: 1px solid <?php the_field('layout_primary_color', 'options');?>;
		}
		
		#tabs ul li.ui-tabs-active a:link, #tabs ul li.ui-tabs-active a:visited,
		#tabs ul {
			border-bottom: 1px solid <?php the_field('layout_primary_color', 'options');?>;
		}
	
	<?php endif; ?>
	
	<?php if( get_field('layout_accent_color', 'options')): ?>
	
		/* accent color */
		
		.main.accentbg,
		.main.home .main_cushion .content .icon_wrapper {
			background: <?php the_field('layout_accent_color', 'options');?>;
		}
	
	<?php endif; ?>
	
	<?php if( get_field('layout_dark_font_color', 'options')): ?>
	
		/* dark body font color */
		
		.content p,
		.resources h2,
		.content h2,
		.content ul li,
		.content form span.gform_description,
		article.blog_preview h2 a:link, article.blog_preview h2 a:visited,
		.blog_sidebar #blog_sidebar_1 h3, .blog_sidebar #blog_sidebar_2 h3,
		article.blog_entry .meta span.date, article.blog_entry .meta span.author, article.blog_entry .meta span.category,
		article.blog_preview span.author, article.blog_preview span.date,
		#nav_bar.scroll-fix ul li a:link, #nav_bar.scroll-fix ul li a:visited,
		.sidebar .office_information_wrapper ul.office_hours li span,
		.sidebar .office_information_wrapper p,
		.sidebar .office_information_wrapper ul.contact_info li {
			color: <?php the_field('layout_dark_font_color', 'options');?>;
		}
	
	<?php endif; ?>
	
	<?php if( get_field('layout_light_font_color', 'options')): ?>
	
		/* light body font color */
		
		.main.accentbg .content p,
		.main.accentbg .content ul li,
		.main.accentbg .content h2, 
		.main.accentbg .content h3, 
		.main.accentbg .content h4,
		footer #logo_footer h2,
		.copyright p,
		.copyright span,
		.copyright a:link, 
		.copyright a:visited,
		.appointment h3,
		.appointment ul li a:link, 
		.appointment ul li a:visited,
		header.header_page #page_title h1.heading,
		header.header_page #page_title h2.subheading,
		#nav_bar ul li a:link, #nav_bar ul li a:visited,
		#contact_information ul li a:link, #contact_information ul li a:visited,
		#home_logo #logo_home h2,
		#home_logo #home_page_nav ul li a:link, #home_logo #home_page_nav ul li a:visited,
		.parallax .filter h1, .parallax .filter h2, .parallax .filter h3, .parallax .filter h4,
		.parallax .filter p, .parallax .filter span,
		.resources .resources_wrapper .resources_item .filter .text,
		footer h3,
		footer ul li a:link, footer ul li a:visited {
			color: <?php the_field('layout_light_font_color', 'options');?>;
		}
		
		.appointment ul li a:link, 
		.appointment ul li a:visited {
			border: 2px solid <?php the_field('layout_light_font_color', 'options');?>;
		}
		
		
	
	<?php endif; ?>
	
	<?php if( get_field('advanced_color_options', 'options')): ?>
	
		/* if advanced colors are displayed */
		
		<?php if( get_field('layout_contact_bar_color', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
		
				/* primary navigation contact information bar color */
				
				#contact_information {
					background: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_contact_bar_color', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
		
				/* accent navigation contact information bar color */
				
				#contact_information {
					background: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_contact_bar_color', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_contact_bar_color_custom', 'options')): ?>
		
				/* custom navigation contact information bar color */
				
				#contact_information {
					background: <?php the_field('layout_contact_bar_color_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
		
		<?php if( get_field('layout_contact_font_color', 'options') == 'dark'): ?>
		
			<?php if( get_field('layout_dark_font_color', 'options')): ?>
	
				/* dark contact/social font color */
				
				#contact_information ul li a:link, #contact_information ul li a:visited {
					color: <?php the_field('layout_dark_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_contact_font_color', 'options') == 'light'): ?>
		
			<?php if( get_field('layout_light_font_color', 'options')): ?>
		
				/* light contact/social font color */
				
				#contact_information ul li a:link, #contact_information ul li a:visited {
					color: <?php the_field('layout_light_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_contact_font_color', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
		
				/* primary contact/social font color */
				
				#contact_information ul li a:link, #contact_information ul li a:visited {
					color: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_contact_font_color', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
		
				/* accent contact/social font color */
				
				#contact_information ul li a:link, #contact_information ul li a:visited {
					color: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_contact_font_color', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_contact_font_color_custom', 'options')): ?>
		
				/* custom contact/social font color */
				
				#contact_information ul li a:link, #contact_information ul li a:visited {
					color: <?php the_field('layout_contact_font_color_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
			
		<?php if( get_field('layout_nav_bar_color', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
		
				/* primary navigation bar color */
				
				#nav_bar,
				header.header_mobile_home .mobile_header_bar, header.header_page_mobile .mobile_header_bar {
					background: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_nav_bar_color', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
		
				/* accent navigation bar color */
				
				#nav_bar,
				header.header_mobile_home .mobile_header_bar, header.header_page_mobile .mobile_header_bar {
					background: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_nav_bar_color', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_nav_bar_color_custom', 'options')): ?>
		
				/* custom navigation bar color */
				
				#nav_bar,
				header.header_mobile_home .mobile_header_bar, header.header_page_mobile .mobile_header_bar {
					background: <?php the_field('layout_nav_bar_color_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
		
		<?php if( get_field('layout_nav_bar_scrolling_color', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
		
				/* primary navigation bar color */
				
				#nav_bar.scroll-fix {
					background: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_nav_bar_scrolling_color', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
		
				/* accent navigation bar color */
				
				#nav_bar.scroll-fix {
					background: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_nav_bar_scrolling_color', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_nav_bar_color_custom', 'options')): ?>
		
				/* custom navigation bar color */
				
				#nav_bar.scroll-fix {
					background: <?php the_field('layout_nav_bar_scrolling_color_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
		
		<?php if( get_field('layout_nav_font_color', 'options') == 'dark'): ?>
		
			<?php if( get_field('layout_dark_font_color', 'options')): ?>
	
				/* dark navigation font color */
				
				#nav_bar ul li a:link, #nav_bar ul li a:visited,
				a#mobileopen:link, a#mobileopen:visited, a#mobileclose:link, a#mobileclose:visited {
					color: <?php the_field('layout_dark_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_nav_font_color', 'options') == 'light'): ?>
		
			<?php if( get_field('layout_light_font_color', 'options')): ?>
		
				/* light navigation font color */
				
				#nav_bar ul li a:link, #nav_bar ul li a:visited,
				a#mobileopen:link, a#mobileopen:visited, a#mobileclose:link, a#mobileclose:visited {
					color: <?php the_field('layout_light_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_nav_font_color', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
		
				/* primary navigation font color */
				
				#nav_bar ul li a:link, #nav_bar ul li a:visited,
				a#mobileopen:link, a#mobileopen:visited, a#mobileclose:link, a#mobileclose:visited {
					color: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_nav_font_color', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
		
				/* accent navigation font color */
				
				#nav_bar ul li a:link, #nav_bar ul li a:visited,
				a#mobileopen:link, a#mobileopen:visited, a#mobileclose:link, a#mobileclose:visited {
					color: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_nav_font_color', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_nav_font_color_custom', 'options')): ?>
		
				/* custom navigation font color */
				
				#nav_bar ul li a:link, #nav_bar ul li a:visited,
				a#mobileopen:link, a#mobileopen:visited, a#mobileclose:link, a#mobileclose:visited {
					color: <?php the_field('layout_nav_font_color_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
		
		<?php if( get_field('layout_nav_scrolling_font_color', 'options') == 'dark'): ?>
		
			<?php if( get_field('layout_dark_font_color', 'options')): ?>
	
				/* dark navigation font color */
				
				#nav_bar.scroll-fix ul li a:link, #nav_bar.scroll-fix ul li a:visited {
					color: <?php the_field('layout_dark_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_nav_scrolling_font_color', 'options') == 'light'): ?>
		
			<?php if( get_field('layout_light_font_color', 'options')): ?>
		
				/* light navigation font color */
				
				#nav_bar.scroll-fix ul li a:link, #nav_bar.scroll-fix ul li a:visited {
					color: <?php the_field('layout_light_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_nav_scrolling_font_color', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
		
				/* primary navigation font color */
				
				#nav_bar.scroll-fix ul li a:link, #nav_bar.scroll-fix ul li a:visited {
					color: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_nav_scrolling_font_color', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
		
				/* accent navigation font color */
				
				#nav_bar.scroll-fix ul li a:link, #nav_bar.scroll-fix ul li a:visited {
					color: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_nav_scrolling_font_color', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_nav_scrolling_font_color_custom', 'options')): ?>
		
				/* custom navigation font color */
				
				#nav_bar.scroll-fix ul li a:link, #nav_bar.scroll-fix ul li a:visited {
					color: <?php the_field('layout_nav_scrolling_font_color_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
	
		<?php if( get_field('layout_header_font_color', 'options') == 'dark'): ?>
		
			<?php if( get_field('layout_dark_font_color', 'options')): ?>
	
				/* dark header font color */
				
				.content h1,
				.sidebar h3 {
					color: <?php the_field('layout_dark_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_header_font_color', 'options') == 'light'): ?>
		
			<?php if( get_field('layout_light_font_color', 'options')): ?>
		
				/* light header font color */
				
				.content h1,
				.sidebar h3 {
					color: <?php the_field('layout_light_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_header_font_color', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
		
				/* primary header font color */
				
				.content h1,
				.sidebar h3 {
					color: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_header_font_color', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
		
				/* accent header font color */
				
				.content h1,
				.sidebar h3 {
					color: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_header_font_color', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_header_font_color_custom', 'options')): ?>
		
				/* custom header font color */
				
				.content h1,
				.sidebar h3 {
					color: <?php the_field('layout_header_font_color_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
	
		<?php if( get_field('layout_body_font_color', 'options') == 'dark'): ?>
		
			<?php if( get_field('layout_dark_font_color', 'options')): ?>
	
				/* dark body font color */
				
				.content p {
					color: <?php the_field('layout_dark_font_color', 'options');?>;
				}
				
				.sidebar .office_information_wrapper ul.office_hours li span {
					color: <?php the_field('layout_dark_font_color', 'options');?>;
				}
				
				.sidebar .office_information_wrapper p {
					color: <?php the_field('layout_dark_font_color', 'options');?>;
				}
				
				.sidebar .office_information_wrapper ul.contact_info li {
					color: <?php the_field('layout_dark_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_body_font_color', 'options') == 'light'): ?>
		
			<?php if( get_field('layout_light_font_color', 'options')): ?>
		
				/* light body font color */
				
				.content p {
					color: <?php the_field('layout_light_font_color', 'options');?>;
				}
				
				.sidebar .office_information_wrapper ul.office_hours li span {
					color: <?php the_field('layout_light_font_color', 'options');?>;
				}
				
				.sidebar .office_information_wrapper p {
					color: <?php the_field('layout_light_font_color', 'options');?>;
				}
				
				.sidebar .office_information_wrapper ul.contact_info li {
					color: <?php the_field('layout_light_font_color', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php elseif( get_field('layout_body_font_color', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
		
				/* primary body font color */
				
				.content p {
					color: <?php the_field('layout_primary_color', 'options');?>;
				}
				
				.sidebar .office_information_wrapper ul.office_hours li span {
					color: <?php the_field('layout_primary_color', 'options');?>;
				}
				
				.sidebar .office_information_wrapper p {
					color: <?php the_field('layout_primary_color', 'options');?>;
				}
				
				.sidebar .office_information_wrapper ul.contact_info li {
					color: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_body_font_color', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
		
				/* accent body font color */
				
				.content p {
					color: <?php the_field('layout_accent_color', 'options');?>;
				}
				
				.sidebar .office_information_wrapper ul.office_hours li span {
					color: <?php the_field('layout_accent_color', 'options');?>;
				}
				
				.sidebar .office_information_wrapper p {
					color: <?php the_field('layout_accent_color', 'options');?>;
				}
				
				.sidebar .office_information_wrapper ul.contact_info li {
					color: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_body_font_color', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_body_font_color_custom', 'options')): ?>
		
				/* custom body font color */
				
				.content p {
					color: <?php the_field('layout_body_font_color_custom', 'options');?>;
				}
				
				.sidebar .office_information_wrapper ul.office_hours li span {
					color: <?php the_field('layout_body_font_color_custom', 'options');?>;
				}
				
				.sidebar .office_information_wrapper p {
					color: <?php the_field('layout_body_font_color_custom', 'options');?>;
				}
				
				.sidebar .office_information_wrapper ul.contact_info li {
					color: <?php the_field('layout_body_font_color_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
		
		<?php if( get_field('layout_link_font_color', 'options') == 'dark'): ?>
		
			<?php if( get_field('layout_dark_font_color', 'options')): ?>
	
				/* dark link font color */
				
				.sidebar a:link, .sidebar a:visited {
					color: <?php the_field('layout_dark_font_color', 'options');?>;
				}
				
				.edit_button a:link, .edit_button a:visited {
					background: <?php the_field('layout_dark_font_color', 'options');?>;
				}
				
				a#searchopen:link, a#searchopen:visited {
					color: <?php the_field('layout_dark_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_link_font_color', 'options') == 'light'): ?>
		
			<?php if( get_field('layout_light_font_color', 'options')): ?>
		
				/* light link font color */
				
				.sidebar a:link, .sidebar a:visited {
					color: <?php the_field('layout_light_font_color', 'options');?>;
				}
				
				.edit_button a:link, .edit_button a:visited {
					background: <?php the_field('layout_light_font_color', 'options');?>;
				}
				
				a#searchopen:link, a#searchopen:visited {
					color: <?php the_field('layout_light_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_link_font_color', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
		
				/* primary link font color */
				
				.sidebar a:link, .sidebar a:visited {
					color: <?php the_field('layout_primary_color', 'options');?>;
				}
				
				.edit_button a:link, .edit_button a:visited {
					background: <?php the_field('layout_primary_color', 'options');?>;
				}
				
				a#searchopen:link, a#searchopen:visited {
					color: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_link_font_color', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
		
				/* accent link font color */
				
				.sidebar a:link, .sidebar a:visited {
					color: <?php the_field('layout_accent_color', 'options');?>;
				}
				
				.edit_button a:link, .edit_button a:visited {
					background: <?php the_field('layout_accent_color', 'options');?>;
				}
				
				a#searchopen:link, a#searchopen:visited {
					color: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_link_font_color', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_link_font_color_custom', 'options')): ?>
		
				/* custom link font color */
				
				.sidebar a:link, .sidebar a:visited {
					color: <?php the_field('layout_link_font_color_custom', 'options');?>;
				}
				
				.edit_button a:link, .edit_button a:visited {
					background: <?php the_field('layout_link_font_color_custom', 'options');?>;
				}
				
				a#searchopen:link, a#searchopen:visited {
					color: <?php the_field('layout_link_font_color_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
		
		<?php if( get_field('layout_main_colored', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
		
				/* primary main colored color */
				
				.main.accentbg {
					background: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_main_colored', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
		
				/* accent main colored color */
				
				.main.accentbg {
					background: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_main_colored', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_main_colored_custom', 'options')): ?>
		
				/* custom main colored color */
				
				.main.accentbg {
					background: <?php the_field('layout_main_colored_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
		
		<?php if( get_field('layout_main_colored_font_color', 'options') == 'dark'): ?>
		
			<?php if( get_field('layout_dark_font_color', 'options')): ?>
				
				.main.accentbg .content p, .main.accentbg .content ul li {
					color: <?php the_field('layout_dark_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_main_colored_font_color', 'options') == 'light'): ?>
		
			<?php if( get_field('layout_light_font_color', 'options')): ?>
				
				.main.accentbg .content p, .main.accentbg .content ul li {
					color: <?php the_field('layout_light_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_main_colored_font_color', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
				
				.main.accentbg .content p, .main.accentbg .content ul li {
					color: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_main_colored_font_color', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
				
				.main.accentbg .content p, .main.accentbg .content ul li {
					color: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_main_colored_font_color', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_main_colored_font_color_custom', 'options')): ?>
				
				.main.accentbg .content p, .main.accentbg .content ul li {
					color: <?php the_field('layout_main_colored_font_color_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
		
		<?php if( get_field('layout_appointment_section', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
		
				/* primary appointment color */
				
				.appointment {
					background: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_appointment_section', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
		
				/* accent appointment color */
				
				.appointment {
					background: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_appointment_section', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_appointment_section_custom', 'options')): ?>
		
				/* custom appointment color */
				
				.appointment {
					background: <?php the_field('layout_appointment_section_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
		
		<?php if( get_field('layout_appointment_font_color', 'options') == 'dark'): ?>
		
			<?php if( get_field('layout_dark_font_color', 'options')): ?>
				
				.appointment h3,
				.appointment p {
					color: <?php the_field('layout_dark_font_color', 'options');?>;
				}
				
				appointment ul li a:link, .appointment ul li a:visited {
					border: 2px solid <?php the_field('layout_dark_font_color', 'options');?>;
					color: <?php the_field('layout_dark_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_appointment_font_color', 'options') == 'light'): ?>
		
			<?php if( get_field('layout_light_font_color', 'options')): ?>
				
				.appointment h3,
				.appointment p {
					color: <?php the_field('layout_light_font_color', 'options');?>;
				}
				
				appointment ul li a:link, .appointment ul li a:visited {
					border: 2px solid <?php the_field('layout_light_font_color', 'options');?>;
					color: <?php the_field('layout_light_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_appointment_font_color', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
				
				.appointment h3,
				.appointment p {
					color: <?php the_field('layout_primary_color', 'options');?>;
				}
				
				appointment ul li a:link, .appointment ul li a:visited {
					border: 2px solid <?php the_field('layout_primary_color', 'options');?>;
					color: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_appointment_font_color', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
				
				.appointment h3,
				.appointment p {
					color: <?php the_field('layout_accent_color', 'options');?>;
				}
				
				appointment ul li a:link, .appointment ul li a:visited {
					border: 2px solid <?php the_field('layout_accent_color', 'options');?>;
					color: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_appointment_font_color', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_appointment_font_color_custom', 'options')): ?>
				
				.appointment h3,
				.appointment p {
					color: <?php the_field('layout_appointment_font_color_custom', 'options');?>;
				}
				
				appointment ul li a:link, .appointment ul li a:visited {
					border: 2px solid <?php the_field('layout_appointment_font_color_custom', 'options');?>;
					color: <?php the_field('layout_appointment_font_color_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
		
		<?php if( get_field('layout_footer_section', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
		
				/* primary main colored color */
				
				footer {
					background: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_footer_section', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
		
				/* accent main colored color */
				
				footer {
					background: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_footer_section', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_footer_section_custom', 'options')): ?>
		
				/* custom main colored color */
				
				footer {
					background: <?php the_field('layout_footer_section_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
		
		
		<?php if( get_field('layout_footer_font_color', 'options') == 'dark'): ?>
		
			<?php if( get_field('layout_dark_font_color', 'options')): ?>
				
				footer p {
					color: <?php the_field('layout_dark_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_footer_font_color', 'options') == 'light'): ?>
		
			<?php if( get_field('layout_light_font_color', 'options')): ?>
				
				footer p {
					color: <?php the_field('layout_light_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_footer_font_color', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
				
				footer p {
					color: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_footer_font_color', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
				
				footer p {
					color: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_footer_font_color', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_footer_font_color_custom', 'options')): ?>
				
				footer p {
					color: <?php the_field('layout_footer_font_color_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
		
		<?php if( get_field('layout_copyright_section', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
		
				/* primary main colored color */
				
				.copyright {
					background: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_copyright_section', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
		
				/* accent main colored color */
				
				.copyright {
					background: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_copyright_section', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_copyright_section_custom', 'options')): ?>
		
				/* custom main colored color */
				
				.copyright {
					background: <?php the_field('layout_copyright_section_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>

		<?php if( get_field('layout_copyright_font_color', 'options') == 'dark'): ?>
		
			<?php if( get_field('layout_dark_font_color', 'options')): ?>
				
				.copyright p,
				.copyright a:link, .copyright a:visited {
					color: <?php the_field('layout_dark_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_copyright_font_color', 'options') == 'light'): ?>
		
			<?php if( get_field('layout_light_font_color', 'options')): ?>
				
				.copyright p,
				.copyright a:link, .copyright a:visited {
					color: <?php the_field('layout_light_font_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_copyright_font_color', 'options') == 'primary'): ?>
		
			<?php if( get_field('layout_primary_color', 'options')): ?>
				
				.copyright p,
				.copyright a:link, .copyright a:visited {
					color: <?php the_field('layout_primary_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_copyright_font_color', 'options') == 'accent'): ?>
		
			<?php if( get_field('layout_accent_color', 'options')): ?>
				
				.copyright p,
				.copyright a:link, .copyright a:visited {
					color: <?php the_field('layout_accent_color', 'options');?>;
				}
			
			<?php endif; ?>
			
		<?php elseif( get_field('layout_copyright_font_color', 'options') == 'custom'): ?>
		
			<?php if( get_field('layout_copyright_font_color_custom', 'options')): ?>
				
				.copyright p,
				.copyright a:link, .copyright a:visited {
					color: <?php the_field('layout_copyright_font_color_custom', 'options');?>;
				}
			
			<?php endif; ?>
		
		<?php endif; ?>
	
	<?php endif; ?>

<?php endif; ?>