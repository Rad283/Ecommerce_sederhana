@extends('lp.layout.app')
@section('isi')
    <!-- Page Title -->
    <section class="page-title text-center bg-light">
        <div class="container relative clearfix">
            <div class="title-holder">
                <div class="title-text">
                    <h1 class="uppercase">Shopping Cart</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('detailed', $produk->id) }}">Catalog</a>
                        </li>
                        <li class="active">
                            Checkout
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="content-wrapper oh">

        <!-- Checkout -->
        <section class="section-wrap checkout pb-70">
            <div class="container relative">
                <div class="row">

                    <div class="ecommerce col-xs-12">

                        <form method="POST" action="{{ url('admin/pesanan/store') }}" enctype="multipart/form-data"
                            name="checkout" class="checkout ecommerce-checkout row">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id"
                                value=" @if (auth()->user() !== null) {{ auth()->user()->id }} @endif">


                            <div class="col-md-8" id="customer_details">
                                <div>
                                    <h2 class="heading uppercase bottom-line full-grey mb-30">billing address</h2>

                                    <p class="form-row form-row-first validate-required ecommerce-invalid ecommerce-invalid-required-field"
                                        id="nama_pemesan">
                                        <label for="nama">Tanggal
                                            <abbr class="required" title="required">*</abbr>
                                        </label>
                                        <input type="date" class="input-text" placeholder value="" name="tanggal"
                                            id="tanggal">
                                    </p>


                                    <p class="form-row form-row-first validate-required ecommerce-invalid ecommerce-invalid-required-field"
                                        id="nama_pemesan">
                                        <label for="nama">Name
                                            <abbr class="required" title="required">*</abbr>
                                        </label>
                                        <input type="text" class="input-text" placeholder value name="nama_pemesan"
                                            id="nama_pemesan">
                                    </p>

                                    <p class="form-row form-row-wide address-field validate-required ecommerce-invalid ecommerce-invalid-required-field"
                                        id="billing_address_1_field">
                                        <label for="alamat">Address
                                            <abbr class="required" title="required">*</abbr>
                                        </label>
                                        <input type="text" class="input-text" placeholder="Street address" value
                                            name="alamat_pemesan" id="alamat_pemesan">
                                    </p>

                                    <p class="form-row form-row-wide address-field" id="billing_address_2_field">
                                        <input type="text" class="input-text"
                                            placeholder="Apartment, suite, unit etc. (optional)" value
                                            name="billing_address_2" id="billing_address_2">
                                    </p>

                                    <p class="form-row form-row-first validate-required validate-phone"
                                        id="billing_phone_field">
                                        <label for="billing_phone">Phone
                                            <abbr class="required" title="required">*</abbr>
                                        </label>
                                        <input type="text" class="input-text" placeholder value name="no_hp"
                                            id="no_hp">
                                    </p>

                                    <p class="form-row form-row-first validate-required validate-email"
                                        id="billing_email_field">
                                        <label for="billing_email">Email Address
                                            <abbr class="required" title="required">*</abbr>
                                        </label>
                                        <input type="text" class="input-text" placeholder value name="email"
                                            id="email">
                                    </p>

                                    <p class="form-row form-row-first validate-required validate-phone"
                                        id="billing_phone_field"><label for="produk_id"
                                            class="col-4 col-form-label">Produk</label>
                                        <select id="produk_id" name="produk_id" class="custom-select">
                                            <option value="{{ $produk->id }}">{{ $produk->nama }}</option>
                                        </select>
                                    </p>

                                    <p class="form-row form-row-first validate-required validate-phone"
                                        id="billing_phone_field">
                                    <div class="quantity buttons_added">
                                        <label for="billing_email">Qty
                                            <abbr class="required" title="required">*</abbr>
                                        </label>
                                        <input id="jumlah_pesanan" name="jumlah_pesanan" type="number" step="1"
                                            min="0" value="1" title="Qty" class="input-text qty text" />
                                        <div class="quantity-adjust">
                                            <a href="#" class="plus">
                                                <i class="fa fa-angle-up"></i>
                                            </a>
                                            <a href="#" class="minus">
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                        </div>
                                    </div>
                                    </p>

                                    <div class="clear"></div>

                                </div>
                                <br>
                                <div>
                                    <p class="form-row notes ecommerce-validated" id="order_comments_field">
                                        <label for="order_comments">Order Notes</label>
                                        <textarea name="deskripsi" class="input-text" id="deskripsi"
                                            placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="6"></textarea>
                                    </p>
                                </div>

                                <div class="clear"></div>

                            </div> <!-- end col -->

                            <!-- Your Order -->
                            <div class="col-md-4">
                                <div class="order-review-wrap ecommerce-checkout-review-order" id="order_review">
                                    <h2 class="heading uppercase bottom-line full-grey">Your Order</h2>
                                    <table class="table shop_table ecommerce-checkout-review-order-table">
                                        <tbody>
                                            <tr>
                                                <th id="produk_id" name="produk_id">{{ $produk->nama }}<span
                                                        class="count"> x 1</span></th>
                                                <td>
                                                    <span class="amount">Rp.
                                                        {{ number_format($produk->harga_jual, 2) }}</span>
                                                </td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>Shipping</th>
                                                <td>
                                                    <span>Free Shipping</span>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th><strong>Order Total</strong></th>
                                                <td>
                                                    <strong><span class="amount">Rp.
                                                            {{ number_format($produk->harga_jual, 2) }}</span></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div id="payment" class="ecommerce-checkout-payment">
                                        <h2 class="heading uppercase bottom-line full-grey">Payment Method</h2>
                                        <ul class="payment_methods methods">

                                            <li class="payment_method_bacs">
                                                <input id="payment_method_bacs" type="radio" class="input-radio"
                                                    name="payment_method" value="bacs" checked="checked">
                                                <label for="payment_method_bacs">Direct Bank Transfer</label>
                                                <div class="payment_box payment_method_bacs">
                                                    <p>Make your payment directly into our bank account. Please use your
                                                        Order ID as the payment reference. Your order wont be shipped until
                                                        the funds have cleared in our account.</p>
                                                </div>
                                            </li>

                                            <li class="payment_method_paypal">
                                                <input id="payment_method_paypal" type="radio" class="input-radio"
                                                    name="payment_method" value="paypal">
                                                <label for="payment_method_paypal">Paypal</label>
                                                <img src="img/shop/paypal.png" alt="">
                                                <div class="payment_box payment_method_paypal">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                                        PayPal account.</p>
                                                </div>
                                            </li>

                                        </ul>
                                        <div class="form-row place-order">
                                            <input type="submit" name="ecommerce_checkout_place_order"
                                                class="btn btn-lg btn-dark" id="place_order" value="Place order">
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end order review -->
                        </form>

                    </div> <!-- end ecommerce -->

                </div> <!-- end row -->
            </div> <!-- end container -->
        </section> <!-- end checkout -->
    @endsection
