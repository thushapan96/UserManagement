<button class="btn btn-primary" type="button" disabled>
    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
    <span class="sr-only">Loading...</span>
</button>
<button class="btn btn-primary" type="button" disabled>
    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
    Loading...
</button>


<li id='menu5' class='tab-pane '>
    <div class="uk-card col-md-11" style="margin-left:auto !important;margin-right:auto">
        <div class="uk-card-body sc-padding-medium">
            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                <div class="row custom-box">
                    <div class="col-md-5">
                        <strong class="ps"> Offered Services</strong>
                    </div>

                    <div class="col-md-7">
                        <p class="ps">
                            @if($consultants->offering_service)
                            @foreach($consultants->offering_service as $row)
                            @if($loop->count > 1) <i class='fas fa-caret-right'></i>
                            @endif
                            {{$row}}<br>
                            @endforeach
                            @endif
                        </p>
                    </div>
                </div>
                <hr>
                <strong>Express Entry Cases</strong><br><br>
                <div class="row custom-box">

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Enrolment
                            </label><br>
                            <p>{{$consultants->express_entry_enrolment}}</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Success
                            </label><br>
                            <p>{{$consultants->express_entry_success}}</p>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Rejected
                            </label><br>
                            <p>{{$consultants->express_entry_reject}}</p>

                        </div>
                    </div>
                    @if($consultants->express_entry_reject_reason)
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Reason for rejection
                            </label><br>
                            <p>{{$consultants->express_entry_reject_reason}}</p>

                        </div>
                    </div>
                    @endif
                </div>
                <hr>
                <strong>PNP Cases</strong><br><br>
                <div class="row custom-box">
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Enrolment
                            </label><br>
                            <p>{{$consultants->pnp_enrolment}}</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Success
                            </label><br>
                            <p>{{$consultants->pnp_success}}</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Rejected
                            </label><br>
                            <p>{{$consultants->pnp_reject}}</p>
                        </div>
                    </div>
                    @if($consultants->pnp_reject_reason)
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Reason for rejection
                            </label><br>
                            <p>{{$consultants->pnp_reject_reason}}</p>
                        </div>
                    </div>
                    @endif
                </div>
                <hr>
                <strong>LMIA Cases</strong><br><br>
                <div class="row custom-box">
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Enrolment
                            </label><br>
                            <p>{{$consultants->lmia_enrolment}}</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Success
                            </label><br>
                            <p>{{$consultants->lmia_success}}</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Rejected
                            </label><br>
                            <p>{{$consultants->lmia_reject}}</p>
                        </div>
                    </div>
                    @if($consultants->lmia_reject_reason)
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Reason for rejection
                            </label><br>
                            <p>{{$consultants->lmia_reject_reason}}</p>
                        </div>
                    </div>
                    @endif
                </div>
                <hr>

                <strong>Student Visa </strong><br><br>

                <div class="row custom-box">
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Enrolment
                            </label><br>
                            <p>{{$consultants->student_visa_enrolment}}</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Success
                            </label><br>
                            <p>{{$consultants->student_visa_success}}</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Rejected
                            </label><br>
                            <p>{{$consultants->student_visa_reject}}</p>
                        </div>
                    </div>
                    @if($consultants->student_visa_reject_reason)
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Reason for rejection
                            </label><br>
                            <p>{{$consultants->student_visa_reject_reason}}</p>
                        </div>
                    </div>
                    @endif
                </div>
                <hr>
                <strong>Tourist Visa </strong><br><br>

                <div class="row custom-box">
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Enrolment
                            </label><br>
                            <p>{{$consultants->tourist_visa_enrolment}}</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Success
                            </label><br>
                            <p>{{$consultants->tourist_visa_success}}</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Rejected
                            </label><br>
                            <p>{{$consultants->tourist_visa_reject}}</p>
                        </div>
                    </div>
                    @if($consultants->tourist_visa_reject_reason)
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Reason for rejection
                            </label><br>
                            <p>{{$consultants->tourist_visa_reject_reason}}</p>
                        </div>
                    </div>
                    @endif
                </div>
                <hr>
                <strong>Family Visa</strong><br><br>

                <div class="row custom-box">
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Enrolment
                            </label><br>
                            <p>{{$consultants->family_visa_enrolment}}</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Success
                            </label><br>
                            <p>{{$consultants->family_visa_success}}</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="form-group">
                            <label>Rejected
                            </label><br>
                            <p>{{$consultants->family_visa_reject}}</p>
                        </div>
                    </div>
                    @if($consultants->family_visa_reject_reason)
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Reason for rejection
                            </label><br>
                            <p>{{$consultants->family_visa_reject_reason}}</p>
                        </div>
                    </div>
                    @endif
                </div>
                <hr>

            </fieldset>
        </div>
    </div>

</li>