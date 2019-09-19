<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
    <title>Panel administrativo</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- chartist CSS -->

    <!-- Custom CSS -->
    <link href="{{ asset('css/dash-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors/blue.css') }}" id="theme" rel="stylesheet">
    @yield('estilos')
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Cargador - spinner.css  -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <!-- icono -->
                        <b>
                            <!-- Icono oscuro -->
                            <img src="{{ asset('img/logo-icon.png') }}" alt="IP" class="dark-logo" />
                            <!-- Icono claro -->
                            <img src="{{ asset('img/logo-light-icon.png') }}" alt="IP" class="light-logo" />
                        </b>
                        <!--Fin icono -->
                        <!-- Texto logo -->
                        <span>
                         <!-- Oscuro -->
                         <img src="{{ asset('img/logo-text.png') }}" alt="IP" class="dark-logo" />
                         <!-- Claro -->    
                         <img src="{{ asset('img/logo-light-text.pg') }}" class="light-logo" alt="ITO-PAPP" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- Fin logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Navbar -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle y nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notificaciones</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Compra entrante</h5> <span class="mail-desc">Atiénda esta compra cuanto antes</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pedido a proveedor</h5> <span class="mail-desc">Se recomienda hacer un pedido pronto</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Configuración pendiente</h5> <span class="mail-desc">Agregue más información a su perfil</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Ver todas las notificaciones</strong> <i class="fa fa-angle-right"></i> </a>
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">4 nuevos mensajes</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="user1.jpg" alt="user" class="img-circle"> <span class="profile-status online float-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="user2.jpg" alt="user" class="img-circle"> <span class="profile-status busy float-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="user3.jpg" alt="user" class="img-circle"> <span class="profile-status away float-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="user4.jpg" alt="user" class="img-circle"> <span class="profile-status offline float-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Ver todos los mensajes</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Perfil y busqueda -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Buscar..."> <a class="srh-btn"><i class="ti-search"></i></a> </form>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('/img')."/".$administrador->foto }}" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="{{ asset('/img')."/".$administrador->foto }}" alt="user"></div>
                                            <div class="u-text" style="padding-left: 0px;">
                                                <h4>{{ $administrador->nombres }}</h4>
                                                <p class="text-muted"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="" style="padding: 0px;">{{$administrador->email}}</a></p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">Ver perfil</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> Perfil</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Mensajes</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Configuraciones</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Salir</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- barra derecha -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- user -->
                <div class="user-profile">
                    <!-- User imagen -->
                    <div class="profile-img"> <img src="{{ asset('/img')."/".$administrador->foto }}" alt="user" /> </div>
                    <!-- User text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">{{ $administrador->nombres }}<span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="#" class="dropdown-item"><i class="ti-user"></i> Perfil</a>
                            <a href="#" class="dropdown-item"><i class="ti-email"></i> Mensajes</a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Configuraciones</a>
                            <div class="dropdown-divider"></div> <a href="{{ route('logout') }}" class="dropdown-item"><i class="fa fa-power-off"></i> Salir</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">GESTIÓN DE CONTENIDOS</li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Mi papelería <span class="label label-rounded label-success">5</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('mipape') }}">Información</a></li>
                                <li><a href="{{ route('categorias') }}">Categorías</a></li>
                                <li>
                                    <a class="has-arrow" href="#" aria-expanded="false">Diseño</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{ route('designWeb') }}">Sitio web</a></li>
                                        <li><a href="{{ route('designApp') }}">App móvil</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Productos</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('editCategorias') }}">Categorías</a></li>
                                <li><a href="{{ route('inventario') }}">Inventario</a></li>
                                <li><a href="{{ route('ventas') }}">Ventas</a></li>
                                <li><a href="{{ route('compras') }}">Compras</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="" href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Mensajes</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Mas cosas</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Thing 1</a></li>
                                <li><a href="#">Thing 2</a></li>
                                <li><a href="#">Thing 3</a></li>
                                <li><a href="#">Thing te pongo</a></li>
                                <li><a href="#">Thing 5</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">Aqui arriba hay un separador</li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Mas</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Cosa</a></li>
                                <li><a href="#">Otra cosa</a></li>
                                <li><a href="#">La cosa maravillosa</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- Fin de la barra izquierda -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Botones inferiores-->
            <div class="sidebar-footer">
                <a href="" class="link" data-toggle="tooltip" title="Configuraciones"><i class="ti-settings"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="Mensajes"><i class="mdi mdi-gmail"></i></a>
                <a href="{{ route('logout') }}" class="link" data-toggle="tooltip" title="Salir"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- Fin botones inferiores-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                       @yield('bread')
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm float-right ml-2"><i class="ti-settings text-white"></i></button>
                        <button class="btn float-right hidden-sm-down btn-success" onclick="window.open('{{ route('adminindex') }}')"><i class="mdi mdi-arrow-up-bold-circle"></i> IR A MI SITIO</button>
                        <div class="dropdown float-right mr-2 hidden-sm-down">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Enero 2019 </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">Febrero 2019</a> <a class="dropdown-item" href="#">Marzo 2019</a> <a class="dropdown-item" href="#">Abril 2019</a> </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- CONTENIDO -->
                <!-- ============================================================== -->
                @yield('CONTENT')
                <!-- ============================================================== -->
                <!-- FIN DEL CONTENIDO -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- BARRA DERECHA -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> TEMAS <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="mt-3">
                                <li><b>Claros</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block mt-4"><b>Oscuros</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Fin Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- fin Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2019 
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- Fin Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- Fin Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Jquerys -->
    <!-- ============================================================== -->
    <script>
        var asset_global='{{asset("/")}}';
    </script>
    <script data-cfasync="false" src="{{ asset('js/email-decode.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('js/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('js/admin/perfect-scrollbar.jquery.js') }}"></script>
        <script src="{{ asset('js/admin/sparkline.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <!-- Chart JS -->
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('js/jQuery.style.switcher.js') }}"></script>
    @yield('scripts')
    <script>
        var long;
        $.ajax({
                    url: "{{ route('getupdates')}}",
                    type: 'GET',
                    success: function(response){
                        long = response.length;
                      },
                    error: function(response){
                         //alert(response)
                      }
                    });
            setInterval(function(){
                $.ajax({
                    url: "{{ route('getupdates')}}",
                    type: 'GET',
                    success: function(response){
                        if(response.length > long){
                            var msg = response[response.length -1].message.text;
                            if(msg == "/productos_disponibles"){
                                $.ajax({ 
                                url: "{{ route('productos-disponibles') }}",
                                type: 'GET',
                            });
                            }else if(msg == "/ventas_hoy"){
                                $.ajax({ 
                                url: "{{ route('ventas-hoy') }}",
                                type: 'GET',
                            });
                            }
                            long = response.length;
                        }
                      },
                    error: function(response){
                      }
                    });
            },5000,"JavaScript");
    </script>
    <script>
        switch(localStorage.getItem('theme')){
            case "default":
                $(".default-theme").addClass("working");
                break;
            case "default-dark":
                $(".default-dark-theme").addClass("working");
                break;
            case "green":
                $(".green-theme").addClass("working");
                break;
            case "green-dark":
                $(".green-dark-theme").addClass("working");
                break;
            case "red":
                $(".red-theme").addClass("working");
                break;
            case "red-dark":
                $(".red-dark-theme").addClass("working");
                break;
            case "blue":
                $(".blue-theme").addClass("working");
                break;
            case "blue-dark":
                $(".blue-dark-theme").addClass("working");
                break;
            case "megna":
                $(".megna-theme").addClass("working");
                break;
            case "megna-dark":
                $(".megna-dark-theme").addClass("working");
                break;
            case "purple":
                $(".purple-theme").addClass("working");
                break;
            case "purple-dark":
                $(".purple-dark-theme").addClass("working");
                break;
        }
    </script>
</body>

</html>