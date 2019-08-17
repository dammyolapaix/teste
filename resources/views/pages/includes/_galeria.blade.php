
<html>
  <head>
  <title>VLT Advogados</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}" />

    <style type="text/css">
	    .slider {
	        width: 95%;
	        margin: 0 auto;
	    }

	    .slick-slide {
	      margin: 0px 5px;
	    }

	    .slick-slide img {
	      width: 100%;
	    }

	    .slick-prev:before,
	    .slick-next:before {
	      color: black;
	    }


	    .slick-slide {
	      transition: all ease-in-out .3s;
	      opacity: .2;
	    }
	    
	    .slick-active {
	      opacity: .5;
	    }

	    .slick-current {
	      opacity: 1;
	    }
  	</style>

  </head>
  <body>

    <section class="regular slider">
    <div>
      <img src="http://placehold.it/350x300?text=1">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=2">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=3">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=4">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=5">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=6">
    </div>
  </section>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>

   <script type="text/javascript">
	    $(document).on('ready', function() {
	     
	      $(".regular").slick({
	        dots: true,
	        infinite: true,
	        slidesToShow: 3,
	        slidesToScroll: 3
	      });
	    });
	</script>

  </body>
</html>
