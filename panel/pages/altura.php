<?php include_once 'funheight.php'?>
<!doctype html>
<html class="no-js" lang="es">
    <!--Comienza HEAD-->
    <head>
        <!--Metas-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ChuguisApp | Altura</title>
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
                                <div class="nav-item active">
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
                                        <i class="ik ik ik-star bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Altura</h5>
                                            <span>aquí podrás llevar un control sobre la altura de tu bebé y su evolución</span>
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
                                            <li class="breadcrumb-item active" aria-current="page">Altura</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>        
                        <!--Formulario para introducir la altura-->
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
                                                    <span class="input-group-prepend"><label class="input-group-text"><i class="ik ik-star"></i></label></span>
                                                    <input type="text" class="form-control" placeholder="altura en cm" name="height" id="height">
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
                                                <div class="input-group input-group-warning">
                                                    <span class="input-group-prepend"><label class="input-group-text"><i class="ik ik-edit"></i></label></span>
                                                    <input type="text" class="form-control" placeholder="anotaciones" name="notes" id="notes">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="addHeight" class="btn btn-dark"><i class="ik ik-share"></i>Añadir</button>
                                        </form> 
                                                                           
                                </div>
                            </div>                                        
                                </div>                                  
                            </div>
                        </div>  
                        <?php echo $msg?>                          
                        <!--Tabla-->            
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                    <h3  class="col-md-11">Tabla Bebés Introducidos</h3>
                                    <button id="impPdf" class="btn btn-info .col-6 .col-md-4" type="button" onclick="impPdf()"><i id="imp" class="ik ik-printer"></i></button>
                                    </div>
                                        <div class="card-body">
                                            <table id="data_table_height" class="table">
                                                 <thead class="thead-dark">
                                                        <tr>
                                                          <th>Id</th>                                                       
                                                          <th>Altura</th>
                                                          <th>Fecha</th>                                                         
                                                          <th>Anotaciones</th>
                                                          <th>Bebé</th>
                                                          <th class="nosort">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                <tbody>                                            
                                                  <?php echo $tableHeight?>                                                                                                                                            
                                                </tbody>
                                             </table>                                                                                        
                                             </div>
                                            </div>
                                        </div>
                                    </div>
                        <!--Gráfica altura-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Gráfica Altura por Fecha</h3>
                                    </div>
                                <div class="card-block">
                            <div id="placeholder" class="demo-placeholder" width="200" height="300"></div>
                            <canvas id="grafica"></canvas>
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
        <script src="../plugins/flot-charts/jquery.flot.js"></script>
        <script src="../plugins/flot-charts/jquery.flot.categories.js"></script>
        <script src="../plugins/flot-charts/jquery.flot.pie.js"></script>
        <script src="../plugins/flot-charts/curvedLines.js"></script>
        <script src="../plugins/flot-charts/jquery.flot.tooltip.min.js"></script>
        <script src="../dist/js/theme.min.js"></script>       
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
             

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
        
           <!--Script para imprimir las tablas pulsando el botón de imprimir-->        
           <script>
          function impPdf(){        
            //creamos variable con el elemento tabla usuarios   
            var tab = document.getElementById('data_table_height');
            //Introducimos un estilo para el pdf
            var style = "<style>";
                style = style + "#avatarTable {width: 60px; height: 60px}";
                style = style + "table {width: 100%; font: 17px Calibri;}";
                style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
                style = style + "padding: 2px 3px; text-align: center;}";
                style = style + "</style>";
            //definimos la ventana de impresión    
            var win = window.open('', '', 'height=700,width=700');
            //Creamos el imprimible
            win.document.write(style);
            win.document.write(data_table_height.outerHTML);
            win.document.close();
            win.print();
        }
        </script>

        <!--Script para el Grafico-->
        <script type="text/javascript">
        // Obtener una referencia al elemento canvas del DOM
        var ctx = document.getElementById('grafica').getContext('2d');      
        var myChart = new Chart(ctx, {
            type: 'bar',
                data: {
                labels: ['1','2','3','4','5','6','7','8','9','10'],
                datasets: [{
                    label: '# Altura por Fecha',
                    data: [<?php echo $heights?>,],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                 }]
                },
                options: {
                    scales: {
                      y: {
                            beginAtZero: true
                     }
                   }
                }
            });
    </script>
    </body>
</html>
