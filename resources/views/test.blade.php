@extends('layouts.layout')

@section('content')


<!-- Subscribe & Stay Connected. Start -->
<section class="StayConnected clearfix">
    <div class="container ">


        <ul class="nav nav-tabs justify-content-center">
            <li class="active"><a data-toggle="tab" href="#home">PERSONAL INFO</a></li>
            <li><a data-toggle="tab" href="#menu1">ACADEMIC</a></li>
            <li><a data-toggle="tab" href="#menu2">WORK EXPERIENCE</a></li>
            <li><a data-toggle="tab" href="#menu3">SPONSOR</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h1>Candidate Registation - Personal Info</h1>

                <div class="whiteBox clearfix">
                    <!--div class="news-title">You have questions, let's have a conversation </div-->
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control " type="text" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mt-2">
                            <div class="form-group">
                                <label> </label>
                                <input class="form-control " type="text" placeholder="Middle Name">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mt-2">
                            <div class="form-group">
                                <label> </label>
                                <input class="form-control " type="text" placeholder="Last Name">
                            </div>
                        </div>

                    </div>

                    <hr>

                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Present Residential Address</label>
                                <input class="form-control " type="text" placeholder="Street Address">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mt-2">
                            <div class="form-group">
                                <label> </label>
                                <input class="form-control " type="text" placeholder="Street Address 2">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mt-2">
                            <div class="form-group">
                                <label> </label>
                                <input class="form-control " type="text" placeholder="City">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label></label>
                                <input class="form-control " type="text" placeholder="Region or State">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label> </label>
                                <input class="form-control " type="text" placeholder="Pin Code ">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label></label>
                                <input class="form-control l-icon" type="text" placeholder="Choose Country"
                                    name="Choose Country" id="pac-input2" value="" required>

                            </div>
                        </div>

                    </div>

                    <hr>
                    <div class="row custom-box">

                        <div class="col-lg-3 col-md-3 col-12 m-1 ">
                            <div class="form-group">
                                <label>Corosponding Address</label>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-9 col-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheckaddress"
                                    name="same_Correspondence_address" value="1">
                                <label class="custom-control-label" for="customCheckaddress"> Check the Box if
                                    Correspondence
                                    Address
                                    is same as Present Residential Address. </label>
                            </div>
                        </div>

                        <div class="row m-1 sameaddress" id="sameaddress">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label></label>
                                    <input class="form-control " type="text" placeholder="Street Address">
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="form-group">
                                    <label> </label>
                                    <input class="form-control " type="text" placeholder="Street Address 2">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="form-group">
                                    <label> </label>
                                    <input class="form-control " type="text" placeholder="City">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label></label>
                                    <input class="form-control " type="text" placeholder="Region or State">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="form-group">
                                    <label> </label>
                                    <input class="form-control " type="text" placeholder="Pin Code ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label></label>
                                    <input class="form-control l-icon" type="text" placeholder="Choose Country"
                                        name="Choose Country" id="pac-input1" value="" required>

                                </div>
                            </div>

                        </div>
                    </div>
                    <hr>

                    <div class="row mb-4">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Contact Info</label>
                                <input class="form-control " type="text" placeholder="Mobile">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mt-2">
                            <div class="form-group">
                                <label></label>
                                <input class="form-control " type="text" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mt-2">
                            <div class="form-group">
                                <label></label>
                                <input class="form-control " type="text" placeholder="Email">
                            </div>
                        </div>

                    </div>


                    <hr>

                    <div class="row mb-4">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input class="form-control" type="date" placeholder="Date of Birth">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <label>Gender</label>
                            </div>
                            <div class="col-lg-2 col-md-2 col-2 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="customradio" name="a"
                                        value="1">
                                    <label class="custom-control-label mt-1" for="customradio">Male</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-2 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="customradio1" name="a"
                                        value="1">
                                    <label class="custom-control-label mt-1" for="customradio1">Female</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-2 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="customradio2" name="a"
                                        value="1">
                                    <label class="custom-control-label mt-1" for="customradio2">Other</label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-4 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="customradio3" name="a"
                                        value="1">
                                    <label class="custom-control-label mt-1" for="customradio3">Prefer Not to say
                                    </label>
                                </div>
                            </div>
                        </div>


                    </div>
                    <hr>

                    <div class="row mb-4">
                        <div class="col-lg-12 col-md-12 col-12">
                            <label>Have you applied Visa for USA and Canada
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="customradio4" name="a" value="1">
                                <label class="custom-control-label mt-1" for="customradio4">Yes</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="customradio5" name="a" value="1">
                                <label class="custom-control-label mt-1" for="customradio5">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-1">

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label>Possible Start Date
                                </label>
                                <input class="form-control" type="date" placeholder="For Immigration Process">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-12 col-md-12 col-12">
                            <label>Which Describes you best?


                            </label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="customradio6" name="a" value="1">
                                <label class="custom-control-label mt-1" for="customradio6">Student</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="customradio7" name="a" value="1">
                                <label class="custom-control-label mt-1" for="customradio7">Employed</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="customradio8" name="a" value="1">
                                <label class="custom-control-label mt-1" for="customradio8">SelfEmployed</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="customradio9" name="a" value="1">
                                <label class="custom-control-label mt-1" for="customradio9">Retired</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="customradio10" name="a" value="1">
                                <label class="custom-control-label mt-1" for="customradio10">Business</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="customradio11" name="a" value="1">
                                <label class="custom-control-label mt-1" for="customradio11">Unemployed</label>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-4">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label>Preference of Immigration
                                </label>
                                <select class="form-control">
                                    <option>PNP</option>
                                    <option>AIPP</option>
                                    <option>Visit</option>
                                    <option>Student</option>
                                    <option>Business</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12 col-12 ">
                            <label>Have you been Vaccinated against COVID
                            </label>
                        </div>
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-12 ml-3 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="customradio4" name="a"
                                        value="1">
                                    <label class="custom-control-label mt-1" for="customradio4">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="customradio5" name="a"
                                        value="1">
                                    <label class="custom-control-label mt-1" for="customradio5">No</label>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row mb-1">

                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>Social Media Profile

                                </label>
                                <div class="row">
                                    <a class="facebook" href="##">
                                        <div class="icon col-lg-1 col-md-1 col-1 fa-2xl"><i
                                                class="fa-brands fa-facebook"></i>
                                        </div>
                                        <div id="facebook" class="col-lg-11 col-md-11 col-11 d-none ">
                                            <div class="form-group">
                                                <label> </label>
                                                <input class="form-control " type="text"
                                                    placeholder="Facebook Profile ">
                                            </div>
                                        </div>
                                    </a>
                                    <a class="twitter" href="##">
                                        <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i
                                                class="fa-brands fa-twitter"></i>
                                        </div>
                                        <div class="col-lg-11 col-md-11 col-11 d-none " id="twitter">
                                            <div class="form-group">
                                                <label> </label>
                                                <input class="form-control " type="text" placeholder="Twitter Profile ">
                                            </div>
                                        </div>
                                    </a>
                                    <a class="instagram" href="##">
                                        <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i
                                                class="fa-brands fa-instagram-square"></i></div>
                                        <div class="col-lg-11 col-md-11 col-11 d-none " id="instagram">
                                            <div class="form-group">
                                                <label> </label>
                                                <input class="form-control " type="text"
                                                    placeholder="Instagram Profile ">
                                            </div>
                                        </div>
                                    </a>
                                    <a class="linkedin" href="##">
                                        <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i
                                                class="fa-brands fa-linkedin"></i>
                                        </div>
                                        <div class="col-lg-11 col-md-11 col-11 d-none " id="linkedin">
                                            <div class="form-group">
                                                <label> </label>
                                                <input class="form-control " type="text"
                                                    placeholder="Linkedin Profile ">
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row mb-1">

                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>How did you hear about usd?

                                </label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <a href="{{route('candidate_acadamic')}}"> <button type="submit" class="client-btn">Submit
                                    And
                                    Next</button> </a>
                        </div>
                    </div>
                </div>

            </div>

            <div id="menu1" class="tab-pane fade">
                @include('register.registerformone')
            </div>
            <div id="menu2" class="tab-pane fade">
                @include('register.workexperience')
            </div>
            <div id="menu3" class="tab-pane fade">
                @include('register.sponsor')
            </div>
        </div>

    </div>








    <div id="map" style=" height: 500px; width:100%"> </div>




    <script>
    $(document).ready(function() {
        $('[name="same_Correspondence_address"]').change(function() {
            if ($(this).is(':checked')) {
                // Do something...
                $('#sameaddress').addClass('d-none');
            } else {
                $('#sameaddress').removeClass('d-none');
            };
        });
        $('.facebook').on("click", function() {
            $('#facebook').removeClass('d-none');
        });
        $('.linkedin').on("click", function() {
            $('#linkedin').removeClass('d-none');
        });
        $('.instagram').on("click", function() {
            $('#instagram').removeClass('d-none');
        });
        $('.twitter').on("click", function() {
            $('#twitter').removeClass('d-none');
        })
    });
    </script>

    <!-- ......................script for google map view.................... -->

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX4GRZHCs7t1pkpjrRaLoTlCgqX8o46wY&libraries=places&callback=initMap&libraries=places&v=weekly"
        defer></script>

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
            const autocomplete1 = new google.maps.places.Autocomplete(
                input1); // Bind the map's bounds (viewport) property to the autocomplete object,
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
    <!-- ...................end...script for google map view.................... -->
</section>


@endsection