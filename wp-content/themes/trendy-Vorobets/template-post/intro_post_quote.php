<!--================================.post quote==============================-->
<article class="post">
<div class="post-text">
  <div class="post-date">
    <img src="<?= get_template_directory_uri();?>/img/bg-date-post-quote.png" alt="">
    <p class="num_date"><?= get_the_date('j');?></p>
    <p class="month_date"><?= get_the_date('M');?></p>
  </div>
  <div class="post-inf">
    <div class="wrap-quote">
      <div class="quote">
        <h2><?= get_the_content(); ?></h2>
        <div class="post-hr"></div>
        <p><?= carbon_get_the_post_meta('quote_author') ?></p>
      </div>                  
    </div>
  </div>
</div>
</article>
<!--================================END .post quote==============================-->