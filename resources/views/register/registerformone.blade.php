@extends('layouts.layout')

@section('content')


<!-- Subscribe & Stay Connected. Start -->
<section class="StayConnected clearfix">
    <div class="container">
        <h1>Candidate Registation - Academic</h1>

        <div class="whiteBox clearfix">
            <!--div class="news-title">You have questions, let's have a conversation </div-->
            <div class="row mt-4 custom-box">

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label>Language Proficiency

                        </label>
                        <select class="form-control">
                            <option>English</option>
                            <option>Tamil</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label>Level

                        </label>
                        <select class="form-control">
                            <option>Beginner</option>
                            <option>Intermediate</option>
                            <option>Competent</option>
                            <option>Expert</option>

                        </select>
                    </div>
                </div>


            </div>

            <hr>

            <div class="row mt-4 custom-box">

                <div class="col-lg-2 col-md-2 col-12">

                    <div class="upload-images">
                        <label for="upload-images">
                            <p>
                                Certified By </p>
                            <span>Browse</span>

                        </label>
                        <input type="file" id="upload-images" name="image" accept="image/*" hidden="">
                    </div>
                </div>


                <div class="col-lg-2 col-md-2 col-12">

                    <div class="upload-images">
                        <label for="upload-images">
                            <p>
                                Attachment </p>
                            <span>Browse</span>

                        </label>
                        <input type="file" id="upload-images" name="image" accept="image/*" hidden="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Applicant Test Scores</label>
                        <input class="form-control " type="text" placeholder="Applicant Test Scores">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 ">
                    <div class="form-group">
                        <label> Valid Upto
                        </label>
                        <input class="form-control " type="text" placeholder="Valid Upto">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12 ">
                    <div class="form-group">
                        <label> Score Breakup
                        </label>
                        <input class="form-control " type="text" placeholder="Score Breakup">
                    </div>
                </div>


            </div>

            <hr>
            <div class="row mt-4 mb-4">
                <div class="col-lg-12 col-md-12 col-12">
                    <label>Select Paper


                    </label>
                </div>
                <div class="col-lg-2 col-md-2 col-12 ">
                    <div class="custom-control custom-radio ">
                        <input type="radio" class="custom-control-input " id="customradio6" name="a" value="1">
                        <label class="custom-control-label mt-1" for="customradio6">Paper 01</label>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12 ">
                    <div class="custom-control custom-radio ">
                        <input type="radio" class="custom-control-input " id="customradio7" name="a" value="1">
                        <label class="custom-control-label mt-1" for="customradio7">Paper 02</label>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12 ">
                    <div class="custom-control custom-radio ">
                        <input type="radio" class="custom-control-input " id="customradio8" name="a" value="1">
                        <label class="custom-control-label mt-1" for="customradio8">Paper 03</label>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12 ">
                    <div class="custom-control custom-radio ">
                        <input type="radio" class="custom-control-input " id="customradio9" name="a" value="1">
                        <label class="custom-control-label mt-1" for="customradio9">Paper 04</label>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12 ">
                    <div class="custom-control custom-radio ">
                        <input type="radio" class="custom-control-input " id="customradio10" name="a" value="1">
                        <label class="custom-control-label mt-1" for="customradio10">Paper 05</label>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12 ">
                    <div class="custom-control custom-radio ">
                        <input type="radio" class="custom-control-input " id="customradio11" name="a" value="1">
                        <label class="custom-control-label mt-1" for="customradio11">Paper 06</label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt-4 mb-4">


                <div class="col-lg-5 col-md-5 col-12">
                    <div class="form-group">
                        <label>Secured Score
                        </label>
                        <input class="form-control " type="text" placeholder="Applicant Test Scores">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">

                    <div class="upload-images">
                        <label for="upload-images">
                            <p>
                                Attachment </p>
                            <span>Browse</span>

                        </label>
                        <input type="file" id="upload-images" name="image" accept="image/*" hidden="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 ">
                    <div class="form-group">
                        <label> Score
                        </label>
                        <input class="form-control " type="text" placeholder="Valid Upto">
                    </div>
                </div>


            </div>
            <hr>
            <div class="row ml-2">
                <div class="col-lg-12 col-md-12 mt-2 col-12">
                    <button type="" class="add-btn " id="addschoolbtn"><i class="fa-solid fa-plus"></i> Add
                        School</button>

                </div>

                <div id="addschoolrow">

                </div>
                <div class="col-lg-12 col-md-12  mt-2 col-12">

                    <button type="" class="add-btn  " id="collegebtn"><i class="fa-solid fa-plus"></i> Add
                        College</button>
                </div>
                <div id="addcollegerow">

</div>

                <div class="col-lg-12 col-md-12 mt-2 col-12">

                    <button type="" class="add-btn " id="pgbtn"><i class="fa-solid fa-plus"></i> Add Post
                        Graduation</button>
                </div>
                <div id="addpgrow">

</div>

                <div class="col-lg-12 col-md-12 mt-2 col-12">

                    <button type="" class="add-btn " id="otherbtn"><i class="fa-solid fa-plus"></i> Add Other
                        Qualification</button>
                </div>

                <div id="addotherrow">

</div>




            </div>

            <div class="col-lg-12 col-md-12 col-12">
        <a href="{{route('candidate_workexperience')}}">   <button type="submit" class="client-btn">Submit And Next</button> </a>
                </div>
          


        </div>

    </div>

    <div id="map" style=" height: 500px; width:100%"> </div>



    </div>


    </div>
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

    <script>
    $(document).ready(function() {

        // for school
        $("#addschoolbtn").click(function() {

            var html = '';

            html = `<div  id="addschoolform">
<div class="col-lg-12 col-md-12 col-12 container addschool mt-4" >
                <div class="whiteBox clearfix">
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>School Name</label>
                                <input class="form-control " type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>School Address </label>
                                <input class="form-control " type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Year Completed </label>
                                <input class="form-control " type="text" >
                            </div>
                        </div>

                    </div>
                    <div class="row custom-box">

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label>Applicable ECA Validity

                                </label>
                                <select class="form-control">
                                    <option>Select Option</option>
                                    <option>Yes</option>
                                    <option>No</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12">

                            <div class="upload-images">
                                <label for="upload-images">
                                    <p>
                                        Other Attachment </p>
                                    <span>Browse</span>

                                </label>
                                <input type="file" id="upload-images" name="image" accept="image/*" hidden="">
                            </div>
                        </div>

                    </div>
                    <button  class=" closebtn client-btn" id="removeschool"><a 
                            style="color:white"><i class="fa-solid fa-minus"></i> Remove</a></button>
                </div>
            </div>
        </div>
       <br>
        `

            $('#addschoolrow').append(html);
        });

        // remove row
        $(document).on('click', '#removeschool', function() {
            $(this).closest('#addschoolform').remove();
        });

        // college

        $("#collegebtn").click(function() {

            var html = '';

            html = `<div  id="addschoolform">
            <div class="container addcollege mt-4">
                <div class="whiteBox clearfix">
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>College Name</label>
                                <input class="form-control " type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>College Address </label>
                                <input class="form-control " type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>PG/PHD Year Completed </label>
                                <input class="form-control " type="text" >
                            </div>
                        </div>

                    </div>
                    <div class="row custom-box">

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label>Applicable ECA Validity

                                </label>
                                <select class="form-control">
                                    <option>Select Option</option>
                                    <option>Yes</option>
                                    <option>No</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12">

                            <div class="upload-images">
                                <label for="upload-images">
                                    <p>
                                        Other Attachment </p>
                                    <span>Browse</span>

                                </label>
                                <input type="file" id="upload-images" name="image" accept="image/*" hidden="">
                            </div>
                        </div>

                    </div>
                    <button type="submit" class=" closebtn client-btn" id="removecollege"><a 
                            style="color:white"><i class="fa-solid fa-minus"></i> Remove</a></button>
                </div>
            </div></div>
        `

            $('#addcollegerow').append(html);
        });

        // remove row
        $(document).on('click', '#removecollege', function() {
            $(this).closest('#addschoolform').remove();
        });

// Pg

$("#pgbtn").click(function() {

var html = '';

html = `<div  id="addpgform">  <div class="container addpg mt-4">
<div class="whiteBox clearfix">
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>PG Name</label>
                                <input class="form-control " type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>PG Address </label>
                                <input class="form-control " type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Year Completed </label>
                                <input class="form-control " type="text" >
                            </div>
                        </div>

                    </div>
                    <div class="row custom-box">

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label>Applicable ECA Validity

                                </label>
                                <select class="form-control">
                                    <option>Select Option</option>
                                    <option>Yes</option>
                                    <option>No</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12">

                            <div class="upload-images">
                                <label for="upload-images">
                                    <p>
                                        Other Attachment </p>
                                    <span>Browse</span>

                                </label>
                                <input type="file" id="upload-images" name="image" accept="image/*" hidden="">
                            </div>
                        </div>

                    </div>
                    <button type="submit" class=" closebtn client-btn" id="removepg"><a  style="color:white">
                            <i class="fa-solid fa-minus"></i> Remove</a></button>
                </div>
            </div></div>
`

$('#addpgrow').append(html);
});

// remove row
$(document).on('click', '#removepg', function() {
$(this).closest('#addpgform').remove();
});

// other


$("#otherbtn").click(function() {

var html = '';

html = `
<div  id="addpgform">
            <div class="container addother mt-4">
                <div class="whiteBox clearfix">
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Technical Qualifications</label>
                                <input class="form-control " type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Name of Institute </label>
                                <input class="form-control " type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Institute Address </label>
                                <input class="form-control " type="text" >
                            </div>
                        </div>
                       

                    </div>
                    <div class="row custom-box">
                    <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Year Completed </label>
                                <input class="form-control " type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Applicable ECA Validity

                                </label>
                                <select class="form-control">
                                    <option>Select Option</option>
                                    <option>Yes</option>
                                    <option>No</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12">

                            <div class="upload-images">
                                <label for="upload-images">
                                    <p>
                                        Other Attachment </p>
                                    <span>Browse</span>

                                </label>
                                <input type="file" id="upload-images" name="image" accept="image/*" hidden="">
                            </div>
                        </div>

                    </div>

                    <button type="submit" class=" closebtn client-btn" id="removeother"><a 
                            style="color:white"><i class="fa-solid fa-minus"></i> Remove</a></button>

                </div>
            </div></div>
`

$('#addotherrow').append(html);
});

// remove row
$(document).on('click', '#removeother', function() {
$(this).closest('#addpgform').remove();
});

    });
    </script>
</section>


@endsection