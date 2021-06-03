<?php
//no mostramos los errores en el front-end
error_reporting(0);

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
$idSelec='';//id
$nameSelect='';//nombre usuario
$mailSelect='';//email
$pictureSelect='';//imagen avatar

//Recogemos los datos en sus variables correspondientes
$idSelec=$rowSelec['iduser'];
$nameSelect=$rowSelec['name'];
$mailSelect=$rowSelec['mail'];    
$pictureSelect=$rowSelec['picture'];

//Creamos una consulta a la base de datos para insertar los datos por defecto  
if(isset($_POST['example-name'])==""){  
    $queryProfile="INSERT INTO profile (movil, descrip, country, local, color, iduser) VALUES('vacio','vacio','vacio','blue',$id)";
    mysqli_query($con, $queryProfile);
}

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
$movilSelect=$rowColor['movil'];//Movil
$descripSelect=$rowColor['descrip'];//Descripción
$countrySelect=$rowColor['country'];//País
$localSelect=$rowColor['local'];//Localidad 
$nameSelect=$rowSelec['name'];//Nombre
$mailSelect=$rowSelec['mail'];//Email 
$passSelect=$rowSelec['pass'];//Contraseña    

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
    $alert='';  

    //Si la imagen tiene un tamaño correcto y los tipos
    if($sizePicture>1000000){
             $alert='<div class="alert alert-warning alert-dismissable fade show" role="alert"> 
                            <strong>¡Error, Imagen Demasiado Grande!</strong> No se puede subir una imagen con ese tamaño                         
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>                                                                         
                        </div>';

            }if(empty($alert)){
                //ruta donde se guardarán las imágenes que subamos
                $path=$_SERVER['DOCUMENT_ROOT'].'/ChuguisApp/images/users/';   
                //Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
                move_uploaded_file($_FILES['pictureAvatar']['tmp_name'],$path.$namePicture);
    
                //Variables con las consultas a la base de datos
                $queryUpdateUsers="UPDATE users SET name='$name',mail='$mail',pass='$passCifrada',pass2='$passCifrada',picture='$namePicture' WHERE id='$id'";
                $queryUpdateProfile="UPDATE profile SET movil='$phone',descrip='$descrip',country='$country', local='$local' WHERE iduser='$id'";
                
                if($_POST['example-password']=="" or $_FILES['pictureAvatar']['name']==null or $_POST['example-email']=="" or $_POST['example-name']==""){
                    $alert= '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                                <strong>¡Error!</strong> No puede haber campos en blanco
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>                            
                            </div>';
                   
                }elseif(mysqli_query($con,$queryUpdateProfile) && mysqli_query($con,$queryUpdateUsers)){   
                    header("Location:perfil.php");                  
                         $alert= '<div class="alert alert-success alert-dismissable fade show" role="alert">
                                    <strong>¡Perfecto!</strong> Tus datos han sido actualizados   
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>                                                       
                                 </div>';
                        
                                
                } else {
                        $alert= '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                                    <strong>¡Error!</strong> Tu perfil no se ha actualizado correctamente.
                                    <button type="button" class="close" data-dismiss="alert" aria-laber="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>                                
                                </div>';
            }	
        }
    }   

?>