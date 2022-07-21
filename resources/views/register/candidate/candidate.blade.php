@extends('layouts.layout')

@section('content')
<style>

</style>
@if($message = Session::get('registermessage'))
<script>
    Swal.fire(
        'Success',
        'Successfully Registered!',
        'success'
    )
</script>
@endif
<link rel="stylesheet" href="css/countrySelect.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/loadingio/ldbutton@v1.0.1/dist/ldbtn.min.css" />



<!-- Subscribe & Stay Connected. Start -->
<section>

    <div class="col-md-10" style="margin-left:auto !important;margin-right:auto !important">
        <div class="alert-danger" style="background:none !important">

        </div>
        <u1 class="col-md-8" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:auto !important;margin-right:auto !important">
            <li class="nav-linkk " id="amenu"><a style="cursor:pointer;padding: 0.5rem 1.8rem;" aria-current="page"> personal </a></li>
            <li class="nav-linkk " id="amenu1"><a style="cursor:pointer;padding: 0.5rem 1.8rem;">academic </a></li>
            <li class="nav-linkk " id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1.8rem;">work</a></li>
            <li class="nav-linkk" id="amenu3"><a style="cursor:pointer;padding: 0.5rem  1.8rem;">sponsor</a></li>

        </u1>

        <div class="" style="margin-left:auto !important;margin-right:auto !important">

            <div class="progress mt-1">
                <div class="progress-bar progress-bar-danger bg-danger progress-bar-striped " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%;background-color:#004e75 !important" style="cursor:pointer;padding: .15rem 0.5rem !important;">

                </div>
            </div>
        </div>
        <br>
        <u1 class="uk-switcher" class="">
            <li id='menu' class='tab-pane '>
                <div class='uk-card ' style="">
                    <div class="uk-card-body sc-padding-medium">
                        <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                            @if($personal)
                            @include('register.candidate.personalEdit')
                            @else
                            @include('register.candidate.personal')
                            @endif
                        </fieldset>
                    </div>
                </div>
            </li>
            <li id='menu1' class='tab-pane '>
                <div class='uk-card ' style="">
                    <div class="uk-card-body sc-padding-medium">
                        <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                            @if($Academy)
                            @include('register.candidate.academyEdit')
                            @else
                            @include('register.candidate.academy')
                            @endif
                        </fieldset>
                    </div>
                </div>
            </li>
            <li id='menu2' class='tab-pane '>
                <div class='uk-card ' style="">
                    <div class="uk-card-body sc-padding-medium">
                        <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                            @if($work->count())
                            @include('register.candidate.workEdit')
                            @else
                            @include('register.candidate.workexperience')
                            @endif
                        </fieldset>
                    </div>
                </div>
            </li>
            <li id='menu3' class='tab-pane '>
                <div class='uk-card ' style="">
                    <div class="uk-card-body sc-padding-medium">
                        <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                            @if($sponsor)
                            @include('register.candidate.sponsorEdit')
                            @else
                            @include('register.candidate.sponsor')
                            @endif
                        </fieldset>
                    </div>
                </div>
            </li>
        </u1>
    </div>


</section>

<div id="map" style=" height: 500px; width:100%"> </div>

<!-- ......................script for google map view.................... -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX4GRZHCs7t1pkpjrRaLoTlCgqX8o46wY&libraries=places&callback=initMap&libraries=places&v=weekly" defer></script>


<script>
    //.......................current location......................

    $(document).ready(function() {

        if (sessionStorage.getItem('css')) {
            $(".progress-bar").css("width",sessionStorage.getItem('css'))
        }
        if (sessionStorage.getItem('html')) {
            $(".progress-bar").html(sessionStorage.getItem('html'));
        }

        "use strict";
        $('#map').hide();

        initMap();

        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: -33.8688,
                    lng: 151.2195,
                },
                zoom: 13,
            });
            const card = document.getElementById("pac-card");
            console.log(card);

            for (let i = 1; i < 21; i++) {
                const input = $('#pac-input' + i)[0];
                new google.maps.places.Autocomplete(input).bindTo("bounds", map);

            }



            const infowindow = new google.maps.InfoWindow();
            const infowindowContent = document.getElementById("infowindow-content");
            infowindow.setContent(infowindowContent);
            const marker = new google.maps.Marker({
                map,
                anchorPoint: new google.maps.Point(0, -29),
            });

        }


    });

</script>


<!-- ...................end...script for google map view.................... -->
</section>


@endsection