<?php
	$custom_walker = new Foundation_Top_Bar_Menu;
		wp_nav_menu( array(
			'theme_location'	=> 'footer_column_3',
			'menu_id'		=> 'footer_column_3',
			'container_class'	=> 'footer-column',
			'menu_class'		=> 'menu vertical',
			'fallback_cb' 		=> 'foundation_menu_fallback', // workaround to show a message to set up a menu
			'items_wrap'     	=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'walker'		=> $custom_walker,
		) );
