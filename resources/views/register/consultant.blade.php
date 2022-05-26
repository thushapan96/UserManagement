@extends('layouts.layout')

@section('content')

@if($message = Session::get('registermessage'))
<script>
    Swal.fire(
        'Success',
        'Welcome !',
        'success'
    )
</script>
@endif
<!-- Subscribe & Stay Connected. Start -->
<style>

</style>
<section class="StayConnected clearfix" style="  padding: 100px 0 100px;">
    <div class="container">
        <div class="whiteBoxtab " style="width: 100% !important;max-width: 1500px !important; left:0  !important">

            <div class="cardf">
                <nav class="nav nav-pills nav-fill justify-content-center " style="cursor:pointer;padding: .15rem 0.5rem;">
                    <a class="nav-link active amenu" style="cursor:pointer;padding: 1.15rem 1rem;color:#004e75 " aria-current="page" id="amenu">Main </a>
                    <a class="nav-link amenu1" style="cursor:pointer;padding: 1.15rem 1rem;color:#004e75 " id="amenu1">Team Members</a>
                    <a class="nav-link amenu2" style="cursor:pointer;padding: 1.15rem 1rem;color:#004e75 " id="amenu2">About Company </a>
                    <a class="nav-link amenu3" style="cursor:pointer;padding: 1.15rem 1rem;color:#004e75 " id="amenu3"> Award & Certification</a>
                    <a class="nav-link amenu4" style="cursor:pointer;padding: 1.15rem 1rem;color:#004e75 " id="amenu4">News and Events</a>
                    <a class="nav-link amenu5" style="cursor:pointer;padding: 1.15rem 1rem;color:#004e75 " id="amenu5">Canada Inspire</a>
                    <a class="nav-link amenu6" style="cursor:pointer;padding: 1.15rem 1rem;color:#004e75 " id="amenu6">Feedback </a>

                </nav>
            </div>

            <div class="progress mt-1">
                <div class="progress-bar progress-bar-danger bg-danger progress-bar-striped " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%;background-color:#004e75 !important" style="cursor:pointer;padding: .15rem 0.5rem !important;">

                </div>
            </div>
        </div>


        <h1>{{request()->query('service')}} Enrollment</h1>

        <h6>{{request()->query('service')}} to provide correct information. This will allow us to incorporate your information on our Portal databank for the International aspirant Candidates to access, explore and know more about the Consultants services and specialization.</h6>
        <h6></h6>
        <br>
        <form id="form" action="{{route('add.consultant')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="whiteBox clearfix tab-pane  " style="max-width: none;" id="menu">
                <!--div class="news-title">You have questions, let's have a conversation </div-->
                <div class="row custom-box" id="">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>First Name *
                            </label>
                            <input class="form-control " type="text" id="first_name" name="first_name" value="{{old('first_name')}}" parent="menu" required>
                            <br>
                            <div class="error-first_name" style="color:#FF6347"></div>
                            <input class="form-control " type="text" name="type" value="{{request()->query('service')}}" hidden>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Last Name *
                            </label>
                            <input class="form-control " type="text" name="last_name" value="{{old('last_name')}}">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Registration Number *
                            </label>
                            <input class="form-control " type="text" name="registration_number" value="{{old('registration_number')}}">
                        </div>
                    </div>


                </div>
                <hr>

                <div class="row custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Company Name *
                            </label>
                            <input class="form-control " type="text" name="company_name" value="{{old('company_name')}}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Registered Office - Location *
                            </label>
                            <input class="form-control " type="text" placeholder="Area" name="registrar_office_area" value="{{old('registrar_office_area')}}">
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Status *
                            </label>
                            <select class="form-control" name="status">
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
                            <input class="form-control " type="text" name="country" value="{{old('country')}}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Province/Region *

                            </label>
                            <input class="form-control " type="text" name="region" value="{{old('region')}}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>City *

                            </label>
                            <input class="form-control " type="text" name="city" value="{{old('city')}}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Street *
                            </label>
                            <input class="form-control " type="text" name="streat" value="{{old('streat')}}">
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
                            <input class="form-control " type="text" name="postal_code" value="{{old('postal_code')}}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Email address for correspondence *
                            </label>
                            <input class="form-control " type="text" name="email" value="{{old('email')}}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>URL - Website Address *
                            </label>
                            <br>
                            <br>
                            <input class="form-control " type="text" name="website_address" value="{{old('website_address')}}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Contact Number *
                            </label>
                            <br>
                            <br>
                            <input class="form-control " type="text" name="phone" value="{{old('phone')}}">
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
                                <input class="custom-control-input" type="checkbox" id="Specialization2" name="specialization[]" value="PNP" {{ (is_array(old('specialization')) and in_array("PNP", old('specialization'))) ? ' checked' : '' }}>
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
                            <input class="form-control " type="text" placeholder="10/10" name="express_entry_success" value="{{old('express_entry_success')}}">
                            <small>No. of Enrolment/Success</small>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>PNP Success
                            </label>
                            <input class="form-control " type="text" name="pnp_success" value="{{old('pnp_success')}}">
                            <small>No. of Enrolment/Success</small>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>LMIA Success
                            </label>
                            <input class="form-control " type="text" name="lmia_success" value="{{old('lmia_success')}}">
                            <small>No. of Enrolment/Success</small>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Others Success
                            </label>
                            <input class="form-control " type="text" name="other_success" value="{{old('other_success')}}">
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

                            <input class="form-control " type="text" placeholder="10/10" name="student_visa_success" value="{{old('student_visa_success')}}">
                            <small>No. of Enrolment/Success</small>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Tourist Visa Success
                            </label>
                            <input class="form-control " type="text" name="tourist_visa_success" value="{{old('tourist_visa_success')}}">
                            <small>No. of Enrolment/Success</small>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Family Visa Success
                            </label>
                            <input class="form-control " type="text" name="family_visa_success" value="{{old('family_visa_success')}}">
                            <small>No. of Enrolment/Success</small>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Other Visa Success
                            </label>
                            <br>
                            <br>
                            <input class="form-control " type="text" name="other_visa_success" value="{{old('other_visa_success')}}">
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
                            <input class="form-control " type="text" placeholder="Year of Registration" name="establishment_year" value="{{old('establishment_year')}}">
                            <small>Year of Registration</small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Offering Services Since
                            </label>
                            <input class="form-control " type="text" placeholder="Number of Years" name="offering_year" value="{{old('offering_year')}}">
                            <small>Number of Years</small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Total Cases Taken
                            </label>
                            <input class="form-control " type="text" placeholder="24 or 48 or 72 Hours" name="total_cases_taken" value="{{old('total_cases_taken')}}">
                            <small>Number of Cases Enrolled till Date</small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Mode of Communication
                            </label>

                            <input class="form-control " type="text" name="communication_mode_success" value="{{old('communication_mode_success')}}">
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
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="preferemail" name="communication_mode[]" value="email" {{ (is_array(old('communication_mode')) and in_array("email", old('communication_mode'))) ? ' checked' : '' }}>
                                    <label class="custom-control-label mt-1" for="preferemail">email</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-2 ">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input " id="preferPhone" name="communication_mode[]" value="phone" {{ (is_array(old('communication_mode')) and in_array("phone", old('communication_mode'))) ? ' checked' : '' }}>
                                    <label class="custom-control-label mt-1" for="preferPhone">phone</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-2 ">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input " id="preferMessaging" name="communication_mode[]" value="Messaging" {{ (is_array(old('communication_mode')) and in_array("Messaging", old('communication_mode'))) ? ' checked' : '' }}>
                                    <label class="custom-control-label mt-1" for="preferMessaging">Messaging</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Response Time
                            </label>
                            <input type="text" class="form-control" name="response_time" value="{{old('response_time')}}">
                            <small>24 or 48 or 72 Hours</small>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Is your Initial Consultation chargeable?
                            </label>
                            <div class="col-lg-2 col-md-2 col-2 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input" id="Consultationchargeable" name="initial_chargeable_type" value="free" {{ old('initial_chargeable_type') == "free"  ? ' checked' : '' }}>
                                    <label class="custom-control-label mt-1" for="Consultationchargeable">free</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-2 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="Consultationchargeable2" name="initial_chargeable_type" value="paid" {{ old('initial_chargeable_type') == "paid"  ? ' checked' : '' }}>
                                    <label class="custom-control-label mt-1" for="Consultationchargeable2">paid</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>

                <div class="float-right">
                    <button type="button" class="client-btn bmenu">Next </button>
                </div>

            </div>

            <div class="whiteBox clearfix tab-pane" style="max-width: none;" id="menu1">
                <div class="row custom-box">

                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">

                            <label>Your Team of Expert</label>
                            <textarea style="width:100%;" rows="4" placeholder="Provide Team info along with their Specialization" name="team_info"></textarea>
                        </div>
                        <div class="form-group">
                            <div id="newRow">

                            </div>
                        </div>
                        <button id="addRow" type="button" class="btn btn-info">Add Your Team</button>
                    </div>

                </div>
                <div class="float-right">
                    <button type="button" class="client-btn bmenu1">Next </button>
                </div>
            </div>

            <div class="whiteBox clearfix tab-pane" style="max-width: none;" id="menu2">
                <div class="row custom-box">

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Do you have any Privacy Policies?
                            </label>
                            <div class="col-lg-2 col-md-2 col-2 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="Policies" name="is_Policies" value="yes" {{ old('is_Policies') == "yes"  ? ' checked' : '' }}>
                                    <label class="custom-control-label mt-1" for="Policies">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-2 col-3 ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input " id="Policiesno" name="is_Policies" value="no" {{ old('is_Policies') == "no"  ? ' checked' : '' }}>
                                    <label class="custom-control-label mt-1" for="Policiesno">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>If Yes, Enclose the Document
                            </label>
                            <br>
                            <br>
                            <input class="form-control " type="file" name="privacy_policy_document" value="{{old('privacy_policy_document')}}">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-7 col-12">
                        <div class="form-group">
                            <label>Terms if Any
                            </label>
                            <textarea style="width:100%;" rows="6" name="privacy_policy_detail" value="{{old('privacy_policy_detail')}}"></textarea>
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
                            <textarea style="width:100%;" rows="9" name="history" value="{{old('history')}}"></textarea>
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

                            <textarea style="width:100%;" rows="9" name="brief_introduction" value="{{old('brief_introduction')}}"></textarea>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <button type="button" class="client-btn bmenu2">Next </button>
                </div>
                <hr>
            </div>

            <div class="whiteBox clearfix tab-pane" style="max-width: none;" id="menu3">
                <div class="row custom-box">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Awards and Certifications
                            </label>
                            <br>

                            <input type="file" class="form-control" name="Award" value="{{old('Award')}}">
                        </div>
                    </div>
                </div>

                <div class="row custom-box">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>Company Achievements
                            </label>
                            <br>

                            <textarea style="width:100%;" rows="9" name="achievement" value="{{old('achievement')}}"></textarea>
                        </div>
                    </div>
                </div>

                <div class="float-right">
                    <button type="button" class="client-btn bmenu3">Next </button>
                </div>


            </div>

            <div class="whiteBox clearfix tab-pane" style="max-width: none;" id="menu4">
                <div class="row custom-box">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>Your Introductory Video URL Link display on Canada Inspire Portal
                            </label>
                            <input class="form-control " type="text" name="first_name" value="{{old('vedio_url')}}">
                        </div>
                    </div>
                </div>
                <div class="row custom-box">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>Kindly provide Weblinks for News and Events, Immigration Updates and much more to help Candidates to have more information
                            </label>
                            <br>

                            <textarea style="width:100%;" rows="9" name="event_new_weblink" value="{{old('event_new_weblink')}}"></textarea>
                        </div>
                    </div>
                </div>

                <div class="socialAppend" id="socialAppend">
                    <div class="row mb-1 social">

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
                                                <input class="form-control socialLink " type="text" placeholder="Facebook link " name="fb_link" value="{{old('fb_link')}}">
                                            </div>
                                        </div>
                                    </a>
                                    <a class="twitter" href="##">
                                        <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-twitter"></i>
                                        </div>
                                        <div class="col-lg-11 col-md-11 col-11 d-none " id="twitter">
                                            <div class="form-group">
                                                <label> </label>
                                                <input class="form-control socialLink" type="text" placeholder="Twitter link " name="twitter_link" value="{{old('twitter_link')}}">
                                            </div>
                                        </div>
                                    </a>
                                    <a class="instagram" href="##">
                                        <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-instagram-square"></i></div>
                                        <div class="col-lg-11 col-md-11 col-11 d-none " id="instagram">
                                            <div class="form-group">
                                                <label> </label>
                                                <input class="form-control socialLink" type="text" placeholder="Instagram link " name="insta_link" value="{{old('insta_link')}}">
                                            </div>
                                        </div>
                                    </a>
                                    <a class="linkedin" href="##">
                                        <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-linkedin"></i>
                                        </div>
                                        <div class="col-lg-11 col-md-11 col-11 d-none " id="linkedin">
                                            <div class="form-group">
                                                <label> </label>
                                                <input class="form-control socialLink" type="text" placeholder="Linkedin Profile " name="Linkedin_link" value="{{old('Linkedin_link')}}">
                                            </div>
                                        </div>
                                    </a>
                                    <a class="youtube" href="##">
                                        <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-youtube"></i>
                                        </div>
                                        <div class="col-lg-11 col-md-11 col-11 d-none " id="youtube">
                                            <div class="form-group">
                                                <label> </label>
                                                <input class="form-control socialLink" type="text" placeholder="youtube link " name="youtube_link" value="{{old('youtube_link')}}">
                                            </div>
                                        </div>
                                    </a>
                                    <a class="google" href="##">
                                        <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-google"></i>
                                        </div>
                                        <div class="col-lg-11 col-md-11 col-11 d-none " id="google">
                                            <div class="form-group">
                                                <label> </label>
                                                <input class="form-control socialLink" type="text" placeholder="google review link " name="google_review_link" value="{{old('google_review_link')}}">
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <button type="button" class="client-btn bmenu4">Next </button>
                </div>

            </div>

            <div class="whiteBox clearfix tab-pane" style="max-width: none;" id="menu5">
                <div class="row custom-box">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>Canada Inspire provides Additional Services :-
                            </label>
                            <br>

                            <textarea style="width:100%;" rows="9" id="field_cutjx" data-invmsg="Canada Inspire provides Additional Services :- is invalid" aria-invalid="false" spellcheck="false">We have a Team of professionals who are having expert in Application Development, Solutions and Services. 
1. Is your Company looking for Website Design/Re Design or Development to give professional look and exposure for International community?
2. Are you looking for development of Online Appointments and Payment Gateway or Integration on your Website?
3. Are you looking for Mobile Application Development to ease your Prospects and Customers?
4. Are you interested to develop Enquiry form, Query, Survey or feedback form to improve and enhance your services?
5. Are you looking for CRM - Customer Relation Management Solutions to maintain and manage your company marketing activities, follow-up, and efficiency to generate good revenues for your company and always ahead with your competitors?</textarea>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <button type="button" class="client-btn bmenu5">Next </button>
                </div>
            </div>

            <div class="whiteBox clearfix tab-pane" style="max-width: none;" id="menu6">
                <div class="row custom-box">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>We are looking forward to have your valuable Comments/Remarks to add or modify on the above given information to make it more informative.
                            </label>
                            <br>

                            <textarea style="width:100%;" rows="9" name="Comment" value="{{old('Comment')}}"></textarea>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <button type="submit" id="submit" class="client-btn">Submit </button>
                </div>
            </div>

        </form>
    </div>

    <div id="map" style=" height: 500px; width:100%"> </div>


</section>

<script>
    $(document).ready(function() {
        $('.tab-pane').fadeOut();
        $("#menu").fadeIn();
        $(".amenu").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu").fadeIn();
            $(".nav-link").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu1").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu1").fadeIn();
            $(".nav-link").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu2").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu2").fadeIn();
            $(".nav-link.active").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu3").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu3").fadeIn();
            $(".nav-link.active").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu4").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu4").fadeIn();
            $(".nav-link.active").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu5").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu5").fadeIn();
            $(".nav-link.active").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu6").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu6").fadeIn();
            $(".nav-link.active").removeClass('active')
            $(this).addClass('active')
        });

        $(".bmenu").click(function() {
            if ($('#first_name').val() == '') {
                $('.error-first_name').html('first name is required')
                $("#first_name").focus();
            } else {
                $('.error-first_name').html('');
                $(".progress-bar").css("width", "30%");
                $(".progress-bar").html("30%");
                $('.tab-pane').fadeOut();
                $("#menu1").fadeIn();
                $(".nav-link").removeClass('active');
                $("#amenu1").addClass('active');
            }

        });
        $(".bmenu1").click(function() {
            var nonemty = 0;
            $(".team_name").each(function(index) {
                if ($(this).val() == '') {
                    var cnt = $(this).attr('data-id');
                    console.log('ggggggggggggggggg' + cnt)
                    $('.error-team_name-' + cnt).html('team name is required')
                    nonemty = nonemty + 1;
                    $('#team_name-' + cnt).focus();
                }
            });

            if (nonemty == 0) {
                $('.error-team_name').html('')
                $(".progress-bar").css("width", "40%");
                $(".progress-bar").html("40%");
                $('.tab-pane').fadeOut();
                $("#menu2").fadeIn();
                $(".nav-link").removeClass('active')
                $("#amenu2").addClass('active')
            }
        });
        $(".bmenu2").click(function() {
            $(".progress-bar").css("width", "50%");
            $(".progress-bar").html("50%");
            $('.tab-pane').fadeOut();
            $("#menu3").fadeIn();
            $(".nav-link.active").removeClass('active')
            $("#amenu3").addClass('active')
        });
        $(".bmenu3").click(function() {
            $(".progress-bar").css("width", "80%");
            $(".progress-bar").html("80%");
            $('.tab-pane').fadeOut();
            $("#menu4").fadeIn();
            $(".nav-link.active").removeClass('active')
            $("#amenu4").addClass('active')
        });
        $(".bmenu4").click(function() {
            $(".progress-bar").css("width", "90%");
            $(".progress-bar").html("90%");
            $('.tab-pane').fadeOut();
            $("#menu5").fadeIn();
            $(".nav-link.active").removeClass('active')
            $("#amenu5").addClass('active')
        });
        $(".bmenu5").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu6").fadeIn();
            $(".nav-link.active").removeClass('active')
            $("#amenu6").addClass('active')
        });
        // if (sessionStorage.getItem("appendhtml")) {
        //     $('#newRow').html(sessionStorage.getItem("appendhtml"))
        // }

        $('[name="same_Correspondence_address"]').change(function() {
            if ($(this).is(':checked')) {
                // Do something...
                $('#sameaddress').addClass('d-none');
            } else {
                $('#sameaddress').removeClass('d-none');
            };
        });
        if (sessionStorage.getItem("socialAppend")) {
            $('#socialAppend').html(sessionStorage.getItem("socialAppend"))
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
        $('.youtube').on("click", function() {
            $('#youtube').removeClass('d-none');

        })
        $('.google').on("click", function() {
            $('#google').removeClass('d-none');

        })
        $('.socialLink').keyup(function() {

            $(this).attr("value", $(this).val());
            sessionStorage.setItem('socialAppend', $('#socialAppend').html())

        });
        var cnt = 1;
        $("#addRow").click(function() {

            var html = '';

            html = `<div  id="inputFormRow">
                      <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Team Member-${cnt}</label>
                                
                                <input class="form-control team addinput team_name" id="team_name-${cnt}" data-id="${cnt}" type="text" name="team_name[]"  required>
                                <div class="error-team_name-${cnt} error-team_name" style="color:#FF6347"></div>

                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Image</label>
                                <input type="file" class="form-control team addinput" name="team_img[]">
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Designation</label>
                               
                                <input class="form-control team addinput" type="text" id="team_designation" name="team_designation[]">
                            </div>
                      </div>
                      <br>
                      <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Area of Expertise</label>
    
                                <input class="form-control team addinput" type="text" id="team_area_expertise" name="team_area_expertise[]">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <label>Year of Experience</label>
                                
                                <input class="form-control team addinput" type="text" id="team_experience_year" name="team_experience_year[]">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <label>Number of Successful Cases</label>
                               
                                <input class="form-control team addinput" type="text" id="team_number_success_cases" name="team_number_success_cases[]">
                            </div>
                            
                            <div class="col-lg-2 col-md-2 col-12">
                               <br><br>
                               <button id="removeRow" style="padding:10px 13px" type="button" class="btn btn-danger btn-sm">Remove</button>
                            </div>
                         </div>
                              <br><br><hr>
                    </div>
                      
                        `

            $('#newRow').append(html);
            cnt = cnt + 1;

            $(".addinput").keyup(function() {
                $(this).attr("value", $(this).val());
                console.log("attrr" + $(this).attr('value'));
                sessionStorage.setItem("appendhtml", $('#newRow').html());
            });
        });

        // remove row
        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
            sessionStorage.setItem("appendhtml", $('#newRow').html());
        });

        $('#submit').click(function() {


            if ($('#first_name').val() == '') {
                $('.tab-pane').fadeOut();
                $("#menu").fadeIn();
                $(".nav-link").removeClass('active')
                $('amenu').addClass('active')
            }

        })
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


@endsection