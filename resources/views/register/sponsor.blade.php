<h1> Candidate Registration - Sponsor</h1>

<form action="{{route('candidate_sponsor_add')}}" method="POST" id="sponsor_form" enctype="multipart/form-data">
    @csrf
    <div class="whiteBox clearfix">

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

                    <input class="form-control " type="text" placeholder="Street Address1" name="sponsor_street">

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="form-group">

                    <input class="form-control " type="text" placeholder="Street Address2" name="sponsor_street2">

                </div>
            </div>

            <div class="col-lg-4 col-md-4  col-12">
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="City" name="sponsor_city">



                </div>
            </div>

        </div>

        <div class="row mt-4 custom-box">

            <div class="col-lg-4 col-md-4 col-12">
                <div class="form-group">

                    <input class="form-control " type="text" placeholder="Region Or State" name="sponsor_region">

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="form-group">

                    <input class="form-control " type="text" placeholder="Pin Code" name="sponsor_pincode">

                </div>
            </div>

            <div class="col-lg-4 col-md-4  col-12">
                <div class="form-group">

                    <input class="form-control l-icon" type="text" placeholder="Enter Country" name="sponsor_country" value="" required>

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

                    <input class="form-control " type="text" placeholder="Street Address1" name="guardian_street">

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="form-group">

                    <input class="form-control " type="text" placeholder="Street Address2" name="guardian_street2">

                </div>
            </div>

            <div class="col-lg-4 col-md-4  col-12">
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="City" name="guardian_city">



                </div>
            </div>

        </div>

        <div class="row mt-4 custom-box">

            <div class="col-lg-4 col-md-4 col-12">
                <div class="form-group">

                    <input class="form-control " type="text" placeholder="Region Or State" name="guardian_region">

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="form-group">

                    <input class="form-control " type="text" placeholder="Pin Code" name="guardian_pincode">

                </div>
            </div>

            <div class="col-lg-4 col-md-4  col-12">
                <div class="form-group">

                    <input class="form-control l-icon" type="text" placeholder="Enter Country" name="guardian_country" value="" required>

                </div>
            </div>

        </div>

        <div class="float-right">
            <button type="submit" class="client-btn" id="submit4">
                <div id="loading4">Submit
                    And
                    Next
                </div>
            </button>
        </div>
    </div>

</form>

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
            $("#loading4").append(' <i class="fa fa-refresh fa-spin"></i>');

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
                        $('.alert-danger').html('');
                        jQuery.each(data.errors, function(key, value) {
                            console.log(value);
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append('<p>' + value + '</p>');
                            window.scrollTo(0, 0);
                            $("#loading4").html('');
                            $("#loading4").html('Submit And Next');

                        });
                    }
                    if (data.success) {
                        $('.alert-danger').html('');
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