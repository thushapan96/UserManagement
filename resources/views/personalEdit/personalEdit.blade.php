@extends('layouts.layoutss')

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
<div class="container ">

    <!--
        <div class="whiteBoxtab ">
       
            <div class="cardf">
                <nav class="nav nav-pills nav-fill justify-content-center " style="cursor:pointer;padding: .15rem 0.5rem;">
                    <a class="nav-link active" style="cursor:pointer;padding: 1.15rem 5rem;" aria-current="page" id="amenu">personal</a>
                    <a class="nav-link " style="cursor:pointer;padding: 1.15rem 5rem;" id="amenu1">academy</a>
                    <a class="nav-link" style="cursor:pointer;padding: 1.15rem 5rem;" id="amenu2">work</a>
                    <a class="nav-link " style="cursor:pointer;padding: 1.15rem 5rem;" id="amenu3">sponsor</a>
                </nav>
            </div>
            <div class="progress mt-2">
            <div class="progress-bar progress-bar-danger bg-danger progress-bar-striped " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%" style="cursor:pointer;padding: .15rem 0.5rem;">
                
            </div>
        </div>
        </div> -->


    <div id="menu" class="tab-pane">
        <h5 style="text-align:center">edit Personal Information </h5><br>
        <form action="{{route('profilePersonalupdate',['id' => $personal->user_id])}}" method="POST">
            @csrf

            <div class='uk-card col-md-10' style="margin:auto  ">
                <div class="uk-card-body sc-padding-medium">
                    <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                        <!--div class="news-title">You have questions, let's have a conversation </div-->
                        <div class="row custom-box">

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label class="uk-form-label">Name</label>
                                    <input name="first_name" class="uk-input " type="text" placeholder="First Name" value="{{$personal->first_name}}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 mt-2">
                                <div class="form-group">
                                   <label class="uk-form-label" > </label>
                                    <input name="middle_name" class="uk-input" type="text" placeholder="Middle Name" value="{{$personal->middle_name}}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 mt-2">
                                <div class="form-group">
                                   <label class="uk-form-label" > </label>
                                    <input name="last_name" class="uk-input " type="text" placeholder="Last Name" value="{{$personal->last_name}}">
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="row custom-box">

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                   <label class="uk-form-label" >Present Residential Address</label>
                                    <input name="residential_street" class="form-control " type="text" placeholder="Street Address" value="{{$personal->residential_street}}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 mt-2">
                                <div class="form-group">
                                   <label class="uk-form-label" > </label>
                                    <input name="residential_street2" class="form-control " type="text" placeholder="Street Address 2" value="{{$personal->residential_street2}}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 mt-2">
                                <div class="form-group">
                                   <label class="uk-form-label" > </label>
                                    <input name="residential_city" class="form-control " type="text" placeholder="City" value="{{$personal->residential_city}}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                   <label class="uk-form-label" ></label>
                                    <input name="residential_region" class="form-control " type="text" placeholder="Region or State" value="{{$personal->residential_region}}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="form-group">
                                   <label class="uk-form-label" > </label>
                                    <input name="residential_pincode" class="form-control " type="text" placeholder="Pin Code " value="{{$personal->residential_pincode}}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                   <label class="uk-form-label" ></label>
                                    <input class="form-control l-icon" type="text" placeholder="Enter Country" name="residential_country" value="{{$personal->residential_country}}" required>

                                </div>
                            </div>

                        </div>

                        <hr>
                        <div class="row custom-box">

                            <div class="col-lg-3 col-md-3 col-12 m-1 ">
                                <div class="form-group">
                                   <label class="uk-form-label" >Corosponding Address</label>
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-9 col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckaddress" name="same_Correspondence_address" value="1">
                                    class="uk-form-label" class="custom-control-label " for="customCheckaddress"> Check the Box if
                                    Correspondence
                                    Address
                                    is same as Present Residential Address. </label>
                                </div>
                            </div>

                            <div class="row m-1 sameaddress" id="sameaddress">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                       <label class="uk-form-label" ></label>
                                        <input class="form-control " name="corosponding_street" type="text" placeholder="Street Address" value="{{$personal->corosponding_street}}">
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-4 col-12 ">
                                    <div class="form-group">
                                       <label class="uk-form-label" > </label>
                                        <input class="form-control " name="corosponding_street2" type="text" placeholder="Street Address 2" value="{{$personal->corosponding_street2}}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 ">
                                    <div class="form-group">
                                       <label class="uk-form-label" > </label>
                                        <input class="form-control " name="corosponding_city" type="text" placeholder="City" value="{{$personal->corosponding_city}}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                       <label class="uk-form-label" ></label>
                                        <input class="form-control " name="corosponding_region" type="text" placeholder="Region or State" value="{{$personal->corosponding_region}}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 ">
                                    <div class="form-group">
                                       <label class="uk-form-label" > </label>
                                        <input class="form-control " name="corosponding_pincode" type="text" placeholder="Pin Code " value="{{$personal->corosponding_pincode}}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                       <label class="uk-form-label" ></label>
                                        <input class="form-control l-icon" type="text" placeholder="Enter Country" name="corosponding_country" value="{{$personal->corosponding_country}}">

                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="row mb-4">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                   <label class="uk-form-label" >Contact Info</label>
                                    <input name="mobile" class="form-control " type="text" placeholder="Mobile" value="{{$personal->mobile}}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 mt-2">
                                <div class="form-group">
                                   <label class="uk-form-label" ></label>
                                    <input name="phone" class="form-control " type="text" placeholder="Phone" value="{{$personal->phone}}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 mt-2">
                                <div class="form-group">
                                   <label class="uk-form-label" ></label>
                                    <input name="email" class="form-control " type="email" placeholder="Email" value="{{$personal->email}}">
                                    <p style="color:Tomato"> @error('email'){{$message}} @enderror</p>
                                </div>
                            </div>

                        </div>

                        <hr>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                   <label class="uk-form-label" >Date of Birth</label>
                                    <input name="birth_date" class="form-control" type="date" placeholder="Date of Birth" value="{{$personal->birth_date}}">
                                </div>
                            </div>

                            <div class="col-lg-1 col-md-1 col-12">
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                       <label class="uk-form-label" >Gender</label>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input" id="customradio" name="gender" value="male" {{$personal->gender == 'male' ? 'checked':''}}>
                                            class="uk-form-label" class="custom-control-label mt-1" for="customradio">Male</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input" id="customradio1" name="gender" value="female" {{$personal->gender == 'female' ? 'checked':''}}>
                                            class="uk-form-label" class="custom-control-label mt-1" for="customradio1">Female</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input" id="customradio2" name="gender" value="other" {{$personal->gender == 'other' ? 'checked':''}}>
                                            class="uk-form-label" class="custom-control-label mt-1" for="customradio2">Other</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-4 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="customradio3" name="gender" value="Prefer Not to say" {{$personal->gender == 'Prefer Not to say' ? 'checked':''}}>
                                            class="uk-form-label" class="custom-control-label mt-1" for="customradio3">Prefer Not to say
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr>

                        <div class="row mb-4">
                            <div class="col-lg-6 col-md-6 col-12">
                               <label class="uk-form-label" >Have you applied Visa for USA and Canada
                                </label>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="customradio4" name="is_already_apply" value="yes" {{$personal->is_already_apply == 'yes' ? 'checked':''}}>
                                            class="uk-form-label" class="custom-control-label mt-1" for="customradio4">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="customradio5" name="is_already_apply" value="no" {{$personal->is_already_apply == 'no' ? 'checked':''}}>
                                            class="uk-form-label" class="custom-control-label mt-1" for="customradio5">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                   <label class="uk-form-label" >Possible Start Date
                                    </label>
                                    <input class="form-control" type="date" name="possible_start_date" placeholder="For Immigration Process" value='{{$personal->possible_start_date}}'>
                                </div>
                            </div>
                        </div>



                        <div class="row mb-4">
                            <div class="col-lg-12 col-md-12 col-12">
                               <label class="uk-form-label" >Which Describes you best?
                                </label>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="customradio6" name="immigration_purpose" value="Student" {{$personal->immigration_purpose == 'Student' ? 'checked':''}}>
                                    class="uk-form-label" class="custom-control-label mt-1" for="customradio6">Student</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="customradio7" name="immigration_purpose" value="Employed" {{$personal->immigration_purpose == 'Employed' ? 'checked':''}}>
                                    class="uk-form-label" class="custom-control-label mt-1" for="customradio7">Employed</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="customradio8" name="immigration_purpose" value="Self Employed" {{$personal->immigration_purpose == 'Self Employed' ? 'checked':''}}>
                                    class="uk-form-label" class="custom-control-label mt-1" for="customradio8">SelfEmployed</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="customradio9" name="immigration_purpose" value="Retired" {{$personal->immigration_purpose == 'Retired' ? 'checked':''}}>
                                    class="uk-form-label" class="custom-control-label mt-1" for="customradio9">Retired</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="customradio10" name="immigration_purpose" value="Business" {{$personal->immigration_purpose == 'Business' ? 'checked':''}}>
                                    class="uk-form-label" class="custom-control-label mt-1" for="customradio10">Business</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="customradio11" name="immigration_purpose" value="Unemployed" {{$personal->immigration_purpose == 'Unemployed' ? 'checked':''}}>
                                    class="uk-form-label" class="custom-control-label mt-1" for="customradio11">Unemployed</label>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row mb-4">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                   <label class="uk-form-label" >Preference of Immigration
                                    </label>
                                    <select name="immigration_preference" class="form-control">
                                        <option value="PNP" {{$personal->immigration_preference == 'PNP' ? 'selected':''}}>PNP</option>
                                        <option value="AIPP" {{$personal->immigration_preference == 'AIPP' ? 'selected':''}}>AIPP</option>
                                        <option value="Visit" {{$personal->immigration_preference == 'Visit' ? 'selected':''}}>Visit</option>
                                        <option value="Student" {{$personal->immigration_preference == 'Student' ? 'selected':''}}>Student</option>
                                        <option value="Business" {{$personal->immigration_preference == 'Business' ? 'selected':''}}>Business</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-12 ">
                               <label class="uk-form-label" >Have you been Vaccinated against COVID
                                </label>

                                <div class="row">

                                    <div class="col-lg-4 col-md-4 col-12 ml-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="customradio12" name="is_vaccinate" value="Yes" {{$personal->is_vaccinate == 'Yes' ? 'checked':''}}>
                                            class="uk-form-label" class="custom-control-label mt-1" for="customradio12">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="customradio13" name="is_vaccinate" value="No" {{$personal->is_vaccinate == 'No' ? 'checked':''}}>
                                            class="uk-form-label" class="custom-control-label mt-1" for="customradio13">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="row mb-1">

                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                   <label class="uk-form-label" >Social Media Profile

                                    </label>
                                    <div class="row">
                                        <a class="facebook col-4" href="##">
                                            <div class="icon col-lg-1 col-md-1 col-1 fa-2xl">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                            <div id="facebook" class="col-lg-11 col-md-11 col-11  ">
                                                <div class="form-group">
                                                   <label class="uk-form-label" > </label>

                                                    <input id="fb_link" name="fb_link" class="form-control " type="text" placeholder="Facebook Profile " value="{{$personal->fb_link}}">
                                                </div>
                                            </div>
                                        </a>
                                        <a class="twitter col-4" href="##">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                                <i class="fab fa-twitter"></i>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-11  " id="twitter">
                                                <div class="form-group">
                                                   <label class="uk-form-label" > </label>
                                                    <input id="twitter_link" name="twitter_link" class="form-control " type="text" placeholder="Twitter Profile " value="{{$personal->twitter_link}}">
                                                </div>
                                            </div>
                                        </a>
                                        <a class="instagram col-4" href="##">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-11  " id="instagram">
                                                <div class="form-group">
                                                   <label class="uk-form-label" > </label>
                                                    <input id="insta_link" name="insta_link" class="form-control " type="text" placeholder="Instagram Profile " value="{{$personal->insta_link}}">
                                                </div>
                                            </div>
                                        </a>
                                        <a class="linkedin col-4" href="##">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                                <i class="fab fa-linkedin-in"></i>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-11  " id="linkedin">
                                                <div class="form-group">
                                                   <label class="uk-form-label" > </label>
                                                    <input id="Linkedin_link" name="Linkedin_link" class="form-control " type="text" placeholder="Linkedin Profile " value="{{$personal->Linkedin_link}}">
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-1 float-right">
                            <a class="sc-button sc-button-custom md-bg-grey-600 sc-js-button-wave-light waves-effect waves-button waves-light" href="{{route('personalProfile')}}">Cancel</a>
                            &nbsp;&nbsp;
                            <button class="btn uk-button uk-button-primary profile-button " type="submit">Update</button>

                        </div>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>




</div>








<div id="map" style=" height: 500px; width:100%"> </div>




<script>
    $(document).ready(function() {
        console.log("hi")
        // $('.tab-pane').fadeOut();
        // $("#menu").fadeIn();
        // $("#amenu").click(function() {
        //     $('.tab-pane').fadeOut();
        //     $("#menu").fadeIn();
        //     $(".nav-link").removeClass('active')
        //     $(this).addClass('active')
        // });
        // $("#amenu1").click(function() {
        //     $('.tab-pane').fadeOut();
        //     $("#menu1").fadeIn();
        //     $(".nav-link").removeClass('active')
        //     $(this).addClass('active')
        // });
        // $("#amenu2").click(function() {
        //     $('.tab-pane').fadeOut();
        //     $("#menu2").fadeIn();
        //     $(".nav-link.active").removeClass('active')
        //     $(this).addClass('active')
        // });
        // $("#amenu3").click(function() {
        //     $('.tab-pane').fadeOut();
        //     $("#menu3").fadeIn();
        //     $(".nav-link.active").removeClass('active')
        //     $(this).addClass('active')
        // });
        if ($('[name="same_Correspondence_address"]').is(':checked')) {
            // Do something...
            $('#sameaddress').addClass('d-none');
        } else {
            $('#sameaddress').removeClass('d-none');
        };

        $('[name="same_Correspondence_address"]').change(function() {
            if ($(this).is(':checked')) {
                // Do something...
                $('#sameaddress').addClass('d-none');
            } else {
                $('#sameaddress').removeClass('d-none');
            };
        });
        if ($('#fb_link').val() != '') {
            $('#facebook').removeClass('d-none');
        }
        if ($('#twitter_link').val() != '') {
            $('#twitter').removeClass('d-none');
        }
        if ($('#insta_link').val() != '') {
            $('#instagram').removeClass('d-none');
        }
        if ($('#Linkedin_link').val() != '') {
            $('#linkedin').removeClass('d-none');
        }
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

<script>
    $(document).ready(function() {

        $(".progress-bar").css("width", "0%");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#personal_form").submit(function(e) {

            e.preventDefault(); // avoid to execute the actual submit of the form.

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
                    $(".progress-bar").css("width", "25%");
                    $('.tab-pane').fadeOut();
                    $("#menu1").fadeIn();
                    $(".nav-link").removeClass('active')
                    $('#amenu1').addClass('active')

                }
            });

        });

    });
</script>
<!-- ...................end...script for google map view.................... -->


@endsection