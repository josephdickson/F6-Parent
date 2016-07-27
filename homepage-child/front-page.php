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
<!-- Row for main content area - post-redirect.php -->
<?php 
	$redirect = get_field('redirect_to_url');

?>

<script type="text/javascript">
<!--
window.location = "<?php echo $redirect; ?>"
-->
</script>

<p>If not automatically redirected please <a href="<?php the_field('redirect_to_url'); ?>">click here</a>.</p>
<?php
// get_sidebar();
get_footer();
