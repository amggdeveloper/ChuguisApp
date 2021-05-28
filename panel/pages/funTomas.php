<?php 

//Añadimos la conexión a la base de datos
include_once '../../includes/conexion.php';

//Iniciamos sesión
session_start();

//Comprobamos si la sesión está vacia
if(empty($_SESSION['active'])){
    header('Location:../../login.php'); //redirigimos al login
}

//Instanciamos e inicializamo las variables del usuario
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

?>
