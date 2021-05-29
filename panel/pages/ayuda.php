<?php include_once 'funciones.php'; ?>
<!doctype html>
<html class="no-js" lang="es">
    <!--Comienza HEAD-->
    <head>
        <!--Metas-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ChuguisApp | Ayuda</title>
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
                                <div class="nav-item active">
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
                                        <i class="ik ik-help-circle bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Ayuda</h5>
                                            <span>aquí podrás encontrar los casos de uso del menú lateral</span>
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
                                            <li class="breadcrumb-item active" aria-current="page">Ayuda</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>                      
                            <!--Pestañas de la Ayuda-->
                            <div class="col-lg-12 col-md-9">
                                <div class="card">
                                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#inicio" role="tab" aria-controls="pills-timeline" aria-selected="true">Inicio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#bebes" role="tab" aria-controls="pills-profile" aria-selected="false">Bebés</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#altura" role="tab" aria-controls="pills-setting" aria-selected="false">Altura</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#peso" role="tab" aria-controls="pills-setting" aria-selected="false">Peso</a>
                                        </li>                                       
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#tomas" role="tab" aria-controls="pills-setting" aria-selected="false">Tomas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#alimentos" role="tab" aria-controls="pills-setting" aria-selected="false">Alimentos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#vacunacion" role="tab" aria-controls="pills-setting" aria-selected="false">Vacunación</a>
                                        </li>                                        
                                    </ul>
                                   
                                    <!--Pestaña Inicio-->
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="inicio" role="tabpanel" aria-labelledby="pills-timeline-tab">
                                            <div class="card-body">
                                                <div class="profiletimeline mt-0">
                                                 
                                                    <div class="sl-item">
                                                        <div class="sl-left"> <img src="../img/portfolio-4.jpg" alt="user" class="rounded-circle" /> </div>
                                                        <div class="sl-right">
                                                            <div><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank' class="link"><strong>amggDeveloper</strong></a> <span class="sl-date">hace 3 días</span>
                                                                <blockquote class="mt-10">
                                                                   <p> En esta página de <strong>'Inicio' </strong>el usuario encontrará la página dividida en dos partes, en la parte izquierda 
                                                                    encontrará el menú para desplazarse entre las distintas secciones que componen el panel de control. Estas secciones son Inicio,
                                                                    Bebés, Altura, Peso, Tomas, Alimentos, Vacunación y Ayuda (sección donde nos encontramos ahora).
                                                                    En el lado derecho de la página encontrará seis secciones distintas, diferenciadas por contenedores distintos. Cada uno de estos contenedores es 
                                                                    el encargado de mostrar los datos sobre el último bebé que se haya introducido o añadido a la aplicación.                                                                    
                                                                    </p>
                                                                    <p>      
                                                                    A continuación se enumeran los distintos contenedores:

                                                                    El contenedor marcado con el número <strong>'1'</strong>: en este contenedor encontramos cuatro recuadros, cada uno se encarga de mostrar los 
                                                                    datos según su enunciado. En el recuadro <em>'Bebés'</em>, se muestra el número total de bebés introducidos en la aplicación. En <em>'Altura'</em>, 
                                                                    se encuentra la última altura medida del último bebe introducido. En <em>'Peso'</em>, se muestra el último peso del último bebé introducido. Por último, en 
                                                                    <em>'Percentil'</em>, se calcula el percentil a raiz del género del bebé, su peso y su altura.
                                                                    
                                                                    </p>                                                             

                                                                    <a class="m-0 row justify-content-center" href="../img/capturas/home.jpg"><img class="img-fluid" src="../img/capturas/home.jpg" alt="imagen ayuda inicio"></a>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab Bebés-->
                                        <div class="tab-pane fade" id="bebes" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="card-body">
                                            <div class="profiletimeline mt-0">
                                            <div class="sl-item">
                                                        <div class="sl-left"> <img src="../img/portfolio-1.jpg" alt="user" class="rounded-circle" /> </div>
                                                        <div class="sl-right">
                                                            <div><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank' class="link"><strong>amggDeveloper</strong></a> <span class="sl-date">hace 3 días</span>
                                                                <blockquote class="mt-10">
                                                                   <p> En esta página de <strong>'Configuración' </strong>el usuario encontrará varios ejemplos de 
                                                                   estilos de la barra superior y los distintos colores que puede utilizar el usuario para personalizar 
                                                                   su panel de control.  

                                                                   Debajo de las muestras de colores el usuario puede encontrar un desplegable para poder seleccionar el 
                                                                   color que más le guste. Una vez seleccionado solo deberá pulsar el botón <strong>'cambiar de color'</strong>
                                                                  </p>                                                             

                                                                    <a class="m-0 row justify-content-center" href="../img/capturas/config.jpg"><img class="img-fluid" src="../img/capturas/config.jpg" alt="imagen ayuda configuración"></a>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                           <!--tab Altura-->
                                           <div class="tab-pane fade" id="altura" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="card-body">
                                            <div class="profiletimeline mt-0">
                                            <div class="sl-item">
                                                        <div class="sl-left"> <img src="../img/portfolio-1.jpg" alt="user" class="rounded-circle" /> </div>
                                                        <div class="sl-right">
                                                            <div><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank' class="link"><strong>amggDeveloper</strong></a> <span class="sl-date">hace 3 días</span>
                                                                <blockquote class="mt-10">
                                                                  <p> En esta página de <strong>'Ayuda' </strong>es donde te encuentras ahora mismo. En ella como podrás 
                                                                   ver, se encuentran los casos de usos para el menu superior. Esta página está dividida en cuatro pestañas, coincidiendo 
                                                                   con los enlaces del menú desplegable. En cada una de las pestañas irás encontrando la ayuda de la página 
                                                                   correspondiente.
                                                                  </p>                                                                

                                                                    <a class="m-0 row justify-content-center" href="../img/capturas/help.jpg"><img class="img-fluid" src="../img/capturas/help.jpg" alt="imagen ayuda configuración"></a>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                          <!--tab Peso-->
                                          <div class="tab-pane fade" id="peso" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="card-body">
                                            <div class="profiletimeline mt-0">
                                            <div class="sl-item">
                                                        <div class="sl-left"> <img src="../img/portfolio-1.jpg" alt="user" class="rounded-circle" /> </div>
                                                        <div class="sl-right">
                                                            <div><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank' class="link"><strong>amggDeveloper</strong></a> <span class="sl-date">hace 3 días</span>
                                                                <blockquote class="mt-10">
                                                                  <p> En esta página de <strong>'Ayuda' </strong>es donde te encuentras ahora mismo. En ella como podrás 
                                                                   ver, se encuentran los casos de usos para el menu superior. Esta página está dividida en cuatro pestañas, coincidiendo 
                                                                   con los enlaces del menú desplegable. En cada una de las pestañas irás encontrando la ayuda de la página 
                                                                   correspondiente.
                                                                  </p>                                                                

                                                                    <a class="m-0 row justify-content-center" href="../img/capturas/help.jpg"><img class="img-fluid" src="../img/capturas/help.jpg" alt="imagen ayuda configuración"></a>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                          <!--tab Tomas-->
                                          <div class="tab-pane fade" id="tomas" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="card-body">
                                            <div class="profiletimeline mt-0">
                                            <div class="sl-item">
                                                        <div class="sl-left"> <img src="../img/portfolio-1.jpg" alt="user" class="rounded-circle" /> </div>
                                                        <div class="sl-right">
                                                            <div><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank' class="link"><strong>amggDeveloper</strong></a> <span class="sl-date">hace 3 días</span>
                                                                <blockquote class="mt-10">
                                                                  <p> En esta página de <strong>'Ayuda' </strong>es donde te encuentras ahora mismo. En ella como podrás 
                                                                   ver, se encuentran los casos de usos para el menu superior. Esta página está dividida en cuatro pestañas, coincidiendo 
                                                                   con los enlaces del menú desplegable. En cada una de las pestañas irás encontrando la ayuda de la página 
                                                                   correspondiente.
                                                                  </p>                                                                

                                                                    <a class="m-0 row justify-content-center" href="../img/capturas/help.jpg"><img class="img-fluid" src="../img/capturas/help.jpg" alt="imagen ayuda configuración"></a>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                          <!--tab Alimentos-->
                                          <div class="tab-pane fade" id="alimentos" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="card-body">
                                            <div class="profiletimeline mt-0">
                                            <div class="sl-item">
                                                        <div class="sl-left"> <img src="../img/portfolio-1.jpg" alt="user" class="rounded-circle" /> </div>
                                                        <div class="sl-right">
                                                            <div><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank' class="link"><strong>amggDeveloper</strong></a> <span class="sl-date">hace 3 días</span>
                                                                <blockquote class="mt-10">
                                                                  <p> En esta página de <strong>'Ayuda' </strong>es donde te encuentras ahora mismo. En ella como podrás 
                                                                   ver, se encuentran los casos de usos para el menu superior. Esta página está dividida en cuatro pestañas, coincidiendo 
                                                                   con los enlaces del menú desplegable. En cada una de las pestañas irás encontrando la ayuda de la página 
                                                                   correspondiente.
                                                                  </p>                                                                

                                                                    <a class="m-0 row justify-content-center" href="../img/capturas/help.jpg"><img class="img-fluid" src="../img/capturas/help.jpg" alt="imagen ayuda configuración"></a>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                          <!--tab Vacunación-->
                                          <div class="tab-pane fade" id="vacunación" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="card-body">
                                            <div class="profiletimeline mt-0">
                                            <div class="sl-item">
                                                        <div class="sl-left"> <img src="../img/portfolio-1.jpg" alt="user" class="rounded-circle" /> </div>
                                                        <div class="sl-right">
                                                            <div><a href="http://amggdeveloper.pythonanywhere.com/" target='_blank' class="link"><strong>amggDeveloper</strong></a> <span class="sl-date">hace 3 días</span>
                                                                <blockquote class="mt-10">
                                                                  <p> En esta página de <strong>'Ayuda' </strong>es donde te encuentras ahora mismo. En ella como podrás 
                                                                   ver, se encuentran los casos de usos para el menu superior. Esta página está dividida en cuatro pestañas, coincidiendo 
                                                                   con los enlaces del menú desplegable. En cada una de las pestañas irás encontrando la ayuda de la página 
                                                                   correspondiente.
                                                                  </p>                                                                

                                                                    <a class="m-0 row justify-content-center" href="../img/capturas/help.jpg"><img class="img-fluid" src="../img/capturas/help.jpg" alt="imagen ayuda configuración"></a>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
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
