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
</style>
<nav class="navbar"> 
  <div class="container justify-content-center">
    <h1>Amazing E-Grocery</h1>      
  </div> 
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="btn btn-warning me-md-2" type="button" href="/register">Register</a>
  <a class="btn btn-warning me-md-2" type="button"  href="/login">Login</a>
</div>
</nav>

