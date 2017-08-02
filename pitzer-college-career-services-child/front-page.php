<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package presidential-transition
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div id="content">
				<div class="small-12 large-4 columns small">

                    <a href="https://pitzer.joinhandshake.com/login" target="_blank"><img class="claremont-connect" src="<?php echo wp_get_attachment_url( 900 ); ?>" alt="Claremont Connect"></a>
                    <a class="small button flat radius expanded" href="https://pitzer.joinhandshake.com/login" />Student Login</a>


			<div class="callout radius white">
				<?php get_template_part( 'template-parts/career-services-menu-loop' ); ?>
			</div>

			<div class="callout radius white">
				<?php wp_nav_menu( array(
					'menu' => 'Employers',
					'items_wrap' => '<ul id="%1$s" class="no-bullet %2$s">%3$s</ul>',
					'depth' => 0,
				)); ?>
            </div>
                
    		<div class="callout radius white">
				<?php wp_nav_menu( array(
					'menu' => 'Faculty & Staff',
					'items_wrap' => '<ul id="%1$s" class="no-bullet %2$s">%3$s</ul>',
					'depth' => 0,
				)); ?>
		</div>

		<div class="callout radius white">
			<?php get_template_part('template-parts/report'); // Career Services Impact Report ?>
		</div>

        <strong>Follow Career Services</strong>
        <?php get_template_part( 'acf/social-networks' ); ?>
		</div>
        <div class="small-12 large-8 columns small">
            <?php echo do_shortcode("[flexvimeo number=180804359]"); ?>
            
<div class="small-12 large-6 columns small">
			<div class="callout radius white">
				<?php wp_nav_menu( array(
					'menu' => 'Students',
					'items_wrap' => '<ul id="%1$s" class="no-bullet %2$s">%3$s</ul>',
					'depth' => 0,
				)); ?>
			</div>

			<div class="callout radius white">
				<?php wp_nav_menu( array(
					'menu' => 'Alumni & Parents',
					'items_wrap' => '<ul id="%1$s" class="no-bullet %2$s">%3$s</ul>',
					'depth' => 0,
				)); ?>
			</div>

</div>

		<div class="small-12 large-6 columns small">

            <a class="twitter-timeline"  href="https://twitter.com/PitzerCareer" data-widget-id="689857280141955072">Tweets by @PitzerCareer</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		</div>
		</main><!-- #main -->
	   </div>
    </div><!-- #content -->
</div><!-- #primary -->
<?php
// get_sidebar();
get_footer();
