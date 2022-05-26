@extends('layouts.layout')

@section('content')
<style>
    .card:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .card {
        border-radius: 25px;
        height: 100%;
        width: 300px;

    }
    .input--file {
        position: relative;
        color: #7f7f7f;
        cursor: pointer;
    }

    .input--file input[type="file"] {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        cursor: pointer;
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
            <div class="col-md-3 border-left" style=" left: 80px;">
                <div class="d-flex flex-column align-items-left text-left p-3 py-5">
                    <div class="uploadimg">
                        @if($img)
                        <img class="rounded-circle mt-2 img" width="180px" src="{{url('files/'.$img)}}">
                        @else
                        <img class="rounded-circle mt-5 img" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><br>
                        @endif
                    </div>
                    @if(!$view)
                    <form method="post" id="upload_form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="input--file ">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="24" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="3.2" />
                                    <path d="M9 2l-1.83 2h-3.17c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-12c0-1.1-.9-2-2-2h-3.17l-1.83-2h-6zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z" />
                                    <path d="M0 0h24v24h-24z" fill="none" />
                                </svg>
                            </span>
                            <input id="profile_img" name="profile_img" type="file" />
                        </div>
                    </form>
                    @endif
                    <br>
                    <span class="font-weight-bold  align-items-center  ">{{$consultants->first_name}}</span><br>
                    <span class="font-weight-bold  text-left">{{$consultants->email}}</span><br>
                    <span class="font-weight-bold text-left">{{$consultants->fb_link}}</span><br>
                    <span class="font-weight-bold">{{$consultants->Linkedin_link}}</span><br>
                    <span class="font-weight-bold">{{$consultants->insta_link}}</span><br>
                    <span class="font-weight-bold">{{$consultants->twitter_link}} </span><br>
                    @if($view)
                    <div class="col-md-7 float-left">
                        <a href="{{route('dashboard.consultant')}}"> <button type="button" class="client-btn ">GO to dashboard</button></a>
                    </div>
                    @else
                    <div class="col-md-7 float-left">
                        <a href="{{route('edit.consultant')}}"> <button type="button" class="client-btn ">Edit Profile</button></a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-9 ">

                <div class="">
                    <div class="cardf">
                        <nav class="nav nav-pills nav-fill justify-content-left " style="cursor:pointer; text-decoration: underline !important ">
                            <a class="nav-link active amenu" style="cursor:pointer;padding: 1.15rem 1.5rem;color:#004e75 !important" aria-current="page" id="amenu">Main Content</a>
                            <a class="nav-link amenu1" style="cursor:pointer;padding: 1.15rem 1.5rem;color:#004e75 !important" id="amenu1">Team list</a>
                            <a class="nav-link amenu2" style="cursor:pointer;padding: 1.15rem 1.5rem;color:#004e75 !important" id="amenu2">About Company </a>
                            <a class="nav-link amenu3" style="cursor:pointer;padding: 1.15rem 1.5rem;color:#004e75 !important" id="amenu3"> Award & Certification</a>
                            <a class="nav-link amenu4" style="cursor:pointer;padding: 1.15rem 1.5rem;color:#004e75 !important" id="amenu4">News and Events</a>

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
                                <strong class="labels">Full Name</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels"> {{$consultants->first_name}} {{$consultants->middle_name}}{{$consultants->last_name}} </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Company Name</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$consultants->company_name}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Registered Office - Location</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$consultants->registrar_office_area}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Status</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$consultants->status}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Languages Known</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">
                                    @if($consultants->language_known)
                                    @foreach($consultants->language_known as $row)
                                    {{$row}}
                                    @endforeach
                                    @endif
                                </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Country</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$consultants->country}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Province/Region</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$consultants->region}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">City</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$consultants->city}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Street</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$consultants->streat}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Postal Code</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$consultants->postal_code}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Correspondence Email</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$consultants->email}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">URL - Website Address *</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels" >{{$consultants->website_address}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Contact Number</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$consultants->phone}}</label><br>
                            </div>
                        </div><br>

                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="card col-5">
                        <br><br>
                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Specialization</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">
                                    @if($consultants->specialization)
                                    @foreach($consultants->specialization as $row)
                                    {{$row}}
                                    @endforeach
                                    @endif
                                </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Express Entry - Success</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$consultants->express_entry_success}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">PNP Success</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$consultants->pnp_success}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">LMIA Success</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$consultants->lmia_success}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Others Success</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$consultants->other_success}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Others Success</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">{{$consultants->other_success}}</label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Service Offered</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">
                                    @if($consultants->offering_service)
                                    @foreach($consultants->offering_service as $row)
                                    {{$row}}
                                    @endforeach
                                    @endif
                                </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Other Services</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">
                                    @if($consultants->other_service)
                                    @foreach($consultants->other_service as $row)
                                    {{$row}}
                                    @endforeach
                                    @endif
                                </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Student Visa - Success</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">

                                    {{$consultants->student_visa_success}}

                                </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Tourist Visa Success</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">

                                    {{$consultants->tourist_visa_success}}

                                </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Family Visa Success</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">

                                    {{$consultants->family_visa_success}}

                                </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Other Visa Success</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">

                                    {{$consultants->other_visa_success}}

                                </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Year of Establishment</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">

                                    {{$consultants->establishment_year}}

                                </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Offering Services Since</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">

                                    {{$consultants->offering_year}}

                                </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Total Cases Taken</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">

                                    {{$consultants->total_cases_taken}}

                                </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Communication Success</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">

                                    {{$consultants->communication_mode_success}}

                                </label><br>
                            </div>
                        </div><br>

                        <div class="row custom-box">
                            <div class="col-md-5">
                                <strong class="labels">Prefer Correspondence Type</strong>
                            </div>

                            <div class="col-md-7">
                                <label class="labels">
                                    @if($consultants->communication_mode)
                                    @foreach($consultants->communication_mode as $row)
                                    {{$row}}
                                    @endforeach
                                    @endif
                                </label><br>
                            </div>
                        </div><br>

                    </div>
                    <br>

                </div>

                <div class=" tab-pane  col-md-10" id="menu1">

                    <div class="form-group">
                        <strong class="labels">Team details</strong>
                        <br><br>
                        <label class="labels">

                            {{$consultants->team_info}}

                        </label><br>
                    </div>

                    <div class="row ">

                        @foreach($teams as $key=>$row )

                        <div class="card col-xs-12 col-sm-6" style="  height: 300px">
                            <br><br>

                            <div class="row custom-box">
                                <div class="col-md-5">
                                    <strong class="labels">Team Member </strong>
                                </div>

                                <div class="col-md-7">
                                    <label class="labels">

                                        {{$row->member}}

                                    </label><br>
                                </div>
                            </div><br><br>
                            <div class="row custom-box">
                                <div class="col-md-5">
                                    <strong class="labels">Area of Expertise</strong>
                                </div>

                                <div class="col-md-7">
                                    <label class="labels">

                                        {{$row->expertise_area}}

                                    </label><br>
                                </div>
                            </div><br><br>
                            <div class="row custom-box">
                                <div class="col-md-5">
                                    <strong class="labels">Year of Experience</strong>
                                </div>

                                <div class="col-md-7">
                                    <label class="labels">

                                        {{$row->experience_year}}

                                    </label><br>
                                </div>
                            </div><br><br>
                            <div class="row custom-box">
                                <div class="col-md-5">
                                    <strong class="labels">No of Successful Cases</strong>
                                </div>

                                <div class="col-md-7">
                                    <label class="labels">

                                        {{$row->team_number_success_cases}}

                                    </label><br>
                                </div>
                            </div><br>

                        </div>

                        @endforeach

                    </div>

                </div>
              

                <div class="card tab-pane  col-md-10" id="menu2" style="width:80% !important;">
                    <div class="">
                        <br><br>
                        @if($consultants->privacy_policy_document)
                        <div class="row custom-box">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Privacy document
                                    </label>
                                    <br>
                                    <br>
                                    <a href="{{url('files/'.$consultants->privacy_policy_document)}}" target="_blank" style=" text-decoration: underline;">view Attachment</a>
                                </div>
                            </div>
                        </div>

                        @endif
                        @if($consultants->privacy_policy_detail)
                        <div class="row custom-box">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Terms of Privacy
                                    </label>
                                    <textarea rows="15" name="privacy_policy_detail" value="{{$consultants->privacy_policy_detail}}" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important;" disabled>{{$consultants->privacy_policy_detail}}</textarea>
                                </div>
                            </div>
                        </div>

                        @endif
                        @if($consultants->history)
                        <div class="row custom-box">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>About History
                                    </label>
                                    <br>
                                    <textarea style="width:100%;background-color:white !important;" rows="15" name="history" value="{{$consultants->history}}" disabled>{{$consultants->history}}</textarea>
                                </div>
                            </div>
                        </div>

                        @endif
                        @if($consultants->brief_introduction)
                        <div class="row custom-box">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label> Brief Introduction
                                    </label>
                                    <br>

                                    <textarea style="width:100%;background-color:white !important;" rows="15" name="brief_introduction" value="{{$consultants->brief_introduction}}" disabled>{{$consultants->brief_introduction}}</textarea>
                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                    <br> <br>
                </div>

                <div class="card tab-pane  col-md-10" id="menu3" style="width:80% !important;">
                    <br><br>
                    @if($consultants->Award)
                    <div class="row custom-box">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label>Awards and Certifications
                                </label>
                                <br>
                                <a href="{{url('files/'.$consultants->Award)}}" target="_blank" style=" text-decoration: underline;">View Attachment</a>

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

                                <textarea style="width:100%;background-color:white !important;" rows="25" name="achievement" value="{{$consultants->achievement}}" disabled>{{$consultants->achievement}}</textarea>
                            </div>
                        </div>
                    </div>

                    <br>

                </div>

                <div class="card tab-pane  col-md-10" id="menu4" style="width:80% !important;">
                    <br><br>
                    @if($consultants->vedio_url)
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>Video URL Link
                                </label>
                                <input class="form-control " type="text" name="vedio_url" value="{{$consultants->vedio_url}}" style="background-color:white !important;" disabled>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($consultants->event_new_weblink)
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>Weblinks for News and Events
                                </label>
                                <br>

                                <textarea style="width:100%;background-color:white !important;" rows="9" name="event_new_weblink" value="{{$consultants->event_new_weblink}}" disabled>{{$consultants->event_new_weblink}}</textarea>
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
                                        <a class="facebook" href="{{$consultants->fb_link}}">
                                            <div class="icon col-lg-1 col-md-1 col-1 fa-2xl"><i class="fa-brands fa-facebook"></i>
                                            </div>
                                        </a>
                                        <a class="twitter" href="{{$consultants->twitter_link}}">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-twitter"></i>
                                            </div>
                                        </a>
                                        <a class="instagram" href="{{$consultants->insta_link}}">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-instagram-square"></i></div>

                                        </a>
                                        <a class="linkedin" href="{{$consultants->Linkedin_link}}">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-linkedin"></i>
                                            </div>

                                        </a>
                                        <a class="youtube" href="{{$consultants->youtube_link}}">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-youtube"></i>
                                            </div>

                                        </a>
                                        <a class="google" href="{{$consultants->google_review_link}}">
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

                                <textarea style="width:100%;" rows="9" name="Comment" value="{{$consultants->Comment}}" disabled>{{$consultants->Comment}}</textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                </div> -->

            </div>
        </div>
    </div>

    <br>
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#profile_img').change(function() {


            console.log('first')
            var formData = new FormData($('#upload_form')[0]);
            console.log("second")

            event.preventDefault();
            $.ajax({
                url: "{{ route('ajaxupload.action') }}",
                method: "POST",
                data: formData,

                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    location.reload()

                },

            });



        });

    });
</script>


@endsection