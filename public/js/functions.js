


// scroll suave

$(function() {

	$('a[href*="#"]:not([href="#"])').click(function() {
	  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	    var target = $(this.hash);
	    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	    if (target.length) {
	      $('html, body').animate({
	        scrollTop: target.offset().top
	      }, 700);      
	      return false;
	    }
	  }
	})

})


/////////////////////////////////////////

/// chevron to top

$(function() {

  $(".chevron").hide();

  $(window).scroll(function() {

    if ($(this).scrollTop() > 420) {

      $(".chevron").fadeIn(500);
    }
    else {

      $(".chevron").hide();
    }
  })

})










	
