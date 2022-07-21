@extends('layouts.layoutss')
@section('content')


<div id="modal-close-Package" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="width:500px !important">
        <button class="uk-modal-close-default" type="button" data-uk-close></button>
        <form action="{{route('package.add.institude')}}" method="post">
            @csrf
            <h6>Select Package</h6>
            <div class="col-lg-12 col-md-12 col-12">
                <div class="form-group">
                  
                    <select class="form-control" name="package" id="package">
                        <option value="1" {{$package == '1' ? 'selected':''}}>Basic For 3Months</option>
                        <option value="2" {{$package == '2' ? 'selected':''}}>Basic For 6Months</option>
                        <option value="3" {{$package == '3' ? 'selected':''}}>Basic For 12Months</option>
                        <option value="4" {{$package == '4' ? 'selected':''}}>Standard For 3Months</option>
                        <option value="5" {{$package == '5' ? 'selected':''}}>Standard For 6Months</option>
                        <option value="6" {{$package == '6' ? 'selected':''}}>Standard For 12Months</option>
                        <option value="7" {{$package == '7' ? 'selected':''}}>Premium For 3Months</option>
                        <option value="8" {{$package == '8' ? 'selected':''}}>Premium For 6Months</option>
                        <option value="9" {{$package == '9' ? 'selected':''}}>Premium For 12Months</option>

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
    <h5 class="" style="text-align:center;color:#3f6791">Membership Management</h5>

</div>

<div class='col-md-8' style="margin-left:auto !important;margin-right:auto !important">

    <div class="uk-child-width-2-2@s uk-child-width-3-3@l uk-grid" data-uk-grid="" style="margin-left:auto !important;margin-right:auto !important">
        <div class="uk-grid-margin uk-first-column">

            <div class="uk-card">
                <div class="uk-card-header md-bg-red-700 sc-light uk-margin-medium-bottom">
                    <label class="labels">{{$membership->name}}</label>&nbsp;


                </div>
                <input type="text" name="type" value="Basic" hidden>
                <input type="text" name="duration" value="12" hidden>

                <div class="uk-card-body">


                    <div class="row ">
                        <div class="col-md-4">
                            <strong class="labels">Service Provider Type </strong>
                        </div>

                        <div class="col-md-1">
                            <strong class="labels"> : </strong>
                        </div>
                        <div class="col-md-7">
                            <label class="labels">{{$membership->service}}</label><br>

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

                            <label class="labels"> {{$membership->start_date}}</label><br>

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

                            <label class="labels"> {{$membership->end_date}}</label><br>

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
                                @if($package == 1) Basic For 3Months
                                @elseif($package == 2)Basic For 6Months
                                @elseif($package == 3)Basic For 12Months
                                @elseif($package == 4)Standard For 3Months
                                @elseif($package == 5)Standard For 6Months
                                @elseif($package == 6)Standard For 12Months
                                @elseif($package == 7)Premium For 3Months
                                @elseif($package == 8)Premium For 6Months
                                @elseif($package == 9)Premium For 12Months
                                @endif
                            </label><br>

                        </div>
                    </div><br>
                    @endif

                </div>
                <hr class="uk-margin-remove">
                <div class="uk-card-footer md-bg-grey-50">
                    @if($membership->membership_duration == '')
                    <div style="color:tomato">Please complete membership registration to avail Services and Enquiries!</div><br>
                    <a href="{{route('add.membership.institude')}}" class="sc-button"> Membership Registration</a><br><br>
                    @else

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
                                <input class="custom-control-input" type="checkbox" id="3BDashboard" name="Dashboard" value="1" {{ $membershipCandidate1->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3BEA" name="EA" value="1" {{ $membershipCandidate1->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3BDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate1->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3BCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate1->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3BChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate1->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3BEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate1->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3BTelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate1->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3BAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate1->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3BAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate1->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>

                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3BAppointmentScheduler" name="AppointmentScheduler" value="1" {{ $membershipCandidate1->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3BAppointmentScheduler-paid" name="AppointmentScheduler" value="2" {{ $membershipCandidate1->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Appointment Scheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3BeLearningManagementSystem" name="eLearningManagementSystem" value="1" {{ $membershipCandidate1->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3BeLearningManagementSystem-paid" name="eLearningManagementSystem" value="2" {{ $membershipCandidate1->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BeLearningManagementSystem-paid"> Paid</label>
                                </div>
                                &nbsp;&nbsp;
                                <label style="text-transform:none !important">: eLearning Management </label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3BQuickBooks" name="QuickBooks" value="1" {{ $membershipCandidate1->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3BQuickBooks-paid" name="QuickBooks" value="2" {{ $membershipCandidate1->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : QuickBooks </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Diploma" value="{{$membershipCandidate1->Diploma}}">
                                <label>Enquiries TO Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma" value="{{$membershipCandidate1->PG_Diploma}}">
                                <label>Enquiries To PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Certification" value="{{$membershipCandidate1->Certification}}">
                                <label>Enquiries To Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Graduation" value="{{$membershipCandidate1->Graduation}}">
                                <label>Enquiries To Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation" value="{{$membershipCandidate1->Post_Graduation}}">
                                <label>Enquiries To Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate" value="{{$membershipCandidate1->Doctorate}}">
                                <label>Enquiries To Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" name="price" min="0" value="{{$membershipCandidate1->price}}">
                                <label> Package Price</label>
                            </div><br>

                        </div>

                    </li>
                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6BDashboard" name="Dashboard" value="1" {{ $membershipCandidate4->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6BDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6BEA" name="EA" value="1" {{ $membershipCandidate4->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6BEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6BDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate4->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6BDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6BCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate4->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6BCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6BChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate4->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6BChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6BEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate4->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6BEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6BTelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate4->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6BTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6BAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate4->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6BAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate4->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Add On features </label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6BAppointmentScheduler" name="AppointmentScheduler" value="1" {{ $membershipCandidate4->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6BAppointmentScheduler-paid" name="AppointmentScheduler" value="2" {{ $membershipCandidate4->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Appointment Scheduler </label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6BeLearningManagementSystem" name="eLearningManagementSystem" value="1" {{ $membershipCandidate4->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6BeLearningManagementSystem-paid" name="eLearningManagementSystem" value="2" {{ $membershipCandidate4->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BeLearningManagementSystem-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label style="text-transform:none !important"> : eLearning Management </label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6BQuickBooks" name="QuickBooks" value="1" {{ $membershipCandidate4->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6BQuickBooks-paid" name="QuickBooks" value="2" {{ $membershipCandidate4->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : QuickBooks </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Diploma" value="{{$membershipCandidate4->Diploma}}">
                                <label>Enquiries TO Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma" value="{{$membershipCandidate4->PG_Diploma}}">
                                <label>Enquiries To PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Certification" value="{{$membershipCandidate4->Certification}}">
                                <label>Enquiries To Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Graduation" value="{{$membershipCandidate4->Graduation}}">
                                <label>Enquiries To Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation" value="{{$membershipCandidate4->Post_Graduation}}">
                                <label>Enquiries To Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate" value="{{$membershipCandidate4->Doctorate}}">
                                <label>Enquiries To Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" name="price" min="0" value="{{$membershipCandidate4->price}}">
                                <label> Package Price</label>
                            </div><br>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9BDashboard" name="Dashboard" value="1" {{ $membershipCandidate7->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9BDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9BEA" name="EA" value="1" {{ $membershipCandidate7->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9BEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9BDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate7->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9BDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9BCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate7->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9BCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9BChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate7->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9BChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9BEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate7->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9BEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9BTelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate7->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9BTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9BAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate7->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9BAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate7->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9BAppointmentScheduler" name="AppointmentScheduler" value="1" {{ $membershipCandidate7->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9BAppointmentScheduler-paid" name="AppointmentScheduler" value="2" {{ $membershipCandidate7->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Appointment Scheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9BeLearningManagementSystem" name="eLearningManagementSystem" value="1" {{ $membershipCandidate7->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9BeLearningManagementSystem-paid" name="eLearningManagementSystem" value="2" {{ $membershipCandidate7->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BeLearningManagementSystem-paid"> Paid</label>
                                </div> &nbsp;&nbsp;
                                <label style="text-transform:none !important">: eLearning Management </label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9BQuickBooks" name="QuickBooks" value="1" {{ $membershipCandidate7->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9BQuickBooks-paid" name="QuickBooks" value="2" {{ $membershipCandidate7->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: QuickBooks</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Diploma" value="{{$membershipCandidate7->Diploma}}">
                                <label>Enquiries TO Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma" value="{{$membershipCandidate7->PG_Diploma}}">
                                <label>Enquiries To PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Certification" value="{{$membershipCandidate7->Certification}}">
                                <label>Enquiries To Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Graduation" value="{{$membershipCandidate7->Graduation}}">
                                <label>Enquiries To Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation" value="{{$membershipCandidate7->Post_Graduation}}">
                                <label>Enquiries To Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate" value="{{$membershipCandidate7->Doctorate}}">
                                <label>Enquiries To Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" name="price" min="0" value="{{$membershipCandidate7->price}}">
                                <label> Package Price</label>
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
                                <input class="custom-control-input" type="checkbox" id="3SDashboard" name="Dashboard" value="1" {{ $membershipCandidate2->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3SEA" name="EA" value="1" {{ $membershipCandidate2->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3SDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate2->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3SCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate2->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3SChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate2->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3SEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate2->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3STelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate2->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3STelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3SAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate2->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3SAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate2->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3SAppointmentScheduler" name="AppointmentScheduler" value="1" {{ $membershipCandidate2->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3SAppointmentScheduler-paid" name="AppointmentScheduler" value="2" {{ $membershipCandidate2->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Appointment Scheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3SeLearningManagementSystem" name="eLearningManagementSystem" value="1" {{ $membershipCandidate2->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3SeLearningManagementSystem-paid" name="eLearningManagementSystem" value="2" {{ $membershipCandidate2->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SeLearningManagementSystem-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label style="text-transform:none !important">: eLearning Management </label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3SQuickBooks" name="QuickBooks" value="1" {{ $membershipCandidate2->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3SQuickBooks-paid" name="QuickBooks" value="2" {{ $membershipCandidate2->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: QuickBooks</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Diploma" value="{{$membershipCandidate2->Diploma}}">
                                <label>Enquiries TO Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma" value="{{$membershipCandidate2->PG_Diploma}}">
                                <label>Enquiries To PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Certification" value="{{$membershipCandidate2->Certification}}">
                                <label>Enquiries To Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Graduation" value="{{$membershipCandidate2->Graduation}}">
                                <label>Enquiries To Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation" value="{{$membershipCandidate2->Post_Graduation}}">
                                <label>Enquiries To Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate" value="{{$membershipCandidate2->Doctorate}}">
                                <label>Enquiries To Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" name="price" min="0" value="{{$membershipCandidate2->price}}">
                                <label> Package Price</label>
                            </div><br>

                        </div>
                    </li>
                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6SDashboard" name="Dashboard" value="1" {{ $membershipCandidate5->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6SDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6SEA" name="EA" value="1" {{ $membershipCandidate5->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6SEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6SDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate5->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6SDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6SCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate5->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6SCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6SChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate5->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6SChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6SEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate5->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6SEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6STelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate5->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6STelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6SAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate5->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6SAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate5->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6SAppointmentScheduler" name="AppointmentScheduler" value="1" {{ $membershipCandidate5->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6SAppointmentScheduler-paid" name="AppointmentScheduler" value="2" {{ $membershipCandidate5->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Appointment Scheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6SeLearningManagementSystem" name="eLearningManagementSystem" value="1" {{ $membershipCandidate5->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6SeLearningManagementSystem-paid" name="eLearningManagementSystem" value="2" {{ $membershipCandidate5->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SeLearningManagementSystem-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label style="text-transform:none !important">: eLearning Management </label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6SQuickBooks" name="QuickBooks" value="1" {{ $membershipCandidate5->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6SQuickBooks-paid" name="QuickBooks" value="2" {{ $membershipCandidate5->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: QuickBooks</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Diploma" value="{{$membershipCandidate5->Diploma}}">
                                <label>Enquiries TO Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma" value="{{$membershipCandidate5->PG_Diploma}}">
                                <label>Enquiries To PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Certification" value="{{$membershipCandidate5->Certification}}">
                                <label>Enquiries To Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Graduation" value="{{$membershipCandidate5->Graduation}}">
                                <label>Enquiries To Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation" value="{{$membershipCandidate5->Post_Graduation}}">
                                <label>Enquiries To Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate" value="{{$membershipCandidate5->Doctorate}}">
                                <label>Enquiries To Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" name="price" min="0" value="{{$membershipCandidate5->price}}">
                                <label> Package Price</label>
                            </div><br>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9SDashboard" name="Dashboard" value="1" {{ $membershipCandidate8->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9SDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9SEA" name="EA" value="1" {{ $membershipCandidate8->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9SEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9SDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate8->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9SDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9SCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate8->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9SCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9SChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate8->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9SChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9SEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate8->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9SEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9STelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate8->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9STelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9SAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate8->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9SAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate8->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9SAppointmentScheduler" name="AppointmentScheduler" value="1" {{ $membershipCandidate8->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9SAppointmentScheduler-paid" name="AppointmentScheduler" value="2" {{ $membershipCandidate8->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Appointment Scheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9SeLearningManagementSystem" name="eLearningManagementSystem" value="1" {{ $membershipCandidate8->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9SeLearningManagementSystem-paid" name="eLearningManagementSystem" value="2" {{ $membershipCandidate8->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SeLearningManagementSystem-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label style="text-transform:none !important">: eLearning Management </label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9SQuickBooks" name="QuickBooks" value="1" {{ $membershipCandidate8->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9SQuickBooks-paid" name="QuickBooks" value="2" {{ $membershipCandidate8->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: QuickBooks</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Diploma" value="{{$membershipCandidate8->Diploma}}">
                                <label>Enquiries TO Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma" value="{{$membershipCandidate8->PG_Diploma}}">
                                <label>Enquiries To PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Certification" value="{{$membershipCandidate8->Certification}}">
                                <label>Enquiries To Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Graduation" value="{{$membershipCandidate8->Graduation}}">
                                <label>Enquiries To Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation" value="{{$membershipCandidate8->Post_Graduation}}">
                                <label>Enquiries To Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate" value="{{$membershipCandidate8->Doctorate}}">
                                <label>Enquiries To Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" name="price" min="0" value="{{$membershipCandidate8->price}}">
                                <label> Package Price</label>
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
                    <li class="" id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1rem;">12 Months </a></li>

                </u1>
                <u1 class="uk-switcher">

                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3PDashboard" name="Dashboard" value="1" {{ $membershipCandidate3->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3PEA" name="EA" value="1" {{ $membershipCandidate3->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3PDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate3->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3PCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate3->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3PChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate3->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3PEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate3->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3PTelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate3->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3PAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate3->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3PAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate3->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3PAppointmentScheduler" name="AppointmentScheduler" value="1" {{ $membershipCandidate3->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3PAppointmentScheduler-paid" name="AppointmentScheduler" value="2" {{ $membershipCandidate3->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Appointment Scheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3PeLearningManagementSystem" name="eLearningManagementSystem" value="1" {{ $membershipCandidate3->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3PeLearningManagementSystem-paid" name="eLearningManagementSystem" value="2" {{ $membershipCandidate3->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PeLearningManagementSystem-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label style="text-transform:none !important">: eLearning Management </label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3PQuickBooks" name="QuickBooks" value="1" {{ $membershipCandidate3->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3PQuickBooks-paid" name="QuickBooks" value="2" {{ $membershipCandidate3->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: QuickBooks</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Diploma" value="{{$membershipCandidate3->Diploma}}">
                                <label>Enquiries TO Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma" value="{{$membershipCandidate3->PG_Diploma}}">
                                <label>Enquiries To PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Certification" value="{{$membershipCandidate3->Certification}}">
                                <label>Enquiries To Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Graduation" value="{{$membershipCandidate3->Graduation}}">
                                <label>Enquiries To Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation" value="{{$membershipCandidate3->Post_Graduation}}">
                                <label>Enquiries To Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate" value="{{$membershipCandidate3->Doctorate}}">
                                <label>Enquiries To Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" name="price" min="0" value="{{$membershipCandidate3->price}}">
                                <label> Package Price</label>
                            </div><br>

                        </div>
                    </li>
                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6PDashboard" name="Dashboard" value="1" {{ $membershipCandidate6->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6PDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6PEA" name="EA" value="1" {{ $membershipCandidate6->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6PEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6PDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate6->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6PDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6PCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate6->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6PCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6PChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate6->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6PChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6PEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate6->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6PEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6PTelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate6->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6PTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6PAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate6->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6PAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate6->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6PAppointmentScheduler" name="AppointmentScheduler" value="1" {{ $membershipCandidate6->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6PAppointmentScheduler-paid" name="AppointmentScheduler" value="2" {{ $membershipCandidate6->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: AppointmentScheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6PeLearningManagementSystem" name="eLearningManagementSystem" value="1" {{ $membershipCandidate6->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6PeLearningManagementSystem-paid" name="eLearningManagementSystem" value="2" {{ $membershipCandidate6->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PeLearningManagementSystem-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label style="text-transform:none !important">: eLearning Management </label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6PQuickBooks" name="QuickBooks" value="1" {{ $membershipCandidate6->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6PQuickBooks-paid" name="QuickBooks" value="2" {{ $membershipCandidate6->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: QuickBooks</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Diploma" value="{{$membershipCandidate6->Diploma}}">
                                <label>Enquiries TO Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma" value="{{$membershipCandidate6->PG_Diploma}}">
                                <label>Enquiries To PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Certification" value="{{$membershipCandidate6->Certification}}">
                                <label>Enquiries To Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Graduation" value="{{$membershipCandidate6->Graduation}}">
                                <label>Enquiries To Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation" value="{{$membershipCandidate6->Post_Graduation}}">
                                <label>Enquiries To Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate" value="{{$membershipCandidate6->Doctorate}}">
                                <label>Enquiries To Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" name="price" min="0" value="{{$membershipCandidate6->price}}">
                                <label> Package Price</label>
                            </div><br>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9PDashboard" name="Dashboard" value="1" {{ $membershipCandidate9->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9PEA" name="EA" value="1" {{ $membershipCandidate9->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9PDefaultReports" name="DefaultReports" value="1" {{ $membershipCandidate9->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9PCustomizedReports" name="CustomizedReports" value="1" {{ $membershipCandidate9->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9PChatAgents" name="ChatAgents" value="1" {{ $membershipCandidate9->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9PEmailSupport" name="EmailSupport" value="1" {{ $membershipCandidate9->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9PTelephonicSupport" name="TelephonicSupport" value="1" {{ $membershipCandidate9->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9PAdd_On_features_Free" name="Add_On_features_Free" value="1" {{ $membershipCandidate9->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9PAdd_On_features_Free-paid" name="Add_On_features_Free" value="2" {{ $membershipCandidate9->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9PAppointmentScheduler" name="AppointmentScheduler" value="1" {{ $membershipCandidate9->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9PAppointmentScheduler-paid" name="AppointmentScheduler" value="2" {{ $membershipCandidate9->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Appointment Scheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <label>:</label>&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9PeLearningManagementSystem" name="eLearningManagementSystem" value="1" {{ $membershipCandidate9->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9PeLearningManagementSystem-paid" name="eLearningManagementSystem" value="2" {{ $membershipCandidate9->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PeLearningManagementSystem-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label style="text-transform:none !important"> : eLearning Management </label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9PQuickBooks" name="QuickBooks" value="1" {{ $membershipCandidate9->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9PQuickBooks-paid" name="QuickBooks" value="2" {{ $membershipCandidate9->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: QuickBooks</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Diploma" value="{{$membershipCandidate9->Diploma}}">
                                <label>Enquiries TO Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma" value="{{$membershipCandidate9->PG_Diploma}}">
                                <label>Enquiries To PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Certification" value="{{$membershipCandidate9->Certification}}">
                                <label>Enquiries To Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Graduation" value="{{$membershipCandidate9->Graduation}}">
                                <label>Enquiries To Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation" value="{{$membershipCandidate9->Post_Graduation}}">
                                <label>Enquiries To Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate" value="{{$membershipCandidate9->Doctorate}}">
                                <label>Enquiries To Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="text" style="width:40%;height:50%" name="price" min="0" value="{{$membershipCandidate9->price}}">
                                <label> Package Price</label>
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

        $("input[type='checkbox']").click(function() {
            return false;
        })

    });
</script>

@endsection