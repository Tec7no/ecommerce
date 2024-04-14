<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
  $total = ProductController::cartItem();
}
?>

<style>
.navbar-collapse{
justify-content: end;
}
</style>

<nav class="navbar navbar-expand-lg navbar-header bg-body-tertiary" >
  <div class="container-fluid">
    <a class="navbar-brand" href="/">E-comm</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
      @if(Session::has('user'))
        <ul class="navbar-nav mb-2 mb-lg-0" >
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Session::get('user')['name'] }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
              <li><a class="dropdown-item" href="/myorders">My Orders</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav navbar-right">  
           <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/cartlist">
            <i class="fa fa-shopping-cart"></i> ({{ $total }})
          </a>
        </li>
      </ul>
      @else   
      <ul class="navbar-nav navbar-right">
        <li><a class="nav-link" href="/login">Login</a></li>
          <li><a class="nav-link" href="/register">Register</a></li>  
           <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/cartlist">
            <i class="fa fa-shopping-cart"></i> ({{ $total }})
          </a>
        </li>
      </ul>
      @endif

      

    </div>
  </div>
</nav>
