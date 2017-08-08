<?php
if ( 'posts' == get_option( 'show_on_front' ) ) {

    include( get_home_template() );

} else {

	// Display the default page template
	include( get_page_template() );
}

get_footer();
