@extends('layouts.frontend')

@push('plugin_css')
@endpush

@section('content')
    <!-- CONTENT START -->
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner">
            <div class="container">
                <h4>CHECK OUT</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">CHECK OUT</li>
                </ol>
            </div>
        </section>

        <!--======= PAGES INNER =========-->
        <section class="section-p-30px pages-in chart-page">
            <div class="container">

                <!-- Payments Steps -->
                <div class="payment_steps">
                    <ul class="row">
                        <!-- SHOPPING CART -->
                        <li class="col-sm-4"> <i class="fa fa-shopping-cart"></i>
                            <h6>SHOPPING CART</h6>
                        </li>

                        <!-- CHECK OUT DETAIL -->
                        <li class="col-sm-4 current"> <i class="fa fa-align-left"></i>
                            <h6>CHECK OUT DETAIL</h6>
                        </li>

                        <!-- ORDER COMPLETE -->
                        <li class="col-sm-4"> <i class="fa fa-check"></i>
                            <h6>ORDER COMPLETE</h6>
                        </li>
                    </ul>
                </div>

                <!-- Payments Steps -->
                <div class="shopping-cart">
                    <form method="POST" action="{{ route('checkout_proses') }}">
                    {{ csrf_field() }}
                    <!-- SHOPPING INFORMATION -->
                    <div class="cart-ship-info">
                        <div class="row">

                            <!-- ESTIMATE SHIPPING & TAX -->
                            <div class="col-sm-7">
                                <h6>DETAIL TRANSAKSI</h6>
                                <form>
                                    <ul class="row">
                                        <li class="col-md-12">
                                            <label> *DURASI SEWA
                                                <select class="selectpicker" name="durasi" id="durasi">
                                                    @for($i=1; $i<=7; $i++)
                                                    <option value="{{ $i }}">{{ $i }} Hari</option>
                                                    @endfor
                                                </select>
                                            </label>
                                        </li>
                                        <li class="col-md-12">
                                            <label> *NAMA LENGKAP
                                                <input type="text" name="first-name" value="{{ Auth::user()->name }}" placeholder="" readonly>
                                            </label>
                                        </li>
                                        <li class="col-md-12">
                                            <label>*EMAIL
                                                <input type="text" name="company" value="{{ Auth::user()->email }}" placeholder="" readonly>
                                            </label>
                                        </li>
                                        <li class="col-md-12">
                                            <label>*ALAMAT
                                                <input type="text" name="address" value="{{ Auth::user()->address }}" placeholder="" readonly>
                                            </label>
                                        </li>
                                        <li class="col-md-12">
                                            <label> *NO HP
                                                <input type="text" name="postal-code" value="{{ Auth::user()->phone }}" placeholder="" readonly>
                                            </label>
                                        </li>
                                    </ul>
                                </form>
                            </div>

                            <!-- SUB TOTAL -->
                            <div class="col-sm-5">
                                <div class="order-place">
                                    <h5>DETAIL PESANAN</h5>
                                    <div class="order-detail">
                                        <p>PRODUCT <span>TOTAL</span></p>
                                        @foreach(Cart::instance('cart')->content() as $cart)
                                        <div class="item-order">
                                            <p>{{ $cart->model->name }} <span class="color"> x{{ $cart->qty }} </span></p>
                                            <p class="text-right">IDR {{ number_format($cart->price*$cart->qty) }}</p>
                                        </div>
                                        @endforeach
                                        <p>CART SUBTOTAL <span id="subtotal">IDR {{ \Cart::instance('cart')->subTotal() }}</span></p>
                                        <p>ORDER TOTAL <span id="ordertotal">IDR {{ \Cart::instance('cart')->total() }}</span></p>
                                    </div>
                                    <div class="pay-meth">
                                        <h5>PENTING</h5>
                                        <p>Pembayaran dilakukan di toko saat mengambil barang. Dalam jangka waktu 24 jam setelah transaksi berhasil jika barang tidak diambil ke toko maka transaksi tersebut akan dibatalkan.</p>

                                        <button type="submit" class="btn btn-small btn-dark pull-right">
                                            ORDER SEKARANG
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection

@push('plugin_scripts')

@endpush

@push('scripts')
<script>
    $("#durasi").change(function () {
        var total = <?= \Cart::instance('cart')->total(0,'','') ?>;
        var ototal = total*$("#durasi").val();
        $("#ordertotal").empty().append('IDR '+ototal.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
    });
</script>
@endpush