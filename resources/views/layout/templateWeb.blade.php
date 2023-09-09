<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Topic Listing Bootstrap 5 Template</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="{{ asset('kurva/css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('kurva/css/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{ asset('kurva/css/templatemo-topic-listing.css') }}" rel="stylesheet">      
<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    
    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        {{-- <i class="bi-back"></i> --}}
                        <img src="{{asset('/kurva/images/logo2.png')}}" width="200" alt="">
                        {{-- <span>{{ $header->site_name }}</span> --}}
                    </a>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Portofolio</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">How it works</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="topics-listing.html">Topics Listing</a></li>

                                    <li><a class="dropdown-item" href="contact.html">Contact Form</a></li>
                                </ul>
                            </li>
                        </ul>

                        {{-- <div class="d-none d-lg-block">
                            <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                        </div> --}}
                    </div>
                </div>
            </nav>
            @yield('container')
        </main>

<footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="index.html">
                            <img src="{{asset('/kurva/images/logo2.png')}}" width="200" alt="">
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Resources</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">How it works</a>
                            </li>


                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Information</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 305-240-9671" class="site-footer-link">
                                305-240-9671
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:info@company.com" class="site-footer-link">
                                info@company.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                        <p class="copyright-text">Copyright © 2023 Kurva Media Technology. All rights reserved.
                        
                    </div>

                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('kurva/js/jquery.min.js') }}"></script>
        <script src="{{ asset('kurva/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('kurva/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('kurva/js/click-scroll.js') }}"></script>
        <script src="{{ asset('kurva/js/custom.js') }}"></script>

    </body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gresik Migas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('Logis/assets/img/logo_migas.png')}}" rel="icon">
  <link href="{{asset('Logis/assets/img/logo_migas.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Logis/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Logis/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('Logis/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('Logis/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('Logis/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('Logis/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('Logis/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis - v1.3.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('Logis/assets/img/logo_migas.png')}}" alt="">
        <h1>{{ $header->site_name }}</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ route('about') }}" class="{{ (request()->is('profile')) ? 'active' : '' }}">Profile</a></li>
          <li><a href="{{ route('posting') }}" class="{{ (request()->is('posting')) ? 'active' : '' }}">Posting</a></li>
          <li><a href="{{ route('gallery-photos') }}" class="{{ (request()->is('gallery-photos')) ? 'active' : '' }}">Gallery Photos</a></li>
          <li><a href="{{ route('gallery-video') }}" class="{{ (request()->is('gallery-video')) ? 'active' : '' }}">Gallery Video</a></li>
          <li class="dropdown"><a href="#"><span>Hubungan Investor</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Pemegang Saham</a></li>
              <li><a href="#">Laporan Tahunan</a></li>
            </ul>
          </li>
          <li><a href="{{ route('contact') }}" class="{{ (request()->is('contact')) ? 'active' : '' }}">Contact</a></li>
          <li><a href="{{ route('download') }}" class="{{ (request()->is('download')) ? 'active' : '' }}">Download</a></li>
        </ul>
        
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

@yield('container')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>{{ $header->site_name }}</span>
          </a>
          <p>PT Gresik Migas atau sering disebut dengan PTGM adalah merupakan Badan Usaha Milik Daerah (BUMD) Kabupaten Gresik</p>
          <div class="social-links d-flex mt-4">
            <a href="https://twitter.com/gresikmigas" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/gresikmigas/?hl=id" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-10 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('about') }}">Profile</a></li>
            <li><a href="{{ route('posting') }}">Posting</a></li>
            <li><a href="{{ route('gallery-photos') }}">Gallery Photos</a></li>
            <li><a href="{{ route('gallery-video') }}">Gallery Video</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            {{ $contact->location }} <br>
            <strong>Phone:</strong> {{ $contact->phone }}<br>
            <strong>Email:</strong> {{ $contact->email }}<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Kurva</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('Logis/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Logis/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('Logis/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('Logis/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('Logis/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('Logis/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('Logis/assets/js/main.js')}}"></script>
  <script type="text/javascript" src="https://codegena.com/assets/js/youtube-embed.js"></script>
  

</body>

</html> --}}