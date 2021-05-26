<?php
//Conectamos a la base de datos
include '../includes/conexion.php';

//Iniciamos la sesión
session_start();

//Comprobamos si la sesión está vacia
if(empty($_SESSION['active'])){   
    header('Location:../login.php');
}

//Instanciamos e inicializamos las variables del usuario
$id=$_SESSION['idUser'];

//Creamos una consulta a la base de datos para insertar los datos por defecto  
mysqli_query($con, "INSERT INTO profile (movil, descrip,country,local,color,iduser) VALUES ('vacio','vacio','vacio','blue','".$id."')");

//Creamos una consulta para seleccionar los datos de la base de datos 
$result=mysqli_query($con,"SELECT * FROM users WHERE id='$id'") or die("Error de Sesión");//Usuarios   
$resultColor=mysqli_query($con,"SELECT color FROM profile WHERE iduser='$id'") or die("Error de Sesión");//Perfil
$resultBabies=mysqli_query($con,"SELECT COUNT(*) total FROM babies WHERE usuario='$id'") or die("Error de Sesión");//Contar cuantos registro en la tabla bebé hay
$resultLastId=mysqli_query($con,"SELECT MAX(id) AS max FROM babies WHERE usuario='$id'")or die("Error de Sesión");//El último id introducido

//Recogemos los resultados de la consulta
$row=mysqli_fetch_assoc($result);
$rowColor=mysqli_fetch_assoc($resultColor);
$rowBabies=mysqli_fetch_assoc($resultBabies);
$rowLastId=mysqli_fetch_assoc($resultLastId);
$lastId=$rowLastId['max'];
$resultDataBabies=mysqli_query($con,"SELECT * FROM babies WHERE id='$lastId'") or die("Error de Sesión");//Datos último bebe
$rowDataBabies=mysqli_fetch_assoc($resultDataBabies);

//Introducimos los datos obtenidos en variables
$nameUser=$row['name'];//nombre usuario
$picture=$row['picture'];//Imagen Avatar usuario
$color='';
$lastHeight='';
$lastWeight='';
$countBabies=$rowBabies['total'];
$date='';
$percentil='';


//Comprobamos que no esten sin definir
if(isset($rowColor['color'],$rowDataBabies['height'],$rowDataBabies['weight'])){//color usuario
    $color=$rowColor['color'];
    $lastHeight=$rowDataBabies['height'];
    $lastWeight=$rowDataBabies['weight']; 
    $cmM=$lastHeight/100;//Convertimos los cm a metros para calcular el IMC del bebé
    $grKg=$lastWeight/1000;//Convertimos los gramos en kilo para calcular el IMC del bebé
    $imc=($cmM*$cmM)/$grKg;//IMC para sacar el percentil
    $percentil=round($imc*100,2);//Redondeamos a dos decimales  

}



?>