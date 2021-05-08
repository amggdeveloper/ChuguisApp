<!DOCTYPE html>
<html class="not-ie no-js" lang="es"> 
<head>
	
	<!-- Necesidades Básicas de la Página
	================================================== -->
	<meta charset="utf-8">
	<title>ChuguisApp | Ayuda</title>
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
<body>

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
						<li><a href="servicios.php">Servicios</a></li>						
						<li><a href="blog.php">Blog</a></li>
						<li><a href="nosotros.php">Quiénes Somos</a></li>
						<li><a href="contacto.php">Contacto</a></li>
						<li class="active"><a href="ayuda.php"><i class="fa fa-question-circle fa-lg"></i></a></li>
					</ul>
				</div>
			</nav>
			<!-- Termina Menú -->
			
		</header>
		<!-- Termina la Cabecera -->
		
		<!-- Empieza Main -->
		<div class="main" role="main">

			<!-- Empieza Cabecera-->
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h1>Ayudas</h1>
						</div>
						<div class="col-md-6">
							<ul class="breadcrumb">
								<li><a href="index.php">Inicio</a></li>								
								<li class="active">Ayudas</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!--Termina Cabecera-->

			<!-- Empieza Contenido de la Página -->
			<section class="page-content">
				<div class="container">
					
					<div class="row">
						<div class="col-md-8">
							<p>A continuación se muestran las preguntas más frecuentes sobre la aplicación, en ellas se responden las funciones más básicas que podrás encontrar en la aplicación y resolver las dudas que tengas al respecto.</p>
							<!--Enunciados en acordeon-->
							<div class="panel-group panel-group__alt" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-1">
												¿Cómo puedo Registrarme en la aplicación?
											</a>
										</h4>
									</div>
									<div id="accordion-1" class="panel-collapse collapse in">
										<div class="panel-body">
											<p>Solo debe dirigirse a la esquina superior derecha donde pone Registrar con un icono de un lapiz dentro de un recuadro. Pulsaremos y a continuación nos pide información de nuestro nombre, contraseña e email que queremos usar para hacer el registro de usuario nuevo.</p>								
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-2" class="collapsed">
												 ¿Cómo puedo Entrar en la aplicación?
											</a>
										</h4>
									</div>
									<div id="accordion-2" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Solo debe dirigirse a la esquina superior derecha donde pone Entrar con un icono de un candado. Pulsaremos y a continuación nos pide información de nuestro nombre, contraseña e email que hemos introducido anteriormente en el registro.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-3" class="collapsed">
												¿Se pueden crear más de un usuario para la aplicación?
											</a>
										</h4>
									</div>
									<div id="accordion-3" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Si, siempre y cuando registre un nuevo email. Podrá crear los usuarios que desee introduciendo un email diferente por cuenta de usuario.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-4" class="collapsed">
												Nulla eget nibh neque. Phasellus bibendum erat ligula?
											</a>
										</h4>
									</div>
									<div id="accordion-4" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Vivamus eget elit ultricies, convallis urna in, sagittis nulla. Duis sollicitudin suscipit nisi. Etiam sit amet ipsum urna. Etiam mi diam, tincidunt in libero vel, commodo suscipit risus. Nam pharetra auctor volutpat.</p>

											Vivamus malesuada at nisl quis posuere. Aliquam interdum urna nec ligula viverra, non rhoncus enim iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-5" class="collapsed">
												Vestibulum ante ipsum primis in faucibus orci?
											</a>
										</h4>
									</div>
									<div id="accordion-5" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Vivamus eget elit ultricies, convallis urna in, sagittis nulla. Duis sollicitudin suscipit nisi. Etiam sit amet ipsum urna. Etiam mi diam, tincidunt in libero vel, commodo suscipit risus. Nam pharetra auctor volutpat.</p>

											Vivamus malesuada at nisl quis posuere. Aliquam interdum urna nec ligula viverra, non rhoncus enim iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-6" class="collapsed">
												In sed interdum nibh. Pellentesque ornare turpis velit?
											</a>
										</h4>
									</div>
									<div id="accordion-6" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Vivamus eget elit ultricies, convallis urna in, sagittis nulla. Duis sollicitudin suscipit nisi. Etiam sit amet ipsum urna. Etiam mi diam, tincidunt in libero vel, commodo suscipit risus. Nam pharetra auctor volutpat.</p>

											Vivamus malesuada at nisl quis posuere. Aliquam interdum urna nec ligula viverra, non rhoncus enim iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-7" class="collapsed">
												Donec ultricies leo ut lacus feugiat pulvinar?
											</a>
										</h4>
									</div>
									<div id="accordion-7" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Vivamus eget elit ultricies, convallis urna in, sagittis nulla. Duis sollicitudin suscipit nisi. Etiam sit amet ipsum urna. Etiam mi diam, tincidunt in libero vel, commodo suscipit risus. Nam pharetra auctor volutpat.</p>

											Vivamus malesuada at nisl quis posuere. Aliquam interdum urna nec ligula viverra, non rhoncus enim iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-8" class="collapsed">
												Nulla eget nibh neque. Phasellus bibendum erat ligula?
											</a>
										</h4>
									</div>
									<div id="accordion-8" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Vivamus eget elit ultricies, convallis urna in, sagittis nulla. Duis sollicitudin suscipit nisi. Etiam sit amet ipsum urna. Etiam mi diam, tincidunt in libero vel, commodo suscipit risus. Nam pharetra auctor volutpat.</p>

											Vivamus malesuada at nisl quis posuere. Aliquam interdum urna nec ligula viverra, non rhoncus enim iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus.
										</div>
									</div>
								</div>
							</div>
						</div>						
						<div class="col-md-4" data-animation="bounce" data-animation-delay="0">
							<hr class="visible-sm visible-xs lg">
							<!--Terminan Enunciados en acordeon-->

							<!-- Recuadro de información -->
							<div class="call-to-action centered">
								<div class="cta-txt">
									<h2>¿No encuentra la respuesta que necesita?</h2>
									<p>¡Pongase en contacto con nosotros!</p>
								</div>
								<div class="cta-btn">
									<a href="contacto.html" class="btn btn-primary">Contactar</a>
								</div>
							</div>
							<!-- Termina recuadro de información-->
						</div>
					</div>
				</div>
			</section>
			<!-- Termina contenidos de la página -->

			<!-- Empieza Footer -->
			<?php include 'includes/footer.php';?>
			<!-- Termina Footer -->
			
		</div>
		<!-- Termina Main -->
	</div>
	
	<!-- Javascript Files
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

	<!-- Newsletter Form -->
	<script src="vendor/jquery.validate.js"></script>
	<script src="js/newsletter.js"></script>

	<script src="js/custom.js"></script>


	
</body>
</html>