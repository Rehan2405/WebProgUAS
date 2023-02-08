@section('navbar')
<head>
  
  <title>@yield('Navbar')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

</head>
<style>
  .navbar{
    justify-content: center;
    align-items:center;
    background-color: aquamarine;
    color: black;
  }
  .item{
    background-color: yellow;
  }
</style>
<nav class="navbar"> 
  <div class="container justify-content-center">
    <h1>Amazing E-Grocery</h1>      
  </div> 
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      {{-- <a class="btn btn-primary mb-auto" href="/" role="button">Sign Out</a> --}}
</div>
</nav>
<div class="item">
  <ul class="nav justify-content-center">
 <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cart">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profile">Profile</a>
        </li>
</ul>
</div>



