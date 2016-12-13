var  tb = $('#top-nav');
    tbs = "top-bar-scrolled";

$(window).scroll(function() {
  if($(this).scrollTop()) {
    tb.addClass(tbs);
  } else {
    tb.removeClass(tbs);
  }
});
