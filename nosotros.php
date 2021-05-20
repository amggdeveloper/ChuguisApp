<?php include 'newsletter.php'?>
<!DOCTYPE html>
<html class="not-ie no-js" lang="es"> 

<!--Empieza HEAD-->
<head>

	<!-- Necesidades Básicas de la Página
	================================================== -->
	<meta charset="utf-8">
	<title>ChuguisApp | Quienes Somos</title>
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
						<li><a href="servicios.php">Servicios</a></li>						
						<li><a href="blog.php">Blog</a></li>
						<li class="active"><a href="nosotros.php">Quiénes Somos</a></li>
						<li><a href="contacto.php">Contacto</a></li>
						<li><a href="ayuda.php"><i class="fa fa-question-circle fa-lg"></i></a></li>
					</ul>
				</div>
			</nav>
			<!-- Termina Menú -->
			
		</header>
		<!-- Termina la Cabecera -->

		<!-- Empieza Main -->
		<div class="main" role="main">

			<!-- Empieza Cabecera de la Página -->
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h1>Sobre Nosotros</h1>
						</div>
						<div class="col-md-6">
						<!--Breadcrumbs-->
							<ul class="breadcrumb">
								<li><a href="index.php"><i class="fa fa-home"></i></a></li>								
								<li class="active">Sobre Nosotros</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- Termina la Cabecera de la Página-->

			<!-- Empieza Contenidos de la Página -->
			<section class="page-content">
				<div class="container">					
					<div class="row">
						<div class="col-md-6">
							<figure class="alignnone">
								<img src="images/samples/nosotros.jpg" alt="nosotros">
							</figure>
						</div>
						<div class="col-md-6">
							<h2>¡Bienvenido/a a Nuestra Aplicación!</h2>
							<p> ChuguisApp es una aplicación centrada en el mundo de los bebés, desde los primeros meses hasta el comienzo de la infancia. Es una aplicación que ayudará a padres y madres a llevar un control sobre la vida diaria de nuestro bebé.</p>

							<p>Podremos Monitorizar el peso y como avanza en el tiempo, la alimentación, las tomas, la altura del bebé...</p> 
							<p>ChuguisApp es una aplicación desarrollada de manera independiente, que surge por la necesidad de poder tener un seguimiento adecuado sobre las rutinas que llevamos a cabo con nuestros bebés.</p> 
							<div class="spacer-sm"></div>
							
							<a href="blog.php" class="btn btn-primary">Leer Más</a>
						</div>
					</div>

					<div class="spacer-lg"></div>

					<h2>Para padres y madres</h2>
					<div class="row">
						<div class="col-md-4">
							<!-- Empieza Recuadros Informativos con Iconos -->
							<div class="icon-box circled icon-box-color__primary">
								<div class="icon">
									<i class="fa fa-lightbulb-o fa-3x"></i>
								</div>
								<div class="icon-box-body">
									<h3>Servicios que ofrecemos</h3>
									Ofrecemos resolución de dudas en un máximo de 24 horas. Las incidencias son resueltas al instante. Actualizaciones periodicas de la aplicación para resolver errores.
								</div>
							</div>
							
						</div>
						<div class="col-md-4">
							
							<div class="icon-box circled icon-box-color__secondary">
								<div class="icon">
									<i class="fa fa-user fa-3x"></i>
								</div>
								<div class="icon-box-body">
									<h3>Monitorización</h3>
									Podrá monitorizar todo lo relacionado con la vida diaria de su bebé, haciendo más fácil las actividades cotidianas.
								</div>
							</div>
							
						</div>
						<div class="col-md-4">
							
							<div class="icon-box circled icon-box-color__tertiary">
								<div class="icon">
									<i class="fa fa-check fa-3x"></i>
								</div>
								<div class="icon-box-body">
									<h3>Seguimiento</h3>
									Seguimiento de la evolución de su bebé en cada etapa evolutiva, llevando un control visual de las distintas características de su bebé.
								</div>
							</div>
							
						</div>
					</div>

					<div class="spacer-lg"></div>

					<h2>Para Bebés</h2>
					<div class="row">
						<div class="col-md-4">
							
							<div class="icon-box circled icon-box-color__primary">
								<div class="icon">
									<i class="fa fa-pencil fa-3x"></i>
								</div>
								<div class="icon-box-body">
									<h3>Testeo de Marcas</h3>
									Ofrecemos información sobre las distintas marcas testeadas, gracias a un equipo de testeadores profesionales, los cuales practican las actividades necesarias para probar los productos.
								</div>
							</div>
							
						</div>
						<div class="col-md-4">
							
							<div class="icon-box circled icon-box-color__secondary">
								<div class="icon">
									<i class="fa fa-thumbs-o-up fa-3x"></i>
								</div>
								<div class="icon-box-body">
									<h3>Ejercicios</h3>
									Tablas de ejercicios que pueden llevar a cabo los bebés para poder desarrollar las distintas capacidades evolutivas.
								</div>
							</div>
							
						</div>
						<div class="col-md-4">
							
							<div class="icon-box circled icon-box-color__tertiary">
								<div class="icon">
									<i class="fa fa-star-o fa-3x"></i>
								</div>
								<div class="icon-box-body">
									<h3>Juegos</h3>
									Ejemplos de juegos a realizar con nuestros bebés para desarrollar capacidades evolutivas.
								</div>
							</div>
							<!-- Termina Recuadros Informativos con Iconos -->
						</div>
					</div>

					<hr class="lg">

					<!--Empieza Acordeon Informativo-->
					<div class="row">
						<div class="col-md-6">
							<h2>Servicios Que Ofrecemos</h2>
							<div class="panel-group panel-group__alt" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-1">
												Resolución de Dudas en 24 horas
											</a>
										</h4>
									</div>
									<div id="accordion-1" class="panel-collapse collapse in">
										<div class="panel-body">
											<p>Resolveremos las dudas que le puedan surgir al usar nuestra aplicación en un plazo máximo de 24 horas.</p>
											
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-2" class="collapsed">
												Equipo de Testeo de Productos
											</a>
										</h4>
									</div>
									<div id="accordion-2" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Nuestro servicio de testeo de productos nos permite probar todos los productos relacionados con los bebés de primera mano. </p>

											Gran experiencia y calidad de las pruebas realizadas.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-3" class="collapsed">
												Guias Actualizadas
											</a>
										</h4>
									</div>
									<div id="accordion-3" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Las guias que podrá encontrar en la página web están totalmente actualizadas al momento.</p>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Termina Acordeon Informativo-->

						<!--Empieza Gráficos de Barras-->
						<div class="col-md-6">
							<div class="spacer-lg visible-sm visible-xs"></div>
							<h2>Nuestras Capacidades</h2>
							<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%;">
									<span class="progress-label">Monitorización</span>
									99%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
									<span class="progress-label">Seguimiento</span>
									90%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
									<span class="progress-label">Guias</span>
									80%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
									<span class="progress-label">Testeo de Productos</span>
									90%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
									<span class="progress-label">Ejercicios</span>
									70%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
									<span class="progress-label">Resolución de Problemas</span>
									78%
								</div>
							</div>
						</div>
					</div>		
					<!--Termina Gráficos de Barras-->
					<hr class="lg">

					<!--Empieza Equipo-->
					<h3>Nuestro Equipo</h3>
					<ul class="team-list row">
						<li class="team-item col-md-3">
							<div class="team-item-inner">
								<figure class="team-thumb">
									<img src="images/samples/desarrollador.jpg" alt="desarrollador">
								</figure>
								<header class="team-head">
									<h5 class="team-name">amgg Developer</h5>
									<span class="team-head-info">Desarrollador</span>
								</header>
								<div class="team-excerpt">
									Desarrollo de la aplicación 
									Programación en Html5, Css3, Javascript Vanilla, Django, Bootstrap, Php...
								</div>
							</div>
						</li>
						<li class="team-item col-md-3">
							<div class="team-item-inner">
								<figure class="team-thumb">
									<img src="images/samples/tester.jpg" alt="tester">
								</figure>
								<header class="team-head">
									<h5 class="team-name">DTG</h5>
									<span class="team-head-info">Tester</span>
								</header>
								<div class="team-excerpt">
									Testeador con pruebas de primera mano de los productos más usados.
								</div>
							</div>
						</li>
						<li class="team-item col-md-3">
							<div class="team-item-inner">
								<figure class="team-thumb">
									<img src="images/samples/staff.jpg" alt="staff">
								</figure>
								<header class="team-head">
									<h5 class="team-name">RTJ</h5>
									<span class="team-head-info">Staff</span>
								</header>
								<div class="team-excerpt">
									Gran experiencia en ayuda logística y organización de tareas.
								</div>
							</div>
						</li>
						<li class="team-item col-md-3">
							<div class="team-item-inner">
								<figure class="team-thumb">
									<img src="images/samples/desarrollador.jpg" alt="desarrollador">
								</figure>
								<header class="team-head">
									<h5 class="team-name">amgg Developer</h5>
									<span class="team-head-info">Diseño Gráfico</span>
								</header>
								<div class="team-excerpt">
									Diseño de los componentes visuales de la aplicación.
								</div>
							</div>
						</li>
					</ul>
					<!--Termina Equipo-->
				</div>
			</section>
			<!-- Termina Contenido de la Página-->

			<!-- Empieza Footer -->
			<?php include 'includes/footer.php';?>
			<!-- Termina Footer -->
			
		</div>
		<!-- Termina Main -->
	</div>

	<!-- Fichero Javascript 
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
	<!--<script src="js/newsletter.js"></script>-->
	<script src="js/custom.js"></script>

  </body>
</html>