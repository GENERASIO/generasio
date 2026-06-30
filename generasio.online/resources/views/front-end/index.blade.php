@extends('front-end.layouts.default')

@section('content')

<!-- slider-area -->
{{-- <section class="slider__area slider__bg" data-background="{{ asset('mykd') }}/assets/img/slider/slider_bg.jpg">
    <div class="slider-activee">
        <div class="single-slider">
            <div class="container custom-container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="slider__content">
                            <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s">online gaming</h6>
                            <h2 class="title wow fadeInUp" data-wow-delay=".5s">top up</h2>
                            <p class="wow fadeInUp" data-wow-delay=".8s">aman & termurah</p>
                            <div class="slider__btn wow fadeInUp" data-wow-delay="1.2s">
                                <a href="https://wa.me/+6285777815955?text=bang%20beli" class="tg-btn-1"><span>beli sekarang</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-5 col-lg-6">
                        <div class="slider__img text-center">
                            <img src="{{ asset('mykd') }}/assets/img/slider/slider_img01_real.png" data-magnetic alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider__shapes">
        <img src="{{ asset('mykd') }}/assets/img/slider/slider_shape01.png" alt="shape">
        <img src="{{ asset('mykd') }}/assets/img/slider/slider_shape02.png" alt="shape">
        <img src="{{ asset('mykd') }}/assets/img/slider/slider_shape03.png" alt="shape">
        <img src="{{ asset('mykd') }}/assets/img/slider/slider_shape04.png" alt="shape">
    </div>
</section> --}}
<!-- slider-area-end -->

<!-- area-background-start -->
<div class="area-background mt-5" data-background="{{ asset('mykd') }}/assets/img/bg/area_bg01.jpg">

    <!-- about-area -->
    <section class="about__area section-pt-130 section-pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="section__title text-center mb-60" style="margin-bottom: 0px;">
                        <span class="sub-title tg__animate-text">Three in One</span>
                        <h3 class="title">layanan kami</h3>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="about01" role="tabpanel" aria-labelledby="about01-tab">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-10">
                            <div class="about__img">
                                <img src="{{ asset('mykd') }}/assets/img/others/about_img01_real.jpg" alt="img service generasio" loading="lazy">
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
                                            <li><img src="{{ asset('mykd') }}/assets/img/icons/features_icon01.png" alt="img feature generasio" loading="lazy"> Dijamin Aman</li>
                                            <li><img src="{{ asset('mykd') }}/assets/img/icons/features_icon02.png" alt="img feature generasio" loading="lazy"> Termurah</li>
                                            <li><img src="{{ asset('mykd') }}/assets/img/icons/features_icon03.png" alt="img feature generasio" loading="lazy"> Terpercaya</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="about__btn-wrap">
                                    <ul class="list-wrap">
                                        @foreach ($services as $service)
                                            <li><a href="{{ url('service') . '/' . $service->slug }}?search=query">{{ $service->name }}</a></li>
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

<!-- trending-nft-area -->
<section class="trendingNft-area section-pt-120 section-pb-90">
    <div class="container">
        <div class="trendingNft__title-wrap">
            <div class="row">
                <div class="col-md-7">
                    <div class="trendingNft__title">
                        <h2 class="title">{{ count($trendings) }} produk terlaris <img src="{{ asset('mykd') }}/assets/img/icons/fire.png" width="35" alt="icon fire generasio" loading="lazy"></h2>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="trendingNft__nav">
                        <button class="slider-button-prev"><i class="fas fa-angle-left"></i></button>
                        <button class="slider-button-next"><i class="fas fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-container trendingNft-active">
            <div class="swiper-wrapper">

                @foreach ($trendings as $trending)
                    <div class="swiper-slide">
                        <div class="trendingNft__item">
                            <div class="trendingNft__item-top">
                                <div class="trendingNft__item-avatar">
                                    <div class="info">
                                        <h6 class="name">{{ $trending['catalog']->name }}</h6>

                                        @php
                                            $category = str_replace('-', ' ', $trending['catalog']->category);
                                            $category = preg_replace("/[^a-zA-Z0-9\s]/", "", strtolower($category));
                                            $category = ucwords($category);
                                        @endphp
                                        
                                        <a href="{{ url('service') . '/' . $trending['catalog']->category }}?search=query" class="userName">{{ $category }}</a>
                                    </div>
                                </div>
                                <div class="trendingNft__item-wish">
                                    <a href="{{ url('service') . '/' . $trending['catalog']->category . '/' . $trending['catalog']->slug}}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="trendingNft__item-image">
                                <a href="{{ url('service') . '/' . $trending['catalog']->category . '/' . $trending['catalog']->slug}}"><img src="{{ asset('mykd') }}/assets/img/gallery/mobile-legends.jpg" alt="Mobile Legends" style="width: 361px; height: 249px; object-fit: cover;" loading="lazy" loading="lazy"></a>
                            </div>
                            <div class="trendingNft__item-bottom">
                                <div class="trendingNft__item-price">
                                    <span class="bid">Nominal Pembelian</span>
                                    <h6 class="eth"><i class="fab fa-ethereum"></i> <span style="font-size: 15px; !important">{{ $trending['product']->name }}</span></h6>
                                </div>
                                {{-- <a href="{{ url('service') . '/' . $trending['catalog']->category . '/' . $trending['catalog']->slug}}" class="bid-btn">Beli <i class="fas fa-long-arrow-alt-right"></i></a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="trendingNft__title-wrap">
            <div class="row">
                <div class="col-md-7">
                    <div class="trendingNft__title">
                        <h2 class="title">Semua Layanan Game</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="trendingNft-active">
            <div class="row d-flex justify-content-center">

                @foreach ($serviceCatalogs as $serviceCatalog)
                    <div class="col-md-4">
                        <div class="trendingNft__item">
                            <div class="trendingNft__item-top">
                                <div class="trendingNft__item-avatar">
                                    <div class="info">
                                        <h6 class="name">{{ $serviceCatalog->name }}</h6>

                                        @php
                                            $category = str_replace('-', ' ', $serviceCatalog->category);
                                            $category = preg_replace("/[^a-zA-Z0-9\s]/", "", strtolower($category));
                                            $category = ucwords($category);
                                        @endphp
                                        <a href="{{ url('service') . '/' . $serviceCatalog->category }}?search=query" class="userName">{{ $category }}</a>
                                    </div>
                                </div>
                                <div class="trendingNft__item-wish">
                                    <a href="{{ url('service') . '/' . $serviceCatalog->category . '/' . $serviceCatalog->slug }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="trendingNft__item-image">
                                <a href="{{ url('service') . '/' . $serviceCatalog->category . '/' . $serviceCatalog->slug }}"><img src="{{ asset($serviceCatalog->file_dir) . '/' . $serviceCatalog->file }}" alt="{{ $serviceCatalog->name }} Image Generasio" style="width: 361px; height: 249px; object-fit: cover;" loading="lazy"></a>
                            </div>
                            <div class="trendingNft__item-bottom">
                                <div class="trendingNft__item-price">
                                    <span class="bid">Mulai Dari</span>
                                    <h6 class="eth">Rp. <span>{{ 
number_format($serviceCatalog->product[0]->price ?? 0) }}</span></h6>
                                </div>
                                <a href="{{ url('service') . '/' . $serviceCatalog->category . '/' . $serviceCatalog->slug }}" class="bid-btn">Beli <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-md-12 d-flex justify-content-center">
                    <a href="{{ url('service/game-streaming') }}" class="load-more">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- trending-nft-end -->

<!-- about-area -->
<section class="about__area-two section-pt-160 section-pb-190">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-6 col-lg-6 order-0 order-lg-2">
                <div class="about__funFact-images">
                    <img src="{{ asset('mykd') }}/assets/img/others/fun_fact_shape.png" alt="background" class="bg-shape" loading="lazy">
                    <img src="{{ asset('mykd') }}/assets/img/others/fun_fact_real.png" class="main-img" alt="image" loading="lazy">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="section__title text-start mb-30">
                    <h3 class="title">Ayo nikmati layanan <br> dari generasio</h3>
                </div>
                <div class="about__content-two">
                    <p>Kami sangat mengutamakan kepuasan pelanggan. dengan generasio anda akan mendapatkan berbagai layanan menarik yang aman, mudah, terpercaya, murah dan cepat.</p>
                </div>
                <div class="about__content-bottom">
                    <div class="about__content-circle">
                        <img src="{{ asset('mykd') }}/assets/img/icons/circle.svg" alt="img" loading="lazy">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                            <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                            <text>
                                <textPath href="#textPath">Generasio Online Store</textPath>
                            </text>
                        </svg>
                    </div>
                    <div class="about__funFact-wrap">
                        <div class="about__funFact-lists">
                            <div class="about__funFact-item">
                                <h2 class="count">
                                    <span class="odometer" data-count="{{ $userCount }}"></span>
                                    <!-- <span class="formatting-mark">K</span> -->
                                </h2>
                                <p>Member</p>
                            </div>
                            <div class="about__funFact-item">
                                <h2 class="count">
                                    <span class="odometer" data-count="{{ count($serviceCatalogs) }}"></span>
                                    <!-- <span class="formatting-mark">K</span> -->
                                </h2>
                                <p>Layanan</p>
                            </div>
                            <div class="about__funFact-item">
                                <h2 class="count">
                                    <span class="odometer" data-count="{{ count($transactions) }}"></span>
                                    <!-- <span class="formatting-mark">K</span> -->
                                </h2>
                                <p>Total Transaksi</p>
                            </div>
                        </div>
                        <!-- <div class="about__content-btns">
                            <a href="{{ url('article') }}" class="tg-btn-3 tg-svg">
                                <div class="svg-icon" id="svg-6" data-svg-icon="assets/img/icons/shape.svg"></div>
                                <span>read more</span>
                            </a>
                            <a href="https://www.youtube.com/watch?v=ssrNcwxALS4" class="popup-video"><i class="fas fa-play"></i><span class="text">How It Work</span></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->

@endsection
