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
@php
                $DashboardId = \App\Models\Permisson::where(['name' => 'Dashboard'])->value('id');
                $DashboardIdExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $DashboardId)->first();

                $ReportsEnquiry = \App\Models\Permisson::where(['name' => 'Reports Enquiry'])->value('id');
                $ReportsEnquiryExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ReportsEnquiry)->first();

                $ReportsMembership = \App\Models\Permisson::where(['name' => 'Reports Membership'])->value('id');
                $ReportsMembershipExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ReportsMembership)->first();

                $ReportsAccounts = \App\Models\Permisson::where(['name' => 'Reports Accounts'])->value('id');
                $ReportsAccountsExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ReportsAccounts)->first();

                $settingId = \App\Models\Permisson::where(['name' => 'Settings'])->value('id');
                $settingIdExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $settingId)->first();

                $CandidateformsViewId = \App\Models\Permisson::where(['name' => 'Candidate forms View'])->value('id');
                $CandidateformsViewIdExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $CandidateformsViewId)->first();

                $ServiceProviderformsviewId = \App\Models\Permisson::where(['name' => 'Service Provider forms view'])->value('id');
                $ServiceProviderformsviewIdExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ServiceProviderformsviewId)->first();

                $CandidateEnquiryId = \App\Models\Permisson::where(['name' => 'Candidate Enquiry'])->value('id');
                $CandidateEnquiryIdExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $CandidateEnquiryId)->first();

                $ServiceProviderEnquiryId = \App\Models\Permisson::where(['name' => 'Service Provider Enquiry'])->value('id');
                $ServiceProviderEnquiryIdExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ServiceProviderEnquiryId)->first();

                $UserManagementViewId = \App\Models\Permisson::where(['name' => 'User Management View'])->value('id');
                $UserManagementViewIdExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $UserManagementViewId)->first();

                $UserManagementAddId = \App\Models\Permisson::where(['name' => 'User Management Add'])->value('id');
                $UserManagementAddIdExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $UserManagementAddId)->first();

                $UserManagementEditId = \App\Models\Permisson::where(['name' => 'User Management Edit'])->value('id');
                $UserManagementEditIdExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $UserManagementEditId)->first();

                $UserManagementDeleteId = \App\Models\Permisson::where(['name' => 'User Management Delete'])->value('id');
                $UserManagementDeleteIdExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $UserManagementDeleteId)->first();

                $AccountsId = \App\Models\Permisson::where(['name' => 'Accounts'])->value('id');
                $AccountsIdExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $AccountsId)->first();

                $ReportsEnquiryId = \App\Models\Permisson::where(['name' => 'Reports Enquiry'])->value('id');
                $ReportsEnquiryExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ReportsEnquiryId)->first();

                $ReportsMembershipId = \App\Models\Permisson::where(['name' => 'Reports Membership'])->value('id');
                $ReportsMembershipIdExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ReportsMembershipId)->first();

                $ReportsAccountsId = \App\Models\Permisson::where(['name' => 'Reports Accounts'])->value('id');
                $ReportsAccountsIdExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ReportsAccountsId)->first();

                $PrintId = \App\Models\Permisson::where(['name' => 'Print'])->value('id');
                $PrintIdExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $PrintId)->first();

                $ExportId = \App\Models\Permisson::where(['name' => 'Export'])->value('id');
                $ExportIdExist = \App\Models\RolePermisson::where(['role_id' => Auth::guard('admin')->user()->role_id])->where('permisson_id', $ExportId)->first();

                @endphp
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

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


                        <a href="#"><img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="" style="width:38px;height:38px"></a>

                        <div class="uk-navbar-dropdown uk-dropdown-small">
                            <ul class="uk-nav uk-nav-navbar">

                                @if(Auth::guard('admin')->user())
                                <li title="logout">
                                    <a onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <span class="uk-nav-icon"></span>
                                        <span class="uk-nav-title">logout</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('adminlogout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                @else
                                <li title="login">
                                    <a href="{{route('adminlogin')}}">
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
                        <!-- <a><span style="color:#d81400;font-size: 17px;">Profile</span></a> -->
                       
                        <ul class="sc-sidebar-menu " style="">

                            @if($DashboardIdExist)
                            <li title="" class="">
                                <a href="#">
                                    <span class="uk-nav-icon"><i class="mdi mdi-view-dashboard-variant"></i>

                                    </span><span class="uk-nav-title">Dashboard</span>
                                </a>

                            </li>
                            @endif
                            @if($CandidateformsViewIdExist)
                            <li title="profile" class="page-can page-active">
                                <a href="{{route('admin.candidate.view')}}">
                                    <span class="uk-nav-icon"><i class="nav-icon fa fa-user"></i>
                                    </span><span class="uk-nav-title">Candidate</span>
                                </a>
                            </li>
                            @endif
                            @if($ServiceProviderformsviewIdExist)
                            <li title="institution" class="page-institution page-active">
                                <a href="#">
                                    <span class="uk-nav-icon"> <i class="nav-icon fa fa-university"></i></span>
                                    <span class="uk-nav-title">institution</span>
                                </a>

                                <ul class="sc-sidebar-menu-sub">
                                    <li class="page-School page-active">

                                        <a href="{{route('admin.school.view')}}"> School </a>

                                    </li>
                                    <li class="page-College page-active">

                                        <a href="{{route('admin.college.view')}}"> College </a>

                                    </li>
                                    <li class="page-University page-active">
                                        <a href="{{route('admin.university.view')}}"> university </a>

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

                                        <a href="{{route('admin.consultant.view')}}"> RCIC Consultant </a>

                                    </li>
                                    <li class="page-immigration page-active">

                                        <a href="{{route('admin.immigration.view')}}"> immigration </a>

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

                                        <a href="{{route('admin.business.view')}}">CA & TC </a>

                                    </li>

                                </ul>

                            </li>
                            @endif
                            @if($CandidateEnquiryIdExist || $ServiceProviderEnquiryIdExist)
                            <li title="enquiries" class="page-enquiries page-active">
                                <a href="#">
                                    <span class="uk-nav-icon"><i class="fas fa-bell"></i>
                                    </span><span class="uk-nav-title">pending enquiries</span>
                                </a>
                                <ul class="sc-sidebar-menu-sub">
                                    @if($CandidateEnquiryIdExist)
                                    <li class=" page-active">
                                        <a href="{{route('admin.enquiry.list.candidates')}}"> Candidates</a>
                                    </li>
                                    @endif
                                    @if($ServiceProviderEnquiryIdExist)
                                    <li class=" page-active">
                                        <a href="#"> Institution</a>
                                        <ul class="sc-sidebar-menu-sub">


                                            <li class="page-active">
                                                <a href="{{route('admin.enquiry.list.school')}}" style="left: 18px !important;width: 70%;"> school</a>
                                            </li>
                                            <li class=" page-active">
                                                <a href="{{route('admin.enquiry.list.college')}}" style="left: 18px !important;width: 70%;"> college</a>
                                            </li>
                                            <li class=" page-active">
                                                <a href="{{route('admin.enquiry.list.university')}}" style="left: 18px !important;width: 70%;"> university</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class=" page-active">
                                        <a href="#"> Consultant</a>
                                        <ul class="sc-sidebar-menu-sub">
                                            <li class=" page-active">
                                                <a href="{{route('admin.enquiry.list.consultant')}}" style="left: 18px !important;width: 70%;"> RCIC </a>
                                            </li>
                                            <li class=" page-active">
                                                <a href="{{route('admin.enquiry.list.immigration')}}" style="left: 18px !important;width: 70%;"> immigration</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" page-active">
                                        <a href="{{route('admin.enquiry.list.business')}}"> Business</a>
                                    </li>
                                    @endif
                                </ul>
                            </li>
                            @endif
                            @if($UserManagementDeleteIdExist || $UserManagementEditIdExist || $UserManagementAddIdExist || $UserManagementViewIdExist)
                            <li title="" class="page-Ma page-active">
                                <a href="{{route('admin.index')}}">
                                    <span class="uk-nav-icon"><i class="fa fa-users"></i>

                                    </span><span class="uk-nav-title">User Management</span>
                                </a>

                            </li>
                            @endif
                            @if($AccountsIdExist)
                            <li title="" class=" page-active">
                                <a href="#">
                                    <span class="uk-nav-icon">
                                        <i class="mdi mdi-receipt"></i>
                                    </span><span class="uk-nav-title">Accounts</span>
                                </a>

                            </li>
                            @endif
                            @if( $ReportsEnquiryExist || $ReportsMembershipExist || $ReportsAccountsIdExist)
                            <li title="" class=" page-active">
                                <a href="#">
                                    <span class="uk-nav-icon"><i class="mdi mdi-note-outline"></i>

                                    </span><span class="uk-nav-title">Reports</span>
                                </a>
                                <ul class="sc-sidebar-menu-sub">
                                    @if( $ReportsMembershipExist )
                                    <li class=" page-active">

                                        <a href="#"> Membership expiry </a>

                                    </li>
                                    @endif
                                    @if( $ReportsAccountsIdExist )
                                    <li class=" page-active">

                                        <a href="#"> Accounting </a>

                                    </li>
                                    @endif
                                    @if( $ReportsEnquiryExist )
                                    <li class=" page-active">

                                        <a href="#"> enquiries</a>

                                    </li>
                                    @endif
                                </ul>
                            </li>
                            @endif


                            @if($settingIdExist)
                            <li title="" class=" page-active">
                                <a href="{{route('admin.privillage')}}">
                                    <span class="uk-nav-icon"> <i class="fas fa-cog"></i>

                                    </span><span class="uk-nav-title">Settings</span>
                                </a>

                            </li>
                            @endif
                            <br>

                            @if(Auth::guard('admin')->user())
                            <li title="logout" class="sc-page-active  page-active">
                                <a onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <span class="uk-nav-icon"><i class="nav-icon fa fa-sign-out-alt"></i></span>
                                    <span class="uk-nav-title">logout</span>
                                </a>

                                <form id="logout-form" action="{{ route('adminlogout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            @else
                            <li title="login" class="sc-page-active  page-active">
                                <a href="{{route('adminlogin')}}">
                                    <span class="uk-nav-icon"><i class="nav-icon fas fa-sign-in-alt"></i></span>
                                    <span class="uk-nav-title">Login</span>
                                </a>
                            </li>
                            @endif

                        </ul>
                    </li>



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
                loadjs('assets/js/views/pages/contact_list.min.js', {
                    success: function() {
                        $(function() {
                            scutum.pages.contactList.init()
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