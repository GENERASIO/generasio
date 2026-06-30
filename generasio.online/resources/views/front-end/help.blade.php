@extends('front-end.layouts.default')

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb__hide-img" data-background="{{ asset('mykd') }}/assets/img/bg/breadcrumb_bg02.jpg">
    <div class="container">
        <div class="breadcrumb__wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h2 class="title">Help</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Help & Support</li>
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
                    <h2 class="title">Help & Support</h2>

                    <p>
                        Pastikan anda hanya meminta bantuan kepada pihak generasio official, hati hati modus penipuan yang mengatasnamakan generasio, berikut adalah akun resmi kami yang dapat dihubungi
                    </p>

                    <ul>
                        @foreach ($contacts as $contact)
                            <li><a href="{{ $contact->url }}" target="_blank">{{ $contact->name }}</a></li>
                        @endforeach
                        @foreach ($socmeds as $socmed)
                            <li><a href="{{ $socmed->url }}" target="_blank">{{ $socmed->name }}</a></li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->

@endsection