@extends('layouts.layout')

@section('content')
<style>
    .progress {
        background-color: white !important;
        margin-left: 40px !important;
        margin-right: 40px !important;
        max-height: 4px;

    }
</style>
<!-- Subscribe & Stay Connected. Start -->
<div class="container ">

    <!-- <br>
        <div class="whiteBoxtab ">
       
            <div class="cardf">
                <nav class="nav nav-pills nav-fill justify-content-center " style="cursor:pointer;padding: .15rem 0.5rem;">
                    <a class="nav-link active" style="cursor:pointer;padding: 1.15rem 5rem;" aria-current="page" id="amenu">personal</a>
                    <a class="nav-link " style="cursor:pointer;padding: 1.15rem 5rem;" id="amenu1">academy</a>
                    <a class="nav-link" style="cursor:pointer;padding: 1.15rem 5rem;" id="amenu2">work</a>
                    <a class="nav-link " style="cursor:pointer;padding: 1.15rem 5rem;" id="amenu3">sponsor</a>
                </nav>
            </div>
            <div class="progress mt-2">
            <div class="progress-bar progress-bar-danger bg-danger progress-bar-striped " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%" style="cursor:pointer;padding: .15rem 0.5rem;">
                
            </div>
        </div>
        </div>
        <br> <br> -->


    <div id="menu" class="tab-pane  ">
        <h1>Candidate Registation - Personal Info</h1>
        <form action="{{route('profilePersonalupdate',['id' => $personal->user_id])}}" method="POST">
            @csrf
            <div class="whiteBox clearfix">
                <!--div class="news-title">You have questions, let's have a conversation </div-->
                <div class="row custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="first_name" class="form-control " type="text" placeholder="First Name" value="{{$personal->first_name}}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-2">
                        <div class="form-group">
                            <label> </label>
                            <input name="middle_name" class="form-control " type="text" placeholder="Middle Name" value="{{$personal->middle_name}}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-2">
                        <div class="form-group">
                            <label> </label>
                            <input name="last_name" class="form-control " type="text" placeholder="Last Name" value="{{$personal->last_name}}">
                        </div>
                    </div>

                </div>
                <hr>
                <div class="row custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Present Residential Address</label>
                            <input name="residential_street" class="form-control " type="text" placeholder="Street Address" value="{{$personal->residential_street}}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-2">
                        <div class="form-group">
                            <label> </label>
                            <input name="residential_street2" class="form-control " type="text" placeholder="Street Address 2" value="{{$personal->residential_street2}}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-2">
                        <div class="form-group">
                            <label> </label>
                            <input name="residential_city" class="form-control " type="text" placeholder="City" value="{{$personal->residential_city}}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label></label>
                            <input name="residential_region" class="form-control " type="text" placeholder="Region or State" value="{{$personal->residential_region}}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 ">
                        <div class="form-group">
                            <label> </label>
                            <input name="residential_pincode" class="form-control " type="text" placeholder="Pin Code " value="{{$personal->residential_pincode}}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label></label>
                            <input class="form-control l-icon" type="text" placeholder="Enter Country" name="residential_country" value="{{$personal->residential_country}}" required>

                        </div>
                    </div>

                </div>

                <hr>
                <div class="row custom-box">

                    <div class="col-lg-3 col-md-3 col-12 m-1 ">
                        <div class="form-group">
                            <label>Corosponding Address</label>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheckaddress" name="same_Correspondence_address" value="1">
                            <label class="custom-control-label" for="customCheckaddress"> Check the Box if
                                Correspondence
                                Address
                                is same as Present Residential Address. </label>
                        </div>
                    </div>

                    <div class="row m-1 sameaddress" id="sameaddress">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label></label>
                                <input class="form-control " name="corosponding_street" type="text" placeholder="Street Address" value="{{$personal->corosponding_street}}">
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label> </label>
                                <input class="form-control " name="corosponding_street2" type="text" placeholder="Street Address 2" value="{{$personal->corosponding_street2}}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label> </label>
                                <input class="form-control " name="corosponding_city" type="text" placeholder="City" value="{{$personal->corosponding_city}}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label></label>
                                <input class="form-control " name="corosponding_region" type="text" placeholder="Region or State" value="{{$personal->corosponding_region}}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label> </label>
                                <input class="form-control " name="corosponding_pincode" type="text" placeholder="Pin Code " value="{{$personal->corosponding_pincode}}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label></label>
                                <input class="form-control l-icon" type="text" placeholder="Enter Country" name="corosponding_country" value="{{$personal->corosponding_country}}">

                            </div>
                        </div>

                    </div>
                </div>
                <hr>

                <div class="row mb-4">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Contact Info</label>
                            <input name="mobile" class="form-control " type="text" placeholder="Mobile" value="{{$personal->mobile}}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-2">
                        <div class="form-group">
                            <label></label>
                            <input name="phone" class="form-control " type="text" placeholder="Phone" value="{{$personal->phone}}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-2">
                        <div class="form-group">
                            <label></label>
                            <input name="email" class="form-control " type="email" placeholder="Email" value="{{$personal->email}}">
                            <p style="color:Tomato"> @error('email'){{$message}} @enderror</p>
                        </div>
                    </div>

                </div>

                <hr>
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input name="birth_date" class="form-control" type="date" placeholder="Date of Birth" value="{{$personal->birth_date}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <label>Gender</label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input" id="customradio" name="gender" value="male" {{$personal->gender == 'male' ? 'checked':''}}>
                                <label class="custom-control-label mt-1" for="customradio">Male</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input" id="customradio1" name="gender" value="female" {{$personal->gender == 'female' ? 'checked':''}}>
                                <label class="custom-control-label mt-1" for="customradio1">Female</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input" id="customradio2" name="gender" value="other" {{$personal->gender == 'other' ? 'checked':''}}>
                                <label class="custom-control-label mt-1" for="customradio2">Other</label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="customradio3" name="gender" value="Prefer Not to say" {{$personal->gender == 'Prefer Not to say' ? 'checked':''}}>
                                <label class="custom-control-label mt-1" for="customradio3">Prefer Not to say
                                </label>
                            </div>
                        </div>
                    </div>


                </div>
                <hr>

                <div class="row mb-4">
                    <div class="col-lg-12 col-md-12 col-12">
                        <label>Have you applied Visa for USA and Canada
                        </label>
                    </div>
                    <div class="col-lg-2 col-md-2 col-2 ">
                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input " id="customradio4" name="is_already_apply" value="yes" {{$personal->is_already_apply == 'yes' ? 'checked':''}}>
                            <label class="custom-control-label mt-1" for="customradio4">Yes</label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-2 ">
                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input " id="customradio5" name="is_already_apply" value="no" {{$personal->is_already_apply == 'no' ? 'checked':''}}>
                            <label class="custom-control-label mt-1" for="customradio5">No</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-1">

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Possible Start Date
                            </label>
                            <input class="form-control" type="date" name="possible_start_date" placeholder="For Immigration Process" value='{{$personal->possible_start_date}}'>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-12 col-md-12 col-12">
                        <label>Which Describes you best?


                        </label>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12 ">
                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input " id="customradio6" name="immigration_purpose" value="Student" {{$personal->immigration_purpose == 'Student' ? 'checked':''}}>
                            <label class="custom-control-label mt-1" for="customradio6">Student</label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12 ">
                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input " id="customradio7" name="immigration_purpose" value="Employed" {{$personal->immigration_purpose == 'Employed' ? 'checked':''}}>
                            <label class="custom-control-label mt-1" for="customradio7">Employed</label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12 ">
                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input " id="customradio8" name="immigration_purpose" value="Self Employed" {{$personal->immigration_purpose == 'Self Employed' ? 'checked':''}}>
                            <label class="custom-control-label mt-1" for="customradio8">SelfEmployed</label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12 ">
                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input " id="customradio9" name="immigration_purpose" value="Retired" {{$personal->immigration_purpose == 'Retired' ? 'checked':''}}>
                            <label class="custom-control-label mt-1" for="customradio9">Retired</label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12 ">
                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input " id="customradio10" name="immigration_purpose" value="Business" {{$personal->immigration_purpose == 'Business' ? 'checked':''}}>
                            <label class="custom-control-label mt-1" for="customradio10">Business</label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12 ">
                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input " id="customradio11" name="immigration_purpose" value="Unemployed" {{$personal->immigration_purpose == 'Unemployed' ? 'checked':''}}>
                            <label class="custom-control-label mt-1" for="customradio11">Unemployed</label>
                        </div>
                    </div>
                </div>


                <div class="row mb-4">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Preference of Immigration
                            </label>
                            <select name="immigration_preference" class="form-control">
                                <option value="PNP" {{$personal->immigration_preference == 'PNP' ? 'selected':''}}>PNP</option>
                                <option value="AIPP" {{$personal->immigration_preference == 'AIPP' ? 'selected':''}}>AIPP</option>
                                <option value="Visit" {{$personal->immigration_preference == 'Visit' ? 'selected':''}}>Visit</option>
                                <option value="Student" {{$personal->immigration_preference == 'Student' ? 'selected':''}}>Student</option>
                                <option value="Business" {{$personal->immigration_preference == 'Business' ? 'selected':''}}>Business</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12 col-12 ">
                        <label>Have you been Vaccinated against COVID
                        </label>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-12 ml-3 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="customradio12" name="is_vaccinate" value="Yes" {{$personal->is_vaccinate == 'Yes' ? 'checked':''}}>
                                <label class="custom-control-label mt-1" for="customradio12">Yes</label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12 ">
                            <div class="custom-control custom-radio ">
                                <input type="radio" class="custom-control-input " id="customradio13" name="is_vaccinate" value="No" {{$personal->is_vaccinate == 'No' ? 'checked':''}}>
                                <label class="custom-control-label mt-1" for="customradio13">No</label>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row mb-1">

                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>Social Media Profile

                            </label>
                            <div class="row">
                                <a class="facebook" href="##">
                                    <div class="icon col-lg-1 col-md-1 col-1 fa-2xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625
                                            h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>
                                    </div>
                                    <div id="facebook" class="col-lg-11 col-md-11 col-11  ">
                                        <div class="form-group">
                                            <label> </label>

                                            <input id="fb_link" name="fb_link" class="form-control " type="text" placeholder="Facebook Profile " value="{{$personal->fb_link}}">
                                        </div>
                                    </div>
                                </a>
                                <a class="twitter" href="##">
                                    <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-11  " id="twitter">
                                        <div class="form-group">
                                            <label> </label>
                                            <input id="twitter_link" name="twitter_link" class="form-control " type="text" placeholder="Twitter Profile " value="{{$personal->twitter_link}}">
                                        </div>
                                    </div>
                                </a>
                                <a class="instagram" href="##">
                                    <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-11  " id="instagram">
                                        <div class="form-group">
                                            <label> </label>
                                            <input id="insta_link" name="insta_link" class="form-control " type="text" placeholder="Instagram Profile " value="{{$personal->insta_link}}">
                                        </div>
                                    </div>
                                </a>
                                <a class="linkedin" href="##">
                                    <div class="icon col-lg-1 col-md-1 col-12 fa-2xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                        </svg>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-11  " id="linkedin">
                                        <div class="form-group">
                                            <label> </label>
                                            <input id="Linkedin_link" name="Linkedin_link" class="form-control " type="text" placeholder="Linkedin Profile " value="{{$personal->Linkedin_link}}">
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row mb-1 float-right">


                    <div class="float-right">

                        <button class="btn btn-primary profile-button" type="submit">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>




</div>








<div id="map" style=" height: 500px; width:100%"> </div>




<script>
    $(document).ready(function() {
        console.log("hi")
        // $('.tab-pane').fadeOut();
        // $("#menu").fadeIn();
        // $("#amenu").click(function() {
        //     $('.tab-pane').fadeOut();
        //     $("#menu").fadeIn();
        //     $(".nav-link").removeClass('active')
        //     $(this).addClass('active')
        // });
        // $("#amenu1").click(function() {
        //     $('.tab-pane').fadeOut();
        //     $("#menu1").fadeIn();
        //     $(".nav-link").removeClass('active')
        //     $(this).addClass('active')
        // });
        // $("#amenu2").click(function() {
        //     $('.tab-pane').fadeOut();
        //     $("#menu2").fadeIn();
        //     $(".nav-link.active").removeClass('active')
        //     $(this).addClass('active')
        // });
        // $("#amenu3").click(function() {
        //     $('.tab-pane').fadeOut();
        //     $("#menu3").fadeIn();
        //     $(".nav-link.active").removeClass('active')
        //     $(this).addClass('active')
        // });
        if ($('[name="same_Correspondence_address"]').is(':checked')) {
            // Do something...
            $('#sameaddress').addClass('d-none');
        } else {
            $('#sameaddress').removeClass('d-none');
        };

        $('[name="same_Correspondence_address"]').change(function() {
            if ($(this).is(':checked')) {
                // Do something...
                $('#sameaddress').addClass('d-none');
            } else {
                $('#sameaddress').removeClass('d-none');
            };
        });
        if ($('#fb_link').val() != '') {
            $('#facebook').removeClass('d-none');
        }
        if ($('#twitter_link').val() != '') {
            $('#twitter').removeClass('d-none');
        }
        if ($('#insta_link').val() != '') {
            $('#instagram').removeClass('d-none');
        }
        if ($('#Linkedin_link').val() != '') {
            $('#linkedin').removeClass('d-none');
        }
        $('.facebook').on("click", function() {
            $('#facebook').removeClass('d-none');
        });
        $('.linkedin').on("click", function() {
            $('#linkedin').removeClass('d-none');
        });
        $('.instagram').on("click", function() {
            $('#instagram').removeClass('d-none');
        });
        $('.twitter').on("click", function() {
            $('#twitter').removeClass('d-none');
        })
    });
</script>

<!-- ......................script for google map view.................... -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX4GRZHCs7t1pkpjrRaLoTlCgqX8o46wY&libraries=places&callback=initMap&libraries=places&v=weekly" defer></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    //.......................current location......................

    $(document).ready(function() {

        "use strict";
        $('#map').hide();

        initMap();

        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: -33.8688,
                    lng: 151.2195,
                },
                zoom: 13,
            });
            const card = document.getElementById("pac-card");
            console.log(card);
            const input1 = $('#pac-input1')[0];
            const input2 = $('#pac-input2')[0];


            map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);
            const autocomplete1 = new google.maps.places.Autocomplete(
                input1); // Bind the map's bounds (viewport) property to the autocomplete object,
            const autocomplete2 = new google.maps.places.Autocomplete(input2);

            autocomplete1.bindTo("bounds", map); // Set the data fields to return when the user selects a place.
            autocomplete2.bindTo("bounds", map);

            autocomplete1.setFields([
                "address_components",
                "geometry",
                "icon",
                "name",
            ]);
            autocomplete2.setFields([
                "address_components",
                "geometry",
                "icon",
                "name",
            ]);
            const infowindow = new google.maps.InfoWindow();
            const infowindowContent = document.getElementById("infowindow-content");
            infowindow.setContent(infowindowContent);
            const marker = new google.maps.Marker({
                map,
                anchorPoint: new google.maps.Point(0, -29),
            });

        }


    });
</script>

<script>
    $(document).ready(function() {

        $(".progress-bar").css("width", "0%");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#personal_form").submit(function(e) {

            e.preventDefault(); // avoid to execute the actual submit of the form.

            var actionUrl = $(this).attr('action');
            var form = new FormData(this);

            $.ajax({
                type: "POST",
                url: actionUrl,
                cache: false,
                data: form,
                contentType: false,
                processData: false, // serializes the form's elements.
                success: function(data) {
                    console.log(data);
                    $(".progress-bar").css("width", "25%");
                    $('.tab-pane').fadeOut();
                    $("#menu1").fadeIn();
                    $(".nav-link").removeClass('active')
                    $('#amenu1').addClass('active')

                }
            });

        });

    });
</script>
<!-- ...................end...script for google map view.................... -->


@endsection