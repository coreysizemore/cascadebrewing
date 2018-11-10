<?php
	
	global $post;
		
	$post_slug=$post->post_name;
						
	$result = get_field('beer_pg_1','option');
	
	//$beer_page_2 = get_field('beer_pg_2','option');
	
	//$result = array_merge($beer_page_1, $beer_page_2);
						
	if( $result ):
		
		echo '<div id="beer_detail_wrapper">';
									
		foreach( $result as $beer ):
		
			if ($beer['page_slug'] == $post_slug):
				
				$label = $beer['beer_label'];
				
				$image = $beer['beer_image'];
				
				$title = $beer['beer_title'];
				
				$year = $beer['beer_year'];
				
				$desc = $beer['beer_description'];
				
				$notes = $beer['beer_tasting_notes'];
				
				echo '<div class="column_1">';
				
				if ($image):
				
					echo '<div class="beer_image">';
					
					echo '<a href="' . $image['url'] . '" class="fancybox">';
	
					echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
					
					echo '</a></div>';
				
				endif;
				
				if ($label):
				
					echo '<div class="beer_label">';
					
					echo '<a href="' . $label['url'] . '" class="fancybox">';
	
					echo '<img src="' . $label['url'] . '" alt="' . $label['alt'] . '" />';
					
					echo '</a></div>';
				
				endif;
				
				echo '</div>';
				
				echo '<div class="column_2">';
				
				if ($title || $year):
				
					echo '<h1>';
					
					if ($title):
					
						echo $title;
					
					endif;
					
					echo ' | ';
					
					if ($year):
					
						echo $year;
					
					endif;
					
					echo '</h1>';
				
				endif;
				
				if ($desc):
				
					echo '<p>';

					echo $desc;
					
					echo '</p>';
				
				endif;
				
				if ($notes):
				
					echo '<div class="tasting_notes">';
					
					echo '<h3>';
					
					if ($title):
					
						echo $title;
					
					endif;
					
					echo ' ';
					
					if ($year):
					
						echo $year;
					
					endif;
					
					echo ' Tasting Notes';
					
					echo '</h3>';
					
					echo $notes;
	
					echo '</div>';
				
				endif;
				
				echo '</div>';
			
			endif;
																		
		endforeach;
		
		echo '</div>';
									
	endif;
											
?>