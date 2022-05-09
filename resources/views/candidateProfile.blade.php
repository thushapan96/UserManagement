@extends('layouts.layout')

@section('content')
<section class="StayConnected clearfix" style="  padding: 100px 0 100px;">
    <div class="" style=" left: 0px;">
        <div class="row">
            <div class="col-md-4 border-left" style=" left: 150px;">
                <div class="d-flex flex-column align-items-left text-left p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><br>
                    <span class="font-weight-bold  align-items-center  ">Edogaru</span><br>
                    <span class="font-weight-bold  text-left">edogaru@mail.com.my</span><br>
                    <span class="font-weight-bold text-left">Facebook Link </span><br>
                    <span class="font-weight-bold">LinkedIn Link </span><br>
                    <span class="font-weight-bold">Twitter Link </span><br>
                    <span class="font-weight-bold">Instagram Link </span><br>
                </div>
            </div>
            <div class="col-md-8 ">
                <div>
                    <div class="">
                        <div class="cardf">
                            <nav class="nav nav-pills nav-fill justify-content-left " style="cursor:pointer; text-decoration: underline !important">
                                <a class="nav-link active" style="cursor:pointer;padding: 1.15rem 3rem;color:blue !important" aria-current="page" id="amenu">personal</a>
                                <a class="nav-link " style="cursor:pointer;padding: 1.15rem 3rem;color:blue !important" id="amenu1">academy</a>
                                <a class="nav-link" style="cursor:pointer;padding: 1.15rem 3rem;;color:blue !important" id="amenu2">work</a>
                                <a class="nav-link " style="cursor:pointer;padding: 1.15rem 3rem;;color:blue !important" id="amenu3">sponsor</a>
                            </nav>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div id='menu' class='tab-pane'>
                        <!-- <div class="float-center">
                            <h4 class="float-center">Personal Information</h4>
                        </div> -->
                        <br>
                        <div class="col-md-8 card">
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> Name : </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">Ramesh</label>
                                    <label class="labels">kajan</label>
                                    <label class="labels">Roopan</label>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> Present Residential Address : </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">residential_street</label><br>
                                    <label class="labels">residential_street2</label><br>
                                    <label class="labels">residential_city</label><br>
                                    <label class="labels">residential_region</label><br>
                                    <label class="labels">residential_pincode</label><br>
                                    <label class="labels">residential_country</label><br>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> Present corosponding Address : </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">corosponding_street</label><br>
                                    <label class="labels">corosponding_street2</label><br>
                                    <label class="labels">corosponding_city</label><br>
                                    <label class="labels">corosponding_region</label><br>
                                    <label class="labels">corosponding_pincode</label><br>
                                    <label class="labels">corosponding_country</label><br>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> mobile: </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">0767064754</label><br>
                                    <label class="labels">02367064754</label><br>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> email: </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">rameshkajan@gmail.com</label><br>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> birth_date: </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">02/03/1996</label><br>
                                </div>
                            </div>
                            <br>

                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> gender: </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">male</label><br>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> is_already_apply: </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">yes</label><br>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> possible_start_date: </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">02/25/2022</label><br>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> immigration_purpose: </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">study</label><br>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels"> is_vaccinate: </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">yes</label><br>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Edit Personal Profile </button></div>
                    </div>

                    <div id='menu1' class='tab-pane'>
                        <!-- <div class="float-center">
                            <h4 class="float-center">Personal Information</h4>
                        </div> -->
                        <br>
                        <div class="col-md-8 card">
                            <br>
                            <div class="row ">
                                <div class="col-md-5">
                                    <strong class="labels"> Language Proficiency : </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">english</label>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-5">
                                    <strong class="labels"> Language Level : </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">Beginer</label>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-5">
                                    <strong class="labels"> Certified By: </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">institution</label><br>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="col-md-5">
                                    <strong class="labels"> Applicant Test Scores : </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">Applicant Test Scores</label><br>

                                </div>
                            </div>

                            <br>
                            <div class="row ">
                                <div class="col-md-5">
                                    <strong class="labels"> Valid Upto: </strong>
                                </div>
                                <div class="col-md-7">
                                    <label class="labels">02/08/2022</label><br>
                                </div>
                            </div>
                            <br>
                        </div>

                        <br>
                        <div class="col-md-8 card">
                            <br>
                            <strong class="labels">School</strong><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Name: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">GTMS/school</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Address: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">sdsdgdsg,dsdgsdg,dsgsdgg,</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Year Completion: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">02/05/2021</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Distant: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">online</label><br>
                                </div>
                            </div><br>

                        </div>
                        <br>
                        <div class="col-md-8 card">
                            <br>
                            <strong class="labels">College</strong><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Name: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">GTMS/school</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Address: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">sdsdgdsg,dsdgsdg,dsgsdgg,</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Year Completion: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">02/05/2021</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Distant: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">online</label><br>
                                </div>
                            </div><br>

                        </div>
                        <br>
                        <div class="col-md-8 card">
                            <br>
                            <strong class="labels">College</strong><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Name: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">GTMS/school</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Address: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">sdsdgdsg,dsdgsdg,dsgsdgg,</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Year Completion: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">02/05/2021</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Distant: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">online</label><br>
                                </div>
                            </div><br>

                        </div>
                        <br>

                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Edit academic Profile </button></div>
                    </div>

                    <div id='menu2' class='tab-pane'>
                        <!-- <div class="float-center">
                            <h4 class="float-center">Personal Information</h4>
                        </div> -->
                        <br>
                        <div class="col-md-8 card">
                            <br>

                            <strong class="labels">Place work 1</strong><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Designation: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels"> GTMS/school</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">No. of Years Worked: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">sdsdgdsg,dsdgsdg,dsgsdgg,</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Country: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">canada</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Work Profile: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">software engineer</label><br>
                                </div>
                            </div><br>

                        </div>
                        <br>
                        <div class="col-md-8 card">
                            <br>
                            <strong class="labels">Place work 2</strong><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Designation: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels"> GTMS/school</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">No. of Years Worked: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">sdsdgdsg,dsdgsdg,dsgsdgg,</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Country: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">canada</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Work Profile: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">software engineer</label><br>
                                </div>
                            </div><br>
                        </div>
                        <br>
                        <div class="col-md-8 card">
                            <br>
                            <strong class="labels">Place work 3</strong><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Designation: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels"> GTMS/school</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">No. of Years Worked: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">sdsdgdsg,dsdgsdg,dsgsdgg,</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Country: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">canada</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Work Profile: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">software engineer</label><br>
                                </div>
                            </div><br>
                        </div>
                        <br>
                    </div>

                    <div id='menu3' class='tab-pane'>
                        <!-- <div class="float-center">
                            <h4 class="float-center">Personal Information</h4>
                        </div> -->
                        <br>
                        <div class="col-md-8 card">
                            <br>
                            <strong class="labels">Sponsor Details</strong><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Name: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">kopi thusa kalai</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Sponsor Status: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">sdsdgdsg</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Relationship with Child : </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">kopi thusa kalai</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Mobile Number: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">kopi thusa kalai</label><br>
                                </div>
                            </div><br>

                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Email: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">kajan@gmail.com</label><br>
                                </div>
                            </div><br>

                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Address: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">sdsdg sgsdg sdgsd</label><br>
                                </div>
                            </div><br>

                        </div>
                        <br>
                        <div class="col-md-8 card">
                            <br>
                            <strong class="labels">Guadian Details</strong><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Relationship with Child: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels"> GTMS/school</label><br>
                                </div>
                            </div><br>

                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Mobile Number: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">0789876875</label><br>
                                </div>
                            </div><br>

                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Email: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">chool@gmail.com</label><br>
                                </div>
                            </div><br>
                            <div class="row ">
                                <div class="col-md-4">
                                    <strong class="labels">Address: </strong>
                                </div>
                                <div class="col-md-8">
                                    <label class="labels">seetha ayothi first</label><br>
                                </div>
                            </div><br>


                        </div>
                        <br>

                    </div>
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

@endsection