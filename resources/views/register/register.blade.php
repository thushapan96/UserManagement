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

        <u1 class="col-md-8" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:auto !important;margin-right:auto !important">
            <li class="nav-linkk " id="amenu"><a style="cursor:pointer;padding: 0.5rem 1.8rem;" aria-current="page">personal </a></li>
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
                            <form id="personal_form" action="{{route('candidate_personal_add')}}" method="POST">
                                @csrf
                                <h6>Candidate Registration - Personal Info</h6>

                                <div class="whiteBox clearfix" style="background-color:D80621;">

                                    <!--div class="news-title">You have questions, let's have a conversation </div-->
                                    <div class="row custom-box">

                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input name="first_name" class="form-control " type="text" placeholder="First Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 mt-2">
                                            <div class="form-group">
                                                <label> </label>
                                                <input name="middle_name" class="form-control " type="text" placeholder="Middle Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 mt-2">
                                            <div class="form-group">
                                                <label> </label>
                                                <input name="last_name" class="form-control " type="text" placeholder="Last Name">
                                            </div>
                                        </div>

                                    </div>

                                    <hr>

                                    <div class="row custom-box">

                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Present Residential Address</label>
                                                <input name="residential_street" class="form-control " id="pac-input1" type="text" placeholder="Street Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 mt-2">
                                            <div class="form-group">
                                                <label> </label>
                                                <input name="residential_street2" id="pac-input2" class="form-control " type="text" placeholder="Street Address 2">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 mt-2">
                                            <div class="form-group">
                                                <label> </label>
                                                <input name="residential_city" id="pac-input3" class="form-control " type="text" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label></label>
                                                <input name="residential_region" id="pac-input4" class="form-control " type="text" placeholder="Region or State">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 ">
                                            <div class="form-group">
                                                <label> </label>
                                                <input name="residential_pincode" class="form-control " type="text" placeholder="Pin Code ">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label></label>
                                                <input class="form-control l-icon" id="pac-input5" type="text" placeholder="Enter Country" name="residential_country" value="" required>

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
                                                <input type="checkbox" class="custom-control-input" id="customCheckaddress" name="same_Correspondence_address" value="1">
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
                                                    <input class="form-control " id="pac-input6" name="corosponding_street" type="text" placeholder="Street Address">
                                                </div>
                                            </div>


                                            <div class="col-lg-4 col-md-4 col-12 ">
                                                <div class="form-group">
                                                    <label> </label>
                                                    <input class="form-control " id="pac-input7" name="corosponding_street2" type="text" placeholder="Street Address 2">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12 ">
                                                <div class="form-group">
                                                    <label> </label>
                                                    <input class="form-control " id="pac-input8" name="corosponding_city" type="text" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input class="form-control " id="pac-input9" name="corosponding_region" type="text" placeholder="Region or State">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12 ">
                                                <div class="form-group">
                                                    <label> </label>
                                                    <input class="form-control " name="corosponding_pincode" type="text" placeholder="Pin Code ">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input class="form-control l-icon" id="pac-input10" type="text" placeholder="Enter Country" name="corosponding_country" value="">

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row mb-4">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Contact Info</label>
                                                <input name="mobile" class="form-control " type="number" placeholder="Mobile">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 mt-2">
                                            <div class="form-group">
                                                <label></label>
                                                <input name="phone" class="form-control " type="number" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 mt-2">
                                            <div class="form-group">
                                                <label></label>
                                                <input name="email" type="email" class="form-control " placeholder="Email">

                                            </div>
                                        </div>

                                    </div>


                                    <hr>

                                    <div class="row mb-4">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input name="birth_date" class="form-control" type="date" placeholder="Date of Birth">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-2 ">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input" id="customradio" name="gender" value="male">
                                                    <label class="custom-control-label mt-1" for="customradio">Male</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-2 ">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input" id="customradio1" name="gender" value="female">
                                                    <label class="custom-control-label mt-1" for="customradio1">Female</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-2 ">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input" id="customradio2" name="gender" value="other">
                                                    <label class="custom-control-label mt-1" for="customradio2">Other</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-4 ">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input " id="customradio3" name="gender" value="Prefer Not to say">
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
                                                <input type="radio" class="custom-control-input " id="customradio4" name="is_already_apply" value="yes">
                                                <label class="custom-control-label mt-1" for="customradio4">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-2 ">
                                            <div class="custom-control custom-radio ">
                                                <input type="radio" class="custom-control-input " id="customradio5" name="is_already_apply" value="no">
                                                <label class="custom-control-label mt-1" for="customradio5">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-1">

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Possible Start Date
                                                </label>
                                                <input class="form-control" type="date" name="possible_start_date" placeholder="For Immigration Process">
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
                                                <input type="radio" class="custom-control-input " id="customradio6" name="immigration_purpose" value="Student">
                                                <label class="custom-control-label mt-1" for="customradio6">Student</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-12 ">
                                            <div class="custom-control custom-radio ">
                                                <input type="radio" class="custom-control-input " id="customradio7" name="immigration_purpose" value="Employed">
                                                <label class="custom-control-label mt-1" for="customradio7">Employed</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-12 ">
                                            <div class="custom-control custom-radio ">
                                                <input type="radio" class="custom-control-input " id="customradio8" name="immigration_purpose" value="Self Employed">
                                                <label class="custom-control-label mt-1" for="customradio8">SelfEmployed</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-12 ">
                                            <div class="custom-control custom-radio ">
                                                <input type="radio" class="custom-control-input " id="customradio9" name="immigration_purpose" value="Retired">
                                                <label class="custom-control-label mt-1" for="customradio9">Retired</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-12 ">
                                            <div class="custom-control custom-radio ">
                                                <input type="radio" class="custom-control-input " id="customradio10" name="immigration_purpose" value="Business">
                                                <label class="custom-control-label mt-1" for="customradio10">Business</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-12 ">
                                            <div class="custom-control custom-radio ">
                                                <input type="radio" class="custom-control-input " id="customradio11" name="immigration_purpose" value="Unemployed">
                                                <label class="custom-control-label mt-1" for="customradio11">Unemployed</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Preference of Immigration
                                                </label>
                                                <select name="immigration_preference" class="form-control">
                                                    <option value="PNP">PNP</option>
                                                    <option value="AIPP">AIPP</option>
                                                    <option value="Visit">Visit</option>
                                                    <option value="Student">Student</option>
                                                    <option value="Business">Business</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>upload profile image
                                                </label>
                                                <input class="form-control" type="file" name="img">

                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-12 ">
                                            <label>Have you been Vaccinated against COVID
                                            </label>
                                        </div>
                                        <div class="row">

                                            <div class="col-lg-6 col-md-6 col-12 ml-3 ">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input " id="customradio12" name="is_vaccinate" value="Yes">
                                                    <label class="custom-control-label mt-1" for="customradio12">Yes</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-12 ">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input " id="customradio13" name="is_vaccinate" value="No">
                                                    <label class="custom-control-label mt-1" for="customradio13">No</label>
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
                                                        <div class="icon col-lg-1 col-md-1 col-1 fa-2xl">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </div>
                                                        <div id="facebook" class="col-lg-11 col-md-11 col-11 d-none ">
                                                            <div class="form-group">
                                                                <label> </label>
                                                                <input name="fb_link" class="form-control " type="text" placeholder="Facebook Profile ">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="twitter" href="##">
                                                        <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                                            <i class="fab fa-twitter"></i>
                                                        </div>
                                                        <div class="col-lg-11 col-md-11 col-11 d-none " id="twitter">
                                                            <div class="form-group">
                                                                <label> </label>
                                                                <input name="twitter_link" class="form-control " type="text" placeholder="Twitter Profile ">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="instagram" href="##">
                                                        <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                                            <i class="fab fa-instagram"></i>
                                                        </div>
                                                        <div class="col-lg-11 col-md-11 col-11 d-none " id="instagram">
                                                            <div class="form-group">
                                                                <label> </label>
                                                                <input name="insta_link" class="form-control " type="text" placeholder="Instagram Profile ">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="linkedin" href="##">
                                                        <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                                            <i class="fab fa-linkedin-in"></i>
                                                        </div>
                                                        <div class="col-lg-11 col-md-11 col-11 d-none " id="linkedin">
                                                            <div class="form-group">
                                                                <label> </label>
                                                                <input name="Linkedin_link" class="form-control " type="text" placeholder="Linkedin Profile ">
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
                                            <a href="{{route('candidate_personal_add')}}"> <button type="submit" id="submit1" class="client-btn uk-button uk-button-primary" onclick="this.classList.toggle('running')">
                                                    <div id="loading1">Submit
                                                        And
                                                        Next
                                                    </div>
                                                    <div class="ld ld-ring ld-spin"></div>
                                                </button> </a>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </li>
            <li id='menu1' class='tab-pane '>
                <div class='uk-card ' style="">
                    <div class="uk-card-body sc-padding-medium">
                        <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                            @include('register.registerformone')
                        </fieldset>
                    </div>
                </div>
            </li>
            <li id='menu2' class='tab-pane '>
                <div class='uk-card ' style="">
                    <div class="uk-card-body sc-padding-medium">
                        <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                            @include('register.workexperience')
                        </fieldset>
                    </div>
                </div>
            </li>
            <li id='menu3' class='tab-pane '>
                <div class='uk-card ' style="">
                    <div class="uk-card-body sc-padding-medium">
                        <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                            @include('register.sponsor')
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

<script>
    $(document).ready(function() {
        console.log("hi")

        $("#amenu").click(function() {

        });
        $("#amenu1").click(function() {

        });
        $("#amenu2").click(function() {

        });
        $("#amenu3").click(function() {

        });
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

<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#personal_form").submit(function(e) {

            e.preventDefault(); // avoid to execute the actual submit of the form.
            $("#loading1").append(' <i class="fa fa-refresh fa-spin"></i>');

            var actionUrl = $(this).attr('action');
            var form = new FormData(this);

            $.ajax({
                type: "POST",
                url: actionUrl,
                cache: false,
                data: form,
                contentType: false,
                processData: false, // serializes the form's elements.
                success: function(data) {
                    console.log(data);
                    if (data.errors) {
                        console.log("hiiiiii");
                        jQuery('.alert-danger').html('');
                        jQuery.each(data.errors, function(key, value) {
                            console.log(value);
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append('<p>' + value + '</p>');
                            window.scrollTo(0, 0);
                            $("#loading1").html('');
                            $("#loading1").html('Submit And Next');

                        });
                    }
                    if (data.success) {
                        console.log("byeeeeeeeeee");
                        jQuery('.alert-danger').html('');
                        jQuery('.alert-danger').hide();
                        Swal.fire(
                            'Success!',
                            'Successfully submitted personal details!',
                            'success'
                        )

                        $(".progress-bar").css("width", "25%");
                        $(".progress-bar").html("25%");

                        $('.tab-pane').fadeOut();
                        $("#menu1").fadeIn();
                        $(".nav-link").removeClass('active')
                        $('#amenu1').addClass('active')
                        $('#submit1').hide();
                    }

                }
            });

        });

    });
</script>
<!-- ...................end...script for google map view.................... -->
</section>


@endsection