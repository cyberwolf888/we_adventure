@extends('layouts.frontend')

@push('plugin_css')
@endpush

@section('content')
    <!--======= SUB BANNER =========-->
    <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
        <div class="container">
            <h4>CONTACT US</h4>
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="04-contact-01.html#">Home</a></li>
                <li class="active">CONTACT US</li>
            </ol>
        </div>
    </section>

    <!-- CONTENT START -->
    <div class="content">

        <!-- Map -->
        <div id="map" class="animate fadeInUp" data-wow-delay="0.4s"></div>

        <!--======= BOXES =========-->
        <section class="section-p-60px contact-box animate fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <div class="row">

                    <!-- Shop Location -->
                    <div class="col-md-4 animate fadeInLeft" data-wow-delay="0.4s">
                        <div class="boxes-in">
                            <h6>SHOP LOCATION</h6>
                            <ul class="location">
                                <li> <i class="fa fa-location-arrow"></i>
                                    <p>{{ env('APP_ALAMAT') }}</p>
                                </li>
                                <li> <i class="fa fa-phone"></i>
                                    <p>Phone: {{ env('APP_PHONE') }}</p>
                                </li>
                                <li> <i class="fa fa-envelope"></i>
                                    <p>{{ env('APP_EMAIL') }}</p>
                                </li>
                                <li> <i class="fa fa-clock-o"></i>
                                    <p>OPEN: 9AM - 8PM</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- NEWSLETTER -->
                    <div class="col-md-4 animate fadeInUp" data-wow-delay="0.4s">
                        <div class="boxes-in">
                            <h6>NETWORKS</h6>

                            <!--======= FOOTER ICONS =========-->
                            <ul class="social_icons">
                                <li class="facebook"><a href="04-contact-01.html#."> <i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="04-contact-01.html#."> <i class="fa fa-twitter"></i></a></li>
                                <li class="googleplus"><a href="04-contact-01.html#."> <i class="fa fa-google"></i></a></li>
                                <li class="skype"><a href="04-contact-01.html#."> <i class="fa fa-skype"></i></a></li>
                                <li class="pinterest"><a href="04-contact-01.html#."> <i class="fa fa-pinterest"></i></a></li>
                                <li class="dribbble"><a href="04-contact-01.html#."> <i class="fa fa-dribbble"></i></a></li>
                                <li class="flickr"><a href="04-contact-01.html#."> <i class="fa fa-flickr"></i></a></li>
                                <li class="behance"><a href="04-contact-01.html#."> <i class="fa fa-behance"></i></a></li>
                                <li class="linkedin"><a href="04-contact-01.html#."> <i class="fa fa-linkedin"></i></a></li>
                                <li class="youtube"><a href="04-contact-01.html#."> <i class="fa fa-youtube"></i></a></li>
                                <li class="instagram"><a href="04-contact-01.html#."> <i class="fa fa-instagram"></i></a></li>
                                <li class="stumbleupon"><a href="04-contact-01.html#."> <i class="fa fa-stumbleupon"></i></a></li>
                                <li class="soundcloud"><a href="04-contact-01.html#."> <i class="fa fa-soundcloud"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- TESTIMONIAL -->
                    <div class="col-md-4 animate fadeInRight" data-wow-delay="0.4s">
                        <div class="boxes-in">
                            <h6>SUPPORT PEPOLE</h6>
                            <div class="media">
                                <div class="media-left">
                                    <!--  Image -->
                                    <div class="avatar"> <a href="#"> <img class="media-object" src="{{ url('assets/frontend') }}/images/avatar-11.jpg" alt=""> </a> </div>
                                </div>
                                <!--  Details -->
                                <div class="media-body">
                                    <h5>M_Adnan</h5>
                                    <p>Support Manager</p>
                                    <span><i class="fa fa-skype"></i> adnan.arif69</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('plugin_scripts')
<script type='text/javascript' src='http://maps.google.com/maps/api/js?key=AIzaSyBrPaLGlRACA4PTTaJdtvn9Vw3VYQRU8Xg'></script>
@endpush

@push('scripts')
<script type="text/javascript">
    /*==========  Map  ==========*/
    var map;
    function initialize_map() {
        if ($('#map').length) {
            var myLatLng = new google.maps.LatLng(-37.814199, 144.961560);
            var mapOptions = {
                zoom: 17,
                center: myLatLng,
                scrollwheel: false,
                panControl: false,
                zoomControl: true,
                scaleControl: false,
                mapTypeControl: false,
                streetViewControl: false
            };
            map = new google.maps.Map(document.getElementById('map'), mapOptions);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                tittle: 'Lokasi Kantor'
            });
        } else {
            return false;
        }
    }
    google.maps.event.addDomListener(window, 'load', initialize_map);
</script>
@endpush