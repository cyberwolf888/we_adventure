<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="keywords" content="HTML5,CSS3,HTML,Template,Multi-Purpose,M_Adnan,Corporate Theme,SEBIAN Multi Purpose Care,eCommerce,SEBIAN - Multi Purpose eCommerce HTML5 Template">
    <meta name="description" content="SEBIAN - Multi Purpose eCommerce HTML5 Template">
    <meta name="author" content="M_Adnan">

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

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/frontend') }}/rs-plugin/css/settings.css" media="screen" />

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
    <header class="header header-dark">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <!-- Language -->
                <div class="language"> <a href="index-09-furniture.html#." class="active">EN</a> <a href="index-09-furniture.html#.">FR</a> <a href="index-09-furniture.html#.">GE</a> </div>
                <div class="top-links">
                    <ul>
                        <li><a href="index-09-furniture.html#.">MY ACCOUNT</a></li>
                        <li><a href="index-09-furniture.html#.">MY WISHLIST</a></li>
                        <li class="font-montserrat">CURRENCY:
                            <select class="selectpicker">
                                <option>USD</option>
                                <option>EURO</option>
                            </select>
                        </li>
                    </ul>
                    <!-- Social Icons -->
                    <ul class="social_icons">
                        <li class="facebook"><a href="index-09-furniture.html#."><i class="fa fa-facebook"></i> </a></li>
                        <li class="twitter"><a href="index-09-furniture.html#."><i class="fa fa-twitter"></i> </a></li>
                        <li class="dribbble"><a href="index-09-furniture.html#."><i class="fa fa-dribbble"></i> </a></li>
                        <li class="googleplus"><a href="index-09-furniture.html#."><i class="fa fa-google-plus"></i> </a></li>
                        <li class="linkedin"><a href="index-09-furniture.html#."><i class="fa fa-linkedin"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Logo -->
        <div class="container">
            <div class="logo"> <a href="index-09-furniture.html#."><img src="{{ url('assets/frontend') }}/images/logo-w.png" alt=""></a> </div>
        </div>

        <!-- Nav -->
        <div class="sticky">
            <div class="container">
                <!-- Nav -->
                <nav class="webimenu">
                    <!-- MENU BUTTON RESPONSIVE -->
                    <div class="menu-toggle"> <i class="fa fa-bars"> </i> </div>
                    <ul class="ownmenu">
                        <li class="active"><a href="index.html">HOME</a>
                            <ul class="dropdown">
                                <li><a href="index.html">Index Defult</a></li>
                                <li><a href="index-2.html">Index 2</a></li>
                                <li><a href="index-3.html">Index 3</a></li>
                                <li><a href="index-4.html">Index 4</a></li>
                                <li><a href="index-5.html">Index 5</a></li>
                                <li><a href="index-6.html">Index 6</a></li>
                                <li><a href="index-7-construction.html">Index Construction</a></li>
                                <li><a href="index-8-construction.html">Index Construction 2</a></li>
                                <li><a href="index-09-furniture.html">Index Furniture</a></li>
                                <li><a href="index-10-sports.html">Index Sports</a></li>
                                <li><a href="index-11-beauty.html">Index Beauty</a></li>
                                <li><a href="index-12-watches.html">Index Watches</a></li>
                            </ul>
                        </li>
                        <li><a href="http://demos.webicode.com/html/sebian-intro/sebian/12-contact.html">PAGES</a>
                            <ul class="dropdown">
                                <li><a href="index.html">HOME</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Index Defult</a></li>
                                        <li><a href="index-2.html">Index 2</a></li>
                                        <li><a href="index-3.html">Index 3</a></li>
                                        <li><a href="index-4.html">Index 4</a></li>
                                        <li><a href="index-5.html">Index 5</a></li>
                                        <li><a href="index-6.html">Index 6</a></li>
                                        <li><a href="index-7-construction.html">Index Construction</a></li>
                                        <li><a href="index-8-construction.html">Index Construction 2</a></li>
                                        <li><a href="index-09-furniture.html">Index Furniture</a></li>
                                        <li><a href="index-10-sports.html">Index Sports</a></li>
                                        <li><a href="index-11-beauty.html">Index Beauty</a></li>
                                        <li><a href="index-12-watches.html">Index Watches</a></li>
                                    </ul>
                                </li>
                                <li><a href="05-about-us-01.html">About</a>
                                    <ul class="dropdown">
                                        <li><a href="05-about-us-01.html">About US 01</a></li>
                                        <li><a href="05-about-us-02.html">About US 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="02-shop-sidebar-right.html">Shop</a>
                                    <ul class="dropdown">
                                        <li><a href="02-shop-sidebar-right.html">Shop Sidebar Right</a></li>
                                        <li><a href="02-shop-sidebar-left.html">Shop Sidebar Left</a></li>
                                        <li><a href="02-shop-sidebar.html">Shop Sidebar</a></li>
                                        <li><a href="02-shop-list-view.html">Shop LIST</a></li>
                                        <li><a href="02-shop-full_width-03.html">Shop Full 2 Col</a></li>
                                        <li><a href="02-shop-full_width-02.html">Shop Full 3 Col</a></li>
                                        <li><a href="02-shop-full_width-01.html">Shop Full 4 Col</a></li>
                                        <li><a href="02-shop-details-1.html">Shop Detail</a></li>
                                        <li><a href="02-shop-details-2.html">Shop Detail 2</a></li>
                                        <li><a href="02-shop-details-3.html">Shop Detail 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="09-01-portfolio-grid.html">PORTFOLIO</a>
                                    <ul class="dropdown">
                                        <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID </a>
                                            <ul class="dropdown">
                                                <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID 02 COL</a></li>
                                                <li><a href="09-02-portfolio-grid.html">PORTFOLIO GRID 03 COL</a></li>
                                                <li><a href="09-03-portfolio-grid.html">PORTFOLIO GRID 04 COL</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="09-01-portfolio-grid.html">PORTFOLIO Default </a>
                                            <ul class="dropdown">
                                                <li><a href="09-05-portfolio-grid-default.html">PORTFOLIO 02 COL</a></li>
                                                <li><a href="09-06-portfolio-grid-default.html">PORTFOLIO 03 COL</a></li>
                                                <li><a href="09-07-portfolio-grid-default.html">PORTFOLIO 04 COL</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="09-03-portfolio-full-width.html">PORTFOLIO FULLWIDTH</a></li>
                                        <li><a href="09-08-portfolio-masonry.html">PORTFOLIO MANSORY 01</a></li>
                                        <li><a href="09-09-portfolio-masonry.html">PORTFOLIO MANSORY 02</a></li>
                                        <li><a href="09-10-portfolio-single.html">Portfolio Single 01</a></li>
                                        <li><a href="09-11-portfolio-single.html">Portfolio Single 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="04-contact-01.html">Contact</a>
                                    <ul class="dropdown">
                                        <li><a href="04-contact-01.html">Contact US 01</a></li>
                                        <li><a href="04-contact-02.html">Contact US 02</a></li>
                                        <li><a href="04-contact-03.html">Contact US 03</a></li>
                                    </ul>
                                </li>
                                <li><a href="03-pay-checkout.html">Pay Checkout</a></li>
                                <li><a href="03-pay-viewcart.html">Pay Viewcart</a></li>
                                <li><a href="06-404-page.html">404 Page</a></li>
                                <li><a href="07-faqs-page.html">Faqs Pages</a></li>
                                <li><a href="10-coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li class="meganav"><a href="02-shop-sidebar-right.html">SHOP</a>
                            <!--======= MEGA MENU =========-->
                            <ul class="megamenu full-width">
                                <li class="row nav-post">
                                    <div class="col-sm-3">
                                        <h6>Shop Pages</h6>
                                        <ul>
                                            <li><a href="02-shop-sidebar-right.html">Shop Sidebar Right</a></li>
                                            <li><a href="02-shop-sidebar-left.html">Shop Sidebar Left</a></li>
                                            <li><a href="02-shop-sidebar.html">Shop Sidebar</a></li>
                                            <li><a href="02-shop-list-view.html">Shop LIST</a></li>
                                            <li><a href="02-shop-full_width-03.html">Shop Full 2 Col</a></li>
                                            <li><a href="02-shop-full_width-02.html">Shop Full 3 Col</a></li>
                                            <li><a href="02-shop-full_width-01.html">Shop Full 4 Col</a></li>
                                            <li><a href="02-shop-details-1.html">Shop Detail</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h6>Blog Pages</h6>
                                        <ul>
                                            <li><a href="08-01-blog-mansory.html">Blog Mansory</a></li>
                                            <li><a href="08-02-blog-left-side-bar.html">Blog Left Side Bar</a></li>
                                            <li><a href="08-02-blog-right-side-bar.html">Blog Right Side Bar</a></li>
                                            <li><a href="08-04-blog-medium-image.html">Blog Medium Image</a></li>
                                            <li><a href="08-05-blog-large-images.html">Blog Large Images</a></li>
                                            <li><a href="08-06-blog-02-col.html">Blog 02 Col</a></li>
                                            <li><a href="08-07-blog-03-col.html">Blog 03 Col</a></li>
                                            <li><a href="08-08-blog-04-col.html">Blog 04 Col</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h6>Portfolio Pages</h6>
                                        <ul>
                                            <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID 02 COL</a></li>
                                            <li><a href="09-02-portfolio-grid.html">PORTFOLIO GRID 03 COL</a></li>
                                            <li><a href="09-03-portfolio-grid.html">PORTFOLIO GRID 04 COL</a></li>
                                            <li><a href="09-03-portfolio-full-width.html">PORTFOLIO FULLWIDTH</a></li>
                                            <li><a href="09-05-portfolio-grid-default.html">PORTFOLIO 02 COL</a></li>
                                            <li><a href="09-06-portfolio-grid-default.html">PORTFOLIO 03 COL</a></li>
                                            <li><a href="09-07-portfolio-grid-default.html">PORTFOLIO 04 COL</a></li>
                                            <li><a href="09-08-portfolio-masonry.html">PORTFOLIO MANSORY 01</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h6>Portfolio Pages</h6>
                                        <ul>
                                            <li><a href="09-09-portfolio-masonry.html">PORTFOLIO MANSORY 02</a></li>
                                            <li><a href="09-10-portfolio-single.html">Portfolio Single 01</a></li>
                                            <li><a href="09-11-portfolio-single.html">Portfolio Single 02</a></li>
                                            <li><a href="05-about-us-01.html">About US 01</a></li>
                                            <li><a href="05-about-us-02.html">About US 02</a></li>
                                            <li><a href="04-contact-01.html">Contact US</a></li>
                                            <li><a href="03-pay-checkout.html">Pay Checkout</a></li>
                                            <li><a href="03-pay-viewcart.html">Pay Viewcart</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="meganav"><a href="index.html">LOOKBOOK</a>
                            <!--======= MEGA MENU =========-->
                            <ul class="megamenu full-width look-book">
                                <li class="row nav-post">
                                    <div class="col-sm-2">
                                        <h6>Shop</h6>
                                        <ul>
                                            <li><a href="index-09-furniture.html#."> MEN’S</a></li>
                                            <li><a href="index-09-furniture.html#."> WOMAN</a></li>
                                            <li><a href="index-09-furniture.html#."> KID’S</a></li>
                                            <li><a href="index-09-furniture.html#."> BAGS & SHOES</a></li>
                                            <li><a href="index-09-furniture.html#."> SEASONAL</a></li>
                                            <li><a href="index-09-furniture.html#."> LOOKBOOK</a></li>
                                            <li><a href="index-09-furniture.html#."> </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="nav-img"> <a href="index-09-furniture.html#"> <img class="media-object img-responsive" src="{{ url('assets/frontend') }}/images/nav-img-1.jpg" alt=""> </a> </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                                                <a href="index-09-furniture.html#.">READ MORE</a> </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="nav-img"> <a href="index-09-furniture.html#"> <img class="media-object img-responsive" src="{{ url('assets/frontend') }}/images/nav-img-4.jpg" alt=""> </a> </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                                                <a href="index-09-furniture.html#.">READ MORE</a> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="nav-img"> <a href="index-09-furniture.html#"> <img class="media-object img-responsive" src="{{ url('assets/frontend') }}/images/nav-img-2.jpg" alt=""> </a> </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                                                <a href="index-09-furniture.html#.">READ MORE</a> </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="nav-img"> <a href="index-09-furniture.html#"> <img class="media-object img-responsive" src="{{ url('assets/frontend') }}/images/nav-img-3.jpg" alt=""> </a> </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                                                <a href="index-09-furniture.html#.">READ MORE</a> </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="08-01-blog-mansory.html">BLOG</a>
                            <ul class="dropdown">
                                <li><a href="08-01-blog-mansory.html">Blog Mansory</a></li>
                                <li><a href="08-02-blog-left-side-bar.html">Blog Left Side Bar</a></li>
                                <li><a href="08-02-blog-right-side-bar.html">Blog Right Side Bar</a></li>
                                <li><a href="08-04-blog-medium-image.html">Blog Medium Image</a></li>
                                <li><a href="08-05-blog-large-images.html">Blog Large Images</a></li>
                                <li><a href="08-06-blog-02-col.html">Blog 02 Col</a></li>
                                <li><a href="08-07-blog-03-col.html">Blog 03 Col</a></li>
                                <li><a href="08-08-blog-04-col.html">Blog 04 Col</a></li>
                            </ul>
                        </li>
                        <li><a href="09-01-portfolio-grid.html">PORTFOLIO </a>
                            <ul class="dropdown">
                                <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID </a>
                                    <ul class="dropdown">
                                        <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID 02 COL</a></li>
                                        <li><a href="09-02-portfolio-grid.html">PORTFOLIO GRID 03 COL</a></li>
                                        <li><a href="09-03-portfolio-grid.html">PORTFOLIO GRID 04 COL</a></li>
                                    </ul>
                                </li>
                                <li><a href="09-01-portfolio-grid.html">PORTFOLIO Default </a>
                                    <ul class="dropdown">
                                        <li><a href="09-05-portfolio-grid-default.html">PORTFOLIO 02 COL</a></li>
                                        <li><a href="09-06-portfolio-grid-default.html">PORTFOLIO 03 COL</a></li>
                                        <li><a href="09-07-portfolio-grid-default.html">PORTFOLIO 04 COL</a></li>
                                    </ul>
                                </li>
                                <li><a href="09-03-portfolio-full-width.html">PORTFOLIO FULLWIDTH</a></li>
                                <li><a href="09-08-portfolio-masonry.html">PORTFOLIO MANSORY 01</a></li>
                                <li><a href="09-09-portfolio-masonry.html">PORTFOLIO MANSORY 02</a></li>
                                <li><a href="09-10-portfolio-single.html">Portfolio Single 01</a></li>
                                <li><a href="09-11-portfolio-single.html">Portfolio Single 02</a></li>
                            </ul>
                        </li>
                        <li><a href="04-contact-01.html">CONTACT</a>
                            <ul class="dropdown">
                                <li><a href="04-contact-01.html">Contact US 01</a></li>
                                <li><a href="04-contact-02.html">Contact US 02</a></li>
                                <li><a href="04-contact-03.html">Contact US 03</a></li>
                            </ul>
                        </li>

                        <!--======= Shopping Cart =========-->
                        <li class="shop-cart"><a href="index-09-furniture.html#."><i class="fa fa-shopping-cart"></i></a> <span class="numb">2</span>
                            <ul class="dropdown">
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="cart-img"> <a href="index-09-furniture.html#"> <img class="media-object img-responsive" src="{{ url('assets/frontend') }}/images/item-col-img-1.jpg" alt="..."> </a> </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">DRAEY TRENCH COAT</h6>
                                            <span class="price">129.00 USD</span> <span class="qty">QTY: 01</span> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="cart-img"> <a href="index-09-furniture.html#"> <img class="media-object img-responsive" src="{{ url('assets/frontend') }}/images/item-col-img-2.jpg" alt="..."> </a> </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">DRAEY TRENCH COAT</h6>
                                            <span class="price">129.00 USD</span> <span class="qty">QTY: 01</span> </div>
                                    </div>
                                </li>
                                <li class="no-padding no-border">
                                    <h5 class="text-center">SUBTOTAL: 258.00 USD</h5>
                                </li>
                                <li class="no-padding no-border">
                                    <div class="row">
                                        <div class="col-xs-6"> <a href="index-09-furniture.html#." class="btn btn-small">VIEW CART</a></div>
                                        <div class="col-xs-6 "> <a href="index-09-furniture.html#." class="btn btn-1 btn-small">CHECK OUT</a></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!--======= SEARCH ICON =========-->
                        <li class="search-nav"><a href="index-09-furniture.html#."><i class="fa fa-search"></i></a>
                            <ul class="dropdown">
                                <li class="row">
                                    <div class="col-sm-4 no-padding">
                                        <select class="selectpicker">
                                            <option>MEN'S</option>
                                            <option>WOMENS</option>
                                            <option>KIDS</option>
                                            <option>FASHION</option>
                                            <option>MEN'S</option>
                                            <option>WOMENS</option>
                                            <option>KIDS</option>
                                            <option>FASHION</option>
                                            <option>MEN'S</option>
                                            <option>WOMENS</option>
                                            <option>KIDS</option>
                                            <option>FASHION</option>
                                            <option>MEN'S</option>
                                            <option>WOMENS</option>
                                            <option>KIDS</option>
                                            <option>FASHION</option>
                                            <option>MEN'S</option>
                                            <option>WOMENS</option>
                                            <option>KIDS</option>
                                            <option>FASHION</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-8 no-padding">
                                        <input type="search" class="form-control" placeholder="Search Here">
                                        <button type="submit"> <i class="fa fa-search"></i> </button>
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
                             style="color: #272727; font-size: 30px;"> Restoration </div>

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
                             style="color: #959595; font-size: 12px; line-height:24px;"> It is a long established fact that a reader will be distracted by <br>
                            the readable content of a page when looking at its layout.<br>
                            The point of using Lorem Ipsum is that it has a more-or-less <br>
                            normal as opposed to using 'Content here, </div>

                        <!-- Layer -->
                        <div class="tp-caption sfb tp-resizeme"
                             data-x="left"
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

        <!--======= FURNITURE LARGE =========-->
        <section class="furniture-large animate fadeInUp" data-wow-delay="0.4s">
            <div class="fur-slide">

                <!--  ITEM 1 -->
                <div class="item"> <img src="{{ url('assets/frontend') }}/images/furniture/large-img-1.jpg" alt="" >
                    <div class="item-inn">
                        <div class="item-hover">
                            <div class="position-center-center text-center">
                                <h3>Banqueta Bravo Mk2</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal as opposed to using 'Content here, </p>
                                <a href="index-09-furniture.html#." class="btn btn-small">SHOPPING NOW</a> </div>
                        </div>
                    </div>
                </div>

                <!--  ITEM 2 -->
                <div class="item"> <img src="{{ url('assets/frontend') }}/images/furniture/large-img-2.jpg" alt="" >
                    <div class="item-inn">
                        <div class="item-hover">
                            <div class="position-center-center text-center">
                                <h3>Banqueta Bravo Mk2</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal as opposed to using 'Content here, </p>
                                <a href="index-09-furniture.html#." class="btn btn-small">SHOPPING NOW</a> </div>
                        </div>
                    </div>
                </div>

                <!--  ITEM 1 -->
                <div class="item"> <img src="{{ url('assets/frontend') }}/images/furniture/large-img-1.jpg" alt="" >
                    <div class="item-inn">
                        <div class="item-hover">
                            <div class="position-center-center text-center">
                                <h3>Banqueta Bravo Mk2</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal as opposed to using 'Content here, </p>
                                <a href="index-09-furniture.html#." class="btn btn-small">SHOPPING NOW</a> </div>
                        </div>
                    </div>
                </div>

                <!--  ITEM 2 -->
                <div class="item"> <img src="{{ url('assets/frontend') }}/images/furniture/large-img-2.jpg" alt="" >
                    <div class="item-inn">
                        <div class="item-hover">
                            <div class="position-center-center text-center">
                                <h3>Banqueta Bravo Mk2</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal as opposed to using 'Content here, </p>
                                <a href="index-09-furniture.html#." class="btn btn-small">SHOPPING NOW</a> </div>
                        </div>
                    </div>
                </div>

                <!--  ITEM 1 -->
                <div class="item"> <img src="{{ url('assets/frontend') }}/images/furniture/large-img-1.jpg" alt="" >
                    <div class="item-inn">
                        <div class="item-hover">
                            <div class="position-center-center text-center">
                                <h3>Banqueta Bravo Mk2</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal as opposed to using 'Content here, </p>
                                <a href="index-09-furniture.html#." class="btn btn-small">SHOPPING NOW</a> </div>
                        </div>
                    </div>
                </div>

                <!--  ITEM 2 -->
                <div class="item"> <img src="{{ url('assets/frontend') }}/images/furniture/large-img-2.jpg" alt="" >
                    <div class="item-inn">
                        <div class="item-hover">
                            <div class="position-center-center text-center">
                                <h3>Banqueta Bravo Mk2</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal as opposed to using 'Content here, </p>
                                <a href="index-09-furniture.html#." class="btn btn-small">SHOPPING NOW</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--======= FURNITURE ITEMS =========-->
        <section class="section-p-60px no-padding-b">
            <div class="container">
                <!--  Tittle -->
                <div class="tittle tittle-2 animate fadeInUp" data-wow-delay="0.4s">
                    <h5>NEW ARRIVAL</h5>
                    <hr>
                    <p>Treding 2015</p>
                </div>
            </div>

            <!-- ITEMS -->
            <ul class="items-fer animate fadeInUp" data-wow-delay="0.4s">
                <!-- ITEM -->
                <li class="animate fadeInUp" data-wow-delay="0.2s">
                    <div class="item-inn">
                        <!-- ITEM IMAGE -->
                        <img class="img-responsive" src="{{ url('assets/frontend') }}/images/furniture/item-1.jpg" alt="" >
                        <!-- HOVER -->
                        <div class="item-hover">
                            <div class="position-center-center"> <a class="zoom" href="{{ url('assets/frontend') }}/images/furniture/item-1.jpg" data-lighter><i class="fa fa-search"></i></a> </div>
                            <!-- ITEM DETAILS -->
                            <div class="item-detail">
                                <h6>LOOSE-FIT TRENCH COAT</h6>
                                <span class="font-montserrat">129.00 USD</span>
                                <div class="some-info"> <a href="index-09-furniture.html#."><i class="ion-ios-cart"></i></a> <a href="index-09-furniture.html#."><i class="fa fa-heart-o"></i></a> <a href="index-09-furniture.html#."><i class="ion-shuffle"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ITEM -->
                <li class="animate fadeInUp" data-wow-delay="0.4s">
                    <div class="item-inn">
                        <!-- ITEM IMAGE -->
                        <img class="img-responsive" src="{{ url('assets/frontend') }}/images/furniture/item-2.jpg" alt="" >
                        <!-- HOVER -->
                        <div class="item-hover">
                            <div class="position-center-center"> <a class="zoom" href="{{ url('assets/frontend') }}/images/furniture/item-2.jpg" data-lighter><i class="fa fa-search"></i></a> </div>
                            <!-- ITEM DETAILS -->
                            <div class="item-detail">
                                <h6>LOOSE-FIT TRENCH COAT</h6>
                                <span class="font-montserrat">129.00 USD</span>
                                <div class="some-info"> <a href="index-09-furniture.html#."><i class="ion-ios-cart"></i></a> <a href="index-09-furniture.html#."><i class="fa fa-heart-o"></i></a> <a href="index-09-furniture.html#."><i class="ion-shuffle"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ITEM -->
                <li class="animate fadeInUp" data-wow-delay="0.6s">
                    <div class="item-inn">
                        <!-- ITEM IMAGE -->
                        <img class="img-responsive" src="{{ url('assets/frontend') }}/images/furniture/item-3.jpg" alt="" >
                        <!-- HOVER -->
                        <div class="item-hover">
                            <div class="position-center-center"> <a class="zoom" href="{{ url('assets/frontend') }}/images/furniture/item-3.jpg" data-lighter><i class="fa fa-search"></i></a> </div>
                            <!-- ITEM DETAILS -->
                            <div class="item-detail">
                                <h6>LOOSE-FIT TRENCH COAT</h6>
                                <span class="font-montserrat">129.00 USD</span>
                                <div class="some-info"> <a href="index-09-furniture.html#."><i class="ion-ios-cart"></i></a> <a href="index-09-furniture.html#."><i class="fa fa-heart-o"></i></a> <a href="index-09-furniture.html#."><i class="ion-shuffle"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ITEM -->
                <li class="animate fadeInUp" data-wow-delay="0.8s">
                    <div class="item-inn">
                        <!-- ITEM IMAGE -->
                        <img class="img-responsive" src="{{ url('assets/frontend') }}/images/furniture/item-4.jpg" alt="" >
                        <!-- HOVER -->
                        <div class="item-hover">
                            <div class="position-center-center"> <a class="zoom" href="{{ url('assets/frontend') }}/images/furniture/item-4.jpg" data-lighter><i class="fa fa-search"></i></a> </div>
                            <!-- ITEM DETAILS -->
                            <div class="item-detail">
                                <h6>LOOSE-FIT TRENCH COAT</h6>
                                <span class="font-montserrat">129.00 USD</span>
                                <div class="some-info"> <a href="index-09-furniture.html#."><i class="ion-ios-cart"></i></a> <a href="index-09-furniture.html#."><i class="fa fa-heart-o"></i></a> <a href="index-09-furniture.html#."><i class="ion-shuffle"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ITEM -->
                <li class="animate fadeInUp" data-wow-delay="1s">
                    <div class="item-inn">
                        <!-- ITEM IMAGE -->
                        <img class="img-responsive" src="{{ url('assets/frontend') }}/images/furniture/item-5.jpg" alt="" >
                        <!-- HOVER -->
                        <div class="item-hover">
                            <div class="position-center-center"> <a class="zoom" href="{{ url('assets/frontend') }}/images/furniture/item-5.jpg" data-lighter><i class="fa fa-search"></i></a> </div>
                            <!-- ITEM DETAILS -->
                            <div class="item-detail">
                                <h6>LOOSE-FIT TRENCH COAT</h6>
                                <span class="font-montserrat">129.00 USD</span>
                                <div class="some-info"> <a href="index-09-furniture.html#."><i class="ion-ios-cart"></i></a> <a href="index-09-furniture.html#."><i class="fa fa-heart-o"></i></a> <a href="index-09-furniture.html#."><i class="ion-shuffle"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ITEM -->
                <li class="animate fadeInUp" data-wow-delay="0.2s">
                    <div class="item-inn">
                        <!-- ITEM IMAGE -->
                        <img class="img-responsive" src="{{ url('assets/frontend') }}/images/furniture/item-6.jpg" alt="" >
                        <!-- HOVER -->
                        <div class="item-hover">
                            <div class="position-center-center"> <a class="zoom" href="images/furniture/item-6.jpg" data-lighter><i class="fa fa-search"></i></a> </div>
                            <!-- ITEM DETAILS -->
                            <div class="item-detail">
                                <h6>LOOSE-FIT TRENCH COAT</h6>
                                <span class="font-montserrat">129.00 USD</span>
                                <div class="some-info"> <a href="index-09-furniture.html#."><i class="ion-ios-cart"></i></a> <a href="index-09-furniture.html#."><i class="fa fa-heart-o"></i></a> <a href="index-09-furniture.html#."><i class="ion-shuffle"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ITEM -->
                <li class="animate fadeInUp" data-wow-delay="0.4s">
                    <div class="item-inn">
                        <!-- ITEM IMAGE -->
                        <img class="img-responsive" src="{{ url('assets/frontend') }}/images/furniture/item-7.jpg" alt="" >
                        <!-- HOVER -->
                        <div class="item-hover">
                            <div class="position-center-center"> <a class="zoom" href="{{ url('assets/frontend') }}/images/furniture/item-7.jpg" data-lighter><i class="fa fa-search"></i></a> </div>
                            <!-- ITEM DETAILS -->
                            <div class="item-detail">
                                <h6>LOOSE-FIT TRENCH COAT</h6>
                                <span class="font-montserrat">129.00 USD</span>
                                <div class="some-info"> <a href="index-09-furniture.html#."><i class="ion-ios-cart"></i></a> <a href="index-09-furniture.html#."><i class="fa fa-heart-o"></i></a> <a href="index-09-furniture.html#."><i class="ion-shuffle"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ITEM -->
                <li class="animate fadeInUp" data-wow-delay="0.6s">
                    <div class="item-inn">
                        <!-- ITEM IMAGE -->
                        <img class="img-responsive" src="{{ url('assets/frontend') }}/images/furniture/item-8.jpg" alt="" >
                        <!-- HOVER -->
                        <div class="item-hover">
                            <div class="position-center-center"> <a class="zoom" href="{{ url('assets/frontend') }}/images/furniture/item-8.jpg" data-lighter><i class="fa fa-search"></i></a> </div>
                            <!-- ITEM DETAILS -->
                            <div class="item-detail">
                                <h6>LOOSE-FIT TRENCH COAT</h6>
                                <span class="font-montserrat">129.00 USD</span>
                                <div class="some-info"> <a href="index-09-furniture.html#."><i class="ion-ios-cart"></i></a> <a href="index-09-furniture.html#."><i class="fa fa-heart-o"></i></a> <a href="index-09-furniture.html#."><i class="ion-shuffle"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ITEM -->
                <li class="animate fadeInUp" data-wow-delay="0.8s">
                    <div class="item-inn">
                        <!-- ITEM IMAGE -->
                        <img class="img-responsive" src="{{ url('assets/frontend') }}/images/furniture/item-9.jpg" alt="" >
                        <!-- HOVER -->
                        <div class="item-hover">
                            <div class="position-center-center"> <a class="zoom" href="{{ url('assets/frontend') }}/images/furniture/item-9.jpg" data-lighter><i class="fa fa-search"></i></a> </div>
                            <!-- ITEM DETAILS -->
                            <div class="item-detail">
                                <h6>LOOSE-FIT TRENCH COAT</h6>
                                <span class="font-montserrat">129.00 USD</span>
                                <div class="some-info"> <a href="index-09-furniture.html#."><i class="ion-ios-cart"></i></a> <a href="index-09-furniture.html#."><i class="fa fa-heart-o"></i></a> <a href="index-09-furniture.html#."><i class="ion-shuffle"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ITEM -->
                <li class="animate fadeInUp" data-wow-delay="1s">
                    <div class="item-inn">
                        <!-- ITEM IMAGE -->
                        <img class="img-responsive" src="{{ url('assets/frontend') }}/images/furniture/item-10.jpg" alt="" >
                        <!-- HOVER -->
                        <div class="item-hover">
                            <div class="position-center-center"> <a class="zoom" href="{{ url('assets/frontend') }}/images/furniture/item-10.jpg" data-lighter><i class="fa fa-search"></i></a> </div>
                            <!-- ITEM DETAILS -->
                            <div class="item-detail">
                                <h6>LOOSE-FIT TRENCH COAT</h6>
                                <span class="font-montserrat">129.00 USD</span>
                                <div class="some-info"> <a href="index-09-furniture.html#."><i class="ion-ios-cart"></i></a> <a href="index-09-furniture.html#."><i class="fa fa-heart-o"></i></a> <a href="index-09-furniture.html#."><i class="ion-shuffle"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <!--======= PARALLAX SECTION =========-->
        <section class="parallex parallex-fur animate fadeInUp" data-wow-delay="0.4s" data-stellar-background-ratio="0.5">
            <div class="overlay">
                <div class="container">
                    <h3>Local Love: Coffee Meets Design at SF's Coffee Bar</h3>
                    <a href="index-09-furniture.html#." class="btn">LEARN MORE</a> </div>
            </div>
        </section>
    </div>

    <!--======= Footer =========-->
    <footer>
        <div class="container">
            <div class="text-center"> <a href="index-09-furniture.html#."><img src="{{ url('assets/frontend') }}/images/logo.png" alt=""></a><br>
                <img class="margin-t-40" src="{{ url('assets/frontend') }}/images/hammer.png" alt="">
                <p class="intro-small margin-t-40">Multipurpose E-Commerce Theme is suitable for furniture store, fashion shop, accessories, electric shop. We have included multiple layouts for home page to give you best selections in customization.</p>
            </div>

            <!--  Footer Links -->
            <div class="footer-link row">
                <div class="col-md-6">
                    <ul>

                        <!--  INFOMATION -->
                        <li class="col-sm-6">
                            <h5>INFOMATION</h5>
                            <ul class="f-links">
                                <li><a href="index-09-furniture.html#.">ABOUT US</a></li>
                                <li><a href="index-09-furniture.html#."> DELIVERY INFOMATION</a></li>
                                <li><a href="index-09-furniture.html#."> PRIVACY & POLICY</a></li>
                                <li><a href="index-09-furniture.html#."> TEMRS & CONDITIONS</a></li>
                                <li><a href="index-09-furniture.html#."> MANUFACTURES</a></li>
                            </ul>
                        </li>

                        <!-- MY ACCOUNT -->
                        <li class="col-sm-6">
                            <h5>MY ACCOUNT</h5>
                            <ul class="f-links">
                                <li><a href="index-09-furniture.html#.">MY ACCOUNT</a></li>
                                <li><a href="index-09-furniture.html#."> LOGIN</a></li>
                                <li><a href="index-09-furniture.html#."> MY CART</a></li>
                                <li><a href="index-09-furniture.html#."> WISHLIST</a></li>
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
                            <h5>FLICKR PHOTO</h5>
                            <ul class="flicker">
                                <li><a href="index-09-furniture.html#."><img src="{{ url('assets/frontend') }}/images/flicker-1.jpg" alt=""></a></li>
                                <li><a href="index-09-furniture.html#."><img src="{{ url('assets/frontend') }}/images/flicker-2.jpg" alt=""></a></li>
                                <li><a href="index-09-furniture.html#."><img src="{{ url('assets/frontend') }}/images/flicker-3.jpg" alt=""></a></li>
                                <li><a href="index-09-furniture.html#."><img src="{{ url('assets/frontend') }}/images/flicker-4.jpg" alt=""></a></li>
                                <li><a href="index-09-furniture.html#."><img src="{{ url('assets/frontend') }}/images/flicker-5.jpg" alt=""></a></li>
                                <li><a href="index-09-furniture.html#."><img src="{{ url('assets/frontend') }}/images/flicker-6.jpg" alt=""></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Rights -->
            <div class="rights">
                <p>© 2015 HTML5 TEMPLATE SEBIAN. All Rights Reserved. Powered By WPELITE</p>
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
<script src="{{ url('assets/frontend') }}/js/main.js"></script>
</body>
</html>