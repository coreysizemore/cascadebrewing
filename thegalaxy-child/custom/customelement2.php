<?php
						
	$beer_page_1 = get_field('beer_pg_1','option');
	
	$beer_page_2 = get_field('beer_pg_2','option');
	
	$result = array_merge($beer_page_1, $beer_page_2);
						
	if( $result ):
		
		echo '<div id="beer_page_wrapper">';
		
		sort($result);
									
		foreach( $result as $beer ):

			echo '<div class="beer_logo">';
			
			$logo = $beer['beer_logo'];
			
			if ($beer['beer_page_link']):
			
				echo '<a href="' . $beer['beer_page_link'] . '">';
				
				echo '<img src="' . $logo['url'] . '" alt="' . $logo['alt'] . '" />';
				
				echo '</a>';
				
				echo '<a href="' . $beer['beer_page_link'] . '">';
				
				echo '<h3>' . $beer['beer_title'] . ' ' . $beer['beer_year'] . '</h3>';
				
				echo '</a>';
			
			else :
			
				echo '<img src="' . $logo['url'] . '" alt="' . $logo['alt'] . '" />';
				
				echo '<a href="' . $beer['beer_page_link'] . '">';
				
				echo '<h3>' . $beer['beer_title'] . ' ' . $beer['beer_year'] . '</h3>';
				
				echo '</a>';
			
			endif;
			
			echo '</div>';
																		
		endforeach;
		
		echo '</div>';
									
	endif;
											
?>