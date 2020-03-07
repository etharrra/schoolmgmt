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
        <span style="font-size: 20px;color: white;">P School</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item px-3">
            <a class="nav-link" href="{{route('index')}}" style="font-size: 20px;color: white;">Back</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class=" col-sm-12 col-md-7 col-lg-5 mx-auto" id="navtitle1">


                <div class="bg-white" style="border-radius: 20px;padding: 10px;">
                    <h3 class="text-center">Sign In</h3>
                    <hr>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class=" col-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="border-radius: 20px;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class=" col-form-label">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="border-radius: 20px;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div class="">
                                <button type="submit" class="btn btn-success btn-block">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link d-block" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>

  </div>

  

 
</body>
</html>