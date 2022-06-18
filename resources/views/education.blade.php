@extends('layouts.layoutss')
@section('content')
<form enctype="multipart/form-data" method="post">
    <div class='col-md-10 ' style="margin-left:auto !important;margin-right:auto !important">
        <h3 class="frm_form_title">Assessment for Overseas Education - Canada</h3>

        <p>Candidates to provide correct information. We will assist and recommend based on your previous educational qualification and interest. All Universities and Colleges required IELTS Academic but some Universities also required GRE/TOEFL/GMAT/SAT in addition to IELTS. </p>
    </div>
    <div class='uk-card col-md-10 ' style="margin-left:auto !important;margin-right:auto !important">
        <div class="uk-card-body sc-padding-medium">
            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                <div class="row custom-box " id="">

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>First Name </label>
                            <input class="form-control" type="text" name="" value="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>

                    </div>
                </div>
                <div class="row custom-box " id="">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Age</label>
                            <input class="form-control" type="text" value="" name="">
                            <small>Number of Years</small>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Gender</label>
                            <input class="form-control" type="text" value="" name="">
                            <small>Male/Female</small>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Email address for correspondence</label>
                            <input class="form-control" type="text" value="" name="">
                            <small>Valid Email Address</small>
                        </div>
                    </div>
                </div>


                <div class="row custom-box " id="">
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>City </label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Country of Citizenship</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Country of Residence</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input class="form-control" type="text" value="" name="">

                        </div>
                    </div>
                </div>
                <div class="row custom-box " id="">
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Enrollment Request</label>

                            <select class="form-control" name="status">
                                <option value="Graduation">Graduation</option>
                                <option value="Post Graduation">Post Graduation</option>
                                <option value="Doctorate">Doctorate</option>
                                <option value="PG Diploma">PG Diploma</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="form-group">
                            <label>Remarks/Comments if any</label>

                            <textarea class="form-control" style="width:100%;" name="team_info"></textarea>

                        </div>
                    </div>
                </div>
                <hr>
                <h6>Secondary School Certificate -10th/SSC</h6>
                <div class="row custom-box " id="">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Year of Completion</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Name of the Board for 10th or SSC</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Total Marks in % (Percentage)</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                </div>
                <hr>
                <h6>Intermediate Certificate - 10 + 2</h6>
                <div class="row custom-box " id="">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Year of Completion</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Name of the Board for 10+2</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Total Marks in % (Percentage)</label>
                            <input class="form-control" type="text" value="" name="">
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
                                <input class="custom-control-input" type="checkbox" id="GD1" name="" value="BA">
                                <label class="custom-control-label" for="GD1"> BA</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="GD2" name="" value="B.Com">
                                <label class="custom-control-label" for="GD2"> B.Com</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="GD3" name="" value="B.Sc">
                                <label class="custom-control-label" for="GD3"> B.Sc</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="GD4" name="" value="B.E">
                                <label class="custom-control-label" for="GD4"> B.E</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="GD5" name="" value="Other">
                                <label class="custom-control-label" for="GD5"> Other if Any</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Year of Completion</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Course Duration</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Major Subjects</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Years of Gap till Date</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>GPA Score</label>
                            <input class="form-control" type="text" value="" name="">
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
                                <input class="custom-control-input" type="checkbox" id="PG1" name="" value="MBA">
                                <label class="custom-control-label" for="PG1"> MBA</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="PG2" name="" value="M.Com">
                                <label class="custom-control-label" for="PG2"> M.Com</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="PG3" name="" value="M.Sc">
                                <label class="custom-control-label" for="PG3"> M.Sc</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="PG4" name="" value="B.Tech/M.Tech">
                                <label class="custom-control-label" for="PG4">B.Tech/M.Tech</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="PG5" name="" value="Other">
                                <label class="custom-control-label" for="PG5"> Other if Any</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Year of Completion</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Course Duration</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Major Subjects</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Years of Gap till Date</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>GPA Score</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row custom-box " id="">

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Employment-1 (Employer Name)</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Job Title or Description</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Job Field</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>Year/s of Job Work Experience</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>From Year</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="form-group">
                            <label>To Year</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                </div>
                <button id="add_employment" type="button" class="btn uk-button uk-button-primary">Add Employment</button>
                <hr>
                <div class="row custom-box " id="">

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Technical Certification-1 (Name of Certificate)</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Certificate Specialization</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Course Duration</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Grade/Score</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Year of Completion</label>
                            <input class="form-control" type="text" value="" name="">
                        </div>
                    </div>

                </div>
                <button id="add_TC" type="button" class="btn uk-button uk-button-primary">Add Technical Certification</button>
                <hr>
                <div class="row custom-box">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">

                            <label>Write your Interest to pursue Higher education along with Major Subject/Discipline, provide information wherever necessary:</label>
                            <textarea class="form-control" style="width:100%" name="team_info"></textarea>
                        </div>
                    </div>
                </div>


                
                <div class="float-right">

                    <button class="btn uk-button uk-button-primary" type="submit">Submit</button>

                </div>

            </fieldset>
        </div>
    </div>
</form>
@endsection