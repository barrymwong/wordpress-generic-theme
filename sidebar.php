		<div class="aside grid_3 push_9">
			<aside>
				<ul>
					<li><h2>Recent Posts</h2></li>
				<?php
					$args = array( 'numberposts' => '5' );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
					}
				?>
				</ul>
				
				<ul>
				<li><h2>Monthly Posts</h2></li>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
				
				<ul>
				<?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
				</ul>
				
				<ul>
				<?php wp_list_categories('title_li=<h2>Categories</h2>'); ?> 
				</ul>
				

				
				<ul>
					<!-- links -->
					<?php wp_list_bookmarks(); ?>
					<!-- login -->
     		   </ul>
        
       			 <ul>
							<?php wp_register(); ?>
									<!-- Admin login/logout links -->
									<li><?php wp_loginout(); ?></li>
				</ul>
				
				
				
			</aside>
		</div>