@extends('layouts.layoutss')

@section('content')

<!-- Subscribe & Stay Connected. Start -->
<div class="container ">

    <div class="tab-pane  " style="width:80%;margin-left:5% !important">
        <h5 style="text-align:center">edit Sponsor Information </h5><br>
        <div class="uk-card ">
            <div class="uk-card-body sc-padding-medium">
                <form action="{{route('profileSponsorupdate',['id' =>$userId])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                        <h6 style="text-decoration: underline">Sponsor Details</h6>
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

                                    <input class="form-control " type="text" id="pac-input1" placeholder="Street Address1" name="sponsor_street" value="{{$sponsor->sponsor_street}}">

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">

                                    <input class="form-control " type="text" id="pac-input2" placeholder="Street Address2" name="sponsor_street2" value="{{$sponsor->sponsor_street2}}">

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4  col-12">
                                <div class="form-group">
                                    <input class="form-control " type="text" id="pac-input3" placeholder="City" name="sponsor_city" value="{{$sponsor->sponsor_city}}">



                                </div>
                            </div>

                        </div>
                        <div class="row mt-4 custom-box">

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">

                                    <input class="form-control " id="pac-input4" type="text" placeholder="Region Or State" name="sponsor_region" value="{{$sponsor->sponsor_region}}">

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">

                                    <input class="form-control " type="text" placeholder="Pin Code" name="sponsor_pincode" value="{{$sponsor->sponsor_pincode}}">

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4  col-12">
                                <div class="form-group">

                                    <input class="form-control l-icon" type="text" id="pac-input5" placeholder="Enter Country" name="sponsor_country" value="{{$sponsor->sponsor_country}}" required>

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
                                    <input class="form-control " type="email" name="sponsor_email" value="{{$sponsor->sponsor_email}}">
                                </div>
                            </div>
                        </div>

                        <hr>
                        <h6 style="text-decoration: underline">Address of Guardian</h6>
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
                                    <input class="form-control " type="email" placeholder="Email" name="guardian_email" value="{{$sponsor->guardian_email}}">
                                </div>
                            </div>

                        </div>
                        <div class="row mt-4 custom-box">

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">

                                    <input class="form-control " type="text" id="pac-input6" placeholder="Street Address1" name="guardian_street" value="{{$sponsor->guardian_street}}">

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">

                                    <input class="form-control " type="text" id="pac-input7" placeholder="Street Address2" name="guardian_street2" value="{{$sponsor->guardian_street2}}">

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4  col-12">
                                <div class="form-group">
                                    <input class="form-control " type="text" id="pac-input8" placeholder="City" name="guardian_city" value="{{$sponsor->guardian_city}}">



                                </div>
                            </div>

                        </div>
                        <div class="row mt-4 custom-box">

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">

                                    <input class="form-control " type="text" id="pac-input9" placeholder="Region Or State" name="guardian_region" value="{{$sponsor->guardian_region}}">

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">

                                    <input class="form-control " type="text" placeholder="Pin Code" name="guardian_pincode" value="{{$sponsor->guardian_pincode}}">

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4  col-12">
                                <div class="form-group">

                                    <input class="form-control l-icon" type="text" id="pac-input10" placeholder="Enter Country" name="guardian_country" value="{{$sponsor->guardian_country}}" required>

                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="float-right">
                            <a class="sc-button sc-button-custom md-bg-grey-600 sc-js-button-wave-light waves-effect waves-button waves-light" href="{{route('personalProfile')}}">Cancel</a>
                            &nbsp;&nbsp;
                            <button type="submit" class="client-btn uk-button uk-button-primary">Update</button>
                        </div>
                    </fieldset>

                </form>
            </div>
        </div>

        <div id="map" style=" height: 500px; width:100%"> </div>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX4GRZHCs7t1pkpjrRaLoTlCgqX8o46wY&libraries=places&callback=initMap&libraries=places&v=weekly" defer></script>

    </div>
</div>
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

            for (let i = 1; i < 11; i++) {
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

@endsection