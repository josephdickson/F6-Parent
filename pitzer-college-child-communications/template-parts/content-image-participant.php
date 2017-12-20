<?php
/**
 * Template part for displaying the page portion of latest edition of The Participant
 * Note: Most of the page is populated through WP_Query see page-participant.php
 * for more details.
 */

?>

				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'foundation-6-parent' ),
						'after'  => '</div>',
					) );
				?>

			<?php the_modified_date('F j, Y', '<span class="published-date"> Page last updated on ', '</span>'); ?>

		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'foundation-6-parent' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
