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
<input id="type" value="{{$type}}" hidden />
<div class="row">

    <div class="col-md-2">Filter By Financial
        <select class="form-control " id="financial">
            <option value="" {{request()->query('financial') == "" ? 'selected':''}}>Common</option>
            <option value="yes" {{request()->query('financial') == "yes" ? 'selected':''}}> Aided </option>
            <option value="no" {{request()->query('financial') == "no" ? 'selected':''}}> Non-Aided </option>
        </select>
    </div>

    <div class="col-md-2">
        Filter By Course Type
        <select class="form-control " id="course_type">
            <option value="" {{request()->query('course_type') == "" ? 'selected':''}}>Common</option>
            <option value="In Campus" {{request()->query('course_type') == "In Campus" ? 'selected':''}}> In Campus </option>
            <option value="Online" {{request()->query('course_type') == "Online" ? 'selected':''}}>Online</option>
            <option value="Distant" {{request()->query('course_type') == "Distant" ? 'selected':''}}> Distant </option>
            <option value="Others" {{request()->query('course_type') == "Others" ? 'selected':''}}>Others</option>
        </select>

    </div>

    <div class="col-md-3">Search By
        <select class="form-control filter">
            <option value="Name">{{$type}} Name </option>
            <option value="Neighborhood">Neighborhood</option>
            <option value="Courses"> Courses </option>
            <option value="City">City </option>
            <option value="Province">Province </option>
            <option value="Country">Country </option>
        </select>
    </div>
    <div class="col-md-4">
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

    <div class="col-md-1">
        <div class="mt-4">
            <a href="{{route('dashboard.view.'.Str::lower($type))}}" class="client-btn  uk-button uk-boarder">Clear </a>
        </div>
    </div>

</div>


<div>

    <br>
    <ul id="sc-contact-list" class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
        <input id="type" value="{{$type}}" hidden>
        @if($institutions)


        @foreach($institutions as $row)

        <li>
            <a href="{{route('dashboard.institution.view',['id' => $row->id])}}">
                <div class="uk-card uk-card-hover " style="height:275px">
                    <div class="uk-card-body sc-padding-remove">
                        <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                            <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-light-green-50">

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
                                                <p class="uk-margin-remove uk-text-wrap"> {{$row->city}} {{$row->region}} {{$row->country}}</p>
                                            </div>
                                        </li>
                                        <li class="sc-list-group">
                                            <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                            <div class="sc-list-body">
                                                <p class="uk-margin-remove uk-text-wrap">
                                                    @if($row->offer_course)
                                                    @foreach($row->offer_course as $service)
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
            </a>
        </li>
        @endforeach


        @endif

        </u1>

</div>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $(document).ready(function() {
        const baseUrlAsset = "{{url('files/')}}";
        if ($('#type').val() == 'School') {
            $('.page-active').removeClass('sc-page-active')
            $('.page-School').addClass('sc-page-active')
        } else if ($('#type').val() == 'College') {
            $('.page-active').removeClass('sc-page-active')
            $('.page-College ').addClass('sc-page-active')
        } else {
            $('.page-active').removeClass('sc-page-active')
            $('.page-University ').addClass('sc-page-active')
        }

        $('#searchbar').on('keyup', function() {
            if ($('#medium').length) {
                var course_type = $('#course_type').val();
            } else {
                var course_type = "";
            }
            var searchValue = $('#searchbar').val();
            var searchType = $('.filter').val();
            var type = $('#type').val();
            var financial = $('#financial').val();
            console.log("searchType", searchType);
            console.log("course_type", course_type);

            $.ajax({

                method: "post",
                url: "/institude/search",
                dataType: 'json',

                data: {
                    '_token': '{{csrf_token()}}',
                    search: searchValue,
                    searchType: searchType,
                    type: type,
                    financial: financial,
                    course_type: course_type,
                },
                success: function(result) {
                    console.log(result)
                    var order_row = '';
                    $('#sc-contact-list').html('');

                    $.each(result, function(index, row) {

                        var first_index = index;
                        order_row = `<li>
                       <input id="type" value="${row.type}" hidden>
                       <a href="/dashboard/institution/${row.id}">
                       <div class="uk-card uk-card-hover " style="height:100%">
                           <div class="uk-card-body sc-padding-remove">
                               <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                        <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-light-green-50">

                            <div class="sc-padding-medium uk-text-center">
                                <img id="img-${index}" style="width:100px;height:100px"  src="${baseUrlAsset}/${row.img}" class="sc-avatar sc-border" alt="xerdman" />
                                
                                <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                   ${row.name}
                                </p>
                                <p class="uk-margin-remove sc-color-secondary uk-text-medium">${row.registration_number}</p>
                            </div>
                        </div>
                        <div class="uk-width-2-3@l ">
                            <div class="sc-padding-medium">
                                <ul class="uk-list uk-list-divider">
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                        <div class="sc-list-body">
                                            <p class="uk-margin-remove sc-text-semibold">${row.phone}</p>
                                        </div>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                        <div class="sc-list-body">
                                            <p class="uk-margin-remove">${row.email}</p>
                                        </div>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                        <div class="sc-list-body">
                                            <p class="uk-margin-remove uk-text-wrap">${row.website_address}</p>
                                        </div>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                        <div class="sc-list-body">
                                            <p class="uk-margin-remove uk-text-wrap">${row.city} ${row.region} ${row.country}</p>
                                        </div>
                                    </li> 

                                    <li class="sc-list-group">
                                        <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                        <div class="sc-list-body">
                                            <p class="uk-margin-remove uk-text-wrap" id="services-${index}">
                        
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
                     </li>`;


                        $('#sc-contact-list').append(order_row);
                        $.each(row.offer_course, function(index, service) {
                            $('#services-' + first_index).append(service);

                        });
                        if (row.img) {
                            $('#img-' + first_index).attr('src', baseUrlAsset + '/' + row.img);
                        } else {
                            $('#img-' + first_index).attr('src', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg');
                        }



                    });


                }

            });
        });
        $('#financial').on('change', function() {
            var typeValue = $('#type').val();
            console.log('hi')
            var financialValue = $('#financial').val();

            var course_type = $('#course_type').val();
            if ($('#type').val() == 'School') {
                window.location.assign('/dashboard/view/school?financial=' + financialValue + '&course_type=' + course_type);
            } else if ($('#type').val() == 'College') {
                window.location.assign('/dashboard/view/college?financial=' + financialValue + '&course_type=' + course_type);

            } else {
                window.location.assign('/dashboard/view/university?financial=' + financialValue + '&course_type=' + course_type);

            }

        });
        $('#course_type').on('change', function() {
            console.log('hi')
            var financialValue = $('#financial').val();
            var course_type = $('#course_type').val();
            if ($('#type').val() == 'School') {
                window.location.assign('/dashboard/view/school?financial=' + financialValue + '&course_type=' + course_type);
            } else if ($('#type').val() == 'College') {
                window.location.assign('/dashboard/view/college?financial=' + financialValue + '&course_type=' + course_type);

            } else {
                window.location.assign('/dashboard/view/university?financial=' + financialValue + '&course_type=' + course_type);

            }
        });
    });
</script>

@endsection