@extends('layouts.layout')

@section('content')


<!-- Subscribe & Stay Connected. Start -->
<section class="StayConnected clearfix">
    <h1>RCIC Consultant Enrollment</h1>
    <div class="container">

        <h6>RCIC Consultants to provide correct information. This will allow us to incorporate your information on our Portal databank for the International aspirant Candidates to access, explore and know more about the Consultants services and specialization.</h6>
        <h6></h6>
        <br>
        <div class="whiteBox clearfix" style="max-width: none;">
            <!--div class="news-title">You have questions, let's have a conversation </div-->
            <div class="row custom-box">

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <label>First Name *
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <label>Last Name *
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <label>RCIC Registration Number *
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>


            </div>
            <hr>

            <div class="row custom-box">

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <label>Company Name *
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Registered Office - Location *
                        </label>
                        <input class="form-control " type="text" placeholder="Area">
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Status *
                        </label>
                        <select class="form-control">
                            <option>Active</option>
                            <option>In Active</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Languages Known *
                        </label>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Languages1" name="Languages" value="">
                            <label class="custom-control-label" for="Languages1"> English</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Languages2" name="Languages" value="">
                            <label class="custom-control-label" for="Languages2"> French</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Languages3" name="Languages" value="">
                            <label class="custom-control-label" for="Languages3"> Others</label>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="row custom-box">

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Country *

                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Province/Region *

                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>City *

                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Street *
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>


            </div>

            <hr>
            <div class="row custom-box">

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Postal Code *
                        </label>
                        <br>
                        <br>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Email address for correspondence *
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>URL - Website Address *
                        </label>
                        <br>
                        <br>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Contact Number *
                        </label>
                        <br>
                        <br>
                        <input class="form-control " type="text">
                    </div>
                </div>


            </div>
            <hr>

            <div class="row custom-box">

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Specialization *
                        </label>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Specialization1" name="Specialization" value="">
                            <label class="custom-control-label" for="Specialization1"> Express Entry </label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Specialization2" name="Specialization" value="">
                            <label class="custom-control-label" for="Specialization2"> PNP</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Specialization3" name="Specialization" value="">
                            <label class="custom-control-label" for="Specialization3"> LMIA</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Specialization4" name="Specialization" value="">
                            <label class="custom-control-label" for="Specialization4"> Others</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Express Entry - Success
                        </label>
                        <input class="form-control " type="text" placeholder="10/10">
                        <small>No. of Enrolment/Success</small>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>PNP Success
                        </label>
                        <input class="form-control " type="text">
                        <small>No. of Enrolment/Success</small>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>LMIA Success
                        </label>
                        <input class="form-control " type="text">
                        <small>No. of Enrolment/Success</small>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Others Success
                        </label>
                        <input class="form-control " type="text">
                        <small>No. of Enrolment/Success</small>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row custom-box">

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Service Offered *</label>

                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Service1" name="Service" value="">
                            <label class="custom-control-label" for="Service1">Student Visa</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Service2" name="Service" value="">
                            <label class="custom-control-label" for="Service2"> Tourist Visa</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Service3" name="Service" value="">
                            <label class="custom-control-label" for="Service3"> Family Visa</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Service4" name="Service" value="">
                            <label class="custom-control-label" for="Service4"> Other Visa</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Other Services *
                        </label>
                        <br>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="OtherServices1" name="OtherServices" value="">
                            <label class="custom-control-label" for="OtherServices1"> Innovator Visa</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="OtherServices2" name="OtherServices" value="">
                            <label class="custom-control-label" for="OtherServices2">Franchisee</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="OtherServices3" name="OtherServices" value="">
                            <label class="custom-control-label" for="OtherServices3"> Intra Company Transfer</label><br>
                        </div>

                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Student Visa - Success
                        </label>

                        <input class="form-control " type="text" placeholder="10/10">
                        <small>No. of Enrolment/Success</small>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Tourist Visa Success
                        </label>
                        <input class="form-control " type="text">
                        <small>No. of Enrolment/Success</small>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Family Visa Success
                        </label>
                        <input class="form-control " type="text">
                        <small>No. of Enrolment/Success</small>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Other Visa Success
                        </label>
                        <br>
                        <br>
                        <input class="form-control " type="text">
                        <small>No. of Enrolment/Success</small>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row custom-box">

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Year of Establishment
                        </label>
                        <input class="form-control " type="text" placeholder="Year of Registration">
                        <small>Year of Registration</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Offering Services Since
                        </label>
                        <input class="form-control " type="text" placeholder="Number of Years">
                        <small>Number of Years</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Response Time
                        </label>
                        <input class="form-control " type="text" placeholder="24 or 48 or 72 Hours">
                        <small>Number of Cases Enrolled till Date</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Mode of Communication
                        </label>

                        <input class="form-control " type="text" placeholder="Email / Messaging / Telephone">
                        <small>Successful Cases in %</small>
                    </div>
                </div>

            </div>
            <hr>

            <div class="row custom-box">

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <label>What type of Correspondence you prefer?
                        </label>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input" id="preferemail" name="prefer">
                                <label class="custom-control-label mt-1" for="preferemail">email</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="preferPhone" name="prefer">
                                <label class="custom-control-label mt-1" for="preferPhone">phone</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="preferMessaging" name="prefer">
                                <label class="custom-control-label mt-1" for="preferMessaging">Messaging</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <label>Response Time
                        </label>
                        <input type="text" class="form-control">
                        <small>24 or 48 or 72 Hours</small>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <label>Is your Initial Consultation chargeable?
                        </label>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input" id="Consultationchargeable" name="Consultationchargeable">
                                <label class="custom-control-label mt-1" for="Consultationchargeable">free</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="Consultationchargeable2" name="Consultationchargeable">
                                <label class="custom-control-label mt-1" for="Consultationchargeable2">paid</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row custom-box">

                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>Your Team of Expert
                        </label>
                        <input class="form-control " type="text" placeholder="Provide Team info along with their Specialization">
                    </div>
                    <div id="newRow">

                    </div>

                    <button id="addRow" type="button" class="btn btn-info">Add Your Team</button>
                </div>

            </div>

            <hr>
            <div class="row custom-box">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label>Your Introductory Video URL Link display on Canada Inspire Portal
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Do you have any Privacy Policies?
                        </label>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="Policies" name="Policies">
                                <label class="custom-control-label mt-1" for="Policies">Yes</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="Policiesno" name="Policies">
                                <label class="custom-control-label mt-1" for="Policiesno">No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>If Yes, Enclose the Document
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Terms if Any
                        </label>
                        <br>
                        <br>
                        <input class="form-control " type="text">
                    </div>
                </div>
            </div>
            <hr>

            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label> Brief Introduction
                        </label>
                        <br>

                        <textarea style="width:100%;" rows="9"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>About History
                        </label>
                        <br>

                        <textarea style="width:100%;" rows="9"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>Company Achievements
                        </label>
                        <br>

                        <textarea style="width:100%;" rows="9"></textarea>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>Awards and Certifications
                        </label>
                        <br>

                        <textarea style="width:100%;" rows="9"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>We are looking forward to have your valuable Comments/Remarks to add or modify on the above given information to make it more informative.
                        </label>
                        <br>

                        <textarea style="width:100%;" rows="9"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>Kindly provide Weblinks for News and Events, Immigration Updates and much more to help Candidates to have more information
                        </label>
                        <br>

                        <textarea style="width:100%;" rows="9"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>Canada Inspire provides Additional Services :-
                        </label>
                        <br>

                        <textarea style="width:100%;" rows="9"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>Instructions for the Form Designer/Developer
                        </label>
                        <br>

                        <textarea style="width:100%;" rows="9"></textarea>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row mb-1">

                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>Social Media Profile

                        </label>
                        <div class="row">
                            <a class="facebook" href="##">
                                <div class="icon col-lg-1 col-md-1 col-1 fa-2xl"><i class="fa-brands fa-facebook"></i>
                                </div>
                                <div id="facebook" class="col-lg-11 col-md-11 col-11 d-none ">
                                    <div class="form-group">
                                        <label> </label>
                                        <input class="form-control " type="text" placeholder="Facebook link ">
                                    </div>
                                </div>
                            </a>
                            <a class="twitter" href="##">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-twitter"></i>
                                </div>
                                <div class="col-lg-11 col-md-11 col-11 d-none " id="twitter">
                                    <div class="form-group">
                                        <label> </label>
                                        <input class="form-control " type="text" placeholder="Twitter link ">
                                    </div>
                                </div>
                            </a>
                            <a class="instagram" href="##">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-instagram-square"></i></div>
                                <div class="col-lg-11 col-md-11 col-11 d-none " id="instagram">
                                    <div class="form-group">
                                        <label> </label>
                                        <input class="form-control " type="text" placeholder="Instagram link ">
                                    </div>
                                </div>
                            </a>
                            <a class="linkedin" href="##">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-linkedin"></i>
                                </div>
                                <div class="col-lg-11 col-md-11 col-11 d-none " id="linkedin">
                                    <div class="form-group">
                                        <label> </label>
                                        <input class="form-control " type="text" placeholder="Linkedin Profile ">
                                    </div>
                                </div>
                            </a>
                            <a class="youtube" href="##">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-youtube"></i>
                                </div>
                                <div class="col-lg-11 col-md-11 col-11 d-none " id="youtube">
                                    <div class="form-group">
                                        <label> </label>
                                        <input class="form-control " type="text" placeholder="youtube link ">
                                    </div>
                                </div>
                            </a>
                            <a class="google" href="##">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-google"></i>
                                </div>
                                <div class="col-lg-11 col-md-11 col-11 d-none " id="google">
                                    <div class="form-group">
                                        <label> </label>
                                        <input class="form-control " type="text" placeholder="google review link ">
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="float-right">
                <button type="submit" class="client-btn">Submit </button>
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
            $('.youtube').on("click", function() {
                $('#youtube').removeClass('d-none');
            })
            $('.google').on("click", function() {
                $('#google').removeClass('d-none');
            })

            $("#addRow").click(function() {

                var html = '';

                html = `<div class="row" id="inputFormRow">
                            <div class="col-lg-3 col-md-3 col-12">
                                <label>Team Member</label>
                                <br><br>
                                <input class="form-control " type="text">
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <label>Designation</label>
                                <br><br>
                                <input class="form-control " type="text">
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <label>Area of Expertise</label>
                                <br><br>
                                <input class="form-control " type="text">
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <label>Year of Experience</label>
                                <br><br>
                                <input class="form-control " type="text">
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <label>Number of Successful Cases</label>
                                
                                <input class="form-control " type="text">
                            </div>
                            <div class="class="input-group-append"">
                            <br><br><br>
                            <button id="removeRow" type="button" class="btn btn-danger btn-sm">Remove</button>
                            </div>
                        </div>
                       <br>
                        `

                $('#newRow').append(html);
            });

            // remove row
            $(document).on('click', '#removeRow', function() {
                $(this).closest('#inputFormRow').remove();
            });
        });
    </script>

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
    <!-- ...................end...script for google map view.................... -->
</section>


@endsection