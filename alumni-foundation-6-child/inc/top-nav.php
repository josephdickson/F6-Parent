<div class="off-canvas-wrapper">
  <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
    <!-- off-canvas title bar for 'small' screen -->
    <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="medium">
      <div class="title-bar-left">
        <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
        <span class="title-bar-title">Menu</span>
      </div>
      <div class="title-bar-right">
        <span class="title-bar-title">Quicklinks</span>
        <button class="menu-icon" type="button" data-open="offCanvasRight"></button>

      </div>
    </div>

    <!-- off-canvas left menu -->
    <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
	<?php get_template_part('inc/primary-menu-walker') ?>
	<?php get_template_part('inc/secondary-menu-walker') ?>
    </div>

    <!-- off-canvas right menu -->
    <div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
	<?php get_template_part('inc/quicklinks-mobile-menu-walker') ?>
    </div>

    <!-- "wider" top-bar menu for 'medium' and up -->
    <div id="widemenu" class="top-bar show-for-medium">
      <div class="top-bar-left">
       	<?php get_template_part('inc/primary-menu-walker') ?>
      </div>

      <div class="top-bar-right">
	<?php get_template_part('inc/secondary-menu-walker') ?>
      </div>
    </div>
