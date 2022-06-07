@extends('layouts.layoutss')

@section('content')
<style>
    textarea {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        padding: 20px
    }

    th {
        text-transform: capitalize;
        color: #00000078 !important;
    }

    .img {
        border: 1px solid #ddd;
        /* border-radius: 4px !important; */
        padding: 5px !important;
        opacity: 1;
    }

    .custom-file-upload {
        display: inline-block;
        padding: 2px 2px;
        cursor: pointer;
    }

    .custom-file-upload input[type="file"] {
        display: none;
    }

    th {
        color: #00000078 !important;
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

        <div class="col-md-10">
            <h3 class="float-center" style="text-align:center">{{$consultants->company_name}} Company</h3>
            <u1 class="col-md-10" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:auto !important;margin-right:auto">
                <li class=" uk-active" id="amenu"><a style="cursor:pointer;padding: 0.5rem 1rem;" aria-current="page">Main </a></li>
                <li class="" id="amenu1"><a style="cursor:pointer;padding: 0.5rem  1rem;">Team list</a></li>
                <li class="" id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1rem;">About Company </a></li>
                <li class="" id="amenu3"><a style="cursor:pointer;padding: 0.5rem  1rem;"> Award & Certification</a></li>
                <li class="" id="amenu4"><a style="cursor:pointer;padding: 0.5rem  1rem;">News and Events</a></li>
                <!-- <li class="" id="amenu5"><a style="cursor:pointer;padding: 0.5rem 1rem;">Canada Inspire</a></li>
                <li class="" id="amenu6"><a style="cursor:pointer;padding: 0.5rem 1rem;">Feedback</a></li> -->

            </u1>
            <u1 class="uk-switcher">
                <li id='menu' class='tab-pane '>
                    <div class='uk-card col-md-10 ' style="margin-left:5% !important;">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">

                                <fieldset class="uk-fieldset md-bg-grey-300 sc-padding">
                                    <h6 style="text-decoration:underline;">Personal Information</h6>

                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Full Name</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">
                                                {{$consultants->first_name}} {{$consultants->middle_name}}{{$consultants->last_name}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Company Name</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">
                                                {{$consultants->company_name}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Languages Known </strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">
                                                @if($consultants->language_known)
                                                @foreach($consultants->language_known as $row)
                                                {{$row}}
                                                @endforeach
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Contact Number</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps"> {{$consultants->phone}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Correspondence Email</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps"> {{$consultants->email}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">URL Website Address</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$consultants->website_address}}
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
                                                {{$consultants->postal_code}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Street</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">
                                                {{$consultants->streat}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">City</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$consultants->city}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">province</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">
                                                {{$consultants->region}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Country</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$consultants->country}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Registered Office - Locations</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$consultants->registrar_office_area}}
                                            </p>
                                        </div>
                                    </div>
                                </fieldset><br>
                                <fieldset class="uk-fieldset md-bg-grey-300 sc-padding">
                                    <h6 style="text-decoration:underline;">other Information</h6>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Specialization</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">
                                                @if($consultants->specialization)
                                                @foreach($consultants->specialization as $row)
                                                {{$row}}
                                                @endforeach
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Service Offered</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">
                                                @if($consultants->offering_service)
                                                @foreach($consultants->offering_service as $row)
                                                {{$row}}
                                                @endforeach
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Year of Establishment</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$consultants->establishment_year}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Offering Services Since</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">
                                                {{$consultants->offering_year}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Communication prefer mode</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">
                                                @if($consultants->communication_mode)
                                                @foreach($consultants->communication_mode as $row)
                                                {{$row}}
                                                @endforeach
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Other Services</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$consultants->initial_chargeable_type}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Total Cases Taken</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$consultants->total_cases_taken}}
                                            </p>
                                        </div>
                                    </div>
                                </fieldset><br>
                                <fieldset class="uk-fieldset md-bg-grey-300 sc-padding">
                                    <h6 style="text-decoration:underline;">Success Rate</h6>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Express Entry Success</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$consultants->express_entry_success}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">PNP Success</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$consultants->pnp_success}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">LMIA Success</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$consultants->lmia_success}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Others Success</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$consultants->other_success}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Student Visa Success</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps"> {{$consultants->student_visa_success}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Tourist Visa Success</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$consultants->tourist_visa_success}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Family Visa Success</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$consultants->family_visa_success}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Other Visa Success</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$consultants->other_visa_success}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Communication Success</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">{{$consultants->communication_mode_success}}
                                            </p>
                                        </div>
                                    </div>
                                </fieldset>
                            </fieldset>
                        </div>
                    </div>
                </li>
                <li id='menu1' class='tab-pane '>
                    <div class=' col-md-10 ' style="margin-left:5% !important;">
                        <div class="">
                            <div class="form-group col-md-10">

                                @if($consultants->team_info)
                                <p class="ps" style="margin-left:10%">
                                    {{$consultants->team_info}}
                                </p>
                                @endif
                            </div>
                            @if($teams)


                            @foreach($teams as $key=>$row )

                            <div class="col-md-10" style="margin-left: auto;margin-right:auto;">
                                <div class="uk-card uk-card-hover" style="height:248px">
                                    <div class="uk-card-body sc-padding-remove">
                                        <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                            <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative" style="height:248px;overflow:none">
                                                @if($row->team_img)
                                                <img class=" mt-1 img float-center " style="width:100%;height:250px;  " src="{{url('files/'.$row->team_img)}}">
                                                @else
                                                <img class=" mt-1 img float-center " style="width:100%;height:250px " src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                                @endif
                                            </div>
                                            <div class="uk-width-2-3@l">
                                                <div class="sc-padding-medium">
                                                    <ul class="uk-list uk-list-divider">
                                                        <li class="sc-list-group">
                                                            <strong class="sc-list-addon" style="width:130px">Name</strong>
                                                            <div class="sc-list-body">
                                                                <p class="uk-margin-remove uk-text-wrap">{{$row->member}}</p>
                                                            </div>
                                                        </li>
                                                        <li class="sc-list-group">
                                                            <strong class="sc-list-addon" style="width:130px">expert area</strong>
                                                            <div class="sc-list-body">
                                                                <p class="uk-margin-remove ">{{$row->expertise_area}}</p>
                                                            </div>
                                                        </li>
                                                        <li class="sc-list-group">
                                                            <strong class="sc-list-addon" style="width:130px">year of experience</strong>
                                                            <div class="sc-list-body">
                                                                <p class="uk-margin-remove "> {{$row->experience_year}}</p>
                                                            </div>
                                                        </li>
                                                        <li class="sc-list-group">
                                                            <strong class="sc-list-addon" style="width:130px">no of success cases</strong>
                                                            <div class="sc-list-body">
                                                                <p class="uk-margin-remove uk-text-wrap"> {{$row->team_number_success_cases}}</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            @endforeach
                        </div>

                        @endif
                    </div>

                </li>
                <li id='menu2' class='tab-pane '>
                    <div class="uk-card col-md-10" style="margin-left:5% !important;">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                @if($consultants->privacy_policy_document)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Privacy document of {{$consultants->type}}
                                            </label>
                                            <br>

                                            <a href="{{url('files/'.$consultants->privacy_policy_document)}}" target="_blank" style=" text-decoration: underline;width:100% !important">{{$consultants->privacy_policy_document}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($consultants->privacy_policy_detail)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label style="width:400px">Terms of Privacy of {{$consultants->type}}</label>

                                            <textarea name="privacy_policy_detail" rows="10" value="{{$consultants->privacy_policy_detail}}" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled>{{$consultants->privacy_policy_detail}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($consultants->history)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>{{$consultants->type}} History
                                            </label>
                                            <br>

                                            <textarea class="outset" name="history" rows="12" value="{{$consultants->history}}" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled> {{$consultants->history}}</textarea>


                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($consultants->brief_introduction)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label> Brief Introduction of {{$consultants->type}}
                                            </label>
                                            <br>

                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;" rows="12" name="brief_introduction" value="{{$consultants->brief_introduction}}" disabled>{{$consultants->brief_introduction}}</textarea>
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
                                @if($consultants->Award)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>{{$consultants->type}} Awards and Certifications
                                            </label>
                                            <br>
                                            <a href="{{url('files/'.$consultants->Award)}}" target="_blank" style=" text-decoration: underline;">{{$consultants->Award}}</a>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($consultants->achievement)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>{{$consultants->type}} Achievements
                                            </label>
                                            <br>

                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;" rows="12" name="achievement" value="{{$consultants->achievement}}" disabled>{{$consultants->achievement}}</textarea>
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
                                @if($consultants->vedio_url)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Video URL Link of {{$consultants->type}}
                                            </label><br>
                                            <a href="{{url($consultants->vedio_url)}}" style="text-decoration: underline;" target="_blank">{{$consultants->vedio_url}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($consultants->event_new_weblink)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Weblinks for News and Events of {{$consultants->type}}
                                            </label>
                                            <br>

                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;" rows="9" name="event_new_weblink" value="{{$consultants->event_new_weblink}}" disabled>{{$consultants->event_new_weblink}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </fieldset>
                        </div>
                    </div>
                </li>
                <!-- <li class='tab-pane ' id="menu5">
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
                             have a Team of professionals who are having expert in Application Development, Solutions and Services. 
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
                <li class='tab-pane ' id="menu6">
                    <div class="uk-card col-md-10" style="margin-left:5% !important;">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Feedback of Canada Inspire
                                            </label>
                                            <br>
                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;" rows="9" name="Comment" value="{{$consultants->Comment}}" disabled>{{$consultants->Comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </li> -->
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
                            <a class="facebook" href="{{$consultants->fb_link}}" target="_blank">
                                <div class="icon col-lg-1 col-md-1 col-1 fa-2xl">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                            </a>
                            <a class="twitter" href="{{$consultants->twitter_link}}" target="_blank">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                    <i class="fab fa-twitter"></i>
                                </div>

                            </a>
                            <a class="instagram" href="{{$consultants->insta_link}}" target="_blank">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                    <i class="fab fa-instagram"></i>
                                </div>

                            </a>
                            <a class="linkedin" href="{{$consultants->Linkedin_link}}" target="_blank">
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


<script>
    $(document).ready(function() {

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