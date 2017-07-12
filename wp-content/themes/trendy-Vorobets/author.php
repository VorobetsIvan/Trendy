<?php get_header(); ?>


<!--==============================title-blog==================================-->
    <div class="container-fluid title-blog">
      <?php 
      	global $wp_query;
       ?>
		
      <h1>Posts by <i>"<?= $wp_query->query['author_name']; ?>"</i> author</h1>
    </div>
<!--============================ END title-blog ================================-->

<?php get_template_part('blog-list'); ?>



<?php get_footer(); ?>