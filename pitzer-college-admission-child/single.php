<?php 

$post = $wp_query->post;

			if ( has_tag( 'webinar' ))
			{
				get_header();
				get_template_part('single-webinar');
			}

			else {
				get_header();
				get_template_part('single-default');
			}



?>
