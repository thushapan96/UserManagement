@extends('layouts.layoutss')
@section('content')


<div id="modal-close-Package" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="width:500px !important">
        <button class="uk-modal-close-default" type="button" data-uk-close></button>
        <form action="{{route('package.add.provider')}}" method="post">
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
            <input type="text" value="{{$membership->membership_duration}}" name="membership_duration" hidden>
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
         
            <div class="uk-card">
                <div class="uk-card-header md-bg-red-700 sc-light uk-margin-medium-bottom">
                    <label class="labels">{{$membership->first_name}}</label>&nbsp;
                    <label class="labels">{{$membership->last_name}}</label>&nbsp;


                </div>
                <input type="text" name="type" value="Basic" hidden>
                <input type="text" name="duration" value="12" hidden>

                <div class="uk-card-body">


                    <div class="row ">
                        <div class="col-md-4">
                            <strong class="labels"> Providing Service </strong>
                        </div>

                        <div class="col-md-1">
                            <strong class="labels"> : </strong>
                        </div>
                        <div class="col-md-7">
                            <label class="labels">{{$membership->service}}</label><br>

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
                    <div style="color:tomato">If you want to get our services, you need to get membership !</div><br>
                    <a href="{{route('add.membership.provider')}}" class="sc-button"> Membership Registration</a><br><br>
                    @else
                  
                    <a href="#" class="sc-button" data-uk-toggle="target: #modal-close-Package"> Change Package</a>
                    @endif
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            

        });
    </script>

    @endsection