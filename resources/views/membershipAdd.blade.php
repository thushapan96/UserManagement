@extends('layouts.layoutss')
@section('content')
<form action="{{route('membership.add')}}" method="post" enctype="multipart/form-data">

    @csrf
    <div class='col-md-9 ' style="margin-left:auto !important;margin-right:auto !important">
        <h5 style="text-align:center;color:#3f6791">Registration Of Membership</h5>

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
                                @foreach($packagePriceList as $row)
                                <option value="{{$row->id}}" {{old('package') == $row->id ? 'selected' :''}}>{{$row->type == 'Stanadard' ? 'Standard':$row->type}} For {{$row->duration}} Months - {{$row->price}} {{$currencyPrice}}</option>
                                @endforeach
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

                </div><br>
                <div class="extendServices">
                    <label> Select Services</label>
                    <div class="row custom-box sd multipleCandidate ">

                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="service[]" value="study" {{ (is_array($membership->service) and in_array("study", $membership->service)) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="customCheck">Study </label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" name="service[]" value="migration" {{ (is_array($membership->service) and in_array("migration", $membership->service)) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="customCheck1">Migration </label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4 mb-3">
                            <div class="custom-control custom-checkbox ">
                                <input type="checkbox" class="custom-control-input " id="customCheck2" name="service[]" value="work" {{ (is_array($membership->service) and in_array("work", $membership->service)) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="customCheck2">Work</label>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-4 mb-3">
                            <div class="custom-control custom-checkbox ">
                                <input type="checkbox" class="custom-control-input " id="customCheck3" name="service[]" value="business" {{ (is_array($membership->service) and in_array("business", $membership->service)) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="customCheck3">Business</label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4 mb-3">
                            <div class="custom-control custom-checkbox ">
                                <input type="checkbox" class="custom-control-input " id="customCheck4" name="service[]" value="visa" {{ (is_array($membership->service) and in_array("visa", $membership->service)) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="customCheck4">Visa</label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4 mb-3">
                            <div class="custom-control custom-checkbox ">
                                <input type="checkbox" class="custom-control-input " id="customCheck5" name="service[]" value="others" {{ (is_array($membership->service) and in_array("others", $membership->service)) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="customCheck5">Others</label>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <button type="button" id="ES" class="sc-button sc-button-primary sc-js-button-wave-light uk-width-1-3 waves-effect waves-button waves-light">Extend Services</button><br><br>

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
        $('#ES').click(function() {
            console.log('hiii')
            if ($(this).text() == 'Extend Services') {
                $('.extendServices').fadeIn();
                $(this).css('background', '#c62828')
                $(this).text('Remove Services')
                $('#is_service').val('yes')
            } else {
                $('.extendServices').fadeOut();
                $(this).css('background', '#00838f')
                $(this).text('Extend Services')
                $('#is_service').val('no')
            }
        })
    });
</script>

@endsection