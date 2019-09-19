@extends('admin.dashboard')
@section('bread')
<h3 class="text-themecolor mb-0 mt-0">Panel de administración</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Administrador</a></li>
                            <li class="breadcrumb-item active">Inventario</li>
                        </ol>
@endsection
@section('CONTENT')
<div class="page-content container-fluid">
    <div class="row">
      <div class="header" style="padding-bottom:15px;">
          <a href="" class="btn btn-info">Registrar producto</a>
       <div class="dropdown float-right mr-2 hidden-sm-down">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="tipotabla" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left:720%;"> Productos </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#" id="loadProductos">Productos</a> <a class="dropdown-item" href="#" id="loadProveedores">Proveedores</a></div>
      </div>
        </div>
        <table id="p" class="table table-hover">
            <thead class="bg-inverse text-white">
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio unitario</th>
                <th>En existencia</th>
                <th>Categorías</th>
                <th>Proveedor</th>
                <th>Acción</th>
                
            </thead>
            <tbody>
                @foreach($productos as $p)
                    <tr>
                        <td>{{ $p->id_producto }}</td>
                        <td>{{ $p->n_producto }}</td>
                        <td>{{ $p->descripcion }}</td>
                        <td>$ {{ $p->precio_unitario }}.00</td>
                        <td>{{ $p->cantidad }}</td>
                        <td><a href="">{{ $p->sub }}</a></td>
                        <td>{{ $p->nombre }}</td>
                        <td><a href="" class="btn btn-warning"><span class="fas fa-edit"></span></a>|<a href="" class="btn btn-danger"><span class="fas fa-window-close"></span></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $productos->render() !!}
        <table id="prov" class="table table-hover" style="display:none;">
            <thead class="bg-inverse text-white">
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Acción</th>
                
            </thead>
            <tbody>
                @foreach($proveedores as $prov)
                    <tr>
                        <td>{{ $prov->id_proveedor }}</td>
                        <td>{{ $prov->nombre }}</td>
                        <td>{{ $prov->direccion }}</td>
                        <td>+52 {{ $prov->telefono }}</td>
                        <td><a href="" class="btn btn-warning"><span class="fas fa-edit"></span></a>|<a href="" class="btn btn-danger"><span class="fas fa-window-close"></span></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $proveedores->render() !!}
    </div>
</div>
@endsection
@section('scripts')
<script>
    $("#loadProveedores").on('click',function(){
        $('#p').css('display','none');
        $('#prov').css('display','inline-table');
        $('#tipotabla').text("Proveedores");
        $('#tipotabla').css('margin-left','646%');
        
    });
    $("#loadProductos").on('click',function(){
        $('#prov').css('display','none');
        $('#p').css('display','inline-table');
        $('#tipotabla').text("Productos");
        $('#tipotabla').css('margin-left','747%');
        
    });
</script>
@endsection