@extends('admin.dashboard')
@section('estilos')
<link rel="stylesheet" href="{{ asset('css/admin/chartist.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/chartist-init.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/chartist-plugin-tooltip.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/morris.css') }}">
@endsection
@section('bread')
<h3 class="text-themecolor mb-0 mt-0">Panel de administración</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Administrador</a></li>
                            <li class="breadcrumb-item active">Principal</li>
                        </ol>
@endsection
@section('CONTENT')
            <div class="page-content container-fluid">
               <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ingresos del día</h4>
                                <div class="text-right">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i> $120</h2>
                                    <span class="text-muted">Respecto a lo esperado</span>
                                </div>
                                <span class="text-success">80%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ingresos semanales</h4>
                                <div class="text-right">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i> $5,000</h2>
                                    <span class="text-muted">Respecto a lo esperado</span>
                                </div>
                                <span class="text-info">30%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ingresos mensuales</h4>
                                <div class="text-right">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-purple"></i> $8,000</h2>
                                    <span class="text-muted">Respecto a lo esperado</span>
                                </div>
                                <span class="text-purple">60%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-purple" role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ingresos semestrales</h4>
                                <div class="text-right">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-down text-danger"></i> $12,000</h2>
                                    <span class="text-muted">Respecto a lo esperado</span>
                                </div>
                                <span class="text-danger">80%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3>Comparativa semestral</h3>
                                                <h6 class="card-subtitle">Agosto-Diciembre 2019</h6> </div>
                                            <div class="ml-auto ">
                                                <ul class="list-inline">
                                                    <li>
                                                        <h6 class="text-muted"><i class="fa fa-circle mr-1 text-success"></i>Enero-Junio 2019</h6> </li>
                                                    <li>
                                                        <h6 class="text-muted"><i class="fa fa-circle mr-1 text-info"></i>Agosto-Diciembre 2019</h6> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="total-revenue4" style="height: 350px;"></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-4 mt-3 text-center">
                                        <h1 class="mb-0 font-light">$54578</h1>
                                        <h6 class="text-muted">Total de movimientos</h6></div>
                                    <div class="col-lg-3 col-md-6 mb-4 mt-3 text-center">
                                        <h1 class="mb-0 font-light">$43451</h1>
                                        <h6 class="text-muted">Total de ingresos</h6></div>
                                    <div class="col-lg-3 col-md-6 mb-4 mt-3 text-center">
                                        <h1 class="mb-0 font-light">$44578</h1>
                                        <h6 class="text-muted">Ingresos semestre anterior</h6></div>
                                    <div class="col-lg-3 col-md-6 mb-4 mt-3 text-center">
                                        <h1 class="mb-0 font-light">$12578</h1>
                                        <h6 class="text-muted">Ingresos semestre actual</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <ul class="list-inline float-right">
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle mr-1" style="color:#51bdff"></i>2018</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle mr-1" style="color:#11a0f8"></i>2019</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle mr-1 text-info"></i>2020</h6>
                                    </li>
                                </ul>
                                <h4 class="card-title">Crecimiento histórico</h4>
                                <div class="clear"></div>
                                <div class="total-sales" style="height: 365px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Predicción</h4>
                                        <div class="d-flex flex-row">
                                            <div class="align-self-center">
                                                <span class="display-6 text-primary">$3528</span>
                                                <h6 class="text-muted">10% de incremento</h6>
                                                <h5>(150-165 Sales)</h5>
                                            </div>
                                            <div class="ml-auto">
                                                <div id="gauge-chart1" style=" width:150px; height:150px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Diferencia real</h4>
                                        <div class="d-flex flex-row">
                                            <div class="align-self-center">
                                                <span class="display-6 text-success">$4316</span>
                                                <h6 class="text-muted">10% de incremento</h6>
                                                <h5>(150-165 Sales)</h5>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="ct-chart1" style="width:120px; height: 120px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ventas del mes</h4>
                                <div id="sales-donute" style="width:100%; height:300px;"></div>
                                <div class="round-overlap mt-3"><i class="mdi mdi-cart"></i></div>
                                <ul class="list-inline mt-4 text-center">
                                    <li><i class="fa fa-circle text-purple"></i> Copias</li>
                                    <li><i class="fa fa-circle text-success"></i> Impresiones</li>
                                    <li><i class="fa fa-circle text-info"></i> Cuadernos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Predicción de ventas</h4>
                                        <div class="d-flex flex-row">
                                            <div class="align-self-center">
                                                <span class="display-6">$3528</span>
                                                <h6 class="text-muted">(150-165 Sales)</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <div id="gauge-chart" style=" width:150px; height:150px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Sales Difference</h4>
                                        <div class="d-flex flex-row">
                                            <div class="align-self-center">
                                                <span class="display-6">$4316</span>
                                                <h6 class="text-muted">(150-165 Sales)</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="ct-chart" style="width:120px; height: 120px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class=""><img src="../assets/images/users/1.jpg" alt="user" class="img-circle" width="100"></div>
                                    <div class="pl-3">
                                        <h3 class="font-medium">Daniel Kristeen</h3>
                                        <h6>UIUX Designer</h6>
                                        <button class="btn btn-success"><i class="ti-plus"></i> Follow</button>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col border-right">
                                        <h2 class="font-light">14</h2>
                                        <h6>Photos</h6></div>
                                    <div class="col border-right">
                                        <h2 class="font-light">54</h2>
                                        <h6>Videos</h6></div>
                                    <div class="col">
                                        <h2 class="font-light">145</h2>
                                        <h6>Tasks</h6></div>
                                </div>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body">
                                <p class="text-center aboutscroll">
                                    Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunLorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididuntt
                                </p>
                                <ul class="list-icons d-flex flex-item text-center pt-2">
                                    <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Website"><i class="fa fa-globe font-20"></i></a></li>
                                    <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="twitter"><i class="fab fa-twitter font-20"></i></a></li>
                                    <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Facebook"><i class="fab fa-facebook-square font-20"></i></a></li>
                                    <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Youtube"><i class="fab fa-youtube font-20"></i></a></li>
                                    <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Linkd-in"><i class="fab fa-linkedin font-20"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Chats</h4>
                                <div class="chat-box">
                                    <!--chat Row -->
                                    <ul class="chat-list">
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img"><img src="../assets/images/users/1.jpg" alt="user" /></div>
                                            <div class="chat-content">
                                                <h5>James Anderson</h5>
                                                <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing & type setting industry.</div>
                                            </div>
                                            <div class="chat-time">10:56 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img"><img src="../assets/images/users/2.jpg" alt="user" /></div>
                                            <div class="chat-content">
                                                <h5>Bianca Doe</h5>
                                                <div class="box bg-light-success">It’s Great opportunity to work.</div>
                                            </div>
                                            <div class="chat-time">10:57 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="odd">
                                            <div class="chat-content">
                                                <div class="box bg-light-inverse">I would love to join the team.</div>
                                                <br/>
                                            </div>
                                            <div class="chat-time">10:58 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="odd">
                                            <div class="chat-content">
                                                <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                                <br/>
                                            </div>
                                            <div class="chat-time">10:59 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img"><img src="../assets/images/users/3.jpg" alt="user" /></div>
                                            <div class="chat-content">
                                                <h5>Angelina Rhodes</h5>
                                                <div class="box bg-light-primary">Well we have good budget for the project</div>
                                            </div>
                                            <div class="chat-time">11:00 am</div>
                                        </li>
                                        <!--chat Row -->
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <div class="row">
                                    <div class="col-8">
                                        <textarea placeholder="Type your message here" class="form-control b-0"></textarea>
                                    </div>
                                    <div class="col-4 text-right">
                                        <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fas fa-paper-plane"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Messages</h4>
                                <div class="message-box">
                                    <div class="message-widget message-scroll">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online float-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy float-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <span class="round">A</span> <span class="profile-status away float-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">Simply dummy text of the printing and typesetting industry.</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline float-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online float-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Welcome to the Elite Admin</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy float-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="../assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away float-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline float-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <h4 class="card-title">Projects of the Month</h4>
                                    <div class="ml-auto">
                                        <select class="custom-select">
                                            <option selected>January</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive mt-5">
                                    <table class="table stylish-table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Assigned</th>
                                                <th>Name</th>
                                                <th>Priority</th>
                                                <th>Budget</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width:50px;"><span class="round">S</span></td>
                                                <td>
                                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small></td>
                                                <td>Elite Admin</td>
                                                <td><span class="label label-light-success">Low</span></td>
                                                <td>$3.9K</td>
                                            </tr>
                                            <tr class="active">
                                                <td><span class="round"><img src="../assets/images/users/2.jpg" alt="user" width="50" /></span></td>
                                                <td>
                                                    <h6>Andrew</h6><small class="text-muted">Project Manager</small></td>
                                                <td>Real Homes</td>
                                                <td><span class="label label-light-info">Medium</span></td>
                                                <td>$23.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-success">B</span></td>
                                                <td>
                                                    <h6>Bhavesh patel</h6><small class="text-muted">Developer</small></td>
                                                <td>MedicalPro Theme</td>
                                                <td><span class="label label-light-danger">High</span></td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-primary">N</span></td>
                                                <td>
                                                    <h6>Nirav Joshi</h6><small class="text-muted">Frontend Eng</small></td>
                                                <td>Elite Admin</td>
                                                <td><span class="label label-light-success">Low</span></td>
                                                <td>$10.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-warning">M</span></td>
                                                <td>
                                                    <h6>Micheal Doe</h6><small class="text-muted">Content Writer</small></td>
                                                <td>Helping Hands</td>
                                                <td><span class="label label-light-danger">High</span></td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-danger">N</span></td>
                                                <td>
                                                    <h6>Johnathan</h6><small class="text-muted">Graphic</small></td>
                                                <td>Digital Agency</td>
                                                <td><span class="label label-light-danger">High</span></td>
                                                <td>$2.6K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <h4 class="card-title">Weather Report</h4>
                                    <div class="ml-auto">
                                        <select class="custom-select">
                                            <option selected>Today</option>
                                            <option value="1">Weekly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center flex-row mt-4">
                                    <div class="p-2 display-5 text-info"><i class="wi wi-day-showers"></i> <span>73<sup>°</sup></span></div>
                                    <div class="p-2">
                                        <h3 class="mb-0">Saturday</h3><small>Ahmedabad, India</small></div>
                                </div>
                                <table class="table no-border">
                                    <tr>
                                        <td>Wind</td>
                                        <td class="font-medium">ESE 17 mph</td>
                                    </tr>
                                    <tr>
                                        <td>Humidity</td>
                                        <td class="font-medium">83%</td>
                                    </tr>
                                    <tr>
                                        <td>Pressure</td>
                                        <td class="font-medium">28.56 in</td>
                                    </tr>
                                    <tr>
                                        <td>Cloud Cover</td>
                                        <td class="font-medium">78%</td>
                                    </tr>
                                    <tr>
                                        <td>Ceiling</td>
                                        <td class="font-medium">25760 ft</td>
                                    </tr>
                                </table>
                                <hr/>
                                <ul class="list-unstyled row text-center city-weather-days">
                                    <li class="col"><i class="wi wi-day-sunny"></i><span>09:30</span>
                                        <h3>70<sup>°</sup></h3></li>
                                    <li class="col"><i class="wi wi-day-cloudy"></i><span>11:30</span>
                                        <h3>72<sup>°</sup></h3></li>
                                    <li class="col"><i class="wi wi-day-hail"></i><span>13:30</span>
                                        <h3>75<sup>°</sup></h3></li>
                                    <li class="col"><i class="wi wi-day-sprinkle"></i><span>15:30</span>
                                        <h3>76<sup>°</sup></h3></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/big/img1.jpg" alt="Card">
                            <div class="card-body">
                                <ul class="list-inline font-14">
                                    <li class="pl-0">20 May 2016</li>
                                    <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                                </ul>
                                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/big/img2.jpg" alt="Card">
                            <div class="card-body">
                                <ul class="list-inline font-14">
                                    <li class="pl-0">20 May 2016</li>
                                    <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                                </ul>
                                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../assets/images/big/img4.jpg" alt="Card">
                            <div class="card-body">
                                <ul class="list-inline font-14">
                                    <li class="pl-0">20 May 2016</li>
                                    <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                                </ul>
                                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Comments</h4>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Comment widgets -->
                            <!-- ============================================================== -->
                            <div class="comment-widgets">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><span class="round"><img src="../assets/images/users/1.jpg" alt="user" width="50"></span></div>
                                    <div class="comment-text w-100">
                                        <h5>James Anderson</h5>
                                        <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">April 14, 2016</span>
                                            <span class="label label-light-info">Pending</span>
                                            <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart"></i></a>    
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row active">
                                    <div class="p-2"><span class="round"><img src="../assets/images/users/2.jpg" alt="user" width="50"></span></div>
                                    <div class="comment-text active w-100">
                                        <h5>Michael Jorden</h5>
                                        <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                                        <div class="comment-footer ">
                                            <span class="text-muted float-right">April 14, 2016</span>
                                            <span class="label label-light-success">Approved</span>
                                            <span class="action-icons active">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>    
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><span class="round"><img src="../assets/images/users/3.jpg" alt="user" width="50"></span></div>
                                    <div class="comment-text w-100">
                                        <h5>Johnathan Doeting</h5>
                                        <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">April 14, 2016</span>
                                            <span class="label label-light-danger">Rejected</span>
                                            <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart"></i></a>    
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><span class="round"><img src="../assets/images/users/4.jpg" alt="user" width="50"></span></div>
                                    <div class="comment-text w-100">
                                        <h5>James Anderson</h5>
                                        <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">April 14, 2016</span>
                                            <span class="label label-light-info">Pending</span>
                                            <span class="action-icons">
                                                        <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                        <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                        <a href="javascript:void(0)"><i class="ti-heart"></i></a>    
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <button class="float-right btn btn-sm btn-rounded btn-success" data-toggle="modal" data-target="#myModal">Add Task</button>
                                <h4 class="card-title">To Do list</h4>
                                <!-- ============================================================== -->
                                <!-- To do list widgets -->
                                <!-- ============================================================== -->
                                <div class="to-do-widget mt-3">
                                    <!-- .modal for add task -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add Task</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter Your Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email address</label>
                                                            <input type="email" class="form-control" placeholder="Enter email">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                                        <li class="list-group-item" data-role="task">
                                            <div class="checkbox checkbox-info">
                                                <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                                <label for="inputSchedule" class=""> <span>Schedule meeting with</span> </label>
                                            </div>
                                            <ul class="assignedto">
                                                <li><img src="../assets/images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                                <li><img src="../assets/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                                <li><img src="../assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                <li><img src="../assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item" data-role="task">
                                            <div class="checkbox checkbox-info">
                                                <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                                <label for="inputCall" class=""> <span>Give Purchase report to</span> <span class="label label-light-danger">Today</span> </label>
                                            </div>
                                            <ul class="assignedto">
                                                <li><img src="../assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                <li><img src="../assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item" data-role="task">
                                            <div class="checkbox checkbox-info">
                                                <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                                <label for="inputBook" class=""> <span>Book flight for holiday</span> </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2019</div>
                                        </li>
                                        <li class="list-group-item" data-role="task">
                                            <div class="checkbox checkbox-info">
                                                <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                                                <label for="inputForward" class=""> <span>Forward all tasks</span> <span class="label label-light-warning">2 weeks</span> </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2019</div>
                                        </li>
                                        <li class="list-group-item" data-role="task">
                                            <div class="checkbox checkbox-info">
                                                <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                                                <label for="inputRecieve" class=""> <span>Recieve shipment</span> </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2019</div>
                                        </li>
                                        <li class="list-group-item" data-role="task">
                                            <div class="checkbox checkbox-info">
                                                <input type="checkbox" id="inputpayment" name="inputCheckboxespayment">
                                                <label for="inputpayment" class=""> <span>Send payment today</span> </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2019</div>
                                        </li>
                                        <li class="list-group-item" data-role="task">
                                            <div class="checkbox checkbox-info">
                                                <input type="checkbox" id="inputForward2" name="inputCheckboxesd">
                                                <label for="inputForward2" class=""> <span>Important tasks</span> <span class="label label-light-success">2 weeks</span> </label>
                                            </div>
                                            <ul class="assignedto">
                                                <li><img src="../assets/images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Assign to Steave"></li>
                                                <li><img src="../assets/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Assign to Jessica"></li>
                                                <li><img src="../assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Assign to Selina"></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</div>
@endsection
@section('scripts')
<script src="{{ asset('js/admin/custom.js') }}"></script>
<script src="{{ asset('js/admin/chartist.min.js') }}"></script>
<script src="{{ asset('js/admin/chartist-plugin-tooltip.js') }}"></script>
<script src="{{ asset('js/charts/echarts-all.js') }}"></script>
<script src="{{ asset('js/charts/jquery.toast.js') }}"></script>
<script>
    $(function () {
    "use strict";
    // ============================================================== 
    // Total revenue chart
    // ============================================================== 
    new Chartist.Line('.total-revenue4', {
        labels: ['0', '4', '8', '12', '16', '20', '24', '30']
        , series: [
        [0, 2, 3.5, 0, 13, 1, 4, 1]
        , [0, 4, 0, 4, 0, 4, 0, 4]
      ]
        
    }, 
                     
      {
        high: 15
        , low: 0
        , showArea: true
        , fullWidth: true
        , plugins: [
        Chartist.plugins.tooltip()
      ], // As this is axis specific we need to tell Chartist to use whole numbers only on the concerned axis
        axisY: {
            onlyInteger: true
            , offset: 20
            , labelInterpolationFnc: function (value) {
                return (value / 1) + 'k';
            }
        }
        
    });
     // ============================================================== 
    // Total revenue chart
    // ============================================================== 
    new Chartist.Bar('.total-sales', {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept']
        , series: [
        [800000, 1200000, 1400000, 1300000, 1200000, 1400000, 1300000, 1300000, 1200000]
        , [200000, 400000, 500000, 300000, 400000, 500000, 300000, 300000, 400000]
        , [100000, 200000, 400000, 600000, 200000, 400000, 600000, 600000, 200000]
      ]
    }, {
        high: 2500000
        , low: 500000
        , fullWidth: true
        , plugins: [
        Chartist.plugins.tooltip()]
        , stackBars: true
        , axisX: {
            showGrid: false
        }
        , axisY: {
            labelInterpolationFnc: function (value) {
                return (value / 1000) + 'k';
            }
        }
    }).on('draw', function (data) {
        if (data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 30px'
            });
        }
    });
        // ============================================================== 
    // sales difference
    // ==============================================================
    new Chartist.Pie('.ct-chart1', {
        series: [25, 10]
    }, {
        donut: true
        , donutWidth: 20
        , startAngle: 0
        , showLabel: false
    });
    // ============================================================== 
    // sales difference
    // ==============================================================
    new Chartist.Pie('.ct-chart', {
        series: [35, 15, 10]
    }, {
        donut: true
        , donutWidth: 20
        , startAngle: 0
        , showLabel: false
    });
        
        
    var sparklineLogin = function() { 
        $('#sparklinedash').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar',
            height: '50',
            barWidth: '2',
            resize: true,
            barSpacing: '5',
            barColor: '#55ce63'
        });
         $('#sparklinedash2').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar',
            height: '50',
            barWidth: '2',
            resize: true,
            barSpacing: '5',
            barColor: '#7460ee'
        });
          $('#sparklinedash3').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar',
            height: '50',
            barWidth: '2',
            resize: true,
            barSpacing: '5',
            barColor: '#03a9f3'
        });
           $('#sparklinedash4').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar',
            height: '50',
            barWidth: '2',
            resize: true,
            barSpacing: '5',
            barColor: '#f62d51'
        });
        
   
       }
    var sparkResize;
            $(window).resize(function(e) {
                clearTimeout(sparkResize);
                sparkResize = setTimeout(sparklineLogin, 500);
            });
            sparklineLogin();
});

// ============================================================== 
// doughnut chart option
// ============================================================== 
var doughnutChart = echarts.init(document.getElementById('sales-donute'));
// specify chart configuration item and data
option = {
    tooltip: {
        trigger: 'item'
        , formatter: "{a} <br/>{b} : {c} ({d}%)"
    }
    , legend: {
        show: false
        , data: ['Item A', 'Item B', 'Item C', 'Item D']
    }
    , toolbox: {
        show: false
        , feature: {
            dataView: {
                show: false
                , readOnly: false
            }
            , magicType: {
                show: false
                , type: ['pie', 'funnel']
                , option: {
                    funnel: {
                        x: '25%'
                        , width: '50%'
                        , funnelAlign: 'center'
                        , max: 1548
                    }
                }
            }
            , restore: {
                show: true
            }
            , saveAsImage: {
                show: true
            }
        }
    }
    , color: ["#edf1f5", "#009efb", "#55ce63", "#745af2"]
    , calculable: false
    , series: [
        {
            name: 'Source'
            , type: 'pie'
            , radius: ['80%', '90%']
            , itemStyle: {
                normal: {
                    label: {
                        show: false
                    }
                    , labelLine: {
                        show: false
                    }
                }
                , emphasis: {
                    label: {
                        show: false
                        , position: 'center'
                        , textStyle: {
                            fontSize: '30'
                            , fontWeight: 'bold'
                        }
                    }
                }
            }
            , data: [
                {
                    value: 835
                    , name: 'Item A'
                    }
                    , {
                    value: 310
                    , name: 'Item B'
                    }
                    , {
                    value: 134
                    , name: 'Item C'
                    }
                    , {
                    value: 235
                    , name: 'Item D'
                    }

            ]
        }
    ]
};
// use configuration item and data specified to show chart
doughnutChart.setOption(option, true), $(function () {
    function resize() {
        setTimeout(function () {
            doughnutChart.resize()
        }, 100)
    }
    $(window).on("resize", resize), $(".sidebartoggler").on("click", resize)
});

// ============================================================== 
// Gauge chart option
// ============================================================== 
var gaugeChart = echarts.init(document.getElementById('gauge-chart'));
option = {
    tooltip: {
        formatter: "{a} <br/>{b} : {c}%"
    }
    , toolbox: {
        show: false
        , feature: {
            mark: {
                show: true
            }
            , restore: {
                show: true
            }
            , saveAsImage: {
                show: true
            }
        }
    }
    , series: [
        {
            name: ''
            , type: 'gauge'
            , splitNumber: 0, // åˆ†å‰²æ®µæ•°ï¼Œé»˜è®¤ä¸º5
            axisLine: { // åæ ‡è½´çº¿
                lineStyle: { // å±žæ€§lineStyleæŽ§åˆ¶çº¿æ¡æ ·å¼
                    color: [[0.2, '#029ff6'], [0.8, '#1badcb'], [1, '#42c386']]
                    , width: 20
                }
            }
            , axisTick: { // åæ ‡è½´å°æ ‡è®°
                splitNumber: 0, // æ¯ä»½splitç»†åˆ†å¤šå°‘æ®µ
                length: 12, // å±žæ€§lengthæŽ§åˆ¶çº¿é•¿
                lineStyle: { // å±žæ€§lineStyleæŽ§åˆ¶çº¿æ¡æ ·å¼
                    color: 'auto'
                }
            }
            , axisLabel: { // åæ ‡è½´æ–‡æœ¬æ ‡ç­¾ï¼Œè¯¦è§axis.axisLabel
                textStyle: { // å…¶ä½™å±žæ€§é»˜è®¤ä½¿ç”¨å…¨å±€æ–‡æœ¬æ ·å¼ï¼Œè¯¦è§TEXTSTYLE
                    color: 'auto'
                }
            }
            , splitLine: { // åˆ†éš”çº¿
                show: false, // é»˜è®¤æ˜¾ç¤ºï¼Œå±žæ€§showæŽ§åˆ¶æ˜¾ç¤ºä¸Žå¦
                length: 50, // å±žæ€§lengthæŽ§åˆ¶çº¿é•¿
                lineStyle: { // å±žæ€§lineStyleï¼ˆè¯¦è§lineStyleï¼‰æŽ§åˆ¶çº¿æ¡æ ·å¼
                    color: 'auto'
                }
            }
            , pointer: {
                width: 5
                , color: '#54667a'
            }
            , title: {
                show: false
                , offsetCenter: [0, '-40%'], // x, yï¼Œå•ä½px
                textStyle: { // å…¶ä½™å±žæ€§é»˜è®¤ä½¿ç”¨å…¨å±€æ–‡æœ¬æ ·å¼ï¼Œè¯¦è§TEXTSTYLE
                    fontWeight: 'bolder'
                }
            }
            , detail: {
                textStyle: { // å…¶ä½™å±žæ€§é»˜è®¤ä½¿ç”¨å…¨å±€æ–‡æœ¬æ ·å¼ï¼Œè¯¦è§TEXTSTYLE
                    color: 'auto'
                    , fontSize: '14'
                    , fontWeight: 'bolder'
                }
            }
            , data: [{
                value: 50
                , name: ''
            }]
        }
    ]
};

    timeTicket = setInterval(function () {
        option.series[0].data[0].value = (Math.random() * 100).toFixed(2) - 0;
        gaugeChart.setOption(option, true);
    }, 2000)
    // use configuration item and data specified to show chart
    gaugeChart.setOption(option, true), $(function () {
    function resize() {
        setTimeout(function () {
            gaugeChart.resize()
        }, 100)
    }
    $(window).on("resize", resize), $(".sidebartoggler").on("click", resize)
});
    
// ============================================================== 
// Gauge chart option
// ============================================================== 
var gaugeChart = echarts.init(document.getElementById('gauge-chart1'));
option = {
    tooltip: {
        formatter: "{a} <br/>{b} : {c}%"
    }
    , toolbox: {
        show: false
        , feature: {
            mark: {
                show: true
            }
            , restore: {
                show: true
            }
            , saveAsImage: {
                show: true
            }
        }
    }
    , series: [
        {
            name: ''
            , type: 'gauge'
            , splitNumber: 0, // åˆ†å‰²æ®µæ•°ï¼Œé»˜è®¤ä¸º5
            axisLine: { // åæ ‡è½´çº¿
                lineStyle: { // å±žæ€§lineStyleæŽ§åˆ¶çº¿æ¡æ ·å¼
                    color: [[0.2, '#785ff3'], [0.8, '#8c76f9'], [1, '#9e8bfe']]
                    , width: 20
                }
            }
            , axisTick: { // åæ ‡è½´å°æ ‡è®°
                splitNumber: 0, // æ¯ä»½splitç»†åˆ†å¤šå°‘æ®µ
                length: 12, // å±žæ€§lengthæŽ§åˆ¶çº¿é•¿
                lineStyle: { // å±žæ€§lineStyleæŽ§åˆ¶çº¿æ¡æ ·å¼
                    color: 'auto'
                }
            }
            , axisLabel: { // åæ ‡è½´æ–‡æœ¬æ ‡ç­¾ï¼Œè¯¦è§axis.axisLabel
                textStyle: { // å…¶ä½™å±žæ€§é»˜è®¤ä½¿ç”¨å…¨å±€æ–‡æœ¬æ ·å¼ï¼Œè¯¦è§TEXTSTYLE
                    color: 'auto'
                }
            }
            , splitLine: { // åˆ†éš”çº¿
                show: false, // é»˜è®¤æ˜¾ç¤ºï¼Œå±žæ€§showæŽ§åˆ¶æ˜¾ç¤ºä¸Žå¦
                length: 50, // å±žæ€§lengthæŽ§åˆ¶çº¿é•¿
                lineStyle: { // å±žæ€§lineStyleï¼ˆè¯¦è§lineStyleï¼‰æŽ§åˆ¶çº¿æ¡æ ·å¼
                    color: 'auto'
                }
            }
            , pointer: {
                width: 5
                , color: '#54667a'
            }
            , title: {
                show: false
                , offsetCenter: [0, '-40%'], // x, yï¼Œå•ä½px
                textStyle: { // å…¶ä½™å±žæ€§é»˜è®¤ä½¿ç”¨å…¨å±€æ–‡æœ¬æ ·å¼ï¼Œè¯¦è§TEXTSTYLE
                    fontWeight: 'bolder'
                }
            }
            , detail: {
                textStyle: { // å…¶ä½™å±žæ€§é»˜è®¤ä½¿ç”¨å…¨å±€æ–‡æœ¬æ ·å¼ï¼Œè¯¦è§TEXTSTYLE
                    color: 'auto'
                    , fontSize: '14'
                    , fontWeight: 'bolder'
                }
            }
            , data: [{
                value: 50
                , name: ''
            }]
        }
    ]
};
timeTicket = setInterval(function () {
        option.series[0].data[0].value = (Math.random() * 100).toFixed(2) - 0;
        gaugeChart.setOption(option, true);
    }, 2000)
    // use configuration item and data specified to show chart
gaugeChart.setOption(option, true), $(function () {
    function resize() {
        setTimeout(function () {
            gaugeChart.resize()
        }, 100)
    }
    $(window).on("resize", resize), $(".sidebartoggler").on("click", resize)
});
    
</script>
@endsection