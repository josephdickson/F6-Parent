<?php get_header(); ?>

<div class="row">

	<div class="archive small-12 large-9 columns" role="main">

		<h1 class="page-title">Newsroom</h1>

		<?php get_template_part('template-parts/wp-query-front-page'); ?>

	</div><!-- end .archive.small-12.large-9.columns -->

	<div class="small-12 large-3 columns">

		 <?php get_template_part('template-parts/sidebar-menu-walker') ?>
		 
	</div>

</div><!-- .row -->

<div class="row">

	<div class="large-7 large-centered">

		<?php get_template_part( 'template-parts/pagination' ); ?>

	</div>

</div>

<?php get_footer(); ?>
