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
mysqli_query($con, "INSERT INTO profile (movil, descrip,country,local,color,iduser) VALUES ('vacio','vacio','vacio','blue','".$id."')");
$result=mysqli_query($con,"SELECT * FROM users WHERE id='$id'") or die("Error de Sesión");   
$resultColor=mysqli_query($con,"SELECT color FROM profile WHERE iduser='$id'") or die("Error de Sesión");  
$row=mysqli_fetch_assoc($result);
$rowColor=mysqli_fetch_assoc($resultColor);
$nameUser=$row['name'];
$picture=$row['picture'];
$color='';
if(isset($rowColor['color'])){
    $color=$rowColor['color'];
}


?>