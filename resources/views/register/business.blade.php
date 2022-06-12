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
<section>
    <form id="form" action="{{route('add.consultant')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-10" style="margin-left:auto !important;margin-right:auto !important">
            <h4 style="text-align:center">{{request()->query('service')}} Enrollment</h4>
            <u1 class="" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;">
                <li class="nav-linkk " id="amenu"><a style="cursor:pointer;padding: 0.5rem 1.8rem;" aria-current="page">Main </a></li>
                <li class="nav-linkk " id="amenu1"><a style="cursor:pointer;padding: 0.5rem 1.8rem;">Team </a></li>
                <li class="nav-linkk " id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1.8rem;">About Company</a></li>
                <li class="nav-linkk" id="amenu3"><a style="cursor:pointer;padding: 0.5rem  1.8rem;"> Award & Certification</a></li>
                <li class="nav-linkk" id="amenu4"><a style="cursor:pointer;padding: 0.5rem  1.8rem;">News and Events</a></li>
                <li class="nav-linkk" id="amenu5"><a style="cursor:pointer;padding: 0.5rem 1.8rem;">Canada Inspire</a></li>
                <li class="nav-linkk" id="amenu6"><a style="cursor:pointer;padding: 0.5rem 1.8rem;">Feedback</a></li>

            </u1>


            <div class="" style="margin-left:auto !important;margin-right:auto !important">
                <div class="progress mt-1 ">
                    <div class="progress-bar progress-bar-danger bg-danger progress-bar-striped " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%;background-color:#004e75 !important" style="cursor:pointer;padding: .15rem 0.5rem !important;">

                    </div>
                </div>



                <h6>{{request()->query('service')}} to provide correct information. This will allow us to incorporate your information on our Portal databank for the International aspirant Candidates to access, explore and know more about the Consultants services and specialization.</h6>
            </div>
            <br>
            <u1 class="uk-switcher" class="">



                <li id='menu' class='tab-pane '>
                    <div class='uk-card ' style="">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <div class="row custom-box">

                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>First Name *
                                            </label>
                                            <input class="form-control " type="text" name="first_name" value="{{old('first_name')}}">
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
                                            <input class="form-control " id="pac-input5" type="text" name="registration_number" value="{{old('registration_number')}}">
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
                                            <input class="form-control " id="pac-input1" type="text" name="country" value="{{old('country')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Province/Region *

                                            </label>
                                            <input class="form-control " id="pac-input2" type="text" name="region" value="{{old('region')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>City *

                                            </label>
                                            <input class="form-control " id="pac-input3" type="text" name="city" value="{{old('city')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Street *
                                            </label>
                                            <input class="form-control " id="pac-input4" type="text" name="streat" value="{{old('streat')}}">
                                        </div>
                                    </div>


                                </div>
                                <hr>
                                <div class="row custom-box">

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Postal Code *
                                            </label>
                                           
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
                                            
                                            <input class="form-control " type="text" name="website_address" value="{{old('website_address')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Contact Number *
                                            </label>
                                            
                                            <input class="form-control " type="text" name="phone" value="{{old('phone')}}">
                                        </div>
                                    </div>


                                </div>
                                <hr>
                                <div class="row custom-box">

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Specialization *
                                            </label>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="Specialization1" name="specialization[]" value="Accounting & Auditing" {{ (is_array(old('specialization')) and in_array("Accounting & Auditing", old('specialization'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="Specialization1"> Accounting & Auditing </label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="Specialization2" name="specialization[]" value="Corporate & Personal Taxation" {{ (is_array(old('specialization')) and in_array("Corporate & Personal Taxation", old('specialization'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="Specialization2"> Corporate & Personal Taxation</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="Specialization3" name="specialization[]" value="Payroll" {{ (is_array(old('specialization')) and in_array("Payroll", old('specialization'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="Specialization3"> Payroll</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="Specialization4" name="specialization[]" value="Insurance" {{ (is_array(old('specialization')) and in_array("Insurance", old('specialization'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="Specialization4"> Insurance</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Service Offered *</label>

                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="Service1" name="offering_service[]" value="Business Incorporation" {{ (is_array(old('offering_service')) and in_array("Business Incorporation", old('offering_service'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="Service1">Business Incorporation</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="Service2" name="offering_service[]" value="Business Consulting" {{ (is_array(old('offering_service')) and in_array("Business Consulting", old('offering_service'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="Service2">Business Consulting</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="Service3" name="offering_service[]" value="Family Visa" {{ (is_array(old('offering_service')) and in_array("Financial Services", old('offering_service'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="Service3">Financial Services</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="Service4" name="offering_service[]" value="Others" {{ (is_array(old('offering_service')) and in_array("Others", old('offering_service'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="Service4"> Others</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
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

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Remarks/Comments if any
                                            </label>
                                            <input class="form-control " type="text" name="initial_chargeable_comment" value="{{old('initial_chargeable_comment')}}">
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
                                            <label>Response Time
                                            </label>
                                            <input type="text" class="form-control" name="response_time" value="{{old('response_time')}}">
                                            <small>24 or 48 or 72 Hours</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
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
                                    <div class="row custom-box">
                                        <div class="col-lg-10 col-md-10 col-12">
                                            <div class="form-group">
                                                <label>upload profile image
                                                </label>
                                                <input class="form-control" type="file" name="img">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                                <div class="float-right">
                                    <button type="button" class="client-btn bmenu uk-button uk-button-primary">Next </button>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </li>

                <li id='menu1' class='tab-pane '>
                    <div class='uk-card ' style="">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">

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
                                <div class="float-right">
                                    <button type="button" class="client-btn bmenu1 uk-button uk-button-primary">Next </button>
                                </div>

                            </fieldset>
                        </div>
                    </div>
                </li>

                <li id='menu2' class='tab-pane '>
                    <div class='uk-card ' style="">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
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
                                <hr>
                                <div class="row custom-box">
                                    <div id="appendImg"></div>

                                </div>
                                <div class="row custom-box">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <button id="addImageRow" type="button" class="uk-button uk-button-primary">Add Images</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <button type="button" class="client-btn bmenu2 uk-button uk-button-primary">Next </button>
                                </div>

                            </fieldset>
                        </div>
                    </div>
                </li>

                <li id='menu3' class='tab-pane '>
                    <div class='uk-card ' style="">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
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
                                <hr>
                                <div class="row custom-box">
                                    <div id="appendImg1"></div>

                                </div>
                                <div class="row custom-box">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <button id="addImageRow1" type="button" class="uk-button uk-button-primary">Add Images</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <button type="button" class="client-btn bmenu3 uk-button uk-button-primary">Next </button>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </li>

                <li id='menu4' class='tab-pane '>
                    <div class='uk-card ' style="">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Your Introductory Video URL Link display on Canada Inspire Portal
                                            </label>
                                            <input class="form-control " type="text" name="vedio_url" value="{{old('vedio_url')}}">
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
                                                        <div class="icon col-lg-1 col-md-1 col-1 fa-2xl">
                                                            <i class="fab fa-facebook-f"></i>

                                                        </div>
                                                        <div id="facebook" class="col-lg-11 col-md-11 col-11 d-none ">
                                                            <div class="form-group">
                                                                <label> </label>
                                                                <input class="form-control socialLink " type="text" placeholder="Facebook link " name="fb_link" value="{{old('fb_link')}}">
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
                                                                <input class="form-control socialLink" type="text" placeholder="Twitter link " name="twitter_link" value="{{old('twitter_link')}}">
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
                                                                <input class="form-control socialLink" type="text" placeholder="Instagram link " name="insta_link" value="{{old('insta_link')}}">
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
                                                                <input class="form-control socialLink" type="text" placeholder="Linkedin Profile " name="Linkedin_link" value="{{old('Linkedin_link')}}">
                                                            </div>
                                                        </div>
                                                    </a>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <button type="button" class="client-btn bmenu4 uk-button uk-button-primary">Next </button>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </li>

                <li id='menu5' class='tab-pane '>
                    <div class='uk-card ' style="">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
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
                                    <button type="button" class="client-btn bmenu5 uk-button uk-button-primary">Next </button>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </li>

                <li id='menu6' class='tab-pane '>
                    <div class='uk-card ' style="">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
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
                                    <button type="submit" id="submit" class="client-btn uk-button uk-button-primary">Submit </button>
                                </div>

                            </fieldset>
                        </div>
                    </div>
                </li>


            </u1>
        </div>

    </form>
</section>
<div id="map" style=" height: 500px; width:100%"> </div>

<script>
    $(document).ready(function() {




        $(".amenu").click(function() {

        });
        $(".amenu1").click(function() {

        });
        $(".amenu2").click(function() {

        });
        $(".amenu3").click(function() {

        });
        $(".amenu4").click(function() {

        });
        $(".amenu5").click(function() {

        });
        $(".amenu6").click(function() {

        });

        $(".bmenu").click(function() {
            if ($('#first_name').val() == '') {
                $('.error-first_name').html('first name is required')
                $("#first_name").focus();
            } else {
                $('.error-first_name').html('');
                $(".progress-bar").css("width", "30%");
                $(".progress-bar").html("30%");
                $('.nav-linkk').removeClass('uk-active');
                $('#amenu1').addClass('uk-active');
                $('.tab-pane').removeClass('uk-active');
                $('#menu1').addClass('uk-active');
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
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
                $('.nav-linkk').removeClass('uk-active');
                $('#amenu2').addClass('uk-active');
                $('.tab-pane').removeClass('uk-active');
                $('#menu2').addClass('uk-active');
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        });
        $(".bmenu2").click(function() {
            $(".progress-bar").css("width", "50%");
            $(".progress-bar").html("50%");
            $('.nav-linkk').removeClass('uk-active');
            $('#amenu3').addClass('uk-active');
            $('.tab-pane').removeClass('uk-active');
            $('#menu3').addClass('uk-active');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        $(".bmenu3").click(function() {
            $(".progress-bar").css("width", "80%");
            $(".progress-bar").html("80%");
            $('.nav-linkk').removeClass('uk-active');
            $('#amenu4').addClass('uk-active');
            $('.tab-pane').removeClass('uk-active');
            $('#menu4').addClass('uk-active');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        $(".bmenu4").click(function() {
            $(".progress-bar").css("width", "90%");
            $(".progress-bar").html("90%");
            $('.nav-linkk').removeClass('uk-active');
            $('#amenu5').addClass('uk-active');
            $('.tab-pane').removeClass('uk-active');
            $('#menu5').addClass('uk-active');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        $(".bmenu5").click(function() {
            $('.nav-linkk').removeClass('uk-active');
            $('#amenu6').addClass('uk-active');
            $('.tab-pane').removeClass('uk-active');
            $('#menu6').addClass('uk-active');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
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
                               <br>
                               <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeRow" style="background:#bf0010 !important;margin-top:6.2%"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> Remove</a></button>

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
        $("#addImageRow").click(function() {
            console.log('fi')
            var html = '';
            html = `<div id="inputImgCover"><div  class="row"><div class="col-lg-10 col-md-10"><input id="inputImgRow" class="form-control" type="file" name="mutiImg_about_company[]"></div><div class="col-lg-2 col-md-2"> <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeImgRow" style="background:#bf0010 !important;margin-top:7.5%"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> </a></button> </div></div><br></div>`
            $('#appendImg').append(html);

        });
        $(document).on('click', '#removeImgRow', function() {
            console.log('bi')
            $(this).closest('#inputImgCover').remove();
        });
        $("#addImageRow1").click(function() {
            console.log('fi')
            var html = '';
            html = `<div id="inputImgCover1"><div class="row"><div class="col-lg-10 col-md-10"><input id="inputImgRow1" class="form-control" type="file" name="mutiImg_about_award[]"></div><div class="col-lg-2 col-md-2"> <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeImgRow1" style="background:#bf0010 !important;margin-top:7.5%"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> </a></button> </div></div><br></div>`
            $('#appendImg1').append(html);

        });
        $(document).on('click', '#removeImgRow1', function() {
            console.log('bi')
            $(this).closest('#inputImgCover1').remove();
        });
    });
</script>

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

            for (let i = 1; i < 6; i++) {
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
<!-- ...................end...script for google map view.................... -->


@endsection