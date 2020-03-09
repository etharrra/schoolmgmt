<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('backendtemplate/bootstrap/css/bootstrap.min.css')}}">
  <!-- JS -->
  <script type="text/javascript" src="{{ asset('backendtemplate/bootstrap/js/jquery.min.js')}}"></script>

  <script type="text/javascript" src="{{ asset('backendtemplate/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- fontawesome -->
  <link rel="stylesheet" type="text/css" href="{{ asset('backendtemplate/bootstrap/fontawesome/css/all.min.css')}}">
  <!-- style -->
  <link rel="stylesheet" type="text/css" href="{{ asset('backendtemplate/bootstrap/style.css')}}">
  <!-- jsCustom -->
  <script type="text/javascript" src="{{ asset('backendtemplate/bootstrap/custom.js')}}"></script>
  <style type="text/css">
    
  </style>
</head>
<body>

  <div id="banner">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <a class="navbar-brand" href="#">
        <i class="fas fa-school" style="font-size: 30px;color: white;"></i>
        <span style="font-size: 20px;color: white;">{{ Auth::user()->name }}</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active px-3">
            <a class="nav-link" href="{{route('index')}}" style="font-size: 20px;color: white;">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item px-3">

            <a style="font-size: 20px;color: white;" class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>

          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid" id="navtitle2">
      @yield('content')
    </div>
 
  <footer class="fixed-bottom py-3" style="background-color: lightgreen;">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy;PERFECT SCHOOL 2020</span>
      </div>
    </div>
  </footer>
</body>

</html>