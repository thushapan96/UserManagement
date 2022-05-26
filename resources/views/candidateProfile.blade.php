@extends('layouts.layout')

@section('content')

<section class="StayConnected clearfix" style="  padding: 100px 0 100px;">


    <div class="" style=" left: 0px;">
        <div class="row">
            <div class="col-md-4 border-left" style=" left: 150px;">
                <div class="d-flex flex-column align-items-left text-left p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><br>
                    <span class="font-weight-bold  align-items-center  ">{{$personal->first_name}}</span><br>
                    <span class="font-weight-bold  text-left">{{$personal->email}}</span><br>
                    <span class="font-weight-bold text-left">{{$personal->fb_link}}</span><br>
                    <span class="font-weight-bold">{{$personal->Linkedin_link}}</span><br>
                    <span class="font-weight-bold">{{$personal->insta_link}}</span><br>
                    <span class="font-weight-bold">{{$personal->twitter_link}} </span><br>
                </div>
            </div>
            <div class="col-md-8 ">
                <div>
                    <div class="">
                        <div class="cardf">
                            <nav class="nav nav-pills nav-fill justify-content-left " style="cursor:pointer; text-decoration: underline !important">
                                <a class="nav-link active" style="cursor:pointer;padding: 1.15rem 3rem;color:red !important" aria-current="page" id="amenu">personal</a>
                                <a class="nav-link " style="cursor:pointer;padding: 1.15rem 3rem;color:red !important" id="amenu1">academy</a>
                                <a class="nav-link" style="cursor:pointer;padding: 1.15rem 3rem;;color:red !important" id="amenu2">work</a>
                                <a class="nav-link " style="cursor:pointer;padding: 1.15rem 3rem;;color:red !important" id="amenu3">sponsor</a>
                            </nav>
                        </div>
                    </div>
                    <br>
                    <br>
                    @if($personal)
                    <div id='menu' class='tab-pane'>
                        <!-- <div class="float-center">
                            <h4 class="float-center">Personal Information</h4>
                        </div> -->
                        <br>
                        <div class="col-md-8 card">
                            <br><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> Name  </strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$personal->first_name}}</label>
                                    <label class="labels">{{$personal->middle_name}}</label>
                                    <label class="labels">{{$personal->last_name}}</label>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">  Residential Address  </strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    @if($personal->residential_street)
                                    <label class="labels">{{$personal->residential_street}}</label><br>
                                    @endif
                                    @if($personal->residential_street2)
                                    <label class="labels">{{$personal->residential_street2}}</label><br>
                                    @endif
                                    @if($personal->residential_city)
                                    <label class="labels">{{$personal->residential_city}}</label><br>
                                    @endif
                                    @if($personal->residential_region)
                                    <label class="labels">{{$personal->residential_region}}</label><br>
                                    @endif
                                    @if($personal->residential_pincode)
                                    <label class="labels">{{$personal->residential_pincode}}</label><br>
                                    @endif
                                    @if($personal->residential_country)
                                    <label class="labels">{{$personal->residential_country}}</label>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">  corosponding Address </strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    @if($personal->corosponding_street)
                                    <label class="labels">{{$personal->corosponding_street}}</label><br>
                                    @endif
                                    @if($personal->corosponding_street2)
                                    <label class="labels">{{$personal->corosponding_street2}}</label><br>
                                    @endif
                                    @if($personal->corosponding_city)
                                    <label class="labels">{{$personal->corosponding_city}}</label><br>
                                    @endif
                                    @if($personal->corosponding_region)
                                    <label class="labels">{{$personal->corosponding_region}}</label><br>
                                    @endif
                                    @if($personal->corosponding_pincode)
                                    <label class="labels">{{$personal->corosponding_pincode}}</label><br>
                                    @endif
                                    @if($personal->corosponding_pincode)
                                    <label class="labels">{{$personal->corosponding_country}}</label>
                                    @endif

                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> mobile</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$personal->mobile}}</label><br>
                                    <label class="labels">{{$personal->phone}}</label>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> email</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$personal->email}}</label>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> birth_date</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$personal->birth_date}}</label>
                                </div>
                            </div>
                            <br>

                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> gender</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$personal->gender}}</label>
                                </div>
                            </div>
                            <br>
                            <!-- <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> is already apply </strong>
                                </div>
                                <div class="col-md-7">:
                                    <label class="labels">{{$personal->is_already_apply}}</label>
                                </div>
                            </div> -->
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> possible start date</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$personal->possible_start_date}}</label>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> immigration purpose </strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$personal->immigration_purpose}}</label>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> is vaccinate</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$personal->is_vaccinate}}</label>
                                </div>
                            </div>
                            <br><br>
                        </div>
                        <div class="mt-5 text-center"><a href="{{route('personalEdit', ['id' => $personal->user_id])}}"><button class="btn btn-primary profile-button" type="button">Edit Personal Profile </button></a></div>
                    </div>
                    @endif
                    @if($Academy)
                    <div id='menu1' class='tab-pane'>
                        <!-- <div class="float-center">
                            <h4 class="float-center">Personal Information</h4>
                        </div> -->
                        <br>

                        <div class="col-md-8 card">
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> Language Proficiency </strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$Academy->language_proficiency}}</label>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> Language Level </strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$Academy->language_level}}</label>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> Certified By</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$Academy->language_certified_by}}</label><br>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> Applicant Test Scores </strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$Academy->applicant_test_name}}</label><br>

                                </div>
                            </div>

                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> Valid Upto</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$Academy->test_valid_upto}}</label><br>
                                </div>
                            </div>
                            <br>
                        </div>
                        <br>

                        @foreach($qualification as $row)
                        <div class="col-md-8 card">
                            <br>
                            <strong class="labels" style="text-decoration: underline;">{{$row->type}}</strong><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Name </strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$row->name}}</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Address</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$row->Address}}</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Year Completion</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$row->Year_completion}}</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Distant</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$row->Distant}}</label><br>
                                </div>
                            </div><br>

                        </div>
                        <br>
                        @endforeach

                        <div class="mt-5 text-center"><a href="{{route('academyEdit', ['id' => $Academy->user_id])}}"><button class="btn btn-primary profile-button" type="button">Edit academic Profile </button></a></div>
                    </div>
                    @endif
                    @if($Work)
                    <div id='menu2' class='tab-pane'>
                        <!-- <div class="float-center">
                            <h4 class="float-center">Personal Information</h4>
                        </div> -->
                        <br>
                        @foreach($Work as $key =>$row)
                        <div class="col-md-8 card">
                            <br>

                            <strong class="labels" style="text-decoration: underline;">Place work {{$key + 1 }}</strong><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Designation</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels"> {{$row->designation}}</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">No. of Years Worked</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$row->Year_completion}}</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Country</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$row->country}}</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Work Profile</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$row->work_profile_letter}}</label><br>
                                </div>
                            </div><br>

                        </div>
                        <br>
                        @endforeach
                        <div class="mt-5 text-center"><a href="{{route('workEdit', ['id' => $userId])}}"><button class="btn btn-primary profile-button" type="button">Edit Work Profile </button></a></div>

                        <br>
                    </div>
                    @endif
                    @if($Sponsor)
                    <div id='menu3' class='tab-pane'>
                        <!-- <div class="float-center">
                            <h4 class="float-center">Personal Information</h4>
                        </div> -->
                        <br>
                        <div class="col-md-8 card">
                            <br>
                            <strong class="labels" style="text-decoration: underline;">Sponsor Details</strong><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Name </strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                
                                <div class="col-md-7">
                                    <label class="labels">{{$Sponsor->fisrt_name}}&nbsp;&nbsp;{{$Sponsor->middle_name}}&nbsp;&nbsp;{{$Sponsor->last_name}}</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Sponsor Status</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$Sponsor->sponsor_status}}</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Relationship with Child  </strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$Sponsor->sponsor_relation}}</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Mobile Number </strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$Sponsor->sponsor_mobile}}</label><br>
                                </div>
                            </div><br>

                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Email </strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$Sponsor->sponsor_email}}</label><br>
                                </div>
                            </div><br>

                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Address</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    @if($Sponsor->sponsor_street)
                                    <label class="labels">{{$Sponsor->sponsor_street}}</label><br>
                                    @endif
                                    @if($Sponsor->sponsor_street2)
                                    <label class="labels">{{$Sponsor->sponsor_street2}}</label><br>
                                    @endif
                                    @if($Sponsor->sponsor_city)
                                    <label class="labels">{{$Sponsor->sponsor_city}}</label><br>
                                    @endif
                                    @if($Sponsor->sponsor_region)
                                    <label class="labels">{{$Sponsor->sponsor_region}}</label><br>
                                    @endif
                                    @if($Sponsor->sponsor_pincode)
                                    <label class="labels">{{$Sponsor->sponsor_pincode}}</label><br>
                                    @endif
                                    @if($Sponsor->sponsor_country)
                                    <label class="labels">{{$Sponsor->sponsor_country}}</label><br>
                                    @endif
                                </div>
                            </div><br>

                        </div>
                        <br>
                        <div class="col-md-8 card">
                            <br>
                            <strong class="labels" style="text-decoration: underline;">Guadian Details</strong><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Relationship with Child</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$Sponsor->guardian_relation}}</label><br>
                                </div>
                            </div><br>

                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Mobile Number </strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$Sponsor->guardian_mobile}}</label><br>
                                </div>
                            </div><br>

                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Email</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">{{$Sponsor->guardian_email }}</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Address</strong>
                                </div>
                                <div class="col-md-1">
                                    <strong class="labels"> :</strong>
                                </div>
                                <div class="col-md-7">
                                    @if($Sponsor->guardian_street)
                                    <label class="labels">{{$Sponsor->guardian_street}}</label><br>
                                    @endif
                                    @if($Sponsor->guardian_street2)
                                    <label class="labels">{{$Sponsor->guardian_street2}}</label><br>
                                    @endif
                                    @if($Sponsor->guardian_city)
                                    <label class="labels">{{$Sponsor->guardian_city}}</label><br>
                                    @endif
                                    @if($Sponsor->guardian_region)
                                    <label class="labels">{{$Sponsor->guardian_region}}</label><br>
                                    @endif
                                    @if($Sponsor->guardian_pincode)
                                    <label class="labels">{{$Sponsor->guardian_pincode}}</label><br>
                                    @endif
                                    @if($Sponsor->guardian_country)
                                    <label class="labels">{{$Sponsor->guardian_country}}</label><br>
                                    @endif
                                </div>
                            </div><br>


                        </div>
                        <br>
                        <div class="mt-5 text-center"><a href="{{route('sponsorEdit', ['id' => $userId])}}"><button class="btn btn-primary profile-button" type="button">Edit Sponsor Profile </button></a></div>

                    </div>
                    @endif
                    <br>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    $(document).ready(function() {
        $('.tab-pane').fadeOut();
        $("#menu").fadeIn();
        $("#amenu").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu").fadeIn();
            $(".nav-link").removeClass('active')
            $(this).addClass('active')
        });
        $("#amenu1").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu1").fadeIn();
            $(".nav-link").removeClass('active')
            $(this).addClass('active')
        });
        $("#amenu2").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu2").fadeIn();
            $(".nav-link.active").removeClass('active')
            $(this).addClass('active')
        });
        $("#amenu3").click(function() {
            $('.tab-pane').fadeOut();
            $("#menu3").fadeIn();
            $(".nav-link.active").removeClass('active')
            $(this).addClass('active')
        });
    });
</script>
@if($message = Session::get('personalUpdate'))
<script>
    Swal.fire(
        'Success',
        'Successfully Updated Personal Details!',
        'success'
    )
</script>
@endif
@if($message = Session::get('academyUpdate'))
<script>
    Swal.fire(
        'Success',
        'Successfully Updated!',
        'success'
    )
</script>

<script>
    setTimeout(function() {
        $('.tab-pane').fadeOut();
        $("#menu1").fadeIn();
        $(".nav-link.active").removeClass('active')
        $("#amenu1").addClass('active')
    }, 1000);
</script>
@endif
@if($message = Session::get('workUpdate'))
<script>
    Swal.fire(
        'Success',
        'Successfully Updated!',
        'success'
    )
</script>
<script>
    setTimeout(function() {
        $('.tab-pane').fadeOut();
        $("#menu2").fadeIn();
        $(".nav-link.active").removeClass('active')
        $("#amenu2").addClass('active')
    }, 1000);
</script>
@endif
@if($message = Session::get('sponsorUpdate'))
<script>
    Swal.fire(
        'Success',
        'Successfully Updated!',
        'success'
    )
</script>
<script>
    setTimeout(function() {
        $('.tab-pane').fadeOut();
        $("#menu3").fadeIn();
        $(".nav-link.active").removeClass('active')
        $("#amenu3").addClass('active')
    }, 1000);
</script>
@endif
@endsection