@extends('layouts.layout')

@section('content')
<style> 
 .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      
        background-color:#f2b7b7 !important;

        border-radius: 25px;
    }
</style>
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
                    @if($view)
                    <div class="col-md-7 float-left">
                        <a href="{{route('dashboard.institution')}}"> <button type="button" class="client-btn ">GO to dashboard</button></a>
                    </div>
                    @else
                    <div class="col-md-7 float-left">
                        <a href="{{route('edit.institution')}}"> <button type="button" class="client-btn ">Edit Profile</button></a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-9 ">

                <div class="">
                    <div class="cardf">
                        <nav class="nav nav-pills nav-fill justify-content-left " style="cursor:pointer; text-decoration: underline !important">
                            <a class="nav-link active amenu" style="cursor:pointer;padding: 1.15rem 1rem;color:blue !important;" aria-current="page" id="amenu">Main Content</a>
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
                                    {{$row}},
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
                                    {{$row}},
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
                                <label class="labels">
                                    @if($institutions->communication_mode)
                                    @foreach($institutions->communication_mode as $row)
                                    {{$row}},
                                    @endforeach
                                    @endif
                                </label><br>
                            </div>
                        </div><br>
                    </div>

                    <br>
                </div>

                <div class="card tab-pane  col-md-8" id="menu1">

                    <br><br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="labels">Courses Information</strong>
                        </div>

                        <div class="col-md-7">
                            <label class="labels">{{$institutions->offer_course_info}}</label><br>
                        </div>
                    </div><br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="labels">Courses</strong>
                        </div>

                        <div class="col-md-7">
                            <label class="labels">
                                @if($institutions->offer_course)
                                @foreach($institutions->offer_course as $row)
                                {{$row}},
                                @endforeach
                                @endif
                            </label><br>
                        </div>
                    </div><br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="labels">Total Number of Students Enrolled</strong>
                        </div>

                        <div class="col-md-7">
                            <label class="labels">{{$institutions->no_student}}</label><br>
                        </div>
                    </div><br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="labels">Total Number of Successful Students</strong>
                        </div>

                        <div class="col-md-7">
                            <label class="labels">{{$institutions->no_success_student}}</label><br>
                        </div>
                    </div><br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="labels">Financial Aided Type</strong>
                        </div>

                        <div class="col-md-7">
                            <label class="labels">{{$institutions->is_financial == 'yes' ? 'Financial':'Un Financial'}}</label><br>
                        </div>
                    </div><br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="labels">Transfer Credits</strong>
                        </div>

                        <div class="col-md-7">
                            <label class="labels">{{$institutions->is_credit == 'yes' ? 'Available':'Un Available'}}</label><br>
                        </div>
                    </div><br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="labels">Offer Certificate type</strong>
                        </div>

                        <div class="col-md-7">
                            <label class="labels">
                                @if($institutions->certificate_type)
                                @foreach($institutions->certificate_type as $row)
                                {{$row}},
                                @endforeach
                                @endif
                            </label><br>
                        </div>
                    </div><br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="labels">Course Duration</strong>
                        </div>

                        <div class="col-md-7">
                            <label class="labels">
                                @if($institutions->course_duration)
                                @foreach($institutions->course_duration as $row)
                                {{$row}},
                                @endforeach
                                @endif
                            </label><br>
                        </div>
                    </div><br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="labels">other requirement</strong>
                        </div>

                        <div class="col-md-7">
                            <label class="labels">
                                @if($institutions->other_require)
                                @foreach($institutions->other_require as $row)
                                {{$row}},
                                @endforeach
                                @endif
                            </label><br>
                        </div>
                    </div><br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="labels">prefer language</strong>
                        </div>

                        <div class="col-md-7">
                            <label class="labels">
                                @if($institutions->language_test_type)
                                @foreach($institutions->language_test_type as $row)
                                {{$row}},
                                @endforeach
                                @endif
                            </label><br>
                        </div>
                    </div><br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="labels"> offer any Scholarships</strong>
                        </div>

                        <div class="col-md-7">
                            <label class="labels">

                                {{$institutions->is_scholarship_offer}}

                            </label><br>
                        </div>
                    </div><br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="labels"> conduct any Webinars</strong>
                        </div>

                        <div class="col-md-7">
                            <label class="labels">

                                {{$institutions->is_conduct_webinar}}

                            </label><br>
                        </div>
                    </div><br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="labels">Admission Criteria Website</strong>
                        </div>

                        <div class="col-md-7">
                            <label class="labels">{{$institutions->admission_criteria_website}}</label><br>
                        </div>
                    </div><br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="labels">Fee Structure Website</strong>
                        </div>

                        <div class="col-md-7">
                            <label class="labels">{{$institutions->fee_structure_website}}</label><br>
                        </div>
                    </div><br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="labels">Education Certificate Assessment Organization Name</strong>
                        </div>

                        <div class="col-md-7">
                            <label class="labels">{{$institutions->eca}}</label><br>
                        </div>
                    </div><br>

                </div>

                <div class="card tab-pane  col-md-8" id="menu2" style="width:80% !important;">
                    <div class="">
                        <br><br>
                        @if($institutions->privacy_policy_document)
                        <div class="row custom-box">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Privacy document
                                    </label>
                                    <br>
                                    <br>
                                    <a href="{{url('files/'.$institutions->privacy_policy_document)}}" target="_blank" style=" text-decoration: underline;">view Attachment</a>
                                </div>
                            </div>
                        </div>

                        @endif
                        @if($institutions->privacy_policy_detail)
                        <div class="row custom-box">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Terms of Privacy
                                    </label>
                                    <textarea rows="15" name="privacy_policy_detail" value="{{$institutions->privacy_policy_detail}}" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important;" disabled>{{$institutions->privacy_policy_detail}}</textarea>
                                </div>
                            </div>
                        </div>

                        @endif
                        @if($institutions->history)
                        <div class="row custom-box">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>About History
                                    </label>
                                    <br>
                                    <textarea style="width:100%;background-color:white !important;" rows="15" name="history" value="{{$institutions->history}}" disabled>{{$institutions->history}}</textarea>
                                </div>
                            </div>
                        </div>

                        @endif
                        @if($institutions->brief_introduction)
                        <div class="row custom-box">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label> Brief Introduction
                                    </label>
                                    <br>

                                    <textarea style="width:100%;background-color:white !important;" rows="15" name="brief_introduction" value="{{$institutions->brief_introduction}}" disabled >{{$institutions->brief_introduction}}</textarea>
                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                    <br> <br>
                </div>

                <div class="card tab-pane  col-md-8" id="menu3" style="width:80% !important;">
                    <br><br>
                    @if($institutions->Award)
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
                    @endif
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>Company Achievements
                                </label>
                                <br>

                                <textarea style="width:100%;background-color:white !important;" rows="25" name="achievement" value="{{$institutions->achievement}}" disabled>{{$institutions->achievement}}</textarea>
                            </div>
                        </div>
                    </div>

                    <br>

                </div>

                <div class="card tab-pane  col-md-8" id="menu4" style="width:80% !important;">
                    <br><br>
                    @if($institutions->vedio_url)
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>Video URL Link
                                </label>
                                <input class="form-control " type="text" name="vedio_url" value="{{$institutions->vedio_url}}" style=" background-color:white !important;" readonly>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($institutions->event_new_weblink)
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>Weblinks for News and Events
                                </label>
                                <br>

                                <textarea style="width:100%;" rows="9" name="event_new_weblink" value="{{$institutions->event_new_weblink}}" readonly style=" background-color:white !important;">{{$institutions->event_new_weblink}}</textarea>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="socialAppend" id="socialAppend">
                        <div class="row mb-1 social">

                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Social Media Profile

                                    </label>
                                    <div class="row">
                                        <a class="facebook" href="{{$institutions->fb_link}}">
                                            <div class="icon col-lg-1 col-md-1 col-1 fa-2xl"><i class="fa-brands fa-facebook"></i>
                                            </div>
                                        </a>
                                        <a class="twitter" href="{{$institutions->twitter_link}}">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-twitter"></i>
                                            </div>
                                        </a>
                                        <a class="instagram" href="{{$institutions->insta_link}}">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-instagram-square"></i></div>

                                        </a>
                                        <a class="linkedin" href="{{$institutions->Linkedin_link}}">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-linkedin"></i>
                                            </div>

                                        </a>
                                        <a class="youtube" href="{{$institutions->youtube_link}}">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-youtube"></i>
                                            </div>

                                        </a>
                                        <a class="google" href="{{$institutions->google_review_link}}">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-google"></i>
                                            </div>

                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                </div>

                <!-- <div class="card tab-pane  col-md-11" id="menu5" style="width:100% !important;">
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
                   
                    <br>
                </div> -->

                <!-- <div class="card tab-pane  col-md-11" id="menu6">
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
                </div> -->


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
        
        $('[name="same_Correspondence_address"]').change(function() {
            if ($(this).is(':checked')) {
                // Do something...
                $('#sameaddress').addClass('d-none');
            } else {
                $('#sameaddress').removeClass('d-none');
            };
        });
        


    });
</script>

@endsection