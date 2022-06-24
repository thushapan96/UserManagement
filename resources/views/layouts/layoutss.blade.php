<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Canada Inspire</title>
    <meta name="description" content="Scutum Admin Template" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/fav/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/fav/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/fav/favicon-16x16.png')}}">
    <link rel="mask-icon" href="{{asset('assets/img/fav/safari-pinned-tab.svg')}}" color="#5bbad5">


    <meta name="theme-color" content="#00838f">

    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

    <!-- polyfills -->
    <script src="{{asset('assets/js/vendor/polyfills.min.js')}}"></script>

    <!-- UIKit js -->
    <script src="{{asset('assets/js/uikit.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

    label {
        text-transform: capitalize;
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

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {

        text-transform: uppercase !important;
    }

    label:not(.form-check-label):not(.custom-file-label) {
        font-weight: 400;
    }

    fieldset {
        overflow: auto;

    }

    .card {
        overflow: auto;
    }

    .uk-card {
        overflow: auto;
    }

    .uk-flex-center {
        overflow: auto;
    }

    .uk-flex-center::-webkit-scrollbar {
        display: none;
    }

    fieldset::-webkit-scrollbar {
        display: none;
    }

    .card::-webkit-scrollbar {
        display: none;
    }

    .uk-card::-webkit-scrollbar {
        display: none;
    }

    textarea {
        padding: 20px;

    }

    .sc-padding-medium {
        padding: 12px !important;
        padding-top: 20px !important;
        padding-bottom: 20px !important;
    }

    #sc-sidebar-main .sc-sidebar-menu {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding-top: 5px !important;
        padding-bottom: 10px !important;
        line-height: 30px !important;
    }

    #sc-sidebar-main .sc-sidebar-menu>li>a .uk-nav-icon>i:before {
        font-size: 1.2rem !important;
        -webkit-transition: color 140ms cubic-bezier(.55, 0, .1, 1);
        transition: color 140ms cubic-bezier(.55, 0, .1, 1);
    }

    #sc-sidebar-main .sc-sidebar-menu li a {
        font-size: 15px !important
    }
    textarea::-webkit-scrollbar {
        display: none;
    }
    #sc-sidebar-main .sc-sidebar-menu>li>.sc-sidebar-menu-sub a {
        padding: 2px 14px 3px 64px !important;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        text-decoration: none;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        position: relative;
    }
</style>

<body>

    <script>
        // prevent FOUC
        var html = document.getElementsByTagName('html')[0];
        html.style.backgroundColor = '#f5f5f5';
        document.body.style.visibility = 'hidden';
        document.body.style.overflow = 'hidden';
        document.body.style.apacity = '0';
        document.body.style.maxHeight = "100%";
        console.log(1)
    </script>

    <header id="sc-header">
        <nav class="uk-navbar uk-navbar-container" data-uk-navbar="mode: click; duration: 360">
            <div class="uk-navbar-left nav-overlay-small uk-margin-right uk-navbar-aside">
                <a href="#" id="sc-sidebar-main-toggle"><i class="mdi mdi-backburger sc-menu-close hid"></i><i class="mdi mdi-menu sc-menu-open"></i></a>
                <div class="sc-brand uk-visible@s">
                    <a href="/"><img src="{{asset('images/logo.png')}}" width="150px" alt=""></a>
                </div>
            </div>
            <div class="uk-navbar-left nav-overlay uk-margin-right uk-visible@m">
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="javascript:void(0)" class="md-color-white sc-padding-remove-left"><i class="mdi mdi-view-grid"></i></a>
                        <div class="uk-navbar-dropdown sc-padding-medium">
                            <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-grid uk-grid-small" data-uk-grid>
                                <div>
                                    <a href="pages-mailbox.html" class="uk-flex uk-flex-column uk-flex-middle uk-box-shadow-hover-small sc-round sc-padding-small">
                                        <i class="mdi mdi-email-outline sc-icon-32 sc-text-lh-1 md-color-green-700"></i>
                                        <span class="uk-text-medium sc-color-primary">Mailbox</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="pages-poi_listing.html" class="uk-flex uk-flex-column uk-flex-middle uk-box-shadow-hover-small sc-round sc-padding-small">
                                        <i class="mdi mdi-map-marker sc-icon-32 sc-text-lh-1 md-color-red-700"></i>
                                        <span class="uk-text-medium sc-color-primary">POI</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="pages-chat.html" class="uk-flex uk-flex-column uk-flex-middle uk-box-shadow-hover-small sc-round sc-padding-small">
                                        <i class="mdi mdi-message-outline sc-icon-32 sc-text-lh-1 md-color-purple-700"></i>
                                        <span class="uk-text-medium sc-color-primary">Chat</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="plugins-calendar.html" class="uk-flex uk-flex-column uk-flex-middle uk-box-shadow-hover-small sc-round sc-padding-small">
                                        <i class="mdi mdi-calendar sc-icon-32 sc-text-lh-1 md-color-light-blue-700"></i>
                                        <span class="uk-text-medium sc-color-primary">Calendar</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="pages-user_profile.html" class="uk-flex uk-flex-column uk-flex-middle uk-box-shadow-hover-small sc-round sc-padding-small">
                                        <i class="mdi mdi-account sc-icon-32 sc-text-lh-1 md-color-blue-grey-700"></i>
                                        <span class="uk-text-medium sc-color-primary">Profile</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="plugins-charts.html" class="uk-flex uk-flex-column uk-flex-middle uk-box-shadow-hover-small sc-round sc-padding-small">
                                        <i class="mdi mdi-chart-multiline sc-icon-32 sc-text-lh-1 md-color-amber-700"></i>
                                        <span class="uk-text-medium sc-color-primary">Charts</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="nav-overlay nav-overlay-small uk-navbar-right uk-flex-1" hidden>
                <a class="uk-navbar-toggle uk-visible@m" data-uk-toggle="target: .nav-overlay; animation: uk-animation-slide-top" href="#">
                    <i class="mdi mdi-close sc-icon-24"></i>
                </a>
                <a class="uk-navbar-toggle uk-hidden@m uk-padding-remove-left" data-uk-toggle="target: .nav-overlay-small; animation: uk-animation-slide-top" href="#">
                    <i class="mdi mdi-close sc-icon-24"></i>
                </a>
                <div class="uk-navbar-item uk-width-expand uk-padding-remove-right">
                    <div class="uk-flex-1 uk-position-relative">
                        <input class="uk-search-input" type="search" placeholder="Search...">
                    </div>
                    <button class="sc-button sc-button-default sc-button-small sc-button-icon sc-button-flat uk-margin-small-left" type="button"><i class="mdi mdi-magnify sc-icon-24 md-color-white"></i></button>

                </div>
            </div>

            <div class="nav-overlay nav-overlay-small uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li>
                        <a class="uk-navbar-toggle uk-visible@m" href="#" data-uk-toggle="target: .nav-overlay; animation: uk-animation-slide-top"><i class="mdi mdi-magnify"></i></a>
                        <a class="uk-navbar-toggle uk-hidden@m" href="#" id="sc-search-main-toggle-mobile" data-uk-toggle="target: .nav-overlay-small; animation: uk-animation-slide-top"><i class="mdi mdi-magnify"></i></a>
                    </li>
                    <li class="uk-visible@l">
                        <a href="#" id="sc-js-fullscreen-toggle"><i class="mdi mdi-fullscreen sc-js-el-hide"></i><i class="mdi mdi-fullscreen-exit sc-js-el-show"></i></a>
                    </li>
                    <li class="uk-visible@s">
                        <a href="#" class="sc-text-semibold">
                            EN
                        </a>
                        <div class="uk-navbar-dropdown uk-dropdown-small">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Deutsch</a></li>
                                <li><a href="#">Español</a></li>
                                <li><a href="#">Français</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <span class="mdi mdi-email"></span>
                        </a>
                        <div class="uk-navbar-dropdown sc-padding-remove">
                            <div class="uk-panel uk-panel-scrollable uk-height-medium">
                                <ul class="uk-list uk-list-divider sc-js-edge-fix">
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon">
                                            <span class="sc-avatar-initials md-color-white md-bg-red-500" title="elvie.jakubowski">MO</span>
                                        </div>
                                        <a href="#" class="sc-list-body uk-display-block">
                                            <span class="uk-text-small uk-text-muted uk-width-expand">05:13 PM</span>
                                            <span class="uk-display-block uk-text-truncate">Expedita aut voluptatem labore explicabo consequatur dignissimos quia enim consequatur.</span>
                                        </a>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon">
                                            <img src="{{asset('assets/img/avatars/avatar_05_sm.png')}}" class="sc-avatar " alt="osbaldo.stracke" />
                                        </div>
                                        <a href="#" class="sc-list-body uk-display-block">
                                            <div class="uk-text-small uk-text-muted uk-width-expand">Feb 8, 2021</div>
                                            <span class="uk-display-block uk-text-truncate">Est magnam quod et aut amet.</span>
                                        </a>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon">
                                            <span class="sc-avatar-initials md-color-white md-bg-light-green-500" title="sgreenholt">KS</span>
                                        </div>
                                        <a href="#" class="sc-list-body uk-display-block">
                                            <span class="uk-text-small uk-text-muted uk-width-expand">03:13 PM</span>
                                            <span class="uk-display-block uk-text-truncate">Libero natus qui nisi quo est enim recusandae sit et reprehenderit ipsum.</span>
                                        </a>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon">
                                            <img src="{{asset('assets/img/avatars/avatar_06_sm.png')}}" class="sc-avatar " alt="wade21" />
                                        </div>
                                        <a href="#" class="sc-list-body uk-display-block">
                                            <span class="uk-text-small uk-text-muted uk-width-expand">Feb 7, 2021</span>
                                            <span class="uk-display-block uk-text-truncate">Iure aut libero expedita dolorum et rerum molestiae molestiae.</span>
                                        </a>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon">
                                            <img src="{{asset('assets/img/avatars/avatar_02_sm.png')}}" class="sc-avatar " alt="loy.vandervort" />
                                        </div>
                                        <a href="#" class="sc-list-body uk-display-block">
                                            <span class="uk-text-small uk-text-muted uk-width-expand">Feb 5, 2021</span>
                                            <span class="uk-display-block uk-text-truncate">Et in voluptate vero tempora occaecati atque et autem.</span>
                                        </a>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon">
                                            <span class="sc-avatar-initials md-color-white md-bg-purple-500" title="arlene.jerde">FA</span>
                                        </div>
                                        <a href="#" class="sc-list-body uk-display-block">
                                            <span class="uk-text-small uk-text-muted uk-width-expand">Feb 3, 2021</span>
                                            <span class="uk-display-block uk-text-truncate">Ut possimus architecto deleniti eos voluptatibus sed magnam facilis.</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="pages-mailbox.html" class="uk-flex uk-text-small sc-padding-small-ends sc-padding-medium">Show all in mailbox</a>
                        </div>
                    </li>
                    <li class="uk-visible@s">
                        <a href="#">
                            <span class="mdi mdi-bell uk-display-inline-block">
                                <span class="sc-indicator md-bg-color-red-600"></span>
                            </span>
                        </a>
                        <div class="uk-navbar-dropdown md-bg-grey-100">
                            <div class="sc-padding-medium sc-padding-small-ends">
                                <div class="uk-text-right uk-margin-medium-bottom">
                                    <button class="sc-button sc-button-default sc-button-outline sc-button-mini sc-js-clear-alerts">Clear all</button>
                                </div>
                                <ul class="uk-list uk-margin-remove" id="sc-header-alerts">
                                    <li class="sc-border sc-round md-bg-white">
                                        <div class="uk-margin-right uk-margin-small-left"><i class="mdi mdi-alert-outline md-color-red-600"></i></div>
                                        <div class="uk-flex-1 uk-text-small">
                                            Information Page Not Found!
                                        </div>
                                    </li>
                                    <li class="uk-margin-small-top sc-border sc-round md-bg-white">
                                        <div class="uk-margin-right uk-margin-small-left"><i class="mdi mdi-email-check-outline md-color-blue-600"></i></div>
                                        <div class="uk-flex-1 uk-text-small">
                                            A new password has been sent to your e-mail address.
                                        </div>
                                    </li>
                                    <li class="uk-margin-small-top sc-border sc-round md-bg-white">
                                        <div class="uk-margin-right uk-margin-small-left"><i class="mdi mdi-alert-outline md-color-red-600"></i></div>
                                        <div class="uk-flex-1 uk-text-small">
                                            You do not have permission to access the API!
                                        </div>
                                    </li>
                                    <li class="uk-margin-small-top sc-border sc-round md-bg-white">
                                        <div class="uk-margin-right uk-margin-small-left"><i class="mdi mdi-check-all md-color-light-green-600"></i></div>
                                        <div class="uk-flex-1 uk-text-small">
                                            Your enquiry has been successfully sent.
                                        </div>
                                    </li>
                                </ul>
                                <div class="uk-text-medium uk-text-center sc-js-empty-message sc-text-semibold sc-padding-ends" style="display: none">No alerts!</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        @php
                        $img = Auth::user()->img;
                        @endphp
                        @if($img)
                        <a href="#"><img src="{{url('files/'.$img)}}" alt="" style="width:38px;height:38px"></a>
                        @else
                        <a href="#"><img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="" style="width:38px;height:38px"></a>
                        @endif
                        <div class="uk-navbar-dropdown uk-dropdown-small">
                            <ul class="uk-nav uk-nav-navbar">
                                <li title="profile">
                                    @if(Auth::user())

                                    @if((\App\Models\Consultant::where(['user_id' => auth()->user()->id])->first()) && auth()->user()->service_type == 'Consultation')
                                    <a href="{{route('consultantProfile')}}">
                                        <span class="uk-nav-icon">
                                        </span><span class="uk-nav-title">profile</span>
                                    </a>
                                    @elseif((\App\Models\Institution::where(['user_id' => auth()->user()->id])->first()) && auth()->user()->service_type == 'Institution')
                                    <a href="{{route('institudeProfile')}}">
                                        <span class="uk-nav-icon">
                                        </span><span class="uk-nav-title">profile</span>
                                    </a>
                                    @elseif((\App\Models\Consultant::where(['user_id' => auth()->user()->id])->first()) && auth()->user()->service_type == 'Business')
                                    <a href="{{route('businessProfile')}}">
                                        <span class="uk-nav-icon">
                                        </span><span class="uk-nav-title">profile</span>
                                    </a>
                                    @elseif((\App\Models\Personal::where(['user_id' => auth()->user()->id])->first()) && (auth()->user()->service_type != 'Business' && auth()->user()->service_type != 'Institution' && auth()->user()->service_type != 'Consultation'))
                                    <a href="{{route('personalProfile')}}">
                                        <span class="uk-nav-icon">
                                        </span><span class="uk-nav-title">profile</span>
                                    </a>
                                    @endif
                                    @endif
                                </li>
                                <li><a href="pages-settings.html">Settings</a></li>
                                @if(Auth::user())
                                <li title="logout">
                                    <a onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <span class="uk-nav-icon"></span>
                                        <span class="uk-nav-title">logout</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                @else
                                <li title="login">
                                    <a href="{{route('login')}}">
                                        <span class="uk-nav-icon"></span>
                                        <span class="uk-nav-title">Login</span>
                                    </a>
                                </li>
                                @endif

                            </ul>
                        </div>
                    </li>
                </ul>
                <a href="#" class="sc-js-offcanvas-toggle md-color-white uk-margin-left uk-hidden@l">
                    <i class="mdi mdi-menu sc-offcanvas-open"></i>
                    <i class="mdi mdi-arrow-right sc-offcanvas-close"></i>
                </a>
            </div>
        </nav>
    </header>

    <aside id="sc-sidebar-main" class="sc-sidebar-info-fixed sideBar">
        <div class="uk-offcanvas-bar">
            <div class="sc-sidebar-main-scrollable" data-sc-scrollbar="visible-y">
                <ul class="sc-sidebar-menu ">

                    <li class="" style="padding:0 !important">
                        <a><span style="color:#d81400;font-size: 17px;">Menu</span></a>

                        <ul class="sc-sidebar-menu " style="">
                            <li title="" class="sc-page-active page-active">
                                <a href="{{route('indexx')}}">
                                    <span class="uk-nav-icon"><i class="mdi mdi-view-dashboard-variant"></i>

                                    </span><span class="uk-nav-title">Dashboard</span>
                                </a>

                            </li>

                            <li title="profile" class="page-Profile page-active">
                                @if(Auth::user())

                                @if((\App\Models\Consultant::where(['user_id' => auth()->user()->id])->first()) && auth()->user()->service_type == 'Consultation')
                                <a href="{{route('consultantProfile')}}">
                                    <span class="uk-nav-icon"><i class="nav-icon fa fa-user"></i>
                                    </span><span class="uk-nav-title">profile</span>
                                </a>
                                @elseif((\App\Models\Institution::where(['user_id' => auth()->user()->id])->first()) && auth()->user()->service_type == 'Institution')
                                <a href="{{route('institudeProfile')}}">
                                    <span class="uk-nav-icon"><i class="nav-icon fa fa-user"></i>
                                    </span><span class="uk-nav-title">profile</span>
                                </a>
                                @elseif((\App\Models\Consultant::where(['user_id' => auth()->user()->id])->first()) && auth()->user()->service_type == 'Business')
                                <a href="{{route('businessProfile')}}">
                                    <span class="uk-nav-icon"><i class="nav-icon fa fa-user"></i>
                                    </span><span class="uk-nav-title">profile</span>
                                </a>
                                @elseif((\App\Models\Personal::where(['user_id' => auth()->user()->id])->first()) && (auth()->user()->service_type != 'Business' && auth()->user()->service_type != 'Institution' && auth()->user()->service_type != 'Consultation'))
                                <a href="{{route('personalProfile')}}">
                                    <span class="uk-nav-icon"><i class="nav-icon fa fa-user"></i>
                                    </span><span class="uk-nav-title">profile</span>
                                </a>
                                @endif
                                @endif
                            </li>
                            <li title="Dashboards" class="page-Dashboards page-active">
                                <a href="">
                                    <span class="uk-nav-icon"><i class="fas fa-users"></i>
                                    </span><span class="uk-nav-title">Membership</span>
                                </a>

                            </li>
                            <li title="institution" class="page-institution page-active">
                                <a href="#">
                                    <span class="uk-nav-icon"> <i class="nav-icon fa fa-university"></i></span>
                                    <span class="uk-nav-title">institution</span>
                                </a>

                                <ul class="sc-sidebar-menu-sub">
                                    <li class="page-School page-active">

                                        <a href="{{route('dashboard.view.school')}}"> School </a>

                                    </li>
                                    <li class="page-College page-active">

                                        <a href="{{route('dashboard.view.college')}}"> College </a>

                                    </li>
                                    <li class="page-University page-active">
                                        <a href="{{route('dashboard.view.university')}}"> university </a>

                                    </li>

                                </ul>
                            </li>

                            <li title="consultant" class=" page-active">
                                <a href="#">
                                    <span class="uk-nav-icon"> <i class=" fa fa-building"></i>
                                    </span><span class="uk-nav-title">consultant</span>
                                </a>

                                <ul class="sc-sidebar-menu-sub">
                                    <li class="page-RCIC-Consultant page-active">

                                        <a href="{{route('dashboard.view.consultant')}}"> RCIC Consultant </a>

                                    </li>
                                    <li class="page-immigration page-active">

                                        <a href="{{route('dashboard.view.immigration')}}"> immigration </a>

                                    </li>

                                </ul>
                            </li>

                            <li title="Business">
                                <a href="">
                                    <span class="uk-nav-icon"><i class="nav-icon fas fa-handshake"></i>

                                    </span><span class="uk-nav-title">Business </span>
                                </a>
                                <ul class="sc-sidebar-menu-sub">
                                    <li class="page-CA page-active">

                                        <a href="{{route('dashboard.business')}}">CA & TC </a>

                                    </li>

                                </ul>

                            </li>


                            @if(auth()->user()->role == 'candidate')
                            <li title="CRS Calculator" class="page-Calculator page-active">
                                <a href="{{route('calculator')}}">
                                    <span class="uk-nav-icon"><i class="fa fa-calculator" aria-hidden="true"></i>

                                    </span><span class="uk-nav-title">CRS Calculator</span>
                                </a>


                            </li>

                            <li title="Educational Assessment" class="page-Educational page-active">
                                <a href="{{route('education')}}">
                                    <span class="uk-nav-icon"><i class="fab fa-readme"></i>
                                    </span><span class="uk-nav-title">Educ Assessment</span>
                                </a>
                            </li>
                            @else
                            <li title="enquiries" class="page-enquiries page-active">
                                <a href="#">
                                    <span class="uk-nav-icon"><i class="fas fa-bell"></i>
                                    </span><span class="uk-nav-title">enquiries</span>
                                </a>
                            </li>
                            @endif
                            <li title="report">
                                <a href="#">
                                    <span class="uk-nav-icon"><i class="fas fa-clipboard"></i>

                                    </span><span class="uk-nav-title">report</span>
                                </a>
                                <ul class="sc-sidebar-menu-sub">
                                    <li class="page-Summary page-active">

                                        <a href="#">Summary</a>

                                    </li>
                                    <li class="page-Details page-active">

                                        <a href="#">Details</a>

                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li class="" style="padding:0 !important">
                        <a><span style="color:#d81400;font-size: 17px;">Application</span></a>

                        <ul class="sc-sidebar-menu">
                            <li title="Appointment Scheduler" class=" page-active">
                                <a href="pages-chat.html">
                                    <span class="uk-nav-icon"><i class="far fa-calendar-alt"></i>
                                    </span><span class="uk-nav-title">Appointment Scheduler</span>
                                </a>
                            </li>

                            <li title="QuickBooks" class=" page-active">
                                <a href="pages-chat.html">
                                    <span class="uk-nav-icon"><i class="fab fa-leanpub"></i>

                                    </span><span class="uk-nav-title">QuickBooks </span>
                                </a>
                            </li>

                            <li title="CRM" class=" page-active">
                                <a href="pages-chat.html">
                                    <span class="uk-nav-icon"><i class="fas fa-sign-language"></i>

                                    </span><span class="uk-nav-title">CRM </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="" style="padding:0 !important">
                        <a><span style="color:#d81400;font-size: 17px;">Utilities</span></a>

                        <ul class="sc-sidebar-menu">

                            <li title="Chat" class=" page-active">
                                <a href="pages-chat.html">
                                    <span class="uk-nav-icon">
                                        <i class="fas fa-cog"></i>
                                    </span><span class="uk-nav-title">Settings</span>
                                </a>
                            </li>

                            <li title="Chat" class=" page-active">
                                <a href="pages-chat.html">
                                    <span class="uk-nav-icon"><i class="mdi mdi-message-outline"></i>

                                    </span><span class="uk-nav-title">Chat</span>
                                </a>
                            </li>

                            <li title="Invoices" class=" page-active">
                                <a href="pages-invoices.html">
                                    <span class="uk-nav-icon"><i class="mdi mdi-receipt"></i>

                                    </span><span class="uk-nav-title">Invoices</span>
                                </a>
                            </li>

                            <li title="Mailbox" class=" page-active">
                                <a href="pages-mailbox.html">
                                    <span class="uk-nav-icon"><i class="mdi mdi-email-outline"></i>

                                    </span><span class="uk-nav-title">Mailbox</span>
                                </a>
                            </li>

                            <li title="Task Board" class=" page-active">
                                <a href="pages-task_board.html">
                                    <span class="uk-nav-icon"><i class="mdi mdi-calendar-text"></i>

                                    </span><span class="uk-nav-title">Task Board</span>
                                </a>
                            </li>

                            <li title="Notes" class=" page-active">
                                <a href="pages-notes.html">
                                    <span class="uk-nav-icon"><i class="mdi mdi-note-outline"></i>

                                    </span><span class="uk-nav-title">Notes</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    @if(Auth::user())
                    <li class="" style="padding:0 !important">
                        <a><span style="color:#d81400;font-size: 17px;">Canada inspire</span></a>

                        <ul class="sc-sidebar-menu">


                            @if((auth()->user()->service_type == 'Business' || auth()->user()->service_type == 'Institution' || auth()->user()->service_type == 'Consultation'))
                            <li title="Notes" class="page-Services page-active">
                                <a href="{{route('canadaInspire')}}">
                                    <span class="uk-nav-icon"><i class="fas fa-people-carry"></i>
                                    </span><span class="uk-nav-title">Our Services</span>
                                </a>
                            </li>
                            @endif
                            <li title="Notes" class="page-Feedback page-active">
                                <a href="{{route('feedback')}}">
                                    <span class="uk-nav-icon"><i class="fas fa-pen-alt"></i>

                                    </span><span class="uk-nav-title">Your Feedback</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <br>
                    @endif
                    @if(Auth::user())
                    <li title="logout">
                        <a onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <span class="uk-nav-icon"><i class="nav-icon fa fa-sign-out-alt"></i></span>
                            <span class="uk-nav-title">logout</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li title="login">
                        <a href="{{route('login')}}">
                            <span class="uk-nav-icon"><i class="nav-icon fas fa-sign-in-alt"></i></span>
                            <span class="uk-nav-title">Login</span>
                        </a>
                    </li>
                    @endif
                </ul>

            </div>

        </div>
    </aside>

    <div id="sc-page-wrapper">
        <div id="sc-page-content">
            @yield('content')

        </div>
    </div>

    <!-- async assets-->
    <script src="{{asset('assets/js/vendor/loadjs.min.js')}}"></script>

    <script>
        console.log(3)
        var html = document.getElementsByTagName('html')[0];
        // ----------- CSS
        // md icons
        loadjs("{{asset('assets/css/materialdesignicons.min.css')}}", {
            preload: true
        });
        // UIkit
        loadjs("{{asset('node_modules/uikit/dist/css/uikit.min.css')}}", {
            preload: true
        });
        // themes
        loadjs("{{asset('assets/css/themes/themes_combined.min.css')}}", {
            preload: true
        });
        // mdi icons (base64) & google fonts (base64)
        loadjs([
            "{{asset('assets/css/fonts/mdi_fonts.css')}}",
            "{{asset('assets/css/fonts/roboto_base64.css')}}",
            "{{asset('assets/css/fonts/sourceCodePro_base64.css')}}"
        ], {
            preload: true
        });
        // main stylesheet
        loadjs("{{asset('assets/css/main.min.css')}}", function() {});
        // vendor
        loadjs("{{asset('assets/js/vendor.min.js')}}", function() {
            // scutum common functions/helpers
            loadjs("{{asset('assets/js/scutum_common.min.js')}}", function() {
                scutum.init();
                loadjs("{{asset('assets/js/views/dashboard/dashboard_v1.js')}}", {
                    success: function() {
                        $(function() {
                            scutum.dashboard.init()
                        });
                    }
                })

                // show page
                setTimeout(function() {
                    // clear styles (FOUC)
                    $(html).css({
                        'backgroundColor': '',
                    });
                    $('body').css({
                        'visibility': '',
                        'overflow': '',
                        'apacity': '',
                        'maxHeight': ''
                    });
                }, 100);
                // style switcher
                loadjs([
                    "{{asset('assets/js/style_switcher.min.js')}}",
                    "{{asset('assets/css/plugins/style_switcher.min.css')}}"
                ], {
                    success: function() {
                        $(function() {
                            scutum.styleSwitcher();
                        });
                    }
                });
            });
        });

        console.log(4)
    </script>



</body>


</html>