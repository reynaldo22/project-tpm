<!doctype html>
<html lang="en">
   <head>
      <!--  meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!--  Our CSS -->
      <link rel="stylesheet" type="text/css" href="css/register.css">
      <title>Register</title>
   </head>
   <body>
      <!-- Navigation Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
         <img class="navbar-brand" width="200" height= "100" src="images/binus-logo-png.png">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            @guest
               <li class="nav-item navigation">
                  <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item navigation">
                  <a class="nav-link" href="#">Competition</a>
               </li>
               <li class="nav-item navigation">
                  <a class="nav-link" href="#">About Us</a>
               </li>
               <li class="nav-item navigation">
                  <a class="nav-link" href="{{route('login')}}">Login</a>
               </li>
                @if (Route::has('register'))
               <li class="nav-item navigation">
                  <a class="nav-link" href="{{route('register')}}">Register</a>
               </li>
                @endif
            @else
               <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
            </ul>
         </div>
      </nav>
      <!-- Register -->
      <div class="container register">
         <!-- Ribbon-->
         <div class="ribbon row">
            <div class="col-md-12">
               <ul>
                  <li class="circle" style="background-color:#e74c3c;"></li>
                  <li class="circle" style="background-color:#f1c40f;"></li>
                  <li class="circle" style="background-color:#2ecc71;"></li>
               </ul>
            </div>
         </div>

        <div class="container form-register">
            <h1>Register</h1>
            <form id="register" method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn" style="color:#23577c">
                    {{ __('Register') }}
                </button>
            </form>
            <br>
            <br>
        </div>
    </div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/register.js"></script>
      <script src="{{ asset('js/app.js') }}" defer></script>
   </body>
</html>