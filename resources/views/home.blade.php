<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=99dfd382ef0d537be753a2880fe1e173">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
</head>

<body id="page-top">
    <div id="wrapper" style="background-color: #000000;">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background-image: linear-gradient(180deg,#000000 10%,#fc1818);background-color: #000000 !important;background-color: rgb(0,0,0)!important;">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span>Sport's house</span></div>
                </a><img class="justify-content-center align-items-center" src="assets/img/nonamesph.png?h=14bd0f9bce9c8e844b6e8d465ecb1798" style="width: 53px;height: 46px;margin-bottom: 10px;">
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="profile.html"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="table.html"><i class="fas fa-table"></i><span>Users</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="products.html"><i class="fas fa-dolly-flatbed"></i><span>Products</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="categories.html"><i class="fab fa-creative-commons-nd fa-2x text-gray-300"></i><span>Catigories</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="tags.html"><i class="fas fa-tags"></i><span>Tags</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation"></li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
    <div class="nav-item dropdown no-arrow"><a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link" href="#">
        <span class="d-none d-lg-inline mr-2 text-gray-600 small">Valerie Luna</span>
        <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg?h=0ecc82101fb9a10ca459432faa8c0656" />
    </a>
    <div
        role="menu" class="dropdown-menu shadow dropdown-menu-right animated--grow-in">
        
            <a role="presentation" class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">
                    </i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
    </div>
</div>

                                                                            

</li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Admin count</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span>2</span></div>
                                        </div>
                                        <div class="col-auto"><i class="icon-user fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>user count</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span>120</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-users fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>products count</span></div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark font-weight-bold h5 mb-0 mr-3"><span>123</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-dolly-flatbed fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>Categories count</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span>18</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fab fa-creative-commons-nd fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-primary py-2" style="border-left: .25rem solid #da5656!important;">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span style="color: #dc6060!important;">tag count</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span>6</span></div>
                                        </div>
                                        <div class="col-auto"><i class="icon-tag fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-success py-2" style="border-left: .25rem solid #1c1c1c!important;">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span style="color: #000000!important;">site visits count</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span>15</span></div>
                                        </div>
                                        <div class="col-auto"><i class="material-icons fa-2x text-gray-300">visibility</i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start: Chart -->
                    <div class="row">
                        <div class="col-lg-5 col-xl-4">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary font-weight-bold m-0">Online and offline products</h6>
                                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                        <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                            role="menu">
                                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Direct&quot;,&quot;Social&quot;,&quot;Referral&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;50&quot;,&quot;30&quot;,&quot;15&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{}}}"></canvas></div>
                                    <div
                                        class="text-center small mt-4"><span class="mr-2"><i class="fas fa-circle text-primary"></i>Online</span><span class="mr-2"><i class="fas fa-circle text-success"></i>Offline</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col align-self-center">
                        <div class="row text-center justify-content-center align-items-center">
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <p class="m-0">Offline</p>
                                        <p class="text-white-50 small m-0">0</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <p class="m-0">Online&nbsp;</p>
                                        <p class="text-white-50 small m-0">0</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-info shadow">
                                    <div class="card-body">
                                        <p class="m-0">Unused Tag</p>
                                        <p class="text-white-50 small m-0">0</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-warning shadow">
                                    <div class="card-body">
                                        <p class="m-0">Unused Categories</p>
                                        <p class="text-white-50 small m-0">0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: Chart -->
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="text-primary font-weight-bold m-0">Projects</h6>
                            </div>
                            <div class="card-body">
                                <h4 class="small font-weight-bold">Server migration<span class="float-right">20%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only">20%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Sales tracking<span class="float-right">40%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Customer Database<span class="float-right">60%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Payout Details<span class="float-right">80%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="sr-only">80%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Account setup<span class="float-right">Complete!</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100%</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="text-primary font-weight-bold m-0">Todo List</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">10:30 AM</span></div>
                                        <div class="col-auto">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-1"><label class="custom-control-label" for="formCheck-1"></label></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">11:30 AM</span></div>
                                        <div class="col-auto">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-2"><label class="custom-control-label" for="formCheck-2"></label></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">12:30 AM</span></div>
                                        <div class="col-auto">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-3"><label class="custom-control-label" for="formCheck-3"></label></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <p class="m-0">Primary</p>
                                        <p class="text-white-50 small m-0">#4e73df</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <p class="m-0">Success</p>
                                        <p class="text-white-50 small m-0">#1cc88a</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-info shadow">
                                    <div class="card-body">
                                        <p class="m-0">Info</p>
                                        <p class="text-white-50 small m-0">#36b9cc</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-warning shadow">
                                    <div class="card-body">
                                        <p class="m-0">Warning</p>
                                        <p class="text-white-50 small m-0">#f6c23e</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-danger shadow">
                                    <div class="card-body">
                                        <p class="m-0">Danger</p>
                                        <p class="text-white-50 small m-0">#e74a3b</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-secondary shadow">
                                    <div class="card-body">
                                        <p class="m-0">Secondary</p>
                                        <p class="text-white-50 small m-0">#858796</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Sport&#39;s House2020</span> <br><br><span>&nbsp; Developer Osid Alsagir</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="assets/js/bs-init.js?h=08ba999e06fc97f895c72848bddb91c1"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js" crossorigin="anonymous"></script>
    <script src="assets/js/theme.js?h=6d33b44a6dcb451ae1ea7efc7b5c5e30"></script>
</body>

</html>