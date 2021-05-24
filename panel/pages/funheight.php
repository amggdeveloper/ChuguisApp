<?php 

//Añadimos la conexión a la base de datos
include_once '../../includes/conexion.php';

//Iniciamos sesión
session_start();

//Comprobamos si la sesión está vacia
if(empty($_SESSION['active'])){
    header('Location:../../login.php'); //redirigimos al login
}

//Instanciamos e inicializamos las variables del usuario
global $id;
$id=$_SESSION['idUser'];

//Hacemos la consulta a la base de datos para seleccionar los datos que hay en ella
$queryColorSelect="SELECT * FROM profile WHERE iduser='$id'";
$querySelec="SELECT * FROM users WHERE id='$id'";
//realizamos la consulta de selección a la base de datos
$resultColorSelect=mysqli_query($con,$queryColorSelect) ;
$resultSelec=mysqli_query($con,$querySelec) ;
//Introducimos el resultado en un array
$rowColor=mysqli_fetch_assoc($resultColorSelect);
$rowSelec=mysqli_fetch_assoc($resultSelec);
//Seleccionamos el color de la base de datos y lo introducimos en la variable correspondiente
$colorSelect='';
if(isset($rowColor['color'])){
    $colorSelect=$rowColor['color'];
}
$idSelec=$rowSelec['iduser'];
$nameSelect=$rowSelec['name'];
$pictureSelect=$rowSelec['picture'];

//Establecemos el error de valición 
$error=false;
$msg='';

//Comprobamos si el formulario ha sido empezado
if (isset($_POST['addHeight'])) {

    //Introducimos los datos en variables, teniendo en cuenta la inyección de SQL   
    $date = mysqli_real_escape_string($con,$_POST['date']);
    $height = mysqli_real_escape_string($con,$_POST['height']);    
    $notes= mysqli_real_escape_string($con,$_POST['notes']);    
    
    //Comprobamos que la fecha no esté vacia			
    if(empty($date)) {
        $error = true;		
        $msg= '<div class="alert alert-warning alert-dismissable fade show" role="alert">
                    <strong>¡Error en la fecha!</strong> Debe rellenar el campo fecha.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ik ik-x"></i>
                    </button>                    
                </div>';
    
    //Comprobamos que la altura no esté vacia				
    }if(empty($height)) {
        $error = true;		
        $msg= '<div class="alert alert-warning alert-dismissable fade show" role="alert">
                <strong>¡Error en la altura!</strong> Debe rellenar el campo altura.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="ik ik-x"></i>
                </button>                    
               </div>';   
    			
    //Comprobamos que las notas no estén vacias			
    }if(empty($notes)){
        $error = true;		
        $msg= '<div class="alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>¡Error en las notas!</strong> Debe rellenar notas
                </div>';
    
    //Si las otras condiciones no dan error, añadimos al bebé	
    }if (!$error) {
        if(mysqli_query($con, "INSERT INTO height(height,date, notes) VALUES('" . $height . "', '" . $date . "', '" . $notes . "')")) {
            $msg= '<div class="alert alert-success alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>!Enhorabuena!</strong> ¡Bebé Registrado Correctamente!
                  </div>';
            
        } else {
            $msg= '<div class="alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>¡Error de registro!</strong> Verifica los datos.
                </div>';
        }
    }
}
    
?>