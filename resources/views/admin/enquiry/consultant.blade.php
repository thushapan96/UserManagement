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
<!-- <div class="row">
    <div class="col-md-3">Search By
        <select class="form-control filter">
            <option value="RCIC Number">RCIC Number</option>
            <option value="Owner Name">Owner Name</option>
            <option value="Company Name ">Company Name </option>
            <option value="Specialization">Specialization </option>
            <option value="Service Type">Service Type </option>
            <option value="Country">Country </option>
            <option value="Province">Province </option>
            <option value="City">City </option>
        </select>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-8">
        <br>
        <div class="p-1 bg-light rounded rounded-pill shadow-sm ">
            <div class="input-group" style="height: 30px">
                <input type="search" id="searchbar" placeholder="searching " aria-describedby="button-addon1" class="form-control border-0 bg-light" style="height:28px">
                <div class="input-group-append">
                    <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
 -->

<u1 id="sc-contact-list" class="uk-child-width-2-3@l" data-uk-grid style="width:70%;margin-left:auto;margin-right:auto">

    @if($consultants)
    <input type="text" id="consultantId" value="{{$consultants->id}}" hidden>
    <input type="text" id="type" value="{{$consultants->type}}" hidden>

    <li>
        <div class="uk-card uk-card-hover " style="height:275px">
            <div class="uk-card-body sc-padding-remove">
                <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                    <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-light-green-50 imgview">
                        <div class="sc-padding-medium uk-text-center">
                            @if($consultants->img)
                            <img src="{{url('files/'.$consultants->img)}}" class="sc-avatar sc-border" alt="xerdman" style="width:100px;height:100px" />
                            @else
                            <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                            @endif
                            <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                {{$consultants->company_name}}
                            </p>
                            <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$consultants->registration_number}}</p>
                        </div>
                    </div>
                    <div class="uk-width-2-3@l ">
                        <div class="sc-padding-medium">
                            <ul class="uk-list uk-list-divider">
                                <li class="sc-list-group">
                                    <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                    <div class="sc-list-body">
                                        <p class="uk-margin-remove sc-text-semibold">{{$consultants->phone}}</p>
                                    </div>
                                </li>
                                <li class="sc-list-group">
                                    <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                    <div class="sc-list-body">
                                        <p class="uk-margin-remove">{{$consultants->email}}</p>
                                    </div>
                                </li>
                                <li class="sc-list-group">
                                    <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                    <div class="sc-list-body">
                                        <p class="uk-margin-remove uk-text-wrap">{{$consultants->website_address}}</p>
                                    </div>
                                </li>
                                <li class="sc-list-group">
                                    <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                    <div class="sc-list-body">
                                        <p class="uk-margin-remove uk-text-wrap">{{$consultants->city}} {{$consultants->region}} {{$consultants->country}}</p>
                                    </div>
                                </li>

                                <li class="sc-list-group">
                                    <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                    <div class="sc-list-body">
                                        <p class="uk-margin-remove uk-text-wrap">
                                            @if($consultants->offering_service)
                                            @foreach($consultants->offering_service as $service)
                                            {{$service}},
                                            @endforeach
                                            @endif
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-uk-dropdown="pos: bottom-center">
            <ul class="uk-nav uk-dropdown-nav">
                <li><a href="{{route('consultant.admin.view',['id' => $consultants->id])}}" style="color:#17a2b8;">1) View Registration/Enrollment </a></li>
                <!-- <li><a href="{{route('admin.consultantEnquiry',['id' => $consultants->id])}}" style="color:#17a2b8;">2) View Enquiry Report</a></li> -->
                <li><a href="#" style="color:#17a2b8;">3) View Case progress reports</a></li>
            </ul>
        </div>
    </li>

    @endif
</u1>

<br>
<u1 class="col-md-6" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:auto !important;margin-right:auto">
    <li class="uk-active" id="amenu"><a style="cursor:pointer;padding: 0.5rem 1rem;" aria-current="page"> Initiated </a></li>
    <li class="" id="amenu1"><a style="cursor:pointer;padding: 0.5rem  1rem;">Substitute/Forward</a></li>
    <li class="" id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1rem;">Progress </a></li>
    <li class="" id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1rem;">Rejected </a></li>
</u1>
<br>
<u1 class="uk-switcher">


    <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
        @if($EnquiryCandidate1)
        @foreach($EnquiryCandidate1 as $row)
        <li>
            <a href="#">
                <div class="uk-card uk-card-hover " style="height:230px">
                    <div class="uk-card-body sc-padding-remove">
                        <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>

                            <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-orange-300 imgview">

                                <div class="sc-padding-medium uk-text-center">
                                    @if($row->img)
                                    <img src="{{url('files/'.$row->img)}}" class="rounded-circle  img" alt="xerdman" style="width:100px;height:100px" />
                                    @else
                                    <img class="rounded-circle  img " style="width:130px;height:130px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                    @endif
                                    <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                        {{$row->first_name}}
                                    </p>
                                    <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->last_name}}</p>
                                </div>
                            </div>
                            <div class="uk-width-2-3@l ">
                                <div class="sc-padding-medium" style="z-index: -1 !important;">
                                    <ul class="uk-list uk-list-divider">
                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove sc-text-semibold">{{$row->phone}}</p>
                                            </div>
                                        </li>
                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove">{{$row->email}}</p>
                                            </div>
                                        </li>

                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove uk-text-wrap">{{$row->residential_city}} {{$row->residential_region}} {{$row->residential_country}}</p>
                                            </div>
                                        </li>

                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove uk-text-wrap">
                                                    {{$row->immigration_purpose}}
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-uk-dropdown="pos: bottom-center">
                    <ul class="uk-nav uk-dropdown-nav">
                        @if($ConsultantEnquiryIdExist2 || $ImmigrationEnquiryIdExist2 || $CharteredEnquiryIdExist2)
                        <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="{{$row->type}}" data-serviceId="{{$row->candidate_personalsId}}">1) Select Candidate </a></li>
                        @endif
                        <li><a href="{{route('candidate.admin.view',['id' => $row->user_id])}}" style="color:#17a2b8;">2) View Registration form </a></li>
                        <li><a href="{{route('edu.admin.view',['id' => $row->user_id])}}" style="color:#17a2b8;">3) View Assessment for Education</a></li>
                        <li><a href="{{route('crs.admin.view',['id' => $row->user_id])}}" style="color:#17a2b8;">4) View CRS Calculator for Immigration</a></li>
                        <li><a href="{{route('admin.candidateEnquiry',['id' => $row->candidate_personalsId])}}" style="color:#17a2b8;">4) View Enquiries </a></li>

                    </ul>
                </div>
            </a>
        </li>
        @endforeach
        @endif

    </u1>

    <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
        @if($EnquiryCandidatesubstitude)
        @foreach($EnquiryCandidatesubstitude as $row)
        <li>
            <a href="#">
                <div class="uk-card uk-card-hover " style="height:230px">
                    <div class="uk-card-body sc-padding-remove">
                        <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>

                            <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-orange-300 imgview">

                                <div class="sc-padding-medium uk-text-center">
                                    @if($row->img)
                                    <img src="{{url('files/'.$row->img)}}" class="rounded-circle  img" alt="xerdman" style="width:100px;height:100px" />
                                    @else
                                    <img class="rounded-circle  img " style="width:130px;height:130px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                    @endif
                                    <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                        {{$row->first_name}}
                                    </p>
                                    <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->last_name}}</p>
                                </div>
                            </div>
                            <div class="uk-width-2-3@l ">
                                <div class="sc-padding-medium" style="z-index: -1 !important;">
                                    <ul class="uk-list uk-list-divider">
                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove sc-text-semibold">{{$row->phone}}</p>
                                            </div>
                                        </li>
                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove">{{$row->email}}</p>
                                            </div>
                                        </li>

                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove uk-text-wrap">{{$row->residential_city}} {{$row->residential_region}} {{$row->residential_country}}</p>
                                            </div>
                                        </li>

                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove uk-text-wrap">
                                                    {{$row->immigration_purpose}}
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-uk-dropdown="pos: bottom-center">
                    <ul class="uk-nav uk-dropdown-nav">
                        <li><a href="{{route('candidate.admin.view',['id' => $row->user_id])}}" style="color:#17a2b8;">1) View Registration form </a></li>
                        <li><a href="{{route('edu.admin.view',['id' => $row->user_id])}}" style="color:#17a2b8;">2) View Assessment for Education</a></li>
                        <li><a href="{{route('crs.admin.view',['id' => $row->user_id])}}" style="color:#17a2b8;">3) View CRS Calculator for Immigration</a></li>
                    </ul>
                </div>
            </a>
        </li>
        @endforeach
        @endif
    </u1>

    <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
        @if($EnquiryCandidate2)
        @foreach($EnquiryCandidate2 as $row)
        <li>
            <a href="#">
                <div class="uk-card uk-card-hover " style="height:230px">
                    <div class="uk-card-body sc-padding-remove">
                        <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>

                            <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-green-300 imgview">

                                <div class="sc-padding-medium uk-text-center">
                                    @if($row->img)
                                    <img src="{{url('files/'.$row->img)}}" class="rounded-circle  img" alt="xerdman" style="width:100px;height:100px" />
                                    @else
                                    <img class="rounded-circle  img " style="width:130px;height:130px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                    @endif
                                    <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                        {{$row->first_name}}
                                    </p>
                                    <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->last_name}}</p>
                                </div>
                            </div>
                            <div class="uk-width-2-3@l ">
                                <div class="sc-padding-medium" style="z-index: -1 !important;">
                                    <ul class="uk-list uk-list-divider">
                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove sc-text-semibold">{{$row->phone}}</p>
                                            </div>
                                        </li>
                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove">{{$row->email}}</p>
                                            </div>
                                        </li>

                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove uk-text-wrap">{{$row->residential_city}} {{$row->residential_region}} {{$row->residential_country}}</p>
                                            </div>
                                        </li>

                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove uk-text-wrap">
                                                    {{$row->immigration_purpose}}
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <div data-uk-dropdown="pos: bottom-center">
                <ul class="uk-nav uk-dropdown-nav">
                    <li><a href="{{route('candidate.admin.view',['id' => $row->user_id])}}" style="color:#17a2b8;">1) View Registration form </a></li>
                    <li><a href="{{route('edu.admin.view',['id' => $row->user_id])}}" style="color:#17a2b8;">2) View Assessment for Education</a></li>
                    <li><a href="{{route('crs.admin.view',['id' => $row->user_id])}}" style="color:#17a2b8;">3) View CRS Calculator for Immigration</a></li>
                </ul>
            </div>
        </li>
        @endforeach
        @endif
    </u1>



    <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
        @if($EnquiryCandidate)
        @foreach($EnquiryCandidate as $row)
        <li>
            <a href="#">
                <div class="uk-card uk-card-hover " style="height:230px">
                    <div class="uk-card-body sc-padding-remove">
                        <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>

                            <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-red-300 imgview">

                                <div class="sc-padding-medium uk-text-center">
                                    @if($row->img)
                                    <img src="{{url('files/'.$row->img)}}" class="rounded-circle  img" alt="xerdman" style="width:100px;height:100px" />
                                    @else
                                    <img class="rounded-circle  img " style="width:130px;height:130px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                    @endif
                                    <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                        {{$row->first_name}}
                                    </p>
                                    <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->last_name}}</p>
                                </div>
                            </div>
                            <div class="uk-width-2-3@l ">
                                <div class="sc-padding-medium" style="z-index: -1 !important;">
                                    <ul class="uk-list uk-list-divider">
                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove sc-text-semibold">{{$row->phone}}</p>
                                            </div>
                                        </li>
                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove">{{$row->email}}</p>
                                            </div>
                                        </li>

                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove uk-text-wrap">{{$row->residential_city}} {{$row->residential_region}} {{$row->residential_country}}</p>
                                            </div>
                                        </li>

                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove uk-text-wrap">
                                                    {{$row->immigration_purpose}}
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <div data-uk-dropdown="pos: bottom-center">
                <ul class="uk-nav uk-dropdown-nav">
                    <li><a href="{{route('candidate.admin.view',['id' => $row->user_id])}}" style="color:#17a2b8;">1) View Registration form </a></li>
                    <li><a href="{{route('edu.admin.view',['id' => $row->user_id])}}" style="color:#17a2b8;">2) View Assessment for Education</a></li>
                    <li><a href="{{route('crs.admin.view',['id' => $row->user_id])}}" style="color:#17a2b8;">3) View CRS Calculator for Immigration</a></li>
                </ul>
            </div>
        </li>
        @endforeach
        @endif
    </u1>

</u1>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.confirmEnquiry').on('click', function() {
        if (confirm("Are You Sure Want To Select as Service ?") == true) {
            var type = $('#type').val();
            var serviceId = $(this).attr('data-serviceId')
            var consultantId = $('#consultantId').val();
            console.log("type", type);

            $.ajax({

                method: "post",
                url: "/services/confirmEnquiry",
                dataType: 'json',

                data: {
                    '_token': '{{csrf_token()}}',
                    type: type,
                    serviceId: serviceId,
                    consultantId: consultantId,
                },
                success: function(result) {
                    console.log('result', result);
                    location.reload();
                },

            });
        }
    });
</script>
@endsection