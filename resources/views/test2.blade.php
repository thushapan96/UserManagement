<fieldset class="uk-fieldset md-bg-grey-300 sc-padding">
    <div class="row">
        <div class="col-md-5">
            <strong class="ps">Have you been Rejected by any College or University in the Past?</strong>
        </div>

        <div class="col-md-7">

            <div class="row">
                &nbsp;<div class="is_rejected_college_yes ">Yes</div>
                &nbsp;&nbsp;&nbsp;
                <div class="is_rejected_college_no ">NO</div>

            </div>
        </div>
        <script>
            if ("{{$educations->is_rejected_college}}" == 'yes') {
                $('.is_rejected_college_yes').css('text-decoration', 'underline')
                $('.is_rejected_college_yes').css('text-decoration-color', 'green')
            } else {
                $('.is_rejected_college_no').css('text-decoration', 'underline')
                $('.is_rejected_college_no').css('text-decoration-color', 'green')
            }
        </script>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">If Yes, Specify the Reason for rejection</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                {{$educations->rejected_college_reason}}
            </p>
        </div>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Specify the Year of Rejection</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                {{$educations->rejected_college_year}}
            </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-5">
            <strong class="ps">Have you been Rejected for Study Visa or Immigration or any Visa in the past?</strong>
        </div>

        <div class="col-md-7">

            <div class="row">
                &nbsp;<div class="is_rejected_visa_past_yes ">Yes</div>
                &nbsp;&nbsp;&nbsp;
                <div class="is_rejected_visa_past_no ">NO</div>

            </div>
        </div>
        <script>
            if ("{{$educations->is_rejected_visa_past}}" == 'yes') {
                $('.is_rejected_visa_past_yes').css('text-decoration', 'underline')
                $('.is_rejected_visa_past_yes').css('text-decoration-color', 'green')
            } else {
                $('.is_rejected_visa_past_no').css('text-decoration', 'underline')
                $('.is_rejected_visa_past_no').css('text-decoration-color', 'green')
            }
        </script>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">If Yes, Specify the Reason for rejection</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                {{$educations->rejected_visa_reason_past}}
            </p>
        </div>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Specify the Year of Rejection</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                {{$educations->rejected_visa_year_past}}
            </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-5">
            <strong class="ps">Have you been Rejected for Study Visa or Immigration or any Visa in the past for USA?</strong>
        </div>

        <div class="col-md-7">

            <div class="row">
                &nbsp;<div class="is_rejected_visa_yes ">Yes</div>
                &nbsp;&nbsp;&nbsp;
                <div class="is_rejected_visa_no ">NO</div>

            </div>
        </div>
        <script>
            if ("{{$educations->is_rejected_visa}}" == 'yes') {
                $('.is_rejected_visa_yes').css('text-decoration', 'underline')
                $('.is_rejected_visa_yes').css('text-decoration-color', 'green')
            } else {
                $('.is_rejected_visa_no').css('text-decoration', 'underline')
                $('.is_rejected_visa_no').css('text-decoration-color', 'green')
            }
        </script>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">If Yes, Specify the Reason for rejection</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                {{$educations->rejected_visa_reason}}
            </p>
        </div>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Specify the Year of Rejection</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                {{$educations->rejected_visa_year}}
            </p>
        </div>
    </div>
    <hr>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Prerequisite and Document Checklist:</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                @if($educations->prerequisite_document)
                @foreach($educations->prerequisite_document as $row)
                {{$row}}
                @endforeach
                @endif
            </p>
        </div>
    </div>
    <div class="row custom-box " id="">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="form-group">
                <label>Is your ECA (Education Certificate Assessment) completed from WES/IQAS/ICES/CES/etc.. If "YES" specify name of the Organization and Valid Upto?</label>

                <textarea class="form-control" style="width:100%;" name="eca" disabled>{{$educations->eca}}</textarea>

            </div>
        </div>
    </div>
</fieldset><br>
<fieldset class="uk-fieldset md-bg-grey-300 sc-padding">

    <div class="row">
        <div class="col-md-5">
            <strong class="ps">Is your Passport Valid for another 6 Months?</strong>
        </div>

        <div class="col-md-7">

            <div class="row">
                &nbsp;<div class="passport_valid_yes ">Yes</div>
                &nbsp;&nbsp;&nbsp;
                <div class="passport_valid_no ">NO</div>

            </div>
        </div>
        <script>
            if ("{{$educations->passport_valid}}" == 'yes') {
                $('.passport_valide_yes').css('text-decoration', 'underline')
                $('.passport_valide_yes').css('text-decoration-color', 'green')
            } else {
                $('.passport_valid_no').css('text-decoration', 'underline')
                $('.passport_valid_no').css('text-decoration-color', 'green')
            }
        </script>
    </div>

    <div class="row">
        <div class="col-md-5">
            <strong class="ps">Have you attempted IELTS academic in the past? If Yes, Valid up to?</strong>
        </div>

        <div class="col-md-7">

            <div class="row">
                &nbsp;<div class="IELTS_attempted_yes ">Yes</div>
                &nbsp;&nbsp;&nbsp;
                <div class="IELTS_attempted_no ">NO</div>

            </div>
        </div>
        <script>
            if ("{{$educations->IELTS_attempted}}" == 'yes') {
                $('.IELTS_attempted_yes').css('text-decoration', 'underline')
                $('.IELTS_attempted_yes').css('text-decoration-color', 'green')
            } else {
                $('.IELTS_attempted_no').css('text-decoration', 'underline')
                $('.IELTS_attempted_no').css('text-decoration-color', 'green')
            }
        </script>
    </div>
    <div class="row">
        <div class="col-md-5">
            <strong class="ps">Have you attempted GRE in the past? If Yes, Valid up to?</strong>
        </div>

        <div class="col-md-7">

            <div class="row">
                &nbsp;<div class="GRE_attempted_yes ">Yes</div>
                &nbsp;&nbsp;&nbsp;
                <div class="GRE_attempted_no ">NO</div>

            </div>
        </div>
        <script>
            if ("{{$educations->GRE_attempted}}" == 'yes') {
                $('.GRE_attempted_yes').css('text-decoration', 'underline')
                $('.GRE_attempted_yes').css('text-decoration-color', 'green')
            } else {
                $('.GRE_attempted_no').css('text-decoration', 'underline')
                $('.GRE_attempted_no').css('text-decoration-color', 'green')
            }
        </script>
    </div>
    <div class="row">
        <div class="col-md-5">
            <strong class="ps">Have you attempted TOEFL academic in the past? If Yes, Valid up to?</strong>
        </div>

        <div class="col-md-7">

            <div class="row">
                &nbsp;<div class="TOEFL_attempted_yes ">Yes</div>
                &nbsp;&nbsp;&nbsp;
                <div class="TOEFL_attempted_no ">NO</div>

            </div>
        </div>
        <script>
            if ("{{$educations->TOEFL_attempted}}" == 'yes') {
                $('.TOEFL_attempted_yes').css('text-decoration', 'underline')
                $('.TOEFL_attempted_yes').css('text-decoration-color', 'green')
            } else {
                $('.TOEFL_attempted_no').css('text-decoration', 'underline')
                $('.TOEFL_attempted_no').css('text-decoration-color', 'green')
            }
        </script>
    </div>
    <div class="row">
        <div class="col-md-5">
            <strong class="ps">Have you attempted GMAT academic in the past? If Yes, Valid up to?</strong>
        </div>

        <div class="col-md-7">

            <div class="row">
                &nbsp;<div class="GMAT_attempted_yes ">Yes</div>
                &nbsp;&nbsp;&nbsp;
                <div class="GMAT_attempted_no ">NO</div>

            </div>
        </div>
        <script>
            if ("{{$educations->GMAT_attempted}}" == 'yes') {
                $('.GMAT_attempted_yes').css('text-decoration', 'underline')
                $('.GMAT_attempted_yes').css('text-decoration-color', 'green')
            } else {
                $('.GMAT_attempted_no').css('text-decoration', 'underline')
                $('.GMAT_attempted_no').css('text-decoration-color', 'green')
            }
        </script>
    </div>
    <div class="row">
        <div class="col-md-5">
            <strong class="ps">Are you interested to Attempt GRE/TOEFL/GMAT/SAT if required to fulfil the University/College eligibility criteria?</strong>
        </div>

        <div class="col-md-7">

            <div class="row">
                &nbsp;<div class="interested_attempted_yes ">Yes</div>
                &nbsp;&nbsp;&nbsp;
                <div class="interested_attempted_no ">NO</div>

            </div>
        </div>
        <script>
            if ("{{$educations->interested_attempted}}" == 'yes') {
                $('.interested_attempted_yes').css('text-decoration', 'underline')
                $('.interested_attempted_yes').css('text-decoration-color', 'green')
            } else {
                $('.interested_attempted_no').css('text-decoration', 'underline')
                $('.interested_attempted_no').css('text-decoration-color', 'green')
            }
        </script>
    </div>


    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 ">
            <div class="form-group">
                <label>Remarks/Comments if any</label>

                <textarea class="form-control" rows="6" style="width:100%;" name="feedback">{{$educations->feedback}}</textarea>

            </div>
        </div>
    </div>

</fieldset>