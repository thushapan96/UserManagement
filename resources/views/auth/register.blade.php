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
     
    
    <div class="col-lg-4 col-md-4 col-12">
     <div class="form-group"><input class="form-control" type="email" placeholder="Email Address"></div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
     <div class="form-group"><input class="form-control" type="tel" placeholder="Mobile"></div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <div class="form-group">
      <select class="form-control" placeholder="a"> 
      <option>Join As</option>

       <option>Candiate</option>
       <option>University</option>
       <option>Consultant</option>
       <option>College</option>
       <option>Lawyer</option>
       <option>Chartered Accountant</option>



      </select> 
     </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
     <div class="form-group"><input class="form-control" type="password" placeholder="New Password"></div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
     <div class="form-group"><input class="form-control" type="password" placeholder="Confirm Password"></div>
    </div>
    
    <div class="col-lg-6 col-md-6 col-6">
     <button type="submit"  class="reg-btn"><a href="{{route('login')}}">Login</a></button>
    </div>
    <div class="col-lg-6 col-md-6 col-6">
     <button type="submit" class="client-btn">Submit</button>
    </div>
    
    
   </div>
   
  
  </div>
  
  <div class="great-title">You Are Welcome !</div>
  
  
  
 </div>
</section> 
@endsection



