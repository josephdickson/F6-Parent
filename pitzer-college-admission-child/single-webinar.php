<?php get_header(); ?>


<!-- Row for main content area - single-webinar.php -->

	<div class="small-12 profile columns" role="main">
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>


				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
           
			
            	<div class="small-12 large-9 columns">
                
			<header>
            	<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
                    <div class="row">

			    <?php get_template_part('inc/acf', 'video'); ?>
                            <?php the_content(); ?>
			<?php 

				if (has_tag('webinar') && has_tag('video') && get_post_status ($ID) == 'future' ) { 
					echo 'this is part of the webinar series with an upcoming date';
					the_content();
				}
			?>
			    <?php get_template_part( 'acf' , 'flexible-fields' ); ?>
			    <?php include 'include-for-category.php' ?>
                    </div>
				</div>
		<div class="small-12 large-3 columns menu accordion-menu small">
					
			<?php dynamic_sidebar("section-menu"); ?>

                </div>

		<div class="small-12 large-3 columns menu webinar accordion-menu small">

			<p title="title"><a href="http://pitweb.pitzer.edu/admission/tag/webinar/"><strong>Webinar Video Series</strong></a></p>
			<?php

				// The Query --- Manually Loop in pages by page_id number
				$args = array(

					'post_type'	=> 'post',
					'tag'		=> 'webinar', 'video',
					'post_status'	=> array( 'future' , 'publish' ),
					'order'   	=> 'DESC'
				//	'post__in'	=> array(2453, 2530, 1874, 2105, 1881)
	
				);

				$the_query = new WP_Query($args); // Assign $args to $the_query as an array

				// The Loop
				if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
							$the_query->the_post();
							echo '<p><a href="'. get_permalink() . '">' . get_the_title() . '</a></p>';
						}
				} else {
					// no posts found
				}
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
                </div>	
            </div>
			<footer>
				
				<p><?php the_tags(); ?></p>
			</footer>
	</article>	
	<?php endwhile; // End the loop ?>


<?php get_footer(); ?>
	</div>
