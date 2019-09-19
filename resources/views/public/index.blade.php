@extends('index')
@section('estilos')
<link rel="stylesheet" href="{{ asset('css/temporal.css') }}">
@endsection
@section('titulo')
<title>ITOPAPP</title>
@endsection
@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light fixed-top nav navbar-nav navbar-right" id="menu">
        <div class="container">
            <a href="#" class="navbar-brand" style="color:#fed136">ITOPAPP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" id="nav">
                <li class="nav-item" id="l1">
                    <a data-scroll class="nav-link" href="">
                               <form class="app-search">
                                <input type="text" class="form-control" placeholder="Buscar..."> 
                                <a class="srh-btn"><i class="ti-search"></i>
                                </a> 
                                </form>
                    </a>
                  </li>
                  <li class="nav-item active letras" id="l1">
                    <a data-scroll class="nav-link" href="#inicio">INICIO<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item letras" id="l2" >
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATÁLOGO</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="left: 15px;right: 15px;" >
                                        <li>
                                            <div class="yamm-content" style="padding: 25px 35px;">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h5>Cuadernos</h5>
                                                        <ul>
                                                            <li><a href="#">Cuadros</a>
                                                            </li>
                                                            <li><a href="index2.html">Rayas</a>
                                                            </li>
                                                            <li><a href="index3.html">Doble raya</a>
                                                            </li>
                                                            <li><a href="index4.html">Dibujo</a>
                                                            </li>
                                                            <li><a href="index5.html">Francés</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Tecnología</h5>
                                                        <ul>
                                                            <li><a href="portfolio-2.html">Oficina</a>
                                                            </li>
                                                            <li><a href="portfolio-no-space-2.html">Computación</a>
                                                            </li>
                                                            <li><a href="portfolio-3.html">Otros</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Accesorios escolares</h5>
                                                        <ul>
                                                            <li><a href="shop-category-left.html">Artículos de escritura</a>
                                                            </li>
                                                            <li><a href="shop-category-full.html">Hojas y papelería</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Otros</h5>
                                                        <ul>
                                                            <li><a href="contact.html">Otros</a>
                                                            </li>
                                                            <li><a href="contact2.html">Higiene</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.yamm-content -->
                                        </li>
                                    </ul>
                  </li>
                  <li class="nav-item letras" id="l5">
                    <a class="nav-link" href="#ingresar" id="mostrar_inicio">INGRESAR</a>
                  </li>
                  <li class="nav-item letras" id="l3">
                    <a class="nav-link" href="#about">QUIÉNES SOMOS</a>
                  </li>
                  <li class="nav-item letras" id="l4">
                    <a class="nav-link" href="#contacto">CONTACTO</a>
                  </li>
                  <li class="nav-item" id="lc">
                   <div class="carrito"></div>
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i></a>
                  </li>
                </ul>

            </div>
        </div>
    </nav>
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
              <h5 style="text-shadow: -1px -1px 1px #000000;">ITOPAPP</h5>
              <p>¡A UN CLICK DE DISTANCIA!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="text-shadow: -1px -1px 1px #000000;">ITOPAPP</h5>
              <p style="text-shadow: -1px -1px 1px #000000;">¡A UN CLICK DE DISTANCIA!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="text-shadow: -1px -1px 1px #000000;">ITOPAPP</h5>
              <p style="text-shadow: -1px -1px 1px #000000;">¡A UN CLICK DE DISTANCIA!</p>
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
@section('ingresar')
<div class="" id="ingresar" style="background:#d8d8d8;display:none;">
       <div class="row lateral">
           <div class="col-md-2">
           </div>
           <div class="col-md-8">
               <div class="row" id="log">
                  <div class="col-md-5" id="cargando" style="display:none;">
                      <div class="spinner-border text-primary" role="status">
                                  <span class="sr-only">Loading...</span>
                        </div>
                  </div>
                   <div class="col-md-5 nel" id= "nel" style="display:block;" >
                       <ul style="">
                           <p class="tit">INGRESAR</p>
                       </ul>
                       <form method="POST" action="{{ route('login') }}">
                             
                              {{ csrf_field() }}
                               <div class="form-group {{ $errors->has('usuario') ? 'has-danger' : '' }}">
                                   <label for="usuario" class="label control-label">Usuario</label>
                                   <input type="text" class="form-control form-control-success" name="usuario" placeholder="Ingresa tu usuario">
                                   {!! $errors->first("usuario","<label class='text-danger'>:message</label>") !!}
                               </div>
                               <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                                   <label for="password" class="label control-label">Contraseña</label>
                                   <input type="password" class="form-control" name="password" placeholder="Ingresa tu contraseña">
                                   {!! $errors->first("password","<label class='text-danger'>:message</label>") !!}
                                   <input type="hidden" class="form-control" name="tipo" value="1">
                               </div>
                               <div class="form-group" id="checking">
                                   <input type="checkbox"><small>Recordar cuenta</small>
                                <button class="btn btn-info btn-block">Ingresar</button>
                               </div>
                                
                           <p class="text-center"><a href="#">¿Olvidaste tu contraseña?</a></p>
                           <p class="text-center" id="parche"><a href="#login-admin" data-toggle="modal">Ingresar como administrador</a></p>
                           </form>
                   </div>
                   <div class="col-md-5" id= "sim" style="display:none;" >
                       
                       <!--STEPTS-->
                       
                      
                      
                       
                       <div class="wizard-content registro-form">
            <form method="post" action="{{ route('guardar-cliente') }}"  class="validation-wizard wizard-circle m-t-40">
                                   {{ csrf_field() }}
                                   <p class="tit">CREAR CUENTA</p>
                                    <!-- Step 1 -->
                                    <h6>Step 1</h6>
                                    <section>
                                       <div class="form-group">
                                                    <label for="usuario"> Ingresa un nombre de usuario:
                                                        <span class="danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control required" name="usuario" placeholder="Antionio1995">
                                        </div>
                                        <div class="form-group">
                                            <label for="password"> Ingresa una contraseña:
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="password" class="form-control required" name="password" placeholder="*********">
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation"> Confirma tu contraseña:
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="password" class="form-control required" name="password_confirmation" placeholder="*********">
                                        </div>
                                    </section>
                                    <!-- Step 2 -->
                                    <h6>Step 2</h6>
                                    <section>
                                        <div class="form-group">
                                            <label for="email"> Ingresa tu correo:
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="email" class="form-control required" name="email" placeholder="toño321@dominio.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="telefono"> Teléfono de 10 dígitos:
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required phone-inputmask " data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="No Characters Allowed, Only Numbers" name="telefono" placeholder="XXX-XXX-XXXX">
                                        </div>
                                        <div class="form-group">
                                            <label for="generos"> Selecciona tu género:
                                                <span class="danger">*</span>
                                            </label>
                                            <div class="generos">
                                                <div class="hombre">
                                                    <a href="#">
                                                        <i class="fas fa-male"></i>
                                                    </a>
                                                </div>
                                                <div class="mujer">
                                                    <a href="#">
                                                        <i class="fas fa-male"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 3 -->
                                    <h6>Step 3</h6>
                                    <section>
                                        <div class="form-group">
                                                    <label for="nombres"> ¿Cómo te llamas?:
                                                        <span class="danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control required" name="nombres" placeholder="Armando Esteban">
                                        </div>
                                        <div class="form-group">
                                                    <label for="apaterno"> Primer apellido:
                                                        <span class="danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control required" name="apaterno" placeholder="Quito">
                                        </div>
                                        <div class="form-group">
                                                    <label for="amaterno"> Segundo apellido:
                                                        <span class="danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control required" name="amaterno" placeholder="De Roble">
                                        </div>
                                        <input type="hidden" name="tipo" value="1">
                                    </section>
                                    </form>
        </div>
                       
                       
                       
                       
                       
                       
                       
                   </div>
                   <div class="col-md-7 " id="register">
                       <img src="img/mesa.jpg" alt="">
                       <a class="btn btn-block btn-social btn-facebook" style="top:30%">
                        <span class="fab fa-facebook"></span> Ingresar con Facebook
                      </a>
                       <a class="btn btn-block btn-social btn-twitter" style="top:40%">
                        <span class="fab fa-twitter"></span> Ingresar con Twitter
                      </a>
                      <a class="btn btn-block btn-social btn-google" style="top:50%">
                        <span class="fab fa-google"></span> Ingresar con Google
                      </a>
                      <div class="or-seperator"></div>
                       <button id="nueva" class="btn btn-info n-cuenta" href="#registrar" >Registrarme</button>
                   </div>
                   <div class="col-md-7 " id="sociales" style="display:none;">
                       <img src="img/mesa.jpg" alt="">
                       <a class="btn btn-block btn-social btn-facebook" style="top:30%; width:55%;">
                        <span class="fab fa-facebook"></span> Registrarme con Facebook
                      </a>
                       <a class="btn btn-block btn-social btn-twitter" style="top:40%; width:55%;">
                        <span class="fab fa-twitter"></span> Registrarme con Twitter
                      </a>
                      <a class="btn btn-block btn-social btn-google" style="top:50%; width:55%;">
                        <span class="fab fa-google"></span> Registrarme con Google
                      </a>
                       <button id="existente" class="btn btn-info n-cuenta" href="#registrar" >Iniciar sesión</button>
                   </div>
               </div>
           </div>
           <div class="col-md-2"></div>
       </div>
    </div>
@endsection
@section('logins')

<div id= "login-admin" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="grid-title" aria-modal="true">
                                           <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="grid-title">Inicio para administrador</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                            <form method="POST" action="{{ route('loginA') }}">
                              {{ csrf_field() }}
                               <div class="form-group {{ $errors->has('usuario') ? 'has-danger' : '' }}">
                                   <label for="usuario" class="label control-label">Usuario</label>
                                   <input type="text" class="form-control form-control-success" name="usuario" placeholder="Ingresa tu usuario">
                                   {!! $errors->first("usuario","<span class='help-block'>:message</span>") !!}
                               </div>
                               <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                                   <label for="password" class="label control-label">Contraseña</label>
                                   <input type="password" class="form-control" name="password" placeholder="Ingresa tu contraseña">
                                   {!! $errors->first("password","<span class='help-block'>:message</span>") !!}
                                   <input type="hidden" class="form-control" name="tipo" value="2">
                               </div>
                               <input type="checkbox"><small>Recordar cuenta</small>
                                <button class="btn btn-info btn-block">Ingresar</button>
                           </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                            </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
    </div>
    <!-- MODAL REGISTRO -->

@endsection
@section('about')
<div class="" id="about" style="background:#fff;">
    <div class="aboutus-secktion paddingTB60" style="padding-top:200px">
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
                    	
                        <p class="lead" ALIGN="justify">La pape. Es una papelería física fundada en el año 2008 por el Ing. Bernando Bautista Primo en las Instalaciones del Instituto Tecnológico de Oaxaca, cuyo objetivo primoridal siempre ha sido ofrecer un burn servico en la venta de útiles y artículos escolares como: cuadernos, carpetas, lápices, artículos de computo, fotocopiado e impresiones. Con el paso de los años dicho establecimiento cmenzó a incrementar sus ventas diarias, lo cual generó MURA y MURI, por parte de los clientes y subordinados. Esto presentó un área de oportunidad para el propetario y la comunidad estudiantil que querían ayudar a facilitar el proceso de compra-venta, por lo que se llevó a cabo el establecimiento de un control de pedidos a través de la creación de una fila unidireccional de clientes. Pese a la propuesta y aplicación de mejora, "la pape" continuaba ofreciendo un servicio lento. Es aquí donde surge la idea de ITO-PAPP (2019) ; la creación de una plataforma Web y Móvil que permite la optimizaciñon en el proceso de compra, reduciendo los tiempos de espera, MURI y MURA.</p>
                    </div>
</div>
       <br><br><br><br><br><br>
        <div class="row">
                	<div class="col-md-6">
                    	<h1 class="strong">MISIÓN</h1>
                    	<p class="lead" ALIGN="justify">Optimizar el proceso de compra tradicional de artículos escolares y reducir los tiempos de espera mediante una plataforma web y movil que ofresca a los estudiantes del nivel Superior los mejores productos en el mercado a través de precios bajos y calidad.</p>
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
                        <p class="lead" ALIGN="justify">Ser la mejor alternativa de compra de productos escolares en linea, mejorando nuestros precios y servicio através de estándares de competencia calidad, expandiendo nuestro mercado a otras Institiciones educativas, aumentando la productividad mediante la implementación de nuevas tecnologías</p>
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
              <p><i class="fas fa-map-marker-alt pr-2"></i>Av. Ingeniero Victor Bravo N.125 Esquina calzada Tecnológico. Instituto Tecnológico de Oaxaca</p>
            </li>
            <li>
              <p><i class="fas fa-phone pr-2"></i>+52 951 635 32 12 </p>
            </li>
            <li>
              <p><i class="fas fa-envelope pr-2"></i>itopapp.contacto@gmail.com</p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a class="p-2 fa-lg tw-ic" >
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg li-ic" href="https://facebook.com/ito-papp-1031379267252054" target="_blank">
                <i class="fab fa-facebook"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg ins-ic" href="https://instagram.com/itopapp" target="_blank">
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
    
    var nel = document.querySelector("#nel");
    var sim = document.querySelector("#sim");
    var loader = document.querySelector("#cargando");
    $("#nueva").on('click',function(){
        $("#nel").css('animation','fadeOut 0.5s');
        
        nel.addEventListener("animationend", loginFade, false);
        loader.addEventListener("animationend", loadingFade, false);
        function loginFade(e) {
            $(".nel").css('display','none');
            $("#cargando").css('display','flex');
            $("#cargando").css('animation','fadeIn 0.5s');
            $("#register").css('animation','fadeOut 0.5s');
            $("#register").css('display','none');
            $("#sociales").css('animation','fadeIn 0.5s');
            $("#sociales").css('display','block');
        }
        function loadingFade(e){
            $("#cargando").css('display','none');
            $("#sim").css('display','block');
            $("#sim").css('animation','fadeIn 0.5s');
            
            nel.removeEventListener("animationend", loginFade, false);
        loader.removeEventListener("animationend", loadingFade, false);
            $("#nel").css('animation','');
            
        }
        
    });
    $("#existente").on('click',function(){

            $("#sim").css('display','none');
            $("#cargando").css('display','flex');
            $("#cargando").css('animation','fadeIn 0.5s');
        loader.addEventListener("animationend", loadFade, false);
        
        function loadFade(e){
            $("#cargando").css('display','none');
            $("#nel").css('display','block');
            $("#register").css('display','block');
            $("#sociales").css('display','none');
            loader.removeEventListener("animationend", loadFade, false);
        }

    });
</script>
<script>
    
         var form = $(".validation-wizard").show();

        $(".validation-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span>',
            labels: {
                finish: "Confirmar"
            },
            onStepChanging: function (event, currentIndex, newIndex) {
                if(currentIndex ==1 && newIndex ==2){
                    return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
                    
                }else{
                return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
                }
            },
            onFinishing: function (event, currentIndex) {
                return form.validate().settings.ignore = ":disabled", form.valid()
            },
            onFinished: function (event, currentIndex) {
                form.submit();
            }
        }), $(".validation-wizard").validate({
            ignore: "input[type=hidden]",
            errorClass: "text-danger",
            successClass: "text-success",
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            },
            unhighlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element)
            }
                                             
        });
        

</script>

@endsection