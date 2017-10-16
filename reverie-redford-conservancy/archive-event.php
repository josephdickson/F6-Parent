<?php
// Customized form the plugin - jd

/**
 * The template for displaying lists of events
 *
 * Queries to do with events will default to this template if a more appropriate template cannot be found
 *
 ***************** NOTICE: *****************
 *  Do not make changes to this file. Any changes made to this file
 * will be overwritten if the plug-in is updated.
 *
 * To overwrite this template with your own, make a copy of it (with the same name)
 * in your theme directory. 
 *
 * WordPress will automatically prioritise the template in your theme directory.
 ***************** NOTICE: *****************
 *
 * @package Event Organiser (plug-in)
 * @since 1.0.0
 */

//Call the template header
get_header(); ?>
<!-- Row for main content area - archive-event.php -->
	<div class="small-12 columns">
		
	<div class="small-12 large-6 columns" role="main">
		<!-- Page header-->
		<header class="page-header small">
			<?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
		</header>


			<h1 class="page-title">
			<?php
				if( eo_is_event_archive('day') )
					//Viewing date archive
					echo __('Events: ','eventorganiser').' '.eo_get_event_archive_date('jS F Y');
				elseif( eo_is_event_archive('month') )
					//Viewing month archive
					echo __('Events: ','eventorganiser').' '.eo_get_event_archive_date('F Y');
				elseif( eo_is_event_archive('year') )
					//Viewing year archive
					echo __('Events: ','eventorganiser').' '.eo_get_event_archive_date('Y');
				else
					_e('Events','eventorganiser');
			?>
			</h1>


		<?php if ( have_posts() ) : ?>

			<!-- Navigate between pages-->
			<!-- In TwentyEleven theme this is done by twentyeleven_content_nav-->
			<?php 
			global $wp_query;
			if ( $wp_query->max_num_pages > 1 ) : ?>
				<nav id="nav-above">
					<div class="nav-next events-nav-newer"><?php next_posts_link( __( 'Later events <span class="meta-nav">&rarr;</span>' , 'eventorganiser' ) ); ?></div>
					<div class="nav-previous events-nav-newer"><?php previous_posts_link( __( ' <span class="meta-nav">&larr;</span> Newer events', 'eventorganiser' ) ); ?></div>
				</nav><!-- #nav-above -->
			<?php endif; ?>

			<?php /* Start the Loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">

				<div class="event-entry-meta">

			<!-- Output the date of the occurrence-->
					<?php
						//Format date/time according to whether its an all day event.
						//Use microdata http://support.google.com/webmasters/bin/answer.py?hl=en&answer=176035
 						if( eo_is_all_day() ){
							$format = 'l, F d, Y';
							$microformat = 'Y-m-d';
						}else{
							$format = 'l, F d, Y '.get_option('time_format');
							$microformat = 'c';
						}?>
						<time class="small" itemprop="startDate" datetime="<?php eo_the_start($microformat); ?>"><?php eo_the_start($format); ?></time><br />

				<h1 class="event-organizer entry-title" style="display: block;">			
				<?php
					//If it has one, display the thumbnail
					the_post_thumbnail('thumbnail', array('style'=>'float:left;margin-right:20px;'));
				?>
				<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
				</h1>

				</div><!-- .event-entry-meta -->			
		
				<div style="clear:both;"></div>
				</header><!-- .entry-header -->

			</article><!-- #post-<?php the_ID(); ?> -->


    		<?php endwhile; ?><!--The Loop ends-->

		<!-- Navigate between pages-->
		<?php 
			if ( $wp_query->max_num_pages > 1 ) : ?>
				<nav id="nav-below">
					<div class="nav-next events-nav-newer"><?php next_posts_link( __( 'Later events <span class="meta-nav">&rarr;</span>' , 'eventorganiser' ) ); ?></div>
					<div class="nav-previous events-nav-newer"><?php previous_posts_link( __( ' <span class="meta-nav">&larr;</span> Newer events', 'eventorganiser' ) ); ?></div>
				</nav><!-- #nav-below -->
			<?php endif; ?>

		<?php else : ?>
			<!-- If there are no events -->
			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'eventorganiser' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found for the requested archive. ', 'eventorganiser' ); ?></p>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

			<?php endif; ?>

			</div>

        <div class="small-12 large-3 small columns">
			<p><?php echo do_shortcode('[eo_calendar]'); ?></p>
        </div>
            
		<div class="small-12 large-3 columns menu small light-gray">
                    <?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => '')); ?>
					<?php dynamic_sidebar("Sidebar-subnav"); ?>
        </div>
</div>
<!-- Call template sidebar and footer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
