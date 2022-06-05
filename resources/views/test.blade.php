<section>

    <div class="row">

        <div class="col-md-10">
            <h3 class="float-center" style="text-align:center">{{$institutions->company_name}} Company</h3>
            <u1 class="col-md-11" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:2% !important;">
                <li class=" uk-active" id="amenu"><a style="cursor:pointer;padding: 0.5rem 0.5rem;" aria-current="page">Main </a></li>
                <li class="" id="amenu1"><a style="cursor:pointer;padding: 0.5rem  0.5rem;">Courses</a></li>
                <li class="" id="amenu2"><a style="cursor:pointer;padding: 0.5rem  0.5rem;">About Company </a></li>
                <li class="" id="amenu3"><a style="cursor:pointer;padding: 0.5rem  0.5rem;"> Award & Certification</a></li>
                <li class="" id="amenu4"><a style="cursor:pointer;padding: 0.5rem  0.5rem;">News and Events</a></li>
                <li class="" id="amenu5"><a style="cursor:pointer;padding: 0.5rem 0.5rem;">Canada Inspire</a></li>
                <li class="" id="amenu6"><a style="cursor:pointer;padding: 0.5rem 0.5rem;">Feedback</a></li>

            </u1>
            <u1 class="uk-switcher">
                <li id='menu' class='tab-pane '>
                    <div class='uk-card col-md-10 ' style="margin-left:5% !important;">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <h6 style="text-decoration:underline;">personal Information</h6>
                                <table class="table table-hover">
                                    <tr>
                                        <th>Name</th>
                                        <td>{{$institutions->name}}</td>
                                        <th>Street</th>
                                        <td>{{$institutions->streat}}
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td> {{$institutions->city}}</td>
                                        <th>Province</th>
                                        <td>{{$institutions->region}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <td> {{$institutions->country}}</td>
                                        <th>Postal Code</th>
                                        <td> {{$institutions->postal_code}}</td>
                                    </tr>
                                    <tr>
                                        <th>Contact Number</th>
                                        <td>{{$institutions->phone}}</td>
                                        <th>Languages Known</th>
                                        <td> @if($institutions->language_known)
                                            @foreach($institutions->language_known as $row)
                                            {{$row}}
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Dean Email ID</th>
                                        <td>{{$institutions->dean_email}}
                                        </td>
                                        <th>Correspondence Email</th>
                                        <td>{{$institutions->email}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>URL Website Address</th>
                                        <td> {{$institutions->website_address}}</td>
                                        <th>Admission Cell - Contact Person</th>
                                        <td>{{$institutions->admission_phone}}</td>
                                    </tr>
                                    <tr>
                                        <th>Registered Office - Location</th>
                                        <td>{{$institutions->registrar_office_area}}
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </div>
                    </div>
                </li>
                <li id='menu1' class='tab-pane '>
                    <div class='uk-card col-md-10 ' style="margin-left:5% !important;">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Type of Courses</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">
                                            @if($institutions->course_type)
                                            @foreach($institutions->course_type as $row)
                                            {{$row}},
                                            @endforeach
                                            @else
                                            <br>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-6">
                                        <strong class="ps">Intake</strong>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="ps">
                                            @if($institutions->intake)
                                            @foreach($institutions->intake as $row)
                                            {{$row}},
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
                                            {{$row}},
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
                                            {{$row}},
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
                                            {{$row}},
                                            @endforeach
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
                                            {{$row}},
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
                                            {{$row}},
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
                                            {{$row}},
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
                                        <p class="ps"> @if($institutions->fee_structure_website){{$institutions->fee_structure_website}}@else
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
                        </div>
                    </div>
                </li>
                <li id='menu2' class='tab-pane '>
                    <div class="uk-card col-md-10" style="margin-left:5% !important;">
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

                                            <textarea name="privacy_policy_detail" rows="10" value="{{$institutions->privacy_policy_detail}}" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled>{{$institutions->privacy_policy_detail}}</textarea>
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

                                            <textarea class="outset" name="history" rows="12" value="{{$institutions->history}}" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled> {{$institutions->history}}</textarea>


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

                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;" rows="12" name="brief_introduction" value="{{$institutions->brief_introduction}}" disabled>{{$institutions->brief_introduction}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </fieldset>
                        </div>
                    </div>
                </li>
                <li id='menu3' class='tab-pane '>
                    <div class="uk-card col-md-10" style="margin-left:5% !important;">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                @if($institutions->Award)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>{{$institutions->type}} Awards and Certifications
                                            </label>
                                            <br>
                                            <a href="{{url('files/'.$institutions->Award)}}" target="_blank" style=" text-decoration: underline;">{{$institutions->Award}}</a>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($institutions->achievement)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>{{$institutions->type}} Achievements
                                            </label>
                                            <br>

                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;" rows="12" name="achievement" value="{{$institutions->achievement}}" disabled>{{$institutions->achievement}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </fieldset>
                        </div>
                    </div>
                </li>
                <li id='menu4' class='tab-pane'>
                    <div class="uk-card col-md-10" style="margin-left:5% !important;">
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

                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;" rows="9" name="event_new_weblink" value="{{$institutions->event_new_weblink}}" disabled>{{$institutions->event_new_weblink}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
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
                                            <label>Canada Inspire provides Additional Services :-
                                            </label>
                                            <br>

                                            <textarea style="width:100%;background:white !important; box-shadow: none ;" rows="12" id="field_cutjx" data-invmsg="Canada Inspire provides Additional Services :- is invalid" aria-invalid="false" spellcheck="false">
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
                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;" rows="9" name="Comment" value="{{$institutions->Comment}}" disabled>{{$institutions->Comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </li>
            </u1>

        </div>

        <div class="col-md-2 uk-card" style="margin-top:9%;height:300px !important; box-shadow:none !important">
            <div class="uk-card-body sc-padding-medium">
                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">

                    <div class="d-flex flex-column align-items-center text-center py-1">
                        <div class="row">
                            @if($img)
                            <img class="rounded-circle  img " style="width:100px !important;height:100px; margin: 0 auto;" src="{{url('files/'.$img)}}">
                            @else
                            <img class="rounded-circle  img " style="width:100px !important;height:100px; margin: 0 auto;" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
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
                        @if($view)

                        @else

                        <a href="{{route('edit.consultant')}}"> <button type="button" style="width: 140px;font-size:12px" class="client-btn uk-button uk-button-primary">Edit Profile</button></a>

                        @endif
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</section>