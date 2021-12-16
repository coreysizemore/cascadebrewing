<?php
						
	$result = get_field('beer_pg_2','option');
					
	if( $result ):
		
		echo '<div id="beer_home_wrapper"><div class="container"><div class="row gutters"><div class="col_12">';
		
		//sort($result);
		
		$i = 0;
									
		foreach( $result as $beer ):
		
			if ($i <= 7) :

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
				
				endif;
				
				echo '</div>';
			
			endif;
			
			$i++;
																		
		endforeach;
		
		echo '</div></div></div></div>';
									
	endif;
											
?>