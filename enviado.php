<?php
	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['nombre'];

	if($varsesion == null || $varsesion = ''){
		echo 'Usted no tiene autorizacion';
        header("Refresh:3; url=index.php");
		die();
	}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="google-site-verification" content="chjjmMO5P0fEo63SPIxtxmFJdzI3wq-7zEWF4oGcM80" />
<title>Yohan Roldan</title>

<!-- For-Mobile-Apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Yohan Roldan Web, Desarrollo Web, PHP, Fotografía, Yohan Roldan" />
	<META HTTP-EQUIV="REFRESH" CONTENT="3; URL=index.php">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->

<!-- Custom-Theme-Files -->
	<!-- Bootstrap-Core-CSS --> <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Style.CSS --> <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-Carousel-CSS --> <link href="css/owl.carousel.css" rel="stylesheet">
	<!-- Swipe-Box-CSS --> <link rel="stylesheet" href="css/swipebox.css">
	<!-- Animate-CSS --> <link href="css/animate.min.css" rel="stylesheet">
<!-- //Custom-Theme-Files -->

<script>
	$(function() {
		$(".meter > span").each(function() {
			$(this)
			.data("origWidth", $(this).width())
			.width(0)
			.animate({

				width: $(this).data("origWidth")
			}, 1200);
		});
	});
</script>

<!-- Web-Fonts -->
	<link href='//fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<!-- //Web-Fonts -->
<meta name="google-site-verification" content="_FyjKrVPw6pr6ZCtmO1AyOe7eMtt8zxAI4rPfnv_wQE" />
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>
</head>
<body>
	<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">

<!--<script language='JavaScript'>window.open('http://www.chenico.com', 'geoflotante', '');</script>-->    <!--abrir de una vez otra pestaña-->

	<!-- Content -->
	<div class="content">
		<!-- Features -->
		<div class="features" id="trabajos">
			<div class="container">
				<h1>Mensaje Enviado</h1>
				<div class="heading-underline"></div>
				
				<?php
				
					echo '<h2>Mensaje enviado correctamente</h2>';
					echo "<br>";
					echo '<h5>Nombre:  ';
					echo $_SESSION['nombre'];
					echo '</h5>';
					echo '<h5>Correo:  ';
					echo $_SESSION['correo'];
					echo '</h5>';
					echo '<h5>Teléfono:  ';
					echo $_SESSION['telefono'];
					echo '</h5>';
					echo '<h5>Mensaje:  ';
					echo $_SESSION['mensaje'];
					echo '</h5><br><br><br>';

					echo '<h4>Por favor,espere...</h4>';

					echo '</h5><br><br><br>';

				?>

				</div>
			</div>
        </div>
        <!-- Features -->
	</div>
	<!-- //Content -->

	<!-- Footer -->
	<div class="footer">
		<div class="container">

			<div class="footer-info slideanim">
				<div class="col-md-3 col-sm-3 footer-info-grid links">
					<h4>ENLACES RÁPIDOS</h4>
					<ul>
						<li><a href="#biografia">Biografía</a></li>
						<li><a href="#trabajos">Trabajos</a></li>
						<li><a href="#portafolio">Portafolio</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 footer-info-grid services">
					<h4>PORTAFOLIO</h4>
					<ul>
						<li>Desarrollo Web</li>
						<li>Desarrollo Android</li>
						<li>Fotografía</li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 footer-info-grid address">
					<h4>CONTACTO</h4>
					<address>
						<ul>
							<li>Facatativá, Colombia</li>
							<li>Celular:(+57) 300 527 5028</li>
						</ul>
						<p>Email:<a class="mail" href="contrato@yohanroldan.eshost.com.ar">contrato@yohanroldan.eshost.com.ar</a></p>
					</address>
				</div>
				<!--<div class="col-md-3 col-sm-3 footer-info-grid email">
					<h4>NEWSLETTER</h4>
					<p>Subscribe to our newsletter and we will inform you about newest projects and promotions.
					</p>

					<form class="newsletter">
						<input class="email" type="email" placeholder="Your email...">
						<input type="submit" class="submit" value="">
					</form>
				</div>-->
				<div class="clearfix"></div>
			</div>

			<div class="copyright slideanim">
				<p>&copy; <w id="fecha"></w>. Todos los derechos reservados | Desarrollado por <a href="https://www.facebook.com/Johan.Sebastian.Roldan"> Yohan Roldan </a></p>
			</div>

		</div> 
	</div>
	<!-- //Footer -->

<!-- Custom-JavaScript-File-Links -->
	<!-- Supportive-JavaScript --> <script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap --> <script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!-- Slideanim-JavaScript -->

	<!--JavaScript Fecha automatica-->
	<script type="text/javascript">
		var ano = (new Date).getFullYear();
	$(document).ready(function() {
	  $("#fecha").text( ano );
	});
	</script>
	<!--JavaScript Fecha automatica-->

	<script type="text/javascript">
		$(window).scroll(function() {
	 		$(".slideanim").each(function(){
				var pos = $(this).offset().top;
				var winTop = $(window).scrollTop();
					if (pos < winTop + 600) {
					$(this).addClass("slide");
				}
			});
		});
	</script>
	<!-- //Slideanim-JavaScript -->

	<!-- Gallery-Tab-JavaScript -->
	<script src="js/cbpFWTabs.js"></script>
	<script>
		(function() {
			[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
				new CBPFWTabs( el );
			});
		})();
	</script>
	<!-- //Gallery-Tab-JavaScript -->

	<!-- Swipe-Box-JavaScript -->
		<script src="js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
				jQuery(function($) {
					$(".swipebox").swipebox();
				});
		</script>
	<!-- //Swipe-Box-JavaScript -->

	<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 8,
				lazyLoad : true,
				autoPlay : true,
				speed: 900,
				pagination : false,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->

	<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
	<script type="text/javascript">
		$(document).ready(function() {
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 100,
				easingType: 'linear'
			};
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
	<!-- //Slide-To-Top JavaScript -->

	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll, .navbar li a, .footer li a").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->

	<!-- Skills-Animation-JavaScript -->
	<script type="text/javascript" src="js/jquery.inview.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/mousescroll.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<!-- //Skills-Animation-JavaScript -->

	<script type="text/javascript" src="js/numscroller-1.0.js"></script>

<!-- //Custom-JavaScript-File-Links -->

<!-- Images are for reference and illustration puropse only. Images were taken from https://pixabay.com and icons were taken from www.flaticon.com and Portfolio section images were the sceenshots of templates by http://w3layouts.com -->
<!-- Flaticon Links:
	Icons made by "http://www.freepik.com" from "http://www.flaticon.com" is licensed by "http://creativecommons.org/licenses/by/3.0/" CC 3.0. BY
-->

</body>
</html>