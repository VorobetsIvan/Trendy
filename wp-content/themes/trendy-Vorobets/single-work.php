<? get_header('portfolio-item'); ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php
        $pictures_work = carbon_get_post_meta(get_the_id(), 'pictures_for_slider', 'complex' );
		if (isset($pictures_work)) {
			echo '<div class="container">';
			echo '	<div id="owl-portfolio" class="owl-carousel owl-theme">';
			foreach ($pictures_work as $value) {
		        echo '<div class="item"><img src="'.wp_get_attachment_image_url($value['picture_slider'],'full').'" alt=""></div>';
			}
			echo '  </div>';
			echo '</div>';
		}
		?>
		    <div class="container">
		      <div class="row">
		        <div class="col-md-8 main-content-portfolio">
		          <h2><?= the_title(); ?></h2>
		          <p><?= get_the_content(); ?></p>
		          <?php
		          	$list_skills = carbon_get_post_meta(get_the_id(), 'project_skill', 'complex' );
		          	if (isset($list_skills)) {
		          		echo '<div class="ind-portfolio">';
		          		foreach ($list_skills as $skill) {	
				            echo '<span><strong>'.$skill['name'].'</strong> - '.$skill['description'].'</span>';
				            echo '<div id="ind-'.$skill['name'].'"></div>';
				            echo '<script  type="text/javascript">';
				            echo '	$("#ind-'.$skill['name'].'").LineProgressbar({ percentage: '.$skill['spec'].' });';
				            echo '</script>';
		          		}
			          	echo '</div>';
		          	}
		          ?>
		        </div>
		        
		        <div class="col-md-3 col-md-offset-1 sidebar-portfolio">
		          <h2>PROJECT INFO</h2>
		          <div class="hr-sidebar"></div>
		          <ul>
		            <?php
		            	if (carbon_get_post_meta(get_the_id(), 'project_info_for') != '') {
		            		echo '<li><span>For:</span> '.carbon_get_post_meta(get_the_id(), 'project_info_for').'</li>';
		            	};
		            	if (carbon_get_post_meta(get_the_id(), 'project_info_category') != '') {
		            		echo '<li><span>Category:</span> '.carbon_get_post_meta(get_the_id(), 'project_info_category').'</li>';
		            	};
		            	$list_skills = carbon_get_post_meta(get_the_id(), 'project_skill', 'complex' );
	          			if (isset($list_skills)) {
	          				$text_skills = '';
	          				foreach ($list_skills as $skill) {
	          					$text_skills .= $skill['name'].', ';
	          				}
	          				$text_skills = substr($text_skills, 0, -2);
	          				echo '<li><span>Skills:</span> '.$text_skills.'</li>';
	          			};

		            	if (carbon_get_post_meta(get_the_id(), 'project_info_date_start') != '') {
		            		$date_star = strtotime(carbon_get_post_meta(get_the_id(), 'project_info_date_start'));
		            		echo '<li><span>Date Start:</span> '.date('j F Y',$date_star).'</li>';
		            	};
		            	if (carbon_get_post_meta(get_the_id(), 'project_info_date_finished') != '') {
		            		$date_finished = strtotime(carbon_get_post_meta(get_the_id(), 'project_info_date_finished'));
		            		echo '<li><span>Date Finished:</span> '.date('j F Y',$date_finished).'</li>';
		            	};

		            	if (carbon_get_post_meta(get_the_id(), 'project_info_url') != '') {
		            		echo '<li><span>URL:</span> <a target="_blank" href="'.carbon_get_post_meta(get_the_id(), 'project_info_url').'">'.carbon_get_post_meta(get_the_id(), 'project_info_url').'</a></li>';
		            	};
		            ?>
		          </ul>
		        </div>


		      </div>
		      <div class="row nav-portfolio">
		        <div class="col-md-6 col-sm-6 nav-prev">
		          <?php 
		          	$prev_post = get_adjacent_post();
					if( $prev_post ) {
						echo '<a href="'.get_permalink($prev_post->ID).'" class="prev-portfolio"></a>';
						echo '<p>'. $prev_post->post_title .'</p>';
					}
		          ?>
		        </div>

		        <div class="col-md-6 col-sm-6 nav-next">
		          <?php 
		          	$prev_post = get_adjacent_post(0, '', 0);
					if( $prev_post ) {
						echo '<a href="'.get_permalink($prev_post->ID).'" class="next-portfolio"></a>';
						echo '<p>'. $prev_post->post_title .'</p>';
					}
		          ?>
		        </div>
		      </div>
		    </div>

		<?php
	?>

	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no works matched your criteria.' ); ?></p>
	<?php endif; ?>

<? get_footer('portfolio-item'); ?>
