@extends('front-end.layouts.default')

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb__hide-img" data-background="{{ asset('mykd') }}/assets/img/bg/breadcrumb_bg03.jpg">
    <div class="container">
        <div class="breadcrumb__wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h2 class="title">Transaksi</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cek Transaksi</li>
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
                    <h2 class="title">Invoice Transaksi</h2>
                    <p>
                        Masukan Invoice ID anda disini, dan periksa status invoice anda!
                    </p>
                    <br>
                    <div class="contact__form-wrap">
                        <form id="invoice-form" action="" method="POST">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-grp">
                                        <input name="invoice_id" type="text" placeholder="Masukan Invoice ID" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="submit-btn">Cari Invoice</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->

<!-- tournament-list-area -->
<section class="tournament__list-area section-pb-120 section-pt-120" data-background="{{ asset('mykd') }}/assets/img/bg/tournament_bg.jpg">
    <div class="container">
        <div class="tournament__wrapper">
            <div class="row align-items-end mb-60">
                <div class="col-lg-8">
                    <div class="section__title text-center text-lg-start title-shape-none">
                        <span class="sub-title tg__animate-text">Transaksi Terbaru</span>
                        <h3 class="title">Transaksi</h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section__title-link">
                        <a href="{{ url('transaction/list') }}">SELENGKAPNYA</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tournament__list-item-wrapper">
                        @foreach ($transactions as $transaction)
                            <div class="tournament__list-item wow fadeInUp" data-wow-delay=".2s">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1116.562" height="163.37" viewBox="0 0 1116.562 163.37">
                                    <path class="background-path" d="M708,1784l28-27s4.11-5.76,18-6,702-1,702-1a37.989,37.989,0,0,1,16,9c7.47,7.08,37,33,37,33s9.02,9.47,9,18,0,42,0,42-0.19,9.43-11,19-32,30-32,30-5.53,11.76-21,12-985,0-985,0a42.511,42.511,0,0,1-26-13c-11.433-12.14-34-32-34-32s-6.29-5.01-7-17,0-43,0-43-1-5.42,12-18,34-32,34-32,10.4-8.28,19-8,76,0,76,0a44.661,44.661,0,0,1,21,11c9.268,8.95,22,22,22,22Z" transform="translate(-401.563 -1749.875)" />
                                </svg>
                                <div class="tournament__list-content">
                                    <div class="tournament__list-thumb">
                                        <a href="{{ url('service') . '/' . $transaction->catalog->category . '/' . $transaction->catalog->slug}}"><img src="{{ asset($transaction->catalog->file_dir) . '/' . $transaction->catalog->file }}" alt="{{ $transaction->catalog->name }}"></a>
                                    </div>
                                    <div class="tournament__list-name">
                                        <h5 class="team-name">{{ $transaction->catalog->name }}</h5>
                                        <span class="status">{{ $transaction->status }}</span>
                                    </div>
                                    <div class="tournament__list-prize">
                                        <span>{{ $transaction->product->name }}</span>
                                    </div>
                                    <div class="tournament__list-time">
                                        <span>{{ $transaction->created_at }}</span>
                                    </div>
                                    <div class="tournament__list-live">
                                        <a href="{{ url('transaction/list') . '/' . $transaction->invoice_id }}" target="_blank">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tournament-list-area-end -->

@endsection

@section('footer-script')
    <script>
        $('#invoice-form').on('submit', function(e){
            e.preventDefault();

            var invoiceId = $('input[name="invoice_id"]').val();

            window.location.href = `{{ url('transaction') }}` + '/list/' + invoiceId;
        });
    </script>
@endsection