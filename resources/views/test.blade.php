<div id="inputFormRow">
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Technical Certification (Name of Certificate)</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                {{$row->technical_certification_name}}
            </p>
        </div>
    </div>

    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Certificate Specialization</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                {{$row->certificate_specialization}}
            </p>
        </div>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Course Duration</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                {{$row->technical_certification_course_duration}}
            </p>
        </div>
    </div>

    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Grade/Score</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                {{$row->technical_certification_grade}}
            </p>
        </div>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Year of Completion</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                {{$row->technical_certification_year_completion}}
            </p>
        </div>
    </div>
   
</div>