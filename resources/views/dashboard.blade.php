@extends('layouts.layout')
@section('content')



<!-- Subscribe & Stay Connected. Start -->
<section class="StayConnected clearfix">
<div class="whiteBox clearfix">

<h3 class='text-center mb-3'>Consultant Services</h3>
    <div class="row">
        @foreach($consultants as $consultant)
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
        
    </div>
</div>
</br>
<div class="whiteBox clearfix">

    <h3 class='text-center mb-3'>Consultant Services</h3>
    <div class="row">
        @foreach($consultants as $consultant)
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
        
    </div>

   


    </div>
</section>

@endsection