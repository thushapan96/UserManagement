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
                    <input name="email" type="email" class="form-control " placeholder="Email" required>

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
            <div class="row col-lg-8 col-md-8  col-12">
                <div class="col-lg-12 col-md-12 col-12">
                    <label>Gender</label>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-12 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input" id="customradio" name="gender" value="male">
                                <label class="custom-control-label mt-1" for="customradio">Male</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input" id="customradio1" name="gender" value="female">
                                <label class="custom-control-label mt-1" for="customradio1">Female</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input" id="customradio2" name="gender" value="other">
                                <label class="custom-control-label mt-1" for="customradio2">Other</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="customradio3" name="gender" value="Prefer Not to say">
                                <label class="custom-control-label mt-1" for="customradio3">Prefer Not to say
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="row mb-4">
            <div class="col-lg-6 col-md-6 col-12">
                <label>Have you applied Visa for USA and Canada
                </label>
                <div class="row">
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
            </div>

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
                        <option value="AIP">AIP</option>
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


        <div class="float-right">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="button_personal" id="loading1">
                    <button type="submit" id="submit1" class="client-btn uk-button uk-button-primary">Submit And Next</button>
                </div>

            </div>
        </div>


    </div>
</form>


<script>
    $(document).ready(function() {
        console.log("hi")

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

            e.preventDefault(); // avoid to execute the actual submit of the form. $("#loading1").
            $("#loading1").html('');
            $("#loading1").append('<button class="btn btn-primary" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>Loading...</button>');

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
                        $("#loading1").html('');
                        $("#loading1").html('<button type="submit" id="submit1" class="client-btn uk-button uk-button-primary" >Submit And Next</button>');
                        jQuery('.alert-danger').html('');
                        jQuery.each(data.errors, function(key, value) {
                            console.log(value);
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append('<p style="color:red">' + value + '</p>');
                            window.scrollTo(0, 0);


                        });
                    }
                    if (data.success) {
                        console.log("byeeeeeeeeee");

                        function first(callback) {
                            location.reload();
                        }

                        function second() {
                            $("#loading1").html('');
                            $("#loading1").html(' <button type="button" class="client-btn uk-button uk-button-primary" ">Submitted</button>');
                            jQuery('.alert-danger').html('');
                            jQuery('.alert-danger').hide();

                            Swal.fire(
                                'Success!',
                                'Successfully submitted personal details!',
                                'success'
                            )

                            $(".progress-bar").css("width", "25%");
                            $(".progress-bar").html("25%");
                            sessionStorage.setItem('css', '25%')
                            sessionStorage.setItem('html', '25%')

                            $('.tab-pane').removeClass('uk-active');
                            $("#menu1").addClass('uk-active')
                            $(".nav-linkk").removeClass('uk-active')
                            $('#amenu1').addClass('uk-active')
                        }

                        second(function() {
                            first();
                        });

                    }

                }
            });

        });

    });
</script>