 <!-- @if(auth()->user()->service_type == 'Consultation')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('consultantProfile')}}">profile</a>
                        </li>
                        @elseif(auth()->user()->service_type == 'Institution')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('institudeProfile')}}">profile</a>
                        </li>
                        @elseif(auth()->user()->service_type == 'Business')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('businessProfile')}}">profile</a>
                        </li>
                        @else -->