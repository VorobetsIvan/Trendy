		<?php
			global $post;
			$categories = get_the_category( $post->ID );
			foreach($categories as $category){
				$cats_id[] = $category->cat_ID;
			}
			$related_posts = new WP_Query(
			array(
				'posts_per_page' => 2,
				'category__in' => $cats_id,
				'orderby' => 'rand',
				'post__not_in' => array( $post->ID )
			) );

			if( $related_posts->have_posts() ){
				echo '<div class="related-post">';
				echo '  <h3>RELATED POSTS</h3>';
				echo '  <div class="hr-related-post"></div>';
				echo '  <div class="row">';

				while( $related_posts->have_posts() ){
					$related_posts->the_post();
					echo '<div class="col-md-6 col-sm-6">';
					echo '	<div class="cell-related-post">';
					echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'alt' => get_the_title(), 'title' => get_the_title() ) )	;
					echo '		<h4>'.get_the_title().'</h4>';
					echo '		<div class="hr-related-post"></div>';
					echo '		<p>'.get_the_excerpt().'</p>';
					echo '		<a href="'.get_the_permalink().'" class="btn-black">READ MORE</a>';
					echo '	</div>';
					echo '</div>';
				}
				wp_reset_postdata();
				echo '	</div>';
				echo '</div>';
			}
		?>
