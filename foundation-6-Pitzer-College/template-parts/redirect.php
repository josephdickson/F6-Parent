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
