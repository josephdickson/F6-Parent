<?php
/*
Template Name: Interactive Map
*/
get_header('map'); ?>
<style>
div.pitzer-map-container {
	height:100%;
	}
</style>

<script type="text/javascript">var a=['iPad','iPod','iPhone','Android'];for(var i=0;i<a.length;i++){var p=new RegExp(a[i],'i');if(!!p.test(navigator.userAgent)){document.location='http://www.myatlascms.com/embed.php?id=564';}}</script><iframe width="100%" height="100%" src="http://www.myatlascms.com/embed.php?id=564" frameBorder="0" scrolling="no" border="0" style="border:0px solid #fff; margin:0; padding:0;"><p>Your browser does not support iframes.</p></iframe>


<?php get_footer('map'); ?>