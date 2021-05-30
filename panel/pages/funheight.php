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
if (isset($_POST['addHeight'])) {

    //Introducimos los datos en variables, teniendo en cuenta la inyección de SQL   
    $date = mysqli_real_escape_string($con,$_POST['date']);
    $height = mysqli_real_escape_string($con,$_POST['height']);    
    $notes= mysqli_real_escape_string($con,$_POST['notes']);    
    
     //Comprobamos que la fecha no esté vacia			
     if(empty($height) || empty($date) || empty($notes)) {
        $error = true;		
        $msg= '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    <strong>¡Error!</strong> Debe rellenar todos los campos.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>';
    //Si las otras condiciones no dan error, añadimos la altura	
    }if (!$error) {
        if(mysqli_query($con, "INSERT INTO height(height,date, notes,idbaby) VALUES ('" . $height . "', '" . $date . "', '" . $notes . "', '" . $idBaby . "')")) {
            $msg= '<div class="alert alert-success alert-dismissable fade show">
                        <strong>!Enhorabuena!</strong> ¡Altura Registrada Correctamente!
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                    </div>';
            
        } else {
            $msg= '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    <strong>¡Error!</strong> No se ha podido registrar la altura.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                   </div>';
        }
    }
}

//Creamos la consulta a la base de datos
$queryHeight="SELECT * FROM height WHERE idBaby='$idBaby'";
$resultHeight=mysqli_query($con,$queryHeight);
$tableHeight='';
$idH='';
$dateAl='';
$heightAl='';
$notesAl='';   
$idbabyAl=''; 
$date='';
$height='';

//Si encuentra resultados meterá los datos en el array mientras que haya datos
if(mysqli_num_rows($resultHeight)>0){
    while($rowHeight=mysqli_fetch_assoc($resultHeight)){
        $idH=$rowHeight['id'];
        $heightAl=$rowHeight['height'];
        $dateAl=$rowHeight['date'];      
        $notesAl=$rowHeight['notes'];   
        $idbabyAl=$rowHeight['idbaby'];     
        //Añadimos el punto para que coja todos los resultados y los vaya introduciendo de forma dinamica en la tabla
        $tableHeight.='<tr>
                    <td>'.$idH.'</td>                             
                    <td>'.$heightAl.'</td>
                    <td>'.$dateAl.'</td>
                    <td>'.$notesAl.'</td>
                    <td>'.$idbabyAl.'</td>
                    <td>
                        <div class="table-actions">  
                            <form action="altura.php" method="POST">    
                            <input type="hidden" name="idH" value="'.$idH.'">                                            
                            <button type="submit" name="delete" class="btn-danger"><i class="ik ik-trash-2"></i></button>
                            </form>  
                        </div>
                    </td>
                </tr>';               
    }
}else{
    
}

//DATOS GRAFICO
$queryH="SELECT * FROM height";
$resultH=mysqli_query($con,$queryH);
$dateGrap='';
$heightGrap='';
if(mysqli_num_rows($resultH)>0){
    while($rowH=mysqli_fetch_array($resultH)){
        $dateGrap=$rowH['date'];   
        $heightGrap=$rowH['height'];  
        //Cambiamos el formato de fecha para poder introducirlo en la página de inicio de forma correcta
        $dateSplitH=explode('-',$dateGrap);
        $dayH=$dateSplitH[2];//dia
        $monthH=$dateSplitH[1];//mes
        $yearH=$dateSplitH[0];//año

        //Creamos un switch para cambiar el número por el nombre del mes
        switch($monthH){
            case 1:
            $monthH='Enero';
            break;
        case 2:
            $monthH='Febrero';
            break; 
        case 3:
            $monthH='Marzo';
            break; 
        case 4:
            $monthH='Abril';
            break;
        case 5:
            $monthH='Mayo';
            break; 
        case 6:
            $monthH='Junio';
            break; 
        case 7:
            $monthH='Julio';
            break;
        case 8:
            $monthH='Agosto';
            break; 
        case 9:
            $monthH='Septiembre';
            break; 
        case 10:
            $monthH='Octubre';
            break;
        case 11:
            $monthH='Novimbre';
            break; 
        case 12:
            $monthH='Diciembre';
            break;    
        }  
                        
        $arrayDate[]=$monthH;
        $arrayHeight[]=$heightGrap;
    }
    
    

}

//Creamos la consulta para borrar las entradas que seleccionemos
if(isset($_POST['delete'])){
    $id_height=$_POST['idH'];
    $sqlDelete="DELETE FROM height WHERE id=$id_height";
    mysqli_query($con,$sqlDelete);
    header('Location:altura.php');
}


?>