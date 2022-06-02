<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.js')}}"></script>

</head>
<style>
    .img {
        border: 1px solid #ddd;
        opacity: 1;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }

    textarea {
        white-space: pre-wrap;
        text-align: justify;
        padding: 10px;

    }

    .progress {
        background-color: #bf0010 !important;
        margin-left: 0px !important;
        margin-right: 40px !important;
        max-height: 12px;
        text-align: center;
        width: 100%;

    }

    .StayConnected h1 {
        margin-bottom: 20px;
    }

    label {
        text-transform: capitalize;
        font-weight: 500 !important;
    }

    a {
        text-transform: capitalize;
    }

    span {
        text-transform: capitalize;
    }

    strong {
        text-transform: capitalize;
        color: #00000078 !important;
    }

    .card:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .card {
        height: auto !important;
        /* background: white !important; */
        /* background-color: #f2b7b7; */
        /* background-color: #f7b42c;
        background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%); */

        /* border-color: #bf0010 !important; */
        /* border-bottom: 5px solid #004e75 !important; */
        overflow: auto;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        padding-left: 30.5px !important;
        padding-right: 30.5px;
        padding-top: 30.5px;
        padding-bottom: 10.5px;
        background-color: white !important;


    }

    .whiteBox {
        /* background-image: url('/canadaFlag/can2.png'); */
        /* background-color:#f29191; */
        /* background-color: #f7b42c !important;
        background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%) !important; */

        /* border-left: 1px solid #bf0010 !important;
        border-right: 1px solid #bf0010 !important;
        border-top: 1px solid #bf0010 !important; */
        height: auto !important;
        background-color: white !important;
        /* border-bottom: 5px solid #004e75 !important; */
        overflow: auto;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 0px !important;
        padding-left: 30.5px !important;
        padding-right: 30.5px;
        padding-top: 30.5px;
        padding-bottom: 10.5px;
        /* background: white !important; */


    }


    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {

        /* background-color: #007bff !important; */
        /* background-color: #f7b42c !important;
        background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%) !important; */
        background-color: #00838f !important;
        /* border-bottom: 5px solid #004e75 !important; */
        color: white !important;
        border-radius: 90px;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }

    .nav-link {
        color: #004e75;

    }

    .main-header .nav-link {
        color: white !important;

    }

    /* remove scroll bar */
    .card::-webkit-scrollbar {
        display: none;
    }

    .whiteBox::-webkit-scrollbar {
        display: none;
    }

    .whiteBox:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }


    .whiteBoxtab {
        /* background: white !important; */
        background-color: #f5f5f5 !important;
        /* border-left: 1px solid #bf0010 !important;
        border-right: 1px solid #bf0010 !important;
        border-top: 1px solid #bf0010 !important; */
        border-bottom: 5px solid #bf0010 !important;
        border-radius: 50px;
        padding: 1px !important;
    }

    button {
        background-color: #004e75 !important;
        /* background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%) !important; */
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: black !important;
        text-transform: capitalize;

    }

    .main-header {
        border-bottom: 1px solid #dee2e6;
        z-index: 1034;
        font-size: 18px;
        font-weight: 500;
    }

    .main-sidebar i {
        color: black !important;

    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <a class="navbar-brand" href="/"><img src="{{asset('images/logo.png')}}" width="200" alt="Logo"></a>
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" style=" box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background: #00838f;height:54px">
          
                <ul class="navbar-nav col-md-2" style="margin-left:0%;">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav col-md-9">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('whycanada')}}">Why Canada</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> Services</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('dashboard.consultant')}}">Consultant</a>
                            <a class="dropdown-item" href="{{route('dashboard.business')}}">Business</a>
                            <a class="dropdown-item" href="{{route('dashboard.institution')}}">Institution</a>

                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>



                </ul>
          
            <div class="col-md-1">
                @php
                $profile_img= \App\Models\User::where('id', Auth::user()->id )->value('img')
                @endphp
                @if($profile_img)

                <img class="rounded-circle mt-1 img float-left" style="width:40px !important;height:40px; border: none !important;" src="{{url('files/'.$profile_img)}}">

                @else

                <img class="rounded-circle mt-1 img float-left" style="width:40px !important;height:40px; border: none !important;"  src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">

                @endif
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-white-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('canadainspair')}}" class="brand-link">
                <img src="{{asset('images/logo.png')}}" width="200" alt="Logo">

            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link dash dashboard ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>

                                Dashboard
                                <i class="right fas fa-angle-left"></i>

                            </a>

                        </li>



                        @if(Auth::user())

                        @if((\App\Models\Consultant::where(['user_id' => auth()->user()->id])->first()) && auth()->user()->service_type == 'Consultation')
                        <li class="nav-item ">
                            <a class="nav-link dash profile" href="{{route('consultantProfile')}}"><i class="nav-icon fa fa-user"></i>
                                profile
                            </a>
                        </li>
                        @elseif((\App\Models\Institution::where(['user_id' => auth()->user()->id])->first()) && auth()->user()->service_type == 'Institution')
                        <li class="nav-item">
                            <a class="nav-link dash profile" href="{{route('institudeProfile')}}"> <i class="nav-icon fa fa-user"></i>
                                profile
                            </a>
                        </li>
                        @elseif((\App\Models\Consultant::where(['user_id' => auth()->user()->id])->first()) && auth()->user()->service_type == 'Business')
                        <li class="nav-item">
                            <a class="nav-link dash profile" href="{{route('businessProfile')}}"><i class="nav-icon fa fa-user"></i>
                                profile
                            </a>
                        </li>
                        @elseif((\App\Models\Personal::where(['user_id' => auth()->user()->id])->first()) && (auth()->user()->service_type != 'Business' && auth()->user()->service_type != 'Institution' && auth()->user()->service_type != 'Consultation'))
                        <li class="nav-item">
                            <a class="nav-link dash profile" href="{{route('personalProfile')}}"><i class="nav-icon fa fa-user"></i>
                                profile
                            </a>
                        </li>
                        @endif
                        @endif


                        <li class="nav-item">
                            <a href="#" class="nav-link dash   institution ">
                                <i class="nav-icon fa fa-university"></i>

                                Institution
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">3</span>

                            </a>
                            <ul class="nav nav_treeview institution_treeview" style="margin-left: 10%;">
                                <li class="nav-item " style="width:85%">
                                    <a href="{{route('dashboard.view.school')}}" class="nav-link dash school  institution1" style="width:100%">
                                        <i class="fas fa-school nav-icon"></i>
                                        school
                                    </a>
                                </li>
                                <li class="nav-item" style="width:85%">
                                    <a href="{{route('dashboard.view.college')}}" class="nav-link dash college institution2" style="width:100%">
                                        <i class="fas fa-book-open nav-icon"></i>
                                        College
                                    </a>
                                </li>
                                <li class="nav-item" style="width:85%">
                                    <a href="{{route('dashboard.view.university')}}" class="nav-link dash university institution3" style="width:100%">
                                        <i class="fas fa-university nav-icon"></i>
                                        University
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dash consultant">
                                <i class="nav-icon fa fa-building"></i>

                                Consultant
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">2</span>

                            </a>
                            <ul class="nav  consultant_treeview" style="margin-left: 10%;">
                                <li class="nav-item " style="width:85%">
                                    <a href="{{route('dashboard.view.consultant')}}" class="nav-link dash consultant1" style="width:100%">
                                        <i class="fas fa-industry nav-icon"></i>
                                        RCIC Consultant
                                    </a>
                                </li>
                                <li class="nav-item " style="width:85%">
                                    <a href="{{route('dashboard.view.immigration')}}" class="nav-link dash consultant2" style="width:100%">
                                        <i class="fa fa-plane nav-icon "></i>

                                        immigration
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="pages/layout/boxed.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>University</p>
                                    </a>
                                </li> -->

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard.business')}}" class="nav-link dash business">
                                <i class="nav-icon fas fa-handshake"></i>

                                business

                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dash enquiries">
                                <i class="nav-icon fa fa-bell"></i>

                                enquiries
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dash report ">
                                <i class="nav-icon fa fa-book"></i>

                                report

                            </a>

                        </li>


                        @if(Auth::user())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="nav-icon fa fa-sign-out-alt"></i>
                                logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">
                                <i class="nav-icon fas fa-sign-in-alt"></i>
                                Login
                            </a>
                        </li>
                        @endif

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="max-height:2500px">
            <!-- Content Header (Page header) -->
            <div class="content-header">

            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">

                @yield('content')


            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



    </div>








</body>
<script>
    $(document).ready(function() {
        $('.institution').click(function() {
            $('.institution_treeview').addClass('nav-treeview')
        })
        $('.consultant').click(function() {
            $('.consultant_treeview').addClass('nav-treeview')
        })

    })
</script>

</html>