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

//Comprobamos si el formulario no tiene valores nulos
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
    
    //Si las otras condiciones no dan error, añadimos la altura	
    }if (!$error) {
        if(mysqli_query($con, "INSERT INTO height(height,date, notes) VALUES ('" . $height . "', '" . $date . "', '" . $notes . "')")) {
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

//Si encuentra resultados meterá los datos en el array mientras que haya datos
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $idH=$row['id'];
        $nameBb=$row['name'];
        $dateBb=$row['date'];
        $heightBb=$row['height'];
        $weightBb=$row['weight'];
        $notesBb=$row['notes'];        
        //Añadimos el punto para que coja todos los resultados y los vaya introduciendo de forma dinamica en la tabla
        $table.='<tr>
                    <td>'.$idBb.'</td>
                    <td><img src="../img/portfolio-1.jpg" class="table-user-thumb" alt=""></td>
                    <td>'.$nameBb.'</td>
                    <td>'.$dateBb.'</td>
                    <td>'.$heightBb.'</td>
                    <td>'.$weightBb.'</td>
                    <td>
                        <div class="table-actions">  
                            <form action="altura.php" method="POST">   
                            <button name="select" class="btn-info"><i class="ik ik-plus"></i></button>                   
                            <button name="delete" class="btn-danger"><i class="ik ik-trash-2"></i></button>
                            </form>  
                        </div>
                    </td>
                </tr>';
    }
}else{
    
}
//Creamos la consulta para borrar las entradas que seleccionemos
if(isset($_POST['delete'])){
    $sqlDelete="DELETE FROM babies WHERE id='$idBb'";
    mysqli_query($con,$sqlDelete);
    header('Location:altura.php');
}

?>