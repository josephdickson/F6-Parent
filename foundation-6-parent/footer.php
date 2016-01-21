<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package presidential-transition
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<a href="http://www.pitzer.edu/"><img class="logo center" src="<?php bloginfo('template_directory'); ?>/img/pitzer_logo_sans_colleges_orange.gif" alt="Pitzer College Logo" width="250" height="96" /></a>

			<div class="site-info hide">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'presidential-transition' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'presidential-transition' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'presidential-transition' ), 'presidential-transition', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- .row -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
