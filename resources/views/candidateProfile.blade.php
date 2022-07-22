@extends('layouts.layoutss')

@section('content')
<style>
    .custom-file-upload {
        display: inline-block;
        padding: 2px 2px;
        cursor: pointer;
    }

    .custom-file-upload input[type="file"] {
        display: none;
    }

    th {
        text-transform: capitalize;
        color: #00000078 !important;
    }

    .py-5 {
        padding-top: 7rem !important;
    }

    /* img {
        border: 2px solid #555 !important;
    } */
</style>

<section>

    <div class="row">

        <div class="col-md-8">
            <h5 style="text-align:center;color:#3f6791">Profile</h5>
            <u1 class="col-md-10" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:auto !important;margin-right:auto">
                <li class="nav-linkk" id="amenu"><a style="cursor:pointer;padding: .5rem 3rem;" aria-current="page">personal</a></li>
                <li class="nav-linkk" id="amenu1"><a style="cursor:pointer;padding: .5rem 3rem;">academic</a></li>
                <li class="nav-linkk" id="amenu2"><a style="cursor:pointer;padding: .5rem 3rem;">work</a></li>
                <li class="nav-linkk" id="amenu3"><a style="cursor:pointer;padding: .5rem 3rem;">sponsor</a></li>
            </u1>
            <u1 class="uk-switcher ">
                <li id='menu' class='tab-pane '>
                    @if($personal)
                    <div class='uk-card col-md-10' style="margin-left:auto !important;margin-right:auto">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <h6 class="labels" style="text-decoration: underline;">Personal Information</h6>
                                <br>
                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> Name </strong>
                                    </div>

                                    <div class="col-md-7">
                                        <label class="labels">{{$personal->first_name}}</label>
                                        <label class="labels">{{$personal->middle_name}}</label>
                                        <label class="labels">{{$personal->last_name}}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> mobile</strong>
                                    </div>

                                    <div class="col-md-7">
                                        <label class="labels">{{$personal->mobile}}</label>
                                        <label class="labels">{{$personal->phone}}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> email</strong>
                                    </div>

                                    <div class="col-md-7">
                                        <label class="labels">{{$personal->email}}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> birth_date</strong>
                                    </div>

                                    <div class="col-md-7">
                                        <label class="labels">{{$personal->birth_date}}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> gender</strong>
                                    </div>

                                    <div class="col-md-7">
                                        <label class="labels">{{$personal->gender}}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> possible start date</strong>
                                    </div>

                                    <div class="col-md-7">
                                        <label class="labels">{{$personal->possible_start_date}}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> immigration purpose </strong>
                                    </div>

                                    <div class="col-md-7">
                                        <label class="labels">{{$personal->immigration_purpose}}</label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> is vaccinate</strong>
                                    </div>

                                    <div class="col-md-7">
                                        <label class="labels">{{$personal->is_vaccinate}}</label>
                                    </div>
                                </div>
                            </fieldset>
                            @if($personal->residential_street || $personal->residential_street2 || $personal->residential_city || $personal->residential_country || $personal->residential_region || $personal->residential_pincode)
                            <br>
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">

                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> Residential Address </strong>
                                    </div>

                                    <div class="col-md-7">
                                        @if($personal->residential_street)
                                        <strong> Street 1:</strong> <label class="labels">{{$personal->residential_street}}</label><br>
                                        @endif
                                        @if($personal->residential_street2)
                                        <strong> Street 2 :</strong> <label class="labels">{{$personal->residential_street2}}</label><br>
                                        @endif
                                        @if($personal->residential_city)
                                        <strong> city     :</strong><label class="labels">{{$personal->residential_city}}</label><br>
                                        @endif
                                        @if($personal->residential_region)
                                        <strong> Region :</strong><label class="labels">{{$personal->residential_region}}</label><br>
                                        @endif
                                        @if($personal->residential_country)
                                        <strong> Country :</strong> <label class="labels">{{$personal->residential_country}}</label><br>
                                        @endif
                                        @if($personal->residential_pincode)
                                        <strong> Pincode :</strong><label class="labels">{{$personal->residential_pincode}}</label><br>
                                        @endif
                                    </div>
                                </div>
                            </fieldset>
                            @endif
                            @if($personal->corosponding_street || $personal->corosponding_street2 || $personal->corosponding_city || $personal->corosponding_country || $personal->corosponding_region || $personal->corosponding_pincode)
                            <br>
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">

                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> corosponding Address </strong>
                                    </div>

                                    <div class="col-md-7">
                                        @if($personal->corosponding_street)
                                        <strong>Street 1:</strong><label class="labels">{{$personal->corosponding_street}}</label><br>
                                        @endif
                                        @if($personal->corosponding_street2)
                                        <strong>Street 2:</strong><label class="labels">{{$personal->corosponding_street2}}</label><br>
                                        @endif
                                        @if($personal->corosponding_city)
                                        <strong>City    :</strong><label class="labels">{{$personal->corosponding_city}}</label><br>
                                        @endif
                                        @if($personal->corosponding_region)
                                        <strong>Region :</strong><label class="labels">{{$personal->corosponding_region}}</label><br>
                                        @endif
                                        @if($personal->corosponding_pincode)
                                        <strong>Country:</strong><label class="labels">{{$personal->corosponding_country}}</label><br>
                                        @endif
                                        @if($personal->corosponding_pincode)
                                        <strong>Pincode:</strong><label class="labels">{{$personal->corosponding_pincode}}</label><br>
                                        @endif


                                    </div>
                                </div>
                            </fieldset>
                            @endif
                        </div>
                    </div>
                    @endif
                </li>
                <li id='menu1' class='tab-pane'>
                    @if($Academy)
                    <div class='uk-card col-md-10' style="margin-left:auto !important;margin-right:auto">
                        <div class="uk-card-body sc-padding-medium">

                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">

                                <h6 class="labels" style="text-decoration: underline;">Language Qualification</h6><br>
                                @if($Academy->language_proficiency)
                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> Language Proficiency </strong>
                                    </div>
                                    <div class="col-md-1">
                                        <strong class="labels"> :</strong>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labels">{{$Academy->language_proficiency}}</label>
                                    </div>
                                </div>
                                @endif
                                @if($Academy->language_level)
                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> Language Level </strong>
                                    </div>
                                    <div class="col-md-1">
                                        <strong class="labels"> :</strong>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labels">{{$Academy->language_level}}</label>
                                    </div>
                                </div>
                                @endif
                                @if($Academy->language_certified_by)
                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> Certified By</strong>
                                    </div>
                                    <div class="col-md-1">
                                        <strong class="labels"> :</strong>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labels">{{$Academy->language_certified_by}}</label><br>
                                    </div>
                                </div>
                                @endif
                                @if($Academy->applicant_test_name)
                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> Applicant Test Scores </strong>
                                    </div>
                                    <div class="col-md-1">
                                        <strong class="labels"> :</strong>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labels">{{$Academy->applicant_test_name}}</label><br>

                                    </div>
                                </div>
                                @endif
                                @if($Academy->test_valid_upto)
                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> Valid Upto</strong>
                                    </div>
                                    <div class="col-md-1">
                                        <strong class="labels"> :</strong>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labels">{{$Academy->test_valid_upto}}</label><br>
                                    </div>
                                </div>
                                @endif
                                @if($Academy->language_attachment)
                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels"> Language Certified Attachment</strong>
                                    </div>
                                    <div class="col-md-1">
                                        <strong class="labels"> :</strong>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{url('files/'.$Academy->language_attachment)}}" target="_blank" style=" text-decoration: underline;">{{$Academy->language_attachment}}</a>
                                    </div>
                                </div>
                                @endif
                                @if($Academy->test_attachment)
                                <div class="row ">
                                    <div class="col-md-5">
                                        <strong class="labels">Applicant Test Scores Attachment</strong>
                                    </div>
                                    <div class="col-md-1">
                                        <strong class="labels"> :</strong>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{url('files/'.$Academy->test_attachment)}}" target="_blank" style=" text-decoration: underline;">{{$Academy->test_attachment}}</a>
                                    </div>
                                </div>
                                @endif
                            </fieldset>
                            <br>
                            @foreach($qualification as $row)
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                @if($row->type == 'school')
                                <h6 class="labels" style="text-decoration: underline;">School </h6><br>
                                @elseif($row->type == 'college')
                                <h6 class="labels" style="text-decoration: underline;">College </h6><br>
                                @elseif($row->type == 'PG')
                                <h6 class="labels" style="text-decoration: underline;">Post Graduation </h6><br>
                                @else
                                <h6 class="labels" style="text-decoration: underline;">Other Qualification </h6><br>
                                @endif
                                <div class="row ">
                                    <div class="col-md-4">
                                        <strong class="labels">Name </strong>
                                    </div>
                                    <div class="col-md-1">
                                        <strong class="labels"> :</strong>
                                    </div>
                                    <div class="col-md-7">
                                        <label class="labels">{{$row->name}}</label><br>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <strong class="labels">Address</strong>
                                    </div>
                                    <div class="col-md-1">
                                        <strong class="labels"> :</strong>
                                    </div>
                                    <div class="col-md-7">
                                        <label class="labels">{{$row->Address}}</label><br>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <strong class="labels">Year Completion</strong>
                                    </div>
                                    <div class="col-md-1">
                                        <strong class="labels"> :</strong>
                                    </div>
                                    <div class="col-md-7">
                                        <label class="labels">{{$row->Year_completion}}</label><br>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <strong class="labels">Distant</strong>
                                    </div>
                                    <div class="col-md-1">
                                        <strong class="labels"> :</strong>
                                    </div>
                                    <div class="col-md-7">
                                        <label class="labels">{{$row->Distant}}</label><br>
                                    </div>
                                </div>
                                @if($row->attachment)
                                <div class="row ">
                                    <div class="col-md-4">
                                        <strong class="labels"> Attachment</strong>
                                    </div>
                                    <div class="col-md-1">
                                        <strong class="labels"> :</strong>
                                    </div>
                                    <div class="col-md-7">
                                        <a href="{{url('files/'.$row->attachment)}}" target="_blank" style=" text-decoration: underline;">{{$row->attachment}}</a>
                                    </div>
                                </div>
                                @endif
                            </fieldset>
                            @if(!$loop->last)
                            <br>
                            @endif

                            @endforeach
                        </div>
                    </div>
                    @endif
                </li>
                <li id='menu2' class='tab-pane '>
                    @if($Work)
                    <div class=' card col-md-10' style="margin-left:auto !important;margin-right:auto">
                        <div class="uk-card-body sc-padding-medium">

                            @foreach($Work as $key =>$row)
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <div class="card col-md-12" style="background-color: #f5f5f5!important; box-shadow: none ;">
                                    <h6 class="labels" style="text-decoration: underline;">Place work {{$key + 1 }}</h6><br>
                                    <div class="row ">
                                        <div class="col-md-5">
                                            <strong class="labels">Designation</strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="labels"> {{$row->designation}}</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-5">
                                            <strong class="labels">No. of Years Worked</strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="labels">{{$row->Year_completion}}</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-5">
                                            <strong class="labels">Country</strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="labels">{{$row->country}}</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-5">
                                            <strong class="labels">Work Profile</strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="labels">{{$row->work_profile_letter}}</label>
                                        </div>
                                    </div>
                                    @if($row->attach_experience_certificate)
                                    <div class="row ">
                                        <div class="col-md-5">
                                            <strong class="labels"> Attach Experience Certificate</strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{url('files/'.$row->attach_experience_certificate)}}" target="_blank" style=" text-decoration: underline;">{{$row->attach_experience_certificate}}</a>
                                        </div>
                                    </div>
                                    @endif
                                    @if($row->attach_salary_slip)
                                    <div class="row ">
                                        <div class="col-md-5">
                                            <strong class="labels">Attach Salary Slip</strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{url('files/'.$row->attach_salary_slip)}}" target="_blank" style=" text-decoration: underline;">{{$row->attach_salary_slip}}</a>
                                        </div>
                                    </div>
                                    @endif
                                    @if($row->attach_offer_letter)
                                    <div class="row ">
                                        <div class="col-md-5">
                                            <strong class="labels"> Attach Offer/Recommendation Letter</strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{url('files/'.$row->attach_offer_letter)}}" target="_blank" style=" text-decoration: underline;">{{$row->attach_offer_letter}}</a>
                                        </div>
                                    </div>
                                    @endif

                                </div>
                            </fieldset>
                            @if(!$loop->last)
                            <br>
                            @endif

                            @endforeach

                        </div>
                    </div>
                    @endif
                </li>
                <li id='menu3' class='tab-pane'>
                    @if($Sponsor)
                    <div class='card col-md-10' style="margin-left:auto !important;margin-right:auto">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <div class=" col-md-12" style="background-color: #f5f5f5!important; box-shadow: none ;">


                                    <h6 class="labels" style="text-decoration: underline;">Sponsor Details</h6><br>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <strong class="labels">Name </strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>

                                        <div class="col-md-7">
                                            <label class="labels">{{$Sponsor->fisrt_name}}&nbsp;&nbsp;{{$Sponsor->middle_name}}&nbsp;&nbsp;{{$Sponsor->last_name}}</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <strong class="labels">Sponsor Status</strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-7">
                                            <label class="labels">{{$Sponsor->sponsor_status}}</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <strong class="labels">Relationship with Child </strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-7">
                                            <label class="labels">{{$Sponsor->sponsor_relation}}</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <strong class="labels">Mobile Number </strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-7">
                                            <label class="labels">{{$Sponsor->sponsor_mobile}}</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <strong class="labels">Email </strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-7">
                                            <label class="labels">{{$Sponsor->sponsor_email}}</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <strong class="labels">Address</strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-7">
                                            @if($Sponsor->sponsor_street)
                                            <strong> Street 1 :</strong><label class="labels">{{$Sponsor->sponsor_street}}</label><br>
                                            @endif
                                            @if($Sponsor->sponsor_street2)
                                            <strong> Street 2 :</strong><label class="labels">{{$Sponsor->sponsor_street2}}</label><br>
                                            @endif
                                            @if($Sponsor->sponsor_city)
                                            <strong> City     :</strong><label class="labels">{{$Sponsor->sponsor_city}}</label><br>
                                            @endif
                                            @if($Sponsor->sponsor_region)
                                            <strong> Region :</strong><label class="labels">{{$Sponsor->sponsor_region}}</label><br>
                                            @endif
                                            @if($Sponsor->sponsor_country)
                                            <strong> Country :</strong><label class="labels">{{$Sponsor->sponsor_country}}</label><br>
                                            @endif
                                            @if($Sponsor->sponsor_pincode)
                                            <strong> Pincode :</strong><label class="labels">{{$Sponsor->sponsor_pincode}}</label><br>
                                            @endif

                                        </div>
                                    </div>

                                </div>
                            </fieldset>
                            <br>
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <div class=" col-md-12" style="background-color: #f5f5f5!important; box-shadow: none ;">
                                    <h6 class="labels" style="text-decoration: underline;">Guadian Details</h6><br>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <strong class="labels">Relationship with Child</strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-7">
                                            <label class="labels">{{$Sponsor->guardian_relation}}</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <strong class="labels">Mobile Number </strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-7">
                                            <label class="labels">{{$Sponsor->guardian_mobile}}</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <strong class="labels">Email</strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-7">
                                            <label class="labels">{{$Sponsor->guardian_email }}</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <strong class="labels">Address</strong>
                                        </div>
                                        <div class="col-md-1">
                                            <strong class="labels"> :</strong>
                                        </div>
                                        <div class="col-md-7">
                                            @if($Sponsor->guardian_street)
                                            <strong> Street 1 :</strong><label class="labels">{{$Sponsor->guardian_street}}</label><br>
                                            @endif
                                            @if($Sponsor->guardian_street2)
                                            <strong> Street 2 :</strong><label class="labels">{{$Sponsor->guardian_street2}}</label><br>
                                            @endif
                                            @if($Sponsor->guardian_city)
                                            <strong> City     :</strong><label class="labels">{{$Sponsor->guardian_city}}</label><br>
                                            @endif
                                            @if($Sponsor->guardian_region)
                                            <strong> Region :</strong><label class="labels">{{$Sponsor->guardian_region}}</label><br>
                                            @endif
                                           
                                            @if($Sponsor->guardian_country)
                                            <strong> Country :</strong><label class="labels">{{$Sponsor->guardian_country}}</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>



                    </div>
                    @endif
                </li>
                <script>
                    $("textarea").each(function(index) {
                        console.log(index, $(this)[0].scrollHeight)
                        $(this).height($(this)[0].scrollHeight);
                    });
                </script>
            </u1>
        </div>

        <div class="col-md-3 uk-card" style="margin-top:9%;height:100% !important; box-shadow:none !important;">
            <div class="uk-card-body sc-padding-medium">
                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                    <div class="d-flex flex-column align-items-center text-center py-1">
                        <div class="row">
                            @if($image)
                            <img class="rounded-circle  img " style="width:200px !important;height:180px; margin: 0 auto;" src="{{url('files/'.$image)}}">
                            @else
                            <img class="rounded-circle  img " style="width:200px !important;height:180px; margin: 0 auto;" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                            @endif
                        </div>
                        <div class="spinner" style=" margin: 0 auto;"></div>

                        <form method="post" id="upload_form" enctype="multipart/form-data">
                            {{ csrf_field() }}


                            <label class="custom-file-upload float-center">
                                <input id="profile_img" name="profile_img" type="file" />
                                <i class="fa fa-camera" style="font-size:18px;color:#004e75; margin: 0 auto;"> </i>
                            </label>


                        </form>

                        <div class="row">
                            <a class="facebook" href="{{$personal->fb_link}}" target="_blank">
                                <div class="icon col-lg-1 col-md-1 col-1 fa-2xl">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                            </a>
                            <a class="twitter" href="{{$personal->twitter_link}}" target="_blank">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                    <i class="fab fa-twitter"></i>
                                </div>

                            </a>
                            <a class="instagram" href="{{$personal->insta_link}}" target="_blank">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                    <i class="fab fa-instagram"></i>
                                </div>

                            </a>
                            <a class="linkedin" href="{{$personal->Linkedin_link}}" target="_blank">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>

                            </a>

                        </div>
                        <br>


                        <a class="editlink " data-id="{{$personal->user_id}}" href="{{route('personalEdit', ['id' => $personal->user_id])}}"><button class="btn uk-button uk-button-primary profile-button editbtn" type="button" style="width: 140px;font-size:12px">Edit Profile </button></a>

                    </div>
                </fieldset>
            </div>
        </div>

    </div>

</section>

<script>
    $(document).ready(function() {

        console.log('hiii')
        $('.page-active').removeClass('sc-page-active')
        $('.page-Profile').addClass('sc-page-active')
        $("#amenu").click(function() {
            // $('.editbtn').html('Edit Profile')
            var id = $('.editlink').attr('data-id')
            var url = "{{route('personalEdit', '')}}" + "/" + id;
            $('.editlink').attr('href', url)
        });
        $("#amenu1").click(function() {
            // $('.editbtn').html('Edit Academic ')
            var id = $('.editlink').attr('data-id')
            var url = "{{route('academyEdit', '')}}" + "/" + id;
            $('.editlink').attr('href', url)
        });
        $("#amenu2").click(function() {
            // $('.editbtn').html('Edit Work ')
            var id = $('.editlink').attr('data-id')
            var url = "{{route('workEdit', '')}}" + "/" + id;
            $('.editlink').attr('href', url)
        });
        $("#amenu3").click(function() {
            // $('.editbtn').html('Edit Sponsor ')
            var id = $('.editlink').attr('data-id')
            var url = "{{route('sponsorEdit', '')}}" + "/" + id;
            $('.editlink').attr('href', url)
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
                    location.reload()
                    $(".spinner").removeClass("spinner-border");

                },

            });

        });
    });
</script>
@if($message = Session::get('personalUpdate'))
<script>
    Swal.fire(
        'Success',
        'Successfully Updated Personal Details!',
        'success'
    )
</script>
@endif
@if($message = Session::get('academyUpdate'))
<script>
    Swal.fire(
        'Success',
        'Successfully Updated!',
        'success'
    )
</script>

<script>
    setTimeout(function() {
        $(".nav-linkk").removeClass('uk-active');
        $("#amenu1").addClass('uk-active');
        $('.tab-pane').removeClass('uk-active');
        $("#menu1").addClass('uk-active');
        // $('.editbtn').html('Edit Academic ')
        var id = $('.editlink').attr('data-id')
        var url = "{{route('academyEdit', '')}}" + "/" + id;
        $('.editlink').attr('href', url)
    }, 1000);
</script>
@endif
@if($message = Session::get('workUpdate'))
<script>
    Swal.fire(
        'Success',
        'Successfully Updated!',
        'success'
    )
</script>
<script>
    setTimeout(function() {
        $(".nav-linkk").removeClass('uk-active');
        $("#amenu2").addClass('uk-active');
        $('.tab-pane').removeClass('uk-active');
        $("#menu2").addClass('uk-active');
        // $('.editbtn').html('Edit Work ')
        var id = $('.editlink').attr('data-id')
        var url = "{{route('workEdit', '')}}" + "/" + id;
        $('.editlink').attr('href', url)
    }, 1000);
</script>
@endif
@if($message = Session::get('sponsorUpdate'))
<script>
    Swal.fire(
        'Success',
        'Successfully Updated!',
        'success'
    )
</script>
<script>
    setTimeout(function() {
        $(".nav-linkk").removeClass('uk-active');
        $("#amenu3").addClass('uk-active');
        $('.tab-pane').removeClass('uk-active');
        $("#menu3").addClass('uk-active');
        // $('.editbtn').html('Edit Sponsor ')
        var id = $('.editlink').attr('data-id')
        var url = "{{route('sponsorEdit', '')}}" + "/" + id;
        $('.editlink').attr('href', url)
    }, 1000);
</script>
@endif
@endsection