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
                    <ul class="navbar-nav " style="margin-left:60%;">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> Register</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('register', ['role' => 'Service Provider'])}}"> as Service Provider</a>
                                <a class="dropdown-item" href="{{route('register', ['role' => 'candidate'])}}"> as Candidate</a>
                            </div>
                        </li>

                        @if(Auth::user())
                        <li class="nav-item float-right">
                            <a class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @else
                        <li class="nav-item float-right">
                            <a class="nav-link float-right" href="{{route('login')}}">Login</a>
                        </li>
                        @endif

                        @if(Auth::guard('admin')->user())
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Admin Logout
                            </a>

                            <form id="logout-form" action="{{ route('adminlogout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('adminlogin')}}">Admin Login</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
    </nav>
</header>