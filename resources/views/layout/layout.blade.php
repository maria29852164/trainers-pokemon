<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="bootstrap/bootstrap-4.4.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/home.css">

    <title>Document</title>
</head>
<body>

 <header>

 <nav class="navbar navbar-expand-lg  navbar-dark bg-dark ">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href='#'>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="#" >
          otrer thing
        </a>

      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>

 <div class="container">
    @yield('form-app')
 </div>


<div class="container">
    @yield('trainers')
</div>
<div class="container">
   @yield('show')

</div>
<div class="container">
   @yield('edit')
</div>

<script src="bootstrap/bootstrap-4.4.1-dist/js/bootstrap.min.js">
<script src="jquery.js">

</body>
</html>
