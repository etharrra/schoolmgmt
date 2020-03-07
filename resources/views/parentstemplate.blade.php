<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('backendtemplate/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('backendtemplate/bootstrap/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{ asset('backendtemplate/bootstrap/css/clean-blog.min.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <div class="navbar">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">
        <i class="fas fa-school" style="font-size: 30px;color: white;"></i>
        <span style="font-size: 20px;color: white;">P School</span>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Name</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">person</i>
              <p class="d-lg-none d-md-block">
                Account
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
              <a class="dropdown-item" href="#">Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Log out</a>
            </div>
          </li>
        </ul>
      </div>
  </nav>
</div>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/std gp.jpg'); background-color: lightgreen;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Welcome!</h1>
            <span class="subheading">A Place For Your Future</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  @yield('content')


  <!-- Footer -->
  <div id="footer" class="mt-5">
    <div class="container-fluid" style="background-color: lightgreen;">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 p-5 text-dark">
          <h3>About</h3>
          <p style="font-size: 14px;">
            Established in 1918, the Perfect School at Temple School has a distinguished tradition of preparing business leaders, professionals, and entrepreneurs for successful careers. Today, it is the largest, most comprehensive business school in the greater Yangon region, and among the largest in the world. 
          </p>
        </div>
        <div style="font-size: 14px;" class="col-lg-3 col-md-6 col-sm-12 p-5 text-dark">
          <h3>Contact Information</h3>
          <ul type="none">
            <li><p>Address</p></li>
            <li><p>Phone</p></li>
            <li><p>Email</p></li>
          </ul>
        </div>
        <div style="font-size: 14px;" class="col-lg-3 col-md-6 col-sm-12 p-5 text-dark">
          <h3>Quick Link</h3>
          <ul type="none">
            <li><a href="" style="color: black;">HOME</a></li>
            <li><a href="" style="color: black;">ABOUT</a></li>
            <li><a href="" style="color: black;">TEACHER</a></li>
            <li><a href="" style="color: black;">CONTACT</a></li>
          </ul>
        </div>
        <div style="font-size: 14px;" class="col-lg-3 col-md-6 col-sm-12 p-5 text-dark">
          <h3>Conclusion</h3>
          <p>
            The school management system is important because it streamlines school administration with its feature. If you already use one, make sure that you have obtained the functions mentioned above.However, if you are not satisfied with your current system, you can get a free demo for school management system from Perfect Scho to see how our system works.
          </p>
        </div>
      </div>
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <ul class="list-inline text-center">
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
              </ul>
              <p class="copyright text-muted">Copyright &copy; Perfect School </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('backendtemplate/bootstrap/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('backendtemplate/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('backendtemplate/bootstrap/js/clean-blog.min.js')}}"></script>

</body>

</html>
