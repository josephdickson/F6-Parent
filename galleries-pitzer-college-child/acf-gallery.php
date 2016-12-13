<?php 

$images = get_field('image_gallery');

if( $images ): ?>
    <ul class="small-block-grid-1 large-block-grid-4 small clearing-thumbs" data-clearing>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>" target="_blank">
				<img data-caption="<?php echo $image['caption']; ?>"  src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
		
            </li>
        <?php endforeach; ?>
    </ul>

<?php 
	else: /* do nothing when there is no gallery */ ;
endif; ?>
