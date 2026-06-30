<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <title>Thank you!</title>
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('demo1/dist') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('demo1/dist') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <style>
        @media only screen and (max-width: 1000px) {
            .logo-space img {
                width: 300px !important;
            }

            .logo-space h2 {
                text-align: center !important;
            }
        }

    </style>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="app-blank app-blank">
    <!--begin::Theme mode setup on page load-->
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Body-->
            <div class="scroll-y flex-column-fluid px-10 py-10" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header_nav" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true" style="background-color:#D5D9E2; --kt-scrollbar-color: #d9d0cc; --kt-scrollbar-hover-color: #d9d0cc">
                <!--begin::Email template-->
                <style>
                    html,
                    body {
                        padding: 0;
                        margin: 0;
                        font-family: Inter, Helvetica, "sans-serif";
                    }

                    a:hover {
                        color: #009ef7;
                    }

                </style>
                <div id="#kt_app_body_content" style="background-color:#D5D9E2; font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
                    <div style="background-color:#ffffff; padding: 45px 0 34px 0; border-radius: 24px; margin:40px auto; max-width: 600px;">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="auto" style="border-collapse:collapse">
                            <tbody>
                                <tr>
                                    <td align="center" valign="center" style="text-align:center; padding-bottom: 10px">
                                        <!--begin:Email content-->
                                        <div style="text-align:center; margin:0 15px 34px 15px">
                                            <!--begin:Logo-->
                                            <div style="margin-bottom: 10px">
                                                <a href="https://generasio.dynastina.com" rel="noopener" target="_blank">
                                                    <img alt="Generasio Logo" src="{{ $message->embed(public_path() . '/mykd/assets/img/logo/generasio.png') }}" style="height: 70px" />
                                                </a>
                                            </div>
                                            <!--end:Logo-->
                                            <!--begin:Media-->
                                            <div style="margin-bottom: 15px">
                                                {{-- <img alt="Thumbs Up Icon" src="{{ $message->embed(public_path() . '/img/email/icon-positive-vote-1.jpg') }}" /> --}}
                                            </div>
                                            <!--end:Media-->
                                            <!--begin:Text-->
                                            <div style="font-size: 14px; font-weight: 500; margin-bottom: 27px; font-family:Arial,Helvetica,sans-serif;">
                                                <p style="margin-bottom:9px; color:#181C32; font-size: 22px; font-weight:700">Hai {{ $req->gamer_tag }}</p>
                                                <p style="margin-bottom:2px; color:#7E8299">Terimakasih telah berbelanja di Generasio Store, berikut adalah detail transaksi anda. <br> Happy Shopping!</p>
                                            </div>

                                            <div style="justify-content: center;font-size:14px;font-weight:500;margin-bottom:27px;font-family:Arial,Helvetica,sans-serif;display:flex">
                                                <table class="table table-hover" style="width: 100%">
                                                    <tr>
                                                        <th style="text-align: left;">Username</th>
                                                        <td style="text-align: left;">: {{ $req->gamer_tag }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: left;">Player ID</th>
                                                        <td style="text-align: left;">: {{ $req->player_id }} ({{ $req->server_id }})</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: left;">Metode Pembayaran</th>
                                                        <td style="text-align: left;">: {{ strtoupper($req->payment_method) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: left;">Nominal Pembayaran</th>
                                                        <td style="text-align: left;">: Rp. {{ number_format($req->price) }} (Bebas Admin)</td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <!--end:Text-->
                                            <a href='{{ url('transaction/list') . '/' . $req->invoice_id }}' target="_blank" style="background-color:#50cd89; border-radius:6px;display:inline-block; padding:11px 19px; color: #FFFFFF; font-size: 14px; font-weight:500;">Bayar Tagihan</a>
                                        </div>
                                        <!--end:Email content-->
                                    </td>
                                </tr>
                                <tr style="display: flex; justify-content: center; margin:0 60px 35px 60px">
                                    <td align="start" valign="start" style="padding-bottom: 10px;">
                                        <p style="color:#181C32; font-size: 18px; font-weight: 600; margin-bottom:13px">Keuntungan Generasio?</p>
                                        <!--begin::Wrapper-->
                                        <div style="background: #F9F9F9; border-radius: 12px; padding:35px 30px">
                                            <!--begin::Item-->
                                            <div style="display:flex">
                                                <!--begin::Media-->
                                                <div style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:10px">
                                                    <span style="position: absolute; color:#50CD89; font-size: 16px; font-weight: 600;">1</span>
                                                </div>
                                                <!--end::Media-->
                                                <!--begin::Block-->
                                                <div>
                                                    <!--begin::Content-->
                                                    <div>
                                                        <!--begin::Title-->
                                                        <a style="color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Official Webstore</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <p style="color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">Generasio memiliki official website pada <a href="https://generasio.dynastina.com">generasio.dynastina.com</a> yang terpercaya dan aman</p>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed" style="margin:17px 0 15px 0"></div>
                                                    <!--end::Separator-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div style="display:flex">
                                                <!--begin::Media-->
                                                <div style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:10px">
                                                    <span style="position: absolute; color:#50CD89; font-size: 16px; font-weight: 600;">2</span>
                                                </div>
                                                <!--end::Media-->
                                                <!--begin::Block-->
                                                <div>
                                                    <!--begin::Content-->
                                                    <div>
                                                        <!--begin::Title-->
                                                        <a style="color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Harga Termurah</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <p style="color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">Generasio menjual dengan harga termurah tanpa biaya admin, kamu gaperlu khawatir di prank harga lagi!</p>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed" style="margin:17px 0 15px 0"></div>
                                                    <!--end::Separator-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div style="display:flex">
                                                <!--begin::Media-->
                                                <div style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:10px">
                                                    <span style="position: absolute; color:#50CD89; font-size: 16px; font-weight: 600;">3</span>
                                                </div>
                                                <!--end::Media-->
                                                <!--begin::Block-->
                                                <div>
                                                    <!--begin::Content-->
                                                    <div>
                                                        <!--begin::Title-->
                                                        <a style="color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Cepat</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <p style="color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">Transaksi generasio sangat cepat, pesan sekarang langsung selesai hanya dalam hitungan detik!</p>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <div style="display:flex">
                                                <!--begin::Media-->
                                                <div style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:10px">
                                                    <span style="position: absolute; color:#50CD89; font-size: 16px; font-weight: 600;">4</span>
                                                </div>
                                                <!--end::Media-->
                                                <!--begin::Block-->
                                                <div>
                                                    <!--begin::Content-->
                                                    <div>
                                                        <!--begin::Title-->
                                                        <a style="color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Terbuka</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <p style="color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">Semua transaksi yang pernah dilakukan di generasio dapat dilihat di website, mulai dari status transaksi dan lama prosesnya</p>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="center" style="font-size: 13px; padding:0 15px; text-align:center; font-weight: 500; color: #A1A5B7;font-family:Arial,Helvetica,sans-serif">
                                        <p>&copy; Generasio Store.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end::Email template-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";

    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('demo1/dist') }}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('demo1/dist') }}/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--end::Javascript-->
</body>
<!--end::Body-->
</html>
