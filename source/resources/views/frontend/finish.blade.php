@extends('layouts.frontend')

@push('plugin_css')
@endpush

@section('content')
    <!-- CONTENT START -->
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner">
            <div class="container">
                <h4>ORDER COMPLETE</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">ORDER COMPLETE</li>
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
                        <li class="col-sm-4"> <i class="fa fa-align-left"></i>
                            <h6>CHECK OUT DETAIL</h6>
                        </li>

                        <!-- ORDER COMPLETE -->
                        <li class="col-sm-4 current"> <i class="fa fa-check"></i>
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
                                <!-- SUB TOTAL -->
                                <div class="col-sm-offset-3 col-sm-6">
                                    <div class="order-place">
                                        <div class="pay-meth">
                                            <h5>TRANSAKSI SUKSES</h5>
                                            <p>Pembayaran dilakukan di toko saat mengambil barang. Dalam jangka waktu 24 jam setelah transaksi berhasil jika barang tidak diambil ke toko maka transaksi tersebut akan dibatalkan.</p>

                                            <a href="{{ route('member.transaction.manage') }}" class="btn btn-small btn-dark pull-right">
                                                KELOLA TRANSAKSI
                                            </a>
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
@endpush