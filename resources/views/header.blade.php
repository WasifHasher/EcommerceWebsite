<?php
  use App\Http\Controllers\ProductController;
  use App\Models\cart;
  use App\Models\User;
  
   $total = 0;
  
  if(Session::has('user')){
    $total=cart::count();
  }

 
   

?>



<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="/">E-comm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/showallorder">Orders</a>
          </li>
          
        <form  action="/search"   class="d-flex mx-4" role="search">
          <input type="text" name="query" class="form-control me-2 " style="width:500px"  type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success text-white" type="submit">Submit</button>
        </form>
      </div>
     <ul  class="nav navbar-nav navbar-right">
        <li class="me-4 mt-2 fs-5 pb-2"> <a class="text-decoration-none text-white" href="/cartlist">Cart Item ( {{$total}} )</a>
         </li>
          
        @if (Session::has('user'))       
        <li class="nav-item dropdown me-4">
            <a class="nav-link dropdown-toggle text-white fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{session::get('user')['name']}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/Logout">Logout</a></li>
            </ul>
          </li>
         @else
            <li><a class="dropdown-item text-white fs-5 me-3 pt-2" href="/homeRoute">Login</a></li>     
          @endif

     </ul>
    </div>
  </nav>

 


  @if (Session('status'))

  <div class="alert alert-success"> {{ session('status') }}</div>
      
  @endif
