@if($work)
<h6>Candidate Registration - Work Experience</h6>

<form id="work_form">
    @csrf


    <div id="newRow">
        @if($work)
        @foreach($work as $key => $row)

        <div id="inputFormRow">
            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                <h6 class="labels" style="text-decoration: underline">Work Place {{$key+1}}</h6>

                <!--div class="news-title">You have questions, let's have a conversation </div-->

                <div class="row mt-4 custom-box">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Designation
                            </label>
                            <input class="form-control " type="text" placeholder="Enter Designation" name="designation[]" value="{{$row->designation}}" required>
                            <input type="text" name="workId[]" value="{{$row->id}}" hidden>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Country
                            </label>
                            <input class="form-control " type="text" placeholder="enter Country" name="country[]" value="{{$row->country}}">

                        </div>
                    </div>

                </div>

                <div class="row mt-4 custom-box">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>No. of Years Worked
                            </label>
                            <input class="form-control " type="text" placeholder="Enter number of years worked in the company" name="Year_completion[]" value="{{$row->Year_completion}}">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>
                                Attach Experience Certificate
                            </label>
                            <a href="{{url('files/'.$row->attach_experience_certificate)}}" target="_blank" style=" text-decoration: underline;">{{$row->attach_experience_certificate}}</a>
                            <input class="form-control" type="file" value="" name="attach_experience_certificate[]" value="{{$row->attach_experience_certificate}}">
                        </div>
                    </div>


                </div>


                <div class="row mt-4 custom-box">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Attach Salary Slip
                            </label>
                            <a href="{{url('files/'.$row->attach_salary_slip)}}" target="_blank" style=" text-decoration: underline;">{{$row->attach_salary_slip}}</a>
                            <input class="form-control " type="file" name="attach_salary_slip[]" value="{{$row->attach_salary_slip}}">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>
                                Attach Offer/Recommendation Letter
                            </label>
                            <a href="{{url('files/'.$row->attach_offer_letter)}}" target="_blank" style=" text-decoration: underline;">{{$row->attach_offer_letter}}</a>
                            <input class="form-control " type="file" name="attach_offer_letter[]" value="{{$row->attach_offer_letter}}">
                        </div>
                    </div>

                </div>


                <div class="row mt-4 custom-box">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>Work Profile
                            </label>
                            <textarea style="width:100%;" name="work_profile_letter[]" value="{{$row->work_profile_letter}}">{{$row->work_profile_letter}}</textarea>
                        </div>
                    </div>
                </div>
               
            </fieldset>
        </div>


        <br>
        <!-- @if(!$loop->last)
                            <br>
                            @endif -->
        @endforeach
        @endif
    </div>


    <div class="float-right">
    <button class=" uk-button uk-button-primary " type="button" disabled>Submitted</button>

    </div>

</form>
@endif