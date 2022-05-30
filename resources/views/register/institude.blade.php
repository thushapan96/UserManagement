@extends('layouts.layouts')

@section('content')

<style>
    .whiteBox:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       
    }
</style>
<!-- Subscribe & Stay Connected. Start -->
<section class="StayConnected clearfix" style=" padding: 100px 0 100px;">
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
    <div class="container">
        <div class=" " style="width: 100% !important;max-width: 1500px !important; left:0  !important">

            <div class="cardf">
                <nav class="nav nav-pills nav-fill justify-content-center " style="cursor:pointer;padding: .15rem 0.5rem;">
                    <a class="nav-link active amenu" style="cursor:pointer;padding: 0.5rem 1rem;color:#004e75 " aria-current="page" id="amenu">Main </a>
                    <a class="nav-link amenu1" style="cursor:pointer;padding: 0.5rem 1rem;color:#004e75 " id="amenu1">Courses</a>
                    <a class="nav-link amenu2" style="cursor:pointer;padding: 0.5rem 1rem;color:#004e75 " id="amenu2">About Company </a>
                    <a class="nav-link amenu3" style="cursor:pointer;padding: 0.5rem 1rem;color:#004e75 " id="amenu3"> Award & Certification</a>
                    <a class="nav-link amenu4" style="cursor:pointer;padding: 0.5rem 1rem;color:#004e75 " id="amenu4">News and Events</a>
                    <a class="nav-link amenu5" style="cursor:pointer;padding: 0.5rem 1rem;color:#004e75 " id="amenu5">Canada Inspire</a>
                    <a class="nav-link amenu6" style="cursor:pointer;padding: 0.5rem 1rem;color:#004e75 " id="amenu6">Feedback</a>

                </nav>
            </div>



        </div>
        <div class="progress mt-1">
            <div class="progress-bar progress-bar-danger bg-danger progress-bar-striped " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%;background-color:#004e75 !important" style="cursor:pointer;padding: .15rem 0.5rem !important;">

            </div>
        </div>
        <br>
        <h1> {{request()->query('service')}} Enrollment</h1>
        <h6>{{request()->query('service')}} to provide correct information. This will allow us to incorporate your information on our Portal databank for the International aspirant Candidates to access , explore and know more about the Courses and other Services.</h6>
       
        <br>
        <form id="form" action="{{route('add.institution')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="whiteBox clearfix tab-pane  " style="max-width: none;" id="menu">
                <!--div class="news-title">You have questions, let's have a conversation </div-->
                <div class="row custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Name of the {{request()->query('service')}} *
                            </label>
                            <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}" />
                            <input class="form-control " type="text" name="type" value="{{request()->query('service')}}" hidden>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>{{request()->query('service')}} Registration Number *
                            </label>
                            <input class="form-control " type="text" id="registration_number" name="registration_number" value="{{old('registration_number')}}">

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>{{request()->query('service')}} Registrar Office area*

                            </label>
                            <input class="form-control " type="text" name="registrar_office_area" value="{{old('registrar_office_area')}}">
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
                            <input class="form-control" type="email" id="email" name="email" value="{{old('email')}}">
                            <div id="append_email" class="mail" style="color:#f30404"></div>
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
                            <input class="form-control " type="number" name="phone" value="{{old('phone')}}">
                        </div>
                    </div>


                </div>
                <hr>
                <div class="row custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Admission Cell - Contact Person *

                            </label>
                            <input class="form-control " type="text" name="admission_phone" value="{{old('admission_phone')}}">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Email address of Admission Cell *

                            </label>
                            <input class="form-control " type="email" id="admission_email" name="admission_email" value="{{old('admission_email')}}">
                            <div id="append_admission_email" class="mail" style="color:tomato"></div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Dean - Contact Name *

                            </label>

                            <input class="form-control " type="text" name="dean_name" value="{{old('dean_name')}}">
                        </div>
                    </div>


                </div>
                <hr>
                <div class="row custom-box">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Dean Email ID *
                            </label>

                            <input class="form-control " id="dean_email" type="email" name="dean_email" value="{{old('dean_email')}}">
                            <div id="append_dean_email" class="mail" style="color:tomato"></div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Dean Contact Number *
                            </label>
                            <input class="form-control " type="number" name="dean_phone" value="{{old('dean_phone')}}">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row custom-box">

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Type of Courses *
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

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Intake *
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

                    <div class="col-lg-4 col-md-2 col-12">
                        <div class="form-group">
                            <label>Admission Type *
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

                    <div class="col-lg-4 col-md-3 col-12">
                        <div class="form-group">
                            <label>{{request()->query('service')}} Ranking
                            </label>
                            <br>
                            <br>
                            <input class="form-control " type="text" name="college_ranking" value="{{old('college_ranking')}}">
                        </div>
                    </div>

                </div>
                <hr>
                <div class="row custom-box">
                    <div class=" col-12">
                        <div class="form-group">
                            <label>Ranking Criteria & Ranking Bodies
                            </label>
                            <textarea style="width:100%;" rows="5" name="ranking_criteria" vaue="{{old('ranking_criteria')}}"></textarea>
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
                            <input class="form-control " type="text" placeholder="24 or 48 or 72 Hours" name="response_time" value="{{old('response_time')}}">
                            <small>Number of Cases Enrolled till Date</small>
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

                </div>
                <div class="float-right">
                    <button type="button" class="client-btn bmenu">Next </button>
                </div>
            </div>

            <div class="whiteBox clearfix tab-pane  " style="max-width: none;" id="menu1">
                <div class="row custom-box">

                    <div class="col-lg-12col-md-12 col-12">
                        <div class="form-group">
                            <label>Courses Offered
                            </label>
                            <input class="form-control " type="text" id="offer_course_info" name="offer_course_info" placeholder="Courses Information" value="" onkeyup='sessionStorage.setItem("offer_course",this.value)'>

                        </div>
                        <div id="newRow"></div>
                        <button id="addRow" type="button" class="btn crew-btn" name="">Add Course</button>
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
                        <div class="custom-control custom-checkbox">
                            <label>What type of Certificate do you Offer?
                            </label>
                            <br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="checkbox12" name="certificate_type[]" value="Diploma" {{ (is_array(old('certificate_type')) and in_array("Diploma", old('certificate_type'))) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="checkbox12"> Diploma</label><br>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="checkbox13" name="certificate_type[]" value="PG Diploma" {{ (is_array(old('certificate_type')) and in_array("PG Diploma", old('certificate_type'))) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="checkbox13"> PG Diploma</label><br>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id=" checkbox14" name=" certificate_type[]" value="Certification" {{ (is_array(old('certificate_type')) and in_array("Certification", old('certificate_type'))) ? ' checked' : '' }}>
                                <label class="custom-control-label" for=" checkbox14"> Certification</label><br>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="checkbox15" name="certificate_type[]" value="Others" {{ (is_array(old('certificate_type')) and in_array("Others", old('certificate_type'))) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="checkbox15"> Others</label>
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
                function validateEmail($email) {
                    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    return emailReg.test($email);
                }
                var email = $('#email').val();
                var admission_email = $('#admission_email').val();
                var dean_email = $('#dean_email').val();

                if (!validateEmail(email)) {
                    $(".mail").each(function() {
                        $(this).html('')
                    });
                    $('#append_email').html('please enter valid email')
                    $('#email').focus()
                } else if (!validateEmail(admission_email)) {
                    $(".mail").each(function() {
                        $(this).html('')
                    });
                    $('#append_admission_email').html('please enter valid email')
                    $('#admission_email').focus()
                } else if (!validateEmail(dean_email)) {
                    $(".mail").each(function() {
                        $(this).html('')
                    });
                    $('#append_dean_email').html('please enter valid email')
                    $('#dean_email').focus()
                } else {
                    $(".mail").each(function() {
                        $(this).html('')
                    });

                    $(".progress-bar").css("width", "30%");
                    $(".progress-bar").html("30%");
                    $('.tab-pane').fadeOut();
                    $("#menu1").fadeIn();
                    $(".nav-link").removeClass('active')
                    $("#amenu1").addClass('active')
                }

            });
            $(".bmenu1").click(function() {
                $(".progress-bar").css("width", "40%");
                $(".progress-bar").html("40%");
                $('.tab-pane').fadeOut();
                $("#menu2").fadeIn();
                $(".nav-link").removeClass('active')
                $("#amenu2").addClass('active')
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
                html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
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