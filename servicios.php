<!DOCTYPE html>
<html class="not-ie no-js" lang="es"> 
<!--Empieza HEAD-->
<head>

	<!-- Necesidades Básicas de la Página
	================================================== -->
	<meta charset="utf-8">
	<title>ChuguisApp | Servicios</title>
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
						<li><a href="index.php">Inicio</a></li>
						<li><a href="guias.php">Guías</a></li>
						<li class="active"><a href="servicios.php">Servicios</a></li>						
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

		<!-- Main -->
		<div class="main" role="main">

			<!-- Empieza Breadcrumbs -->
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h1>Services</h1>
						</div>
						<div class="col-md-6">
							<ul class="breadcrumb">
								<li><a href="index.php"><i class="fa fa-home"></i></a></li>								
								<li class="active">Servicios</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- Termina Breadcrumbs-->

			<!-- Empieza Contenidos de la Página -->
			<section class="page-content">
				<div class="container">

					<div class="row">
						<div class="col-md-4">
							<!-- Empieza Caja informativa con iconos -->
							<div class="icon-box circled icon-box-color__primary">
								<div class="icon">
									<i class="fa fa-shield fa-3x"></i>
								</div>
								<div class="icon-box-body">
									<h3>Calendario de Vacunación</h3>
									Calendario con todas las vacunas que actualmente están recomendadas y obligadas por la mayoría de los pediatras.
								</div>
							</div>							
						</div>

						<div class="col-md-4">							
							<div class="icon-box circled icon-box-color__secondary">
								<div class="icon">
									<i class="fa fa-stethoscope fa-3x"></i>
								</div>
								<div class="icon-box-body">
									<h3>Calendario citas médicas</h3>
									Calendario con todas la citas médicas en un solo lugar para poder verlas de un vistazo.
								</div>
							</div>							
						</div>

						<div class="col-md-4">							
							<div class="icon-box circled icon-box-color__tertiary">
								<div class="icon">
									<i class="fa fa-location-arrow fa-3x"></i>
								</div>
								<div class="icon-box-body">
									<h3>Monitorización</h3>
									Podrás monitorizar todos los aspectos de tu bebé en un único lugar, de manera organizada y clara.
								</div>
							</div>							
						</div>
					</div>

					<div class="spacer"></div>

					<div class="row">
						<div class="col-md-4">						
							<div class="icon-box circled icon-box-color__quaternary">
								<div class="icon">
									<i class="fa fa-file-text-o fa-3x"></i>
								</div>
								<div class="icon-box-body">
									<h3>Datos Unificados</h3>
									Tendremos la posibilidad de tener todos los datos de nuestro bebé unificado, viendo toda la información en un único lugar.
								</div>
							</div>						
						</div>

						<div class="col-md-4">							
							<div class="icon-box circled icon-box-color__primary">
								<div class="icon">
									<i class="fa fa-check-circle fa-3x"></i>
								</div>
								<div class="icon-box-body">
									<h3>Seguimiento de Tareas</h3>
									Ofrecemos un lugar en donde llevar un seguimiento pormenorizado de la vida diaria de nuestro bebé, por ejemplo, la información de la última toma que le hemos dado.
								</div>
							</div>							
						</div>

						<div class="col-md-4">							
							<div class="icon-box circled icon-box-color__senary">
								<div class="icon">
									<i class="fa fa-lightbulb-o fa-3x"></i>
								</div>
								<div class="icon-box-body">
									<h3>Consejos</h3>
									Ofrecemos unas guías de productos testeados por nuestro equipo, en el cual se informa de los distintos productos que se pueden utilizar con nuestro bebé.
								</div>
							</div>						
						</div>
					</div>
					<!--Termina Caja informativa con iconos -->
					<hr class="hr__bold lg">
					<!--Empieza Caja Opiniones-->
					<h2>¿Qué Dicen Nuestros Clientes?</h2>
					<div class="row">
						<div class="col-md-4">
							<div class="testimonial">
								<blockquote>
									<p>Aplicación que me ha ayudado a tener en un único sitio todo lo relacionado con mi bebé. Actualmente lleve la monitorización y el seguimiento, y es muy útil. Recomendada totalmente. </p>
								</blockquote>
								<div class="bq-author">
									<figure class="author-img">
										<img src="images/samples/cliente1.jpg" alt="cliente uno">
									</figure>
									<h6>Isabel Martínez</h6>
									<span class="bq-author-info">Usuaria desde hace 5 meses.</span>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimonial">
								<blockquote>
									<p>Si quieres un sitio en donde tener todo centralizado, ChuguisApp es la aplicación que necesitas. Antes de utilizarla utilizaba un diario para poner todo lo referente a mi bebé, esto es más comodo. </p>
								</blockquote>
								<div class="bq-author">
									<figure class="author-img">
										<img src="images/samples/cliente2.jpg" alt="cliente dos">
									</figure>
									<h6>Anabel García</h6>
									<span class="bq-author-info">Usuaria desde hace 3 meses.</span>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimonial">
								<blockquote>
									<p>Con esta aplicación puedes saber si tu hij@ está cogiendo peso y entra dentro de los percentiles normales. Sólo con un vistazo puedo ver toda esa información, la recomiendo 100%. </p>
								</blockquote>
								<div class="bq-author">
									<figure class="author-img">
										<img src="images/samples/cliente3.jpg" alt="cliente tres">

									</figure>
									<h6>Paco Remiro</h6>
									<span class="bq-author-info">Usuario desde hace 7 meses.</span>
								</div>
							</div>
						</div>
					</div>

					<div class="spacer-lg"></div>

					<div class="row">
						<div class="col-md-4">
							<div class="testimonial">
								<blockquote>
									<p>Aplicación muy muy comoda para tener todo a mano en relación a información de tomas y alimentos que le hemos introducido a nuestra hija. Fácil de usar. </p>
								</blockquote>
								<div class="bq-author">
									<figure class="author-img">
										<img src="images/samples/cliente4.jpg" alt="cliente cuatro">

									</figure>
									<h6>Hugo González</h6>
									<span class="bq-author-info">Usuario desde hace 2 meses.</span>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimonial">
								<blockquote>
									<p>Ahora en la familia podemos controlar los alimentos que hemos introducido a mi hermano pequeño. La he recomendado a mis amig@s. </p>
								</blockquote>
								<div class="bq-author">
									<figure class="author-img">
										<img src="images/samples/cliente5.jpg" alt="cliente cinco">

									</figure>
									<h6>Luisa Ruíz</h6>
									<span class="bq-author-info">Usuaria desde hace 9 meses</span>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimonial">
								<blockquote>
									<p>He probado muchas aplicaciones de este tipo, pero por ahora esta es muy simple y sencilla. Hay aspectos mejorables, pero se nota que están en constante cambio para mejorar. La recomiendo. </p>
								</blockquote>
								<div class="bq-author">
									<figure class="author-img">
										<img src="images/samples/cliente6.jpg" alt="cliente seis">

									</figure>
									<h6>D'Artacán</h6>
									<span class="bq-author-info">Usuario desde hace 11 meses.</span>
								</div>
							</div>
						</div>
					</div>

					<hr class="hr__bold lg">
					<!--Termina Caja Opiniones-->
					<!--Empieza Marcas Testadas-->
					<h2>Marcas Testadas</h2>
					<div class="row">
						<div class="row">
							<div class="col-sm-3 col-md-3">
								<div class="hovered-img text-center">
									<a href="#"><img src="images/samples/client-logo2.png" alt=""></a>
								</div>
							</div>
							<div class="col-sm-3 col-md-3">
								<div class="hovered-img text-center">
									<a href="#"><img src="images/samples/client-logo3.png" alt=""></a>
								</div>
							</div>
							<div class="col-sm-3 col-md-3">
								<div class="hovered-img text-center">
									<a href="#"><img src="images/samples/client-logo4.png" alt=""></a>
								</div>
							</div>
							<div class="col-sm-3 col-md-3">
								<div class="hovered-img text-center">
									<a href="#"><img src="images/samples/client-logo1.png" alt=""></a>
								</div>
							</div>
						</div>					
				</div>
				<!--Termina Marcas Testadas-->
			</section>
			<!-- Termian Contenidos de la Página -->

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

	<!-- Formulario Boletín de Noticias -->
	<script src="vendor/jquery.validate.js"></script>
	<script src="js/newsletter.js"></script>
	<script src="js/custom.js"></script>

 </body>
</html>