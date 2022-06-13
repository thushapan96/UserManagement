@extends('layouts.layoutss')

@section('content')
<style>
    th {
        text-transform: capitalize;
        color: #00000078 !important;
    }

    .outset {
        border-style: outset;
    }

    textarea {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);


    }


    .img {
      
        /* border-radius: 4px !important; */
        padding: 5px !important;
        opacity: 1;
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

    .custom-file-upload {

        display: inline-block;
        padding: 2px 2px;
        cursor: pointer;
    }

    .custom-file-upload input[type="file"] {
        display: none;
    }

    label {
        font-weight: bold !important;
    }

    .personal label {
        font-weight: 300px !important;
    }

    .py-5 {
        padding-top: 7rem !important;
    }
</style>
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

<section>

    <div class="row">

        <div class="col-md-9">
            <h3 class="float-center" style="text-align:center">{{$institutions->name}} {{$institutions->type}}</h3>
            <u1 class="col-md-10" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:auto !important;margin-right:auto">
                <li class=" uk-active" id="amenu"><a style="cursor:pointer;padding: 0.5rem 1rem;" aria-current="page">Main </a></li>
                <li class="" id="amenu1"><a style="cursor:pointer;padding: 0.5rem  1rem;">Courses</a></li>
                <li class="" id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1rem;">About  {{$institutions->type}} </a></li>
                <li class="" id="amenu3"><a style="cursor:pointer;padding: 0.5rem  1rem;"> Award & Certification</a></li>
                <li class="" id="amenu4"><a style="cursor:pointer;padding: 0.5rem  1rem;">News and Events</a></li>
                <!-- <li class="" id="amenu5"><a style="cursor:pointer;padding: 0.5rem 1rem;">Canada Inspire</a></li>
                <li class="" id="amenu6"><a style="cursor:pointer;padding: 0.5rem 1rem;">Feedback</a></li> -->

            </u1>
            <u1 class="uk-switcher">
                <li id='menu' class='tab-pane '>
                    <div class='uk-card col-md-11 ' style="margin-left:auto !important;margin-right:auto">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <fieldset class="uk-fieldset md-bg-grey-300 sc-padding">
                                    <h6 style="text-decoration:underline;">Personal Information</h6>

                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Name</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">
                                                {{$institutions->name}}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Contact Number</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps"> {{$institutions->phone}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Register number </strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">
                                                {{$institutions->registration_number}}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Admission Cell - Contact Person</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps"> {{$institutions->admission_phone}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Correspondence Email</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps"> {{$institutions->email}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Dean Email ID</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps"> {{$institutions->dean_email}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">URL Website Address</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$institutions->website_address}}
                                            </p>
                                        </div>
                                    </div>
                                </fieldset><br>
                                <fieldset class="uk-fieldset md-bg-grey-300 sc-padding">
                                    <h6 style="text-decoration:underline;">Address</h6>

                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">postal Code</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">
                                                {{$institutions->postal_code}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Street</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">
                                                {{$institutions->streat}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">City</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$institutions->city}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">province</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">
                                                {{$institutions->region}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Country</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$institutions->country}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Registered Office - Locations</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$institutions->registrar_office_area}}
                                            </p>
                                        </div>
                                    </div>
                                </fieldset>
                            </fieldset>
                        </div>
                    </div>
                </li>
                <li id='menu1' class='tab-pane '>
                    <div class='uk-card col-md-11' style="margin-left:auto !important;margin-right:auto">
                        <div class="uk-card-body sc-padding-medium">
                        <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                            <fieldset class="uk-fieldset md-bg-grey-300 sc-padding">
                                <h6 style="text-decoration:underline;">Course Details</h6>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Type of Courses</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">
                                            @if($institutions->course_type)
                                            @foreach($institutions->course_type as $row)
                                            {{$row}}<br>
                                            @endforeach
                                            @else
                                            <br>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Courses Information</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps"> @if($institutions->offer_course_info){{$institutions->offer_course_info}}
                                            @else
                                            <br>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Courses</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">
                                            @if($institutions->offer_course)
                                            @foreach($institutions->offer_course as $row)
                                            {{$row}}<br>
                                            @endforeach
                                            @else
                                            <br>
                                            @endif

                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Total Number of Students Enrolled</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps"> @if($institutions->no_student){{$institutions->no_student}}
                                            @else
                                            <br>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Total Number of Successful Students</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps"> @if($institutions->no_success_student){{$institutions->no_success_student}}
                                            @else
                                            <br>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Course Duration</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">
                                            @if($institutions->course_duration)
                                            @foreach($institutions->course_duration as $row)
                                            {{$row}}<br>
                                            @endforeach
                                            @else
                                            <br>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">prefer language</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">
                                            @if($institutions->language_test_type)
                                            @foreach($institutions->language_test_type as $row)
                                            {{$row}}<br>
                                            @endforeach
                                            @else
                                            <br>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </fieldset><br>
                            <fieldset class="uk-fieldset md-bg-grey-300 sc-padding">
                                <h6 style="text-decoration:underline;">Other Details</h6>
                                @if($institutions->medium)
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Medium</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">
                                        {{$institutions->medium}}
                                        </p>
                                    </div>
                                </div>
                                @endif
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Intake</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">
                                            @if($institutions->intake)
                                            @foreach($institutions->intake as $row)
                                            {{$row}}<br>
                                            @endforeach
                                            @else
                                            <br>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Admission Type </strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">
                                            @if($institutions->admission_type){{$institutions->admission_type}}
                                            @else
                                            <br>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Year of Establishment</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps"> @if($institutions->establishment_year){{$institutions->establishment_year}}
                                            @else
                                            <br>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Response Time</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">
                                            @if($institutions->response_time){{$institutions->response_time}}
                                            @else
                                            <br>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Mode of Communication</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">
                                            @if($institutions->communication_mode)
                                            @foreach($institutions->communication_mode as $row)
                                            {{$row}}<br>
                                            @endforeach
                                            @else
                                            <br>
                                            @endif

                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Offering Services Since</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps"> @if($institutions->offering_year){{$institutions->offering_year}}
                                            @else
                                            <br>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Financial Aided Type</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">{{$institutions->is_financial == 'yes' ? 'Financial':'Un Financial'}}</p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Transfer Credits</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">{{$institutions->is_credit == 'yes' ? 'Available':'Un Available'}}</p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Offer Certificate type</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">
                                            @if($institutions->certificate_type)
                                            @foreach($institutions->certificate_type as $row)
                                            {{$row}}<br>
                                            @endforeach
                                            @else
                                            <br>

                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">other requirement</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">
                                            @if($institutions->other_require)
                                            @foreach($institutions->other_require as $row)
                                            {{$row}}<br>
                                            @endforeach
                                            @else
                                            <br>

                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps"> offer any Scholarships</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">

                                            @if($institutions->is_scholarship_offer){{$institutions->is_scholarship_offer}}
                                            @else
                                            <br>
                                            @endif

                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps"> conduct any Webinars</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">

                                            @if($institutions->is_conduct_webinar){{$institutions->is_conduct_webinar}}@else
                                            <br>
                                            @endif

                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Admission Criteria Website</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps"> @if($institutions->admission_criteria_website){{$institutions->admission_criteria_website}}@else
                                            <br>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Fee Structure Website</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">
                                            @if($institutions->fee_structure_website){{$institutions->fee_structure_website}}@else
                                            <br>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Education Certificate Assessment Organization Name</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps"> @if($institutions->eca){{$institutions->eca}}@else
                                            <br>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </fieldset>
                        </fieldset>
                        </div>
                    </div>
                </li>
                <li id='menu2' class='tab-pane '>
                    <div class="uk-card col-md-11" style="margin-left:auto !important;margin-right:auto">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                @if($institutions->privacy_policy_document)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Privacy document of {{$institutions->type}}
                                            </label>
                                            <br>

                                            <a href="{{url('files/'.$institutions->privacy_policy_document)}}" target="_blank" style=" text-decoration: underline;width:100% !important">{{$institutions->privacy_policy_document}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($institutions->privacy_policy_detail)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label style="width:400px">Terms of Privacy of {{$institutions->type}}</label>

                                            <textarea name="privacy_policy_detail"  value="{{$institutions->privacy_policy_detail}}" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled>{{$institutions->privacy_policy_detail}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($institutions->history)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>{{$institutions->type}} History
                                            </label>
                                            <br>

                                            <textarea class="outset" name="history"  value="{{$institutions->history}}" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled> {{$institutions->history}}</textarea>


                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($institutions->brief_introduction)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label> Brief Introduction of {{$institutions->type}}
                                            </label>
                                            <br>

                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;"  name="brief_introduction" value="{{$institutions->brief_introduction}}" disabled>{{$institutions->brief_introduction}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($institutions->mutiImg_about_company)
                                @foreach($institutions->mutiImg_about_company as $row )
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="col-lg-8 col-md-8 " style="margin-left:auto;margin-right:auto;">
                                            <img class=" mt-2 img " src="{{url('files/'.$row)}}" style="width:100%;height:300px">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </fieldset>
                        </div>
                    </div>
                </li>
                <li id='menu3' class='tab-pane '>
                    <div class="uk-card col-md-11" style="margin-left:auto !important;margin-right:auto">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                @if($institutions->Award)
                                <!-- <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>{{$institutions->type}} Awards and Certifications
                                            </label>
                                            <br>
                                            <a href="{{url('files/'.$institutions->Award)}}" target="_blank" style=" text-decoration: underline;">{{$institutions->Award}}</a>

                                        </div>
                                    </div>
                                </div> -->
                                @endif
                                @if($institutions->achievement)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>{{$institutions->type}} Achievements
                                            </label>
                                            <br>

                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;"  name="achievement" value="{{$institutions->achievement}}" disabled>{{$institutions->achievement}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($institutions->mutiImg_about_award)
                                @foreach($institutions->mutiImg_about_award as $row )
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="col-lg-8 col-md-8 " style="margin-left:auto;margin-right:auto;">
                                            <img class=" mt-2 img " src="{{url('files/'.$row)}}" style="width:100%;height:300px">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </fieldset>
                        </div>
                    </div>
                </li>
                <li id='menu4' class='tab-pane'>
                    <div class="uk-card col-md-11" style="margin-left:auto !important;margin-right:auto">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                @if($institutions->vedio_url)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Video URL Link of {{$institutions->type}}
                                            </label><br>
                                            <a href="{{url($institutions->vedio_url)}}" style="text-decoration: underline;" target="_blank">{{$institutions->vedio_url}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($institutions->event_new_weblink)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Weblinks for News and Events of {{$institutions->type}}
                                            </label>
                                            <br>

                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;"  name="event_new_weblink" value="{{$institutions->event_new_weblink}}" disabled>{{$institutions->event_new_weblink}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </fieldset>
                        </div>
                    </div>
                </li>
                <!-- <li class='tab-pane '>
                    <div class="uk-card col-md-10" style="margin-left:5% !important;">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Canada Inspire provides Additional Services :-
                                            </label>
                                            <br>

                                            <textarea style="width:100%;background:white !important; box-shadow: none ;" id="field_cutjx" data-invmsg="Canada Inspire provides Additional Services :- is invalid" aria-invalid="false" spellcheck="false">
                                         We have a Team of professionals who are having expert in Application Development, Solutions and Services. 
                                         1. Is your Company looking for Website Design/Re Design or Development to give professional look
                                         and exposure for International community?
                                         2. Are you looking for development of Online Appointments and Payment Gateway or Integration 
                                        on your Website?
                                          3. Are you looking for Mobile Application Development to ease your Prospects and Customers?
                                            4. Are you interested to develop Enquiry form, Query, Survey or feedback form to improve and 
                                       enhance your services?
                                       5. Are you looking for CRM - Customer Relation Management Solutions to maintain and manage 
                                       your company marketing activities,  follow-up, and efficiency to generate good revenues
                                       for your company and always ahead with your competitors?</textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </li>
                <li class='tab-pane '>
                    <div class="uk-card col-md-10" style="margin-left:5% !important;">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Feedback of Canada Inspire
                                            </label>
                                            <br>
                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;" name="Comment" value="{{$institutions->Comment}}" disabled>{{$institutions->Comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </li> -->
            </u1>

        </div>

        <div class="col-md-3 uk-card" style="margin-top:9%;height:100% !important; box-shadow:none !important;">
            <div class="uk-card-body sc-padding-medium">
                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">

                    <div class="d-flex flex-column align-items-center text-center py-1">
                        <div class="row">
                            @if($img)
                            <img class="rounded-circle  img " style="width:200px !important;height:180px; " src="{{url('files/'.$img)}}">
                            @else
                            <img class="rounded-circle  img " style="width:200px !important;height:180px;" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                            @endif
                        </div>
                        <div class="spinner"></div>

                        @if(!$view)
                        <form method="post" id="upload_form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <label class="custom-file-upload float-center">
                                <input id="profile_img" name="profile_img" type="file" />
                                <i class="fa fa-camera" style="font-size:18px;color:#004e75"> </i>
                            </label>
                        </form>
                        @else
                        <br>
                        @endif


                        <div class="row">
                            <a class="facebook" href="{{$institutions->fb_link}}" target="_blank">
                                <div class="icon col-lg-1 col-md-1 col-1 fa-2xl">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                            </a>
                            <a class="twitter" href="{{$institutions->twitter_link}}" target="_blank">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                    <i class="fab fa-twitter"></i>
                                </div>

                            </a>
                            <a class="instagram" href="{{$institutions->insta_link}}" target="_blank">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                    <i class="fab fa-instagram"></i>
                                </div>

                            </a>
                            <a class="linkedin" href="{{$institutions->Linkedin_link}}" target="_blank">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>

                            </a>

                        </div>
                        <br>
                        @if(!$view)
                        <a href="{{route('edit.institution')}}"> <button type="button" style="width: 140px;font-size:12px" class="client-btn uk-button uk-button-primary">Edit Profile</button></a>
                        @endif
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $("textarea").each(function(textarea) {
            $(this).height($(this)[0].scrollHeight + 10);
        });
        $(".bmenu").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu1").fadeIn();
            $(".nav-linkk").removeClass('active')
            $("#amenu1").addClass('active')
        });
        $(".bmenu1").click(function() {

            $('.tab-pane').fadeOut();
            $("#menu2").fadeIn();
            $(".nav-linkk").removeClass('active')
            $("#amenu2").addClass('active')
        });
        $(".bmenu2").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu3").fadeIn();
            $(".nav-linkk").removeClass('active')
            $("#amenu3").addClass('active')
        });
        $(".bmenu3").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu4").fadeIn();
            $(".nav-linkk").removeClass('active')
            $("#amenu4").addClass('active')
        });
        $(".bmenu4").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu5").fadeIn();
            $(".nav-linkk").removeClass('active')
            $("#amenu5").addClass('active')
        });
        $(".bmenu5").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu6").fadeIn();
            $(".nav-linkk").removeClass('active')
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#profile_img').change(function() {


            console.log('first')
            var formData = new FormData($('#upload_form')[0]);
            console.log("second")
            $(".spinner").addClass("spinner-border ");
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
                    $(".spinner").removeClass("spinner-border");
                    location.reload()

                },

            });



        });


    });
</script>

@endsection