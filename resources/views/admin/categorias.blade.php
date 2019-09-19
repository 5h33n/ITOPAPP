@extends('admin.dashboard')
@section('estilos')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="{{ asset('css/admin/nestable.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/dropify.min.css') }}">
@endsection
@section('bread')
<h3 class="text-themecolor mb-0 mt-0">Panel de administración</h3>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Administrador</a></li>
    <li class="breadcrumb-item active">Categorías</li>
</ol>
@endsection
@section('CONTENT')
<div class="row">
    <div class="col-lg-12 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Gestión de categorías</h4>
                <h6 class="card-subtitle">Agregue, quite o modifique las categorías de sus productos</h6>
                <div class="vtabs customvtab myadmin-dd dd" id="nestable">
                  <ol class="dd-list nav nav-tabs tabs-vertical" role="tablist" id="original">
                        
                        @foreach($categorias as $cat)
                        <li id="id_{{ $cat->id_categoria }}" class="dd-item dd3-item" data-id="{{ $cat->id_categoria }}">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content"> 
                                <a id="link{{ $cat->id_categoria }}" class="nav-link items" data-toggle="tab" href="#sec{{ $cat->id_categoria }}" role="tab">     <span class="hidden-sm-up"><i class="ti-email"></i></span>
                                    <span class="hidden-xs-down" style="max-width: 10px;white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">{{ $cat->nombre }}</span>
                                </a>
                            </div>
                        </li>
                        @endforeach
                        <div class="dd-placeholder" style="height:40px;" id="anadir"><i class="ti-plus" style="position:relative;margin-left:10px;top:10px;" ></i><span class="hidden-xs-down" style="position: relative;top: 8px;left: 40px;">Añadir</span></div>
                    </ol>
                    <div class="tab-content" id="contenidos">
                       @foreach($categorias as $cate)
                       <div class="tab-pane contents" id="sec{{$cate->id_categoria}}" role="tabpanel">
                            <form class="form pt-3">
                            <div class="row" style="display:flex;">
                               <div class="text-left" style="margin:auto;">
                                        <h4 class="card-title">Información de la categoría</h4>
                                    </div>
                            </div>
                             <div class="row p-3">
                              
                               <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputuname{{ $cate->id_categoria }}" class="card-subtitle" style="font-size: medium;">Nombre </label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="exampleInputuname{{ $cate->id_categoria }}" placeholder="Ingresa un nombre para la categoría" value="{{ $cate->nombre }}">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon{{ $cate->id_categoria }}">
                                                    <i class="ti-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail{{ $cate->id_categoria }}" class="card-subtitle" style="font-size: medium;">Descripción </label>
                                        <div class="input-group">
                                           <textarea name="message" rows="2" class="form-control" id="exampleInputEmail{{ $cate->id_categoria }}" placeholder="Ingresa una descripción" >{{ $cate->descripcion }}</textarea>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon{{ $cate->id_categoria }}">
                                                    <i class="ti-email"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="display:flex;">
                                <div class="text-left" style="margin:auto;">
                                        
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Guardar</button>
                                        <button type="button" class="btn btn-inverse"> <i class="fa fa-trash"></i> Eliminar</button>
                                    
                                    </div>
                            </div>
                               </div>
                               <div class="col-lg-6 col-md-6">
                                   <div class="card">
                                        <div class="card-body" style="padding-top:0;">
                                            <h4 class="card-title">Imágen representativa</h4>
                                            <h6 class="card-subtitle">Medidas recomendadas: 600 x 700 pixeles.</h6>
                                            <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="{{  asset('/img')."/".$cate->foto }}"/>
                                            <br>
                                            <h6 class="card-subtitle">Una imágen representativa de su categoría podrá ser utilizada para ofrecer un mejor aspecto. </h6>
                                            <h6 class="card-subtitle">Pulse <a href=""><strong>aquí</strong></a> para obtener más detalles sobre esto. </h6>
                                        </div> 
                                    </div>
                               </div>
                            </div>
                            </form>
                        </div>
                       @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/admin/nestable.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/dropify.min.js') }}"></script>
<script>
     $(document).ready(function(){
        imagenes();
        $("#sec{{$categorias[0]->id_categoria}}").addClass("active");
        $("#anadir").on('click',function(){
            var cont = $('.contents:last-child').attr('id').substring(3);
            cont = parseInt(cont,10) + 1;
            var el = '<li class="dd-item dd3-item" data-id="4"><div class="dd-handle dd3-handle"></div><div class="dd3-content"> <a class="nav-link items" data-toggle="tab" href="#sec'+cont+'" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Nueva</span></a></div></li>';
            var con = '<div class="tab-pane active contents" id="sec'+cont+'" role="tabpanel"><form class="form pt-3"><div class="row" style="display:flex;"><div class="text-left" style="margin:auto;"><h4 class="card-title">Información de la categoría/subcategoría</h4></div></div><div class="row p-3"><div class="col-lg-6 col-md-6"><div class="form-group"><label for="exampleInputuname'+cont+'" class="card-subtitle" style="font-size: medium;">Nombre </label><div class="input-group"><input type="text" class="form-control" id="exampleInputuname'+cont+'" placeholder="Ingresa un nombre para la categoría" value="Nueva"><div class="input-group-append"><span class="input-group-text" id="basic-addon'+cont+'"><i class="ti-user"></i></span></div></div></div><div class="form-group"><label for="exampleInputEmail'+cont+'" class="card-subtitle" style="font-size: medium;">Descripción </label><div class="input-group"><textarea name="message" rows="1" class="form-control" id="exampleInputEmail'+cont+'" placeholder="Ingresa una descripción" ></textarea><div class="input-group-append"><span class="input-group-text" id="basic-addon'+cont+'"><i class="ti-email"></i></span></div></div></div><div class="row" style="display:flex;"><div class="text-left" style="margin:auto;"><button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Guardar</button><button type="button" class="btn btn-inverse"> <i class="fa fa-trash"></i> Eliminar</button></div></div></div><div class="col-lg-6 col-md-6"><div class="card"><div class="card-body" style="padding-top:0;"><h4 class="card-title">Imágen representativa</h4><h6 class="card-subtitle">Medidas recomendadas: 600 x 700 pixeles.</h6><input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="{{  asset('img/defaults/categoria-default.jpg') }}"/><br><h6 class="card-subtitle">Una imágen representativa de su categoría podrá ser utilizada para ofrecer un mejor aspecto. </h6><h6 class="card-subtitle">Pulse <a href=""><strong>aquí</strong></a> para obtener más detalles sobre esto. </h6></div> </div></div></div></form></div>';
            $("#anadir").before(el);
            $("#contenidos").append(con);
            $('.items').on('click',function(){
               $('.items').removeClass("active");
               $(this).addClass("active");
                var destino = $(this).attr('href');
                $('.contents').removeClass("active");
                $(destino).addClass("active");
            });

        });
        function imagenes() {
            // Basic
            $('.dropify').dropify({
                messages: {
                    default: 'Arrastra y suelta un archivo o haz click aquí',
                    replace: 'Arrastra y suelta un archivo o haz clic para reemplazar',
                    remove: 'Eliminar',
                    error: 'Archivo demasiado grande'
                }
            });

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Arrastra y suelta un archivo o haz click aquí',
                    replace: 'Arrastra y suelta un archivo o haz clic para reemplazar',
                    remove: 'Eliminar',
                    error: 'Archivo demasiado grande'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        }
   
    });
</script>
<script>
    $('#link1').addClass("active");
</script>
<!-- RECURSIVO -->
<script>
    function subsub(id_subcategoria,anidamiento){
        //Aquí se consulta si esta madre tiene mas hijos
        $.ajax({
            url: '{{ asset("hasChildren") }}'+'/'+id_subcategoria,
            type: 'GET',
            success:function(data){
                if(data.hay){
                    //LLENAR AQUÍ LOS SUBHIJOS Y MANDAR A LLAMAR subsub() por cada uno de ellos
                    var cat = anidamiento.split("-");
                    var co = 0;
                    $("#id_"+anidamiento).prepend('<button data-action="collapse" type="button" style="">Collapse</button><button data-action="expand" type="button" style="display: none;">Expand</button>');
                    for(co;co<data.data.length;co++){
                        $("#id_"+anidamiento).append('<ol class="dd-list"><li id="id_'+anidamiento+'-'+co+'" class="dd-item dd3-item" data-id="'+anidamiento+'-'+co+'"><div class="dd-handle dd3-handle"></div><div class="dd3-content"><a id="link'+anidamiento+'-'+co+'" class="nav-link items" data-toggle="tab" href="#sec'+anidamiento+'-'+co+'" role="tab">     <span class="hidden-sm-up"><i class="ti-email"></i></span><span class="hidden-xs-down" style="max-width: 10px;white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">'+data.data[co].nombre+'</span></a></div></li></ol>');
                        subsub(data.data[co].id_subcategoria);
                    }
                }else{
                    return;
                }
            }
        }).fail( function( jqXHR, textStatus, errorThrown ) {
            console.log( jqXHR );
        });
    }
</script>
@foreach($categorias as $cat)
<script>
    $.ajax({
            url: '{{ asset("getSubcat/$cat->id_categoria") }}',
            type: 'GET',
            success:function(data){
                var con = 0;
                if(!($.isEmptyObject(data.data))){
                    $("#id_{{$cat->id_categoria}}").prepend('<button data-action="collapse" type="button" style="">Collapse</button><button data-action="expand" type="button" style="display: none;">Expand</button>');
                }
                $.each(data.data,function(){
                    if(!($.isEmptyObject(data.data[con]))){
                        
                       $("#id_{{$cat->id_categoria}}").append('<ol class="dd-list"><li id="id_{{ $cat->id_categoria }}-'+data.data[con].id_subcategoria+'" class="dd-item dd3-item" data-id="{{$cat->id_categoria}}-'+data.data[con].id_subcategoria+'"><div class="dd-handle dd3-handle"></div><div class="dd3-content"><a id="link{{ $cat->id_categoria }}-'+data.data[con].id_subcategoria+'" class="nav-link items" data-toggle="tab" href="#sec{{ $cat->id_categoria }}-'+data.data[con].id_subcategoria+'" role="tab">     <span class="hidden-sm-up"><i class="ti-email"></i></span><span class="hidden-xs-down" style="max-width: 10px;white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">'+data.data[con].nombre+'</span></a></div></li></ol>');
                        $("#contenidos").append('<div class="tab-pane contents" id="sec{{ $cat->id_categoria }}-'+data.data[con].id_subcategoria+'"role="tabpanel"><form class="form pt-3"><div class="row" style="display:flex;"><div class="text-left" style="margin:auto;"><h4 class="card-title">Información de la subcategoría</h4></div></div><div class="row p-3">                <div class="col-lg-6 col-md-6"><div class="form-group"><label for="exampleInputuname{{ $cat->id_categoria }}-'+data.data[con].id_subcategoria+'" class="card-subtitle" style="font-size: medium;">Nombre </label><div class="input-group"><input type="text" class="form-control" id="exampleInputuname{{ $cat->id_categoria }}-'+data.data[con].id_subcategoria+'" placeholder="Ingresa un nombre para la categoría" value="'+data.data[con].nombre+'"><div class="input-group-append"><span class="input-group-text" id="basic-addon{{ $cat->id_categoria }}"-'+data.data[con].id_subcategoria+'><i class="ti-user"></i></span></div></div></div><div class="form-group"><label for="exampleInputEmail{{ $cat->id_categoria }}-'+data.data[con].id_subcategoria+'" class="card-subtitle" style="font-size: medium;">Descripción </label><div class="input-group"><textarea name="message" rows="2" class="form-control" id="exampleInputEmail{{ $cat->id_categoria }}-'+data.data[con].id_subcategoria+'" placeholder="Ingresa una descripción" >'+data.data[con].descripcion+'</textarea><div class="input-group-append"><span class="input-group-text" id="basic-addon{{ $cat->id_categoria }}-'+data.data[con].id_subcategoria+'"><i class="ti-email"></i></span></div></div></div><div class="row" style="display:flex;"><div class="text-left" style="margin:auto;"><button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Guardar</button><button type="button" class="btn btn-inverse"> <i class="fa fa-trash"></i> Eliminar</button></div></div></div><div class="col-lg-6 col-md-6"><div class="card"><div class="card-body" style="padding-top:0;"><h4 class="card-title">Imágen representativa</h4><h6 class="card-subtitle">Medidas recomendadas: 600 x 700 pixeles.</h6><input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="{{  asset('/img')."/" }}-'+data.data[con].foto+'"/><br><h6 class="card-subtitle">Una imágen representativa de su categoría podrá ser utilizada para ofrecer un mejor aspecto. </h6><h6 class="card-subtitle">Pulse <a href=""><strong>aquí</strong></a> para obtener más detalles sobre esto. </h6></div></div></div></div></form></div>');
                        
                        //CONSULTAMOS SI ESTA SUBCATEGORIA TIENE SUBCATEGORÍAS
                        subsub(data.data[con].id_subcategoria,"{{$cat->id_categoria}}-"+data.data[con].id_subcategoria);
                        
                   }
                    con = con +1;
                });
                $('.items').on('click',function(){
                           $('.items').removeClass("active");
                           $(this).addClass("active");
                            var destino = $(this).attr('href');
                            $('.contents').removeClass("active");
                            $(destino).addClass("active");
                        });
                
                nestable();
                imagenes();
           }
        }).fail( function( jqXHR, textStatus, errorThrown ) {
            console.log( jqXHR );
        });
</script>
@endforeach
<script type="text/javascript">
    function nestable() {
        // Nestable
        var updateOutput = function(e) {
            var list = e.length ? e : $(e.target),
            output = list.data('output');
            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
            } else {
                output.val('JSON browser support required for this demo.');
            }
        };

        $('#nestable').nestable({
            group: 1
        }).on('change', updateOutput);

        $('#nestable2').nestable({
            group: 1
        }).on('change', updateOutput);

        updateOutput($('#nestable').data('output', $('#nestable-output')));
        updateOutput($('#nestable2').data('output', $('#nestable2-output')));

        $('#nestable-menu').on('click', function(e) {
            var target = $(e.target),
                action = target.data('action');
            if (action === 'expand-all') {
                $('.dd').nestable('expandAll');
            }
            if (action === 'collapse-all') {
                $('.dd').nestable('collapseAll');
            }
        });

        $('#nestable-menu').nestable();
    }
    </script>
@endsection