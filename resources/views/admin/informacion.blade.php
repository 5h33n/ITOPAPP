@extends('admin.dashboard')
@section('estilos')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="{{ asset('css/admin/bootstrap-editable.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/switch.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/summernote.css') }}">
<style>
    .dropdown-menu{
        min-width: 250px;
    }
</style>
@endsection
@section('bread')
<h3 class="text-themecolor mb-0 mt-0">Panel de administración</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Administrador</a></li>
                            <li class="breadcrumb-item active">Información</li>
                        </ol>
@endsection
@section('CONTENT')
<div class="row">
    <div class="col-lg-7 col-md-6">
        <div class="card">
            <div class="card-body">
               
                <h4 class="card-title">Propiedades de mi sitio</h4>
                <h6 class="card-subtitle">Aquí puede personalizar las características de su papelería</h6>
                <table style="clear: both" class="table table-bordered table-striped" id="user">
                    <tbody style="text-align:center;">
                        <tr>
                            <td width="65%">Nombre de mi papelería</td>
                            <td width="35%"><a href="#" id="inline-nombre" data-type="text" data-pk="1" data-title="Enter username">{{$data_pape->nombre}}</a></td>
                        </tr>
                        <tr>
                            <td>Frase detonadora</td>
                                <td width="35%"><a href="#" id="inline-frase" data-type="text" data-pk="1" data-title="Enter username">{{ $data_pape->detonadora}}</a></td>
                        </tr>
                        <tr>
                            <td>¿Quiénes somos?</td>
                            <td><a href="#" id="inline-who" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $about }}</a></td>
                        </tr>
                        <tr>
                            <td>Misión</td>
                            <td><a href="#" id="inline-mision" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $mision }}</a></td>
                        </tr>
                        <tr>
                            <td width="35%">Visión</td>
                            <td><a href="#" id="inline-vision" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $vision }}</a></td>
                        </tr>
                        <tr>
                            <td width="35%">Correo electrónico</td>
                            <td><a href="#" id="inline-correo" data-type="email" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $data_pape->correo }}</a></td>
                        </tr>
                        <tr>
                            <td width="35%">Teléfono</td>
                            <td><a href="#" id="inline-telefono" data-type="text" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $data_pape->telefono }}</a></td>
                        </tr>
                        <tr>
                            <td width="35%">Dirección</td>
                            <td><a href="#" id="inline-direccion" data-type="text" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $data_pape->direccion }}</a></td>
                        </tr>
                        
                        <tr>
                            <td width="35%">Facebook</td>
                            <td width="65%"><a href="#" id="inline-facebook" data-type="text" data-pk="1" data-title="Enter facebook">{{$data_pape->facebook}}</a></td>
                        </tr>
                        <tr>
                            <td width="35%">Twitter</td>
                            <td width="65%"><a href="#" id="inline-twitter" data-type="text" data-pk="1" data-title="Enter twitter">{{$data_pape->twitter}}</a></td>
                        </tr>
                        <tr>
                            <td width="35%">Instagram</td>
                            <td width="65%"><a href="#" id="inline-instagram" data-type="text" data-pk="1" data-title="Enter instagram">{{$data_pape->instagram}}</a></td>
                        </tr>
                        <tr>
                            <td width="35%">Otra red social</td>
                            <td width="65%">
                            @if($data_pape->otra == null)
                            <a href="#" id="inline-otra" data-type="text" data-pk="1" data-title="Enter another" class="editable-empty">
                                <b>Ingresa otra red social</b>
                            @else
                            <a href="#" id="inline-otra" data-type="text" data-pk="1" data-title="Enter another">
                            {{$data_pape->otra}}
                            @endif
                            </a></td>
                        </tr>
                        <tr><td colspan="2">
                            <button id="guardarconfig" type="submit" class="btn btn-success btn-lg btn-block">Guardar cambios</button>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Logotipo</h4>
                <h6 class="card-subtitle">Medidas recomendadas: 600 x 700 pixeles.</h6>
                <form method="post" id="formulario" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="{{  asset('/img')."/". $data_pape->logo }}"/>
                </form>
                <br>
                <h6 class="card-subtitle">Pulse <a href=""><strong>aquí</strong></a> para obtener recomendaciones de logotipos</h6>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Valores (Opcional)</h4>
                <h6 class="card-subtitle">Agregue características que considere valiosas de su empresa</h6>
                  <div class="tags-default">
                    <select multiple data-role="tagsinput">
                     <?php 
                        if ($data_pape->valores != null){
                         $valores = preg_split("/[\s,]+/",$data_pape->valores);
                         foreach($valores as $v){
                             echo '<option value="'.$v.'">'.$v.'</option>';
                         }
                        }
                      ?>
                    </select>
                </div>
                <br>
                <button id="guardarconfig" type="submit" class="btn btn-success btn-block">Guardar valores</button>
                <br>
                <h6 class="card-subtitle">Pulse <a href=""><strong>aquí</strong></a> para obtener recomendaciones de valores</h6>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">OTRA INFORMACIÓN</h4>
                <h6 class="card-subtitle">Aquí probablemente pueda meter datos de cuenta de la papelería para recibir pagos, o paypal etc
                también se pueden meter otras cuestiones legales respecto a información, datos de políticas de privacidad, si queremos
                habilitar el uso de cookies o qué se yo.</h6>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-6">
        <div class="card">
            <div class="card-body bt-switch">
                <h4 class="card-title">Historia</h4>
                <h6 class="card-subtitle">Aquí puede activar y editar la sección de <strong>Historia</strong>, que le permitirá dar a conocer
                a sus clientes la historia de su empresa</h6>
                <input type="checkbox" data-size="small" data-on-color="success" data-off-color="danger" data-on-text="ACTIVADA" data-off-text="DESACTIVADA"/><br><br>
                <div class="click2edit mb-5">Click on Edite button and change the text then save it.</div>
                <button id="edit" class="btn btn-info btn-rounded" onclick="edit()" type="button">Edit</button>
                <button id="save" class="btn btn-success btn-rounded" onclick="save()" type="button">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/admin/moment.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/bootstrap-editable.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/dropify.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/tagsinput.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/switch.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/summernote.min.js') }}"></script>
<script>
    $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
    var radioswitch = function() {
        var bt = function() {
            $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioState")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
            })
        };
        return {
            init: function() {
                bt()
            }
        }
    }();
    $(document).ready(function() {
        radioswitch.init()
    });
</script>
<script type="text/javascript">
    $(function() {
        //inline


        $('#inline-nombre').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline',
            validate: function(value) {
                if ($.trim(value) == '') return 'Este campo es requerido';
            }
        });
        $('#inline-frase').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline',
            validate: function(value) {
                if ($.trim(value) == '') return 'Este campo es requerido';
            }
        });
        $('#inline-correo').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline',
            validate: function(value) {
                if ($.trim(value) == '') return 'Este campo es requerido';
            }
        });
        $('#inline-telefono').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline',
            validate: function(value) {
                if ($.trim(value) == '') return 'Este campo es requerido';
            }
        });
        $('#inline-direccion').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline',
            validate: function(value) {
                if ($.trim(value) == '') return 'Este campo es requerido';
            }
        });
        $('#inline-facebook').editable({
            type: 'text',
            pk: 1,
            name: 'facebook',
            title: 'Enter facebook',
            mode: 'inline'
        });
        $('#inline-instagram').editable({
            type: 'text',
            pk: 1,
            name: 'instagram',
            title: 'Enter instagram',
            mode: 'inline'
        });
        $('#inline-otra').editable({
            type: 'text',
            pk: 1,
            name: 'instagram',
            title: 'Enter instagram',
            mode: 'inline'
        });
        $('#inline-twitter').editable({
            type: 'text',
            pk: 1,
            name: 'twitter',
            title: 'Enter twitter',
            mode: 'inline'
        });
// ESTE LO DEJE AQUÍ COMO EJEMPLO POR SI QUIERO HACER UNO SIMILAR
        $('#inline-buscar').editable({
            prepend: "No seleccionado",
            mode: 'inline',
            source: [{
                value: 1,
                text: 'En la barra de navegación'
            }, {
                value: 2,
                text: 'Como sección'
            }],
            display: function(value, sourceData) {
                var colors = {
                        "": "#98a6ad",
                        1: "#5fbeaa",
                        2: "#5d9cec"
                    },
                    elem = $.grep(sourceData, function(o) {
                        return o.value == value;
                    });

                if (elem.length) {
                    $(this).text(elem[0].text).css("color", colors[value]);
                } else {
                    $(this).empty();
                }
            }
        });

        $('#inline-who').editable({
            showbuttons: 'bottom',
            mode: 'inline'
        });
        $('#inline-mision').editable({
            showbuttons: 'bottom',
            mode: 'inline'
        });
        $('#inline-vision').editable({
            showbuttons: 'bottom',
            mode: 'inline'
        });



    });
    
    $('#guardarconfig').on('click',function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var nombre = $("#inline-nombre").text();
        var detonadora = $("#inline-frase").text();
        var correo = $("#inline-correo").text();
        var telefono = $("#inline-telefono").text();
        var direccion = $("#inline-direccion").text();
        var mision = $("#inline-mision").text();
        var vision = $("#inline-vision").text();
        var fb = $("#inline-facebook").text();
        var ig = $("#inline-instagram").text();
        var tw = $("#inline-twitter").text();
        var ot = $("#inline-otra").text();
        var who = $("#inline-who").text();
        if (fb == "Empty"){
            fb = "";
        }
        if (ig == "Empty"){
            ig = "";
        }
        if (tw == "Empty"){
            tw = "";
        }
        if (ot == "Ingresa otra red social"){
            ot = "";
        }
        $.ajax({
           type:'POST',
           url: '{{ route("guardarConfig") }}',
           data:{nombre:nombre, detonadora:detonadora, correo:correo,
                telefono:telefono,direccion:direccion,mision:mision,
                vision:vision,facebook:fb,instagram:ig,twitter:tw,
                otra:ot,about:who},
           success:function(data){
              alert(data.success);
           }
        }).fail( function( jqXHR, textStatus, errorThrown ) {
    console.log( jqXHR );
});
    });
    $(document).ready(function() {
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
    });
    
    
    window.edit = function() {
            $(".click2edit").summernote()
        },
        window.save = function() {
            $(".click2edit").summernote('destroy');
        }
    </script>
<script>
    $("#input-file-now-custom-1").on("change",function(){
        var data;
        data = new FormData();
        data.append( 'file', $(this)[0].files[0]);
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: '{{ route("saveLogo") }}',
            type: 'POST',
            data:data,
            contentType: false,
            processData: false,
            success:function(data){
              alert(data.success);
           }
        }).fail( function( jqXHR, textStatus, errorThrown ) {
    console.log( jqXHR );
});
    });
</script>
@endsection