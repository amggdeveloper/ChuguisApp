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
                            <!--Pestañas de la Ayuda-->
                            <div class="row">
                            <div class="col-md-12">
                                <div class="mb-2 clearfix">
                                    <a class="btn pt-0 pl-0 d-md-none d-lg-none" data-toggle="collapse" href="#displayOptions" role="button" aria-expanded="true" aria-controls="displayOptions">
                                        Display Options
                                        <i class="ik ik-chevron-down align-middle"></i>
                                    </a>
                                    <div class="collapse d-md-block display-options" id="displayOptions">
                                        <span class="mr-3 d-inline-block float-md-left dispaly-option-buttons">
                                            <a href="#" class="mr-1 view-list active">
                                                <i class="ik ik-menu view-icon"></i>
                                            </a>
                                            <a href="#" class="mr-1 view-thumb">
                                                <i class="ik ik-list view-icon"></i>
                                            </a>
                                            <a href="#" class="mr-1 view-grid">
                                                <i class="ik ik-grid view-icon"></i>
                                            </a>
                                        </span>
                                        <div class="d-block d-md-inline-block">
                                            <div class="btn-group float-md-left mr-1 mb-1">
                                                <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Order By 
                                                    <i class="ik ik-chevron-down mr-0 align-middle"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                </div>
                                            </div>
                                            <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                                <form action="">
                                                    <input type="text" class="form-control" placeholder="Search.." required>
                                                    <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                                                    <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                    <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Full Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" placeholder="Email">
                                                        </div>
                                                        <button class="btn btn-theme">Search</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="float-md-right">
                                            <span class="text-muted text-small mr-2">Displaying 1-10 of 210 items </span>
                                            <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                20
                                                <i class="ik ik-chevron-down mr-0 align-middle"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">10</a>
                                                <a class="dropdown-item" href="#">20</a>
                                                <a class="dropdown-item" href="#">30</a>
                                                <a class="dropdown-item" href="#">50</a>
                                                <a class="dropdown-item" href="#">100</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator mb-20"></div>

                                <div class="row layout-wrap" id="layout-wrap">
                                    <div class="col-12 list-item">
                                        <div class="card d-flex flex-row mb-3">
                                            <a class="d-flex card-img" href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem">
                                                <img src="../img/portfolio-1.jpg" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                                <span class="badge badge-pill badge-primary position-absolute badge-top-left">New</span>
                                                <span class="badge badge-pill badge-secondary position-absolute badge-top-left-2">Trending</span>
                                            </a>
                                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                                    <a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem">
                                                        Donec felis urna, commodo eget velit interdum, malesuada lacinia eros.
                                                    </a>
                                                    <p class="mb-1 text-muted text-small category w-15 w-xs-100">Art</p>
                                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">02.04.2018</p>
                                                    <div class="w-15 w-xs-100">
                                                        <span class="badge badge-pill badge-secondary">On Hold</span>
                                                    </div>
                                                </div>
                                                <div class="list-actions">
                                                    <a href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem"><i class="ik ik-eye"></i></a>
                                                    <a href="layout-edit-item.html"><i class="ik ik-edit-2"></i></a>
                                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                                </div>
                                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                    <label class="custom-control custom-checkbox mb-0">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 list-item">
                                        <div class="card d-flex flex-row mb-3">
                                            <a class="d-flex card-img" href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem">
                                                <img src="../img/portfolio-2.jpg" alt="Nullam porttitor elit rhoncus luctus volutpat." class="list-thumbnail responsive border-0">
                                                <span class="badge badge-pill badge-primary position-absolute badge-top-left">New</span>
                                                <span class="badge badge-pill badge-secondary position-absolute badge-top-left-2">Trending</span>
                                            </a>
                                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                                <div class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero align-items-lg-center">
                                                    <a href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem" class="w-40 w-sm-100">
                                                        <p class="list-item-heading mb-1 truncate">Proin sit amet augue lorem. Interdum et malesuada fames.</p>
                                                    </a>
                                                    <p class="mb-1 text-muted text-small category w-15 w-sm-100">Travel</p>
                                                    <p class="mb-1 text-muted text-small date  w-15 w-sm-100">21.03.2018</p>
                                                    <div class="w-15 w-sm-100">
                                                        <span class="badge badge-pill badge-primary">Processed</span>
                                                    </div>
                                                </div>
                                                <div class="list-actions">
                                                    <a href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem"><i class="ik ik-eye"></i></a>
                                                    <a href="layout-edit-item.html"><i class="ik ik-edit-2"></i></a>
                                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                                </div>
                                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                    <label class="custom-control custom-checkbox mb-0">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 list-item">
                                        <div class="card d-flex flex-row mb-3">
                                            <a class="d-flex card-img" href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem">
                                                <img src="../img/portfolio-7.jpg" alt="Nullam porttitor elit rhoncus luctus volutpat." class="list-thumbnail responsive border-0">
                                                <span class="badge badge-pill badge-primary position-absolute badge-top-left">New</span>
                                                <span class="badge badge-pill badge-secondary position-absolute badge-top-left-2">Trending</span>
                                            </a>
                                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                                <div class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero align-items-lg-center">
                                                    <a href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem" class="w-40 w-sm-100">
                                                        <p class="list-item-heading mb-1 truncate">Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                                                    </a>
                                                    <p class="mb-1 text-muted text-small category w-15 w-sm-100">Design</p>
                                                    <p class="mb-1 text-muted text-small date  w-15 w-sm-100">19.02.2018</p>
                                                    <div class="w-15 w-sm-100">
                                                        <span class="badge badge-pill badge-secondary">On Hold</span>
                                                    </div>
                                                </div>
                                                <div class="list-actions">
                                                    <a href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem"><i class="ik ik-eye"></i></a>
                                                    <a href="layout-edit-item.html"><i class="ik ik-edit-2"></i></a>
                                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                                </div>
                                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                    <label class="custom-control custom-checkbox mb-0">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 list-item">
                                        <div class="card d-flex flex-row mb-3">
                                            <a class="d-flex card-img" href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem">
                                                <img src="../img/portfolio-8.jpg" alt="Nullam porttitor elit rhoncus luctus volutpat." class="list-thumbnail responsive border-0">
                                                <span class="badge badge-pill badge-primary position-absolute badge-top-left">New</span>
                                                <span class="badge badge-pill badge-secondary position-absolute badge-top-left-2">Trending</span>
                                            </a>
                                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                                <div class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero align-items-lg-center">
                                                    <a href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem" class="w-40 w-sm-100">
                                                        <p class="list-item-heading mb-1 truncate">Maecenas ut felis iaculis, dapibus mi quis, cursus mi.</p>
                                                    </a>
                                                    <p class="mb-1 text-muted text-small category w-15 w-sm-100">Travel</p>
                                                    <p class="mb-1 text-muted text-small date  w-15 w-sm-100">14.02.2018</p>
                                                    <div class="w-15 w-sm-100">
                                                        <span class="badge badge-pill badge-primary">Processed</span>
                                                    </div>
                                                </div>
                                                <div class="list-actions">
                                                    <a href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem"><i class="ik ik-eye"></i></a>
                                                    <a href="layout-edit-item.html"><i class="ik ik-edit-2"></i></a>
                                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                                </div>
                                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                    <label class="custom-control custom-checkbox mb-0">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="right-sidebar">
                    <div class="sidebar-chat" data-plugin="chat-sidebar">
                        <div class="sidebar-chat-info">
                            <h6>Chat List</h6>
                            <form class="mr-t-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search for friends ..."> 
                                    <i class="ik ik-search"></i>
                                </div>
                            </form>
                        </div>
                        <div class="chat-list">
                            <div class="list-group row">
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Gene Newman">
                                    <figure class="user--online">
                                        <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Gene Newman</span>  <span class="username">@gene_newman</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Billy Black">
                                    <figure class="user--online">
                                        <img src="../img/users/2.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Billy Black</span>  <span class="username">@billyblack</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Herbert Diaz">
                                    <figure class="user--online">
                                        <img src="../img/users/3.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Herbert Diaz</span>  <span class="username">@herbert</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Sylvia Harvey">
                                    <figure class="user--busy">
                                        <img src="../img/users/4.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Sylvia Harvey</span>  <span class="username">@sylvia</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item active" data-chat-user="Marsha Hoffman">
                                    <figure class="user--busy">
                                        <img src="../img/users/5.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Marsha Hoffman</span>  <span class="username">@m_hoffman</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Mason Grant">
                                    <figure class="user--offline">
                                        <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Mason Grant</span>  <span class="username">@masongrant</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Shelly Sullivan">
                                    <figure class="user--offline">
                                        <img src="../img/users/2.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Shelly Sullivan</span>  <span class="username">@shelly</span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>

                <div class="chat-panel" hidden>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>  
                            <span class="user-name">John Doe</span> 
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="card-body">
                            <div class="widget-chat-activity flex-1">
                                <div class="messages">
                                    <div class="message media reply">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="../img/users/3.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>Epic Cheeseburgers come in all kind of styles.</p>
                                        </div>
                                    </div>
                                    <div class="message media">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>Cheeseburgers make your knees weak.</p>
                                        </div>
                                    </div>
                                    <div class="message media reply">
                                        <figure class="user--offline">
                                            <a href="#">
                                                <img src="../img/users/5.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>Cheeseburgers will never let you down.</p>
                                            <p>They'll also never run around or desert you.</p>
                                        </div>
                                    </div>
                                    <div class="message media">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>A great cheeseburger is a gastronomical event.</p>
                                        </div>
                                    </div>
                                    <div class="message media reply">
                                        <figure class="user--busy">
                                            <a href="#">
                                                <img src="../img/users/5.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>There's a cheesy incarnation waiting for you no matter what you palete preferences are.</p>
                                        </div>
                                    </div>
                                    <div class="message media">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>If you are a vegan, we are sorry for you loss.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="javascript:void(0)" class="card-footer" method="post">
                            <div class="d-flex justify-content-end">
                                <textarea class="border-0 flex-1" rows="1" placeholder="Type your message here"></textarea>
                                <button class="btn btn-icon" type="submit"><i class="ik ik-arrow-right text-success"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal fade edit-layout-modal" id="editLayoutItem" tabindex="-1" role="dialog" aria-labelledby="editLayoutItemLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editLayoutItemLabel">Sed id mi non quam iaculis pulvinar.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p class="lead">Nullam elementum aliquam porta.</p>
                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus fermentum imperdiet ligula, et mollis quam sagittis ac. In quis interdum sem. Vivamus blandit fringilla hendrerit. Suspendisse vulputate sapien vitae mi convallis dictum. Sed blandit felis ut quam accumsan, at condimentum nibh varius. Mauris ornare ultricies ipsum.</p>
                        <div class="row">
                            <div class="col-md-6"><img src="../img/portfolio-1.jpg" class="img-fluid" alt=""></div>
                            <div class="col-md-6"><img src="../img/portfolio-8.jpg" class="img-fluid" alt=""></div>
                        </div>
                        <div class="jumbotron pt-30 pb-30 mt-30">
                            <h2 class="mt-0">Hello, world!</h2>
                            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        </div>
                        <p>Praesent eleifend ac felis dignissim mattis. Suspendisse eget congue enim, ac fermentum risus. Donec eget risus lacus. Nullam nec lectus quis tortor ultrices consectetur. Etiam dui erat, tristique vel quam a, maximus porttitor enim. Ut molestie turpis in est iaculis, ut congue massa porta.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="layout-edit-item.html" class="btn btn-primary">Edit</a>
                        <button type="button" class="btn btn-danger list-delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="quick-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <div class="input-wrap">
                                        <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                        <i class="ik ik-search"></i>
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
          
        <!--Scripts-->   
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="../plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="../plugins/screenfull/dist/screenfull.js"></script>
        <script src="../dist/js/theme.min.js"></script>
        <script src="../plugins/sweetalert/dist/sweetalert.min.js"></script>
        <script src="../plugins/summernote/dist/summernote-bs4.min.js"></script>
        <script src="../js/layouts.js"></script>

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
