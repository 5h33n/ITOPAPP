@extends('admin.dashboard')
@section('estilos')
<link rel="stylesheet" href="{{ asset('css/admin/designWeb.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/jcarousel.responsive.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/switch.css') }}">
@endsection
@section('bread')
<h3 class="text-themecolor mb-0 mt-0">Panel de administración</h3>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Administrador</a></li>
    <li class="breadcrumb-item">Diseño</li>
    <li class="breadcrumb-item active">Sitio Web</li>
</ol>
@endsection
@section('CONTENT')
<div class="row">
    <div class="col-lg-12 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Diseño del sitio web</h4>
                <h6 class="card-subtitle">Aquí puede gestionar la apariencia del sitio web</h6>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs manage-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#users" role="tab">
                                        <span class="hidden-sm-up">
                                            <h4><i class="ti-user"></i></h4>
                                        </span>
                                        <span class="d-none d-md-block">Slider</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#permissions" role="tab">
                                        <span class="hidden-sm-up">
                                            <h4><i class="ti-lock"></i></h4>
                                        </span>
                                        <span class="d-none d-md-block">Categorías</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                        <span class="hidden-sm-up">
                                            <h4><i class="ti-receipt"></i></h4>
                                        </span>
                                        <span class="d-none d-md-block">Productos</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#save" role="tab">
                                        <span class="hidden-sm-up">
                                            <h4><i class="ti-check-box"></i></h4>
                                        </span>
                                        <span class="d-none d-md-block">Temas</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="users" role="tabpanel">
                                    <div class="row py-4 px-5 no-gutters mt-3">
                                        <div class="col-sm-12 col-md-6">
                                            <h3 class="font-light">Modifique las propiedades del slider principal</h3>
                                            
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <ul class="list-inline dl mb-0 float-left float-md-right">
                                                <li class="list-inline-item text-info mr-3">
                                                    <a href="">
                                                        <div class="card-body bt-switch" style="margin-top:-20px;">
                                                            <input type="checkbox" data-size="small" data-on-color="success" data-off-color="danger" data-on-text="VISIBLE" data-off-text="OCULTO"/><br><br>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                   </div>
                                    <div class="row bg-light">
                                        <div class="col-lg-6">
                                            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                                                    <ol class="carousel-indicators">
                                                                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                                                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                                                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                                                    </ol>
                                                                    <div class="carousel-inner" role="listbox">
                                                                        <div class="carousel-item active">
                                                                            <img class="img-responsive" src="{{ asset('img/1.jpg') }}" alt="First slide">
                                                                            <div class="carousel-caption d-none d-md-block">
                                                                                <h3 class="text-white">First title goes here</h3>
                                                                                <p>this is the subcontent you can use this</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <img class="img-responsive" src="{{ asset('img/2.jpg') }}" alt="Second slide">
                                                                            <div class="carousel-caption d-none d-md-block">
                                                                                <h3 class="text-white">Second title goes here</h3>
                                                                                <p>this is the subcontent you can use this</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <img class="img-responsive" src="{{ asset('img/3.jpg') }}" alt="Third slide">
                                                                            <div class="carousel-caption d-none d-md-block">
                                                                                <h3 class="text-white">Third title goes here</h3>
                                                                                <p>this is the subcontent you can use this</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </div>
                                                                <h4>Aqui puedo ponerle un texto de ayuda</h4>
                                        </div>
                                        <div class="col-lg-6">
                                        
                                                <div class="wrapper" style="margin-top: -20px;">
                                    <div class="jcarousel-wrapper">
                                        <div class="jcarousel">
                                            <ul>
                                                <li class="editable"><img src="{{asset('img/cuadrado.jpg')}}" alt="Image 1"></li>
                                                <li class="editable"><img src="{{asset('img/cuadrado.jpg')}}" alt="Image 2"></li>
                                                <li class="editable"><img src="{{asset('img/cuadrado.jpg')}}" alt="Image 3"></li>
                                                <li class="editable"><img src="{{asset('img/cuadrado.jpg')}}" alt="Image 4"></li>
                                                <li class="editable"><img src="{{asset('img/cuadrado.jpg')}}" alt="Image 5"></li>
                                                <li class="editable"><img src="{{asset('img/cuadrado.jpg')}}" alt="Image 6"></li>
                                            </ul>
                                        </div>

                                        <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                                        <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                                    </div>
                                </div>
					                   
                                       <div class="row" style="padding-left:10%;">
                                           <div class="col-lg-12">
                                              <div class="row" style="display:flex;"><div class="text-left" style="margin:auto;">
                                          <button value="<">Mover atrás</button><button value=">">Mover adelante</button>
                                             </div></div>
                                               <form action="" class="form">
                                                   <div class="form-group">
                                                        <label for="ex" class="card-subtitle" style="font-size: medium;">Título </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="ex" placeholder="Ingresa un títutlo para la imagen">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon">
                                                                    <i class="ti-user"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="ex" class="card-subtitle" style="font-size: medium;">Subtitulo </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="ex" placeholder="Ingresa un subtítulo para la imagen">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon">
                                                                    <i class="ti-user"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><h4>Aquí puedo poner un switch para activar o desactivar las formas</h4></div>
                                                    <div class="row" style="display:flex;">
                                                        <div class="text-left" style="margin:auto;">

                                                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Guardar</button>
                                                                <button type="button" class="btn btn-inverse"> <i class="fa fa-trash"></i> Eliminar</button>

                                                            </div>
                                                   </div>
                                               </form>
                                           </div>
                                       </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="permissions" role="tabpanel">
                                    <div class="row py-4 px-5 no-gutters mt-3">
                                        <div class="col-sm-12 col-md-6">
                                            <h3 class="font-light">¿Cómo quiere mostrar sus categorías?</h3>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <ul class="list-inline dl mb-0 float-left float-md-right">
                                                
                                                           <!--<div class="card-body bt-switch" style="margin-top:-20px;">
                                                            <input type="checkbox" data-size="small" data-on-color="success" data-off-color="danger" data-on-text="ACTIVADA" data-off-text="DESACTIVADA"/><br><br>
                                                        </div>
                                                        -->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="row op" style="display:flex;">
                                            <div class="col-lg-3 col-md-2 izq" style="margin-left:auto;margin-right:20px;"><input type="radio" id="riz"></div>
                                            <div class="col-lg-3 col-md-2 der" style="margin-left:20px;margin-right:auto;"><input type="radio" id="rde"></div>
                                        </div>
                                        <div class="row" style="margin-top: 20px;">
                                            <h4 class="card-subtitle" style="margin-left:auto;margin-right:100px;">DESPLEGABLE</h4>
                                            <h4 class="card-subtitle" style="margin-left:100px;margin-right:auto;">COMO SECCIÓN</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages" role="tabpanel">
                                    <div class="row py-4 px-5 no-gutters mt-3">
                                        <div class="col-sm-12 col-md-8">
                                            <h3 class="font-light">Elija la forma en que se muestran sus productos</h3>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <ul class="list-inline dl mb-0 float-left float-md-right">
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light">
                                        <div class="row align-items-center" style="margin-left:10px;margin-top:-10px;margin-right:10px;">
                                            <!-- Column -->
                                            <div class="col-lg-3" style="margin-top:20px;">
                                                <div class="card">
                                                    <img class="card-img-top img-responsive" src="{{ asset('img/img4.jpg') }}" alt="Card image cap">
                                                    <div class="card-body producto">
                                                        <div class="d-flex no-block align-items-center mb-3">
                                                            <span><i class="ti-calendar"></i> 20 May 2018</span>
                                                            <div class="ml-auto">
                                                                <a href="javascript:void(0)" class="link"><i class="ti-comments"></i> 3 Comments</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="font-normal">Libreta virgencita verde</h3>
                                                        <p class="mb-0 mt-2">Libreta con figura</p>
                                                        <button class="btn btn-success btn-rounded waves-effect waves-light mt-3">Read more</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3" style="margin-top:20px;">
                                                <div class="card">
                                                    <img class="card-img-top img-responsive" src="{{ asset('img/libretarayas.jpeg') }}" alt="Card image cap">
                                                    <div class="card-body producto">
                                                        <div class="d-flex no-block align-items-center mb-3">
                                                            <span><i class="ti-calendar"></i> 20 May 2018</span>
                                                            <div class="ml-auto">
                                                                <a href="javascript:void(0)" class="link"><i class="ti-comments"></i> 3 Comments</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                                                        <p class="mb-0 mt-2">Tim ullamcorper quam.</p>
                                                        <button class="btn btn-success btn-rounded waves-effect waves-light mt-3">Read more</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3" style="margin-top:20px;">
                                                <div class="card">
                                                    <img class="card-img-top img-responsive" src="{{ asset('img/libretarayas.jpeg') }}" alt="Card image cap">
                                                    <div class="card-body producto">
                                                        <div class="d-flex no-block align-items-center mb-3">
                                                            <span><i class="ti-calendar"></i> 20 May 2018</span>
                                                            <div class="ml-auto">
                                                                <a href="javascript:void(0)" class="link"><i class="ti-comments"></i> 3 Comments</a>
                                                            </div>
                                                        </div>
                                                        <h3 class="font-normal">Featured Pots Garden &amp; Outdoors</h3>
                                                        <p class="mb-0 mt-2">Tnvjfkgnvfjkgvnfkgvnfgvfggiat. Vestibulum ullamcorper quam.</p>
                                                        <button class="btn btn-success btn-rounded waves-effect waves-light mt-3">Read more</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3" style="margin-top:-38%;">
                                               <div class="row align-items-center" style="display:flex;">
                                                   <h3 class="card-title" style="margin:auto;margin-bottom:15%;">Seleccione un estilo</h3>
                                               </div>
                                                <div class="btn-group row align-items-center" style="display:flex;">
                                                    <button type="button" class="btn btn-info btn-block dropdown-toggle" style="margin:auto;"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Botones inferiores
                                                    </button>
                                                    <div class="dropdown-menu animated flipInY">
                                                        <a class="dropdown-item" href="javascript:void(0)">Botones inferiores</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Animación dentro de la foto</a>
                                                </div>
                                            </div>
                                                <div class="btn-group row align-items-center" style="display:flex;margin-top:10%;">
                                                    <button type="button" class="btn waves-effect waves-light btn-outline-success btn-block" style="margin:auto;"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Cambiar parámetros adicionales
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-4 mt-2"></div>
                                    <div class="bg-light">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12">
                                                <h4>dcvkmdf</h4>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="tab-pane" id="save" role="tabpanel">
                                    <div class="row py-4 px-5 no-gutters mt-3">
                                        <div class="col-sm-12 col-md-6">
                                            <h3 class="font-light">Seleccione un tema predominante en su sitio web</h3>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <ul class="list-inline dl mb-0 float-left float-md-right">
                                                <li class="list-inline-item text-info mr-3">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-success text-white" href="javascript:void(0)">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Add User</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light">
                                        
                                    </div>
                                    <div class="d-flex align-items-center p-4 mt-2">
                                        <!-- BOTÓN CHIDO
                                           <div class="ml-auto">
                                            <button class="btn btn-danger text-white btn-rounded py-2 px-3">Next <i class="ti-arrow-right ml-2"></i></button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
                <div class="col-lg-6">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/admin/jquery.jcarousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/jcarousel.responsive.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/switch.js') }}"></script>
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
<script>
    $(".es-nav-next").on("click",function(){
        marg = $(".es-carousel ul").css("margin-left");
        marg = Number(marg.substring(0, 3));
        marg = marg -100;
        marg = $(".es-carousel ul").css("margin-left",marg+"px;");
    });
    $('.editable').on("click",function(){
        //alert($(this).children("img").attr("src"));
        
    });
</script>
<script>
    $(".izq").on("click",function(){
        $(".der").removeClass("active");
        $(this).addClass("active");
        $("#riz").prop("checked",true);
        $("#rde").prop("checked",false);
        
    });
    $(".der").on("click",function(){
        $(".izq").removeClass("active");
        $(this).addClass("active");
        $("#rde").prop("checked",true);
        $("#riz").prop("checked",false);
        
    });
</script>
@endsection