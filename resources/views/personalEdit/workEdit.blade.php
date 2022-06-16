<!-- Subscribe & Stay Connected. Start -->
@extends('layouts.layoutss')

@section('content')
<!-- Subscribe & Stay Connected. Start -->
<div class="container ">

    <div class="tab-pane  " style="width:80%;margin-left:5% !important">
        <h6 style="text-align:center">edit Work Place Information </h6><br>
        <div class="uk-card ">
            <div class="uk-card-body sc-padding-medium">
                <form id="work_form" action="{{route('profileWorkupdate',['id' => $userId ])}}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div id="newRow">
                        @if($work)
                        @foreach($work as $key => $row)

                        <div id="inputFormRow">
                            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                                <h6 class="labels" style="text-decoration: underline">Work Place {{$key+1}}</h6>

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
                                            <a href="{{url('files/'.$row->attach_experience_certificate)}}" target="_blank" style=" text-decoration: underline;">{{$row->attach_experience_certificate}}</a>
                                            <input class="form-control" type="file" value="" name="attach_experience_certificate[]" value="{{$row->attach_experience_certificate}}">
                                        </div>
                                    </div>


                                </div>


                                <div class="row mt-4 custom-box">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Attach Salary Slip
                                            </label>
                                            <a href="{{url('files/'.$row->attach_salary_slip)}}" target="_blank" style=" text-decoration: underline;">{{$row->attach_salary_slip}}</a>
                                            <input class="form-control " type="file" name="attach_salary_slip[]" value="{{$row->attach_salary_slip}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>
                                                Attach Offer/Recommendation Letter
                                            </label>
                                            <a href="{{url('files/'.$row->attach_offer_letter)}}" target="_blank" style=" text-decoration: underline;">{{$row->attach_offer_letter}}</a>
                                            <input class="form-control " type="file" name="attach_offer_letter[]" value="{{$row->attach_offer_letter}}">
                                        </div>
                                    </div>

                                </div>


                                <div class="row mt-4 custom-box">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Work Profile
                                            </label>
                                            <textarea style="width:100%;"  name="work_profile_letter[]" value="{{$row->work_profile_letter}}">{{$row->work_profile_letter}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 custom-box ">
                                    <div class="col-lg-12 col-md-12 col-12 ">
                                        <button type="button" class=" closebtn client-btn uk-button uk-button-danger" id="removeRow" style="background:#bf0010 !important;float:right;"><a style="color:white;"><i class="fa fa-solid fa-minus"></i> Remove</a></button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>


                        <br>
                        <!-- @if(!$loop->last)
                            <br>
                            @endif -->
                        @endforeach
                        @endif
                    </div>

                    <button id="addRow" type="button" class="add-btn uk-button uk-button-primary"><i class="fa fa-solid fa-plus"></i>Add WorkPlace </button>

                    <div class="float-right">
                        <a class="sc-button sc-button-custom md-bg-grey-600 sc-js-button-wave-light waves-effect waves-button waves-light" href="{{route('personalProfile')}}">Cancel</a>
                        &nbsp;&nbsp;
                        <button type="submit" class="client-btn uk-button uk-button-primary">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- ......................script for google map view.................... -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    //.......................current location......................

    $(document).ready(function() {
        $("textarea").each(function(textarea) {
            $(this).height($(this)[0].scrollHeight);
            $(this).height();
        });
        var count = 1;
        $("#addRow").click(function() {
            count = count + 1;
            html = `
           
                <div id="inputFormRow">
                <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
        <div class="col-lg-10 col-md-10 col-12">
            <h6>New Work Place   </h6>
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
    <div class="float-right">
        <button type="button" class="closebtn client-btn btn btn-danger" id="removeRow" style="background:#bf0010 !important"><a style="color:white"><i class="fa fa-solid fa-minus"></i> Remove</a></button>
        </div>
        <br>
       
     </fieldset><br></div> 
     `

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



@endsection