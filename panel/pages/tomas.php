<?php include_once 'funTomas.php'; ?>
<!doctype html>
<html class="no-js" lang="es">
    <!--Comienza HEAD-->
    <head>
        <!--Metas-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ChuguisApp | Tomas</title>
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
                                <div class="nav-item active">
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
                                        <i class="ik ik ik-watch bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Tomas</h5>
                                            <span>aquí podrás llevar un seguimientos de las tomas de tu bebé</span>
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
                                            <li class="breadcrumb-item active" aria-current="page">Tomas</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>    
                        <!--Formulario para introducir la peso-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Introducir Datos</h3>
                                    </div>
                                    <div class="card-body">
                                    <form class="form-horizontal" action="" method="POST"> 
                                        <div class="mb-20">  
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-info">
                                                    <span class="input-group-prepend"><label class="input-group-text"><i class="ik ik-watch"></i></label></span>
                                                    <input type="text" class="form-control" placeholder="nombre de la toma" name="name" id="name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-warning">
                                                <span class="input-group-prepend"><label class="input-group-text"><i class="ik ik-git-commit"></i></label></span>
                                                <select name="breast" id="breast" class="form-control">
                                                    <option selected>Derecho</option>
                                                    <option>Izquierdo</option>                                                   
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-primary">
                                                 <span class="input-group-prepend"><label class="input-group-text"><i class="ik ik-cloud"></i></label></span>
                                                    <select name="sleep" id="sleep" class="form-control">
                                                        <option selected>Si</option>
                                                        <option>No</option>                                                   
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-success">
                                                    <span class="input-group-prepend"><label class="input-group-text"><i class="ik ik-calendar"></i></label></span>
                                                    <input type="date" class="form-control" name="date" id="date">
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-danger">
                                                    <span class="input-group-prepend"><label class="input-group-text"><i class="ik ik-clock"></i></label></span>
                                                    <input type="text" class="form-control" name="time" id="time" placeholder="tiempo de la toma">
                                                </div>
                                            </div>
                                        </div>                                         
                                        <button type="submit" name="addTake" class="btn btn-dark"><i class="ik ik-share"></i>Añadir</button>
                                        </form>                                                                            
                                    </div>
                                </div>                                        
                            </div>                                  
                        </div>                           
                    </div>  
                    <?php echo $msg?> 
                    <!--Pestañas de la Ayuda-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-2 clearfix">
                                    <a class="btn pt-0 pl-0 d-md-none d-lg-none" data-toggle="collapse" href="#displayOptions" role="button" aria-expanded="true" aria-controls="displayOptions">
                                        Opciones de Vista
                                        <i class="ik ik-chevron-down align-middle"></i>
                                    </a>
                                    <div class="collapse d-md-block display-options" id="displayOptions">
                                        <span class="mr-3 d-inline-block float-md-left dispaly-option-buttons">
                                            <a href="#" class="mr-1 view-list  active">
                                                <i class="ik ik-menu view-icon"></i>
                                            </a>
                                            <a href="#" class="mr-1 view-thumb">
                                                <i class="ik ik-list view-icon"></i>
                                            </a>                                            
                                        </span>                                   
                                    </div>
                                </div>
                                <div class="separator mb-20"></div>
                                
                                <!--Tomas-->
                                <div class="row layout-wrap" id="layout-wrap">
                                    <div class="col-12 list-item">
                                        <?php echo $takesInfo?>
                                    </div>                                                                  
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modales-->
                <aside class="right-sidebar">
                    <div class="sidebar-chat" data-plugin="chat-sidebar">
                        <div class="sidebar-chat-info">
                            <h6></h6>
                            <form class="mr-t-10">
                                <div class="form-group">                                   
                                </div>
                            </form>
                        </div>
                        <div class="chat-list">
                            <div class="list-group row">                              
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="chat-panel" hidden>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href=""><i class="ik ik-message-square text-success"></i></a>  
                            <span class="user-name"></span> 
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="card-body">
                            <div class="widget-chat-activity flex-1">
                                <div class="messages">
                                    <div class="message media reply">                                        
                                        <div class="message-body media-body">
                                            <p></p>
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <!--Ventana modal para la toma-->
              
                <div class="modal fade edit-layout-modal" id="editLayoutItem" tabindex="-1" role="dialog" aria-labelledby="editLayoutItemLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editLayoutItemLabel">Datos de la Última Toma</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         </div>
                         <div class="modal-body">
                            <p class="lead">Último Pecho de la Toma:</p>
                            <p>Los datos de la toma son los siguientes: (Si la imagen pone: Pecho D, se refiere a que el últmo pecho que ha tomado el bebé es el derecho,
                            si por el contrario pone Pecho I, el último pecho tomado es el izquierdo).</p>
                        <div class="row">
                            <div class="col-md-6"><img src="../img/<?php echo $imgBreast?>" class="img-fluid" alt=""></div>
                            <div class="col-md-6"><img src="../img/<?php echo $imgSleep?>" class="img-fluid" alt=""></div>
                        </div>
                    <div class="jumbotron pt-30 pb-30 mt-30">
                        <h2 class="mt-0">Tiempo de la Toma:</h2>
                        <h1 class="mt-0"><?php echo $timeTakes?></h1>
                    </div>
                    <div class="jumbotron pt-30 pb-30 mt-30">
                        <h2 class="mt-0">Fecha de la Toma:</h2>
                        <h1 class="lead"><?php echo $dateTakes?></h1>
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
