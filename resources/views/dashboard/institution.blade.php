@extends('layouts.layoutss')
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
        width: 90%;
        height: 240px;
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


<div>

    <br>
    <ul id="sc-contact-list" class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>

        @if($institutions)


        @foreach($institutions as $row)

        <li>
            <div class="uk-card uk-card-hover ">
                <div class="uk-card-body sc-padding-remove">
                    <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                        <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-light-green-50">

                            <div class="sc-padding-medium uk-text-center">
                                @if($row->img)
                                <img src="{{url('files/'.$row->img)}}" class="sc-avatar sc-border" alt="xerdman" />
                                @else
                                <img class="rounded-circle  img " class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                @endif
                                <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                    {{$row->name}}
                                </p>
                                <p class="uk-margin-remove sc-color-secondary uk-text-medium"><a class="sc-button sc-button-primary sc-js-button-wave-light waves-effect waves-button waves-light sc-button sc-button-outline sc-button-outline-danger sc-button-mini" href="{{route('dashboard.institution.view',['id' => $row->id])}}">view more</a></p>
                            </div>
                        </div>
                        <div class="uk-width-2-3@l ">
                            <div class="sc-padding-medium">
                                <ul class="uk-list uk-list-divider">
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                        <div class="sc-list-body">
                                            <p class="uk-margin-remove sc-text-semibold">{{$row->phone}}</p>
                                        </div>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                        <div class="sc-list-body">
                                            <p class="uk-margin-remove">{{$row->email}}</p>
                                        </div>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                        <div class="sc-list-body">
                                            <p class="uk-margin-remove uk-text-wrap">{{$row->streat}} {{$row->city}} {{$row->region}} {{$row->country}}</p>
                                        </div>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                        <div class="sc-list-body">
                                            <p class="uk-margin-remove uk-text-wrap">
                                                @if($row->offer_course)
                                                @foreach($row->offer_course as $service)
                                                {{$service}},
                                                @endforeach
                                                @endif
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        @endforeach


        @endif

        </u1>

</div>
@if($unique == 'RCIC Consultant')
<script>
    $(document).ready(function() {
        $(".dash").removeClass('active')
        $(".consultant1").addClass('active')
    })
</script>
@else
<script>
    $(document).ready(function() {
        $(".dash").removeClass('active')
        $(".consultant2").addClass('active')
    })
</script>
@endif
@endsection