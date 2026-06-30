<!doctype html>
<html class="no-js" lang="en">
<head>
    
    <meta charset="UTF-8">

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', $pageTitle ?? 'Home') | Generasio Online Store</title>
    <meta name='robots' content='max-image-preview:large' />

    {{-- basic meta --}}
    <meta charset="utf-8" />
    <meta name="description" content="@yield('description', $pageDescription ?? 'Generasio adalah solusi terbaik untuk kebutuhan online Anda! Kami menyediakan beragam layanan yang akan memudahkan Anda dalam mengelola kehidupan digital Anda. Dengan Generasio, Anda dapat melakukan top up game favorit Anda, membayar tagihan online dengan cepat dan mudah, serta meningkatkan kehadiran Anda di media sosial.')" />
    <meta name="keywords" content="@yield('keywords', $pageKeywords ?? 'Top Up Game Online, Top Up Mobile Legends, Top Up Diamond, Top Up Murah, Pembayaran Tagihan Online, Jasa Sosial Media, Beli Diamond Game, Pembayaran Listrik Online, Penambah Followers Instagram, Pembelian Coin Game, Bayar Tagihan Internet, Jasa Like Instagram, Voucher Game Online, Pembayaran Tagihan Air, Layanan Media Sosial, Jual Followers Facebook, Top Up Saldo Game, Pembayaran Tagihan Pulsa, Layanan Sosial Media Terpercaya, Beli Followers Twitter, Beli Like Facebook, Top Up Game Mobile Legends, Layanan Pembayaran Online Aman, Generasio')" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- system meta --}}
    <meta name="robots" content="index,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- meta props --}}
    <meta property="og:locale" content="id" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title', $pageTitle ?? 'Home')" />
    <meta property="og:url" content="https://generasio.dynastina.com/" />
    <meta property="og:site_name" content="@yield('title', $pageTitle ?? 'Home') | Generasio Online Store" />

    {{-- Open Graph --}}
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', $pageTitle ?? 'Home') | Generasio Online Store" />
    <meta property="og:description" content="@yield('description', $pageDescription ?? 'Generasio adalah solusi terbaik untuk kebutuhan online Anda! Kami menyediakan beragam layanan yang akan memudahkan Anda dalam mengelola kehidupan digital Anda. Dengan Generasio, Anda dapat melakukan top up game favorit Anda, membayar tagihan online dengan cepat dan mudah, serta meningkatkan kehadiran Anda di media sosial.')">
    <meta property="og:url" content="@yield('url', $pageUrl ?? 'https://generasio.dynastina.com/')" />
    <meta property="og:site_name" content="@yield('title', $pageTitle ?? 'Home')" />
    <meta property="og:image" content="{{ asset('') }}/mykd/assets/img/logo/generasio.png" />
    <meta property="og:image:secure_url" content="{{ asset('') }}/mykd/assets/img/logo/generasio.png" />
    <meta property="og:image:type" content="image/ico" />
    <meta property="og:image:width" content="256" />
    <meta property="og:image:height" content="256" />

    {{-- Twitter --}}
    <meta name="twitter:title" content="@yield('title', $pageTitle ?? 'Home') | Generasio Online Store">
    <meta name="twitter:description" content="@yield('description', $pageDescription ?? 'Generasio adalah solusi terbaik untuk kebutuhan online Anda! Kami menyediakan beragam layanan yang akan memudahkan Anda dalam mengelola kehidupan digital Anda. Dengan Generasio, Anda dapat melakukan top up game favorit Anda, membayar tagihan online dengan cepat dan mudah, serta meningkatkan kehadiran Anda di media sosial.')">
    <meta name="twitter:image" content="{{ asset('') }}/mykd/assets/img/logo/generasio.png">
    <meta name="twitter:image:src" content="{{ asset('') }}/mykd/assets/img/logo/generasio.png">

    <!-- Link -->
    <link rel="canonical" href="https://generasio.dynastina.com/" />
    <link rel="shortcut icon" href="{{ asset('') }}/mykd/assets/img/logo/generasio.png" />

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('mykd') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('mykd') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('mykd') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('mykd') }}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('mykd') }}/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{ asset('mykd') }}/assets/css/tg-cursor.css">
    <link rel="stylesheet" href="{{ asset('mykd') }}/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('mykd') }}/assets/css/odometer.css">
    <link rel="stylesheet" href="{{ asset('mykd') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('mykd') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('mykd') }}/assets/css/spacing.css">
    <link rel="stylesheet" href="{{ asset('mykd') }}/assets/css/main.css">

    @yield('link')

    <!-- Page-Revealer -->
    <script src="{{ asset('mykd') }}/assets/js/tg-page-head.js"></script>

    @yield('header-script')

</head>

<body>


    <!-- scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="flaticon-right-arrow"></i>
    </button>
    <!-- scroll-top-end-->

    <!-- header-area -->
    <header>
        <div id="sticky-header" class="tg-header__area transparent-header">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo" style="
                                margin: 0 0;
                                font-size: 24px;
                                text-transform: uppercase;
                                font-weight: 700;
                                letter-spacing: 5px;
                                line-height: 1.4;
                                color: var(--tg-common-color-white);">
                                    <a href="{{ url('') }}" style="color: white;">
                                        Generasio
                                    </a>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="tgmobile__menu">
                            <nav class="tgmobile__menu-box">
                                <div class="close-btn"><i class="flaticon-swords-in-cross-arrangement"></i></div>
                                <div class="nav-logo">
                                    <a href="{{ url('') }}"><img src="{{ asset('mykd') }}/assets/img/logo/generasio.png" alt="Logo Generasio"></a>
                                </div>
                                <div class="tgmobile__search">
                                    <form action="#">
                                        <input type="text" placeholder="Search here...">
                                        <button><i class="flaticon-loupe"></i></button>
                                    </form>
                                </div>
                                <div class="tgmobile__menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="tgmobile__menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>

        <!-- header-search -->
        <div class="search__popup-wrap">
            <div class="search__layer"></div>
            <div class="search__close">
                <span><i class="flaticon-swords-in-cross-arrangement"></i></span>
            </div>
            <div class="search__wrap text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title">... <span>Search Here</span> ...</h2>
                            <div class="search__form">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Type keywords here" required>
                                    <button class="search-btn"><i class="flaticon-loupe"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-search-end -->

        <!-- offCanvas-area -->
        <div class="offCanvas__wrap">
            <div class="offCanvas__body">
                <div class="offCanvas__top">
                    <div class="offCanvas__logo logo">
                        <a href="{{ url('') }}"><img src="{{ asset('mykd') }}/assets/img/logo/generasio.png" alt="Logo Generasio"></a>
                    </div>
                    <div class="offCanvas__toggle">
                        <i class="flaticon-swords-in-cross-arrangement"></i>
                    </div>
                </div>
                <div class="offCanvas__content">
                    <h2 class="title">Harga terbaik untuk layanan <span>online</span></h2>
                    <div class="offCanvas__contact">
                        <h4 class="small-title">Hubungi Kami</h4>
                        <ul class="offCanvas__contact-list list-wrap">
                            <li><a href="tel:93332225557">+9 333 222 5557</a></li>
                            <li><a href="mailto:info@webmail.com">info@webmail.com</a></li>
                            <li>New Central Park W7 Street ,New York</li>
                        </ul>
                    </div>
                    <div class="offCanvas__newsletter">
                        <h4 class="small-title">Reseller</h4>
                        <form action="#" class="offCanvas__newsletter-form">
                            <input type="email" placeholder="Masukan email anda">
                            <button type="submit"><i class="flaticon-send"></i></button>
                        </form>
                        <p>Kirimkan email anda untuk penawaran reseller kami</p>
                    </div>
                    <ul class="offCanvas__social list-wrap">
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
                <div class="offCanvas__copyright">
                    <p>Copyright © 2023 - By <span>Generasio</span></p>
                </div>
            </div>
        </div>
        <div class="offCanvas__overlay"></div>
        <!-- offCanvas-area-end -->

    </header>
    <!-- header-area-end -->



    <!-- main-area -->
    <main class="main--area">

        <!-- slider-area -->
        <section class="slider__area slider__bg" data-background="{{ asset('mykd') }}/assets/img/slider/slider_bg.jpg">
            <div class="slider-activee">
                <div class="single-slider">
                    <div class="container custom-container">
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="slider__content">
                                    <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s">online gaming</h6>
                                    <h2 class="title wow fadeInUp" data-wow-delay=".5s">coming soon</h2>
                                    <p class="wow fadeInUp" data-wow-delay=".8s">aman & termurah</p>
                                    <div class="slider__btn wow fadeInUp" data-wow-delay="1.2s">
                                        <a href="https://wa.me/+6285777815955?text=bang%20beli%20bang" class="tg-btn-1"><span>beli sekarang</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-5 col-lg-6">
                                <div class="slider__img text-center">
                                    <img src="{{ asset('mykd') }}/assets/img/slider/slider_img01_real.png" data-magnetic alt="img" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__shapes">
                <img src="{{ asset('mykd') }}/assets/img/slider/slider_shape01.png" alt="shape" loading="lazy">
                <img src="{{ asset('mykd') }}/assets/img/slider/slider_shape02.png" alt="shape" loading="lazy">
                <img src="{{ asset('mykd') }}/assets/img/slider/slider_shape03.png" alt="shape" loading="lazy">
                <img src="{{ asset('mykd') }}/assets/img/slider/slider_shape04.png" alt="shape" loading="lazy">
            </div>
        </section>
        <!-- slider-area-end -->

    </main>
    <!-- main-area-end -->


    <!-- JS here -->
    <script src="{{ asset('mykd') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/jquery.odometer.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/simpleParallax.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/jquery-ui.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/gsap.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/scrollTrigger.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/splitText.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/jquery.appear.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/tg-cursor.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/swiper-bundle.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/jarallax.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/parallax.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/slick.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/ajax-form.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/vivus.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('mykd') }}/assets/js/main.js"></script>

    <script>
        
        var latitude = '';
        var longitude = '';
        var pageTitle = `{{ $pageTitle ?? 'Beranda' }}`;

        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(function(position) {
                latitude = position.coords.latitude;
                longitude = position.coords.longitude;

            }, function(error) {
                switch(error.code) {
                    case error.PERMISSION_DENIED:
                        console.log("Pengguna tidak memberikan izin untuk mengambil lokasi.");
                        break;
                    case error.POSITION_UNAVAILABLE:
                        console.log("Lokasi pengguna tidak tersedia.");
                        break;
                    case error.TIMEOUT:
                        console.log("Waktu permintaan lokasi habis.");
                        break;
                    case error.UNKNOWN_ERROR:
                        console.log("Terjadi kesalahan yang tidak diketahui.");
                        break;
                }
            });
        } else {
            console.log("Geolocation tidak didukung oleh browser Anda.");
        }

        console.log(latitude);
        console.log(longitude);

        $.ajax({
            url: `{{ route('api.get-visitor') }}`,
            data: {latitude:latitude, longitude:longitude, pageTitle: pageTitle},
            dataType: 'json',
            success: function(result) {

            }
        });

    </script>
    
    @yield('footer-script')

</body>

</html>