@extends('front-end.layouts.default')

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area" data-background="{{ asset('mykd') }}/assets/img/bg/breadcrumb_bg01.jpg">
    <div class="container">
        <div class="breadcrumb__wrapper">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="breadcrumb__content">
                        <h2 class="title">Tentang Kami</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 position-relative d-none d-lg-block">
                    <div class="breadcrumb__img">
                        <img src="{{ asset('mykd') }}/assets/img/others/breadcrumb_img01_real.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- about-area -->
<section class="about__area-three section-pt-130 section-pb-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="about__title-wrap">
                    <h2 class="title">
                        <b>Kami adalah</b>
                        <span>Penyedia</span>
                        <span>Layanan</span>
                        <b>Online</b>
                    </h2>
                    <div class="about__content-circle">
                        <img src="{{ asset('mykd') }}/assets/img/icons/circle.svg" alt="img">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                            <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                            <text>
                                <textPath href="#textPath">Generasio Online Store</textPath>
                            </text>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="about__three-images">
                    <img src="{{ asset('mykd') }}/assets/img/others/mask_img01_real.jpg" alt="img" class="left">
                    <img src="{{ asset('mykd') }}/assets/img/others/mask_img02_real.jpg" alt="img" class="right">
                </div>
                <div class="about__three-paragraph">
                    <p class="tg__animate-text style2">Generasio didirikan pada tahun 2023, dengan waktu yang singkat tidak membatasi kami untuk terus berkembang dan memberikan layanan terbaik untuk semua orang. Kini kami sudah memiliki beberapa layanan aktif untuk gaming, pulsa dan sosial media</p>
                </div>
            </div>
        </div>
    </div>
    <h2 class="big-title">online</h2>
</section>
<!-- about-area-end -->

<!-- services-area -->
<section class="services-area services__bg-color section-pt-120 section-pb-120">
    <div class="container">
        <div class="row align-items-end align-items-xl-start">
            <div class="col-lg-6">
                <div class="section__title text-start mb-65">
                    <span class="sub-title tg__animate-text">Layanan Terbaik Generasio</span>
                    <h3 class="title">Kenapa anda harus berbelanja disini?</h3>
                </div>
                <div class="services__wrapper">
                    <div class="services__item">
                        <div class="services__icon">
                            <i class="flaticon-diamond"></i>
                        </div>
                        <div class="services__content">
                            <h4 class="title"><a href="{{ url('service') }}">Termurah</a></h4>
                            <p>Kami menyediakan layanan internet dengan harga yang terjangkau untuk anda</p>
                        </div>
                    </div>
                    <div class="services__item">
                        <div class="services__icon">
                            <i class="flaticon-user-profile"></i>
                        </div>
                        <div class="services__content">
                            <h4 class="title"><a href="{{ url('service') }}">Maintenance</a></h4>
                            <p>Sistem generasio terus di update dan maintenance secara berkala dengan maksimal</p>
                        </div>
                    </div>
                    <div class="services__item">
                        <div class="services__icon">
                            <i class="flaticon-ethereum"></i>
                        </div>
                        <div class="services__content">
                            <h4 class="title"><a href="{{ url('service') }}">Terpercaya</a></h4>
                            <p>Generasio adalah shop official, dengan begitu anda tidak perlu khawatir sama sekali</p>
                        </div>
                    </div>
                    <div class="services__item">
                        <div class="services__icon">
                            <i class="flaticon-settings-1"></i>
                        </div>
                        <div class="services__content">
                            <h4 class="title"><a href="{{ url('service') }}">Aman</a></h4>
                            <p>Data anda akan terjaga dengan baik dan transaksi anda telah diawasi oleh pihak berwenang</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="services__images">
                    <div class="services__images-item active">
                        <img src="{{ asset('mykd') }}/assets/img/others/services_img01_real.jpg" alt="img">
                        <a href="{{ url('service') }}" class="services__link">
                            <i class="flaticon-next"></i>
                        </a>
                    </div>
                    <div class="services__images-item">
                        <img src="{{ asset('mykd') }}/assets/img/others/services_img02_real.jpg" alt="img">
                        <a href="{{ url('service') }}" class="services__link">
                            <i class="flaticon-next"></i>
                        </a>
                    </div>
                    <div class="services__images-item">
                        <img src="{{ asset('mykd') }}/assets/img/others/services_img03_real.jpg" alt="img">
                        <a href="{{ url('service') }}" class="services__link">
                            <i class="flaticon-next"></i>
                        </a>
                    </div>
                    <div class="services__images-item">
                        <img src="{{ asset('mykd') }}/assets/img/others/services_img04_real.jpg" alt="img">
                        <a href="{{ url('service') }}" class="services__link">
                            <i class="flaticon-next"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services-area-end -->

@endsection