<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foundation-6-parent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row news">
		<header class="entry-header">
			<?php
				if ( is_single() ) {
					the_title( '<span class="entry-title">', '</span>' );
				} 

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php presidential_transition_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->


		<footer class="entry-footer">
			<?php presidential_transition_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	</div><!-- .row -->
</article><!-- #post-## -->
