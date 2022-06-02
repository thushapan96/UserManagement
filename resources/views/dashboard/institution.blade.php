@extends('layouts.layout')
@section('content')

<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);



    html,
    body {
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        height: 100%;
        width: 100%;
        background: #FFF;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
    }

    .wrapper {
        display: table;
        height: 100%;
        width: 100%;
    }

    .container-fostrap {
        display: table-cell;
        padding: 1em;
        text-align: center;
        vertical-align: middle;
    }

    .fostrap-logo {
        width: 100px;
        margin-bottom: 15px
    }

    h1.heading {
        color: #fff;
        font-size: 1.15em;
        font-weight: 900;
        margin: 0 0 0.5em;
        color: #505050;
    }

    @media (min-width: 450px) {
        h1.heading {
            font-size: 3.55em;
        }
    }

    @media (min-width: 760px) {
        h1.heading {
            font-size: 3.05em;
        }
    }

    @media (min-width: 900px) {
        h1.heading {
            font-size: 3.25em;
            margin: 0 0 0.3em;
        }
    }

    .card {
        display: block;
        height: 300px;
        width: 90%;
        margin-bottom: 20px;
        line-height: 1.42857143;
        border-radius: 5px;
        overflow: auto;
        box-shadow: 0 7px 9px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        transition: box-shadow .25s;
    }

    .card:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .img-card {
        width: 100%;
        height: 200px;
        border-top-left-radius: 2px;
        border-top-right-radius: 2px;
        display: block;
        overflow: hidden;
    }

    .img-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: all .25s ease;
    }

    .card-content {
        padding: 15px;
        text-align: left;
        height: 200px;
        overflow: auto;
    }

    .card-title {
        margin-top: 0px;
        float: none !important;
        font-weight: 700;
        font-size: 1.65em;
        text-align: center;
    }

    .card-text {
        margin-top: 10%;
        text-align: center;
    }

    .card-title a {
        color: #000;
        text-decoration: none !important;
        text-align: center;
    }

    .card-read-more {
        border-top: 2px solid #D4D4D4;
    }

    .card-read-more a {
        text-decoration: none !important;
        padding: 10px;
        font-weight: 600;
        text-transform: uppercase;
        height: 20px;
        line-height: 10px;
    }

    .example::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .example {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>

<div style="margin-left:5%;margin-right:5%">
    <div class="col-10 input-group float-center">
        <div class="form-outline">
            <input type="search" id="form1" class="form-control" placeholder="Search" />

        </div>
        <button type="button" class="btn btn-primary">
            <i class="fas fa-search"></i>
        </button>
    </div>
    <br>
    <div>

        <div class="row">
            @if($institutions)


            @foreach($institutions as $row)

            <div class="col-sm-4">
                <div class="card" style="">
                    <div class=" " style="background-color: #f5f5f5!important; box-shadow: none ; border-radius:0%">
                        <div class="card-content example" style="text-align:center">

                            <h4 class="card-title">
                                {{$row->type}}
                            </h4>

                            <p class="card-text ">{{$row->name}}</p>


                            <p class="card-text ">
                                @if($row->offer_course)
                                @foreach($row->offer_course as $service)
                                {{$service}},
                                @endforeach
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="card-read-more" >
                        <a href="{{route('dashboard.institution.view',['id' => $row->id])}}" class="btn btn-link btn-block">
                            View More
                        </a>
                    </div>

                </div>
            </div>

            @endforeach

            @endif
        </div>
    </div>

</div>


@if($unique == 'School')
<script>
    $(document).ready(function() {
        $(".dash").removeClass('active')
        $(".institution1").addClass('active')
    })
</script>
@elseif($unique == 'College')
<script>
    $(document).ready(function() {
        $(".dash").removeClass('active')
        $(".institution2").addClass('active')
    })
</script>
@else
<script>
    $(document).ready(function() {
        $(".dash").removeClass('active')
        $(".institution3").addClass('active')
    })
</script>
@endif




@endsection