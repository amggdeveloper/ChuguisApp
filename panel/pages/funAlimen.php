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

//Establecemos el error de valición 
$error=false;
$msg='';

//Comprobamos si el formulario no tiene valores nulos
if (isset($_POST['addFood'])) {  
    
    //Introducimos los datos en variables, teniendo en cuenta la inyección de SQL 
    $name=mysqli_real_escape_string($con,$_POST['nameFood']); 
    $date = mysqli_real_escape_string($con,$_POST['date']);      
    $week= mysqli_real_escape_string($con,$_POST['week']);    
    
    //Comprobamos que la fecha no esté vacia			
    if(empty($name) || empty($date) || empty($week)) {
        $error = true;		
        $msg= '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    <strong>¡Error!</strong> Debe rellenar todos los campos.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>';

    //Si las otras condiciones no dan error, añadimos la vacuna puesta 
    }if (!$error) {
        if(mysqli_query($con, "INSERT INTO food (name,date, week,iduser) VALUES ('" . $name . "', '" . $date . "', '" . $week . "', '" . $id . "')")) {
            $msg= '<div class="alert alert-success alert-dismissable fade show">
                        <strong>!Enhorabuena!</strong> ¡Alimento Registrado Correctamente!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                       </button>                    
                   </div>';
            
        } else {
            $msg= '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    <strong>¡Error!</strong> No se ha podido registrar el alimento.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                   </div>';
        }
    }
}

//Creamos la consulta a la base de datos
$sql="SELECT * FROM food WHERE iduser='$id'";
$result=mysqli_query($con,$sql);
$tableFood='';
$idFood='';
$nameFood='';
$dateFood='';
$weekFood='';    

//Si encuentra resultados meterá los datos en el array mientras que haya datos
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $idFood=$row['id'];
        $nameFood=$row['name'];
        $dateFood=$row['date'];        
        $weekFood=$row['week'];        
        //Añadimos el punto para que coja todos los resultados y los vaya introduciendo de forma dinamica en la tabla
        $tableFood.='<tr>
                    <td>'.$idFood.'</td>                   
                    <td>'.$nameFood.'</td>
                    <td>'.$dateFood.'</td>
                    <td>'.$weekFood.'</td>  
                    <td>
                        <div class="table-actions">  
                            <form action="alimentos.php" method="POST">   
                            <input type="hidden" name="idFood" value="'.$idFood.'">                                              
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
    $id_food=$_POST['idFood'];
    $sqlDelete="DELETE FROM food WHERE id=$id_food";
    mysqli_query($con,$sqlDelete);   
             
    header('Location:alimentos.php'); 
}
?>