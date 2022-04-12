@extends('layouts.layout')

@section('content')


<!-- Subscribe & Stay Connected. Start -->
<section class="StayConnected clearfix">
    <div class="container">
        <h1>Candidate Registation - Work Experience</h1>

        <div class="whiteBox clearfix">

            <div id="newRow">
                <h6>Place of Work </h6>
                <!--div class="news-title">You have questions, let's have a conversation </div-->
                <div class="row mt-4 custom-box">

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Designation
                            </label>
                            <input class="form-control " type="text" placeholder="Enter Designation">

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Country
                            </label>
                            <input class="form-control " type="text" placeholder="Choose Country">

                        </div>
                    </div>


                </div>

                <hr>

                <div class="row mt-4 custom-box">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>No. of Years Worked
                            </label>
                            <input class="form-control " type="text" placeholder="Enter number of years worked in the company">

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>
                                Attach Experience Certificate
                            </label>
                            <input class="form-control" type="file" id="upload-images" name="image" accept="image/*">
                        </div>
                    </div>


                </div>

                <hr>
                <div class="row mt-4 custom-box">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Attach Salary Slip
                            </label>
                            <input class="form-control " type="file" id="upload-images" name="image" accept="image/*">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>
                                Attach Offer Letter/Recommendation Letter
                            </label>
                            <input class="form-control " type="file" id="upload-images" name="image" accept="image/*">
                        </div>
                    </div>

                </div>
                <hr>

                <div class="row mt-4 custom-box">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                            <label>Work Profile
                            </label>
                            <textarea style="width:100%;" rows="5"></textarea>
                        </div>
                    </div>
                </div>

                <hr style="height:12px;">

            </div>

            <button id="addRow" type="button" class="btn crew-btn">Add WorkPlace </button>
            <div class="float-right">
           
                <a href="{{route('candidate_sponsor')}}">   <button type="submit" class="client-btn">Submit And Next </button></a>
            </div>
        </div>


       


    </div>


    </div>
    <script>
        $(document).ready(function() {

        });
    </script>

    <!-- ......................script for google map view.................... -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        //.......................current location......................

        $(document).ready(function() {
            $("#addRow").click(function() {

                html = `
                <div id="inputFormRow">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-12">
            <h6>Place of Work </h6>
        </div>
        <div class="col-lg-2 col-md-2 col-12">
            <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
        </div>
    </div>
    <!--div class="news-title">You have questions, let's have a conversation </div-->
    <div class="row mt-4 custom-box">

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>Designation
                </label>
                <input class="form-control " type="text" placeholder="Enter Designation">

            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>Country
                </label>
                <input class="form-control " type="text" placeholder="Choose Country">

            </div>
        </div>

    </div>

    <hr>

    <div class="row mt-4 custom-box">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>No. of Years Worked
                </label>
                <input class="form-control " type="text" placeholder="Enter number of years worked in the company">

            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>
                    Attach Experience Certificate
                </label>
                <input class="form-control" type="file" id="upload-images" name="image" accept="image/*">
            </div>
        </div>


    </div>

    <hr>
    <div class="row mt-4 custom-box">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>Attach Salary Slip
                </label>
                <input class="form-control " type="file" id="upload-images" name="image" accept="image/*">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>
                    Attach Offer Letter/Recommendation Letter
                </label>
                <input class="form-control " type="file" id="upload-images" name="image" accept="image/*">
            </div>
        </div>

    </div>
    <hr>

    <div class="row mt-4 custom-box">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="form-group">
                <label>Work Profile
                </label>
                <textarea style="width:100%;" rows="5"></textarea>
            </div>
        </div>
    </div>
    
    <hr style="height:12px;">
    
</div>

<br>
                `

                $('#newRow').append(html);
            });

            // remove row
            $(document).on('click', '#removeRow', function() {
                $(this).closest('#inputFormRow').remove();
            });


        });
    </script>
    <!-- ...................end...script for google map view.................... -->
</section>


@endsection