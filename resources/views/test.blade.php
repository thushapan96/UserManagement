@extends('layouts.layout')

@section('content')

<section class="StayConnected clearfix" style="  padding: 100px 0 100px;">
    @if($message = Session::get('formSuccess'))
    <script>
        Swal.fire(
            'Success',
            'Successfully Submitted!',
            'success'
        )
    </script>
    @endif
    @if($message = Session::get('editformSuccess'))
    <script>
        Swal.fire(
            'Success',
            'Successfully Updated!',
            'success'
        )
    </script>
    @endif

    <div class="" style=" left: 0px;">
        <div class="row">
            <div class="col-md-3 border-left" style="  left: 50px;">
                <div class="d-flex flex-column align-items-left text-left p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><br>
                    <span class="font-weight-bold  align-items-center  ">{{$institutions->name}}</span><br>
                    <span class="font-weight-bold  text-left">{{$institutions->email}}</span><br>
                    <span class="font-weight-bold text-left">{{$institutions->fb_link}}</span><br>
                    <span class="font-weight-bold">{{$institutions->Linkedin_link}}</span><br>
                    <span class="font-weight-bold">{{$institutions->insta_link}}</span><br>
                    <span class="font-weight-bold">{{$institutions->twitter_link}} </span><br>
                    <div class="col-md-7">
                        <a href="{{route('edit.institution')}}"> <button type="button" class="client-btn ">Edit Profile</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 ">

                <div class="">
                    <div class="cardf">
                        <nav class="nav nav-pills nav-fill justify-content-left " style="cursor:pointer; text-decoration: underline !important">
                            <a class="nav-link active amenu" style="cursor:pointer;padding: 1.15rem 1rem;color:blue !important" aria-current="page" id="amenu">Main Content</a>
                            <a class="nav-link amenu1" style="cursor:pointer;padding: 1.15rem 1rem;color:blue !important" id="amenu1">Courses</a>
                            <a class="nav-link amenu2" style="cursor:pointer;padding: 1.15rem 1rem;color:blue !important" id="amenu2">About Company </a>
                            <a class="nav-link amenu3" style="cursor:pointer;padding: 1.15rem 1rem;color:blue !important" id="amenu3"> Award & Certification</a>
                            <a class="nav-link amenu4" style="cursor:pointer;padding: 1.15rem 1rem;color:blue !important" id="amenu4">News and Events</a>
                            <!-- <a class="nav-link amenu5" style="cursor:pointer;padding: 1.15rem 1rem;color:blue !important" id="amenu5">Canada Inspire</a>
                            <a class="nav-link amenu6" style="cursor:pointer;padding: 1.15rem 1rem;color:blue !important" id="amenu6">Feedback </a> -->

                        </nav>
                    </div>

                </div>
                <br>
                <br>

                <div class="row tab-pane  " id="menu">

                    <div class="card col-5">
                        <br><br>
                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels"> Name</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels"> {{$institutions->name}} </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Registered Office - Location</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->registrar_office_area}}</label><br>
                            </div>
                        </div><br>


                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Country</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->country}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Province/Region</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->region}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">City</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->city}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Street</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->streat}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Postal Code</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->postal_code}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Correspondence Email</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->email}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">URL - Website Address *</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->website_address}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Contact Number</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->phone}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Admission Cell - Contact Person</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->admission_phone}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Dean Email ID</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->dean_email}}</label><br>
                            </div>
                        </div><br>


                    </div> &nbsp;&nbsp;&nbsp;&nbsp;

                    <div class="card col-5">
                        <br><br>
                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Type of Courses</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">
                                    @if($institutions->course_type)
                                    @foreach($institutions->course_type as $row)
                                    {{$row}}
                                    @endforeach
                                    @endif
                                </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Intake</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">
                                    @if($institutions->intake)
                                    @foreach($institutions->intake as $row)
                                    {{$row}}
                                    @endforeach
                                    @endif
                                </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Admission Type </strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->admission_type}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Year of Establishment</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->establishment_year}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Offering Services Since</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->offering_year}}</label><br>
                            </div>
                        </div><br>
                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Response Time</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->response_time}}</label><br>
                            </div>
                        </div><br>
                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Mode of Communication</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$institutions->communication_mode}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Prefer Correspondence Type</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">
                                    @if($institutions->communication_mode)
                                    @foreach($institutions->communication_mode as $row)
                                    {{$row}}
                                    @endforeach
                                    @endif
                                </label><br>
                            </div>
                        </div><br>
                    </div>

                    <br>
                </div>

                <div class="card tab-pane  col-md-11" id="menu1">
                    <br><br>
                    <div class="row custom-box">

                        <div class="col-lg-12col-md-12 col-12">
                            <div class="form-group">
                                <label>Courses Offered Information </label>
                                <input class="form-control " type="text" id="offer_course_info" name="offer_course_info" placeholder="Courses Information" value="{{$institutions->offer_course_info}}" disabled>

                            </div>
                            <div class="form-group">
                                <label>Courses
                                </label>
                                <div id="newRow">
                                    @if($institutions->offer_course)
                                    @foreach($institutions->offer_course as $key => $row)
                                    <input type="text" name="offer_course[]" class="form-control m-input addinput" value="{{$row}}" disabled />
                                    <br>
                                    @endforeach
                                    @endif
                                </div>
                            </div>

                        </div>

                    </div>
                    <hr>
                    <div class="row custom-box">

                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Total Number of Students Enrolled
                                </label>
                                <input class="form-control " type="number" name="no_student" value="{{$institutions->no_student}}" disabled>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Total Number of Successful Students
                                </label>
                                <input class="form-control " type="number" name="no_success_student" value="{{$institutions->no_success_student}}" disabled>
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
                                        <input type="radio" class="custom-control-input " id="Financialyes" name="is_financial" value="yes" {{ $institutions->is_financial == "yes" ? "checked":"" }} disabled>
                                        <label class="custom-control-label mt-1" for="Financialyes">Yes</label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-2 ">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input " id="Financialno" name="is_financial" value="no" {{ $institutions->is_financial == "no" ? "checked":"" }} disabled>
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
                                        <input type="radio" class="custom-control-input " id="Creditsyes" name="is_credit" value="yes" {{ $institutions->is_credit == "yes" ? "checked":"" }} disabled>
                                        <label class="custom-control-label mt-1" for="Creditsyes">Yes</label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-2 ">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input " id="Creditsno" name="is_credit" value="no" {{ $institutions->is_credit == "no" ? "checked":"" }} disabled>
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
                                    <input class="custom-control-input" type="checkbox" id="checkbox12" name="certificate_type[]" value="Diploma" {{ (is_array($institutions->certificate_type) and in_array("Diploma", $institutions->certificate_type)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="checkbox12"> Diploma</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="checkbox13" name="certificate_type[]" value="PG Diploma" {{ (is_array($institutions->certificate_type) and in_array("PG Diploma", $institutions->certificate_type)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="checkbox13"> PG Diploma</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id=" checkbox14" name=" certificate_type[]" value="Certification" {{ (is_array($institutions->certificate_type) and in_array("Certification", $institutions->certificate_type)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for=" checkbox14"> Certification</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="checkbox15" name="certificate_type[]" value="Others" {{ (is_array($institutions->certificate_type) and in_array("Others", $institutions->certificate_type)) ? ' checked' : '' }} disabled>
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
                                    <input class="custom-control-input" type="checkbox" id="checkbox16" name="course_duration[]" value="6 Months" {{ (is_array($institutions->course_duration) and in_array("6 Months", $institutions->course_duration)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="checkbox16"> 6 Months</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="checkbox17" name="course_duration[]" value="12 Months" {{ (is_array($institutions->course_duration) and in_array("12 Months", $institutions->course_duration)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="checkbox17">12 Months</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="checkbox18" name="course_duration[]" value="18 Months" {{ (is_array($institutions->course_duration) and in_array("18 Months", $institutions->course_duration)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="checkbox18">18 Months</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="checkbox19" name="course_duration[]" value="Others" {{ (is_array($institutions->course_duration) and in_array("Others", $institutions->course_duration)) ? ' checked' : '' }} disabled>
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
                                    <input class="custom-control-input" type="checkbox" id="checkbox20" name="other_require[]" value="GRE" {{ (is_array($institutions->other_require) and in_array("GRE", $institutions->other_require)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="checkbox20"> GRE</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="checkbox21" name="other_require[]" value="TOEFL" {{ (is_array($institutions->other_require) and in_array("TOEFL", $institutions->other_require)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="checkbox21">TOEFL </label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="checkbox22" name="other_require[]" value="GMAT" {{ (is_array($institutions->other_require) and in_array("GMAT", $institutions->other_require)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="checkbox22">GMAT</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="checkbox23" name="other_require[]" value="SAT" {{ (is_array($institutions->other_require) and in_array("SAT", $institutions->other_require)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="checkbox23">SAT</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="checkbox24" name="other_require[]" value="Others" {{ (is_array($institutions->other_require) and in_array("Others", $institutions->other_require)) ? ' checked' : '' }} disabled>
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
                                    <input class="custom-control-input" type="checkbox" id="checkbox25" name="language_test_type[]" value="IELTS" {{ (is_array($institutions->language_test_type) and in_array("IELTS", $institutions->language_test_type)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="checkbox25"> IELTS</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="checkbox26" name="language_test_type[]" value="PTE" {{ (is_array($institutions->language_test_type) and in_array("PTE", $institutions->language_test_type)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="checkbox26">PTE </label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="checkbox27" name="language_test_type[]" value="Others" {{ (is_array($institutions->language_test_type) and in_array("Others", $institutions->language_test_type)) ? ' checked' : '' }} disabled>
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
                                        <input type="radio" class="custom-control-input " id="Scholarshipsyes" name="is_scholarship_offer" value="yes" {{ $institutions->is_scholarship_offer == "yes" ? "checked":"" }} disabled>
                                        <label class="custom-control-label mt-1" for="Scholarshipsyes">Yes</label>

                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-2 ">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input " id="Scholarshipsno" name="is_scholarship_offer" value="no" {{ $institutions->is_scholarship_offer == "no" ? "checked":"" }} disabled>
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
                                        <input type="radio" class="custom-control-input " id="Webinarsyes" name="is_conduct_webinar" value="yes" {{ $institutions->is_conduct_webinar == "yes" ? "checked":"" }} disabled>
                                        <label class="custom-control-label mt-1" for="Webinarsyes">Yes</label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-2 ">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input " id="Webinarsno" name="is_conduct_webinar" value="no" {{ $institutions->is_conduct_webinar == "no" ? "checked":"" }} disabled>
                                        <label class="custom-control-label mt-1" for="Webinarsno">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Admission Criteria Website/URL Link
                                </label>
                                <input class="form-control " type="text" name="admission_criteria_website" value="{{$institutions->admission_criteria_website}}" disabled>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Fee Structure Website/URL Link
                                </label>
                                <input class="form-control " type="text" min="1" name="fee_structure_website" value="{{$institutions->fee_structure_website}}" disabled>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>Is ECA (Education Certificate Assessment) required? If "YES" specify name of the Organization
                                </label>
                                <input class="form-control " type="text" name="eca" value="{{$institutions->eca}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="float-right">
                        <button type="button" class="client-btn bmenu1">Next </button>
                    </div>
                    <br>
                </div>

                <div class="card tab-pane  col-md-11" id="menu2">
                    <br><br>
                    <div class="row custom-box">

                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="form-group">
                                <label>Do you have any Privacy Policies?
                                </label>
                                <div class="col-lg-2 col-md-2 col-2 ">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input " id="Policies" name="is_Policies" value="yes" {{ $institutions->is_Policies == "yes"  ? ' checked' : '' }} disabled>
                                        <label class="custom-control-label mt-1" for="Policies">Yes</label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-2 col-3 ">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input " id="Policiesno" name="is_Policies" value="no" {{ $institutions->is_Policies == "no"  ? ' checked' : '' }} disabled>
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
                                <a href="{{url('files/'.$institutions->privacy_policy_document)}}" target="_blank" style=" text-decoration: underline;">view Attachment</a>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-7 col-12">
                            <div class="form-group">
                                <label>Terms if Any
                                </label>
                                <textarea style="width:100%;" rows="6" name="privacy_policy_detail" value="{{$institutions->privacy_policy_detail}}" disabled>{{$institutions->privacy_policy_detail}}</textarea>
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
                                <textarea style="width:100%;" rows="9" name="history" value="{{$institutions->history}}" disabled>{{$institutions->history}}</textarea>
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

                                <textarea style="width:100%;" rows="9" name="brief_introduction" value="{{$institutions->brief_introduction}}" disabled>{{$institutions->brief_introduction}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="float-right">
                        <button type="button" class="client-btn bmenu2">Next </button>
                    </div>
                    <br>
                </div>

                <div class="card tab-pane  col-md-11" id="menu3">
                    <br><br>
                    <div class="row custom-box">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label>Awards and Certifications
                                </label>
                                <br>
                                <a href="{{url('files/'.$institutions->Award)}}" target="_blank" style=" text-decoration: underline;">View Attachment</a>

                            </div>
                        </div>
                    </div>

                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>Company Achievements
                                </label>
                                <br>

                                <textarea style="width:100%;" rows="9" name="achievement" value="{{$institutions->achievement}}" disabled>{{$institutions->achievement}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="float-right">
                        <button type="button" class="client-btn bmenu3">Next </button>
                    </div>
                    <br>

                </div>

                <div class="card tab-pane  col-md-11" id="menu4">
                    <br><br>
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>Your Introductory Video URL Link display on Canada Inspire Portal
                                </label>
                                <input class="form-control " type="text" name="vedio_url" value="{{$institutions->vedio_url}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>Kindly provide Weblinks for News and Events, Immigration Updates and much more to help Candidates to have more information
                                </label>
                                <br>

                                <textarea style="width:100%;" rows="9" name="event_new_weblink" value="{{$institutions->event_new_weblink}}" disabled>{{$institutions->event_new_weblink}}</textarea>
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
                                                    <input class="form-control socialLink " type="text" placeholder="Facebook link " name="fb_link" value="{{$institutions->fb_link}}" disabled>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="twitter" href="##">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-twitter"></i>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-11 d-none " id="twitter">
                                                <div class="form-group">
                                                    <label> </label>
                                                    <input class="form-control socialLink" type="text" placeholder="Twitter link " name="twitter_link" value="{{$institutions->twitter_link}}" disabled>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="instagram" href="##">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-instagram-square"></i></div>
                                            <div class="col-lg-11 col-md-11 col-11 d-none " id="instagram">
                                                <div class="form-group">
                                                    <label> </label>
                                                    <input class="form-control socialLink" type="text" placeholder="Instagram link " name="insta_link" value="{{$institutions->insta_link}}" disabled>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="linkedin" href="##">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-linkedin"></i>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-11 d-none " id="linkedin">
                                                <div class="form-group">
                                                    <label> </label>
                                                    <input class="form-control socialLink" type="text" placeholder="Linkedin Profile " name="Linkedin_link" value="{{$institutions->Linkedin_link}}" disabled>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="youtube" href="##">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-youtube"></i>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-11 d-none " id="youtube">
                                                <div class="form-group">
                                                    <label> </label>
                                                    <input class="form-control socialLink" type="text" placeholder="youtube link " name="youtube_link" value="{{$institutions->youtube_link}}" disabled>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="google" href="##">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-google"></i>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-11 d-none " id="google">
                                                <div class="form-group">
                                                    <label> </label>
                                                    <input class="form-control socialLink" type="text" placeholder="google review link " name="google_review_link" value="{{$institutions->google_review_link}}" disabled>
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
                    <br>
                </div>

                <div class="card tab-pane  col-md-11" id="menu5">
                    <br><br>
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>Canada Inspire provides Additional Services :-
                                </label>
                                <br>

                                <textarea style="width:100%;" rows="9" id="field_cutjx" data-invmsg="Canada Inspire provides Additional Services :- is invalid" aria-invalid="false" spellcheck="false" disabled>We have a Team of professionals who are having expert in Application Development, Solutions and Services. 
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
                    <br>
                </div>

                <div class="card tab-pane  col-md-11" id="menu6">
                    <br><br>
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>We are looking forward to have your valuable Comments/Remarks to add or modify on the above given information to make it more informative.
                                </label>
                                <br>

                                <textarea style="width:100%;" rows="9" name="Comment" value="{{$institutions->Comment}}" disabled>{{$institutions->Comment}}</textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>


            </div>
        </div>
    </div>


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
            $('.tab-pane').fadeOut();
            $("#menu1").fadeIn();
            $(".nav-link").removeClass('active')
            $("#amenu1").addClass('active')
        });
        $(".bmenu1").click(function() {

            $('.tab-pane').fadeOut();
            $("#menu2").fadeIn();
            $(".nav-link").removeClass('active')
            $("#amenu2").addClass('active')
        });
        $(".bmenu2").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu3").fadeIn();
            $(".nav-link.active").removeClass('active')
            $("#amenu3").addClass('active')
        });
        $(".bmenu3").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu4").fadeIn();
            $(".nav-link.active").removeClass('active')
            $("#amenu4").addClass('active')
        });
        $(".bmenu4").click(function() {
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



    });
</script>

@endsection