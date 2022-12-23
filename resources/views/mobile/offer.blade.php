@section('offer_active', 'active')
@section('meta')
<title>Hanging Garden of Bali | Homepage</title>
<meta name="description" content="">
<meta property="og:title" content="" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://hanginggardensofbali.com/m" />
<meta property="og:image" content="" />
@endsection
@push('css')
<style type="text/css">
    .fa-angle-right {
        transform: rotate(0deg);
        transition: transform 0.25s linear;
    }

    .fa-angle-right.active {
        transform: rotate(90deg);
        transition: transform 0.25s linear;
    }

    .term-modal .panel-heading {
        background-color: #fff;
        border-color: #fff;
        color: #000;
        padding-left: 0;
        padding-top: 0;
        text-decoration: underline;
    }

    .term-modal .panel-body {
        border-top: 0 !important;
        padding-top: 0;
    }

    .mdi-term-btn {
        color: #A6631B !important;
        font-size: 16px;
    }

    .mdi-offer-list {
        margin-left: 23px;
    }

    .mdi-offer-list li {
        padding-bottom: 5px;
    }

    .mdi-offer-list li i.fa-li.fa-lg {
        font-size: 16px;
        top: 4px;
    }

    .term-modal .mdi-offer-list {
        margin-left: 12px;
    }

    .offer-promo ul {
        margin-left: 0px;
    }

</style>
@endpush
@push('js')
<script type="text/javascript">
    $('a').on('click', function(e) {
    	  $(this).find('[class*="angle"]').toggleClass('fa-angle-down fa-angle-up')
    	});
    
    	$('.go').on('click', function(e) {
    	  $(this).css({
    	    transform: 'rotate(0deg)',
    	    transition: 'transform .5s'
    	  });
    	});
</script>
@endpush
<x-mobile>

    <section class="slider relative">
        <div class="mdi-header-carousel owl-carousel owl-theme">
            <div class="header-bg relative" style="background: linear-gradient(180deg, transparent 90%, #fff), url(https://hanginggardensofbali.com/storage/app/uploads/public/629/489/248/6294892483e3e767060187.jpg) no-repeat;background-size: cover;background-position: bottom;"></div>
            <div class="header-bg relative" style="background: linear-gradient(180deg, transparent 90%, #fff), url(https://hanginggardensofbali.com/storage/app/uploads/public/629/489/248/62948924894a5804539231.jpg) no-repeat;background-size: cover;background-position: bottom;"></div>
            <div class="header-bg relative" style="background: linear-gradient(180deg, transparent 90%, #fff), url(https://hanginggardensofbali.com/storage/app/uploads/public/629/489/25d/62948925d7857710753313.jpg) no-repeat;background-size: cover;background-position: bottom;"></div>
            <div class="header-bg relative" style="background: linear-gradient(180deg, transparent 90%, #fff), url(https://hanginggardensofbali.com/storage/app/uploads/public/629/489/267/629489267a275681246185.jpg) no-repeat;background-size: cover;background-position: bottom;"></div>
            <div class="header-bg relative" style="background: linear-gradient(180deg, transparent 90%, #fff), url(https://hanginggardensofbali.com/storage/app/uploads/public/629/489/270/6294892702481298017608.jpg) no-repeat;background-size: cover;background-position: bottom;"></div>
        </div>
        <a target="_blank" class="mdi-map-btn" href="https://g.page/hanginggardensofbali?share"><i class="fa fa-map-marker"></i> MAP</a>
        <a class="mdi-share-btn" href="javascript:void(0)" data-toggle="modal" data-target="#shareModal"><i class="fa fa-share-alt"></i></a>
        <img src="" class="logo-invert logo-header-mobile">
    </section>


    <div class="container visible-xs visible-sm">
        <div class="row">
            <div class="background-home">
                <div class="col-md-12">
                    <div class="benefit-mobile">
                        <h1>Book Direct Benefit</h1>
                        <ul class="fa-ul">
                            <li><i class="fa-li fa fa-check-circle"></i>Best online rate guaranteed</li>
                            <li><i class="fa-li fa fa-check-circle"></i>Free wi-fi in all rooms</li>
                            <li><i class="fa-li fa fa-check-circle"></i>Secure transactions</li>
                            <li><i class="fa-li fa fa-check-circle"></i>No hidden fees</li>
                            <li><i class="fa-li fa fa-check-circle"></i>Instant confirmation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 15px;" class="room-view">
        <div class="container">
            <div class="row">
                <div style="padding: 0px 6px;" class="col-xs-12">
                    <div class="panel-group" id="accordion">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a id="btn-k" data-toggle="collapse" data-parent="#accordion" href="#collapse10">4-NIGHT COMBINATION PACKAGE<span><i id="icon-kj" class="fa fa-angle-up  go" aria-hidden="true" style="font-size: 25px;margin-top: -4px;"></i></span></a>
                                </h4>
                            </div>
                            <div id="collapse10" class="panel-collapse collapse  in ">
                                <div class="panel-body">
                                    <div class="slide-room">
                                        <div id="offer0" class="carousel-fade slide carousel" data-ride="carousel">
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner text-center">
                                                <div class="item active">
                                                    <div style="background:url(https://hanginggardensofbali.com/storage/app/uploads/public/639/adf/e5b/639adfe5bec2c473176611.jpg) no-repeat;background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-position: center;height: 100%;"></div>
                                                </div>
                                            </div>
                                            <!-- Controls -->
                                            <a class="left carousel-control" href="#offer0" data-slide="prev">
                                                <span class="glyphicon glyphicon-menu-left im-chevron-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#offer0" data-slide="next">
                                                <span class="glyphicon glyphicon-menu-right im-chevron-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clt-bth"></div>
                                    <div class="offer-promo">
                                        <h2></h2>
                                        <div class="intro-less-box">
                                            <p><strong>Start from USD 2,492++</strong></p>
                                            <p>Begin your stay at the award-winning hotel Hanging Gardens of Bali to experience &ldquo;The world&rsquo;s best swimming pool&rdquo;. After two days in the jungle, depart for the exclusive Elevate Bali, tucked in the Munduk mountains, surrounded by waterfalls and volcanoes. A truly enchanting experience like no other...</p>
                                            <p><strong>PACKAGE INCLUSIONS</strong></p>
                                            <ul>
                                                <li>2-Night Stay at Riverside Pool Villa - Hanging Gardens of Bali - Ubud</li>
                                                <li>2-Night Stay at Volcano Vista Villa - Elevate Bali by Hanging Gardens - Munduk</li>
                                                <li>Daily breakfast</li>
                                                <li>Daily sunset mocktail</li>
                                                <li>Daily resort activities based on resorts&rsquo; schedule</li>
                                                <li>Daily shuttle service based on resorts&rsquo; schedule</li>
                                                <li>Complimentary transfer service between the properties</li>
                                            </ul>
                                            <hr />
                                            <p><strong>TERMS AND CONDITIONS</strong></p>
                                            <ul>
                                                <li>Package valid for two persons</li>
                                                <li>Package valid immediately until 31st March 2023</li>
                                                <li>Package subject to 21% Government tax and Service Charge</li>
                                                <li>Advance reservation required</li>
                                            </ul>
                                        </div>
                                        <div class="intro-more-box" style="display: none;">
                                            <p><strong>Start from USD 2,492++</strong></p>
                                            <p>Begin your stay at the award-winning hotel Hanging Gardens of Bali to experience &ldquo;The world&rsquo;s best swimming pool&rdquo;. After two days in the jungle, depart for the exclusive Elevate Bali, tucked in the Munduk mountains, surrounded by waterfalls and volcanoes. A truly enchanting experience like no other...</p>
                                            <p><strong>PACKAGE INCLUSIONS</strong></p>
                                            <ul>
                                                <li>2-Night Stay at Riverside Pool Villa - Hanging Gardens of Bali - Ubud</li>
                                                <li>2-Night Stay at Volcano Vista Villa - Elevate Bali by Hanging Gardens - Munduk</li>
                                                <li>Daily breakfast</li>
                                                <li>Daily sunset mocktail</li>
                                                <li>Daily resort activities based on resorts&rsquo; schedule</li>
                                                <li>Daily shuttle service based on resorts&rsquo; schedule</li>
                                                <li>Complimentary transfer service between the properties</li>
                                            </ul>
                                            <hr />
                                            <p><strong>TERMS AND CONDITIONS</strong></p>
                                            <ul>
                                                <li>Package valid for two persons</li>
                                                <li>Package valid immediately until 31st March 2023</li>
                                                <li>Package subject to 21% Government tax and Service Charge</li>
                                                <li>Advance reservation required</li>
                                            </ul>
                                            <a href="#" class="read-less-mobile">Read Less</a>
                                        </div>
                                        <div class="str-frm">
                                            <!-- <span>Start From</span> -->
                                            <!-- <br> -->
                                            <b>US$ USD 2,492++</b><span>/ Night</span>
                                        </div>
                                        <a href="https://wa.me/628113800988" class="btn-default def-promo" target="_blank">BOOK NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a id="btn-k" data-toggle="collapse" data-parent="#accordion" href="#collapse11">MILLIONAIRE HANGOUT<span><i id="icon-kj" class="fa fa-angle-up  go" aria-hidden="true" style="font-size: 25px;margin-top: -4px;"></i></span></a>
                                </h4>
                            </div>
                            <div id="collapse11" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="slide-room">
                                        <div id="offer1" class="carousel-fade slide carousel" data-ride="carousel">

                                            <div class="carousel-inner text-center">
                                                <div class="item active">
                                                    <div style="background:url(https://hanginggardensofbali.com/storage/app/uploads/public/63a/2cb/17d/63a2cb17d0dc4681817044.jpeg) no-repeat;background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-position: center;height: 100%;"></div>
                                                </div>
                                                <div class="item">
                                                    <div style="background:url(https://hanginggardensofbali.com/storage/app/uploads/public/632/809/e09/632809e09b48a588181271.jpg) no-repeat;background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-position: center;height: 100%;"></div>
                                                </div>
                                                <div class="item">
                                                    <div style="background:url(https://hanginggardensofbali.com/storage/app/uploads/public/632/809/f37/632809f3770c9773839330.jpg) no-repeat;background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-position: center;height: 100%;"></div>
                                                </div>
                                                <div class="item">
                                                    <div style="background:url(https://hanginggardensofbali.com/storage/app/uploads/public/632/809/f37/632809f375074634820467.jpg) no-repeat;background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-position: center;height: 100%;"></div>
                                                </div>
                                            </div>

                                            <a class="left carousel-control" href="#offer1" data-slide="prev">
                                                <span class="glyphicon glyphicon-menu-left im-chevron-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#offer1" data-slide="next">
                                                <span class="glyphicon glyphicon-menu-right im-chevron-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clt-bth"></div>
                                    <div class="offer-promo">
                                        <h2></h2>
                                        <div class="intro-less-box">
                                            <p>Book a daycation at Hanging Gardens of Bali, we offer a Day Pass that you can enjoy in your daytime. <br /><br />Our day pass is available for everyone wishing to spend their daytime in a relaxing way at our jungle resort. <br />Sip a fresh cocktail by back by one of our iconic pools, try our all-day dining menu, pamper yourself by experiencing our luxury Spa Collection, the choice is all yours.<br /><br />Entitled get IDR 1,000,000 F&B Voucher for two persons and enjoy full access to the World's Best Swimming Pool!<br /><br /></p>
                                        </div>
                                        <div class="intro-more-box" style="display: none;">
                                            <p>Book a daycation at Hanging Gardens of Bali, we offer a Day Pass that you can enjoy in your daytime. <br /><br />Our day pass is available for everyone wishing to spend their daytime in a relaxing way at our jungle resort. <br />Sip a fresh cocktail by back by one of our iconic pools, try our all-day dining menu, pamper yourself by experiencing our luxury Spa Collection, the choice is all yours.<br /><br />Entitled get IDR 1,000,000 F&B Voucher for two persons and enjoy full access to the World's Best Swimming Pool!<br /><br /></p>
                                            <a href="#" class="read-less-mobile">Read Less</a>
                                        </div>
                                        <div class="str-frm">
                                            <b>US$ IDR 1,000,000</b><span>/ Night</span>
                                        </div>
                                        <a href="https://staahmax.staah.net/be/indexpackdetail?propertyId=MzQ1MQ==&individual=true" target="_blank" class="btn-default def-promo">BOOK NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" defer></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js" defer></script>


</x-mobile>