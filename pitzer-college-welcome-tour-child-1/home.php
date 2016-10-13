<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package presidential-transition
 */

get_header(); ?>
<div class="row">
	<div id="primary" class="content-area large-centered columns small-12 large-9">
		<main id="main" class="site-main" role="main">
            <div id="content">
				<?php
                    // The Query
                    $the_query = new WP_Query( $args );

                    // The Loop
                    if ( $the_query->have_posts() ) {
                        echo '<ul>';
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            echo '<li>' . get_the_title() . '</li>';
                        }
                        echo '</ul>';
                        /* Restore original Post Data */
                        wp_reset_postdata();
                    } else {
                        // no posts found
                    }
				?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
// get_sidebar();
get_footer();
