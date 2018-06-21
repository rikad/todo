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
  <!-- Page Loader -->
  <div class="page-loader-wrapper">
    <div class="loader">
      <div class="preloader">
        <div class="spinner-layer pl-red">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
      <p>Please wait...</p>
    </div>
  </div>
  <!-- #END# Page Loader -->
  <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- #END# Overlay For Sidebars -->
  <!-- Search Bar -->
  <div class="search-bar">
    <div class="search-icon">
      <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
      <i class="material-icons">close</i>
    </div>
  </div>
  <!-- #END# Search Bar -->
  <!-- Top Bar -->
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
        <a href="javascript:void(0);" class="bars"></a>
        <a class="navbar-brand" href="index.html">{{ config('app.name', 'Laravel') }}</a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <!-- Call Search -->
          <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
          <!-- #END# Call Search -->
          <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- #Top Bar -->
  <section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">

      <!-- Menu -->
      <div class="menu">
        <ul class="list">
          <li class="active">
            <a href="{{ route('home') }}">
              <i class="material-icons">home</i>
              <span>Beranda</span>
            </a>
          </li>

          @if( \Laratrust::can('read-assets') || \Laratrust::can('read-plans') )
          <li @if(\Request::is('modules/plans/*') || \Request::is('modules/assetdetails/*') || \Request::is('modules/plans') || \Request::is('modules/assets/*') || \Request::is('modules/assets')) class="active" @endif>
            <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">assignment</i>
              <span>Barang</span>
            </a>
            <ul class="ml-menu">
                @if( \Laratrust::can('read-assets'))
                <li @if(\Request::is('modules/assets/*') || \Request::is('modules/assets')) class="active" @endif>
                    <a href="{{ route('assets.index') }}">
                        <span>Barang</span>
                    </a>
                </li>
                @endif
                @if( \Laratrust::can('read-plans') )                
                <li @if(\Request::is('modules/plans/*') || \Request::is('modules/plans')) class="active" @endif>
                    <a href="{{ route('plans.index') }}">
                        <span>Perencanaan</span>
                    </a>
                </li>
                @endif
            </ul>
          </li>
          @endif

          @if( \Laratrust::can('read-projects'))
          <li @if(\Request::is('modules/projects') || \Request::is('modules/projects/*') ) class="active" @endif>
            <a href="{{ route('projects.index') }}">
              <i class="material-icons">assignment</i>
              <span>Projects</span>
            </a>
          </li>
          @endif
          @if( \Laratrust::can('read-difficulties'))
          <li @if(\Request::is('modules/difficulties') || \Request::is('modules/difficulties/*') ) class="active" @endif>
            <a href="{{ route('difficulties.index') }}">
              <i class="material-icons">assessment</i>
              <span>Difficulties</span>
            </a>
          </li>
          @endif

          @if( \Laratrust::can('read-users'))
          <li @if(\Request::is('settings/users') || \Request::is('settings/users/*') ) class="active" @endif>
              <a href="{{ route('users.index') }}">
                  <i class="material-icons">people</i>
                  <span>Pengguna</span>
              </a>
          </li>
          @endif

          @if( \Laratrust::can('read-permissions'))
          <li @if(\Request::is('settings/roles') || \Request::is('settings/roles/*') ) class="active" @endif>
              <a href="{{ route('roles.index') }}">
                  <i class="material-icons">settings</i>
                  <span>Role & Permission</span>
              </a>
          </li>
          @endif

        </ul>
      </div>
      <!-- #Menu -->

      <!-- Footer -->
      <div class="legal">
        <div class="copyright">
          &copy; 2016 - 2017 <a href="javascript:void(0);">Rikad - AdminBSB</a>.
        </div>
      </div>
      <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->

    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
      <ul class="nav nav-tabs tab-nav-right" role="tablist">
        <li role="presentation" class="active"><a href="#accountInfo" data-toggle="tab">Account</a></li>
        <li role="presentation"><a href="#skins" data-toggle="tab">SKINS</a></li>
      </ul>

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="accountInfo">

        <!-- User Info -->
        <div style="text-align:center; padding-top: 2em" align="center">
          <img src="{{ asset('images/user.png') }}" align="center" alt="User" />
          <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
          <div class="email">{{ Auth::user()->email }}</div>
        </div>
        <hr>
        <div class="list-group">
          <a href="javascript:void(0);" class="list-group-item"><i class="material-icons">person</i> Profile</a>
          <a href="{{ route('logout') }}" class="list-group-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="material-icons">input</i> Keluar</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
        </div>
        <!-- #User Info -->

        </div>
        <div role="tabpanel" class="tab-pane fade" id="skins">

          <ul class="demo-choose-skin">
            <li data-theme="red">
              <div class="red"></div>
              <span>Red</span>
            </li>
            <li data-theme="pink">
              <div class="pink"></div>
              <span>Pink</span>
            </li>
            <li data-theme="purple">
              <div class="purple"></div>
              <span>Purple</span>
            </li>
            <li data-theme="deep-purple">
              <div class="deep-purple"></div>
              <span>Deep Purple</span>
            </li>
            <li data-theme="indigo">
              <div class="indigo"></div>
              <span>Indigo</span>
            </li>
            <li data-theme="blue">
              <div class="blue"></div>
              <span>Blue</span>
            </li>
            <li data-theme="light-blue">
              <div class="light-blue"></div>
              <span>Light Blue</span>
            </li>
            <li data-theme="cyan">
              <div class="cyan"></div>
              <span>Cyan</span>
            </li>
            <li data-theme="teal">
              <div class="teal"></div>
              <span>Teal</span>
            </li>
            <li data-theme="green">
              <div class="green"></div>
              <span>Green</span>
            </li>
            <li data-theme="light-green">
              <div class="light-green"></div>
              <span>Light Green</span>
            </li>
            <li data-theme="lime">
              <div class="lime"></div>
              <span>Lime</span>
            </li>
            <li data-theme="yellow">
              <div class="yellow"></div>
              <span>Yellow</span>
            </li>
            <li data-theme="amber">
              <div class="amber"></div>
              <span>Amber</span>
            </li>
            <li data-theme="orange">
              <div class="orange"></div>
              <span>Orange</span>
            </li>
            <li data-theme="deep-orange">
              <div class="deep-orange"></div>
              <span>Deep Orange</span>
            </li>
            <li data-theme="brown">
              <div class="brown"></div>
              <span>Brown</span>
            </li>
            <li data-theme="grey">
              <div class="grey"></div>
              <span>Grey</span>
            </li>
            <li data-theme="blue-grey" class="active">
              <div class="blue-grey"></div>
              <span>Blue Grey</span>
            </li>
            <li data-theme="black">
              <div class="black"></div>
              <span>Black</span>
            </li>
          </ul>
        </div>

      </div>
    </aside>
    <!-- #END# Right Sidebar -->
  </section>

  <section class="content">
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

  <!-- Select Plugin Js -->
  <script src="{{ asset('plugins') }}/bootstrap-select/js/bootstrap-select.js"></script>


  <!-- Slimscroll Plugin Js -->
  <script src="{{ asset('plugins') }}/jquery-slimscroll/jquery.slimscroll.js"></script>

  <!-- Waves Effect Plugin Js -->
  <script src="{{ asset('plugins') }}/node-waves/waves.js"></script>

  <!-- Custom Js -->
  <script src="{{ asset('js') }}/admin.js"></script>
  <script src="{{ asset('js') }}/demo.js"></script>

  @yield('js')

</body>

</html>
