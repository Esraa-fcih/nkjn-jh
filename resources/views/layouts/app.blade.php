<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="padding:60px">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/view') }}">Home</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/view') }}">Home
                  <span class="sr-only">(current)</span>
              </a>
          </li>
          @if (Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/userProfile') }}">{{ Auth::user()->name }}</a>
        </li>
        @if (Auth::user()->role >= 1)
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin') }}">Control</a>
        </li>

        @endif

        @endif

        <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
        </li>
        @if (Auth::guest())
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}">Login</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/register') }}">Register</a></li>
            @else



            <li class="nav-item">
                <a class="nav-link" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            </li>
            @endif
        </ul>
    </div>
</div>
</nav>            


<!-- Page Content -->
<div class="container">

    <div class="row">
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
             <form action="/search" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group" >
                    <input type="text" class="form-control" name="q"
                    placeholder="Search Articles"> 
                    <span class="input-group-btn" style="padding-left:5px">
                        <button   type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Categories Widget -->
<div class="card my-4">
  <h5 class="card-header">Categories</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
            <a href="#">Web Design</a>
        </li>
        <li>
            <a href="#">HTML</a>
        </li>
        <li>
            <a href="#">Freebies</a>
        </li>
    </ul>
</div>
<div class="col-lg-6">
    <ul class="list-unstyled mb-0">
      <li>
        <a href="#">JavaScript</a>
    </li>
    <li>
        <a href="#">CSS</a>
    </li>
    <li>
        <a href="#">Tutorials</a>
    </li>
</ul>
</div>
</div>
</div>
</div>

<!-- Side Widget -->
<div class="card my-4">
  <h5 class="card-header">About us</h5>
  <div class="card-body">
    This our blog! use it for more communication!
</div>
</div>
<div class="card my-4">
@if (Auth::check())
<div class="container">
    <form action="add" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label for="usr"><b>Title</b></label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="url"><b>Body</b></label>
            <textarea rows="4" cols="50"  name="body" class="form-control">
            </textarea>
        </div>
        <div class="form-group">
            <label class="glyphicon glyphicon-camera"  for="usr"><b>Image</b></label>
            <input id="url" type="file" name="url">
        </div>

    </br>
    <div style="padding-bottom: 10px">
    <input type="submit" value="add new" class="btn btn-primary"/>
  </div>
</form>

</div>
@endif
</div>
</div>

<!-- Blog Entries Column -->
<div class="col-md-8">

    @yield('content')



</div>

</div>


<!-- /.row -->
<!-- Sidebar Widgets Column -->    
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
