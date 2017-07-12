<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Trendy</title>
    <?php wp_head(); ?>
  </head>
  <body>
      <!--==============================MAIN MENU==================================-->
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-main-navbar" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src='<?= carbon_get_theme_option('logo-header');?>' alt=""></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-main-navbar">
            <?php 
              wp_nav_menu( array(
                'theme_location'  => 'header_menu',
                'menu'            => '', 
                'container'       => '', 
                'container_class' => '', 
                'container_id'    => '',
                'menu_class'      => '', 
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => '__return_empty_string',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="nav navbar-nav navbar-right">%3$s  </li></ul>',
                'depth'           => 0,
                'walker'          => '',
              ) );
            ?>            
          </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
      </nav>      
      <!--==============================END MAIN MENU==================================-->