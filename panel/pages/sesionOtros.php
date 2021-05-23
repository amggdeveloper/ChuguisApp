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

//creamos la consulta a la base de datos  
$result=mysqli_query($con,"SELECT * FROM users WHERE id='$id'");  
 
//Introducimos el resultado en un array
$row=mysqli_fetch_assoc($result);

//Recogemos los datos en sus variables correspondientes
$nameUser=$row['name'];//recogemos el nombre de usuario
$picture=$row['picture'];//recogemos la imagen del usuario
$email=$row['mail'];//recogemos el email

//establecemos la zona horaria predeterminada
setlocale(LC_ALL,'es_Es.UTF-8');
$day=strftime("Hoy es %A"); //recogemos el dia actual
$date=strftime("%d-%B-%G");//recogemos la fecha actual
$time=strftime("%H:%M:%S h.");//recogemos la hora actual
$alert="";

//Inicializamos las variables para no dejarlas a null
$nameSelect='';//Nombre
$mailSelect='';//Email
$passSelect='';//Contraseña
$pictureSelect='default.png';//Imagen Avatar
$movilSelect='';//Movil
$descripSelect='';//Descripción
$countrySelect='';//País
$localSelect='';//Localidad

//Hacemos la consulta a la base de datos para seleccionar los datos que hay en ella
$querySelect="SELECT * FROM profile WHERE iduser='$id'";
$querySelec="SELECT * FROM users WHERE id='$id'";
//realizamos la consulta de selección a la base de datos
$resultSelect=mysqli_query($con,$querySelect) ;
$resultSelec=mysqli_query($con,$querySelec) ;

//Introducimos el resultado en un array
$rowSelect=mysqli_fetch_assoc($resultSelect);
$rowSelec=mysqli_fetch_assoc($resultSelec);

//Recogemos los datos en sus variables correspondientes
$nameSelect=$rowSelec['name'];//Nombre
$mailSelect=$rowSelec['mail'];//Email
$passSelect=$rowSelec['pass'];//Contraseña
$pictureSelect=$rowSelec['picture'];//Imagen Avatar
$movilSelect=$rowSelect['movil'];//Movil
$descripSelect=$rowSelect['descrip'];//Descripción
$countrySelect=$rowSelect['country'];//País
$localSelect=$rowSelect['local'];//Localidad

//Comprobamos si el formulario ha sido empezado
if (isset($_POST['profile'])) {
     
	//Introducimos los datos en variables, teniendo en cuenta la inyección de SQL
    $nombre = mysqli_real_escape_string($con,$_POST['example-name']);
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
    $sizePicture=$_FILES['pictureAvatar']['size'];

    //Si no existe imagen y tiene un tamaño correcto
    if($namePicture!="" && ($_FILES['pictureAvatar']['size']<= 200000)){
        //indicamos los formatos que permitimos subir a nuestro servidor
        if (($_FILES["pictureAvatar"]["type"] == "image/gif")
        || ($_FILES["pictureAvatar"]["type"] == "image/jpeg")
        || ($_FILES["pictureAvatar"]["type"] == "image/jpg")
        || ($_FILES["pictureAvatar"]["type"] == "image/png")){
        
        //ruta donde se guardarán las imágenes que subamos
        $path=$_SERVER['DOCUMENT_ROOT'].'/ChuguisApp/images/users/';   
        //Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
        move_uploaded_file($_FILES['pictureAvatar']['tmp_name'],$path.$namePicture);
        }else{
            $alert='<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>¡Error!</strong> No se puede subir una imagen con ese formato.
                    </div>';
        }
    }else{
        //si existe la variable pero se pasa del tamaño permitido
        if($namePicture!="") {
            $alert='<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>¡Error!</strong> La imagen es demasiado grande.
                    </div>';
        }
    }       
   
    //Variables con las consultas a la base de datos
    $queryUpdateUsers="UPDATE users SET name='$nombre',mail='$mail',pass='$pass', picture='$namePicture' WHERE id='$id'";
    $queryUpdateProfile="UPDATE profile SET movil='$phone',descrip='$descrip',country='$country', local='$local' WHERE iduser='$id'";
   
    //Introducimos los datos obtenidos del formulario en la base de datos profile	
    if(mysqli_query($con,$queryUpdateProfile) && (mysqli_query($con,$queryUpdateUsers))){
		$alert= '<div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>¡Enhorabuena!</strong> Tu perfil se ha actualizado correctamente.
                </div>';
	} else {
		$alert= '<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>¡Error!</strong> Tu perfil no se ha actualizado correctamente.
                </div>';
	}	
    //Cerramos la conexión a la base de datos
    mysqli_close($con); 
}

?>