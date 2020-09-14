
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>UDINUS:KKI </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/flaticon.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/slicknav.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.min.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/magnific-popup.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/themify-icons.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/slick.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/nice-select.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
            <link rel="stylesheet" href="{{ asset('assets') }}/css/loading.css">
            {{-- <link rel="stylesheet" href="{{ asset('assets') }}/scss/style.scss"> --}}
        <style>
            html {
                scroll-behavior: smooth;
            }
            .img-block {
                position: relative;
                transform: scale(1.45) translateY(-270px) translateX(60px);
            }
            .img-block img {
                position: absolute;
            }
        </style>
   </head>

   <body>

    <!-- Preloader Start -->
    {{-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets') }}/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Preloader Start -->

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class='tetrominos'>
                    <div class='tetromino box1'></div>
                    <div class='tetromino box2'></div>
                    <div class='tetromino box3'></div>
                    <div class='tetromino box4'></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('assets') }}/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="#home"> Home</a></li>
                                        <li><a href="#panduan">Panduan</a></li>
                                        <li><a href="#berita">Pengumuman</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <a href="{{ route('prelogin') }}" class="btn header-btn">Masuk</a>
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
        <!-- Header End -->
    </header>

    <main>

        <!-- Slider Area Start-->
        <div class="slider-area " id="home">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="{{ asset('assets') }}/img/hero/h1_hero.png">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-7 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">Sistem Pemilihan<br> Dosen Pembimbing KKI</h1>
                                    <h4 data-animation="fadeInLeft" data-delay=".6s">Fakultas Ilmu Komputer - Teknik Informatika</h4>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="{{ route('prelogin') }}" class="btn hero-btn">Masuk</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="hero__img img-block d-none d-lg-block" >
                                    <img src="{{ asset('assets') }}/img/hero/hero_kanan1.png" alt="" data-animation="fadeInRight" data-delay="4.95s">
                                    <img src="{{ asset('assets') }}/img/hero/hero_kanan2.png" alt="" data-animation="fadeInLeft" data-delay="4.6s">
                                    <img src="{{ asset('assets') }}/img/hero/hero_kanan3.png" alt="" data-animation="jackInTheBox" data-delay="5.2s">
                                    <img src="{{ asset('assets') }}/img/hero/hero_kanan4.png" alt="" data-animation="fadeInUp" data-delay="3s"> <!-- Meja -->
                                    <img src="{{ asset('assets') }}/img/hero/hero_kanan5.png" alt="" data-animation="fadeInUp" data-delay="3.35s"> <!-- Orang1 -->
                                    <img src="{{ asset('assets') }}/img/hero/hero_kanan8.png" alt="" data-animation="fadeInDown" data-delay="3.7s"> <!-- Buku & awan -->
                                    <img src="{{ asset('assets') }}/img/hero/hero_kanan7.png" alt="" data-animation="bounceInLeft" data-delay="4.3s"> <!-- Tangga -->
                                    <img src="{{ asset('assets') }}/img/hero/hero_kanan9.png" alt="" data-animation="fadeIn" data-delay="4.05s"> <!-- Orang2 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End-->

        <!-- Visit Stuffs Start -->
        <div class="visit-area fix visite-padding" id="panduan">
            <div class="container">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 pr-0">
                        <div class="section-tittle text-center">
                            <h2>Panduan Alur Pemilihan Dosbing</h2>
                            <h4 class="mb-5">Tekan Masuk Lalu:</h4>
                        </div>
                    </div>
                    {{-- <div class="col-lg-12 pr-0">
                        <div class="hero__btn mb-3" style="text-align: center">
                            <a href="#" class="btn hero-btn">Masuk</a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row ">
                    <div class="col-lg-3 col-md-4">
                        <div class="single-visited mb-30">
                            <div class="visited-img">
                                <img src="{{ asset('assets') }}/img/visit/visit_1.png" alt="">
                            </div>
                            <div class="visited-cap">
                                <h3><a href="#">1. Check</a></h3>
                                <p>Apakah anda terdata?</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-4">
                        <div class="single-visited mb-30">
                            <div class="visited-img">
                                <img src="{{ asset('assets') }}/img/visit/visit_2.png" alt="">
                            </div>
                            <div class="visited-cap">
                                <h3><a href="#">2. Registrasi</a></h3>
                                <p>Daftar dan Konfirmasi Email</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="single-visited mb-30">
                            <div class="visited-img">
                                <img src="{{ asset('assets') }}/img/visit/visit_3.png" alt="">
                            </div>
                            <div class="visited-cap">
                                <h3><a href="#">3. Pilih</a></h3>
                                <p>Pilih Dosbing dari List yang Ada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="single-visited mb-30">
                            <div class="visited-img">
                                <img src="{{ asset('assets') }}/img/visit/visit_4.png" alt="">
                            </div>
                            <div class="visited-cap">
                                <h3><a href="#">4. Validasi</a></h3>
                                <p>Konfirmasi Pilihan untuk Di Lock</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 pr-0">
                        <div class="hero__btn mt-3" style="text-align: center">
                            <a href="{{ route('prelogin') }}" class="btn hero-btn">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Visit Stuffs Start -->

        <!-- Tips Triks Start -->
        <div class="tips-triks-area tips-padding" id="berita">
            <div class="container">
                 <!-- Section-tittle -->
                 <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-8 pr-0">
                        <div class="section-tittle text-center">
                            <h2>Tips and Tricks From Our Exparts</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="{{ asset('assets') }}/img/tips/berita_1.png" alt="">
                            </div>
                            <div class="tips-caption">
                                <h4><a href="#">Twice profit than before you ever got</a></h4>
                                <span>Continue Reading</span>
                                <p>March 3, 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="{{ asset('assets') }}/img/tips/tips_2.jpg" alt="">
                            </div>
                            <div class="tips-caption">
                                <h4><a href="#">Twice profit than before you ever got</a></h4>
                                <span>Continue Reading</span>
                                <p>March 3, 2020</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="{{ asset('assets') }}/img/tips/tips_3.jpg" alt="">
                            </div>
                            <div class="tips-caption">
                                <h4><a href="#">Twice profit than before you ever got</a></h4>
                                <span>Continue Reading</span>
                                <p>March 3, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tips Triks End -->
    </main>

   <footer>
       <!-- Footer Start-->
      <div class="footer-main" data-background="{{ asset('assets') }}/img/shape/footer_bg.png">
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex align-items-center">
                         <div class="col-xl-12 ">
                             <div class="footer-copy-right text-center">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https://colorlib.com" target="_blank">Colorlib</a> and UTim
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
      </div>
       <!-- Footer End-->

   </footer>

	<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('assets') }}/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('assets') }}/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{ asset('assets') }}/js/popper.min.js"></script>
        <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('assets') }}/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
        <script src="{{ asset('assets') }}/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="{{ asset('assets') }}/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('assets') }}/js/wow.min.js"></script>
		<script src="{{ asset('assets') }}/js/animated.headline.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('assets') }}/js/jquery.scrollUp.min.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.nice-select.min.js"></script>
		<script src="{{ asset('assets') }}/js/jquery.sticky.js"></script>

        <!-- contact js -->
        {{-- <script src="{{ asset('assets') }}/js/contact.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.form.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.validate.min.js"></script>
        <script src="{{ asset('assets') }}/js/mail-script.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.ajaxchimp.min.js"></script> --}}

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{ asset('assets') }}/js/plugins.js"></script>
        <script src="{{ asset('assets') }}/js/main.js"></script>

    </body>
</html>
