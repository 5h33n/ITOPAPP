<!DOCTYPE html>
<html lang="es">
<?php
$tipo="";
if( $errors->has('tipo') ){
    $tipo = $errors->first('tipo',':message'); }
    

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- ICONO -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/us/logo.png') }}">
    @yield('titulo')
    <!-- BOOTSTRAP-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- ESTILOS GENERALES -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!--link href="css/dash-style.css" rel="stylesheet"-->
    <!-- STEPTS -->
    <link href="{{ asset('css/forms/steps.css') }}" rel="stylesheet">
    <link href="{{ asset('css/forms/jquery.steps.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icons/sociales.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel/owl.theme.default.css') }}" rel="stylesheet">
    @yield('estilos')
    
</head>
<body>
<!-- NAVBAR -->
                  
    @yield('navbar')
    <!------------------------------------------------------------------------------------------------------------------------------>
    <!-- SLIDER -->
    <!------------------------------------------------------------------------------------------------------------------------------>
    @yield('slider')
    @yield('explorar')
    @yield('ingresar')
    
    @yield('about')
    
    @yield('contacto')
        
    </div>
    @yield('logins')
    <!------------------------------------------------------------------------------------------------------------------------------>
    <!-- FOOTER -->
    <!------------------------------------------------------------------------------------------------------------------------------>
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <span class="copyright">Copyright © TecNM 2019</span>
            </div>
            <div class="col-md-4">
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://facebook.com/ito-papp-1031379267252054" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="http://www.instagram.com/itopapp" target="_blank">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul class="list-inline quicklinks">
                <li class="list-inline-item">
                  <a href="#">Política de privacidad</a>
                </li>
                <li class="list-inline-item" style="margin-right: 3px;">
                    |
                </li>
                <li class="list-inline-item">
                  <a href="#">Terminos y condiciones</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      <script src="{{ asset('js/jquery.min.js')}}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/forms/moment.js') }}"></script>

<script src="{{ asset('js/forms/jquery.steps.js') }}"></script>
<script src="{{ asset('js/forms/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/plugins/scroll/scroll.nav.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
<script src="{{ asset('js/carousel/carousel.min.js') }}"></script>
<script>
    $('#mostrar_inicio').on('click',function(){
            $('#ingresar').css('display','block');
        });
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation()
    }(window, document, jQuery);
    
    </script>
<script>
    $('#nav').onePageNav({
	currentClass: 'active',
	changeHash: false,
	scrollSpeed: 700,
	scrollThreshold: 0.5,
	filter: '',
	easing: 'swing'
});
    </script>
<!-- SCRIPT A QUITAR DE AQUÍ: -->
<script>
    
</script>
    <script>
        $(function(){
            $('.categoria').hover(function(){
                var detalle = "d_" + $(this).attr('id');
                if($(this).attr('value-estado') == '1' ){
                    $(this).attr('value-estado','0');
                    $("#"+detalle).css('display','flex');
                }else{
                    $(this).attr('value-estado','1');
                    $("#"+detalle).css('display','none');
                }
            });
            $('.detalles').hover(function(){
                $(this).css('display','flex');
            });
        });
    </script>
    <script>
        $(".log-in").hover(function(){
            $(".n-cuenta").css("background","#fed136cc");
        },
                          function(){
            $(".n-cuenta").css("background","transparent");
        });
        $(".n-cuenta").hover(function(){
            $("log-in").css({
                'transform':'scale(1.2)',
            '-ms-transform':'scale(1.2)',
            '-moz-transform':'scale(1.2)',
            '-webkit-transform':'scale(1.2)',
            '-o-transform':'scale(1.2)'
            });
        });
        
        
/////////////////  items carousel. /plugins/owlcarousel/
    if ($('.owl-init').length > 0) { // check if element exists

       $(".owl-init").each(function(){
            
            var myOwl = $(this);
            var data_items = myOwl.data('items');
            var data_nav = myOwl.data('nav');
            var data_dots = myOwl.data('dots');
            var data_margin = myOwl.data('margin');
            var data_custom_nav = myOwl.data('custom-nav');
            var id_owl = myOwl.attr('id');

            myOwl.owlCarousel({
                loop: true,
                margin: data_margin,
                nav: eval(data_nav),
                dots: eval(data_dots),
                autoplay: false,
                items: data_items,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                 //items: 4,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: data_items
                    },
                    1000: {
                        items: data_items
                    }
                }
            });

            // for custom navigation. See example page: example-sliders.html
            $('.'+data_custom_nav+'.owl-custom-next').click(function(){
                $('#'+id_owl).trigger('next.owl.carousel');
            });

            $('.'+data_custom_nav+'.owl-custom-prev').click(function(){
                $('#'+id_owl).trigger('prev.owl.carousel');
            });
           
        }); // each end.//
    } // end if        
        

    </script>
     <?php 
$tipo="";
if( $errors->has('tipo')){
    echo '<script>
            window.onload=function(){
            $("html,body").animate({
                scrollTop: $("#ingresar").offset().top
            }, 2000)};
    
    </script>';
}

?>
@yield('scripts')
</body>
</html>