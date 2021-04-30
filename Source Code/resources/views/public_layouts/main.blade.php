<!DOCTYPE html>
<html>
    <head>

        <!-- /.website title -->
        <title>JOURNEY| Home page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="UTF-8" />
        <!-- CSS Files -->
        <link href="{{asset('public_theme/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('public_theme/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('public_theme/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
        <link href="{{asset('public_theme/fonts/icon-7-stroke/css/helper.css')}}" rel="stylesheet">
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
        <div class="fullscreen landing parallax" style="background-image:url('{{asset('public_theme/images/bg3.jpg')}}');" data-img-width="2000" data-img-height="1333" data-diff="100">

            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">

                            <!-- /.logo -->
                            <div class="logo wow fadeInDown">
                                <a href=""><img src="{{asset('public_theme/images/logo2.png')}}" alt="logo"></a>
                            </div>

                            <!-- /.main title -->
                            <h1 class="wow fadeInLeft">
                              <span class="color">JOURNEY</span> <br> Door to Door
                            </h1>

                            <!-- /.header paragraph -->
                            <div class="landing-text wow fadeInUp">
                                <p><span class="color">JOURNEY  </span> is a modern application to help all people to find the direction in a 
                                    simple way, we look to find it useful and easy to use. </p>
                            </div>				  

                            <!-- /.header button -->
                            <div class="head-btn wow fadeInLeft">
                                <a href="blog.html" class="btn btn-primary">Read more</a>
                                <a href="account" class="btn btn-default">My account</a>
                            </div>


                        </div> 

                        <!-- /.signup form -->
                        <div class="col-md-5">

                            <div class="signup-header wow fadeInUp"> 
                                <h3 class="form-title text-center">Quote & Reservation</h3>
                                <form class="form-header" action="{{url('jurny/booking')}}"  method="GET" id="bookingForm"> 
                                @csrf
                                    <div id="booking_control" class="booking_control">
                                        
                                        <div class="form-group">
                                            <select class="form-control input-lg" name="take_from" id="take_from" value="from">
                                                <option value="Amman">Amman</option>
                                                <option value="Irbid">Irbid</option>
                                                <option value="Mafraq">Mafraq</option>
                                                <option value="AL-Zarqa">AL-Zarqa</option>
                                                <option value="Ajlon">Ajlon</option>
                                                <option value="Jerash">Jerash</option>
                                                <option value="madaba">madaba</option>
                                                <option value="Al-Salt">Al-Salt</option>
                                                <option value="Ma'an">Ma'an</option>
                                                <option value="Tafila">Tafila</option>
                                                <option value="Aqaba">Aqaba</option>
                                                <option value="Al-Karak">Al-Karak</option>
                                                </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <select class="form-control input-lg" name="take_to" id="take_to" >
                                                <option value="Amman">Amman</option>
                                                <option value="Irbid">Irbid</option>
                                                <option value="Mafraq">Mafraq</option>
                                                <option value="AL-Zarqa">AL-Zarqa</option>
                                                <option value="Ajlon">Ajlon</option>
                                                <option value="Jerash">Jerash</option>
                                                <option value="madaba">madaba</option>
                                                <option value="Al-Salt">Al-Salt</option>
                                                <option value="Ma'an">Ma'an</option>
                                                <option value="Tafila">Tafila</option>
                                                <option value="Aqaba">Aqaba</option>
                                                <option value="Al-Karak">Al-Karak</option>
                                                </select>
                                        </div






                                        <div id="date_time" class="form-group">
                                            <input class="form-control input-lg" name="pick_up_date" id="pick_up_date"  type="date" placeholder="Pick up date" required>
                                            
                                        </div><br>

                                        {{-- <div id="date_time" class="form-group">
                                            <input class="form-control input-lg" name="pick_up" type="time" placeholder="Pick up time" required>
                                            
                                        </div><br> --}}


                                      
                                        

                                        <div class="form-group last">
                                            <button type="submit" id="find_direction" class="btn btn-warning btn-block btn-lg" value="FIND BUS">find</button>
                                         
                                        </div>
                                    </div>

                                    <div id="result_content" class="result_content display_none"> 
                                        <div class="">
                                            <ul class="report">
                                                <li><strong>Picking up   :</strong><b class="b-picking-up"></b></li>
                                                <li><strong>Dropping off :</strong><b class="b-dropping-off"></b></li>
                                                <li><strong>Date / Time  : </strong><b class="b-time"></b></li>
                                                <li><strong>Distance     : </strong><b class="b-distance"></b></li>                                                  
                                                <li class="hr"></li>
                                                <li><strong>Price HT     : </strong><b class="b-price-ht"></b></li> 
                                                <li><strong>Price TVA    : </strong><b class="b-price-tva"></b></li>
                                                <li><strong>Price TTC    : </strong><b class="b-price-ttc"></b></li> 
                                            </ul>
                                        </div>
                                        <div class="">
                                            <div class="col-lg-6">
                                                <div class="form-group last">
                                                    <input id="show_map" type="button" class="btn btn-warning btn-block btn-lg" value="Show the map">
                                                </div> 
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group last">
                                                    <input  id="next_step"  type="button" class="btn btn-warning btn-block btn-lg" value="Next ">
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="map_div display_none">
                                        <a class="close_map"><i class="pe-7s-close"></i></a>
                                        <div id="map_canvas" class="map_div"></div> 
                                    </div>                                    
                                </form>
                            </div>				

                        </div>
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

                    <li><a href="booking">Booking bus</a></li>
                  
                    <li class="ymm-sw">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"
                            href="#">partner page<b class="caret"></b> </a>
                        <ul class="dropdown-menu navbar-nav">
                            <li><a href="insert">Add a jurny</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="contact">Contact us</a></li>
                    <li class="ymm-sw">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"
                            href="/jurny/acccunt/{{ Auth::user()->id }}">My account<b class="caret"></b> </a>
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
        <!-- /.Cars section -->


        <!-- .Cars section -->


        <!-- /.feature section -->
        <div id="feature" class="feature-pp" >
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">

                        <!-- /.feature title -->
                        <h2>Recreate your account and gain more</h2>
                        <p>Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies . </p>
                    </div>
                </div>
                <div class="row row-feat">
                    <div class="col-md-4 text-center">

                        <!-- /.feature image -->
                        <div class="feature-img">
                            <img src="{{asset('public_theme/images/man2.png')}}" alt="image" class="img-responsive wow fadeInLeft">
                        </div>
                    </div>

                    <div class="col-md-8">
                        <!-- /.feature 1 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-mouse pe-5x pe-va wow fadeInUp"></i>
                            <div class="inner">
                                <h4>Online Booking</h4>
                                <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus . </p>

                            </div>
                        </div>
                        <!-- /.feature 2 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-cash pe-5x pe-va wow fadeInUp" data-wow-delay="0.2s"></i>
                            <div class="inner">
                                <h4>Controlled budget</h4>
                                <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus . </p>

                            </div>
                        </div> 
                        <!-- /.feature 4 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-users pe-5x pe-va wow fadeInUp" data-wow-delay="0.6s"></i>
                            <div class="inner">
                                <h4>Account Management</h4>
                                <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus . </p>
                            </div>
                        </div>
                        <!-- /.feature 3 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-check pe-5x pe-va wow fadeInUp" data-wow-delay="0.4s"></i>
                            <div class="inner">
                                <h4>Security paiments</h4>
                                <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus . </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.contact section -->
        <div id="contact">
            <div class="action fullscreen parallax" style="background-image:url('{{asset('public_theme/images/bg.jpg')}}');" data-img-width="2000" data-img-height="1333" data-diff="100">
                <div class="overlay">
                    <div class="container">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">

                            <!-- /.download title -->
                            <h2 class="wow fadeInRight">Have you suffered during your journey ?</h2>
                            <p class="contact_text wow fadeInLeft">
                               
                            </p>

                            <!-- /.download button -->
                            <div class="contact-cta wow fadeInLeft">
                                <ul class="contact-ul">
                                    <li class="contactbutton call wow fadeInUp animated">
                                        <a href="#">
                                            <i class="pe-7s-call"></i>
                                            <p><small>Free Call</small><br>00962777189620</p>
                                        </a>
                                    </li>
                                    <li class="contactbutton email wow fadeInUp animated" data-wow-delay="0.2s">
                                        <a href="#">
                                            <i class="pe-7s-mail"></i>
                                            <p><small>Send us Email</small><br>call@company.com</p>
                                        </a>
                                    </li>	
                                </ul>

                            </div>
                        </div>	
                    </div>	
                </div>
            </div>
        </div>

        <!-- /.package section -->
        <div id="package">
            <div class="container">
                <div class="text-center">
                    <!-- /.pricing title -->
                    <h2 class="wow fadeInLeft">The Fixed
                         Price</h2>
                    <div class="title-line wow fadeInRight"></div>
                </div>
                <div class="row package-option">

                    <!-- /.package 1 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-way pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Amman-Irbid</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">JD</span>
                                <span class="price">2.00</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>1</strong> Passanger</li>
                                <li><strong>2</strong> packages</li>
                                <li><strong>1</strong> New offer (1)</li> 
                                <li><strong>2</strong> New offer (2)</li> 				  
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BOOKING</a>
                            </div>	
                        </div>
                    </div>

                    <!-- /.package 2 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-way pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Amman-Tafila</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">JD</span>
                                <span class="price">3.5</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>1</strong> Passanger</li>
                                <li><strong>2</strong> packages</li>
                                <li><strong>1</strong> New offer (1)</li> 
                                <li><strong>2</strong> New offer (2)</li> 		  
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BOOKING</a>
                            </div>
                        </div>
                    </div>	

                    <!-- /.package 3 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-way pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Amman-Aqaba</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">JD</span>
                                <span class="price">5.00</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>1</strong> Passanger</li>
                                <li><strong>2</strong> packages</li>
                                <li><strong>1</strong> New offer (1)</li> 
                                <li><strong>2</strong> New offer (2)</li> 			  
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BOOKING</a>
                            </div>	
                        </div>
                    </div>

                    <!-- /.package 4 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-way pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Amman-Amman</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">JD</span>
                                <span class="price">0.5</span> 
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>1</strong> Passanger</li>
                                <li><strong>2</strong> packages</li>
                                <li><strong>1</strong> New offer (1)</li> 
                                <li><strong>2</strong> New offer (2)</li> 	  
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BOOKING</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- /.client section -->
        <div id="client"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <img alt="client" src="{{asset('public_theme/images/client_01.png')}}" class="wow fadeInUp">
                        <img alt="client" src="{{asset('public_theme/images/client_02.png')}}" class="wow fadeInUp" data-wow-delay="0.2s">
                        <img alt="client" src="{{asset('public_theme/images/client_03.png')}}" class="wow fadeInUp" data-wow-delay="0.6s">
                        <img alt="client" src="{{asset('public_theme/images/client_02.png')}}" class="wow fadeInUp" data-wow-delay="0.2s">
                        <img alt="client" src="{{asset('public_theme/images/client_04.png')}}" class="wow fadeInUp" data-wow-delay="0.4s">
                    </div>
                </div>
            </div>	
        </div>

        <!-- /.testimonial section -->
        <div id="testi">
            <div class="container">
                <div class="text-center">
                    <h2 class="wow fadeInLeft">TESTIMONIALS</h2>
                    <div class="title-line wow fadeInRight"></div>
                </div>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">	
                        <div id="owl-testi" class="owl-carousel owl-theme wow fadeInUp">

                            <!-- /.testimonial 1 -->
                            <div class="testi-item">
                                <div class="client-pic text-center">

                                    <!-- /.client photo -->
                                    <img src="{{asset('public_theme/images/testimonial1.jpg')}}" alt="client">
                                </div>
                                <div class="box">

                                    <!-- /.testimonial content -->
                                    <p class="message text-center">"
                                        Phasellus vitae mauris id sem malesuada viverra. Sed porttitor tempor sapien, a tempor urna vestibulum sed. Proin erat nisi, dictum et nunc non, ornare congue est. Praesent in euismod sem, et egestas lorem Nunc et orci ac neque semper. 
                                        "</p>
                                </div>
                                <div class="client-info text-center">

                                    <!-- /.client name -->
                                    Kimaro Kyoto, <span class="company">Microsoft</span>	
                                </div>
                            </div>		

                            <!-- /.testimonial 2 -->
                            <div class="testi-item">
                                <div class="client-pic text-center">

                                    <!-- /.client photo -->
                                    <img src="{{asset('public_theme/images/testimonial2.jpg')}}" alt="client">
                                </div>
                                <div class="box">

                                    <!-- /.testimonial content -->
                                    <p class="message text-center">"Everything looks great... 
                                        Donec ullamcorper nulla sed eleifend sagittis. Donec dapibus volutpat risus, id commodo dolor. Mauris interdum commodo neque, in tristique tellus soll."</p>
                                </div>
                                <div class="client-info text-center">

                                    <!-- /.client name -->
                                    Mike Portnoy, <span class="company">ImortalTheme</span>	
                                </div>
                            </div>				

                            <!-- /.testimonial 3 -->
                            <div class="testi-item">
                                <div class="client-pic text-center">

                                    <!-- /.client photo -->
                                    <img src="{{asset('public_theme/images/testimonial3.jpg')}}" alt="client">
                                </div>
                                <div class="box">

                                    <!-- /.testimonial content -->
                                    <p class="message text-center">"
                                        Nulla eget dictum diam. Maecenas sed enim sed erat lobortis finibus. Sed non arcu lacinia, posuere orci ut, suscipit tortor. Etiam id nulla vel libero porta fringilla. Nunc porta at lacus a convallis."</p>
                                </div>
                                <div class="client-info text-center">

                                    <!-- /.client name -->
                                    Jennifer Hewitt, <span class="company">ImortalTheme</span>	
                                </div>
                            </div>			

                        </div>
                    </div>	
                </div>	
            </div>
        </div>

        <!-- /.footer -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="">
                        <div class="col-md-4 col-sm-6">
                            <h4>Where to find us</h4>
                            <p><strong>Amman</strong>
                                <br>irbid street
                                <br>Amman <br >  
                                <strong>Jordan</strong>
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
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
        <script src="{{asset('public_theme/js/google.js')}}"></script> 
        <script src="{{asset('public_theme/js/booking.js')}}"></script> 
        <script src="{{asset('public_theme/js/bootstrap-hover-dropdown.js')}}"></script> 
        <script src="{{asset('public_theme/js/jquery.validate.min.js')}}"></script> 

        <script src="{{asset('public_theme/js/snap.svg-min.js')}}"></script> 
        <script src="{{asset('public_theme/js/hovers.js')}}"></script> 


        <script>
                                                new WOW().init();
                                                $('#date_time').datetimepicker({
                                                    format: 'dd/MM/yyyy hh:mm:ss',
                                                    language: 'en-US',
                                                    pickDate: true, // disables the date picker
                                                    pickTime: true
                                                });
        </script>

        <script>
            (function () {
                function init() {
                    var speed = 250,
                            easing = mina.easeinout;
                    [].slice.call(document.querySelectorAll('#carssections > div')).forEach(function (el) {
                        var s = Snap(el.querySelector('svg')), path = s.select('path'),
                                pathConfig = {
                                    from: path.attr('d'),
                                    to: el.getAttribute('data-path-hover')
                                };

                        el.addEventListener('mouseenter', function () {
                            path.animate({'path': pathConfig.to}, speed, easing);
                        });

                        el.addEventListener('mouseleave', function () {
                            path.animate({'path': pathConfig.from}, speed, easing);
                        });
                    });
                }
                init();
            })();
        </script>

    </body>
</html>