<?php include_once 'pages/sesion.php'; ?>
<!doctype html>
<html class="no-js" lang="es">
    <!--Empieza HEAD-->
    <head>
        <!--Metas de la aplicación-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ChuguisApp | Panel Admin Inicio</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Icono de la apliación-->
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!--Fuentes -->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        <!--Hojas de estilos de la aplicación-->
        <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="plugins/c3/c3.min.css">
        <link rel="stylesheet" href="plugins/owl.carousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="dist/css/theme.min.css">     
        <link rel="stylesheet" href="../plugins/chartist/dist/chartist.min.css">  
        <link rel="stylesheet" href="dist/css/style.css"> 
        <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>       
        
    </head>
    <!--Termina HEAD-->
    <!--Empieza BODY-->
    <body>
        <!--Barra de la Cabecera-->
        <div class="wrapper">
            <header class="header-top" header-theme="<?php echo $color;?>">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <!--Sección buscar de la cabecera-->
                            <div class="header-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                    <input type="text" class="form-control">
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
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="../images/users/<?php echo $picture;?>" alt="avatar usuario"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <span class="navbar navbar-dark bg-primary" name="nombreUsuario" style="color: white;"><h6 style="margin:auto 30%;"><?php echo $nameUser;?></h6></span>
                                <a class="dropdown-item" href="pages/configuracionAD.php"><i class="ik ik-settings dropdown-icon"></i> Configuración</a>                              
                                <a class="dropdown-item" href="../includes/salirSesion.php"><i class="ik ik-power dropdown-icon"></i> Cerrar Sesión</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </header>
            <!--Cabecera barra lateral-->
            <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="indexAD.php">
                            <div class="logo-img">
                               <img src="src/img/icono.svg" class="header-brand-img" alt="icono"> 
                            </div>
                            <span class="text"> huguisApp</span>
                            
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    <!--Contenidos barra lateral-->
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Panel Admin</div>
                                <div class="nav-item active">
                                    <a href="indexAD.php"><i class="ik ik-home"></i><span>Inicio</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="pages/tablas.php"><i class="ik ik-grid"></i><span>Tablas</span></a>
                                </div>                              
                            </nav>
                        </div>
                    </div>
                </div>
                <!--Contenidos de la página Inicio-->               
                <!--Tarjeta Datos Usuarios-->
                <div class="main-content">
                    <dic class="container-fluid">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Usuarios</h6>
                                                <h2><?php echo $totalUsers?></h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-users"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block">número total usuarios registrados</small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                                    </div>
                                </div>
                            </div>
                            <!--Tarjeta Datos Bebés-->
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Bebés</h6>
                                                <h2><?php echo $totalBabies?></h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-star"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block">número total bebés registrados</small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                    </div>
                                </div>
                            </div>
                            <!--Tarjeta Datos Newsletter-->
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Newsletter</h6>
                                                <h2><?php echo $totalNews?></h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-target"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block">emails boletín de noticias</small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                                    </div>
                                </div>
                            </div>
                            <!--Tarjeta Datos Perfiles-->
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Perfiles</h6>
                                                <h2><?php echo $totalProfile?></h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-trending-up"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block">perfiles introducidos</small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                    </div>
                                </div>
                            </div>                            
                        </div>        

                        <!--Tarjetas para Tareas Semanales--> 
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card task-board">
                                    <div class="card-header">
                                        <h3>Todos</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body todo-task">
                                        <div class="dd" data-plugin="nestable">
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">
                                                        <h6>Panel de Control</h6>
                                                        <p>Revisar cualquier fallo que haya podido surgir durante la semana.</p>
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="2">
                                                    <div class="dd-handle">
                                                        <h6>Mejoras Aplicación</h6>
                                                        <p>Investigar las posibles mejoras para la aplicación.</p>
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="3">
                                                    <div class="dd-handle">
                                                        <h6>Modernización de los Iconos</h6>
                                                        <p>Actualizar algunos iconos por otros más modernos.</p>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>En Proceso</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body progress-task">
                                        <div class="dd" data-plugin="nestable">
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">
                                                        <h6>Enviar Newsletter Usuarios</h6>
                                                        <p>Enviar Boletín de noticias a Usuarios Nuevos.</p>
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="2">
                                                    <div class="dd-handle">
                                                        <h6>Añadir Nueva Guía</h6>
                                                        <p>Añadir una entrada nueva a la sección guías.</p>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Completadas</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body completed-task">
                                        <div class="dd" data-plugin="nestable">
                                            <ol class="dd-list">                                   
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">                                        
                                                        <h6>Añadir Entrada Blog</h6>
                                                        <p>Añadir nuevo entrada en el blog.</p>
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="2">
                                                    <div class="dd-handle">
                                                        <h6>Resolver Problemas Usuarios</h6>
                                                        <p>Leer y resolver los problemas que le hayan podido surgir a los usuarios de la app.</p>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
         <!--Footer-->
         <?php include 'pages/footer.php';?>

        <!--Ficheros Javascript-->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="plugins/screenfull/dist/screenfull.js"></script>
        <script src="plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
        <script src="plugins/moment/moment.js"></script>
        <script src="plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="plugins/d3/dist/d3.min.js"></script>
        <script src="plugins/c3/c3.min.js"></script>
        <script src="js/tables.js"></script>
        <script src="js/widgets.js"></script>
        <script src="js/charts.js"></script>
        <script src="dist/js/theme.min.js"></script>
        <script src="../js/widget-statistic.js"></script>
        <script src="../plugins/owl.carousel/dist/owl.carousel.min.js"></script>
        <script src="../plugins/chartist/dist/chartist.min.js"></script>
        <script src="plugins/nestable/jquery.nestable.js"></script>
        <script src="js/taskboard.js"></script>

        <!--Script para realizar la busqueda en la página-->
        <script src="js/buscar.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
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
