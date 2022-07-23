@extends('layouts.layoutss')
@section('content')

<div class='col-md-10 ' style="margin-left:auto !important;margin-right:auto !important">
    <h5 class="" style="text-align:center;color:#3f6791">Assessment for Overseas Education - Canada</h5>

</div>

<u1 class="col-md-4" data-uk-tab="animation: uk-animation-scale-up" style="margin-left:auto !important;margin-right:auto !important">
    <li class="nav-linkk " id="amenu"><a style="cursor:pointer;padding: 0.5rem 2rem;" aria-current="page">tab1 </a></li>
    <li class="nav-linkk " id="amenu1"><a style="cursor:pointer;padding: 0.5rem  2rem;">tab2 </a></li>
    <li class="nav-linkk " id="amenu2"><a style="cursor:pointer;padding: 0.5rem  2rem;">tab3</a></li>
</u1>
<div class='col-md-9 ' style="margin-left:auto !important;margin-right:auto !important">
    <p>Candidates to provide correct information. We will assist and recommend based on your previous educational qualification and interest. All Universities and Colleges required IELTS Academic but some Universities also required GRE/TOEFL/GMAT/ SAT in addition to IELTS. </p>
</div>
<u1 class="uk-switcher">
    <li id='menu' class='tab-pane '>
        <div class='uk-card col-md-9 ' style="margin-left:auto !important;margin-right:auto !important">
            <div class="uk-card-body sc-padding-medium">
                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                    <h6 style="text-decoration:underline;">Personal Information</h6>

                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps"> Full Name</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->first_name}} {{$educations->last_name}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Age</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->age}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Gender </strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->gender }}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Email address for correspondence</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->gender }}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">City</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps"> {{$educations->city}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Country of Citizenship</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps"> {{$educations->country_citizen}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Country of Residence</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$educations->country_residence}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">phone</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$educations->phone}}
                            </p>
                        </div>
                    </div>
                </fieldset><br>

                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                    <h6 style="text-decoration:underline;">other Information</h6>
                    <hr>
                    <p>Secondary School Certificate -10th/SSC</p>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Year of Completion</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->secondary_year_completion }}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Name of the Board for 10th or SSC</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->secondary_board_name }}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Total Marks in % (Percentage)</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->secondary_total_mark }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <p>Intermediate Certificate - 10 + 2</p>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Year of Completion</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$educations->intermediate_certificate_year}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Name of the Board for 10+2</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->intermediate_board_name}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Total Marks in % (Percentage)</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->intermediate_total_mark}}
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
                                @if($educations->graduation_degree)
                                @foreach($educations->graduation_degree as $row)
                                <i class='fas fa-caret-right '></i>{{$row}}<br>
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
                            <p class="ps">{{$educations->graduation_degree_year_completion}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Course Duration</strong>
                        </div>

                        <div class="col-md-7">
                            <p> {{$educations->graduation_degree_course_duration}}</p>

                        </div>
                    </div>

                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Major Subjects</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$educations->graduation_degree_major_subject}}
                            </p>
                        </div>
                    </div>

                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Years of Gap till Date</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$educations->graduation_degree_year_gap}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">GPA Score</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$educations->graduation_degree_gpa}}
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
                                @if($educations->post_graduation)
                                @foreach($educations->post_graduation as $row)
                                <i class='fas fa-caret-right '></i>{{$row}}<br>
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
                            <p class="ps">{{$educations->post_graduation_year_completion}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Course Duration</strong>
                        </div>

                        <div class="col-md-7">
                            <p> {{$educations->post_graduation_course_duration}}</p>

                        </div>
                    </div>

                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Major Subjects</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$educations->post_graduation_major_subject}}
                            </p>
                        </div>
                    </div>

                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Years of Gap till Date</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$educations->post_graduation_year_gap}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">GPA Score</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">{{$educations->post_graduation_gpa}}
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
                </fieldset>
                <br>
                @endif
                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">

                    <div class="row custom-box " id="">
                        <div class="col-md-5">
                            <strong class="ps">Degree – 4 Years</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->degree_year}}
                            </p>
                        </div>

                    </div>
                    <div class="row custom-box " id="">
                        <div class="col-md-5">
                            <strong class="ps">Master Degree – 2 Years</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->master_degree_year}}
                            </p>
                        </div>

                    </div>
                    <div class="row custom-box " id="">
                        <div class="col-md-5">
                            <strong class="ps">PhD – 3 Years</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->phd_year}}
                            </p>
                        </div>

                    </div>
                    <div class="row custom-box " id="">
                        <div class="col-md-5">
                            <strong class="ps">PG Diploma – 1 Year</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->pg_diploma_year}}
                            </p>
                        </div>

                    </div>
                    <div class="row custom-box " id="">
                        <div class="col-md-5">
                            <strong class="ps">Preferred College if any</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->preferred_college}}
                            </p>
                        </div>

                    </div>
                    <div class="row custom-box " id="">
                        <div class="col-md-5">
                            <strong class="ps">Preferred University If Any</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->preferred_university}}
                            </p>
                        </div>

                    </div>
                    <div class="row custom-box " id="">
                        <div class="col-md-5">
                            <strong class="ps">Preferred State if any</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->preferred_State}}
                            </p>
                        </div>

                    </div>
                    <div class="row custom-box " id="">
                        <div class="col-md-5">
                            <strong class="ps">Preferred Province if Any</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->preferred_region}}
                            </p>
                        </div>

                    </div>
                    <div class="row custom-box " id="">
                        <div class="col-md-5">
                            <strong class="ps">Preferred City if Any</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->preferred_city}}
                            </p>
                        </div>

                    </div>
                    <div class="row custom-box " id="">
                        <div class="col-md-5">
                            <strong class="ps">Preferred Mode of Education</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->communication_mode}}
                            </p>
                        </div>

                    </div>
                    <div class="row custom-box " id="">
                        <div class="col-md-5">
                            <strong class="ps">Preferred Intake</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                @if($educations->preferred_intake)
                                @foreach($educations->preferred_intake as $row)
                                <i class='fas fa-caret-right '></i>{{$row}}<br>
                                @endforeach
                                @endif
                            </p>
                        </div>

                    </div>
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">

                                <label>Write your Interest to pursue Higher education along with Major Subject/Discipline, provide information wherever necessary:</label>
                                <textarea class="form-control" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled name="interest_pursue_higher_education">{{$educations->interest_pursue_higher_education}}</textarea>
                            </div>
                        </div>
                    </div>
                </fieldset>

            </div>
        </div>

    </li>

    <li id='menu2' class='tab-pane '>
        <div class='uk-card col-md-9 ' style="margin-left:auto !important;margin-right:auto !important">
            <div class="uk-card-body sc-padding-medium">
                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                    <div class="row">
                        <div class="col-md-5">
                            <strong class="ps">Have you been Rejected by any College or University in the Past?</strong>
                        </div>

                        <div class="col-md-7">

                            <div class="row">
                                &nbsp;<div class="is_rejected_college_yes ">Yes</div>
                                &nbsp;&nbsp;&nbsp;
                                <div class="is_rejected_college_no ">NO</div>

                            </div>
                        </div>
                        <script>
                            if ("{{$educations->is_rejected_college}}" == 'yes') {
                                $('.is_rejected_college_yes').css('text-decoration', 'underline')
                                $('.is_rejected_college_yes').css('text-decoration-color', 'green')
                            } else {
                                $('.is_rejected_college_no').css('text-decoration', 'underline')
                                $('.is_rejected_college_no').css('text-decoration-color', 'green')
                            }
                        </script>
                    </div>
                    @if($educations->rejected_college_reason)
                    <br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Reason for rejection</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->rejected_college_reason}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Year of Rejection</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->rejected_college_year}}
                            </p>
                        </div>
                    </div>
                    @endif
                    <hr>

                    <div class="row">
                        <div class="col-md-5">
                            <strong class="ps">Have you been Rejected for Study Visa or Immigration or any Visa in the past?</strong>
                        </div>

                        <div class="col-md-7">

                            <div class="row">
                                &nbsp;<div class="is_rejected_visa_past_yes ">Yes</div>
                                &nbsp;&nbsp;&nbsp;
                                <div class="is_rejected_visa_past_no ">NO</div>

                            </div>
                        </div>
                        <script>
                            if ("{{$educations->is_rejected_visa_past}}" == 'yes') {
                                $('.is_rejected_visa_past_yes').css('text-decoration', 'underline')
                                $('.is_rejected_visa_past_yes').css('text-decoration-color', 'green')
                            } else {
                                $('.is_rejected_visa_past_no').css('text-decoration', 'underline')
                                $('.is_rejected_visa_past_no').css('text-decoration-color', 'green')
                            }
                        </script>
                    </div>
                    @if($educations->rejected_visa_reason_past)
                    <br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Reason for rejection</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->rejected_visa_reason_past}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps"> Year of Rejection</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->rejected_visa_year_past}}
                            </p>
                        </div>
                    </div>
                    @endif
                    <hr>
                    <div class="row">
                        <div class="col-md-5">
                            <strong class="ps">Have you been Rejected for Study Visa or Immigration or any Visa in the past for USA?</strong>
                        </div>

                        <div class="col-md-7">

                            <div class="row">
                                &nbsp;<div class="is_rejected_visa_yes ">Yes</div>
                                &nbsp;&nbsp;&nbsp;
                                <div class="is_rejected_visa_no ">NO</div>

                            </div>
                        </div>

                        <script>
                            if ("{{$educations->is_rejected_visa}}" == 'yes') {
                                $('.is_rejected_visa_yes').css('text-decoration', 'underline')
                                $('.is_rejected_visa_yes').css('text-decoration-color', 'green')
                            } else {
                                $('.is_rejected_visa_no').css('text-decoration', 'underline')
                                $('.is_rejected_visa_no').css('text-decoration-color', 'green')
                            }
                        </script>
                    </div>
                    @if($educations->rejected_visa_reason)
                    <br>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Reason for rejection</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->rejected_visa_reason}}
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps"> Year of Rejection</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->rejected_visa_year}}
                            </p>
                        </div>
                    </div>
                    @endif
                    <hr>
                    <div class="row custom-box">
                        <div class="col-md-5">
                            <strong class="ps">Prerequisite and Document Checklist:</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                @if($educations->prerequisite_document)
                                @foreach($educations->prerequisite_document as $row)
                                <i class='fas fa-caret-right '></i>{{$row}}<br>
                                @endforeach
                                @endif
                            </p>
                        </div>
                    </div>
                    @if($educations->eca)
                    <div class="row custom-box " id="">
                        <div class="col-md-5">
                            <strong class="ps">ECA Organization</strong>
                        </div>
                        <div class="col-md-7">
                            <p class="ps">
                                {{$educations->eca}}
                            </p>
                        </div>
                    </div>
                    @endif
                    @if($educations->eca_date)
                    <div class="row custom-box " id="">
                        <div class="col-md-5">
                            <strong class="ps">ECA Valid Upto</strong>
                        </div>

                        <div class="col-md-7">
                            <p class="ps">
                                @if($educations->eca_date)
                                @if($configureDate == '1')
                                {{date('Y-m-d', strtotime($educations->eca_date))}}
                                @elseif($configureDate == '2')
                                {{date('d-m-Y', strtotime($educations->eca_date))}}
                                @elseif($configureDate == '3')
                                {{date('m-d-Y', strtotime($educations->eca_date))}}
                                @endif
                                @endif
                            </p>
                        </div>
                    </div>
                    @endif
                </fieldset><br>
                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">

                    <div class="row">
                        <div class="col-md-5">
                            <strong class="ps">Is your Passport Valid for another 6 Months?</strong>
                        </div>

                        <div class="col-md-7">

                            <div class="row">
                                &nbsp;<div class="passport_valid_yes ">Yes</div> &nbsp;&nbsp;&nbsp;

                                <div class="passport_valid_no ">NO</div>

                            </div>
                        </div>
                        <script>
                            if ("{{$educations->passport_valid}}" == 'yes') {
                                $('.passport_valide_yes').css('text-decoration', 'underline')
                                $('.passport_valide_yes').css('text-decoration-color', 'green')
                            } else {
                                $('.passport_valid_no').css('text-decoration', 'underline')
                                $('.passport_valid_no').css('text-decoration-color', 'green')
                            }
                        </script>
                    </div><br>
                    <div class="row">
                        <div class="col-md-5">
                            <strong class="ps">Have you attempted IELTS academic in the past? If Yes, Valid up to?</strong>
                        </div>

                        <div class="col-md-7">

                            <div class="row">
                                &nbsp;<div class="IELTS_attempted_yes ">Yes</div>&nbsp;&nbsp;&nbsp;
                                <div class="IELTS_attempted_no ">NO</div>&nbsp;&nbsp;&nbsp;
                                @if($educations->IELTS_attempted_date)
                                @if($configureDate == '1')
                                {{date('Y-m-d', strtotime($educations->IELTS_attempted_date))}}
                                @elseif($configureDate == '2')
                                {{date('d-m-Y', strtotime($educations->IELTS_attempted_date))}}
                                @elseif($configureDate == '3')
                                {{date('m-d-Y', strtotime($educations->IELTS_attempted_date))}}
                                @endif
                                @endif
                            </div>
                        </div>
                        <script>
                            if ("{{$educations->IELTS_attempted}}" == 'yes') {
                                $('.IELTS_attempted_yes').css('text-decoration', 'underline')
                                $('.IELTS_attempted_yes').css('text-decoration-color', 'green')
                            } else {
                                $('.IELTS_attempted_no').css('text-decoration', 'underline')
                                $('.IELTS_attempted_no').css('text-decoration-color', 'green')
                            }
                        </script>
                    </div><br>
                    <div class="row">
                        <div class="col-md-5">
                            <strong class="ps">Have you attempted GRE in the past? If Yes, Valid up to?</strong>
                        </div>

                        <div class="col-md-7">

                            <div class="row">
                                &nbsp;<div class="GRE_attempted_yes ">Yes</div> &nbsp;&nbsp;&nbsp;
                                <div class="GRE_attempted_no ">NO</div> &nbsp;&nbsp;&nbsp;
                                @if($educations->GRE_attempted_date)
                                @if($configureDate == '1')
                                {{date('Y-m-d', strtotime($educations->GRE_attempted_date))}}
                                @elseif($configureDate == '2')
                                {{date('d-m-Y', strtotime($educations->GRE_attempted_date))}}
                                @elseif($configureDate == '3')
                                {{date('m-d-Y', strtotime($educations->GRE_attempted_date))}}
                                @endif
                                @endif
                            </div>
                        </div>
                        <script>
                            if ("{{$educations->GRE_attempted}}" == 'yes') {
                                $('.GRE_attempted_yes').css('text-decoration', 'underline')
                                $('.GRE_attempted_yes').css('text-decoration-color', 'green')
                            } else {
                                $('.GRE_attempted_no').css('text-decoration', 'underline')
                                $('.GRE_attempted_no').css('text-decoration-color', 'green')
                            }
                        </script>
                    </div><br>
                    <div class="row">
                        <div class="col-md-5">
                            <strong class="ps">Have you attempted TOEFL academic in the past? If Yes, Valid up to?</strong>
                        </div>

                        <div class="col-md-7">

                            <div class="row">
                                &nbsp;<div class="TOEFL_attempted_yes ">Yes</div>&nbsp;&nbsp;&nbsp;
                                <div class="TOEFL_attempted_no ">NO</div> &nbsp;&nbsp;&nbsp;
                                @if($educations->TOEFL_attempted_date)
                                @if($configureDate == '1')
                                {{date('Y-m-d', strtotime($educations->TOEFL_attempted_date))}}
                                @elseif($configureDate == '2')
                                {{date('d-m-Y', strtotime($educations->TOEFL_attempted_date))}}
                                @elseif($configureDate == '3')
                                {{date('m-d-Y', strtotime($educations->TOEFL_attempted_date))}}
                                @endif
                                @endif

                            </div>
                        </div>
                        <script>
                            if ("{{$educations->TOEFL_attempted}}" == 'yes') {
                                $('.TOEFL_attempted_yes').css('text-decoration', 'underline')
                                $('.TOEFL_attempted_yes').css('text-decoration-color', 'green')
                            } else {
                                $('.TOEFL_attempted_no').css('text-decoration', 'underline')
                                $('.TOEFL_attempted_no').css('text-decoration-color', 'green')
                            }
                        </script>
                    </div><br>
                    <div class="row">
                        <div class="col-md-5">
                            <strong class="ps">Have you attempted GMAT academic in the past? If Yes, Valid up to?</strong>
                        </div>

                        <div class="col-md-7">

                            <div class="row">
                                &nbsp;<div class="GMAT_attempted_yes ">Yes</div> &nbsp;&nbsp;&nbsp;
                                <div class="GMAT_attempted_no ">NO</div> &nbsp;&nbsp;&nbsp;
                                @if($educations->GMAT_attempted_date)
                                @if($configureDate == '1')
                                {{date('Y-m-d', strtotime($educations->GMAT_attempted_date))}}
                                @elseif($configureDate == '2')
                                {{date('d-m-Y', strtotime($educations->GMAT_attempted_date))}}
                                @elseif($configureDate == '3')
                                {{date('m-d-Y', strtotime($educations->GMAT_attempted_date))}}
                                @endif
                                @endif

                            </div>
                        </div>
                        <script>
                            if ("{{$educations->GMAT_attempted}}" == 'yes') {
                                $('.GMAT_attempted_yes').css('text-decoration', 'underline')
                                $('.GMAT_attempted_yes').css('text-decoration-color', 'green')
                            } else {
                                $('.GMAT_attempted_no').css('text-decoration', 'underline')
                                $('.GMAT_attempted_no').css('text-decoration-color', 'green')
                            }
                        </script>
                    </div><br>
                    <div class="row">
                        <div class="col-md-5">
                            <strong class="ps">Are you interested to Attempt GRE/TOEFL/GMAT/SAT if required to fulfil the University/College eligibility criteria?</strong>
                        </div>

                        <div class="col-md-7">

                            <div class="row">
                                &nbsp;<div class="interested_attempted_yes ">Yes</div>
                                &nbsp;&nbsp;&nbsp;
                                <div class="interested_attempted_no ">NO</div>

                            </div>
                        </div>
                        <script>
                            if ("{{$educations->interested_attempted}}" == 'yes') {
                                $('.interested_attempted_yes').css('text-decoration', 'underline')
                                $('.interested_attempted_yes').css('text-decoration-color', 'green')
                            } else {
                                $('.interested_attempted_no').css('text-decoration', 'underline')
                                $('.interested_attempted_no').css('text-decoration-color', 'green')
                            }
                        </script>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12 ">
                            <div class="form-group">
                                <label>Remarks/Comments if any</label>

                                <textarea class="form-control" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled name="feedback">{{$educations->feedback}}</textarea>

                            </div>
                        </div>
                    </div>
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
</u1>
<br>
<div class='col-md-9 ' style="margin-left:auto !important;margin-right:auto !important">
    <div class="float-right">
        <a href="{{route('edit.education')}}"> <button type="button" class="client-btn uk-button uk-button-primary">Edit EDUCATION Assessment</button></a>
    </div>
</div>
<br>
<script>
    $('.page-active').removeClass('sc-page-active')
    $('.page-Educational').addClass('sc-page-active')
</script>
@endsection