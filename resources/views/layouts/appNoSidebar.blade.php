<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

  <!-- Bootstrap Core Css -->
  <link href="{{ asset('plugins') }}/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Waves Effect Css -->
  <link href="{{ asset('plugins') }}/node-waves/waves.css" rel="stylesheet" />

  <!-- Animation Css -->
  <link href="{{ asset('plugins') }}/animate-css/animate.css" rel="stylesheet" />

  <!-- Morris Chart Css-->
  <link href="{{ asset('plugins') }}/morrisjs/morris.css" rel="stylesheet" />

  <!-- Custom Css -->
  <link href="{{ asset('css') }}/style.css" rel="stylesheet">

  <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
  <link href="{{ asset('css') }}/themes/all-themes.css" rel="stylesheet" />

  @yield('css')


</head>
<body class="theme-blue-grey">
  <!-- Top Bar -->
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
        <a href="javascript:void(0);" class="bars"></a>
        <a class="navbar-brand" href="index.html">{{ config('app.name', 'Laravel') }}</a>
      </div>
    </div>
  </nav>

  <section style="padding-top: 7em">
    @if (session()->has('status.message'))
    <div class="alert alert-{{ session()->get('status.level') }}" style="margin-top: 1em">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      {!! session()->get('status.message') !!}
    </div>
    @endif

    @yield('content')
  </section>

  <!-- Jquery Core Js -->
  <script src="{{ asset('plugins') }}/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core Js -->
  <script src="{{ asset('plugins') }}/bootstrap/js/bootstrap.js"></script>

  @yield('js')

</body>

</html>
