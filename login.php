<?php
//Inicializamos la sesión
session_start();
//Comprobamos si hay una sesión activa
if(!empty($_SESSION['active'])){
	header('location:panel/index.php');
}else{
	//Comprobramos que los recuadros del formulario están vacios
	if(!empty($_POST)){
		if(empty($_POST['email']) || empty($_POST['pass'])){
			echo  '<div class="alert alert-danger">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>¡Error!</strong> , Debe ingresar un email y contraseña
 		   	  		</div>';

		}else{//Si no están vacios requerimos la conexión
			//incluimos una sola vez el fichero de conexión
			include 'includes/conexion.php';
			//Inicializamos las variables
			$mail = mysqli_real_escape_string($con,$_POST['email']);//evitamos la inyeccion de codigo SQL
			$pass = mysqli_real_escape_string($con,$_POST['pass']);//evitamos la inyeccion de codigo SQL
			
			//Creamos las consultas a la base de datos
			$consulta = mysqli_query($con,"SELECT * FROM users WHERE mail='$mail'");
			
			//Comprobamos los resultados
			$result = mysqli_num_rows($consulta);
		
			//Creamos un condicional, si al contar los resultados es igual a uno, se ha encontrado un mail y contraseña coincidentes
			if($result!=0){	

				$row=mysqli_fetch_assoc($consulta);	
				if(password_verify($pass,$row['pass'])){
					$_SESSION['active']=true;	
					$_SESSION['idUser']=$row['id'];
					$_SESSION['name']=$row['name'];
					$_SESSION['email']=$row['mail'];
					$_SESSION['role']=$row['role'];					
					$_SESSION['start']=time();
					$_SESSION['expire']=$_SESSION['start']+(5*60);//Tiempo para mantener la sesión 

					echo  '<div class="alert alert-success">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>¡Enhorabuena!</strong> , ¡Bienvenido!
 		   	  				</div>';	
					if($row['role']==1){
						header('location:panel/indexAD.php');
					}else{
						header('location:panel/index.php');
					}					
					
			}else{
					echo  '<div class="alert alert-danger">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>¡Error!</strong> , Email o Contraseña incorrectos.
 		   	  			</div>';
					session_destroy();		  
							  	
			}
		  }			
				
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
	<title>ChuguisApp | Entrar</title>
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
							<h1>Entrar en la Aplicación</h1>
						</div>
						<div class="col-md-6">
						<!--Breadcrumbs-->
							<ul class="breadcrumb">
								<li><a href="index.php"><i class="fa fa-home"></i></a></li>								
								<li class="active">Entrar</li>
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
							<div class="box">
								<h3>Entrar</h3>
								<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" role="form" name="loginform">
									<div class="form-group">
										<label>Email <span class="required">*</span></label>
										<input type="text" class="form-control" placeholder="Introduce Email" name="email">
									</div>
									<div class="form-group">
										<div class="clearfix">
											<label class="pull-left">
												Contraseña <span class="required">*</span>
											</label>											
										</div>
										<input type="password" class="form-control" placeholder="Introduce Contraseña" name="pass">
									</div>
									<button type="submit" class="btn btn-primary btn-inline" name="login">Entrar</button>&nbsp; &nbsp; &nbsp; 
									<span class="pull-right"><a href="registro.php">¿No tienes cuenta, registrate?</a></span>
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
	<!--<script src="js/newsletter.js"></script>-->
	<script src="js/custom.js"></script>
	
  </body>
</html>