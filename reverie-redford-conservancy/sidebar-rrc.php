<aside id="sidebar" class="rrc-menu">

	 <?php 
	 
	 $defaults = array(
	'theme_location'  => '',
	'menu'            => '2',
	'container'       => false,
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => 'RRC_Side_Menu',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul class="side-nav">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );
	 
	 ?> 

</aside><!-- /#sidebar -->