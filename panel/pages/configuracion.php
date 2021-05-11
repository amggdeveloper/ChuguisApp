<!doctype html>
<html class="no-js" lang="es">
    <!--Empieza HEAD-->
    <head>
        <!--Metas-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ChuguisApp | Configuración</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Icono de la aplicación-->
        <link rel="icon" href="../favicon.ico" type="image/x-icon" />
        <!--Fuentes-->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        <!--Hojas de Estilos-->
        <link rel="stylesheet" href="../plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="../plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="../plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="../plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="../plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="../dist/css/theme.min.css">
        <!--Script-->
        <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <!--Termina HEAD-->
    <!--Empieza BODY-->
    <body>     
           <!--Barra de la Cabecera-->
           <div class="wrapper">
            <header class="header-top" header-theme="blue">
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
                <!--Empieza contenido de la Página-->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-settings bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Configuración</h5>
                                            <span>podrás cambiar el color de la barra superior</span>
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
                                            <li class="breadcrumb-item active" aria-current="page">Configuración</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!--Cambiar color para la barra superior-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Color Barra Cabecera</h3>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="sub-title">Blanco</h4>
                                        <img src="../img/navbar/light.jpg" class="img-fluid border p-1 rounded" alt="imagen cabecera blanco">

                                        <h4 class="sub-title mt-30">Negro</h4>
                                        <img src="../img/navbar/dark.jpg" class="img-fluid border p-1 rounded" alt="imagen cabecera negro">

                                        <h4 class="sub-title mt-30">Azul</h4>
                                        <img src="../img/navbar/blue.jpg" class="img-fluid border p-1 rounded" alt="imagen cabecera azul">

                                        <h4 class="sub-title mt-30">Rojo</h4>
                                        <img src="../img/navbar/red.jpg" class="img-fluid border p-1 rounded" alt="imagen cabecera rojo">

                                        <h4 class="sub-title mt-30">Naranja</h4>
                                        <img src="../img/navbar/orange.jpg" class="img-fluid border p-1 rounded" alt="imagen cabecera naranja">

                                        <h4 class="sub-title mt-30">Verde</h4>
                                        <img src="../img/navbar/green.jpg" class="img-fluid border p-1 rounded" alt="imagen cabecera verde">

                                        <h4 class="sub-title mt-30">Morado</h4>
                                        <img src="../img/navbar/purple.jpg" class="img-fluid border p-1 rounded" alt="imagen cabecera morado">
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
