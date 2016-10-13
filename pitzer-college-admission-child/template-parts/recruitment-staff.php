<?php
if ( is_page('Meet the Staff') ) {
    // if this is the "meet-staff" slugged page
    
    // The Query
    $the_query = new WP_Query( array('category_name' => 'recruitment-staff') );

// The Loop
if ( $the_query->have_posts() ) {

	while ( $the_query->have_posts() ) {
		$the_query->the_post(); ?>
    <div class="row">
        <div class="small-12 large-3 columns">
        <?php 

        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'large' );
        } 
        ?>
        </div><!-- .small-12.large-3.columns -->

        <div class="small-12 large-9 columns">
            <?php echo '<strong class="entry-title">' . get_the_title() . "</strong>" ; ?>
            <?php the_content(); ?>
            <?php get_template_part('template-parts/edit-post-link'); ?>
        </div><!-- .small-12.large-9.columns -->
    </div><!-- .row -->
	<?php }

	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}

}
?>