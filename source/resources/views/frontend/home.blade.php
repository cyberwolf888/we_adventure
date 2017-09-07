@extends('layouts.frontend')

@push('plugin_css')
<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="{{ url('assets/frontend') }}/rs-plugin/css/settings.css" media="screen" />
@endpush

@section('content')
    <!--======= HOME MAIN SLIDER =========-->
    <section class="home-slider">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>

                    <!-- Slider 1 -->
                    <li data-transition="fade" data-slotamount="7"> <img src="{{ url('assets/frontend') }}/images/slides/slide-17.jpg" data-bgposition="center top" alt="" />
                        <div class="tp-caption sfr tp-resizeme"
                             data-x="right"
                             data-y="300"
                             data-speed="700"
                             data-start="1000"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"><img src="{{ url('assets/frontend') }}/images/slides/s1.png"  alt="" > </div>

                        <!-- Layer -->
                        <div class="tp-caption sfb  font-montserrat text-center tp-resizeme"
                             data-x="left"
                             data-y="center"
                             data-speed="700"
                             data-start="1200"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"
                             style="color: #272727; font-size: 30px;"> Tenda Terbaik </div>

                        <!-- Layer -->
                        <div class="tp-caption sfb  font-montserrat no-space text-left tp-resizeme"
                             data-x="left"
                             data-y="center" data-voffset="80"
                             data-speed="700"
                             data-start="1600"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"
                             style="color: #959595; font-size: 12px; line-height:24px;"> Kami selalu menyediakan tenda terbaik yang pernah ada <br>
                            dengan harga sewa yang terjangkau dan murah bagi masyarakat.<br>
                            Kami selalu mengutamnakan kualitas. </div>

                    </li>

                    <!-- Slider 2 -->
                    <li data-transition="fade" data-slotamount="7"> <img src="{{ url('assets/frontend') }}/images/slides/slide-18.jpg" data-bgposition="center top" alt="" />
                        <!-- Layer -->
                        <div class="tp-caption sfr tp-resizeme"
                             data-x="right"
                             data-y="top"
                             data-speed="700"
                             data-start="1000"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"><img src="{{ url('assets/frontend') }}/images/slides/slide-18-1.png"  alt="" > </div>

                        <!-- Layer -->
                        <div class="tp-caption sfb text-uppercase font-montserrat text-center tp-resizeme"
                             data-x="left"
                             data-y="center"
                             data-speed="700"
                             data-start="1200"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"
                             style="color: #272727; font-size: 24px; font-weight:bold;"> Dream Home </div>

                        <!-- Layer -->
                        <div class="tp-caption sfb  font-montserrat no-space text-left tp-resizeme"
                             data-x="left"
                             data-y="center" data-voffset="50"
                             data-speed="700"
                             data-start="1600"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"
                             style="color: #959595; font-size: 12px; line-height:24px;"> It is a long established fact that a reader will be distracted by the readable <br>
                            content of a page when looking at its layout. </div>

                        <!-- Layer -->
                        <div class="tp-caption sfb tp-resizeme"
                             data-x="left"
                             data-y="450"
                             data-speed="700"
                             data-start="2000"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"> <a href="index-09-furniture.html#." class="btn btn-small btn-dark">SHOPPING NOW</a> </div>
                    </li>

                    <!-- Slider 3 -->
                    <li data-transition="fade" data-slotamount="7"> <img src="{{ url('assets/frontend') }}/images/slides/slide-19.jpg" data-bgposition="center top" alt="" />

                        <!-- Layer -->
                        <div class="tp-caption sfb text-uppercase font-montserrat text-center tp-resizeme"
                             data-x="center"
                             data-y="center"
                             data-speed="700"
                             data-start="1200"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"
                             style="color: #272727; font-size: 60px; font-weight:bold;"> Interior Design </div>

                        <!-- Layer -->
                        <div class="tp-caption sfb text-uppercase font-montserrat no-space text-left tp-resizeme"
                             data-x="center"
                             data-y="center" data-voffset="70"
                             data-speed="700"
                             data-start="1600"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"
                             style="color: #272727; font-size: 36px; font-weight:bold; line-height:px;"> Games Realistic </div>

                        <!-- Layer -->
                        <div class="tp-caption sfb tp-resizeme"
                             data-x="center"
                             data-y="500"
                             data-speed="700"
                             data-start="2000"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"> <a href="index-09-furniture.html#." class="btn btn-small btn-dark">SHOPPING NOW</a> </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- CONTENT START -->
    <div class="content">

        <!--======= FURNITURE ITEMS =========-->
        <section class="section-p-60px no-padding-b">
            <div class="container">
                <!--  Tittle -->
                <div class="tittle tittle-2 animate fadeInUp" data-wow-delay="0.4s">
                    <h5>NEW ARRIVAL</h5>
                    <hr>
                    <p>Treding {{ date('Y') }}</p>
                </div>
            </div>

            <!-- ITEMS -->
            <ul class="items-fer animate fadeInUp" data-wow-delay="0.4s">
                @foreach(\App\Models\Product::where('available','1')->orderBy('created_at','DESC')->limit(10)->get() as $product)
                <!-- ITEM -->
                <li class="animate fadeInUp" data-wow-delay="0.2s">
                    <div class="item-inn">
                        <!-- ITEM IMAGE -->
                        <img class="img-responsive" src="{{ $product->getImage() }}" alt="" >
                        <!-- HOVER -->
                        <div class="item-hover">
                            <div class="position-center-center"> <a class="zoom" href="" ><i class="fa fa-search"></i></a> </div>
                            <!-- ITEM DETAILS -->
                            <div class="item-detail">
                                <h6>{{ $product->name }}</h6>
                                <span class="font-montserrat">IDR {{ number_format($product->price,0,',','.') }}</span>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </section>

    </div>
@endsection

@push('plugin_scripts')

@endpush