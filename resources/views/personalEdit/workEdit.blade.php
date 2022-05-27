<!-- Subscribe & Stay Connected. Start -->
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
<section class="StayConnected clearfix" style=" padding: 100px 0 100px;">
    <div class="container ">

        <h1>Candidate Registation - Work Experience</h1>
        <form id="work_form" action="{{route('profileWorkupdate',['id' => $userId ])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="whiteBox clearfix">

                <div id="newRow">
                    @if($work)
                    @foreach($work as $key => $row)
                    <div id="inputFormRow">

                        <h6>Place of Work</h6>
                        <!--div class="news-title">You have questions, let's have a conversation </div-->

                        <div class="row mt-4 custom-box">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Designation
                                    </label>
                                    <input class="form-control " type="text" placeholder="Enter Designation" name="designation[]" value="{{$row->designation}}" required>
                                    <input type="text" name="workId[]" value="{{$row->id}}" hidden>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Country
                                    </label>
                                    <input class="form-control " type="text" placeholder="enter Country" name="country[]" value="{{$row->country}}">

                                </div>
                            </div>

                        </div>

                        <div class="row mt-4 custom-box">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>No. of Years Worked
                                    </label>
                                    <input class="form-control " type="text" placeholder="Enter number of years worked in the company" name="Year_completion[]" value="{{$row->Year_completion}}">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>
                                        Attach Experience Certificate
                                    </label>
                                    <a href="{{url('files/'.$row->attach_experience_certificate)}}" target="_blank" style=" text-decoration: underline;">Old Attachment</a>
                                    <input class="form-control" type="file" value="" name="attach_experience_certificate[]" value="{{$row->attach_experience_certificate}}">
                                </div>
                            </div>


                        </div>


                        <div class="row mt-4 custom-box">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Attach Salary Slip
                                    </label>
                                    <a href="{{url('files/'.$row->attach_salary_slip)}}" target="_blank" style=" text-decoration: underline;">Old Attachment</a>
                                    <input class="form-control " type="file" name="attach_salary_slip[]" value="{{$row->attach_salary_slip}}">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>
                                        Attach Offer/Recommendation Letter
                                    </label>
                                    <a href="{{url('files/'.$row->attach_offer_letter)}}" target="_blank" style=" text-decoration: underline;">Old Attachment</a>
                                    <input class="form-control " type="file" name="attach_offer_letter[]" value="{{$row->attach_offer_letter}}">
                                </div>
                            </div>

                        </div>


                        <div class="row mt-4 custom-box">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Work Profile
                                    </label>
                                    <textarea style="width:100%;" rows="5" name="work_profile_letter[]" value="{{$row->work_profile_letter}}">{{$row->work_profile_letter}}</textarea>
                                </div>
                            </div>
                        </div>

                        <button class=" closebtn client-btn" id="removeRow"><a style="color:white"><i class="fa-solid fa-minus"></i> Remove</a></button>
                        <br>
                        <br>
                        <hr>

                    </div>
                    @endforeach
                    @endif
                </div>

                <button id="addRow" type="button" class="add-btn"><i class="fa-solid fa-plus"></i>Add WorkPlace </button>
                <br>
                <div class="float-right">
                    <a> <button type="submit" class="client-btn">Update</button></a>
                </div>
            </div>
        </form>
    </div>
    <!-- ......................script for google map view.................... -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        //.......................current location......................

        $(document).ready(function() {
            var count = 1;
            $("#addRow").click(function() {
                count = count + 1;
                html = `
                <div id="inputFormRow">
                  
        <div class="col-lg-10 col-md-10 col-12">
            <h6>Place of Work   </h6>
        </div>
       
    
    <!--div class="news-title">You have questions, let's have a conversation </div-->
    <div class="row mt-4 custom-box">

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>Designation
                </label>
                <input class="form-control " type="text" placeholder="Enter Designation" name="designation[]" required>
                <input type="text" name="workId[]" value="" hidden>

            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>Country
                </label>
                <input class="form-control " type="text" placeholder="Enter Country" name="country[]">

            </div>
        </div>

    </div>



    <div class="row mt-4 custom-box">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>No. of Years Worked
                </label>
                <input class="form-control " type="text" placeholder="Enter number of years worked in the company" name="Year_completion[]">

            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>
                    Attach Experience Certificate
                </label>
                <input class="form-control" type="file" id="" name="attach_experience_certificate[]">
            </div>
        </div>


    </div>

   
    <div class="row mt-4 custom-box">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>Attach Salary Slip
                </label>
                <input class="form-control " type="file" id="" name="attach_salary_slip[]" value="">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>
                    Attach Offer Letter/Recommendation Letter
                </label>
                <input class="form-control " type="file" id="" name="attach_offer_letter[]">
            </div>
        </div>

    </div>
  

    <div class="row mt-4 custom-box">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="form-group">
                <label>Work Profile
                </label>
                <textarea style="width:100%;" rows="5" name="work_profile_letter[]"></textarea>
            </div>
        </div>
    </div>
 
        <button  class=" closebtn client-btn" id="removeRow"><a style="color:white"><i class="fa-solid fa-minus"></i> Remove</a></button>
        <br><br>
        <hr style="height:12px;">
     </div> `

                $('#newRow').append(html);
            });

            // remove row
            $(document).on('click', '#removeRow', function() {
                count = count - 1;
                $(this).closest('#inputFormRow').remove();
            });

        });
    </script>
    <!-- ...................end...script for google map view.................... -->

</section>


@endsection