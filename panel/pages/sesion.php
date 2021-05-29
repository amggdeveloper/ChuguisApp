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

//Creamos una consulta a la base de datos para insertar los datos por defecto  
mysqli_query($con, "INSERT INTO profile (movil, descrip,country,local,color,iduser) VALUES ('vacio','vacio','vacio','blue','".$id."')");

//Creamos una consulta para seleccionar los datos de la base de datos 
$result=mysqli_query($con,"SELECT * FROM users WHERE id='$id'") or die("Error de Sesión");//Usuarios   
$resultColor=mysqli_query($con,"SELECT color FROM profile WHERE iduser='$id'") or die("Error de Sesión");//Perfil
$resultBabies=mysqli_query($con,"SELECT COUNT(*) total FROM babies WHERE usuario='$id'") or die("Error de Sesión");//Contar cuantos registro en la tabla bebé hay
$resultLastId=mysqli_query($con,"SELECT MAX(id) AS max FROM babies WHERE usuario='$id'")or die("Error de Sesión");//El último id introducido
$resultLastIdVac=mysqli_query($con,"SELECT MAX(id) AS max FROM vaccines WHERE iduser='$id'")or die("Error de Sesión");//El último id introducido

//Recogemos los resultados de la consulta
$row=mysqli_fetch_assoc($result);
$rowColor=mysqli_fetch_assoc($resultColor);
$rowBabies=mysqli_fetch_assoc($resultBabies);
$rowLastId=mysqli_fetch_assoc($resultLastId);
$rowLastIdVac=mysqli_fetch_assoc($resultLastIdVac);
$lastId=$rowLastId['max'];
$lastIdVac=$rowLastIdVac['max'];
$resultDataBabies=mysqli_query($con,"SELECT * FROM babies WHERE id='$lastId'") or die("Error de Sesión");//Datos último bebe
$resultDataVac=mysqli_query($con,"SELECT * FROM vaccines WHERE id='$lastIdVac'") or die("Error de Sesión");//Datos última vacuna
$rowDataBabies=mysqli_fetch_assoc($resultDataBabies);
$rowDataVac=mysqli_fetch_assoc($resultDataVac);

//Introducimos los datos obtenidos en variables
$nameUser=$row['name'];//nombre usuario
$picture=$row['picture'];//Imagen Avatar usuario
$color='';
$lastHeight='';
$lastWeight='';
$countBabies=$rowBabies['total'];
$date='';
$percentil='';
$lastGender='';
$lastBabyName='';
$msg='';
//Variables para vacunas
$lastNameVac='';
$lastDateVac='';
$lastNotesVac='';


//Comprobamos que no esten sin definir
if(isset($rowColor['color'],$rowDataBabies['height'],$rowDataBabies['weight'],$rowDataBabies['gender'],$rowDataBabies['name'],$rowDataVac['name'],$rowDataVac['date'],$rowDataVac['notes'])){//color usuario
    $color=$rowColor['color'];
    $lastHeight=$rowDataBabies['height'];
    $lastWeight=$rowDataBabies['weight']; 
    $cmM=$lastHeight/100;//Convertimos los cm a metros para calcular el IMC del bebé
    $grKg=$lastWeight/1000;//Convertimos los gramos en kilo para calcular el IMC del bebé
    $imc=($cmM*$cmM)/$grKg;//IMC para sacar el percentil
    $percentil=round($imc*100,2);//Redondeamos a dos decimales  
    $lastGender=$rowDataBabies['gender'];
    $lastBabyName=$rowDataBabies['name'];
    $lastNameVac=$rowDataVac['name'];//último nombre de la vacuna puesta
    $lastDateVac=$rowDataVac['date'];//última fecha de la vacuna puesta
    $lastNotesVac=$rowDataVac['notes'];//últimas notas de la vacuna puesta

}

//Contabilizamos los registros en las tablas de la base de datos para el panel de control del administrador
$cUsers=mysqli_query($con,"SELECT COUNT(*) total FROM users") or die("Error de Sesión");//total usuarios en BD
$cBabies=mysqli_query($con,"SELECT COUNT(*) total FROM babies") or die("Error de Sesión");//total bebés en BD 
$cNews=mysqli_query($con,"SELECT COUNT(*) total FROM newsletter") or die("Error de Sesión");//total newsletter en BD
$cProfile=mysqli_query($con,"SELECT COUNT(*) total FROM profile") or die("Error de Sesión");//total perfiles en BD

//Recogemos el resultado de las consultas
$rUsers=mysqli_fetch_assoc($cUsers);
$rBabies=mysqli_fetch_assoc($cBabies);
$rNews=mysqli_fetch_assoc($cNews);
$rProfile=mysqli_fetch_assoc($cProfile);

//Introducimos los datos obtenidos en variables
$totalUsers=$rUsers['total'];
$totalBabies=$rBabies['total'];
$totalNews=$rNews['total'];
$totalProfile=$rProfile['total'];

//Seleccionar imagen para el Género en la pestaña de inicio del panel de control
if($lastGender==='Masculino'){
    $msg= '<div class="progres-value"><i class="fas fa-mars text-grey f-6"></i></div>';   

}else{
    $msg= '<div class="progres-value"><i class="fas fa-venus text-grey f-6"></i></div>';     
}

//Cambiamos el formato de fecha para poder introducirlo en la página de inicio de forma correcta
$dateSplitVac=explode('-',$lastDateVac);
$dayVac=$dateSplitVac[2];//dia
$monthVac=$dateSplitVac[1];//mes
$yearVac=$dateSplitVac[0];//año

//Creamos un switch para cambiar el número por el nombre del mes
switch($monthVac){
    case 1:
        $monthVac='Enero';
        break;
    case 2:
        $monthVac='Febrero';
        break; 
    case 3:
        $monthVac='Marzo';
        break; 
    case 4:
        $monthVac='Abril';
        break;
    case 5:
        $monthVac='Mayo';
        break; 
    case 6:
        $monthVac='Junio';
        break; 
    case 7:
        $monthVac='Julio';
        break;
    case 8:
        $monthVac='Agosto';
        break; 
    case 9:
        $monthVac='Septiembre';
        break; 
    case 10:
        $monthVac='Octubre';
        break;
    case 11:
        $monthVac='Novimbre';
        break; 
    case 12:
        $monthVac='Diciembre';
        break;     
        
}
?>