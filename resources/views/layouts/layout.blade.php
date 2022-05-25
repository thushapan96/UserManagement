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
        background-color:#f2b7b7;


    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #007bff !important;
        border-radius: 25px;
    }

    .whiteBox:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       
    }
    .whiteBox{
        border-radius: 18px;
        /* background-image: url('/canadaFlag/can2.png'); */
        /* background-color:#f29191; */
        background-color:#f2b7b7;
        border-color: red;
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