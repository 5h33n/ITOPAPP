@extends('admin.dashboard')
@section('estilos')
<link rel="stylesheet" href="{{ asset('css/admin/pickerdefault.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/default.date.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/default.time.css') }}">
@endsection
@section('bread')
<h3 class="text-themecolor mb-0 mt-0">Panel de administración</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Administrador</a></li>
                            <li class="breadcrumb-item active">Ventas</li>
                        </ol>
@endsection
@section('CONTENT')
<div class="page-content container-fluid">
    <div class="row">
      <div class="header" style="padding-bottom:15px;">
          <a href="" class="btn btn-info">Registrar producto</a>
                                
          <div class="btn-group" data-toggle="buttons" role="group" style="margin-left:425px;">
                                            <label class="btn btn-outline btn-info">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="pagados" name="options" value="pagados" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1"> <i class="ti-check text-active" aria-hidden="true"></i> Pagados</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-outline btn-info">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="sinpagar" name="options" value="sinpagar" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2"> <i class="ti-check text-active" aria-hidden="true"></i> Sin pagar</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-outline btn-info active">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="todos" name="options" value="todos" class="custom-control-input" checked="checked">
                                                    <label class="custom-control-label" for="customRadio3"> <i class="ti-check text-active" aria-hidden="true"></i> Todos</label>
                                                </div>
                                            </label>
                                        </div>
       <div class="dropdown float-right mr-2 hidden-sm-down">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="tipotabla" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left:20%;"> Productos </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#" id="loadProductos">Productos</a> <a class="dropdown-item" href="#" id="loadProveedores">Proveedores</a></div>
      </div>
        </div>
        <table class="table table-hover" id="v-todos">
            <thead class="bg-inverse text-white">
                <th>ID</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Cantidad</th>
                <th>Precio unitario</th>
                <th>Fecha de agregado</th>
                <th>Fecha de pago</th>
                <th>Pagado</th>
                <th>Acción</th>
                
            </thead>
            <tbody>
                @foreach($ventas as $v)
                    <tr>
                        <td>{{ $v->id_compra }}</td>
                        <td>{{ $v->n_producto }}</td>
                        <td>{{ $v->usuario }}</td>
                        <td>{{ $v->cantidad }}</td>
                        <td>$ {{ $v->precio_unitario }}.00</td>
                        <td>{{ $v->fecha_agregado }}</td>
                        <td>{{ $v->fecha_pagado }}</td>
                        <td>{{ $v->pagado }}</td>
                        <td><a href="" class="btn btn-warning"><span class="fas fa-edit"></span></a>|<a href="" class="btn btn-danger"><span class="fas fa-window-close"></span></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <table class="table table-hover" id="v-pagados" style="display:none;">
            <thead class="bg-inverse text-white">
                <th>ID</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Cantidad</th>
                <th>Precio unitario</th>
                <th>Fecha de agregado</th>
                <th>Fecha de pago</th>
                <th>Pagado</th>
                <th>Acción</th>
                
            </thead>
            <tbody>
                @foreach($ventas as $v)
                   @if($v->pagado == '1')
                   <tr>
                        <td>{{ $v->id_compra }}</td>
                        <td>{{ $v->n_producto }}</td>
                        <td>{{ $v->usuario }}</td>
                        <td>{{ $v->cantidad }}</td>
                        <td>$ {{ $v->precio_unitario }}.00</td>
                        <td>{{ $v->fecha_agregado }}</td>
                        <td>{{ $v->fecha_pagado }}</td>
                        <td>{{ $v->pagado }}</td>
                        <td><a href="" class="btn btn-warning"><span class="fas fa-edit"></span></a>|<a href="" class="btn btn-danger"><span class="fas fa-window-close"></span></a></td>
                    </tr>
                   @endif
                @endforeach
            </tbody>
        </table>
        
        <table class="table table-hover" id="v-sinpagar" style="display:none;">
            <thead class="bg-inverse text-white">
                <th>ID</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Cantidad</th>
                <th>Precio unitario</th>
                <th>Fecha de agregado</th>
                <th>Fecha de pago</th>
                <th>Pagado</th>
                <th>Acción</th>
                
            </thead>
            <tbody>
                @foreach($ventas as $v)
                   @if($v->pagado == '0')
                    <tr>
                        <td>{{ $v->id_compra }}</td>
                        <td>{{ $v->n_producto }}</td>
                        <td>{{ $v->usuario }}</td>
                        <td>{{ $v->cantidad }}</td>
                        <td>$ {{ $v->precio_unitario }}.00</td>
                        <td>{{ $v->fecha_agregado }}</td>
                        <td>{{ $v->fecha_pagado }}</td>
                        <td>{{ $v->pagado }}</td>
                        <td><a href="" class="btn btn-warning"><span class="fas fa-edit"></span></a>|<a href="" class="btn btn-danger"><span class="fas fa-window-close"></span></a></td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        {!! $ventas->render() !!}
    </div>
</div>
@endsection
@section('scripts')
<script>
    $('.btn-group').on('change',function(){
        var seleccionado = $(".btn-group input[type='radio']:checked").val();
        if(seleccionado == "todos"){
            $('#v-todos').css('display','inline-table');
            $('#v-pagados').css('display','none');
            $('#v-sinpagar').css('display','none');
        }else if(seleccionado == "pagados"){
            $('#v-todos').css('display','none');
            $('#v-pagados').css('display','inline-table');
            $('#v-sinpagar').css('display','none');
        }else if(seleccionado == "sinpagar"){
            $('#v-todos').css('display','none');
            $('#v-pagados').css('display','none');
            $('#v-sinpagar').css('display','inline-table');
        }
    });
</script>
@endsection