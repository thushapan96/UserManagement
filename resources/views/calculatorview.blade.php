@extends('layouts.layoutss')
@section('content')

<div class='col-md-9 ' style="margin-left:auto !important;margin-right:auto !important">
    <h5 class="" style="text-align:center;color:#3f6791">CRS Calculator </h5>

</div>

<u1 class="col-md-7 justify-content-around" data-uk-tab="animation: uk-animation-scale-up" style="margin-left:auto !important;margin-right:auto !important">
    <li class="nav-linkk " id="amenu"><a style="cursor:pointer;padding: 0.5rem 2rem;" aria-current="page">Personal + Academic </a></li>
    <li class="nav-linkk " id="amenu1"><a style="cursor:pointer;padding: 0.5rem  2rem;">Employment + Technical </a></li>
</u1>
<div class='col-md-9 justify-content-around' style="margin-left:auto !important;margin-right:auto !important">
    <p>Candidates to provide correct information. We will assist and recommend based on your Academic, Technical Qualification and Work Experience.</p>
</div>
<u1 class="uk-switcher">
    <li id='menu' class='tab-pane '>
        <div class='uk-card col-md-9' style="margin-left:auto !important;margin-right:auto !important">
            <div class="uk-card-body sc-padding-medium">
                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                    <h6 style="text-decoration:underline;">Personal Information</h6>

                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Full Name</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$calculators->first_name}} {{$calculators->last_name}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Age</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$calculators->age}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Gender </strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$calculators->gender }}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Email address for correspondence</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$calculators->email }}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">City</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps"> {{$calculators->city}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Country of Citizenship</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps"> {{$calculators->country_citizen}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Country of Residence</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$calculators->country_residence}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">phone</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$calculators->phone}}
                            </p>
                        </div>
                    </div>
                </fieldset><br>
                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                    <h6 style="text-decoration:underline;">other Information</h6>
                    <hr>
                    <p style="text-decoration:underline;">Secondary School Certificate -10th/SSC</p>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Year of Completion</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$calculators->secondary_year_completion }}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Name of the Board for 10th or SSC</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$calculators->secondary_board_name }}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Total Marks in % (Percentage)</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$calculators->secondary_total_mark }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <p style="text-decoration:underline;">Intermediate Certificate - 10 + 2</p>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Year of Completion</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$calculators->intermediate_certificate_year}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Name of the Board for 10+2</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$calculators->intermediate_board_name}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Total Marks in % (Percentage)</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$calculators->intermediate_total_mark}}
                            </p>
                        </div>
                    </div>
                    <hr>

                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Graduation - Degree</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                @if($calculators->graduation_degree)
                                @foreach($calculators->graduation_degree as $row)
                                {{$row}}<br>
                                @endforeach
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Year of Completion</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$calculators->graduation_degree_year_completion}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Course Duration</strong>
                        </div>

                        <div class="col-md-7">
                            <p> {{$calculators->graduation_degree_course_duration}}</p>

                        </div>
                    </div>

                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Major Subjects</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$calculators->graduation_degree_major_subject}}
                            </p>
                        </div>
                    </div>

                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Years of Gap till Date</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$calculators->graduation_degree_year_gap}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">GPA Score</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$calculators->graduation_degree_gpa}}
                            </p>
                        </div>
                    </div>
                    <hr>


                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Post Graduation - Master Degree</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                @if($calculators->post_graduation)
                                @foreach($calculators->post_graduation as $row)
                                {{$row}}<br>
                                @endforeach
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Year of Completion</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$calculators->post_graduation_year_completion}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Course Duration</strong>
                        </div>

                        <div class="col-md-7">
                            <p> {{$calculators->post_graduation_course_duration}}</p>

                        </div>
                    </div>

                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Major Subjects</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$calculators->post_graduation_major_subject}}
                            </p>
                        </div>
                    </div>

                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Years of Gap till Date</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$calculators->post_graduation_year_gap}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">GPA Score</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$calculators->post_graduation_gpa}}
                            </p>
                        </div>
                    </div>

                </fieldset>
            </div>
        </div>
    </li>
    <li id='menu1' class='tab-pane '>
        <div class='uk-card col-md-9 ' style="margin-left:auto !important;margin-right:auto !important">
            <div class="uk-card-body sc-padding-medium">
                @if($employments->count() || $technicalCertifications->count())

                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                    @if($employments->count())
                    <h6 style="text-decoration:underline;">Employment</h6>

                    @foreach($employments as $row)
                    <fieldset class="uk-fieldset md-bg-grey-300 sc-padding">
                        <div id="inputFormRow">
                            <div class="row custom-box">
                                <div class="col-md-5">
                                    <strong class="ps">Employment (Employer Name)</strong>
                                </div>

                                <div class="col-md-7">
                                    <p class="ps">
                                        {{$row->employer_name}}
                                    </p>
                                </div>
                            </div>

                            <div class="row custom-box">
                                <div class="col-md-5">
                                    <strong class="ps">Job Title or Description)</strong>
                                </div>

                                <div class="col-md-7">
                                    <p class="ps">
                                        {{$row->job_tittle}}
                                    </p>
                                </div>
                            </div>
                            <div class="row custom-box">
                                <div class="col-md-5">
                                    <strong class="ps">Job Field</strong>
                                </div>

                                <div class="col-md-7">
                                    <p class="ps">
                                        {{$row->job_field}}
                                    </p>
                                </div>
                            </div>

                            <div class="row custom-box">
                                <div class="col-md-5">
                                    <strong class="ps">Years of Job Work Experience</strong>
                                </div>

                                <div class="col-md-7">
                                    <p class="ps">
                                        {{$row->year_job_work}}
                                    </p>
                                </div>
                            </div>
                            <div class="row custom-box">
                                <div class="col-md-5">
                                    <strong class="ps">From Year</strong>
                                </div>

                                <div class="col-md-7">
                                    <p class="ps">
                                        {{$row->from_year_job}}
                                    </p>
                                </div>
                            </div>
                            <div class="row custom-box">
                                <div class="col-md-5">
                                    <strong class="ps">to Year</strong>
                                </div>

                                <div class="col-md-7">
                                    <p class="ps">
                                        {{$row->to_year_job}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </fieldset><br>
                    @endforeach
                    @endif
                    @if($technicalCertifications->count())
                    <hr>
                    <h6 style="text-decoration:underline;">Technical Certification</h6>


                    @foreach($technicalCertifications as $row)
                    <fieldset class="uk-fieldset md-bg-grey-300 sc-padding">
                        <div id="inputFormRow">
                            <div class="row custom-box">
                                <div class="col-md-5">
                                    <strong class="ps">Technical Certification (Name of Certificate)</strong>
                                </div>

                                <div class="col-md-7">
                                    <p class="ps">
                                        {{$row->technical_certification_name}}
                                    </p>
                                </div>
                            </div>

                            <div class="row custom-box">
                                <div class="col-md-5">
                                    <strong class="ps">Certificate Specialization</strong>
                                </div>

                                <div class="col-md-7">
                                    <p class="ps">
                                        {{$row->certificate_specialization}}
                                    </p>
                                </div>
                            </div>
                            <div class="row custom-box">
                                <div class="col-md-5">
                                    <strong class="ps">Course Duration</strong>
                                </div>

                                <div class="col-md-7">
                                    <p class="ps">
                                        {{$row->technical_certification_course_duration}}
                                    </p>
                                </div>
                            </div>

                            <div class="row custom-box">
                                <div class="col-md-5">
                                    <strong class="ps">Grade/Score</strong>
                                </div>

                                <div class="col-md-7">
                                    <p class="ps">
                                        {{$row->technical_certification_grade}}
                                    </p>
                                </div>
                            </div>
                            <div class="row custom-box">
                                <div class="col-md-5">
                                    <strong class="ps">Year of Completion</strong>
                                </div>

                                <div class="col-md-7">
                                    <p class="ps">
                                        {{$row->technical_certification_year_completion}}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </fieldset><br>
                    @endforeach
                    @endif

                </fieldset><br>
                @endif
                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                    <div class="row custom-box">
                        <div class="col-md-9">
                            <strong class="ps">Have you been Rejected by any College or University in the Past?</strong>
                        </div>

                        <div class="col-md-3">

                            <div class="row">
                            <div class="font-weight-bold ml-2 {{$calculators->is_rejected_college == 'yes' ? 'text-info ' : 'text-danger'}} ">{{$calculators->is_rejected_college}} </div>


                            </div><br>
                        </div>
                       
                    </div>
                    @if($calculators->rejected_college_reason)
                    <div class="row custom-box">
                        <div class="col-md-9">
                            <strong class="ps">Reason for rejection</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">
                                {{$calculators->rejected_college_reason}}
                            </p>
                        </div>
                    </div>
                    @endif
                    @if($calculators->rejected_college_year)
                    <div class="row custom-box">
                        <div class="col-md-9">
                            <strong class="ps">Specify the Year of Rejection</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">
                                {{$calculators->rejected_college_year}}
                            </p>
                        </div>
                    </div>
                    @endif
                    <hr>
                    <div class="row">
                        <div class="col-md-9">
                            <strong class="ps">Have you been Rejected for Study Visa or Immigration or any Visa in the past?</strong>
                        </div>

                        <div class="col-md-3">

                            <div class="row">
                            <div class="font-weight-bold ml-2 {{$calculators->is_rejected_visa_past == 'yes' ? 'text-info ' : 'text-danger'}} ">{{$calculators->is_rejected_visa_past}} </div>

                            </div><br>
                        </div>
                        
                    </div>
                    @if($calculators->rejected_visa_reason_past)
                    <div class="row custom-box">
                        <div class="col-md-9">
                            <strong class="ps">Reason for rejection</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">
                                {{$calculators->rejected_visa_reason_past}}
                            </p>
                        </div>
                    </div>
                    @endif
                    @if($calculators->rejected_visa_year_past)
                    <div class="row custom-box">
                        <div class="col-md-9">
                            <strong class="ps"> Year of Rejection</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">
                                {{$calculators->rejected_visa_year_past}}
                            </p>
                        </div>
                    </div>
                    @endif
                    <hr>
                    <div class="row">
                        <div class="col-md-9">
                            <strong class="ps">Have you been Rejected for Study Visa or Immigration or any Visa in the past for USA?</strong>
                        </div>

                        <div class="col-md-3">

                            <div class="row">
                            <div class="font-weight-bold ml-2 {{$calculators->is_rejected_visa == 'yes' ? 'text-info ' : 'text-danger'}} ">{{$calculators->is_rejected_visa}} </div>


                            </div><br>
                        </div>
                       
                    </div>
                    @if($calculators->rejected_visa_reason)
                    <div class="row custom-box">
                        <div class="col-md-9">
                            <strong class="ps">Reason for rejection</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">
                                {{$calculators->rejected_visa_reason}}
                            </p>
                        </div>
                    </div>
                    @endif
                    @if($calculators->rejected_visa_year)

                    <div class="row custom-box">
                        <div class="col-md-9">
                            <strong class="ps"> Year of Rejection</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">
                                {{$calculators->rejected_visa_year}}
                            </p>
                        </div>
                    </div>
                    @endif
                    <hr>
                    <div class="row">
                        <div class="col-md-9">
                            <strong class="ps">Have you created EOI Profile in the past? If Yes, Valid up to?</strong>
                        </div>

                        <div class="col-md-3">

                            <div class="row">
                            <div class="font-weight-bold ml-2 {{$calculators->EOI_profile == 'yes' ? 'text-info ' : 'text-danger'}} ">{{$calculators->EOI_profile}} </div>

                                &nbsp;&nbsp;
                                @if($calculators->EOI_profile_date)
                                @if($configureDate == '1')
                                {{date('Y-m-d', strtotime($calculators->EOI_profile_date))}}
                                @elseif($configureDate == '2')
                                {{date('d-m-Y', strtotime($calculators->EOI_profile_date))}}
                                @elseif($configureDate == '3')
                                {{date('m-d-Y', strtotime($calculators->EOI_profile_date))}}
                                @endif
                                @endif
                            </div><br>
                        </div>
                       
                    </div><br>
                    <div class="row">
                        <div class="col-md-9">
                            <strong class="ps">Have you created Provincial Profile in the past? If Yes, Valid up to?</strong>
                        </div>

                        <div class="col-md-3">

                            <div class="row">
                            <div class="font-weight-bold ml-2 {{$calculators->Provincial_profile == 'yes' ? 'text-info ' : 'text-danger'}} ">{{$calculators->Provincial_profile}} </div>
   
                            &nbsp;&nbsp;
                                @if($calculators->Provincial_profile_date)
                                @if($configureDate == '1')
                                {{date('Y-m-d', strtotime($calculators->Provincial_profile_date))}}
                                @elseif($configureDate == '2')
                                {{date('d-m-Y', strtotime($calculators->Provincial_profile_date))}}
                                @elseif($configureDate == '3')
                                {{date('m-d-Y', strtotime($calculators->Provincial_profile_date))}}
                                @endif
                                @endif
                            </div>
                        </div>
                        
                    </div><br>

                </fieldset>
            </div>
        </div>
    </li>
    <script>
        $("textarea").each(function(index) {
            console.log(index, $(this)[0].scrollHeight)
            $(this).height($(this)[0].scrollHeight);
        });
    </script>
</u1><br>
<div class="col-md-9" style="margin-left:auto !important;margin-right:auto !important">
    <div class="float-right">
        <a href="{{route('edit.calculator')}}"> <button type="button" class="client-btn uk-button uk-button-primary">Edit CRS Calculator</button></a>
    </div>
</div>
<br>
<script>
    $('.page-active').removeClass('sc-page-active')
    $('.page-Calculator').addClass('sc-page-active')
</script>
@endsection