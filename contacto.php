<!DOCTYPE html>
<html class="not-ie no-js" lang="es"> 
<head>
	
	<!-- Necesidades Básicas de la Página
	================================================== -->
	<meta charset="utf-8">
	<title>ChuguisApp | Contacto</title>
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
						<li class="active"><a href="contacto.php">Contacto</a></li>
						<li><a href="ayuda.php"><i class="fa fa-question-circle fa-lg"></i></a></li>
					</ul>
				</div>
			</nav>
			<!-- Termina Menú -->
			
		</header>
		<!-- Termina la Cabecera -->

		<!-- Empieza el Main -->
		<div class="main" role="main">

			<!-- Empieza Cabecera de la Página -->
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h1>Contacto</h1>
						</div>
						<div class="col-md-6">
						<!--BreadCrumbs-->
							<ul class="breadcrumb">
								<li><a href="index.php">Inicio</a></li>
								<li class="active">Contacto</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- Termina Cabecera de la Página -->

			<!-- Empieza Contenido de la Página -->
			<section class="page-content">

				<div class="container">

					<!-- Empieza Mapa de Google -->
					<div class="card">
						<div class="card-body">
							<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3160.8457742541577!2d-0.9923797837992605!3d37.605788579790634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd634224e0bc8c2b%3A0xf62d78a986855460!2sCIFP%20Carlos%20III!5e0!3m2!1ses!2ses!4v1619863845172!5m2!1ses!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>	
					</div>	
					<!-- Termina Mapa de Google-->
					
					<div class="row">
						<div class="col-md-4">
							<hr class="visible-sm visible-xs lg">
							<!-- Empieza información de contacto -->
							<div class="contacts-widget widget widget__sidebar">
								<h3 class="widget-title">Información de Contacto</h3>
								<div class="widget-content">
									<ul class="contacts-info-list">
										<li>
											<i class="fa fa-map-marker"></i>
											<div class="info-item">
												ChuguisApp, CIFP Carlos III (Cartagena)
											</div>
										</li>
										<li>
											<i class="fa fa-phone"></i>
											<div class="info-item">
												+34 666 666 666<br>
												+34 777 777 777
											</div>
										</li>
										<li>
											<i class="fa fa-envelope"></i>
											<span class="info-item">
												<a href="mailto:chuguisapp@gmail.com">chuguisapp@gmail.com</a>
											</span>
										</li>
										<li>
											<i class="fa fa-whatsapp"></i>
											<div class="info-item">
												<a href="#">ChuguisApp</a><br>												
											</div>
										</li>										
										<li>
											<i class="fa fa-clock-o"></i>
											<div class="info-item">
												Lunes - Viernes 9:00 - 21:00
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- Termina Información de Contacto -->

						<!--Empieza Formulario de Contacto-->	
						</div>
						<div class="col-md-8">
							<h2>Formulario de Contacto</h2>
							<form action="php/contact-form.php" id="contact-form">

								<div class="alert alert-success hidden" id="contact-alert-success">
									<strong>¡Enviado!</strong> Gracias por su mensaje. 
								</div>
								<div class="alert alert-danger hidden" id="contact-alert-error">
									<strong>¡Error!</strong> Ha ocurrido un error al enviar el mensaje.
								</div>

								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label>Nombre <span class="required">*</span></label>
											<input type="text"
												value=""
												data-msg-required="Por favor introduzca su nombre."
												class="form-control"
												name="name" id="name">
										</div>
										<div class="form-group">
											<label>Email <span class="required">*</span></label>
											<input type="email" 
												value=""
												data-msg-required="Por favor introduzca su email."
												data-msg-email="Por favor introduzca un email válido."
												class="form-control"
												name="email"
												id="email">
										</div>
										<div class="form-group">
											<label>Asunto</label>
											<input type="text" 
												value=""
												data-msg-required="Por favor introduzca el asunto."
												class="form-control"
												name="subject"
												id="subject">
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<label>Mensaje <span class="required">*</span></label>
											<textarea
												data-msg-required="Por favor introduzca su mensaje."
												rows="11"
												class="form-control"
												name="message"
												id="message"></textarea>
										</div>
									</div>
								</div>
								<div class="text-right">
									<input type="submit" value="Enviar Mensaje" class="btn btn-primary" data-loading-text="Cargando...">
								</div>
							</form>
						</div>
					</div>

				</div>

			</section>
			<!-- Termina contenido de la página-->

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

	<script src="js/custom.js"></script>


	<!-- Scripts especificos de la página de Contacto
	================================================== -->

	<!-- Formulario de Contacto-->
	<script src="vendor/jquery.validate.js"></script>
	<script src="js/contact.js"></script>

	<!-- Formulario Boletín de Noticias -->
	<script src="js/newsletter.js"></script>

</body>
</html>