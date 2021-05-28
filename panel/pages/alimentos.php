<?php include_once 'funAlimen.php'?>
<!doctype html>
<html class="no-js" lang="es">
    <!--Comienza HEAD-->
    <head>
        <!--Metas-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ChuguisApp | Alimentos</title>
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
        <link rel="stylesheet" href="../plugins/fullcalendar/dist/fullcalendar.min.css">
        <link rel="stylesheet" href="../plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
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
                                <div class="nav-item">
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
                                <div class="nav-item active">
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
                                        <i class="ik ik ik-pie-chart bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Alimentos</h5>
                                            <span>aquí podrás llevar un control sobre la introducción de alimentos para tu bebé</span>
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
                                            <li class="breadcrumb-item active" aria-current="page">Alimentos</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>                      
                            <!--Calendario alimentos-->
                            <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal" id="editEvent" tabindex="-1" role="dialog" aria-labelledby="editEventLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form class="editEventForm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editEventLabel">Edit Event</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="editEname">Event Title</label>
                                                <input type="text" class="form-control" id="editEname" name="editEname" placeholder="Please enter event title">
                                            </div>
                                            <div class="form-group">
                                                <label for="editStarts">Start</label>
                                                <input type="text" class="form-control datetimepicker-input" id="editStarts" name="editStarts" data-toggle="datetimepicker" data-target="#editStarts">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button class="btn btn-danger delete-event" type="submit">Delete</button>
                                            <button class="btn btn-success save-event" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> 

                        <div class="modal" id="addEvent" tabindex="-1" role="dialog" aria-labelledby="addEventLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addEventLabel">Add New Event</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="addEventForm">
                                            <div class="form-group">
                                                <label for="eventName">Event Title</label>
                                                <input type="text" class="form-control" id="eventName" name="eventName" placeholder="Please enter event title">
                                            </div>
                                            <div class="form-group">
                                                <label for="eventStarts">Starts</label>
                                                <input type="text" class="form-control datetimepicker-input" id="eventStarts" name="eventStarts" data-toggle="datetimepicker" data-target="#eventStarts">
                                            </div>
                                            <div class="form-group mb-0" id="addColor">
                                                <label for="colors">Choose Color</label>
                                                <ul class="color-selector">
                                                    <li class="bg-aqua">
                                                        <input type="radio" data-color="bg-aqua" checked name="colorChosen" id="addColorAqua">
                                                        <label for="addColorAqua"></label>
                                                    </li>
                                                    <li class="bg-blue">
                                                        <input type="radio" data-color="bg-blue" name="colorChosen" id="addColorBlue">
                                                        <label for="addColorBlue"></label>
                                                    </li>
                                                    <li class="bg-light-blue">
                                                        <input type="radio" data-color="bg-light-blue" name="colorChosen" id="addColorLightblue">
                                                        <label for="addColorLightblue"></label>
                                                    </li>
                                                    <li class="bg-teal">
                                                        <input type="radio" data-color="bg-teal" name="colorChosen" id="addColorTeal">
                                                        <label for="addColorTeal"></label>
                                                    </li>
                                                    <li class="bg-yellow">
                                                        <input type="radio" data-color="bg-yellow" name="colorChosen" id="addColorYellow">
                                                        <label for="addColorYellow"></label>
                                                    </li>
                                                    <li class="bg-orange">
                                                        <input type="radio" data-color="bg-orange" name="colorChosen" id="addColorOrange">
                                                        <label for="addColorOrange"></label>
                                                    </li>
                                                    <li class="bg-green">
                                                        <input type="radio" data-color="bg-green" name="colorChosen" id="addColorGreen">
                                                        <label for="addColorGreen"></label>
                                                    </li>
                                                    <li class="bg-lime">
                                                        <input type="radio" data-color="bg-lime" name="colorChosen" id="addColorLime">
                                                        <label for="addColorLime"></label>
                                                    </li>
                                                    <li class="bg-red">
                                                        <input type="radio" data-color="bg-red" name="colorChosen" id="addColorRed">
                                                        <label for="addColorRed"></label>
                                                    </li>
                                                    <li class="bg-purple">
                                                        <input type="radio" data-color="bg-purple" name="colorChosen" id="addColorPurple">
                                                        <label for="addColorPurple"></label>
                                                    </li>
                                                    <li class="bg-fuchsia">
                                                        <input type="radio" data-color="bg-fuchsia" name="colorChosen" id="addColorFuchsia">
                                                        <label for="addColorFuchsia"></label>
                                                    </li>
                                                    <li class="bg-muted">
                                                        <input type="radio" data-color="bg-muted" name="colorChosen" id="addColorMuted">
                                                        <label for="addColorMuted"></label>
                                                    </li>
                                                    <li class="bg-navy">
                                                        <input type="radio" data-color="bg-navy" name="colorChosen" id="addColorNavy">
                                                        <label for="addColorNavy"></label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success save-event">Save</button>
                                        <button type="button" class="btn btn-danger delete-event" data-dismiss="modal">Delete</button>
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
        <script src="../plugins/moment/moment.js"></script>
        <script src="../plugins/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="../plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="../dist/js/theme.min.js"></script>
        <script src="../js/calendar.js"></script>

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
