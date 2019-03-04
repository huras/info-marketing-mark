<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,600,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rubik:100,300,400,500,600,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,500,600,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @yield('styles')
  <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <title> Sogniamo in Grande </title>
  <script src='{{asset("js/app.js")}}' ></script>
  <!-- <script src="{{ asset('js/moment.js') }}"></script> -->
  <!-- <script src="{{ asset('js/underscore-min.js') }}"></script> -->
  <script src="{{ asset('js/slick.js') }}"></script>
  <!-- <script src="{{ asset('js/themed-slicks.js') }}"></script> -->
  <!-- <script src="{{ asset('js/select2.min.js') }}"></script> -->
</head>
<body class='themed-body' style=' background-image: url( {{ asset("img/site/home-bg-dark.jpg") }} ) '>
  @yield('content')

  <!-- <script src="{{ asset('js/jquery.mask.js') }}"></script> -->
  <!-- <script src="{{ asset('js/jquery.validate.js') }}"></script> -->
  <!-- <script src="{{ asset('js/bootstrap.js') }}"></script> -->
  <!-- <script src="{{ asset('js/clndr.js') }}"></script> -->
  <!-- <script src="{{ asset('js/main.js') }}"></script> -->
  <script src='{{asset("js/masks.js")}}' ></script>
  @yield('scripts')
</body>
</html>