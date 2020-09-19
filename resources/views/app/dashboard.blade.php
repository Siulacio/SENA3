<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>SENA - Ambiente de aprendizaje</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        {{-- <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}
        <link rel="shortcut icon" href="{{asset('img/logos/logo.png')}}">


        <link href="{{asset('dashor/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('dashor/assets/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('dashor/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('dashor/assets/css/style.css')}}" rel="stylesheet" type="text/css">

        @yield('headers')

        <style>
            .navbar-custom {
                background: #FF6712;
                position: fixed;
                left: 240px;
                right: 0;
                top: 0;
                z-index: 1001;
            }

            .notification-list .noti-icon {
                font-size: 18px;
                vertical-align: middle;
                padding: 11px;
                background-color: #FF6712;
                border-radius: 50%;
                color: #ffffff;
            }

            #sidebar-menu ul ul a:hover {
                color: #FF6712;
            }

            #sidebar-menu > ul > li > a:hover {
                color: #FF6712;
                text-decoration: none;
            }

            .dropdown-menu {
                position: absolute;
                top: 100%;
                left: 0;
                z-index: 1000;
                display: none;
                float: left;
                min-width: 10rem;
                padding: .5rem 0;
                margin: .125rem 0 0;
                font-size: 1rem;
                color: #212529;
                text-align: left;
                list-style: none;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid rgba(0,0,0,.15);
                    border-top-color: rgba(0, 0, 0, 0.15);
                    border-right-color: rgba(0, 0, 0, 0.15);
                    border-bottom-color: rgba(0, 0, 0, 0.15);
                    border-left-color: rgba(0, 0, 0, 0.15);
                border-radius: .25rem;
            }
        </style>

    </head>


    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo"><i class="fa fa-paw"></i> Aplomb</a>-->
                        {{-- <a href="index.html" class="logo"><img src="{{asset('dashor/assets/images/logo.png')}}" height="14" alt="logo"></a> --}}
                        {{-- <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle  mx-auto d-block w-80"> --}}
                        <div class="mt-4">
                            <a href="{{url('/inicio')}}"><img src="{{asset('img/logos/logo.png')}}" alt="" class="rounded-circle  mx-auto d-block w-80"></a>

                        </div>

                    </div>
                </div>
               

                <div class="sidebar-inner slimscrollleft" id="sidebar-main">

                   {{-- MENU --}}
                   @if (Auth::user()->rol == 1)
                        @include('app.menus.menu_administrador')                       
                   @endif
                   @if (Auth::user()->rol == 2)
                        @include('app.menus.menu_lider')                       
                   @endif
                   @if (Auth::user()->rol == 3)
                        @include('app.menus.menu_transversal')                       
                   @endif
                   @if (Auth::user()->rol == 4)
                        @include('app.menus.menu_aprendiz')                       
                   @endif
                   {{-- FIN MENU --}}

                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">
                        <nav class="navbar-custom">
                            <ul class="list-inline float-right mb-0">

                                {{-- <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ti-email noti-icon"></i>
                                        <span class="badge badge-danger noti-icon-badge">5</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5><span class="badge badge-danger float-right">5</span>Messages</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="{{asset('dashor/assets/images/users/avatar-2.jpg')}}" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                            <p class="notify-details"><b>Charles M. Jones</b><small class="">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="{{asset('dashor/assets/images/users/avatar-3.jpg')}}" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                            <p class="notify-details"><b>Thomas J. Mimms</b><small class="">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="{{asset('dashor/assets/images/users/avatar-4.jpg')}}" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                            <p class="notify-details"><b>Luis M. Konrad</b><small class="">It is a long established fact that a reader will</small></p>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>
                                    </div>
                                </li> --}}

                                {{-- <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ti-bell noti-icon"></i>
                                        <span class="badge badge-success noti-icon-badge">9</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5><span class="badge badge-success float-right">9</span>Notification</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><small class="">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="">It is a long established fact that a reader will</small></p>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>
                                    </div>
                                </li> --}}

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="" role="button"
                                        aria-haspopup="false" aria-expanded="false">
                                        <img src="{{asset('dashor/assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>{{Auth::user()->username}}</h5>
                                        </div>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle "></i> Perfil</a>
                                        {{-- <a class="dropdown-item" href="#"><i class="mdi mdi-wallet "></i> My Wallet</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-primary float-right">3</span><i class="mdi mdi-settings "></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline"></i> Lock screen</a> --}}
                                        <div class="dropdown-divider"></div>
                                        
                                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            <i class="mdi mdi-power text-danger"></i>{{ __('Salir') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>


                                        {{-- <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a> --}}
                                    </div>
                                </li>
                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="float-left">
                                    <button class="button-menu-mobile open-left waves-light waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </nav>
                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">@section('titulo-pagina') Bienvenido @show</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            {{-- Inicio pagina --}}

                            @section('content')

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card m-b-30">
                                            <div class="card-body">
                
                                                {{-- <h4 class="mt-0 header-title">Textual inputs</h4> --}}
                                                {{-- <p class="text-muted font-14">Here are examples of <code
                                                        class="highlighter-rouge">.form-control</code> applied to each
                                                    textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                                            class="highlighter-rouge">type</code>.</p> --}}
                                                {{-- <br> --}}

                                                <div class="text-center">
                                                    <img src="{{asset('img/logos/logo.png')}}" alt="Logo SENA" width="40%">
                                                </div>
                
                                                {{-- <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Text</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-search-input" class="col-sm-2 col-form-label">Search</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-url-input" class="col-sm-2 col-form-label">URL</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-sm-2 col-form-label">Number</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="number" value="42" id="example-number-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-month-input" class="col-sm-2 col-form-label">Month</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="month" value="2011-08" id="example-month-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-week-input" class="col-sm-2 col-form-label">Week</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-time-input" class="col-sm-2 col-form-label">Time</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Select</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Large select</option>
                                                            <option>Small select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Custom Select</label>
                                                    <div class="col-sm-10">
                                                        <select class="custom-select">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input-lg" class="col-sm-2 col-form-label">Large</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="example-text-input-lg">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input-sm" class="col-sm-2 col-form-label">Small</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="example-text-input-sm">
                                                    </div>
                                                </div>
                                                <div class="form-group row has-primary">
                                                    <label for="inputHorizontalPrimary" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control form-control-primary" id="inputHorizontalPrimary" placeholder="name@example.com">
                                                        <div class="form-control-feedback">Primary! You've done it.</div>
                                                        <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row has-warning">
                                                    <label for="inputHorizontalWarning" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com">
                                                        <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                                                        <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row has-danger">
                                                    <label for="inputHorizontalDnger" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com">
                                                        <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                                                        <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                                    </div>
                                                </div> --}}


                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                                
                            @show

                            {{-- final pagina --}}
                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2020 Ambiente de aprendizaje by SENA.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{asset('dashor/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('dashor/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('dashor/assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('dashor/assets/js/detect.js')}}"></script>
        <script src="{{asset('dashor/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('dashor/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('dashor/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('dashor/assets/js/waves.js')}}"></script>
        <script src="{{asset('dashor/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('dashor/assets/js/jquery.scrollTo.min.js')}}"></script>

        @yield('librerias')



        <!-- App js -->
        <script src="{{asset('dashor/assets/js/app.js')}}"></script>

    </body>
</html>