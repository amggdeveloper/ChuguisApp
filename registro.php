<?php
//Iniciamos sesión
session_start();

if(isset($_SESSION['id'])) {
	header("Location: index.php");
}

//Incluimos los datos de conexión
include_once 'includes/conexion.php';

//Establecemos el error de valición 
$error=false;
 
//Comprobamos si el formulario ha sido empezado
if (isset($_POST['registro'])) {
	//Introducimos los datos en variables, teniendo en cuenta la inyección de SQL
    $nombre = mysqli_real_escape_string($con,$_POST['nombre']);
    $mail = mysqli_real_escape_string($con,$_POST['email']);
    $pass = mysqli_real_escape_string($con,$_POST['pass']);
	$pass2= mysqli_real_escape_string($con,$_POST['pass2']);
	$passCifrada=password_hash($pass,PASSWORD_DEFAULT);//Encriptamos la contraseña

	//Comprobamos que el nombre no esté vacio
	if (empty($nombre)){
		$error = true;		
		echo '<div class="alert alert-danger alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>¡Error en el nombre!</strong> Debe rellenar el campo nombre.
				</div>';
	
	//Comprobamos que el email no esté vacio			
	}if(empty($mail)) {
		$error = true;		
		echo '<div class="alert alert-danger alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>¡Error en el email!</strong> Debe rellenar el campo email.
				</div>';
	
	//Comprobamos que la contraseña no esté vacia				
	}if(empty($pass)) {
		$error = true;		
		echo '<div class="alert alert-danger alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>¡Error en la contraseña!</strong> La contraseña no puede estar en blanco.
				</div>';
	//Comprobamos que las contraseñas coinciden			
	}if($pass!=$pass2){
		$error = true;		
		echo '<div class="alert alert-danger alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>¡Error en las contraseñas!</strong> Las contraseñas deben coincidir.
				</div>';
	
	//Si las otras condiciones no dan error, añadimos el nuevo usuario	
	}if (!$error) {
		if(mysqli_query($con, "INSERT INTO users(name,mail,pass,pass2) VALUES('" . $nombre . "', '" . $mail . "', '" . $passCifrada . "','" . $passCifrada . "')")) {
			echo '<div class="alert alert-success alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>!Enhorabuena!</strong> ¡Usuario Registrado Correctamente!
		  		</div>';
		} else {
			echo '<div class="alert alert-danger alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>¡Error de registro!</strong> Verifica tus datos.
				</div>';
		}
	}
}
 
?>
<!DOCTYPE html>
<html class="not-ie no-js" lang="es"> 

<!--Empieza HEAD-->
<head>

	<!-- Necesidades Básicas de la Página
	================================================== -->
	<meta charset="utf-8">
	<title>ChuguisApp | Registro</title>
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

			<!-- Cabecera de la Página -->
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h1>Registrar Nuevo Usuario</h1>
						</div>
						<div class="col-md-6">
						<!--Breadcrumbs-->
							<ul class="breadcrumb">
								<li><a href="index.php"><i class="fa fa-home"></i></a></li>								
								<li class="active">Registrar</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- Termina Cabecera de la Página -->

			<!-- Empieza Contenidos de la Página -->
			<section class="page-content">
				<div class="container">
					
					<div class="row">					
						<div class="col align-self-center">
							<div class="spacer-lg visible-sm visible-xs"></div>
							<div class="box">
								<h3>Registro</h3>
								<form action="" method="POST" role="form" name="registroForm">
									<div class="form-group">
										<label>Nombre <span class="required">*</span></label>
										<input id="nombre" type="text" class="form-control" name="nombre" vale="" data-msg-required="Por favor introduzca un nombre válido.">
									</div>
									<div class="form-group">
										<label>Email <span class="required">*</span></label>
										<input id="email" type="text" class="form-control" name="email" value="" data-msg-required="Por favor introduzca un email válido.">
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>
													Contraseña <span class="required">*</span>
												</label>
												<input id ="pass" type="password" class="form-control" name="pass" value="" data-msg-required="Por favor introduzca contraseña.">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>
													Repita Contraseña <span class="required">*</span>
												</label>
												<input id="pass2" type="password" class="form-control" name="pass2" value="" data-msg-required="Por favor repita la contraseña">
											</div>
										</div>
									</div>
									<button name="registro" type="submit" class="btn btn-primary">Registrar</button>
								</form>								
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- Termina Contenidos de la Página -->

			<!-- Empieza Footer -->
			<?php include 'includes/footer.php';?>
			<!-- Termina Footer -->
			
		</div>
		<!-- Temina Main-->
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

	<!-- Formulario Boletin de Noticias -->
	<script src="vendor/jquery.validate.js"></script>
	<script src="js/newsletter.js"></script>
	<script src="js/custom.js"></script>
	
  </body>
</html>