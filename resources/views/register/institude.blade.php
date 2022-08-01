@extends('layouts.layout')

@section('content')

<style>
    .whiteBox:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }
</style>
<!-- Subscribe & Stay Connected. Start -->
@if (session()->has('success'))
<script>
    Swal.fire(
        'Success!',
        'Successfully submitted ',
        'success'
    )
</script>
@endif

@if($message = Session::get('registermessage'))
<script>
    Swal.fire(
        'Success',
        'Welcome !',
        'success'
    )
</script>
@endif
<section>
    <form id="form" action="{{route('add.institution')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12" style="margin-left:auto !important;margin-right:auto !important">
            <h4 style="text-align:center">{{request()->query('service')}} Enrollment</h4>
<hr>
            <u1 class="justify-content-around" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;">
                <li class="nav-linkk " id="amenu"><a style="cursor:pointer;padding: 0.5rem 1.8rem;" aria-current="page">Main </a></li>
                <li class="nav-linkk " id="amenu1"><a style="cursor:pointer;padding: 0.5rem 1.8rem;">Programs </a></li>
                <li class="nav-linkk " id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1.8rem;">About {{request()->query('service')}}</a></li>
                <li class="nav-linkk" id="amenu3"><a style="cursor:pointer;padding: 0.5rem  1.8rem;"> Award & Recognition</a></li>
                <li class="nav-linkk" id="amenu4"><a style="cursor:pointer;padding: 0.5rem  1.8rem;">News and Events</a></li>
                <!-- <li class="nav-linkk" id="amenu5"><a style="cursor:pointer;padding: 0.5rem 1.8rem;">{{request()->query('service') === "School" ? "School Education in Canada" : "Canada Inspire" }}</a></li> -->
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
                                            <label>{{request()->query('service')}} Name <span style="color: red;"> *</span>
                                            </label>
                                            <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}" />
                                            <input class="form-control " type="text" name="type" value="{{request()->query('service')}}" hidden>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>{{request()->query('service')}} Registration Number <span style="color: red;"> *</span>
                                            </label>
                                            <input class="form-control " type="text" id="registration_number" name="registration_number" value="{{old('registration_number')}}">

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>{{request()->query('service')}} Registrar Office area<span style="color: red;"> *</span>

                                            </label>
                                            <input class="form-control " type="text" id="pac-input5" name="registrar_office_area" value="{{old('registrar_office_area')}}">
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="row custom-box">

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Country <span style="color: red;"> *</span>
                                            </label>
                                            <input class="form-control " id="pac-input1" type="text" name="country" value="{{old('country')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Province/Region <span style="color: red;"> *</span>
                                            </label>
                                            <input class="form-control " id="pac-input2" type="text" name="region" value="{{old('region')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>City <span style="color: red;"> *</span>
                                            </label>
                                            <input class="form-control " id="pac-input3" type="text" name="city" value="{{old('city')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Street <span style="color: red;"> *</span>
                                            </label>
                                            <input class="form-control " id="pac-input4" type="text" name="streat" value="{{old('streat')}}">
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="row custom-box">

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Postal Code <span style="color: red;"> *</span>
                                            </label>

                                            <input class="form-control " type="text" name="postal_code" value="{{old('postal_code')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Email address for correspondence <span style="color: red;"> *</span>
                                            </label>
                                            <input class="form-control" type="email" id="email" name="email" value="{{old('email')}}">
                                            <div id="append_email" class="mail" style="color:#f30404"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>URL - Website Address <span style="color: red;"> *</span>
                                            </label>

                                            <input class="form-control " type="text" name="website_address" value="{{old('website_address')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Contact Number <span style="color: red;"> *</span>
                                            </label>

                                            <input class="form-control " type="number" name="phone" value="{{old('phone')}}">
                                        </div>
                                    </div>


                                </div>
                                <hr>
                                <div class="row custom-box">

                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Admission Cell - Contact Person <span style="color: red;"> *</span>

                                            </label>
                                            <input class="form-control " type="text" name="admission_phone" value="{{old('admission_phone')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Email address of Admission Cell <span style="color: red;"> *</span>

                                            </label>
                                            <input class="form-control " type="email" id="admission_email" name="admission_email" value="{{old('admission_email')}}">
                                            <div id="append_admission_email" class="mail" style="color:tomato"></div>

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Dean - Contact Name <span style="color: red;"> *</span>

                                            </label>

                                            <input class="form-control " type="text" name="dean_name" value="{{old('dean_name')}}">
                                        </div>
                                    </div>


                                </div>

                                <div class="row custom-box">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="form-group">
                                            <label>Dean Email ID <span style="color: red;"> *</span>
                                            </label>

                                            <input class="form-control " id="dean_email" type="email" name="dean_email" value="{{old('dean_email')}}">
                                            <div id="append_dean_email" class="mail" style="color:tomato"></div>

                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="form-group">
                                            <label>Dean Contact Number <span style="color: red;"> *</span>
                                            </label>
                                            <input class="form-control " type="number" name="dean_phone" value="{{old('dean_phone')}}">
                                        </div>
                                    </div>
                                    @if(request()->query('service') == 'School')
                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Medium
                                            </label>

                                            <select class="form-control " name="medium">
                                                <option value="Domestic" {{ old('medium') == 'English'? 'selected':'' }}>English</option>
                                                <option value="International" {{ old('medium') == 'French'? 'selected':'' }}>French</option>
                                            </select>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <hr>
                                <div class="row custom-box">

                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Year of Establishment
                                            </label>
                                            <input class="form-control " type="text" placeholder="" name="establishment_year" value="{{old('establishment_year')}}">
                                            <small>Year of Registration</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Offering Services Since
                                            </label>
                                            <input class="form-control " type="text" placeholder="" name="offering_year" value="{{old('offering_year')}}">
                                            <small>Number of Years</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Response Time
                                            </label>
                                            <select class="form-control" name="response_time">
                                                <option value="24 Hours" {{old('response_time') == "24 Hours" ? "selected":""}}>24 Hours</option>
                                                <option value="48 Hours" {{old('response_time')== "48 Hours" ? "selected":""}}>48 Hours</option>
                                                <option value="72 Hours" {{old('response_time') == "72 Hours" ? "selected":""}}>72 Hours</option>

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
                                </div>
                                <hr>
                                <div class="row custom-box">

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Mode of Education
                                            </label>
                                            <br>

                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox1" name="course_type[]" value="In Campus" {{ (is_array(old('course_type')) and in_array("In Campus", old('course_type'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox1"> In Campus</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox2" name="course_type[]" value="Online" {{ (is_array(old('course_type')) and in_array("Online", old('course_type'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox2"> Online</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox3" name="course_type[]" value="Distant" {{ (is_array(old('course_type')) and in_array("Distant", old('course_type'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox3"> Distant</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox4" name="course_type[]" value="Others" {{ (is_array(old('course_type')) and in_array("Others", old('course_type'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox4"> Others</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Enrolment Intake <span style="color: red;"> *</span>
                                            </label>
                                            <br>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox5" name="intake[]" value="January" {{ (is_array(old('intake')) and in_array("January", old('intake'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox5"> January</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox6" name="intake[]" value="May" {{ (is_array(old('intake')) and in_array("May", old('intake'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox6">May</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox7" name="intake[]" value="September" {{ (is_array(old('intake')) and in_array("September", old('intake'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox7">September</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox8" name="intake[]" value="Others" {{ (is_array(old('intake')) and in_array("Others", old('intake'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox8">Others</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Mode of Communication
                                            </label>
                                            <div class="col-lg-2 col-md-2 col-2 ">
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox9" name="communication_mode[]" value="email" {{ (is_array(old('communication_mode')) and in_array("email", old('communication_mode'))) ? ' checked' : '' }}>
                                                    <label class="custom-control-label mt-1" for="checkbox9">email</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-2 ">
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input " id="checkbox10" name="communication_mode[]" value="phone" {{ (is_array(old('communication_mode')) and in_array("phone", old('communication_mode'))) ? ' checked' : '' }}>
                                                    <label class="custom-control-label mt-1" for="checkbox10">phone</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-2 ">
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input " id="checkbox11" name="communication_mode[]" value="Messaging" {{ (is_array(old('communication_mode')) and in_array("Messaging", old('communication_mode'))) ? ' checked' : '' }}>
                                                    <label class="custom-control-label mt-1" for="checkbox11">Messaging</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Admission Type <span style="color: red;"> *</span>
                                            </label>
                                            <br>
                                            <br>
                                            <select class="form-control " name="admission_type">
                                                <option value="Domestic" {{ old('admission_type') == 'Domestic'? 'selected':'' }}>Domestic</option>
                                                <option value="International" {{ old('admission_type') == 'International'? 'selected':'' }}>International</option>
                                            </select>

                                            <!-- <input class="form-control " type="text" name="admission_type" value="{{old('admission_type')}}"> -->
                                        </div>
                                    </div>

                                    <!-- <div class="col-lg-4 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>{{request()->query('service')}} Ranking
                                            </label>
                                            <br>
                                            <br>
                                            <input class="form-control " type="text" name="college_ranking" value="{{old('college_ranking')}}">
                                        </div>
                                    </div> -->

                                </div>
                                <!-- <hr>
                                <div class="row custom-box">
                                    <div class=" col-12">
                                        <div class="form-group">
                                            <label>Ranking Criteria & Ranking Bodies
                                            </label>
                                            <textarea style="width:100%;" rows="5" name="ranking_criteria" vaue="{{old('ranking_criteria')}}"></textarea>
                                        </div>
                                    </div>
                                </div> -->


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


                                <div class="row custom-box">

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="custom-control custom-checkbox">
                                            <label>What type of School Education you have?
                                            </label>
                                            <br>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox12" name="certificate_type[]" value="Primary" {{ (is_array(old('certificate_type')) and in_array("Primary", old('certificate_type'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox12"> Primary (Elementary)</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox13" name="certificate_type[]" value="Secondary" {{ (is_array(old('certificate_type')) and in_array("Secondary", old('certificate_type'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox13"> Secondary</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id=" checkbox14" name=" certificate_type[]" value="Post-Secondary" {{ (is_array(old('certificate_type')) and in_array("Post-Secondary", old('certificate_type'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for=" checkbox14"> Post-Secondary</label><br>
                                            </div>
                                        

                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="custom-control custom-checkbox">
                                            <label>Course Duration?
                                            </label>
                                            <br>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox16" name="course_duration[]" value="6 Months" {{ (is_array(old('course_duration')) and in_array("6 Months", old('course_duration'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox16"> 6 Months</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox17" name="course_duration[]" value="12 Months" {{ (is_array(old('course_duration')) and in_array("12 Months", old('course_duration'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox17">12 Months</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox18" name="course_duration[]" value="18 Months" {{ (is_array(old('course_duration')) and in_array("18 Months", old('course_duration'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox18">18 Months</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox19" name="course_duration[]" value="Others" {{ (is_array(old('course_duration')) and in_array("Others", old('course_duration'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox19">Others</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group custom-checkbox">
                                            <label>Is your {{request()->query('service')}} required any of the following?
                                            </label>
                                            <br>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox20" name="other_require[]" value="GRE" {{ (is_array(old('other_require')) and in_array("GRE", old('other_require'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox20"> GRE</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox21" name="other_require[]" value="TOEFL" {{ (is_array(old('other_require')) and in_array("TOEFL", old('other_require'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox21">TOEFL </label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox22" name="other_require[]" value="GMAT" {{ (is_array(old('other_require')) and in_array("GMAT", old('other_require'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox22">GMAT</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox23" name="other_require[]" value="SAT" {{ (is_array(old('other_require')) and in_array("SAT", old('other_require'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox23">SAT</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox24" name="other_require[]" value="Others" {{ (is_array(old('other_require')) and in_array("Others", old('other_require'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox24">Others</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group custom-checkbox">
                                            <label>What type of Language Test do you accept?
                                            </label>
                                            <br>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox25" name="language_test_type[]" value="IELTS" {{ (is_array(old('language_test_type')) and in_array("IELTS", old('language_test_type'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox25"> IELTS</label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox26" name="language_test_type[]" value="PTE" {{ (is_array(old('language_test_type')) and in_array("PTE", old('language_test_type'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox26">PTE </label><br>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkbox27" name="language_test_type[]" value="Others" {{ (is_array(old('language_test_type')) and in_array("Others", old('language_test_type'))) ? ' checked' : '' }}>
                                                <label class="custom-control-label" for="checkbox27">Others</label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <hr>
                                <div class="row custom-box">

                                    <div class="col-lg-12col-md-12 col-12">
                                        <div class="form-group">

                                        </div>
                                        <div id="newRow"></div>
                                        <button id="addRow" type="button" class="btn crew-btn uk-button uk-button-primary" name="">Add Course</button>
                                    </div>

                                </div>
                                <hr>
                                <div class="row custom-box">

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Total Number of Students Enrolled
                                            </label>
                                            <input class="form-control " type="number" name="no_student" value="{{old('no_student')}}">

                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Total Number of Successful Students
                                            </label>
                                            <input class="form-control " type="number" name="no_success_student" value="{{old('no_success_student')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Is it Financial Aided?
                                            </label>
                                            <br>
                                            <br>
                                            <div class="col-lg-2 col-md-2 col-2 ">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input " id="Financialyes" name="is_financial" value="yes" {{ old('is_financial') == "yes" ? "checked":"" }}>
                                                    <label class="custom-control-label mt-1" for="Financialyes">Yes</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-2 ">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input " id="Financialno" name="is_financial" value="no" {{ old('is_financial') == "no" ? "checked":"" }}>
                                                    <label class="custom-control-label mt-1" for="Financialno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Is Transfer of Credits available?
                                            </label>
                                            <br>
                                            <br>
                                            <div class="col-lg-2 col-md-2 col-2 ">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input " id="Creditsyes" name="is_credit" value="yes" {{ old('is_credit') == "yes" ? "checked":"" }}>
                                                    <label class="custom-control-label mt-1" for="Creditsyes">Yes</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-2 ">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input " id="Creditsno" name="is_credit" value="no" {{ old('is_credit') == "no" ? "checked":"" }}>
                                                    <label class="custom-control-label mt-1" for="Creditsno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr>

                                <div class="row custom-box">

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Do you offer Scholarships?
                                            </label>
                                            <div class="col-lg-2 col-md-2 col-2 ">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input " id="Scholarshipsyes" name="is_scholarship_offer" value="yes" {{ old('is_scholarship_offer') == "yes" ? "checked":"" }}>
                                                    <label class="custom-control-label mt-1" for="Scholarshipsyes">Yes</label>

                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-2 ">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input " id="Scholarshipsno" name="is_scholarship_offer" value="no" {{ old('is_scholarship_offer') == "no" ? "checked":"" }}>
                                                    <label class="custom-control-label mt-1" for="Scholarshipsno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Do you conduct Webinars?
                                            </label>
                                            <div class="col-lg-2 col-md-2 col-2 ">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input " id="Webinarsyes" name="is_conduct_webinar" value="yes" {{ old('is_conduct_webinar') == "yes" ? "checked":"" }}>
                                                    <label class="custom-control-label mt-1" for="Webinarsyes">Yes</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-2 ">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input " id="Webinarsno" name="is_conduct_webinar" value="no" {{ old('is_conduct_webinar') == "no" ? "checked":"" }}>
                                                    <label class="custom-control-label mt-1" for="Webinarsno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Admission Criteria Website/URL Link
                                            </label>
                                            <input class="form-control " type="text" name="admission_criteria_website" value="{{old('admission_criteria_website')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Fee Structure Website/URL Link
                                            </label>
                                            <input class="form-control " type="text" min="1" name="fee_structure_website" value="{{old('fee_structure_website')}}">
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Is ECA (Education Certificate Assessment) required? If "YES" specify name of the Organization
                                            </label>
                                            <input class="form-control " type="text" name="eca" value="{{old('eca')}}">
                                        </div>
                                    </div>
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
                                            <label>{{request()->query('service')}} Achievements
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
                                            <label> {{request()->query('service') === "School" ? "Provide University URL Video Link to know more about your College" : "Provide University URL Video Link to know more about your ".request()->query('service') }} 
                                            </label>
                                            <input class="form-control " type="text" name="vedio_url" value="{{old('vedio_url')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>{{request()->query('service') === "School" ? "Provide Weblinks for News And Events to know more about your College to help Candidates know more" : "Provide Weblinks for News And Events to know more about your " .request()->query('service'). " to help Candidates know more"}}
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

                                            <textarea style="width:100%;" rows="9" id="field_cutjx" data-invmsg="Canada Inspire provides Additional Services :- is invalid" aria-invalid="false" spellcheck="false">
Primary (or elementary) school
    Primary education for Age Group: 5 to 12 years old 

Preschool (Optional)
    Kindergarten
    Grade 1 to 6

Secondary (or High) School
    Secondary education for Age Group: for 12 to 18 years old. 
    Grade 7 to 12

Post-secondary


                                        </textarea>
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
            function validateEmail($email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test($email);
            }
            var email = $('#email').val();
            var admission_email = $('#admission_email').val();
            var dean_email = $('#dean_email').val();

            // if (!validateEmail(email)) {
            //     $(".mail").each(function() {
            //         $(this).html('')
            //     });
            //     $('#append_email').html('please enter valid email')
            //     $('#email').focus()
            // } else if (!validateEmail(admission_email)) {
            //     $(".mail").each(function() {
            //         $(this).html('')
            //     });
            //     $('#append_admission_email').html('please enter valid email')
            //     $('#admission_email').focus()
            // } else if (!validateEmail(dean_email)) {
            //     $(".mail").each(function() {
            //         $(this).html('')
            //     });
            //     $('#append_dean_email').html('please enter valid email')
            //     $('#dean_email').focus()
            // } else {



            // }

            $(".mail").each(function() {
                $(this).html('')
            });
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
        });
        $(".bmenu1").click(function() {
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
        if (sessionStorage.getItem("offer_course")) {
            $('#offer_course').val(sessionStorage.getItem("offer_course"))
        }
        if (sessionStorage.getItem("appendhtml")) {
            $('#newRow').html(sessionStorage.getItem("appendhtml"))
        }
        // if (sessionStorage.getItem("privacy_policy_document")) {
        //     console.log('irukuuu')
        //     $('#privacy_policy_document').attr("value","pre slide.txt")
        // }else{
        //     console.log('illa')
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

        $("#addRow").click(function() {

            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="offer_course[]" class="form-control m-input addinput" placeholder="Enter courses" autocomplete="off" value="" />';
            html += '<div class="input-group-append">';
            html += '<button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeRow" style="background:#bf0010 !important;"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> Remove</a></button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
            sessionStorage.setItem("appendhtml", $('#newRow').html());

            $(".addinput").keyup(function() {
                console.log("val" + $(this).val())
                $(this).attr("value", $(this).val());
                console.log("attrr" + $(this).attr('value'));
                sessionStorage.setItem("appendhtml", $('#newRow').html());
                console.log(sessionStorage.getItem("appendhtml"))
            });

        });

        $(".addinput").keyup(function() {
            console.log("val" + $(this).val())
            $(this).attr("value", $(this).val());
            console.log("attrr" + $(this).attr('value'));
            sessionStorage.setItem("appendhtml", $('#newRow').html());
            console.log(sessionStorage.getItem("appendhtml"))
        });

        // remove row
        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
            sessionStorage.setItem("appendhtml", $('#newRow').html());

        });
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