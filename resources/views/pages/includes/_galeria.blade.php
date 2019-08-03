<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>flipLightBox Multi Image Demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<style type="text/css">
	body { text-align: center; } 
	img { margin: 1px; } 
	a { text-decoration: none; }
</style>

</head>
<body>


	<a href="{{ asset('img/galeria/office-820390_1920.jpg') }}" class="flipLightBox">
	<img src="{{ asset('img/galeria/office-820390_1920.jpg') }}" width="30%" height="225" alt="flipLightBox Image 1" />
	<span><b>VLT Advogados</b> Escritório de Advocacia em Pouso Alegre</span>
	</a>

	<a href="{{ asset('img/galeria/macbook-336704_1920.jpg') }}" class="flipLightBox">
	<img src="{{ asset('img/galeria/macbook-336704_1920.jpg') }}" width="30%" height="225" alt="flipLightBox Image 2" />
	<span><b>VLT Advogados</b><br /> Escritório de Advocacia em Pouso Alegre</span>
	</a>

	<a href="{{ asset('img/galeria/office-1081807_1920.jpg') }}" class="flipLightBox">
	<img src="{{ asset('img/galeria/office-1081807_1920.jpg') }}" width="30%" height="225" alt="flipLightBox Image 3" />
	<span><b>VLT Advogados</b> Escritório de Advocacia em Pouso Alegre</span>
	</a>

	<a href="{{ asset('img/galeria/business-3152586_1920.jpg') }}" class="flipLightBox">
	<img src="{{ asset('img/galeria/business-3152586_1920.jpg') }}" width="30%" height="225" alt="flipLightBox Image 4" />
	<span><b>The Final LightBox</b> Escritório de Advocacia em Pouso Alegre</span>
	</a>

	<a href="{{ asset('img/galeria/laptop-3196481_1920.jpg') }}" class="flipLightBox">
	<img src="{{ asset('img/galeria/laptop-3196481_1920.jpg') }}" width="30%" height="225" alt="flipLightBox Image 5" />
	<span><b>The Final LightBox</b> Escritório de Advocacia em Pouso Alegre</span>
	</a>

	<a href="{{ asset('img/galeria/office-730681_1920.jpg') }}" class="flipLightBox">
	<img src="{{ asset('img/galeria/office-730681_1920.jpg') }}" width="30%" height="225" alt="flipLightBox Image 6" />
	<span><b>The Final LightBox</b> Escritório de Advocacia em Pouso Alegre</span>
	</a>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/fliplightbox.min.js') }}"></script>
	<script type="text/javascript">$('body').flipLightBox()</script>

</body>
</html>
