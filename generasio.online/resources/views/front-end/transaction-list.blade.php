@extends('front-end.layouts.default')

@section('style')
    <style>
        .bg-dark{
            background-color: #161e26 !important;
        }
    </style>
@endsection

@section('link')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
@endsection

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb__hide-img" data-background="{{ asset('mykd') }}/assets/img/bg/breadcrumb_bg03.jpg">
    <div class="container">
        <div class="breadcrumb__wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h2 class="title">List Transaksi</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('transaction') }}">Transaksi</a></li>
                                <li class="breadcrumb-item active" aria-current="page">&nbsp;&nbsp;100 Transaksi</li>
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
                    <h2 class="title">List Transaksi</h2>
                    <p>
                        Berikut adalah list transaksi generasio, data dibatasi max 100 data terbaru
                    </p>
                    <br>

                    <div class="card bg-dark shadow">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table w-100 text-center text-white" id="table-transaction">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Invoice ID</th>
                                            <th class="text-center">Game</th>
                                            <th class="text-center">Produk</th>
                                            <th class="text-center">Harga</th>
                                            <th class="text-center">Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td style="width: 1%">{{ $loop->iteration }}</td>
                                                <td style="width: 15%">{{ $transaction->status }}</td>
                                                <td style="width: 20%">
                                                    <a href="{{ url('transaction/list') . '/' . $transaction->invoice_id }}">{{ $transaction->invoice_id }}</a>
                                                </td>
                                                <td>{{ $transaction->catalog->name }}</td>
                                                <td>{{ $transaction->product->name }}</td>
                                                <td>Rp. {{ number_format($transaction->price) }}</td>
                                                <td>{{ $transaction->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->

@endsection

@section('footer-script')
    <script>
        	
        let table = new DataTable('#table-transaction');

    </script>
@endsection