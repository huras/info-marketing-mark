<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148168933-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-148168933-1');
</script>


  @if(View::hasSection('meta'))
      @yield('meta')
  @else
    <meta property="og:image" content="http://www.sogniamoingrande.it/img/site/recorte-fb.jpg">
    <meta property="og:url" content="http://www.sogniamoingrande.it">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Sogniamo in Grande">
    <meta property="og:site_name" content="Sogniamo in Grande">
    <meta property="og:description" content="Maritime training and orientation">
  @endif

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rubik:100,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Barlow:100,400,700" rel="stylesheet">

  <link rel="icon"
      type="image/png"
      href="/img/site/Logo.ico">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  @yield('styles')

  <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <title> Sogniamo in Grande </title>
  <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet">
  <script src='{{asset("js/app.js")}}' ></script>
  <!-- <script src="{{ asset('js/moment.js') }}"></script> -->
  <!-- <script src="{{ asset('js/underscore-min.js') }}"></script> -->
  <script src="{{ asset('js/slick.js') }}"></script>
  <!-- <script src="{{ asset('js/themed-slicks.js') }}"></script> -->
  <!-- <script src="{{ asset('js/select2.min.js') }}"></script> -->
  <script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
  
</head>
<body>
<!-- <body class='themed-body' style=' background-image: url( {{ asset("img/site/home-bg-dark.jpg") }} ) '> -->
  <div id="fb-root"></div>
  <script async defer src="https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v3.2&appId=2018338701713124&autoLogAppEvents=1"></script>

  @yield('content')

  <!-- <script src="{{ asset('js/jquery.mask.js') }}"></script> -->
  <!-- <script src="{{ asset('js/jquery.validate.js') }}"></script> -->
  <!-- <script src="{{ asset('js/bootstrap.js') }}"></script> -->
  <!-- <script src="{{ asset('js/clndr.js') }}"></script> -->
  <!-- <script src="{{ asset('js/main.js') }}"></script> -->
  <script src='https://vjs.zencdn.net/7.4.1/video.js'></script>
  <script src='{{asset("js/masks.js")}}' ></script>
  <script src='{{asset("js/custom.js")}}' ></script>
  @yield('scripts')
</body>
</html>