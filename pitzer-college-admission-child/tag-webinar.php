<?php get_header(); ?>

<!-- Row for main content area - tag-webinar.php -->
	<div class="small-12 large-9 columns" role="main">
	<header>
		<h1 class="entry-title"><?php // wp_title(); ?>Pitzer College Office of Admission Webinar Series</h1>
	</header>
	<div class="small-12 columns">
		<?php

		// The Query --- Manually Loop in pages by page_id number
		$args = array(

			'post_type'	=> 'post',
			'p'		=> 4437
	
		);

		$the_query = new WP_Query($args); // Assign $args to $the_query as an array

		// The Loop
		if ( $the_query->have_posts() ) {

				while ( $the_query->have_posts() ) {
					$the_query->the_post();

					echo '<p>' . get_the_content() . '</p>';
				}

		} else {
			// no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		?>
	</div>

				<?php get_template_part('template-parts/acf', 'tag-loop-video'); ?>
</div>


	<div class="small-12 large-3 columns">
		<?php get_template_part('template-parts/sidebar-menu-walker') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-2') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-3') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-4') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-5') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-6') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-7') ?>
        <?php get_template_part('template-parts/sidebar-menu-walker-8') ?>
	</div>


<?php get_footer(); ?>