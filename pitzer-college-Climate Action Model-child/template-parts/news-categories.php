<?php
/**
 * News Categories
 */

?>

	<div class="news-categories">
            <?php
                if ( in_category('News') ) {
                        the_post_thumbnail( array(200,200, 'class' => ' alignleft') );

			if (get_field('defunct_url')) {

					echo '<h1 class="entry-title news"><h1 class="entry-title">' . get_the_title() . '</h1>' ;
					
					}

					else echo '<a href="'. get_field('redirect_to_url') . '" target="_blank"><h1 class="entry-title news">' . get_the_title() . '</h1></a>' ;
			}

                elseif ( in_category('Video') ) {

                        the_post_thumbnail( array(200,200, 'class' => ' alignleft') );

                  get_template_part('acf/acf','video');
                }

                elseif ( in_category ('Press Releases') ) {

                        the_post_thumbnail( array(200,200, 'class' => ' alignleft') );
                    ?>

		        <header>
		                <h2><a class="block" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</header>

                <?php }
		else { ?>
				<header>
					<h2><a class="block" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</header>
<?php }
            ?>
		<?php the_excerpt('Continue reading...'); ?>


<?php
				if ( is_single() ) {
					echo ( '<em>' . get_field('publication_name') . '</em>' );
				}


			if ( 'post' === get_post_type() ) : ?>

			<?php
			endif; ?>
	</div>
