<?php
function new_excerpt_more( $more ) {
	return '...read more';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>
