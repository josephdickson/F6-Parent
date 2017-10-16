<?php
/**
 * News Categories for the front page
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



<?php
$time = '<span class="time extra-small right">' . str_replace(array('am','pm'),array('a.m.','p.m.'),get_the_date(' F j, Y g:i a')) . '</span>' ;

$include = array( 'Spotlights', 'Press Releases', 'Video', 'In the News' ); // Only display these categories on box labels
$categories = get_the_category();
	$separator = ' | ';
	$output = '';
		if ( ! empty( $categories ) ) {
		    foreach( $categories as $category ) {
			if (in_array($category->cat_name, $include))
			$output .= '<a class="category" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
		}
		    echo trim( $output, $separator );
		    echo $time;
}
?>
	<div class="entry-content archive">
            <?php
                if ( in_category('In the News') ) {
                        the_post_thumbnail( array(200,200, 'class' => ' alignleft') );

			if (get_field('defunct_url')) {

					echo '<a href="' . get_permalink() .'"><h1 class="entry-title"><h1 class="entry-title">' . get_the_title() . '</h1></a>' ;
					
					}

					else echo '<a href="'. get_field('redirect_to_url') . '" target="_blank"><h1 class="entry-title">' . get_the_title() . '</h1></a>' ;
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
					the_title( '<span class="entry-title">', '</span>' );
				} else {
					echo ( '<em>' . get_field('publication_name') . '</em>' );
				}

			if ( 'post' === get_post_type() ) : ?>

			<?php
			endif; ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>

		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit', 'communications-pitzer-college-child' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>

		<a href="<?php the_permalink(); ?>">Permalink</a>

	</footer>
</article>
