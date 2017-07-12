<?php get_header(); ?>


<!--==============================title-blog==================================-->
    <div class="container-fluid title-blog">
      <?php 
      	global $wp_query;
       ?>

      <h1>Posts from <i>"<?= $wp_query->query['day']; ?>.<?= $wp_query->query['monthnum']; ?>.<?= $wp_query->query['year']; ?>"</i></h1>
    </div>
<!--============================ END title-blog ================================-->

<?php get_template_part('blog-list'); ?>


<?php get_footer(); ?>