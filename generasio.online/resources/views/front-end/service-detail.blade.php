@extends('front-end.layouts.default')

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb__hide-img" data-background="{{ asset('mykd') }}/assets/img/bg/breadcrumb_bg02.jpg">
    <div class="container">
        <div class="breadcrumb__wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h2 class="title">{{ $service->name }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('') }}">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Layanan Kami</li>
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
<section class="shop-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-11 order-2 order-lg-0">
                <aside class="shop-sidebar">
                    <div class="shop__widget">
                        <h4 class="shop__widget-title">pencarian</h4>
                        <form action="">
                            <div class="shop__widget-inner">
                                <div class="shop__search">
                                    <input type="text" placeholder="Cari disini" name="name" value="{{ $req['name'] ?? NULL }}">
                                    <button type="submit" class="p-0 border-0"><i class="flaticon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="shop__widget">
                        <h4 class="shop__widget-title">kategori</h4>
                        <div class="shop__widget-inner">
                            <ul class="product-categories list-wrap">
                                @foreach ($categories as $categoryKey => $category)
                                    @if (isset($req['name']) && !empty($req['name']))
                                        @php
                                            $categoryUrl =  url()->current() . '?name=' . $req['name'] . '&category=' .  $categoryKey;
                                        @endphp
                                    @else
                                        @php
                                            $categoryUrl =  url()->current() . '?category=' .  $categoryKey;
                                        @endphp
                                    @endif
                                    <li><a href="{{ $categoryUrl }}">{{ ucfirst($categoryKey) }}</a><span class="float-right">{{ count($category) }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-11">
                <div class="shop__top-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-sm-6">
                            <div class="shop__showing-result">
                                <p>Menampilkan 1 - {{ count($serviceCatalogs) }} dari {{ count($serviceCatalogs) }} hasil</p>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-sm-6">
                            <div class="shop__ordering">
                                <select name="orderby" class="orderby">
                                    <option value="Default sorting">Default sorting</option>
                                    <option value="Sort by popularity">Sort by popularity</option>
                                    <option value="Sort by average rating">Sort by average rating</option>
                                    <option value="Sort by latest">Sort by latest</option>
                                    <option value="Sort by latest">Sort by latest</option>
                                </select>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="row justify-content-center">

                    @if (count($serviceCatalogs) < 1)
                        <h2>Kosong! Data tidak ditemukan</h2>
                        <p>Pastikan anda memasukan filter dengan benar</p>
                    @endif

                    @foreach ($serviceCatalogs as $serviceCatalog)
                        <div class="col-lg-4">
                            <div class="shop__item">
                                <div class="shop__item-thumb">
                                    <a href="{{ url('service') . '/' . $serviceCatalog->category . '/' . $serviceCatalog->slug}}"><img src="{{ asset($serviceCatalog->file_dir) . '/' . $serviceCatalog->file }}" alt="{{ $serviceCatalog->name }} generasio" style="object-fit: cover; width:262px; height:262px;"></a>
                                    <a href="{{ url('service') . '/' . $serviceCatalog->category . '/' . $serviceCatalog->slug}}" class="wishlist-button"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="shop__item-line"></div>
                                <div class="shop__item-content">
                                    <div class="shop__item-content-top" style="margin-bottom: 0px;">
                                        <h4 style="font-size: 15px; !important"><a href="{{ url('service') . '/' . $serviceCatalog->category . '/' . $serviceCatalog->slug}}">{{ $serviceCatalog->name }}</a></h4>
                                        {{-- <div class="shop__item-price">{{ number_format($serviceCatalog->product[0]->price) }}</div> --}}
                                    </div>
                                    @php
                                        $category = str_replace('-', ' ', $serviceCatalog->main_category);
                                        $category = preg_replace("/[^a-zA-Z0-9\s]/", "", strtolower($category));
                                        $category = ucwords($category);
                                    @endphp
                                    <div class="shop__item-cat"><a href="{{ url('service') . '/' . $serviceCatalog->category . '/' . $serviceCatalog->slug}}" style="font-size: 13px; !important">{{ $category }}</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                {{-- <div class="pagination__wrap">
                    <ul class="list-wrap d-flex flex-wrap justify-content-center">
                        <li><a href="#" class="page-numbers">01</a></li>
                        <li><span class="page-numbers current">02</span></li>
                        <li><a href="#" class="page-numbers">03</a></li>
                        <li><a href="#" class="page-numbers">....</a></li>
                        <li>
                            <a href="#" class="next page-numbers">
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- shop-area-end -->

@endsection