<?php 

$images = get_field('core_values_gallery');

if( $images ): ?>
    <ul class="small-block-grid-1 clearing-thumbs" data-clearing>
        <?php foreach( $images as $image ): ?>
            <li style="padding-left:0;">
                <a style="padding:0;margin:0;" href="<?php echo $image['url']; ?>" target="_blank">
                     <img style="padding:0;margin:0;" data-caption="<?php echo $image['caption']; ?>"  src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <figcaption><?php echo $image['caption']; ?></figcaption>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
