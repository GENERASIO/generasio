<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../"/>
		
        <meta charset="UTF-8">

        <!-- responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title', $pageTitle ?? 'Home') | Generasio Online Store</title>
        <meta name='robots' content='max-image-preview:large' />

        {{-- basic meta --}}
        <meta charset="utf-8" />
        <meta name="description" content="@yield('description', $pageDescription ?? 'Generasio adalah solusi terbaik untuk kebutuhan online Anda! Kami menyediakan beragam layanan yang akan memudahkan Anda dalam mengelola kehidupan digital Anda. Dengan Generasio, Anda dapat melakukan top up game favorit Anda, membayar tagihan online dengan cepat dan mudah, serta meningkatkan kehadiran Anda di media sosial.')" />
        <meta name="keywords" content="@yield('keywords', $pageKeywords ?? 'Top Up Game Online, Top Up Mobile Legends, Top Up Diamond, Top Up Murah, Pembayaran Tagihan Online, Jasa Sosial Media, Beli Diamond Game, Pembayaran Listrik Online, Penambah Followers Instagram, Pembelian Coin Game, Bayar Tagihan Internet, Jasa Like Instagram, Voucher Game Online, Pembayaran Tagihan Air, Layanan Media Sosial, Jual Followers Facebook, Top Up Saldo Game, Pembayaran Tagihan Pulsa, Layanan Sosial Media Terpercaya, Beli Followers Twitter, Beli Like Facebook, Top Up Game Mobile Legends, Layanan Pembayaran Online Aman, Generasio')" />

        <meta name="viewport" content="width=device-width, initial-scale=1" />

        {{-- system meta --}}
        <meta name="robots" content="index,follow">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        {{-- meta props --}}
        <meta property="og:locale" content="id" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="@yield('title', $pageTitle ?? 'Home')" />
        <meta property="og:url" content="https://generasio.dynastina.com/" />
        <meta property="og:site_name" content="@yield('title', $pageTitle ?? 'Home') | Generasio Online Store" />

        {{-- Open Graph --}}
        <meta property="og:locale" content="id_ID" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="@yield('title', $pageTitle ?? 'Home') | Generasio Online Store" />
        <meta property="og:description" content="@yield('description', $pageDescription ?? 'Generasio adalah solusi terbaik untuk kebutuhan online Anda! Kami menyediakan beragam layanan yang akan memudahkan Anda dalam mengelola kehidupan digital Anda. Dengan Generasio, Anda dapat melakukan top up game favorit Anda, membayar tagihan online dengan cepat dan mudah, serta meningkatkan kehadiran Anda di media sosial.')">
        <meta property="og:url" content="@yield('url', $pageUrl ?? 'https://generasio.dynastina.com/')" />
        <meta property="og:site_name" content="@yield('title', $pageTitle ?? 'Home')" />
        <meta property="og:image" content="{{ asset('') }}/mykd/assets/img/logo/generasio.png" />
        <meta property="og:image:secure_url" content="{{ asset('') }}/mykd/assets/img/logo/generasio.png" />
        <meta property="og:image:type" content="image/ico" />
        <meta property="og:image:width" content="256" />
        <meta property="og:image:height" content="256" />

        {{-- Twitter --}}
        <meta name="twitter:title" content="@yield('title', $pageTitle ?? 'Home') | Generasio Online Store">
        <meta name="twitter:description" content="@yield('description', $pageDescription ?? 'Generasio adalah solusi terbaik untuk kebutuhan online Anda! Kami menyediakan beragam layanan yang akan memudahkan Anda dalam mengelola kehidupan digital Anda. Dengan Generasio, Anda dapat melakukan top up game favorit Anda, membayar tagihan online dengan cepat dan mudah, serta meningkatkan kehadiran Anda di media sosial.')">
        <meta name="twitter:image" content="{{ asset('') }}/mykd/assets/img/logo/generasio.png">
        <meta name="twitter:image:src" content="{{ asset('') }}/mykd/assets/img/logo/generasio.png">

        <!-- Link -->
        <link rel="canonical" href="https://generasio.dynastina.com/" />
        <link rel="shortcut icon" href="{{ asset('') }}/mykd/assets/img/logo/generasio.png" />

		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('demo34/dist') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('demo34/dist') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank">
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
					<!--begin::Form-->
					<div class="d-flex flex-center flex-column flex-lg-row-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10">
							<!--begin::Form-->
							<form method="POST" class="form" id="kt_login_singin_form" action="{{ route('login.post') }}">
                                @csrf
								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Selamat Datang</h1>
									<!--end::Title-->
									<!--begin::Subtitle-->
									<div class="text-gray-500 fw-semibold fs-6">Generasio Store</div>
									<!--end::Subtitle=-->
								</div>
								<!--begin::Heading-->
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="email" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Email-->
								</div>
								<!--end::Input group=-->
								<div class="fv-row mb-3">
									<!--begin::Password-->
									<input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Password-->
								</div>
								<!--end::Input group=-->
								{{-- <!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
									<div></div>
									<!--begin::Link-->
									<a href="../../demo34/dist/authentication/layouts/corporate/reset-password.html" class="link-primary">Forgot Password ?</a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper--> --}}
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_in_submit" class="btn btn-dark" style="background-color: #0f161b">
										<!--begin::Indicator label-->
										<span class="indicator-label">Masuk</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Mohon ditunggu...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Submit button-->
								<!--begin::Sign up-->
								{{-- <div class="text-gray-500 text-center fw-semibold fs-6">Belum terdaftar?
								<a href="../../demo34/dist/authentication/layouts/corporate/sign-up.html" class="link-primary">Daftar Sekarang</a></div> --}}
								<!--end::Sign up-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Form-->
					<!--begin::Footer-->
					<div class="w-lg-500px d-flex flex-stack px-10 mx-auto justify-content-center">
						<!--begin::Links-->
						<div class="d-flex fw-semibold text-primary fs-base gap-5">
							<a href="{{ url('term') }}" target="_blank">Terms</a>
							<a href="{{ url('help') }}" target="_blank">Help</a>
							<a href="{{ url('credit') }}" target="_blank">Credits</a>
						</div>
						<!--end::Links-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Body-->
				<!--begin::Aside-->
				<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-color: #0f161b">
					<!--begin::Content-->
					<div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
						<!--begin::Logo-->
						<a href="{{ url()->current() }}" class="mb-0 mb-lg-12">
							<img alt="Logo" src="{{ asset('') }}/mykd/assets/img/logo/generasio.png" class="h-60px h-lg-75px" />
						</a>
						<!--end::Logo-->
						<!--begin::Image-->
						<img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="{{ asset('mykd/assets/img/others/fun_fact_real.png') }}" alt="" style="height: 350px; object-fit:contain"/>
						<!--end::Image-->
						<!--begin::Title-->
						<h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">Murah, Aman & Tanpa Biaya Admin</h1>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="d-none d-lg-block text-white fs-base text-center">
                            Official Generasio Store Website Application
                        </div>
						<!--end::Text-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Aside-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('demo34/dist') }}/assets/plugins/global/plugins.bundle.js"></script>
		<script src="{{ asset('demo34/dist') }}/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ asset('demo34/dist') }}/assets/js/custom/authentication/sign-in/general.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>