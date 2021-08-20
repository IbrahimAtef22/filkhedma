<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{__('msg.list')}} </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder00-1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparent">
            <div class="main-header">
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                  <a href="/main"><img src="assets/img/logo/logo2_footer00.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="/main">{{__('msg.Home')}}</a></li>
                                            <li><a href="/about">{{__('msg.About')}}</a></li>
                                            {{-- <li><a href="catagori.html">{{__('msg.Catagories')}}</a></li> --}}
                                            {{-- <li><a href="listing.html">Listing</a></li> --}}
                                            {{-- <li><a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                    <li><a href="listing_details.html">Listing details</a></li>
                                                </ul>
                                            </li> --}}
                                            <li><a href="/contact">{{__('msg.Contactus')}}</a></li>  
                                            {{-- <li class="add-list"><a href="listing_details.html"><i class="ti-plus"></i> add Listing</a></li> --}}
                                            {{-- <li class="login"><a href="#">
                                                <i class="ti-user"></i> Sign in or Register</a>
                                            </li> --}}
                                            {{-- <ul>  --}}
                                                {{-- @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                   <li>
                                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    </li>
                                                @endforeach --}}

                                               
                                            {{-- </ul> --}}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>{{__('msg.Civil Registry')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- Categories Area Start -->
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>{{__('msg.We are offering for you')}} </span>
                            <h2>{{__('msg.Civil Registry Location')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
				  @forelse( $civilregistry as $cr )
	    				
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-problem"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">{{ $loop->index+1 }}</a></h5>
                                <p>{{$cr->name }}</p>
                                {{-- <p>{{$cr->address }}</p>
                                <p>{{$cr->phone }}</p> --}}
                                <p>{{$cr->city->name }}</p>
                                <a href="{{ route('getcivilregistry',$cr->id) }}">{{__('msg.View Details')}}</a>
                            </div>
                        </div>
                    </div>
					@empty
					   <div style="text-align:center"><h1 style="color:red">{{__('msg.No data Found')}} </h1></div>
	    			@endforelse
                    
        <!-- Categories Area End -->
        <!-- Services Area Start -->
        {{-- <div class="services-area pt-150 pb-150 section-bg" data-background="assets/img/gallery/section_bg02.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-80">
                            <span>Easy to explore</span>
                            <h2>How It Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-list"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">1. Choose a Category</a></h5>
                                <p>incidid labore lore magna aliqua uisipsum suspendis loris.</p>
                            </div>
                            <!-- Shpape -->
                            <img class="shape1 d-none d-lg-block" src="assets/img/icon/serices1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-problem"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">2. what you want</a></h5>
                                <p>incidid labore lore magna aliqua uisipsum suspendis loris.</p>
                            </div>
                            <img class="shape2 d-none d-lg-block" src="assets/img/icon/serices2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-respect"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">3. Go out & Explore</a></h5>
                                <p>incidid labore lore magna aliqua uisipsum suspendis loris.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Services Area End -->
        <!-- Popular Locations Start -->
        {{-- <div class="popular-location section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            {{-- <span>Most visited places</span> --}}
                            {{-- <h2>{{__('msg.Our Services')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/gallery/hospital.jpeg" alt="">
                            </div>
                            <div class="location-details">
                                <p> {{__('msg.Hospitals')}}</p>
                               <a href="/hospitalall" class="location-btn"> {{__('msg.Location')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/gallery/Tripura-paper.jpg" alt="">
                            </div>
                            <div class="location-details">
                                <p>{{__('msg.Civil Registry')}}</p>
                                <a href="/civilregistryall" class="location-btn"> {{__('msg.Location')}}</a>
                            </div>
                        </div>
                    </div>
                   
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/gallery/pharmacist.jpg" alt="">
                            </div>
                            <div class="location-details">
                                <p>{{__('msg.Pharmacies')}}</p>
                                <a href="/pharmacyall" class="location-btn"> {{__('msg.Location')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/gallery/postoffice.jpg" alt="">
                            </div>
                            <div class="location-details">
                                <p>{{__('msg.Post Offices')}}</p>
                                <a href="/postofficeall" class="location-btn"> {{__('msg.Location')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}} 
        <!-- Popular Locations End -->

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area" align="right">
            <div class="container">
               <div class="footer-top footer-padding">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="/main"><img src="assets/img/logo/logo2_footer00.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>{{__('msg.Quick Link')}}</h4>
                                    <ul>
                                        <li><a href="/main">{{__('msg.Home')}}</a></li>
                                        <li><a href="/about">{{__('msg.About')}}</a></li>
                                        <li><a href="/contact">{{__('msg.Contactus')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>{{__('msg.Catagories')}}</h4>
                                    <ul>
                                        <li><a href="/hospitalall">{{__('msg.Hospitals')}}</a></li>
                                        <li><a href="/civilregistryall">{{__('msg.Civil Registry')}}</a></li>
                                        {{-- <li><a href="#">{{__('msg.Universities')}}</a></li> --}}
                                        <li><a href="/pharmacyall">{{__('msg.Pharmacies')}}</a></li>
                                        <li><a href="/postofficeall">{{__('msg.Post Offices')}}</a></li>
                                        {{-- <li><a href="#">{{__('msg.indonesia')}}</a></li>      --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    {{-- <h4>Download App</h4>
                                    <ul>
                                        <li class="app-log"><a href="#"><img src="assets/img/gallery/app-logo.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/gallery/app-logo2.png" alt=""></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="/about" target="_blank">ITI-Aswan/Team-D</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            {{-- <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>