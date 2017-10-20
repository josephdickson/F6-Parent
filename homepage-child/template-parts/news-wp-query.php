<?php
$current_post_ID = get_the_ID(); // the post's id is assigned to $current_post_ID


$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'order'   => 'DESC',
	'category_name' => 'news',
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php if ( has_post_thumbnail() ) { ?>
                <div class="row">
					<a href="<?php the_field('redirect_to_url'); ?>">
                        <div class="small-4 medium-5 large-2 columns">
                            <?php the_post_thumbnail( 'medium' ); ?>
                        </div>
                        <div class="small-8 medium-7 large-10 columns">
                        <?php
/*
				$posttags = get_the_tags();
				$count=0;
				if ($posttags) {
					foreach($posttags as $tag) {
					$count++;
						if (1 == $count) {
						echo '<span class="tag">' . $tag->name . '</span>';
						}
					}
				}
*/

				the_title( '<strong class="entry-title">', '</strong>' );
				the_content(); 
				get_template_part('template-parts/edit-post-link');
                        ?>
                        </div>
                    </a>
                </div>
			<?php }	?>


	<?php endwhile; ?>
	<!-- end of the loop -->

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	<!-- pagination here -->

	<?php wp_reset_postdata();
