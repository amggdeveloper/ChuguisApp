<?php include_once 'funtablas.php';?>
<!doctype html>
<html class="no-js" lang="es">
    <!--Comienza HEAD-->
    <head>
        <!--Metas-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ChuguisApp | Panel Admin Tablas</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Icono de la aplicación-->
        <link rel="icon" href="../favicon.ico" type="image/x-icon" />
        <!--Fuentes-->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        <!--Hojas de estilos-->
        <link rel="stylesheet" href="../plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="../plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="../plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="../plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="../dist/css/theme.min.css">
        <!--Script-->
        <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>    

    </head>
    <!--Termina HEAD-->
    <!--Empieza BODY-->
    <body>    
    
         <!--Barra de la Cabecera-->
         <div class="wrapper">
            <header class="header-top" header-theme="<?php echo $colorSelect?>">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <!--Sección buscar de la cabecera-->
                            <div class="header-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i id="cerrarBusqueda" class="ik ik-x" ></i></span>
                                    <input type="text" class="form-control" placeholder="buscar..." id="buscarTexto">
                                    <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>                                   
                                </div>
                            </div>
                            <!--Botón maximizar de la cabecera-->
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                        </div>
                        <div class="top-menu d-flex align-items-center">
                            <div class="dropdown">
                                <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">                                    
                                </div>
                            </div>                           
                        <!--Menu modal-->
                        <?php include 'menuModalAD.php';?>
                    </div>
                </div>
            </div>
            </header>
            <!--Cabecera barra lateral-->
            <?php include 'menuLateralAD.php';?>
            <!--Contenidos barra lateral-->
            <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Panel Admin</div>
                                <div class="nav-item">
                                    <a href="../indexAD.php"><i class="ik ik-home"></i><span>Inicio</span></a>
                                </div>
                                <div class="nav-item active">
                                    <a href="tablas.php"><i class="ik ik-grid"></i><span>Tablas</span></a>
                                </div>                               
                            </nav>
                        </div>
                    </div>
                </div>
                <!--Empieza Contenido de la página-->
                <div class="main-content" id="content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik ik-grid bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Tablas</h5>
                                            <span>tablas de la base de datos</span>
                                        </div>
                                    </div>
                                </div>
                                <!--BreadCrumbs-->
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../indexAD.php"><i class="ik ik-home"></i></a>
                                            </li>                                          
                                            <li class="breadcrumb-item active" aria-current="page">Tablas</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>                      
                            <!--Pestañas-->
                            <div class="col-lg-12 col-md-9">
                                <div class="card">
                                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">                                        
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-users-tab" data-toggle="pill" href="#usuarios" role="tab" aria-controls="pills-users" aria-selected="true">Usuarios</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-babies-tab" data-toggle="pill" href="#bebes" role="tab" aria-controls="pills-babies" aria-selected="false">Bebés</a>
                                        </li>  
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-news-tab" data-toggle="pill" href="#newsletter" role="tab" aria-controls="pills-news" aria-selected="false">Newsletter</a>
                                        </li>    
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#perfiles" role="tab" aria-controls="pills-profile" aria-selected="false">Perfiles</a>
                                        </li>                                         
                                    </ul>
                                   
                            <!--Pestaña Usuarios -->
                            <div class="tab-content" id="pills-tabContent">                                        
                                 <!--tab Usuarios-->
                                    <div class="tab-pane fade show active" id="usuarios" role="tabpanel" aria-labelledby="pills-usuarios-tab">
                                        <div class="card-body">                                                
                                            <!--Tabla Usuarios-->            
                                             <div class="row">
                                                <div class="col-md-12">
                                                 <div class="card">
                                                  <div class="card-header"><h3>Tabla Datos Usuarios</h3></div>
                                                  <div class="card-body">
                                                    <table id="data_table" class="table">
                                                      <thead>
                                                        <tr>
                                                          <th>Id</th>                                                          
                                                          <th>Nombre</th>
                                                          <th>Email</th>
                                                          <th>Contraseña (encriptada)</th>                                                          
                                                          <th class="nosort">Imagen</th>
                                                          <th>Creación</th> 
                                                          <th>Role</th>                                                          
                                                        </tr>
                                                    </thead>
                                                <tbody>                                            
                                                  <?php echo $tableUser?>                                                                                                                                            
                                                </tbody>
                                             </table> 
                                             <?php echo $msg?>                                            
                                             </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>                                                
                                </div>
                            </div>
                            <!--tab Bebés-->
                            <div class="tab-pane fade" id="bebes" role="tabpanel" aria-labelledby="pills-bebes-tab">
                             <div class="card-body">
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                         <div class="card-header"><h3>Tabla Datos Bebés</h3></div>
                                            <div class="card-body">
                                                    <table id="data_table" class="table">
                                                      <thead>
                                                        <tr>
                                                          <th>Id</th>                                                          
                                                          <th>Nombre</th>                                                          
                                                          <th>Fecha Nacimiento</th>                                                        
                                                          <th>Altura (cm)</th> 
                                                          <th>Peso (gr)</th>  
                                                          <th>Descripción</th>  
                                                          <th>Usuario</th>                                                      
                                                        </tr>
                                                    </thead>
                                                <tbody>                                            
                                                  <?php echo $tableBb?>                                                                                                                                            
                                                </tbody>
                                             </table> 
                                             <?php echo $msg?>                                            
                                             </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>                                                
                                </div>
                            </div>               
                              
                            <!--tab newsletter-->
                             <div class="tab-pane fade" id="newsletter" role="tabpanel" aria-labelledby="pills-news-tab">
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12">
                                                 <div class="card">
                                                  <div class="card-header"><h3>Tabla Datos Usuarios</h3></div>
                                                  <div class="card-body">
                                                    <table id="data_table" class="table">
                                                      <thead>
                                                        <tr>
                                                          <th>Id</th>                                                       
                                                          <th>Email</th>
                                                          <th>Fecha Petición</th>                                                          
                                                        </tr>
                                                    </thead>
                                                <tbody>                                            
                                                  <?php echo $tableNews?>                                                                                                                                            
                                                </tbody>
                                             </table> 
                                             <?php echo $msg?>                                            
                                             </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr> 
                                </div>   
                            </div>   

                              <!--tab Perfiles-->
                              <div class="tab-pane fade" id="perfiles" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12">
                                                 <div class="card">
                                                  <div class="card-header"><h3>Tabla Datos Usuarios</h3></div>
                                                  <div class="card-body">
                                                    <table id="data_table" class="table">
                                                      <thead>
                                                        <tr>
                                                          <th>Id</th>                                                          
                                                          <th>Móvil</th>
                                                          <th>Descripción</th>
                                                          <th>País</th>                                                        
                                                          <th>Localidad</th> 
                                                          <th>color</th>
                                                          <th>idUser</th>                                                            
                                                        </tr>
                                                    </thead>
                                                <tbody>                                            
                                                  <?php echo $tableProfile?>                                                                                                                                            
                                                </tbody>
                                             </table> 
                                             <?php echo $msg?>                                            
                                             </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr> 
                                </div>   
                            </div>   
                        </div>      
                    </div>     
                </div>
            </div>
        </div>    

        <!--Footer-->
        <?php include 'footer.php';?>

        <!--Scripts-->   
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="../plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="../plugins/screenfull/dist/screenfull.js"></script>
        <script src="../dist/js/theme.min.js"></script>

        <!--Script para realizar la busqueda en la página-->
        <script src="../js/buscar.js"></script>

        <!-- Google Analytics -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>

