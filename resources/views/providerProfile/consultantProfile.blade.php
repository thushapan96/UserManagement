@extends('layouts.layoutss')

@section('content')
<style>
    textarea {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        overflow: hidden
    }

    th {
        text-transform: capitalize;
        color: #00000078 !important;
    }

    .img {
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

    label {
        font-weight: bold !important;
    }

    .uk-fieldset {
        min-height: 300px !important;
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

        <div class="col-md-8" style="margin-left:auto !important;margin-right:auto !important">
            <h3 class="float-center" style="text-align:center">{{$consultants->company_name}} </h3>
            <u1 class="col-md-12 justify-content-around" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;">
                <li class=" uk-active" id="amenu"><a aria-current="page">Main </a></li>
                <li class="" id="amenu2"><a>About Company </a></li>
                <li class="" id="amenu5"><a>Our Services </a></li>
                <li class="" id="amenu1"><a>Team </a></li>
                <li class="" id="amenu3"><a> Award & Recognition</a></li>
                <li class="" id="amenu4"><a>News and Events</a></li>

                <!-- <li class="" id="amenu5"><a>Canada Inspire</a></li>
                <li class="" id="amenu6"><a>Feedback</a></li> -->

            </u1>
            <u1 class="uk-switcher">
                <li id='menu' class='tab-pane '>
                    <div class='uk-card col-md-11' style="margin-left:auto !important;margin-right:auto">
                        <div class="uk-card-body sc-padding-medium">

                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <p style="text-decoration:underline;">Personal Information</p>

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
                                        <strong class="ps">RCIC number </strong>
                                    </div>

                                    <div class="col-md-7">
                                        <p class="ps">
                                            {{$consultants->registration_number }}
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
                                            @if($loop->count > 1) <i class='fas fa-caret-right'></i>
                                            @endif
                                            {{$row}}<br>
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
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <p style="text-decoration:underline;">Address</p>

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
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <!-- <p style="text-decoration:underline;">other Information</p>
                                    <div class="row custom-box">
                                        <div class="col-md-5">
                                            <strong class="ps">Specialization</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <p class="ps">
                                                @if($consultants->specialization)
                                                @foreach($consultants->specialization as $row)
                                                {{$row}}<br>
                                                @endforeach
                                                @endif
                                            </p>
                                        </div>
                                    </div> -->
                                <p style="text-decoration:underline;">Other Information</p>
                                <div class="row custom-box">
                                    <div class="col-md-5">
                                        <strong class="ps">Languages Known</strong>
                                    </div>

                                    <div class="col-md-7">
                                        <p class="ps">
                                            @if($consultants->language_known)
                                            @foreach($consultants->language_known as $row)
                                            @if($loop->count > 1) <i class='fas fa-caret-right'></i>
                                            @endif
                                            {{$row}}<br>
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
                                            @if($loop->count > 1) <i class='fas fa-caret-right'></i>
                                            @endif
                                            {{$row}}
                                            @endforeach
                                            @endif
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
                                <div class="row custom-box">
                                    <div class="col-md-5">
                                        <strong class="ps">Response Time</strong>
                                    </div>

                                    <div class="col-md-7">
                                        <p class="ps">{{$consultants->response_time}}
                                        </p>
                                    </div>
                                </div>
                                <div class="row custom-box">
                                    <div class="col-md-5">
                                        <strong class="ps">Initial Consultation Chargeable</strong>
                                    </div>

                                    <div class="col-md-7">

                                        <div class="row">
                                            &nbsp;<div class="free ">free</div>
                                            &nbsp;&nbsp;&nbsp;
                                            <div class="paid ">paid</div>

                                        </div>
                                    </div>
                                </div>


                            </fieldset><br>


                        </div>
                    </div>

                </li>
                <li id='menu2' class='tab-pane '>
                    <div class="uk-card col-md-11" style="margin-left:auto !important;margin-right:auto">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">

                                @if($consultants->history)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>{{$consultants->type}} History
                                            </label>
                                            <br>

                                            <textarea id="textarea2" class="outset" name="history" value="{{$consultants->history}}" style=" width:100%;background-color:white !important; box-shadow: none ;" disabled> {{$consultants->history}}</textarea>


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

                                            <textarea id="textarea3" style="width:100%;background-color:white !important; box-shadow: none ;height:none !important" name="brief_introduction" value="{{$consultants->brief_introduction}}" disabled>{{$consultants->brief_introduction}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
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

                                            <textarea id="textarea1" name="privacy_policy_detail" value="" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled>{{$consultants->privacy_policy_detail}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($consultants->mutiImg_about_company)
                                @foreach($consultants->mutiImg_about_company as $row )
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

                <li id='menu5' class='tab-pane '>
                    <div class="uk-card col-md-11" style="margin-left:auto !important;margin-right:auto">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <div class="row custom-box">
                                    <div class="col-md-5">
                                        <strong class="ps"> Offered Services</strong>
                                    </div>

                                    <div class="col-md-7">
                                        <p class="ps">
                                            @if($consultants->offering_service)
                                            @foreach($consultants->offering_service as $row)
                                            @if($loop->count > 1) <i class='fas fa-caret-right'></i>
                                            @endif
                                            {{$row}}<br>
                                            @endforeach
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <strong>Express Entry Cases</strong><br><br>
                                <div class="row custom-box">

                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Enrolment
                                            </label><br>
                                            <p>{{$consultants->express_entry_enrolment}}</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Success
                                            </label><br>
                                            <p>{{$consultants->express_entry_success}}</p>

                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Rejected
                                            </label><br>
                                            <p>{{$consultants->express_entry_reject}}</p>

                                        </div>
                                    </div>
                                    @if($consultants->express_entry_reject_reason)
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Reason for rejection
                                            </label><br>
                                            <p>{{$consultants->express_entry_reject_reason}}</p>

                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <hr>
                                <strong>PNP Cases</strong><br><br>
                                <div class="row custom-box">
                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Enrolment
                                            </label><br>
                                            <p>{{$consultants->pnp_enrolment}}</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Success
                                            </label><br>
                                            <p>{{$consultants->pnp_success}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Rejected
                                            </label><br>
                                            <p>{{$consultants->pnp_reject}}</p>
                                        </div>
                                    </div>
                                    @if($consultants->pnp_reject_reason)
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Reason for rejection
                                            </label><br>
                                            <p>{{$consultants->pnp_reject_reason}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <hr>
                                <strong>LMIA Cases</strong><br><br>
                                <div class="row custom-box">
                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Enrolment
                                            </label><br>
                                            <p>{{$consultants->lmia_enrolment}}</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Success
                                            </label><br>
                                            <p>{{$consultants->lmia_success}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Rejected
                                            </label><br>
                                            <p>{{$consultants->lmia_reject}}</p>
                                        </div>
                                    </div>
                                    @if($consultants->lmia_reject_reason)
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Reason for rejection
                                            </label><br>
                                            <p>{{$consultants->lmia_reject_reason}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <hr>

                                <strong>Student Visa </strong><br><br>

                                <div class="row custom-box">
                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Enrolment
                                            </label><br>
                                            <p>{{$consultants->student_visa_enrolment}}</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Success
                                            </label><br>
                                            <p>{{$consultants->student_visa_success}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Rejected
                                            </label><br>
                                            <p>{{$consultants->student_visa_reject}}</p>
                                        </div>
                                    </div>
                                    @if($consultants->student_visa_reject_reason)
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Reason for rejection
                                            </label><br>
                                            <p>{{$consultants->student_visa_reject_reason}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <hr>
                                <strong>Tourist Visa </strong><br><br>

                                <div class="row custom-box">
                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Enrolment
                                            </label><br>
                                            <p>{{$consultants->tourist_visa_enrolment}}</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Success
                                            </label><br>
                                            <p>{{$consultants->tourist_visa_success}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Rejected
                                            </label><br>
                                            <p>{{$consultants->tourist_visa_reject}}</p>
                                        </div>
                                    </div>
                                    @if($consultants->tourist_visa_reject_reason)
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Reason for rejection
                                            </label><br>
                                            <p>{{$consultants->tourist_visa_reject_reason}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <hr>
                                <strong>Family Visa</strong><br><br>

                                <div class="row custom-box">
                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Enrolment
                                            </label><br>
                                            <p>{{$consultants->family_visa_enrolment}}</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Success
                                            </label><br>
                                            <p>{{$consultants->family_visa_success}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-12">
                                        <div class="form-group">
                                            <label>Rejected
                                            </label><br>
                                            <p>{{$consultants->family_visa_reject}}</p>
                                        </div>
                                    </div>
                                    @if($consultants->family_visa_reject_reason)
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Reason for rejection
                                            </label><br>
                                            <p>{{$consultants->family_visa_reject_reason}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <hr>

                            </fieldset>
                        </div>
                    </div>

                </li>

                <li id='menu1' class='tab-pane '>
                    <div class=' col-md-11' style="margin-left:auto !important;margin-right:auto">
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

                                            <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-light-green-50">

                                                <div class="sc-padding-medium uk-text-center">
                                                    @if($row->team_img)
                                                    <img class="rounded-circle  img " style="width:200px !important;height:200px; margin: 0 auto;" src="{{url('files/'.$row->team_img)}}">
                                                    @else
                                                    <img class="rounded-circle  img " style="width:200px !important;height:200px; margin: 0 auto;" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                                    @endif


                                                </div>
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
                                                                <p class="uk-margin-remove uk-text-wrap"> {{$row->no_success}}</p>
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

                <li id='menu3' class='tab-pane '>
                    <div class="uk-card col-md-11" style="margin-left:auto !important;margin-right:auto">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                @if($consultants->Award)
                                <!-- <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>{{$consultants->type}} Awards and Certifications
                                            </label>
                                            <br>
                                            <a href="{{url('files/'.$consultants->Award)}}" target="_blank" style=" text-decoration: underline;">{{$consultants->Award}}</a>

                                        </div>
                                    </div> -->
                                <!-- </div> -->
                                @endif
                                @if($consultants->achievement)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>{{$consultants->type}} Achievements
                                            </label>
                                            <br>
                                            <textarea id="textarea4" name="achievement" value="{{$consultants->achievement}}" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled>{{$consultants->achievement}}</textarea>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($consultants->mutiImg_about_award)
                                @foreach($consultants->mutiImg_about_award as $row )
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

                                            <textarea id="textarea5" style="width:100%;background-color:white !important; box-shadow: none ;" name="event_new_weblink" value="{{$consultants->event_new_weblink}}" disabled>{{$consultants->event_new_weblink}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </fieldset>
                        </div>
                    </div>

                </li>

                <script>
                    $("textarea").each(function(index) {
                        console.log(index, $(this)[0].scrollHeight)
                        $(this).height($(this)[0].scrollHeight + 15);
                    });
                </script>
            </u1>
        </div>

        <div class="col-md-3 uk-card" style="margin-top:110px;height:100% !important; box-shadow:none !important;margin-left:auto !important;margin-right:auto !important">
            <div class="uk-card-body sc-padding-medium">
                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">

                    <div class="d-flex flex-column align-items-center text-center py-1">
                        <div class="row">
                            @if($img)
                            <img class="rounded-circle  img " style="width:200px !important;height:180px; margin: 0 auto;" src="{{url('files/'.$img)}}">
                            @else
                            <img class="rounded-circle  img " style="width:200px !important;height:180px; margin: 0 auto;" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
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
                        @if(!$view)
                        <a href="{{route('edit.consultant')}}"> <button type="button" style="width: 140px;font-size:12px" class="client-btn uk-button uk-button-primary">Edit Profile</button></a>
                        @elseif(Auth::user()->role == 'candidate')
                        @php
                        $candidateId = \App\Models\Personal::where('user_id', Auth::user()->id)->value('id');
                        $statuss = \App\Models\Enquiry::where(['candidate_id' => $candidateId])->where('provider_id', $consultants->id)->value('statuss');
                        @endphp
                        @if($statuss >= 1)
                        <button type="button" style="" id="enquiry" data-id="{{$consultants->id}}" class="client-btn uk-button uk-button-primary">Requested Enquiry</button>
                        @else
                        <button type="button" style="" id="enquiry" data-id="{{$consultants->id}}" class="client-btn uk-button uk-button-primary">New Enquiry</button>
                        @endif
                        @endif
                    </div>
                </fieldset>
            </div>
        </div>

    </div>
</section>
<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
<script>
    $(document).ready(function() {
        console.log(2)
        var consultType = "{{$consultants->type}}";
        var view = "{{$view}}"

       
        $('.page-active').removeClass('sc-page-active')
        $('.page-Profile').addClass('sc-page-active')

        $("#enquiry").click(function() {
            if (consultType == 'RCIC Consultant') {
                var currentEnquiryConsultant = "{{$currentEnquiryConsultant}}";
                var MembershipCandidateEnquiriesConsultant = "{{$MembershipCandidateEnquiriesRCICConsultant}}";

            } else {
                var currentEnquiryConsultant = "{{$currentEnquiryImmigration}}";
                var MembershipCandidateEnquiriesConsultant = "{{$MembershipCandidateEnquiriesImmigration}}";

            }
            var text = $(this).text()
            if (text == 'New Enquiry') {
                if (currentEnquiryConsultant < MembershipCandidateEnquiriesConsultant) {
                    if (confirm("Are You Sure Want To Select Service ?") == true) {
                        var id = $(this).attr('data-id');
                        var text = $(this).text()

                        var status = 'Request';
                        var statuss = 1;

                        $.ajax({

                            method: "post",
                            url: "/candidate/request",
                            dataType: 'json',

                            data: {
                                '_token': '{{ csrf_token() }}',
                                id: id,
                                status: status,
                                statuss: statuss,
                                type: 'provider'
                            },
                            success: function(result) {
                                console.log(result);
                                location.reload();
                            }

                        });

                    }
                } else {
                    alert('You need to extend package for extend your Enquires')
                }
            } else {
                alert("You Can Not Cancel Request")
            }
        });


        var chargeable = "{{$consultants->initial_chargeable_type}}"

        if (chargeable == 'free') {
            $('.free').css('text-decoration', 'underline')
            $('.free').css('text-decoration-color', 'green')
        } else {
            $('.paid').css('text-decoration', 'underline')
            $('.paid').css('text-decoration-color', 'green')
        }

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