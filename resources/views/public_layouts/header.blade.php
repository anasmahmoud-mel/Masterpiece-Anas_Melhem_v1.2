<!DOCTYPE html>
<html>
    <head>

        <!-- /.website title -->
        <title>JOURNEY| Select Car step two</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <meta charset="UTF-8" />
        <!-- CSS Files -->
        <link href="{{asset('public_theme/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('public_theme/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('public_theme/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
        <link href="{{asset('public_theme/css/animate.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('public_theme/css/owl.theme.css')}}" rel="stylesheet">
        <link href="{{asset('public_theme/css/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{asset('public_theme/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">

        <!-- Colors -->
        <!-- <link href="css/css-index-blue.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
        <link href="{{asset('public_theme/css/css-index-yellow.css')}}" rel="stylesheet" media="screen"> 

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

    </head>

    <body data-spy="scroll" data-target="#navbar-scroll">

        <!-- /.preloader -->
        <div id="preloader"></div>
        <div id="top"></div>

        <!-- /.parallax full screen background image -->
        <div class="fullscreen landing parallax blog-page" style="background-image:url('{{asset('public_theme/images/bg-baner.jpeg')}}');" data-img-width="2000" data-img-height="1333" data-diff="100">

            <div class="overlay">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center">

                        <!-- /.logo -->
                        <div class="logo wow fadeInDown" style="margin-top: 50px">
                            <a href="/jurny/main"><img src="{{asset('public_theme/images/logo.png')}}" alt="logo"></a>
                        </div>

                        <!-- /.main title -->
                        <h2 class="wow fadeInUp" style="margin-bottom: 50px">
                   Welcome <b>&</b>  {{ Auth::user()->name }}
                        </h2>

                    </div>
                </div>
            </div>
        </div>

       
           <!-- NAVIGATION -->
           <div id="menu">
            <nav class="navbar-wrapper navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand site-name" href="#top"><img
                                src="{{ asset('public_theme/images/logo2.png') }}" alt="logo"></a>
                    </div>
        
                    <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                        <ul class="nav navbar-nav">
        
                            <li><a href="/jurny/booking">Booking bus</a></li>
                          
                            <li class="ymm-sw">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"
                                    href="#">partner page<b class="caret"></b> </a>
                                <ul class="dropdown-menu navbar-nav">
                                    <li><a href="/jurny/insert">Add a jurny</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="/jurny/contact">Contact us</a></li>
                            <li class="ymm-sw">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"
                                    href="/jurny/acccunt/{{ Auth::user()->id}}">My account<b class="caret"></b> </a>
                                <ul class="dropdown-menu navbar-nav">
                                    <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a>
         
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         @csrf
                                     </form></li>
                                     <li><a href="/jurny/acccunt/{{ Auth::user()->id }}">Account</a></li>
                                </ul>
                            </li>
                           
        
                            {{-- <li>
                                    
                                  
                                       
                                     
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
        
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            
                        
                   
                        </li> --}}
                        
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    @yield('main')


            
        <!-- /.footer -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="">
                        <div class="col-md-4 col-sm-6">
                            <h4>Where to find us</h4>
                            <p><strong>kimaroTec.</strong>
                                <br>13/25 New Avenue shibuia ayko
                                <br>Kyoto city <br >45Y  
                                <strong>Japon</strong>
                            </p>
                            <a href="contact.html">Go to contact page</a>
                            <hr class="hidden-md hidden-lg">
                        </div> 

                        <div class="col-md-4 col-sm-6">
                            <h4>Last news </h4>
                            <ul class="footer-news">
                                <li>
                                    <a href="single.html"><img src="{{asset('public_theme/images/cirecl-car.png')}}" alt=""> 
                                        <em>Mercidice class S 201</em>
                                        <span class="f-readMore">More .. </span>
                                    </a> 
                                </li>                                
                                <li>
                                    <a href="single.html"><img src="{{asset('public_theme/images/cirecl-car.png')}}" alt=""> 
                                        <em>Mercidice class S 201</em>
                                        <span class="f-readMore">More .. </span>
                                    </a> 
                                </li>                                
                                <li>
                                    <a href="single.html"><img src="{{asset('public_theme/images/cirecl-car.png')}}" alt=""> 
                                        <em>Mercidice class S 201</em>
                                        <span class="f-readMore">More .. </span>
                                    </a> 
                                </li>
                         
                            </ul>
                            <hr class="hidden-md hidden-lg">
                        </div>
                        <!-- /.col-md-4 -->
                        
                        <div class="col-md-4 col-sm-6">
                            <h4>Get the news</h4>
                            <div class="newsletter-box">
                                <div class="newsletter">  
                                    <div class="newsletter-content"> 
                                        <p>Join our newsletter of Lorem Ipsum available, but the majority have suffered alteration .</p>
                                    </div> 
                                    <div class="newsletter-form">
                                        <form>
                                            <input type="text" placeholder="Enter your email...." required=""/>
                                            <input type="submit" value=" ">
                                        </form>
                                    </div>
                                    <div class="clear"> </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-4 -->

                    </div>
                    <!-- /.row -->
                </div>
            </div>	
            <hr>
            <div class="footer-bottum">
                <div id="copyright">
                    <div class="container">
                        <div class="col-sm-4 col-sm-offset-4">
                            <!-- /.social links -->
                            <div class="social text-center">
                                <ul>
                                    <li><a class="wow fadeInUp" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="wow fadeInUp" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="wow fadeInUp" href="https://plus.google.com/" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="wow fadeInUp" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>	

                            <div class="text-center wow fadeInUp" style="font-size: 14px;">Copyright VTC Theme 2016 - Template by <a href="http://www.Kimarotec.com">kimaroTheme</a></div>
                            <a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
                        </div>	
                    </div>
                </div>

            </div>
        </footer>


        <!-- /.javascript files -->
        <script src="{{asset('public_theme/js/jquery.js')}}"></script>
        <script src="{{asset('public_theme/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public_theme/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('public_theme/js/custom.js')}}"></script>
        <script src="{{asset('public_theme/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('public_theme/js/wow.min.js')}}"></script>
        <script src="{{asset('public_theme/js/owl.carousel.min.js')}}"></script>
            <script src="{{asset('public_theme/js/jquery.validate.min.js')}}"></script> 



        <script>
            new WOW().init();

        </script>

    </body>
</html>