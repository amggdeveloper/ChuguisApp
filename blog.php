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
								<li><a href="index.php">Inicio</a></li>
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
										<span class="entry-category"><i class="fa fa-folder"></i> <a href="#">Pañalesr</a></span>
										<span class="entry-author"><i class="fa fa-user"></i> <a href="#">amgg Developer</a></span>
										<span class="entry-comments"><i class="fa fa-comments"></i> <a href="#">0 Comentarios</a></span>
									</div>
								</header>
								<div class="excerpt">
									Los pañales de tela eran utilizados muy a menudo por nuestras madres o abuelas, se utilizaban gasas las cuales se lavaban tras su uso. Generalmente eran de algodon. Actualmente hay muchos modelos de estos pañales. ¿Te atreverías a usarlos?. 
								</div>
								<footer class="entry-footer">
									<a href="#" class="btn btn-primary">Leer Más</a>
								</footer>
							</article>
							<!-- Termina Entradas del Blog -->

							<!-- Post (Gallery Format) -->
							<article class="entry entry__gallery entry__with-icon">
								<!-- Project Slider -->
								<div class="owl-carousel owl-theme owl-slider thumbnail">
									<div class="item">
										<a href="#"><img src="http://placehold.it/858x400" alt=""></a>
									</div>
									<div class="item">
										<a href="#"><img src="http://placehold.it/858x400" alt=""></a>
									</div>
									<div class="item">
										<a href="#"><img src="http://placehold.it/858x400" alt=""></a>
									</div>
								</div>
								<!-- Project Slider / End -->
								<header class="entry-header">
									<div class="entry-icon visible-md visible-lg">
										<span class="date-lg">28</span>
										<span class="date-sm">Feb, 2014</span>
										<i class="entypo picture"></i>
									</div>
									<h2><a href="blog-post.html">Gallery Post Format</a></h2>
									<div class="entry-meta">
										<span class="entry-category"><i class="fa fa-folder"></i> <a href="#">Cat Sitter</a></span>
										<span class="entry-author"><i class="fa fa-user"></i> <a href="#">Dan Fisher</a></span>
										<span class="entry-comments"><i class="fa fa-comments"></i> <a href="#">0 Comments</a></span>
									</div>
								</header>
								<div class="excerpt">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, condimentum id nunc. Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate. Sed velit nulla, sagittis non erat id, dictum vestibulum ligula. 
								</div>
								<footer class="entry-footer">
									<a href="#" class="btn btn-primary">Read More</a>
								</footer>
							</article>
							<!-- Post (Gallery Format) / End -->

							<!-- Post (Image Format) -->
							<article class="entry entry__image entry__with-icon">
								<figure class="alignnone entry-thumb">
									<a href="#"><img src="http://placehold.it/858x400" alt=""></a>
								</figure>
								<header class="entry-header">
									<div class="entry-icon visible-md visible-lg">
										<span class="date-lg">28</span>
										<span class="date-sm">Feb, 2014</span>
										<i class="entypo camera"></i>
									</div>
									<h2><a href="blog-post.html">Image Post Format</a></h2>
									<div class="entry-meta">
										<span class="entry-category"><i class="fa fa-folder"></i> <a href="#">Cat Sitter</a></span>
										<span class="entry-author"><i class="fa fa-user"></i> <a href="#">Dan Fisher</a></span>
										<span class="entry-comments"><i class="fa fa-comments"></i> <a href="#">0 Comments</a></span>
									</div>
								</header>
								<div class="excerpt">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, condimentum id nunc. Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate. Sed velit nulla, sagittis non erat id, dictum vestibulum ligula. 
								</div>
								<footer class="entry-footer">
									<a href="#" class="btn btn-primary">Read More</a>
								</footer>
							</article>
							<!-- Post (Image Format) / End -->

							<!-- Post (Video Format) -->
							<article class="entry entry__video entry__with-icon">
								<figure class="alignnone video-holder">
									<iframe src="http://player.vimeo.com/video/7449107?title=0&byline=0&portrait=0&color=a7cf3b" width="612" height="343" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
								</figure>
								<header class="entry-header">
									<div class="entry-icon visible-md visible-lg">
										<span class="date-lg">28</span>
										<span class="date-sm">Feb, 2014</span>
										<i class="entypo video"></i>
									</div>
									<h2><a href="blog-post.html">Video Post Format</a></h2>
									<div class="entry-meta">
										<span class="entry-category"><i class="fa fa-folder"></i> <a href="#">Cat Sitter</a></span>
										<span class="entry-author"><i class="fa fa-user"></i> <a href="#">Dan Fisher</a></span>
										<span class="entry-comments"><i class="fa fa-comments"></i> <a href="#">0 Comments</a></span>
									</div>
								</header>
								<div class="excerpt">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, condimentum id nunc. Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate. Sed velit nulla, sagittis non erat id, dictum vestibulum ligula. 
								</div>
								<footer class="entry-footer">
									<a href="#" class="btn btn-primary">Read More</a>
								</footer>
							</article>
							<!-- Post (Video Format) / End -->

							<!-- Post (Link Format) -->
							<article class="entry entry__link entry__with-icon">
								<header class="entry-header">
									<div class="entry-icon visible-md visible-lg">
										<span class="date-lg">28</span>
										<span class="date-sm">Feb, 2014</span>
										<i class="entypo link"></i>
									</div>
									<h2><a href="blog-post.html">Link Post Format</a></h2>
									<span class="entry-url"><a href="#">http://www.google.com</a></span>
									<div class="entry-meta">
										<span class="entry-category"><i class="fa fa-folder"></i> <a href="#">Cat Sitter</a></span>
										<span class="entry-author"><i class="fa fa-user"></i> <a href="#">Dan Fisher</a></span>
										<span class="entry-comments"><i class="fa fa-comments"></i> <a href="#">0 Comments</a></span>
									</div>
								</header>
							</article>
							<!-- Post (Link Format) / End -->

							<!-- Post (Quote Format) -->
							<article class="entry entry__quote entry__with-icon">
								<header class="entry-header">
									<div class="entry-icon visible-md visible-lg">
										<span class="date-lg">28</span>
										<span class="date-sm">Feb, 2014</span>
										<i class="entypo quote"></i>
									</div>
								</header>
								<div class="quote-holder">
									<blockquote>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet sodales lacinia. Curabitur ut purus tincidunt. Iaculis elit a, eleifend augue. Ut gravida justo purus, ac sodales orci tincidunt non.</p>
										<p>Phasellus blandit augue vel sollicitudin blandit. Curabitur eget rhoncus quam, vel elementum arcu. In accumsan tincidunt varius. Nunc vel ligula sit amet nibh hendrerit gravida id et orci. lectus sagittis faucibus at in mauris. Quisque id placerat elit.</p> 
									</blockquote>
									<cite>Timothy Black <span>Developer, Compay Name</span></cite>
								</div>
							</article>
							<!-- Post (Quote Format) / End -->

							<!-- Post (Standard Format) -->
							<article class="entry entry__standard entry__with-icon">
								<header class="entry-header">
									<div class="entry-icon visible-md visible-lg">
										<span class="date-lg">28</span>
										<span class="date-sm">Feb, 2014</span>
										<i class="entypo text-doc"></i>
									</div>
									<h2><a href="blog-post.html">Standard Post Format (without Image)</a></h2>
									<div class="entry-meta">
										<span class="entry-category"><i class="fa fa-folder"></i> <a href="#">Cat Sitter</a></span>
										<span class="entry-author"><i class="fa fa-user"></i> <a href="#">Dan Fisher</a></span>
										<span class="entry-comments"><i class="fa fa-comments"></i> <a href="#">0 Comments</a></span>
									</div>
								</header>
								<div class="excerpt">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, condimentum id nunc. Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate. Sed velit nulla, sagittis non erat id, dictum vestibulum ligula. 
								</div>
								<footer class="entry-footer">
									<a href="#" class="btn btn-primary">Read More</a>
								</footer>
							</article>
							<!-- Post (Standard Format) / End -->

							<div class="text-center">
								<ul class="pagination-custom list-unstyled list-inline">
									<li><a href="#" class="btn btn-sm">&laquo;</a></li>
									<li class="active"><a href="#" class="btn btn-sm">1</a></li>
									<li><a href="#" class="btn btn-sm">2</a></li>
									<li><a href="#" class="btn btn-sm">3</a></li>
									<li><a href="#" class="btn btn-sm">4</a></li>
									<li><a href="#" class="btn btn-sm">5</a></li>
									<li><a href="#" class="btn btn-sm">&raquo;</a></li>
								</ul>
							</div>
						</div>

						<aside class="sidebar col-md-4">
							
							<hr class="visible-sm visible-xs lg">

							<!-- Widget :: Latest Posts -->
							<div class="latest-posts-widget widget widget__sidebar">
								<h3 class="widget-title">Popular Posts</h3>
								<div class="widget-content">
									<ul class="latest-posts-list">
										<li>
											<figure class="thumbnail"><a href="#"><img src="http://placehold.it/112x82" alt=""></a></figure>
											<span class="date">24/07/2013</span>
											<h5 class="title"><a href="#">Duis placerat rhoncus arcu, sit amet aliquam leo</a></h5>
										</li>
										<li>
											<figure class="thumbnail"><a href="#"><img src="http://placehold.it/112x82" alt=""></a></figure>
											<span class="date">16/07/2013</span>
											<h5 class="title"><a href="#">Mauris in arcu aliq, elementum nibh nec</a></h5>
										</li>
										<li>
											<figure class="thumbnail"><a href="#"><img src="http://placehold.it/112x82" alt=""></a></figure>
											<span class="date">14/07/2013</span>
											<h5 class="title"><a href="#">Vestibulum in ligula rutrum faucibus interdum</a></h5>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Widget :: Latest Posts -->

							<!-- Widget :: Categories -->
							<div class="widget_categories widget widget__sidebar">
								<h3 class="widget-title">Categories</h3>
								<div class="widget-content">
									<ul>
										<li><a href="#">Babbysitter</a> (4)</li>
										<li><a href="#">Nanny</a> (4)</li>
										<li><a href="#">Child Care Center</a> (12)</li>
										<li><a href="#">Au Pair</a> (3)</li>
										<li><a href="#">Tutor/Private Lesson</a> (1)</li>
										<li><a href="#">Babysitting Rates</a> (8)</li>
										<li><a href="#">Babysitting Jobs</a> (4)</li>
										<li><a href="#">Babysitting Services</a> (2)</li>
										<li><a href="#">Nannies</a> (10)</li>
										<li><a href="#">Nanny Jobs</a> (7)</li>
										<li><a href="#">Child Care Jobs</a> (2)</li>
										<li><a href="#">Tutors</a> (1)</li>
										<li><a href="#">Tutoring Jobs</a> (2)</li>
									</ul>
								</div>
							</div>
							<!-- /Widget :: Categories -->

							<!-- Widget :: Tags Cloud -->
							<div class="widget_tag_cloud widget widget__sidebar">
								<h3 class="widget-title">Tags</h3>
								<div class="widget-content">
									<div class="tagcloud">
										<a href="#" class="btn btn-secondary btn-sm">Babysitting</a>
										<a href="#" class="btn btn-secondary btn-sm">Babysitting Jobs</a>
										<a href="#" class="btn btn-secondary btn-sm">Nannies</a>
										<a href="#" class="btn btn-secondary btn-sm">Tutoring</a>
										<a href="#" class="btn btn-secondary btn-sm">Tutors</a>
										<a href="#" class="btn btn-secondary btn-sm">Child Care Jobs</a>
										<a href="#" class="btn btn-secondary btn-sm">Nanny Jobs</a>
										<a href="#" class="btn btn-secondary btn-sm">Child Care</a>
									</div>
								</div>
							</div>
							<!-- /Widget :: Tags Cloud -->

							<!-- Widget :: Text Widget -->
							<div class="widget_text widget widget__sidebar">
								<h3 class="widget-title">Text Widget</h3>
								<div class="widget-content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet ornare mattis suscipit. 
								</div>
							</div>
							<!-- /Widget :: Text Widget -->

							<!-- Widget :: Flickr -->
							<div class="widget_flickr widget widget__sidebar">
								<h3 class="widget-title">Flickr</h3>
								<div class="widget-content">
									<!-- Flickr images will appear here -->
									<ul class="flickr-feed"></ul>
								</div>
							</div>
							<!-- /Widget :: Flickr -->

							<!-- Widget :: Tabbed -->
							<div class="tabbed-widget widget widget__sidebar">
								<h3 class="widget-title">Tabbed Content</h3>
								<div class="widget-content">
									<div class="tabs">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs">
											<li class="active"><a href="#tab-1" data-toggle="tab">Popular</a></li>
											<li><a href="#tab-2" data-toggle="tab">Recent</a></li>
											<li><a href="#tab-3" data-toggle="tab"><i class="fa fa-comments fa-lg"></i></a></li>
										</ul>
										<!-- Tab panes -->
										<div class="tab-content">
											<div class="tab-pane fade in active" id="tab-1">
												<ul class="latest-posts-list">
													<li>
														<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60" alt=""></a></figure>
														<span class="date">24/07/2013</span>
														<h5 class="title"><a href="#">Duis placerat rhoncus arcu sit amet aliquam</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60" alt=""></a></figure>
														<span class="date">16/07/2013</span>
														<h5 class="title"><a href="#">Mauris in arcu aliq, elementum nibh nec</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60" alt=""></a></figure>
														<span class="date">14/07/2013</span>
														<h5 class="title"><a href="#">Vestibulum in ligula rutrum faucibus</a></h5>
													</li>
												</ul>
											</div>
											<div class="tab-pane fade" id="tab-2">
												<ul class="latest-posts-list">
													<li>
														<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60" alt=""></a></figure>
														<span class="date">24/07/2013</span>
														<h5 class="title"><a href="#">Duis placerat rhoncus arcu sit amet aliquam</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60" alt=""></a></figure>
														<span class="date">16/07/2013</span>
														<h5 class="title"><a href="#">Mauris in arcu aliq, elementum nibh nec</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60" alt=""></a></figure>
														<span class="date">14/07/2013</span>
														<h5 class="title"><a href="#">Vestibulum in ligula rutrum faucibus</a></h5>
													</li>
												</ul>
											</div>
											<div class="tab-pane fade" id="tab-3">
												<ul class="latest-posts-list">
													<li>
														<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60" alt=""></a></figure>
														<span class="date">admin says:</span>
														<h5 class="title"><a href="#">Duis placerat rhoncus arcu sit amet aliquam</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60" alt=""></a></figure>
														<span class="date">admin says:</span>
														<h5 class="title"><a href="#">Mauris in arcu aliq, elementum nibh nec</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60" alt=""></a></figure>
														<span class="date">admin says:</span>
														<h5 class="title"><a href="#">Vestibulum in ligula rutrum faucibus</a></h5>
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
	<script src="js/newsletter.js"></script>
	<script src="js/custom.js"></script>
 
  </body>
</html>