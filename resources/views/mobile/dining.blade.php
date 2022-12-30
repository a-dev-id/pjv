@section('dining_active', 'active')
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
    h1 {
        font-size: 25px;
    }

    .enq-button {
        border: 1px solid #999;
        background: #000;
        color: #fff !important;
        padding: 10px 20px;
        transition: all 500ms;
        text-transform: uppercase;
        display: table;
        margin: 0 auto;
    }

    .text-justify {
        text-align: justify;
    }

    .btn-enquire {
        width: 100%;
        background-color: #fff;
        color: #b3a59e;
        border: 2px solid #b3a59e;
        font-weight: 700;
        display: inline-block;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-menu {
        width: 100%;
        background-color: #b3a59e;
        color: #fff;
        border: 2px solid #b3a59e;
        font-weight: 700;
        display: inline-block;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .padding-top-30 {
        padding-top: 30px !important
    }

    .reserve-modal .modal-dialog {
        min-height: 500px;
        width: 100%;
    }

    .reserve-modal iframe {
        height: 680px;
        width: 100%;
        overflow: hidden;
        display: block;
        min-height: 100% !important;
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
    <div class="container">
        <div class="row dining-row-item">
            <div class="col-xs-12">
                <a class="d-block" href="javascript:void(0)">
                    <div style="background: url({{ asset($setting->banner_image) }}) no-repeat center; height: 230px; background-size: cover;"></div>
                </a>
            </div>
            <div class="col-xs-12 dining-item-description">
                <div class="block-content">
                    <a href="javascript:void(0)">
                        <h1 style="font-weight: bold;">{{ $setting->title }}</h1>
                    </a>
                    <div class="text-justify">
                        {!! $setting->description !!}
                    </div>

                    <div class="padding-top-30">
                        <div class="col-xs-6">
                            {{-- <a target="_blank" href="#reserveRestaurant" data-toggle="modal" style="width:100%!important" class="btn-enquire">Reserve Now</a> --}}
                            <a target="_blank" href="https://wa.me/+79685401861" class="btn-enquire">Reserve Now</a>
                        </div>
                        <div class="col-xs-6">
                            <a target="_blank" href="{{ $setting->button_link }}" class="btn-menu">{{ $setting->button_text }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="modal fade" id="reserveRestaurant" tabindex="-1" aria-labelledby="reserveRestaurant" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered reserve-modal">
            <div class="modal-content">
                <iframe src="https://bookv5.chope.co/booking?rid=threeelements2203bal&source=rest_threeelementsrestaurant.com"></iframe>
            </div>
        </div>
    </div> --}}

    {{-- <div style="margin-top: 45px;" class="room-view">
        <div class="container">
            <div class="row">
                <div style="padding: 0px 6px;" class="col-xs-12">
                    <div class="panel-group" id="accordion">

                        @foreach ($restaurants as $key => $data)
                        @if ($key % 2 == 0)
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
                        @else
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a id="btn-k" data-toggle="collapse" data-parent="#accordion" href="#collapse11">MILLIONAIRE HANGOUT<span><i id="icon-kj" class="fa fa-angle-down" aria-hidden="true" style="font-size: 25px;margin-top: -4px;"></i></span></a>
                                </h4>
                            </div>
                            <div id="collapse11" class="panel-collapse collapse">
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
                        </div>
                        @endif
                        @endforeach




                    </div>
                </div>
            </div>
        </div>
    </div> --}}

</x-mobile>