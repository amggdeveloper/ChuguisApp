<div class="dropdown">
    <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="../../images/users/<?php echo $pictureSelect;?>" alt=""></a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <span class="navbar navbar-dark bg-primary" name="nombreUsuario" style="color: white;"><h6 style="margin:auto 30%;"><?php echo $nameSelect;?></h6></span>       
        <a class="dropdown-item" href="configuracionAD.php"><i class="ik ik-settings dropdown-icon"></i> Configuración</a>        
        <a class="dropdown-item" href="../../includes/salirSesion.php"><i class="ik ik-power dropdown-icon"></i> Cerrar Sesión</a>
    </div>
</div>