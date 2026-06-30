@extends('front-end.layouts.default-error')

@section('content')
    <!-- faq-area -->
    <section class="faq-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq__content-wrap">
                        <div class="section__title text-start">
                            <span class="sub-title tg__animate-text">405 : Method Not Allowed</span>
                            <h3 class="title">Method Not Allowed</h3>
                            <p>Metode tidak diizinkan, pastikan anda mengakses dengan benar atau hubungi admin</p>
                        </div>
                        <div class="faq__wrapper">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                           <span class="count">1</span> Periksa Koneksi Anda
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Pastikan anda terkoneksi dengan internet, jika sedang terhubung VPN coba untuk disconnect terlebih dahulu
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span class="count">2</span> Periksa URL Anda
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Pastikan URL yang anda masukan adalah benar dan tidak terdapat typo atau kesalahan lainnya
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span class="count">3</span> Hak Akses
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Jika anda tidak berwenang untuk mengakses halaman ini, berarti anda tidak akan bisa masuk
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <span class="count">4</span> Hubungi Admin
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Anda dapat menghubungi admin jika dirasa semua kesalahan berasal dari server, kami akan segera memperbaikinya
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services__images">
                        <div class="services__images-item active">
                            <img src="{{ asset('mykd') }}/assets/img/others/services_img01_real.jpg" alt="img">
                            <a href="{{ url('') }}" class="services__link">
                                <i class="flaticon-next"></i>
                            </a>
                        </div>
                        <div class="services__images-item">
                            <img src="{{ asset('mykd') }}/assets/img/others/services_img02_real.jpg" alt="img">
                            <a href="{{ url('') }}" class="services__link">
                                <i class="flaticon-next"></i>
                            </a>
                        </div>
                        <div class="services__images-item">
                            <img src="{{ asset('mykd') }}/assets/img/others/services_img03_real.jpg" alt="img">
                            <a href="{{ url('') }}" class="services__link">
                                <i class="flaticon-next"></i>
                            </a>
                        </div>
                        <div class="services__images-item">
                            <img src="{{ asset('mykd') }}/assets/img/others/services_img04_real.jpg" alt="img">
                            <a href="{{ url('') }}" class="services__link">
                                <i class="flaticon-next"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-area-end -->
@endsection