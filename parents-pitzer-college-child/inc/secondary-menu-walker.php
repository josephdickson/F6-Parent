<?php
	$custom_walker = new Foundation_Top_Bar_Menu;
		wp_nav_menu( array(
			'theme_location'	=> 'secondary',
			'menu_id'		=> 'secondary-menu',
			'container_class'	=> 'top-bar-right',
			'menu_class'		=> 'vertical dropdown menu',
			'fallback_cb' 		=> 'foundation_menu_fallback', // workaround to show a message to set up a menu
			'items_wrap'     	=> '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
			'walker'		=> $custom_walker,
		) );
