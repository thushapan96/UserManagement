
 
        <h1> Candidate Registation - Sponsor</h1>

        <div class="whiteBox clearfix">


            <h6>Sponsor Details</h6>
            <!--div class="news-title">You have questions, let's have a conversation </div-->
            <div class="row mt-4 custom-box">

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">

                        <input class="form-control " type="text" placeholder="First Name">

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">

                        <input class="form-control " type="text" placeholder="Middle Name">

                    </div>
                </div>

                <div class="col-lg-4 col-md-4  col-12">
                    <div class="form-group">

                        <input class="form-control " type="text" placeholder="Last Name">

                    </div>
                </div>

            </div>

            <hr>

            <div class="row mt-4 custom-box">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label>Relationship with Child
                        </label>
                        <input class="form-control " type="text" placeholder="Choose Relationship">

                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label>
                            Mobile Number
                        </label>
                        <input class="form-control " type="number" placeholder="Mobile">
                    </div>
                </div>


            </div>

            <hr>

            <div class="row mt-4 custom-box">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label>Telephone Number
                        </label>
                        <input class="form-control " type="number">

                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label>
                            Email ID
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>
            </div>

            <hr style="height:12px;">

            <h6>Address of Guardian</h6>
            <!--div class="news-title">You have questions, let's have a conversation </div-->
            <div class="row mt-4 custom-box">

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">

                        <input class="form-control " type="text" placeholder="Street Address1">

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">

                        <input class="form-control " type="text" placeholder="Street Address2">

                    </div>
                </div>

                <div class="col-lg-4 col-md-4  col-12">
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="City">



                    </div>
                </div>

            </div>

            <div class="row mt-4 custom-box">

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">

                        <input class="form-control " type="text" placeholder="Region Or State">

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">

                        <input class="form-control " type="text" placeholder="Pin Code">

                    </div>
                </div>

                <div class="col-lg-4 col-md-4  col-12">
                    <div class="form-group">

                        <input class="form-control l-icon" type="text" placeholder="Choose Country" name="Choose Country" id="pac-input2" value="" required>

                    </div>
                </div>

            </div>

            <div class="float-right">
                <button type="submit" class="client-btn">Submit And Finish </button>
            </div>
        </div>
    


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
