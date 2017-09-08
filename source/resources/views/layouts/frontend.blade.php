<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="keywords" content="HTML5,CSS3,HTML,Template,Multi-Purpose,M_Adnan,Corporate Theme,SEBIAN Multi Purpose Care,eCommerce,SEBIAN - Multi Purpose eCommerce HTML5 Template">
    <meta name="description" content="SEBIAN - Multi Purpose eCommerce HTML5 Template">
    <meta name="author" content="M_Adnan">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- FONTS ONLINE -->
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!--MAIN STYLE-->
    <link href="{{ url('assets/frontend') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/frontend') }}/css/main.css" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/frontend') }}/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/frontend') }}/css/responsive.css" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/frontend') }}/css/animate.css" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/frontend') }}/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- ADD YOUR OWN STYLING HERE. AVOID TO USE STYLE.CSS AND MAIN.CSS. IT WILL BE HELPFUL FOR YOU IN FUTURE UPDATES -->
    <link href="{{ url('assets/frontend') }}/css/custom.css" rel="stylesheet" type="text/css">
    @stack('plugin_css')
    @stack('page_css')

    <!-- JavaScripts -->
    <script src="{{ url('assets/frontend') }}/js/modernizr.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- LOADER ===========================================-->
<div id="loader">
    <div class="loader">
        <div class="position-center-center"> <img src="{{ url('assets/frontend') }}/images/logo-w.png" alt="">
            <p class="font-playfair text-center">Please Wait...</p>
            <div class="loading">
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
            </div>
        </div>
    </div>
</div>

<!-- Page Wrap -->
<div id="wrap" class="furniture">

    <!-- Header -->
    <header class="@if(Route::currentRouteName()=='home') header header-dark @else header-style-2 @endif">
        <!-- Logo -->
        <div class="container">
            <div class="logo"> <a href="{{ route('home') }}"><img src="{{ url('assets/frontend') }}/images/logo-w.png" alt=""></a> </div>
        </div>

        <!-- Nav -->
        <div class="sticky">
            <div class="container">
                <!-- Nav -->
                <nav class="webimenu">
                    <!-- MENU BUTTON RESPONSIVE -->
                    <div class="menu-toggle"> <i class="fa fa-bars"> </i> </div>
                    <ul class="ownmenu">
                        <li class="active"><a href="{{ route('home') }}">HOME</a></li>
                        @foreach(\App\Models\Category::all() as $category)
                            <li><a href="{{ route('category',$category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                        <li><a href="{{ route('contact') }}">CONTACT</a></li>
                        <li><a href="{{ url('login') }}">LOGIN</a></li>

                        <!--======= Shopping Cart =========-->
                        <li class="shop-cart"><a href="#"><i class="fa fa-shopping-cart"></i></a> <span class="numb">{{ \Cart::instance('cart')->count() }}</span>
                            <ul class="dropdown">
                                @if(\Cart::instance('cart')->count()>0)
                                    @foreach(Cart::instance('cart')->content() as $row)
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="cart-img"> <a href="{{ route('product',$row->model->id) }}"> <img class="media-object img-responsive" src="{{ $row->model->getImage() }}" alt="..."> </a> </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">{{ $row->name }}</h6>
                                                <span class="price">IDR {{ number_format($row->model->price-($row->model->price*$row->model->discount/100),0,',','.') }}</span> <span class="qty">QTY: {{ $row->qty }}</span> </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    <li class="no-padding no-border">
                                        <div class="row">
                                            <div class="col-xs-6"> <a href="#" class="btn btn-small">VIEW CART</a></div>
                                            <div class="col-xs-6 "> <a href="#" class="btn btn-1 btn-small">CHECK OUT</a></div>
                                        </div>
                                    </li>
                                @else
                                    <li class="no-padding no-border">
                                        <div class="row">
                                            <div class="col-xs-12"> <h3 style="color: white;">Cart is empty</h3></div>
                                        </div>
                                    </li>

                                @endif
                            </ul>
                        </li>
                        <!--======= SEARCH ICON =========-->
                        <li class="search-nav"><a href="#"><i class="fa fa-search"></i></a>
                            <ul class="dropdown">
                                <li class="row">
                                    <div class="col-sm-12 no-padding">
                                        <form method="get" action="{{ url('search') }}">
                                            <input type="search" class="form-control" placeholder="Search Here" name="keyword">
                                            <button type="submit"> <i class="fa fa-search"></i> </button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')


    <!--======= Footer =========-->
    <footer>
        <div class="container">
            <div class="text-center"> <a href="index-09-furniture.html#."><img src="{{ url('assets/frontend') }}/images/logo-w.png" alt=""></a><br>
                <img class="margin-t-40" src="{{ url('assets/frontend') }}/images/hammer.png" alt="">
                <p class="intro-small margin-t-40">Jasa sewa perlengkapan camping terbaik yang ada di Bali.</p>
            </div>

            <!--  Footer Links -->
            <div class="footer-link row">
                <div class="col-md-6">
                    <ul>

                        <!--  INFOMATION -->
                        <li class="col-sm-6">
                            <h5>CATEGORY</h5>
                            <ul class="f-links">
                                @foreach(\App\Models\Category::orderBy('created_at','DESC')->limit(6)->get() as $row)
                                <li><a href="{{ route('category',$row->id) }}">{{ $row->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <!-- MY ACCOUNT -->
                        <li class="col-sm-6">
                            <h5>MY ACCOUNT</h5>
                            <ul class="f-links">
                                <li><a href="index-09-furniture.html#.">MY ACCOUNT</a></li>
                                <li><a href="index-09-furniture.html#."> LOGIN</a></li>
                                <li><a href="index-09-furniture.html#."> MY CART</a></li>
                                <li><a href="index-09-furniture.html#."> CHECKOUT</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Second Row -->
                <div class="col-md-6">
                    <ul class="row">

                        <!-- TWITTER -->
                        <li class="col-sm-6">
                            <h5>TWITTER</h5>
                            <p>Check out new work on my @Behance portfolio: "BCreative_Multipurpose Theme" http://on.be.net/1zOOfBQ </p>
                        </li>

                        <!-- FLICKR PHOTO -->
                        <li class="col-sm-6">
                            <h5>LAST PRODUCT</h5>
                            <ul class="flicker">
                                @foreach(\App\Models\Product::orderBy('created_at','DESC')->limit(6)->get() as $row)
                                <li><a href="{{ route('product',$row->id) }}"><img src="{{ $row->getImage() }}" alt=""></a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Rights -->
            <div class="rights">
                <p>© {{ date('Y') }} WE ADVENTURE. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <!-- GO TO TOP -->
    <a href="index-09-furniture.html#" class="cd-top"><i class="fa fa-angle-up"></i></a>
    <!-- GO TO TOP End -->
</div>
<!-- Wrap End -->
<script src="{{ url('assets/frontend') }}/js/jquery-1.11.3.js"></script>
<script src="{{ url('assets/frontend') }}/js/wow.min.js"></script>
<script src="{{ url('assets/frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ url('assets/frontend') }}/js/own-menu.js"></script>
<script src="{{ url('assets/frontend') }}/js/owl.carousel.min.js"></script>
<script src="{{ url('assets/frontend') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ url('assets/frontend') }}/js/jquery.flexslider-min.js"></script>
<script src="{{ url('assets/frontend') }}/js/jquery.isotope.min.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="{{ url('assets/frontend') }}/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="{{ url('assets/frontend') }}/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

@stack('plugin_scripts')

<script src="{{ url('assets/frontend') }}/js/main.js"></script>
@stack('scripts')
</body>
</html>