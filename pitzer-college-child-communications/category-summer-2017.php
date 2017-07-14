<?php get_header( 'spring-2017' ); ?>

<!-- Row for main content area - category.php -->
	<div class="small-12" role="main">

		<div class="background-top" style="height:641px;width:100%;background-image:url('/wp-content/themes/pitzer-college-child-communications/img/Inauguration_Background_r1_c1.jpg')"></div>

		<div class="cover row" style="margin-top:-641px;">

			<?php
				// Participant Cover
				get_template_part('/participant/participant-plus-wp-query-cover-2017');

			?>

		</div>

		<div class="inauguration">

			<?php	
				// Inauguration
				get_template_part('/participant/summer-2017-inauguration-photos'); 

			?>

			<div class="background-bottom" style="height:553px;width:100%;margin-top:-553px;background-image:url('/wp-content/themes/pitzer-college-child-communications/img/Inauguration_Background_r2_c1.jpg')"></div>

		</div>


		<div class="commencement" style="background-color:#f4f4f4;padding-top:3rem;padding-bottom:3rem;">

			<?php
				// Commencement
				get_template_part('/template-parts/wp-query-2017-commencement'); 

			?>

		</div>


			<div class="spotlights">

				<div class="background-top" style="height:676px;width:100%;background-image:url('/wp-content/themes/pitzer-college-child-communications/img/Around The Mounds Background_r1_c1.jpg')"></div>

					<div style="margin-top: -580px;"></div>
						<?php
							// Around the Mounds
							get_template_part('/participant/participant-plus-wp-query-2017-spotlights'); 
						?>
					


				<div class="background-bottom"></div>

			</div>



			<div class="around-the-mounds" style="margin-top:210px;">

				
					<?php
						// Around the Mounds
						get_template_part('/participant/participant-plus-wp-query-2017-around-the-mounds'); 
					?>

				<div class="background-bottom" style="height:396px;width:100%;margin-top:-200px;background-image:url('/wp-content/themes/pitzer-college-child-communications/img/Around The Mounds Background_r2_c1.jpg');"></div>

			</div>

	</div>

<?php get_footer( 'spring-2017' ); ?>
