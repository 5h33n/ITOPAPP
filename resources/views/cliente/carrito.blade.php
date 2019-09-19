@extends('index')
@section('titulo')
<title>CARRITO</title>
@endsection
@section('estilos')
<link href="{{ asset('css/cliente/disenio.css') }}" rel="stylesheet">
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
                    <a class="nav-link" href="http://127.0.0.1:8000/">INICIO<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item letras" id="l2" >
                    <a class="nav-link" href="{{ route('home') }}">CATÁLOGO</a>
                  </li>
                  <li class="nav-item letras" id="l4">
                    <a class="nav-link" href="http://127.0.0.1:8000/#contacto">CONTACTO</a>
                  </li>
                  <li>
                      <a href="#" class="widget-header mr-3">
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
                                            <div class="u-img"><img src="{{ asset('img/user1.jpg') }}" alt="user"></div>
                                            <div class="u-text">
                                                <h4>{{ Auth()->user()->usuario }}</h4>
                                                <p class="text-muted">{{ Auth()->user()->email }}</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">Ver perfil</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> Mi perfil</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Mi monedero</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Mensajes</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Configuraciones</a></li>
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
<section class="section-content bg padding-y border-top" id="carrito_p">
<div class="container">

<div class="row">
	<main class="col-sm-9">

<div class="card">
<table class="table table-hover shopping-cart-wrap">
<thead class="text-muted">
<tr>
  <th scope="col">Producto</th>
  <th scope="col" width="120">Cantidad</th>
  <th scope="col" width="120">Precio</th>
  <th scope="col" class="text-right" width="200">Acción</th>
</tr>
</thead>
<tbody id="lista">


</tbody>
</table>
</div> <!-- card.// -->

	</main> <!-- col.// -->
	<aside class="col-sm-3">
<p class="alert alert-success">Tienes $150.00 en tu monedero ¡Ya puedes pagar!</p>
<dl class="dlist-align">
  <dt>Total a pagar: </dt>
  <dd class="text-right" id="semi">$ 00.00</dd>
</dl>
<dl class="dlist-align">
  <dt>Descuento:</dt>
  <dd class="text-right">$ 00.00</dd>
</dl>
<dl class="dlist-align h4">
  <dt>Total:</dt>
  <dd class="text-right" id="final"><strong>$ 00.00</strong></dd>
</dl>
<hr>
<a href="" class="btn btn-outline-info btn-round btn-lg btn-block" data-toggle="modal" data-target="#verticalcenter"> Pagar ahora </a>
   <br>
   
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="icro123david-facilitator@gmail.com">
            <input type="hidden" name="item_name" value="Compra ITOPAPP">
            <input type="hidden" name="currency_code" value="MXN">
            <input type="hidden" id="sorrah" name="amount" >
            
            <button class="btn btn-info btn-round btn-lg btn-block" id="pay-paypal"><i class="fab fa-paypal"></i> Pagar con Paypal</button>
        </form>
	</aside> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>


<!-- MODAL DE CONFIRMACIÓN -->

<div id="verticalcenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="text-align: center;">
            <div class="modal-header">
                <h6 class="modal-title" id="vcenter">Confirmar compra</h6>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <h5 style="text-align: center;">¡Pagar ya mismo!</h5>
                <p>Está a punto de confirmar su compra, una vez confirmada podrá pasar a la papelería en un tiempo aproximado de <strong>10 minutos</strong> y presentando su folio recibirá sus productos</p>
                <img src="{{ asset('img/compra.gif') }}" alt="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect btn-block" data-dismiss="modal" style="margin-top:8px;">Cancelar</button>
                <button type="button" class="btn btn-info waves-effect btn-block submit-button">Confirmar</button>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
                            
                        
                    
@endsection
@section('scripts')
<script>
    $('#menu').addClass("bg-dark");
    var semitotal = 0;
</script>
@foreach($datos as $pr)
<script>

$.ajax({
    type: 'GET', 
    url: "{{ asset('infoProducto/'.$pr->n_producto) }}",
    success: function (data) {
        var elemento =  '<tr id="cargados"><td><figure class="media"><div class="img-wrap"><img src="'+data.data.foto+'" class="img-thumbnail img-sm"></div><figcaption class="media-body"><h6 class="title text-truncate">'+data.data.n_producto+'</h6><dl class="dlist-inline small"><dt>Marca: </dt><dd>Scribe</dd></dl><dl class="dlist-inline small"><dt>Color: </dt><dd>Blanco con verde</dd></dl></figcaption></figure> </td><td> <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span class="input-group-btn input-group-prepend " id="prp'+data.data.id_producto+'"><button class="btn btn-secondary btn-outline bootstrap-touchspin-down" type="button">-</button></span><input id="tch3" type="text" value="{{ $pr->cantidad }}" name="tch3" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control center-spin"><span class="input-group-btn input-group-append" id="pra'+data.data.id_producto+'"><button class="btn btn-secondary btn-outline bootstrap-touchspin-up" type="button">+</button></span></div> </td><td> <div class="price-wrap"> <var class="price" id="precio'+data.data.id_producto+'">$ </var> <small class="text-muted">($'+data.data.precio_unitario+'.00 /cu)</small> </div></td><td class="text-right"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-outline-danger"> × Eliminar</a></td></tr>';
        $("#lista").append(elemento);
        console.log(data);
        var t = Number(data.data.precio_unitario) * Number({{$pr->cantidad}}); 
        $('#precio'+data.data.id_producto).text("$ "+t+".00");
        semitotal = semitotal + t;
        $('#semi').text("$ "+semitotal+".00");
        $('#final').text("$ "+semitotal+".00");
        $('#prp'+data.data.id_producto).on('click',function(){
        
            var actual = $(this).siblings('input').val();
            
            if (actual == '.' || actual <=1){
                $(this).siblings('input').val('1');
            }else{
                nuevo = +actual-1;
                $.ajax({
                    type: 'GET',
                    url: "{{ asset('decrementar/'.$pr->id_compra) }}",
                    success: function(data){
                        console.log(data);
                       
                    },
                    error: function(){alert("Error al decrementar en la base de datos")},
                });
                $(this).siblings('input').val(nuevo);
                anterior = Number(data.data.precio_unitario) * Number(actual);
                total = Number(data.data.precio_unitario) * Number(nuevo); 
                $('#precio'+data.data.id_producto).text("$ "+total+".00");
                semitotal = semitotal - anterior;
                semitotal = semitotal + total;
                $('#semi').text("$ "+semitotal+".00");
                $('#final').text("$ "+semitotal+".00");
                
            }
        });
    $('#pra'+data.data.id_producto).on('click',function(){
        var actual = $(this).siblings('input').val();
        if (actual == '.'){
            $(this).siblings('input').val('1');
        }else{
            nuevo = +actual+1;
            $.ajax({
                    type: 'GET',
                    url: "{{ asset('incrementar/'.$pr->id_compra) }}",
                    success: function(data){
                        console.log(data);
                       
                    },
                    error: function(){alert("Error al incrementar en la base de datos")},
                });
            $(this).siblings('input').val(nuevo);
            anterior = Number(data.data.precio_unitario) * Number(actual);
            total = Number(data.data.precio_unitario) * Number(nuevo); 
            $('#precio'+data.data.id_producto).text("$ "+total+".00");
            
            semitotal = semitotal - anterior;
                semitotal = semitotal + total;
                $('#semi').text("$ "+semitotal+".00");
                $('#final').text("$ "+semitotal+".00");
        }
    });
        $('.center-spin').on('change',function(){
    alert("cambioooo");
});
    },
    error: function() { 
        alert('Imposible cargar los datos');
    }
});
</script>
@endforeach
<script>
    $('#pay-paypal').on('click',function(){
      //  alert($("#final").text());
        var fin = $("#final").text();
        var res = fin.substring(2);
        
          $("#sorrah").val(res); //Aqui si lo cambia
        //$("#sorrah").val($("#final").text()); //Aqui no lo cambia
       
    });
</script>
@endsection