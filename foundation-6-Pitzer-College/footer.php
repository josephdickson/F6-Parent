<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package foundation-6-parent
 */

?>

	  <!-- close wrapper, no more content after this -->
	  </div><!-- .row starts in header.php -->  
	</div><!-- .off-canvas-content starts in header.php -->

	<?php get_template_part('template-parts/fat-footer'); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">

			<div class="site-info hide">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'presidential-transition' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'presidential-transition' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'presidential-transition' ), 'presidential-transition', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>

			</div><!-- .site-info -->
		</div><!-- .row -->
	</footer><!-- #colophon -->
       </nav><!-- close nav -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- monsido web governance script-->
<script type="text/javascript">
	var _monsido = _monsido || [];
	_monsido.push(['_setDomainToken', 'KAsr98eG5vIUXKrLshA4OA']);
	_monsido.push(['_withStatistics', 'true']);
</script>
<script src="//cdn.monsido.com/tool/javascripts/monsido.js"></script>
</body>
</html>
