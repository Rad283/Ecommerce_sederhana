@extends('lp.layout.app')
@section('isi')
    <div class="content-wrapper oh">
        <!-- Single Product -->
        <section class="section-wrap pb-40 single-product">
            <div class="container-fluid semi-fluid">
                <div class="row">
                    {{-- foreach 1 --}}
                    <div class="col-md-6 col-xs-12 product-slider mb-60">

                        <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">

                            <div class="gallery-cell">
                                <a href="{{ asset('storage/' . $produk->gambar) }}" class="lightbox-img">
                                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="" />
                                    <i class="ui-zoom zoom-icon"></i>
                                </a>
                            </div>
                        </div> <!-- end gallery main -->

                        <div class="gallery-thumbs">
                            <div class="gallery-cell">
                                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="" />
                            </div>
                        </div> <!-- end gallery thumbs -->

                    </div> <!-- end col img slider -->
                    {{-- /foreach 1 --}}
                    {{-- foreach 2 --}}
                    <div class="col-md-6 col-xs-12 product-description-wrap">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li class="active">
                                Catalog
                            </li>
                        </ol>
                        <h1 class="product-title">{{ $produk->nama }}</h1>
                        <span class="price">
                            <ins>
                                <span class="amount">Rp. {{ number_format($produk->harga_jual, 2) }}</span>
                            </ins>
                        </span>
                        <p class="short-description">{{ $produk->deskripsi }}</p>

                        <div class="product-actions">
                            <span>Qty:</span>

                            <div class="quantity buttons_added">
                                <input type="number" step="1" min="0" value="1" title="Qty"
                                    class="input-text qty text" />
                                <div class="quantity-adjust">
                                    <a href="#" class="plus">
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                    <a href="#" class="minus">
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                            </div>

                            <a href="{{ route('checkout', $produk->id) }}" class="btn btn-dark btn-lg"><span>proceed to
                                    checkout</span></a>
                        </div>


                        <div class="product_meta">
                            <span class="sku">SKU: <a href="#">{{ $produk->kode }}</a></span>
                            <span class="brand_as">Category: <a
                                    href="#">{{ $produk->kategori->nama_kategori }}</a></span>
                        </div>

                        <!-- Accordion -->
                        <div class="panel-group accordion mb-50" id="accordion">
                            <div class="panel">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                        class="minus">Description<span>&nbsp;</span>
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">{{ $produk->deskripsi }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> <!-- end col product description -->
    {{-- /foreach 2 --}}
    </div> <!-- end row -->

    </div> <!-- end container -->
    </section> <!-- end single product -->
@endsection
