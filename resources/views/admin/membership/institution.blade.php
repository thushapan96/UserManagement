@extends('layouts.admin')
@section('content')
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);



    html,
    body {
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        height: 100%;
        width: 100%;
        background: #FFF;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
    }

    .wrapper {
        display: table;
        height: 100%;
        width: 100%;
    }

    .container-fostrap {
        display: table-cell;
        padding: 1em;
        text-align: center;
        vertical-align: middle;
    }

    .fostrap-logo {
        width: 100px;
        margin-bottom: 15px
    }

    h1.heading {
        color: #fff;
        font-size: 1.15em;
        font-weight: 900;
        margin: 0 0 0.5em;
        color: #505050;
    }

    @media (min-width: 450px) {
        h1.heading {
            font-size: 3.55em;
        }
    }

    @media (min-width: 760px) {
        h1.heading {
            font-size: 3.05em;
        }
    }

    @media (min-width: 900px) {
        h1.heading {
            font-size: 3.25em;
            margin: 0 0 0.3em;
        }
    }

    .card {
        display: block;
        width: 90%;
        height: 240px;
        margin-bottom: 20px;
        line-height: 1.42857143;
        border-radius: 5px;
        overflow: auto;
        box-shadow: 0 7px 9px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        transition: box-shadow .25s;
    }

    .card:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .img-card {
        width: 100%;
        height: 200px;
        border-top-left-radius: 2px;
        border-top-right-radius: 2px;
        display: block;
        overflow: hidden;
    }

    .img-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: all .25s ease;
    }

    .card-content {
        padding: 15px;
        text-align: left;
        height: 200px;
        overflow: auto;
    }

    .card-title {
        margin-top: 0px;
        float: none !important;
        font-weight: 700;
        font-size: 1.65em;
        text-align: center;
    }

    .card-text {
        margin-top: 10%;
        text-align: center;
    }

    .card-title a {
        color: #000;
        text-decoration: none !important;
        text-align: center;
    }

    .card-read-more {
        border-top: 2px solid #D4D4D4;
    }

    .card-read-more a {
        text-decoration: none !important;
        padding: 10px;
        font-weight: 600;
        text-transform: uppercase;
        height: 20px;
        line-height: 10px;
    }

    .example::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .example {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>

<h6 style="text-align:center;color:#3f6791">Institution Membership Management</h6>
<br>
<form id="form" action="{{route('admin.institution.mebership.add')}}" method="post">
    @csrf

    <u1 class="col-md-4" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:auto !important;margin-right:auto">
        <li class="uk-active" id="amenu"><a style="cursor:pointer;padding: 0.5rem 1rem;" aria-current="page"> 3 Months </a></li>
        <li class="" id="amenu1"><a style="cursor:pointer;padding: 0.5rem  1rem;"> 6 Months</a></li>
        <li class="" id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1rem;">12 Months </a></li>

    </u1>

    <u1 class="uk-switcher">

        <li>
            <div class="uk-child-width-1-2@s uk-child-width-1-3@l uk-grid" data-uk-grid="">
                <div class="uk-grid-margin uk-first-column">

                    <div class="uk-card">

                        <div class="uk-card-header md-bg-red-700 sc-light uk-margin-medium-bottom">
                            <h6>Basic</h6>

                        </div>
                        <input type="text" name="type" value="Basic" hidden>
                        <input type="text" name="duration" value="3" hidden>


                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3BDashboard" name="Dashboard1" value="1" {{ $membershipCandidate1->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3BEA" name="EA1" value="1" {{ $membershipCandidate1->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3BDefaultReports" name="DefaultReports1" value="1" {{ $membershipCandidate1->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3BCustomizedReports" name="CustomizedReports1" value="1" {{ $membershipCandidate1->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3BChatAgents" name="ChatAgents1" value="1" {{ $membershipCandidate1->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3BEmailSupport" name="EmailSupport1" value="1" {{ $membershipCandidate1->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3BTelephonicSupport" name="TelephonicSupport1" value="1" {{ $membershipCandidate1->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3BAdd_On_features_Free" name="Add_On_features_Free1" value="1" {{ $membershipCandidate1->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3BAdd_On_features_Free-paid" name="Add_On_features_Free1" value="2" {{ $membershipCandidate1->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>

                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3BAppointmentScheduler" name="AppointmentScheduler1" value="1" {{ $membershipCandidate1->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3BAppointmentScheduler-paid" name="AppointmentScheduler1" value="2" {{ $membershipCandidate1->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Appointment Scheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3BeLearningManagementSystem" name="eLearningManagementSystem1" value="1" {{ $membershipCandidate1->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3BeLearningManagementSystem-paid" name="eLearningManagementSystem1" value="2" {{ $membershipCandidate1->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BeLearningManagementSystem-paid"> Paid</label>
                                </div>
                                &nbsp;&nbsp;
                                <label style="text-transform:none !important">: eLearning Management System</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3BQuickBooks" name="QuickBooks1" value="1" {{ $membershipCandidate1->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3BQuickBooks-paid" name="QuickBooks1" value="2" {{ $membershipCandidate1->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : QuickBooks </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Diploma1" value="{{$membershipCandidate1->Diploma}}">
                                <label>Enquiries-Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma1" value="{{$membershipCandidate1->PG_Diploma}}">
                                <label>Enquiries-PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Certification1" value="{{$membershipCandidate1->Certification}}">
                                <label>Enquiries-Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Graduation1" value="{{$membershipCandidate1->Graduation}}">
                                <label>Enquiries-Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation1" value="{{$membershipCandidate1->Post_Graduation}}">
                                <label>Enquiries-Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate1" value="{{$membershipCandidate1->Doctorate}}">
                                <label>Enquiries-Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" min="0" name="price1" value="{{$membershipCandidate1->price}}">
                                {{$currencyPrice}} :<label> Package Price</label>
                            </div><br>

                        </div>
                        <hr class="uk-margin-remove">

                    </div>

                </div>
                <div class="uk-grid-margin uk-first-column">

                    <div class="uk-card">
                        <div class="uk-card-header md-bg-red-700 sc-light uk-margin-medium-bottom">
                            <h6>Standard</h6>
                        </div>
                        <input type="text" name="type" value="Stanadard" hidden>
                        <input type="text" name="duration" value="3" hidden>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3SDashboard" name="Dashboard4" value="1" {{ $membershipCandidate2->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3SEA" name="EA4" value="1" {{ $membershipCandidate2->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3SDefaultReports" name="DefaultReports4" value="1" {{ $membershipCandidate2->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3SCustomizedReports" name="CustomizedReports4" value="1" {{ $membershipCandidate2->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3SChatAgents" name="ChatAgents4" value="1" {{ $membershipCandidate2->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3SEmailSupport" name="EmailSupport4" value="1" {{ $membershipCandidate2->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3STelephonicSupport" name="TelephonicSupport4" value="1" {{ $membershipCandidate2->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3STelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3SAdd_On_features_Free" name="Add_On_features_Free4" value="1" {{ $membershipCandidate2->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3SAdd_On_features_Free-paid" name="Add_On_features_Free4" value="2" {{ $membershipCandidate2->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3SAppointmentScheduler" name="AppointmentScheduler4" value="1" {{ $membershipCandidate2->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3SAppointmentScheduler-paid" name="AppointmentScheduler4" value="2" {{ $membershipCandidate2->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Appointment Scheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3SeLearningManagementSystem" name="eLearningManagementSystem4" value="1" {{ $membershipCandidate2->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3SeLearningManagementSystem-paid" name="eLearningManagementSystem4" value="2" {{ $membershipCandidate2->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SeLearningManagementSystem-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label style="text-transform:none !important">: eLearning Management System</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3SQuickBooks" name="QuickBooks4" value="1" {{ $membershipCandidate2->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3SQuickBooks-paid" name="QuickBooks4" value="2" {{ $membershipCandidate2->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: QuickBooks</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Diploma4" value="{{$membershipCandidate2->Diploma}}">
                                <label>Enquiries-Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma4" value="{{$membershipCandidate2->PG_Diploma}}">
                                <label>Enquiries-PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Certification4" value="{{$membershipCandidate2->Certification}}">
                                <label>Enquiries-Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Graduation4" value="{{$membershipCandidate2->Graduation}}">
                                <label>Enquiries-Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation4" value="{{$membershipCandidate2->Post_Graduation}}">
                                <label>Enquiries-Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate4" value="{{$membershipCandidate2->Doctorate}}">
                                <label>Enquiries-Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" min="0" name="price4" value="{{$membershipCandidate2->price}}">
                                {{$currencyPrice}} :<label> Package Price</label>
                            </div><br>

                        </div>
                        <hr class="uk-margin-remove">

                    </div>

                </div>
                <div class="uk-grid-margin uk-first-column">

                    <div class="uk-card">
                        <div class="uk-card-header md-bg-red-700 sc-light uk-margin-medium-bottom">
                            <h6>Premium</h6>
                        </div>
                        <input type="text" name="type" value="Premium" hidden>
                        <input type="text" name="duration" value="3" hidden>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3PDashboard" name="Dashboard7" value="1" {{ $membershipCandidate3->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3PEA" name="EA7" value="1" {{ $membershipCandidate3->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3PDefaultReports" name="DefaultReports7" value="1" {{ $membershipCandidate3->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3PCustomizedReports" name="CustomizedReports7" value="1" {{ $membershipCandidate3->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3PChatAgents" name="ChatAgents7" value="1" {{ $membershipCandidate3->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3PEmailSupport" name="EmailSupport7" value="1" {{ $membershipCandidate3->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="3PTelephonicSupport" name="TelephonicSupport7" value="1" {{ $membershipCandidate3->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3PAdd_On_features_Free" name="Add_On_features_Free7" value="1" {{ $membershipCandidate3->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3PAdd_On_features_Free-paid" name="Add_On_features_Free7" value="2" {{ $membershipCandidate3->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3PAppointmentScheduler" name="AppointmentScheduler7" value="1" {{ $membershipCandidate3->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3PAppointmentScheduler-paid" name="AppointmentScheduler7" value="2" {{ $membershipCandidate3->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Appointment Scheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3PeLearningManagementSystem" name="eLearningManagementSystem7" value="1" {{ $membershipCandidate3->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3PeLearningManagementSystem-paid" name="eLearningManagementSystem7" value="2" {{ $membershipCandidate3->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PeLearningManagementSystem-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label style="text-transform:none !important">: eLearning Management System</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3PQuickBooks" name="QuickBooks7" value="1" {{ $membershipCandidate3->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3PQuickBooks-paid" name="QuickBooks7" value="2" {{ $membershipCandidate3->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: QuickBooks</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Diploma7" value="{{$membershipCandidate3->Diploma}}">
                                <label>Enquiries-Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma7" value="{{$membershipCandidate3->PG_Diploma}}">
                                <label>Enquiries-PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Certification7" value="{{$membershipCandidate3->Certification}}">
                                <label>Enquiries-Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Graduation7" value="{{$membershipCandidate3->Graduation}}">
                                <label>Enquiries-Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation7" value="{{$membershipCandidate3->Post_Graduation}}">
                                <label>Enquiries-Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate7" value="{{$membershipCandidate3->Doctorate}}">
                                <label>Enquiries-Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" min="0" name="price7" value="{{$membershipCandidate3->price}}">
                                {{$currencyPrice}} :<label> Package Price</label>
                            </div><br>

                        </div>
                        <hr class="uk-margin-remove">

                    </div>

                </div>
            </div>
        </li>

        <li>
            <div class="uk-child-width-1-2@s uk-child-width-1-3@l uk-grid" data-uk-grid="">
                <div class="uk-grid-margin uk-first-column">

                    <div class="uk-card">

                        <div class="uk-card-header md-bg-red-700 sc-light uk-margin-medium-bottom">
                            <h6>Basic</h6>

                        </div>
                        <input type="text" name="type" value="Basic" hidden>
                        <input type="text" name="duration" value="6" hidden>

                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6BDashboard" name="Dashboard2" value="1" {{ $membershipCandidate4->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6BDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6BEA" name="EA2" value="1" {{ $membershipCandidate4->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6BEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6BDefaultReports" name="DefaultReports2" value="1" {{ $membershipCandidate4->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6BDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6BCustomizedReports" name="CustomizedReports2" value="1" {{ $membershipCandidate4->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6BCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6BChatAgents" name="ChatAgents2" value="1" {{ $membershipCandidate4->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6BChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6BEmailSupport" name="EmailSupport2" value="1" {{ $membershipCandidate4->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6BEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6BTelephonicSupport" name="TelephonicSupport2" value="1" {{ $membershipCandidate4->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6BTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6BAdd_On_features_Free" name="Add_On_features_Free2" value="1" {{ $membershipCandidate4->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6BAdd_On_features_Free-paid" name="Add_On_features_Free2" value="2" {{ $membershipCandidate4->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Add On features </label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6BAppointmentScheduler" name="AppointmentScheduler2" value="1" {{ $membershipCandidate4->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6BAppointmentScheduler-paid" name="AppointmentScheduler2" value="2" {{ $membershipCandidate4->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Appointment Scheduler </label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6BeLearningManagementSystem" name="eLearningManagementSystem2" value="1" {{ $membershipCandidate4->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6BeLearningManagementSystem-paid" name="eLearningManagementSystem2" value="2" {{ $membershipCandidate4->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BeLearningManagementSystem-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label style="text-transform:none !important"> : eLearning Management System </label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6BQuickBooks" name="QuickBooks2" value="1" {{ $membershipCandidate4->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6BQuickBooks-paid" name="QuickBooks2" value="2" {{ $membershipCandidate4->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : QuickBooks </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Diploma2" value="{{$membershipCandidate4->Diploma}}">
                                <label>Enquiries-Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma2" value="{{$membershipCandidate4->PG_Diploma}}">
                                <label>Enquiries-PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Certification2" value="{{$membershipCandidate4->Certification}}">
                                <label>Enquiries-Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Graduation2" value="{{$membershipCandidate4->Graduation}}">
                                <label>Enquiries-Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation2" value="{{$membershipCandidate4->Post_Graduation}}">
                                <label>Enquiries-Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate2" value="{{$membershipCandidate4->Doctorate}}">
                                <label>Enquiries-Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" min="0" name="price2" value="{{$membershipCandidate4->price}}">
                                {{$currencyPrice}} :<label> Package Price</label>
                            </div><br>
                        </div>

                        <hr class="uk-margin-remove">

                    </div>

                </div>
                <div class="uk-grid-margin uk-first-column">

                    <div class="uk-card">
                        <div class="uk-card-header md-bg-red-700 sc-light uk-margin-medium-bottom">
                            <h6>standard</h6>
                        </div>
                        <input type="text" name="type" value="Stanadard" hidden>
                        <input type="text" name="duration" value="6" hidden>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6SDashboard" name="Dashboard5" value="1" {{ $membershipCandidate5->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6SDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6SEA" name="EA5" value="1" {{ $membershipCandidate5->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6SEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6SDefaultReports" name="DefaultReports5" value="1" {{ $membershipCandidate5->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6SDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6SCustomizedReports" name="CustomizedReports5" value="1" {{ $membershipCandidate5->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6SCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6SChatAgents" name="ChatAgents5" value="1" {{ $membershipCandidate5->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6SChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6SEmailSupport" name="EmailSupport5" value="1" {{ $membershipCandidate5->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6SEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6STelephonicSupport" name="TelephonicSupport5" value="1" {{ $membershipCandidate5->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6STelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6SAdd_On_features_Free" name="Add_On_features_Free5" value="1" {{ $membershipCandidate5->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6SAdd_On_features_Free-paid" name="Add_On_features_Free5" value="2" {{ $membershipCandidate5->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6SAppointmentScheduler" name="AppointmentScheduler5" value="1" {{ $membershipCandidate5->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6SAppointmentScheduler-paid" name="AppointmentScheduler5" value="2" {{ $membershipCandidate5->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Appointment Scheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6SeLearningManagementSystem" name="eLearningManagementSystem5" value="1" {{ $membershipCandidate5->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6SeLearningManagementSystem-paid" name="eLearningManagementSystem5" value="2" {{ $membershipCandidate5->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SeLearningManagementSystem-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label style="text-transform:none !important">: eLearning Management System</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6SQuickBooks" name="QuickBooks5" value="1" {{ $membershipCandidate5->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6SQuickBooks-paid" name="QuickBooks5" value="2" {{ $membershipCandidate5->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: QuickBooks</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Diploma5" value="{{$membershipCandidate5->Diploma}}">
                                <label>Enquiries-Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma5" value="{{$membershipCandidate5->PG_Diploma}}">
                                <label>Enquiries-PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Certification5" value="{{$membershipCandidate5->Certification}}">
                                <label>Enquiries-Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Graduation5" value="{{$membershipCandidate5->Graduation}}">
                                <label>Enquiries-Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation5" value="{{$membershipCandidate5->Post_Graduation}}">
                                <label>Enquiries-Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate5" value="{{$membershipCandidate5->Doctorate}}">
                                <label>Enquiries-Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" min="0" name="price5" value="{{$membershipCandidate5->price}}">
                                {{$currencyPrice}} :<label> Package Price</label>
                            </div><br>
                        </div>
                        <hr class="uk-margin-remove">

                    </div>

                </div>
                <div class="uk-grid-margin uk-first-column">

                    <div class="uk-card">
                        <div class="uk-card-header md-bg-red-700 sc-light uk-margin-medium-bottom">
                            <h6>Premium</h6>

                        </div>
                        <input type="text" name="type" value="Premium" hidden>
                        <input type="text" name="duration" value="6" hidden>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6PDashboard" name="Dashboard8" value="1" {{ $membershipCandidate6->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6PDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6PEA" name="EA8" value="1" {{ $membershipCandidate6->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6PEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6PDefaultReports" name="DefaultReports8" value="1" {{ $membershipCandidate6->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6PDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6PCustomizedReports" name="CustomizedReports8" value="1" {{ $membershipCandidate6->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6PCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6PChatAgents" name="ChatAgents8" value="1" {{ $membershipCandidate6->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6PChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6PEmailSupport" name="EmailSupport8" value="1" {{ $membershipCandidate6->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6PEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="6PTelephonicSupport" name="TelephonicSupport8" value="1" {{ $membershipCandidate6->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6PTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6PAdd_On_features_Free" name="Add_On_features_Free8" value="1" {{ $membershipCandidate6->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6PAdd_On_features_Free-paid" name="Add_On_features_Free8" value="2" {{ $membershipCandidate6->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6PAppointmentScheduler" name="AppointmentScheduler8" value="1" {{ $membershipCandidate6->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6PAppointmentScheduler-paid" name="AppointmentScheduler8" value="2" {{ $membershipCandidate6->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: AppointmentScheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6PeLearningManagementSystem" name="eLearningManagementSystem8" value="1" {{ $membershipCandidate6->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6PeLearningManagementSystem-paid" name="eLearningManagementSystem8" value="2" {{ $membershipCandidate6->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PeLearningManagementSystem-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label style="text-transform:none !important">: eLearning Management System</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6PQuickBooks" name="QuickBooks8" value="1" {{ $membershipCandidate6->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6PQuickBooks-paid" name="QuickBooks8" value="2" {{ $membershipCandidate6->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: QuickBooks</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Diploma8" value="{{$membershipCandidate6->Diploma}}">
                                <label>Enquiries-Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma8" value="{{$membershipCandidate6->PG_Diploma}}">
                                <label>Enquiries-PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Certification8" value="{{$membershipCandidate6->Certification}}">
                                <label>Enquiries-Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Graduation8" value="{{$membershipCandidate6->Graduation}}">
                                <label>Enquiries-Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation8" value="{{$membershipCandidate6->Post_Graduation}}">
                                <label>Enquiries-Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate8" value="{{$membershipCandidate6->Doctorate}}">
                                <label>Enquiries-Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" min="0" name="price8" value="{{$membershipCandidate6->price}}">
                                {{$currencyPrice}} :<label> Package Price</label>
                            </div><br>
                        </div>
                        <hr class="uk-margin-remove">

                    </div>

                </div>
            </div>
        </li>

        <li>
            <div class="uk-child-width-1-2@s uk-child-width-1-3@l uk-grid" data-uk-grid="">
                <div class="uk-grid-margin uk-first-column">

                    <div class="uk-card">
                        <div class="uk-card-header md-bg-red-700 sc-light uk-margin-medium-bottom">
                            <h6>Basic</h6>

                        </div>
                        <input type="text" name="type" value="Basic" hidden>
                        <input type="text" name="duration" value="12" hidden>

                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9BDashboard" name="Dashboard3" value="1" {{ $membershipCandidate7->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9BDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9BEA" name="EA3" value="1" {{ $membershipCandidate7->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9BEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9BDefaultReports" name="DefaultReports3" value="1" {{ $membershipCandidate7->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9BDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9BCustomizedReports" name="CustomizedReports3" value="1" {{ $membershipCandidate7->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9BCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9BChatAgents" name="ChatAgents3" value="1" {{ $membershipCandidate7->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9BChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9BEmailSupport" name="EmailSupport3" value="1" {{ $membershipCandidate7->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9BEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9BTelephonicSupport" name="TelephonicSupport3" value="1" {{ $membershipCandidate7->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9BTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9BAdd_On_features_Free" name="Add_On_features_Free3" value="1" {{ $membershipCandidate7->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9BAdd_On_features_Free-paid" name="Add_On_features_Free3" value="2" {{ $membershipCandidate7->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9BAppointmentScheduler" name="AppointmentScheduler3" value="1" {{ $membershipCandidate7->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9BAppointmentScheduler-paid" name="AppointmentScheduler3" value="2" {{ $membershipCandidate7->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Appointment Scheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9BeLearningManagementSystem" name="eLearningManagementSystem3" value="1" {{ $membershipCandidate7->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9BeLearningManagementSystem-paid" name="eLearningManagementSystem3" value="2" {{ $membershipCandidate7->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BeLearningManagementSystem-paid"> Paid</label>
                                </div> &nbsp;&nbsp;
                                <label style="text-transform:none !important">: eLearning Management System</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9BQuickBooks" name="QuickBooks3" value="1" {{ $membershipCandidate7->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9BQuickBooks-paid" name="QuickBooks3" value="2" {{ $membershipCandidate7->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: QuickBooks</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Diploma3" value="{{$membershipCandidate7->Diploma}}">
                                <label>Enquiries-Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma3" value="{{$membershipCandidate7->PG_Diploma}}">
                                <label>Enquiries-PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Certification3" value="{{$membershipCandidate7->Certification}}">
                                <label>Enquiries-Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Graduation3" value="{{$membershipCandidate7->Graduation}}">
                                <label>Enquiries-Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation3" value="{{$membershipCandidate7->Post_Graduation}}">
                                <label>Enquiries-Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate3" value="{{$membershipCandidate7->Doctorate}}">
                                <label>Enquiries-Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" min="0" name="price3" value="{{$membershipCandidate7->price}}">
                                {{$currencyPrice}} :<label> Package Price</label>
                            </div><br>
                        </div>
                        <hr class="uk-margin-remove">

                    </div>

                </div>
                <div class="uk-grid-margin uk-first-column">

                    <div class="uk-card">
                        <div class="uk-card-header md-bg-red-700 sc-light uk-margin-medium-bottom">
                            <h6>standard</h6>
                        </div>
                        <input type="text" name="type" value="Stanadard" hidden>
                        <input type="text" name="duration" value="12" hidden>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9SDashboard" name="Dashboard6" value="1" {{ $membershipCandidate8->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9SDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9SEA" name="EA6" value="1" {{ $membershipCandidate8->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9SEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9SDefaultReports" name="DefaultReports6" value="1" {{ $membershipCandidate8->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9SDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9SCustomizedReports" name="CustomizedReports6" value="1" {{ $membershipCandidate8->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9SCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9SChatAgents" name="ChatAgents6" value="1" {{ $membershipCandidate8->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9SChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9SEmailSupport" name="EmailSupport6" value="1" {{ $membershipCandidate8->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9SEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9STelephonicSupport" name="TelephonicSupport6" value="1" {{ $membershipCandidate8->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9STelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9SAdd_On_features_Free" name="Add_On_features_Free6" value="1" {{ $membershipCandidate8->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9SAdd_On_features_Free-paid" name="Add_On_features_Free6" value="2" {{ $membershipCandidate8->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9SAppointmentScheduler" name="AppointmentScheduler6" value="1" {{ $membershipCandidate8->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9SAppointmentScheduler-paid" name="AppointmentScheduler6" value="2" {{ $membershipCandidate8->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Appointment Scheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9SeLearningManagementSystem" name="eLearningManagementSystem6" value="1" {{ $membershipCandidate8->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9SeLearningManagementSystem-paid" name="eLearningManagementSystem6" value="2" {{ $membershipCandidate8->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SeLearningManagementSystem-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label style="text-transform:none !important">: eLearning Management System</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9SQuickBooks" name="QuickBooks6" value="1" {{ $membershipCandidate8->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9SQuickBooks-paid" name="QuickBooks6" value="2" {{ $membershipCandidate8->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: QuickBooks</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Diploma6" value="{{$membershipCandidate8->Diploma}}">
                                <label>Enquiries-Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma6" value="{{$membershipCandidate8->PG_Diploma}}">
                                <label>Enquiries-PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Certification6" value="{{$membershipCandidate8->Certification}}">
                                <label>Enquiries-Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Graduation6" value="{{$membershipCandidate8->Graduation}}">
                                <label>Enquiries-Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation6" value="{{$membershipCandidate8->Post_Graduation}}">
                                <label>Enquiries-Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate6" value="{{$membershipCandidate8->Doctorate}}">
                                <label>Enquiries-Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" min="0" name="price6" value="{{$membershipCandidate8->price}}">
                                {{$currencyPrice}} :<label> Package Price</label>
                            </div><br>
                        </div>
                        <hr class="uk-margin-remove">

                    </div>

                </div>
                <div class="uk-grid-margin uk-first-column">

                    <div class="uk-card">
                        <div class="uk-card-header md-bg-red-700 sc-light uk-margin-medium-bottom">
                            <h6>Premium</h6>

                        </div>
                        <input type="text" name="type" value="Premium" hidden>
                        <input type="text" name="duration" value="12" hidden>
                        <div class="uk-card-body">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9PDashboard" name="Dashboard9" value="1" {{ $membershipCandidate9->Dashboard == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDashboard">Dashboard</label>

                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9PEA" name="EA9" value="1" {{ $membershipCandidate9->EA == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEA">Educational Assessment</label>
                            </div><br>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9PDefaultReports" name="DefaultReports9" value="1" {{ $membershipCandidate9->DefaultReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PDefaultReports">Default Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9PCustomizedReports" name="CustomizedReports9" value="1" {{ $membershipCandidate9->CustomizedReports == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PCustomizedReports">Customized Reports</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9PChatAgents" name="ChatAgents9" value="1" {{ $membershipCandidate9->ChatAgents == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PChatAgents">Chat Agents</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9PEmailSupport" name="EmailSupport9" value="1" {{ $membershipCandidate9->EmailSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PEmailSupport">Email Support</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="9PTelephonicSupport" name="TelephonicSupport9" value="1" {{ $membershipCandidate9->TelephonicSupport == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PTelephonicSupport">Telephonic Support</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9PAdd_On_features_Free" name="Add_On_features_Free9" value="1" {{ $membershipCandidate9->Add_On_features_Free == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9PAdd_On_features_Free-paid" name="Add_On_features_Free9" value="2" {{ $membershipCandidate9->Add_On_features_Free == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAdd_On_features_Free-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9PAppointmentScheduler" name="AppointmentScheduler9" value="1" {{ $membershipCandidate9->AppointmentScheduler == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAppointmentScheduler">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9PAppointmentScheduler-paid" name="AppointmentScheduler9" value="2" {{ $membershipCandidate9->AppointmentScheduler == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAppointmentScheduler-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Appointment Scheduler</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9PeLearningManagementSystem" name="eLearningManagementSystem9" value="1" {{ $membershipCandidate9->eLearningManagementSystem == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PeLearningManagementSystem">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9PeLearningManagementSystem-paid" name="eLearningManagementSystem9" value="2" {{ $membershipCandidate9->eLearningManagementSystem == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PeLearningManagementSystem-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label style="text-transform:none !important"> : eLearning Management System </label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="9PQuickBooks" name="QuickBooks9" value="1" {{ $membershipCandidate9->QuickBooks == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PQuickBooks">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9PQuickBooks-paid" name="QuickBooks9" value="2" {{ $membershipCandidate9->QuickBooks == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PQuickBooks-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label>: QuickBooks</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Diploma9" value="{{$membershipCandidate9->Diploma}}">
                                <label>Enquiries-Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="PG_Diploma9" value="{{$membershipCandidate9->PG_Diploma}}">
                                <label>Enquiries-PG Diploma</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Certification9" value="{{$membershipCandidate9->Certification}}">
                                <label>Enquiries-Certification </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Graduation9" value="{{$membershipCandidate9->Graduation}}">
                                <label>Enquiries-Graduation </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Post_Graduation9" value="{{$membershipCandidate9->Post_Graduation}}">
                                <label>Enquiries-Post Graduation</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiries" style="width:12%;height:50%" name="Doctorate9" value="{{$membershipCandidate9->Doctorate}}">
                                <label>Enquiries-Doctorate</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" min="0" name="price9" value="{{$membershipCandidate9->price}}">
                                {{$currencyPrice}} :<label> Package Price</label>
                            </div><br>

                        </div>
                        <hr class="uk-margin-remove">

                    </div>

                </div>
            </div>
        </li>

    </u1>
    <div class="">
        <div class="float-right">
            <button class="sc-button" type="submit">Submit</button>
        </div>
    </div>
    <br>

</form>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.page-active').removeClass('sc-page-active')
    $('.page-Membership-Institution ').addClass('sc-page-active')
</script>
@endsection