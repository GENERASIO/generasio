@php
    $menus = App\Models\Menu::with('submenu')->where('status', 'active')->whereNull('parent_id')->get();
    $contacts = App\Models\Contact::where('status', 'active')->get();
    $socmeds = App\Models\Socmed::where('status', 'active')->get();
@endphp

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
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                    <ul class="navigation">
                                        @foreach ($menus as $menu)
                                            <li class="{{ url($menu->url) == url()->current() . '/ ' ? 'active' : '' }} {{ request()->is($menu->url) ? 'active' : '' }} {{ request()->is('/'.$menu->url) ? 'active' : '' }}"><a href="{{ url($menu->url) }}">{{ $menu->title }}</a>
                                                @if (!empty($menu->submenu) && count($menu->submenu) > 0)
                                                    <ul class="sub-menu">
                                                        @foreach ($menu->submenu as $submenu)
                                                            <li class="{{ url()->current() == url() ? 'active' : '' }} {{ request()->is($menu->url) ? 'active' : '' }} {{ request()->is('/'.$menu->url) ? 'active' : '' }}"><a href="{{ url($submenu->url) }}">{{ $submenu->title }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                        {{-- <li class="menu-item-has-children"><a href="{{ url('service') }}">Layanan</a>
                                        </li> --}}
                                    </ul>
                                </div>
                                <div class="tgmenu__action d-none d-md-block">
                                    <ul class="list-wrap">
                                        {{-- <li class="search"><a href="#"><i class="flaticon-search-1"></i></a></li> --}}
                                        <li class="header-btn"><a href="{{ url('application') }}" class="tg-border-btn"><i class="flaticon-edit"></i> ~sign in</a></li>
                                        <li class="side-toggle-icon">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </li>
                                    </ul>
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
                            @foreach ($contacts as $contact)
                                <li><a href="{{ $contact->url }}" target="_blank">{{ $contact->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="offCanvas__newsletter">
                        <h4 class="small-title">Reseller</h4>
                        <form action="{{ url('') }}" class="offCanvas__newsletter-form">
                            <input type="email" placeholder="Masukan email anda">
                            <button type="submit"><i class="flaticon-send"></i></button>
                        </form>
                        <p>Kirimkan email anda untuk penawaran reseller kami</p>
                    </div>
                    <ul class="offCanvas__social list-wrap">
                        @foreach ($socmeds as $socmed)
                            <li><a href="{{ $socmed->url }}" target="_blank"><i class="{{ $socmed->icon }}"></i></a></li>
                        @endforeach
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

        @yield('content')

    </main>
    <!-- main-area-end -->


    <!-- footer-start -->
    <footer class="footer-style-one">
        <div class="footer__top-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7">
                        <div class="footer-widget">
                            <div class="footer-logo logo">
                                <a href="{{ url('') }}"><img src="{{ asset('mykd') }}/assets/img/logo/generasio.png" alt="Logo Generasio" loading="lazy"></a>
                            </div>
                            <div class="footer-text">
                                <p class="desc">Generasio adalah solusi terbaik untuk kebutuhan online Anda! Kami menyediakan beragam layanan yang akan memudahkan Anda dalam mengelola kehidupan digital Anda.</p>
                                <p class="social-title">Ikuti <span>Kami <i class="fas fa-angle-double-right"></i></span></p>
                                <div class="footer-social">
                                    @foreach ($socmeds as $socmed)
                                        @if (!empty($socmed->file))
                                            <a href="{{ $socmed->url }}" target="_blank"><img src="{{ asset($socmed->file_dir) . '/' . $socmed->file }}" alt="Icon {{ $socmed->name }} Generasio" loading="lazy"></a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-5 col-sm-6">
                        <div class="footer-widget widget_nav_menu">
                            <h4 class="fw-title">link</h4>
                            <ul class="list-wrap menu">
                                <li><a href="{{ url('') }}">Beranda</a></li>
                                <li><a href="{{ url('about') }}">Tentang Kami</a></li>
                                <li><a href="{{ url('service') }}">Layanan</a></li>
                                <li><a href="{{ url('article') }}">Artikel</a></li>
                                <li><a href="{{ url('transaction') }}">Transaksi</a></li>
                                <li><a href="{{ url('application') }}">Sign In</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-5 col-sm-6">
                        <div class="footer-widget widget_nav_menu">
                            <h4 class="fw-title">Lainnya</h4>
                            <ul class="list-wrap menu">
                                <li><a href="{{ url('term') }}">Terms & Privacy</a></li>
                                <li><a href="{{ url('help') }}">Help & Support</a></li>
                                <li><a href="{{ url('credit') }}">Credits</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-7">
                        <div class="footer-widget">
                            <h4 class="fw-title">Reseller</h4>
                            <div class="footer-newsletter">
                                <p>Kirimkan email anda untuk penawaran reseller kami</p>
                                <form action="{{ url('') }}" class="footer-newsletter-form">
                                    <input type="email" placeholder="Masukan Email Anda">
                                    <button type="submit"><i class="flaticon-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="copyright__text">
                            <p>Copyright © 2023 - All Rights Reserved By <span>Generasio</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-start-end -->



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