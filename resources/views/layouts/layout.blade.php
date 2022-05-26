<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title> Welcome to &amp; Membership Portal</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/slick.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css" />

</head>
<style>
    .progress {
        background-color: #bf0010 !important;
        margin-left: 40px !important;
        margin-right: 40px !important;
        max-height: 12px;
        text-align: center;

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
    }

    .card:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .card {
        border-radius: 25px;
        background: white !important;
        /* background-color: #f2b7b7; */
        /* background-color: #f7b42c;
        background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%); */

        border-color: #bf0010 !important;
        border-bottom: 5px solid #bf0010 !important;
        overflow: auto;


    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {

        /* background-color: #007bff !important; */
        /* background-color: #f7b42c !important;
        background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%) !important; */
        border-radius: 25px;
        border-bottom: 5px solid #004e75 !important;
        color: #004e75 !important;
    }

    .nav-link {
        color: #004e75 !important;

    }


    .card::-webkit-scrollbar {
        display: none;
    }
    .whiteBox::-webkit-scrollbar {
        display: none;
    }

    .whiteBox:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }

    .whiteBox {
        border-radius: 18px;
        /* background-image: url('/canadaFlag/can2.png'); */
        /* background-color:#f29191; */
        /* background-color: #f7b42c !important;
        background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%) !important; */

        border-left: 1px solid #bf0010 !important;
        border-right: 1px solid #bf0010 !important;
        border-top: 1px solid #bf0010 !important;
        border-bottom: 5px solid #bf0010 !important;
        overflow: auto;

    }

    .whiteBoxtab {
        background: white !important;
        border-left: 1px solid #bf0010 !important;
        border-right: 1px solid #bf0010 !important;
        border-top: 1px solid #bf0010 !important;
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
        color: #004e75 !important;
    }
</style>

<body>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/float-panel.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slick.js')}}"></script>
    <script src="js/countrySelect.js"></script>
    <script src="https://kit.fontawesome.com/da7b5e75f1.js" crossorigin="anonymous"></script>



    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

    <!-- Header -->
    @include('layouts.header')
    <!-- content -->
    @yield('content')
    <!-- footer -->
    @include('layouts.footer')


</body>

</html>