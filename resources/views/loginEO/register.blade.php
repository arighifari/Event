@extends('navbarEO')

@section('navbarEO')

    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
    </head>
    <body class="bodylog">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" id="register-form-link">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="register-form" style="padding-top: 10px" action="{{ route('eo.register.store') }}" method="POST" role="form" style="display: block;">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Email Address" value="{{ old('name') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                        <input type="text" name="name" id="name" tabindex="3" class="form-control" placeholder="Nama Lengkap" value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>
                                        <input type="text" name="alamat" id="alamat" tabindex="3" class="form-control" placeholder="Alamat" value="{{ old('alamat') }}" required autofocus>
                                        @if ($errors->has('alamat'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('No_Telp') }}</label>
                                        <input type="text" name="no_telp" id="no_telp" tabindex="3" class="form-control" placeholder="No Telp" value="{{ old('no_telp') }}" required autofocus>
                                        @if ($errors->has('no_telp'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_telp') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    <script>
        $(function() {

            $('#login-form-link').click(function(e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function(e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#login-form").fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });

        });
    </script>

@endsection
