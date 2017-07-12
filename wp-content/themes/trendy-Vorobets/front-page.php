<?php get_header(); ?>
    <!--============================== header ==================================-->
    <header class="header" style='background: url(<?= carbon_get_theme_option('bg-header');?>) center center no-repeat;'>

      <!--============================== header-text ==================================-->
      <div class="head-text container">
        <h1><?= carbon_get_theme_option('up_title_header');?></h1>
        <div class="row"><div class="col-md-2 col-sm-2 col-xs-2 col-md-offset-5 col-sm-offset-5 col-xs-offset-5 div-line"></div></div>
        <h1><?= carbon_get_theme_option('down_title_header');?></h1>
        <p><?= carbon_get_theme_option('subtitle_header');?></p>
      </div>
      <?php 
        if (carbon_get_theme_option('link_down_btn') != '') {
          ?>
            <a class="bnt-down" href="<?= carbon_get_theme_option('link_down_btn');?>"></a>
          <?php
        }
      ?>
      <!--============================== END header-text ==================================-->
    </header>
    <!--============================== END header ==================================-->
    
    
    <?php 
      if ( have_posts() ){
        while ( have_posts() ){ 
            the_post();
            the_content();
        }
      } else {
        echo wpautop( 'Information not found.' );
      }
    ?>



<?php get_footer(); ?>