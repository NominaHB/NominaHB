<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="~/../img/usuario4.png">
    <title>Sistema de Administración de Nomina</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body style="background-color: #E8E8E8;">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="~/../img/L-nomina-large-pequeño.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="~/../img/L-nomina-large-blanco-pequeño.png" alt="homepage" class="light-logo" />
                        </b>

                        <span class="logo-text">

                        </span>
                    </a>

                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>


                        </li>
                    </ul>

                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                        <div>
                                <p style="padding: 20px; color: white" class="m-b-0"><strong><?php echo $_SESSION['usuario']->USUARIO." ".$_SESSION['usuario']->rol?></strong></p>
                                
                        </div>
                        
                                        
                        </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">

                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <ul class="list-style-none">
                                    <li>

                                    </li>

                                    <li>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">

                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <span class="with-arrow"><span class="bg-danger"></span></span>
                                <ul class="list-style-none">
                                    <li>

                                    </li>
                                    <li>

                                    </li>
                                    <li>
                                        <a class="nav-link text-center link text-dark" href="javascript:void(0);">
                                            <b>See all e-Mails</b> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div style="position: fixed;">
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class=""><img src="../../assets/images/users/1.jpg" alt="user" class="img-circle" width="60"></div>
                                    <div class="m-l-10" >
                                        <h4 class="m-b-0"><?php echo $_SESSION['usuario']->USUARIO?></h4>
                                        <p class=" m-b-0"><?php echo $_SESSION['usuario']->rol?></p>
                                        <p class=" m-b-0"><?php echo $_SESSION['usuario']->CORREO?></p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="?controller=usuario&method=editPerfil"><i class="ti-user m-r-5 m-l-5"></i>
                                    Mi Perfil</a>
                                    <a class="dropdown-item" href="?controller=empleado&method=edit&ID_EMPLEADO="><i class="ti-user m-r-5 m-l-5"></i>
                                    Mi PerfilEmpleado</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?controller=login&method=logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Cerrar Sesión</a>
                                </div>
                        </div>

                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <!--<li class="nav-item ">
                            <a class="nav-link" href="?controller=login&method=logout">Cerrar Sesión</a>
                        </li>-->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <?php
                        if ($_SESSION['usuario']->rol == "Administrador") {
                        ?>
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">cargos</span></li>
                            <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="?controller=Cargo" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Cargos</span></a>

                            </li>
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Empleados</span></li>
                            <li class="sidebar-item"> <a class="sidebar-link two-column  waves-effect waves-dark" href="?controller=empleado" aria-expanded="false"><i class="mdi mdi-inbox-arrow-down"></i><span class="hide-menu">Empleados</span></a>

                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-inbox-arrow-down"></i><span class="hide-menu">Contratos </span></a>
                                <div style="position: fixed;">
                                    <ul aria-expanded="false" class="collapse  first-level">
                                        <li class="sidebar-item"><a href="?controller=Contrato" class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu"> Contrato </span></a>
                                        </li>
                                        <li class="sidebar-item"><a href="?controller=Departamento" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu"> Departamento
                                                </span></a></li>
                                    </ul>
                                </div>

                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link has waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-inbox-arrow-down"></i><span class="hide-menu">Novedad </span></a>
                                <div style="position: fixed;">
                                    <ul aria-expanded="false" class="collapse  first-level">
                                        <li class="sidebar-item"><a href="?controller=Novedad" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu">Novedad
                                                </span></a></li>
                                        <li class="sidebar-item"><a href="?controller=TipoNovedad" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu"> Tipo Novedad
                                                </span></a></li>

                                    </ul>
                                </div>

                            </li>
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Obra</span></li>
                            <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="?controller=Obra" aria-expanded="false"><i class="mdi mdi-border-none"></i><span class="hide-menu">Obra</span></a>

                            </li>
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Roles</span></li>
                            <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark sidebar-link" href="?controller=Rol" aria-expanded="false"><i class="mdi mdi-image-filter-tilt-shift"></i><span class="hide-menu">
                                        Roles</span></a>
                            </li>
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Estados</span></li>
                            <li class="sidebar-item "> <a class="sidebar-link  waves-effect waves-dark" href="?controller=Estado" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Estados </span></a>

                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="?controller=usuario" aria-expanded="false"><i class="mdi mdi-notification-clear-all"></i><span class="hide-menu">Usuarios</span></a>

                            </li>
                        <?php
                        }
                        ?>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Desprendible</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="?controller=desprendible" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Desprendible</span></a>

                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="background-color: #E8E8E8;">
            <!-- ============================================================== -->
            <!-- End Left Part  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right Part  Mail Compose -->
            <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

    </div>
    </div>
    <!-- End Tab 1 -->
    <!-- Tab 2 -->

    </div>
    </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="/dist/js/app.min.js"></script>
    <script src="/dist/js/app.init.horizontal.js"></script>
    <script src="/dist/js/app-style-switcher.horizontal.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/dist/js/custom.min.js"></script>
</body>

</html>