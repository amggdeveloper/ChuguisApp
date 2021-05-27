<?php include_once 'pages/sesion.php'; ?>
<!doctype html>
<html class="no-js" lang="es">
    <!--Empieza HEAD-->
    <head>
        <!--Metas de la aplicación-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ChuguisApp | Panel de Control</title>
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
                                <a class="dropdown-item" href="pages/perfil.php"><i class="ik ik-user dropdown-icon"></i> Perfil</a>
                                <a class="dropdown-item" href="pages/configuracion.php"><i class="ik ik-settings dropdown-icon"></i> Configuración</a>
                                <a class="dropdown-item" href="pages/ayudaMenu.php"><i class="ik ik-navigation dropdown-icon"></i> Ayuda</a>
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
                        <a class="header-brand" href="index.php">
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
                                <div class="nav-lavel">Panel de Control</div>
                                <div class="nav-item active">
                                    <a href="index.php"><i class="ik ik-home"></i><span>Inicio</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="pages/bebes.php"><i class="ik ik-users"></i><span>Bebés</span></a>
                                </div>                               
                                <div class="nav-lavel">Fisico</div>
                                <div class="nav-item">
                                    <a href="pages/altura.php"><i class="ik ik-star"></i><span>Altura</span></a>                                   
                                </div>
                                <div class="nav-item">
                                    <a href="pages/peso.php"><i class="ik ik-target"></i><span>Peso</span></a>                                   
                                </div>                                                            
                                <div class="nav-lavel">Alimentación</div>
                                <div class="nav-item">
                                    <a href="pages/tomas.php"><i class="ik ik-watch"></i><span>Tomas</span></a>                                   
                                </div>
                                <div class="nav-item">
                                    <a href="pages/alimentos.php"><i class="ik ik-pie-chart"></i><span>Alimentos</span></a>
                                </div>

                                <div class="nav-lavel">Calendario</div>
                                <div class="nav-item">
                                    <a href="pages/vacunacion.php"><i class="ik ik-shield"></i><span>Vacunación</span></a>
                                </div>                               
                                <div class="nav-item">
                                    <a href="pages/ayuda.php"><i class="ik ik-help-circle"></i><span>Ayuda</span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--Contenidos de la página Inicio-->               
                <!--Tarjeta Datos Bebés-->
                <div class="main-content">
                    <dic class="container-fluid">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Bebés</h6>
                                                <h2><?php echo $countBabies?></h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-users"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block">número de bebés introducido</small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                                    </div>
                                </div>
                            </div>
                            <!--Tarjeta Datos Altura-->
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Altura</h6>
                                                <h2><?php echo $lastHeight?></h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-star"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block">última altura medida en cm</small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                    </div>
                                </div>
                            </div>
                            <!--Tarjeta Datos Peso-->
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Peso</h6>
                                                <h2><?php echo $lastWeight?></h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-target"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block">último peso introducido en gramos</small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                                    </div>
                                </div>
                            </div>
                            <!--Tarjeta Datos Percentil-->
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Percentil</h6>
                                                <h2><?php echo $percentil?></h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-trending-up"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block">percentil actual en %</small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Última toma introducida-->
                        <div class="row">
                            <div class="col-xl-4 col-md-8">                           
                            <div class="card comp-card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="mb-25">Última Toma Introducida</h5>
                                                <h6>Pecho: <span class="badge badge-pill badge-info" style='font-size:0.60em'>(último tomado)</span></h6>
                                                <h2 class="fw-700 text-blue">1,563</h2>
                                                <hr>
                                                <h6>Tiempo: <span class="badge badge-pill badge-info" style='font-size:0.60em'>(en minutos)</span></h6>
                                                <h2 class="fw-700 text-blue">1,563</h2>
                                                <hr>
                                                <h6>Duerme: <span class="badge badge-pill badge-info" style='font-size:0.60em'>(después de la toma)</span></h6>
                                                <h2 class="fw-700 text-blue">1,563</h2>
                                                <hr>
                                                <h6>Duerme: <span class="badge badge-pill badge-info" style='font-size:0.60em'>(actualizada)</span></h6>
                                                <p class="mb-0">May 23 - June 01 (2017)</p>
                                                <hr>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clock bg-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-8">                           
                            <div class="card proj-t-card">
                                    <div class="card-body">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="fas fa-chart-pie text-yellow f-30"></i>
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">Alimentos</h6>
                                                <h6 class="mb-0 text-yellow">Semanal</h6>
                                            </div>
                                        </div>
                                        <!--Lunes-->
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <h6 class="mb-0">Lunes</h6>                                               
                                            </div>
                                            <div class="col"><i class="fas fa-exchange-alt text-yellow f-18"></i></div>
                                            <div class="col">
                                                <h6 class="mb-0">Verdura</h6></div>
                                        </div>
                                        <hr>
                                        <!--Martes-->
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <h6 class="mb-0">Martes</h6>                                               
                                            </div>
                                            <div class="col"><i class="fas fa-exchange-alt text-yellow f-18"></i></div>
                                            <div class="col">
                                                <h6 class="mb-0">Pasta</h6></div>
                                        </div>
                                        <hr>
                                        <!--Miercoles-->
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <h6 class="mb-0">Miercoles</h6>                                               
                                            </div>
                                            <div class="col"><i class="fas fa-exchange-alt text-yellow f-18"></i></div>
                                            <div class="col">
                                                <h6 class="mb-0">Cereales</h6></div>
                                        </div>
                                        <hr>
                                         <!--Jueves-->
                                         <div class="row align-items-center text-center">
                                            <div class="col">
                                                <h6 class="mb-0">Jueves</h6>                                               
                                            </div>
                                            <div class="col"><i class="fas fa-exchange-alt text-yellow f-18"></i></div>
                                            <div class="col">
                                                <h6 class="mb-0">Carne</h6></div>
                                        </div>
                                        <hr>
                                        <!--Viernes-->
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <h6 class="mb-0">Viernes</h6>                                               
                                            </div>
                                            <div class="col"><i class="fas fa-exchange-alt text-yellow f-18"></i></div>
                                            <div class="col">
                                                <h6 class="mb-0">Pescado</h6></div>
                                        </div>
                                        <hr>
                                         <!--Sabado-->
                                         <div class="row align-items-center text-center">
                                            <div class="col">
                                                <h6 class="mb-0">Sabado</h6>                                               
                                            </div>
                                            <div class="col"><i class="fas fa-exchange-alt text-yellow f-18"></i></div>
                                            <div class="col">
                                                <h6 class="mb-0">Huevo</h6></div>
                                        </div>
                                        <hr>
                                        <!--Domingo-->
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <h6 class="mb-0">Domingo</h6>                                               
                                            </div>
                                            <div class="col"><i class="fas fa-exchange-alt text-yellow f-18"></i></div>
                                            <div class="col">
                                                <h6 class="mb-0">Fruta</h6></div>
                                        </div>
                                        <hr>
                                        <h6 class="pt-badge bg-yellow">Semanal</h6>
                                    </div>
                                </div>
                            </div>
                        <!--Características físicas del bebé-->
                        <div class="col-md-4">
                            <div class="card" style="min-height: 470px;">
                                <div class="card-header"><h3>Datos del Bebé</h3></div>                                
                                   <div class="card-body">                                      
                                    <h6>Nombre Bebé: <span class="badge badge-pill badge-warning" style='font-size:0.60em'>(último bebé introducido)</span></h6>
                                    <h2 class="fw-700 f-50 text-warning">Diana</h2>   
                                    <hr>     
                                    <h6>Género: <span class="badge badge-pill badge-warning" style='font-size:0.60em'>(último bebé introducido)</span></h6> 
                                    <br>                                                                          
                                    <div class="progres blue">
                                        <span class="progres-left">
                                            <span class="progres-bar"></span>
                                        </span>
                                        <span class="progres-right">
                                            <span class="progres-bar"></span>
                                         </span>
                                         
                                        <div class="progres-value"><i class="fas fa-venus text-grey f-60"></i></div>                                    
                                </div>
                                <br>
                                <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Tablón twitter-->
                        <di class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Tablón Twitter</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>                                        
                                    </div>
                                    <div class="card-body chat-box scrollable">                                  
                                        <a class="twitter-timeline" href="https://twitter.com/ChuguisA?ref_src=twsrc%5Etfw">Tweets de ChuguisApp</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>                                                   
                                    </div> 
                                </div>
                            </div>                                                                    
                        <!--Calendario Vacunación-->
                         <div class="col-md-4">
                            <div class="card" style="min-height: 422px;">
                                    <div class="card-header">
                                        <h3>Vacunación</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body timeline">
                                        <div class="header bg-theme" style="background-image: url('img/placeholder/placeimg_400_200_nature.jpg')">
                                            <div class="color-overlay d-flex align-items-center">
                                                <div class="day-number">26</div>
                                                <div class="date-right">
                                                    <div class="day-name">Miercoles</div>
                                                    <div class="month">Mayo 2021</div>
                                                </div>
                                            </div>                                
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="bullet bg-pink"></div>
                                                <div class="time">10:00</div>
                                                <div class="desc">
                                                    <h3>Vesero</h3>
                                                    <h4>Dosis Inicial</h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bullet bg-green"></div>
                                                <div class="time">14:00</div>
                                                <div class="desc">
                                                    <h3>Vesero</h3>
                                                    <h4>Recordatorio</h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bullet bg-orange"></div>
                                                <div class="time">17:00</div>
                                                <div class="desc">
                                                    <h3>Vesero</h3>
                                                    <h4>Recordatorio</h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
        <!--Footer-->
        <?php include 'pages/footer.php';?>
        </div>

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
