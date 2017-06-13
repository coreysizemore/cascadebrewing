<?php
	
	/*
		@package WordPress
		@subpackage hoth
	*/
	 
?>
	
<?php get_template_part( 'sidebars/sidebar' , 'announcement' ); ?>

<div class="main home <?php echo basename(get_permalink()); ?>">
	
	<?php
	
		if( get_field('display_call_out_boxes') ):
		
			if( have_rows('call_out_boxes') ):
			
				echo '<div class="main_cushion includes"><div class="container"><div class="row gutters">';
						
				while ( have_rows('call_out_boxes') ) : the_row();
						        
					echo '<div class="col_4"><div class="content"><div class="callout_wrapper">';
					
					if( get_sub_field('page_link') ):
					
						echo '<a href="';
							        
						the_sub_field('page_link');
							
						echo '">';
							
						echo '<div class="icon_wrapper"><span class="icon icon-';
							
						the_sub_field('icon');
							        
						echo '"></span></div></a>';
						
					else :
					
						echo '<div class="icon_wrapper"><span class="icon icon-';
							
						the_sub_field('icon');
							        
						echo '"></span></div>';
					
					endif;
					
					the_sub_field('content');
					
					echo '</div></div></div>';
						
				endwhile;
					
				echo '</div></div></div>';
							
			else :
				
			endif;
			
		elseif ( get_field('display_featured_bottle') ) :
		
			if( have_rows('featured_bottle') ):
			
				echo '<div class="main_cushion includes"><div class="container"><div class="row gutters">';
				
					if( get_field('featured_bottle_section_heading') ) :
				
						echo '<div class="col_12"><div class="content"><h2>';
					
						the_field('featured_bottle_section_heading');
						
						echo '</h2></div></div></div><div class="row gutters">';
						
					endif;
						
				while ( have_rows('featured_bottle') ) : the_row();
						        
					echo '<div class="col_3"><div class="content"><div class="bottle">';
					
					if( get_sub_field('link') ):
					
						echo '<a href="';
							        
						the_sub_field('link');
							
						echo '">';
							
						echo '<img src="';
							
						the_sub_field('image');
							        
						echo '" /></a>';
						
					else :
					
						echo '<img src="';
							
						the_sub_field('image');
							        
						echo '" /></a>';
					
					endif;
					
					echo '</div></div></div>';
						
				endwhile;
					
				echo '</div></div></div>';
							
			else :
				
			endif;
			
		else :
		
			echo '<div class="main_cushion"></div>';

		endif;
		
	?>

	<?php if( get_field('default_editor')): ?>
	
		<div class="default_editor">
		
			<div class="container">
					
				<div class="row gutters">
						
					<?php if( get_field('sidebar_selection') == 'right' ): ?>
						
						<div class="col_9 first">
								
							<div class="content">
					
								<?php get_template_part( 'loops/loop', 'home' ); ?>
									
							</div>
								
						</div>
							
						<div class="col_3 last">
									
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
								
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'none' ): ?>
					
						<div class="col_12">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'home' ); ?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'left' ): ?>
					
						<div class="col_3 first">
	
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
							
						</div>
						
						<div class="col_9 last">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'home' ); ?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
						
				</div>
				
			</div>
			
		</div>
	
	<?php endif; ?>
	
	<?php if(is_user_logged_in()):?>
	
		<div class="edit_button">
		
			<span class="edit"><?php edit_post_link(); ?></span>
		
		</div>
	
	<?php endif; ?>

</div>

<?php
	
	if( get_field('accordion') ):
	
		if( have_rows('accordion_content') ):
		
			echo '<div class="main"><div class="container"><div class="row gutters"><div class="col_12"><div id="accordion" class="content">';
					
			while ( have_rows('accordion_content') ) : the_row();
					        
				echo '<h3>';
					        
				the_sub_field('section_heading');
					
				echo '</h3>';
					
				echo '<div>';
					
				the_sub_field('section_content');
					        
				echo '</div>';
					
			endwhile;
				
			echo '</div></div></div></div></div>';
						
		else :
			
		endif;
		
	endif;
	
?>

<?php
	
	if( get_field('tabs') ):
	
		if( have_rows('tabs_content') ):
		
			echo '<div class="main"><div class="container"><div class="row gutters"><div class="col_12"><div id="tabs" class="content">';
				
			echo '<ul>';
					
			while ( have_rows('tabs_content') ) : the_row();
					
				echo '<li><a href="#tabs-';
					
				the_sub_field('section_number');
					
				echo '">';
					        
				the_sub_field('section_heading');
					
				echo '</a></li>';
					
			endwhile;
			
			echo '</ul>';
				
			while ( have_rows('tabs_content') ) : the_row();
					
				echo '<div id="tabs-';
					
				the_sub_field('section_number');
					
				echo '">';
					        
				the_sub_field('section_content');
					
				echo '</div>';
					
			endwhile;
				
			echo '</ul>';
				
			echo '</div></div></div></div></div>';
						
		else :
			
		endif;
		
	endif;
	
?>

<?php if( get_field('parallax_feature')): ?>

	<?php if( get_field('parallax_image') ): ?>

		<div class="parallax parallax-home" data-stellar-background-ratio="0.15" style="background-image: url(<?php the_field('parallax_image'); ?>)">
	
			<?php
		
				if(get_field('parallax_content'))
				{
					echo '<div class="filter">' . get_field('parallax_content') . '</div>';
				}
											
			?>
	
		</div>
	
	<?php else : ?>
	
		<div class="parallax parallax-home parallax_default_image" data-stellar-background-ratio="0.15">
			
			<?php
		
				if(get_field('parallax_content'))
				{
					echo '<div class="filter">' . get_field('parallax_content') . '</div>';
				}
											
			?>
		
		</div>
	
	<?php endif; ?>

<?php endif; ?>
	
	<?php 
				
		if( get_field('column_selection') == 'one' ):
		
			echo '<div class="main accentbg">';
					
			if( have_rows('one_columns') ):
					
				while ( have_rows('one_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_12"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
			echo '</div>';
			
		elseif( get_field('column_selection') == 'two' ):
		
			echo '<div class="main accentbg">';
		
			if( have_rows('two_columns') ):
					
				while ( have_rows('two_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_6 first"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div><div class="col_6 last"><div class="content">';
					        
					the_sub_field('column_2');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
			echo '</div>';
			
		elseif( get_field('column_selection') == 'onethree' ):
		
			echo '<div class="main accentbg">';
		
			if( have_rows('one_three_columns') ):
					
				while ( have_rows('one_three_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_3 first"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div><div class="col_9 last"><div class="content">';
					        
					the_sub_field('column_2');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
			echo '</div>';
			
		elseif( get_field('column_selection') == 'threeone' ):
			
			echo '<div class="main accentbg">';
		
			if( have_rows('three_one_columns') ):
					
				while ( have_rows('three_one_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_9 first"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div><div class="col_3 last"><div class="content">';
					        
					the_sub_field('column_2');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
			echo '</div>';
			
		elseif( get_field('column_selection') == 'three' ):
		
			echo '<div class="main accentbg">';
		
			if( have_rows('three_columns') ):
					
				while ( have_rows('three_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_4 first"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div><div class="col_4"><div class="content">';
					        
					the_sub_field('column_2');
					    
					echo '</div></div><div class="col_4 last"><div class="content">';
					        
					the_sub_field('column_3');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
			echo '</div>';
			
		elseif( get_field('column_selection') == 'four' ):
		
			echo '<div class="main accentbg">';
		
			if( have_rows('four_columns') ):
					
				while ( have_rows('four_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_3 first"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div><div class="col_3"><div class="content">';
					        
					the_sub_field('column_2');
					    
					echo '</div></div><div class="col_3"><div class="content">';
					        
					the_sub_field('column_3');
					    
					echo '</div></div><div class="col_3 last"><div class="content">';
					        
					the_sub_field('column_3');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
			echo '</div>';
				
		endif; 
			
	?>

	<?php
		
		if( get_field('display_resources') ):
		
			if( have_rows('gallery_item', 'options') ):
	
				echo '<div class="resources"><div class="container"><div class="row"><div class="col_12">';
				
				if( get_field('resources_title', 'options') ):
				
					echo '<h2>';
					
					the_field('resources_title', 'options');
					
					echo '</h2>';
				
				endif;
						
				while ( have_rows('gallery_item', 'options') ) : the_row();
						        
					echo '<div class="resources_wrapper"><a href="';
					
					the_sub_field('url', 'options');
					
					echo '" target="_blank"><div class="resources_item" style="background-image: url(';
						        
					the_sub_field('image', 'options');
					
					echo ');"><div class="filter"><span class="text"><span class="icon icon-expand"></span>';
					
					the_sub_field('title', 'options');
					
					echo '</span></div></div></a></div>';
						
				endwhile;
				
				echo '</div></div></div></div>';
							
			else :
						
			endif;
		
		endif;
			
	?>

<?php

	if(get_field('appointment_feature'))
	{
		get_template_part( 'sidebars/sidebar' , 'appointment' );
	}
						
?>
	
	
	