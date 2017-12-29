<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <script src="https://use.fontawesome.com/14f1f2c704.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gotcha') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hover.css') }}" rel="stylesheet" media="all">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="nav-link nav-home" href="/home">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/pictures">Photos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Audio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Merch</a>
      </li>
    </ul>

    <ul class="navbar-nav navbar-right">
      <li class="nav-item nav-icon">
        <a target="_blank" class="nav-link" href="https://www.reverbnation.com/gotcha5">
          <i class="reverb-star hvr-grow fa fa-3x fa-star" aria-hidden="true"></i>
        </a>
      </li>
      <li class="nav-item">
        <a target="_blank" style="margin-left:10px;" class="nav-link" href="https://www.facebook.com/gotcharockband/">
            <i class="hvr-grow nav-icon fa fa-3x fa-facebook-square" aria-hidden="true"></i>
        </a>
      </li>
      <li class="nav-item nav-icon">
        <a target="_blank" class="nav-link" href="https://www.instagram.com/gotchabandrocks/?hl=en">
            <i class="hvr-grow nav-icon fa fa-3x fa-instagram" aria-hidden="true"></i>
        </a>
      </li>
      <li class="nav-item nav-icon">
        <a target="_blank" class="nav-link" href="https://twitter.com/Gotchametalex">
            <i class="hvr-grow nav-icon fa fa-3x fa-twitter" aria-hidden="true"></i>
        </a>
      </li>
    </ul>
   
  </div>
</nav>



    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>