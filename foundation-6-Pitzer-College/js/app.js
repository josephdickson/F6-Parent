jQuery(document).ready(function(){
	$(document).foundation();
	// Adds display block to active Sidebar accordion so it loads open
	$(".active").parent().css("display", "block");
    
    // displays quicklinks sub menus set to display:none in app.css to avoid loading glitch
    $(".top-bar-quicklinks .menu-item-has-children li").css("display", "block"); 
    
    // displays sidebar sub menus set to display:none in app.css to avoid loading glitch
    $("ul#sidebar-menu .menu-item-has-children li").css("display", "block"); 
    
    // displays Google search box set to display none in app.css to avoid loading glitch
    $(".input-group").css("display", "block");
});
