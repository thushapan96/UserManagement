

@extends('layouts.layout')

@section('content')

<!-- Subscribe & Stay Connected. Start -->
<section class="StayConnected clearfix">
    <div class="container">
        <h1>Login</h1>

        <div class="whiteBox clearfix">
            <!--div class="news-title">Please enter your email address below. You will receive a link to <br> reset your password.</div-->
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="row reset-password">
                    <div class="col-lg-6 col-md-6 col-12">

                        <div class="or-pasword">
                            <span>Email</span>
                        </div>

                        <div class="form-group">

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                       
                    </div>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="or-pasword">
                            <span>Password</span>
                        </div>

                        <div class="form-group">
                            <span><img src="images/eye-slash.svg" alt="lock"></span>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 "  align="center">
                            <div class="custom-control custom-checkbox">
                                    <input class="" type="checkbox" id="customCheck2" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                            

                        <div class="form-group">
                            <button type="submit" class="submit-btn">Login</button>
                        </div>

                        <div class="col-md-12 col-12" align="center">
                
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-12 m-hide">
                        <center><img src="images/girlt.jpeg" class=" mt-3 img-fluid" width="300px" alt="Password"></center>
                    </div>
                </div>
                <form>
        </div>

        <div class="great-title">Still Don't Register ?</div>

        <div class="clearfix mb-2 text-center col-lg-12 col-md-12 col-12">
              <a href="{{route('register')}}" class="btn" style="background-color:#3BA6F6; color:aliceblue" type="submit"> Register Now</a>
            </div>


    </div>
</section>

@endsection
