@extends('admin.dashboard')
@section('bread')
<h3 class="text-themecolor mb-0 mt-0">Panel de administración</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Administrador</a></li>
                            <li class="breadcrumb-item active">Editar categorías</li>
                        </ol>
@endsection
@section('CONTENT')
            <div class="page-content container-fluid">
                <!-- ============================================================== -->
                <!-- Yearly Sales Charts Row  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h2 class="font-medium">$354.50</h2>
                                        <h5 class="text-muted mb-0">Total Income</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="" id="ravenue"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h2 class="font-medium">3456</h2>
                                        <h5 class="text-muted mb-0">Yearly Sales</h5>
                                    </div>
                                    <div class="col-6">
                                        <div id="ct-main-bal" style="height: 57px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h2 class="font-medium">356</h2>
                                        <h5 class="text-muted mb-0">Monthly Sales</h5>
                                    </div>
                                    <div class="col-6">
                                        <div id="ct-extra" style="height: 57px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales, Expance & Finance Charts Row  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="card">
                            <div class="p-3">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title text-uppercase mb-0">Expance</h5>
                                    <div class="ml-auto">
                                        <ul class="list-inline dl mb-0">
                                            <li class="list-inline-item text-info"><i class="fa fa-circle"></i> Xtreme</li>
                                            <li class="list-inline-item text-danger"><i class="fa fa-circle"></i> Ample</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="ct-visits" style="height: 265px;"></div>
                            </div>
                            <div class="row no-gutters border-top">
                                <div class="col-md-6 border-right border-bottom">
                                    <div class="d-flex align-items-center px-4 py-3">
                                        <h2 class="mb-0 text-info display-7">
                                            <i class="ti-headphone-alt"></i>
                                        </h2>
                                        <div class="ml-4">
                                            <h2 class="font-normal">$250</h2>
                                            <h4>Entertainment</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 border-bottom">
                                    <div class="d-flex align-items-center px-4 py-3">
                                        <h2 class="mb-0 text-info display-7">
                                            <i class="ti-home"></i>
                                        </h2>
                                        <div class="ml-4">
                                            <h2 class="font-normal">$60.50</h2>
                                            <h4>House Rent</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 border-right">
                                    <div class="d-flex align-items-center px-4 py-3">
                                        <h2 class="mb-0 text-info display-7">
                                            <i class="far fa-paper-plane"></i>
                                        </h2>
                                        <div class="ml-4">
                                            <h2 class="font-normal">$28</h2>
                                            <h4>Travel</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 border-sm-top">
                                    <div class="d-flex align-items-center px-4 py-3">
                                        <h2 class="mb-0 text-info display-7">
                                            <i class="ti-shopping-cart"></i>
                                        </h2>
                                        <div class="ml-4">
                                            <h2 class="font-normal">$70</h2>
                                            <h4>Shopping</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Sales</h5>
                                <div class="mt-3">
                                    <div id="morris-donut-chart" style="height:350px; padding-top: 50px;"></div>
                                </div>
                                <div class="d-flex align-items-center mt-4">
                                    <div>
                                        <h3 class="font-medium text-uppercase">Total Sales</h3>
                                        <h5 class="text-muted">160 sales monthly</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="btn btn-info btn-circle btn-lg text-white">
                                            <i class="ti-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<div class="row">
                    <div class="col-lg-6">
                        <div class="card earning-widget">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="d-flex no-block">
                                        <h4 class="card-title mb-0">Ingresos por sección</h4>
                                        <div class="ml-auto">
                                            <select class="custom-select">
                                                <option selected="">March</option>
                                                <option value="1">February</option>
                                                <option value="2">May</option>
                                                <option value="3">April</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h2 class="mt-0">$5,000.00</h2>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <table class="table v-middle no-border">
                                    <tbody>
                                        <tr>
                                            <td style="width:40px"><img src="../assets/images/users/1.jpg" width="50" class="img-circle" alt="logo"></td>
                                            <td>Cuadernos</td>
                                            <td class="text-right"><span class="label label-light-info">$2000</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../assets/images/users/2.jpg" width="50" class="img-circle" alt="logo"></td>
                                            <td>Servicios</td>
                                            <td class="text-right"><span class="label label-light-success">$1500</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../assets/images/users/3.jpg" width="50" class="img-circle" alt="logo"></td>
                                            <td>Accesorios escolares</td>
                                            <td class="text-right"><span class="label label-light-primary">$700</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../assets/images/users/4.jpg" width="50" class="img-circle" alt="logo"></td>
                                            <td>Oficina y computo</td>
                                            <td class="text-right"><span class="label label-light-warning">$800</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pendientes</h4>
                                <ul class="feeds">
                                    <li>
                                        <div class="bg-light-info"><i class="fas fa-bell"></i></div> Tienes 4 pendientes. <span class="text-muted">Ahora</span></li>
                                    <li>
                                        <div class="bg-light-warning"><i class="ti-shopping-cart"></i></div> Nueva compra registrada.<span class="text-muted">31 May</span></li>
                                    <li>
                                        <div class="bg-light-danger"><i class="ti-user"></i></div> Nuevo usuario registrado.<span class="text-muted">30 May</span></li>
                                    <li>
                                        <div class="bg-light-inverse"><i class="fas fa-bell"></i></div> Nueva compra registrada. <span class="text-muted">27 May</span></li>
                                    <li>
                                        <div class="bg-light-inverse"><i class="fas fa-bell"></i></div> Recibiste un mensaje. <span class="text-muted">27 May</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection