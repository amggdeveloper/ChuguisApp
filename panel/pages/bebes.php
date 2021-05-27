<?php include_once 'funbb.php';?>
<!doctype html>
<html class="no-js" lang="es">
    <!--Comienza HEAD-->
    <head>
        <!--Metas-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ChuguisApp | Bebés</title>
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
                        <?php include 'menuModal.php';?>
                    </div>
                </div>
            </div>
            </header>
            <!--Cabecera barra lateral-->
            <?php include 'menuLateral.php';?>
            <!--Contenidos barra lateral-->
            <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Panel de Control</div>
                                <div class="nav-item">
                                    <a href="../index.php"><i class="ik ik-home"></i><span>Inicio</span></a>
                                </div>
                                <div class="nav-item active">
                                    <a href="bebes.php"><i class="ik ik-users"></i><span>Bebés</span></a>
                                </div>                                
                                <div class="nav-lavel">Fisico</div>
                                <div class="nav-item">
                                    <a href="altura.php"><i class="ik ik-star"></i><span>Altura</span></a>                                    
                                </div>
                                <div class="nav-item">
                                    <a href="peso.php"><i class="ik ik-target"></i><span>Peso</span></a>                                  
                                </div>                                                              
                                <div class="nav-lavel">Alimentación</div>
                                <div class="nav-item">
                                    <a href="tomas.php"><i class="ik ik-watch"></i><span>Tomas</span></a>                                    
                                </div>
                                <div class="nav-item">
                                    <a href="alimentos.php"><i class="ik ik-pie-chart"></i><span>Alimentos</span></a>
                                </div>

                                <div class="nav-lavel">Calendario</div>
                                <div class="nav-item">
                                    <a href="vacunacion.php"><i class="ik ik-shield"></i><span>Vacunación</span></a>
                                </div>                                                             
                                <div class="nav-item">
                                    <a href="ayuda.php"><i class="ik ik-help-circle"></i><span>Ayuda</span></a>
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
                                        <i class="ik ik ik-users bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Bebés</h5>
                                            <span>aquí encontrarás todos los datos de tu bebé</span>
                                        </div>
                                    </div>
                                </div>
                                <!--BreadCrumbs-->
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.php"><i class="ik ik-home"></i></a>
                                            </li>                                          
                                            <li class="breadcrumb-item active" aria-current="page">Bebés</li>
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
                                            <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#datos" role="tab" aria-controls="pills-profile" aria-selected="false">Datos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#insertar" role="tab" aria-controls="pills-setting" aria-selected="false">Añadir</a>
                                        </li>                                       
                                    </ul>
                                   
                                    <!--Pestaña datos -->
                                    <div class="tab-content" id="pills-tabContent">                                        
                                        <!--tab Datos-->
                                        <div class="tab-pane fade show active" id="datos" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3 col-6"> <strong>Nombre</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $nameBb?></p>
                                                    </div>
                                                    <div class="col-md-3 col-6"> <strong>Fecha Nacimiento</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $dateBb?></p>
                                                    </div>
                                                    <div class="col-md-3 col-6"> <strong>altura (cm)</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $heightBb?></p>
                                                    </div>
                                                    <div class="col-md-3 col-6"> <strong>Peso (gr)</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $weightBb?></p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <label><strong>Anotaciones:</strong></label>
                                                <p class="mt-30"><?php echo $notesBb?></p>
                                                <!--Tabla-->            
                                                <div class="row">
                                                <div class="col-md-12">
                                                 <div class="card">
                                                  <div class="card-header"><h3>Tabla Datos Bebés</h3></div>
                                                  <div class="card-body">
                                                    <table id="data_table" class="table">
                                                      <thead>
                                                        <tr>
                                                          <th>Id</th>
                                                          <th class="nosort">Imagen</th>
                                                          <th>Nombre</th>
                                                          <th>Fecha Nac.</th>
                                                          <th>Altura (cm)</th>
                                                          <th>Peso (gramos)</th>
                                                          <th class="nosort">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                <tbody>                                            
                                                  <?php echo $table?>                                                                                                                                            
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
                            <!--tab Añadir-->
                             <div class="tab-pane fade" id="insertar" role="tabpanel" aria-labelledby="pills-setting-tab">
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="POST">
                                         <div class="form-group">
                                            <label for="example-name">Nombre</label>
                                            <input type="text" placeholder="nombre" class="form-control" name="example-name" id="example-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-date">Fecha Nacimiento</label>
                                            <input type="date" placeholder="" class="form-control" name="example-date" id="example-date">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-height">Altura</label>
                                            <input type="text" placeholder="45" class="form-control" name="example-height" id="example-height">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-weight">Peso</label>
                                            <input type="text" placeholder="1500" id="example-weight" name="example-weight" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-notes">Anotaciones</label>
                                            <textarea name="example-notes" rows="5" class="form-control"></textarea>
                                        </div>                                                   
                                        <button name="addDates" class="btn btn-primary" type="submit"><i class="ik ik-share"></i>Añadir</button>
                                    </form>
                                 </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>  
        </div>   
                    <!--Footer-->
                    <?php include 'footer.php';?>
     </div>                                        
    </div>
</div>
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
