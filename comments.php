<?php if (have_comments()) : ?>
	<h4 id="comments"><?php comments_number('No comments','One Comment','% Comments')?></h4>
	<div class="comment-list">
		<?php wp_list_comments();?>
	</div>
<?php endif; ?>

<?php
	$comments_args=array(
	// change the title of the save button
		'label_submit'=>'Submit Comment',
	// change the title of the reply section
		'title_reply'=>'Post a Comment',
	// remove "Text or HTML to be displayed after the set of comment fields"
		'comment_notes_after'=>'',
		);
	comment_form($comments_args)

?>