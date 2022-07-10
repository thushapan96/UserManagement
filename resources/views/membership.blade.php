@extends('layouts.layoutss')
@section('content')

<div id="modal-close-default" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="width:500px !important">
        <button class="uk-modal-close-default" type="button" data-uk-close></button>
        <form action="{{route('service.add')}}" method="post">
            @csrf
            <h6> Extend Services</h6>
            <div class="row custom-box sd multipleCandidate">

                <div class="col-lg-4 col-md-4 col-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input service" id="customCheck" name="service[]" value="study" {{ (is_array($membership->service) and in_array("study", $membership->service)) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="customCheck">Study </label>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input service" id="customCheck1" name="service[]" value="migration" {{ (is_array($membership->service) and in_array("migration", $membership->service)) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="customCheck1">Migration </label>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 mb-3">
                    <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input service" id="customCheck2" name="service[]" value="work" {{ (is_array($membership->service) and in_array("work", $membership->service)) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="customCheck2">Work</label>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-4 mb-3">
                    <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input service" id="customCheck3" name="service[]" value="business" {{ (is_array($membership->service) and in_array("business", $membership->service)) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="customCheck3">Business</label>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 mb-3">
                    <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input service" id="customCheck4" name="service[]" value="visa" {{ (is_array($membership->service) and in_array("visa", $membership->service)) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="customCheck4">Visa</label>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 mb-3">
                    <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input service" id="customCheck5" name="service[]" value="others" {{ (is_array($membership->service) and in_array("others", $membership->service)) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="customCheck5">Others</label>
                    </div>
                </div>
            </div>
            <p class="uk-text-center">
                <button class="sc-button" type="submit">Confirm</button>
            </p>
        </form>
    </div>
</div>

<div id="modal-close-Package" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="width:500px !important">
        <button class="uk-modal-close-default" type="button" data-uk-close></button>
        <form action="{{route('package.add')}}" method="post">
            @csrf
            <h6> Extend Services</h6>
            <div class="col-lg-12 col-md-12 col-12">
                <div class="form-group">
                    <label>Select Package </label>
                    <select class="form-control" name="package" id="package">
                        <option value="Basic" {{$package == 'Basic' ? 'selected':''}}>Basic</option>
                        <option value="Stanadard" {{$package == 'Stanadard' ? 'selected':''}}>Standard</option>
                        <option value="Premium" {{$package == 'Premium' ? 'selected':''}}>Premium</option>
                    </select>
                </div>
            </div>
            <input type="text" value="{{$membership->membership_duration}}" name="membership_duration"  hidden>
            <p class="uk-text-center">
                <button class="sc-button" type="submit">Confirm</button>
            </p>
        </form>
    </div>
</div>
@csrf
<div class='col-md-9 ' style="margin-left:auto !important;margin-right:auto !important">
    <h6 class="" style="text-align:center">Membership </h6>

</div>

<div class='col-md-8' style="margin-left:auto !important;margin-right:auto !important">

    <div class="uk-child-width-2-2@s uk-child-width-3-3@l uk-grid" data-uk-grid="" style="margin-left:auto !important;margin-right:auto !important">
        <div class="uk-grid-margin uk-first-column">
            @csrf
            <div class="uk-card">
                <div class="uk-card-header md-bg-red-700 sc-light uk-margin-medium-bottom">
                    <label class="labels">{{$membership->first_name}}</label>&nbsp;
                    <label class="labels">{{$membership->middle_name}}</label>&nbsp;
                    <label class="labels">{{$membership->last_name}}</label>

                </div>
                <input type="text" name="type" value="Basic" hidden>
                <input type="text" name="duration" value="12" hidden>

                <div class="uk-card-body">


                    <div class="row ">
                        <div class="col-md-4">
                            <strong class="labels"> Service Type</strong>
                        </div>

                        <div class="col-md-1">
                            <strong class="labels"> : </strong>
                        </div>
                        <div class="col-md-7">
                            <label class="labels">{{$membership->service_type}}</label><br>

                        </div>
                    </div><br>

                    <div class="row ">
                        <div class="col-md-4">
                            <strong class="labels"> Selected Services</strong>
                        </div>

                        <div class="col-md-1">
                            <strong class="labels"> : </strong>
                        </div>
                        <div class="col-md-7">
                            @foreach($membership->service as $row)
                            <label class="labels"> {{$row}}</label><br>
                            @endforeach
                        </div>
                    </div><br>

                    @if($membership->membership_duration)
                    <div class="row ">
                        <div class="col-md-4">
                            <strong class="labels"> Register Date</strong>
                        </div>

                        <div class="col-md-1">
                            <strong class="labels"> : </strong>
                        </div>
                        <div class="col-md-7">

                            <label class="labels"> {{$membership->start_date}}</label><br>

                        </div>
                    </div><br>
                    <div class="row ">
                        <div class="col-md-4">
                            <strong class="labels"> Expiry Date</strong>
                        </div>

                        <div class="col-md-1">
                            <strong class="labels"> : </strong>
                        </div>
                        <div class="col-md-7">

                            <label class="labels"> {{$membership->end_date}}</label><br>

                        </div>
                    </div><br>
                    <div class="row ">
                        <div class="col-md-4">
                            <strong class="labels"> Membership Duration</strong>
                        </div>

                        <div class="col-md-1">
                            <strong class="labels"> : </strong>
                        </div>
                        <div class="col-md-7">

                            <label class="labels"> {{$membership->membership_duration}} Months</label><br>

                        </div>
                    </div><br>

                    <div class="row ">
                        <div class="col-md-4">
                            <strong class="labels"> Selected Package</strong>
                        </div>

                        <div class="col-md-1">
                            <strong class="labels"> : </strong>
                        </div>
                        <div class="col-md-7">

                            <label class="labels"> {{$package == 'Stanadard' ? 'Standard':$package}}</label><br>

                        </div>
                    </div><br>
                    @endif

                </div>
                <hr class="uk-margin-remove">
                <div class="uk-card-footer md-bg-grey-50">
                    @if($membership->membership_duration == '')
                    <div style="color:tomato">If you want extend services, you need to get membership !</div><br>
                    <a href="{{route('add.membership')}}" class="sc-button"> Membership Registration</a><br><br>
                    @else
                    <a href="#" class="sc-button" data-uk-toggle="target: #modal-close-default"> Extend Services</a><br><br>
                    <a href="#" class="sc-button" data-uk-toggle="target: #modal-close-Package"> Change Package</a>
                    @endif
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            var service = @json($membership -> service);


            console.log(service);
            $(".service").click(function() {

                var val = $(this).val();

                if (jQuery.inArray(val, service) != -1) {
                    alert('You Can not Degrade Services !')
                    return false;
                }

            })

        });
    </script>

    @endsection