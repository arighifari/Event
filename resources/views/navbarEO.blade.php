
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords" content="Events Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="{{asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">		<!-- font-awesome icons -->
    <!-- //Custom Theme files -->
    <!-- js -->
    <script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div class="header-w3layouts">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Events</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="index.html">Events</a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
                        <li><a class="hvr-sweep-to-right" href="{{route('home')}}">Home</a></li>
                        <li><a class="hvr-sweep-to-right" href="about.html">About</a></li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('eo.auth.login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('eo.register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li><a class="hvr-sweep-to-right" href="{{ route('eo.mybooking') }}">Booked Event</a></li>
                            <li><a class="hvr-sweep-to-right"> {{ Auth::user()->nama }}</a></li>
                            <li><a class="hvr-sweep-to-right" href="{{ route('eo.auth.logout') }}">Logout</a></li>
                        @endguest
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </div>
</body>
@yield('navbarEO')
