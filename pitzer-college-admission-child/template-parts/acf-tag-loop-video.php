<?php

// The Query --- Loop in posts by tag and status
$args = array(

	'post_type'	=> 'post',
	'tag'		=> 'webinar', 'video',
	'post_status'	=> array( 'future' , 'publish' ),
	'order'   	=> 'ASC'
);

$the_query = new WP_Query($args); // Assign $args to $the_query as an array

// The Loop -- This will show videos on future and presently published posts 
if ( $the_query->have_posts() ) {
	echo '<div class="row small-up-1 medium-up-2 large-up-3">';
	$counter = 0;
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$counter++;
			echo '<div class="columns new-students-loop">';


	/* Video Modal Variables */
	$video_type = get_field('video_type'); // Radio button selection set's value of 'Self Hosted' 'YouTube' 'Vimeo' 'None'
	$self_hosted = get_field('self_hosted_video'); // uploaded video
	$youtube = get_field('youtube'); // YouTube
	$vimeo = get_field('vimeo'); // Vimeo

				if (isset($video_type)) { ?>
<?php

        // Self Hosted Video Output 
                if( $video_type  == 'Self Hosted' ): ?>

			<a href="#" data-reveal-id="myModal_<?php echo $counter ?>">
                            <?php if ( has_post_thumbnail('large') ) {
				the_post_thumbnail();
				} ?></a>
<?php
                echo '<div id="myModal_' . $counter . '" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
						<div class="flex-video widescreen">
							<div class="flex-video widescreen wp-video"><video id="' . $self_hosted["id"] . ' title="' . $self_hosted["title"] . '" alt="' . $self_hosted["alt"] . '" type=' . $self_hosted["mime_type"] .'; codecs="vp8, vorbis" preload controls><source src="' . $self_hosted["url"] . '"/></video></div>
						<a class="close-reveal-modal" aria-label="Close">&#215;</a></div>
						</div>';
?>

			<a href="#" data-reveal-id="myModal_<?php echo $counter ?>">
                            <?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
				} ?></a>
<?php
        // YouTube Output
                 elseif( $video_type == 'YouTube' ):

                echo '<div id="myModal_' . $counter . '" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
						<div class="flex-video widescreen">
							<iframe src="http://www.youtube.com/embed/' . $youtube . '" frameborder="0" allowfullscreen></iframe>
						<a class="close-reveal-modal" aria-label="Close">&#215;</a></div>
			</div>';


		 elseif( $video_type == 'Vimeo' ): ?>

			<a href="#" data-reveal-id="myModal_<?php echo $counter ?>">
                            <?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
				} ?></a>
<?php

                echo '<div id="myModal_' . $counter . '" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
						<div class="flex-video widescreen vimeo">
							<iframe src="https://player.vimeo.com/video/' . $vimeo .'" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						<a class="close-reveal-modal" aria-label="Close">&#215;</a></div>
			</div>';


		// If no video is selected only the Thumbnail will deploy
                elseif( $video_type == 'None' ): ?>

                			
                            <?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
				} ?>

<?php 
endif;
				} 

			echo '<p><strong>' . get_the_title() . '</strong></p>';
			echo '<p>' . the_content() . '</p>';

					// check to see if the post is future or published and customize the message
					if (get_post_status ( $ID ) == 'future'){  ?>
						<p>This webinar is scheduled for <?php the_time('l, F jS, Y h:i a') ?> Pacific Time.</p>
						<?php }
					else { ?>
						<p>This webinar was recorded on <?php the_time('l, F jS, Y') ?>.</p>
					<?php }

				// if user is logged in provide an edit post option
				if ( is_user_logged_in() ) {
					echo '<p><a href="' . get_edit_post_link() . '">edit post</a></p>';
				} else {
					//do nothing
				}


			echo '</div>';
		}
	echo '</div>';
} else {
	// no posts found
}

/* Restore original Post Data */
wp_reset_postdata();
?>
