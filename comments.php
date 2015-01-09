<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>

	<ol class="comment-list">
		<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
				'avatar_size'=> 34,
			) );
		?>
	</ol><!-- .comment-list -->

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfourteen' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php 
	
	$args = array(
	  'id_form'           => 'commentform',
	  'id_submit'         => 'comment_btn',
	  'title_reply'       => __( 'Leave a Reply' ),
	  'title_reply_to'    => __( 'Leave a Reply to %s' ),
	  'cancel_reply_link' => __( 'Cancel Reply' ),
	  'label_submit'      => __( 'Post Comment' ),
	
	  'comment_field' =>  '
	  	<div class="form-group">
	 	<label for="comment">' . _x( 'Comment', 'noun' ) .
	    '</label><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true">' .
	    '</textarea>
	    </div>
	    ',
	
	  'must_log_in' => '<p class="must-log-in">' .
	    sprintf(
	      __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
	      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
	    ) . '</p>',
	
	  'logged_in_as' => '<p class="logged-in-as">' .
	    sprintf(
	    __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
	      admin_url( 'profile.php' ),
	      $user_identity,
	      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
	    ) . '</p>',
	
	  'comment_notes_before' => '<p class="comment-notes">' .
	    __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
	    '</p>',
	    
	  'comment_notes_after' => '',
	

	
	  'fields' => apply_filters( 'comment_form_default_fields', array(
	
	    'author' =>
	      '
	      <div class="form-group">' .
	      '<label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
	      ( $req ? '<span class="required">*</span>' : '' ) .
	      '<input id="author" name="author" class="form-control comment-input" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
	      '" size="30"' . $aria_req . ' />
	      </div>',
	
	    'email' =>
	      '
	      <div class="form-group">
	      <label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
	      ( $req ? '<span class="required">*</span>' : '' ) .
	      '<input id="email" name="email" class="form-control comment-input" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	      '" size="30"' . $aria_req . ' />
	      </div>',
	
	    'url' =>
	      '
	      <div class="form-group">
	      <label for="url">' .
	      __( 'Website', 'domainreference' ) . '</label>' .
	      '<input id="url" name="url" class="form-control comment-input" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
	      '" size="30" />
	      </div>
	      '
	    )
	  ),
	);
	
	comment_form($args); 
	
	?>

</div><!-- #comments -->