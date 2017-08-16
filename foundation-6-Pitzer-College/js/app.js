function sidebarMenu( jQuery ) {
	// Check that foundation is ready
	$(document).foundation();
	
	// Adds display block to active Sidebar accordion so it loads open
	$(".active").parent().css("display", "block");
    
	// displays quicklinks sub menus set to display:none in app.css to avoid loading glitch
	$(".top-bar-quicklinks .menu-item-has-children li").css("display", "block"); 
    
	// displays sidebar sub menus set to display:none in app.css to avoid loading glitch
	$("ul#sidebar-menu .menu-item-has-children li").css("display", "block"); 
    
	// remove class of active if the menu item is located in the same site as the menu
	$( "#quicklinks-menu .is-dropdown-submenu-parent" ).removeClass( "active" );
	//   $( "#quicklinks-menu .submenu.menu.vertical.is-dropdown-submenu.first-sub").css("display", "none");
};

$( document ).ready( sidebarMenu );
