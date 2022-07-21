@extends('layouts.layoutss')
@section('content')
<form action="{{route('add.education')}}" method="post" enctype="multipart/form-data">

    @csrf
    <div class='col-md-10 ' style="margin-left:auto !important;margin-right:auto !important">
        <h5 class="" style="text-align:center;color:#3f6791">Assessment Form for Education - Canada</h5>

    </div>

    <u1 class="col-md-4" data-uk-tab="animation: uk-animation-scale-up" style="margin-left:auto !important;margin-right:auto !important">
        <li class="nav-linkk " id="amenu"><a style="cursor:pointer;padding: 0.5rem 2rem;" aria-current="page">tab1 </a></li>
        <li class="nav-linkk " id="amenu1"><a style="cursor:pointer;padding: 0.5rem  2rem;">tab2 </a></li>
        <li class="nav-linkk " id="amenu2"><a style="cursor:pointer;padding: 0.5rem  2rem;">tab3</a></li>
    </u1>
    <div class='col-md-10 ' style="margin-left:auto !important;margin-right:auto !important">
        <p>Candidates to provide correct information. We will assist and recommend based on your previous educational qualification and interest. All Universities and Colleges required IELTS Academic but some Universities also required GRE/TOEFL/GMAT/SAT in addition to IELTS. </p>
    </div>
    <u1 class="uk-switcher">
        <li id='menu' class='tab-pane '>
            <div class='uk-card col-md-10 ' style="margin-left:auto !important;margin-right:auto !important">
                <div class="uk-card-body sc-padding-medium">
                    <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                        <div class="row custom-box " id="">

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>First Name </label>
                                    <input class="form-control" type="text" name="first_name" value="{{old('first_name')}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" value="{{old('last_name')}}" name="last_name">
                                </div>

                            </div>
                        </div>
                        <div class="row custom-box " id="">

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input class="form-control" type="text" value="{{old('age')}}" name="age">
                                    <small>Number of Years</small>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input class="form-control" type="text" value="{{old('gender')}}" name="gender">
                                    <small>Male/Female</small>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Email address for correspondence</label>
                                    <input class="form-control" type="text" value="{{old('email')}}" name="email">
                                    <small>Valid Email Address</small>
                                </div>
                            </div>
                        </div>
                        <div class="row custom-box " id="">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>City </label>
                                    <input class="form-control" type="text" id="pac-input1" value="{{old('city')}}" name="city">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Country of Citizenship</label>
                                    <input class="form-control" type="text" id="pac-input2" value="{{old('country_citizen')}}" name="country_citizen">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Country of Residence</label>
                                    <input class="form-control" type="text" id="pac-input3" value="{{old('country_residence')}}" name="country_residence">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input class="form-control" type="text" value="{{old('phone')}}" name="phone">

                                </div>
                            </div>
                        </div>
                        <div class="row custom-box " id="">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Enrollment Request</label>

                                    <select class="form-control" name="enrollment_request">
                                        <option value="Graduation" {{old('enrollment_request') == 'Graduation' ? 'selected':''}}>Graduation</option>
                                        <option value="Post Graduation" {{old('enrollment_request') == 'Post Graduation' ? 'selected':''}}>Post Graduation</option>
                                        <option value="Doctorate" {{old('enrollment_request') == 'Doctorate' ? 'selected':''}}>Doctorate</option>
                                        <option value="PG Diploma" {{old('enrollment_request') == 'PG Diploma' ? 'selected':''}}>PG Diploma</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-12">
                                <div class="form-group">
                                    <label>Remarks/Comments if any</label>

                                    <textarea class="form-control" style="width:100%;" name="enrollment_request_comment" value="{{old('enrollment_request_comment')}}">{{old('enrollment_request_comment')}}</textarea>

                                </div>
                            </div>
                        </div>
                        <hr>
                        <h6>Secondary School Certificate -10th/SSC</h6>
                        <div class="row custom-box " id="">

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Year of Completion</label>
                                    <input class="form-control" type="text" value="{{old('secondary_year_completion')}}" name="secondary_year_completion">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Name of the Board for 10th or SSC</label>
                                    <input class="form-control" type="text" value="{{old('secondary_board_name')}}" name="secondary_board_name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Total Marks in % (Percentage)</label>
                                    <input class="form-control" type="text" value="{{old('secondary_total_mark')}}" name="secondary_total_mark">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h6>Intermediate Certificate - 10 + 2</h6>
                        <div class="row custom-box " id="">

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Year of Completion</label>
                                    <input class="form-control" type="text" value="{{old('intermediate_certificate_year')}}" name="intermediate_certificate_year">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Name of the Board for 10+2</label>
                                    <input class="form-control" type="text" value="{{old('intermediate_board_name')}}" name="intermediate_board_name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Total Marks in % (Percentage)</label>
                                    <input class="form-control" type="text" value="{{old('intermediate_total_mark')}}" name="intermediate_total_mark">
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
                                        <input class="custom-control-input" type="checkbox" id="GD1" name="graduation_degree[]" value="BA" {{ (is_array(old('graduation_degree')) and in_array("BA", old('graduation_degree'))) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="GD1"> BA</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="GD2" name="graduation_degree[]" value="B.Com" {{ (is_array(old('graduation_degree')) and in_array("B.Com", old('graduation_degree'))) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="GD2"> B.Com</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="GD3" name="graduation_degree[]" value="B.Sc" {{ (is_array(old('graduation_degree')) and in_array("B.Sc", old('graduation_degree'))) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="GD3"> B.Sc</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="GD4" name="graduation_degree[]" value="B.E" {{ (is_array(old('graduation_degree')) and in_array("B.E", old('graduation_degree'))) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="GD4"> B.E</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="GD5" name="graduation_degree[]" value="Other" {{ (is_array(old('graduation_degree')) and in_array("Other", old('graduation_degree'))) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="GD5"> Other if Any</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Year of Completion</label>
                                    <input class="form-control" type="text" value="{{old('graduation_degree_year_completion')}}" name="graduation_degree_year_completion">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Course Duration</label>
                                    <input class="form-control" type="text" value="{{old('graduation_degree_course_duration')}}" name="graduation_degree_course_duration">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Major Subjects</label>
                                    <input class="form-control" type="text" value="{{old('graduation_degree_major_subject')}}" name="graduation_degree_major_subject">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Years of Gap till Date</label>
                                    <input class="form-control" type="text" value="{{old('graduation_degree_year_gap')}}" name="graduation_degree_year_gap">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>GPA Score</label>
                                    <input class="form-control" type="text" value="{{old('graduation_degree_gpa')}}" name="graduation_degree_gpa">
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
                                        <input class="custom-control-input" type="checkbox" id="PG1" name="post_graduation[]" value="MBA" {{ (is_array(old('post_graduation')) and in_array("MBA", old('post_graduation'))) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="PG1"> MBA</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="PG2" name="post_graduation[]" value="M.Com" {{ (is_array(old('post_graduation')) and in_array("M.Com", old('post_graduation'))) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="PG2"> M.Com</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="PG3" name="post_graduation[]" value="M.Sc" {{ (is_array(old('post_graduation')) and in_array("M.Sc", old('post_graduation'))) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="PG3"> M.Sc</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="PG4" name="post_graduation[]" value="B.Tech/M.Tech" {{ (is_array(old('post_graduation')) and in_array("B.Tech/M.Tech", old('post_graduation'))) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="PG4">B.Tech/M.Tech</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="PG5" name="post_graduation[]" value="Other" {{ (is_array(old('post_graduation')) and in_array("Other", old('post_graduation'))) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="PG5"> Other if Any</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Year of Completion</label>
                                    <input class="form-control" type="text" value="{{old('post_graduation_year_completion')}}" name="post_graduation_year_completion">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Course Duration</label>
                                    <input class="form-control" type="text" value="{{old('post_graduation_course_duration')}}" name="post_graduation_course_duration">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Major Subjects</label>
                                    <input class="form-control" type="text" value="{{old('post_graduation_major_subject')}}" name="post_graduation_major_subject">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>Years of Gap till Date</label>
                                    <input class="form-control" type="text" value="{{old('post_graduation_year_gap')}}" name="post_graduation_year_gap">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label>GPA Score</label>
                                    <input class="form-control" type="text" value="{{old('post_graduation_gpa')}}" name="post_graduation_gpa">
                                </div>
                            </div>
                        </div>
                        <div class="float-right">
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

                        </div>
                        <button id="add_employment" type="button" class="btn uk-button uk-button-primary">Add Employment</button>
                        <hr>
                        <div id="add_TC_row">

                        </div>
                        <button id="add_TC" type="button" class="btn uk-button uk-button-primary">Add Technical Certification</button>
                        <hr>
                        <div class="row custom-box">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">

                                    <label>Write your Interest to pursue Higher education along with Major Subject/Discipline, provide information wherever necessary:</label>
                                    <textarea class="form-control" style="width:100%" name="interest_pursue_higher_education">{{old('interest_pursue_higher_education')}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row custom-box " id="">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Degree – 4 Years</label>
                                    <input class="form-control" type="text" value="{{old('degree_year')}}" name="degree_year">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Master Degree – 2 Years</label>
                                    <input class="form-control" type="text" value="{{old('master_degree_year')}}" name="master_degree_year">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>PhD – 3 Years</label>
                                    <input class="form-control" type="text" value="{{old('phd_year')}}" name="phd_year">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>PG Diploma – 1 Year</label>
                                    <input class="form-control" type="text" value="{{old('pg_diploma_year')}}" name="pg_diploma_year">
                                </div>
                            </div>
                        </div>
                        <div class="row custom-box " id="">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Preferred College if any</label>
                                    <input class="form-control" type="text" value="{{old('preferred_college')}}" name="preferred_college">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Preferred University If Any</label>
                                    <input class="form-control" type="text" value="{{old('preferred_university')}}" name="preferred_university">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Preferred State if any</label>
                                    <input class="form-control" type="text" value="{{old('preferred_State')}}" name="preferred_State">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <label>Preferred Province if Any</label>
                                    <input class="form-control" type="text" value="{{old('preferred_region')}}" name="preferred_region">
                                </div>
                            </div>
                        </div>
                        <div class="row custom-box " id="">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Preferred City if Any</label>
                                    <input class="form-control" type="text" value="{{old('preferred_city')}}" name="preferred_city">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Preferred Mode of Education</label>
                                    <select class="form-control" name="communication_mode">
                                        <option value="In Campus" {{old('communication_mode') == 'In Campus' ? 'selected':''}}>In Campus</option>
                                        <option value="Off Campus" {{old('communication_mode') == 'Off Campus' ? 'selected':''}}>Off Campus</option>
                                        <option value="Online" {{old('communication_mode') == 'Online' ? 'selected':''}}>Online</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Preferred Intake
                                    </label>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Intake1" name="preferred_intake[]" value="January" {{ (is_array(old('preferred_intake')) and in_array("January", old('preferred_intake'))) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="Intake1"> January</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Intake2" name="preferred_intake[]" value="May" {{ (is_array(old('preferred_intake')) and in_array("May", old('preferred_intake'))) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="Intake2"> May</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Intake3" name="preferred_intake[]" value="September" {{ (is_array(old('preferred_intake')) and in_array("September", old('preferred_intake'))) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="Intake3">September</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Intake4" name="preferred_intake[]" value="Other" {{ (is_array(old('preferred_intake')) and in_array("Other", old('preferred_intake'))) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="Intake4"> Other</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="float-right">
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
                                            <input type="radio" class="custom-control-input" id="Pastis_rejected_college" name="is_rejected_college" value="yes" {{ old('is_rejected_college') == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Pastis_rejected_college">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="Past2is_rejected_college" name="is_rejected_college" value="no" {{ old('is_rejected_college') == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Past2is_rejected_college">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 Rejected_College d-none">
                                <div class="form-group">
                                    <label>If Yes, Specify the Reason for rejection</label>
                                    <input class="form-control" type="text" value="{{old('rejected_college_reason')}}" name="rejected_college_reason">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 Rejected_College d-none">
                                <div class="form-group">
                                    <label>Specify the Year of Rejection</label>
                                    <input class="form-control" type="text" value="{{old('rejected_college_year')}}" name="rejected_college_year">
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
                                            <input type="radio" class="custom-control-input " id="Pastttis_rejected_visa_past" name="is_rejected_visa_past" value="yes" {{ old('is_rejected_visa_past') == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Pastttis_rejected_visa_past">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="Past2is_rejected_visa_past" name="is_rejected_visa_past" value="no" {{ old('is_rejected_visa_past') == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Past2is_rejected_visa_past">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 Rejected_Visa d-none">
                                <div class="form-group">
                                    <label>If Yes, Specify the Reason for rejection</label>
                                    <input class="form-control" type="text" value="{{old('rejected_visa_reason_past')}}" name="rejected_visa_reason_past">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 Rejected_Visa d-none">
                                <div class="form-group">
                                    <label>Specify the Year of Rejection</label>
                                    <input class="form-control" type="text" value="{{old('rejected_visa_year_past')}}" name="rejected_visa_year_past">
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
                                            <input type="radio" class="custom-control-input " id="Pasttis_rejected_visa" name="is_rejected_visa" value="yes" {{ old('is_rejected_visa') == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Pasttis_rejected_visa">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="Pastt2is_rejected_visa" name="is_rejected_visa" value="no" {{ old('is_rejected_visa') == "no" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Pastt2is_rejected_visa">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 Rejected_Visa_Usa d-none">
                                <div class="form-group">
                                    <label>If Yes, Specify the Reason for rejection</label>
                                    <input class="form-control" type="text" value="{{old('rejected_visa_reason')}}" name="rejected_visa_reason">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 Rejected_Visa_Usa d-none">
                                <div class="form-group">
                                    <label>Specify the Year of Rejection</label>
                                    <input class="form-control" type="text" value="{{old('rejected_visa_year')}}" name="rejected_visa_year">
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
                                        <input class="custom-control-input" type="checkbox" id="Prerequisite" name="prerequisite_document[]" value="Birth Certificate" {{ (is_array(old('prerequisite_document')) and in_array("January", old('prerequisite_document'))) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="Prerequisite">Do you have a proof of Documents for Birth Certificate?</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Prerequisite1" name="prerequisite_document[]" value="SSC" {{ (is_array(old('prerequisite_document')) and in_array("SSC", old('prerequisite_document'))) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="Prerequisite1"> Do you have a proof of Documents for the previous education- SSC?</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Prerequisite2" name="prerequisite_document[]" value="Intermediate" {{ (is_array(old('prerequisite_document')) and in_array("Intermediate", old('prerequisite_document'))) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="Prerequisite2"> Do you have a proof of Documents for the previous education - Intermediate?</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Prerequisite3" name="prerequisite_document[]" value="Graduation" {{ (is_array(old('prerequisite_document')) and in_array("Graduation", old('prerequisite_document'))) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="Prerequisite3">Do you have a proof of Documents for the previous education - Graduation? If Applicable</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Prerequisite4" name="prerequisite_document[]" value="Post Graduation" {{ (is_array(old('prerequisite_document')) and in_array("Post Graduation", old('prerequisite_document'))) ? ' checked' : '' }}>
                                        <label class="custom-control-label" for="Prerequisite4"> Do you have a proof of Documents for the previous education – Post Graduation? If Applicable</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row custom-box " id="">


                            <label>Is your ECA (Education Certificate Assessment) completed from WES/IQAS/ICES/CES/etc.. If "YES" specify name of the Organization and Valid Upto?</label>
                            <div class="col-lg-6 col-md-6">
                                <input class="form-control" name="eca" value="{{old('eca')}}">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input class="form-control" type="date" id="Prerequisite4" name="eca_date" value="{{old('eca_date')}}">
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
                                            <input type="radio" class="custom-control-input" id="Passport" name="passport_valid" value="yes" {{ old('passport_valid') == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="Passport">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-2">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input" id="Passport2" name="passport_valid" value="no" {{ old('passport_valid') == "no" ? "checked":"" }}>
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
                                            <input type="radio" class="custom-control-input " id="academic" name="IELTS_attempted" value="yes" {{ old('IELTS_attempted') == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="academic">Yes</label>
                                        </div>
                                    </div>
                                    <div style="line-height:2">

                                        <div class="col-lg-3 col-md-2 col-3 ">
                                            <div class="custom-control custom-radio ">
                                                <input type="radio" class="custom-control-input " id="academic2" name="IELTS_attempted" value="no" {{ old('IELTS_attempted') == "no" ? "checked":"" }}>
                                                <label class="custom-control-label mt-1" for="academic2">No</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-12 d-none append_IELTS_attempted_date">

                                            <input type="date" class="form-control" name="IELTS_attempted_date" value="{{old('IELTS_attempted_date')}}">

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
                                            <input type="radio" class="custom-control-input " id="GRE" name="GRE_attempted" value="yes" {{ old('GRE_attempted') == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="GRE">Yes</label>
                                        </div>
                                    </div>
                                    <div style="line-height:2">

                                        <div class="col-lg-3 col-md-2 col-3 ">
                                            <div class="custom-control custom-radio ">
                                                <input type="radio" class="custom-control-input " id="GRE2" name="GRE_attempted" value="no" {{ old('GRE_attempted') == "no" ? "checked":"" }}>
                                                <label class="custom-control-label mt-1" for="GRE2">No</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-12 d-none append_GRE_attempted_date">

                                            <input type="date" class="form-control" name="GRE_attempted_date" value="{{old('GRE_attempted_date')}}">

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
                                            <input type="radio" class="custom-control-input " id="TOEFL" name="TOEFL_attempted" value="yes" {{ old('TOEFL_attempted') == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="TOEFL">Yes</label>
                                        </div>
                                    </div>
                                    <div style="line-height:2">

                                        <div class="col-lg-3 col-md-2 col-3 ">
                                            <div class="custom-control custom-radio ">
                                                <input type="radio" class="custom-control-input " id="TOEFL2" name="TOEFL_attempted" value="no" {{ old('TOEFL_attempted') == "no" ? "checked":"" }}>
                                                <label class="custom-control-label mt-1" for="TOEFL2">No</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-12 d-none append_TOEFL_attempted_date">

                                            <input type="date" class="form-control" name="TOEFL_attempted_date" value="{{old('TOEFL_attempted_date')}}">

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
                                            <input type="radio" class="custom-control-input " id="GMAT" name="GMAT_attempted" value="yes" {{ old('GMAT_attempted') == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="GMAT">Yes</label>
                                        </div>
                                    </div>
                                    <div style="line-height:2">

                                        <div class="col-lg-3 col-md-2 col-3 ">
                                            <div class="custom-control custom-radio ">
                                                <input type="radio" class="custom-control-input " id="GMAT2" name="GMAT_attempted" value="no" {{ old('GMAT_attempted') == "no" ? "checked":"" }}>
                                                <label class="custom-control-label mt-1" for="GMAT2">No</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-12 d-none append_GMAT_attempted_date">

                                            <input type="date" class="form-control" name="GMAT_attempted_date" value="{{old('GMAT_attempted_date')}}">

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
                                            <input type="radio" class="custom-control-input " id="interested" name="interested_attempted" value="yes" {{ old('interested_attempted') == "yes" ? "checked":"" }}>
                                            <label class="custom-control-label mt-1" for="interested">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-3 ">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input " id="interested2" name="interested_attempted" value="no" {{ old('interested_attempted') == "no" ? "checked":"" }}>
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

                                    <textarea class="form-control" rows="6" style="width:100%;" name="feedback">{{old('feedback')}}</textarea>

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
    </u1>

</form>
<div id="map" style=" height: 500px; width:100%"> </div>

<script>
    $(document).ready(function() {
        //hide and view reason
        $('.page-active').removeClass('sc-page-active')
        $('.page-Educational').addClass('sc-page-active')

        $('#Pastis_rejected_college').click(function() {
            $('.Rejected_College').removeClass('d-none')
        })
        $('#Past2is_rejected_college').click(function() {
            $('.Rejected_College').addClass('d-none')
            $('[name=rejected_college_year]').val('')
            $('[name=rejected_college_reason]').val('')
        })

        $('#Pastttis_rejected_visa_past').click(function() {
            $('.Rejected_Visa').removeClass('d-none')
        })
        $('#Past2is_rejected_visa_past').click(function() {
            $('.Rejected_Visa').addClass('d-none')
            $('[name=rejected_visa_year_past]').val('')
            $('[name=rejected_visa_reason_past]').val('')
        })

        $('#Pasttis_rejected_visa').click(function() {
            $('.Rejected_Visa_Usa').removeClass('d-none')
        })
        $('#Pastt2is_rejected_visa').click(function() {
            $('.Rejected_Visa_Usa').addClass('d-none')
            $('[name=rejected_visa_year]').val('')
            $('[name=rejected_visa_reason]').val('')
        })

        //end hide and view reason


        $('#academic').click(function() {
            $('.append_IELTS_attempted_date').removeClass('d-none');
        });
        $('#academic2').click(function() {
            $('.append_IELTS_attempted_date').addClass('d-none');
            $('[name=IELTS_attempted_date]').val('')
        });
        $('#GRE').click(function() {
            $('.append_GRE_attempted_date').removeClass('d-none');
        });
        $('#GRE2').click(function() {
            $('.append_GRE_attempted_date').addClass('d-none');
            $('[name=GRE_attempted_date]').val('')
        });
        $('#TOEFL').click(function() {
            $('.append_TOEFL_attempted_date').removeClass('d-none');
        });
        $('#TOEFL2').click(function() {
            $('.append_TOEFL_attempted_date').addClass('d-none');
            $('[name=TOEFL_attempted_date]').val('')
        });
        $('#GMAT').click(function() {
            $('.append_GMAT_attempted_date').removeClass('d-none');
        });
        $('#GMAT2').click(function() {
            $('.append_GMAT_attempted_date').addClass('d-none');
            $('[name=GMAT_attempted_date]').val('')
        });

        // endddddddddddddddddddddddddddddddddddddddddddd
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
                                    <input class="form-control" type="text" name="type" value="education" hidden>

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
                                        <input class="form-control" type="text" name="type" value="education" hidden>


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
                console.log("hi");


                const input = $('#pac-input' + i)[0];
                new google.maps.places.Autocomplete(input).bindTo("bounds", map);

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