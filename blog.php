<?php include 'newsletter.php'?>
<!DOCTYPE html>
<html class="not-ie no-js" lang="es"> 
<!--Empieza HEAD-->
<head>

	<!-- Necesidades Básicas de la Página
	================================================== -->
	<meta charset="utf-8">
	<title>ChuguisApp | Blog</title>
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
						<li class="active"><a href="blog.php">Blog</a></li>
						<li><a href="nosotros.php">Quiénes Somos</a></li>
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
							<h1>Blog</h1>
						</div>
						<div class="col-md-6">
						<!--Breadcrumbs-->
							<ul class="breadcrumb">
								<li><a href="index.php"><i class="fa fa-home"></i></a></li>
								<li class="active">Blog</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- Termina Cabecera de la Página-->

			<!-- Empieza Contenido de la Página -->
			<section class="page-content">
				<div class="container">					
					<div class="row">
						<div class="content col-md-8">

							<!-- Empieza Entradas del Blog -->
							<article class="entry entry__standard entry__with-icon">
								<figure class="alignnone entry-thumb">
									<a href="entrada.html"><img src="images/samples/pañales.jpg" alt=""></a>
								</figure>
								<header class="entry-header">
									<div class="entry-icon visible-md visible-lg">
										<span class="date-lg">03</span>
										<span class="date-sm">May, 2021</span>
										<i class="entypo text-doc"></i>
									</div>
									<h2><a href="entrada.html">¿Pañales de Tela?</a></h2>
									<div class="entry-meta">
										<span class="entry-category"><i class="fa fa-folder"></i> <a href="entrada.php">Pañales</a></span>
										<span class="entry-author"><i class="fa fa-user"></i> <a href="nosotros.php">amgg Developer</a></span>										
									</div>
								</header>
								<div class="excerpt">
									Los pañales de tela eran utilizados muy a menudo por nuestras madres o abuelas, se utilizaban gasas las cuales se lavaban tras su uso. Generalmente eran de algodon. Actualmente hay muchos modelos de estos pañales. ¿Te atreverías a usarlos?. 
								</div>
								<footer class="entry-footer">
									<a href="entrada.php" class="btn btn-primary">Leer Más</a>
								</footer>
							</article>
							<!-- Termina Entradas del Blog -->

							<!-- Empieza Post con Video -->
							<article class="entry entry__video entry__with-icon">
								<figure class="alignnone video-holder">
									<iframe src="http://player.vimeo.com/video/7449107?title=0&byline=0&portrait=0&color=a7cf3b" width="612" height="343" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
								</figure>
								<header class="entry-header">
									<div class="entry-icon visible-md visible-lg">
										<span class="date-lg">28</span>
										<span class="date-sm">Feb, 2021</span>
										<i class="entypo video"></i>
									</div>
									<h2><a href="blog-post.html">Video Funcionamiento de ChuguisApp</a></h2>
									<div class="entry-meta">										
										<span class="entry-author"><i class="fa fa-user"></i> <a href="nosotros.php">amgg Developer</a></span>										
									</div>
								</header>
								<div class="excerpt">
									En este video mostramos todas las funcionalidades de la aplicación y como puedes ir paso a paso conociendola. 
									Explicamos como puedes registrarte y como puedes entrar en el panel de control. También se explica las distintas
									secciones de las que se compone la página principal y las partes que forman parte del panel de control. 
								</div>								
							</article>
							<!-- Termina Post con Video -->

							<!-- Empieza post con link al Portfolio -->
							<article class="entry entry__link entry__with-icon">
								<header class="entry-header">
									<div class="entry-icon visible-md visible-lg">
										<span class="date-lg">14</span>
										<span class="date-sm">Feb, 2021</span>
										<i class="entypo link"></i>
									</div>
									<h2><a href="blog-post.html">PortFolio amgg Developer</a></h2>
									<span class="entry-url"><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank'>Portfolio amgg Developer desarrollado en Django</a></span>
									<div class="entry-meta">										
										<span class="entry-author"><i class="fa fa-user"></i> <a href="#">amgg Developer</a></span>										
									</div>
								</header>
							</article>
							<!-- Termina post con link al Portfolio -->

							<!-- Empieza post con consejo -->
							<article class="entry entry__quote entry__with-icon">
								<header class="entry-header">
									<div class="entry-icon visible-md visible-lg">
										<span class="date-lg">01</span>
										<span class="date-sm">Feb, 2021</span>
										<i class="entypo quote"></i>
									</div>
								</header>
								<div class="quote-holder">
									<blockquote>
										<p>ChuguisApp nos permitirá llevar un seguimiento y monitorización de nuestros bebés en tiempo real, teniendo un mayor control sobre los datos recogidos.</p>
										<p>Con un solo vistazo podremos saber las últimas actividades llevadas a cabo con nuestro bebé. También podremos saber cuales son las últimas tomas y a que horas se las hemos dado.</p> 
									</blockquote>
									<cite>amgg <span>Developer, ChuguisApp</span></cite>
								</div>
							</article>
							<!-- Termina post con consejo -->

							<div class="text-center">
								<ul class="pagination-custom list-unstyled list-inline">
									<li><a href="#" class="btn btn-sm">&laquo;</a></li>
									<li class="active"><a href="#" class="btn btn-sm">1</a></li>									
									<li><a href="#" class="btn btn-sm">&raquo;</a></li>
								</ul>
							</div>
						</div>

						<aside class="sidebar col-md-4">
							
							<hr class="visible-sm visible-xs lg">

							<!-- Empieza Widget Lateral Post Populares -->
							<div class="latest-posts-widget widget widget__sidebar">
								<h3 class="widget-title">Posts Populares</h3>
								<div class="widget-content">
									<ul class="latest-posts-list">
										<li>
											<figure class="thumbnail"><a href="entrada.php"><img src="./images/samples/pañalesPost.jpg" alt="entrada pañales tela"></a></figure>
											<span class="date">03/05/2021</span>
											<h5 class="title"><a href="entrada.php">¿Pañales de Tela?</a></h5>
										</li>										
										<li>
											<figure class="thumbnail"><a href="#"><img src="./images/samples/iconoPost.jpg" alt="icono post"></a></figure>
											<span class="date">28/02/2021</span>
											<h5 class="title"><a href="#">Video Funcionamiento de ChuguisApp</a></h5>
										</li>
										<li>
											<figure class="thumbnail"><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank'><img src="./images/samples/logoAmggPost.jpg" alt="portfolio amgg developer"></a></figure>
											<span class="date">14/02/2021</span>
											<h5 class="title"><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank'>PortFolio amgg Developer</a></h5>
										</li>
									</ul>
								</div>
							</div>
							<!-- Termina Widget Lateral Post Populares-->

							<!-- Empieza Widget Lateral Categorias -->
							<div class="widget_categories widget widget__sidebar">
								<h3 class="widget-title">Categorias</h3>
								<div class="widget-content">
									<ul>
										<li><a href="entrada.php">Pañales</a> (1)</li>
										<li><a href="#">Video</a> (1)</li>
										<li><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank'>PortFolio</a> (1)</li>										
									</ul>
								</div>
							</div>
							<!-- Termina Widget Lateral Categorias -->

							<!-- Empieza Widget Lateral Páginas -->
							<div class="widget_tag_cloud widget widget__sidebar">
								<h3 class="widget-title">Páginas</h3>
								<div class="widget-content">
									<div class="tagcloud">
										<a href="index.php" class="btn btn-secondary btn-sm">Inicio</a>
										<a href="guias.php" class="btn btn-secondary btn-sm">Guías</a>
										<a href="servicios.php" class="btn btn-secondary btn-sm">Nuestros Servicios</a>
										<a href="blog.php" class="btn btn-secondary btn-sm">Blog</a>
										<a href="nosotros.php" class="btn btn-secondary btn-sm">Sobre Nosotros</a>								
										<a href="contacto.php" class="btn btn-secondary btn-sm">Contacto</a>
										<a href="ayuda.php" class="btn btn-secondary btn-sm">Ayudas</a>	
									</div>
								</div>
							</div>
							<!-- Termina Widget Lateral Páginas -->

							<!-- Empieza Widget Lateral Texto -->
							<div class="widget_text widget widget__sidebar">
								<h3 class="widget-title">Nota Informativa</h3>
								<div class="widget-content">
									Si tienes alguna duda no dudes en ponerte en contacto con nuestro equipo, estarán encantados de poder solucionar cualquier incidencia que te haya podido surgir. No olvides de echar un vistazo a la sección de ayudas. 
								</div>
							</div>
							<!-- Termina Widget Lateral Texto -->

							<!-- Empieza Widget Lateral Fotos -->
							<div class="widget_flickr widget widget__sidebar">
								<h3 class="widget-title">Fotos Flickr</h3>
								<div class="widget-content">
									<!-- Aquí aparecen las fotos de flickr -->
									<ul class="flickr-feed"></ul>
								</div>
							</div>
							<!-- Termina Widget Lateral Fotos -->

							<!-- Empieza Widget Lateral Tab -->
							<div class="tabbed-widget widget widget__sidebar">
								<h3 class="widget-title">Contenidos</h3>
								<div class="widget-content">
									<div class="tabs">
										<!-- Navegación de las tab -->
										<ul class="nav nav-tabs">
											<li class="active"><a href="#tab-1" data-toggle="tab">Popular</a></li>
											<li><a href="#tab-2" data-toggle="tab">Reciente</a></li>
											<li><a href="#tab-3" data-toggle="tab"><i class="fa fa-comments fa-lg"></i></a></li>
										</ul>
										<!-- Paneles de las tab -->
										<div class="tab-content">
											<div class="tab-pane fade in active" id="tab-1">
												<ul class="latest-posts-list">
													<li>
														<figure class="thumbnail"><a href="entrada.php"><img src="./images/samples/pañalesPostmini.jpg" alt="imagen pañales tela mini"></a></figure>
														<span class="date">03/05/2021</span>
														<h5 class="title"><a href="entrada.php">¿Pañales de Tela?</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="#"><img src="./images/samples/iconoPostmini.jpg" alt="icono post mini"></a></figure>
														<span class="date">28/02/2021</span>
														<h5 class="title"><a href="#">Video Funcionamiento de ChuguisApp</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank'><img src="./images/samples/logoAmggPostmini.jpg" alt="porfolio mini"></a></figure>
														<span class="date">14/02/2021</span>
														<h5 class="title"><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank'>PortFolio amgg Developer</a></h5>
													</li>
												</ul>
											</div>
											<div class="tab-pane fade" id="tab-2">
												<ul class="latest-posts-list">
													<li>
														<figure class="thumbnail"><a href="entrada.php"><img src="./images/samples/pañalesPostmini.jpg" alt="imagen pañales tela mini"></a></figure>
														<span class="date">03/05/2021</span>
														<h5 class="title"><a href="entrada.php">¿Pañales de Tela?</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="#"><img src="./images/samples/iconoPostmini.jpg" alt="icono post mini"></a></figure>
														<span class="date">28/02/2021</span>
														<h5 class="title"><a href="#">Video Funcionamiento de ChuguisApp</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank'><img src="./images/samples/logoAmggPostmini.jpg" alt="portfolio mini"></a></figure>
														<span class="date">14/02/2021</span>
														<h5 class="title"><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank'>PortFolio amgg Developer</a></h5>
													</li>
												</ul>
											</div>
											<div class="tab-pane fade" id="tab-3">
												<ul class="latest-posts-list">
												<li>
														<figure class="thumbnail"><a href="entrada.php"><img src="./images/samples/pañalesPostmini.jpg" alt="imagen pañales tela mini"></a></figure>
														<span class="date">te interesa saber:</span>
														<h5 class="title"><a href="entrada.php">¿Pañales de Tela?</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="#"><img src="./images/samples/iconoPostmini.jpg" alt="icono post mini"></a></figure>
														<span class="date">te interesa saber:</span>
														<h5 class="title"><a href="#">Video Funcionamiento de ChuguisApp</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank'><img src="./images/samples/logoAmggPostmini.jpg" alt="portfolio mini"></a></figure>
														<span class="date">te interesa saber:</span>
														<h5 class="title"><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank'>PortFolio amgg Developer</a></h5>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Widget :: Tabbed -->
						</aside>
					</div>

				</div>
			</section>
			<!-- Page Content / End -->

			<!-- Empieza Footer -->
			<?php include 'includes/footer.php';?>
			<!-- Termina Footer -->
			
		</div>
		<!-- Main / End -->
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
	<!--<script src="js/newsletter.js"></script>-->
	<script src="js/custom.js"></script>
 
  </body>
</html>