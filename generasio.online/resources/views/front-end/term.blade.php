@extends('front-end.layouts.default')

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb__hide-img" data-background="{{ asset('mykd') }}/assets/img/bg/breadcrumb_bg02.jpg">
    <div class="container">
        <div class="breadcrumb__wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h2 class="title">Terms</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Terms & Privacy Policy</li>
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
                    <h2 class="title">Terms & Privacy Policy</h2>

                    <h3>1. Terms of Service (Syarat dan Ketentuan Penggunaan):</h3>
                    <p>
                        Terms of Service atau Syarat dan Ketentuan Penggunaan adalah dokumen yang mengatur hubungan antara toko online Generasio dan pengguna layanannya. Dokumen ini mencakup berbagai aspek, seperti hak dan kewajiban pengguna, aturan penggunaan platform, pembayaran, dan banyak lagi. Beberapa poin umum dalam Terms of Service bisa mencakup:
                    </p>
                    <ul>
                        <li>Penggunaan Layanan : Menggambarkan hak dan kewajiban pengguna saat menggunakan layanan Generasio.</li>
                        <li>Pembayaran : Menjelaskan metode pembayaran, kebijakan pembatalan, dan biaya yang berlaku.</li>
                        <li>Hak Kekayaan Intelektual : Menguraikan hak cipta, merek dagang, dan lisensi yang berlaku untuk konten dan layanan di Generasio.</li>
                        <li>Privasi : Menyebutkan kebijakan privasi dan bagaimana data pengguna akan dikelola.</li>
                    </ul>

                    <h3>2. Privacy Policy (Kebijakan Privasi):</h3>
                    <p>
                        Kebijakan Privasi adalah dokumen yang menjelaskan bagaimana toko online Generasio mengumpulkan, menggunakan, dan melindungi data pribadi pengguna. Kebijakan ini bertujuan untuk memberikan transparansi tentang praktik privasi dan keamanan yang diterapkan oleh Generasio. Beberapa elemen yang sering ditemukan dalam Kebijakan Privasi adalah:
                    </p>
                    <ul>
                        <li>Informasi yang Dikumpulkan : Mengidentifikasi jenis informasi pribadi yang dikumpulkan, seperti nama, alamat email, alamat fisik, dll.</li>
                        <li>Penggunaan Informasi : Menjelaskan bagaimana data pribadi akan digunakan, misalnya untuk pemrosesan pesanan, pemberian layanan, atau tujuan pemasaran.</li>
                        <li>Pemberian kepada Pihak Ketiga : Jika ada, menginformasikan apakah data akan dibagikan dengan pihak ketiga dan untuk tujuan apa.</li>
                        <li>Cookie dan Analitik : Menjelaskan penggunaan cookie dan teknologi pelacakan serupa yang digunakan oleh situs web Generasio.</li>
                        <li>Keamanan Data : Menyebutkan langkah-langkah keamanan yang diambil untuk melindungi data pribadi.</li>
                    </ul>

                    <h3>3. Terms of Use (Syarat Penggunaan):</h3>
                    <p>
                        Terms of Use adalah perjanjian antara pengguna Generasio dan toko online yang mengatur cara penggunaan situs web atau aplikasi Generasio. Dokumen ini bisa mencakup hal-hal seperti:
                    </p>
                    <ul>
                        <li>Akses ke Situs: Menguraikan siapa yang diizinkan mengakses dan menggunakan situs web Generasio.</li>
                        <li>Larangan: Menjelaskan apa yang dilarang, misalnya penyalahgunaan situs atau pelanggaran hak kekayaan intelektual.</li>
                        <li>Konten Pengguna: Jelaskan aturan terkait dengan konten yang diunggah oleh pengguna, seperti komentar atau ulasan.</li>
                    </ul>

                    <h3>4. Privacy Statement (Pernyataan Privasi):</h3>
                    <p>
                        Privacy Statement adalah bentuk lain dari Kebijakan Privasi yang dapat lebih ringkas atau dirinci, tergantung pada preferensi Generasio. Ini mencakup poin-poin yang serupa dengan Kebijakan Privasi, namun dengan fokus pada memberikan gambaran singkat tentang praktik privasi.
                    </p>

                    <h3>5. Cookie Policy (Kebijakan Cookie):</h3>
                    <p>
                        Kebijakan Cookie adalah dokumen yang menjelaskan penggunaan cookie dan teknologi pelacakan lainnya oleh situs web Generasio. Ini mencakup informasi tentang jenis cookie yang digunakan, tujuan penggunaannya, dan bagaimana pengguna dapat mengelola atau menonaktifkan cookie.
                    </p>

                    <h3>6. Data Retention Policy (Kebijakan Penyimpanan Data):</h3>
                    <p>
                        Kebijakan Penyimpanan Data adalah dokumen yang menjelaskan berapa lama data pribadi akan disimpan oleh Generasio. Ini seringkali diperlukan oleh regulasi privasi untuk memastikan data tidak disimpan lebih lama dari yang diperlukan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->

@endsection