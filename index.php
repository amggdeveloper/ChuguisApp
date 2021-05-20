<?php include 'newsletter.php'?>
<!DOCTYPE html>
<html class="not-ie no-js" lang="es">  

<!--Empieza HEAD-->
<head>

	<!-- Necesidades Básicas de la Página
	================================================== -->
	<meta charset="utf-8">
	<title>ChuguisApp | Inicio</title>
	<meta name="description" content="ChuguisApp--Monitorización y seguimiento de bebés">
	<meta name="author" content="http://amggdeveloper.pythonanywhere.com/">


	<!-- Metas especificos para móviles
	================================================== -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

	
	<!-- Hojas de Estilos. CSS y Fuentes de font-awesome
	=================================================== -->
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="css/fonts/entypo/css/entypo.css">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css" media="screen">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" media="screen">
	<link rel="stylesheet" href="vendor/flexslider/flexslider.css" media="screen">

	<!-- Hojas de Estilos de la Plantilla. CSS-->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/animate.min.css">

  	<!-- Librerias en javascript para el HEAD -->
	<script src="vendor/modernizr.js"></script>	
	
	<!-- Iconos
	================================================== -->
	<link rel="shortcut icon" href="images/icon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
	
</head>
<!--Termina HEAD-->

<!--Empieza BODY-->
<body class="boxed">

	<div class="site-wrapper site-wrapper__boxed">

		<!-- Empieza la Cabecera -->
		<header class="header header-menu-fullw">

			<!-- Empieza Barra de la Cabecera, creamos un include con la cabecera -->
			<?php include 'includes/cabecera.php';?>
			<!-- Termina Barra de la Cabecera-->

			<!--Empieza el Menú-->
			<?php include 'includes/menu.php';?>

			<nav class="nav-main">
				<div class="container">
					<ul data-breakpoint="992" class="flexnav">
						<li class="active"><a href="index.php">Inicio</a></li>
						<li><a href="guias.php">Guías</a></li>
						<li><a href="servicios.php">Servicios</a></li>						
						<li><a href="blog.php">Blog</a></li>
						<li><a href="nosotros.php">Quiénes Somos</a></li>
						<li><a href="contacto.php">Contacto</a></li>
						<li><a href="ayuda.php"><i class="fa fa-question-circle fa-lg"></i></a></li>
					</ul>
				</div>
			</nav>
			<!-- Termina Menú -->
			
		</header>
		<!-- Termina la Cabecera -->

		<!-- SubMenú -->
		<div class="main" role="main">

			<!-- Empieza Carrusel de Imagenes -->
			<section class="slider-holder">
				<div class="container">
					<div class="flexslider carousel">
						<ul class="slides">
							<li>
								<img src="images/samples/bebe1.jpg" alt="bebe1" />
								<div class="flexslider-desc">
									<h1>Monitorización para tu Bebé</h1>
									<a href="blog.php" class="link">Leer Más <i class="fa fa-angle-double-right"></i></a>
								</div>
							</li>
							<li>
								<img src="images/samples/bebe2.jpg" alt="bebe2" />
								<div class="flexslider-desc">
									<h1>Seguimiento para tu Bebé</h1>
									<a href="blog.php" class="link">Leer Más <i class="fa fa-angle-double-right"></i></a>
								</div>
							</li>
							<li>
								<img src="images/samples/bebe4.jpg" alt="bebe4" />
								<div class="flexslider-desc">
									<h1>Novedades de la aplicación</h1>
									<a href="blog.php" class="link">Leer Más <i class="fa fa-angle-double-right"></i></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- Termina Carrusel de Imagenes -->

			<!-- Empieza Contenido de la Página de Inicio -->
			<section class="page-content">
				<div class="container">

					<div class="row">
						<div class="col-md-4">
							<!-- Empieza Cajas de Información 1-->
							<div class="icon-box boxed circled icon-box-color__primary">
								<div class="icon">
									1
								</div>
								<div class="icon-box-body">
									<h2>Monitorización</h2>
									Tener disponible en cada momento el peso, la altura,  la alimentación, las horas de sueño ... de tu bebé en toda su evolución.
								</div>
							</div>
							<!-- Termina Cajas de Información 1 -->
						</div>
						<div class="col-md-4">
							<!-- Empieza Cajas de Información 2-->
							<div class="icon-box boxed circled icon-box-color__secondary">
								<div class="icon">
									2
								</div>
								<div class="icon-box-body">
									<h2>Seguimiento</h2>
									Organizar los pasos con las distintas edades que va a recorrer tu bebé, pudiendo registrar las observaciones de cada etapa.
								</div>
							</div>
							<!-- Termina Cajas de Información 2 -->
						</div>
						<div class="col-md-4">
							<!-- Empieza Cajas de Información 3-->
							<div class="icon-box boxed circled icon-box-color__tertiary">
								<div class="icon">
									3
								</div>
								<div class="icon-box-body">
									<h2>Novedades</h2>
									Enteraté al momento de las últimas novedades que se van añadiendo a la aplicación, con sus ayudas y su forma de utilizarla.
								</div>
							</div>
							<!-- Termina Cajas de Información 3 -->
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<!-- Empieza Caja con Información -->
							<div class="call-to-action call-to-action__no-bg centered">
								<div class="cta-txt">
									<h1 id="bienvenidos">Bienvenidos a nuestro Sitio</h1>
									<p>Si deseas saber información de como utilizar nuestra aplicación o nuestra página web, pincha en el siguiente botón. </p>
								</div>
								<div class="cta-btn">
									<a href="ayuda.php" class="btn btn-primary btn-lg">Ayuda</a>
								</div>
							</div>
							<!-- Termina Caja con Información-->
						</div>
					</div>

					<div class="spacer-lg"></div>

					<!--Empieza Información-->
					<h2 id="info">Información</h2>
					<div class="row">
						<div class="col-xs-6 col-sm-3 col-md-3" data-animation="fadeInLeft" data-animation-delay="0">
							<div class="job-listing-box">
								<figure class="job-listing-img">
									<a href="login.php"><img src="images/samples/login.jpg" alt="imagen login"></a>
								</figure>
								<div class="job-listing-body">
									<div class="name"><a href="nosotros.php">amgg Developer</a></div>
									<p>Para realizar el Login en la Aplicación ChuguisApp</p>
								</div>
								<footer class="job-listing-footer">
									<ul class="meta">
										<li class="category">Info</li>
										<li class="location"><a href="login.php">Login</a></li>
										<li class="date">Subido hace dos días</li>
									</ul>
								</footer>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-3" data-animation="fadeInLeft" data-animation-delay="200">
							<div class="job-listing-box">
								<figure class="job-listing-img">
									<a href="registro.php"><img src="images/samples/registro.jpg" alt="imagen registro"></a>
								</figure>
								<div class="job-listing-body">
									<div class="name"><a href="nosotros.php">amgg Developer</a></div>
									<p>Para realizar el Registro en la Aplicación ChuguisApp</p>
								</div>
								<footer class="job-listing-footer">
									<ul class="meta">
										<li class="category">Info</li>
										<li class="location"><a href="registro.php">Registro</a></li>
										<li class="date">Subido hace dos días</li>
									</ul>
								</footer>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>
						<div class="spacer visible-xs"></div>

						<div class="col-xs-6 col-sm-3 col-md-3" data-animation="fadeInLeft" data-animation-delay="400">
							<div class="job-listing-box">
								<figure class="job-listing-img">
									<a href="guias.php"><img src="images/samples/potito.jpg" alt="imagen calendario comidas"></a>
								</figure>
								<div class="job-listing-body">
									<div class="name"><a href="nosotros.php">amgg Developer</a></div>
									<p>Como utilizar el Calendario para añadir las comidas de tu bebé.</p>
								</div>
								<footer class="job-listing-footer">
									<ul class="meta">
										<li class="category">Calendario</li>
										<li class="location"><a href="guias.php">Comidas</a></li>
										<li class="date">Subido hace dos días</li>
									</ul>
								</footer>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-3" data-animation="fadeInLeft" data-animation-delay="600">
							<div class="job-listing-box">
								<figure class="job-listing-img">
									<a href="guias.php"><img src="images/samples/calendario.jpg" alt="imagen calendario altura"></a>
								</figure>
								<div class="job-listing-body">
									<div class="name"><a href="nosotros.php">amgg Developer</a></div>
									<p>Como utilizar el Calendario para añadir las medidas de tu bebé.</p>
								</div>
								<footer class="job-listing-footer">
									<ul class="meta">
										<li class="category">Calendario</li>
										<li class="location"><a href="guias.php">Altura</a></li>
										<li class="date">Subido hace dos días</li>
									</ul>
								</footer>
							</div>
						</div>
					</div>
					<!--Termina Información-->
					<!--Empieza Recuadros Informativos-->		
					<div class="spacer-xl"></div>

					<div class="row">
						<div class="col-md-4">
							<h2 id="nosotros">Sobre Nosotros</h2>
							<p class="lead">Toda la información sobre el proyecto ChuguisApp</p>
							<p>Aplicación desarrollada para poder llevar un control pormenorizado de la vida diaria de nuestros bebés. </p>
							<p>Con esta aplicación llevaremos la monitorización de aspectos como: el último pecho que se le ofrece al bebé, peso, altura, etc.</p>
							<a href="nosotros.php" class="btn btn-primary">Leer Más</a>
						</div>
						<div class="col-md-4">
							<h2 id="servicios">Nuestros Servicios</h2>
							<p>ChuguisApp ofrece monitorización y seguimiento en:</p>
							<div class="list">
								<ul>
									<li>Última Toma</li>
									<li>Peso</li>
									<li>Altura</li>
									<li>Alimentos Ofrecidos</li>
									<li>Ejercicios</li>
								</ul>
							</div>
							<a href="servicios.php" class="btn btn-primary">Ver Todos los Servicios</a>
						</div>
						<div class="col-md-4">
							<h2 id="consejos">Consejos</h2>
							<ul class="latest-posts-list">
								<li>
									<figure class="thumbnail"><a href="#"><img src="images/samples/cacahuete.jpg" alt=""></a></figure>
									<span class="date">20/04/2021</span>
									<h5 class="title"><a href="#">Receta de Crema de Cacahuete</a></h5>
								</li>
								<li>
									<figure class="thumbnail"><a href="#"><img src="images/samples/yogurt.jpg" alt=""></a></figure>
									<span class="date">21/04/2021</span>
									<h5 class="title"><a href="#">Yogures Naturales con Yogurtera</a></h5>
								</li>
								<li>
									<figure class="thumbnail"><a href="#"><img src="images/samples/librobebe.jpg" alt=""></a></figure>
									<span class="date">22/04/2021</span>
									<h5 class="title"><a href="#">Libros Sensitivos</a></h5>
								</li>
							</ul>
						</div>
					</div>

					<hr class="lg hr__bold">
					<!--Empieza Marcas Testeadas-->
					<?php include 'includes/marcas.php';?>
					<!--Termina Marcas Testeadas-->
				</div>
			</section>
			<!-- Termina Contenidos de la página de inicio -->

			<!-- Empieza Footer -->
			<?php include 'includes/footer.php';?>
			<!-- Termina Footer -->
			
		</div>
		<!-- Termina Main -->
	</div>
		
	<!-- Ficheros Javascript
	================================================== -->
	<script src="vendor/jquery-1.11.0.min.js"></script>
	<script src="vendor/jquery-migrate-1.2.1.min.js"></script>
	<script src="vendor/bootstrap.js"></script>
	<script src="vendor/jquery.flexnav.min.js"></script>
	<script src="vendor/jquery.hoverIntent.minified.js"></script>
	<script src="vendor/jquery.flickrfeed.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendor/jquery.fitvids.js"></script>
	<script src="vendor/jquery.appear.js"></script>
	<script src="vendor/jquery.stellar.min.js"></script>
	<script src="vendor/flexslider/jquery.flexslider-min.js"></script>

	<!-- Formulario Boletin Informativo -->
	<script src="vendor/jquery.validate.js"></script>
	<!--<script src="js/newsletter.js"></script>-->
	<script src="js/custom.js"></script>

	<!--Script para la flecha de subida-->
	<script>
		jQuery(function($){
			$('body').addClass('loading');
		});
		
		$(window).load(function(){
			$('.flexslider').flexslider({
				animation: "fade",
				controlNav: true,
				directionNav: true,
				start: function(slider){
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	
</body>
</html>