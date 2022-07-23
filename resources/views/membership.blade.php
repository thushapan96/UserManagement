@extends('layouts.layoutss')
@section('content')

<div id="modal-close-default" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="width:500px !important">
        <button class="uk-modal-close-default" type="button" data-uk-close></button>
        <form action="{{route('service.add')}}" method="post">
            @csrf
            <h6> Extend Services</h6>
            <div class="row custom-box sd multipleCandidate">

                <div class="col-lg-4 col-md-4 col-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input  service" id="customCheck" name="service[]" value="study" {{ (is_array($membership->service) and in_array("study", $membership->service)) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="customCheck">Study </label>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input  service" id="customCheck1" name="service[]" value="migration" {{ (is_array($membership->service) and in_array("migration", $membership->service)) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="customCheck1">Migration </label>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 mb-3">
                    <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input  service" id="customCheck2" name="service[]" value="work" {{ (is_array($membership->service) and in_array("work", $membership->service)) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="customCheck2">Work</label>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-4 mb-3">
                    <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input  service" id="customCheck3" name="service[]" value="business" {{ (is_array($membership->service) and in_array("business", $membership->service)) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="customCheck3">Business</label>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 mb-3">
                    <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input  service" id="customCheck4" name="service[]" value="visa" {{ (is_array($membership->service) and in_array("visa", $membership->service)) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="customCheck4">Visa</label>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 mb-3">
                    <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input  service" id="customCheck5" name="service[]" value="others" {{ (is_array($membership->service) and in_array("others", $membership->service)) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="customCheck5">Others</label>
                    </div>
                </div>
            </div>
            <p class="uk-text-center">
                <button class="sc-button" type="submit">Confirm</button>
            </p>
        </form>
    </div>
</div>

<div id="modal-close-Package" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="width:500px !important">
        <button class="uk-modal-close-default" type="button" data-uk-close></button>
        <form action="{{route('package.add')}}" method="post">
            @csrf
            <h6> Select Package </h6>
            <div class="col-lg-12 col-md-12 col-12">
                <div class="form-group">

                    <select class="form-control" name="package" id="package">
                        @foreach($packagePriceList as $row)
                        <option value="{{$row->id}}" {{$package == $row->id ? 'selected' :''}}>{{$row->type == 'Stanadard' ? 'Standard':$row->type}} For {{$row->duration}} Months - {{$row->price}} {{$currencyPrice}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <input type="text" value="{{$membership->membership_duration}}" name="membership_duration" hidden>
            <p class="uk-text-center">
                <button class="sc-button" type="submit">Confirm</button>
            </p>
        </form>
    </div>
</div>
@csrf
<div class='col-md-9 ' style="margin-left:auto !important;margin-right:auto !important">
    <h5 style="text-align:center;color:#3f6791">Membership Management</h5>

</div>

<div class='col-md-8' style="margin-left:auto !important;margin-right:auto !important">

    <div class="uk-child-width-2-2@s uk-child-width-3-3@l uk-grid" data-uk-grid="" style="margin-left:auto !important;margin-right:auto !important">
        <div class="uk-grid-margin uk-first-column">
            @csrf
            <div class="uk-card">
                <div class="uk-card-header md-bg-red-700 sc-light uk-margin-medium-bottom">
                    <label class="labels">{{$membership->first_name}}</label>&nbsp;
                    <label class="labels">{{$membership->middle_name}}</label>&nbsp;
                    <label class="labels">{{$membership->last_name}}</label>

                </div>
                <input type="text" name="type" value="Basic" hidden>
                <input type="text" name="duration" value="12" hidden>

                <div class="uk-card-body">


                    <div class="row ">
                        <div class="col-md-4">
                            <strong class="labels"> Service Type</strong>
                        </div>

                        <div class="col-md-1">
                            <strong class="labels"> : </strong>
                        </div>
                        <div class="col-md-7">
                            <label class="labels">{{$membership->service_type}}</label><br>

                        </div>
                    </div><br>

                    <div class="row ">
                        <div class="col-md-4">
                            <strong class="labels"> Selected Services</strong>
                        </div>

                        <div class="col-md-1">
                            <strong class="labels"> : </strong>
                        </div>
                        <div class="col-md-7">
                            @foreach($membership->service as $row)
                            <label class="labels"> {{$row}}</label><br>
                            @endforeach
                        </div>
                    </div><br>

                    @if($membership->membership_duration)
                    <div class="row ">
                        <div class="col-md-4">
                            <strong class="labels"> Register Date</strong>
                        </div>

                        <div class="col-md-1">
                            <strong class="labels"> : </strong>
                        </div>
                        <div class="col-md-7">

                            <label class="labels">
                                @if($membership->start_date)
                                @if($configureDate == '1')
                                {{date('Y-m-d', strtotime($membership->start_date))}}
                                @elseif($configureDate == '2')
                                {{date('d-m-Y', strtotime($membership->start_date))}}
                                @elseif($configureDate == '3')
                                {{date('m-d-Y', strtotime($membership->start_date))}}
                                @endif
                                @endif
                            </label><br>

                        </div>
                    </div><br>
                    <div class="row ">
                        <div class="col-md-4">
                            <strong class="labels"> Expiry Date</strong>
                        </div>

                        <div class="col-md-1">
                            <strong class="labels"> : </strong>
                        </div>
                        <div class="col-md-7">

                            <label class="labels">
                                @if($membership->end_date)
                                @if($configureDate == '1')
                                {{date('Y-m-d', strtotime($membership->end_date))}}
                                @elseif($configureDate == '2')
                                {{date('d-m-Y', strtotime($membership->end_date))}}
                                @elseif($configureDate == '3')
                                {{date('m-d-Y', strtotime($membership->end_date))}}
                                @endif
                                @endif
                            </label><br>

                        </div>
                    </div><br>
                    <div class="row ">
                        <div class="col-md-4">
                            <strong class="labels"> Membership Duration</strong>
                        </div>

                        <div class="col-md-1">
                            <strong class="labels"> : </strong>
                        </div>
                        <div class="col-md-7">

                            <label class="labels"> {{$membership->membership_duration}} Months</label><br>

                        </div>
                    </div><br>

                    <div class="row ">
                        <div class="col-md-4">
                            <strong class="labels"> Selected Package</strong>
                        </div>

                        <div class="col-md-1">
                            <strong class="labels"> : </strong>
                        </div>
                        <div class="col-md-7">

                            <label class="labels">
                                @if($package == 1) Basic For 3 Months
                                @elseif($package == 2)Basic For 6 Months
                                @elseif($package == 3)Basic For 12 Months
                                @elseif($package == 4)Standard For 3 Months
                                @elseif($package == 5)Standard For 6 Months
                                @elseif($package == 6)Standard For 12 Months
                                @elseif($package == 7)Premium For 3 Months
                                @elseif($package == 8)Premium For 6 Months
                                @elseif($package == 9)Premium For 12 Months
                                @endif
                            </label><br>

                        </div>
                    </div><br>
                    <div class="row ">
                        <div class="col-md-4">
                            <strong class="labels"> Selected Package Price</strong>
                        </div>

                        <div class="col-md-1">
                            <strong class="labels"> : </strong>
                        </div>
                        <div class="col-md-7">

                            <label class="labels">
                                {{$packagePrice}} {{$currencyPrice}}
                            </label><br>

                        </div>
                    </div><br>
                    @endif

                </div>
                <hr class="uk-margin-remove">
                <div class="uk-card-footer md-bg-grey-50">
                    @if($membership->membership_duration == '')
                    <div style="color:tomato">Please complete membership registration to avail Services and Enquiries!</div><br>
                    <a href="{{route('add.membership')}}" class="sc-button"> Membership Registration</a><br><br>
                    @else
                    <a href="#" class="sc-button" data-uk-toggle="target: #modal-close-default"> Extend Services</a><br><br>
                    <a href="#" class="sc-button" data-uk-toggle="target: #modal-close-Package"> Change Package</a>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div><br>
<h6 class="" style="text-align:center">Package Details </h6>

<div class="uk-child-width-1-3@l uk-child-width-1-2@m uk-grid uk-grid-stack" data-uk-grid="">
    <div class="uk-first-column">
        <div class="uk-card">
            <h6 class="uk-card-title" style="text-align:center">Basic</h6>
            <div class="uk-card-body">
                <u1 class="" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:auto !important;margin-right:auto">
                    <li class="uk-active" id="amenu"><a style="cursor:pointer;padding: 0.5rem 1rem;" aria-current="page"> 3 Months </a></li>
                    <li class="" id="amenu1"><a style="cursor:pointer;padding: 0.5rem  1rem;"> 6 Months</a></li>
                    <li class="" id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1rem;">12 Months </a></li>

                </u1>
                <u1 class="uk-switcher">

                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3BDashboard" name="Dashboard" value="1" {{ $membershipCandidate1->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3BEA" name="EA" value="1" {{ $membershipCandidate1->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BEA">Educational Assessment</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3BCalculator" name="Calculator" value="1" {{ $membershipCandidate1->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BCalculator">CRS Calculator</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3BDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate1->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3BCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate1->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3BChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate1->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3BEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate1->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3BTelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate1->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="3BAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate1->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BAdd_On_features_Free">Free</label>
                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="3BAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate1->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="3BAnytime_Single_Multiple" name="Anytime_Single_Multiple" value="1" {{ $membershipCandidate1->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BAnytime_Single_Multiple">free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="3BAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple" value="2" {{ $membershipCandidate1->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>

                            <label style="text-decoration:underline">Maximum Enquiries for service providers</label><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool" value="{{$membershipCandidate1->EnquiriesSchool}}">
                                <label>Enquiries To School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege" value="{{$membershipCandidate1->EnquiriesCollege}}">
                                <label>Enquiries To College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity" value="{{$membershipCandidate1->EnquiriesUniversity}}">
                                <label>Enquiries To University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant" value="{{$membershipCandidate1->EnquiriesRCICConsultant}}">
                                <label>Enquiries To RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration" value="{{$membershipCandidate1->EnquiriesImmigration}}">
                                <label>Enquiries To Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness" value="{{$membershipCandidate1->EnquiriesBusiness}}">
                                <label>Enquiries To Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" value="{{$membershipCandidate1->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PDashboard" name="Dashboard" value="1" {{ $membershipCandidate4->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PEA" name="EA" value="1" {{ $membershipCandidate4->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEA">Educational Assessment</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PCalculator" name="Calculator" value="1" {{ $membershipCandidate4->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PCalculator">CRS Calculator</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate4->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate4->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate4->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate4->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PTelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate4->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate4->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate4->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAnytime_Single_Multiple" name="Anytime_Single_Multiple" value="1" {{ $membershipCandidate4->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAnytime_Single_Multiple">free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple" value="2" {{ $membershipCandidate4->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <label style="text-decoration:underline">Maximum Enquiries for service providers</label><br>

                            <div class="">
                                <input class="" type="text" id="9PEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool" value="{{$membershipCandidate4->EnquiriesSchool}}">
                                <label>Enquiries To School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege" value="{{$membershipCandidate4->EnquiriesCollege}}">
                                <label>Enquiries To College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity" value="{{$membershipCandidate4->EnquiriesUniversity}}">
                                <label>Enquiries To University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant" value="{{$membershipCandidate4->EnquiriesRCICConsultant}}">
                                <label>Enquiries To RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration" value="{{$membershipCandidate4->EnquiriesImmigration}}">
                                <label>Enquiries To Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness" value="{{$membershipCandidate4->EnquiriesBusiness}}">
                                <label>Enquiries To Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" value="{{$membershipCandidate4->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PDashboard" name="Dashboard" value="1" {{ $membershipCandidate7->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PEA" name="EA" value="1" {{ $membershipCandidate7->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEA">Educational Assessment</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PCalculator" name="Calculator" value="1" {{ $membershipCandidate7->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PCalculator">CRS Calculator</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate7->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate7->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate7->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate7->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PTelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate7->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate7->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate7->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAnytime_Single_Multiple" name="Anytime_Single_Multiple" value="1" {{ $membershipCandidate7->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAnytime_Single_Multiple"> free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple" value="2" {{ $membershipCandidate7->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <label style="text-decoration:underline">Maximum Enquiries for service providers</label><br>

                            <div class="">
                                <input class="" type="text" id="9PEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool" value="{{$membershipCandidate7->EnquiriesSchool}}">
                                <label>Enquiries To School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege" value="{{$membershipCandidate7->EnquiriesCollege}}">
                                <label>Enquiries To College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity" value="{{$membershipCandidate7->EnquiriesUniversity}}">
                                <label>Enquiries To University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant" value="{{$membershipCandidate7->EnquiriesRCICConsultant}}">
                                <label>Enquiries To RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration" value="{{$membershipCandidate7->EnquiriesImmigration}}">
                                <label>Enquiries To Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness" value="{{$membershipCandidate7->EnquiriesBusiness}}">
                                <label>Enquiries To Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" value="{{$membershipCandidate7->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                    </li>
                </u1>
            </div>
        </div>
    </div>
    <div class="uk-grid-margin uk-first-column">
        <div class="uk-card">
            <h6 class="uk-card-title" style="text-align:center">Standard</h6>
            <div class="uk-card-body">
                <u1 class="" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:auto !important;margin-right:auto">
                    <li class="uk-active" id="amenu"><a style="cursor:pointer;padding: 0.5rem 1rem;" aria-current="page"> 3 Months </a></li>
                    <li class="" id="amenu1"><a style="cursor:pointer;padding: 0.5rem  1rem;"> 6 Months</a></li>
                    <li class="" id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1rem;">12 Months </a></li>

                </u1>
                <u1 class="uk-switcher">

                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3SDashboard" name="Dashboard" value="1" {{ $membershipCandidate2->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3SEA" name="EA" value="1" {{ $membershipCandidate2->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SEA">Educational Assessment</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3SCalculator" name="Calculator" value="1" {{ $membershipCandidate2->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SCalculator">CRS Calculator</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3SDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate2->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3SCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate2->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3SChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate2->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3SEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate2->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3STelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate2->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3STelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="3SAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate2->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="3SAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate2->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="3SAnytime_Single_Multiple" name="Anytime_Single_Multiple" value="1" {{ $membershipCandidate2->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SAnytime_Single_Multiple">free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="3SAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple" value="2" {{ $membershipCandidate2->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <label style="text-decoration:underline">Maximum Enquiries for service providers</label><br>

                            <div class="">
                                <input class="" type="text" id="3SEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool" value="{{$membershipCandidate2->EnquiriesSchool}}">
                                <label>Enquiries To School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3SEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege" value="{{$membershipCandidate2->EnquiriesCollege}}">
                                <label>Enquiries To College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3SEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity" value="{{$membershipCandidate2->EnquiriesUniversity}}">
                                <label>Enquiries To University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3SEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant" value="{{$membershipCandidate2->EnquiriesRCICConsultant}}">
                                <label>Enquiries To RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3SEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration" value="{{$membershipCandidate2->EnquiriesImmigration}}">
                                <label>Enquiries To Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3SEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness" value="{{$membershipCandidate2->EnquiriesBusiness}}">
                                <label>Enquiries To Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" value="{{$membershipCandidate2->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PDashboard" name="Dashboard" value="1" {{ $membershipCandidate5->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PEA" name="EA" value="1" {{ $membershipCandidate5->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEA">Educational Assessment</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PCalculator" name="Calculator" value="1" {{ $membershipCandidate5->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PCalculator">CRS Calculator</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate5->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate5->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate5->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate5->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PTelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate5->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate5->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate5->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAnytime_Single_Multiple" name="Anytime_Single_Multiple" value="1" {{ $membershipCandidate5->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAnytime_Single_Multiple">free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple" value="2" {{ $membershipCandidate5->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <label style="text-decoration:underline">Maximum Enquiries for service providers</label><br>

                            <div class="">
                                <input class="" type="text" id="9PEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool" value="{{$membershipCandidate5->EnquiriesSchool}}">
                                <label>Enquiries To School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege" value="{{$membershipCandidate5->EnquiriesCollege}}">
                                <label>Enquiries To College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity" value="{{$membershipCandidate5->EnquiriesUniversity}}">
                                <label>Enquiries To University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant" value="{{$membershipCandidate5->EnquiriesRCICConsultant}}">
                                <label>Enquiries To RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration" value="{{$membershipCandidate5->EnquiriesImmigration}}">
                                <label>Enquiries To Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness" value="{{$membershipCandidate5->EnquiriesBusiness}}">
                                <label>Enquiries To Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" value="{{$membershipCandidate5->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PDashboard" name="Dashboard" value="1" {{ $membershipCandidate8->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PEA" name="EA" value="1" {{ $membershipCandidate8->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEA">Educational Assessment</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PCalculator" name="Calculator" value="1" {{ $membershipCandidate8->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PCalculator">CRS Calculator</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate8->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate8->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate8->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate8->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PTelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate8->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate8->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate8->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAnytime_Single_Multiple" name="Anytime_Single_Multiple" value="1" {{ $membershipCandidate8->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAnytime_Single_Multiple">free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple" value="2" {{ $membershipCandidate8->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <label style="text-decoration:underline">Maximum Enquiries for service providers</label><br>

                            <div class="">
                                <input class="" type="text" id="9PEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool" value="{{$membershipCandidate8->EnquiriesSchool}}">
                                <label>Enquiries To School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege" value="{{$membershipCandidate8->EnquiriesCollege}}">
                                <label>Enquiries To College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity" value="{{$membershipCandidate8->EnquiriesUniversity}}">
                                <label>Enquiries To University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant" value="{{$membershipCandidate8->EnquiriesRCICConsultant}}">
                                <label>Enquiries To RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration" value="{{$membershipCandidate8->EnquiriesImmigration}}">
                                <label>Enquiries To Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness" value="{{$membershipCandidate8->EnquiriesBusiness}}">
                                <label>Enquiries To Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" value="{{$membershipCandidate8->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                    </li>
                </u1>
            </div>
        </div>
    </div>
    <div class="uk-grid-margin uk-first-column">
        <div class="uk-card">
            <h6 class="uk-card-title" style="text-align:center">Premium</h6>
            <div class="uk-card-body">
                <u1 class="" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:auto !important;margin-right:auto">
                    <li class="uk-active" id="amenu"><a style="cursor:pointer;padding: 0.5rem 1rem;" aria-current="page"> 3 Months </a></li>
                    <li class="" id="amenu1"><a style="cursor:pointer;padding: 0.5rem  1rem;"> 6 Months</a></li>
                    <li class="" id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1rem;"> 12 Months </a></li>
                </u1>

                <u1 class="uk-switcher">

                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3PDashboard" name="Dashboard" value="1" {{ $membershipCandidate3->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3PEA" name="EA" value="1" {{ $membershipCandidate3->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PEA">Educational Assessment</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3PCalculator" name="Calculator" value="1" {{ $membershipCandidate3->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PCalculator">CRS Calculator</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3PDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate3->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3PCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate3->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3PChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate3->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3PEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate3->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="3PTelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate3->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="3PAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate3->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="3PAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate3->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="3PAnytime_Single_Multiple" name="Anytime_Single_Multiple" value="1" {{ $membershipCandidate3->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PAnytime_Single_Multiple">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="3PAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple" value="2" {{ $membershipCandidate3->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <label style="text-decoration:underline">Maximum Enquiries for service providers</label><br>

                            <div class="">
                                <input class="" type="text" id="3PEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool" value="{{$membershipCandidate3->EnquiriesSchool}}">
                                <label>Enquiries To School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3PEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege" value="{{$membershipCandidate3->EnquiriesCollege}}">
                                <label>Enquiries To College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3PEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity" value="{{$membershipCandidate3->EnquiriesUniversity}}">
                                <label>Enquiries To University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3PEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant" value="{{$membershipCandidate3->EnquiriesRCICConsultant}}">
                                <label>Enquiries To RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3PEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration" value="{{$membershipCandidate3->EnquiriesImmigration}}">
                                <label>Enquiries To Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3PEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness" value="{{$membershipCandidate3->EnquiriesBusiness}}">
                                <label>Enquiries To Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" value="{{$membershipCandidate3->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PDashboard" name="Dashboard" value="1" {{ $membershipCandidate6->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PEA" name="EA" value="1" {{ $membershipCandidate6->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEA">Educational Assessment</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PCalculator" name="Calculator" value="1" {{ $membershipCandidate6->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PCalculator">CRS Calculator</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate6->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate6->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate6->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate6->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PTelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate6->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate6->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate6->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAnytime_Single_Multiple" name="Anytime_Single_Multiple" value="1" {{ $membershipCandidate6->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAnytime_Single_Multiple">free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple" value="2" {{ $membershipCandidate6->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <label style="text-decoration:underline">Maximum Enquiries for service providers</label><br>

                            <div class="">
                                <input class="" type="text" id="9PEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool" value="{{$membershipCandidate6->EnquiriesSchool}}">
                                <label>Enquiries To School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege" value="{{$membershipCandidate6->EnquiriesCollege}}">
                                <label>Enquiries To College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity" value="{{$membershipCandidate6->EnquiriesUniversity}}">
                                <label>Enquiries To University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant" value="{{$membershipCandidate6->EnquiriesRCICConsultant}}">
                                <label>Enquiries To RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration" value="{{$membershipCandidate6->EnquiriesImmigration}}">
                                <label>Enquiries To Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness" value="{{$membershipCandidate6->EnquiriesBusiness}}">
                                <label>Enquiries To Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" value="{{$membershipCandidate6->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PDashboard" name="Dashboard" value="1" {{ $membershipCandidate9->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PEA" name="EA" value="1" {{ $membershipCandidate9->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEA">Educational Assessment</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PCalculator" name="Calculator" value="1" {{ $membershipCandidate9->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PCalculator">CRS Calculator</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate9->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate9->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate9->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate9->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkfalse" type="checkbox" id="9PTelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate9->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <label>Add On features</label>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate9->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate9->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAnytime_Single_Multiple" name="Anytime_Single_Multiple" value="1" {{ $membershipCandidate9->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAnytime_Single_Multiple">free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input checkfalse" type="checkbox" id="9PAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple" value="2" {{ $membershipCandidate9->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <label style="text-decoration:underline">Maximum Enquiries for service providers</label><br>

                            <div class="">
                                <input class="" type="text" id="9PEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool" value="{{$membershipCandidate9->EnquiriesSchool}}">
                                <label>Enquiries To School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege" value="{{$membershipCandidate9->EnquiriesCollege}}">
                                <label>Enquiries To College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity" value="{{$membershipCandidate9->EnquiriesUniversity}}">
                                <label>Enquiries To University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant" value="{{$membershipCandidate9->EnquiriesRCICConsultant}}">
                                <label>Enquiries To RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration" value="{{$membershipCandidate9->EnquiriesImmigration}}">
                                <label>Enquiries To Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="9PEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness" value="{{$membershipCandidate9->EnquiriesBusiness}}">
                                <label>Enquiries To Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" value="{{$membershipCandidate9->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                    </li>
                </u1>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("input[type='text']").prop("disabled", true);

        $(".checkfalse").click(function() {
            return false;
        })
        var service = @json($membership -> service);


        console.log(service);
        $(".service").click(function() {

            var val = $(this).val();

            if (jQuery.inArray(val, service) != -1) {
                alert('You Can not Degrade Services !')
                return false;
            }

        })

    });
</script>

@endsection