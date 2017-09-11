@extends('layouts.frontend')

@push('plugin_css')
<style>
    .shopping-cart .cart-ship-info label {
        margin-bottom: 0px;
    }
    .m_20{
        margin-bottom: 20px;
    }
</style>
@endpush

@section('content')
    <!-- CONTENT START -->
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner">
            <div class="container">
                <h4>DETAIL TRANSAKSI</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('home') }}">My Account</a></li>
                    <li class="active">TRANSAKSI</li>
                </ol>
            </div>
        </section>

        <!--======= PAGES INNER =========-->
        <section class="section-p-30px pages-in chart-page">
            <div class="container">

                <!-- Payments Steps -->
                <div class="shopping-cart">

                    <!-- SHOPPING INFORMATION -->
                    <div class="cart-ship-info">
                        <div class="row">

                            <!-- ESTIMATE SHIPPING & TAX -->
                            <div class="col-sm-7">
                                <h6>DETAIL TRANSAKSI</h6>
                                <form>
                                    <ul class="row">
                                        <li class="col-md-12">
                                            <label> ID TRANSAKSI
                                                <input type="text" value="{{ $model->id }}" placeholder="" readonly>
                                            </label>
                                        </li>
                                        <li class="col-md-12">
                                            <label> DURASI SEWA
                                                <input type="text" value="{{ $model->durasi }} Hari" placeholder="" readonly>
                                            </label>
                                        </li>
                                        <li class="col-md-12">
                                            <label> TGL TRANSAKSI
                                                <input type="text" value="{{ date('d F Y',strtotime($model->created_at)) }}" placeholder="" readonly>
                                            </label>
                                        </li>
                                        <li class="col-md-12">
                                            <label> STATUS TRANSAKSI
                                                <input type="text" value="{{ $model->getStatus() }}" placeholder="" readonly>
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
                                        @foreach($model->transaction_detail as $row)
                                            <div class="item-order">
                                                <p>{{ $row->product->name }} <span class="color"> x{{ $row->qty }} </span></p>
                                                <p class="text-right">IDR {{ number_format($row->total) }}</p>
                                            </div>
                                        @endforeach
                                        <p>CART SUBTOTAL <span>IDR {{ number_format($model->total,0,',','.') }}</span></p>
                                        <p>DENDA <span>IDR {{ number_format($model->denda,0,',','.') }}</span></p>
                                        <p>ORDER TOTAL <span>IDR {{ number_format($model->total+$model->denda,0,',','.') }}</span></p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@push('plugin_scripts')

@endpush

@push('scripts')
@endpush