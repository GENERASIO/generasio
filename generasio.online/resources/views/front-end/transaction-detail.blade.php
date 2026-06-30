@extends('front-end.layouts.default')

@section('style')
    <style>
        .bg-dark{
            background-color: #161e26 !important;
        }
    </style>
@endsection

@section('header-script')
    <script type="text/javascript"
    src="https://app.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>
@endsection

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb__hide-img" data-background="{{ asset('mykd') }}/assets/img/bg/breadcrumb_bg03.jpg">
    <div class="container">
        <div class="breadcrumb__wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h2 class="title" style="font-size: 30px !important">{{ $transaction->invoice_id }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('transaction') }}">Transaksi</a></li>
                                <li class="breadcrumb-item active" aria-current="page">&nbsp;&nbsp;Detail Transaksi</li>
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
                    <h2 class="title">Detail Transaksi</h2>
                    <p>
                        Berikut adalah data pesanan anda, silahkan lakukan pembayaran untuk menyelesaikan status.
                    </p>
                    <br>
                    <div class="card bg-dark shadow d-flex justify-content-center align-items-center">
                        @if ($transaction->status == 'PENDING')
                            <div class="card-body text-center mt-2">
                                <h3>Segera Lakukan Pembayaran Sebelum</h3>
                                <h2 class="text-danger">{{ $transaction->expire_date }}</h2>
                            </div>
                        @elseif($transaction->status == 'PAID')
                            <div class="card-body text-center mt-2">
                                <h3>Transaksi Berhasil Dibayar</h3>
                                <h2 class="text-success">{{ $transaction->paid_at ?? date('Y-m-d H:i:s') }}</h2>
                            </div>
                        @else
                            <div class="card-body text-center mt-2">
                                <h3>Transaksi Gagal</h3>
                                <h2 class="text-danger">Transaksi Expired atau Terjadi Kesalahan Lainnya</h2>
                            </div>
                        @endif
                    </div>
                    <br>
                    <div class="card bg-dark shadow">
                        <div class="card-header">
                            <a href="{{ url()->current() }}" class="btn btn-primary" style="font-size:10px;padding:10px 10px">Refresh</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table w-100 text-center text-white" id="table-detail-transaction" style="font-size: 15px;">
                                    <tr>
                                        <th class="text-center" style="width: 40%">Invoice ID</th>
                                        <th class="text-center" style="width: 1%">:</th>
                                        <td class="text-center">
                                            <span id="invoice_id">{{ $transaction->invoice_id }}</span> 
                                            <button type="button" id="copyButton" style="background-color: transparent;border-color: transparent;">
                                                <i class="fa fa-copy"></i> Salin
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="width: 40%">Status Pembayaran</th>
                                        <th class="text-center" style="width: 1%">:</th>

                                        @if ($transaction->status == 'PENDING')
                                            <td class="text-center text-warning">{{ $transaction->status }}</td>
                                        @elseif($transaction->status == 'EXPIRED')
                                            <td class="text-center text-danger">{{ $transaction->status }}</td>
                                        @else
                                            <td class="text-center text-success">{{ $transaction->status }}</td>
                                        @endif
                                    </tr>

                                    @if (!empty($responseData) && !empty($responseData['data']) && count($responseData['data']) == 1)
                                        <tr>
                                            <th class="text-center" style="width: 40%">Status Transaksi</th>
                                            <th class="text-center" style="width: 1%">:</th>
                                            @if ($responseData['data'][0]['status'] == 'success')
                                                <td class="text-center text-success">{{ strtoupper($responseData['data'][0]['status']) }}</td>
                                            @else
                                                <td class="text-center text-warning">{{ strtoupper($responseData['data'][0]['status']) }}</td>
                                            @endif
                                        </tr>

                                        <tr>
                                            <th class="text-center" style="width: 40%">Message</th>
                                            <th class="text-center" style="width: 1%">:</th>
                                            <td class="text-center">{{ ucfirst($responseData['data'][0]['message']) }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <th class="text-center" style="width: 40%">Game</th>
                                        <th class="text-center" style="width: 1%">:</th>
                                        <td class="text-center">{{ $transaction->catalog->name }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="width: 40%">Produk</th>
                                        <th class="text-center" style="width: 1%">:</th>
                                        <td class="text-center">{{ $transaction->product->name }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="width: 40%">Total Harga</th>
                                        <th class="text-center" style="width: 1%">:</th>
                                        <td class="text-center">
                                            Rp. {{ number_format($transaction->price) }}
                                            <span id="priceTransaction" style="display: none">{{ (int)$transaction->price }}</span> 
                                            <button type="button" id="copyButtonPrice" style="background-color: transparent;border-color: transparent;">
                                                <i class="fa fa-copy"></i> Salin
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="width: 40%">Metode Pembayaran</th>
                                        <th class="text-center" style="width: 1%">:</th>
                                        <td class="text-center">{{ strtoupper($transaction->payment_method) }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="width: 40%">Tanggal Order</th>
                                        <th class="text-center" style="width: 1%">:</th>
                                        <td class="text-center">{{ $transaction->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="width: 40%">Tanggal Pembayaran</th>
                                        <th class="text-center" style="width: 1%">:</th>
                                        <td class="text-center">{{ $transaction->paid_at ?? '-' }}</td>
                                    </tr>
                                </table>
                            </div>


                        </div>
                    </div>
                    <br>
                    <div class="card bg-dark shadow">
                        @if ($transaction->status == 'PENDING')
                            <div class="card-body text-center mt-2 p-3">
                                <div class="row">
                                    <div class="col-md-4 col-12 d-flex justify-content-center align-items-center">
                                        <img src="{{ $transaction->snap_token }}" style="width: 250px; height: 250px">
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <h5 class="mt-5">Silahkan lakukan pembayaran sebelum QR Code Expired</h5>
                                        <ul>
                                            <li>Anda dapat melakukan pembayaran melalui semua metode pembayaran yang menyediakan layanan pembayaran melalui qris</li>
                                            <li>Pastikan detail pesanan dan nominal yang tertera pada QRIS sudah benar</li>
                                            <li>Nama merchant yang muncul pada saat pembayaran adalah <b>Markimam</b></li>
                                            <li>Scan, download atau screenshot QR untuk pembayaran</li>
                                        </ul>
                                        <a href="{{ $transaction->snap_token }}" class="btn btn-sm btn-primary" target="_blank">Download QR</a>
                                        {{-- <p>Anda dapat melakukan pembayaran melalui semua metode pembayaran yang menyediakan layanan pembayaran melalui qris</p>
                                        <p>Pastikan detail pesanan dan nominal yang tertera pada QRIS sudah benar</p>
                                        <p>Nama merchant yang muncul pada saat pembayaran adalah <b>Markimam</b></p> --}}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->

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

@section('footer-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $("#copyButton").click(function() {
            // Temukan elemen yang berdekatan dengan tombol yang diklik
            var textElement = $(this).siblings("span");

            // Dapatkan teks dari elemen tersebut
            var textToCopy = textElement.text();

            // Salin teks ke clipboard
            var tempInput = $("<input>");
            $("body").append(tempInput);
            tempInput.val(textToCopy).select();
            document.execCommand("copy");
            tempInput.remove();

            // Beri umpan balik bahwa teks telah disalin
            Swal.fire({
                text: "ID telah disalin: " + textToCopy,
                toast: true,
                position: 'bottom-right',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
            })
        });
        $("#copyButtonPrice").click(function() {
            // Temukan elemen yang berdekatan dengan tombol yang diklik
            var textElement = $(this).siblings("span");

            // Dapatkan teks dari elemen tersebut
            var textToCopy = textElement.text();

            // Salin teks ke clipboard
            var tempInput = $("<input>");
            $("body").append(tempInput);
            tempInput.val(textToCopy).select();
            document.execCommand("copy");
            tempInput.remove();

            // Beri umpan balik bahwa teks telah disalin
            Swal.fire({
                text: "Nominal telah disalin : " + textToCopy,
                toast: true,
                position: 'bottom-right',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
            })
        });
    });
</script>
<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {

        Swal.fire({
            text: "Mohon ditunggu...",
            toast: true,
            position: 'bottom-right',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
        })
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay(`{{ $transaction->snap_token }}`, {
        onSuccess: function(result){
            /* You may add your own implementation here */
            Swal.fire({
                text: "Pembayaran Sukses!",
                toast: true,
                position: 'bottom-right',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
            });

            setTimeout(() => {
                location.reload();
            }, 1000);
        },
        onPending: function(result){
            /* You may add your own implementation here */
            Swal.fire({
                text: "Menunggu Pembayaran!",
                toast: true,
                position: 'bottom-right',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
            })
        },
        onError: function(result){
            /* You may add your own implementation here */
            Swal.fire({
                text: "Pembayaran Gagal!",
                toast: true,
                position: 'bottom-right',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
            })
        },
        onClose: function(){
            /* You may add your own implementation here */
            Swal.fire({
                text: "Pembayaran Tidak Selesai!",
                toast: true,
                position: 'bottom-right',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
            })
        }
        })
    });
</script>
@endsection