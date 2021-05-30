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
$idSelec=$rowColor['iduser'];
$nameSelect=$rowSelec['name'];
$pictureSelect=$rowSelec['picture'];

//Establecemos el error de valición 
$error=false;
$msg='';

//Comprobamos si el formulario no tiene valores nulos
if (isset($_POST['addVac'])) {  
    
    //Introducimos los datos en variables, teniendo en cuenta la inyección de SQL 
    $name=mysqli_real_escape_string($con,$_POST['nameVac']); 
    $date = mysqli_real_escape_string($con,$_POST['dateVac']);      
    $notes= mysqli_real_escape_string($con,$_POST['notesVac']);    
    
    //Comprobamos que la fecha no esté vacia			
    if(empty($name) || empty($date) || empty($notes)) {
        $error = true;		
        $msg= '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    <strong>¡Error!</strong> Debe rellenar todos los campos.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>';

    //Si las otras condiciones no dan error, añadimos la vacuna puesta 
    }if (!$error) {
        if(mysqli_query($con, "INSERT INTO vaccines (name,date, notes,iduser) VALUES ('" . $name . "', '" . $date . "', '" . $notes . "', '" . $id . "')")) {
            $msg= '<div class="alert alert-success alert-dismissable fade show">
                        <strong>!Enhorabuena!</strong> ¡Vacuna Registrada Correctamente!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                       </button>                    
                   </div>';
            
        } else {
            $msg= '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    <strong>¡Error!</strong> No se ha podido registrar la vacuna.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                   </div>';
        }
    }
}

//Creamos la consulta a la base de datos
$sql="SELECT * FROM vaccines WHERE iduser='$id'";
$result=mysqli_query($con,$sql);
$tableVac='';
$idVac='';
$nameVac='';
$dateVac='';
$notesVac='';    

//Si encuentra resultados meterá los datos en el array mientras que haya datos
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $idVac=$row['id'];
        $nameVac=$row['name'];
        $dateVac=$row['date'];        
        $notesVac=$row['notes'];        
        //Añadimos el punto para que coja todos los resultados y los vaya introduciendo de forma dinamica en la tabla
        $tableVac.='<tr>
                    <td>'.$idVac.'</td>                   
                    <td>'.$nameVac.'</td>
                    <td>'.$dateVac.'</td>
                    <td>'.$notesVac.'</td>  
                    <td>
                        <div class="table-actions">  
                            <form action="vacunacion.php" method="POST">   
                            <input type="hidden" name="idV" value="'.$idVac.'">                                              
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
    $id_vac=$_POST['idV'];
    $sqlDelete="DELETE FROM vaccines WHERE id=$id_vac";
    mysqli_query($con,$sqlDelete);   
             
    header('Location:vacunacion.php'); 
}
?>