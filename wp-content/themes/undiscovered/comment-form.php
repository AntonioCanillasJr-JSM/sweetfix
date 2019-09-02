<div id="commentform" style="margin-top:30px; margin-bottom:50px;">
<?php $comment_args = array(
	'id_form'           => 'commentform',
	'class_form'      => 'comment-form',
	'id_submit'         => 'submit',
	'class_submit'      => 'submit',
	'name_submit'       => 'submit',
	'title_reply'       => __( 'Leave a Reply' ),
	'title_reply_to'    => __( 'Leave a Reply to %s' ),
	'cancel_reply_link' => __( 'Cancel Reply' ),
	'label_submit'      => __( 'Submit' ),
	'format'            => 'xhtml',

	'fields' => apply_filters( 'comment_form_default_fields', array(

	'author' => '<p class="comment-form-author">' .  ( $req ? '<span>*</span>' : '' ) .

			'<input required placeholder="Name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',

	'email'  => '<p class="comment-form-email">' .

							( $req ? '<span>*</span>' : '' ) .

							'<input placeholder="Email Address" id="email" name="email" required type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',

	'url'    => '' ) ),

	'comment_field' => '<p>' .

							'<textarea required placeholder="Comment" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' .

							'</p>',
	'comment_notes_before' => '' ,
	'comment_notes_after' => '',

);

comment_form($comment_args); 
?>
</div>