<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="utf-8">

  <title>Marcelo Mata</title>

  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">


</head>
<body data-spy="scroll" data-target="#nav" class='full'>

    <nav id="nav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Marcelo Mata</a>
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                </ul>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/blog">Blog</a></li>
            </ul>
        </div>

    </nav>

    @yield('content')

@yield('footer')

</body>
</html>