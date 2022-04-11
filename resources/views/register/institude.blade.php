@extends('layouts.layout')

@section('content')


<!-- Subscribe & Stay Connected. Start -->
<section class="StayConnected clearfix">
    <h1>College Enrollment</h1>
    <div class="container">

        <h6>College to provide correct information. This will allow us to incorporate your information on our Portal databank for the International aspirant Candidates to access , explore and know more about the Courses and other Services.</h6>
        <h6></h6>
        <br>
        <div class="whiteBox clearfix" style="max-width: none;">
            <!--div class="news-title">You have questions, let's have a conversation </div-->
            <div class="row custom-box">

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <label>Name of the College *

                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <label>College Registration Number *

                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <label>College Registrar Office *

                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>


            </div>

            <hr>

            <div class="row custom-box">

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Country *

                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Province/Region *

                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>City *

                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Street *
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>


            </div>

            <hr>
            <div class="row custom-box">

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Postal Code *
                        </label>
                        <br>
                        <br>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Email address for correspondence *
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>URL - Website Address *
                        </label>
                        <br>
                        <br>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Contact Number *
                        </label>
                        <br>
                        <br>
                        <input class="form-control " type="text">
                    </div>
                </div>


            </div>


            <hr>

            <div class="row custom-box">

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Admission Cell - Contact Person *

                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Email address of Admission Cell *

                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Dean - Contact Name *

                        </label>

                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Dean Email ID *
                        </label>
                        <br>
                        <br>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Dean Contact Number *
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>


            </div>
            <hr>
            <div class="row custom-box">

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Type of Courses *
                        </label>
                        <br>

                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Courses1" name="Courses1" value="">
                            <label class="custom-control-label" for="Courses1"> In Campus</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Courses2" name="Courses2" value="">
                            <label class="custom-control-label" for="Courses2"> Online</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Courses3" name="Courses3" value="">
                            <label class="custom-control-label" for="Courses3"> Distant</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Courses4" name="Courses4" value="">
                            <label class="custom-control-label" for="Courses4"> Others</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Intake *
                        </label>
                        <br>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Intake1" name="Intake1" value="">
                            <label class="custom-control-label" for="Intake1"> January</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Intake2" name="Intake2" value="">
                            <label class="custom-control-label" for="Intake2">May</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Intake3" name="Intake3" value="">
                            <label class="custom-control-label" for="Intake3">September</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Intake4" name="Intake4" value="">
                            <label class="custom-control-label" for="Intake4">Others</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Admission Type *
                        </label>
                        <br>
                        <br>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>College Ranking
                        </label>
                        <br>
                        <br>
                        <input class="form-control " type="text">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Ranking Criteria & Ranking Bodies
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row custom-box">

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Year of Establishment
                        </label>
                        <input class="form-control " type="text" placeholder="Year of Registration">
                        <small>Year of Registration</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Offering Services Since
                        </label>
                        <input class="form-control " type="text" placeholder="Number of Years">
                        <small>Number of Years</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Response Time
                        </label>
                        <input class="form-control " type="text" placeholder="24 or 48 or 72 Hours">
                        <small>Number of Cases Enrolled till Date</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Mode of Communication
                        </label>

                        <input class="form-control " type="text" placeholder="Email / Messaging / Telephone">
                        <small>Successful Cases in %</small>
                    </div>
                </div>

            </div>
            <hr>
            <div class="row custom-box">

                <div class="col-lg-12col-md-12 col-12">
                    <div class="form-group">
                        <label>Courses Offered
                        </label>
                        <input class="form-control " type="text">

                    </div>
                    <div id="newRow"></div>
                    <button id="addRow" type="button" class="btn btn-info">Add Course</button>
                </div>

            </div>
            <hr>
            <div class="row custom-box">

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Total Number of Students Enrolled
                        </label>
                        <input class="form-control " type="text">

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Total Number of Successful Students
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Is it Financial Aided?
                        </label>
                        <br>
                        <br>
                        <input class="form-control " type="text">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Is Transfer of Credits available?
                        </label>
                        <br>
                        <br>
                        <input class="form-control " type="number" min="1">
                    </div>
                </div>

            </div>
            <hr>
            <div class="row custom-box">

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="custom-control custom-checkbox">
                        <label>What type of Certificate do you Offer?
                        </label>
                        <br>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Diploma" name="Diploma" value="">
                            <label class="custom-control-label" for="Diploma"> Diploma</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="PG Diploma" name="PG Diploma" value="">
                            <label class="custom-control-label" for="PG Diploma"> PG Diploma</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id=" Certification" name=" Certification" value="">
                            <label class="custom-control-label" for=" Certification"> Certification</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Courses4" name="Courses4" value="">
                            <label class="custom-control-label" for="Courses4"> Others</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="custom-control custom-checkbox">
                        <label>Course Duration?
                        </label>
                        <br>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="6 Months" name="6 Months" value="">
                            <label class="custom-control-label" for="6 Months"> 6 Months</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="12 Months" name="12 Months" value="">
                            <label class="custom-control-label" for="12 Months">12 Months</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="18 Months" name="18 Months" value="">
                            <label class="custom-control-label" for="18 Months">18 Months</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Duration" name="Duration" value="">
                            <label class="custom-control-label" for="Duration">Others</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group custom-checkbox">
                        <label>Is your college required any of the following?
                        </label>
                        <br>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="GRE" name="GRE" value="">
                            <label class="custom-control-label" for="GRE"> GRE</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="TOEFL" name="TOEFL" value="">
                            <label class="custom-control-label" for="TOEFL">TOEFL </label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="GMAT" name="GMAT" value="">
                            <label class="custom-control-label" for="GMAT">GMAT</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="SAT" name="SAT" value="">
                            <label class="custom-control-label" for="SAT">SAT</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="others5" name="others5" value="">
                            <label class="custom-control-label" for="others5">Others</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group custom-checkbox">
                        <label>What type of Language Test do you accept?
                        </label>
                        <br>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="IELTS" name="IELTS" value="">
                            <label class="custom-control-label" for="IELTS"> IELTS</label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="PTE" name="PTE" value="">
                            <label class="custom-control-label" for="PTE">PTE </label><br>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="others5" name="others5" value="">
                            <label class="custom-control-label" for="others5">Others</label>
                        </div>
                    </div>
                </div>


            </div>
            <hr>
            <div class="row custom-box">

                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Do you offer Scholarships?
                        </label>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="Scholarshipsyes" name="Scholarships">
                                <label class="custom-control-label mt-1" for="Scholarshipsyes">Yes</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="Scholarshipsno" name="Scholarships">
                                <label class="custom-control-label mt-1" for="Scholarshipsno">No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Do you conduct Webinars?
                        </label>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="Webinarsyes" name="Webinars">
                                <label class="custom-control-label mt-1" for="Webinarsyes">Yes</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="Webinarsno" name="Webinars">
                                <label class="custom-control-label mt-1" for="Webinarsno">No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Admission Criteria Website/URL Link
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="form-group">
                        <label>Fee Structure Website/URL Link
                        </label>
                        <input class="form-control " type="text" min="1">
                    </div>
                </div>

            </div>
            <hr>

            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>Is ECA (Education Certificate Assessment) required? If "YES" specify name of the Organization
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row custom-box">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label>College Introductory Video URL Link display on Canada Inspire Portal
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Do you have any Privacy Policies?
                        </label>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="Policies" name="Policies">
                                <label class="custom-control-label mt-1" for="Policies">Yes</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="Policiesno" name="Policies">
                                <label class="custom-control-label mt-1" for="Policiesno">No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>If Yes, Enclose the Document
                        </label>
                        <input class="form-control " type="text">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <div class="form-group">
                        <label>Terms if Any
                        </label>
                        <br>
                        <br>
                        <input class="form-control " type="text">
                    </div>
                </div>
            </div>
            <hr>

            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>College Brief Introduction
                        </label>
                        <br>

                        <textarea style="width:100%;" rows="9"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>About College History
                        </label>
                        <br>

                        <textarea style="width:100%;" rows="9"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>College Achievements
                        </label>
                        <br>

                        <textarea style="width:100%;" rows="9"></textarea>
                    </div>
                </div>
            </div>
            <hr>
          
            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>Awards and Certifications
                        </label>
                        <br>

                        <textarea style="width:100%;" rows="9"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>We are looking forward to have your valuable Comments/Remarks to add or modify on the above given information to make it more informative.
                        </label>
                        <br>

                        <textarea style="width:100%;" rows="9"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>Canada Inspire provides Additional Services :-
                        </label>
                        <br>

                        <textarea style="width:100%;" rows="9"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>Instructions for the Form Designer/Developer
                        </label>
                        <br>

                        <textarea style="width:100%;" rows="9"></textarea>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row mb-1">

                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <label>Social Media Profile

                        </label>
                        <div class="row">
                            <a class="facebook" href="##">
                                <div class="icon col-lg-1 col-md-1 col-1 fa-2xl"><i class="fa-brands fa-facebook"></i>
                                </div>
                                <div id="facebook" class="col-lg-11 col-md-11 col-11 d-none ">
                                    <div class="form-group">
                                        <label> </label>
                                        <input class="form-control " type="text" placeholder="Facebook link ">
                                    </div>
                                </div>
                            </a>
                            <a class="twitter" href="##">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-twitter"></i>
                                </div>
                                <div class="col-lg-11 col-md-11 col-11 d-none " id="twitter">
                                    <div class="form-group">
                                        <label> </label>
                                        <input class="form-control " type="text" placeholder="Twitter link ">
                                    </div>
                                </div>
                            </a>
                            <a class="instagram" href="##">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-instagram-square"></i></div>
                                <div class="col-lg-11 col-md-11 col-11 d-none " id="instagram">
                                    <div class="form-group">
                                        <label> </label>
                                        <input class="form-control " type="text" placeholder="Instagram link ">
                                    </div>
                                </div>
                            </a>
                            <a class="linkedin" href="##">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-linkedin"></i>
                                </div>
                                <div class="col-lg-11 col-md-11 col-11 d-none " id="linkedin">
                                    <div class="form-group">
                                        <label> </label>
                                        <input class="form-control " type="text" placeholder="Linkedin Profile ">
                                    </div>
                                </div>
                            </a>
                            <a class="youtube" href="##">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-youtube"></i>
                                </div>
                                <div class="col-lg-11 col-md-11 col-11 d-none " id="youtube">
                                    <div class="form-group">
                                        <label> </label>
                                        <input class="form-control " type="text" placeholder="youtube link ">
                                    </div>
                                </div>
                            </a>
                            <a class="google" href="##">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-google"></i>
                                </div>
                                <div class="col-lg-11 col-md-11 col-11 d-none " id="google">
                                    <div class="form-group">
                                        <label> </label>
                                        <input class="form-control " type="text" placeholder="google review link ">
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="float-right">
                <button type="submit" class="client-btn">Submit </button>
            </div>

        </div>

    </div>

    <div id="map" style=" height: 500px; width:100%"> </div>



    </div>


    </div>
    <script>
        $(document).ready(function() {
            $('[name="same_Correspondence_address"]').change(function() {
                if ($(this).is(':checked')) {
                    // Do something...
                    $('#sameaddress').addClass('d-none');
                } else {
                    $('#sameaddress').removeClass('d-none');
                };
            });
            $('.facebook').on("click", function() {
                $('#facebook').removeClass('d-none');
            });
            $('.linkedin').on("click", function() {
                $('#linkedin').removeClass('d-none');
            });
            $('.instagram').on("click", function() {
                $('#instagram').removeClass('d-none');
            });
            $('.twitter').on("click", function() {
                $('#twitter').removeClass('d-none');
            })
            $('.youtube').on("click", function() {
                $('#youtube').removeClass('d-none');
            })
            $('.google').on("click", function() {
                $('#google').removeClass('d-none');
            })

            $("#addRow").click(function() {

                var html = '';
                html += '<div id="inputFormRow">';
                html += '<div class="input-group mb-3">';
                html += '<input type="text" name="courses[]" class="form-control m-input" placeholder="Enter courses" autocomplete="off">';
                html += '<div class="input-group-append">';
                html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
                html += '</div>';
                html += '</div>';

                $('#newRow').append(html);
            });

            // remove row
            $(document).on('click', '#removeRow', function() {
                $(this).closest('#inputFormRow').remove();
            });
        });
    </script>

    <!-- ......................script for google map view.................... -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX4GRZHCs7t1pkpjrRaLoTlCgqX8o46wY&libraries=places&callback=initMap&libraries=places&v=weekly" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                const input1 = $('#pac-input1')[0];
                const input2 = $('#pac-input2')[0];


                map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);
                const autocomplete1 = new google.maps.places.Autocomplete(input1); // Bind the map's bounds (viewport) property to the autocomplete object,
                const autocomplete2 = new google.maps.places.Autocomplete(input2);

                autocomplete1.bindTo("bounds", map); // Set the data fields to return when the user selects a place.
                autocomplete2.bindTo("bounds", map);

                autocomplete1.setFields([
                    "address_components",
                    "geometry",
                    "icon",
                    "name",
                ]);
                autocomplete2.setFields([
                    "address_components",
                    "geometry",
                    "icon",
                    "name",
                ]);
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
    <!-- ...................end...script for google map view.................... -->
</section>


@endsection