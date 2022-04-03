<!-- Header -->
<header class="float-panel" data-top="0" data-scroll="200">
 <nav class="navbar navbar-expand-md">
 <div class="container">
  <!-- Brand -->
  <a class="navbar-brand" href="/"><img src="images/logo.png" width="200px" alt="Logo"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('canadainspair')}}">Canada Inspire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="{{route('whycanada')}}">Why Canada</a>
      </li>
     

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> Pathways</a>
         <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Study</a>
            <a class="dropdown-item" href="#">Migration</a>
            <a class="dropdown-item" href="#">Business</a>
            <a class="dropdown-item" href="#">Visa</a>
          </div>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">Login</a>
      </li>

      
    </ul>
  </div>
  </div>
</nav>
</header>