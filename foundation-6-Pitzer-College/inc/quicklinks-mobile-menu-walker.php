<?php
		// Walker for Quicklinks
	$custom_walker_mobile = new Foundation_Quicklinks_Mobile;
		wp_nav_menu( array(
			'theme_location'	=> 'quicklinks',
			'menu_id'		=> 'quicklinks-mobile',
			'container_class'	=> 'quicklinks',
			'depth'			=> 2,
			'fallback_cb' 		=> 'foundation_menu_fallback', // workaround to show a message to set up a menu
			'items_wrap'     	=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'walker'		=> $custom_walker_mobile,
		) );
