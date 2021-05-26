<?php
//Conectamos a la base de datos
include '../../includes/conexion.php';

//Iniciamos la sesión
session_start();

//Comprobamos si la sesión está vacia
if(empty($_SESSION['active'])){   
    header('Location:../../login.php');
}

//Instanciamos e inicializamos las variables del usuario
global $id;
$id=$_SESSION['idUser'];//recogemos el id de usuario de sesión

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
$mailSelect=$rowSelec['mail'];

//establecemos la zona horaria predeterminada
setlocale(LC_ALL,'es_Es.UTF-8');
$day=strftime("Hoy es %A"); //recogemos el dia actual
$date=strftime("%d-%B-%G");//recogemos la fecha actual
$time=strftime("%H:%M:%S h.");//recogemos la hora actual
$alert="";
$alertColor=""; 

//Inicializamos las variables para no dejarlas a null
$passSelect='';//Contraseña
$movilSelect='';//Movil
$descripSelect='';//Descripción
$countrySelect='';//País
$localSelect='';//Localidad

//Recogemos los datos en sus variables correspondientes
if(isset($rowColor['movil'],$rowColor['descrip'],$rowColor['country'],$rowColor['local'],$rowSelec['name'],$rowSelec['mail'],$rowSelec['pass'],$rowSelec['picture'])){
    $movilSelect=$rowColor['movil'];//Movil
    $descripSelect=$rowColor['descrip'];//Descripción
    $countrySelect=$rowColor['country'];//País
    $localSelect=$rowColor['local'];//Localidad 
    $nameSelect=$rowSelec['name'];//Nombre
    $mailSelect=$rowSelec['mail'];//Email 
    $passSelect=$rowSelec['pass'];//Contraseña
    $pictureSelect=$rowSelec['picture'];//Imagen Avatar 
}

//Comprobamos si el formulario ha sido empezado
if (isset($_POST['profile'])) {
     
	//Introducimos los datos en variables, teniendo en cuenta la inyección de SQL
    $name = mysqli_real_escape_string($con,$_POST['example-name']);
    $mail = mysqli_real_escape_string($con,$_POST['example-email']);
    $pass = mysqli_real_escape_string($con,$_POST['example-password']);	
	$passCifrada=password_hash($pass,PASSWORD_DEFAULT);//Encriptamos la contraseña	
	$phone=mysqli_real_escape_string($con,$_POST['example-phone']);	        
    $descrip=mysqli_real_escape_string($con,$_POST['example-message']);		
    $country=mysqli_real_escape_string($con,$_POST['example-select']);	
    $local=mysqli_real_escape_string($con,$_POST['example-local']);	

    //Introducir imagen en base de datos
    $namePicture=$_FILES['pictureAvatar']['name'];
    $typePicture=$_FILES['pictureAvatar']['type'];
    $typeSuccess=array('jpg','jpeg','png');//tipos permitidos de imagen
    $sizePicture=$_FILES['pictureAvatar']['size'];

    //comprobación de la extensión de la imagen    
    $array_nombre = explode('.',$namePicture);
    $cuenta_arr_nombre = count($array_nombre);
    $extension = strtolower($array_nombre[--$cuenta_arr_nombre]);    

    //Si la imagen tiene un tamaño correcto y los tipos
    if($sizePicture>100000 && $typeSuccess)
        //validamos la extension
        if(!in_array($extension, $typeSuccess)){
        }else{
            $alert='<div class="alert alert-warning alert-dismissable fade show" role="alert">
                        <strong>¡Error!</strong> No se puede subir una imagen con ese formato
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="ik ik-x"></i>
                        </button>                    
                    </div>';
        }if(empty($alert)){
            //ruta donde se guardarán las imágenes que subamos
            $path=$_SERVER['DOCUMENT_ROOT'].'/ChuguisApp/images/users/';   
            //Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
            move_uploaded_file($_FILES['pictureAvatar']['tmp_name'],$path.$namePicture);

            //Variables con las consultas a la base de datos
            $queryUpdateUsers="UPDATE users SET name='$name',mail='$mail',pass='$passCifrada', picture='$namePicture' WHERE id='$id'";
            $queryUpdateProfile="UPDATE profile SET movil='$phone',descrip='$descrip',country='$country', local='$local' WHERE iduser='$id'";
   
            //Introducimos los datos obtenidos del formulario en la base de datos profile	
            if(mysqli_query($con,$queryUpdateProfile)){
		        $alert= '<div class="alert alert-success alert-dismissable fade show" role="alert">
                            <strong>¡Perfecto!</strong> Tus datos han sido actualizados
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ik ik-x"></i></button>                         
                        </div>';
                
	        } else {
		        $alert= '<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>¡Error!</strong> Tu perfil no se ha actualizado correctamente.
                </div>';
	        }	
        } 
}


?>