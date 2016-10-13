<?php
if ( have_posts() ) { ?>
    
	<?php while ( have_posts() ) {
		the_post(); ?>
        <div class="row">
            <div class="small-12 large-3 columns">
                <?php 
					if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'large' );
                    } 
				?>
            </div><!-- .large-3.columns -->
            <div class="small-12 large-9 columns">
            <?php echo '<strong class="entry-title profile">' . get_the_title() . '</strong>'; ?>
                <?php the_content(); ?>
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
            </div><!-- .large-9.columns -->
	   </div> <!-- row -->
	<?php }  /* end while -- Restore original Post Data */
	wp_reset_postdata();
} else {
	echo single_cat_title() . ' is currently assigned to all counselors, please email <a href="mailto:admission@pizer.edu">admission@pitzer.edu</a> to request information.';
}
?>