<?php
//Variables de conexión
define('host','localhost');
define('user','chuguisapp');
define('pass','daw2021');
define('db','chuguisapp');

//Conexión con la base de datos
$con=mysqli_connect(host,user,pass,db) or die("Error ".mysqli_error($con));

?>