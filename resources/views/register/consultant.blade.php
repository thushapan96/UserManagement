@extends('layouts.layout')

@section('content')


<!-- Subscribe & Stay Connected. Start -->
<section class="StayConnected clearfix">
    <h1>{{request()->query('service')}} Enrollment</h1>
    <div class="container">

        <h6>{{request()->query('service')}} to provide correct information. This will allow us to incorporate your information on our Portal databank for the International aspirant Candidates to access, explore and know more about the Consultants services and specialization.</h6>
        <h6></h6>
        <br>
        <form id="form" action="{{route('add.consultant')}}" method="post" enctype="multipart/form-data">

            <div class="whiteBox clearfix" style="max-width: none;">
                <!--div class="news-title">You have questions, let's have a conversation </div-->
                <div class="row custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>First Name *
                            </label>
                            <input class="form-control " type="text" name="first_name"  value="{{old('first_name')}}">
                            <input class="form-control " type="text" name="type" value="{{old('first_name')}}" hidden>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Last Name *
                            </label>
                            <input class="form-control " type="text" name="last_name"  value="{{old('last_name')}}">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Registration Number *
                            </label>
                            <input class="form-control " type="text" name="registration_number"  value="{{old('registration_number')}}">
                        </div>
                    </div>


                </div>
                <hr>

                <div class="row custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Company Name *
                            </label>
                            <input class="form-control " type="text" name="company_name"  value="{{old('company_name')}}" >
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Registered Office - Location *
                            </label>
                            <input class="form-control " type="text" placeholder="Area"  name="registrar_office_area"  value="{{old('registrar_office_area')}}">
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Status *
                            </label>
                            <select class="form-control" name="status"  >
                                <option value="Active" {{old('status') == "Active" ? "checked":""}}>Active</option>
                                <option value="In Active" {{ old('status') == "In Active" ? "checked":""}}>In Active</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Languages Known *
                            </label>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Languages1" name="language_known[]" value="English" {{ (is_array(old('language_known')) and in_array("English", old('language_known'))) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="Languages1"> English</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Languages2" name="language_known[]" value="French" {{ (is_array(old('language_known')) and in_array("French", old('language_known'))) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="Languages2"> French</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Languages3" name="language_known[]" value="Others" {{ (is_array(old('language_known')) and in_array("Others", old('language_known'))) ? ' checked' : '' }}>
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
                            <input class="form-control " type="text"  name="country"  value="{{old('country')}}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Province/Region *

                            </label>
                            <input class="form-control " type="text"  name="region"  value="{{old('region')}}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>City *

                            </label>
                            <input class="form-control " type="text"  name="city"  value="{{old('city')}}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Street *
                            </label>
                            <input class="form-control " type="text"  name="streat"  value="{{old('streat')}}">
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
                            <input class="form-control " type="text"  name="postal_code"  value="{{old('postal_code')}}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Email address for correspondence *
                            </label>
                            <input class="form-control " type="text" name="email"  value="{{old('email')}}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>URL - Website Address *
                            </label>
                            <br>
                            <br>
                            <input class="form-control " type="text" name="website_address"  value="{{old('website_address')}}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Contact Number *
                            </label>
                            <br>
                            <br>
                            <input class="form-control " type="text" name="phone"  value="{{old('phone')}}">
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
                                <input class="custom-control-input" type="checkbox" id="Specialization1" name="specialization[]" value="Express Entry" {{ (is_array(old('specialization')) and in_array("Express Entry", old('specialization'))) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="Specialization1"> Express Entry </label><br>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Specialization2" name="specialization[]" value="PNP" {{ (is_array(old('specialization')) and in_array("PNP", old('specialization'))) ? ' checked' : '' }} >
                                <label class="custom-control-label" for="Specialization2"> PNP</label><br>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Specialization3" name="specialization[]" value="LMIA" {{ (is_array(old('specialization')) and in_array("LMIA", old('specialization'))) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="Specialization3"> LMIA</label><br>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Specialization4" name="specialization[]" value="Others" {{ (is_array(old('specialization')) and in_array("Others", old('specialization'))) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="Specialization4"> Others</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Express Entry - Success
                            </label>
                            <input class="form-control " type="text" placeholder="10/10" name="express_entry_success"  value="{{old('express_entry_success')}}">
                            <small>No. of Enrolment/Success</small>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>PNP Success
                            </label>
                            <input class="form-control " type="text" name="pnp_success"  value="{{old('pnp_success')}}">
                            <small>No. of Enrolment/Success</small>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>LMIA Success
                            </label>
                            <input class="form-control " type="text" name="lmia_success"  value="{{old('lmia_success')}}" >
                            <small>No. of Enrolment/Success</small>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Others Success
                            </label>
                            <input class="form-control " type="text" name="other_success"  value="{{old('other_success')}}">
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
                                <input class="custom-control-input" type="checkbox" id="Service1" name="offering_service[]" value="Student Visa" {{ (is_array(old('offering_service')) and in_array("Student Visa", old('offering_service'))) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="Service1">Student Visa</label><br>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Service2" name="offering_service[]" value="Tourist Visa" {{ (is_array(old('offering_service')) and in_array("Tourist Visa Visa", old('offering_service'))) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="Service2"> Tourist Visa</label><br>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Service3" name="offering_service[]" value="Family Visa" {{ (is_array(old('offering_service')) and in_array("Family Visa", old('offering_service'))) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="Service3"> Family Visa</label><br>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Service4" name="offering_service[]" value="Other Visa" {{ (is_array(old('offering_service')) and in_array("Other Visa", old('offering_service'))) ? ' checked' : '' }}>
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
                                <input class="custom-control-input" type="checkbox" id="OtherServices1" name="other_service[]" value="Innovator Visa" {{ (is_array(old('other_service')) and in_array("Innovator Visa", old('other_service'))) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="OtherServices1"> Innovator Visa</label><br>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="OtherServices2" name="other_service[]" value="Franchisee" {{ (is_array(old('other_service')) and in_array("Franchisee", old('other_service'))) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="OtherServices2">Franchisee</label><br>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="OtherServices3" name="other_service[]" value="Intra Company Transfer" {{ (is_array(old('other_service')) and in_array("Intra Company Transfer", old('other_service'))) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="OtherServices3"> Intra Company Transfer</label><br>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Student Visa - Success
                            </label>

                            <input class="form-control " type="text" placeholder="10/10" name="student_visa_success"  value="{{old('student_visa_success')}}">
                            <small>No. of Enrolment/Success</small>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Tourist Visa Success
                            </label>
                            <input class="form-control " type="text" name="tourist_visa_success"  value="{{old('tourist_visa_success')}}">
                            <small>No. of Enrolment/Success</small>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Family Visa Success
                            </label>
                            <input class="form-control " type="text" name="family_visa_success"  value="{{old('family_visa_success')}}">
                            <small>No. of Enrolment/Success</small>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Other Visa Success
                            </label>
                            <br>
                            <br>
                            <input class="form-control " type="text" name="other_visa_success"  value="{{old('other_visa_success')}}">
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
                            <input class="form-control " type="text" placeholder="Year of Registration" name="establishment_year"  value="{{old('establishment_year')}}">
                            <small>Year of Registration</small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Offering Services Since
                            </label>
                            <input class="form-control " type="text" placeholder="Number of Years" name="offering_year"  value="{{old('offering_year')}}">
                            <small>Number of Years</small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Total Cases Taken
                            </label>
                            <input class="form-control " type="text" placeholder="24 or 48 or 72 Hours" name="total_cases_taken"  value="{{old('total_cases_taken')}}">
                            <small>Number of Cases Enrolled till Date</small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Mode of Communication
                            </label>

                            <input class="form-control " type="text"  name="communication_mode_success"  value="{{old('communication_mode_success')}}">
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
                                    <input type="radio" class="custom-control-input" id="preferemail" name="communication_mode[]" value="email" {{ (is_array(old('communication_mode')) and in_array("email", old('communication_mode'))) ? ' checked' : '' }}>
                                    <label class="custom-control-label mt-1" for="preferemail">email</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-2 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="preferPhone" name="communication_mode[]" value="phone" {{ (is_array(old('communication_mode')) and in_array("phone", old('communication_mode'))) ? ' checked' : '' }}>
                                    <label class="custom-control-label mt-1" for="preferPhone">phone</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-2 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="preferMessaging" name="communication_mode[]" value="Messaging" {{ (is_array(old('communication_mode')) and in_array("Messaging", old('communication_mode'))) ? ' checked' : '' }}>
                                    <label class="custom-control-label mt-1" for="preferMessaging">Messaging</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Response Time
                            </label>
                            <input type="text" class="form-control" name="response_time"  value="{{old('response_time')}}">
                            <small>24 or 48 or 72 Hours</small>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Is your Initial Consultation chargeable?
                            </label>
                            <div class="col-lg-2 col-md-2 col-2 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input" id="Consultationchargeable" name="initial_chargeable_type[]" value="free" {{ (is_array(old('initial_chargeable_type')) and in_array("free", old('initial_chargeable_type'))) ? ' checked' : '' }}>
                                    <label class="custom-control-label mt-1" for="Consultationchargeable">free</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-2 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="Consultationchargeable2" name="initial_chargeable_type[]" value="paid" {{ (is_array(old('initial_chargeable_type')) and in_array("paid", old('initial_chargeable_type'))) ? ' checked' : '' }}>
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
                            <input class="form-control " type="text" placeholder="Provide Team info along with their Specialization" name="initial_chargeable_comment[]"  value="{{old('initial_chargeable_comment')}}" >
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
                            <input class="form-control " type="text" name="first_name"  value="{{old('vedio_url')}}">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Do you have any Privacy Policies?
                            </label>
                            <div class="col-lg-2 col-md-2 col-2 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="Policies" name="is_Policies" value="Yes" {{ (is_array(old('is_Policies')) and in_array("Yes", old('is_Policies'))) ? ' checked' : '' }}>
                                    <label class="custom-control-label mt-1" for="Policies">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-2 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="Policiesno" name="is_Policies" value="No" {{ (is_array(old('is_Policies')) and in_array("No", old('is_Policies'))) ? ' checked' : '' }}>
                                    <label class="custom-control-label mt-1" for="Policiesno">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>If Yes, Enclose the Document
                            </label>
                            <input class="form-control " type="text" name="privacy_policy_document"  value="{{old('privacy_policy_document')}}">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Terms if Any
                            </label>
                            <br>
                            <br>
                            <input class="form-control " type="text" name="privacy_policy_detail"  value="{{old('privacy_policy_detail')}}">
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

                            <textarea style="width:100%;" rows="9" name="brief_introduction"  value="{{old('brief_introduction')}}"></textarea>
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

                            <textarea style="width:100%;" rows="9" name="history"  value="{{old('history')}}"></textarea>
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

                            <textarea style="width:100%;" rows="9" name="achievement"  value="{{old('achievement')}}"></textarea>
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

                            <textarea style="width:100%;" rows="9" name="Award"  value="{{old('Award')}}"></textarea>
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

                            <textarea style="width:100%;" rows="9" name="Comment"  value="{{old('Comment')}}"></textarea>
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

                            <textarea style="width:100%;" rows="9" name="event_new_weblink"  value="{{old('event_new_weblink')}}"></textarea>
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

                            <textarea style="width:100%;" rows="9" ></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- <div class="row custom-box">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>Instructions for the Form Designer/Developer
                            </label>
                            <br>

                            <textarea style="width:100%;" rows="9" name="first_name"  value="{{old('first_name')}}"></textarea>
                        </div>
                    </div>
                </div> -->
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
                                            <input class="form-control " type="text" placeholder="Facebook link " name="fb_link" value="{{old('fb_link')}}">
                                        </div>
                                    </div>
                                </a>
                                <a class="twitter" href="##">
                                    <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-twitter"></i>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-11 d-none " id="twitter">
                                        <div class="form-group">
                                            <label> </label>
                                            <input class="form-control " type="text" placeholder="Twitter link " name="twitter_link" value="{{old('twitter_link')}}">
                                        </div>
                                    </div>
                                </a>
                                <a class="instagram" href="##">
                                    <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-instagram-square"></i></div>
                                    <div class="col-lg-11 col-md-11 col-11 d-none " id="instagram">
                                        <div class="form-group">
                                            <label> </label>
                                            <input class="form-control " type="text" placeholder="Instagram link " name="insta_link" value="{{old('insta_link')}}">
                                        </div>
                                    </div>
                                </a>
                                <a class="linkedin" href="##">
                                    <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-linkedin"></i>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-11 d-none " id="linkedin">
                                        <div class="form-group">
                                            <label> </label>
                                            <input class="form-control " type="text" placeholder="Linkedin Profile " name="Linkedin_link" value="{{old('Linkedin_link')}}">
                                        </div>
                                    </div>
                                </a>
                                <a class="youtube" href="##">
                                    <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-youtube"></i>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-11 d-none " id="youtube">
                                        <div class="form-group">
                                            <label> </label>
                                            <input class="form-control " type="text" placeholder="youtube link " name="youtube_link" value="{{old('youtube_link')}}">
                                        </div>
                                    </div>
                                </a>
                                <a class="google" href="##">
                                    <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-google"></i>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-11 d-none " id="google">
                                        <div class="form-group">
                                            <label> </label>
                                            <input class="form-control " type="text" placeholder="google review link " name="google_review_link" value="{{old('google_review_link')}}">
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
        </form>
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
                            <div class="input-group-append">
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