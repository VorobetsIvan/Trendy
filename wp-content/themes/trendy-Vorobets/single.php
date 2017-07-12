<?php get_header(); ?>


<!--==============================title-blog==================================-->
    <div class="container-fluid title-blog">
      <h1><?= carbon_get_theme_option('title_blog'); ?></h1>
      <h4><?= carbon_get_theme_option('subtitle_blog'); ?></h4>
    </div>
<!--============================ END title-blog ================================-->

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
		        		get_template_part('template-post/full_post_gallery');

					} elseif (has_post_format('audio')) {
		        		/* load template for post audio */
		        		get_template_part('template-post/full_post_audio');

					} elseif (has_post_format('video')) {
		        		/* load template for post video */
		        		get_template_part('template-post/full_post_video');

					} elseif (has_post_format('quote')) {
		        		/* load template for post quote */
		        		get_template_part('template-post/full_post_quote');

					} elseif (has_post_format('aside')) {
		        		/* load template for post aside */
		        		get_template_part('template-post/full_post_aside');

					} else {
		        		/* load template for post standart */
		        		get_template_part('template-post/full_post_standart');

					}
		        }
		      } else {
		        echo wpautop( 'Post not found.' );
		      }
		    ?>
		
		<?php get_template_part('template-post/related_posts'); ?>

		<?php comments_template(); ?>
        </div>
        <!--================================ END .list-posts==============================-->
		
      
      </div>

    </div>
<!--=========================== END blog-list==================================-->

<?php get_footer(); ?>