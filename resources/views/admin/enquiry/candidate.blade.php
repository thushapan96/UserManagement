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
<div id="modal-close-default" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" data-uk-close></button>
        <h6 class="">Comments If Any </h6>
        <textarea class="form-control textarea" rows="5" style="width:100%" name="description" id="msg"></textarea>
        <p class="uk-text-right">
            <button class="uk-button uk-button-primary confirmEnquiryy" type="button">Confirm</button>
        </p>
    </div>
</div>

<u1 id="sc-contact-list" class="uk-child-width-2-3@l" data-uk-grid style="width:70%;margin-left:auto;margin-right:auto">

    @if($candidates)
    <input type="text" id="candidatesId" value="{{$candidates->id}}" hidden>
    <li>

        <div class="uk-card uk-card-hover " style="height:230px">
            <div class="uk-card-body sc-padding-remove">
                <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>

                    <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-light-green-50 imgview">

                        <div class="sc-padding-medium uk-text-center">
                            @if($candidates->img)
                            <img src="{{url('files/'.$candidates->img)}}" class="rounded-circle  img" alt="xerdman" style="width:100px;height:100px" />
                            @else
                            <img class="rounded-circle  img " style="width:130px;height:130px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                            @endif
                            <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                {{$candidates->first_name}}
                            </p>
                            <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$candidates->last_name}}</p>
                        </div>
                    </div>
                    <div class="uk-width-2-3@l ">
                        <div class="sc-padding-medium" style="z-index: -1 !important;">
                            <ul class="uk-list uk-list-divider">
                                <li class="sc-list-group">
                                    <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                    <div class="sc-list-body">
                                        <p class="uk-margin-remove sc-text-semibold">{{$candidates->phone}}</p>
                                    </div>
                                </li>
                                <li class="sc-list-group">
                                    <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                    <div class="sc-list-body">
                                        <p class="uk-margin-remove">{{$candidates->email}}</p>
                                    </div>
                                </li>

                                <li class="sc-list-group">
                                    <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                    <div class="sc-list-body">
                                        <p class="uk-margin-remove uk-text-wrap">{{$candidates->residential_city}} {{$candidates->residential_region}} {{$candidates->residential_country}}</p>
                                    </div>
                                </li>

                                <li class="sc-list-group">
                                    <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                    <div class="sc-list-body">
                                        <p class="uk-margin-remove uk-text-wrap">
                                            {{$candidates->immigration_purpose}}
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
                <li><a href="{{route('candidate.admin.view',['id' => $candidates->user_id])}}" style="color:#17a2b8;"> View Registration form </a></li>
                <li><a href="{{route('edu.admin.view',['id' => $candidates->user_id])}}" style="color:#17a2b8;"> View Assessment for Education</a></li>
                <li><a href="{{route('crs.admin.view',['id' => $candidates->user_id])}}" style="color:#17a2b8;"> View CRS Calculator for Immigration</a></li>
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
    <u1>
        @if(count($EnquiryInstitutionSchool1))
        <div class="row">
            <div class="col-9">
                <h6>School</h6>
            </div>
            <div class="float-right" style="right:0%">
                @if($CandidateEnquiryIdExist2)
                <a href="/admin/school/view?select={{$candidates->id}}"> <button type="button" class="client-btn uk-button uk-button-primary"> Forward to other School =>></button></a>
                @enddif
            </div>
        </div>
        <br>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>

            @foreach($EnquiryInstitutionSchool1 as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-orange-300">

                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offer_course)

                                                        {{$row->offer_course}}

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
                            <li><a href="{{route('institution.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;">View Registration form </a></li>
                            @if($row->is_forward == 0)
                            @if($CandidateEnquiryIdExist2)
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="School" data-serviceId="{{$row->serviceId}}" data-uk-toggle="target: #modal-close-default">Select as Service </a></li>
                            @endif
                            @elseif($row->is_forward == 1)
                            <li><a href="#" style="color:#f39c12;" data-type="School" data-serviceId="{{$row->serviceId}}">Service Substituded</a></li>
                            @elseif($row->is_forward == 2)
                            <li><a href="#" style="color:green;" data-type="School" data-serviceId="{{$row->serviceId}}">Service forwarded</a></li>
                            @endif
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach

        </u1>

        <hr>

        @endif
        @if(count($EnquiryInstitutionCollege1))


        <div class="row">
            <div class="col-9">
                <h6>College</h6>
            </div>
            <div class="float-right" style="right:0%">
                <a href="/admin/college/view?select={{$candidates->id}}"> <button type="button" class="client-btn uk-button uk-button-primary"> Forward to other College =>></button></a>
            </div>
        </div>
        <br>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionCollege1 as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-orange-300">

                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offer_course)

                                                        {{$row->offer_course}}

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
                            <li><a href="{{route('institution.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            @if($row->is_forward == 0)
                            @if($CandidateEnquiryIdExist2)
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="College" data-serviceId="{{$row->serviceId}}" data-uk-toggle="target: #modal-close-default">Select as Service </a></li>
                            @endif
                            @elseif($row->is_forward == 1)
                            <li><a href="#" style="color:#f39c12;" data-type="College" data-serviceId="{{$row->serviceId}}">Service Substituded</a></li>
                            @elseif($row->is_forward == 2)
                            <li><a href="#" style="color:green;" data-type="College" data-serviceId="{{$row->serviceId}}">Service forwarded</a></li>
                            @endif
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach

        </u1>
        </li>
        <hr>
        @endif
        @if(count($EnquiryInstitutionUniversity1))

        <div class="row">
            <div class="col-9">
                <h6>University</h6>
            </div>

            <div class="float-right" style="right:0%">
                <a href="/admin/university/view?select={{$candidates->id}}"> <button type="button" class="client-btn uk-button uk-button-primary"> Forward to other University =>></button></a>
            </div>
        </div>
        <br>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionUniversity1 as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-orange-300">

                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offer_course)

                                                        {{$row->offer_course}}

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
                            <li><a href="{{route('institution.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            @if($row->is_forward == 0)
                            @if($CandidateEnquiryIdExist2)
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="University" data-serviceId="{{$row->serviceId}}" data-type="School" data-serviceId="{{$row->serviceId}}" data-uk-toggle="target: #modal-close-default">Select as Service </a></li>
                            @endif
                            @elseif($row->is_forward == 1)
                            <li><a href="#" style="color:#f39c12;" data-type="University" data-serviceId="{{$row->serviceId}}">Service Substituded</a></li>
                            @elseif($row->is_forward == 2)
                            <li><a href="#" style="color:green;" data-type="University" data-serviceId="{{$row->serviceId}}">Service forwarded</a></li>
                            @endif
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderConsultant1))


        <div class="row">
            <div class="col-9">
                <h6>Consultant</h6>
            </div>
            <div class="float-right" style="right:0%">
                <a href="/admin/consultant/view?select={{$candidates->id}}"> <button type="button" class="client-btn uk-button uk-button-primary"> Forward to other Consultant =>></button></a>
            </div>
        </div><br>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderConsultant1 as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-orange-300 imgview">
                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->company_name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>

                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offering_service)

                                                        {{$row->offering_service}}

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
                            <li><a href="{{route('consultant.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;">View Registration form </a></li>
                            @if($row->is_forward == 0)
                            @if($CandidateEnquiryIdExist2)
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="RCIC Consultant" data-serviceId="{{$row->serviceId}}" data-type="School" data-serviceId="{{$row->serviceId}}" data-uk-toggle="target: #modal-close-default">Select as Service </a></li>
                            @endif
                            @elseif($row->is_forward == 1)
                            <li><a href="#" style="color:#f39c12;" data-type="RCIC Consultant" data-serviceId="{{$row->serviceId}}">Service Substituded</a></li>
                            @elseif($row->is_forward == 2)
                            <li><a href="#" style="color:green;" data-type="RCIC Consultant" data-serviceId="{{$row->serviceId}}">Service forwarded</a></li>
                            @endif
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        <hr>
        @endif

        @if(count($EnquiryProviderImmigration1))

        <div class="row">
            <div class="col-9">
                <h6>Immigration</h6>
            </div>
            <div class="float-right" style="right:0%">
                <a href="/admin/immigration/view?select={{$candidates->id}}"> <button type="button" class="client-btn uk-button uk-button-primary"> Forward to other Immigration =>></button></a>
            </div>
        </div><br>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>

            @foreach($EnquiryProviderImmigration1 as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-orange-300 imgview">
                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->company_name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>

                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offering_service)

                                                        {{$row->offering_service}}

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
                            <li><a href="{{route('consultant.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            @if($row->is_forward == 0)
                            @if($CandidateEnquiryIdExist2)
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="Immigration Lawyer/Attorney" data-serviceId="{{$row->serviceId}}" data-type="School" data-serviceId="{{$row->serviceId}}" data-uk-toggle="target: #modal-close-default">Select as Service </a></li>
                            2endif
                            @elseif($row->is_forward == 1)
                            <li><a href="#" style="color:#f39c12;" data-type="Immigration Lawyer/Attorney" data-serviceId="{{$row->serviceId}}">Service Substituded</a></li>
                            @elseif($row->is_forward == 2)
                            <li><a href="#" style="color:green;" data-type="Immigration Lawyer/Attorney" data-serviceId="{{$row->serviceId}}">Service forwarded</a></li>
                            @endif
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderBusiness1))


        <div class="row">
            <div class="col-9">
                <h6>Business</h6>
            </div>
            <div class="float-right" style="right:0%">
                <a href="/admin/business/view?select={{$candidates->id}}"> <button type="button" class="client-btn uk-button uk-button-primary"> Forward to other Business =>></button></a>
            </div>
        </div><br>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderBusiness1 as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-orange-300 imgview">
                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->company_name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>

                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offering_service)

                                                        {{$row->offering_service}}

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
                            <li><a href="{{route('business.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            @if($row->is_forward == 0)
                            @if($CandidateEnquiryIdExist2)
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="Chartered Accountant" data-serviceId="{{$row->serviceId}}" data-type="School" data-serviceId="{{$row->serviceId}}" data-uk-toggle="target: #modal-close-default">Select as Service </a></li>
                            @endif
                            @elseif($row->is_forward == 1)
                            <li><a href="#" style="color:#f39c12;" data-type="Chartered Accountant" data-serviceId="{{$row->serviceId}}">Service Substituded</a></li>
                            @elseif($row->is_forward == 2)
                            <li><a href="#" style="color:green;" data-type="Chartered Accountant" data-serviceId="{{$row->serviceId}}">Service forwarded</a></li>
                            @endif
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        @endif
    </u1>
    <u1>
        @if($EnquiryInstitutionSchoolSubstitude)
        <h6>School</h6>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-orange-300">

                                    <div class="sc-padding-medium uk-text-center">
                                        @if($EnquiryInstitutionSchoolSubstitude->img)
                                        <img src="{{url('files/'.$EnquiryInstitutionSchoolSubstitude->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$EnquiryInstitutionSchoolSubstitude->name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$EnquiryInstitutionSchoolSubstitude->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">{{$EnquiryInstitutionSchoolSubstitude->phone}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">{{$EnquiryInstitutionSchoolSubstitude->email}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$EnquiryInstitutionSchoolSubstitude->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$EnquiryInstitutionSchoolSubstitude->city}} {{$EnquiryInstitutionSchoolSubstitude->region}} {{$EnquiryInstitutionSchoolSubstitude->country}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($EnquiryInstitutionSchoolSubstitude->offer_course)

                                                        {{$EnquiryInstitutionSchoolSubstitude->offer_course}}

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
                            <li><a href="{{route('institution.admin.view',['id' => $EnquiryInstitutionSchoolSubstitude->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                        </ul>
                    </div>
                </a>
            </div>
            @if($EnquiryInstitutionSchoolSubstitude->description)
            <div class="col-lg-6 col-md-6">
                <p style="color:tomato">Forwarded Message !</p>
                <textarea class="form-control textarea" rows="7" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled name="description" id="msg">{{$EnquiryInstitutionSchoolSubstitude->description}}</textarea>
            </div>
            @endif
        </div>
        <hr>
        @endif
        @if($EnquiryInstitutionCollegeSubstitude)

        <h6>College</h6>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-orange-300">

                                    <div class="sc-padding-medium uk-text-center">
                                        @if($EnquiryInstitutionCollegeSubstitude->img)
                                        <img src="{{url('files/'.$EnquiryInstitutionCollegeSubstitude->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$EnquiryInstitutionCollegeSubstitude->name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$EnquiryInstitutionCollegeSubstitude->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">{{$EnquiryInstitutionCollegeSubstitude->phone}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">{{$EnquiryInstitutionCollegeSubstitude->email}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$EnquiryInstitutionCollegeSubstitude->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$EnquiryInstitutionCollegeSubstitude->city}} {{$EnquiryInstitutionCollegeSubstitude->region}} {{$EnquiryInstitutionCollegeSubstitude->country}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($EnquiryInstitutionCollegeSubstitude->offer_course)

                                                        {{$EnquiryInstitutionCollegeSubstitude->offer_course}}

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
                            <li><a href="{{route('institution.admin.view',['id' => $EnquiryInstitutionCollegeSubstitude->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                        </ul>
                    </div>
                </a>
            </div>
            @if($EnquiryInstitutionCollegeSubstitude->description)
            <div class="col-lg-6 col-md-6">
                <p style="color:tomato">Forwarded Message !</p>
                <textarea class="form-control textarea" rows="7" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled name="description" id="msg">{{$EnquiryInstitutionCollegeSubstitude->description}}</textarea>
            </div>
            @endif
        </div>
        <hr>
        @endif
        @if($EnquiryInstitutionUniversitySubstitude)
        <h6>University</h6>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-orange-300">

                                    <div class="sc-padding-medium uk-text-center">
                                        @if($EnquiryInstitutionUniversitySubstitude->img)
                                        <img src="{{url('files/'.$EnquiryInstitutionUniversitySubstitude->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$EnquiryInstitutionUniversitySubstitude->name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$EnquiryInstitutionUniversitySubstitude->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">{{$EnquiryInstitutionUniversitySubstitude->phone}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">{{$EnquiryInstitutionUniversitySubstitude->email}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$EnquiryInstitutionUniversitySubstitude->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$EnquiryInstitutionUniversitySubstitude->city}} {{$EnquiryInstitutionUniversitySubstitude->region}} {{$EnquiryInstitutionUniversitySubstitude->country}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($EnquiryInstitutionUniversitySubstitude->offer_course)

                                                        {{$EnquiryInstitutionUniversitySubstitude->offer_course}}

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
                            <li><a href="{{route('institution.admin.view',['id' => $EnquiryInstitutionUniversitySubstitude->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                        </ul>
                    </div>
                </a>

            </div>
            @if($EnquiryInstitutionUniversitySubstitude->description)
            <div class="col-lg-6 col-md-6">
                <p style="color:tomato">Forwarded Message !</p>
                <textarea class="form-control textarea" rows="7" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled name="description" id="msg">{{$EnquiryInstitutionUniversitySubstitude->description}}</textarea>
            </div>
            @endif
        </div>
        <hr>
        @endif
        @if($EnquiryProviderConsultantSubstitude)

        <h6>Consultant</h6>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-orange-300 imgview">
                                    <div class="sc-padding-medium uk-text-center">
                                        @if($EnquiryProviderConsultantSubstitude->img)
                                        <img src="{{url('files/'.$EnquiryProviderConsultantSubstitude->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$EnquiryProviderConsultantSubstitude->company_name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$EnquiryProviderConsultantSubstitude->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">{{$EnquiryProviderConsultantSubstitude->phone}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">{{$EnquiryProviderConsultantSubstitude->email}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$EnquiryProviderConsultantSubstitude->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$EnquiryProviderConsultantSubstitude->city}} {{$EnquiryProviderConsultantSubstitude->region}} {{$EnquiryProviderConsultantSubstitude->country}}</p>
                                                </div>
                                            </li>

                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($EnquiryProviderConsultantSubstitude->offering_service)

                                                        {{$EnquiryProviderConsultantSubstitude->offering_service}}

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
                            <li><a href="{{route('consultant.admin.view',['id' => $EnquiryProviderConsultantSubstitude->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                        </ul>
                    </div>
                </a>
            </div>
            @if($EnquiryProviderConsultantSubstitude->description)
            <div class="col-lg-6 col-md-6">
                <p style="color:tomato">Forwarded Message !</p>
                <textarea class="form-control textarea" rows="7" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled name="description" id="msg">{{$EnquiryProviderConsultantSubstitude->description}}</textarea>
            </div>
            @endif
        </div>
        <hr>
        @endif

        @if($EnquiryProviderImmigrationSubstitude)
        <h6>Immigration</h6>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-orange-300 imgview">
                                    <div class="sc-padding-medium uk-text-center">
                                        @if($EnquiryProviderImmigrationSubstitude->img)
                                        <img src="{{url('files/'.$EnquiryProviderImmigrationSubstitude->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$EnquiryProviderImmigrationSubstitude->company_name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$EnquiryProviderImmigrationSubstitude->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">{{$EnquiryProviderImmigrationSubstitude->phone}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">{{$EnquiryProviderImmigrationSubstitude->email}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$EnquiryProviderImmigrationSubstitude->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$EnquiryProviderImmigrationSubstitude->city}} {{$EnquiryProviderImmigrationSubstitude->region}} {{$EnquiryProviderImmigrationSubstitude->country}}</p>
                                                </div>
                                            </li>

                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($EnquiryProviderImmigrationSubstitude->offering_service)

                                                        {{$EnquiryProviderImmigrationSubstitude->offering_service}}

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
                            <li><a href="{{route('consultant.admin.view',['id' => $EnquiryProviderImmigrationSubstitude->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                        </ul>
                    </div>
                </a>
            </div>
            @if($EnquiryProviderImmigrationSubstitude->description)
            <div class="col-lg-6 col-md-6">
                <p style="color:tomato">Forwarded Message !</p>
                <textarea class="form-control textarea" rows="7" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled name="description" id="msg">{{$EnquiryProviderImmigrationSubstitude->description}}</textarea>
            </div>
            @endif
        </div>
        <hr>
        @endif
        @if($EnquiryProviderBusinessSubstitude)
        <h6>Business</h6>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-orange-300 imgview">
                                    <div class="sc-padding-medium uk-text-center">
                                        @if($EnquiryProviderBusinessSubstitude->img)
                                        <img src="{{url('files/'.$EnquiryProviderBusinessSubstitude->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$EnquiryProviderBusinessSubstitude->company_name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$EnquiryProviderBusinessSubstitude->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">{{$EnquiryProviderBusinessSubstitude->phone}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">{{$EnquiryProviderBusinessSubstitude->email}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$EnquiryProviderBusinessSubstitude->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$EnquiryProviderBusinessSubstitude->city}} {{$EnquiryProviderBusinessSubstitude->region}} {{$EnquiryProviderBusinessSubstitude->country}}</p>
                                                </div>
                                            </li>

                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($EnquiryProviderBusinessSubstitude->offering_service)

                                                        {{$EnquiryProviderBusinessSubstitude->offering_service}}

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
                            <li><a href="{{route('business.admin.view',['id' => $EnquiryProviderBusinessSubstitude->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                        </ul>
                    </div>
                </a>
            </div>
            @if($EnquiryProviderBusinessSubstitude->description)
            <div class="col-lg-6 col-md-6">
                <p style="color:tomato">Forwarded Message !</p>
                <textarea class="form-control textarea" rows="7" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled name="description" id="msg">{{$EnquiryProviderBusinessSubstitude->description}}</textarea>
            </div>
            @endif
        </div>
        @endif
    </u1>
    <u1>
        @if(count($EnquiryInstitutionSchool2) )

        <h6>School</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionSchool2 as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-green-300">

                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offer_course)

                                                        {{$row->offer_course}}

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
                            <li><a href="{{route('institution.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="School" data-serviceId="{{$row->serviceId}}">2) Select as Service </a></li>
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryInstitutionCollege2))

        <h6>College</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionCollege2 as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-green-300">

                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offer_course)

                                                        {{$row->offer_course}}

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
                            <li><a href="{{route('institution.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="College" data-serviceId="{{$row->serviceId}}">2) Select as Service </a></li>
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryInstitutionUniversity2))
        <h6>University</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionUniversity2 as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-green-300">

                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offer_course)

                                                        {{$row->offer_course}}

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
                            <li><a href="{{route('institution.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="University" data-serviceId="{{$row->serviceId}}">2) Select as Service </a></li>
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderConsultant2))

        <h6>Consultant</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderConsultant2 as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-green-300 imgview">
                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->company_name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>

                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offering_service)

                                                        {{$row->offering_service}}

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
                            <li><a href="{{route('consultant.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="RCIC Consultant" data-serviceId="{{$row->serviceId}}">2) Select as Service </a></li>
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderImmigration2))

        <h6>Immigration</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderImmigration2 as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-green-300 imgview">
                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->company_name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>

                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offering_service)

                                                        {{$row->offering_service}}

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
                            <li><a href="{{route('consultant.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="Immigration Lawyer/Attorney" data-serviceId="{{$row->serviceId}}">2) Select as Service </a></li>
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderBusiness2))

        <h6>Business</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderBusiness2 as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-green-300 imgview">
                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->company_name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>

                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offering_service)

                                                        {{$row->offering_service}}

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
                            <li><a href="{{route('business.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="Chartered Accountant" data-serviceId="{{$row->serviceId}}">2) Select as Service </a></li>
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        @endif

    </u1>
    <u1>
        @if(count($EnquiryInstitutionSchool))
        <h6>School</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionSchool as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-green-300">

                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offer_course)

                                                        {{$row->offer_course}}

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
                            <li><a href="{{route('institution.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="School" data-serviceId="{{$row->serviceId}}">2) Select as Service </a></li>
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryInstitutionCollege))
        <h6>College</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionCollege as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-green-300">

                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offer_course)

                                                        {{$row->offer_course}}

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
                            <li><a href="{{route('institution.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="College" data-serviceId="{{$row->serviceId}}">2) Select as Service </a></li>
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryInstitutionUniversity))
        <h6>University</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionUniversity as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-green-300">

                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offer_course)

                                                        {{$row->offer_course}}

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
                            <li><a href="{{route('institution.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="University" data-serviceId="{{$row->serviceId}}">2) Select as Service </a></li>
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderConsultant))
        <h6>Consultant</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderConsultant as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-green-300 imgview">
                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->company_name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>

                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offering_service)

                                                        {{$row->offering_service}}

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
                            <li><a href="{{route('consultant.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="RCIC Consultant" data-serviceId="{{$row->serviceId}}">2) Select as Service </a></li>
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderImmigration))
        <h6>Immigration</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderImmigration as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-green-300 imgview">
                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->company_name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>

                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offering_service)

                                                        {{$row->offering_service}}

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
                            <li><a href="{{route('consultant.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="Immigration Lawyer/Attorney" data-serviceId="{{$row->serviceId}}">2) Select as Service </a></li>

                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderBusiness))
        <h6>Business</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderBusiness as $row)
            <li>
                <a href="#">
                    <div class="uk-card uk-card-hover " style="height:275px">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-green-300 imgview">
                                    <div class="sc-padding-medium uk-text-center">
                                        @if($row->img)
                                        <img src="{{url('files/'.$row->img)}}" style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" />
                                        @else
                                        <img class="rounded-circle  img " style="width:100px;height:100px" class="sc-avatar sc-border" alt="xerdman" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                        @endif
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            {{$row->company_name}}
                                        </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->registration_number}}</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l ">
                                    <div class="sc-padding-medium">
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
                                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->website_address}}</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">{{$row->city}} {{$row->region}} {{$row->country}}</p>
                                                </div>
                                            </li>

                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">
                                                        @if($row->offering_service)

                                                        {{$row->offering_service}}

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
                            <li><a href="{{route('business.admin.view',['id' => $row->serviceId])}}" style="color:#17a2b8;"> View Registration form </a></li>
                            <li><a href="#" style="color:#17a2b8;" class="confirmEnquiry" data-type="Chartered Accountant" data-serviceId="{{$row->serviceId}}">2) Select as Service </a></li>
                        </ul>
                    </div>
                </a>
            </li>
            @endforeach
        </u1>
        @endif
    </u1>
</u1>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $(document).ready(function() {

        // if ($('#type').val() == 'RCIC Consultant') {
        //     $('.page-active').removeClass('sc-page-active')
        //     $('.page-RCIC-Consultant').addClass('sc-page-active')
        // } else {
        //     $('.page-active').removeClass('sc-page-active')
        //     $('.page-immigration ').addClass('sc-page-active')
        // }

        $('.confirmEnquiry').on('click', function() {
            var type = $(this).attr('data-type')
            var serviceId = $(this).attr('data-serviceId')
            var candidatesId = $('#candidatesId').val();
            console.log("type", type);
            $('.confirmEnquiryy').on('click', function() {
                var description = $('#msg').val();
                $('#modal-close-default').fadeOut();
                $.ajax({

                    method: "post",
                    url: "/confirmEnquiry",
                    dataType: 'json',

                    data: {
                        '_token': '{{csrf_token()}}',
                        type: type,
                        serviceId: serviceId,
                        candidatesId: candidatesId,
                        description: description,
                    },
                    success: function(result) {
                        console.log('result', result);
                        location.reload();
                    },

                });
            });

        });

    });
</script>
@endsection