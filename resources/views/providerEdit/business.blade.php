@extends('layouts.layoutss')

@section('content')

<section>

    <div class="row">

        <div class="col-md-11" style="margin-left:auto;margin-right:auto">

            <form id="form" action="{{route('update.consultant' ,['id'=>$consultants->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <h5 style="text-align:center"> edit Business details</h5><br>
                <u1 class="col-md-10" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:5% !important;">
                    <li class="nav-linkk " id="amenu"><a style="cursor:pointer;padding: 0.5rem 2rem;" aria-current="page">Main </a></li>
                    <li class="nav-linkk " id="amenu1"><a style="cursor:pointer;padding: 0.5rem  2rem;">Team </a></li>
                    <li class="nav-linkk " id="amenu2"><a style="cursor:pointer;padding: 0.5rem  2rem;">About Company</a></li>
                    <li class="nav-linkk" id="amenu3"><a style="cursor:pointer;padding: 0.5rem  2rem;"> Award & Certification</a></li>
                    <li class="nav-linkk" id="amenu4"><a style="cursor:pointer;padding: 0.5rem  2rem;">News and Events</a></li>
                    <!-- <li class="nav-linkk" id="amenu5"><a style="cursor:pointer;padding: 0.5rem 1.5rem;">Canada Inspire</a></li>
                    <li class="nav-linkk" id="amenu6"><a style="cursor:pointer;padding: 0.5rem 1.5rem;">Feedback</a></li> -->
                </u1>
                <u1 class="uk-switcher">

                    <li id='menu' class='tab-pane '>
                        <div class='uk-card col-md-10 ' style="margin-left:5% !important;">
                            <div class="uk-card-body sc-padding-medium">
                                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                    <div class="row custom-box " id="">

                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>First Name *
                                                </label>
                                                <input class="form-control " type="text" name="first_name" value="{{$consultants->first_name}}">
                                                <input class="form-control " type="text" name="type" value="{{$consultants->type}}" hidden>

                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Last Name *
                                                </label>
                                                <input class="form-control " type="text" name="last_name" value="{{$consultants->last_name}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>RCIC Number*
                                                </label>
                                                <input class="form-control " type="text" name="registration_number" value="{{$consultants->registration_number}}">
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row custom-box">

                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Company Name *
                                                </label>
                                                <input class="form-control " type="text" name="company_name" value="{{$consultants->company_name}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Registered Office - Location *
                                                </label>
                                                <input class="form-control " type="text" placeholder="Area" name="registrar_office_area" value="{{$consultants->registrar_office_area}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Status *
                                                </label>
                                                <select class="form-control" name="status">
                                                    <option value="Active" {{$consultants->status == "Active" ? "checked":""}}>Active</option>
                                                    <option value="In Active" {{ $consultants->status == "In Active" ? "checked":""}}>In Active</option>
                                                </select>
                                            </div>
                                        </div>



                                    </div>
                                    <hr>
                                    <div class="row custom-box">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Street *
                                                </label>
                                                <input class="form-control " type="text" name="streat" value="{{$consultants->streat}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>City *

                                                </label>
                                                <input class="form-control " type="text" name="city" value="{{$consultants->city}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Province/Region *

                                                </label>
                                                <input class="form-control " type="text" name="region" value="{{$consultants->region}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Country *

                                                </label>
                                                <input class="form-control " type="text" name="country" value="{{$consultants->country}}">
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row custom-box">

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Postal Code *
                                                </label>


                                                <input class="form-control " type="text" name="postal_code" value="{{$consultants->postal_code}}">
                                            </div>
                                        </div>



                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Contact Number *
                                                </label>


                                                <input class="form-control " type="text" name="phone" value="{{$consultants->phone}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Email address for correspondence *
                                                </label>

                                                <input class="form-control " type="email" name="email" value="{{$consultants->email}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>URL - Website Address *
                                                </label>

                                                <input class="form-control " type="text" name="website_address" value="{{$consultants->website_address}}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row custom-box">

                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="form-group">
                                                <label>Specialization *
                                                </label>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="Specialization1" name="specialization[]" value="Accounting & Auditing" {{ (is_array($consultants->specialization) and in_array("Accounting & Auditing", $consultants->specialization)) ? ' checked' : '' }}>
                                                    <label class="custom-control-label" for="Specialization1"> Accounting & Auditing </label><br>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="Specialization2" name="specialization[]" value="Corporate & Personal Taxation" {{ (is_array($consultants->specialization) and in_array("Corporate & Personal Taxation", $consultants->specialization)) ? ' checked' : '' }}>
                                                    <label class="custom-control-label" for="Specialization2"> Corporate & Personal Taxation</label><br>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="Specialization3" name="specialization[]" value="Payroll" {{ (is_array($consultants->specialization) and in_array("Payroll", $consultants->specialization)) ? ' checked' : '' }}>
                                                    <label class="custom-control-label" for="Specialization3"> Payroll</label><br>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="Specialization4" name="specialization[]" value="Insurance" {{ (is_array($consultants->specialization) and in_array("Insurance", $consultants->specialization)) ? ' checked' : '' }}>
                                                    <label class="custom-control-label" for="Specialization4"> Insurance</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="form-group">
                                                <label>Service Offered *</label>

                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="Service1" name="offering_service[]" value="Business Incorporation" {{ (is_array($consultants->offering_service) and in_array("Business Incorporation", $consultants->offering_service)) ? ' checked' : '' }}>
                                                    <label class="custom-control-label" for="Service1">Business Incorporation</label><br>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="Service2" name="offering_service[]" value="Business Consulting" {{ (is_array($consultants->offering_service) and in_array("Business Consulting", $consultants->offering_service)) ? ' checked' : '' }}>
                                                    <label class="custom-control-label" for="Service2">Business Consulting</label><br>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="Service3" name="offering_service[]" value="Family Visa" {{ (is_array($consultants->offering_service) and in_array("Financial Services", $consultants->offering_service)) ? ' checked' : '' }}>
                                                    <label class="custom-control-label" for="Service3">Financial Services</label><br>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="Service4" name="offering_service[]" value="Others" {{ (is_array($consultants->offering_service) and in_array("Others", $consultants->offering_service)) ? ' checked' : '' }}>
                                                    <label class="custom-control-label" for="Service4"> Others</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-12">
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

                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="form-group">
                                                <label>What type of Correspondence you prefer?
                                                </label>
                                                <div class="col-lg-2 col-md-2 col-2 ">
                                                    <div class="custom-control custom-checkbox ">
                                                        <input type="checkbox" class="custom-control-input" id="preferemail" name="communication_mode[]" value="email" {{ (is_array($consultants->communication_mode) and in_array("email", $consultants->communication_mode)) ? ' checked' : '' }}>
                                                        <label class="custom-control-label mt-1" for="preferemail">email</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-2 ">
                                                    <div class="custom-control custom-checkbox ">
                                                        <input type="checkbox" class="custom-control-input " id="preferPhone" name="communication_mode[]" value="phone" {{ (is_array($consultants->communication_mode) and in_array("phone", $consultants->communication_mode)) ? ' checked' : '' }}>
                                                        <label class="custom-control-label mt-1" for="preferPhone">phone</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-2 ">
                                                    <div class="custom-control custom-checkbox ">
                                                        <input type="checkbox" class="custom-control-input " id="preferMessaging" name="communication_mode[]" value="Messaging" {{ (is_array($consultants->communication_mode) and in_array("Messaging", $consultants->communication_mode)) ? ' checked' : '' }}>
                                                        <label class="custom-control-label mt-1" for="preferMessaging">Messaging</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <hr>
                                    <div class="row custom-box">

                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Year of Establishment
                                                </label>
                                                <input class="form-control " type="text" placeholder="Year of Registration" name="establishment_year" value="{{$consultants->establishment_year}}">
                                                <small>Year of Registration</small>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Offering Services Since
                                                </label>
                                                <input class="form-control " type="text" placeholder="Number of Years" name="offering_year" value="{{$consultants->offering_year}}">
                                                <small>Number of Years</small>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Response Time
                                                </label>
                                                <input type="text" class="form-control" name="response_time" value="{{$consultants->response_time}}">
                                                <small>24 or 48 or 72 Hours</small>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="float-right">
                                        <button class="sc-button sc-button-success sc-js-button-wave-light waves-effect waves-button waves-light" type="submit">Submit</button>

                                        <button type="button" class="client-btn bmenu uk-button uk-button-primary">Next </button>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </li>

                    <li id='menu1' class='tab-pane '>
                        <div class='uk-card col-md-10 ' style="margin-left:5% !important;">
                            <div class="uk-card-body sc-padding-medium">
                                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                    <div class="row custom-box">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">

                                                <label>Your Team of Expert</label>
                                                <textarea style="width:100%;" rows="4" placeholder="Provide Team info along with their Specialization" name="team_info">{{$consultants->team_info}}</textarea>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <div id="newRow">
                                                    <div class="form-group">
                                                        @if($teams)
                                                        @foreach($teams as $row )
                                                        <div id="inputFormRow">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-12">
                                                                    <label>Image</label>
                                                                    <img class=" mt-2 img float-center " style="width:50px !important;height:50px !important" src="{{url('files/'.$row ->team_img)}}">

                                                                    <input type="file" class="form-control team addinput" name="team_img[]">
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-12">
                                                                    <label>Team Member</label><br><br>

                                                                    <input class="form-control team addinput" id="team_name" type="text" name="team_name[]" value="{{$row->member}}">
                                                                    <input type="text" name="teamId[]" value="{{$row->id}}" hidden>

                                                                </div>

                                                                <div class="col-lg-4 col-md-4 col-12">
                                                                    <label>Designation</label><br><br>

                                                                    <input class="form-control team addinput" type="text" id="team_designation" name="team_designation[]" value="{{$row->Designation}}">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-12">
                                                                    <label>Area of Expertise</label>

                                                                    <input class="form-control team addinput" type="text" id="team_area_expertise" name="team_area_expertise[]" value="{{$row->expertise_area}}">
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-12">
                                                                    <label>Year of Experience</label>

                                                                    <input class="form-control team addinput" type="text" id="team_experience_year" name="team_experience_year[]" value="{{$row->experience_year}}">
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-12">
                                                                    <label>Number of Successful Cases</label>

                                                                    <input class="form-control team addinput" type="text" id="team_number_success_cases" name="team_number_success_cases[]" value="{{$row->no_success}}">
                                                                </div>
                                                                <div class="col-lg-2 col-md-2 col-12">
                                                                    <br>
                                                                    <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeRow" style="background:#bf0010 !important;margin-top:7.5%"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> Remove</a></button>

                                                                </div>

                                                            </div>
                                                            <br><br>
                                                            <hr>
                                                        </div>
                                                        @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <button id="addRow" type="button" class="btn uk-button uk-button-primary">Add Your Team</button>
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
                        <div class='uk-card col-md-10 ' style="margin-left:5% !important;">
                            <div class="uk-card-body sc-padding-medium">
                                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                    <div class="row custom-box">

                                        <div class="col-lg-2 col-md-2 col-12">
                                            <div class="form-group">
                                                <label>Do you have any Privacy Policies?
                                                </label>
                                                <div class="col-lg-2 col-md-2 col-2 ">
                                                    <div class="custom-control custom-radio ">
                                                        <input type="radio" class="custom-control-input " id="Policies" name="is_Policies" value="yes" {{ $consultants->is_Policies == "yes"  ? ' checked' : '' }}>
                                                        <label class="custom-control-label mt-1" for="Policies">Yes</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-2 col-3 ">
                                                    <div class="custom-control custom-radio ">
                                                        <input type="radio" class="custom-control-input " id="Policiesno" name="is_Policies" value="no" {{ $consultants->is_Policies == "no"  ? ' checked' : '' }}>
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
                                                <a href="{{url('files/'.$consultants->privacy_policy_document)}}" target="_blank" style=" text-decoration: underline;">{{$consultants->privacy_policy_document}}</a>
                                                <input class="form-control " type="file" name="privacy_policy_document" value="{{old('privacy_policy_document')}}">

                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-12">
                                            <div class="form-group">
                                                <label>Terms if Any
                                                </label>
                                                <textarea class="form-control" style="width:100%;" rows="6" name="privacy_policy_detail" value="{{$consultants->privacy_policy_detail}}">{{$consultants->privacy_policy_detail}}</textarea>
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
                                                <textarea class="form-control" style="width:100%;" rows="9" name="history" value="{{$consultants->history}}">{{$consultants->history}}</textarea>
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

                                                <textarea style="width:100%;" rows="9" name="brief_introduction" value="{{$consultants->brief_introduction}}">{{$consultants->brief_introduction}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row custom-box">
                                        <div id="appendImg">
                                            @if($consultants->mutiImg_about_company)
                                            @foreach($consultants->mutiImg_about_company as $row )
                                            <div id="inputImgCover">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2">
                                                        <img class=" mt-2 img float-center " style="width:50px !important;height:50px !important" src="{{url('files/'.$row)}}">
                                                    </div>
                                                    <div class="col-lg-8 col-md-8"><input id="inputImgRow" class="form-control" type="file" name="mutiImg_about_company[]" value="{{$row}}"></div>
                                                    <div class="col-lg-2 col-md-2"> <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeImgRow" style="background:#bf0010 !important;margin-top:7.5%"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> </a></button> </div>
                                                </div><br>
                                            </div>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <button id="addImageRow" type="button" class="uk-button uk-button-primary">Add Images</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-right">
                                        <button class="sc-button sc-button-success sc-js-button-wave-light waves-effect waves-button waves-light" type="submit">Submit</button>

                                        <button type="button" class="client-btn bmenu2 uk-button uk-button-primary">Next </button>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </li>

                    <li id='menu3' class='tab-pane '>
                        <div class='uk-card col-md-10 ' style="margin-left:5% !important;">
                            <div class="uk-card-body sc-padding-medium">
                                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                    <div class="row custom-box">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Awards and Certifications
                                                </label>
                                                <br>
                                                <a href="{{url('files/'.$consultants->Award)}}" target="_blank" style=" text-decoration: underline;">{{$consultants->Award}}</a>
                                                <input type="file" class="form-control" name="Award" value="{{old('Award')}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row custom-box">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <label>Company Achievements
                                                </label>
                                                <br>

                                                <textarea style="width:100%;" rows="9" name="achievement" value="{{$consultants->achievement}}">{{$consultants->achievement}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row custom-box">
                                        <div id="appendImg1">
                                            @if($consultants->mutiImg_about_award)
                                            @foreach($consultants->mutiImg_about_award as $row )
                                            <div id="inputImgCover1">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2">
                                                        <img class=" mt-2 img float-center " style="width:50px !important;height:50px !important" src="{{url('files/'.$row)}}">
                                                    </div>
                                                    <div class="col-lg-8 col-md-8"><input id="inputImgRow1" class="form-control" type="file" name="mutiImg_about_award[]" value="{{$row}}"></div>
                                                    <div class="col-lg-2 col-md-2"> <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeImgRow1" style="background:#bf0010 !important;margin-top:7.5%"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> </a></button> </div>
                                                </div><br>
                                            </div>
                                            @endforeach
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <button id="addImageRow1" type="button" class="uk-button uk-button-primary">Add Images</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-right">
                                        <button class="sc-button sc-button-success sc-js-button-wave-light waves-effect waves-button waves-light" type="submit">Submit</button>

                                        <button type="button" class="client-btn bmenu3 uk-button uk-button-primary">Next </button>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </li>

                    <li id='menu4' class='tab-pane'>
                        <div class='uk-card col-md-10 ' style="margin-left:5% !important;">
                            <div class="uk-card-body sc-padding-medium">
                                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                    <div class="row custom-box">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <label>Your Introductory Video URL Link display on Canada Inspire Portal
                                                </label>
                                                <input class="form-control " type="text" name="vedio_url" value="{{$consultants->vedio_url}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <label>Kindly provide Weblinks for News and Events, Immigration Updates and much more to help Candidates to have more information
                                                </label>
                                                <br>

                                                <textarea style="width:100%;" rows="9" name="event_new_weblink" value="{{$consultants->event_new_weblink}}">{{$consultants->event_new_weblink}}</textarea>
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
                                                            <div class="icon col-lg-1 col-md-1 col-1 fa-2xl">
                                                                <i class="fab fa-facebook-f"></i>

                                                            </div>
                                                            <div id="facebook" class="col-lg-11 col-md-11 col-11  ">
                                                                <div class="form-group">
                                                                    <label> </label>

                                                                    <input id="fb_link" name="fb_link" class="form-control " type="text" placeholder="Facebook Profile " value="{{$consultants->fb_link}}">
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a class="twitter" href="##">
                                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                                                <i class="fab fa-twitter"></i>

                                                            </div>
                                                            <div class="col-lg-11 col-md-11 col-11  " id="twitter">
                                                                <div class="form-group">
                                                                    <label> </label>
                                                                    <input id="twitter_link" name="twitter_link" class="form-control " type="text" placeholder="Twitter Profile " value="{{$consultants->twitter_link}}">
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a class="instagram" href="##">
                                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                                                <i class="fab fa-instagram"></i>

                                                            </div>
                                                            <div class="col-lg-11 col-md-11 col-11  " id="instagram">
                                                                <div class="form-group">
                                                                    <label> </label>
                                                                    <input id="insta_link" name="insta_link" class="form-control " type="text" placeholder="Instagram Profile " value="{{$consultants->insta_link}}">
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a class="linkedin" href="##">
                                                            <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                                                <i class="fab fa-linkedin-in"></i>

                                                            </div>
                                                            <div class="col-lg-11 col-md-11 col-11  " id="linkedin">
                                                                <div class="form-group">
                                                                    <label> </label>
                                                                    <input id="Linkedin_link" name="Linkedin_link" class="form-control " type="text" placeholder="Linkedin Profile " value="{{$consultants->Linkedin_link}}">
                                                                </div>
                                                            </div>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-right">
                                        <button class="sc-button sc-button-success sc-js-button-wave-light waves-effect waves-button waves-light" type="submit">Submit</button>
                                        <button type="button" class="client-btn bmenu4 uk-button uk-button-primary">Next </button>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </li>

                    <li id='menu5' class='tab-pane'>
                        <div class='uk-card col-md-10 ' style="margin-left:5% !important;">
                            <div class="uk-card-body sc-padding-medium">
                                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                    <div class="row custom-box">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <label>Canada Inspire provides Additional Services :-
                                                </label>
                                                <br>

                                                <textarea style="width:100%;" rows="9" id="field_cutjx" data-invmsg="Canada Inspire provides Additional Services :- is invalid" aria-invalid="false" spellcheck="false">
                                   We have a Team of professionals who are having expert in Application Development, Solutions and Services. 
                                   1. Is your Company looking for Website Design/Re Design or Development to give professional look and exposure for International community?
                                   2. Are you looking for development of Online Appointments and Payment Gateway or Integration on your Website?
                                   3. Are you looking for Mobile Application Development to ease your Prospects and Customers?
                                   4. Are you interested to develop Enquiry form, Query, Survey or feedback form to improve and enhance your services?
                                   5. Are you looking for CRM - Customer Relation Management Solutions to maintain and manage your company marketing activities, 
                                   follow-up, and efficiency to generate good revenues for your company and always ahead with your competitors?</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-right">
                                        <button class="sc-button sc-button-success sc-js-button-wave-light waves-effect waves-button waves-light" type="submit">Submit</button>

                                        <button type="button" class="client-btn bmenu5 uk-button uk-button-primary">Next </button>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </li>

                    <li id='menu6' class='tab-pane'>
                        <div class='uk-card col-md-10 ' style="margin-left:5% !important;">
                            <div class="uk-card-body sc-padding-medium">
                                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                    <div class="row custom-box">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <label>We are looking forward to have your valuable Comments/Remarks to add or modify on the above given information to make it more informative.
                                                </label>
                                                <br>

                                                <textarea style="width:100%;" rows="9" name="Comment" value="{{$consultants->Comment}}">{{$consultants->Comment}}</textarea>
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

        </div>

    </div>

</section>


<script>
    $(document).ready(function() {

        $(".amenu").click(function() {

        });
        $(".amenu1").click(function() {

        });
        $(".amenu2").click(function() {

        });
        $(".amenu3").click(function() {

        });
        $(".amenu4").click(function() {

        });
        $(".amenu5").click(function() {

        });
        $(".amenu6").click(function() {

        });

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
        $(".bmenu2").click(function() {
            $('.nav-linkk').removeClass('uk-active');
            $('#amenu3').addClass('uk-active');
            $('.tab-pane').removeClass('uk-active');
            $('#menu3').addClass('uk-active');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

        });
        $(".bmenu3").click(function() {
            $('.nav-linkk').removeClass('uk-active');
            $('#amenu4').addClass('uk-active');
            $('.tab-pane').removeClass('uk-active');
            $('#menu5').addClass('uk-active');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

        });
        $(".bmenu4").click(function() {
            $('.nav-linkk').removeClass('uk-active');
            $('#amenu5').addClass('uk-active');
            $('.tab-pane').removeClass('uk-active');
            $('#menu5').addClass('uk-active');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

        });
        $(".bmenu5").click(function() {
            $('.nav-linkk').removeClass('uk-active');
            $('#amenu6').addClass('uk-active');
            $('.tab-pane').removeClass('uk-active');
            $('#menu6').addClass('uk-active');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

        });

        // if (sessionStorage.getItem("appendhtml")) {
        //     $('#newRow').html(sessionStorage.getItem("appendhtml"))
        // }

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
        $('.socialLink').keyup(function() {

            $(this).attr("value", $(this).val());
            sessionStorage.setItem('socialAppend', $('#socialAppend').html())

        });
        $("#addRow").click(function() {

            var html = '';

            html = `<div  id="inputFormRow">
                      <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Team Member</label>
                                
                                <input class="form-control team addinput" id="team_name" type="text" name="team_name[]"  required>
                                <input type="text" name="teamId[]" value="" hidden>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Image</label>
                                <input type="file" class="form-control team addinput" name="team_img[]">
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Designation</label>
                               
                                <input class="form-control team addinput" type="text" id="team_designation" name="team_designation[]">
                            </div>
                      </div>
                      <br>
                      <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Area of Expertise</label>
    
                                <input class="form-control team addinput" type="text" id="team_area_expertise" name="team_area_expertise[]">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <label>Year of Experience</label>
                                
                                <input class="form-control team addinput" type="text" id="team_experience_year" name="team_experience_year[]">
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <label>Number of Successful Cases</label>
                               
                                <input class="form-control team addinput" type="text" id="team_number_success_cases" name="team_number_success_cases[]">
                            </div>
                            
                            <div class="col-lg-2 col-md-2 col-12">
                               <br>
                               <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeRow" style="background:#bf0010 !important;margin-top:7.5%"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> Remove</a></button>

                            </div>
                         </div>
                              <br><br><hr>
                    </div>
                      
                        `

            $('#newRow').append(html);

            $(".addinput").keyup(function() {
                $(this).attr("value", $(this).val());
                console.log("attrr" + $(this).attr('value'));
                sessionStorage.setItem("appendhtml", $('#newRow').html());
            });
        });

        // remove row
        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
            sessionStorage.setItem("appendhtml", $('#newRow').html());
        });

        $("#addImageRow").click(function() {
            console.log('fi')
            var html = '';
            html = `<div id="inputImgCover"><div  class="row"> <div class="col-lg-2 col-md-2"></div><div class="col-lg-8 col-md-8"><input id="inputImgRow" class="form-control" type="file" name="mutiImg_about_company[]"></div><div class="col-lg-2 col-md-2"> <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeImgRow" style="background:#bf0010 !important;margin-top:7.5%"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> </a></button> </div></div><br></div>`
            $('#appendImg').append(html);

        });
        $(document).on('click', '#removeImgRow', function() {
            console.log('bi')
            $(this).closest('#inputImgCover').remove();
        });
        $("#addImageRow1").click(function() {
            console.log('fi')
            var html = '';
            html = `<div id="inputImgCover1"><div class="row"><div class="col-lg-2 col-md-2"></div><div class="col-lg-8 col-md-8"><input id="inputImgRow1" class="form-control" type="file" name="mutiImg_about_award[]"></div><div class="col-lg-2 col-md-2"> <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeImgRow1" style="background:#bf0010 !important;margin-top:7.5%"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> </a></button> </div></div><br></div>`
            $('#appendImg1').append(html);

        });
        $(document).on('click', '#removeImgRow1', function() {
            console.log('bi')
            $(this).closest('#inputImgCover1').remove();
        });
    });
</script>

<!-- ......................script for google map view.................... -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX4GRZHCs7t1pkpjrRaLoTlCgqX8o46wY&libraries=places&callback=initMap&libraries=places&v=weekly" defer></script>




@endsection