@extends('navbarEO')
@section('navbarEO')

        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Events a Wedding Category Bootstrap Responsive website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Events Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="{{asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('css/bootstrap4.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
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
<!-- banner -->
<div id="home" class="w3ls-banner">

    <!-- banner-text -->
    <div class="slider">
        <div class="callbacks_container">
            <ul class="rslides callbacks callbacks1" id="slider4">
                <li>
                    <div class="w3layouts-banner-top">

                        <div class="container">
                            <div class="agileits-banner-info">
                                <h3>We will help you to get<span> best Event Organizer</span></h3>
                                <div class="agileits_w3layouts_more menu__item">
                                    {{--<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top1">
                        <div class="container">
                            <div class="agileits-banner-info">
                                {{--<h3>We Celebrate  <span>Newyear Parties</span></h3>--}}
                                {{--<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>--}}
                                <div class="agileits_w3layouts_more menu__item">
                                    {{--<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top2">
                        <div class="container">
                            <div class="agileits-banner-info">
                                {{--<h3>We Celebrate  <span>Marriage Functions</span></h3>--}}
                                {{--<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>--}}
                                <div class="agileits_w3layouts_more menu__item">
                                    {{--<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>--}}
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>

        <!--banner Slider starts Here-->
    </div>
</div>
<!-- //banner -->
<!-- header -->
<!-- //header -->
<!-- ser_agile -->
<div class="">
    <div class="container">
        <br>
        <h2 class="heading-agileinfo">NEW EVENT<span>Events is a professionally managed Event</span></h2>

        <div class="row">
            @foreach($events as $key=> $event)
                <div class="col-sm-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" width="300" height="150" src="{{asset('/storage/'.$event->Gambar)}}" alt="{{$event->nama_Event}} 's Image">
                        <div class="card-body">
                            <h5 class="card-title">{{$event->nama_Event}}</h5>
                            <p>Alamat Event : {{$event->alamat_Event}}</p>
                            <p>Kota Event : {{$event->Kota}}</p>
                            <p>Kategori Event : {{$event->Kategori}}</p>
                            <p>Deskipsi Event : {{$event->deskripsi_Event}}</p>
                            <br>
                            <a href="{{ route('form.edit', $event->id) }}" class="btn btn-primary">Book Event</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <br>
    </div>
</div>
<!-- //ser_agile -->
<!-- Stats -->
<div class="stats-agileits">
    <div class="container">
        <h3 class="heading-agileinfo white-w3ls">We Have Something To Be Proud Of<span class="black-w3ls">Events is a professionally managed Event</span></h3>
    </div>
    <div class="stats-info agileits w3layouts">
        <div class="container">
            <div class="col-md-4 col-sm-4agileits w3layouts stats-grid stats-grid-1">
                <i class="fa fa-users" aria-hidden="true"></i>
                <div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='2500' data-delay='3' data-increment="2">2500</div>
                <div class="stat-info-w3ls">
                    <h4 class="agileits w3layouts">Happy Clients</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 agileits w3layouts stats-grid stats-grid-2">
                <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                <div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='1000' data-delay='3' data-increment="2">1000</div>
                <div class="stat-info-w3ls">
                    <h4 class="agileits w3layouts">Events</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 stats-grid agileits w3layouts stats-grid-3">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='3421' data-delay='3' data-increment="2">3421</div>
                <div class="stat-info-w3ls">
                    <h4 class="agileits w3layouts">Services</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //Stats -->

<div class="testimonials">
    <div class="container">
        <h3 class="heading-agileinfo">Event Manager Says<span>Events is a professionally managed Event</span></h3>
        <div class="flex-slider">
            <ul id="flexiselDemo1">
                <li>
                    <div class="laptop">
                        <div class="col-md-8 team-right">
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                adipisci velit, sed quia non numquam.</p>
                            <div class="name-w3ls">
                                <h5>Federer</h5>
                                <span>lorem ipsum</span>
                            </div>
                        </div>
                        <div class="col-md-4 team-left">
                            <img class="img-responsive" src="images/t1.jpg" alt=" " />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li>
                    <div class="laptop">
                        <div class="col-md-8 team-right">
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                adipisci velit, sed quia non numquam.</p>
                            <div class="name-w3ls">
                                <h5>Thompson</h5>
                                <span>lorem ipsum</span>
                            </div>
                        </div>
                        <div class="col-md-4 team-left">
                            <img class="img-responsive" src="images/t2.jpg" alt=" " />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </li>
            </ul>

        </div>

    </div>
</div>
<!--//testimonials-->

<!-- footer-top -->
<div class="footer-top">
    <div class="container">
        <div class="col-md-3 foot-left">
            <h3>About Us</h3>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
        </div>
        <div class="col-md-3 foot-left">
            <h3>Get In Touch</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>

            <div class="contact-btm">
                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                <p>90 Street, City, State 34789.</p>
            </div>
            <div class="contact-btm">
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <p>+456 123 7890</p>
                <div class="contact-btm">
                </div>
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                <p><a href="mailto:example@email.com">info@example.com</a></p>
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="col-md-3 foot-left">
            <h3>Latest Events</h3>
            <ul>
                <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g1.jpg" alt="" class="img-responsive"></a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g2.jpg" alt="" class="img-responsive"></a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g3.jpg" alt="" class="img-responsive"></a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g4.jpg" alt="" class="img-responsive"></a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 foot-left">
            <h3>Subscribe</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum has </p>
            <form action="#" method="post">
                <input type="email" Name="Enter Your Email" placeholder="Enter Your Email" required="">
                <input type="submit" value="Subscribe">
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- /footer-top -->

<!-- footer -->
<div class="copy-right">
    <div class="container">
        <div class="col-md-6 col-sm-6 col-xs-6 copy-right-grids">
            <div class="copy-left">
                <p>&copy; 2017 Events. All rights reserved | Design by Ghifari</p>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 top-middle">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<!-- //footer -->
<!-- bootstrap-modal-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Events
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <img src="{{asset('images/g8.jpg')}}" alt=" " class="img-responsive" />
                <p>Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam,
                    nisi ut aliquid ex ea commodi consequatur? Quis autem
                    vel eum iure reprehenderit qui in ea voluptate velit
                    esse quam nihil molestiae consequatur, vel illum qui
                    dolorem eum fugiat quo voluptas nulla pariatur.
                    <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                        esse quam nihil molestiae consequatur.</i></p>
            </div>
        </div>
    </div>
</div>
<!-- //bootstrap-modal-pop-up -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>

<!-- skills -->

<script src="{{asset('js/responsiveslides.min.js')}}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager:true,
            nav:false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager:false,
            nav:true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>

<!-- start-smoth-scrolling -->
<!-- OnScroll-Number-Increase-JavaScript -->
<script type="text/javascript" src="{{asset('js/numscroller-1.0.js')}}"></script>
<!-- //OnScroll-Number-Increase-JavaScript -->
<!--flexiselDemo1 -->
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 2,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 1
                },
                tablet: {
                    changePoint:991,
                    visibleItems: 1
                }
            }
        });

    });
</script>
<script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
<!--//flexiselDemo1 -->

<script type="text/javascript" src="{{asset("js/move-top.js")}}"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>
@endsection
