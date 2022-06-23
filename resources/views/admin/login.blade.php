@extends('layouts.layouts')

@section('content')

<!-- Subscribe & Stay Connected. Start -->
<section class="StayConnected clearfix" style=" padding: 100px 0 100px;">
    <div class="container">
        <h1 style="color:#004e75">Admin Login</h1>

        <div class="whiteBox clearfix" style="width:50%">
            <!--div class="news-title">Please enter your email address below. You will receive a link to <br> reset your password.</div-->
            <form method="post" action="{{ url('/adminlogin') }}">
                @csrf
                <div class="row reset-password">
                    <div class="col-lg-12 col-md-12 col-12">

                        <div class="or-pasword heading">
                            Email
                        </div>

                        <div class="form-group">

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                        </span>
                        @enderror
                        <div class="or-pasword">
                            Password
                        </div>

                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                        </div>
                        @error('password')
                        <span role="alert">
                            <strong style="color:tomato">{{ $message }}</strong>
                        </span>
                        <br>
                        @enderror
                       

                        <div class="form-group">
                            <button type="submit" class="submit-btn">Login</button>
                        </div>

                       

                    </div>

                </div>
            </form>
        </div>

        


    </div>
</section>

@endsection