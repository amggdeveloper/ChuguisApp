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

//TABLA USUARIOS
//Creamos la consulta a la base de datos de los usuarios
$sqlUser="SELECT * FROM users";
$resultUser=mysqli_query($con,$sqlUser);
$tableUser='';
$idUser='';
$nameUser='';
$emailUser='';
$passUser='';
$pictureUser='';
$createUser='';  
$roleUser='';  

//Si encuentra resultados meterá los datos en el array mientras que haya datos
if(mysqli_num_rows($resultUser)>0){
    while($rowUser=mysqli_fetch_assoc($resultUser)){
        $idUser=$rowUser['id'];
        $nameUser=$rowUser['name'];      
        $emailUser=$rowUser['mail'];
        $passUser=$rowUser['pass'];
        $pictureUser=$rowUser['picture'];     
        $createUser=$rowUser['created'];  
        $roleUser=$rowUser['role'];
        //Añadimos el punto para que coja todos los resultados y los vaya introduciendo de forma dinamica en la tabla
        $tableUser.='<tr>
                    <td class="table-info">'.$idUser.'</td>                    
                    <td>'.$nameUser.'</td>
                    <td>'.$emailUser.'</td>
                    <td>'.$passUser.'</td>
                    <td><img src="../../images/users/'.$pictureUser.'" class="table-user-thumb" alt=""></td>                    
                    <td>'.$createUser.'</td>   
                    <td>'.$roleUser.'</td>                  
                </tr>';
    }
}else{
    echo '¡Error No se ha podido llevar a cabo';
}

//TABLA BEBÉS
//Creamos la consulta a la base de datos de los bebés
$sql="SELECT * FROM babies";
$result=mysqli_query($con,$sql);
$tableBb='';
$idBb='';
$nameBb='';
$dateBb='';
$heightBb='';
$weightBb='';
$notesBb='';  
$usuarioBb=''; 
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
        $usuarioBb=$row['usuario'];  
        $genderBb=$row['gender']; 
        //Añadimos el punto para que coja todos los resultados y los vaya introduciendo de forma dinamica en la tabla
        $tableBb.='<tr>
                    <td class="table-info">'.$idBb.'</td>                    
                    <td>'.$nameBb.'</td>
                    <td>'.$dateBb.'</td>
                    <td>'.$heightBb.'</td>
                    <td>'.$weightBb.'</td> 
                    <td>'.$notesBb.'</td>   
                    <td>'.$genderBb.'</td> 
                    <td>'.$usuarioBb.'</td>                  
                </tr>';
    }
}else{
    echo '¡Error No se ha podido llevar a cabo';
}

//TABLA NEWSLETTER
//Creamos la consulta a la base de datos del Boletín de Noticias
$sqlNews="SELECT * FROM newsletter";
$resultNews=mysqli_query($con,$sqlNews);
$tableNews='';
$idNews='';
$emailNews='';
$dateNews='';

//Si encuentra resultados meterá los datos en el array mientras que haya datos
if(mysqli_num_rows($resultNews)>0){
    while($rowNews=mysqli_fetch_assoc($resultNews)){
        $idNews=$rowNews['id'];
        $emailNews=$rowNews['email'];
        $dateNews=$rowNews['date'];
          
        //Añadimos el punto para que coja todos los resultados y los vaya introduciendo de forma dinamica en la tabla
        $tableNews.='<tr>
                    <td class="table-info">'.$idNews.'</td>                    
                    <td>'.$emailNews.'</td>
                    <td>'.$dateNews.'</td>                                   
                </tr>';
    }
}else{
    echo '¡Error No se ha podido llevar a cabo';
}

//TABLA PERFILES
//Creamos la consulta a la base de datos del Boletín de Noticias
$sqlProfile="SELECT * FROM profile";
$resultProfile=mysqli_query($con,$sqlProfile);
$tableProfile='';
$idProfile='';
$movilProfile='';
$descripProfile='';
$countryProfile='';
$localProfile='';
$colorProfile='';
$idUserProfile='';


//Si encuentra resultados meterá los datos en el array mientras que haya datos
if(mysqli_num_rows($resultProfile)>0){
    while($rowProfile=mysqli_fetch_assoc($resultProfile)){
        $idProfile=$rowProfile['id'];
        $movilProfile=$rowProfile['movil'];
        $descripProfile=$rowProfile['descrip'];
        $countryProfile=$rowProfile['country'];
        $localProfile=$rowProfile['local'];
        $colorProfile=$rowProfile['color'];
        $idUserProfile=$rowProfile['iduser'];
          
        //Añadimos el punto para que coja todos los resultados y los vaya introduciendo de forma dinamica en la tabla
        $tableProfile.='<tr>
                    <td class="table-info">'.$idProfile.'</td>                    
                    <td>'.$movilProfile.'</td>
                    <td>'.$descripProfile.'</td>   
                    <td>'.$countryProfile.'</td>                    
                    <td>'.$localProfile.'</td>
                    <td>'.$colorProfile.'</td>   
                    <td>'.$idUserProfile.'</td>                               
                </tr>';
    }
}else{
    echo '¡Error No se ha podido llevar a cabo';
}
?>