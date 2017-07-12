<!--================================.post==============================-->
<article class="post">
<div class="post-text">
  <div class="post-date">
    <img src="<?= get_template_directory_uri();?>/img/bg-date-post-standart.png" alt="">
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
    <a href="<?= get_the_permalink(); ?>" class="btn-black">READ MORE</a>
  </div>
</div>
</article>
<!--================================END .post==============================-->