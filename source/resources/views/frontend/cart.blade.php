@extends('layouts.frontend')

@push('plugin_css')
@endpush

@section('content')
    <!-- CONTENT START -->
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner">
            <div class="container">
                <h4>SHOPPING CART</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="03-pay-viewcart.html#">Home</a></li>
                    <li class="active">SHOPPING CART</li>
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
                        <li class="col-sm-4 current"> <i class="fa fa-shopping-cart"></i>
                            <h6>SHOPPING CART</h6>
                        </li>

                        <!-- CHECK OUT DETAIL -->
                        <li class="col-sm-4"> <i class="fa fa-align-left"></i>
                            <h6>CHECK OUT DETAIL</h6>
                        </li>

                        <!-- ORDER COMPLETE -->
                        <li class="col-sm-4"> <i class="fa fa-check"></i>
                            <h6>ORDER COMPLETE</h6>
                        </li>
                    </ul>
                </div>

                <!-- Payments Steps -->
                <div class="shopping-cart text-center">
                    <div class="cart-head">
                        <ul class="row">
                            <!-- PRODUCTS -->
                            <li class="col-sm-3">
                                <h6>PRODUCTS</h6>
                            </li>
                            <!-- NAME -->
                            <li class="col-sm-3">
                                <h6>NAME</h6>
                            </li>
                            <!-- QTY -->
                            <li class="col-sm-1">
                                <h6>QTY</h6>
                            </li>
                            <!-- PRICE -->
                            <li class="col-sm-2">
                                <h6>PRICE</h6>
                            </li>
                            <!-- TOTAL PRICE -->
                            <li class="col-sm-2">
                                <h6>TOTAL PRICE</h6>
                            </li>
                            <li class="col-sm-1"> </li>
                        </ul>
                    </div>

                    @foreach(Cart::instance('cart')->content() as $cart)
                    <!-- Cart Details -->
                    <ul class="row cart-details">
                        <li class="col-sm-6">
                            <div class="media">
                                <!-- Media Image -->
                                <div class="media-left media-middle">
                                    <a href="{{ route('product',$cart->model->id) }}" class="item-img"> <img class="media-object" src="{{ $cart->model->getImage() }}" alt=""> </a>
                                </div>

                                <!-- Item Name -->
                                <div class="media-body">
                                    <div class="position-center-center">
                                        <h6>{{ $cart->model->name }}</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- QTY -->
                        <li class="col-sm-1">
                            <div class="position-center-center">
                                <input type="text" value="{{ $cart->qty }}" readonly="">
                            </div>
                        </li>

                        <!-- PRICE -->
                        <li class="col-sm-2">
                            <div class="position-center-center"> <span> IDR {{ number_format($cart->price) }}</span> </div>
                        </li>
                        <!-- TOTAL PRICE -->
                        <li class="col-sm-2">
                            <div class="position-center-center"> <span>IDR {{ number_format($cart->price*$cart->qty) }}</span> </div>
                        </li>

                        <!-- EDIT AND REMOVE -->
                        <li class="col-sm-1">
                            <div class="position-center-center"> <a href="{{ route('cart_delete') }}?rowId={{ $cart->rowId }}"><i class="fa fa-times"></i></a> </div>
                        </li>
                    </ul>
                    @endforeach

                    <!-- BTN INFO -->
                    <div class="btn-sec">

                        <!-- CLEAR SHOPPING CART -->
                        <a href="{{ route('cart_clear') }}" class="btn btn-dark"> <i class="fa fa-trash-o"></i> CLEAR SHOPPING CART </a>

                        <!-- CONTINUE SHOPPING -->
                        <a href="{{ route('home') }}" class="btn btn-dark right-btn"> <i class="fa fa-shopping-cart"></i> CONTINUE SHOPPING </a> </div>

                    <!-- SHOPPING INFORMATION -->
                    <div class="cart-ship-info">
                        <div class="row">
                            <!-- SUB TOTAL -->
                            <div class="col-sm-6">
                                <div class="grand-total"> <span>SUB TOTAL: IDR {{ \Cart::instance('cart')->subTotal() }}</span>
                                    <h4>GRAND: <span> IDR {{ \Cart::instance('cart')->total() }} </span></h4>
                                    <a href="{{ route('checkout') }}" class="btn">PROCEED TO CHECK OUT</a>
                                    <p>Checkout with Multiple Addresses</p>
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