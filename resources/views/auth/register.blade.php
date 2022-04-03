@extends('layouts.layout')

@section('content')

<!-- Subscribe & Stay Connected. Start --> 
<section class="StayConnected clearfix">
 <div class="container">
  <h1>Register</h1>
  
  <div class="whiteBox clearfix">
   <!--div class="news-title">
   Join our mailing list to get the latest news, <br>special offers and invitations to exclusive events.
   </div-->
   
   <div class="row">
   <div class="col-lg-4 col-md-4 col-12">
     <div class="form-group"><input class="form-control" type="text" placeholder="User Name"></div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
     <div class="form-group"><input class="form-control" type="text" placeholder="First Name"></div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
     <div class="form-group"><input class="form-control" type="text" placeholder="Last Name"></div>
    </div>
    
    
   </div>
   
   <div class="row">
     
    
    <div class="col-lg-6 col-md-6 col-12">
     <div class="form-group"><input class="form-control" type="email" placeholder="Email Address"></div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
     <div class="form-group"><input class="form-control" type="tel" placeholder="Mobile"></div>
    </div>

    <div class="col-lg-4 col-md-4 col-12">
    <div class="form-group">
      <select class="form-control" id="type" placeholder="a"> 
      <option>Join As</option>
       <option value="Candiate">Candiate</option>
       <option value="University">University</option>
       <option value="Consultant">Consultant</option>
       <option value="College">College</option>
       <option value="Lawyer">Lawyer</option>
       <option value="Chartered Accountant">Chartered Accountant</option>
      </select> 
     </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12">
    <div class="form-group">
      <select class="form-control" placeholder="a"> 
      <option>Canada</option>


      </select> 
     </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12">
    <div class="form-group">
      <select class="form-control" id="service" placeholder="a"> 
      <option>Select Service</option>
      <option value="single">Single</option>
      <option value="multiple">Multiple</option>
      </select> 
     </div>
    </div>

</div>
    <div class="row custom-box singleservice d-none">

                      <div class="col-lg-2 col-md-2 col-2">
    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="customradio" name="a" value="1">
        <label class="custom-control-label" for="customradio">Study </label>
    </div>
</div>
<div class="col-lg-2 col-md-2 col-2">
    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="customradio1" name="a" value="1">
        <label class="custom-control-label" for="customradio1">Migration </label>
    </div>
</div>
<div class="col-lg-2 col-md-2 col-2 mb-3">
    <div class="custom-control custom-radio ">
        <input type="radio" class="custom-control-input " id="customradio2" name="a" value="1">
        <label class="custom-control-label" for="customradio2">Work</label>
    </div>
</div>

<div class="col-lg-2 col-md-2 col-2 mb-3">
    <div class="custom-control custom-radio ">
        <input type="radio" class="custom-control-input " id="customradio3" name="a" value="1">
        <label class="custom-control-label" for="customradio3">Business</label>
    </div>
</div>
<div class="col-lg-2 col-md-2 col-2 mb-3">
    <div class="custom-control custom-radio ">
        <input type="radio" class="custom-control-input " id="customradio4" name="a" value="1">
        <label class="custom-control-label" for="customradio4">Visa</label>
    </div>
</div>
<div class="col-lg-2 col-md-2 col-2 mb-3">
    <div class="custom-control custom-radio ">
        <input type="radio" class="custom-control-input " id="customradio5" name="a" value="1">
        <label class="custom-control-label" for="customradio5">Others</label>
    </div>
</div>
</div>
<div class="row custom-box multiservice d-none" >

<div class="col-lg-2 col-md-2 col-2">
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck" name="is_flexible_date" value="1">
        <label class="custom-control-label" for="customCheck">Study </label>
    </div>
</div>
<div class="col-lg-2 col-md-2 col-2">
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck1" name="is_flexible_date" value="1">
        <label class="custom-control-label" for="customCheck1">Migration </label>
    </div>
</div>
<div class="col-lg-2 col-md-2 col-2 mb-3">
    <div class="custom-control custom-checkbox ">
        <input type="checkbox" class="custom-control-input " id="customCheck2" name="is_flexible_date" value="1">
        <label class="custom-control-label" for="customCheck2">Work</label>
    </div>
</div>

<div class="col-lg-2 col-md-2 col-2 mb-3">
    <div class="custom-control custom-checkbox ">
        <input type="checkbox" class="custom-control-input " id="customCheck3" name="is_flexible_date" value="1">
        <label class="custom-control-label" for="customCheck3">Business</label>
    </div>
</div>
<div class="col-lg-2 col-md-2 col-2 mb-3">
    <div class="custom-control custom-checkbox ">
        <input type="checkbox" class="custom-control-input " id="customCheck4" name="is_flexible_date" value="1">
        <label class="custom-control-label" for="customCheck4">Visa</label>
    </div>
</div>
<div class="col-lg-2 col-md-2 col-2 mb-3">
    <div class="custom-control custom-checkbox ">
        <input type="checkbox" class="custom-control-input " id="customCheck5" name="is_flexible_date" value="1">
        <label class="custom-control-label" for="customCheck5">Others</label>
    </div>
</div>
</div>
<dic class="row">
    <div class="col-lg-6 col-md-6 col-12">
     <div class="form-group"><input class="form-control" type="password" placeholder="New Password"></div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
     <div class="form-group"><input class="form-control" type="password" placeholder="Confirm Password"></div>
    </div>
    
    <div class="col-lg-6 col-md-6 col-6">
     <button type="submit"  class="reg-btn"><a href="{{route('login')}}" style="color:white">Login</a></button>
    </div>
    <div class="col-lg-6 col-md-6 col-6">
     <button type="submit" class="client-btn">Submit</button>
    </div>
    
    
   </div>
   
  
  </div>
  
  <div class="great-title">You Are Welcome !</div>
  
  
  
 </div>
</section> 


<script>
$(document).on('change','#service' ,function(){
  var val = $('#service option:selected').val();

  if(val=='multiple'){
 $('.multiservice').removeClass('d-none'); 
 $('.singleservice').addClass('d-none'); 

  }
  if(val=='single'){
    $('.multiservice').addClass('d-none'); 
 $('.singleservice').removeClass('d-none'); 
  }

});
$(document).on('change','#type' ,function(){

});


</script>
@endsection



