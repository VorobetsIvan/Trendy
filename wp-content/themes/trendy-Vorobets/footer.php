
<!--=======================  section-find-us ==================================-->
    <section id="section-find-us" class="container-fluid" style="background: url(<?= carbon_get_theme_option('bg-find-us');?>) center center no-repeat;">
      <div class="container">
        <h1><?= carbon_get_theme_option('title_find_us'); ?></h1>
        <h4><?= carbon_get_theme_option('subtitle_find_us'); ?></h4>
        <div class="row">
          <div class="col-md-4 col-sm-4 cell-find-us">
            <div class="cell-find-us-img">
              <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <div class="cell-find-us-text">
              <h2>PHONES</h2>
              <p>
                <?= carbon_get_theme_option('phones_find_us'); ?>
              </p>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 cell-find-us">
            <div class="cell-find-us-img">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            <div class="cell-find-us-text">
              <h2>OFFICE ADDRESS</h2>
              <p>
                <?= carbon_get_theme_option('office_addr_find_us'); ?>
              </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 cell-find-us">
            <div class="cell-find-us-img">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
            <div class="cell-find-us-text">
              <h2>EMAILS</h2>
              <p>
                <?= carbon_get_theme_option('emails_find_us'); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--===================== END section-find-us ==================================-->

<!--===================== footer ==================================-->
    <footer class="container">
      <p class="footer-copy"><?= carbon_get_theme_option('copy_footer'); ?></p>
      <p class="footer-social">
        <?php
          if (carbon_get_theme_option('url_facebook') !='' ) {
            ?>
              <a href="<?= carbon_get_theme_option('url_facebook'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <?php
          }
        
          if (carbon_get_theme_option('url_google-plus') !='' ) {
            ?>
              <a href="<?= carbon_get_theme_option('url_google-plus'); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <?php
          }

          if (carbon_get_theme_option('url_twitter') !='' ) {
            ?>
              <a href="<?= carbon_get_theme_option('url_twitter'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <?php
          }

          if (carbon_get_theme_option('url_linkedin') !='' ) {
            ?>
              <a href="<?= carbon_get_theme_option('url_linkedin'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <?php
          }

          if (carbon_get_theme_option('url_pinterest') !='' ) {
            ?>
              <a href="<?= carbon_get_theme_option('url_pinterest'); ?>" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            <?php
          }

          if (carbon_get_theme_option('url_vk') !='' ) {
            ?>
              <a href="<?= carbon_get_theme_option('url_vk'); ?>" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
            <?php
          }

          if (carbon_get_theme_option('url_dribbble') !='' ) {
            ?>
              <a href="<?= carbon_get_theme_option('url_dribbble'); ?>" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            <?php
          }

          if (carbon_get_theme_option('url_flickr') !='' ) {
            ?>
              <a href="<?= carbon_get_theme_option('url_flickr'); ?>" target="_blank"><i class="fa fa-flickr" aria-hidden="true"></i></a>
            <?php
          }

          if (carbon_get_theme_option('url_rss') !='' ) {
            ?>
              <a href="<?= carbon_get_theme_option('url_rss'); ?>" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i></a>
            <?php
          }

        ?>
      </p>
    </footer>
    <!--=================== END footer ==================================-->
   
  <?php wp_footer(); ?>  
  </body>
</html>