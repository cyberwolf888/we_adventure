@extends('layouts.frontend')

@push('plugin_css')
@endpush

@section('content')

    <!-- CONTENT START -->
    <div class="content">

        <!--======= SUB BANNER =========-->
        <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <h4>{{ $product->name }}</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#">SHOP</a></li>
                    <li class="active">{{ $product->name }}</li>
                </ol>
            </div>
        </section>

        <!--======= PAGES INNER =========-->
        <section class="section-p-30px pages-in item-detail-page">
            <div class="container">
                <div class="row">

                    <!--======= IMAGES SLIDER =========-->
                    <div class="col-sm-6 large-detail animate fadeInLeft" data-wow-delay="0.4s">
                        <div class="images-slider">
                            <ul class="slides">
                                @foreach($product->product_images as $image)
                                <li data-thumb="{{ url('assets/img/product/'.$image->product_id.'/'.$image->image) }}"> <img class="img-responsive" src="{{ url('assets/img/product/'.$image->product_id.'/'.$image->image) }}"  alt=""> </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!--======= ITEM DETAILS =========-->
                    <div class="col-sm-6 animate fadeInRight" data-wow-delay="0.4s">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5>{{ $product->name }}</h5>
                                @if($product->discount > 0)
                                    <span class="price text-line">IDR {{ number_format($product->price,0,',','.') }}</span>
                                    <span class="price">IDR {{ number_format($product->price-($product->price*$product->discount/100),0,',','.') }}</span>
                                @else
                                    <span class="price">IDR {{ number_format($product->price,0,',','.') }}</span>
                                @endif
                            </div>
                            <div class="some-info no-border">
                                <hr>
                            </div>
                        </div>
                        <p>{{ $product->description }}</p>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12" id="peringatan" style="display: none;">
                                <span class="alert alert-danger" id="label_peringatan">Stock yang tersedia hanya 1</span>
                            </div>
                            <!-- QUIENTY -->
                            <div class="col-sm-12">
                                <div class="fun-share">
                                    <input type="number" value="1" name="qty" id="qty" min="1">
                                    <a href="#" class="btn btn-small btn-dark" id="btn_add">ADD TO CART</a>
                                </div>
                            </div>
                            <!-- SHARE -->
                            <div class="col-sm-12">
                                <ul class="share-with">
                                    <li>
                                        <p>SHARE WITH</p>
                                    </li>
                                    <li><a href="02-shop-details-1.html#."><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="02-shop-details-1.html#."><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="02-shop-details-1.html#."><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="02-shop-details-1.html#."><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--======= PRODUCT DESCRIPTION =========-->
                <div class="item-decribe animate fadeInUp" data-wow-delay="0.4s">

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <h6>SPESIFIKASI BABRANG</h6>

                        @foreach($product->product_detail as $detail)
                        <!-- REVIEW PEOPLE 1 -->
                        <div class="media">
                            <!--  Details -->
                            <div class="media-body">
                                <p class="font-playfair">{{ $detail->label }}</p>
                                <h6>{{ $detail->value }}</h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection

@push('plugin_scripts')

@endpush

@push('scripts')
<script>
    $(document).ready(function () {
        $("#btn_add").click(function () {
            $("#peringatan").hide();
            var qty = $("#qty").val();
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': CSRF_TOKEN
                }
            });
            $.ajax({
                url: '<?= route('cart_add') ?>',
                type: 'POST',
                data: {qty:qty, product_id:'<?= $product->id ?>'},
                success: function (data) {
                    console.log(data);
                    console.log(data.status);

                    if(data.status == '0'){
                        $("#peringatan").show();
                        $("#label_peringatan").empty().append(data.error);
                    }else{
                        location.reload();
                    }
                }
            });
        });
    })
</script>
@endpush