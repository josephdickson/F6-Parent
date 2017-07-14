<?php 

$images = get_field('image_gallery');

if( $images ):

/*
 echo '<pre>'; print_r($images); echo '</pre>';

$a = 0;

end($images);         // move the internal pointer to the end of the array
$key = key($images);  // fetches the key of the element pointed to by the internal pointer

var_dump($key);
*/
?>
    <h1 class="entry-title">Photo Gallery</h1>

    <div class="row small-up-2 medium-up-3 large-up-8">

        <?php foreach( $images as $image ): ?>

            <div class="column">

                <a data-open="<?php echo 'reveal' . $a; ?>"  alt="<?php echo $image['alt']; ?>">

                     <img data-caption="<?php echo $image['caption']; ?>"  src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" style="margin-bottom:1.875rem;" />

                </a>

                <div class="reveal small" id="<?php echo 'reveal' . $a; ?>" aria-labelledby="<?php echo 'reveal' . $image['ID'] .'Header' ?>" data-reveal>

                    <h1 id="<?php echo 'reveal' . $image['ID'] .'Header' ?>"><?php echo $image['title']; ?></h1>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                    <figcaption><?php echo $image['caption']; ?></figcaption>

			<?php $a--; ?>
			<a data-open="<?php echo 'reveal' . $a; ?>"  alt="<?php echo $image['alt']; ?>">

		             previous

			</a>

			<?php $a++ . $a++ ; ?>
			<a data-open="<?php echo 'reveal' . $a; ?>"  alt="<?php echo $image['alt']; ?>">

				next
				<?php
				if($image === end($images) ) {
					echo "<span>last found</span>";
				  }
				?>

		        </a>

                        <button class="close-button" data-close aria-label="Close reveal" type="button">

                            <span aria-hidden="true">&times;</span>

                        </button>
                </div>

            </div>

        <?php endforeach; ?>
    </div>
<?php endif; ?>
