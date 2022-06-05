@extends('layouts.layoutss')

@section('content')
<style>
    textarea {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);


    }

    th {
        text-transform: capitalize;
        color: #00000078 !important;
    }

    .img {
        border: 1px solid #ddd;
        /* border-radius: 4px !important; */
        padding: 5px !important;
        opacity: 1;
    }

    .custom-file-upload {
        display: inline-block;
        padding: 2px 2px;
        cursor: pointer;
    }

    .custom-file-upload input[type="file"] {
        display: none;
    }

    th {
        color: #00000078 !important;
    }
</style>
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

<section>

    <div class="row">

        <div class="col-md-10">
            <h3 class="float-center" style="text-align:center">{{$consultants->company_name}} Company</h3>
            <u1 class="col-md-11" data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:2% !important;">
                <li class=" uk-active" id="amenu"><a style="cursor:pointer;padding: 0.5rem 0.5rem;" aria-current="page">Main </a></li>
                <li class="" id="amenu1"><a style="cursor:pointer;padding: 0.5rem  0.5rem;">Team list</a></li>
                <li class="" id="amenu2"><a style="cursor:pointer;padding: 0.5rem  0.5rem;">About Company </a></li>
                <li class="" id="amenu3"><a style="cursor:pointer;padding: 0.5rem  0.5rem;"> Award & Certification</a></li>
                <li class="" id="amenu4"><a style="cursor:pointer;padding: 0.5rem  0.5rem;">News and Events</a></li>
                <li class="" id="amenu5"><a style="cursor:pointer;padding: 0.5rem 1rem;">Canada Inspire</a></li>
                <li class="" id="amenu6"><a style="cursor:pointer;padding: 0.5rem 1rem;">Feedback</a></li>

            </u1>
            <u1 class="uk-switcher">
                <li id='menu' class='tab-pane '>
                    <div class='uk-card col-md-10 ' style="margin-left:5% !important;">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <h6 style="text-decoration:underline;">consultants Information</h6>
                                <table class="table table-hover">
                                    <tr>
                                        <th>Full Name</th>
                                        <td>{{$consultants->first_name}} {{$consultants->middle_name}}{{$consultants->last_name}}</td>
                                        <th>Company Name</th>
                                        <td> {{$consultants->company_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Contact Number</th>
                                        <td>{{$consultants->phone}}</td>
                                        <th>Status</th>
                                        <td> {{$consultants->status}}</td>
                                    </tr>
                                    <tr>
                                        <th>Languages Known</th>
                                        <td> @if($consultants->language_known)
                                            @foreach($consultants->language_known as $row)
                                            {{$row}}
                                            @endforeach
                                            @endif
                                        </td>
                                        <th>Postal Code</th>
                                        <td> {{$consultants->postal_code}}</td>
                                    </tr>
                                    <tr>
                                        <th>Street</th>
                                        <td>{{$consultants->streat}}
                                        </td>
                                        <th>City</th>
                                        <td> {{$consultants->city}}</td>
                                    </tr>
                                    <tr>
                                        <th>Province</th>
                                        <td>{{$consultants->region}}
                                        </td>
                                        <th>Country</th>
                                        <td> {{$consultants->country}}</td>
                                    </tr>
                                    <tr>
                                        <th>Correspondence Email</th>
                                        <td>{{$consultants->email}}
                                        </td>
                                        <th>URL Website Address</th>
                                        <td> {{$consultants->website_address}}</td>
                                    </tr>
                                    <tr>
                                        <th>Registered Office - Location</th>
                                        <td>{{$consultants->registrar_office_area}}
                                        </td>
                                        <th></th>
                                        <td></td>
                                    </tr>
                                </table>
                            </fieldset>
                            <br>
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <h6 style="text-decoration:underline;">other Information</h6>
                                <table class="table table-hover">
                                    <tr>
                                        <th>Specialization</th>
                                        <td> @if($consultants->specialization)
                                            @foreach($consultants->specialization as $row)
                                            {{$row}}
                                            @endforeach
                                            @endif

                                        </td>
                                        <th>Service Offered</th>
                                        <td> @if($consultants->offering_service)
                                            @foreach($consultants->offering_service as $row)
                                            {{$row}}
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Initial chargeable type</th>
                                        <td> {{$consultants->initial_chargeable_type}}
                                        </td>
                                        <th>Year of Establishment</th>
                                        <td> {{$consultants->establishment_year}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Offering Services Since</th>
                                        <td> {{$consultants->offering_year}}
                                        </td>
                                        <th>Response Time</th>
                                        <td> {{$consultants->response_time}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Communication Success</th>
                                        <td> {{$consultants->communication_mode_success}}
                                        </td>
                                        <th>Communication prefer Success</th>
                                        <td>
                                            @if($consultants->communication_mode)
                                            @foreach($consultants->communication_mode as $row)
                                            {{$row}}
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </div>
                    </div>
                </li>
                <li id='menu1' class='tab-pane '>
                    <div class='uk-card col-md-10 ' style="margin-left:5% !important;">
                        <div class="uk-card-body sc-padding-medium">
                            <div class="form-group">
                                <h6 class="ps" style="text-decoration:underline">Company Team details</h6>

                                @if($consultants->team_info)
                                <p class="ps">
                                    {{$consultants->team_info}}
                                </p>
                                @endif
                            </div>
                            @if($teams)
                            @if($teams->count() >= 2 )
                            <div class="row ">
                                @foreach($teams as $key=>$row )
                                <div class="col-md-6">
                                    <div class="card teamCard" style="height: 350px !important;background-color: #f5f5f5!important; box-shadow: none ;">

                                        <div class="row custom-box " style="margin-left: 25%;">
                                            <img class=" mt-2 img float-center " style="width:150px !important;height:100px" src="{{url('files/'.$row ->team_img)}}">
                                        </div>
                                        <br>
                                        <table class="table table-hover">

                                            @if($row->member)
                                            <tr>
                                                <th>Name</th>
                                                <td> {{$row->member}}</td>
                                            </tr>
                                            @endif
                                            @if($row->expertise_area)
                                            <tr>
                                                <th>expert area</th>
                                                <td> {{$row->expertise_area}}</td>
                                            </tr>
                                            @endif
                                            @if($row->experience_year)
                                            <tr>
                                                <th>year of experience</th>
                                                <td> {{$row->experience_year}}</td>
                                            </tr>
                                            @endif
                                            @if($row->team_number_success_cases)
                                            <tr>
                                                <th>no of success cases</th>
                                                <td> {{$row->team_number_success_cases}}</td>
                                            </tr>
                                            @endif
                                        </table>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @else
                            <div class="row ">
                                @foreach($teams as $key=>$row )

                                <div class="col-md-6">
                                    <div class="card teamCard" style="  height: 350px !important;background-color: #f5f5f5!important; box-shadow: none ;">
                                        <div class="row custom-box " style="margin-left: 25%;">
                                            <img class=" mt-2 img float-center " style="width:150px !important;height:100px" src="{{url('files/'.$row ->team_img)}}">
                                        </div>
                                        <br>
                                        <table class="table table-hover">

                                            @if($row->member)
                                            <tr>
                                                <th>Name</th>
                                                <td> {{$row->member}}</td>
                                            </tr>
                                            @endif
                                            @if($row->expertise_area)
                                            <tr>
                                                <th>expert area</th>
                                                <td> {{$row->expertise_area}}</td>
                                            </tr>
                                            @endif
                                            @if($row->experience_year)
                                            <tr>
                                                <th>year of experience</th>
                                                <td> {{$row->experience_year}}</td>
                                            </tr>
                                            @endif
                                            @if($row->team_number_success_cases)
                                            <tr>
                                                <th>no of success cases</th>
                                                <td> {{$row->team_number_success_cases}}</td>
                                            </tr>
                                            @endif
                                        </table>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                            @endif
                            @endif
                        </div>
                    </div>
                </li>
                <li id='menu2' class='tab-pane '>
                    <div class="uk-card col-md-10" style="margin-left:5% !important;">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                @if($consultants->privacy_policy_document)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Privacy document of {{$consultants->type}}
                                            </label>
                                            <br>

                                            <a href="{{url('files/'.$consultants->privacy_policy_document)}}" target="_blank" style=" text-decoration: underline;width:100% !important">{{$consultants->privacy_policy_document}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($consultants->privacy_policy_detail)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label style="width:400px">Terms of Privacy of {{$consultants->type}}</label>

                                            <textarea name="privacy_policy_detail" rows="10" value="{{$consultants->privacy_policy_detail}}" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled>{{$consultants->privacy_policy_detail}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($consultants->history)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>{{$consultants->type}} History
                                            </label>
                                            <br>

                                            <textarea class="outset" name="history" rows="12" value="{{$consultants->history}}" style="display: table-cell; vertical-align: middle;width:100%;background-color:white !important; box-shadow: none ;" disabled> {{$consultants->history}}</textarea>


                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($consultants->brief_introduction)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label> Brief Introduction of {{$consultants->type}}
                                            </label>
                                            <br>

                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;" rows="12" name="brief_introduction" value="{{$consultants->brief_introduction}}" disabled>{{$consultants->brief_introduction}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </fieldset>
                        </div>
                    </div>
                </li>
                <li id='menu3' class='tab-pane '>
                    <div class="uk-card col-md-10" style="margin-left:5% !important;">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                @if($consultants->Award)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>{{$consultants->type}} Awards and Certifications
                                            </label>
                                            <br>
                                            <a href="{{url('files/'.$consultants->Award)}}" target="_blank" style=" text-decoration: underline;">{{$consultants->Award}}</a>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($consultants->achievement)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>{{$consultants->type}} Achievements
                                            </label>
                                            <br>

                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;" rows="12" name="achievement" value="{{$consultants->achievement}}" disabled>{{$consultants->achievement}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </fieldset>
                        </div>
                    </div>
                </li>
                <li id='menu4' class='tab-pane'>
                    <div class="uk-card col-md-10" style="margin-left:5% !important;">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                @if($consultants->vedio_url)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Video URL Link of {{$consultants->type}}
                                            </label><br>
                                            <a href="{{url($consultants->vedio_url)}}" style="text-decoration: underline;" target="_blank">{{$consultants->vedio_url}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($consultants->event_new_weblink)
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Weblinks for News and Events of {{$consultants->type}}
                                            </label>
                                            <br>

                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;" rows="9" name="event_new_weblink" value="{{$consultants->event_new_weblink}}" disabled>{{$consultants->event_new_weblink}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </fieldset>
                        </div>
                    </div>
                </li> 
                <li class='tab-pane ' id="menu5">
                    <div class="uk-card col-md-10" style="margin-left:5% !important;">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Canada Inspire provides Additional Services :-
                                            </label>
                                            <br>

                                            <textarea style="width:100%;background:white !important; box-shadow: none ;" rows="12" id="field_cutjx" data-invmsg="Canada Inspire provides Additional Services :- is invalid" aria-invalid="false" spellcheck="false">
We have a Team of professionals who are having expert in Application Development, Solutions and Services. 
            1. Is your Company looking for Website Design/Re Design or Development to give professional look
               and exposure for International community?
            2. Are you looking for development of Online Appointments and Payment Gateway or Integration 
               on your Website?
            3. Are you looking for Mobile Application Development to ease your Prospects and Customers?
            4. Are you interested to develop Enquiry form, Query, Survey or feedback form to improve and 
               enhance your services?
            5. Are you looking for CRM - Customer Relation Management Solutions to maintain and manage 
               your company marketing activities,  follow-up, and efficiency to generate good revenues
               for your company and always ahead with your competitors?</textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </li>
                <li class='tab-pane ' id="menu6">
                    <div class="uk-card col-md-10" style="margin-left:5% !important;">
                        <div class="uk-card-body sc-padding-medium">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <div class="row custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Feedback of Canada Inspire
                                            </label>
                                            <br>
                                            <textarea style="width:100%;background-color:white !important; box-shadow: none ;" rows="9" name="Comment" value="{{$consultants->Comment}}" disabled>{{$consultants->Comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </li>
            </u1>

        </div>

        <div class="col-md-2 uk-card" style="margin-top:9%;height:300px !important; box-shadow:none !important">
            <div class="uk-card-body sc-padding-medium">
                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">

                    <div class="d-flex flex-column align-items-center text-center py-1">
                        <div class="row">
                            @if($img)
                            <img class="rounded-circle  img " style="width:100px !important;height:100px; margin: 0 auto;" src="{{url('files/'.$img)}}">
                            @else
                            <img class="rounded-circle  img " style="width:100px !important;height:100px; margin: 0 auto;" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                            @endif
                        </div>
                        <div class="spinner"></div>

                        @if(!$view)
                        <form method="post" id="upload_form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <label class="custom-file-upload float-center">
                                <input id="profile_img" name="profile_img" type="file" />
                                <i class="fa fa-camera" style="font-size:18px;color:#004e75"> </i>
                            </label>
                        </form>
                        @else
                        <br>
                        @endif


                        <div class="row">
                            <a class="facebook" href="{{$consultants->fb_link}}" target="_blank">
                                <div class="icon col-lg-1 col-md-1 col-1 fa-2xl">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                            </a>
                            <a class="twitter" href="{{$consultants->twitter_link}}" target="_blank">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                    <i class="fab fa-twitter"></i>
                                </div>

                            </a>
                            <a class="instagram" href="{{$consultants->insta_link}}" target="_blank">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                    <i class="fab fa-instagram"></i>
                                </div>

                            </a>
                            <a class="linkedin" href="{{$consultants->Linkedin_link}}" target="_blank">
                                <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>

                            </a>

                        </div>
                        <br>
                        @if($view)

                        @else

                        <a href="{{route('edit.consultant')}}"> <button type="button" style="width: 140px;font-size:12px" class="client-btn uk-button uk-button-primary">Edit Profile</button></a>

                        @endif
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</section>


<script>
    $(document).ready(function() {

        $(".bmenu").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu1").fadeIn();
            $(".nav-linkk").removeClass('active')
            $("#amenu1").addClass('active')
        });
        $(".bmenu1").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu2").fadeIn();
            $(".nav-linkk").removeClass('active')
            $("#amenu2").addClass('active')
        });
        $(".bmenu2").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu3").fadeIn();
            $(".nav-linkk").removeClass('active')
            $("#amenu3").addClass('active')
        });
        $(".bmenu3").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu4").fadeIn();
            $(".nav-linkk").removeClass('active')
            $("#amenu4").addClass('active')
        });
        $(".bmenu4").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu5").fadeIn();
            $(".nav-linkk").removeClass('active')
            $("#amenu5").addClass('active')
        });
        $(".bmenu5").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu6").fadeIn();
            $(".nav-linkk").removeClass('active')
            $("#amenu6").addClass('active')
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#profile_img').change(function() {


            console.log('first')
            var formData = new FormData($('#upload_form')[0]);
            console.log("second")
            $(".spinner").addClass("spinner-border ");
            event.preventDefault();
            $.ajax({
                url: "{{ route('ajaxupload.action') }}",
                method: "POST",
                data: formData,

                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    $(".spinner").removeClass("spinner-border");
                    location.reload()

                },

            });



        });

    });
</script>


@endsection