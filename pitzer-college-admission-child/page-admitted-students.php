<?php
/**
 * Template Name: Admitted Students
 */

get_header(); ?>
<div class="row">
	<div id="primary" class="content-area columns small-12 large-9">
		<main id="main" class="site-main" role="main">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page-alt' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
            <div class="small-12 row">
                <?php get_template_part('template-parts/acf' , 'vimeo'); ?>
            </div>    
                <div class="small-12 large-6 columns">
                    <?php get_template_part('template-parts/acf' , 'additional-content'); ?>
                </div>

                <div class="small-12 large-6 columns">
                    <?php get_template_part('template-parts/acf' , 'deadlines'); ?>
                    <!-- Academic Calendar Button -->
                    <a class="button flat radius orange expand" href="http://pitweb.pitzer.edu/registrar/wp-content/uploads/sites/44/2016/03/2016-20-Academic-Calendar-key-dates.pdf" target="_blank">2016-17 Academic Calendar</a>
                    
                        <div class="large-6 columns">
                            <p><strong>The Sagehen Lens</strong></p>
                            <?php get_template_part( 'template-parts/loop' , 'admitted-videos' ); ?>
                        </div>
                        <div class="large-6 columns">
                            <p><strong>More About Pitzer</strong></p>
                           <?php get_template_part( 'template-parts/loop' , 'admitted-videos-staff' ); ?>
                        </div>
                </div>
            <div class="small-12 columns">
                <p></p><strong>Join Our Community of Change Agents</strong></p>
                <?php get_template_part( 'template-parts/acf' , 'pdf-tiles' ); ?>
            </div>
            
        </main><!-- #main -->
    </div><!-- #primary -->


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

</div>
<?php
// get_sidebar();
get_footer();