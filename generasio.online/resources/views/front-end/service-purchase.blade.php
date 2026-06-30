@extends('front-end.layouts.default')

@section('style')
<style type="text/css">
    .col-bjconfirm {
        flex: 0 0 auto;
        width: 50%;
        font-size: 14px;
        text-align: right;
    }

    .btn-ordernow:hover {
        color: #fff;
        background-color: #535a62;
        border-color: #4b4e51;
    }

    .col-bjconfirm2 {
        flex: 0 0 auto;
        width: 50%;
        font-size: 14px;
        text-align: left;
    }

    .col-bjconfirm3 {
        flex: 0 0 auto;
        width: 100%;
        font-size: 11px;
        text-align: center;
    }

    .ap-otp-input {
        border: 3px solid #ebebeb;
        border-radius: 18px;
        width: 35px;
        height: 53px;
        margin: 4px;
        text-align: center;
        font-size: 35px;
    }

    .child-box:hover {
        border: 1px solid #45f882;
    }


    .bangjeff-dicek {
        font-size: 9px;
        font-style: italic;
        color: #45f882;
    }

    .ap-otp-input:focus {
        outline: none !important;
        border: 3px solid #45f882;
        transition: 0.12s ease-in;
    }

    .list-group-item {
        user-select: none;
    }

    .list-group-item:last-child {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .list-group input[type="radio"] {
        display: none;
    }

    .list-group1 input[type="radio"] {
        display: none;
    }

    .list-group input[type="radio"]+.list-group-item {
        text-align: center;
        cursor: pointer;
        background-color: #282c30;
        color: #dcddeb;
        border-color: transparent;
        border: 2px solid #282c30;
        font-size: 12px;
    }

    .nominal-price {
        font-size: 11px;
        text-align: left;
    }

    .name-prod {
        /* font-weight:600; */
        color: #ffffff;
        /* padding: 0%; */
        text-align: left;
    }

    .list-group input[type="radio"]+label>.row>.col>.row>.nominal-price {
        color: #dee2e6;
        /* font-style: bold; */
        /* font-family: 'bangjeff-comic';
    font-style: italic; */
    }

    .list-group input[type="radio"]:checked+label>.row>.col>.row>.nominal-price {
        color: #45f882;
        /* font-family: 'bangjeff-comic'; */
        /* font-style: bold; */
        /* font-style: italic; */
    }

    .list-group input[type="radio"]+.list-group-item:before {
        /* content: "\2713"; */
        color: transparent;
        font-weight: bold;
        /* margin-right: 1em; */

    }

    .list-group input[type="radio"]+.list-group-item:hover {
        cursor: pointer;
        background-color: #adadad43;
        color: #ffffff;
        border-color: #adadad43;

        font-size: 12px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .list-group input[type="radio"]:checked+.list-group-item:before {
        color: inherit;
    }

    .list-group input[type="radio"]:checked+.list-group-item:after {
        position: absolute;
        top: 0;
        right: 0;
        width: 28px;
        height: 26px;
        content: "";
        background: url({{ asset('img/verified-generasiostore.png') }}) top/cover;
        text-align: center;
    }

    .list-group input[type="radio"]:checked+.list-group-item {
        color: #ef222243;
        font-size: 12px;
        border: 2px solid #c9c9c993;
        box-shadow: 0 0 10px #719ECE;
        overflow: hidden;
    }

    .list-group1 input[type="radio"]:checked+.list-group-item:before {
        color: inherit;
    }

    .list-group1 input[type="radio"]:checked+.list-group-item {
        background-color: #ffffff;
        color: #45f882;
        font-size: 12px;
        display: block;
        -webkit-filter: grayscale(0%);
        /* Safari 6.0 - 9.0 */
        filter: grayscale(0%);
    }

    .list-group1 input[type="radio"]+.list-group-item {
        text-align: center;
        cursor: pointer;
        /* background-color: #e8e8e8;
    color: #fe6c17; */
        border-color: transparent;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 5px 10px 0 rgba(0, 0, 0, 0.19);
        font-size: 12px;
        border-radius: 3px;
        background: rgb(208, 208, 208);
        -webkit-filter: grayscale(100%);
        /* Safari 6.0 - 9.0 */
        filter: grayscale(100%);
    }

    .list-group1 input[type="radio"]+.list-group-item:hover {
        cursor: pointer;
        background-color: #ffffff;
        color: #fe6c17;
        border-color: #ffffff;
        box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 12px 0 rgba(0, 0, 0, 0.19);
        font-size: 12px;
        border-radius: 3px;
    }

    .list-group1 input[type="radio"]:checked+.list-group-item:before {
        color: inherit;
    }

    /* .list-group input[type="radio"]+.list-group-item:hover {
        cursor: pointer;
        background-color: rgba(255, 255, 230, 0.5);
        color: rgb(102, 102, 102);
        border-color: #45f882;

        font-size: 12px;
    }
    .list-group input[type="radio"]:checked+.list-group-item {
        background-color: #45f882;
        color: #FFF;
        font-size: 12px;
    } */

    #payment {
        color: #db2525;
    }

    .list-group1 input[type="radio"]:checked+.list-group-item:after {
        position: absolute;
        top: 0;
        right: 0;
        width: 28px;
        height: 26px;
        content: "";
        background: url({{ asset('img/verified-generasiostore.png') }}) top/cover;
        filter: drop-shadow(2px 4px 6px black);
        text-align: center;
    }

    .list-group1 input[type="radio"]:checked+.list-group-item:before {
        color: inherit;
    }

    .list-group1 input[type="radio"]:checked+.list-group-item:before {
        color: inherit;
    }

    .list-group1 input[type="radio"]:checked+.list-group-item {
        background-color: #ffffff;
        color: #45f882;
        font-size: 12px;
        display: block;
        -webkit-filter: grayscale(0%);
        /* Safari 6.0 - 9.0 */
        filter: grayscale(0%);
    }

    .list-group1 input[type="radio"]+.list-group-item {
        text-align: center;
        cursor: pointer;
        /* background-color: #e8e8e8;
        color: #0d6efd; */
        border-color: transparent;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 5px 10px 0 rgba(0, 0, 0, 0.19);
        font-size: 12px;
        border-radius: 3px;
        background: rgb(208, 208, 208);
        -webkit-filter: grayscale(100%);
        /* Safari 6.0 - 9.0 */
        filter: grayscale(100%);
    }

    .list-group1 input[type="radio"]+.list-group-item:hover {
        cursor: pointer;
        background-color: #ffffff;
        color: #45f882;
        border-color: #ffffff;
        box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 12px 0 rgba(0, 0, 0, 0.19);
        font-size: 12px;
        border-radius: 3px;
    }

    .list-group1 input[type="radio"]:checked+.list-group-item:before {
        color: inherit;
    }

    .button-action-payment .info-top img {
        width: 100%;
        max-height: 20px;
        -o-object-fit: contain;
        object-fit: contain;
        vertical-align: middle;

    }

    .bg-dark{
        background-color: #161e26 !important;
    }

    .form-rasio{
        background: #282C30;
        border-color: #282C30;
        color: white;
    }

    .form-rasio:focus { 
        outline: none !important;
        border-color: #719ECE;
        box-shadow: 0 0 5px #719ECE;
        background: #282C30;
        color: white;
    }

    /* CSS */
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        appearance: none;
        margin: 0; /* Hilangkan margin jika ada */
        display: none; /* Sembunyikan tombol up dan down */
    }

</style>
@endsection

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb__hide-img" data-background="{{ asset('mykd') }}/assets/img/bg/breadcrumb_bg02.jpg">
    <div class="container">
        <div class="breadcrumb__wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h2 class="title">{{ $serviceCatalog->name }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Produk Kami</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- shop-area -->
<section class="shop-area shop-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mt-2 mb-2">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-dark shadow">
                            <div class="card-body">
                                <img src="{{ asset($serviceCatalog->file_dir) . '/' . $serviceCatalog->file }}" alt="{{ $serviceCatalog->name }}"
                                    class="shadow rounded bg-dark mx-auto mb-2 d-lg-block d-none " width="262px" height="262px" style="object-fit: cover;margin-top:10px;">
                                <div class="row">
                                    <div class="col">
                                        <h3 style="margin-top:10px;margin-bottom:20px;">{{ $serviceCatalog->name }}</h3>
                                        <div class="strip-primary"></div>
                                        <span class="text-muted mt-3 mb-3">Proses Otomatis</span>
                                        <img src="{{ asset($serviceCatalog->file_dir) . '/' . $serviceCatalog->file }}" alt="{{ $serviceCatalog->name }}"
                                            class="shadow rounded bg-dark float-start mt-2 me-2 mb-0 d-lg-none d-block"
                                            width="70px" height="70px" style="object-fit: cover;" />
                                        <p>Top Up {{ $serviceCatalog->name }}<br><span
                                                style="font-weight: bolder;">Proses Pembayaran Cepat</span><br>
                                        <ol>
                                            <li>Masukkan&nbsp;<span style="font-weight: bolder;">ID (SERVER)</span>
                                            </li>
                                            <li>Pilih&nbsp;<span
                                                    style="font-weight: bolder;">Nominal&nbsp;</span>Diamond</li>
                                            <li>Pilih&nbsp;<span style="font-weight: bolder;">Metode
                                                    Pembayaran</span></li>
                                            <li>Lengkapi<span style="font-weight: bolder;"> WhatsApp</span>&nbsp; dan <span style="font-weight: bolder;">Email</span></li>
                                            <li>Klik&nbsp;<span style="font-weight: bolder;">Beli&nbsp;</span>&amp;
                                                lakukan Pembayaran</li>
                                            <li>Diamond akan masuk otomatis ke akun anda</li>
                                        </ol>
                                        <p style="margin-bottom: 10px; text-align: center;">
                                            <font size="3" color="#ff9c00"><span style="font-weight: bolder;">Top Up
                                                    Buka 24 Jam</span></font>
                                        </p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 d-lg-block d-none">
                        <div class="card bg-dark shadow">
                            <div class="card-header">Informasi</div>
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-12">
                                        <div class="shop__details-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="rating-count">( {{ count($transactions) }} Total Transaksi )</span>
                                        </div>
                                        <h2 class="title">{{ $serviceCatalog->name }}</h2>
                                        <div class="shop__details-price">
                                            <span class="amount"><span class="stock-status">Mulai dari - </span>Rp. {{ number_format($serviceProducts[0]->price) }}</span>
                                        </div>
                                        <div class="shop__details-short-description">
                                            <p>{{ $serviceCatalog->description }}</p>
                                        </div>
                                        <div class="shop__details-model d-flex align-items-center">
                                            <p class="model m-0">Kategori:</p>
                                            <ul class="list-wrap d-flex align-items-center">
                                                @php
                                                    $category = str_replace('-', ' ', $serviceCatalog->category);
                                                    $category = preg_replace("/[^a-zA-Z0-9\s]/", "", strtolower($category));
                                                    $category = ucwords($category);
                                                @endphp
                                                <li class="active">{{ $category }}</li>
                                                <li>{{ ucfirst($serviceCatalog->main_category) }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 d-lg-block d-none">
                        <div class="card bg-dark shadow">
                            <div class="card-header">Game Lainnya</div>
                            <div class="card-body">
                                @foreach ($otherCatalogs as $otherCatalog)
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <div class="card flex-row flex-wrap bg-dark">
                                                <div class="card-header border-0">
                                                    <a href="{{ url('service') . '/' . $otherCatalog->category . '/' . $otherCatalog->slug}}"
                                                        class="stretched-link">
                                                        <img src="{{ asset($otherCatalog->file_dir) . '/' . $otherCatalog->file }}"
                                                            height="50px" height="50px" alt="{{ $otherCatalog->name }}">
                                                    </a>
                                                </div>
                                                <div class="card-body">
                                                    <b>{{ $otherCatalog->name }}</b><br>
                                                    {{ $otherCatalog->main_category }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-8 mt-2 mb-2">
                <form action="" method="POST" id="form-product">
                    <div class="row">
                        <div class="col">
                            <div class="card bg-dark shadow">
                                <div class="card-header">
                                    <h5 class="card-title" style="margin-top:10px;">Lengkapi Data Game</h5>
                                </div>
                                <div class="card-body">
                                    <div id="userData">
                                        <div class="row row-cols row-cols-md">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="player_id">User ID</label>
                                                    <input class="form-control form-rasio gameForm" placeholder="Masukkan User ID"
                                                        type="number" name="player_id" id="player_id" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="server_id">Server ID</label>
                                                    <input class="form-control form-rasio gameForm" placeholder="Masukkan Server ID"
                                                        type="number" name="server_id" id="server_id" required>
                                                </div>
                                            </div>
                                            <label id="gamer_tag_loading" class="mb-2" style="display: none">Tunggu sampai username anda muncul..</label>
                                            <div class="col-lg-12" style="display: none" id="gamer_tag_parent">
                                                <div class="form-group mb-3">
                                                    <label for="gamer_tag">Username</label>
                                                    <input class="form-control form-rasio" placeholder="Gamer Tag"
                                                        type="text" name="gamer_tag" id="gamer_tag" style="background: #282C30 !important;border-color: #282C30 !important;color: white !important;" readonly required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop__details-bottom" style="margin-top: 0px;">
                                        <div class="contact__form-wrap" style="margin-top: 0px;">
                                                <button type="button" class="submit-btn" data-bs-toggle="modal"
                                                data-bs-target="#petunjukModal">Petunjuk</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="card bg-dark shadow">
                                <div class="card-header">
                                    <h5 class="card-title" style="margin-top:10px">Pilih Nominal</h5>
                                </div>
                                <div class="card-body">
                                    <input class="form-control form-rasio" placeholder="Cari produk yang kamu mau" type="text" name="filter-name" id="filter-name">
                                    <div id="price-parent">
                                        <div class="row row-cols-2 justify-content-center">
                                            @foreach ($serviceProducts as $productKey => $product)
                                                <div class="col-lg-4 mt-3 list-group-row">
                                                    <div class="list-group shadow h-100">
                                                        <input type="radio" name="service_product_code" id="form_{{ $product->code }}"
                                                            value="{{ $product->code }}" data-type="diamond" required>
                                                        <label for="form_{{ $product->code }}" class="list-group-item h-100">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="row">
                                                                        <div class="col name-prod">{{ $product->name }}</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col nominal-price">Rp {{ number_format($product->price) }}</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="col">
                            <div class="card bg-dark shadow">
                                <div class="card-header">
                                    <h5 class="card-title" style="margin-top: 10px">Kontak Pribadi</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label for="whatsapp">Nomor Whatsapp</label>
                                        <input class="form-control form-rasio" placeholder="6285777815955" value="628"
                                            type="number" name="whatsapp" id="whatsapp">
                                        <small>*Format 628xxxxx (6285777815955)</small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="email">Email Aktif</label>
                                        <input class="form-control form-rasio" placeholder="user@example.com"
                                            type="email" name="email" id="email">
                                    </div>
                                    <small>*Data anda aman & dijaga ketat oleh kami</small> <br>
                                    <small>*Whatsapp & Email digunakan untuk notifikasi pembayaran</small> <br>
                                    <small>*Jika terjadi kendala, kami akan menghubungi kontak yang tertera</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col-lg-12 clearfix">
                            {{-- <input type="hidden" name="product_name" id="product_name" value="Mobile Legends Bang Bang"> --}}
                            <div class="float-end">
                                <div class="shop__details-bottom">
                                    <div class="contact__form-wrap">
                                            <button type="submit" class="submit-btn">Pesan Sekarang</button>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product__desc-wrap" style="margin-top: 10px;">
                    <ul class="nav nav-tabs" id="descriptionTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab" aria-controls="info" aria-selected="false">Informasi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Total Transaksi ({{ $allTransactions }})</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="descriptionTabContent">
                        <div class="tab-pane animation-none fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <th scope="row">Game</th>
                                        <td>{{ $serviceCatalog->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kategori</th>
                                        <td>{{ $serviceCatalog->category }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sub Kategori</th>
                                        <td>{{ $serviceCatalog->main_category }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Metode Pembayaran</th>
                                        <td>QRIS (Recommended)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Total Harga</th>
                                        <td>Sesuai Nominal (Tanpa Admin)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Estimasi Pembayaran</th>
                                        <td>0 - 5 Menit</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kontak Kami</th>
                                        <td><a href="https://wa.me/+6285777815955?text=halo">+0857-7781-5955</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane animation-none fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">

                            @if (count($transactions) < 1)
                                <div class="product__desc-review">
                                    <div class="product__desc-review-title mb-15">
                                        <h5 class="title">Transaksi Terbaru (0)</h5>
                                    </div>
                                    <div class="left-rc">
                                        <p>Belum ada transaksi</p>
                                    </div>
                                    <div class="right-rc">
                                        <p>Jadilah yang pertama!</p>
                                    </div>
                                </div>
                            @else
                                <div class="product__desc-review">
                                    <div class="product__desc-review-title mb-15">
                                        <h5 class="title">Transaksi Terbaru ({{ count($transactions) }})</h5>
                                    </div>
                                    <div class="left-rc table-responsive">
                                        <table class="table table-hover">
                                            <tr>
                                                <th style="width:1%">No</th>
                                                <th style="width:5%">Pembayaran</th>
                                                <th style="width:15%">Game</th>
                                                <th style="width:15%">Product</th>
                                                <th style="width:15%">Total Harga</th>
                                                <th>Dibuat</th>
                                                <th>Selesai</th>
                                            </tr>
                                            @foreach ($transactions as $transactionKey => $transaction)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $transaction->status }}</td>
                                                    <td>{{ $transaction->catalog->name }}</td>
                                                    <td>{{ $transaction->product->name }}</td>
                                                    <td>Rp. {{ number_format($transaction->price) }}</td>
                                                    <td>{{ $transaction->created_at }}</td>
                                                    <td>{{ $transaction->paid_at }}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="related__product-area">
            <div class="related__product-wrapper">
                <h2 class="related-title">Game Lainnya</h2>
                <div class="row justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                    
                    @foreach ($otherCatalogs as $otherCatalog)
                        <div class="col">
                            <div class="shop__item">
                                <div class="shop__item-thumb">
                                    <a href="{{ url('service') . '/' . $otherCatalog->category . '/' . $otherCatalog->slug}}"><img src="{{ asset($otherCatalog->file_dir) . '/' . $otherCatalog->file }}" alt="{{ $otherCatalog->name }}" style="object-fit: cover; width:262px; height:262px;"></a>
                                    <a href="{{ url('service') . '/' . $otherCatalog->category . '/' . $otherCatalog->slug}}" class="wishlist-button"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="shop__item-line"></div>
                                <div class="shop__item-content">
                                    <div class="shop__item-content-top">
                                        <h4 class="title"><a href="{{ url('service') . '/' . $otherCatalog->category . '/' . $otherCatalog->slug}}">{{ $otherCatalog->name }}</a></h4>
                                        {{-- <div class="shop__item-price">$29</div> --}}
                                    </div>
                                    <div class="shop__item-cat"><a href="{{ url('service') . '/' . $otherCatalog->category . '/' . $otherCatalog->slug}}"><small>Mulai Dari </small><b>Rp. {{ number_format($otherCatalog->product[0]->price) }}</b></a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- shop-area-end -->

{{-- modal --}}
<div class="modal fade" id="petunjukModal" tabindex="-1" aria-labelledby="petunjukModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark" style="border-bottom: 3px solid #181818;">
                <h5 class="modal-title text-white" id="petunjukModalLabel">Petunjuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark">
                <img src="{{ asset($serviceCatalog->guide_dir) . '/' . $serviceCatalog->guide }}"
                    alt="Petunjuk Mobile Legends Bang Bang" class="img-fluid">
            </div>
            <div class="modal-footer bg-dark" style="border-top: 3px solid #181818;">
                <div class="shop__details-bottom" style="margin-top: 0px;">
                    <div class="contact__form-wrap" style="margin-top: 0px;">
                            <button class="submit-btn" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark" style="border-bottom: 3px solid #181818;">
                <h5 class="modal-title text-white" id="confirmationModalLabel">Konfirmasi Pesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark">
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
            <div class="modal-footer bg-dark" style="border-top: 3px solid #181818;">
                <div class="shop__details-bottom" style="margin-top: 0px;">
                    <div class="contact__form-wrap" style="margin-top: 0px;">
                            <button class="submit-btn" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end modal --}}

@endsection

@section('footer-script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var timeout;

        $('.gameForm').on('keyup', function(){

            getUsername();
            
        });

        $('#form-product').on('submit', function(e){
            e.preventDefault();

            var gamerTag = $('#gamer_tag').val();
            var playerId = $('#player_id').val();
            var serverId = $('#server_id').val();
            var productId = $('input[name="service_product_code"]:checked').val();
            
            var email = $('#email').val();
            var whatsapp = $('#whatsapp').val();

            var productGame = '-';
            var productName = '-';
            var productPrice = '-';

            if(gamerTag == ''){
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Akun anda tidak ditemukan.',
                    color: '#fff',
                    background: '#202124',
                    confirmButtonColor: '#45F882',
                    backdrop: `
                        rgba(24, 24, 24, 0.4)
                    `
                });
            }else{

                $.ajax({
                url: `{{ route('api.get-product-by-code') }}`,
                data: {code: productId},
                dataType: 'json',
                beforeSend: function(){
                    Swal.fire({
                        icon: 'info',
                        title: 'Mohon ditunggu!',
                        text: 'Transaksi anda sedang diverifikasi.',
                        color: '#fff',
                        background: '#202124',
                        confirmButtonColor: '#45F882',
                        backdrop: `
                            rgba(24, 24, 24, 0.4)
                        `
                    });
                },
                success: function(result) {
    
                    productGame = result.data.product.game;
                    productName = result.data.product.name;
                    productPrice = result.data.product.price;
    
                    var linkPurchase = "https://wa.me/+6285777815955?text=Halo!%20Saya%20mau%20pesan%0a%0a" + "Username%20:%20" + gamerTag + "%0aPlayer%20ID%20:%20" + playerId + "%0aServer%20ID%20:%20" + serverId + "%0aGame%20:%20" + productGame + "%0aProduct%20Code%20:%20" + productId + "%0aProduct%20Name%20:%20" + productName + "%0aProduct%20Price%20:%20" + Number(productPrice);

                    if(Number(result.data.product.price) <= Number(result.data.response.data.balance)){
                        // process
                        Swal.fire({
                            icon: 'question',
                            title: 'Apakah data anda sudah benar?',
                            text: 'Data keliru bukan tanggung jawab kami',
                            html:
                                `<table class="table w-100 text-white" style="font-size: 12px;">
                                    <tr>
                                        <th style="width: 46%;">User ID</th>
                                        <td>${playerId}</td>
                                    </tr>    
                                    <tr>
                                        <th>Server ID</th>
                                        <td>${serverId}</td>
                                    </tr>    
                                    <tr>
                                        <th>Username</th>
                                        <td>${gamerTag}</td>
                                    </tr>
                                    <tr>
                                        <th>Payment</th>
                                        <td>QRIS (Recommended)</td>
                                    </tr>
                                    <tr>
                                        <th>Produk</th>
                                        <td>{{ $serviceCatalog->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Item</th>
                                        <td>${productName}</td>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <td>${Number(productPrice)}</td>
                                    </tr>
                                </table>
                                <br>
                                <small style="font-size: 10px;">*Periksa kembali! Data keliru bukan tanggung jawab kami</small><br>
                                <small style="font-size: 10px;">*Nama merchant yang muncul pada QRIS adalah: Generasio Store</small>
                                `,
                            showCloseButton: true,
                            showCancelButton: true,
                            confirmButtonText: 'Data sudah sesuai',
                            cancelButtonText: 'Belum sesuai',
                            // width: 600,
                            // padding: '3em',
                            color: '#fff',
                            background: '#202124',
                            confirmButtonColor: '#45F882',
                            backdrop: `
                                rgba(24, 24, 24, 0.4)
                            `
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // window.location.href = linkPurchase;
                                var dataForm = {
                                    gamerTag:gamerTag,
                                    playerId:playerId,
                                    serverId:serverId,
                                    catalogSlug: `{{ $serviceCatalog->slug }}`,
                                    productId:productId,
                                    productGame:productGame,
                                    productName:productName,
                                    productPrice:productPrice,
                                    email:email,
                                    whatsapp:whatsapp,
                                }
            
                                $.ajax({
                                    type: "GET",
                                    url: `{{ route('api.payment') }}`,
                                    data: dataForm,
                                    dataType: 'json',
                                    beforeSend: function() {
                                        Swal.fire({
                                            icon: 'info',
                                            title: 'Mohon ditunggu!',
                                            text: 'Transaksi anda sedang dibuat.',
                                            color: '#fff',
                                            background: '#202124',
                                            confirmButtonColor: '#45F882',
                                            backdrop: `
                                                rgba(24, 24, 24, 0.4)
                                            `
                                        });
                                    },
                                    success: function(response) {
                                        // Handle respons dari server di sini
                                        console.log(response);
        
                                        window.location.href = `{{ url('transaction/list') }}` + '/' + response.result.invoice_id;
                                    },
                                    error: function(xhr, status, error) {
                                        // Handle error di sini
                                        console.error(error);
                                    }
                                });
                            }
        
                        });

                    }else{
                        // dont process
                        // balance not suficient

                        Swal.fire({
                            icon: 'error',
                            title: 'Produk Ini Sedang Tidak Tersedia',
                            html:
                                `<table class="table w-100 text-white" style="font-size: 12px;">
                                    <tr>
                                        <th style="width: 46%;">User ID</th>
                                        <td>${playerId}</td>
                                    </tr>    
                                    <tr>
                                        <th>Server ID</th>
                                        <td>${serverId}</td>
                                    </tr>    
                                    <tr>
                                        <th>Username</th>
                                        <td>${gamerTag}</td>
                                    </tr>
                                    <tr>
                                        <th>Payment</th>
                                        <td>QRIS (Recommended)</td>
                                    </tr>
                                    <tr>
                                        <th>Produk</th>
                                        <td>{{ $serviceCatalog->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Item</th>
                                        <td>${productName}</td>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <td>${Number(productPrice)}</td>
                                    </tr>
                                </table>
                                <br>
                                <small style="font-size: 10px;">*Silahkan coba lagi nanti atau hubungi admin</small><br>
                                <small style="font-size: 10px;">*Atau anda dapat memilih produk lain</small>
                                `,
                            showCloseButton: true,
                            showCancelButton: false,
                            confirmButtonText: 'OK',
                            // width: 600,
                            // padding: '3em',
                            color: '#fff',
                            background: '#202124',
                            confirmButtonColor: '#45F882',
                            backdrop: `
                                rgba(24, 24, 24, 0.4)
                            `
                        });
                    }
    
    
                }});

            }


            

        });

        function getUsername(){
            var player_id = $('#player_id').val();
            var server_id = $('#server_id').val();

            var dataToSend = {
                game_code: `{{ $serviceCatalog->game_code }}`,
                player_id: player_id,
                server_id: server_id,
            };

            // Menggunakan AJAX untuk mengirim data
            clearTimeout(timeout); // Menghapus timeout sebelumnya
            timeout = setTimeout(function() {
                // Ini akan dijalankan setelah pengguna selesai mengetik
                // Lakukan permintaan Ajax di sini
                $.ajax({
                    type: "GET",
                    url: `{{ route('api.get-username-game') }}`,
                    data: dataToSend,
                    beforeSend: function(){
                        $('#gamer_tag_loading').show(300);
                        $('#gamer_tag_loading').text('Tunggu sampai username anda muncul..');
                    },
                    success: function(response) {
                        if(response.result){
                            if(response.result.result){
                                $('#gamer_tag_parent').show(500);
                                $('#gamer_tag_loading').hide(300);
    
                                $('#gamer_tag').val(response.result.data);
                                console.log(response.result.data);
                            } else {
                                if(response.result.message == "Delay 10 detik"){
                                    $('#gamer_tag_loading').text(response.result.message);
                                    getUsername();
                                } else {
                                    $('#gamer_tag_loading').text(response.result.message);
    
                                    $('#gamer_tag_parent').hide(500);
                                    $('#gamer_tag').val(null);
                                }
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle error di sini
                        console.error(error);
                    }
                });
            }, 1500); // Timeout 500ms (0.5 detik) untuk menahan permintaan
        }
    </script>

    <script>
        $(document).ready(function() {
            
            // Fungsi untuk menampilkan atau menyembunyikan produk berdasarkan nama produk
            function filterProductsByName() {
                var filterValue = $("#filter-name").val().toLowerCase();

                $(".list-group-row").each(function() {
                    var productName = $(this).find(".name-prod").text().toLowerCase();
                    if (productName.includes(filterValue) || filterValue === "") {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }

            // Panggil fungsi filter awal
            filterProductsByName();

            // Panggil fungsi filter saat input berubah
            $("#filter-name").on("input", filterProductsByName);
        });
    </script>

@endsection