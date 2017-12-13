<!-- Row for main content area - category-summer.php -->
	<div class="small-12 post-footer-fall-2017" role="main" style="border-top:3px solid #f7941d;">

		<div class="background-top" style="width:100%;background-image:url('/communications/wp-content/uploads/sites/17/2017/12/2017-Participant-Fall-cover-for-background.jpg');">

		<div class="cover row">

			<?php
				// Participant Cover
				get_template_part('/participant/participant-plus-wp-query-cover-fall-2017');

			?>

		</div>

				<div class="row small-up-1 medium-up-2 large-up-3">

					<?php
						// Convocation
						get_template_part('/participant/participant-plus-wp-query-convocation');

					?>

					<?php
						// Field Notes
						get_template_part('/participant/participant-plus-wp-query-2017-field-notes');
					?>

					<?php
						// Radiant Nature
						get_template_part('/participant/participant-plus-wp-query-2017-radiant-nature');

					?>

				</div>

		<div class="mcsi">

			<?php
				// MCSI Series wp_query
				get_template_part('/participant/wp-query-2017-fall-mcsi');

			?>

		</div>

	</div>

</div><!-- .background-top -->
