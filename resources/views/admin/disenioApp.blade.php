@extends('admin.dashboard')
@section('estilos')
<link rel="stylesheet" href="{{ asset('css/admin/switch.css') }}">
@endsection
@section('bread')
<h3 class="text-themecolor mb-0 mt-0">Panel de administración</h3>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Administrador</a></li>
    <li class="breadcrumb-item">Diseño</li>
    <li class="breadcrumb-item active">App Movil</li>
</ol>
@endsection
@section('CONTENT')
<div class="row">
    <div class="col-lg-12 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Diseño de la aplicación móvil</h4>
                <h6 class="card-subtitle">Aquí puede gestionar la apariencia de la aplicación móvil</h6>
                <div class="row card">
                   <h2 class="card-title align-self-center">Aplicación móvil activa</h2>
                   <h6 class="card-title align-self-center">Haga llegar a sus clientes este código QR que deberán escanear desde la aplicación de ITOPAPP para ingresar a su papelería</h6>
                   
                   <img class="align-self-center" src="{{ asset("qr.png") }}" alt="" style="width:300px;height:300px;">
                    <div class="card-body bt-switch align-self-center" style="margin-top:-10px;">
                        <input id="app_activate" type="checkbox" data-size="small" data-on-color="success" data-off-color="danger" data-on-text="ACTIVADA" data-off-text="DESACTIVADA" /><br><br>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/admin/switch.js') }}"></script>
<script>
    $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
    var radioswitch = function() {
        var bt = function() {
            $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioState")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
                alert("akiando");
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
        radioswitch.init();
        var type = $("#id_activate").data('switch-get');
    });
    
</script>
@endsection