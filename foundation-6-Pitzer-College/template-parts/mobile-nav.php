<div class="off-canvas-wrapper">
  <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
    <!-- off-canvas title bar for 'small' screen -->
    <div class="title-bar hide-for-medium" data-responsive-toggle="widemenu" data-hide-for="medium">
      <div class="title-bar-left">
        <button class="menu-icon" type="button" data-open="offCanvasLeft"><span>Menu</span></button>
        <span class="title-bar-title">Menu</span>
      </div>
      <div class="title-bar-right">
        <span class="title-bar-title">Quicklinks</span>
        <button class="menu-icon" type="button" data-open="offCanvasRight"><span>Quicklinks</span></button>

      </div>
    </div>

    <!-- off-canvas left menu -->
    <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
	<?php get_template_part('template-parts/primary-menu-walker') ?>
	<?php get_template_part('template-parts/secondary-menu-walker') ?>
    </div>

    <!-- off-canvas right menu -->
	<div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">

		<?php get_template_part('template-parts/quicklinks-mobile-menu-walker') ?>

		<div class="search-mobile">

		    <?php echo do_shortcode( '[wp_google_searchbox]' ); ?>

		</div>    

	</div>
