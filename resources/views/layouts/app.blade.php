<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
            rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pages/dashboard.css') }}" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    @yield('css')

</head>
<body>


<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
      class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="#">
      	<img src="{{ asset('img/logo.png') }}" width="200px" />
      </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          @guest
          <li><a href="{{ route('logout') }}">login</a></li>
          @else
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
              class="icon-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                </li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" style="background: #F9F6F1; color: black" class="search-query" placeholder="Search">
        </form>
          @endguest
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->

@if (!Auth::guest() && Auth::user()->hasRole('admin'))

<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li {!! Request::is('home') ? 'class="active"' : '' !!}><a href="{{ route('home') }}"><i class="icon-dashboard"></i><span>Home</span> </a> </li>
        <li {!! Request::is('admin/pegawai') ? 'class="active"' : '' !!}><a href="{{ route('pegawai.index') }}"><i class="icon-list-alt"></i><span>Data Pegawai</span> </a> </li>
        <li {!! Request::is('admin/user') ? 'class="active"' : '' !!}><a href="{{ route('user.index') }}"><i class="icon-user"></i><span>Data User</span> </a> </li>
        <li {!! Request::is('admin/tanaman') ? 'class="active"' : '' !!}><a href="{{ route('tanaman.index') }}"><i class="icon-globe"></i><span>Data Tanaman</span> </a></li>
        <li {!! Request::is('admin/legal') ? 'class="active"' : '' !!}><a href="{{ route('legal.index') }}"><i class="icon-file"></i><span>Legal</span> </a> </li>
        <li {!! Request::is('admin/finance') ? 'class="active"' : '' !!}><a href="{{ route('finance.index') }}"><i class="icon-money"></i><span>Finance</span> </a> </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
@endif

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @yield('content')

        </div>
    </div>
</div>



<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12" style="text-align: center"> &copy; PT. BIOPS Agrotekno Indonesia </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-1.7.2.min.js') }}"></script> 
<script src="{{ asset('js/excanvas.min.js') }}"></script> 
<script src="{{ asset('js/chart.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/full-calendar/fullcalendar.min.js') }}"></script>
 
<script src="{{ asset('js/base.js') }}"></script> 

@yield('js')

</body>
</html>
