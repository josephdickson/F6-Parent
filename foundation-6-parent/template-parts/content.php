<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package presidential-transition
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row news">
		<header class="entry-header">
			<?php
				if ( is_single() ) {
					the_title( '<span class="entry-title">', '</span>' );
				} else {
					the_title( '<em><span class="publication">'. get_field('publication_name') . ':</span></em> <span class="entry-title">"<a href="' . esc_url( get_permalink() ) . '" rel="bookmark" target="_blank">', '</a>"</span>' );
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
