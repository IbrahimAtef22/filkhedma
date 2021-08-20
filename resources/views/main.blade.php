<!doctype html>
<html class="no-js" lang="zxx">
    <head>
      
        <style>
         .contanier{
            text-align:right;
        }
            </style>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{__('msg.list')}}</title>
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
    <!-- Preloader Start -->
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
                            <div class="col-xl-10 col-lg-10 col-md-8" ,text-lift>
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="/main">{{__('msg.Home')}}</a></li>
                                            <li><a href="/about">{{__('msg.About')}}</a></li>
                                            {{-- <li><a href="/">{{__('msg.Admin')}}</a></li> --}}
                                            {{-- <li><a href="listing.html">Listing</a></li> --}}
                                             {{-- <li><a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                    <li><a href="listing_details.html">Listing details</a></li>
                                                </ul>
                                            </li>--}}
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

        <!-- Hero Area Start-->
        <div class="slider-area hero-overly">
            <div class="single-slider hero-overly  slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <!-- Hero Caption -->
                            <div class="hero__caption">
                                <span>{{__('msg.Explore the location')}}</span>
                                <h1>{{__('msg.Find Your Services')}} </h1>
                            </div>
                            <!--Hero form -->
                            <!-- <form action="#" class="search-box"> -->
                            <form action="{{ route('Search') }}" method="GET" class="search-box">
                            <div class="select-form">
                                    <div class="select-itms">
                                        <select name="city_id" id="select1">
                                            <option value="0">{{__('msg.Select City')}}</option>
                                            @foreach (\App\Models\City::select('id','name')->get() as $city)
                                                <option value="{{ $city->id }}" >
                                                {{ $city['name'] }}
                                                </option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="select-form">
                                    <div class="select-itms">
                                        <select name="select" id="select1">
                                            <option value="">Services</option>
                                            <option <a href="/hospital">Hospitals</a></option>
                                            
                                            <option <a href="/government">Government Deparments</a></option>
                                        </select>
                                    </div>
                                </div> -->
                                
                                <div class="select-form">
                                    <div class="select-itms">
                                    <select name="service" id="select1">
                                            <option value="0">{{__('msg.Select Service')}}</option>
                                                <option value="pharmacies" > {{__('msg.Pharmacies')}}
                                                </option>
                                                <option value="postoffice" > {{__('msg.Post Offices')}}
                                                </option>
                                                <option value="civilregistry"> {{__('msg.Civil Registry')}}
                                                </option>
                                                <option value="hospitals"> {{__('msg.Hospitals')}}
                                                </option>
                                       </select>
                                    </div>
                                </div>
                                <div class="search-form">
                                   <input type="submit" class="btn btn-danger btn-sm" value="{{__('msg.Search')}}"> 
                                </div>	
                            </form>	
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
        <!--Hero Area End-->
        <!-- Popular Locations Start -->
        <div class="popular-location section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            {{-- <span>Most visited places</span> --}}
                            <h2>{{__('msg.Our Services')}}</h2>
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
        </div>
                  {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/gallery/universities.jpg" alt="">
                            </div>
                            <div class="location-details">
                                <p>{{__('msg.Universities')}}</p>
                                <a href="#" class="location-btn">50 <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/gallery/location6.png" alt="">
                            </div>
                            <div class="location-details">
                                <p>{{__('msg.indonesia')}}</p>
                                <a href="#" class="location-btn">78 <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div> --}}
                
                <!-- More Btn -->
                {{-- <div class="row justify-content-center">
                    <div class="room-btn pt-20">
                        <a href="catagori.html" class="btn view-btn1">View All Places</a>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Popular Locations End -->
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
        <!-- Categories Area Start -->
        {{-- <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>We are offering for you</span>
                            <h2>Featured Categories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-bed"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="catagori.html">Leving Hotel</a></h5>
                                <p>Must explain your how this keind denoun pleasure</p>
                                <a href="catagori.html">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-drink"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="catagori.html">Night Life</a></h5>
                                <p>Must explain your how this keind denoun pleasure</p>
                                <a href="catagori.html">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-home"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="catagori.html">Culture Place</a></h5>
                                <p>Must explain your how this keind denoun pleasure</p>
                                <a href="catagori.html">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-food"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="catagori.html">Resturent</a></h5>
                                <p>Must explain your how this keind denoun pleasure</p>
                                <a href="catagori.html">View Details</a>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div> --}}
        <!-- Categories Area End -->
         <!-- peoples-visit Start -->
         <div class="peoples-visit dining-padding-top" align="right">
            <!-- Single Left img -->
            <div class="single-visit left-img">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8">
                            <div class="visit-caption">
                                <span>{{__('msg.We are offering for you')}}</span>
                                <h3>{{__('msg.Find many places easily and safely.')}}
                                </h3>
                                
                                <!--Single Visit categories -->
                                <div class="visit-categories mb-40">
                                    <div class="visit-location">
                                        <span class="flaticon-travel"></span>
                                    </div>
                                    <div class="visit-cap">
                                        <h4>{{__('msg.Get what you are looking forward in one platform.')}}
                                        </h4>
                                        
                                    </div>
                                </div>
                                <!--Single Visit categories -->
                                <div class="visit-categories">
                                    <div class="visit-location">
                                        <span class="flaticon-work"></span>
                                    </div>
                                    <div class="visit-cap">
                                        <h4>{{__('msg.Know your nearest service places that facilitate your daily directions.')}}</h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- peoples-visit End -->
        <!-- Testimonial Start -->
        {{-- <div class="testimonial-area testimonial-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>{{__('msg.Our client testimonials')}}</span>
                            <h2>{{__('msg.What our client say')}}</h2>
                        </div> 
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-11 col-md-11">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <p></p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center mb-30">
                                        <div class="founder-img">
                                            <img src="assets/img/testmonial/PP4.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Ibrahim Atef</span>
                                            <p>Information Technology Institute</p>
                                            <p>Web Developer</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <p></p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center mb-30">
                                        <div class="founder-img">
                                            <img src="assets/img/testmonial/PP1.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>lobna hassan</span>
                                            <p>Information Technology Institute</p>
                                            <p>Web Developer</p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <p></p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center mb-30">
                                        <div class="founder-img">
                                            <img src="assets/img/testmonial/PP2.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Asmaa Radwan</span>
                                            <p>Information Technology Institute</p>
                                            <p>Web Developer</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <p> </p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center mb-30">
                                        <div class="founder-img">
                                            <img src="assets/img/testmonial/PP3.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Esraa Hamada</span>
                                            <p>Information Technology Institute</p>
                                            <p>Web Developer</p>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Testimonial End -->
        <!-- Subscribe Area Start -->
        {{-- <div class="subscribe-area section-bg pt-150 pb-150" data-background="assets/img/gallery/section_bg04.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-40">
                            <span>Subscribe out newslatter</span>
                            <h2>Subscribe For Newsletter</h2>
                        </div> 
                        <!--Hero form -->
                        <form action="#" class="search-box">
                            <div class="input-form">
                                <input type="text" placeholder="What are you looking for?">
                            </div>
                            <div class="search-form">
                                <a href="#">Send Now</a>
                            </div>	
                        </form>	
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Subscribe Area End -->
        <!-- Blog Ara Start -->
         {{-- <div class="home-blog-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>{{__('msg.Our blog')}}</span>
                            <h2>{{__('msg.News and tips')}}</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/gallery/home_blog1.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span>{{__('msg.HEALTH & CARE1')}}</span>
                                <h3><a href="blog.html">The Best SPA Salons For
                                    Your Relaxation</a></h3>
                                <p>October 6, 2020by Steve</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/gallery/home_blog2.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span>{{__('msg.HEALTH & CARE2')}}</span>
                                <h3><a href="blog.html">The Best SPA Salons For
                                    Your Relaxation</a></h3>
                                <p>October 6, 2020by Steve</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/gallery/home_blog3.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span>{{__('msg.HEALTH & CARE3')}}</span>
                                <h3><a href="blog.html">The Best SPA Salons For
                                    Your Relaxation</a></h3>
                                <p>October 6, 2020by Steve</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Blog Ara End -->

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
                            </div>  --}}
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
