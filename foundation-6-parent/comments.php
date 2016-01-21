<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foundation-6-parent
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

<div class="row">
	<div class="small-12">
		<div id="comments" class="comments-area">
			<div class="callout">
	<?php

		$comments_args = array(
			// change the title of send button 
			'label_submit'=>'Send a Welcome Message',
			// change the title of the reply section
			'title_reply'=>'Send a Welcome Message',
			// remove "Text or HTML to be displayed after the set of comment fields"
			'comment_notes_after' => '',
			// redefine your own textarea (the comment body)
			'comment_field' => '<label for="comment">' . _x( 'Message *', 'noun' ) . '</label><textarea id="comment" name="comment" aria-required="true"></textarea>',
		);

		comment_form($comments_args);

	?>




			<?php
			// You can start editing here -- including this comment!
			if ( have_comments() ) : ?>

				<h3 class="comments-title">
					<?php
						printf( // WPCS: XSS OK.
							esc_html( _nx( 'Welcome Message for President-designate Melvin L. Oliver', 'Welcome Messages for President-designate Melvin L. Oliver', get_comments_number(), 'comments title', 'President-designateial-transition' ) ),
							number_format_i18n( get_comments_number() ),
							'<span>' . get_the_title() . '</span>'
						);
					?>
				</h3>

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
					<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'President-designateial-transition' ); ?></h2>
					<div class="nav-links">

						<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'President-designateial-transition' ) ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'President-designateial-transition' ) ); ?></div>

					</div><!-- .nav-links -->
				</nav><!-- #comment-nav-above -->
				<?php endif; // Check for comment navigation. ?>

				<ol class="comment-list">
					<?php
						wp_list_comments( array(
							'style'      => 'ol',
							'short_ping' => true,
						) );
					?>
				</ol><!-- .comment-list -->

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
					<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'President-designateial-transition' ); ?></h2>
					<div class="nav-links">

						<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'President-designateial-transition' ) ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'President-designateial-transition' ) ); ?></div>

					</div><!-- .nav-links -->
				</nav><!-- #comment-nav-below -->
				<?php
				endif; // Check for comment navigation.

			endif; // Check for have_comments().


			// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'President-designateial-transition' ); ?></p>
			<?php
			endif;
?>





			</div><!-- .callout -->
		</div><!-- #comments -->
	</div>
