<?php
  //Iniciamos sesión   
  session_start();

  //Eliminamos los elementos de los arrays y variables
  session_unset();
    
  //Destruimos toda la información registrada de la sesión
  session_destroy();
  
  //Volvemos a la pagina de login
  header('Location:../../ChuguisApp/index.php');
?>