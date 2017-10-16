<?php
/*
Template Name: Timeline
*/
get_header('timeline'); ?>
<style>
iframe {padding: 0; margin: 0;}
body, html {height: 100%;}
</style>
<iframe frameborder="0" style="border-width:0;" id="tl-timeline-iframe"  width="100%" height="100%" src="http://www.tiki-toki.com/timeline/embed/185970/8029870865/"></iframe>
<script type="text/javascript">
if (window.postMessage) {
var tlMouseupFunc = function() {
var tlFrame = document.getElementById("tl-timeline-iframe");
if (tlFrame.contentWindow && tlFrame.contentWindow.postMessage) {
tlFrame.contentWindow.postMessage("mouseup","*");
}
}
if (typeof window.addEventListener != "undefined") {
window.addEventListener("mouseup", tlMouseupFunc, false);
}
else if (typeof window.attachEvent != "undefined") {
window.attachEvent("onmouseup", tlMouseupFunc);
}
}
</script>
<style>
h5.tl-ch-panel-date-display {display:none !important;}
</style>
<?php get_footer('timeline'); ?>