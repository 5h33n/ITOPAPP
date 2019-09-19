@extends('index')
@section('titulo')
<title>PRODUCTO</title>
@endsection
@section('estilos')
<link href="{{ asset('css/cliente/disenio.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="menu">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand" style="color:#fed136">ITOPAPP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" id="nav">
                  <li class="nav-item letras" id="l1">
                    <a data-scroll class="nav-link" href="http://127.0.0.1:8000/#inicio">INICIO<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item letras" id="l2" >
                    <a class="nav-link" href="http://127.0.0.1:8000/#explorar">CATÁLOGO</a>
                  </li>
                  <li class="nav-item letras" id="l4">
                    <a class="nav-link" href="http://127.0.0.1:8000/#contacto">CONTACTO</a>
                  </li>
                  <li>
                      <a href="{{ route('carrito')}}" class="widget-header mr-3">
				<div class="icontext">
					<div class="icon-wrap"><i class="icon-sm round border fa fa-shopping-cart"></i></div>
					<div class="text-wrap">
						<span class="small badge badge-danger">{{ $compras }}</span>
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
                                            <div class="u-img"><img src="https://www.wrappixel.com/demos/admin-templates/monster-admin/assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Sheen</h4>
                                                <p class="text-muted">email</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">Ver Perfil</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> Mi Perfil</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Mi monedero</a></li>
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
@endsection
@section('explorar')
<section class="section-content bg padding-y-sm">
<div class="container">
<nav class="mb-3">
<ol class="breadcrumb">
   <?php
    if($producto->id_producto <= 5 and $producto->id_producto>=1 ){
        echo '    <li class="breadcrumb-item"><a href="#">Cuadernos</a></li>
    <li class="breadcrumb-item"><a href="#">Cuadros</a></li>
    <li class="breadcrumb-item active" aria-current="page">'.$producto->n_producto.'</li>';
    }else if ($producto->id_producto <= 9 and $producto->id_producto>=7 ){
        echo '    <li class="breadcrumb-item"><a href="#">Oficina y computo</a></li>
    <li class="breadcrumb-item"><a href="#">Oficina</a></li>
    <li class="breadcrumb-item active" aria-current="page">'.$producto->n_producto.'</li>';
    }else if ($producto->id_producto <= 12 and $producto->id_producto>=10 ){
        echo '    <li class="breadcrumb-item"><a href="#">Accesorios escolares</a></li>
    <li class="breadcrumb-item"><a href="#">Elementales</a></li>
    <li class="breadcrumb-item active" aria-current="page">'.$producto->n_producto.'</li>';
    }else if ($producto->id_producto <= 16 and $producto->id_producto>=13 ){
        echo '    <li class="breadcrumb-item"><a href="#">Otros</a></li>
    <li class="breadcrumb-item"><a href="#">Higiene</a></li>
    <li class="breadcrumb-item active" aria-current="page">'.$producto->n_producto.'</li>';
    }
    ?>
</ol> 
</nav>

<div class="row">
<div class="col-xl-10 col-md-9 col-sm-12">


<main class="card">
	<div class="row no-gutters">
		<aside class="col-sm-6 border-right">
<article class="gallery-wrap"> 
<div class="img-big-wrap">
  <div> <a href="{{ asset($producto->foto) }}" data-fancybox=""><img src="{{ asset($producto->foto) }}"></a></div>
</div> <!-- slider-product.// -->
<div class="img-small-wrap">
  <div class="item-gallery"> <img src="{{ asset($producto->foto) }}"></div>
  <div class="item-gallery"> <img src="{{ asset($producto->foto) }}"></div>
  <div class="item-gallery"> <img src="{{ asset($producto->foto) }}"></div>
  <div class="item-gallery"> <img src="{{ asset($producto->foto) }}"></div>
</div> <!-- slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
		</aside>
		<aside class="col-sm-6">
<article class="card-body">
<!-- short-info-wrap -->
	<h3 class="title mb-3">{{ $producto->n_producto }}</h3>

<div class="mb-3"> 
	<var class="price h3 text-warning"> 
		<span class="currency">$</span><span class="num">{{ $producto->precio_unitario }}</span>
	</var> 
	<span>/cu</span> 
</div> <!-- price-detail-wrap .// -->
<dl>
  <dt>Descripción</dt>
  <dd><p>{{ $producto->descripcion }}</p></dd>
</dl>
<dl class="row">
  <dt class="col-sm-3">Marca</dt>
  <dd class="col-sm-9">Scribe</dd>

  <dt class="col-sm-3">Colores</dt>
  <dd class="col-sm-9">Verda y rosa / Verde y amarillo </dd>
</dl>
<div class="rating-wrap">

	<ul class="rating-stars">
		<li style="width:80%" class="stars-active"> 
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> 
		</li>
		<li>
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> 
		</li>
	</ul>
	<div class="label-rating">2 calificaciones</div>
	<div class="label-rating">3 comprados </div>
</div> <!-- rating-wrap.// -->
<hr>
	<div class="row">
		<div class="col-sm-5">
			<dl class="dlist-inline">
			  <dt>Cantidad: </dt>
			  <dd> 
			  	<select id="cantidad_seleccionada" class="form-control form-control-sm" style="width:70px;">
			  	    <?php 
                    for ($a=1;$a<=$producto->cantidad;$a++){
                        echo '<option>'. $a .'</option>';
                    }
                    ?>
			  	</select>
			  </dd>
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
		<div class="col-sm-7">
			<dl class="dlist-inline">
              <!--
				  <dt>Size: </dt>
				  <dd>
				  	<label class="form-check form-check-inline">
					  <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
					  <span class="form-check-label">SM</span>
					</label>
					<label class="form-check form-check-inline">
					  <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
					  <span class="form-check-label">MD</span>
					</label>
					<label class="form-check form-check-inline">
					  <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
					  <span class="form-check-label">XXL</span>
					</label>
				  </dd>
				  -->
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
	</div> <!-- row.// -->
	<hr>
	
	<a href="#" class="btn  btn-warning" id="add_cart"> <i class="fa fa-shopping-cart"></i> Agregar al carrito </a>
	<a href="#" class="btn  btn-outline-warning"> Comprar </a>

<!-- short-info-wrap .// -->
</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</main> <!-- card.// -->

<!-- PRODUCT DETAIL -->
<article class="card mt-3">
	<div class="card-body">
		<h4>Detalles avanzados</h4>
	</div> <!-- card-body.// -->
</article> <!-- card.// -->

<!-- PRODUCT DETAIL .// -->

</div> <!-- col // -->
<aside class="col-xl-2 col-md-3 col-sm-12">

<div class="card mt-3">
	<div class="card-header">
	    Te podrían interesar
	</div>
	<div class="card-body row">
<div class="col-md-12 col-sm-3">
	<figure class="item border-bottom mb-3">
			<a href="#" class="img-wrap"> <img src="http://lorempixel.com/750/748/" class="img-md"></a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Sugerido</a>
				<div class="price-wrap mb-3">
					<span class="price-new">$280</span> <del class="price-old">$280</del>
				</div> <!-- price-wrap.// -->
			</figcaption>
	</figure> <!-- card-product // -->
</div> <!-- col.// -->
<div class="col-md-12 col-sm-3">
<figure class="item border-bottom mb-3">
		<a class="img-wrap"> <img src="http://lorempixel.com/750/748/" class="img-md"></a>
		<figcaption class="info-wrap">
			<a href="#" href="#" class="title">Producto</a>
			<div class="price-wrap mb-3">
				<span class="price-new">$280</span>
			</div> <!-- price-wrap.// -->
		</figcaption>
</figure> <!-- card-product // -->
</div> <!-- col.// -->
<div class="col-md-12 col-sm-3">
<figure class="item border-bottom mb-3">
		<a href="#" class="img-wrap"> <img src="http://lorempixel.com/750/748/" class="img-md"></a>
		<figcaption class="info-wrap">
			<a href="#" class="title">Otro producto</a>
			<div class="price-wrap mb-3">
				<span class="price-new">$280</span>
			</div> <!-- price-wrap.// -->
		</figcaption>
</figure> <!-- card-product // -->
</div> <!-- col.// -->
	</div> <!-- card-body.// -->
</div> <!-- card.// -->
</aside> <!-- col // -->
</div> <!-- row.// -->



</div><!-- container // -->
</section>
@endsection
@section('scripts')
<script>
    $('#menu').addClass("bg-dark");
    
</script>
	<script>
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $('#add_cart').on('click',function(){
            var id = {{$producto->id_producto}};
            var cantidad = $('#cantidad_seleccionada').val();

            if(id != '' && cantidad != '' ){
                  $.ajax({
                    url: "{{ route('addCarrito')}}",
                    type: 'POST',
                    data: {_token: CSRF_TOKEN,id: id,cantidad: cantidad},
                    success: function(response){
                         alert("Agregado exitosamente al carrito");
                      },
                    error: function(response){
                         alert(response)
                      }
                    });
            }else{
                alert('Seleccione una cantidad para añadir al carrito');
                }

});
    </script>
@endsection