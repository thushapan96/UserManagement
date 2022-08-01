@extends('layouts.layoutss')

@section('content')

<style>
    .whiteBox:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }
</style>
<!-- Subscribe & Stay Connected. Start -->
@if (session()->has('success'))
<script>
    Swal.fire(
        'Success!',
        'Successfully submitted ',
        'success'
    )
</script>
@endif

@if($message = Session::get('registermessage'))
<script>
    Swal.fire(
        'Success',
        'Welcome !',
        'success'
    )
</script>
@endif
<section>
        <div class="col-md-12" style="margin-left:auto !important;margin-right:auto !important">
            
            <div class=" " style="margin-left:auto !important;margin-right:auto !important;line-height :30px;">
            <h3 style="text-align:center">
School Education in Canada </h3> 
            <div class='uk-card col-md-11 p-2 ' style="margin-left:auto !important;margin-right:auto">
                        <div class="uk-card-body p-5 bg-light sc-padding-medium">            



<h5>Primary (or elementary) school</h5>

Primary education for Age Group: 5 to 12 years old </br>

<h5>Preschool (Optional) Kindergarten</h5>
Grade 1 toh5 </br>

<h5>Secondary (or High) School</h5> 
Secondary education for Age Group: for 12 to 18 years old. Grade 7 to 12 </br>

<h5>
Post-secondary</h5>

    </br>

    <h6>
Type of School System: provide option to select </br>
Free public schools </br>
Paid private schools </br>
At-home education English or French schools </br></br>
What are School boards? </br></br>
School boards are run by publicly elected officials called “trustees.”  They’re in charge of maintaining school buildings, managing staff, general administration, student enrolment
School boards manage all the schools within a certain local area. Provide select options. School districts
School divisions </br>
District education councils

    </br></br>

<h5> Types of post-secondary schools In Canada, </h5>
<h6>There are 3 different types of Post-Secondary schools  </h6>
Universities</br>
Colleges Institutes</br>
At most post-secondary schools, </br>
<h6> school year is divided into 2 main terms and an optional summer term.</h6>
Term 1: September to December</br>
Term 2: January to April</br>
Optional summer term: May to August</br>
Each province and territory make sure each school and its programs meet a certain set of standards. Schools aren’t officially recognized until they’re certified.</br>
A recognized school can grant: </br>Degrees</br>
Diplomas</br>
Certificates</br>
Other qualifications</br>


            </div>
            <div class="float-right">
                                    <a  href="{{route('dashboard.view.school')}}" class="client-btn uk-button uk-button-primary m-5">View Schools</a>
                                </div>
        </div> 
            </div></div>
           
</section>






@endsection