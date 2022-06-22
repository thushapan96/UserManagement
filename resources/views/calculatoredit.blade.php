@extends('layouts.layoutss')
@section('content')
<form action="{{route('update.calculator')}}" method="post" enctype="multipart/form-data">

    @csrf
    <div class='col-md-10 ' style="margin-left:auto !important;margin-right:auto !important">
        <h3 class="" style="text-align:center">Edit CRS Calculator </h3>

    </div>

    <u1 class="col-md-4" data-uk-tab="animation: uk-animation-scale-up" style="margin-left:auto !important;margin-right:auto !important">
        <li class="nav-linkk " id="amenu"><a style="cursor:pointer;padding: 0.5rem 2rem;" aria-current="page">tab1 </a></li>
        <li class="nav-linkk " id="amenu1"><a style="cursor:pointer;padding: 0.5rem  2rem;">tab2 </a></li>
    </u1>
    <!-- <div class='col-md-10 ' style="margin-left:auto !important;margin-right:auto !important">
        <p>Candidates to provide correct information. We will assist and recommend based on your previous educational qualification and interest. All Universities and Colleges required IELTS Academic but some Universities also required GRE/TOEFL/GMAT/SAT in addition to IELTS. </p>
    </div> -->
    <u1 class="uk-switcher">
        <li id='menu' class='tab-pane '>
            <div class='uk-card col-md-10 ' style="margin-left:auto !important;margin-right:auto !important">
                <div class="uk-card-body sc-padding-medium">
                    <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                        <div class="row custom-box " id="">

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>First Name </label>
                                    <input class="form-control" type="text" name="first_name" value="{{$calculators->first_name}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" value="{{$calculators->last_name}}" name="last_name">
                                </div>

                            </div>
                        </div>
                        <div class="row custom-box " id="">

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input class="form-control" type="text" value="{{$calculators->age}}" name="age">
                                    <small>Number of Years</small>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input class="form-control" type="text" value="{{$calculators->gender}}" name="gender">
                                    <small>Male/Female</small>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Email address for correspondence</label>
                                    <input class="form-control" type="text" value="{{$calculators->email}}" name="email">
                                    <small>Valid Email Address</small>
                                </div>
                            </div>
                        </div>
                        <div class="row custom-box " id="">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>City </label>
                                    <input class="form-control" type="text" value="{{$calculators->city}}" name="city">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Country of Citizenship</label>
                                    <input class="form-control" type="text" value="{{$calculators->country_citizen}}" name="country_citizen">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Country of Residence</label>
                                    <input class="form-control" type="text" value="{{$calculators->country_residence}}" name="country_residence">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input class="form-control" type="text" value="{{$calculators->phone}}" name="phone">

                                </div>
                            </div>
                        </div>


                        <hr>
                        <h6>Secondary School Certificate -10th/SSC</h6>
                        <div class="row custom-box " id="">

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Year of Completion</label>
                                    <input class="form-control" type="text" value="{{$calculators->secondary_year_completion}}" name="secondary_year_completion">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Name of the Board for 10th or SSC</label>
                                    <input class="form-control" type="text" value="{{$calculators->secondary_board_name}}" name="secondary_board_name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Total Marks in % (Percentage)</label>
                                    <input class="form-control" type="text" value="{{$calculators->secondary_total_mark}}" name="secondary_total_mark">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h6>Intermediate Certificate - 10 + 2</h6>
                        <div class="row custom-box " id="">

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Year of Completion</label>
                                    <input class="form-control" type="text" value="{{$calculators->intermediate_certificate_year}}" name="intermediate_certificate_year">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Name of the Board for 10+2</label>
                                    <input class="form-control" type="text" value="{{$calculators->intermediate_board_name}}" name="intermediate_board_name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Total Marks in % (Percentage)</label>
                                    <input class="form-control" type="text" value="{{$calculators->intermediate_total_mark}}" name="intermediate_total_mark">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row custom-box " id="">
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Graduation - Degree
                                    </label>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="GD1" name="graduation_degree[]" value="BA" {{ (is_array($calculators->graduation_degree) and in_array("BA", $calculators->graduation_degree)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="GD1"> BA</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="GD2" name="graduation_degree[]" value="B.Com" {{ (is_array($calculators->graduation_degree) and in_array("B.Com", $calculators->graduation_degree)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="GD2"> B.Com</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="GD3" name="graduation_degree[]" value="B.Sc" {{ (is_array($calculators->graduation_degree) and in_array("B.Sc", $calculators->graduation_degree)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="GD3"> B.Sc</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="GD4" name="graduation_degree[]" value="B.E" {{ (is_array($calculators->graduation_degree) and in_array("B.E", $calculators->graduation_degree)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="GD4"> B.E</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="GD5" name="graduation_degree[]" value="Other" {{ (is_array($calculators->graduation_degree) and in_array("Other", $calculators->graduation_degree)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="GD5"> Other if Any</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Year of Completion</label>
                                    <input class="form-control" type="text" value="{{$calculators->graduation_degree_year_completion}}" name="graduation_degree_year_completion">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Course Duration</label>
                                    <input class="form-control" type="text" value="{{$calculators->graduation_degree_course_duration}}" name="graduation_degree_course_duration">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Major Subjects</label>
                                    <input class="form-control" type="text" value="{{$calculators->graduation_degree_major_subject}}" name="graduation_degree_major_subject">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Years of Gap till Date</label>
                                    <input class="form-control" type="text" value="{{$calculators->graduation_degree_year_gap}}" name="graduation_degree_year_gap">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>GPA Score</label>
                                    <input class="form-control" type="text" value="{{$calculators->graduation_degree_gpa}}" name="graduation_degree_gpa">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row custom-box " id="">
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Post Graduation - Master Degree
                                    </label>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="PG1" name="post_graduation[]" value="MBA" {{ (is_array($calculators->post_graduation) and in_array("MBA", $calculators->post_graduation)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="PG1"> MBA</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="PG2" name="post_graduation[]" value="M.Com" {{ (is_array($calculators->post_graduation) and in_array("M.Com", $calculators->post_graduation)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="PG2"> M.Com</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="PG3" name="post_graduation[]" value="M.Sc" {{ (is_array($calculators->post_graduation) and in_array("M.Sc", $calculators->post_graduation)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="PG3"> M.Sc</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="PG4" name="post_graduation[]" value="B.Tech/M.Tech" {{ (is_array($calculators->post_graduation) and in_array("B.Tech/M.Tech", $calculators->post_graduation)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="PG4">B.Tech/M.Tech</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="PG5" name="post_graduation[]" value="Other" {{ (is_array($calculators->post_graduation) and in_array("Other", $calculators->post_graduation)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="PG5"> Other if Any</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Year of Completion</label>
                                    <input class="form-control" type="text" value="{{$calculators->post_graduation_year_completion}}" name="post_graduation_year_completion">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Course Duration</label>
                                    <input class="form-control" type="text" value="{{$calculators->post_graduation_course_duration}}" name="post_graduation_course_duration">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Major Subjects</label>
                                    <input class="form-control" type="text" value="{{$calculators->post_graduation_major_subject}}" name="post_graduation_major_subject">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Years of Gap till Date</label>
                                    <input class="form-control" type="text" value="{{$calculators->post_graduation_year_gap}}" name="post_graduation_year_gap">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>GPA Score</label>
                                    <input class="form-control" type="text" value="{{$calculators->post_graduation_gpa}}" name="post_graduation_gpa">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row custom-box " id="">
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Have you attempted IELTS?
                                    </label>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="IELTS1" name="IELTS[]" value="yes" {{ (is_array($calculators->IELTS) and in_array("yes", $calculators->IELTS)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="IELTS1"> Yes</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="IELTS2" name="IELTS[]" value="no" {{ (is_array($calculators->IELTS) and in_array("no", $calculators->IELTS)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="IELTS2">No</label>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Listening</label>
                                    <input class="form-control" type="text" value="{{$calculators->IELTS_listening}}" name="IELTS_listening">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Reading</label>
                                    <input class="form-control" type="text" value="{{$calculators->IELTS_reading}}" name="IELTS_reading">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Writing</label>
                                    <input class="form-control" type="text" value="{{$calculators->IELTS_writing}}" name="IELTS_writing">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Speaking</label>
                                    <input class="form-control" type="text" value="{{$calculators->IELTS_speaking}}" name="IELTS_speaking">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Overall Score</label>
                                    <input class="form-control" type="text" value="{{$calculators->IELTS_overall_score}}" name="IELTS_overall_score">
                                </div>
                            </div>
                        </div>
                        <div class="float-right">
                            <button class="sc-button sc-button-success sc-js-button-wave-light waves-effect waves-button waves-light" type="submit">Submit</button>

                            <button type="button" class="client-btn bmenu uk-button uk-button-primary">Next </button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </li>
        <li id='menu1' class='tab-pane '>
            <div class='uk-card col-md-10 ' style="margin-left:auto !important;margin-right:auto !important">
                <div class="uk-card-body sc-padding-medium">
                    <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                        <div id="add_employment_row">
                            @if($employments)
                            @foreach($employments as $row)
                            <div id="inputFormRow">

                                <div class="row custom-box " id="">

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Employment (Employer Name)</label>
                                            <input class="form-control" type="text" value="{{$row->employer_name}}" name="employer_name[]">
                                            <input type="text" value="no" name="is_employer[]" hidden>
                                            <input type="text" value="{{$row->id}}" name="employmentsId[]" hidden>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Job Title or Description</label>
                                            <input class="form-control" type="text" value="{{$row->job_tittle}}" name="job_tittle[]">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Job Field</label>
                                            <input class="form-control" type="text" value="{{$row->job_field}}" name="job_field[]">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>Years of Job Work Experience</label>
                                            <input class="form-control" type="text" value="{{$row->year_job_work}}" name="year_job_work[]">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>From Year</label>
                                            <input class="form-control" type="text" value="{{$row->from_year_job}}" name="from_year_job[]">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                            <label>To Year</label>
                                            <input class="form-control" type="text" value="{{$row->to_year_job}}" name="to_year_job[]">
                                        </div>
                                    </div>
                                </div>
                                <div class="float-right">

                                    <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeRow" style="background:#bf0010 !important;margin-top:7.5%"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> Remove</a></button>

                                </div>
                                <br>
                                <hr>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <button id="add_employment" type="button" class="btn uk-button uk-button-primary">Add Employment</button>
                        <hr>
                        <div id="add_TC_row">
                            @if($technicalCertifications)
                            @foreach($technicalCertifications as $row)
                            <div id="inputFormRow">

                                <div class="row custom-box " id="">

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Technical Certification (Name of Certificate)</label>
                                            <input class="form-control" type="text" value="{{$row->technical_certification_name}}" name="technical_certification_name[]">
                                            <input type="text" value="no" name="is_technical_certification[]" hidden>
                                            <input type="text" value="{{$row->id}}" name="technicalCertificationsId[]" hidden>


                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Certificate Specialization</label>
                                            <input class="form-control" type="text" value="{{$row->certificate_specialization}}" name="certificate_specialization[]">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Course Duration</label>
                                            <input class="form-control" type="text" value="{{$row->technical_certification_course_duration}}" name="technical_certification_course_duration[]">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Grade/Score</label>
                                            <input class="form-control" type="text" value="{{$row->technical_certification_grade}}" name="technical_certification_grade[]">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Year of Completion</label>
                                            <input class="form-control" type="text" value="{{$row->technical_certification_year_completion}}" name="technical_certification_year_completion[]">
                                        </div>
                                    </div>

                                </div>
                                <div class="float-right">

                                    <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeRow1" style="background:#bf0010 !important;margin-top:7.5%"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> Remove</a></button>

                                </div>
                                <br>
                                <hr>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <button id="add_TC" type="button" class="btn uk-button uk-button-primary">Add Technical Certification</button>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Have you been Rejected by any College or University in the Past?
                                    </label>
                                    <div class="col-lg-2 col-md-2 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input" id="Past" name="is_rejected_college" value="yes" {{ $calculators->is_rejected_college == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Past">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="Past2" name="is_rejected_college" value="no" {{ $calculators->is_rejected_college == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Past2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>If Yes, Specify the Reason for rejection</label>
                                    <input class="form-control" type="text" value="{{$calculators->rejected_college_reason}}" name="rejected_college_reason">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Specify the Year of Rejection</label>
                                    <input class="form-control" type="text" value="{{$calculators->rejected_college_year}}" name="rejected_college_year">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Have you been Rejected for Study Visa or Immigration or any Visa in the past?
                                    </label>
                                    <div class="col-lg-2 col-md-2 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="Pasttt" name="is_rejected_visa_past" value="yes" {{ $calculators->is_rejected_visa_past == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Pasttt">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="Past2" name="is_rejected_visa_past" value="no" {{ $calculators->is_rejected_visa_past == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Past2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>If Yes, Specify the Reason for rejection</label>
                                    <input class="form-control" type="text" value="{{$calculators->rejected_visa_reason_past}}" name="rejected_visa_reason_past">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Specify the Year of Rejection</label>
                                    <input class="form-control" type="text" value="{{$calculators->rejected_visa_year_past}}" name="rejected_visa_year_past">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Have you been Rejected for Study Visa or Immigration or any Visa in the past for USA?
                                    </label>
                                    <div class="col-lg-2 col-md-2 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="Pastt" name="is_rejected_visa" value="yes" {{ $calculators->is_rejected_visa == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Pastt">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="Pastt2" name="is_rejected_visa" value="no" {{ $calculators->is_rejected_visa == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Pastt2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>If Yes, Specify the Reason for rejection</label>
                                    <input class="form-control" type="text" value="{{$calculators->rejected_visa_reason}}" name="rejected_visa_reason">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Specify the Year of Rejection</label>
                                    <input class="form-control" type="text" value="{{$calculators->rejected_visa_year}}" name="rejected_visa_year">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Have you created EOI Profile in the past? If Yes, Valid up to?
                                    </label>
                                    <div class="col-lg-2 col-md-2 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="Pastt" name="EOI_profile" value="yes" {{ $calculators->EOI_profile == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Pastt">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="Pastt2" name="EOI_profile" value="no" {{ $calculators->EOI_profile == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Pastt2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Have you created Provincial Profile in the past? If Yes, Valid up to?
                                    </label>
                                    <div class="col-lg-2 col-md-2 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="Pastt" name="Provincial_profile" value="yes" {{ $calculators->Provincial_profile == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Pastt">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="Pastt2" name="Provincial_profile" value="no" {{ $calculators->Provincial_profile == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Pastt2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="float-right">
                            <button class="sc-button sc-button-success sc-js-button-wave-light waves-effect waves-button waves-light" type="submit">Submit</button>
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

</form>

<script>
    $(document).ready(function() {

        $(".bmenu").click(function() {
            $('.nav-linkk').removeClass('uk-active');
            $('#amenu1').addClass('uk-active');
            $('.tab-pane').removeClass('uk-active');
            $('#menu1').addClass('uk-active');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        $(".bmenu1").click(function() {
            $('.nav-linkk').removeClass('uk-active');
            $('#amenu2').addClass('uk-active');
            $('.tab-pane').removeClass('uk-active');
            $('#menu2').addClass('uk-active');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        $("#add_employment").click(function() {

            var html = '';

            html = `<div  id="inputFormRow">
           
                         <div class="row custom-box " id="">

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Employment (Employer Name)</label>
                                    <input class="form-control" type="text" value="{{old('employer_name')}}" name="employer_name[]" >
                                    <input type="text" value="yes" name="is_employer[]" hidden>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Job Title or Description</label>
                                    <input class="form-control" type="text" value="{{old('job_tittle')}}" name="job_tittle[]">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Job Field</label>
                                    <input class="form-control" type="text" value="{{old('job_field')}}" name="job_field[]">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Years of Job Work Experience</label>
                                    <input class="form-control" type="text" value="{{old('year_job_work')}}" name="year_job_work[]">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>From Year</label>
                                    <input class="form-control" type="text" value="{{old('from_year_job')}}" name="from_year_job[]">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>To Year</label>
                                    <input class="form-control" type="text" value="{{old('to_year_job')}}" name="to_year_job[]">
                                </div>
                            </div>
                        </div>
                        <div class="float-right">
                              
                               <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeRow" style="background:#bf0010 !important;margin-top:7.5%"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> Remove</a></button>

                        </div>
                       <br><hr>
                    </div>`

            $('#add_employment_row').append(html);


        });

        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
        });

        $("#add_TC").click(function() {

            var html = '';

            html = `<div  id="inputFormRow">
                       
                         <div class="row custom-box " id="">

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Technical Certification (Name of Certificate)</label>
                                        <input class="form-control" type="text" value="{{old('technical_certification_name')}}" name="technical_certification_name[]">
                                        <input type="text" value="yes" name="is_technical_certification[]" hidden>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Certificate Specialization</label>
                                        <input class="form-control" type="text" value="{{old('certificate_specialization')}}" name="certificate_specialization[]">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Course Duration</label>
                                        <input class="form-control" type="text" value="{{old('technical_certification_course_duration')}}" name="technical_certification_course_duration[]">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Grade/Score</label>
                                        <input class="form-control" type="text" value="{{old('technical_certification_grade')}}" name="technical_certification_grade[]">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Year of Completion</label>
                                        <input class="form-control" type="text" value="{{old('technical_certification_year_completion')}}" name="technical_certification_year_completion[]">
                                    </div>
                                </div>

                            </div>
                        <div class="float-right">
                              
                               <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeRow1" style="background:#bf0010 !important;margin-top:7.5%"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> Remove</a></button>

                        </div>
                        <br>
                       <hr>
                    </div>`

            $('#add_TC_row').append(html);


        });

        $(document).on('click', '#removeRow1', function() {
            $(this).closest('#inputFormRow').remove();
        });

    });
</script>
@endsection