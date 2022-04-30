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
    <link rel="stylesheet" href="css/countrySelect.css">



</head>

<body>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
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