<div class="card col-5">
  <br>
  <div class="row custom-box">
    <div class="col-md-6">
      <strong class="ps">Type of Courses</strong>
    </div>

    <div class="col-md-6">
      <p class="ps">
        @if($institutions->course_type)
        @foreach($institutions->course_type as $row)
        {{$row}},
        @endforeach
        @endif
      </p>
    </div>
  </div>

  <div class="row custom-box">
    <div class="col-md-6">
      <strong class="ps">Intake</strong>
    </div>

    <div class="col-md-6">
      <p class="ps">
        @if($institutions->intake)
        @foreach($institutions->intake as $row)
        {{$row}},
        @endforeach
        @endif
      </p>
    </div>
  </div>

  <div class="row custom-box">
    <div class="col-md-6">
      <strong class="ps">Admission Type </strong>
    </div>

    <div class="col-md-6">
      <p class="ps">{{$institutions->admission_type}}</p>
    </div>
  </div>

  <div class="row custom-box">
    <div class="col-md-6">
      <strong class="ps">Year of Establishment</strong>
    </div>

    <div class="col-md-6">
      <p class="ps">{{$institutions->establishment_year}}</p>
    </div>
  </div>

  <div class="row custom-box">
    <div class="col-md-6">
      <strong class="ps">Offering Services Since</strong>
    </div>

    <div class="col-md-6">
      <p class="ps">{{$institutions->offering_year}}</p>
    </div>
  </div>
  <div class="row custom-box">
    <div class="col-md-6">
      <strong class="ps">Response Time</strong>
    </div>

    <div class="col-md-6">
      <p class="ps">{{$institutions->response_time}}</p>
    </div>
  </div>
  <div class="row custom-box">
    <div class="col-md-6">
      <strong class="ps">Mode of Communication</strong>
    </div>

    <div class="col-md-6">
      <p class="ps">
        @if($institutions->communication_mode)
        @foreach($institutions->communication_mode as $row)
        {{$row}},
        @endforeach
        @endif
      </p>
    </div>
  </div>
</div>