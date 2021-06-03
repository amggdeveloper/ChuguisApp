<?php 
//no mostramos los errores en el front-end
error_reporting(0);
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

//Establecemos el error de valición 
$error=false;
$msg='';

//Comprobamos si el formulario no tiene valores nulos
if (isset($_POST['addDates'])) {

//Introducimos los datos en variables, teniendo en cuenta la inyección de SQL
$name = mysqli_real_escape_string($con,$_POST['example-name']);
$date = mysqli_real_escape_string($con,$_POST['example-date']);
$height = mysqli_real_escape_string($con,$_POST['example-height']);
$weight= mysqli_real_escape_string($con,$_POST['example-weight']);
$notes= mysqli_real_escape_string($con,$_POST['example-notes']);
$gender= mysqli_real_escape_string($con,$_POST['example-gender']);

//Comprobamos que el nombre no esté vacio
if (empty($name)){
    $error = true;		
    $msg= '<div class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>¡Error en el nombre!</strong> Debe rellenar el campo nombre.
            </div>';

//Comprobamos que la fecha no esté vacia			
}if(empty($date)) {
    $error = true;		
    $msg= '<div class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>¡Error en la fecha!</strong> Debe rellenar el campo fecha.
            </div>';

//Comprobamos que la altura no esté vacia				
}if(empty($height)) {
    $error = true;		
    $msg= '<div class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>¡Error en la altura!</strong> Debe rellenar la altura.
            </div>';

//Comprobamos que el peso no esté vacio			
}if(empty($weight)) {
$error = true;		
$msg='<div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>¡Error en el peso!</strong> Debe rellenar el peso.
        </div>';			
//Comprobamos que las notas no estén vacias			
}if(empty($notes)){
    $error = true;		
    $msg= '<div class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>¡Error en las notas!</strong> Debe rellenar notas
            </div>';
//Comprobamos que el género no estén vacias		
}if(empty($gender)){
    $error = true;		
    $msg= '<div class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>¡Error en el género!</strong> Debe seleccionar un género
            </div>';            

//Si las otras condiciones no dan error, añadimos al bebé	
}if (!$error) {
    if(mysqli_query($con, "INSERT INTO babies(name,date,height,weight, notes,gender,usuario) VALUES('" . $name . "', '" . $date . "', '" . $height . "','" . $weight . "','" . $notes . "','" . $gender . "','" . $id . "')")) {
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

//Creamos la consulta a la base de datos
$sql="SELECT * FROM babies WHERE usuario='$id'";
$result=mysqli_query($con,$sql);
$table='';
$idBb='';
$nameBb='';
$dateBb='';
$heightBb='';
$weightBb='';
$notesBb='';  
$genderBb='';  

//Si encuentra resultados meterá los datos en el array mientras que haya datos
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $idBb=$row['id'];
        $nameBb=$row['name'];
        $dateBb=$row['date'];
        $heightBb=$row['height'];
        $weightBb=$row['weight'];
        $notesBb=$row['notes'];
        $genderBb=$row['gender'];        
        //Añadimos el punto para que coja todos los resultados y los vaya introduciendo de forma dinamica en la tabla
        $table.='<tr>
                    <td>'.$idBb.'</td>
                    <td><img src="../img/portfolio-1.jpg" class="table-user-thumb" alt="" id="avatarTable"></td>
                    <td>'.$nameBb.'</td>
                    <td>'.$dateBb.'</td>
                    <td>'.$heightBb.'</td>
                    <td>'.$weightBb.'</td>
                    <td>'.$notesBb.'</td>
                    <td>'.$genderBb.'</td>
                    <td>
                        <div class="table-actions">  
                            <form action="bebes.php" method="POST">   
                            <input type="hidden" name="idBb" value="'.$idBb.'">                    
                            <button type="submit" name="delete" class="btn-danger"><i class="ik ik-trash-2"></i></button>
                            </form>  
                        </div>
                    </td>
                </tr>';
    }
}else{
    
}
//Creamos la consulta para borrar las entradas que seleccionemos
if(isset($_POST['delete'])){
    $id_bb=$_POST['idBb'];
    $sqlDelete="DELETE FROM babies WHERE id=$id_bb";
    mysqli_query($con,$sqlDelete);
    header('Location:bebes.php');
}

?>