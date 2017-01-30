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

	<?php
		if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		}
	?>

	<div class="small-12 messages-to-the-community">
		<header class="entry-header">
			<?php
    			if ( 'post' === get_post_type() ) : ?>

                <div class="entry-meta">

					<span class="published-date"><?php the_time('l, F jS, Y') ?></span>

                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

                </div><!-- .entry-meta -->

                <?php the_content(); ?>

                <?php

                endif; ?>

        </header><!-- .entry-header -->


		<footer class="entry-footer">
			<?php presidential_transition_entry_footer(); ?>
            <?php // presidential_transition_posted_on(); ?>
            <hr />
		</footer><!-- .entry-footer -->

	</div><!-- .row -->
</article><!-- #post-## -->
