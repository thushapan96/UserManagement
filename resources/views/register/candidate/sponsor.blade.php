<h6> Candidate Registration - Sponsor</h6>

<form action="{{route('candidate_sponsor_add')}}" method="POST" id="sponsor_form" enctype="multipart/form-data">
    @csrf

    <h6>Sponsor Details</h6>
    <!--div class="news-title">You have questions, let's have a conversation </div-->
    <div class="row mt-4 custom-box">

        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">

                <input class="form-control " type="text" placeholder="First Name" name="first_name">

            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">

                <input class="form-control " type="text" placeholder="Middle Name" name="middle_name">

            </div>
        </div>

        <div class="col-lg-4 col-md-4  col-12">
            <div class="form-group">

                <input class="form-control " type="text" placeholder="Last Name" name="last_name">

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
                    <option value="Working">Working</option>
                    <option value="Retired">Retired</option>
                    <option value="Business">Business</option>
                </select>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">
                <label>Relationship with Child
                </label>
                <select class="form-control " name="sponsor_relation">
                    <option value="Working">Mother</option>
                    <option value="Retired">Father</option>
                    <option value="Business">Brother</option>
                    <option value="Working">Uncle</option>
                    <option value="Retired">Grand parent</option>
                </select>

            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">
                <label>
                    Mobile Number
                </label>
                <input class="form-control " type="number" placeholder="Mobile" name="sponsor_mobile">
            </div>
        </div>


    </div>

    <div class="row mt-4 custom-box">

        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">

                <input class="form-control " id="pac-input11" type="text" placeholder="Street Address1" name="sponsor_street">

            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">

                <input class="form-control " id="pac-input12" type="text" placeholder="Street Address2" name="sponsor_street2">

            </div>
        </div>

        <div class="col-lg-4 col-md-4  col-12">
            <div class="form-group">
                <input class="form-control " id="pac-input13" type="text" placeholder="City" name="sponsor_city">



            </div>
        </div>

    </div>

    <div class="row mt-4 custom-box">

        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">

                <input class="form-control " id="pac-input14" type="text" placeholder="Region Or State" name="sponsor_region">

            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">

                <input class="form-control " type="text" placeholder="Pin Code" name="sponsor_pincode">

            </div>
        </div>

        <div class="col-lg-4 col-md-4  col-12">
            <div class="form-group">

                <input class="form-control l-icon" id="pac-input15" type="text" placeholder="Enter Country" name="sponsor_country" value="" required>

            </div>
        </div>

    </div>

    <div class="row mt-4 custom-box">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>Telephone Number
                </label>
                <input class="form-control " type="number" name="sponsor_telephone">

            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>
                    Email ID
                </label>
                <input class="form-control " type="email" name="sponsor_email">
                <p style="color:Tomato"> @error('sponsor_email'){{$message}} @enderror</p>
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
                    <option value="Working">Mother</option>
                    <option value="Retired">Father</option>
                    <option value="Business">Brother</option>
                    <option value="Working">Uncle</option>
                    <option value="Retired">Grand parent</option>
                </select>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">
                <label>
                    Mobile Number
                </label>
                <input class="form-control " type="number" placeholder="Mobile" name="guardian_mobile">
            </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">
                <label>
                    Email
                </label>
                <input class="form-control " type="email" placeholder="Email" name="guardian_email">
                <p style="color:Tomato"> @error('guardian_mobile'){{$message}} @enderror</p>

            </div>
        </div>

    </div>

    <div class="row mt-4 custom-box">

        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">

                <input class="form-control " id="pac-input16" type="text" placeholder="Street Address1" name="guardian_street">

            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">

                <input class="form-control " id="pac-input17" type="text" placeholder="Street Address2" name="guardian_street2">

            </div>
        </div>

        <div class="col-lg-4 col-md-4  col-12">
            <div class="form-group">
                <input class="form-control " id="pac-input18" type="text" placeholder="City" name="guardian_city">



            </div>
        </div>

    </div>

    <div class="row mt-4 custom-box">

        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">

                <input class="form-control " id="pac-input19" type="text" placeholder="Region Or State" name="guardian_region">

            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">

                <input class="form-control " type="text" placeholder="Pin Code" name="guardian_pincode">

            </div>
        </div>

        <div class="col-lg-4 col-md-4  col-12">
            <div class="form-group">

                <input class="form-control l-icon" id="pac-input20" type="text" placeholder="Enter Country" name="guardian_country" value="" required>

            </div>
        </div>

    </div>
    <hr>
    <div class="float-right">
        <div class="button_personal" id="loading4">
            <button type="submit" id="" class="client-btn uk-button uk-button-primary">Submit And Next</button>
        </div>
    </div>


</form>




<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#sponsor_form").submit(function(e) {

            e.preventDefault(); // avoid to execute the actual submit of the form.

            var actionUrl = $(this).attr('action');
            var form = new FormData(this);
            $("#loading4").html('');
            $("#loading4").append('<button class="btn btn-primary" type="button" disabled> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>Loading...</button>');

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
                        $('.alert-danger').show();
                        $('.alert-danger').html('');
                        $("#loading4").html('');
                        $("#loading4").html('<button type="submit" id="submit1" class="client-btn uk-button uk-button-primary" >Submit And Next</button>');
                        jQuery.each(data.errors, function(key, value) {
                            console.log(value);
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append('<p style="color:tomato">' + value + '</p>');
                            window.scrollTo(0, 0);

                        });
                    }
                    if (data.success) {
                        sessionStorage. removeItem('css');
                        sessionStorage. removeItem('html');
                        $("#loading4").html('');
                        $("#loading4").html('<button type="submit" id="submit1" class="client-btn uk-button uk-button-primary" >Submit And Next</button>');
                        $('.alert-danger').html('');
                        $('.alert-danger').hide();
                        jQuery('.alert-danger').hide();
                        $(".progress-bar").css("width", "100%");
                        Swal.fire(
                            'Success!',
                            'Successfully submitted sponsor details!',
                            'success'
                        )
                        location.assign("/profile");

                    }

                }
            });

        });

    });
</script>