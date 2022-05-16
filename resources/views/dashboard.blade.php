@extends('layouts.layout')
@section('content')



<!-- Subscribe & Stay Connected. Start -->
<section class="StayConnected clearfix">
    <div class="whiteBox clearfix">

        <h3 class='text-center mb-3'>Consultant Services</h3>
        <div class="row">
            @if($consaltans)
            @foreach($consaltans as $consultant)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$consultant->first_name}}</h5>
                        <p class="card-text small ">{{$consultant->type}}</p>

                        <p class="card-text ">{{$consultant->brief_introduction}}</p>
                        <a href="#" class="btn btn-primary mt-3">View More</a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div>
                <h1> Hi </h1>
            </div>
            @endif

        </div>
    </div>
    </br>
    <div class="whiteBox clearfix">

        <h3 class='text-center mb-3'>Instituion Services</h3>
        <div class="row">
            @if($institutions)

            @foreach($institutions as $institution)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$institution->name}}</h5>
                        <p class="card-text small ">{{$institution->type}}</p>

                        <p class="card-text ">{{$institution->brief_introduction}}</p>
                        <a href="#" class="btn btn-primary mt-3">View More</a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div>
                <h1> No Instituion</h1>
            </div>
            @endif
        </div>




    </div>
    </br>
    <div class="whiteBox clearfix">

        <h3 class='text-center mb-3'>Bussiness Services</h3>
        <div class="row">
        @if($bussiness)

            @foreach($bussiness as $consultant)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$consultant->first_name}}</h5>
                        <p class="card-text small ">{{$consultant->type}}</p>

                        <p class="card-text ">{{$consultant->brief_introduction}}</p>
                        <a href="#" class="btn btn-primary mt-3">View More</a>
                    </div>
                </div>
            </div>
            @endforeach
        @else
        <div>
                <h1> No Bussiness Services</h1>
            </div>
        @endif

        </div>




    </div>
</section>

@endsection