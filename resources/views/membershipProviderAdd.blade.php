@extends('layouts.layoutss')
@section('content')
<form action="{{route('membership.add.provider')}}" method="post" enctype="multipart/form-data">

    @csrf
    <div class='col-md-9 ' style="margin-left:auto !important;margin-right:auto !important">
        <h6 class="" style="text-align:center">Registration Of Membership</h6>

    </div>

    <div class='uk-card col-md-6' style="margin-left:auto !important;margin-right:auto !important">
        <div class="uk-card-body sc-padding-medium">
            <fieldset class="uk-fieldset md-bg-blue-grey-50 sc-padding">

                <div class="row custom-box " id="">

                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>Membership Duration </label>
                            <select class="form-control" name="membership_duration" id="membership_duration" required>
                                <option value="" {{old('membership_duration') == '' ? 'selected':''}}>Select</option>
                                <option value="3" {{old('membership_duration') == '3' ? 'selected':''}}>3 Months</option>
                                <option value="6" {{old('membership_duration') == '6' ? 'selected':''}}>6 Months</option>
                                <option value="12" {{old('membership_duration') == '12' ? 'selected':''}}>12 Months</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>Select Package </label>
                            <select class="form-control" name="package" id="package">
                                <option value="1" {{old('package') == '1' ? 'selected':''}}>Basic For 3Months</option>
                                <option value="2" {{old('package') == '2' ? 'selected':''}}>Basic For 6Months</option>
                                <option value="3" {{old('package') == '3' ? 'selected':''}}>Basic For 12Months</option>
                                <option value="4" {{old('package') == '4' ? 'selected':''}}>Standard For 3Months</option>
                                <option value="5" {{old('package') == '5' ? 'selected':''}}>Standard For 6Months</option>
                                <option value="6" {{old('package') == '6' ? 'selected':''}}>Standard For 12Months</option>
                                <option value="7" {{old('package') == '7' ? 'selected':''}}>Premium For 3Months</option>
                                <option value="8" {{old('package') == '8' ? 'selected':''}}>Premium For 6Months</option>
                                <option value="9" {{old('package') == '9' ? 'selected':''}}>Premium For 12Months</option>
                            </select>
                        </div>
                    </div>
                    @php
                    $mytime = Carbon\Carbon::now()->format('Y-m-d');
                    @endphp

                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>Register Date</label>
                            <input class="form-control" type="date" value="{{$mytime}}" id="StartDate" name="start_date" readonly>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>Expiry Date</label>
                            <input class="form-control" type="date" value="" id="endDate" name="end_date">
                        </div>
                    </div>



                    <div class="float-right">
                        <button type="submit" class="client-btn bmenu uk-button uk-button-primary">Register </button>
                    </div>

                    <input type="text" value="" id="is_service" name="is_service" hidden>
            </fieldset>
        </div>
    </div>


</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

<script>
    $(document).ready(function() {
        $('.extendServices').hide();
        $('#membership_duration').change(function() {
            var m = $(this).val();
            var m = parseInt(m);

            var startDate = new Date();

            startDate.setMonth(startDate.getMonth() + m);
            var startDate = startDate.toLocaleDateString();
            $('#endDate').val(moment(startDate).format('YYYY-MM-DD'));


        })

    });
</script>

@endsection