<!-- Subscribe & Stay Connected. Start -->


<h6>Candidate Registration - Academic</h6>


<form id="academy_form" action="{{route('candidate_academy_add')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <!--div class="news-title">You have questions, let's have a conversation </div-->
    <div class="row mt-4 custom-box">

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>Language Proficiency

                </label>
                <select name="language_proficiency" class="form-control">
                    <option value="English">English</option>
                    <option value="Tamil">Tamil</option>
                </select>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>Level

                </label>
                <select name="language_level" class="form-control">
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Competent">Competent</option>
                    <option value="Expert">Expert</option>
                </select>
            </div>
        </div>

    </div>

    <div class="row mt-4 custom-box">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="">
                <label>
                    Certified By
                </label>
                <input type="text" class="form-control" name="language_certified_by">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="">
                <label>
                    Attachment
                </label>
                <input type="file" class="form-control" name="language_attachment">
            </div>
        </div>
    </div>
    <hr>
    <div class="row mt-4 custom-box">
        <div class="col-lg-3 col-md-3 col-12">
            <div class="form-group">
                <label>Applicant Test Scores</label>
                <select class="form-control" id="" name="applicant_test_name[]">
                    <option value="">Select</option>
                    <option value="IELTS">IELTS</option>
                    <option value="TOFEL">TOFEL</option>
                    <option value="CELPIP">CELPIP</option>
                    <option value="GRE">GRE</option>
                    <option value="PTE">PTE</option>
                    <option value="SAT">SAT</option>
                    <option value="GMAT">GMAT</option>
                    <option value="HSEiT">HSEiT</option>
                    <option value="LSAT">LSAT</option>


                </select>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
            <div class="form-group">
                <label>If Other Applicant</label>
                <input class="form-control " type="text" name="applicant_test_name[]">
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12 ">
            <div class="form-group">
                <label> Valid Upto
                </label>
                <input class="form-control " name="test_valid_upto" type="date" placeholder="Valid Upto">
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12 ">
            <div class="form-group">
                <label>Attachment
                </label>
                <input type="file" class="form-control" name="test_attachment">
            </div>
        </div>
    </div>
    <hr>
    <u1 data-uk-tab="animation: uk-animation-scale-up" style="cursor:pointer;margin-left:auto !important;margin-right:auto !important">
        <li class="nav-linkk " id="amenu"><a style="cursor:pointer;padding: 0.5rem 1.8rem;" aria-current="page">School </a></li>
        <li class="nav-linkk " id="amenu1"><a style="cursor:pointer;padding: 0.5rem 1.8rem;">College </a></li>
        <li class="nav-linkk " id="amenu2"><a style="cursor:pointer;padding: 0.5rem  1.8rem;">PostGraduation</a></li>
        <li class="nav-linkk" id="amenu3"><a style="cursor:pointer;padding: 0.5rem  1.8rem;">OtherQualification</a></li>

    </u1>
    <u1 class="uk-switcher" class="">
        <li id='menu' class='tab-pane '>
            <div id="addschoolrow">

            </div>
            <div class="col-lg-12 col-md-12 mt-2 col-12">
                <button type="button" class="add-btn uk-button uk-button-primary" id="addschoolbtn"> + Add
                    School</button>

            </div>
        </li>
        <li id='menu1' class='tab-pane '>
            <div id="addcollegerow">

            </div>
            <div class="col-lg-12 col-md-12  mt-2 col-12">
                <button type="button" class="add-btn  uk-button uk-button-primary" id="collegebtn"> + Add
                    College</button>
            </div>
        </li>
        <li id='menu2' class='tab-pane '>
            <div id="addpgrow">

            </div>
            <div class="col-lg-12 col-md-12 mt-2 col-12">
                <button type="button" class="add-btn uk-button uk-button-primary" id="pgbtn"> + Add
                    PostGraduation</button>
            </div>
        </li>
        <li id='menu3' class='tab-pane '>

            <div id="addotherrow">
            </div>
            <div class="col-lg-12 col-md-12 mt-2 col-12">
                <button type="button" class="add-btn uk-button uk-button-primary" id="otherbtn"> + Add
                    OtherQualification</button>
            </div>
        </li>
    </u1>
    <hr>
    <div class="float-right">
        <div class="col-lg-12 col-md-12 col-12">
            <button type="submit" id="submit2" class="client-btn uk-button uk-button-primary">
                <div id="loading2">Submit
                    And
                    Next
                </div>
            </button>
        </div>
    </div>
</form>












<!-- ......................script for google map view.................... -->





<script>
    $(document).ready(function() {

        // for school
        $("#addschoolbtn").click(function() {

            var html = '';

            html = `<div  id="addschoolform"> 
                <div class="col-lg-12 col-md-12 col-12 container addschool mt-4" >
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>School Name</label>
                                <input class="form-control " name="name[]" type="text" >
                                <input class="form-control " hidden name="type[]" value="school" type="text" >
                                <input class="form-control " hidden name="tech[]" value="NA" type="text" >

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>School Address </label>
                                <input class="form-control" name="address[]"  type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Year Completed </label>
                                <input class="form-control " name="year_completed[]" type="date" >
                            </div>
                        </div>

                    </div>
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Applicable ECA Validity

                                </label>
                                <select name="eca[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>

                                </select>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Distant

                                </label>
                                <select name="distant[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="distant">distant</option>
                                    <option value="regular">regular</option>
                                    <option value="online">online</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Country</label>
                                <input name="country[]" class="form-control " type="text" >
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12">

                            <div class="">
                                <label>
                                    <p>Other Attachment </p>
                                </label>
                                <input type="file"   class="form-control" name="attachment[]" >
                            </div>

                        </div>
                          <div class="col-lg-4 col-md-4 col-12">
                            <br><br>
                            <button  class=" closebtn client-btn client-btn uk-button uk-button-danger" id="removeschool"><a style="color:white"> - Remove</a></button>

                        </div>

                    </div>
                </div>
                   <hr>
                    </div>
                            
                                `

            $('#addschoolrow').append(html);
        });

        // remove row
        $(document).on('click', '#removeschool', function() {
            $(this).closest('#addschoolform').remove();
        });

        // college

        $("#collegebtn").click(function() {

            var html = '';

            html = `<div  id="addschoolform">
            <div class="container addcollege mt-4">
               
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>College Name</label>
                                <input class="form-control " name="name[]" type="text" >
                                <input class="form-control " hidden name="type[]" value="college" type="text" >
                                <input class="form-control " hidden name="tech[]" value="NA" type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>College Address </label>
                                <input class="form-control " name="address[]" type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>PG/PHD Year Completed </label>
                                <input class="form-control " name="year_completed[]" type="date" >
                            </div>
                        </div>

                    </div>
                    <div class="row custom-box">

                    <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Applicable ECA Validity

                                </label>
                                <select name="eca[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Distant

                                </label>
                                <select name="distant[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="distant">distant</option>
                                    <option value="regular">regular</option>
                                    <option value="online">online</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Country</label>
                                <input name="country[]" class="form-control " type="text" >
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12">

                            <div class="">
                                <label>
                                    <p>Other Attachment </p>
                                </label>
                                <input type="file"  class="form-control" name="attachment[]" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <br><br>
                            <button type="submit" class=" closebtn client-btn uk-button uk-button-danger" id="removecollege"><a 
                            style="color:white"> - Remove</a></button>
                        </div>

                    </div>
                   
               <hr>
            </div></div>
        `

            $('#addcollegerow').append(html);
        });

        // remove row
        $(document).on('click', '#removecollege', function() {
            $(this).closest('#addschoolform').remove();
        });

        // Pg

        $("#pgbtn").click(function() {

            var html = '';

            html = `<div  id="addpgform">  
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>PG Name</label>
                                <input class="form-control " name="name[]" type="text" >
                                <input class="form-control " hidden name="type[]" value="PG" type="text" >
                                <input class="form-control " hidden name="tech[]" value="NA" type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>PG Address </label>
                                <input class="form-control " name="address[]" type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Year Completed </label>
                                <input class="form-control " name="year_completed[]" type="date" >
                            </div>
                        </div>

                    </div>
                    <div class="row custom-box">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Applicable ECA Validity

                                </label>
                                <select name="eca[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Distant

                                </label>
                                <select name="distant[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="distant">distant</option>
                                    <option value="regular">regular</option>
                                    <option value="online">online</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Country</label>
                                <input name="country[]" class="form-control " type="text" >
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12">

                            <div class="">
                                <label>
                                    <p>Other Attachment </p>
                                </label>
                                <input type="file"  class="form-control" name="attachment[]" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <br><br>
                            <button type="submit" class=" closebtn client-btn client-btn uk-button uk-button-danger" id="removepg"><a  style="color:white">
                            - Remove</a></button>
                         </div>

                    </div>

                   
                    
                           <hr>
                    </div>`

            $('#addpgrow').append(html);
        });

        // remove row
        $(document).on('click', '#removepg', function() {
            $(this).closest('#addpgform').remove();
        });

        // other


        $("#otherbtn").click(function() {

            var html = '';

            html = `
            <div  id="addpgform">
                    <div class="row custom-box">

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="form-group">
                                <label>Technical Qualifications</label>
                                <input class="form-control " name="tech[]" type="text" >
                                <input class="form-control " hidden name="type[]" value="other" type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Name of Institute </label>
                                <input class="form-control " name="name[]" type="text" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="form-group">
                                <label>Institute Address </label>
                                <input class="form-control " name="address[]" type="text" >
                            </div>
                        </div>
                       

                    </div>
                    <div class="row custom-box">
                       <div class="col-lg-3 col-md-3 col-12 ">
                            <div class="form-group">
                                <label>Year Completed </label>
                                <input class="form-control " name="year_completed[]" type="date" >
                            </div>
                        </div>
                           <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Applicable ECA Validity

                                </label>
                                <select name="eca[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>

                                </select>
                            </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <label>Distant

                                </label>
                                <select name="distant[]" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="distant">distant</option>
                                    <option value="regular">regular</option>
                                    <option value="online">online</option>

                                </select>
                            </div>
                           </div>
                        <div class="col-lg-3 col-md-3 col-12 ">
                            <div class="form-group">
                                <label>Country</label>
                                <input class="form-control " name="country[]" type="text" >
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12">

                            <div class="">
                                <label>
                                    <p>Other Attachment </p>
                                </label>
                                <input type="file"  class="form-control" name="attachment[]" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <br><br>
                            <button type="submit" class=" closebtn client-btn client-btn uk-button uk-button-danger" id="removeother"><a 
                            style="color:white"> - Remove</a></button>
                        </div>
                    </div>

                    

               <hr></div>`

            $('#addotherrow').append(html);
        });

        // remove row
        $(document).on('click', '#removeother', function() {
            $(this).closest('#addpgform').remove();
        });

    });
</script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#academy_form").submit(function(e) {

            e.preventDefault(); // avoid to execute the actual submit of the form.

            var actionUrl = $(this).attr('action');
            var form = new FormData(this);
            $("#loading2").append(' <i class="fa fa-refresh fa-spin"></i>');

            $.ajax({
                type: "POST",
                url: actionUrl,
                cache: false,
                data: form,
                contentType: false,
                processData: false, // serializes the form's elements.
                success: function(data) {
                    console.log(data);
                    if (data.errors) {
                        console.log("hiiiiii");
                        $('.alert-danger').show();
                        $('.alert-danger').html('');

                        jQuery.each(data.errors, function(key, value) {
                            console.log(value);
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append('<p>' + value + '</p>');
                            window.scrollTo(0, 0);
                            $("#loading2").html('');
                            $("#loading2").html('Submit And Next');

                        });
                    }
                    if (data.success) {
                        $('.alert-danger').html('');
                        $('.alert-danger').hide();
                        jQuery('.alert-danger').hide();
                        Swal.fire(
                            'Success!',
                            'Successfully submitted academy details!',
                            'success'
                        )
                        $(".progress-bar").css("width", "50%");
                        $(".progress-bar").html("50%");

                        $('.tab-pane').fadeOut();
                        $("#menu2").fadeIn();
                        $(".nav-link").removeClass('active')
                        $('#amenu2').addClass('active')
                        $('#submit2').hide();
                    }

                }
            });

        });

    });
</script>