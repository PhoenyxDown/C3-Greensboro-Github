<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to ceethreegee_comment which is
 * located in the functions.php file.
 */
?>

<?php if ( post_password_required() ) : ?>
				<p><?php _e( 'This post is password protected. Enter the password to view any comments.', 'ceethreegee' ); ?></p>
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<?php
	// You can start editing here -- including this comment!
?>

<?php if ( have_comments() ) : ?>
			<!-- STARKERS NOTE: The following h3 id is left intact so that comments can be referenced on the page -->
			<h3 id="comments-title"><?php
			printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'ceethreegee' ),
			number_format_i18n( get_comments_number() ), '' . get_the_title() . '' );
			?></h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<?php previous_comments_link( __( '&larr; Older Comments', 'ceethreegee' ) ); ?>
				<?php next_comments_link( __( 'Newer Comments &rarr;', 'ceethreegee' ) ); ?>
<?php endif; // check for comment navigation ?>

			<ol class="comments_list">
				<?php
					/* Loop through and list the comments. Tell wp_list_comments()
					 * to use ceethreegee_comment() to format the comments.
					 * If you want to overload this in a child theme then you can
					 * define ceethreegee_comment() and that will be used instead.
					 * See ceethreegee_comment() in ceethreegee/functions.php for more.
					 */
					wp_list_comments( array( 'callback' => 'ceethreegee_comment' ) );
				?>
			</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<?php previous_comments_link( __( '&larr; Older Comments', 'ceethreegee' ) ); ?>
				<?php next_comments_link( __( 'Newer Comments &rarr;', 'ceethreegee' ) ); ?>
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
	<p><?php _e( 'Comments are closed.', 'ceethreegee' ); ?></p>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>

<?php comment_form(); ?>