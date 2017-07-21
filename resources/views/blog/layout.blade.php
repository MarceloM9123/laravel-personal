<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Marcelo Mata</title>

  <link rel="stylesheet" type="text/css" href="{{ asset('/css/prism.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
  <script src="{{ asset('js/js/prism.js') }}"></script>

  <style>
    img.bg {
      /* Set rules to fill background */
      min-height: 100%;
      min-width: 1415px;
      
      /* Set up proportionate scaling */
      width: 100%;
      height: auto;
      
      /* Set up positioning */
      position: fixed;
      top: 0;
      left: 0;
    }
    
    @media screen and (max-width: 1415px){
      img.bg {
        left: 50%;
        margin-left: -708px; }
    }

    .language-javascript{
      font-size: 18px
    }
  </style>


</head>
<body data-spy="scroll" data-target="#nav" class='full'>

  <img src="{{ asset('/images/21macEdit.jpg') }}" class="bg">


    <nav id="nav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">Marcelo Mata</div>
          </div>


          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/">Blog <span class="sr-only">(current)</span></a></li>
              <li><a href="/profile">Profile</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <!-- <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li> -->
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
          </div>
        </div>

    </nav>

    @yield('content')

@include('blog.footer')

</body>
</html>