<?php
/*
Template Name: Interactive Map
*/
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); ?></title>

<?php wp_head(); ?>

<style>
body, 
html,
iframe {
	height:100%;
	width: 100%;
	margin: 0;
	padding: 0;
	border: 0;
}
</style>


</head>

<body <?php body_class(); ?>>

<script type="text/javascript">var a=['iPad','iPod','iPhone','Android'];for(var i=0;i<a.length;i++){var p=new RegExp(a[i],'i');if(!!p.test(navigator.userAgent)){document.location='http://www.myatlascms.com/embed.php?id=564';}}</script><iframe src="http://www.myatlascms.com/embed.php?id=564" width="100%" height="100%" frameBorder="0" scrolling="no" border="0" style="border:0px solid #fff; margin:0; padding:0;"><p>Your browser does not support iframes.</p></iframe>

<?php wp_footer(); ?>
</body>
</html>
