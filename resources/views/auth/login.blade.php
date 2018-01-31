<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Managemen Aset - Material Design</title>

    <!-- Favicon-->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins') }}/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('plugins') }}/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('plugins') }}/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('css') }}/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Managemen Aset</a>
            <small>Teknik Fisika - FTI ITB</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="msg">Silahkan Login</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line{{ $errors->has('username') ? ' error' : '' }}">
                            <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}" required autofocus>
                        </div>
                        @if ($errors->has('username'))
                            <label class="error" for="username">
                                {{ $errors->first('username') }}
                            </label>
                        @endif

                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line{{ $errors->has('username') ? ' error' : '' }}">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        @if ($errors->has('password'))
                            <label class="error" for="password">
                                {{ $errors->first('password') }}
                            </label>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="remember" id="remember" class="filled-in chk-col-pink" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
<!--                         <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div> -->
                        <div class="col-xs-6 align-right">
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('plugins') }}/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('plugins') }}/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('plugins') }}/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="{{ asset('plugins') }}/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="{{ asset('js') }}/admin.js"></script>
    <script src="{{ asset('js') }}/pages/examples/sign-in.js"></script>
</body>

</html>