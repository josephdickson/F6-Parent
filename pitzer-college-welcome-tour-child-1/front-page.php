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
	<div id="primary" class="content-area columns small-12">
		<main id="main" class="site-main" role="main">
            <div id="content">
                <div class="small-12">
        				<?php
                    // The Query
                    $the_query = new WP_Query( array('post_type' => 'page',));
                    
                    // The Loop
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            echo '<div class="row">';
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                            echo'<div class="columns">';
                            echo '<h1 class="entry-title">' . get_the_title() . '</h1>';
                            the_content();
                            get_template_part('template-parts/edit-post-link');
                            echo '</div>';
                            echo '</div>';
                        }
                        /* Restore original Post Data */
                        wp_reset_postdata();
                    } else {
                        // no posts found
                    }
				?>
                </div>
            
				<?php
                    // The Query
                    $the_query = new WP_Query( array('category_name' => 'uncategorized', 'order' => 'DESC',));
                    
                    // The Loop
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            echo '<div class="row">';
                             if ( has_post_thumbnail() ) {
                                the_post_thumbnail('large');
                            }
                            echo '<strong class="entry-title">' . get_the_title() . '</strong>';
                            the_excerpt();
                            get_template_part('template-parts/edit-post-link');
                            echo '</div>';
                        }
                        /* Restore original Post Data */
                        wp_reset_postdata();
                    } else {
                        // no posts found
                    }
				?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
// get_sidebar();
get_footer();
