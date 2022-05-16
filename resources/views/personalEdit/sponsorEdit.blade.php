@extends('layouts.layout')

@section('content')
<style>
    .progress {
        background-color: white !important;
        margin-left: 40px !important;
        margin-right: 40px !important;
        max-height: 4px;

    }
</style>
<!-- Subscribe & Stay Connected. Start -->
<section class="StayConnected clearfix" style=" padding: 100px 0 100px;">
    <div class="container ">

        <h1> Candidate Registation - Sponsor</h1>
        <form action="{{route('profileSponsorupdate',['id' =>$userId])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="whiteBox clearfix">


                <h6>Sponsor Details</h6>
                <!--div class="news-title">You have questions, let's have a conversation </div-->
                <div class="row mt-4 custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">

                            <input class="form-control " type="text" placeholder="First Name" name="first_name" value="{{$sponsor->first_name}}">

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">

                            <input class="form-control " type="text" placeholder="Middle Name" name="middle_name" value="{{$sponsor->middle_name}}">

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4  col-12">
                        <div class="form-group">

                            <input class="form-control " type="text" placeholder="Last Name" name="last_name" value="{{$sponsor->last_name}}">

                        </div>
                    </div>

                </div>



                <div class="row mt-4 custom-box">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>
                                Sponsor Status
                            </label>
                            <select class="form-control " name="sponsor_status">
                                <option value="Working" {{$sponsor->sponsor_status == 'Working' ? 'selected':''}}>Working</option>
                                <option value="Retired" {{$sponsor->sponsor_status == 'Retired' ? 'selected':''}}>Retired</option>
                                <option value="Business" {{$sponsor->sponsor_status == 'Business' ? 'selected':''}}>Business</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Relationship with Child
                            </label>
                            <select class="form-control " name="sponsor_relation">
                                <option value="Mother" {{$sponsor->sponsor_relation == 'Working' ? 'selected':''}}>Mother</option>
                                <option value="Father" {{$sponsor->sponsor_relation == 'Retired' ? 'selected':''}}>Father</option>
                                <option value="Brother" {{$sponsor->sponsor_relation == 'Business' ? 'selected':''}}>Brother</option>
                                <option value="Uncle" {{$sponsor->sponsor_relation == 'Working' ? 'selected':''}}>Uncle</option>
                                <option value="Grand parent" {{$sponsor->sponsor_relation == 'Retired' ? 'selected':''}}>Grand parent</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>
                                Mobile Number
                            </label>
                            <input class="form-control " type="number" placeholder="Mobile" name="sponsor_mobile" value="{{$sponsor->sponsor_mobile}}">
                        </div>
                    </div>


                </div>


                <div class="row mt-4 custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">

                            <input class="form-control " type="text" placeholder="Street Address1" name="sponsor_street" value="{{$sponsor->sponsor_street}}">

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">

                            <input class="form-control " type="text" placeholder="Street Address2" name="sponsor_street2" value="{{$sponsor->sponsor_street2}}">

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4  col-12">
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="City" name="sponsor_city" value="{{$sponsor->sponsor_city}}">



                        </div>
                    </div>

                </div>

                <div class="row mt-4 custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">

                            <input class="form-control " type="text" placeholder="Region Or State" name="sponsor_region" value="{{$sponsor->sponsor_region}}">

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">

                            <input class="form-control " type="text" placeholder="Pin Code" name="sponsor_pincode" value="{{$sponsor->sponsor_pincode}}">

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4  col-12">
                        <div class="form-group">

                            <input class="form-control l-icon" type="text" placeholder="Enter Country" name="sponsor_country"   value="{{$sponsor->sponsor_country}}" required>

                        </div>
                    </div>

                </div>

                <div class="row mt-4 custom-box">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Telephone Number
                            </label>
                            <input class="form-control " type="number" name="sponsor_telephone" value="{{$sponsor->sponsor_telephone}}">

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>
                                Email ID
                            </label>
                            <input class="form-control " type="text" name="sponsor_email" value="{{$sponsor->sponsor_email}}">
                        </div>
                    </div>
                </div>

                <hr style="height:12px;">

                <h6>Address of Guardian</h6>
                <!--div class="news-title">You have questions, let's have a conversation </div-->
                <div class="row mt-4 custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Relationship with Child
                            </label>
                            <select class="form-control " name="guardian_relation">
                                <option value="Mother" {{$sponsor->guardian_relation == 'Working' ? 'selected':''}}>Mother</option>
                                <option value="Father" {{$sponsor->guardian_relation == 'Retired' ? 'selected':''}}>Father</option>
                                <option value="Brother" {{$sponsor->guardian_relation == 'Business' ? 'selected':''}}>Brother</option>
                                <option value="Working" {{$sponsor->guardian_relation == 'Working' ? 'selected':''}}>Uncle</option>
                                <option value="Grand parent" {{$sponsor->guardian_relation == 'Retired' ? 'selected':''}}>Grand parent</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>
                                Mobile Number
                            </label>
                            <input class="form-control " type="number" placeholder="Mobile" name="guardian_mobile" value="{{$sponsor->guardian_mobile}}">
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>
                                Email
                            </label>
                            <input class="form-control " type="text" placeholder="Email" name="guardian_email" value="{{$sponsor->guardian_email}}">
                        </div>
                    </div>

                </div>
                <div class="row mt-4 custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">

                            <input class="form-control " type="text" placeholder="Street Address1" name="guardian_street" value="{{$sponsor->guardian_street}}">

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">

                            <input class="form-control " type="text" placeholder="Street Address2" name="guardian_street2" value="{{$sponsor->guardian_street2}}">

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4  col-12">
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="City" name="guardian_city" value="{{$sponsor->guardian_city}}">



                        </div>
                    </div>

                </div>

                <div class="row mt-4 custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">

                            <input class="form-control " type="text" placeholder="Region Or State" name="guardian_region" value="{{$sponsor->guardian_region}}">

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">

                            <input class="form-control " type="text" placeholder="Pin Code" name="guardian_pincode" value="{{$sponsor->guardian_pincode}}">

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4  col-12">
                        <div class="form-group">

                            <input class="form-control l-icon" type="text" placeholder="Enter Country" name="guardian_country"  value="{{$sponsor->guardian_country}}" required>

                        </div>
                    </div>

                </div>

                <div class="float-right">
                    <button type="submit" class="client-btn">Update</button>
                </div>
            </div>

        </form>
    </div>
</section>
<div id="map" style=" height: 500px; width:100%"> </div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX4GRZHCs7t1pkpjrRaLoTlCgqX8o46wY&libraries=places&callback=initMap&libraries=places&v=weekly" defer></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    //.......................current location......................

    $(document).ready(function() {

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
            const input1 = $('#pac-input1')[0];
            const input2 = $('#pac-input2')[0];


            map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);
            const autocomplete1 = new google.maps.places.Autocomplete(input1); // Bind the map's bounds (viewport) property to the autocomplete object,
            const autocomplete2 = new google.maps.places.Autocomplete(input2);

            autocomplete1.bindTo("bounds", map); // Set the data fields to return when the user selects a place.
            autocomplete2.bindTo("bounds", map);

            autocomplete1.setFields([
                "address_components",
                "geometry",
                "icon",
                "name",
            ]);
            autocomplete2.setFields([
                "address_components",
                "geometry",
                "icon",
                "name",
            ]);
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

@endsection