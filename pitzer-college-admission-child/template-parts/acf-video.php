			<a href="#" data-reveal-id="myModal">
                            <?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
				} ?></a>

<?php
/* 
acf-video.php
*/
/* Variables */
$video_type = get_field('video_type');
$self_hosted = get_field('self_hosted_video');
$youtube = get_field('youtube');
$vimeo = get_field('vimeo');

// do something with $variables



//		Commented Out testing variables
 	// echo $video_type . $self_hosted . $youtube ; // test that the variables respond
	// var_dump($self_hosted); // dump the values to see what the array can do


        // Self Hosted Video Output 
                if( $video_type  == 'Self Hosted' ):


                echo '<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
						<div class="flex-video widescreen">
							<div class="flex-video widescreen wp-video"><video id="' . $self_hosted["id"] . ' title="' . $self_hosted["title"] . '" alt="' . $self_hosted["alt"] . '" type=' . $self_hosted["mime_type"] .'; codecs="vp8, vorbis" preload controls><source src="' . $self_hosted["url"] . '"/></video></div>
						<a class="close-reveal-modal" aria-label="Close">&#215;</a></div>
						</div>';

        // YouTube Output
                 elseif( $video_type == 'YouTube' ):

                echo '<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
						<div class="flex-video widescreen">
							<iframe src="http://www.youtube.com/embed/' . $youtube . '" frameborder="0" allowfullscreen></iframe>
						<a class="close-reveal-modal" aria-label="Close">&#215;</a></div>
			</div>';


		 elseif( $video_type == 'Vimeo' ):

                echo '<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
						<div class="flex-video widescreen vimeo">
							<iframe src="https://player.vimeo.com/video/' . $vimeo .'" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						<a class="close-reveal-modal" aria-label="Close">&#215;</a></div>
			</div>';

                else :

                // Nothing selected "Do Nothing"

endif;
?>




