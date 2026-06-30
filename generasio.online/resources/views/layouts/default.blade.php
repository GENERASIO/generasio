<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />

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

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('demo34/dist') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('demo34/dist') }}/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('demo34/dist') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('demo34/dist') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

	@yield('links')

    <style>
        @media only screen and (max-width: 400px) {
            .kt_app_content_container {
                margin-bottom: 100px !important;
            }
        }

        .skeleton-box {
            display: inline-block;
            height: 1em;
            position: relative;
            overflow: hidden;
            background-color: #dddbdd;
        }

        .skeleton-box::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transform: translateX(-100%);
            background-image: linear-gradient(90deg, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0.2) 20%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0));
            animation: shimmer 2s infinite;
            content: '';
        }

        @keyframes shimmer {
            100% {
                transform: translateX(100%);
            }
        }

        .blog-post__headline {
            font-size: 1.25em;
            font-weight: bold;
        }

        .blog-post__meta {
            font-size: 0.85em;
            color: #6b6b6b;
        }

        .o-media {
            display: flex;
        }

        .o-media__body {
            flex-grow: 1;
            margin-left: 1em;
        }

        .o-vertical-spacing>*+* {
            margin-top: 0.75em;
        }

        .o-vertical-spacing--l>*+* {
            margin-top: 2em;
        }

        * {
            box-sizing: border-box;
        }

        /* dropdown */
        /* The container <div> - needed to position the dropdown content */
            .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff !important;
            min-width: 160px;
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);
            z-index: 10;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: var(--kt-input-color) !important;
            padding: 9px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        .dropdown-content button {
            color: var(--kt-input-color) !important;
            text-decoration: none;
            display: block;
            width: 100%;
            padding: 9px;
            background: none;
            border: none;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content button:hover {
            background-color: #f1f1f1
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: var(--kt-input-bg) !important;
        }

        .cke_top{
            background-color: var(--kt-input-bg) !important;
        }
        .cke_bottom{
            background-color: var(--kt-input-bg) !important;
        }
        .cke_editable{
            background-color: var(--kt-input-bg) !important;
        }
        .cke_wysiwyg_frame, .cke_wysiwyg_div{
            background-color: var(--kt-input-bg) !important;
        }

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #17191E;
            /* change if the mask should have another color then white */
            z-index: 99999;
            /* makes sure it stays on top */
        }

        #status {
            width: 100px;
            height: 100px;
            position: absolute;
            left: 50%;
            /* centers the loading animation horizontally one the screen */
            top: 50%;
            /* centers the loading animation vertically one the screen */
            background-image:url("{{ asset('') }}/mykd/assets/img/logo/generasio.png");
            z-index: 9999;
            /* path to your loading animation */
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            margin: -50px 0 0 -50px;
            /* is width and height divided by two */
        }

        @keyframes status {
            0% {
                transform: scale(1.0);
                -webkit-transform: scale(1.0);
            }

            100% {
                transform: scale(1.2);
                -webkit-transform: scale(1.2);
            }
        }

        #status {
            animation: status 4s ease-in-out infinite alternate;
            -webkit-animation: status 4s ease-in-out infinite alternate;
        }
    </style>

    @yield('styles')

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
    
    <div id="preloader">
        <div id="status">
        </div>
    </div>
    
    
    <!--begin::Theme mode setup on page load-->
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <div id="kt_app_header" class="app-header" data-kt-sticky="true"
                data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky"
                data-kt-sticky-offset="{default: false, lg: '300px'}">
                <!--begin::Header container-->
                <div class="app-container container-xxl d-flex align-items-stretch justify-content-between"
                    id="kt_app_header_container">
                    <!--begin::Header mobile toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
                            <i class="ki-outline ki-abstract-14 fs-2"></i>
                        </div>
                    </div>
                    <!--end::Header mobile toggle-->
                    <!--begin::Logo-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-18">
                        <a href="{{ url('application/dashboard') }}">
                            <img alt="Logo" src="{{ asset('') }}/mykd/assets/img/logo/generasio.png"
                                class="h-25px d-sm-none" />
                            <img alt="Logo" src="{{ asset('') }}/mykd/assets/img/logo/generasio.png"
                                class="h-25px d-none d-sm-block" />
                        </a>
                    </div>
                    <!--end::Logo-->
                    <!--begin::Header wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
                        id="kt_app_header_wrapper">
                        <!--begin::Menu wrapper-->
                        <div class="app-header-menu app-header-mobile-drawer align-items-stretch"
                            data-kt-drawer="true" data-kt-drawer-name="app-header-menu"
                            data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                            data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                            data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                            data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                            data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                            <!--begin::Menu-->
                            <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                                id="kt_app_header_menu" data-kt-menu="true">
                                <!--begin:Menu item-->
                                <div class="menu-item {{ (url()->current() == url('application/dashboard')) ? 'here menu-here-bg' : '' }} me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <a href="{{ url('application/dashboard') }}">
                                            <span class="menu-title">Dashboard</span>
                                            <span class="menu-arrow d-lg-none"></span>
                                        </a>
                                    </span>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="bottom-start"
                                    class="menu-item {{ (url()->current() != url('application/dashboard')) ? 'here menu-here-bg' : '' }} menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-title">Aplikasi</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                        {{ App\Classes\Theme\Menu::renderVerMenu(config('menu_aside.items')) }}
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="bottom-start"
                                    class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-title">Bantuan</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="{{ url('term') }}"
                                                target="_blank">
                                                <span class="menu-icon">
                                                    <i class="ki-outline ki-abstract-26 fs-2"></i>
                                                </span>
                                                <span class="menu-title">Terms</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="{{ url('help') }}"
                                                target="_blank">
                                                <span class="menu-icon">
                                                    <i class="ki-outline ki-abstract-26 fs-2"></i>
                                                </span>
                                                <span class="menu-title">Help</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="{{ url('credit') }}"
                                                target="_blank">
                                                <span class="menu-icon">
                                                    <i class="ki-outline ki-abstract-26 fs-2"></i>
                                                </span>
                                                <span class="menu-title">Credits</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu wrapper-->
                        <!--begin::Navbar-->
                        <div class="app-navbar flex-shrink-0">
                            <!--begin::Chat-->
                            <div class="app-navbar-item ms-1 ms-lg-5">
                                <!--begin::Menu wrapper-->
                                <div class="btn btn-icon btn-custom btn-active-color-primary w-35px h-35px w-md-40px h-md-40px position-relative"
                                    id="kt_drawer_chat_toggle">
                                    <i class="ki-outline ki-notification-on fs-1"></i>
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Chat-->
                            <!--begin::User menu-->
                            <div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-35px symbol-md-40px"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    @if (!empty(Auth::user()->profile_image))
                                        <img src="{{ asset(Auth::user()->profile_dir . '/' . Auth::user()->profile_image) }}"
                                            alt="{{ Auth::user()->name }} Profil Image" style="object-fit: cover" />
                                    @else
                                        <img src="{{ asset('demo34/dist') }}/assets/media/svg/avatars/blank.svg"
                                            alt="{{ Auth::user()->name }} Profil Image" style="object-fit: cover" />
                                    @endif
                                </div>
                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                @if (!empty(Auth::user()->profile_image))
                                                    <img src="{{ asset(Auth::user()->profile_dir . '/' . Auth::user()->profile_image) }}"
                                                        alt="{{ Auth::user()->name }} Profil Image"
                                                        style="object-fit: cover" loading="lazy" />
                                                @else
                                                    <img src="{{ asset('demo34/dist') }}/assets/media/svg/avatars/blank.svg"
                                                        alt="{{ Auth::user()->name }} Profil Image"
                                                        style="object-fit: cover" loading="lazy" />
                                                @endif
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
                                                    {{ Auth::user()->name }}
                                                </div>
                                                <a href="#"
                                                    class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="{{ url('application/profiles') . '/' . Auth::user()->id . '/' . 'edit' }}"
                                            class="menu-link px-5">Profile Saya</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="{{ route('logout') }}" class="menu-link px-5">Sign Out</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User menu-->
                        </div>
                        <!--end::Navbar-->
                    </div>
                    <!--end::Header wrapper-->
                </div>
                <!--end::Header container-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar py-6">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-start">
                        <!--begin::Toolbar container-->
                        <div class="d-flex flex-column flex-row-fluid">
                            <!--begin::Toolbar wrapper=-->
                            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-13 pb-6">
                                <!--begin::Page title-->
                                <div class="page-title me-5">
                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex text-white fw-bold fs-2 flex-column justify-content-center my-0">
                                        Hai! {{ Auth::user()->name }}
                                        <!--begin::Description-->
                                        <span class="page-desc text-gray-700 fw-semibold fs-6 pt-3">Anda adalah top bagian dari generasio store</span>
                                        <!--end::Description-->
                                    </h1>
                                    <!--end::Title-->
                                </div>
                                <!--end::Page title-->
                            </div>
                            <!--end::Toolbar wrapper=-->
                        </div>
                        <!--end::Toolbar container=-->
                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Wrapper container-->
                <div class="app-container container-xxl">
                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                @yield('content')
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                    </div>
                    <!--end:::Main-->
                </div>
                <!--end::Wrapper container-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::Drawers-->
    <!--begin::Chat drawer-->
    <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
        <!--begin::Messenger-->
        <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
            <!--begin::Card header-->
            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::User-->
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="#"
                            class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Pemberitahuan</a>
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                        <i class="ki-outline ki-cross-square fs-2"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body" id="kt_drawer_chat_messenger_body">
                <!--begin::Messages-->
                <div class="scroll-y me-n5 pe-5 announcement" data-kt-element="messages" data-kt-scroll="true"
                    data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                    data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">


                </div>
                <!--end::Messages-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--end::Drawers-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-outline ki-arrow-up"></i>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>

    <script>
        var hostUrl = "assets/";
    </script>

    <script type="text/javascript">
        $(window).load(function() { // makes sure the whole site is loaded

            $('#wait').fadeOut(); // will first fade out the loading animation
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(50).fadeOut(100); // will fade out the white DIV that covers the website.
            $('body').delay(50).css({
                'overflow': 'visible'
            });

            var id = `{{ Auth::user()->id }}`;

            $.ajax({
                url: `{{ route('api.announcement-status') }}`,
                data: {
                    id: id
                },
                success: function(r) {

                    if (r > 0) {

                        $('#kt_drawer_chat_toggle').append(`
							<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
						`);
                    }
                }
            });

        });

        $(document).ready(function() {
            rupiahClass();
        });

        $('#kt_activities_toggle').on('click', function() {
            alert('am');
            $.ajax({
                url: `{{ route('api.log-activity') }}`,
                beforeSend: function() {
                    $('.timeline').html(`

				<main>
					<ul class="o-vertical-spacing o-vertical-spacing--l">
						<li class="blog-post o-media">
							<div class="o-media__figure">
								<span class="skeleton-box" style="width:75px;height:60px;"></span>
							</div>
							<div class="o-media__body">
								<div class="o-vertical-spacing">
									<h3 class="blog-post__headline">
										<span class="skeleton-box" style="width:55%;"></span>
									</h3>
									<p>
										<span class="skeleton-box" style="width:80%;"></span>
										<span class="skeleton-box" style="width:90%;"></span>
									</p>
								</div>
							</div>
						</li>
						<li class="blog-post o-media">
							<div class="o-media__figure">
								<span class="skeleton-box" style="width:75px;height:60px;"></span>
							</div>
							<div class="o-media__body">
								<div class="o-vertical-spacing">
									<h3 class="blog-post__headline">
										<span class="skeleton-box" style="width:55%;"></span>
									</h3>
									<p>
										<span class="skeleton-box" style="width:80%;"></span>
										<span class="skeleton-box" style="width:90%;"></span>
									</p>
								</div>
							</div>
						</li>
						<li class="blog-post o-media">
							<div class="o-media__figure">
								<span class="skeleton-box" style="width:75px;height:60px;"></span>
							</div>
							<div class="o-media__body">
								<div class="o-vertical-spacing">
									<h3 class="blog-post__headline">
										<span class="skeleton-box" style="width:55%;"></span>
									</h3>
									<p>
										<span class="skeleton-box" style="width:80%;"></span>
										<span class="skeleton-box" style="width:90%;"></span>
									</p>
								</div>
							</div>
						</li>
					</ul>
				</main>
		
		`);
                },
                success: function(r) {

                    var html = '';
                    $('.timeline').html(html);

                    $.map(r, function(n) {

                        var newStringDate = n.created_at.substring(0, 10);

                        html += `

				<div class="timeline-item">
					<!--begin::Timeline line-->
					<div class="timeline-line w-40px"></div>
					<!--end::Timeline line-->
					<!--begin::Timeline icon-->
					<div class="timeline-icon symbol symbol-circle symbol-40px">
						<div class="symbol-label bg-light">
							<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
							<span class="svg-icon svg-icon-2 svg-icon-gray-500">
								${n.icon}
							</span>
							<!--end::Svg Icon-->
						</div>
					</div>
					<!--end::Timeline icon-->
					<!--begin::Timeline content-->
					<div class="timeline-content mb-10 mt-n2">
						<!--begin::Timeline heading-->
						<div class="overflow-auto pe-3">
							<!--begin::Title-->
							<div class="fs-5 fw-semibold mb-2">${n.name}</div>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="d-flex align-items-center mt-1 fs-6">
								<!--begin::Info-->
								<div class="text-muted me-2 fs-7">Dibuat pada ${newStringDate} oleh ${n.user.name}</div>
								<!--end::Info-->
								<!--begin::User-->
								<a href="{{ url('application/users/') . '/' }}${n.user.username}">
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="${n.user.name}">	

										`;

                        if (n.user.profile_image != null) {

                            html +=
                                `<img src="{{ asset('') }}${n.user.profile_dir}/${n.user.profile_image}" alt="${n.user.name} Profil Image" style="object-fit: cover" loading="lazy" />`;
                        } else {

                            html +=
                                `<img src="{{ asset('demo34/dist') }}/assets/media/svg/avatars/blank.svg" alt="${n.user.name} Profil Image" style="object-fit: cover" loading="lazy" />`;

                        }

                        html +=
                            `
									</div>
								</a>
								<!--end::User-->
							</div>
							<!--end::Description-->
						</div>
						<!--end::Timeline heading-->
					</div>
					<!--end::Timeline content-->
				</div>
			
			`;
                    });

                    $('.timeline').append(html);
                }
            })
        });

        $('#kt_drawer_chat_toggle').on('click', function() {

            var id = `{{ Auth::user()->id }}`
            $.ajax({
                url: `{{ route('api.announcement') }}`,
                data: {
                    id: id
                },
                beforeSend: function() {
                    $('.announcement').html(`

				<main>
					<ul class="o-vertical-spacing o-vertical-spacing--l">
						<li class="blog-post o-media">
							<div class="o-media__figure">
								<span class="skeleton-box" style="width:75px;height:60px;"></span>
							</div>
							<div class="o-media__body">
								<div class="o-vertical-spacing">
									<h3 class="blog-post__headline">
										<span class="skeleton-box" style="width:55%;"></span>
									</h3>
									<p>
										<span class="skeleton-box" style="width:80%;"></span>
										<span class="skeleton-box" style="width:90%;"></span>
									</p>
								</div>
							</div>
						</li>
						<li class="blog-post o-media">
							<div class="o-media__figure">
								<span class="skeleton-box" style="width:75px;height:60px;"></span>
							</div>
							<div class="o-media__body">
								<div class="o-vertical-spacing">
									<h3 class="blog-post__headline">
										<span class="skeleton-box" style="width:55%;"></span>
									</h3>
									<p>
										<span class="skeleton-box" style="width:80%;"></span>
										<span class="skeleton-box" style="width:90%;"></span>
									</p>
								</div>
							</div>
						</li>
						<li class="blog-post o-media">
							<div class="o-media__figure">
								<span class="skeleton-box" style="width:75px;height:60px;"></span>
							</div>
							<div class="o-media__body">
								<div class="o-vertical-spacing">
									<h3 class="blog-post__headline">
										<span class="skeleton-box" style="width:55%;"></span>
									</h3>
									<p>
										<span class="skeleton-box" style="width:80%;"></span>
										<span class="skeleton-box" style="width:90%;"></span>
									</p>
								</div>
							</div>
						</li>
					</ul>
				</main>
		
		`);
                },
                success: function(r) {

                    var html = '';

                    html = `

			<!--begin::Message(in)-->
			<div class="d-flex justify-content-start mb-10">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column align-items-start">
					<!--begin::User-->
					<div class="d-flex align-items-center mb-2">
						<!--begin::Avatar-->
						<div class="symbol symbol-35px symbol-circle">
							<img alt="Pic" src="{{ asset('assets/media/defast/favicon2.ico') }}" />
						</div>
						<!--end::Avatar-->
						<!--begin::Details-->
						<div class="ms-3">
							<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">System</a>
							<span class="text-muted fs-7 mb-1">{{ date('Y-m-d', strtotime(Auth::user()->created_at)) }}</span>
						</div>
						<!--end::Details-->
					</div>
					<!--end::User-->
					<!--begin::Text-->
					<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Selamat datang di aplikasi. Selamat beraktivitas!</div>
					<!--end::Text-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Message(in)-->
			
		`;

                    $('.announcement').html(html);

                    html = '';

                    $.map(r, function(n) {

                        var newStringDate = n.created_at.substring(0, 10);

                        html += `

				<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									`;


                        if (n.user.profile_image != null) {

                            html +=
                                `<img src="{{ asset('') }}${n.user.profile_dir}/${n.user.profile_image}" alt="${n.user.name} Profil Image" style="object-fit: cover" loading="lazy" />`;
                        } else {

                            html +=
                                `<img src="{{ asset('demo34/dist') }}/assets/media/svg/avatars/blank.svg" alt="${n.user.name} Profil Image" style="object-fit: cover" loading="lazy" />`;

                        }

                        html +=
                            `
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="{{ url('application/users') . '/' }}${n.user.username}" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">${n.user.name}</a>
									<span class="text-muted fs-7 mb-1">${newStringDate}</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">${n.name}</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
				<!--end::Message(in)-->


			`;
                    });

                    $('.announcement').append(html);

                    $('.animation-blink').remove();
                }
            })
        });

        function rupiah(r) {
            if (r == null) {
                r = 0;
            }
            var data = r.toString().split(",");
            data[0] = data[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            data.join(",");
            data = 'Rp. ' + data;
            return data;
        }

        function rupiah2(r) {
            if (r == null) {
                r = 0;
            }
            var data = r.toString().split(",");
            data[0] = data[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            data.join(",");
            return data;
        }

        function rupiahClass() {
            $(function() {

                $(".rupiah").click(function(e) {
                    $(this).val(format($(this).val()));
                });
                $(".rupiah").keyup(function(e) {
                    $(this).val(format($(this).val()));
                });
            });
            var format = function(num) {
                var str = num.toString().replace("", ""),
                    parts = false,
                    output = [],
                    i = 1,
                    formatted = null;
                if (str.indexOf(".") > 0) {
                    parts = str.split(".");
                    str = parts[0];
                }
                str = str.split("").reverse();
                for (var j = 0, len = str.length; j < len; j++) {
                    if (str[j] != ",") {
                        output.push(str[j]);
                        if (i % 3 == 0 && j < (len - 1)) {
                            output.push(",");
                        }
                        i++;
                    }
                }
                formatted = output.reverse().join("");
                return ("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
            };
        }
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('demo34/dist') }}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('demo34/dist') }}/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('demo34/dist') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    {{-- <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script> --}}
    <script src="{{ asset('demo34/dist') }}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('demo34/dist') }}/assets/js/widgets.bundle.js"></script>
    <script src="{{ asset('demo34/dist') }}/assets/js/custom/widgets.js"></script>
    <script src="{{ asset('demo34/dist') }}/assets/js/custom/apps/chat/chat.js"></script>
    {{-- <script src="{{ asset('demo34/dist') }}/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="{{ asset('demo34/dist') }}/assets/js/custom/utilities/modals/new-target.js"></script>
    <script src="{{ asset('demo34/dist') }}/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="{{ asset('demo34/dist') }}/assets/js/custom/utilities/modals/users-search.js"></script> --}}
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

    @yield('scripts')


</body>
<!--end::Body-->

</html>
