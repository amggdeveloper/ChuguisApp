<?php include_once 'sesionOtros.php'; ?>
<!doctype html>
<html class="no-js" lang="es">
    <!--Comienza HEAD-->
    <head>
        <!--Metas-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ChuguisApp | Perfil</title>
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
            <header class="header-top" header-theme=<?php echo $colorSelect?>>
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <!--Sección buscar de la cabecera-->
                            <div class="header-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i id="cerrarBusqueda" class="ik ik-x"></i></span>
                                    <input type="text" class="form-control" id="buscarTexto">
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
                                <div class="nav-item">
                                    <a href="percentil.php"><i class="ik ik-trending-up"></i><span>Percentil</span></a>                                   
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
                                    <a href="alimentosInt.php"><i class="ik ik-clipboard"></i><span>Alimentos Introducidos</span></a>
                                </div>                              
                                <div class="nav-item">
                                    <a href="ayuda.php"><i class="ik ik-help-circle"></i><span>Ayuda</span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--Empieza Contenido de la página-->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-user bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Perfil</h5>
                                            <span>bienvenido a tu perfil, podrás actualizar y cambiar los datos que quieras</span>
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
                                            <li class="breadcrumb-item active" aria-current="page">Perfil</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!--Tarjeta Presentación-->
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center"> 
                                            <img src="../../images/users/<?php echo $pictureSelect?>" class="rounded-circle" width="150" />                                           
                                            <h4 class="card-title mt-10"><?php echo $nameSelect?></h4>
                                            <p class="card-subtitle"><?php echo $day?></p>
                                            <div class="row text-center justify-content-md-center">
                                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="ik ik-calendar"></i> <font class="font-medium"><?php echo $date?></font></a></div>
                                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="ik ik-clock"></i> <font class="font-medium"><?php echo $time?></font></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mb-0"> 
                                    <div class="card-body"> 
                                        <small class="text-muted d-block">Email </small>
                                        <h6><?php echo $mailSelect?></h6> 
                                        <small class="text-muted d-block pt-10">Móvil</small>
                                        <h6><?php echo $movilSelect?></h6> 
                                        <small class="text-muted d-block pt-10">Localidad</small>
                                        <h6><?php echo $localSelect?></h6>
                                        <div class="map-box">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3160.8455936683768!2d-0.992385148354834!3d37.60579282953591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd634224e0bc8c2b%3A0xf62d78a986855460!2sCIFP%20Carlos%20III!5e0!3m2!1ses!2ses!4v1621713303029!5m2!1ses!2ses" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                        </div> 
                                        <small class="text-muted d-block pt-30">Redes Sociales ChuguisApp</small>
                                        <br/>
                                        <a href="https://www.facebook.com/chuguis.app.7/" target='_blank' class="btn btn-icon btn-facebook"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/ChuguisA" target='_blank' class="btn btn-icon btn-twitter"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.youtube.com/channel/UC4c10fwLYn5lGRB3hhgBOuQ" target='_blank' class="btn btn-icon btn-youtube"><i class="fab fa-youtube"></i></a>
                                        <a href="https://github.com/ChuguisApp" target='_blank' class="btn btn-icon btn-github"><i class="fab fa-github"></i></a>

                                    </div>
                                </div>
                            </div>
                            <!--Cajas de Contenido Perfil-->
                            <div class="col-lg-8 col-md-7">
                                <div class="card">
                                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="true">Configuración</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Perfil</a>
                                        </li>                                                                            
                                        
                                    </ul>
                                    <!--tab tablon-->
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                                            <div class="card-body">
                                                <div class="profiletimeline mt-0">                                                   
                                                <a class="twitter-timeline" href="https://twitter.com/ChuguisA?ref_src=twsrc%5Etfw">Tweets de ChuguisApp</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab Perfil-->
                                        <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3 col-6"> <strong>Nombre</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $nameSelect?></p>
                                                    </div>
                                                    <div class="col-md-3 col-6"> <strong>Móvil</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $movilSelect?></p>
                                                    </div>
                                                    <div class="col-md-3 col-6"> <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $mailSelect?></p>
                                                    </div>
                                                    <div class="col-md-3 col-6"> <strong>Localización</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $localSelect?></p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <p class="mt-30"><?php echo $descripSelect?></p>
                                                <h4 class="mt-30">Habilidades</h4>
                                                <hr>
                                                <h6 class="mt-30">Cambio de Pañal <span class="pull-right">80%</span></h6>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">50% Complete</span> </div>
                                                </div>
                                                <h6 class="mt-30">Juego <span class="pull-right">90%</span></h6>
                                                <div class="progress  progress-sm">
                                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">50% Complete</span> </div>
                                                </div>
                                                <h6 class="mt-30">Mediciones <span class="pull-right">50%</span></h6>
                                                <div class="progress  progress-sm">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span> </div>
                                                </div>
                                                <h6 class="mt-30">Comida <span class="pull-right">70%</span></h6>
                                                <div class="progress  progress-sm">
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">50% Complete</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab Configuración-->
                                        <div class="tab-pane fade show active" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                            <div class="card-body">
                                                <form class="form-horizontal" action="perfil.php" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="example-name">Nombre</label>
                                                        <input type="text" placeholder="nombre" class="form-control" name="example-name" id="example-name" value="<?php echo $nameSelect?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-email">Email</label>
                                                        <input type="email" placeholder="email@gmail.com" class="form-control" name="example-email" id="example-email"  value="<?php echo $mailSelect?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-password">Contraseña</label>
                                                        <input type="password" placeholder="contraseña"  class="form-control" name="example-password" id="example-password" value="<?php echo $passSelect?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-phone">Móvil</label>
                                                        <input type="text" placeholder="000 000 000" id="example-phone" name="example-phone" class="form-control" value="<?php echo $movilSelect?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Seleccionar Imagen</label>
                                                        <input type="file" name="pictureAvatar" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input type="text" class="form-control file-upload-info" disabled placeholder="Seleccionar Imagen" name="example-picture"  value="<?php echo $pictureSelect?>">
                                                            <span class="input-group-append">
                                                            <button class="file-upload-browse btn btn-primary" type="button">Seleccionar</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-message">Descripción</label>
                                                        <textarea name="example-message" rows="5" class="form-control"><?php echo $descripSelect?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-country">Seleciona País </label>
                                                        <select name="example-select" id="example-select" class="form-control">
                                                            <option>Londres</option>
                                                            <option>India</option>
                                                            <option>Usa</option>
                                                            <option>Canada</option>
                                                            <option>Tailandia</option>
                                                            <option selected>España</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-local">Localización</label>
                                                        <input type="text" placeholder="localidad (por ejemplo: Murcia)" id="example-local" name="example-local" class="form-control" value="<?php echo $localSelect?>">
                                                    </div>                                                   
                                                    <button name="profile"class="btn btn-primary" type="submit"><i class="ik ik-share"></i>Actualizar Perfil</button>
                                                    <hr>
                                                    <div class="form-group">                                                                                                           
                                                                                                         
                                                    </div>                                                      
                                                </form>
                                                <?php echo $alert?> 
                                            </div>
                                            
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
        <!--Scripts-->   
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="../plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="../plugins/screenfull/dist/screenfull.js"></script>
        <script src="../dist/js/theme.min.js"></script>
        <script src="../js/form-components.js"></script>

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
