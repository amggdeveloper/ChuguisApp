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
$colorSelect=null;
$alertColor="";

if (isset($_POST['changeColor'])) {
    //Valor por defecto de la variable
    $colorSelect=null; 

	//Introducimos la selección de color por el usuario, teniendo en cuenta la inyección de SQL   
    $color=mysqli_real_escape_string($con,$_POST['example-color']);	   
    

    //Creamos un switch para las distintas opciones de color
    switch($color){
        case 'Blanco':
           $color='light'; 
           $queryColor="UPDATE profile SET color='$color' WHERE iduser='$id'"; 
           mysqli_query($con,$queryColor);
           $alertColor= '<div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>¡Genial!</strong> Has cambiado el color a Blanco.
                         </div>';
        break;
        case 'Negro':
            $color='dark'; 
            $queryColor="UPDATE profile SET color='$color' WHERE iduser='$id'"; 
            mysqli_query($con,$queryColor);
            $alertColor= '<div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>¡Genial!</strong> Has cambiado el color a Negro.
                        </div>';
        break;
        case 'Azul':
            $color='blue'; 
            $queryColor="UPDATE profile SET color='$color' WHERE iduser='$id'"; 
            mysqli_query($con,$queryColor);
            $alertColor= '<div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>¡Genial!</strong> Has cambiado el color a Azul.
                        </div>';
        break;
        case 'Rojo':
            $color='red'; 
            $queryColor="UPDATE profile SET color='$color' WHERE iduser='$id'"; 
            mysqli_query($con,$queryColor);
            $alertColor= '<div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>¡Genial!</strong> Has cambiado el color a Rojo.
                        </div>';
        break;
        case'Naranja':
            $color='orange'; 
            $queryColor="UPDATE profile SET color='$color' WHERE iduser='$id'"; 
            mysqli_query($con,$queryColor);
            $alertColor= '<div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>¡Genial!</strong> Has cambiado el color a Naranja.
                        </div>';
        break;
        case 'Verde':
            $color='green'; 
            $queryColor="UPDATE profile SET color='$color' WHERE iduser='$id'"; 
            mysqli_query($con,$queryColor);
            $alertColor= '<div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>¡Genial!</strong> Has cambiado el color a Verde.
                        </div>';
        break;
        case 'Morado':
            $color='purple'; 
            $queryColor="UPDATE profile SET color='$color' WHERE iduser='$id'"; 
            mysqli_query($con,$queryColor);
            $alertColor= '<div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>¡Genial!</strong> Has cambiado el color a Morado.
                        </div>';
        break;          
               
    }
    
}
//Hacemos la consulta a la base de datos para seleccionar los datos que hay en ella
$queryColorSelect="SELECT color FROM profile WHERE iduser='$id'";
$querySelec="SELECT * FROM users WHERE id='$id'";
//realizamos la consulta de selección a la base de datos
$resultColorSelect=mysqli_query($con,$queryColorSelect) ;
$resultSelec=mysqli_query($con,$querySelec) ;
//Introducimos el resultado en un array
$rowColor=mysqli_fetch_assoc($resultColorSelect);
$rowSelec=mysqli_fetch_assoc($resultSelec);
//Seleccionamos el color de la base de datos y lo introducimos en la variable correspondiente
$idSelec=$rowSelec['iduser'];
$colorSelect=$rowColor['color'];
$nameSelect=$rowSelec['name'];
$pictureSelect=$rowSelec['picture'];

?>