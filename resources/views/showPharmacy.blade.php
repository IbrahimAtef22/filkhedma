<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{__('msg.list')}} </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('assets/img/favicon.ico') }}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ URL::to('assets/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ URL::to('assets/css/slicknav.css') }}">
            <link rel="stylesheet" href="{{ URL::to('assets/css/flaticon.css') }}">
            <link rel="stylesheet" href="{{ URL::to('assets/css/animate.min.css') }}">
            <link rel="stylesheet" href="{{ URL::to('assets/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ URL::to('assets/css/fontawesome-all.min.css') }}">
            <link rel="stylesheet" href="{{ URL::to('assets/css/themify-icons.css') }}">
            <link rel="stylesheet" href="{{ URL::to('assets/css/slick.css') }}">
            <link rel="stylesheet" href="{{ URL::to('assets/css/nice-select.css') }}">
            <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ URL::to('assets/img/logo/loder00-1.png') }}" alt="">
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
                                <div class="logo" dir="rtl">
                                  <a href="/main"><img src="{{ URL::to('assets/img/logo/logo2_footer00.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-8" ,text-lift>
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
                            <h2>{{__('msg.Pharmacy in Detail')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="categories-area section-padding30" align="right">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{__('msg.Name')}}:</strong>
                            {{$pharmacy->name }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{__('msg.Phone')}}:</strong>
                            {{$pharmacy->phone}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        {{-- <div class="form-group">
                            <strong>Delivery:</strong>
                            {{$pharmacy->delivery}}
                        </div> --}}
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{__('msg.City')}}:</strong>
                            {{DB::table('cities')->where('id',$pharmacy->city_id)->value('name')}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{__('msg.Address')}}:</strong>
                            {{$pharmacy->address}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div><strong>{{__('msg.Map')}}</strong></div>
                            {!! $pharmacy->map !!}
                        </div>
                    </div>
                </div>
            </div>
    </div>
  
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
                                        <a href="/main"><img src="{{ URL::to('assets/img/logo/logo2_footer00.png') }}" alt=""></a>
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
        <script src="{{ URL::to('./assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ URL::to('./assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ URL::to('./assets/js/popper.min.js') }}"></script>
        <script src="{{ URL::to('./assets/js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ URL::to('./assets/js/jquery.slicknav.min.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ URL::to('./assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ URL::to('./assets/js/slick.min.js') }}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ URL::to('./assets/js/wow.min.js') }}"></script>
		<script src="{{ URL::to('./assets/js/animated.headline.js') }}"></script>
        <script src="{{ URL::to('./assets/js/jquery.magnific-popup.js') }}"></script>

		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ URL::to('./assets/js/jquery.sticky.js') }}"></script>
        
        <!-- contact js -->
        <script src="{{ URL::to('./assets/js/contact.js') }}"></script>
        <script src="{{ URL::to('./assets/js/jquery.form.js') }}"></script>
        <script src="{{ URL::to('./assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ URL::to('./assets/js/mail-script.js') }}"></script>
        <script src="{{ URL::to('./assets/js/jquery.ajaxchimp.min.js') }}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{ URL::to('./assets/js/plugins.js') }}"></script>
        <script src="{{ URL::to('./assets/js/main.js') }}"></script>
        
    </body>
</html>