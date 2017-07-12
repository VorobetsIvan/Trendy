<!--==============================blog-list==================================-->
    <div class="container">
      <div class="row"> 
        <div class="col-md-3 col-md-offset-1 col-md-push-8">
          <?php get_sidebar(); ?>
        </div>
        
        <!--================================.list-posts==============================-->
        <div class="col-md-8  col-md-pull-4 list-posts">

		    <?php 
		      if ( have_posts() ){
		        while ( have_posts() ){ the_post();
		        	if (has_post_format('gallery')) {
		        		/* load template for post gallery */
		        		get_template_part('template-post/intro_post_gallery');

					} elseif (has_post_format('audio')) {
		        		/* load template for post audio */
		        		get_template_part('template-post/intro_post_audio');

					} elseif (has_post_format('video')) {
		        		/* load template for post video */
		        		get_template_part('template-post/intro_post_video');

					} elseif (has_post_format('quote')) {
		        		/* load template for post quote */
		        		get_template_part('template-post/intro_post_quote');

					} elseif (has_post_format('aside')) {
		        		/* load template for post aside */
		        		get_template_part('template-post/intro_post_aside');

					} else {
		        		/* load template for post standart */
		        		get_template_part('template-post/intro_post_standart');

					}
		        }
		      } else {
		        echo wpautop( 'Posts not found.' );
		      }
		    ?>

        </div>
        <!--================================ END .list-posts==============================-->
      </div>
	  <!--================================ pagination ==============================-->     
      <div class="pagin">
     	<?php
			$num_page =  $GLOBALS['wp_query']->query['paged'];
			if (!isset($num_page)) $num_page = 1;
			$max_num_page =  $GLOBALS['wp_query']->max_num_pages;
			if ($max_num_page>1) { 				
				if ($num_page != 1) {
					echo '<a class="prev" href="'.get_pagenum_link($num_page-1).'">&nbsp;</a>';
				}
					echo '<div class="info"> '.$num_page.' of '.$max_num_page.' </div>';

				if ($num_page != $max_num_page) {
					echo '<a class="next" href="'.get_pagenum_link($num_page+1).'">&nbsp;</a>';
				}
			}
     	?> 	
      </div>
      <!--================================ END pagination ==============================-->
    </div>
<!--=========================== END blog-list==================================-->