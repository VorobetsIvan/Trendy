<?php 
function mytheme_comment($comment, $args, $depth){
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	<div id="comment-<?php comment_ID(); ?>">

		<div class="avatar">
			<?php echo get_avatar( $comment, $size='55'); ?>
		</div>
		
		<div class="author">
			<cite class="fn"><?php echo get_comment_author_link() ?></cite> <?php printf( 'On %1$s, %2$s', get_comment_date(),  get_comment_time()) ?> 
		</div>

		<?php comment_text() ?>

		<div class="reply">
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
	</div>
<?php
}
?>



<div class="comments">
	<h3><?= comments_number(); ?></h3>
	<div class="hr-comments"></div>

	<div class="commentlist">
		<?php
			// We receive comments from the post
			$comments = get_comments(array(
				'post_id' => get_the_ID(),
				'status' => 'approve' // Comments past moderation
			));

			// Form the list of received comments
			wp_list_comments('type=comment&callback=mytheme_comment', $comments);
		?>
	</div>
</div>


<?php comment_form(array(
	'fields' => array(
			'author' => '<div class="col-md-6"> 
							<input id="author" name="author" type="text" placeholder="YOUR NAME*" ' . $aria_req . $html_req . ' />
						</div>',
			'email'  => '<div class="col-md-6">
						<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' placeholder="YOUR EMAIL*" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />
						</div>'
			),
	'label_submit' => 'LEAVE THE REPLY',


	'title_reply'=>'LEAVE A REPLY',

	'comment_notes_after' => '',

	'comment_field' => '<div class="comment-form-comment col-md-12"><textarea id="comment" name="comment" aria-required="true" placeholder="THE REPLY"></textarea></div>',

	'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
	'title_reply_after'    => '</h3><div class="hr-comments"></div>',
)); 


?>