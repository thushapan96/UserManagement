@if($Academy)
<h6>Candidate Registration - Academic</h6>

<form id="academy_form">
    @csrf
    <!--div class="news-title">You have questions, let's have a conversation </div-->

    <div class="row mt-4 custom-box">

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label class="uk-form-label">Language Proficiency

                </label>
                <select name="language_proficiency" class="form-control">
                    <option value="English" {{$Academy->language_proficiency == 'English' ? 'selected':''}}>English</option>
                    <option value="Tamil" {{$Academy->language_proficiency == 'English' ? 'selected':''}}>Tamil</option>
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
            <div class="upload-images">
                <label class="uk-form-label">
                    <p>Certified By </p>
                </label>
                <input type="text" class="form-control" name="language_certified_by" value="{{$Academy->language_certified_by}}">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="upload-images">
                <label class="uk-form-label">
                    <p>Language Certified Attachment </p>

                </label>
                <a href="{{url('files/'.$Academy->language_attachment)}}" target="_blank" style=" text-decoration: underline;">{{$Academy->language_attachment}}</a>
                <input type="file" title="change file" class="form-control" name="language_attachment" value="{{$Academy->language_attachment}}">
            </div>
        </div>
    </div>

    <div class="row mt-4 custom-box">
        <div class="col-lg-4 col-md-4 col-12">
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
        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">
                <label class="uk-form-label">If Other Applicant</label>
                <input id="applicant_test_other" class="form-control " type="text" name="applicant_test_name[]" value="{{$Academy->applicant_test_name}}">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 ">
            <div class="form-group">
                <label class="uk-form-label"> Valid Upto
                </label>
                <input class="form-control " name="test_valid_upto" type="date" placeholder="Valid Upto" value="{{$Academy->test_valid_upto}}">
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-12 ">
            <div class="form-group">
                <label class="uk-form-label">Applicant Test Scores Attachment
                </label>



                <span> <a href="{{url('files/'.$Academy->test_attachment)}}" target="_blank" style=" text-decoration: underline;">{{$Academy->test_attachment}}</a> <input type="file" class="form-control" name="test_attachment" value="{{$Academy->test_attachment}}"></span>
            </div>
        </div>
    </div>
    <hr>
    <div id="addschoolrow">
        
        @if($qualification)
        @foreach($qualification as $key => $row)
        @if($row->type == 'school')
        <h6>School {{ $key + 1}}</h6>
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
                            <div class="form-group">
                                <label class="uk-form-label">Applicable ECA Validity

                                </label>
                                <select name="eca[]" class="form-control">
                                    <option value="" {{$row->applicable_eca_validity == '' ? 'selected':''}}>Select Option</option>
                                    <option value="Yes" {{$row->applicable_eca_validity == 'Yes' ? 'selected':''}}>Yes</option>
                                    <option value="No" {{$row->applicable_eca_validity == 'No' ? 'selected':''}}>No</option>

                                </select>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label class="uk-form-label">Distant

                                </label>
                                <select name="distant[]" class="form-control">
                                    <option value="" {{$row->Distant == '' ? 'selected':''}}>Select Option</option>
                                    <option {{$row->Distant == 'distant' ? 'selected':''}}>distant</option>
                                    <option {{$row->Distant == 'regular' ? 'selected':''}}>regular</option>
                                    <option {{$row->Distant == 'online' ? 'selected':''}}>online</option>

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

                            <div class="">
                                <label class="uk-form-label">
                                    <p>Other Attachment </p>
                                </label>
                                <a href="{{url('files/'.$row->attachment)}}" target="_blank" style=" text-decoration: underline;">{{$row->attachment}}</a>
                                <input type="file" class="form-control" name="attachment[]" value="{{$row->attachment}}">
                            </div>
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
    <div id="addcollegerow">
        @if($qualification)
        @foreach($qualification as $key => $row)
        @if($row->type == 'college')
        <h6>College {{ $key + 1}}</h6>
        <div id="addcollegeform">
            <div class="container addcollege mt-4">
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
                            <div class="form-group">
                                <label class="uk-form-label">Applicable ECA Validity

                                </label>
                                <select name="eca[]" class="form-control">
                                    <option value="" {{$row->applicable_eca_validity == '' ? 'selected':''}}>Select Option</option>
                                    <option value="Yes" {{$row->applicable_eca_validity == 'Yes' ? 'selected':''}}>Yes</option>
                                    <option value="No" {{$row->applicable_eca_validity == 'No' ? 'selected':''}}>No</option>

                                </select>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label class="uk-form-label">Distant

                                </label>
                                <select name="distant[]" class="form-control">
                                    <option value="" {{$row->Distant == '' ? 'selected':''}}>Select Option</option>
                                    <option {{$row->Distant == 'distant' ? 'selected':''}}>distant</option>
                                    <option {{$row->Distant == 'regular' ? 'selected':''}}>regular</option>
                                    <option {{$row->Distant == 'online' ? 'selected':''}}>online</option>

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

                            <div class="">
                                <label class="uk-form-label">
                                    <p>Other Attachment </p>
                                </label>
                                <a href="{{url('files/'.$row->attachment)}}" target="_blank" style=" text-decoration: underline;">{{$row->attachment}}</a>
                                <input type="file" class="form-control" name="attachment[]" value="{{$row->attachment}}">
                            </div>
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
    <div id="addpgrow">
        @foreach($qualification as $key => $row)
        @if($row->type == 'PG')
        <h6>PG {{ $key + 1}}</h6>
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
                        <div class="form-group">
                            <label class="uk-form-label">Applicable ECA Validity

                            </label>
                            <select name="eca[]" class="form-control">
                                <option value="" {{$row->applicable_eca_validity == '' ? 'selected':''}}>Select Option</option>
                                <option value="Yes" {{$row->applicable_eca_validity == 'Yes' ? 'selected':''}}>Yes</option>
                                <option value="No" {{$row->applicable_eca_validity == 'No' ? 'selected':''}}>No</option>

                            </select>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label class="uk-form-label">Distant

                            </label>
                            <select name="distant[]" class="form-control">
                                <option value="" {{$row->Distant == '' ? 'selected':''}}>Select Option</option>
                                <option {{$row->Distant == 'distant' ? 'selected':''}}>distant</option>
                                <option {{$row->Distant == 'regular' ? 'selected':''}}>regular</option>
                                <option {{$row->Distant == 'online' ? 'selected':''}}>online</option>

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

                        <div class="">
                            <label class="uk-form-label">
                                <p>Other Attachment </p>
                            </label>
                            <a href="{{url('files/'.$row->attachment)}}" target="_blank" style=" text-decoration: underline;">{{$row->attachment}}</a>
                            <input type="file" class="form-control" name="attachment[]" value="{{$row->attachment}}">
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <hr>
        @endif
        @endforeach
    </div>
    <div id="addotherrow">
        @foreach($qualification as $key => $row)
        @if($row->type == 'other')
        <h6>Other {{ $key + 1}}</h6>
        <div id="addotherform">
            <div class="container addother mt-4">
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
                        <div class="col-lg-3 col-md-3 col-12 ">
                            <div class="form-group">
                                <label class="uk-form-label">Year Completed </label>
                                <input class="form-control " name="year_completed[]" type="text" value="{{$row->Year_completion}}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label class="uk-form-label">Applicable ECA Validity

                                </label>
                                <select name="eca[]" class="form-control">
                                    <option value="" {{$row->applicable_eca_validity == '' ? 'selected':''}}>Select Option</option>
                                    <option value="Yes" {{$row->applicable_eca_validity == 'Yes' ? 'selected':''}}>Yes</option>
                                    <option value="No" {{$row->applicable_eca_validity == 'No' ? 'selected':''}}>No</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label class="uk-form-label">Distant

                                </label>
                                <select name="distant[]" class="form-control">
                                    <option value="" {{$row->Distant == '' ? 'selected':''}}>Select Option</option>
                                    <option {{$row->Distant == 'distant' ? 'selected':''}}>distant</option>
                                    <option {{$row->Distant == 'regular' ? 'selected':''}}> regular</option>
                                    <option {{$row->Distant == 'online' ? 'selected':''}}>online</option>

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
                            <label class="uk-form-label">
                                <p>Other Attachment </p>
                            </label>
                            <a href="{{url('files/'.$row->attachment)}}" target="_blank" style=" text-decoration: underline;">{{$row->attachment}}</a>
                            <input type="file" class="form-control" name="attachment[]">

                        </div>
                       
                    </div>

                </div>
            </div>
        </div>
        <hr>
        @endif
        @endforeach
    </div>

   
    <div class="float-right">

        <button class=" uk-button uk-button-primary " type="button" disabled>Submitted</button>
    </div>
</form>

<script>
    $(document).ready(function() {

        // for school
        if ($('#applicant_test').val() != '') {
            $('#applicant_test_other').val('');
        }


    });
</script>

@endif