@extends('index')
@section('titulo')
<title>{{ $mipape->nombre}} </title>
@endsection
@section('estilos')
<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/temporal.css') }}">
@endsection
@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="menu">
        <div class="container">
            <a href="#" class="navbar-brand" style="color:#fed136">{{ $mipape->nombre }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" id="nav">
                
                  <li class="nav-item letras" id="l1">
                    <a data-scroll class="nav-link" href="#inicio">INICIO<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item letras" id="l2" >
                    <a class="nav-link" href="#explorar">CATÁLOGO</a>
                  </li>
                  <li class="nav-item letras" id="l3">
                    <a class="nav-link" href="#about">QUIÉNES SOMOS</a>
                  </li>
                  <li class="nav-item letras" id="l4">
                    <a class="nav-link" href="#contacto">CONTACTO</a>
                  </li>
                  
                  <li>
                      <a href="{{ route('carrito') }}" class="widget-header mr-3">
				<div class="icontext">
					<div class="icon-wrap"><i class="icon-sm round border fa fa-shopping-cart"></i></div>
					<div class="text-wrap">
						<span id="n_elementos_carrito" class="small badge badge-danger"></span>
					</div>
				</div>
			</a>
                  </li>
                  <li>
                      <a href="#" class="widget-header mr-3">
				<div class="icontext">
					<div class="icon-wrap"><i class="icon-sm round border fa fa-heart"></i></div>
					<div class="text-wrap">
					</div>
				</div>
			</a>
                  </li>
                  <li>
                      <div class="widget-header dropdown">
				<a href="#" data-toggle="dropdown" data-offset="20,10" aria-expanded="false">
					<div class="icontext">
						<div class="icon-wrap"><i class="icon-sm round border fa fa-user"></i></div>
						<div class="text-wrap">
							<div><i class="fa fa-caret-down"></i> </div>
						</div>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="{{ asset('/img')."/".$cliente->foto }}" alt="user"></div>
                                            <div class="u-text">
                                                <h4>{{ $cliente->nombres }}</h4>
                                                <p class="text-muted">{{ $cliente->email}}</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">Ver perfil</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> Mi perfil</a></li>
                                    <li><a href="{{ route('monedero') }}"><i class="ti-wallet"></i> Mi monedero</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Mensajes</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Configuración</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Salir</a></li>
                                </ul>
                            </div>
			</div>
                  </li>
                  
                </ul>

            </div>
        </div>
    </nav>
    <!--
    <aside class="left-sidebar" id="cpanel">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.html">Modern Dashboard</a></li>
                                <li><a href="index2.html">Awesome Dashboard</a></li>
                                <li><a href="index3.html">Classy Dashboard</a></li>
                                <li><a href="index4.html">Analytical Dashboard</a></li>
                                <li><a href="index5.html">Minimal Dashboard</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Apps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-calendar.html">Calendar</a></li>
                                <li>
                                    <a class="has-arrow" href="#" aria-expanded="false">Inbox</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="app-email.html">Mailbox</a></li>
                                        <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                                        <li><a href="app-compose.html">Compose Mail</a></li>
                                    </ul>
                                </li>
                                <li><a href="app-chat.html">Chat app</a></li>
                                <li><a href="app-ticket.html">Support Ticket</a></li>
                                <li><a href="app-contact.html">Contact / Employee</a></li>
                                <li><a href="app-contact2.html">Contact Grid</a></li>
                                <li><a href="app-contact-detail.html">Contact Detail</a></li>
                            </ul>
                        </li>
                        <li class="three-column">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Ui Elements</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
                                <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-user-card.html">User Cards</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-tab.html">Tab</a></li>
                                <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                                <li><a href="ui-notification.html">Notification</a></li>
                                <li><a href="ui-progressbar.html">Progressbar</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>
                                <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                                <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                                <li><a href="ui-list-media.html">List Media</a></li>
                                <li><a href="ui-ribbons.html">Ribbons</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-nestable.html">Nestable</a></li>
                                <li><a href="ui-range-slider.html">Range slider</a></li>
                                <li><a href="ui-timeline.html">Timeline</a></li>
                                <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                                <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                                <li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
                                <li><a href="ui-date-paginator.html">Date-paginator</a></li>
                                <li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>
                                <li><a href="ui-spinner.html">Spinner</a></li>
                                <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                                <li><a href="ui-toasts.html">Toasts</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">FORMS, TABLE &amp; WIDGETS</li>
                        <li class="two-column">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="form-basic.html">Basic Forms</a></li>
                                <li><a href="form-layout.html">Form Layouts</a></li>
                                <li><a href="form-addons.html">Form Addons</a></li>
                                <li><a href="form-material.html">Form Material</a></li>
                                <li><a href="form-float-input.html">Floating Lable</a></li>
                                <li><a href="form-pickers.html">Form Pickers</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-mask.html">Form Mask</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-bootstrap-validation.html">Form Bootstrap Validation</a></li>
                                <li><a href="form-dropzone.html">File Dropzone</a></li>
                                <li><a href="form-icheck.html">Icheck control</a></li>
                                <li><a href="form-img-cropper.html">Image Cropper</a></li>
                                <li><a href="form-bootstrapwysihtml5.html">HTML5 Editor</a></li>
                                <li><a href="form-typehead.html">Form Typehead</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-xeditable.html">Xeditable Editor</a></li>
                                <li><a href="form-summernote.html">Summernote Editor</a></li>
                                <li><a href="form-tinymce.html">Tinymce Editor</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Tables</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="table-basic.html">Basic Tables</a></li>
                                <li><a href="table-layout.html">Table Layouts</a></li>
                                <li><a href="table-data-table.html">Data Tables</a></li>
                                <li><a href="table-footable.html">Footable</a></li>
                                <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                                <li><a href="table-responsive.html">Responsive Table</a></li>
                                <li><a href="table-bootstrap.html">Bootstrap Tables</a></li>
                                <li><a href="table-editable-table.html">Editable Table</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">EXTRA COMPONENTS</li>
                        <li class="two-column">
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Pages</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="starter-kit.html">Starter Kit</a></li>
                                <li><a href="pages-profile.html">Profile page</a></li>
                                <li><a href="pages-animation.html">Animation</a></li>
                                <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                                <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-treeview.html">Treeview</a></li>
                                <li><a href="pages-utility-classes.html">Helper Classes</a></li>
                                <li><a href="pages-search-result.html">Search result</a></li>
                                <li><a href="pages-scroll.html">Scrollbar</a></li>
                                <li><a href="pages-pricing.html">Pricing</a></li>
                                <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
                                <li><a href="pages-gallery.html">Gallery</a></li>
                                <li><a href="pages-faq.html">Faqs</a></li>
                                <li><a href="#" class="has-arrow">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="pages-error-400.html">400</a></li>
                                        <li><a href="pages-error-403.html">403</a></li>
                                        <li><a href="pages-error-404.html">404</a></li>
                                        <li><a href="pages-error-500.html">500</a></li>
                                        <li><a href="pages-error-503.html">503</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="has-arrow">Authentication <span class="label label-rounded label-success">6</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="pages-login.html">Login 1</a></li>
                                        <li><a href="pages-login-2.html">Login 2</a></li>
                                        <li><a href="pages-register.html">Register</a></li>
                                        <li><a href="pages-register2.html">Register 2</a></li>
                                        <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                        <li><a href="pages-recover-password.html">Recover password</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Extra</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a class="has-arrow " href="#" aria-expanded="false">Widgets</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="widget-apps.html">Widget Apps</a></li>
                                        <li><a href="widget-data.html">Widget Data</a></li>
                                        <li><a href="widget-charts.html">Widget Charts</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow " href="#" aria-expanded="false">Maps</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="map-google.html">Google Maps</a></li>
                                        <li><a href="map-vector.html">Vector Maps</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow " href="#" aria-expanded="false">Icons</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="icon-material.html">Material Icons</a></li>
                                        <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                        <li><a href="icon-themify.html">Themify Icons</a></li>
                                        <li><a href="icon-linea.html">Linea Icons</a></li>
                                        <li><a href="icon-weather.html">Weather Icons</a></li>
                                        <li><a href="icon-simple-lineicon.html">Simple Lineicons</a></li>
                                        <li><a href="icon-flag.html">Flag Icons</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow " href="#" aria-expanded="false">Charts</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="chart-morris.html">Morris Chart</a></li>
                                        <li><a href="chart-chartist.html">Chartis Chart</a></li>
                                        <li><a href="chart-echart.html">Echarts</a></li>
                                        <li><a href="chart-flot.html">Flot Chart</a></li>
                                        <li><a href="chart-knob.html">Knob Chart</a></li>
                                        <li><a href="chart-chart-js.html">Chartjs</a></li>
                                        <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                        <li><a href="chart-extra-chart.html">Extra chart</a></li>
                                        <li><a href="chart-peity.html">Peity Charts</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">item 1.1</a></li>
                                <li><a href="#">item 1.2</a></li>
                                <li>
                                    <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">item 1.3.1</a></li>
                                        <li><a href="#">item 1.3.2</a></li>
                                        <li><a href="#">item 1.3.3</a></li>
                                        <li><a href="#">item 1.3.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">item 1.4</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        -->
@endsection
@section('slider')
<div class="bd-example" id="inicio">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color: #FFFFFF;
text-shadow: 2px 2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, -2px -2px 0 #000, 2px 0px 0 #000, 0px 2px 0 #000, -2px 0px 0 #000, 0px -2px 0 #000;">ITO PAPP</h5>
              <p style="color: #FFFFFF;
text-shadow: 2px 2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, -2px -2px 0 #000, 2px 0px 0 #000, 0px 2px 0 #000, -2px 0px 0 #000, 0px -2px 0 #000;">¡A UN CLICK DE DISTANCIA!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color: #FFFFFF;
text-shadow: 2px 2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, -2px -2px 0 #000, 2px 0px 0 #000, 0px 2px 0 #000, -2px 0px 0 #000, 0px -2px 0 #000;">ITO PAPP</h5>
              <p style="color: #FFFFFF;
text-shadow: 2px 2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, -2px -2px 0 #000, 2px 0px 0 #000, 0px 2px 0 #000, -2px 0px 0 #000, 0px -2px 0 #000;">¡A UN CLICK DE DISTANCIA!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color: #FFFFFF;
text-shadow: 2px 2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, -2px -2px 0 #000, 2px 0px 0 #000, 0px 2px 0 #000, -2px 0px 0 #000, 0px -2px 0 #000;">ITOPAPP</h5>
              <p style="color: #FFFFFF;
text-shadow: 2px 2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, -2px -2px 0 #000, 2px 0px 0 #000, 0px 2px 0 #000, -2px 0px 0 #000, 0px -2px 0 #000;">¡A UN CLICK DE DISTANCIA!</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
@endsection
@section('explorar')

<div class="" id="explorar" style="background:#fff;">
<br><br>
<div class="linea">


</div>
</div>
@endsection
@section('about')
<div class="" id="about" style="background:#fff;">
    <div class="aboutus-secktion paddingTB60" style="padding-top:100px">
    <div class="container">
         <br><br><br><br><br><br>
   <div class="row">
                	<div class="col-md-6">
                       <img id="ejemplo" src="{{ asset('img/ejemplo.jpeg') }}" alt="">
                    	
                    </div>
                    <div class="col-md-6">
                    	<h1 class="strong">Quiénes somos</h1>
                        <p class="lead" ALIGN="justify">En el centro de la ciudad de Oaxaca de Juárez, en el corazón del ITO, se encuentra ITO-PAPP, empresa distribuidora y comercializadora de artículos de las marcas más prestigiadas del país, el mejor servicio de atención personalizada, a los mejores precios, con la mejor garantría y con la facilidad de hacer el pedido desde la comodidad de tu aula u hogar.</p>
                    </div>
</div>
         <br><br><br><br><br><br>
         <h1 class="strong" style="
	position: absolute;
	margin: auto;
	margin-top: 0px;
	margin-left: 470px;
	padding-bottom: 20px;
	margin-bottom: 20px;">Historia</h1>
   <div class="row" style="margin-top:120px;">
                   <br><br>
                	
                    <div class="col-md-12">
                    	
                        <p class="lead" ALIGN="justify" >{{ $mipape->historia}}</p>
                    </div>
</div>
       <br><br><br><br><br><br>
        <div class="row">
                	<div class="col-md-6">
                    	<h1 class="strong">MISIÓN</h1>
                    	<p class="lead" ALIGN="justify" >{{ $mipape->mision}}</p>
                    </div>
                    <div class="col-md-6" id="ej2">
                        <img id="ejemplo2" src="{{ asset('img/ejemplo2.jpeg') }}" alt="">
                    	
                    </div>
</div>
  <br><br><br><br><br><br>
   <div class="row">
                	<div class="col-md-6">
                       <img id="ejemplo" src="{{ asset('img/ejemplo.jpeg') }}" alt="">
                    	
                    </div>
                    <div class="col-md-6">
                    	<h1 class="strong">Visión</h1>
                        <p class="lead" ALIGN="justify" >{{ $mipape->vision }}</p>
                    </div>
</div>
   <br><br><br><br><br><br>
   <div class="row">
                
                    <div class="col-md-12">
                    	<h1 class="strong">Valores</h1>
                        <ul id="lista1" style="list-style: none;"><li><p class="lead">Servicio al cliente</p></li>
                           <li><p class="lead">Liderazgo</p></li>
                            <li><p class="lead">Compromiso</p></li>
                            <li><p class="lead">Trabajo en equipo</p></li>
                            <li><p class="lead">Profesionalismo</p></li>
                            <li><p class="lead">Responsabilidad</p></li>
                            <li><p class="lead">Honestidad</p></li> 
                            <li><p class="lead">Creatividad</p></li>
                            <li><p class="lead">Lealtad</p></li>
                       </ul>
                    </div>
</div>
     <br><br><br><br><br><br>
    </div>
</div>

<br>
<br><br><br>
</div>
@endsection
@section('contacto')
<div class="" id="contacto" style="background:salmon">
            
    
<section class="contact-section my-5">

  <!-- Form with header -->
  <div class="card">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-8">

       <form action="{{ route('sendMail') }}" method="POST"><div class="card-body form">
         {{ csrf_field() }}
          <!-- Header -->
          <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Escríbenos:</h3>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input name="nombre" type="text" id="form-contact-name" class="form-control">
                <label for="form-contact-name" class="">¿Cómo te llamas?</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input name="email" type="text" id="form-contact-email" class="form-control">
                <label for="form-contact-email" class="">Email</label>
              </div>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input name="telefono" type="text" id="form-contact-phone" class="form-control">
                <label for="form-contact-phone" class="">Teléfono</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input name="compania" type="text" id="form-contact-company" class="form-control">
                <label for="form-contact-company" class="">Número de control</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-12">
              <div class="md-form mb-0">
                <textarea name="mensaje" id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                <label for="form-contact-message">Tu mensaje</label>
                <a class="btn-floating btn-lg blue">
                  <i class="far fa-paper-plane"></i>
                </a>
                <input type="submit" class="btn btn-primary" value="Enviar">
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div> </form>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4">

        <div class="card-body contact text-center h-100 white-text">

          <h3 class="my-4 pb-2">Información de contacto</h3>
          <ul class="text-lg-left list-unstyled ml-4">
            <li>
              <p ><i class="fas fa-map-marker-alt pr-2"></i>{{ $mipape->direccion}}</p>
            </li>
            <li>
              <p><i class="fas fa-phone pr-2"></i>{{ $mipape->telefono}}</p>
            </li>
            <li>
              <p><i class="fas fa-envelope pr-2"></i>{{ $mipape->correo}}</p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a class="p-2 fa-lg tw-ic" href="{{ $mipape->twitter}}" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg li-ic" href="{{ $mipape->facebook}}" target="_blank">
                <i class="fab fa-facebook"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg ins-ic" href="{{ $mipape->instagram}}" target="_blank">
                <i class="fab fa-instagram" > </i>
              </a>
            </li>
          </ul>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Form with header -->

</section>
</div>
@endsection
@section('scripts')
<script>
    $(window).scroll(function(){
        if($('#menu').offset().top>90){
            $('#menu').addClass("bg-dark");
            $('#cpanel').addClass("sidebar-white");
        }else{
            $('#menu').removeClass("bg-dark");
            $('#cpanel').removeClass("sidebar-white");
        }
        
    });
</script>

<script>
//ESTE SCRIPT CONSULTA CUANTOS ELEMENTOS HAY EN CARRITO
    $.ajax({
    url: "{{ asset('n_elementos_carrito/1')}}",
    type: 'GET',
    success: function(response){
        $("#n_elementos_carrito").text(response.data.elementos);
      },
    error: function(response){
         alert(response)
      }
    });
</script>
@endsection