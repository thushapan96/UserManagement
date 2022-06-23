<!-- Header -->
<header class="float-panel" data-top="0" data-scroll="200">
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="/"><img src="{{asset('images/logo.png')}}" width="200" alt="Logo"></a>

        @if(Auth::user())
        <div class="container" style="max-width: 1300px;">
            @else
            <div class="container" style="max-width: 1200px;">
                @endif
               

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav" style="margin-left:5%;">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('canadainspair')}}">Canada Inspire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('whycanada')}}">Why Canada</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> Services</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('dashboard.consultant')}}">Consultant</a>
                                <a class="dropdown-item" href="{{route('dashboard.business')}}">Business</a>
                                <a class="dropdown-item" href="{{route('dashboard.institution')}}">Institution</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        @if(Auth::user())

                        @if((\App\Models\Consultant::where(['user_id' => auth()->user()->id])->first()) && auth()->user()->service_type == 'Consultation')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('consultantProfile')}}">profile</a>
                        </li>
                        @elseif((\App\Models\Institution::where(['user_id' => auth()->user()->id])->first()) && auth()->user()->service_type == 'Institution')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('institudeProfile')}}">profile</a>
                        </li>
                        @elseif((\App\Models\Consultant::where(['user_id' => auth()->user()->id])->first()) && auth()->user()->service_type == 'Business')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('businessProfile')}}">profile</a>
                        </li>
                        @elseif((\App\Models\Personal::where(['user_id' => auth()->user()->id])->first()) && (auth()->user()->service_type != 'Business' && auth()->user()->service_type != 'Institution' && auth()->user()->service_type != 'Consultation'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('personalProfile')}}">profile</a>
                        </li>
                        @endif
                        @endif

                        @if(Auth::user())
                        <li>
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li>


                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('adminlogin')}}">Admin Login</a>
                        </li>

                    </ul>
                </div>
            </div>
    </nav>
</header>