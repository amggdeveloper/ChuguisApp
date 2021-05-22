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
$id=$_SESSION['idUser'];//recogemos el id de usuario de sesión

//creamos la consulta a la base de datos  
$result=mysqli_query($con,"SELECT * FROM users WHERE id='$id'") or die("Error de Sesión");  
 
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

?>