@extends('layouts.layout')

@section('content')

<!-- Subscribe & Stay Connected. Start -->
<section class="StayConnected clearfix">
    <div class="container">
        <h1>Register as a {{request()->query('role')}}</h1>
        @if($errors->any())
    {{ implode('', $errors->all(':message')) }}
@endif
        <div class="whiteBox regas clearfix">
            <!--div class="news-title">
   Join our mailing list to get the latest news, <br>special offers and invitations to exclusive events.
   </div-->

            <!-- <div class="row">
   <div class="col-lg-4 col-md-4 col-12">
     <div class="form-group"><input class="form-control" type="text" placeholder="User Name"></div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
     <div class="form-group"><input class="form-control" type="text" placeholder="First Name"></div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
     <div class="form-group"><input class="form-control" type="text" placeholder="Last Name"></div>
    </div>
    
    
   </div> -->
            <form action="{{route('register')}}" method="POST"  >
                @csrf
                <div class="row">


                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group"><input class="form-control" name="email" value="{{old('email') ?? ''}}" type="email" placeholder="Email Address">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <select name="country"  class="form-control" placeholder="">
                                <option>Canada</option>
                            </select>
                        </div>
                    </div>
                    @if(request()->query('role') == "candidate")


                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group"><input class="form-control" name="country_of_citizenship" value="{{old('country_of_citizenship')}}" type="text"
                                placeholder="Country of Citizenship"></div>
                    </div>
                    @endif


                    @if(request()->query('role') == "Service Provider")

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <select name="service_type" class="form-control" id="service" placeholder="" >
                                <option>Select Service Type</option>
                                <option value="Consultation">Consultation</option>
                                <option value="Institution">Institution</option>
                                <option value="Business">Business</option>

                            </select>
                        </div>
                    </div>

                    @endif
                    @if(request()->query('role') == "candidate")

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <select name="service_type" class="form-control" id="service" placeholder="hi">
                                <option value="">Select Service</option>
                                <option value="single">Single</option>
                                <option value="multiple">Multiple</option>
                            </select>
                        </div>
                    </div>
                    @endif

                    @if(request()->query('role') == "Service Provider")

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <select class="form-control" id="typeservice" name="service" placeholder="">
                                <option>Join As</option>
                                <option data-name="/register/institude?service=School" value="School">School</option>
                                <option data-name="/register/institude?service=College" value="College">College</option>
                                <option data-name="/register/institude?service=University" value="University">University
                                </option>
                                <option data-name="/register/consultant?service=RCIC Consultant"
                                    value="RCIC Consultant">RCIC Consultant</option>



                                <option data-name="/register/consultant?service=Immigration Lawyer/Attorney"
                                    value="Immigration Lawyer/Attorney">Immigration Lawyer/Attorney

                                </option>
                                <option data-name="/register/business?service=Chartered Accountant"
                                    value="Chartered Accountant">Chartered Accountant
                                </option>


                            </select>
                        </div>
                    </div>
                    @endif

                </div>

                <div class="row custom-box sd singleCandidate d-none ">

                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customradio" name="service_single" value="study">
                            <label class="custom-control-label" for="customradio">Study </label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customradio1" name="service_single" value="migration">
                            <label class="custom-control-label" for="customradio1">Migration </label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-2 mb-3">
                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input " id="customradio2" name="service_single" value="work">
                            <label class="custom-control-label" for="customradio2">Work</label>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-2 mb-3">
                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input " id="customradio3" name="service_single" value="business">
                            <label class="custom-control-label" for="customradio3">Business</label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-2 mb-3">
                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input " id="customradio4" name="service_single" value="visa">
                            <label class="custom-control-label" for="customradio4">Visa</label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-2 mb-3">
                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input " id="customradio5" name="service_single" value="others">
                            <label class="custom-control-label" for="customradio5">Others</label>
                        </div>
                    </div>
                </div>

                <div class="row custom-box sd singleConsultant d-none">

                    <div class="col-lg-4 col-md-4 col-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customradio" name="service_multi" value="rcic_consultant">
                            <label class="custom-control-label" for="customradio">RCIC Consultant </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customradio1" name="service_multi" value="immigration_lawyer">
                            <label class="custom-control-label" for="customradio1">Immigration Lawyer </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4 mb-3">
                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input " id="customradio2" name="service_multi" value="attorney">
                            <label class="custom-control-label" for="customradio2">Attorney</label>
                        </div>
                    </div>

                </div>

                <div class="row custom-box sd singleInstitution d-none">

                    <div class="col-lg-4 col-md-4 col-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customradio" name="service_multi" value="school">
                            <label class="custom-control-label" for="customradio">School </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customradio1" name="service_multi" value="college">
                            <label class="custom-control-label" for="customradio1">College </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4 mb-3">
                        <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input " id="customradio2" name="service_multi" value="university">
                            <label class="custom-control-label" for="customradio2">University</label>
                        </div>
                    </div>



                </div>

                <div class="row custom-box sd singleBusiness d-none">

                    <div class="col-lg-6 col-md-6 col-6">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customradio" name="service_multi" value="chartered_accountant">
                            <label class="custom-control-label" for="customradio">Chartered Accountant </label>
                        </div>
                    </div>
                </div>

                <div class="row custom-box sd multipleCandidate d-none">

                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="services[]"
                                value="service_multi_study">
                            <label class="custom-control-label" for="customCheck">Study </label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1"
                                name="services[]" value="service_multi_migration">
                            <label class="custom-control-label" for="customCheck1">Migration </label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-2 mb-3">
                        <div class="custom-control custom-checkbox ">
                            <input type="checkbox" class="custom-control-input " id="customCheck2"
                                name="services[]" value="service_multi_work">
                            <label class="custom-control-label" for="customCheck2">Work</label>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-2 mb-3">
                        <div class="custom-control custom-checkbox ">
                            <input type="checkbox" class="custom-control-input " id="customCheck3"
                                name="services[]" value="service_multi_business">
                            <label class="custom-control-label" for="customCheck3">Business</label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-2 mb-3">
                        <div class="custom-control custom-checkbox ">
                            <input type="checkbox" class="custom-control-input " id="customCheck4"
                                name="services[]" value="service_multi_visa">
                            <label class="custom-control-label" for="customCheck4">Visa</label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-2 mb-3">
                        <div class="custom-control custom-checkbox ">
                            <input type="checkbox" class="custom-control-input " id="customCheck5"
                                name="services[]" value="service_multi_others">
                            <label class="custom-control-label" for="customCheck5">Others</label>
                        </div>
                    </div>
                </div>

                <div class="row custom-box sd multipleConsultant d-none">

                    <div class="col-lg-4 col-md-4 col-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="service_multi_rcic"
                                value="1">
                            <label class="custom-control-label" for="customCheck">RCIC Consultant </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1"
                                name="is_flexible_date" value="service_multi_immigration_lawyer">
                            <label class="custom-control-label" for="customCheck1">Immigration Lawyer </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4 mb-3">
                        <div class="custom-control custom-checkbox ">
                            <input type="checkbox" class="custom-control-input " id="customCheck2"
                                name="is_flexible_date" value="service_multi_attorney">
                            <label class="custom-control-label" for="customCheck2">Attorney</label>
                        </div>
                    </div>


                </div>

                <div class="row custom-box sd multipleInstitution d-none">

                    <div class="col-lg-4 col-md-4 col-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="service_multi_school"
                                value="1">
                            <label class="custom-control-label" for="customCheck">School </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1"
                                name="is_flexible_date" value="service_multi_college">
                            <label class="custom-control-label" for="customCheck1">College </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4 mb-3">
                        <div class="custom-control custom-checkbox ">
                            <input type="checkbox" class="custom-control-input " id="customCheck2"
                                name="is_flexible_date" value="service_multi_university">
                            <label class="custom-control-label" for="customCheck2">University</label>
                        </div>
                    </div>


                </div>

                <div class="row custom-box sd multipleBusiness d-none">

                    <div class="col-lg-6 col-md-6 col-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="is_flexible_date"
                                value="1">
                            <label class="custom-control-label" for="customCheck">Chartered Accountant </label>
                        </div>
                    </div>



                </div>


                <dic class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group"><input class="form-control" name="password" type="password" placeholder="New Password">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group"><input class="form-control" name="password_confirmation" type="password"
                                placeholder="Confirm Password">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-6">
                        <button type="submit" class="reg-btn"><a href="{{route('login')}}"
                                style="color:white">Login</a></button>
                    </div>

                    <div class="col-lg-6 col-md-6 col-6">
                        <button type="submit" class="client-btn">Submit</button>
                    </div>

            </form>


        </div>


    </div>

    <div class="great-title">You Are Welcome !</div>
    @if(request()->query('role') == "candidate")

    <p class="great-title">Candidate can register to avail services for Migration, Study, Work, Visa and Business
        @endif
    </p>



    </div>
</section>


<script>
$(document).ready(function() {


    var type;
    var service;
    $(document).on('change', '#type', function() {
        type = $('#type option:selected').val();

        if (type == 'Join As') {
            $("#service").prop('disabled', 'disabled');
        } else {
            $("#service").removeAttr("disabled");
        }

        myFun();

    });

    $(document).on('change', '#service', function() {
        service = $('#service option:selected').val();

        if (service == 'Select Service') {
            $('.singleCandidate').addClass('d-none');
            $('.multipleCandidate').addClass('d-none');

        }
        if (service == 'single') {
            $('.singleCandidate').removeClass('d-none');
            $('.multipleCandidate').addClass('d-none');


        }
        if (service == 'multiple') {
            $('.singleCandidate').addClass('d-none');
            $('.multipleCandidate').removeClass('d-none');

        }
        // myFun();

    });

    function myFun() {

        console.log(type);
        console.log(service);

        var cls = service + type;
        console.log(cls);
        $('.sd').addClass('d-none');
        $('.' + cls).removeClass('d-none');





    };

    $(document).on('change', '#typeservice', function() {

        var url = $('#typeservice option:selected').data('name');


        console.log(url);
        $("#servicesubmit").attr("href", url)


    });



});
</script>
@endsection