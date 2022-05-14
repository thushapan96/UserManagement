<!-- Subscribe & Stay Connected. Start -->
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
<section class="StayConnected clearfix">
    <div class="container ">

        <h1>Candidate Registation - Academic</h1>

        <div class="whiteBox clearfix">
            <form id="academy_form" action="{{route('profileAcademyupdate',['id' => $Academy->user_id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!--div class="news-title">You have questions, let's have a conversation </div-->
                <div class="row mt-4 custom-box">

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Language Proficiency

                            </label>
                            <select name="language_proficiency" class="form-control">
                                <option value="English" {{$Academy->language_proficiency == 'English' ? 'selected':''}}>English</option>
                                <option value="Tamil" {{$Academy->Tamil == 'English' ? 'selected':''}}>Tamil</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Level

                            </label>
                            <select name="language_level" class="form-control">
                                <option value="Beginner" {{$Academy->language_level == 'Beginner' ? 'selected':''}}>Beginner</option>
                                <option value="Intermediate" {{$Academy->language_level == 'Intermediate' ? 'selected':''}}>Intermediate</option>
                                <option value="Competent" {{$Academy->language_level == 'Competent' ? 'selected':''}}>Competent</option>
                                <option value="Expert" {{$Academy->language_level == 'Expert' ? 'selected':''}}>Expert</option>

                            </select>
                        </div>
                    </div>

                </div>

                <div class="row mt-4 custom-box">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="upload-images">
                            <label>
                                <p>Certified By </p>
                            </label>
                            <input type="text" class="form-control" name="language_certified_by" value="{{$Academy->language_certified_by}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="upload-images">
                            <label>
                                <p>Attachment </p>
                            </label>
                            <a href="{{url('files/'.$Academy->language_attachment)}}" target="_blank">Language Attachment</a>
                            <input type="file" title="change file" class="form-control" name="language_attachment" value="{{$Academy->language_attachment}}">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-4 custom-box">
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Applicant Test Scores</label>
                            <select class="form-control" id="applicant_test" name="applicant_test_name[]">
                                <option value="" {{$Academy->applicant_test_name == '' ? 'selected':''}}>Select</option>
                                <option value="IELTS" {{$Academy->applicant_test_name == 'IELTS' ? 'selected':''}}>IELTS</option>
                                <option value="TOFEL" {{$Academy->applicant_test_name == 'TOFEL' ? 'selected':''}}>TOFEL</option>
                                <option value="CELPIP" {{$Academy->applicant_test_name == 'CELPIP' ? 'selected':''}}>CELPIP</option>
                                <option value="GRE" {{$Academy->applicant_test_name == 'GRE' ? 'selected':''}}>GRE</option>
                                <option value="PTE" {{$Academy->applicant_test_name == 'PTE' ? 'selected':''}}>PTE</option>
                                <option value="SAT" {{$Academy->applicant_test_name == 'SAT' ? 'selected':''}}>SAT</option>
                                <option value="GMAT" {{$Academy->applicant_test_name == 'GMAT' ? 'selected':''}}>GMAT</option>
                                <option value="HSEiT" {{$Academy->applicant_test_name == 'HSEiT' ? 'selected':''}}>HSEiT</option>
                                <option value="LSAT" {{$Academy->applicant_test_name == 'LSAT' ? 'selected':''}}>LSAT</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>If Other Applicant</label>
                            <input id="applicant_test_other" class="form-control " type="text" name="applicant_test_name[]" value="{{$Academy->applicant_test_name}}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 ">
                        <div class="form-group">
                            <label> Valid Upto
                            </label>
                            <input class="form-control " name="test_valid_upto" type="text" placeholder="Valid Upto" value="{{$Academy->test_valid_upto}}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 ">
                        <div class="form-group">
                            <label>Attachment
                            </label>
                            <a href="{{url('files/'.$Academy->test_attachment)}}" target="_blank">Test Attachment</a>
                            <input type="file" class="form-control" name="test_attachment" value="{{$Academy->test_attachment}}">
                        </div>
                    </div>
                </div>

                <hr>
                <div id="addschoolrow">
                    @foreach($qualification as $key => $row)
                    @if($row->type == 'school')
                    <div id="addschoolform">
                        <div class="col-lg-12 col-md-12 col-12 container addschool mt-4">
                            <div class="whiteBox clearfix">
                                <div class="row custom-box">

                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>School Name</label>
                                            <input class="form-control " name="name[]" type="text" value="{{$row->name}}">
                                            <input class="form-control " hidden name="qualificationId[]" value="{{$row->id}}" type="text">
                                            <input class="form-control " hidden name="type[]" value="school" type="text">
                                            <input class="form-control " hidden name="tech[]" value="NA" type="text">

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 ">
                                        <div class="form-group">
                                            <label>School Address </label>
                                            <input class="form-control" name="address[]" type="text" value="{{$row->Address}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 ">
                                        <div class="form-group">
                                            <label>Year Completed </label>
                                            <input class="form-control " name="year_completed[]" type="text" value="{{$row->Year_completion}}">
                                        </div>
                                    </div>

                                </div>
                                <div class="row custom-box">

                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Applicable ECA Validity

                                            </label>
                                            <select name="eca[]" class="form-control">
                                                <option value="" {{$row->applicable_eca_validity == '' ? 'selected':''}}>Select Option</option>
                                                <option value="Yes" {{$row->applicable_eca_validity == 'Yes' ? 'selected':''}}>Yes</option>
                                                <option value="No" {{$row->applicable_eca_validity == 'No' ? 'selected':''}}>No</option>

                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Distant

                                            </label>
                                            <select name="distant[]" class="form-control">
                                                <option value="" {{$row->Distant == '' ? 'selected':''}}>Select Option</option>
                                                <option {{$row->Distant == 'distant' ? 'selected':''}}>distant</option>
                                                <option {{$row->Distant == 'regular' ? 'selected':''}}>regular</option>
                                                <option {{$row->Distant == 'online' ? 'selected':''}}>online</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-12 ">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input name="country[]" class="form-control " type="text" value="{{$row->country}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-12">

                                        <div class="">
                                            <label>
                                                <p>Other Attachment </p>
                                            </label>
                                            <input type="file" class="form-control" name="attachment[]" value="{{$row->attachment}}">
                                        </div>
                                    </div>

                                </div>
                                <button class=" closebtn client-btn" id="removeschool"><a style="color:white"><i class="fa-solid fa-minus"></i> Remove</a></button>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="col-lg-12 col-md-12 mt-2 col-12">
                    <button type="button" class="add-btn " id="addschoolbtn"><i class="fa-solid fa-plus"></i> Add
                        School</button>

                </div>
                <div id="addcollegerow">
                    @foreach($qualification as $key => $row)
                    @if($row->type == 'college')
                    <div id="addcollegeform">
                        <div class="container addcollege mt-4">
                            <div class="whiteBox clearfix">
                                <div class="row custom-box">

                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>College Name</label>
                                            <input class="form-control " name="name[]" type="text" value="{{$row->name}}">
                                            <input class="form-control " hidden name="type[]" value="college" type="text">
                                            <input class="form-control " hidden name="tech[]" value="NA" type="text">
                                            <input class="form-control " hidden name="qualificationId[]" value="{{$row->id}}" type="text">

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 ">
                                        <div class="form-group">
                                            <label>College Address </label>
                                            <input class="form-control" name="address[]" type="text" value="{{$row->Address}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 ">
                                        <div class="form-group">
                                            <label>PG/PHD Year Completed </label>
                                            <input class="form-control " name="year_completed[]" type="text" value="{{$row->Year_completion}}">
                                        </div>
                                    </div>

                                </div>
                                <div class="row custom-box">

                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Applicable ECA Validity

                                            </label>
                                            <select name="eca[]" class="form-control">
                                                <option value="" {{$row->applicable_eca_validity == '' ? 'selected':''}}>Select Option</option>
                                                <option value="Yes" {{$row->applicable_eca_validity == 'Yes' ? 'selected':''}}>Yes</option>
                                                <option value="No" {{$row->applicable_eca_validity == 'No' ? 'selected':''}}>No</option>

                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Distant

                                            </label>
                                            <select name="distant[]" class="form-control">
                                                <option value="" {{$row->Distant == '' ? 'selected':''}}>Select Option</option>
                                                <option {{$row->Distant == 'distant' ? 'selected':''}}>distant</option>
                                                <option {{$row->Distant == 'regular' ? 'selected':''}}>regular</option>
                                                <option {{$row->Distant == 'online' ? 'selected':''}}>online</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-12 ">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input name="country[]" class="form-control " type="text" value="{{$row->country}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-12">

                                        <div class="">
                                            <label>
                                                <p>Other Attachment </p>
                                            </label>
                                            <input type="file" class="form-control" name="attachment[]" value="{{$row->attachment}}">
                                        </div>
                                    </div>


                                </div>
                                <button type="submit" class=" closebtn client-btn" id="removecollege"><a style="color:white"><i class="fa-solid fa-minus"></i> Remove</a></button>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="col-lg-12 col-md-12  mt-2 col-12">
                    <button type="button" class="add-btn  " id="collegebtn"><i class="fa-solid fa-plus"></i> Add
                        College</button>
                </div>
                <div id="addpgrow">
                    @foreach($qualification as $key => $row)
                    @if($row->type == 'PG')
                    <div id="addpgform">
                        <div class="whiteBox clearfix">
                            <div class="row custom-box">

                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label>PG Name</label>
                                        <input class="form-control " name="name[]" type="text" value="{{$row->name}}">
                                        <input class="form-control " hidden name="qualificationId[]" value="{{$row->id}}" type="text">
                                        <input class="form-control " hidden name="type[]" value="PG" type="text">
                                        <input class="form-control " hidden name="tech[]" value="NA" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 ">
                                    <div class="form-group">
                                        <label>PG Address </label>
                                        <input class="form-control" name="address[]" type="text" value="{{$row->Address}}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 ">
                                    <div class="form-group">
                                        <label>Year Completed </label>
                                        <input class="form-control " name="year_completed[]" type="text" value="{{$row->Year_completion}}">
                                    </div>
                                </div>

                            </div>
                            <div class="row custom-box">

                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Applicable ECA Validity

                                        </label>
                                        <select name="eca[]" class="form-control">
                                            <option value="" {{$row->applicable_eca_validity == '' ? 'selected':''}}>Select Option</option>
                                            <option value="Yes" {{$row->applicable_eca_validity == 'Yes' ? 'selected':''}}>Yes</option>
                                            <option value="No" {{$row->applicable_eca_validity == 'No' ? 'selected':''}}>No</option>

                                        </select>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Distant

                                        </label>
                                        <select name="distant[]" class="form-control">
                                            <option value="" {{$row->Distant == '' ? 'selected':''}}>Select Option</option>
                                            <option {{$row->Distant == 'distant' ? 'selected':''}}>distant</option>
                                            <option {{$row->Distant == 'regular' ? 'selected':''}}>regular</option>
                                            <option {{$row->Distant == 'online' ? 'selected':''}}>online</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-12 ">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input name="country[]" class="form-control " type="text" value="{{$row->country}}">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-12">

                                    <div class="">
                                        <label>
                                            <p>Other Attachment </p>
                                        </label>
                                        <input type="file" class="form-control" name="attachment[]" value="{{$row->attachment}}">
                                    </div>
                                </div>

                                <button type="submit" class=" closebtn client-btn" id="removepg"><a style="color:white">
                                        <i class="fa-solid fa-minus"></i> Remove</a></button>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="col-lg-12 col-md-12 mt-2 col-12">
                    <button type="button" class="add-btn " id="pgbtn"><i class="fa-solid fa-plus"></i> Add
                        PostGraduation</button>
                </div>
                <div id="addotherrow">
                    @foreach($qualification as $key => $row)
                    @if($row->type == 'other')
                    <div id="addotherform">
                        <div class="container addother mt-4">
                            <div class="whiteBox clearfix">
                                <div class="row custom-box">

                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Technical Qualifications</label>
                                            <input class="form-control " name="tech[]" type="text" value="{{$row->tech}}">
                                            <input class="form-control " hidden name="type[]" value="other" type="text">
                                            <input class="form-control " hidden name="qualificationId[]" value="{{$row->id}}" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 ">
                                        <div class="form-group">
                                            <label>Name of Institute </label>
                                            <input class="form-control " name="name[]" type="text" value="{{$row->name}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 ">
                                        <div class="form-group">
                                            <label>Institute Address </label>
                                            <input class="form-control " name="address[]" type="text" value="{{$row->Address}}">
                                        </div>
                                    </div>


                                </div>
                                <div class="row custom-box">
                                    <div class="col-lg-3 col-md-3 col-12 ">
                                        <div class="form-group">
                                            <label>Year Completed </label>
                                            <input class="form-control " name="year_completed[]" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Applicable ECA Validity

                                            </label>
                                            <select name="eca[]" class="form-control">
                                                <option value="">Select Option</option>
                                                <option>Yes</option>
                                                <option>No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Distant

                                            </label>
                                            <select name="distant[]" class="form-control">
                                                <option value="">Select Option</option>
                                                <option>distant</option>
                                                <option>regular</option>
                                                <option>online</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12 ">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input class="form-control " name="country[]" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">

                                        <div class="">
                                            <label>
                                                <p>Other Attachment </p>
                                            </label>
                                            <input type="file" class="form-control" name="attachment[]">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class=" closebtn client-btn" id="removeother"><a style="color:white"><i class="fa-solid fa-minus"></i> Remove</a></button>

                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="col-lg-12 col-md-12 mt-2 col-12">
                    <button type="button" class="add-btn " id="otherbtn"><i class="fa-solid fa-plus"></i> Add
                        OtherQualification</button>
                </div>

                <div class="col-lg-12 col-md-12 col-12">
                    <button type="submit" class="client-btn">Update</button>
                </div>
            </form>

        </div>



        <div id="map" style=" height: 500px; width:100%"> </div>






        <!-- ......................script for google map view.................... -->

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
                if ($('#applicant_test').val() != '') {
                    $('#applicant_test_other').val('');
                }
                $("#addschoolbtn").click(function() {

                    var html = '';

                    html = `<div  id="addschoolform"> 
                     <div class="col-lg-12 col-md-12 col-12 container addschool mt-4" >
                     <div class="whiteBox clearfix">
                     <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>School Name</label>
                                <input class="form-control " name="name[]" type="text" >
                                <input class="form-control " hidden name="type[]" value="school" type="text" >
                                <input class="form-control " hidden name="tech[]" value="NA" type="text" >
                                <input class="form-control " hidden name="qualificationId[]" value="" type="text">


                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>School Address </label>
                                <input class="form-control" name="address[]"  type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Year Completed </label>
                                <input class="form-control " name="year_completed[]" type="text" >
                            </div>
                        </div>

                    </div>
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Applicable ECA Validity

                                </label>
                                <select name="eca[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>

                                </select>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Distant

                                </label>
                                <select name="distant[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="distant">distant</option>
                                    <option value="regular">regular</option>
                                    <option value="online">online</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Country</label>
                                <input name="country[]" class="form-control " type="text" >
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12">

                            <div class="">
                                <label>
                                    <p>Other Attachment </p>
                                </label>
                                <input type="file"   class="form-control" name="attachment[]" >
                            </div>
                        </div>

                    </div>
                    <button  class=" closebtn client-btn" id="removeschool"><a style="color:white"><i class="fa-solid fa-minus"></i> Remove</a></button>
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

                    html = `<div  id="addcollegeform">
            <div class="container addcollege mt-4">
                <div class="whiteBox clearfix">
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>College Name</label>
                                <input class="form-control " name="name[]" type="text" >
                                <input class="form-control " hidden name="type[]" value="college" type="text" >
                                <input class="form-control " hidden name="tech[]" value="NA" type="text" >
                                <input class="form-control " hidden name="qualificationId[]" value="" type="text">

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>College Address </label>
                                <input class="form-control " name="address[]" type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>PG/PHD Year Completed </label>
                                <input class="form-control " name="year_completed[]" type="text" >
                            </div>
                        </div>

                    </div>
                    <div class="row custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Applicable ECA Validity

                                </label>
                                <select name="eca[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option>Yes</option>
                                    <option>No</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Distant

                                </label>
                                <select name="distant[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option>distant</option>
                                    <option>regular</option>
                                    <option>online</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Country</label>
                                <input name="country[]" class="form-control " type="text" >
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12">

                            <div class="">
                                <label>
                                    <p>Other Attachment </p>
                                </label>
                                <input type="file"  class="form-control" name="attachment[]" >
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
                    $(this).closest('#addcollegeform').remove();
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
                                <input class="form-control " name="name[]" type="text" >
                                <input class="form-control " hidden name="type[]" value="PG" type="text" >
                                <input class="form-control " hidden name="tech[]" value="NA" type="text" >
                                <input class="form-control " hidden name="qualificationId[]" value="" type="text">

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>PG Address </label>
                                <input class="form-control " name="address[]" type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Year Completed </label>
                                <input class="form-control " name="year_completed[]" type="text" >
                            </div>
                        </div>

                    </div>
                    <div class="row custom-box">
                    <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Applicable ECA Validity

                                </label>
                                <select name="eca[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option>Yes</option>
                                    <option>No</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Distant

                                </label>
                                <select name="distant[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option>distant</option>
                                    <option>regular</option>
                                    <option>online</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Country</label>
                                <input name="country[]" class="form-control " type="text" >
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12">

                            <div class="">
                                <label>
                                    <p>Other Attachment </p>
                                </label>
                                <input type="file"  class="form-control" name="attachment[]" >
                            </div>
                        </div>

                    </div>
                    <button type="submit" class=" closebtn client-btn" id="removepg"><a  style="color:white">
                            <i class="fa-solid fa-minus"></i> Remove</a></button>
                   </div>
                  </div></div>`

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
        <div  id="addotherform">
            <div class="container addother mt-4">
                <div class="whiteBox clearfix">
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Technical Qualifications</label>
                                <input class="form-control " name="tech[]" type="text" >
                                <input class="form-control " hidden name="type[]" value="other" type="text" >
                                <input class="form-control " hidden name="qualificationId[]" value="" type="text">

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Name of Institute </label>
                                <input class="form-control " name="name[]" type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Institute Address </label>
                                <input class="form-control " name="address[]" type="text" >
                            </div>
                        </div>
                       

                    </div>
                    <div class="row custom-box">
                    <div class="col-lg-3 col-md-3 col-12 ">
                            <div class="form-group">
                                <label>Year Completed </label>
                                <input class="form-control " name="year_completed[]" type="text" >
                            </div>
                        </div>
                    <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Applicable ECA Validity

                                </label>
                                <select name="eca[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option>Yes</option>
                                    <option>No</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Distant

                                </label>
                                <select name="distant[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option>distant</option>
                                    <option>regular</option>
                                    <option>online</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12 ">
                            <div class="form-group">
                                <label>Country</label>
                                <input class="form-control " name="country[]" type="text" >
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12">

                            <div class="">
                                <label>
                                    <p>Other Attachment </p>
                                </label>
                                <input type="file"  class="form-control" name="attachment[]" >
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
                    $(this).closest('#addotherform').remove();
                });

            });
        </script>

</section>
@endsection