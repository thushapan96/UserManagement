@extends('layouts.layoutss')
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
<u1 class="col-md-6" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:auto !important;margin-right:auto">
    <li class="uk-active" id="amenu"><a style="cursor:pointer;padding: 0.5rem 1rem;" aria-current="page"> Initiated </a></li>
    <li class="" id="amenu1"><a style="cursor:pointer;padding: 0.5rem  1rem;">Substitute/Forward</a></li>
    <li class="" id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1rem;">Progress </a></li>
    <li class="" id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1rem;">Rejected </a></li>

</u1>
<br>
<u1 class="uk-switcher">
    <li>
        @if(count($EnquiryInstitutionSchool1))
        <h6>School</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionSchool1 as $row)
            <a href="{{route('dashboard.institution.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach

        </u1>
        <hr>
        @endif
        @if(count($EnquiryInstitutionCollege1))

        <h6>College</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionCollege1 as $row)
            <a href="{{route('dashboard.institution.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach

        </u1>
        <hr>
        @endif
        @if(count($EnquiryInstitutionUniversity1))
        <h6>University</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionUniversity1 as $row)
            <a href="{{route('dashboard.institution.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderConsultant1))

        <h6>Consultant</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderConsultant1 as $row)
            <a href="{{route('dashboard.consultant.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        <hr>
        @endif

        @if(count($EnquiryProviderImmigration1))
        <h6>Immigration</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>

            @foreach($EnquiryProviderImmigration1 as $row)

            <a href="{{route('dashboard.consultant.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderBusiness1))

        <h6>Business</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderBusiness1 as $row)
            <a href="{{route('dashboard.consultant.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        @endif
    </li>
    <li>
        @if($EnquiryInstitutionSchoolSubstitude)
        <h6>School</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            <a href="{{route('dashboard.institution.view',['id' => $EnquiryInstitutionSchoolSubstitude->serviceId])}}">
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
            </a>
        </u1>
        <hr>
        @endif
        @if($EnquiryInstitutionCollegeSubstitude)

        <h6>College</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            <a href="{{route('dashboard.institution.view',['id' => $EnquiryInstitutionCollegeSubstitude->serviceId])}}">
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
            </a>
        </u1>
        <hr>
        @endif
        @if($EnquiryInstitutionUniversitySubstitude)
        <h6>University</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            <a href="{{route('dashboard.institution.view',['id' => $EnquiryInstitutionUniversitySubstitude->serviceId])}}">
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
            </a>
        </u1>
        <hr>
        @endif
        @if($EnquiryProviderConsultantSubstitude)

        <h6>Consultant</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            <a href="{{route('dashboard.consultant.view',['id' => $EnquiryProviderConsultantSubstitude->serviceId])}}">
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
            </a>
        </u1>
        <hr>
        @endif

        @if($EnquiryProviderImmigrationSubstitude)
        <h6>Immigration</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            <a href="{{route('dashboard.consultant.view',['id' => $EnquiryProviderImmigrationSubstitude->serviceId])}}">
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
            </a>
        </u1>
        <hr>
        @endif
        @if($EnquiryProviderBusinessSubstitude)
        <h6>Business</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            <a href="{{route('dashboard.business.view',['id' => $EnquiryProviderBusinessSubstitude->serviceId])}}">
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
            </a>
        </u1>
        @endif
    </li>
    <li>
        @if(count($EnquiryInstitutionSchool2) )

        <h6>School</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionSchool2 as $row)
            <a href="{{route('dashboard.institution.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryInstitutionCollege2))

        <h6>College</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionCollege2 as $row)
            <a href="{{route('dashboard.institution.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryInstitutionUniversity2))
        <h6>University</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionUniversity2 as $row)
            <a href="{{route('dashboard.institution.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderConsultant2))

        <h6>Consultant</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderConsultant2 as $row)
            <a href="{{route('dashboard.consultant.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderImmigration2))

        <h6>Immigration</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderImmigration2 as $row)
            <a href="{{route('dashboard.consultant.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderBusiness2))

        <h6>Business</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderBusiness2 as $row)
            <a href="{{route('dashboard.consultant.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        @endif

    </li>
    <li>
        @if(count($EnquiryInstitutionSchool))
        <h6>School</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionSchool as $row)
            <a href="{{route('dashboard.institution.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryInstitutionCollege))
        <h6>College</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionCollege as $row)
            <a href="{{route('dashboard.institution.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryInstitutionUniversity))
        <h6>University</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryInstitutionUniversity as $row)
            <a href="{{route('dashboard.institution.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderConsultant))
        <h6>Consultant</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderConsultant as $row)
            <a href="{{route('dashboard.consultant.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderImmigration))
        <h6>Immigration</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderImmigration as $row)
            <a href="{{route('dashboard.consultant.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        <hr>
        @endif
        @if(count($EnquiryProviderBusiness))
        <h6>Business</h6>
        <u1 class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
            @foreach($EnquiryProviderBusiness as $row)
            <a href="{{route('dashboard.consultant.view',['id' => $row->serviceId])}}">
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
            </a>
            @endforeach
        </u1>
        @endif
    </li>
</u1>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    // $(document).ready(function() {

    //     if ($('#type').val() == 'RCIC Consultant') {
    //         $('.page-active').removeClass('sc-page-active')
    //         $('.page-RCIC-Consultant').addClass('sc-page-active')
    //     } else {
    //         $('.page-active').removeClass('sc-page-active')
    //         $('.page-immigration ').addClass('sc-page-active')
    //     }

    //     const baseUrlAsset = "{{url('files/')}}";

    //     $('#searchbar').on('keyup', function() {
    //         var searchValue = $('#searchbar').val();
    //         var searchType = $('.filter').val();
    //         var type = $('#type').val();
    //         console.log("type", type);

    //         $.ajax({

    //             method: "post",
    //             url: "/provider/search",
    //             dataType: 'json',

    //             data: {
    //                 '_token': '{{csrf_token()}}',
    //                 search: searchValue,
    //                 searchType: searchType,
    //                 type: type,
    //             },
    //             success: function(result) {
    //                 console.log(result)
    //                 var order_row = '';
    //                 $('#sc-contact-list').html('');

    //                 $.each(result, function(index, row) {

    //                     var first_index = index;
    //                     order_row = `<li>
    //     <input id="type" value="${row.type}" hidden>
    //     <a href="/dashboard/consultant/${row.id}">
    //         <div class="uk-card uk-card-hover " style="height:280px">
    //             <div class="uk-card-body sc-padding-remove">
    //                 <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
    //                     <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-light-green-50">

    //                         <div class="sc-padding-medium uk-text-center">
    //                             <img id="img-${index}" style="width:100px;height:100px" src="" class="sc-avatar sc-border" alt="xerdman" />

    //                             <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
    //                                ${row.company_name}
    //                             </p>
    //                             <p class="uk-margin-remove sc-color-secondary uk-text-medium">${row.registration_number}</p>
    //                         </div>
    //                     </div>
    //                     <div class="uk-width-2-3@l ">
    //                         <div class="sc-padding-medium">
    //                             <ul class="uk-list uk-list-divider">
    //                                 <li class="sc-list-group">
    //                                     <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
    //                                     <div class="sc-list-body">
    //                                         <p class="uk-margin-remove sc-text-semibold">${row.phone}</p>
    //                                     </div>
    //                                 </li>
    //                                 <li class="sc-list-group">
    //                                     <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
    //                                     <div class="sc-list-body">
    //                                         <p class="uk-margin-remove">${row.email}</p>
    //                                     </div>
    //                                 </li>
    //                                 <li class="sc-list-group">
    //                                     <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
    //                                     <div class="sc-list-body">
    //                                         <p class="uk-margin-remove uk-text-wrap">${row.website_address}</p>
    //                                     </div>
    //                                 </li>
    //                                 <li class="sc-list-group">
    //                                     <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
    //                                     <div class="sc-list-body">
    //                                         <p class="uk-margin-remove uk-text-wrap">${row.city} ${row.region} ${row.country}</p>
    //                                     </div>
    //                                 </li> 

    //                                 <li class="sc-list-group">
    //                                     <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
    //                                     <div class="sc-list-body">
    //                                         <p class="uk-margin-remove uk-text-wrap" id="services-${index}">

    //                                         </p>
    //                                     </div>
    //                                 </li>
    //                             </ul>
    //                         </div>
    //                     </div>
    //                 </div>
    //             </div>
    //         </div>
    //     </a>
    //    </li>`;


    //                     $('#sc-contact-list').append(order_row);
    //                     $.each(row.offering_service, function(index, service) {
    //                         $('#services-' + first_index).append(service);

    //                     });
    //                     if (row.img) {
    //                         $('#img-' + first_index).attr('src', baseUrlAsset + '/' + row.img);
    //                     } else {
    //                         $('#img-' + first_index).attr('src', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg');
    //                     }



    //                 });


    //             }

    //         });

    //     });

    // });
</script>
@endsection