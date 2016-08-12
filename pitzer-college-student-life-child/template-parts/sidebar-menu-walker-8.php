<?php 
	$custom_walker = new Foundation_Quicklinks_Mobile;
		wp_nav_menu( array(
			'theme_location'	=> 'foundation-6-sidebar-8',
			'menu_id'		=> 'sidebar-menu',
			'container_class'	=> 'sidebar-menu',
			'menu_class'		=> 'vertical menu',
			'fallback_cb' 		=> 'foundation_menu_fallback', // workaround to show a message to set up a menu
			'items_wrap'     	=> '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
			'walker'		=> $custom_walker,
		) );
