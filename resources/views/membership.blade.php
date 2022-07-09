@extends('layouts.layoutss')
@section('content')

<div id="modal-close-default" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" data-uk-close></button>
        <form action="{{route('service.add')}}" method="post">
            @csrf
            <label> Extend Services</label>
            <div class="row custom-box sd multipleCandidate ">

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
            <p class="uk-text-right">
                <button class="uk-button uk-button-primary confirmEnquiryy" type="submit">Confirm</button>
            </p>
        </form>
    </div>
</div>

@csrf
<div class='col-md-9 ' style="margin-left:auto !important;margin-right:auto !important">
    <h6 class="" style="text-align:center">Membership </h6>

</div>


<div class='uk-card col-md-8' style="margin-left:auto !important;margin-right:auto !important">
    <div class="uk-card-body sc-padding-medium">
        <fieldset class="uk-fieldset md-bg-blue-grey-50  sc-padding">

            <div class="row ">
                <div class="col-md-4">
                    <strong class="labels"> Name </strong>
                </div>
                <div class="col-md-1">
                    <strong class="labels"> : </strong>
                </div>
                <div class="col-md-7">
                    <label class="labels">{{$membership->first_name}}</label>&nbsp;&nbsp;
                    <label class="labels">{{$membership->middle_name}}</label>&nbsp;&nbsp;
                    <label class="labels">{{$membership->last_name}}</label>
                </div>
            </div><br>

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
                    <strong class="labels"> Selected Serivecs</strong>
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
            @endif
            <!-- <div class="float-right">
                    <button type="submit" class="client-btn bmenu uk-button uk-button-primary">Save </button>
                </div> -->
            @if($membership->membership_duration == '')
            <div style="color:tomato">If you want extend services, you need to get membership !</div><br>
            <a href="{{route('add.membership')}}"><button type="button" class="sc-button sc-button-primary sc-js-button-wave-light uk-width-1-3 waves-effect waves-button waves-light"> Membership Registration</button></a><br><br>
            @else
            <button type="button" class="sc-button sc-button-primary sc-js-button-wave-light uk-width-1-3 waves-effect waves-button waves-light" data-uk-toggle="target: #modal-close-default"> Extend Services</button><br>
            @endif
        </fieldset>
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