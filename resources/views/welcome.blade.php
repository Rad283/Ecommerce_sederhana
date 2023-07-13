@extends('lp.layout.app')
@section('isi')
    <div class="content-wrapper oh">

        <!-- Hero Slider -->
        <section class="hero-wrap relative">
            <div>
                <div class="full-screen-hero">
                    <div class="container" id="fs-container">
                        <div class="hero-holder">
                            <div class="hero-message style-2 dark">
                                <div class="hero-text-holder">
                                    <h2 class="hero-subtitle">Get now 50% Off</h2>
                                    <h1 class="hero-title">Big Sales</h1>
                                    <p>Get your new Gadget Now !!.</p>
                                    <div class="buttons-holder">
                                        <a href="#featured" class="btn btn-lg btn-dark"><span>Shop Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- end hero slider -->

        <!-- Promo Banners -->
        <section class="section-wrap promo-banners pb-50">
            <div class="container">
                <div class="row">

                    <div class="col-xs-4 col-xxs-12 mb-30 promo-banner style-2">
                        <a href="#">
                            <img src="{{ asset('lp/img/shop/laptop.jpg') }}" alt="">
                            <div class="promo-inner">
                                <h2>laptop</h2>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-4 col-xxs-12 mb-30 promo-banner style-2">
                        <a href="#">
                            <img src="{{ asset('lp/img/shop/aksesoris.jpg') }}" alt="">
                            <div class="promo-inner">
                                <h2>accessories</h2>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-4 col-xxs-12 mb-30 promo-banner style-2">
                        <a href="#">
                            <img src="{{ asset('lp/img/shop/hp.jpg') }}" alt="">
                            <div class="promo-inner">
                                <h2>smartphone</h2>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section> <!-- end promo banners -->


        <!-- Tabs/Slider Products -->
        <section class="section-wrap pt-0">
            <div class="container-fluid">

                <!-- Tabs -->
                <div class="text-center">
                    <div class="tabs product-tabs">

                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#featured" data-toggle="tab">Featured</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <!-- Tab Content -->
                <div class="tab-content tabs-slider-content">

                    <!-- Featured -->
                    <div class="tab-pane fade in active" id="featured">

                        <div id="owl-shop-items-slider-1" class="owl-carousel owl-theme">
                            {{-- foreach dsni --}}
                            @foreach ($produk as $item)
                                <div class="product">
                                    <div class="product-item hover-trigger">
                                        <div class="product-img">
                                            <a href={{ route('detailed', $item->id) }}>
                                                <img src="{{ asset('storage/' . $item->gambar) }}" style="width: 150px;">
                                            </a>
                                            <div class="product-label">
                                                <span class="sale">sale</span>
                                            </div>
                                            <a href="{{ route('detailed', $item->id) }}" class="product-quickview">Quick
                                                View</a>
                                        </div>
                                        <div class="product-details">
                                            <h3 class="product-title">
                                                <a href="{{ route('detailed', $item->id) }}">{{ $item->nama }}</a>
                                            </h3>
                                            <span class="category">
                                                <a
                                                    href="{{ route('detailed', $item->id) }}">{{ $item->kategori->nama_kategori }}</a>
                                            </span>
                                        </div>
                                        <span class="price">
                                            <ins>
                                                <span class="amount">Rp. {{ number_format($item->harga_jual, 2) }}</span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                                {{-- end foreach dsni --}}
                            @endforeach
                        </div> <!-- end slider -->

                    </div> <!-- end featured -->
                </div>
            </div>
        </section> <!-- end tabs/slider products -->


        <!-- Promo Section -->
        <section class="section-wrap relative overlay promo-bg"
            style="background-image: url({{ asset('lp/img/promo_bg.jpg') }});">
            <div class="container text-center">
                <div class="table-box">
                    <h2 class="uppercase white">summer sale</h2>
                    <p class="uppercase white">Embrace the Summer Vibe with Cutting-Edge Gadgets!</p>
                    <a href="#featured" class="btn btn-lg btn-transparent"><span>Shop Now</span></a>
                </div>
            </div>
        </section> <!-- end promo section -->


        <!-- From Blog -->
        <section class="section-wrap from-blog pb-40">

        </section> <!-- end from blog -->

        <!-- Partners -->
        <section class="section-wrap partners bg-dark">
            <div class="container">
                <div class="row">

                    <div id="owl-partners" class="owl-carousel owl-theme">

                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('lp/img/partners/partner_logo_1.png') }}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('lp/img/partners/partner_logo_2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('lp/img/partners/partner_logo_3.png') }}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('lp/img/partners/partner_logo_4.png') }}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('lp/img/partners/partner_logo_5.png') }}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('lp/img/partners/partner_logo_6.png') }}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('lp/img/partners/partner_logo_1.png') }}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('lp/img/partners/partner_logo_2.png') }}" alt="">
                            </a>
                        </div>

                    </div> <!-- end carousel -->

                </div>
            </div>
        </section> <!-- end partners -->
    @endsection
