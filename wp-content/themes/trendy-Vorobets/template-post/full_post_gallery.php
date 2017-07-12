<!--================================.post galery==============================-->

<article class="post">
<div class="post-media">
  <?php
  	$list_pics = carbon_get_post_meta(get_the_id(), 'post_pic_gallery', 'complex' );
  	if (isset($list_pics)) {
  		echo '<div id="owl-portfolio" class="owl-carousel owl-theme post_gallery">';
  		foreach ($list_pics as $pic) {
  			echo '<div class="item"><img src="'.wp_get_attachment_image_url($pic['picture_gallery'],'full').'" alt=""></div>';
  		}
  		echo '</div>';
  	}
  ?>
</div>
<div class="post-text">
  <div class="post-date">
    <img src="<?= get_template_directory_uri();?>/img/bg-date-post-img-galery.png" alt="">
    <p class="num_date"><?= get_the_date('j');?></p>
    <p class="month_date"><?= get_the_date('M');?></p>
  </div>
  <div class="post-inf">
    <h2><?= get_the_title(); ?></h2>
    <p class="inform-post">
      <i class="fa fa-user" aria-hidden="true"></i>
		<?php the_author_posts_link(); ?>
      <i class="fa fa-folder-open" aria-hidden="true"></i>	
		<?php 		  
          	$categories = get_the_category();
			$text_catalog = '';
			foreach ($categories as $value) {
				$text_catalog .= '<a href="'.get_category_link($value->cat_ID).'" class="post-category">'.$value->cat_name.'</a> , ';
			}
			$text_catalog = substr($text_catalog,0,-2);
			echo '<span>'.$text_catalog.'</span>';
		?>
      <i class="fa fa-comment" aria-hidden="true"></i><a class="post-comments"> <?= get_comments_number(); ?> comments</a>
    </p>
    <div class="post-hr"></div>
    <p class="post-excerpt"><?= get_the_excerpt(); ?></p>
    <?php
      if ( function_exists('dynamic_sidebar') )
        dynamic_sidebar('like-post-sidebar');
    ?>
    
    <div class="full-text-content">
      <?= the_content();  ?>
    </div>
    
    <div class="tags-post"> 
    <?php
      $posttags = get_the_tags();
      if ($posttags) {
        foreach($posttags as $tag) {
          $link = get_term_link( intval($tag->term_id), $tag->taxonomy );
          echo '<a href="'.$link.'">'.$tag->name.'</a>'; 
        }
      }
    ?>
     </div>

  </div>
</div>

</article>
<!--================================END .post galery==============================-->