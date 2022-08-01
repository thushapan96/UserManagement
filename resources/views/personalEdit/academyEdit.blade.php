<!-- Subscribe & Stay Connected. Start -->
@extends('layouts.layoutss')

@section('content')
<style>
    .progress {
        background-color: white !important;
        margin-left: 40px !important;
        margin-right: 40px !important;
        max-height: 4px;

    }
</style>
<!-- Subscribe & Stay Connected. Start -->

<div class=" ">

    <div class="tab-pane  ">
        <h5 style="text-align:center">edit Profile </h5><br>

        <div class="uk-card ">
            <div class="uk-card-body sc-padding-medium">
                <form id="academy_form" action="{{route('profileAcademyupdate',['id' => $Academy->user_id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--div class="news-title">You have questions, let's have a conversation </div-->
                    <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                        <div class="row mt-4 custom-box">

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label class="uk-form-label">Language Proficiency

                                    </label>
                                    <select name="language_proficiency" class="form-control">
                                        <option value="English" {{$Academy->language_proficiency == 'English' ? 'selected':''}}>English</option>
                                        <option value="French" {{$Academy->language_proficiency == 'French' ? 'selected':''}}>French</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label class="uk-form-label">Level

                                    </label>
                                    <select name="language_level" class="form-control">
                                        <option value="Beginner" {{$Academy->language_level == 'Beginner' ? 'selected':''}}>Beginner</option>
                                        <option value="Intermediate" {{$Academy->language_level == 'Intermediate' ? 'selected':''}}>Intermediate</option>
                                        <option value="Competent" {{$Academy->language_level == 'Competent' ? 'selected':''}}>Competent</option>
                                        <option value="Expert" {{$Academy->language_level == 'Expert' ? 'selected':''}}>Expert</option>

                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-4 custom-box">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="">
                                    <label class="uk-form-label">
                                        <p>Certified By </p>
                                    </label>
                                    <input type="text" class="form-control" name="language_certified_by" value="{{$Academy->language_certified_by}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="upload-images">
                                    <label class="uk-form-label">
                                        <p class="mr-2"> Language Certified Attachment </p>
                                    </label>
                                    <a href="{{url('files/'.$Academy->language_attachment)}}" class="uploaded_file" target="_blank" style=" text-decoration: underline;">{{$Academy->language_attachment}}</a>
                                    @if($Academy->language_attachment)
                                    <a data-model="Academy" data-atr="language_attachment" data-id="{{$Academy->id}}" class="ml-2 delete_file_button"><i class="fa fa-times-circle text-danger" aria-hidden="true"></i> </a>
                                    @endif
                                    <input type="file" title="change file" class="form-control" name="language_attachment" value="{{$Academy->language_attachment}}">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5 custom-box">
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label class="uk-form-label">Applicant Test Scores</label>
                                    <select class="form-control" id="applicant_test" name="applicant_test_name[]">
                                        <option value="" {{$Academy->applicant_test_name == '' ? 'selected':''}}>Select</option>
                                        <option value="IELTS" {{$Academy->applicant_test_name == 'IELTS' ? 'selected':''}}>IELTS</option>
                                        <option value="TOFEL" {{$Academy->applicant_test_name == 'TOFEL' ? 'selected':''}}>TOFEL</option>
                                        <option value="CELPIP" {{$Academy->applicant_test_name == 'CELPIP' ? 'selected':''}}>CELPIP</option>
                                        <option value="GRE" {{$Academy->applicant_test_name == 'GRE' ? 'selected':''}}>GRE</option>
                                        <option value="PTE" {{$Academy->applicant_test_name == 'PTE' ? 'selected':''}}>PTE</option>
                                        <option value="SAT" {{$Academy->applicant_test_name == 'SAT' ? 'selected':''}}>SAT</option>
                                        <option value="GMAT" {{$Academy->applicant_test_name == 'GMAT' ? 'selected':''}}>GMAT</option>
                                        <option value="HSEiT" {{$Academy->applicant_test_name == 'HSEiT' ? 'selected':''}}>HSEiT</option>
                                        <option value="LSAT" {{$Academy->applicant_test_name == 'LSAT' ? 'selected':''}}>LSAT</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="form-group">
                                    <label class="uk-form-label">If Other Applicant</label>
                                    <input id="applicant_test_other" class="form-control " type="text" name="applicant_test_name[]" value="{{$Academy->applicant_test_name}}">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12 ">
                                <div class="form-group">
                                    <label class="uk-form-label"> Valid Upto
                                    </label>
                                    <input class="form-control " name="test_valid_upto" type="date" placeholder="Valid Upto" value="{{$Academy->test_valid_upto}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 ">
                                <div class="form-group">
                                    <label class="uk-form-label">Applicant Test Scores Attachment
                                    </label>




                                    <span>
                                        <a href="{{url('files/'.$Academy->test_attachment)}}" target="_blank" class="uploaded_file" style=" text-decoration: underline;">{{$Academy->test_attachment}}</a>
                                        @if($Academy->test_attachment)
                                        <a data-model="Academy" data-atr="test_attachment" data-file="{{$Academy->test_attachment}}" data-id="{{$Academy->id}}" class="ml-2 delete_file_button"><i class="fa fa-times-circle text-danger" aria-hidden="true"></i> </a>
                                        @endif
                                        <input type="file" class="form-control" name="test_attachment" value="{{$Academy->test_attachment}}"></span>

                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <br>
                    <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                        <div id="addschoolrow">
                            @if($qualification)
                            @foreach($qualification as $key => $row)
                            @if($row->type == 'school')

                            <div id="addschoolform">
                                <div class="col-lg-12 col-md-12 col-12 container addschool mt-4">
                                    <div class="">
                                        <div class="row custom-box">

                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="form-group">
                                                    <label class="uk-form-label">School Name</label>
                                                    <input class="form-control " name="name[]" type="text" value="{{$row->name}}">
                                                    <input class="form-control " hidden name="qualificationId[]" value="{{$row->id}}" type="text">
                                                    <input class="form-control " hidden name="type[]" value="school" type="text">
                                                    <input class="form-control " hidden name="tech[]" value="NA" type="text">

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12 ">
                                                <div class="form-group">
                                                    <label class="uk-form-label">School Address </label>
                                                    <input class="form-control" name="address[]" type="text" value="{{$row->Address}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12 ">
                                                <div class="form-group">
                                                    <label class="uk-form-label">Year Completed </label>
                                                    <input class="form-control " name="year_completed[]" type="text" value="{{$row->Year_completion}}">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row custom-box">
                                            <div class="col-lg-4 col-md-4 col-12">

                                                <div class="d-flex">
                                                    <div class="w-100">
                                                        <div class="form-group">
                                                            <label class="uk-form-label">If ECA Applicable

                                                            </label>
                                                            <select name="" class="form-control  ecaselect">
                                                                <option value="">Select Option</option>
                                                                <option value="Yes" {{$row->applicable_eca_validity != '' ? 'selected':''}}>Yes</option>
                                                                <option value="No" {{$row->applicable_eca_validity == '' ? 'selected':''}}>No</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-6 validuptocal {{ $row->applicable_eca_validity == '' ? 'd-none':'' }}">
                                                        <div class="form-group">
                                                            <label class="uk-form-label">Valid up to
                                                            </label>
                                                            <input class="form-control " name="eca[]" type="date" placeholder="Valid Upto" value="{{$row->applicable_eca_validity}}">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="form-group">
                                                    <label class="uk-form-label">Education Type 

                                                    </label>
                                                    <select name="distant[]" class="form-control">
                                                        <option value="" {{$row->Distant == '' ? 'selected':''}}>Select Option</option>
                                                        <option {{$row->Distant == 'distant' ? 'selected':''}}>Distant</option>
                                                        <option {{$row->Distant == 'regular' ? 'selected':''}}>Regular</option>
                                                        <option {{$row->Distant == 'online' ? 'selected':''}}>Online</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4 col-12 ">
                                                <div class="form-group">
                                                    <label class="uk-form-label">Country</label>
                                                    <input name="country[]" class="form-control " type="text" value="{{$row->country}}">
                                                </div>
                                            </div>



                                        </div>
                                        <div class="row custom-box mt-4">
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="">
                                                    <label class="uk-form-label">
                                                        <p>Other Attachment </p>
                                                    </label>
                                                    <a href="{{url('files/'.$row->attachment)}}" target="_blank" class="uploaded_file" style=" text-decoration: underline;">{{$row->attachment}} </a>
                                                    @if($row->attachment)
                                                    <a data-model="other" data-atr="attachment" data-id="{{$row->id}}" data-file="{{$row->attachment}}" class="ml-2 delete_file_button"><i class="fa fa-times-circle text-danger" aria-hidden="true"></i> </a>
                                                    @endif
                                                    <input type="file" class="form-control" name="attachment[]" value="{{$row->attachment}}">
                                                </div>
                                            </div>
                                            <div class="float-right" style="margin-left:10% !important">
                                                <br><br>
                                                <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeschool" style="background:#bf0010 !important"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> Remove</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            @endif
                            @endforeach
                            @endif
                        </div>

                        <div class="col-lg-12 col-md-12 mt-2 col-12">
                            <button type="button" class="add-btn uk-button uk-button-primary profile-button" id="addschoolbtn"><i class="fa fa-solid fa-plus"></i> Add
                                School</button>

                        </div>
                    </fieldset>
                    <br>
                    <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                        <div id="addcollegerow">
                            @if($qualification)
                            @foreach($qualification as $key => $row)
                            @if($row->type == 'college')

                            <div id="addcollegeform">
                                <div class="addcollege mt-4">
                                    <div class="">
                                        <div class="row custom-box">

                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="form-group">
                                                    <label class="uk-form-label">College Name</label>
                                                    <input class="form-control " name="name[]" type="text" value="{{$row->name}}">
                                                    <input class="form-control " hidden name="type[]" value="college" type="text">
                                                    <input class="form-control " hidden name="tech[]" value="NA" type="text">
                                                    <input class="form-control " hidden name="qualificationId[]" value="{{$row->id}}" type="text">

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12 ">
                                                <div class="form-group">
                                                    <label class="uk-form-label">College Address </label>
                                                    <input class="form-control" name="address[]" type="text" value="{{$row->Address}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12 ">
                                                <div class="form-group">
                                                    <label class="uk-form-label">PG/PHD Year Completed </label>
                                                    <input class="form-control " name="year_completed[]" type="text" value="{{$row->Year_completion}}">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row custom-box">

                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="d-flex test">
                                                    <div class="w-100">
                                                        <div class="form-group">
                                                            <label class="uk-form-label">If ECA Applicable

                                                            </label>
                                                            <select name="" class="form-control ecaselect">
                                                                <option value="" {{$row->applicable_eca_validity == '' ? 'selected':''}}>Select Option</option>
                                                                <option value="Yes" {{$row->applicable_eca_validity == 'Yes' ? 'selected':''}}>Yes</option>
                                                                <option value="No" {{$row->applicable_eca_validity == 'No' ? 'selected':''}}>No</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-6 validuptocal {{$row->applicable_eca_validity == 'Yes' ? '':'d-none'}}">
                                                        <div class="form-group">
                                                            <label class="uk-form-label">Valid up to
                                                            </label>
                                                            <input class="form-control " name="eca[]" type="date" placeholder="Valid Upto" value="{{$row->applicable_eca_validity}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="form-group">
                                                    <label class="uk-form-label">Education Type

                                                    </label>
                                                    <select name="distant[]" class="form-control">
                                                        <option value="" {{$row->Distant == '' ? 'selected':''}}>Select Option</option>
                                                        <option {{$row->Distant == 'distant' ? 'selected':''}}>Distant</option>
                                                        <option {{$row->Distant == 'regular' ? 'selected':''}}>Regular</option>
                                                        <option {{$row->Distant == 'online' ? 'selected':''}}>Online</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4 col-12 ">
                                                <div class="form-group">
                                                    <label class="uk-form-label">Country</label>
                                                    <input name="country[]" class="form-control " type="text" value="{{$row->country}}">
                                                </div>
                                            </div>



                                        </div>
                                        <div class="row custom-box">
                                            <div class="col-lg-8 col-md-8 col-12 ">

                                                <div class="col-lg-8 col-md-8 col-12">


                                                    <div class="">
                                                        <label class="uk-form-label">
                                                            <p>Other Attachment </p>
                                                        </label>
                                                        <a href="{{url('files/'.$row->attachment)}}" target="_blank" class="uploaded_file" style=" text-decoration: underline;">{{$row->attachment}} </a>
                                                        @if($row->attachment)
                                                        <a data-model="other" data-atr="attachment" data-id="{{$row->id}}" data-file="{{$row->attachment}}" class="ml-2 delete_file_button"><i class="fa fa-times-circle text-danger" aria-hidden="true"></i> </a>
                                                        @endif
                                                        <input type="file" class="form-control" name="attachment[]" value="{{$row->attachment}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="float-right" style="margin-left:10% !important">
                                                <br><br>
                                                <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removecollege" style="background:#bf0010 !important"><a style="color:white"><i class="fa fa-solid fa-minus"></i> Remove</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            @endif
                            @endforeach
                            @endif
                        </div>

                        <div class="col-lg-12 col-md-12  mt-2 col-12">
                            <button type="button" class="add-btn uk-button uk-button-primary profile-button" id="collegebtn"><i class="fa fa-solid fa-plus"></i> Add
                                College</button>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                        <div id="addpgrow">
                            @foreach($qualification as $key => $row)
                            @if($row->type == 'PG')

                            <div id="addpgform">
                                <div class="">
                                    <div class="row custom-box">

                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label class="uk-form-label">PG Name</label>
                                                <input class="form-control " name="name[]" type="text" value="{{$row->name}}">
                                                <input class="form-control " hidden name="qualificationId[]" value="{{$row->id}}" type="text">
                                                <input class="form-control " hidden name="type[]" value="PG" type="text">
                                                <input class="form-control " hidden name="tech[]" value="NA" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 ">
                                            <div class="form-group">
                                                <label class="uk-form-label">PG Address </label>
                                                <input class="form-control" name="address[]" type="text" value="{{$row->Address}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 ">
                                            <div class="form-group">
                                                <label class="uk-form-label">Year Completed </label>
                                                <input class="form-control " name="year_completed[]" type="text" value="{{$row->Year_completion}}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row custom-box">

                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="d-flex">
                                                <div class="w-100">
                                                    <div class="form-group">
                                                        <label class="uk-form-label">If ECA Applicable

                                                        </label>
                                                        <select name="" class="form-control ecaselect">
                                                            <option value="" {{$row->applicable_eca_validity == '' ? 'selected':''}}>Select Option</option>
                                                            <option value="Yes" {{$row->applicable_eca_validity == 'Yes' ? 'selected':''}}>Yes</option>
                                                            <option value="No" {{$row->applicable_eca_validity == 'No' ? 'selected':''}}>No</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-6 validuptocal {{$row->applicable_eca_validity == 'Yes' ? '':'d-none'}}">
                                                    <div class="form-group">
                                                        <label class="uk-form-label">Valid up to
                                                        </label>
                                                        <input class="form-control " name="eca[]" type="date" placeholder="Valid Upto" value="{{$Academy->test_valid_upto}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label class="uk-form-label">Education Type

                                                </label>
                                                <select name="distant[]" class="form-control">
                                                    <option value="" {{$row->Distant == '' ? 'selected':''}}>Select Option</option>
                                                    <option {{$row->Distant == 'distant' ? 'selected':''}}>Distant</option>
                                                    <option {{$row->Distant == 'regular' ? 'selected':''}}>Regular</option>
                                                    <option {{$row->Distant == 'online' ? 'selected':''}}>Online</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-12 ">
                                            <div class="form-group">
                                                <label class="uk-form-label">Country</label>
                                                <input name="country[]" class="form-control " type="text" value="{{$row->country}}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row custom-box">
                                        <div class="col-lg-8 col-md-8 col-12">

                                        <div class="col-lg-8 col-md-8 col-12">
                                                <div class="">
                                                    <label class="uk-form-label">
                                                        <p>Other Attachment </p>
                                                    </label>
                                                    <a href="{{url('files/'.$row->attachment)}}" target="_blank" class="uploaded_file" style=" text-decoration: underline;">{{$row->attachment}} </a>
                                                    @if($row->attachment)
                                                    <a data-model="other" data-atr="attachment" data-id="{{$row->id}}" data-file="{{$row->attachment}}" class="ml-2 delete_file_button"><i class="fa fa-times-circle text-danger" aria-hidden="true"></i> </a>
                                                    @endif
                                                    <input type="file" class="form-control" name="attachment[]" value="{{$row->attachment}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="float-right" style="margin-left:10% !important">
                                            <br><br>
                                            <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removepg" style="background:#bf0010 !important">
                                                <a style="color:white">
                                                    <i class="fa fa-solid fa-minus"></i> Remove
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            @endif
                            @endforeach
                        </div>

                        <div class="col-lg-12 col-md-12 mt-2 col-12">
                            <button type="button" class="add-btn uk-button uk-button-primary profile-button" id="pgbtn"><i class="fa fa-solid fa-plus"></i> Add
                                Post-Graduation</button>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                        <div id="addotherrow">
                            @foreach($qualification as $key => $row)
                            @if($row->type == 'other')

                            <div id="addotherform">
                                <div class=" addother mt-4">
                                    <div class="">
                                        <div class="row custom-box">

                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="form-group">
                                                    <label class="uk-form-label">Technical Qualifications</label>
                                                    <input class="form-control " name="tech[]" type="text" value="{{$row->tech}}">
                                                    <input class="form-control " hidden name="type[]" value="other" type="text">
                                                    <input class="form-control " hidden name="qualificationId[]" value="{{$row->id}}" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12 ">
                                                <div class="form-group">
                                                    <label class="uk-form-label">Name of Institute </label>
                                                    <input class="form-control " name="name[]" type="text" value="{{$row->name}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12 ">
                                                <div class="form-group">
                                                    <label class="uk-form-label">Institute Address </label>
                                                    <input class="form-control " name="address[]" type="text" value="{{$row->Address}}">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row custom-box">
                                            <div class="col-lg-2 col-md-2 col-12 ">
                                                <div class="form-group">
                                                    <label class="uk-form-label">Year Completed </label>
                                                    <input class="form-control " name="year_completed[]" type="text" value="{{$row->Year_completion}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="d-flex par">
                                                    <div class="w-100">
                                                        <div class="form-group">
                                                            <label class="uk-form-label">If ECA Applicable

                                                            </label>
                                                            <select name="" class=" ecaselect form-control">
                                                                <option value="" {{$row->applicable_eca_validity == '' ? 'selected':''}}>Select Option</option>
                                                                <option value="Yes" {{$row->applicable_eca_validity == 'Yes' ? 'selected':''}}>Yes</option>
                                                                <option value="No" {{$row->applicable_eca_validity == 'No' ? 'selected':''}}>No</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-6 validuptocal {{$row->applicable_eca_validity == 'Yes' ? '':'d-none'}}">
                                                        <div class="form-group">
                                                            <label class="uk-form-label">Valid up to
                                                            </label>
                                                            <input class="form-control " name="eca[]" type="date" placeholder="Valid Upto" value="{{$Academy->test_valid_upto}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-12">
                                                <div class="form-group">
                                                    <label class="uk-form-label">Education Type

                                                    </label>
                                                    <select name="distant[]" class="form-control">
                                                        <option value="" {{$row->Distant == '' ? 'selected':''}}>Select Option</option>
                                                        <option {{$row->Distant == 'distant' ? 'selected':''}}>Distant</option>
                                                        <option {{$row->Distant == 'regular' ? 'selected':''}}> Regular</option>
                                                        <option {{$row->Distant == 'online' ? 'selected':''}}>Online</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-12 ">
                                                <div class="form-group">
                                                    <label class="uk-form-label">Country</label>
                                                    <input class="form-control " name="country[]" type="text" value="{{$row->country}}">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="">
                                                    <label class="uk-form-label">
                                                        <p>Other Attachment </p>
                                                    </label>
                                                    <a href="{{url('files/'.$row->attachment)}}" target="_blank" class="uploaded_file" style=" text-decoration: underline;">{{$row->attachment}} </a>
                                                    @if($row->attachment)
                                                    <a data-model="other" data-atr="attachment" data-id="{{$row->id}}" data-file="{{$row->attachment}}" class="ml-2 delete_file_button"><i class="fa fa-times-circle text-danger" aria-hidden="true"></i> </a>
                                                    @endif
                                                    <input type="file" class="form-control" name="attachment[]" value="{{$row->attachment}}">
                                                </div>
                                            </div>
                                            <div class="float-right" style="margin-left:10% !important">
                                                <br><br>
                                                <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeother" style="background:#bf0010 !important"><a style="color:white"><i class="fa fa-solid fa-minus"></i> Remove</a></button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <hr>
                            @endif
                            @endforeach
                        </div>

                        <div class="col-lg-12 col-md-12 mt-2 col-12">
                            <button type="button" class="add-btn uk-button uk-button-primary profile-button" id="otherbtn"><i class="fa fa-solid fa-plus"></i> Add
                                OtherQualification</button>
                        </div>
                    </fieldset>
                    <br>
                    <div class="float-right">
                        <a class="sc-button sc-button-custom md-bg-grey-600 sc-js-button-wave-light waves-effect waves-button waves-light" href="{{route('personalProfile')}}">Cancel</a>
                        &nbsp;&nbsp;
                        <button type="submit" class="client-btn btn btn-primary profile-button">Update</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div id="map" style=" height: 500px; width:100%"> </div>

</div>




<!-- ......................script for google map view.................... -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX4GRZHCs7t1pkpjrRaLoTlCgqX8o46wY&libraries=places&callback=initMap&libraries=places&v=weekly" defer></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    //.......................current location......................

    $(document).ready(function() {

        "use strict";
        $('#map').hide();

        initMap();

        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: -33.8688,
                    lng: 151.2195,
                },
                zoom: 13,
            });
            const card = document.getElementById("pac-card");
            console.log(card);
            const input1 = $('#pac-input1')[0];
            const input2 = $('#pac-input2')[0];


            map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);
            const autocomplete1 = new google.maps.places.Autocomplete(
                input1); // Bind the map's bounds (viewport) property to the autocomplete object,
            const autocomplete2 = new google.maps.places.Autocomplete(input2);

            autocomplete1.bindTo("bounds", map); // Set the data fields to return when the user selects a place.
            autocomplete2.bindTo("bounds", map);

            autocomplete1.setFields([
                "address_components",
                "geometry",
                "icon",
                "name",
            ]);
            autocomplete2.setFields([
                "address_components",
                "geometry",
                "icon",
                "name",
            ]);
            const infowindow = new google.maps.InfoWindow();
            const infowindowContent = document.getElementById("infowindow-content");
            infowindow.setContent(infowindowContent);
            const marker = new google.maps.Marker({
                map,
                anchorPoint: new google.maps.Point(0, -29),
            });

        }


    });
</script>


<!-- ...................end...script for google map view.................... -->

<script>
    $(document).on('change', '.ecaselect', function() {

        if ($(this).val() == 'Yes') {
            $(this).closest('.d-flex').children('.validuptocal').removeClass('d-none');
        } else {
            $(this).closest('.d-flex').children('.validuptocal').addClass('d-none');

        }
    });


    $(document).ready(function() {


        if ($('#applicant_test').val() != '') {
            $('#applicant_test_other').val('');
        }
        $("#addschoolbtn").click(function() {

            var html = '';

            html = `<div  id="addschoolform"> 
                     <div class="col-lg-12 col-md-12 col-12  addschool mt-4" >
                     <div class="">
                     <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label class="uk-form-label" >School Name</label >
                                <input class="form-control " name="name[]" type="text" >
                                <input class="form-control " hidden name="type[]" value="school" type="text" >
                                <input class="form-control " hidden name="tech[]" value="NA" type="text" >
                                <input class="form-control " hidden name="qualificationId[]" value="" type="text">


                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label class="uk-form-label" >School Address </label >
                                <input class="form-control" name="address[]"  type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label class="uk-form-label" >Year Completed </label >
                                <input class="form-control " name="year_completed[]" type="text" >
                            </div>
                        </div>

                    </div>
                    <div class="row custom-box">


                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="d-flex par">
                                                    <div class="w-100">
                                                        <div class="form-group">
                                                            <label class="uk-form-label">If ECA Applicable

                                                            </label>
                                                            <select name="" class=" ecaselect form-control">
                                                                <option value="">Select Option</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-6 validuptocal d-none">
                                                        <div class="form-group">
                                                            <label class="uk-form-label">Valid up to
                                                            </label>
                                                            <input class="form-control " name="eca[]" type="date" placeholder="Valid Upto" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label class="uk-form-label" >Distant

                                </label >
                                <select name="distant[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="distant">Distant</option>
                                    <option value="regular">Regular</option>
                                    <option value="online">Online</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label class="uk-form-label" >Country</label >
                                <input name="country[]" class="form-control " type="text" >
                            </div>
                        </div>

                       

                    </div>
                    <div class="row custom-box" >
                              <div class="col-lg-8 col-md-8 col-12">
                                <label class="uk-form-label" >
                                <p>Other Attachment </p>
                                </label>
                                <input type="file"   class="form-control" name="attachment[]" >
                              </div>
                              <div class="float-right" style="margin-left:10% !important">
                                <br><br>
                                <button  type="button" class=" closebtn  uk-button uk-button-danger" id="removeschool" style="background:#bf0010 !important;"><a style="color:white"><i class="fa fa-solid fa-minus"></i> Remove</a></button>
                              </div>
                    </div>
                </div>
            </div>
              </div>
           <hr>`

            $('#addschoolrow').append(html);
        });

        // remove row
        $(document).on('click', '#removeschool', function() {
            $(this).closest('#addschoolform').remove();
        });

        // college

        $("#collegebtn").click(function() {

            var html = '';

            html = `<div  id="addcollegeform">
                <div class=" addcollege mt-4">
                  <div class="">
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label class="uk-form-label" >College Name</label >
                                <input class="form-control " name="name[]" type="text" >
                                <input class="form-control " hidden name="type[]" value="college" type="text" >
                                <input class="form-control " hidden name="tech[]" value="NA" type="text" >
                                <input class="form-control " hidden name="qualificationId[]" value="" type="text">

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label class="uk-form-label" >College Address </label >
                                <input class="form-control " name="address[]" type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label class="uk-form-label" >PG/PHD Year Completed </label >
                                <input class="form-control " name="year_completed[]" type="text" >
                            </div>
                        </div>

                    </div>
                    <div class="row custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                                                <div class="d-flex par">
                                                    <div class="w-100">
                                                        <div class="form-group">
                                                            <label class="uk-form-label">If ECA Applicable

                                                            </label>
                                                            <select name="" class=" ecaselect form-control">
                                                                <option value="">Select Option</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-6 validuptocal d-none">
                                                        <div class="form-group">
                                                            <label class="uk-form-label">Valid up to
                                                            </label>
                                                            <input class="form-control " name="eca[]" type="date" placeholder="Valid Upto" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label class="uk-form-label" >Distant

                                </label >
                                <select name="distant[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option>Distant</option>
                                    <option>Regular</option>
                                    <option>Online</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label class="uk-form-label" >Country</label >
                                <input name="country[]" class="form-control " type="text" >
                            </div>
                        </div>

                        

                    </div>
                    <div class="row">
                          <div class="col-lg-8 col-md-8 col-12">
                               <label class="uk-form-label" >
                               <p>Other Attachment </p>
                               </label >
                               <input type="file"  class="form-control" name="attachment[]" >
                            
                          </div>
                          <div class="float-right" style="margin-left:10% !important">
                          <br><br>
                                <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removecollege" style="background:#bf0010 !important"><a 
                            style="color:white"><i class="fa fa-solid fa-minus"></i> Remove</a></button>
                           </div>
                    </div>
                </div>
                </div>
                </div>
                <hr>`

            $('#addcollegerow').append(html);
        });

        // remove row
        $(document).on('click', '#removecollege', function() {
            $(this).closest('#addcollegeform').remove();
        });

        // Pg

        $("#pgbtn").click(function() {

            var html = '';

            html = `<div  id="addpgform">  <div class=" addpg mt-4">
                        <div class="">
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label class="uk-form-label" >PG Name</label >
                                <input class="form-control " name="name[]" type="text" >
                                <input class="form-control " hidden name="type[]" value="PG" type="text" >
                                <input class="form-control " hidden name="tech[]" value="NA" type="text" >
                                <input class="form-control " hidden name="qualificationId[]" value="" type="text">

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label class="uk-form-label" >PG Address </label >
                                <input class="form-control " name="address[]" type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label class="uk-form-label" >Year Completed </label >
                                <input class="form-control " name="year_completed[]" type="text" >
                            </div>
                        </div>

                    </div>
                    <div class="row custom-box">
                    <div class="col-lg-4 col-md-4 col-12">
                                                <div class="d-flex par">
                                                    <div class="w-100">
                                                        <div class="form-group">
                                                            <label class="uk-form-label">If ECA Applicable

                                                            </label>
                                                            <select name="" class=" ecaselect form-control">
                                                                <option value="">Select Option</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-6 validuptocal d-none">
                                                        <div class="form-group">
                                                            <label class="uk-form-label">Valid up to
                                                            </label>
                                                            <input class="form-control " name="eca[]" type="date" placeholder="Valid Upto" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label class="uk-form-label" >Distant

                                </label >
                                <select name="distant[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option>Distant</option>
                                    <option>Regular</option>
                                    <option>Online</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label class="uk-form-label" >Country</label >
                                <input name="country[]" class="form-control " type="text" >
                            </div>
                        </div>

                       

                    </div>
                        <div class="row">
                              <div class="col-lg-8 col-md-8 col-12">
                                <label class="uk-form-label" >
                                    <p>Other Attachment </p>
                                </label >
                                <input type="file"  class="form-control" name="attachment[]" >
                              </div>
                             <div class="float-right" style="margin-left:10% !important"><br><br>
                               <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removepg" style="background:#bf0010 !important"><a  style="color:white">
                                <i class="fa fa-solid fa-minus"></i> Remove</a></button>
                            </div>
                        </div>
                   </div>
                  </div></div><hr>`

            $('#addpgrow').append(html);
        });

        // remove row
        $(document).on('click', '#removepg', function() {
            $(this).closest('#addpgform').remove();
        });

        // other


        $("#otherbtn").click(function() {

            var html = '';

            html = `
           <div  id="addotherform">
            <div class=" addother mt-4">
                <div class="">
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label class="uk-form-label" >Technical Qualifications</label >
                                <input class="form-control " name="tech[]" type="text" >
                                <input class="form-control " hidden name="type[]" value="other" type="text" >
                                <input class="form-control " hidden name="qualificationId[]" value="" type="text">

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label class="uk-form-label" >Name of Institute </label >
                                <input class="form-control " name="name[]" type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label class="uk-form-label" >Institute Address </label >
                                <input class="form-control " name="address[]" type="text" >
                            </div>
                        </div>
                       

                    </div>
                    <div class="row custom-box">
                    <div class="col-lg-3 col-md-3 col-12 ">
                            <div class="form-group">
                                <label class="uk-form-label" >Year Completed </label >
                                <input class="form-control " name="year_completed[]" type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                                                <div class="d-flex par">
                                                    <div class="w-100">
                                                        <div class="form-group">
                                                            <label class="uk-form-label">If ECA Applicable

                                                            </label>
                                                            <select name="" class=" ecaselect form-control">
                                                                <option value="">Select Option</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-6 validuptocal d-none">
                                                        <div class="form-group">
                                                            <label class="uk-form-label">Valid up to
                                                            </label>
                                                            <input class="form-control " name="eca[]" type="date" placeholder="Valid Upto" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label class="uk-form-label" >Distant

                                </label >
                                <select name="distant[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option>Distant</option>
                                    <option>Regular</option>
                                    <option>Online</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12 ">
                            <div class="form-group">
                                <label class="uk-form-label" >Country</label >
                                <input class="form-control " name="country[]" type="text" >
                            </div>
                        </div>

                      
                    </div>

                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="">
                                <label class="uk-form-label" >
                                    <p>Other Attachment </p>
                                </label >
                                <input type="file"  class="form-control" name="attachment[]" >
                            </div>
                        </div>
                         <div class="float-right" style="margin-left:10% !important"><br><br>
                            <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeother" style="background:#bf0010 !important"><a 
                            style="color:white"><i class="fa fa-solid fa-minus"></i> Remove</a></button>
                          </div>
                    </div>

                    </div>
                 </div></div><hr>`

            $('#addotherrow').append(html);
        });

        // remove row
        $(document).on('click', '#removeother', function() {
            $(this).closest('#addotherform').remove();
        });



        // if ($(this).val() == 'Yes') {
        //     $(this).closest('.d-flex').children('.validuptocal').removeClass('d-none');

        // } else {
        //     $(this).closest('.d-flex').children('.validuptocal').addClass('d-none');

        // }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.delete_file_button', function(event) {
            event.preventDefault(); // avoid to execute the actual submit of the form.
            filename = 'delete/file/' + $(this).data('id') + '/' + $(this).data('model') + '/' + $(this).data('atr');
            element = this;

            console.log(filename)
            $.ajax({
                type: "GET",
                url: filename,

                success: function(data) {
                    $(element).fadeOut()
                    $(element).siblings('.uploaded_file').fadeOut();

                }
            });

        });

    });
</script>

@endsection