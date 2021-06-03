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
if (isset($_POST['newsletter'])) {
	//Introducimos los datos en variables, teniendo en cuenta la inyección de SQL   
    $mail = mysqli_real_escape_string($con,$_POST['subscribe-email']);    

	//Comprobamos que el email no esté vacio
	if (empty($mail)){
		$error = true;		
		echo '<div class="alert alert-danger alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>¡Error en el email!</strong> Debe rellenar el campo email.
			</div>';

	//Comprobamos que el email está escrito correctamente			
	}elseif(!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
	$error = true;		
	echo '<div class="alert alert-danger alert-dismissable fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>¡Error en el email!</strong> Introduzca un email válido.
			</div>';

	//Si las otras condiciones no dan error, añadimos el email a la base de datos en la tabla newsletter	
	}elseif (!$error) {
		if(mysqli_query($con, "INSERT INTO newsletter(email) VALUES('" . $mail . "')")) {
			echo '<div class="alert alert-success alert-dismissable fade in" id="newsletter-alert-success">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>¡Perfecto!</strong> Gracias por suscribirte.
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