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
if (isset($_POST['addTake'])) {  
    
    //Introducimos los datos en variables, teniendo en cuenta la inyección de SQL 
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $breast= mysqli_real_escape_string($con,$_POST['breast']); 
    $sleep= mysqli_real_escape_string($con,$_POST['sleep']); 
    $date = mysqli_real_escape_string($con,$_POST['date']);
    $time=mysqli_real_escape_string($con,$_POST['time']);      
       
    
    //Comprobamos que la fecha no esté vacia			
    if(empty($name) || empty($breast) || empty($sleep)|| empty($date)|| empty($time)) {
        $error = true;		
        $msg= '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    <strong>¡Error!</strong> Debe rellenar todos los campos.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>';

    //Si las otras condiciones no dan error, añadimos la vacuna puesta 
    }if (!$error) {
        if(mysqli_query($con, "INSERT INTO takes (name,breast,sleep,date,time,iduser) VALUES ('" . $name . "','" . $breast . "', '" . $sleep . "','" . $date . "', '" . $time. "', '" . $id . "')")) {
            $msg= '<div class="alert alert-success alert-dismissable fade show">
                        <strong>!Enhorabuena!</strong> ¡Toma Registrada Correctamente!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                       </button>                    
                   </div>';
            
        } else {
            $msg= '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    <strong>¡Error!</strong> No se ha podido registrar la toma.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                   </div>';
        }
    }
}

//Creamos la consulta a la base de datos
$sql="SELECT * FROM takes WHERE iduser='$id'";
$result=mysqli_query($con,$sql);
$takesInfo='';
$idTakes='';
$nameTakes='';
$breastTakes='';
$sleepTakes='';
$dateTakes=''; 
$timeTakes='';
$imgBreast='tomaPechoD.jpg'; 
$imgSleep='tomaDuermeSi.jpg';

//Si encuentra resultados meterá los datos en el array mientras que haya datos
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $idTakes=$row['id'];
        $nameTakes=$row['name'];
        $breastTakes=$row['breast']; 
        $sleepTakes=$row['sleep'];       
        $dateTakes=$row['date']; 
        $timeTakes=$row['time'];   

        //Creamos un condicional para la imagen del pecho en la toma
        if($breastTakes=='Derecho'){
            $imgBreast='tomaPechoD.jpg';
        }else{
            $imgBreast='tomaPechoI.jpg';
        }
        //Creamos un condicional para la imagen de si duerme o no el bebé
        if($sleepTakes=='Si'){
            $imgSleep='tomaDuermeSi.jpg';
        }else{
            $imgSleep='tomaDuermeNo.jpg';
        }

        //Añadimos el punto para que coja todos los resultados y los vaya introduciendo de forma dinamica en la tabla
        $takesInfo.='<div class="card d-flex flex-row mb-3">
                         <a class="d-flex card-img" href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem">
                            <img src="../img/'.$imgBreast.'" alt="imagen último pecho" class="list-thumbnail responsive border-0">                                              
                         </a>
                    <div class="d-flex flex-grow-1 min-width-zero card-content">
                    <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">                
                        <a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem">'.$nameTakes.'</a>
                    <div class="w-15 w-xs-100">
                        <span class="badge badge-pill badge-info">'.$breastTakes.'</span>
                    </div>
                        <p class="mb-1 text-muted text-small category w-15 w-xs-100">'.$sleepTakes.'</p>
                        <p class="mb-1 text-muted text-small date w-15 w-xs-100">'.$dateTakes.'</p>   
                        <p class="mb-1 text-muted text-small date w-15 w-xs-100">'.$timeTakes.'</p>  
                        <div class="table-actions">  
                            <form action="tomas.php" method="POST">   
                                <input type="hidden" name="idTakes" value="'.$idTakes.'">                                              
                                <button name="deleteTakes" class="btn-danger"><i class="ik ik-trash"></i></button>                                                            
                            </form>  
                    </div>                                               
                </div>                                                
            </div>
        </div>';
        }
}else{
    
}

//Creamos la consulta para borrar las entradas que seleccionemos
if(isset($_POST['deleteTakes'])){
    $id_takes=$_POST['idTakes'];
    $sqlDelete="DELETE FROM takes WHERE id='$id_takes'";
    mysqli_query($con,$sqlDelete);
    header('Location:tomas.php');
}
?>
