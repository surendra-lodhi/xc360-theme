<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage XC360
 * @since Xc360 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>


<div id="comments" class="comments-area">


    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
        ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'pma'); ?></p>
    <?php endif; ?>

    <?php
    if (is_user_logged_in()) {
        comment_form(array(
            'comment_field' => sprintf(
                    '<div class="col-md-12">
                        <div class="col-full">%s</div></div>',
                    '<textarea id="comment" placeholder="Comment *" name="comment" cols="45" rows="8" maxlength="65525" required></textarea>'
            ),
            'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
            'title_reply_after' => '</h3>',
            'title_reply' => 'Leave a comment',
            'label_submit' => 'Send message',
            'class_form' => 'register-form custom-form',
            'class_submit' => 'btn-primary',
            'submit_button' => '<div class="col-md-12">
                        <div class="btn-block"><input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" /></div></div>',
        ));
    } else {
        comment_form(array(
            'comment_field' => sprintf(
                    '<div class="col-md-12">
                        <div class="col-full">%s</div></div>',
                    '<textarea id="comment" placeholder="Comment *" name="comment" cols="45" rows="8" maxlength="65525" required></textarea>'
            ),
            'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
            'title_reply_after' => '</h3>',
            'title_reply' => 'Leave a comment',
            'label_submit' => 'Send message',
            'class_form' => 'register-form custom-form',
            'class_submit' => 'btn-primary',
            'submit_button' => '<div class="col-md-12">
                        <div class="btn-block"><input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" /></div></div>',
        ));
    }
    ?>

</div><!-- .comments-area -->