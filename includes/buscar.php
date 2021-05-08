<?php
//Si se ha pulsado el botón de buscar
if (isset($_POST['buscar'])) {
    //Recogemos las claves enviadas
    $texto = $_POST['textoBusqueda'];

    //Mostramos mensaje
    echo 'No se ha encontrado '+ $texto;
    
}
?>