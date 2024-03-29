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
$queryBabies="SELECT * FROM babies WHERE usuario='$id'";
//realizamos la consulta de selección a la base de datos
$resultColorSelect=mysqli_query($con,$queryColorSelect) ;
$resultSelec=mysqli_query($con,$querySelec) ;
$resultBabies=mysqli_query($con,$queryBabies);
//Introducimos el resultado en un array
$rowColor=mysqli_fetch_assoc($resultColorSelect);
$rowSelec=mysqli_fetch_assoc($resultSelec);
$rowBabies=mysqli_fetch_assoc($resultBabies);
//Seleccionamos el color de la base de datos y lo introducimos en la variable correspondiente
$colorSelect='';
if(isset($rowColor['color'])){
    $colorSelect=$rowColor['color'];
}
$idSelec=$rowSelec['iduser'];
$nameSelect=$rowSelec['name'];
$pictureSelect=$rowSelec['picture'];
$idBaby=$rowBabies['id'];

//Establecemos el error de valición 
$error=false;
$msg='';

//Comprobamos si el formulario no tiene valores nulos
if (isset($_POST['addWeight'])) {

    //Introducimos los datos en variables, teniendo en cuenta la inyección de SQL   
    $date = mysqli_real_escape_string($con,$_POST['date']);
    $weight = mysqli_real_escape_string($con,$_POST['weight']);    
    $notes= mysqli_real_escape_string($con,$_POST['notes']);    
    
    //Comprobamos que la fecha no esté vacia			
    if(empty($weight) || empty($date) || empty($notes)) {
        $error = true;		
        $msg= '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    <strong>¡Error!</strong> Debe rellenar todos los campos.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>';

    }elseif(!is_numeric($weight)){
        $error = true;		
        $msg= '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    <strong>¡Error!</strong> El campo peso debe ser númerico.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>';
    
    //Si las otras condiciones no dan error, añadimos la altura	
    }elseif (!$error) {
        if(mysqli_query($con, "INSERT INTO weight(weight,date, notes,idbaby) VALUES ('" . $weight . "', '" . $date . "', '" . $notes . "','" . $idBaby . "')")) {
            $msg= '<div class="alert alert-success alert-dismissable fade show">
                        <strong>!Enhorabuena!</strong> ¡Peso Registrado Correctamente!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>                    
                    </div>';
            
        } else {
            $msg= '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                        <strong>¡Error!</strong> No se ha podido registrar el peso.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>                    
                        </div>';
        }
    }
}

//Creamos la consulta a la base de datos
$queryWeight="SELECT * FROM weight WHERE idBaby='$idBaby'";
$resultWeight=mysqli_query($con,$queryWeight);
$tableWeight='';
$idW='';
$dateW='';
$weightW='';
$notesW='';
$idbabyPe='';   

//Si encuentra resultados meterá los datos en el array mientras que haya datos
if(mysqli_num_rows($resultWeight)>0){
    while($rowWeight=mysqli_fetch_assoc($resultWeight)){
        $idW=$rowWeight['id'];
        $dateW=$rowWeight['date'];       
        $weightW=$rowWeight['weight'];       
        $notesW=$rowWeight['notes'];
        $idbabyPe=$rowWeight['idbaby'];        
        //Añadimos el punto para que coja todos los resultados y los vaya introduciendo de forma dinamica en la tabla
        $tableWeight.='<tr>
                    <td>'.$idW.'</td>               
                    <td>'.$dateW.'</td>
                    <td>'.$weightW.'</td>
                    <td>'.$notesW.'</td>
                    <td>'.$idbabyPe.'</td>
                    <td>
                        <div class="table-actions">  
                            <form action="peso.php" method="POST"> 
                            <input type="hidden" name="idW" value="'.$idW.'"> 
                            <button name="delete" class="btn-danger"><i class="ik ik-trash-2"></i></button>
                            </form>  
                        </div>
                    </td>
                </tr>';
    }
}else{
    
}
//DATOS GRAFICO
$queryW="SELECT * FROM weight WHERE idbaby=$idBaby";
$resultW=mysqli_query($con,$queryW);
$weightGrap='';
$dateGrap='';
$weights='';
//Recogemos los datos de la base de datos de peso
if(mysqli_num_rows($resultW)>0){
    while($rowW=mysqli_fetch_array($resultW)){         
        $weightGrap=$rowW['weight'];
        $dateGrap=$rowW['date'];    
        
        $weights.=($weightGrap.',');
      
        //Recogemos solo el mes para posteriormente meterlo en una variable para ver los meses de la gráfica
        $month='';
        $dateSplit=explode('-',$dateGrap);
        $month=$dateSplit[1];//mes
    //condicional para recoger el resultado y meterlo en una variable
    switch($month){
        case 1:
            $month='Enero';            
            break;
        case 2:
            $month='Febrero';            
            break;  
        case 3:
            $month='Marzo';           
            break;
        case 4:
            $month='Abril';            
             break;  
        case 5:
            $month='Mayo';         
            break;
        case 6:
            $month='Junio';
            break;  
        case 7:
            $month='Julio';            
            break;
        case 8:
            $month='Agosto';            
            break; 
        case 9:
            $month='Septiembre';           
            break;
        case 10:
            $month='Octubre';           
            break;  
        case 11:
            $month='Noviembre';            
            break;
        case 12:
            $month='Diciembre';            
            break;   
        }
        
    }  

}

//Creamos la consulta para borrar las entradas que seleccionemos
if(isset($_POST['delete'])){
    $id_weight=$_POST['idW'];
    $sqlDelete="DELETE FROM weight WHERE id=$id_weight";
    mysqli_query($con,$sqlDelete);
    header('Location:peso.php');
}

?>