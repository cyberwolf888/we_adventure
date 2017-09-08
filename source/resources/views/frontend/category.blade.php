@extends('layouts.frontend')

@push('plugin_css')
@endpush

@section('content')
   <!-- CONTENT START -->
  <div class="content"> 
    
    <!--======= SUB BANNER =========-->
    <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <h4>{{ $category->name }}</h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="active">{{ $category->name }}</li>
        </ol>
      </div>
    </section>
    
    <!--======= PAGES INNER =========-->
    <section class=" pages-in">
      <div class="container">
        <div class="row"> 
          <!--======= ITEMS =========-->
          <div class="col-sm-12 animate fadeInUp" data-wow-delay="0.4s">
            <div class="items-short-type animate fadeInUp" data-wow-delay="0.4s"> 
              
              <!--======= SHORT BY =========-->
              <!-- <div class="short-by">
                <select class="selectpicker">
                  <option>Short by</option>
                  <option>Short by</option>
                </select>
                <p>Showing 1-12 of 30 products</p>
              </div> -->

            </div>
            
            <!--======= Products =========-->
            <div class="popurlar_product animate fadeInUp" data-wow-delay="0.4s">
              <ul class="row">
                @foreach($products as $product)
                <!-- New Products -->
                <li class="col-sm-3 animate fadeIn" data-wow-delay="0.8s">
                  <div class="items-in"> 
                    
                    <!-- Image --> 
                    <img src="{{ $product->getImage() }}" alt=""> 
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="{{ route('product',$product->id) }}"><i class="ion-search"></i></a></li>
                        <li class="full-w"> <a href="{{ route('product',$product->id) }}" class="btn">ADD TO CART</a></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> 
                        <a href="02-shop-full_width-01.html#.">{{ $product->name }}</a>
                        @if($product->discount > 0) 
                        <span class="font-montserrat">IDR {{ number_format($product->price-($product->price*$product->discount/100),0,',','.') }}</span>
                        <span class="text-line">IDR {{ number_format($product->price,0,',','.') }}</span>
                        @else
                        <span class="font-montserrat">IDR {{ number_format($product->price,0,',','.') }}</span>
                        @endif 
                    </div>
                  </div>
                </li>
                @endforeach
                
              </ul>
              <br><br>
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