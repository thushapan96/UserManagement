@extends('layouts.layout')

@section('content')

<section class="StayConnected clearfix" style="  padding: 100px 0 100px;">
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

    <div class="" style=" left: 0px;">
        <div class="row">
            <div class="col-md-3 border-left" style=" left: 50px;">
                <div class="d-flex flex-column align-items-left text-left p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><br>
                    <span class="font-weight-bold  align-items-center  ">{{$consultants->first_name}}</span><br>
                    <span class="font-weight-bold  text-left">{{$consultants->email}}</span><br>
                    <span class="font-weight-bold text-left">{{$consultants->fb_link}}</span><br>
                    <span class="font-weight-bold">{{$consultants->Linkedin_link}}</span><br>
                    <span class="font-weight-bold">{{$consultants->insta_link}}</span><br>
                    <span class="font-weight-bold">{{$consultants->twitter_link}} </span><br>
                    <div class="col-md-7 float-left">
                        <a href="{{route('edit.consultant')}}"> <button type="button" class="client-btn ">Edit Profile</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 ">

                <div class="">
                    <div class="cardf">
                        <nav class="nav nav-pills nav-fill justify-content-left " style="cursor:pointer; text-decoration: underline !important">
                            <a class="nav-link active amenu" style="cursor:pointer;padding: 1.15rem 1rem;color:blue !important" aria-current="page" id="amenu">Main Content</a>
                            <a class="nav-link amenu1" style="cursor:pointer;padding: 1.15rem 1rem;color:blue !important" id="amenu1">Team </a>
                            <a class="nav-link amenu2" style="cursor:pointer;padding: 1.15rem 1rem;color:blue !important" id="amenu2">About Company </a>
                            <a class="nav-link amenu3" style="cursor:pointer;padding: 1.15rem 1rem;color:blue !important" id="amenu3"> Award & Certification</a>
                            <a class="nav-link amenu4" style="cursor:pointer;padding: 1.15rem 1rem;color:blue !important" id="amenu4">News and Events</a>
                            <a class="nav-link amenu5" style="cursor:pointer;padding: 1.15rem 1rem;color:blue !important" id="amenu5">Canada Inspire</a>
                            <a class="nav-link amenu6" style="cursor:pointer;padding: 1.15rem 1rem;color:blue !important" id="amenu6">Feedback </a>

                        </nav>
                    </div>

                </div>
                <br>
                <br>

                <div class="card tab-pane  col-md-11" id="menu">
                    <br><br>
                    <!--div class="news-title">You have questions, let's have a conversation </div-->
                    <div class="row custom-box" id="">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>First Name *
                                </label>
                                <input class="form-control " type="text" name="first_name" value="{{$consultants->first_name}}" disabled>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Last Name *
                                </label>
                                <input class="form-control " type="text" name="last_name" value="{{$consultants->last_name}}" disabled>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Registration Number *
                                </label>
                                <input class="form-control " type="text" name="registration_number" value="{{$consultants->registration_number}}" disabled>
                            </div>
                        </div>

                    </div>
                    <hr>

                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Company Name *
                                </label>
                                <input class="form-control " type="text" name="company_name" value="{{$consultants->company_name}}" disabled>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Registered Office - Location *
                                </label>
                                <input class="form-control " type="text" placeholder="Area" name="registrar_office_area" value="{{$consultants->registrar_office_area}}" disabled>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="form-group">
                                <label>Status *
                                </label>
                                <select class="form-control" name="status" disabled>
                                    <option value="Active" {{$consultants->status == "Active" ? "checked":""}}>Active</option>
                                    <option value="In Active" {{ $consultants->status == "In Active" ? "checked":""}}>In Active</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Languages Known *
                                </label>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="Languages1" name="language_known[]" value="English" {{ (is_array($consultants->language_known) and in_array("English", $consultants->language_known)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="Languages1"> English</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="Languages2" name="language_known[]" value="French" {{ (is_array($consultants->language_known) and in_array("French", $consultants->language_known)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="Languages2"> French</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="Languages3" name="language_known[]" value="Others" {{ (is_array($consultants->language_known) and in_array("Others", $consultants->language_known)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="Languages3"> Others</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="row custom-box">

                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Country *

                                </label>
                                <input class="form-control " type="text" name="country" value="{{$consultants->country}}" disabled>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Province/Region *

                                </label>
                                <input class="form-control " type="text" name="region" value="{{$consultants->region}}" disabled>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>City *

                                </label>
                                <input class="form-control " type="text" name="city" value="{{$consultants->city}}" disabled>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Street *
                                </label>
                                <input class="form-control " type="text" name="streat" value="{{$consultants->streat}}" disabled>
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
                                <input class="form-control " type="text" name="postal_code" value="{{$consultants->postal_code}}" disabled>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Email address for correspondence *
                                </label>
                                <input class="form-control " type="text" name="email" value="{{$consultants->email}}" disabled>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>URL - Website Address *
                                </label>
                                <br>
                                <br>
                                <input class="form-control " type="text" name="website_address" value="{{$consultants->website_address}}" disabled>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Contact Number *
                                </label>
                                <br>
                                <br>
                                <input class="form-control " type="text" name="phone" value="{{$consultants->phone}}" disabled>
                            </div>
                        </div>


                    </div>
                    <hr>

                    <div class="row custom-box">

                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="form-group">
                                <label>Specialization *
                                </label>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="Specialization1" name="specialization[]" value="Express Entry" {{ (is_array($consultants->specialization) and in_array("Express Entry", $consultants->specialization)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="Specialization1"> Express Entry </label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="Specialization2" name="specialization[]" value="PNP" {{ (is_array($consultants->specialization) and in_array("PNP", $consultants->specialization)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="Specialization2"> PNP</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="Specialization3" name="specialization[]" value="LMIA" {{ (is_array($consultants->specialization) and in_array("LMIA", $consultants->specialization)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="Specialization3"> LMIA</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="Specialization4" name="specialization[]" value="Others" {{ (is_array($consultants->specialization) and in_array("Others", $consultants->specialization)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="Specialization4"> Others</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Express Entry - Success
                                </label>
                                <input class="form-control " type="text" placeholder="10/10" name="express_entry_success" value="{{$consultants->express_entry_success}}" disabled>
                                <small>No. of Enrolment/Success</small>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>PNP Success
                                </label>
                                <input class="form-control " type="text" name="pnp_success" value="{{$consultants->pnp_success}}" disabled>
                                <small>No. of Enrolment/Success</small>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="form-group">
                                <label>LMIA Success
                                </label>
                                <input class="form-control " type="text" name="lmia_success" value="{{$consultants->lmia_success}}" disabled>
                                <small>No. of Enrolment/Success</small>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="form-group">
                                <label>Others Success
                                </label>
                                <input class="form-control " type="text" name="other_success" value="{{$consultants->other_success}}" disabled>
                                <small>No. of Enrolment/Success</small>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row custom-box">

                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="form-group">
                                <label>Service Offered *</label>

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="Service1" name="offering_service[]" value="Student Visa" {{ (is_array($consultants->offering_service) and in_array("Student Visa", $consultants->offering_service)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="Service1">Student Visa</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="Service2" name="offering_service[]" value="Tourist Visa" {{ (is_array($consultants->offering_service) and in_array("Tourist Visa Visa", $consultants->offering_service)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="Service2"> Tourist Visa</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="Service3" name="offering_service[]" value="Family Visa" {{ (is_array($consultants->offering_service) and in_array("Family Visa", $consultants->offering_service)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="Service3"> Family Visa</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="Service4" name="offering_service[]" value="Other Visa" {{ (is_array($consultants->offering_service) and in_array("Other Visa", $consultants->offering_service)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="Service4"> Other Visa</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="form-group">
                                <label>Other Services *
                                </label>
                                <br>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="OtherServices1" name="other_service[]" value="Innovator Visa" {{ (is_array($consultants->other_service) and in_array("Innovator Visa", $consultants->other_service)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="OtherServices1"> Innovator Visa</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="OtherServices2" name="other_service[]" value="Franchisee" {{ (is_array($consultants->other_service) and in_array("Franchisee", $consultants->other_service)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="OtherServices2">Franchisee</label><br>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="OtherServices3" name="other_service[]" value="Intra Company Transfer" {{ (is_array($consultants->other_service) and in_array("Intra Company Transfer", $consultants->other_service)) ? ' checked' : '' }} disabled>
                                    <label class="custom-control-label" for="OtherServices3"> Intra Company Transfer</label><br>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="form-group">
                                <label>Student Visa - Success
                                </label>

                                <input class="form-control " type="text" placeholder="10/10" name="student_visa_success" value="{{$consultants->student_visa_success}}" disabled>
                                <small>No. of Enrolment/Success</small>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="form-group">
                                <label>Tourist Visa Success
                                </label>
                                <input class="form-control " type="text" name="tourist_visa_success" value="{{$consultants->tourist_visa_success}}" disabled>
                                <small>No. of Enrolment/Success</small>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="form-group">
                                <label>Family Visa Success
                                </label>
                                <input class="form-control " type="text" name="family_visa_success" value="{{$consultants->family_visa_success}}" disabled>
                                <small>No. of Enrolment/Success</small>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="form-group">
                                <label>Other Visa Success
                                </label>
                                <br>
                                <br>
                                <input class="form-control " type="text" name="other_visa_success" value="{{$consultants->other_visa_success}}" disabled>
                                <small>No. of Enrolment/Success</small>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row custom-box">

                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Year of Establishment
                                </label>
                                <input class="form-control " type="text" placeholder="Year of Registration" name="establishment_year" value="{{$consultants->establishment_year}}" disabled>
                                <small>Year of Registration</small>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Offering Services Since
                                </label>
                                <input class="form-control " type="text" placeholder="Number of Years" name="offering_year" value="{{$consultants->offering_year}}" disabled>
                                <small>Number of Years</small>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Total Cases Taken
                                </label>
                                <input class="form-control " type="text" placeholder="24 or 48 or 72 Hours" name="total_cases_taken" value="{{$consultants->total_cases_taken}}" disabled>
                                <small>Number of Cases Enrolled till Date</small>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Mode of Communication
                                </label>

                                <input class="form-control " type="text" name="communication_mode_success" value="{{$consultants->communication_mode_success}}" disabled>
                                <small>Successful Cases in %</small>
                            </div>
                        </div>

                    </div>
                    <hr>

                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>What type of Correspondence you prefer?
                                </label>
                                <div class="col-lg-2 col-md-2 col-2 ">
                                    <div class="custom-control custom-checkbox ">
                                        <input type="checkbox" class="custom-control-input" id="preferemail" name="communication_mode[]" value="email" {{ (is_array($consultants->communication_mode) and in_array("email", $consultants->communication_mode)) ? ' checked' : '' }} disabled>
                                        <label class="custom-control-label mt-1" for="preferemail">email</label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-2 ">
                                    <div class="custom-control custom-checkbox ">
                                        <input type="checkbox" class="custom-control-input " id="preferPhone" name="communication_mode[]" value="phone" {{ (is_array($consultants->communication_mode) and in_array("phone", $consultants->communication_mode)) ? ' checked' : '' }} disabled>
                                        <label class="custom-control-label mt-1" for="preferPhone">phone</label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-2 ">
                                    <div class="custom-control custom-checkbox ">
                                        <input type="checkbox" class="custom-control-input " id="preferMessaging" name="communication_mode[]" value="Messaging" {{ (is_array($consultants->communication_mode) and in_array("Messaging", $consultants->communication_mode)) ? ' checked' : '' }} disabled>
                                        <label class="custom-control-label mt-1" for="preferMessaging">Messaging</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Response Time
                                </label>
                                <input type="text" class="form-control" name="response_time" value="{{$consultants->response_time}}" disabled>
                                <small>24 or 48 or 72 Hours</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Is your Initial Consultation chargeable?
                                </label>
                                <div class="col-lg-2 col-md-2 col-2 ">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input" id="Consultationchargeable" name="initial_chargeable_type" value="free" {{ $consultants->initial_chargeable_type == "free"  ? ' checked' : '' }}>
                                        <label class="custom-control-label mt-1" for="Consultationchargeable">free</label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-2 ">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input " id="Consultationchargeable2" name="initial_chargeable_type" value="paid" {{ $consultants->initial_chargeable_type == "paid"  ? ' checked' : '' }}>
                                        <label class="custom-control-label mt-1" for="Consultationchargeable2">paid</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>

                    <div class="float-right">
                        <button type="button" class="client-btn bmenu">Next </button>
                    </div>

                    <br>
                </div>

                <div class="card tab-pane  col-md-11" id="menu1">
                    <br><br>
                    <div class="row custom-box">

                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">

                                <label>Your Team of Expert</label>
                                <textarea style="width:100%;" rows="4" placeholder="Provide Team info along with their Specialization" disabled>{{$consultants->team_info}}</textarea>
                            </div>
                            <div class="form-group">
                                @foreach($teams as $row )
                                <div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <label>Team Member</label>

                                            <input class="form-control team addinput" id="team_name" type="text" name="team_name[]" value="{{$row->member}}" disabled>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <label>Image</label>
                                            <img src="{{url('files/'.$row->team_img)}}" class="img_thumbnail" width="75">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <label>Designation</label>

                                            <input class="form-control team addinput" type="text" id="team_designation" value="{{$row->Designation}}" disabled>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <label>Area of Expertise</label>

                                            <input class="form-control team addinput" type="text" id="team_area_expertise" value="{{$row->expertise_area}}" disabled>
                                        </div>
                                        <div class="col-lg-4 col-md-3 col-12">
                                            <label>Year of Experience</label>

                                            <input class="form-control team addinput" type="text" id="team_experience_year" value="{{$row->experience_year}}" disabled>
                                        </div>
                                        <div class="col-lg-4 col-md-3 col-12">
                                            <label>Number of Successful Cases</label>

                                            <input class="form-control team addinput" type="text" id="team_number_success_cases" value="{{$row->no_success}}" disabled>
                                        </div>


                                    </div>
                                    <br><br>
                                    <hr>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="float-right">
                        <button type="button" class="client-btn bmenu1">Next </button>
                    </div>
                    <br>
                </div>

                <div class="card tab-pane  col-md-11" id="menu2">
                    <br><br>
                    <div class="row custom-box">

                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="form-group">
                                <label>Do you have any Privacy Policies?
                                </label>
                                <div class="col-lg-2 col-md-2 col-2 ">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input " id="Policies" name="is_Policies" value="yes" {{ $consultants->is_Policies == "yes"  ? ' checked' : '' }} disabled>
                                        <label class="custom-control-label mt-1" for="Policies">Yes</label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-2 col-3 ">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input " id="Policiesno" name="is_Policies" value="no" {{ $consultants->is_Policies == "no"  ? ' checked' : '' }} disabled>
                                        <label class="custom-control-label mt-1" for="Policiesno">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>If Yes, Enclose the Document
                                </label>
                                <br>
                                <br>
                                <a href="{{url('files/'.$consultants->privacy_policy_document)}}" target="_blank" style=" text-decoration: underline;">view Attachment</a>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-7 col-12">
                            <div class="form-group">
                                <label>Terms if Any
                                </label>
                                <textarea style="width:100%;" rows="6" name="privacy_policy_detail" value="{{$consultants->privacy_policy_detail}}" disabled>{{$consultants->privacy_policy_detail}}</textarea>
                            </div>
                        </div>


                    </div>
                    <hr>
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>About History
                                </label>
                                <br>
                                <textarea style="width:100%;" rows="9" name="history" value="{{$consultants->history}}" disabled>{{$consultants->history}}</textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label> Brief Introduction
                                </label>
                                <br>

                                <textarea style="width:100%;" rows="9" name="brief_introduction" value="{{$consultants->brief_introduction}}" disabled>{{$consultants->brief_introduction}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="float-right">
                        <button type="button" class="client-btn bmenu2">Next </button>
                    </div>
                    <br>
                </div>
                <div class="card tab-pane  col-md-11" id="menu3">
                    <br><br>
                    <div class="row custom-box">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label>Awards and Certifications
                                </label>
                                <br>
                                <a href="{{url('files/'.$consultants->Award)}}" target="_blank" style=" text-decoration: underline;">View Attachment</a>

                            </div>
                        </div>
                    </div>

                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>Company Achievements
                                </label>
                                <br>

                                <textarea style="width:100%;" rows="9" name="achievement" value="{{$consultants->achievement}}" disabled>{{$consultants->achievement}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="float-right">
                        <button type="button" class="client-btn bmenu3">Next </button>
                    </div>
                    <br>

                </div>

                <div class="card tab-pane  col-md-11" id="menu4">
                    <br><br>
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>Your Introductory Video URL Link display on Canada Inspire Portal
                                </label>
                                <input class="form-control " type="text" name="vedio_url" value="{{$consultants->vedio_url}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>Kindly provide Weblinks for News and Events, Immigration Updates and much more to help Candidates to have more information
                                </label>
                                <br>

                                <textarea style="width:100%;" rows="9" name="event_new_weblink" value="{{$consultants->event_new_weblink}}" disabled>{{$consultants->event_new_weblink}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="socialAppend" id="socialAppend">
                        <div class="row mb-1 social">

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
                                                    <input class="form-control socialLink " type="text" placeholder="Facebook link " name="fb_link" value="{{$consultants->fb_link}}" disabled>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="twitter" href="##">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-twitter"></i>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-11 d-none " id="twitter">
                                                <div class="form-group">
                                                    <label> </label>
                                                    <input class="form-control socialLink" type="text" placeholder="Twitter link " name="twitter_link" value="{{$consultants->twitter_link}}" disabled>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="instagram" href="##">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-instagram-square"></i></div>
                                            <div class="col-lg-11 col-md-11 col-11 d-none " id="instagram">
                                                <div class="form-group">
                                                    <label> </label>
                                                    <input class="form-control socialLink" type="text" placeholder="Instagram link " name="insta_link" value="{{$consultants->insta_link}}" disabled>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="linkedin" href="##">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-linkedin"></i>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-11 d-none " id="linkedin">
                                                <div class="form-group">
                                                    <label> </label>
                                                    <input class="form-control socialLink" type="text" placeholder="Linkedin Profile " name="Linkedin_link" value="{{$consultants->Linkedin_link}}" disabled>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="youtube" href="##">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-youtube"></i>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-11 d-none " id="youtube">
                                                <div class="form-group">
                                                    <label> </label>
                                                    <input class="form-control socialLink" type="text" placeholder="youtube link " name="youtube_link" value="{{$consultants->youtube_link}}" disabled>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="google" href="##">
                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl"><i class="fa-brands fa-google"></i>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-11 d-none " id="google">
                                                <div class="form-group">
                                                    <label> </label>
                                                    <input class="form-control socialLink" type="text" placeholder="google review link " name="google_review_link" value="{{$consultants->google_review_link}}" disabled>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="float-right">
                        <button type="button" class="client-btn bmenu4">Next </button>
                    </div>
                    <br>
                </div>

                <div class="card tab-pane  col-md-11" id="menu5">
                    <br><br>
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>Canada Inspire provides Additional Services :-
                                </label>
                                <br>

                                <textarea style="width:100%;" rows="9" id="field_cutjx" data-invmsg="Canada Inspire provides Additional Services :- is invalid" aria-invalid="false" spellcheck="false" disabled>We have a Team of professionals who are having expert in Application Development, Solutions and Services. 
                                1. Is your Company looking for Website Design/Re Design or Development to give professional look and exposure for International community?
                                2. Are you looking for development of Online Appointments and Payment Gateway or Integration on your Website?
                                3. Are you looking for Mobile Application Development to ease your Prospects and Customers?
                                4. Are you interested to develop Enquiry form, Query, Survey or feedback form to improve and enhance your services?
                                5. Are you looking for CRM - Customer Relation Management Solutions to maintain and manage your company marketing activities, follow-up, and efficiency to generate good revenues for your company and always ahead with your competitors?</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="float-right">
                        <button type="button" class="client-btn bmenu5">Next </button>
                    </div>
                    <br>
                </div>

                <div class="card tab-pane  col-md-11" id="menu6">
                    <br><br>
                    <div class="row custom-box">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label>We are looking forward to have your valuable Comments/Remarks to add or modify on the above given information to make it more informative.
                                </label>
                                <br>

                                <textarea style="width:100%;" rows="9" name="Comment" value="{{$consultants->Comment}}" disabled>{{$consultants->Comment}}</textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>

            </div>
        </div>
    </div>


</section>

<script>
    $(document).ready(function() {
        $('.tab-pane').fadeOut();
        $("#menu").fadeIn();
        $(".amenu").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu").fadeIn();
            $(".nav-link").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu1").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu1").fadeIn();
            $(".nav-link").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu2").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu2").fadeIn();
            $(".nav-link.active").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu3").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu3").fadeIn();
            $(".nav-link.active").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu4").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu4").fadeIn();
            $(".nav-link.active").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu5").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu5").fadeIn();
            $(".nav-link.active").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu6").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu6").fadeIn();
            $(".nav-link.active").removeClass('active')
            $(this).addClass('active')
        });

        $(".bmenu").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu1").fadeIn();
            $(".nav-link").removeClass('active')
            $("#amenu1").addClass('active')
        });
        $(".bmenu1").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu2").fadeIn();
            $(".nav-link").removeClass('active')
            $("#amenu2").addClass('active')
        });
        $(".bmenu2").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu3").fadeIn();
            $(".nav-link.active").removeClass('active')
            $("#amenu3").addClass('active')
        });
        $(".bmenu3").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu4").fadeIn();
            $(".nav-link.active").removeClass('active')
            $("#amenu4").addClass('active')
        });
        $(".bmenu4").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu5").fadeIn();
            $(".nav-link.active").removeClass('active')
            $("#amenu5").addClass('active')
        });
        $(".bmenu5").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu6").fadeIn();
            $(".nav-link.active").removeClass('active')
            $("#amenu6").addClass('active')
        });
        if (sessionStorage.getItem("appendhtml")) {
            $('#newRow').html(sessionStorage.getItem("appendhtml"))
        }

        $('[name="same_Correspondence_address"]').change(function() {
            if ($(this).is(':checked')) {
                // Do something...
                $('#sameaddress').addClass('d-none');
            } else {
                $('#sameaddress').removeClass('d-none');
            };
        });
        if (sessionStorage.getItem("socialAppend")) {
            $('#socialAppend').html(sessionStorage.getItem("socialAppend"))
        }
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
        $('.socialLink').keyup(function() {

            $(this).attr("value", $(this).val());
            sessionStorage.setItem('socialAppend', $('#socialAppend').html())

        });

    });
</script>


@endsection