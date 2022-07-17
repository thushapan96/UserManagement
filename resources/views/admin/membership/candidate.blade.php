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


<br>
<form id="form" action="{{route('admin.candidate.mebership.add')}}" method="post">
    @csrf
    <u1 class="col-md-4" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:auto !important;margin-right:auto">
        <li class="uk-active" id="amenu"><a style="cursor:pointer;padding: 0.5rem 1rem;" aria-current="page"> 3 Months </a></li>
        <li class="" id="amenu1"><a style="cursor:pointer;padding: 0.5rem  1rem;"> 6 Months</a></li>
        <li class="" id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1rem;">12 Months </a></li>

    </u1>
    <div class="col-md-1">
        <button class="sc-button" type="submit">Submit</button>
    </div>
    <br>

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
                                <input class="custom-control-input" type="checkbox" id="3BCalculator" name="Calculator1" value="1" {{ $membershipCandidate1->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3BCalculator">CRS Calculator</label>
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
                                    <input class="custom-control-input" type="checkbox" id="3BAnytime_Single_Multiple" name="Anytime_Single_Multiple1" value="1" {{ $membershipCandidate1->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BAnytime_Single_Multiple">free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="3BAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple1" value="2" {{ $membershipCandidate1->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3BAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool1" value="{{$membershipCandidate1->EnquiriesSchool}}">
                                <label>Enquiries-School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege1" value="{{$membershipCandidate1->EnquiriesCollege}}">
                                <label>Enquiries-College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity1" value="{{$membershipCandidate1->EnquiriesUniversity}}">
                                <label>Enquiries-University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant1" value="{{$membershipCandidate1->EnquiriesRCICConsultant}}">
                                <label>Enquiries-RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration1" value="{{$membershipCandidate1->EnquiriesImmigration}}">
                                <label>Enquiries-Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3BEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness1" value="{{$membershipCandidate1->EnquiriesBusiness}}">
                                <label>Enquiries-Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" name="price1" min="0" value="{{$membershipCandidate1->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                        <hr class="uk-margin-remove">
                        <!-- <div class="uk-card-footer md-bg-grey-50">
                            <div class="float-right">
                                <button type="submit" class="client-btn bmenu1 uk-button uk-button-primary">Save </button>
                            </div>
                        </div> -->
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
                                <input class="custom-control-input" type="checkbox" id="3SCalculator" name="Calculator4" value="1" {{ $membershipCandidate2->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3SCalculator">CRS Calculator</label>
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
                                    <input class="custom-control-input" type="checkbox" id="3SAnytime_Single_Multiple" name="Anytime_Single_Multiple4" value="1" {{ $membershipCandidate2->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SAnytime_Single_Multiple">free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3SAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple4" value="2" {{ $membershipCandidate2->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3SAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3SEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool4" value="{{$membershipCandidate2->EnquiriesSchool}}">
                                <label>Enquiries-School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3SEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege4" value="{{$membershipCandidate2->EnquiriesCollege}}">
                                <label>Enquiries-College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3SEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity4" value="{{$membershipCandidate2->EnquiriesUniversity}}">
                                <label>Enquiries-University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3SEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant4" value="{{$membershipCandidate2->EnquiriesRCICConsultant}}">
                                <label>Enquiries-RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3SEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration4" value="{{$membershipCandidate2->EnquiriesImmigration}}">
                                <label>Enquiries-Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3SEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness4" value="{{$membershipCandidate2->EnquiriesBusiness}}">
                                <label>Enquiries-Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" name="price4" min="0" value="{{$membershipCandidate2->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
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
                                <input class="custom-control-input" type="checkbox" id="3PCalculator" name="Calculator7" value="1" {{ $membershipCandidate3->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="3PCalculator">CRS Calculator</label>
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
                                    <input class="custom-control-input" type="checkbox" id="3PAnytime_Single_Multiple" name="Anytime_Single_Multiple7" value="1" {{ $membershipCandidate3->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PAnytime_Single_Multiple">Free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="3PAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple7" value="2" {{ $membershipCandidate3->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="3PAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3PEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool7" value="{{$membershipCandidate3->EnquiriesSchool}}">
                                <label>Enquiries-School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3PEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege7" value="{{$membershipCandidate3->EnquiriesCollege}}">
                                <label>Enquiries-College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3PEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity7" value="{{$membershipCandidate3->EnquiriesUniversity}}">
                                <label>Enquiries-University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3PEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant7" value="{{$membershipCandidate3->EnquiriesRCICConsultant}}">
                                <label>Enquiries-RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3PEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration7" value="{{$membershipCandidate3->EnquiriesImmigration}}">
                                <label>Enquiries-Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="3PEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness7" value="{{$membershipCandidate3->EnquiriesBusiness}}">
                                <label>Enquiries-Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" name="price7" min="0" value="{{$membershipCandidate3->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
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
                                <input class="custom-control-input" type="checkbox" id="6BCalculator" name="Calculator2" value="1" {{ $membershipCandidate4->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6BCalculator">CRS Calculator</label>
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
                                <label>: Add On features</label>
                            </div><br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="6BAnytime_Single_Multiple" name="Anytime_Single_Multiple2" value="1" {{ $membershipCandidate4->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BAnytime_Single_Multiple">free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6BAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple2" value="2" {{ $membershipCandidate4->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6BAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6BEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool2" value="{{$membershipCandidate4->EnquiriesSchool}}">
                                <label>Enquiries-School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6BEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege2" value="{{$membershipCandidate4->EnquiriesCollege}}">
                                <label>Enquiries-College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6BEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity2" value="{{$membershipCandidate4->EnquiriesUniversity}}">
                                <label>Enquiries-University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6BEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant2" value="{{$membershipCandidate4->EnquiriesRCICConsultant}}">
                                <label>Enquiries-RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6BEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration2" value="{{$membershipCandidate4->EnquiriesImmigration}}">
                                <label>Enquiries-Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6BEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness2" value="{{$membershipCandidate4->EnquiriesBusiness}}">
                                <label>Enquiries-Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" name="price2" min="0" value="{{$membershipCandidate4->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                        <hr class="uk-margin-remove">
                        <!-- <div class="uk-card-footer md-bg-grey-50">
                            <div class="float-right">
                                <button type="submit" class="client-btn bmenu1 uk-button uk-button-primary">Save </button>
                            </div>
                        </div> -->
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
                                <input class="custom-control-input" type="checkbox" id="6SCalculator" name="Calculator5" value="1" {{ $membershipCandidate5->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6SCalculator">CRS Calculator</label>
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
                                    <input class="custom-control-input" type="checkbox" id="6SAnytime_Single_Multiple" name="Anytime_Single_Multiple5" value="1" {{ $membershipCandidate5->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SAnytime_Single_Multiple">free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6SAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple5" value="2" {{ $membershipCandidate5->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6SAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6SEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool5" value="{{$membershipCandidate5->EnquiriesSchool}}">
                                <label>Enquiries-School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6SEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege5" value="{{$membershipCandidate5->EnquiriesCollege}}">
                                <label>Enquiries-College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6SEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity5" value="{{$membershipCandidate5->EnquiriesUniversity}}">
                                <label>Enquiries-University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6SEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant5" value="{{$membershipCandidate5->EnquiriesRCICConsultant}}">
                                <label>Enquiries-RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6SEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration5" value="{{$membershipCandidate5->EnquiriesImmigration}}">
                                <label>Enquiries-Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6SEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness5" value="{{$membershipCandidate5->EnquiriesBusiness}}">
                                <label>Enquiries-Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" name="price5" min="0" value="{{$membershipCandidate5->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                        <hr class="uk-margin-remove">
                        <!-- <div class="uk-card-footer md-bg-grey-50">
                            <div class="float-right">
                                <button type="submit" class="client-btn bmenu1 uk-button uk-button-primary">Save </button>
                            </div>
                        </div> -->
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
                                <input class="custom-control-input" type="checkbox" id="6PCalculator" name="Calculator8" value="1" {{ $membershipCandidate6->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="6PCalculator">CRS Calculator</label>
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
                                    <input class="custom-control-input" type="checkbox" id="6PAnytime_Single_Multiple" name="Anytime_Single_Multiple8" value="1" {{ $membershipCandidate6->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PAnytime_Single_Multiple">free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="6PAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple8" value="2" {{ $membershipCandidate6->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="6PAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6PEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool8" value="{{$membershipCandidate6->EnquiriesSchool}}">
                                <label>Enquiries-School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6PEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege8" value="{{$membershipCandidate6->EnquiriesCollege}}">
                                <label>Enquiries-College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6PEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity8" value="{{$membershipCandidate6->EnquiriesUniversity}}">
                                <label>Enquiries-University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6PEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant8" value="{{$membershipCandidate6->EnquiriesRCICConsultant}}">
                                <label>Enquiries-RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6PEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration8" value="{{$membershipCandidate6->EnquiriesImmigration}}">
                                <label>Enquiries-Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="6PEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness8" value="{{$membershipCandidate6->EnquiriesBusiness}}">
                                <label>Enquiries-Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" name="price8" min="0" value="{{$membershipCandidate6->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                        <hr class="uk-margin-remove">
                        <!-- <div class="uk-card-footer md-bg-grey-50">
                            <div class="float-right">
                                <button type="submit" class="client-btn bmenu1 uk-button uk-button-primary">Save </button>
                            </div>
                        </div> -->
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
                                <input class="custom-control-input" type="checkbox" id="9BCalculator" name="Calculator3" value="1" {{ $membershipCandidate7->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9BCalculator">CRS Calculator</label>
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
                                    <input class="custom-control-input" type="checkbox" id="9BAnytime_Single_Multiple" name="Anytime_Single_Multiple3" value="1" {{ $membershipCandidate7->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BAnytime_Single_Multiple"> free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9BAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple3" value="2" {{ $membershipCandidate7->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9BAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9BEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool3" value="{{$membershipCandidate7->EnquiriesSchool}}">
                                <label>Enquiries-School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9BEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege3" value="{{$membershipCandidate7->EnquiriesCollege}}">
                                <label>Enquiries-College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9BEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity3" value="{{$membershipCandidate7->EnquiriesUniversity}}">
                                <label>Enquiries-University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9BEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant3" value="{{$membershipCandidate7->EnquiriesRCICConsultant}}">
                                <label>Enquiries-RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9BEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration3" value="{{$membershipCandidate7->EnquiriesImmigration}}">
                                <label>Enquiries-Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9BEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness3" value="{{$membershipCandidate7->EnquiriesBusiness}}">
                                <label>Enquiries-Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" name="price3" min="0" value="{{$membershipCandidate7->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                        <hr class="uk-margin-remove">
                        <!-- <div class="uk-card-footer md-bg-grey-50">
                            <div class="float-right">
                                <button type="submit" class="client-btn bmenu1 uk-button uk-button-primary">Save </button>
                            </div>
                        </div> -->
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
                                <input class="custom-control-input" type="checkbox" id="9SCalculator" name="Calculator6" value="1" {{ $membershipCandidate8->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9SCalculator">CRS Calculator</label>
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
                                    <input class="custom-control-input" type="checkbox" id="9SAnytime_Single_Multiple" name="Anytime_Single_Multiple6" value="1" {{ $membershipCandidate8->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SAnytime_Single_Multiple"> free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9SAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple6" value="2" {{ $membershipCandidate8->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9SAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9SEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool6" value="{{$membershipCandidate8->EnquiriesSchool}}">
                                <label>Enquiries-School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9SEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege6" value="{{$membershipCandidate8->EnquiriesCollege}}">
                                <label>Enquiries-College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9SEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity6" value="{{$membershipCandidate8->EnquiriesUniversity}}">
                                <label>Enquiries-University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9SEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant6" value="{{$membershipCandidate8->EnquiriesRCICConsultant}}">
                                <label>Enquiries-RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9SEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration6" value="{{$membershipCandidate8->EnquiriesImmigration}}">
                                <label>Enquiries-Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9SEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness6" value="{{$membershipCandidate8->EnquiriesBusiness}}">
                                <label>Enquiries-Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" name="price6" min="0" value="{{$membershipCandidate8->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                        <hr class="uk-margin-remove">
                        <!-- <div class="uk-card-footer md-bg-grey-50">
                            <div class="float-right">
                                <button type="submit" class="client-btn bmenu1 uk-button uk-button-primary">Save </button>
                            </div>
                        </div> -->
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
                                <input class="custom-control-input" type="checkbox" id="9PCalculator" name="Calculator9" value="1" {{ $membershipCandidate9->Calculator == 1 ? ' checked' : '' }}>
                                <label class="custom-control-label" for="9PCalculator">CRS Calculator</label>
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
                                    <input class="custom-control-input" type="checkbox" id="9PAnytime_Single_Multiple" name="Anytime_Single_Multiple9" value="1" {{ $membershipCandidate9->Anytime_Single_Multiple == 1 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAnytime_Single_Multiple"> free</label>

                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="custom-control custom-checkbox">

                                    <input class="custom-control-input" type="checkbox" id="9PAnytime_Single_Multiple-paid" name="Anytime_Single_Multiple9" value="2" {{ $membershipCandidate9->Anytime_Single_Multiple == 2 ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="9PAnytime_Single_Multiple-paid"> Paid</label>
                                </div>&nbsp;&nbsp;
                                <label> : Anytime upgrade services </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9PEnquiriesSchool" style="width:12%;height:50%" name="EnquiriesSchool9" value="{{$membershipCandidate9->EnquiriesSchool}}">
                                <label>Enquiries-School </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9PEnquiriesCollege" style="width:12%;height:50%" name="EnquiriesCollege9" value="{{$membershipCandidate9->EnquiriesCollege}}">
                                <label>Enquiries-College </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9PEnquiriesUniversity" style="width:12%;height:50%" name="EnquiriesUniversity9" value="{{$membershipCandidate9->EnquiriesUniversity}}">
                                <label>Enquiries-University </label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9PEnquiriesRCICConsultant" style="width:12%;height:50%" name="EnquiriesRCICConsultant9" value="{{$membershipCandidate9->EnquiriesRCICConsultant}}">
                                <label>Enquiries-RCIC Consultant</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9PEnquiriesImmigration" style="width:12%;height:50%" name="EnquiriesImmigration9" value="{{$membershipCandidate9->EnquiriesImmigration}}">
                                <label>Enquiries-Immigration</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" id="9PEnquiriesBusiness" style="width:12%;height:50%" name="EnquiriesBusiness9" value="{{$membershipCandidate9->EnquiriesBusiness}}">
                                <label>Enquiries-Business</label>
                            </div><br>
                            <div class="">
                                <input class="" type="number" style="width:32%;height:50%" name="price9" min="0" value="{{$membershipCandidate9->price}}">
                                {{$currencyPrice}} : <label> Package Price</label>
                            </div><br>
                        </div>
                        <hr class="uk-margin-remove">
                        <!-- <div class="uk-card-footer md-bg-grey-50">
        <div class="float-right">
            <button type="submit" class="client-btn bmenu1 uk-button uk-button-primary">Save </button>
        </div>
    </div> -->
                    </div>

                </div>
            </div>
        </li>


    </u1>
    
</form>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@endsection