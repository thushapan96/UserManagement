<h1>Candidate Registation - Work Experience</h1>

<div class="whiteBox clearfix">

    <div id="newRow">
        <h6>Place of Work 1 </h6>
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
        

        <div class="row mt-4 custom-box">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="form-group">
                    <label>Work Profile
                    </label>
                    <textarea style="width:100%;" rows="5"></textarea>
                </div>
            </div>
        </div>

        <hr>

    </div>

    <button id="addRow" type="button" class="add-btn"><i class="fa-solid fa-plus"></i>Add WorkPlace </button>
    <br>
    <div class="float-right">

        <a href="{{route('candidate_sponsor')}}"> <button type="submit" class="client-btn">Submit And Next
            </button></a>
    </div>
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
    <div class="row">
        <div class="col-lg-10 col-md-10 col-12">
            <h6>Place of Work  ${count} </h6>
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
  

    <div class="row mt-4 custom-box">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="form-group">
                <label>Work Profile
                </label>
                <textarea style="width:100%;" rows="5"></textarea>
            </div>
        </div>
    </div>
 
        <button  class=" closebtn client-btn" id="removeRow"><a style="color:white"><i class="fa-solid fa-minus"></i> Remove</a></button>
        <br><br>
        <hr style="height:12px;">
     </div>
    
  
    

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