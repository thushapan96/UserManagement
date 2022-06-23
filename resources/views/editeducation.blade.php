@extends('layouts.layoutss')
@section('content')
<form action="{{route('update.education')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class='col-md-10 ' style="margin-left:auto !important;margin-right:auto !important">
        <h3 class="" style="text-align:center">Edit Assessment for Overseas Education - Canada</h3>

    </div>

    <u1 class="col-md-4" data-uk-tab="animation: uk-animation-scale-up" style="margin-left:auto !important;margin-right:auto !important">
        <li class="nav-linkk " id="amenu"><a style="cursor:pointer;padding: 0.5rem 2rem;" aria-current="page">tab1 </a></li>
        <li class="nav-linkk " id="amenu1"><a style="cursor:pointer;padding: 0.5rem  2rem;">tab2 </a></li>
        <li class="nav-linkk " id="amenu2"><a style="cursor:pointer;padding: 0.5rem  2rem;">tab3</a></li>
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
                                    <input class="form-control" type="text" name="first_name" value="{{$educations->first_name}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" value="{{$educations->last_name}}" name="last_name">
                                </div>

                            </div>
                        </div>
                        <div class="row custom-box " id="">

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input class="form-control" type="text" value="{{$educations->age}}" name="age">
                                    <small>Number of Years</small>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input class="form-control" type="text" value="{{$educations->gender}}" name="gender">
                                    <small>Male/Female</small>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Email address for correspondence</label>
                                    <input class="form-control" type="text" value="{{$educations->email}}" name="email">
                                    <small>Valid Email Address</small>
                                </div>
                            </div>
                        </div>
                        <div class="row custom-box " id="">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>City </label>
                                    <input class="form-control" type="text" value="{{$educations->city}}" name="city" id="pac-input1">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Country of Citizenship</label>
                                    <input class="form-control" type="text" value="{{$educations->country_citizen}}" name="country_citizen" id="pac-input2">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Country of Residence</label>
                                    <input class="form-control" type="text" value="{{$educations->country_residence}}" name="country_residence" id="pac-input3">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input class="form-control" type="text" value="{{$educations->phone}}" name="phone">

                                </div>
                            </div>
                        </div>
                        <div class="row custom-box " id="">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Enrollment Request</label>

                                    <select class="form-control" name="enrollment_request">
                                        <option value="Graduation" {{$educations->enrollment_request == 'Graduation' ? 'selected':''}}>Graduation</option>
                                        <option value="Post Graduation" {{$educations->enrollment_request == 'Post Graduation' ? 'selected':''}}>Post Graduation</option>
                                        <option value="Doctorate" {{$educations->enrollment_request  == 'Doctorate' ? 'selected':''}}>Doctorate</option>
                                        <option value="PG Diploma" {{$educations->enrollment_request  == 'PG Diploma' ? 'selected':''}}>PG Diploma</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-12">
                                <div class="form-group">
                                    <label>Remarks/Comments if any</label>

                                    <textarea class="form-control" style="width:100%;" name="enrollment_request_comment" value="{{$educations->enrollment_request_comment}}">{{$educations->enrollment_request_comment}}</textarea>

                                </div>
                            </div>
                        </div>
                        <hr>
                        <h6>Secondary School Certificate -10th/SSC</h6>
                        <div class="row custom-box " id="">

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Year of Completion</label>
                                    <input class="form-control" type="text" value="{{$educations->secondary_year_completion}}" name="secondary_year_completion">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Name of the Board for 10th or SSC</label>
                                    <input class="form-control" type="text" value="{{$educations->secondary_board_name}}" name="secondary_board_name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Total Marks in % (Percentage)</label>
                                    <input class="form-control" type="text" value="{{$educations->secondary_total_mark}}" name="secondary_total_mark">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h6>Intermediate Certificate - 10 + 2</h6>
                        <div class="row custom-box " id="">

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Year of Completion</label>
                                    <input class="form-control" type="text" value="{{$educations->intermediate_certificate_year}}" name="intermediate_certificate_year">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Name of the Board for 10+2</label>
                                    <input class="form-control" type="text" value="{{$educations->intermediate_board_name}}" name="intermediate_board_name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Total Marks in % (Percentage)</label>
                                    <input class="form-control" type="text" value="{{$educations->intermediate_total_mark}}" name="intermediate_total_mark">
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
                                        <input class="custom-control-input" type="checkbox" id="GD1" name="graduation_degree[]" value="BA" {{ (is_array($educations->graduation_degree) and in_array("BA", $educations->graduation_degree)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="GD1"> BA</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="GD2" name="graduation_degree[]" value="B.Com" {{ (is_array($educations->graduation_degree) and in_array("B.Com", $educations->graduation_degree)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="GD2"> B.Com</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="GD3" name="graduation_degree[]" value="B.Sc" {{ (is_array($educations->graduation_degree) and in_array("B.Sc", $educations->graduation_degree)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="GD3"> B.Sc</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="GD4" name="graduation_degree[]" value="B.E" {{ (is_array($educations->graduation_degree) and in_array("B.E", $educations->graduation_degree)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="GD4"> B.E</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="GD5" name="graduation_degree[]" value="Other" {{ (is_array($educations->graduation_degree) and in_array("Other", $educations->graduation_degree)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="GD5"> Other if Any</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Year of Completion</label>
                                    <input class="form-control" type="text" value="{{$educations->graduation_degree_year_completion}}" name="graduation_degree_year_completion">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Course Duration</label>
                                    <input class="form-control" type="text" value="{{$educations->graduation_degree_course_duration}}" name="graduation_degree_course_duration">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Major Subjects</label>
                                    <input class="form-control" type="text" value="{{$educations->graduation_degree_major_subject}}" name="graduation_degree_major_subject">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Years of Gap till Date</label>
                                    <input class="form-control" type="text" value="{{$educations->graduation_degree_year_gap}}" name="graduation_degree_year_gap">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>GPA Score</label>
                                    <input class="form-control" type="text" value="{{$educations->graduation_degree_gpa}}" name="graduation_degree_gpa">
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
                                        <input class="custom-control-input" type="checkbox" id="PG1" name="post_graduation[]" value="MBA" {{ (is_array($educations->post_graduation) and in_array("MBA", $educations->post_graduation)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="PG1"> MBA</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="PG2" name="post_graduation[]" value="M.Com" {{ (is_array($educations->post_graduation) and in_array("M.Com", $educations->post_graduation)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="PG2"> M.Com</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="PG3" name="post_graduation[]" value="M.Sc" {{ (is_array($educations->post_graduation) and in_array("M.Sc", $educations->post_graduation)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="PG3"> M.Sc</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="PG4" name="post_graduation[]" value="B.Tech/M.Tech" {{ (is_array($educations->post_graduation) and in_array("B.Tech/M.Tech", $educations->post_graduation)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="PG4">B.Tech/M.Tech</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="PG5" name="post_graduation[]" value="Other" {{ (is_array($educations->post_graduation) and in_array("Other", $educations->post_graduation)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="PG5"> Other if Any</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Year of Completion</label>
                                    <input class="form-control" type="text" value="{{$educations->post_graduation_year_completion}}" name="post_graduation_year_completion">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Course Duration</label>
                                    <input class="form-control" type="text" value="{{$educations->post_graduation_course_duration}}" name="post_graduation_course_duration">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Major Subjects</label>
                                    <input class="form-control" type="text" value="{{$educations->post_graduation_major_subject}}" name="post_graduation_major_subject">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Years of Gap till Date</label>
                                    <input class="form-control" type="text" value="{{$educations->post_graduation_year_gap}}" name="post_graduation_year_gap">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>GPA Score</label>
                                    <input class="form-control" type="text" value="{{$educations->post_graduation_gpa}}" name="post_graduation_gpa">
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
                        <div class="row custom-box">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">

                                    <label>Write your Interest to pursue Higher education along with Major Subject/Discipline, provide information wherever necessary:</label>
                                    <textarea class="form-control" style="width:100%" name="interest_pursue_higher_education">{{$educations->interest_pursue_higher_education}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row custom-box " id="">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Degree – 4 Years</label>
                                    <input class="form-control" type="text" value="{{$educations->degree_year}}" name="degree_year">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Master Degree – 2 Years</label>
                                    <input class="form-control" type="text" value="{{$educations->master_degree_year}}" name="master_degree_year">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>PhD – 3 Years</label>
                                    <input class="form-control" type="text" value="{{$educations->phd_year}}" name="phd_year">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>PG Diploma – 1 Year</label>
                                    <input class="form-control" type="text" value="{{$educations->pg_diploma_year}}" name="pg_diploma_year">
                                </div>
                            </div>
                        </div>
                        <div class="row custom-box " id="">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Preferred College if any</label>
                                    <input class="form-control" type="text" value="{{$educations->preferred_college}}" name="preferred_college">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Preferred University If Any</label>
                                    <input class="form-control" type="text" value="{{$educations->preferred_university}}" name="preferred_university">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Preferred State if any</label>
                                    <input class="form-control" type="text" value="{{$educations->preferred_State}}" name="preferred_State">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Preferred Province if Any</label>
                                    <input class="form-control" type="text" value="{{$educations->preferred_region}}" name="preferred_region">
                                </div>
                            </div>
                        </div>
                        <div class="row custom-box " id="">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Preferred City if Any</label>
                                    <input class="form-control" type="text" value="{{$educations->preferred_city}}" name="preferred_city">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Preferred Mode of Education</label>
                                    <select class="form-control" name="communication_mode">
                                        <option value="In Campus" {{$educations->communication_mode == 'In Campus' ? 'selected':''}}>In Campus</option>
                                        <option value="Off Campus" {{$educations->communication_mode == 'Off Campus' ? 'selected':''}}>Off Campus</option>
                                        <option value="Online" {{$educations->communication_mode == 'Online' ? 'selected':''}}>Online</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Preferred Intake
                                    </label>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Intake1" name="preferred_intake[]" value="January" {{ (is_array($educations->preferred_intake) and in_array("January", $educations->preferred_intake)) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="Intake1"> January</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Intake2" name="preferred_intake[]" value="May" {{ (is_array($educations->preferred_intake) and in_array("May", $educations->preferred_intake)) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="Intake2"> May</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Intake3" name="preferred_intake[]" value="September" {{ (is_array($educations->preferred_intake) and in_array("September", $educations->preferred_intake)) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="Intake3">September</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Intake4" name="preferred_intake[]" value="Other" {{ (is_array($educations->preferred_intake) and in_array("Other", $educations->preferred_intake)) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="Intake4"> Other</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="float-right">
                            <button class="sc-button sc-button-success sc-js-button-wave-light waves-effect waves-button waves-light" type="submit">Submit</button>

                            <button type="button" class="client-btn bmenu1 uk-button uk-button-primary">Next </button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </li>
        <li id='menu2' class='tab-pane '>
            <div class='uk-card col-md-10 ' style="margin-left:auto !important;margin-right:auto !important">
                <div class="uk-card-body sc-padding-medium">
                    <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Have you been Rejected by any College or University in the Past?
                                    </label>
                                    <div class="col-lg-2 col-md-2 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input" id="Past" name="is_rejected_college" value="yes" {{ $educations->is_rejected_college == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Past">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="Past2" name="is_rejected_college" value="no" {{ $educations->is_rejected_college == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Past2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>If Yes, Specify the Reason for rejection</label>
                                    <input class="form-control" type="text" value="{{$educations->rejected_college_reason}}" name="rejected_college_reason">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Specify the Year of Rejection</label>
                                    <input class="form-control" type="text" value="{{$educations->rejected_college_year}}" name="rejected_college_year">
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
                                            <input type="radio" class="custom-control-input " id="Pasttt" name="is_rejected_visa_past" value="yes" {{ $educations->is_rejected_visa_past == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Pasttt">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="Past2" name="is_rejected_visa_past" value="no" {{ $educations->is_rejected_visa_past == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Past2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>If Yes, Specify the Reason for rejection</label>
                                    <input class="form-control" type="text" value="{{$educations->rejected_visa_reason_past}}" name="rejected_visa_reason_past">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Specify the Year of Rejection</label>
                                    <input class="form-control" type="text" value="{{$educations->rejected_visa_year_past}}" name="rejected_visa_year_past">
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
                                            <input type="radio" class="custom-control-input " id="Pastt" name="is_rejected_visa" value="yes" {{ $educations->is_rejected_visa == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Pastt">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="Pastt2" name="is_rejected_visa" value="no" {{ $educations->is_rejected_visa == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Pastt2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>If Yes, Specify the Reason for rejection</label>
                                    <input class="form-control" type="text" value="{{$educations->rejected_visa_reason}}" name="rejected_visa_reason">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Specify the Year of Rejection</label>
                                    <input class="form-control" type="text" value="{{$educations->rejected_visa_year}}" name="rejected_visa_year">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row custom-box " id="">
                            <div class="col-lg-7 col-md-7 col-12">
                                <div class="form-group">
                                    <label>Prerequisite and Document Checklist:
                                    </label>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Prerequisite" name="prerequisite_document[]" value="Birth Certificate" {{ (is_array($educations->prerequisite_document) and in_array("January", $educations->prerequisite_document)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="Prerequisite">Do you have a proof of Documents for Birth Certificate?</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Prerequisite1" name="prerequisite_document[]" value="SSC" {{ (is_array($educations->prerequisite_document) and in_array("SSC", $educations->prerequisite_document)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="Prerequisite1"> Do you have a proof of Documents for the previous education- SSC?</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Prerequisite2" name="prerequisite_document[]" value="Intermediate" {{ (is_array($educations->prerequisite_document) and in_array("Intermediate", $educations->prerequisite_document)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="Prerequisite2"> Do you have a proof of Documents for the previous education - Intermediate?</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Prerequisite3" name="prerequisite_document[]" value="Graduation" {{ (is_array($educations->prerequisite_document) and in_array("Graduation", $educations->prerequisite_document)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="Prerequisite3">Do you have a proof of Documents for the previous education - Graduation? If Applicable</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Prerequisite4" name="prerequisite_document[]" value="Post Graduation" {{ (is_array($educations->prerequisite_document) and in_array("Post Graduation", $educations->prerequisite_document)) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="Prerequisite4"> Do you have a proof of Documents for the previous education – Post Graduation? If Applicable</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row custom-box " id="">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Is your ECA (Education Certificate Assessment) completed from WES/IQAS/ICES/CES/etc.. If "YES" specify name of the Organization and Valid Upto?</label>

                                    <textarea class="form-control" style="width:100%;" name="eca">{{$educations->eca}}</textarea>

                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Is your Passport Valid for another 6 Months?
                                    </label>
                                    <div class="col-lg-2 col-md-2 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input" id="Passport" name="passport_valid" value="yes" {{ $educations->passport_valid == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Passport">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-2">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input" id="Passport2" name="passport_valid" value="no" {{ $educations->passport_valid == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Passport2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Have you attempted IELTS academic in the past? If Yes, Valid up to?
                                    </label>
                                    <div class="col-lg-2 col-md-2 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="academic " name="IELTS_attempted" value="yes" {{ $educations->IELTS_attempted == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="academic ">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="academic 2" name="IELTS_attempted" value="no" {{ $educations->IELTS_attempted == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="academic 2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Have you attempted GRE in the past? If Yes, Valid up to?
                                    </label>
                                    <div class="col-lg-2 col-md-2 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="GRE" name="GRE_attempted" value="yes" {{ $educations->GRE_attempted == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="GRE">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="GRE2" name="GRE_attempted" value="no" {{ $educations->GRE_attempted == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="GRE2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Have you attempted TOEFL academic in the past? If Yes, Valid up to?
                                    </label>
                                    <div class="col-lg-2 col-md-2 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="TOEFL " name="TOEFL_attempted" value="yes" {{ $educations->TOEFL_attempted == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="TOEFL ">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="TOEFL2" name="TOEFL_attempted" value="no" {{ $educations->TOEFL_attempted == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="TOEFL2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Have you attempted GMAT academic in the past? If Yes, Valid up to?
                                    </label>
                                    <div class="col-lg-2 col-md-2 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="GMAT" name="GMAT_attempted" value="yes" {{ $educations->GMAT_attempted == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="GMAT">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="GMAT2" name="GMAT_attempted" value="no" {{ $educations->GMAT_attempted == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="GMAT2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Are you interested to Attempt GRE/TOEFL/GMAT/SAT if required to fulfil the University/College eligibility criteria?
                                    </label>
                                    <div class="col-lg-2 col-md-2 col-2 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="interested" name="interested_attempted" value="yes" {{ $educations->interested_attempted == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="interested">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="interested2" name="interested_attempted" value="no" {{ $educations->interested_attempted == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="interested2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12 ">
                                <div class="form-group">
                                    <label>Remarks/Comments if any</label>

                                    <textarea class="form-control" rows="6" style="width:100%;" name="feedback">{{$educations->feedback}}</textarea>

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
<div id="map" style=" height: 500px; width:100%"> </div>

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
                                    <input class="form-control" type="text" value="" name="employer_name[]" >
                                    <input type="text" value="yes" name="is_employer[]" hidden>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Job Title or Description</label>
                                    <input class="form-control" type="text" value="" name="job_tittle[]">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Job Field</label>
                                    <input class="form-control" type="text" value="" name="job_field[]">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Years of Job Work Experience</label>
                                    <input class="form-control" type="text" value="" name="year_job_work[]">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>From Year</label>
                                    <input class="form-control" type="text" value="" name="from_year_job[]">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>To Year</label>
                                    <input class="form-control" type="text" value="" name="to_year_job[]">
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
                                        <input class="form-control" type="text" value="" name="technical_certification_name[]">
                                        <input type="text" value="yes" name="is_technical_certification[]" hidden>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Certificate Specialization</label>
                                        <input class="form-control" type="text" value="" name="certificate_specialization[]">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Course Duration</label>
                                        <input class="form-control" type="text" value="" name="technical_certification_course_duration[]">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Grade/Score</label>
                                        <input class="form-control" type="text" value="" name="technical_certification_grade[]">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Year of Completion</label>
                                        <input class="form-control" type="text" value="" name="technical_certification_year_completion[]">
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX4GRZHCs7t1pkpjrRaLoTlCgqX8o46wY&libraries=places&callback=initMap&libraries=places&v=weekly" defer></script>
<script>
    //.......................current location......................

    $(document).ready(function() {

        "use strict";
        $('#map').hide();

        initMap();

        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: -33.8688,
                    lng: 151.2195,
                },
                zoom: 13,
            });
            const card = document.getElementById("pac-card");
            console.log(card);
            console.log("hi");

            for (let i = 1; i < 4; i++) {
                const input = $('#pac-input' + i)[0];
                new google.maps.places.Autocomplete(input).bindTo("bounds", map);
                console.log("hi");

            }



            const infowindow = new google.maps.InfoWindow();
            const infowindowContent = document.getElementById("infowindow-content");
            infowindow.setContent(infowindowContent);
            const marker = new google.maps.Marker({
                map,
                anchorPoint: new google.maps.Point(0, -29),
            });

        }


    });
</script>
@endsection