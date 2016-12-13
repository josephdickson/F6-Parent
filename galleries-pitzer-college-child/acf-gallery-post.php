<?php

$images = get_field('image_gallery');
$max = 4;
$i = 0;

if( $images ): ?>
    <ul class="small-block-grid-1 large-block-grid-4 clearing-thumbs" data-clearing>
        <?php foreach( $images as $image ): $i++; ?>

            <li>
                <a href="<?php echo $image['url']; ?>" target="_blank">
                     <img data-caption="<?php echo $image['caption']; ?>"  src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </li>

        <?php endforeach; ?>
    </ul>
<?php else echo 'do nothing'; ?>

<?php endif; ?>

<?php echo '</div>'; ?>
