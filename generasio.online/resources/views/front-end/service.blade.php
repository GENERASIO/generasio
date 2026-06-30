@extends('front-end.layouts.default')

@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area" data-background="{{ asset('mykd') }}/assets/img/bg/breadcrumb_bg01.jpg">
        <div class="container">
            <div class="breadcrumb__wrapper">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="breadcrumb__content">
                            <h2 class="title">Layanan</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('') }}">Beranda</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Layanan Kami</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 position-relative d-none d-lg-block">
                        <div class="breadcrumb__img">
                            <img src="{{ asset('mykd') }}/assets/img/others/breadcrumb_img02_real.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- area-background-start -->
    <div class="area-background" data-background="{{ asset('mykd') }}/assets/img/bg/area_bg01.jpg">

        <!-- about-area -->
        <section class="about__area section-pt-130 section-pb-130">
            <div class="container">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane show active" id="about01" role="tabpanel" aria-labelledby="about01-tab">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-10">
                                <div class="about__img">
                                    <img src="{{ asset('mykd') }}/assets/img/others/about_img01_real.jpg" alt="img">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-10">
                                <div class="about__flex-wrap">
                                    <div class="about__content-wrap">
                                        <div class="about__content">
                                            <h4 class="title">untuk anda</h4>
                                            <span class="rate">praktis tanpa ribet</span>
                                            <p>Selain top up game, kami menyediakan berbagai layanan pembayaran online untuk anda. Mulai dari pembayaran Pulsa & PPOB, Game & Streaming dan Layanan Sosial Media.</p>
                                        </div>
                                        <div class="about__content-list">
                                            <ul class="list-wrap">
                                                <li><img src="{{ asset('mykd') }}/assets/img/icons/features_icon01.png" alt="img"> Dijamin Aman</li>
                                                <li><img src="{{ asset('mykd') }}/assets/img/icons/features_icon02.png" alt="img"> Termurah</li>
                                                <li><img src="{{ asset('mykd') }}/assets/img/icons/features_icon03.png" alt="img"> Terpercaya</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="about__btn-wrap">
                                        <ul class="list-wrap">
                                            @foreach ($services as $service)
                                                <li><a href="{{ url('service') . '/' . $service->slug }}">{{ $service->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

    </div>
    <!-- area-background-end -->

    <!-- roadMap-area -->
    <section class="roadMap__area roadMap-bg section-pt-150 section-pb-150" data-background="{{ asset('mykd') }}/assets/img/bg/roadmap_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="roadMap__inner">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <div class="roadMap__content">
                                    <h2 class="title">Layanan <br> Generasio <br> Three in <br> One</h2>
                                    <p>Mulai sekarang kamu gaperlu repot pindah pindah provider untuk belanja kebutuhan online kamu. Dengan kami transaksi cepat tanpa ribet, berikut adalah tiga layanan yang bisa kamu nikmati dari generasio</p>
                                </div>
                                <div class="roadMap__img">
                                    <img src="{{ asset('mykd') }}/assets/img/others/roadmap_real.png" class="tg-parallax"  data-scale="1.5" data-orientation="down" alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="roadMap__steps-wrap">
                                    <div class="roadMap__steps-item active">
                                        <a href="">
                                            <h3 class="title">Game & Streaming</h3>
                                        </a>
                                        <ul class="roadMap__list list-wrap">
                                            <li class="active tg__animate-text style2">Mobile Legends</li>
                                            <li class="active tg__animate-text style2">Free Fire</li>
                                            <li class="active tg__animate-text style2">Genshin Impact</li>
                                            <li class="active tg__animate-text style2">Youtube Premium</li>
                                            <li class="active tg__animate-text style2">Netflix</li>
                                            <li class="tg__animate-text style2">Dan lain-lain</li>
                                        </ul>
                                        <img src="{{ asset('mykd') }}/assets/img/others/roadmap_img.png" alt="img" class="roadMap__steps-img">
                                    </div>
                                    <div class="roadMap__steps-item">
                                        <a href="">
                                            <h3 class="title">Pulsa & PPOB</h3>
                                        </a>
                                        <ul class="roadMap__list list-wrap">
                                            <li class="active tg__animate-text style2">Pascabayar BPJS, PLN, PDAM, dll</li>
                                            <li class="active tg__animate-text style2">Pulsa Axis, Indosat, Telkomsel, dll</li>
                                            <li class="active tg__animate-text style2">Token Listrik</li>
                                            <li class="active tg__animate-text style2">E-Money Dana, Gopay, OVO, dll</li>
                                            <li class="active tg__animate-text style2">Pulsa Axis, Indosat, Telkomsel, dll</li>
                                            <li class="tg__animate-text style2">Dan lain-laiin</li>
                                        </ul>
                                        <img src="{{ asset('mykd') }}/assets/img/others/roadmap_img.png" alt="img" class="roadMap__steps-img">
                                    </div>
                                    <div class="roadMap__steps-item">
                                        <a href="">
                                            <h3 class="title">Sosial Media</h3>
                                        </a>
                                        <ul class="roadMap__list list-wrap">
                                            <li class="active tg__animate-text style2">Instagram Followers</li>
                                            <li class="active tg__animate-text style2">Instagram Likes</li>
                                            <li class="active tg__animate-text style2">Tiktok Views</li>
                                            <li class="active tg__animate-text style2">Youtube Comment</li>
                                            <li class="tg__animate-text style2">Dan lain-lain</li>
                                        </ul>
                                        <img src="{{ asset('mykd') }}/assets/img/others/roadmap_img.png" alt="img" class="roadMap__steps-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- roadMap-area-end -->
@endsection