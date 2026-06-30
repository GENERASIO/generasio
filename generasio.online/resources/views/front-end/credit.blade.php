@extends('front-end.layouts.default')

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb__hide-img" data-background="{{ asset('mykd') }}/assets/img/bg/breadcrumb_bg02.jpg">
    <div class="container">
        <div class="breadcrumb__wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h2 class="title">Credit</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Credits</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- contact-area -->
<section class="contact-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="contact__content">
                    <h2 class="overlay-title"><span>generasio</span></h2>
                    <h2 class="title">Credits</h2>

                    <p>
                        Kami menyadari bahwa generasio tidak dapat berdiri sendiri, oleh karena itu kami bekerja sama dengan beberapa pihak yang luar biasa dalam membangun sistem ini, thanks to :
                    </p>
                    <ul>
                        <li><a href="https://laravel.com/" target="_blank">Laravel :</a> Framework.</li>
                        <li><a href="https://www.rumahweb.com/" target="_blank">Rumahweb :</a> Hosting.</li>
                        <li><a href="https://www.midtrans.com" target="_blank">QRIS :</a> Partner Payment.</li>
                        <li><a href="https://themeforest.net/" target="_blank">Themeforest :</a> Design.</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->

@endsection