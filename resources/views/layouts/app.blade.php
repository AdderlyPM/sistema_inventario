  
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'AppTurismo - Sysadmin') }}</title>
        <link rel='stylesheet' href='/assets/css/bootstrap.min.css'>
        <link rel='stylesheet' href='/assets/css/material.css'>
        <link rel='stylesheet' href='/assets/css/style.css'>
        <link rel='stylesheet' href='/assets/css/customStyle.css'>
        @yield('css')
        <script src='/assets/js/jquery.js'></script>
        <script src='/assets/js/app.js'></script>
        <script>
            jQuery(window).load(function () {
                $('.piluku-preloader').addClass('hidden');
            });
        </script>
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>

    <body class="" >

        <div class="piluku-preloader text-center">
            <div class="loader">Loading...</div>
        </div>
    <div class="wrapper ">
        <!-- left-bar -->
        <div class="left-bar ">
            <div class="admin-logo">
                <div class="logo-holder pull-left">
                    <!-- <img class="logo" src="/assets/img/.png" alt="logo">    -->
                </div>
                <!-- logo-holder -->            
                <a href="#" class="menu-bar  pull-right"><i class="ti-menu"></i></a>
            </div>
            <!-- admin-logo -->
            <ul class="list-unstyled menu-parent" id="mainMenu">
                <li>
                    <a href="/home" class="waves-effect waves-light">
                        <i class="ti-home"></i>
                        <span class="text ">Inicio</span>
                    </a>
                    <a href="/almacen" class="waves-effect waves-light">
                        <i class="ti-home"></i>
                        <span class="text ">Almacenes</span>
                    </a>
                    <a href="/articulo" class="waves-effect waves-light">
                        <i class="ti-home"></i>
                        <span class="text ">Artículos</span>
                    </a>
                    <a href="/tipos-inventario" class="waves-effect waves-light">
                        <i class="ti-home"></i>
                        <span class="text ">Tipos de Inventario</span>
                    </a>
                    <a href="/transaccion" class="waves-effect waves-light">
                        <i class="ti-home"></i>
                        <span class="text ">Transacción</span>
                    </a>
                </li> 
            </ul>
        </div>
        <!-- /left-bar -->

        <div class="content" id="content">
            
            <div class="overlay"></div>

            <!-- /top-bar -->
            <div class="top-bar">
                <nav class="navbar navbar-default top-bar">
                    <div class="menu-bar-mobile" id="open-left"><i class="ti-menu"></i></div>

                    <ul class="nav navbar-nav navbar-right top-elements">
                        <li class="piluku-dropdown dropdown">

                            <a href="#" class="dropdown-toggle avatar_width" data-toggle="dropdown" role="button" aria-expanded="false"><span class="avatar-holder"><img src="/assets/images/avatar/one.png" alt=""></span><span class="avatar_info">{{ Auth::user()->name }}</span><span class="drop-icon"><!-- <i class="ion ion-chevron-down"></i> --></span></a>
                            <ul class="dropdown-menu dropdown-piluku-menu  animated fadeInUp wow avatar_drop neat_drop dropdown-right" data-wow-duration="1500ms" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>   
                            </ul>
                        </li>
                        <!-- <li class="chat_btn">
                            <a href="#" class="right-bar-toggle flatRed">
                                <i class="ion-gear-a"></i>                              
                            </a>
                        </li> -->
                    </ul>
                </nav>
            </div>
            <!-- /top-bar -->
            
            <div class="main-content">
                @yield('content')
            </div>

        </div>

        <div class="side-bar right-bar ">
            <div class="contacts">
                <div class="col col-md-12">
                    <ul class="tabs">
                        <li class="tab col-md-3"><a href="#test2">Configuración</a></li>
                    </ul>
                </div>
                <div class="content-holder">
                    <div id="test1" class="col-md-12 no_padding"> 

                        <div class="heading no_border_bottom">
                          CMS
                          <div class="right"><a href="#"><i class="ion-gear-a"></i></a></div>
                        </div>

                        <div class="list-group message-list">
                          <a href="/almacen" class="list-group-item">
                            <h4 class="list-group-item-heading">Almacenes</h4>
                            <p class="list-group-item-text">Administrar Almacenes</p>
                          </a>
                          
                          <a href="/articulo" class="list-group-item">
                            <h4 class="list-group-item-heading">Articulos</h4>
                            <p class="list-group-item-text">Administrar Artículos</p>
                          </a>
                          <a href="/tipos-inventario" class="list-group-item">
                            <h4 class="list-group-item-heading">Tipos Inventario</h4>
                            <p class="list-group-item-text">Administrar Tipos Inventarios</p>
                          </a>
                          <a href="/transaccion" class="list-group-item">
                            <h4 class="list-group-item-heading">Transacción</h4>
                            <p class="list-group-item-text">Administrar Transacción</p>
                          </a>
                        </div>

                    </div>
                </div>
                <!-- content_holder -->
            </div>
        </div>
        <!-- /Right-bar -->
    </div>
    <!-- wrapper -->
    <script src='/assets/js/jquery-ui-1.10.3.custom.min.js'></script>
    <script src='/assets/js/bootstrap.min.js'></script>
    <script src='/assets/js/jquery.nicescroll.min.js'></script>
    <script src='/assets/js/wow.min.js'></script>
    <script src='/assets/js/jquery.loadmask.min.js'></script>
    <script src='/assets/js/jquery.accordion.js'></script>
    <script src='/assets/js/materialize.js'></script>
    <script src='/assets/js/bic_calendar.js'></script>
    <script src='/assets/js/core.js'></script>
    <script src='/assets/js/app.js'></script>
    @yield('js')
    <script src="/assets/js/jquery.countTo.js"></script>

    </body>
</html>