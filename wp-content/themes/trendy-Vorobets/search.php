<?php get_header(); ?>


<!--==============================title-blog==================================-->
    <div class="container-fluid title-blog">
       <?php 
      	global $wp_query;
       ?>

      <h1>Search result for <i>"<?= $wp_query->query['s']; ?>"</i></h1>
    </div>
<!--============================ END title-blog ================================-->

<!--==============================blog-list==================================-->
    <div class="container">
      <div class="row"> 

        <!--================================.list-posts==============================-->
        <div class="col-md-12  list-search">

		    <?php 
		      if ( have_posts() ){
		        while ( have_posts() ){ the_post();
					?>
						<div class="cell-search">
							<div><?=get_post_type(get_the_ID())?></div>
							<h3><?= get_the_title(); ?></h3>
							<p><?= get_the_excerpt(); ?></p>
							<a href="<?= get_the_permalink(); ?>" class="btn-black">READ MORE</a>
						</div>
					<?php
		        }
		        wp_reset_postdata();
		      } else {
		        echo wpautop( 'Nothing was found' );
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


<?php get_footer(); ?>