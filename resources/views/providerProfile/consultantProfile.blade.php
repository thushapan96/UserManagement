@extends('layouts.layout')

@section('content')
<style>
    .card:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .card {

        height: 100%;
        width: 100%;

    }

    .outset {
        border-style: outset;
    }

    textarea {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);


    }


    .img {
        border: 1px solid #ddd;
        /* border-radius: 4px !important; */
        padding: 5px !important;
        opacity: 1;
    }

    .input--file {
        position: relative;
        color: #7f7f7f;
        cursor: pointer;
    }

    .input--file input[type="file"] {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        cursor: pointer;
    }

    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 2px 2px;
        cursor: pointer;
    }

    .custom-file-upload input[type="file"] {
        display: none;
    }

    label {
        font-weight: bold !important;
    }

    .personal label {
        font-weight: 300px !important;
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

<div style="margin-left:5%;margin-right:5%">
    <div class="row">

        <div class="col-md-10">
            <h3 class="float-center" style="text-align:center"><label>{{$consultants->company_name}} Company</label></h3>

            <div class="col-md-11">
                <div class="cardf">
                    <nav class="nav nav-pills nav-fill justify-content-left " style="cursor:pointer;">
                        <a class="nav-link nav-linkk active amenu" style="cursor:pointer;padding: 0.5rem 0.5rem;color:#004e75" aria-current="page" id="amenu">Main Content</a>
                        <a class="nav-link nav-linkk amenu1" style="cursor:pointer;padding: 0.5rem  0.5rem;color:#004e75 " id="amenu1">Team list</a>
                        <a class="nav-link nav-linkk amenu2" style="cursor:pointer;padding: 0.5rem  0.5rem;color:#004e75 " id="amenu2">About Company </a>
                        <a class="nav-link nav-linkk amenu3" style="cursor:pointer;padding: 0.5rem  0.5rem;color:#004e75 " id="amenu3"> Award & Certification</a>
                        <a class="nav-link nav-linkk amenu4" style="cursor:pointer;padding: 0.5rem  0.5rem;color:#004e75 " id="amenu4">News and Events</a>
                        <a class="nav-link nav-linkk amenu5" style="cursor:pointer;padding: 0.5rem 1rem;color:#004e75 " id="amenu5">Canada Inspire</a>
                        <a class="nav-link nav-linkk amenu6" style="cursor:pointer;padding: 0.5rem 1rem;color:#004e75 " id="amenu6">Feedback</a>

                    </nav>
                </div>

            </div>
            <br>

            <div class="card col-md-10 tab-pane  personal" id="menu" style="left:5%;">

                <div class="card col-md-12" style="background-color: #f5f5f5!important; box-shadow: none ;">
                    <h5 style="text-decoration:underline;">personal Information</h5><br>

                    <!-- <table class="table table-hover">
                        <tr>
                            <th>Full Name</th>
                            <td>{{$consultants->first_name}} {{$consultants->middle_name}}{{$consultants->last_name}}</td>
                            <th>Company Name</th>
                            <td> {{$consultants->company_name}}</td>
                        </tr>
                        <tr>
                            <th>Full Name</th>
                            <td>{{$consultants->first_name}} {{$consultants->middle_name}}{{$consultants->last_name}}</td>
                            <th>Company Name</th>
                            <td> {{$consultants->company_name}}</td>
                        </tr>
                    </table> -->
                    <div class="row custom-box">
                        <div class="col-md-3">
                            <strong class="ps">Full Name</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps"> {{$consultants->first_name}} {{$consultants->middle_name}}{{$consultants->last_name}} </p>
                        </div>

                        <div class="col-md-3">
                            <strong class="ps">Company Name</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">
                                @if($consultants->company_name)
                                {{$consultants->company_name}}
                                @else
                                --
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-3">
                            <strong class="ps">Contact Number</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">{{$consultants->phone}}</p>
                        </div>

                        <div class="col-md-3">
                            <strong class="ps">Status</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">{{$consultants->status}}</p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-3">
                            <strong class="ps">Languages Known</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">
                                @if($consultants->language_known)
                                @foreach($consultants->language_known as $row)
                                {{$row}}
                                @endforeach
                                @endif
                            </p>
                        </div>
                        <div class="col-md-3">
                            <strong class="ps">Postal Code</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">{{$consultants->postal_code}}</p>
                        </div>

                    </div>
                    <div class="row custom-box">
                        <div class="col-md-3">
                            <strong class="ps">Street</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">{{$consultants->streat}}</p>
                        </div>
                        <div class="col-md-3">
                            <strong class="ps">City</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">{{$consultants->city}}</p>
                        </div>



                    </div>
                    <div class="row custom-box">

                        <div class="col-md-3">
                            <strong class="ps">Province</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">{{$consultants->region}}</p>
                        </div>
                        <div class="col-md-3">
                            <strong class="ps">Country</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">{{$consultants->country}}</p>
                        </div>

                    </div>
                    <div class="row custom-box">
                        <div class="col-md-3">
                            <strong class="ps">Correspondence Email</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">{{$consultants->email}}</p>
                        </div>

                        <div class="col-md-3">
                            <strong class="ps">URL - Website Address </strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">{{$consultants->website_address}}</p>
                        </div>
                    </div>
                    <div class="row custom-box">


                        <div class="col-md-3">
                            <strong class="ps">Registered Office - Location</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">{{$consultants->registrar_office_area}}</p>
                        </div>
                    </div>

                </div>
                <div class="card col-md-12" style="background-color: #f5f5f5!important; box-shadow: none ;">
                    <h5 style="text-decoration:underline;">other Information</h5><br>

                    <div class="row custom-box">
                        <div class="col-md-3">
                            <strong class="ps">Specialization</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">
                                @if($consultants->specialization)
                                @foreach($consultants->specialization as $row)
                                {{$row}}
                                @endforeach
                                @endif
                            </p>
                        </div>

                        <div class="col-md-3">
                            <strong class="ps">Express Entry - Success</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">{{$consultants->express_entry_success}}</p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-3">
                            <strong class="ps">PNP Success</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">{{$consultants->pnp_success}}</p>
                        </div>

                        <div class="col-md-3">
                            <strong class="ps">LMIA Success</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">{{$consultants->lmia_success}}</p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-3">
                            <strong class="ps">Others Success</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">{{$consultants->other_success}}</p>
                        </div>

                        <div class="col-md-3">
                            <strong class="ps">Others Success</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">{{$consultants->other_success}}</p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-3">
                            <strong class="ps">Service Offered</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">
                                @if($consultants->offering_service)
                                @foreach($consultants->offering_service as $row)
                                {{$row}}
                                @endforeach
                                @endif
                            </p>
                        </div>

                        <div class="col-md-3">
                            <strong class="ps">Other Services</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">
                                @if($consultants->other_service)
                                @foreach($consultants->other_service as $row)
                                {{$row}}
                                @endforeach
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-3">
                            <strong class="ps">Student Visa - Success</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">

                                {{$consultants->student_visa_success}}

                            </p>
                        </div>

                        <div class="col-md-3">
                            <strong class="ps">Tourist Visa Success</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">

                                {{$consultants->tourist_visa_success}}

                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-3">
                            <strong class="ps">Family Visa Success</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">

                                {{$consultants->family_visa_success}}

                            </p>
                        </div>

                        <div class="col-md-3">
                            <strong class="ps">Other Visa Success</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">

                                {{$consultants->other_visa_success}}

                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-3">
                            <strong class="ps">Year of Establishment</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">

                                {{$consultants->establishment_year}}

                            </p>
                        </div>

                        <div class="col-md-3">
                            <strong class="ps">Offering Services Since</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">

                                {{$consultants->offering_year}}

                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-3">
                            <strong class="ps">Total Cases Taken</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">

                                {{$consultants->total_cases_taken}}

                            </p>
                        </div>

                        <div class="col-md-3">
                            <strong class="ps">Communication Success</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">

                                {{$consultants->communication_mode_success}}

                            </p>
                        </div>
                    </div>
                    <div class="row custom-box">
                        <div class="col-md-3">
                            <strong class="ps">Prefer Correspondence Type</strong>
                        </div>

                        <div class="col-md-3">
                            <p class="ps">
                                @if($consultants->communication_mode)
                                @foreach($consultants->communication_mode as $row)
                                {{$row}}
                                @endforeach
                                @endif
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class=" tab-pane  col-md-10" id="menu1" style="left:5%">

                <div class="form-group">
                    <label class="ps">Company Team details</label>
                    <br>
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
                        <div class="card teamCard" style="  height: 350px !important">
                            <div class="card " style="background-color: #f5f5f5!important; box-shadow: none ; height: 300px !important">
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
                    </div>
                    @endforeach
                </div>
                @else
                <div class="row ">
                    @foreach($teams as $key=>$row )

                    <div class="col-md-6">
                        <div class="card teamCard" style="  height: 350px !important">
                            <div class="card " style="background-color: #f5f5f5!important; box-shadow: none ; height: 300px !important">
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
                    </div>

                    @endforeach
                </div>
                @endif
                @endif
            </div>

            <div class="card tab-pane  col-md-10" id="menu2" style="width:80% !important;left:5%">
                <div class="">

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

                                <textarea name="privacy_policy_detail" rows="10" value="{{$consultants->privacy_policy_detail}}" style="display: table-cell; vertical-align: middle;width:100%;background-color:#f5f5f5 !important; box-shadow: none ;" disabled>{{$consultants->privacy_policy_detail}}</textarea>
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

                                <textarea class="outset" name="history" rows="12" value="{{$consultants->history}}" style="display: table-cell; vertical-align: middle;width:100%;background-color:#f5f5f5 !important; box-shadow: none ;" disabled> {{$consultants->history}}</textarea>


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

                                <textarea style="width:100%;background-color:#f5f5f5 !important; box-shadow: none ;" rows="12" name="brief_introduction" value="{{$consultants->brief_introduction}}" disabled>{{$consultants->brief_introduction}}</textarea>
                            </div>
                        </div>
                    </div>
                    @endif

                </div>

            </div>

            <div class="card tab-pane  col-md-10" id="menu3" style="width:80% !important; left:5%">

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

                            <textarea style="width:100%;background-color:#f5f5f5 !important; box-shadow: none ;" rows="12" name="achievement" value="{{$consultants->achievement}}" disabled>{{$consultants->achievement}}</textarea>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <div class="card tab-pane  col-md-10" id="menu4" style="width:80% !important;left:5%">

                @if($consultants->vedio_url)
                <div class="row custom-box">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>Video URL Link of {{$consultants->type}}
                            </label><br>
                            <a href="{{$consultants->vedio_url}}" style="text-decoration: underline;">{{$consultants->vedio_url}}<a>
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

                            <textarea style="width:100%;background-color:#f5f5f5 !important; box-shadow: none ;" rows="9" name="event_new_weblink" value="{{$consultants->event_new_weblink}}" disabled>{{$consultants->event_new_weblink}}</textarea>
                        </div>
                    </div>
                </div>
                @endif

            </div>

            <div class="card tab-pane  col-md-10" id="menu5" style="width:80% !important;left:5%">

                <div class="row custom-box">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>Canada Inspire provides Additional Services :-
                            </label>
                            <br>

                            <textarea style="width:100%;background:#f5f5f5 !important; box-shadow: none ;" rows="12" id="field_cutjx" data-invmsg="Canada Inspire provides Additional Services :- is invalid" aria-invalid="false" spellcheck="false">
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


            </div>

            <div class="card tab-pane  col-md-10" id="menu6" style="width:80% !important;left:5%">

                <div class="row custom-box">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>Feedback of Canada Inspire
                            </label>
                            <br>

                            <textarea style="width:100%;background-color:#f5f5f5 !important; box-shadow: none ;" rows="9" name="Comment" value="{{$consultants->Comment}}" disabled>{{$consultants->Comment}}</textarea>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="col-md-2">
            <div class="d-flex flex-column align-items-left text-left p-3 py-5">
                <div class="uploadimg ">
                    @if($img)
                    <img class="rounded-circle mt-2 img float-left" style="width:100px !important;height:100px" src="{{url('files/'.$img)}}">
                    @else
                    <img class="rounded-circle mt-5 img float-left" style="width:100px !important;height:100px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><br>
                    @endif

                </div>

                @if(!$view)
                <form method="post" id="upload_form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label class="custom-file-upload float-center">
                        <input id="profile_img" name="profile_img" type="file" />
                        <i class="fa fa-camera" style="font-size:18px;color:#004e75"> </i>
                    </label>
                </form>
                @endif
                <br>
                <div class="row">
                    <a class="facebook" href="{{$consultants->fb_link}}" target="_blank">
                        <div class="icon col-lg-1 col-md-1 col-1 fa-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625
                                            h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                        </div>
                    </a>
                    <a class="twitter" href="{{$consultants->twitter_link}}" target="_blank">
                        <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </div>

                    </a>
                    <a class="instagram" href="{{$consultants->insta_link}}" target="_blank">
                        <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </div>

                    </a>
                    <a class="linkedin" href="{{$consultants->Linkedin_link}}" target="_blank">
                        <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                        </div>

                    </a>

                </div>
                <br>
                @if($view)

                @else
                <div class="col-md-10 float-left">
                    <a href="{{route('edit.consultant')}}"> <button type="button" style="width:100%" class="client-btn btn btn-primary">Edit Profile</button></a>
                </div>
                @endif
            </div>

        </div>

    </div>
</div>

<br>


<script>
    $(document).ready(function() {
        $(".dash").removeClass('active')
        $(".profile").addClass('active')
        $('.tab-pane').fadeOut();
        $("#menu").fadeIn();
        $(".amenu").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu").fadeIn();
            $(".nav-linkk").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu1").click(function() {
            $(".nav-linkk").removeClass('active')
            $('.tab-pane').fadeOut();
            $("#menu1").fadeIn();

            $(this).addClass('active')
        });
        $(".amenu2").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu2").fadeIn();
            $(".nav-linkk").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu3").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu3").fadeIn();
            $(".nav-linkk").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu4").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu4").fadeIn();
            $(".nav-linkk").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu5").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu5").fadeIn();
            $(".nav-linkk").removeClass('active')
            $(this).addClass('active')
        });
        $(".amenu6").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu6").fadeIn();
            $(".nav-linkk").removeClass('active')
            $(this).addClass('active')
        });

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
        if (sessionStorage.getItem("appendhtml")) {
            $('#newRow').html(sessionStorage.getItem("appendhtml"))
        }

        $('[name="same_Correspondence_address"]').change(function() {
            if ($(this).is(':checked')) {
                // Do something...
                $('#sameaddress').addClass('d-none');
            } else {
                $('#sameaddress').removeClass('d-none');
            };
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
                    location.reload()

                },

            });



        });

        function textAreaAdjust(element) {
            element.style.height = "1px";
            element.style.height = (25 + element.scrollHeight) + "px";
        }

    });
</script>


@endsection