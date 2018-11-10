<?php
	
	if( have_rows('wholesaler') ):
		
		echo '<div class="wholesaler_wrapper">';
		
		echo '<div class="w_row">';
		
		echo '<div class="w_item">State</div>';
		
		echo '<div class="w_item">Distributor</div>';
		
		echo '<div class="w_item">Address</div>';
		
		echo '<div class="w_item">City, State, Zip</div>';
		
		echo '<div class="w_item">Phone</div>';
		
		echo '<div class="w_item">Fax</div>';
		
		echo '</div>';
					
		while ( have_rows('wholesaler') ) : the_row();
		
			echo '<div class="w_row">';
			
			if (get_sub_field('state')) :
			
				echo '<div class="w_item">';
				
				the_sub_field('state');
				
				echo '</div>';
				
			else :
			
				echo '<div class="w_item">';
				
				echo '-';
				
				echo '</div>';
		
			endif;
			
			if (get_sub_field('distributor')) :
			
				if (get_sub_field('website_url')) :
			
					echo '<div class="w_item">';
					
					echo '<a href="';
					
					the_sub_field('website_url');
					
					echo '" target="_blank">';
					
					the_sub_field('distributor');
					
					echo '</a></div>';
					
				else :
				
					echo '<div class="w_item">';
					
					the_sub_field('distributor');
					
					echo '</div>';
					
				endif;
				
			else :
			
				echo '<div class="w_item">';
				
				echo '-';
				
				echo '</div>';
		
			endif;
			
			if (get_sub_field('address')) :
			
				echo '<div class="w_item">';
				
				the_sub_field('address');
				
				echo '</div>';
				
			else :
			
				echo '<div class="w_item">';
				
				echo '-';
				
				echo '</div>';
		
			endif;
			
			if (get_sub_field('city_state_zip')) :
			
				echo '<div class="w_item">';
				
				the_sub_field('city_state_zip');
				
				echo '</div>';
				
			else :
			
				echo '<div class="w_item">';
				
				echo '-';
				
				echo '</div>';
		
			endif;
			
			if (get_sub_field('phone')) :
			
				echo '<div class="w_item">';
				
				the_sub_field('phone');
				
				echo '</div>';
				
			else :
			
				echo '<div class="w_item">';
				
				echo '-';
				
				echo '</div>';
		
			endif;
			
			if (get_sub_field('fax')) :
			
				echo '<div class="w_item">';
				
				the_sub_field('fax');
				
				echo '</div>';
				
			else :
			
				echo '<div class="w_item">';
				
				echo '-';
				
				echo '</div>';
		
			endif;
			
			echo '</div>';
					
		endwhile;
				
		echo '</div>';
						
	else :
			
	endif;
	
?>