@section('home_active', 'active')
@section('meta')
    <title>Hanging Garden of Bali | Homepage</title>
    <meta name="description" content="">
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://hanginggardensofbali.com/m" />
    <meta property="og:image" content="" />
@endsection
<x-mobile>

    <!-- Modal -->
    {{-- <div class="modal fade" id="BannerPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: white; border-radius: 0px!important;">
                <div class="modal-body mb-5 pb-5">
                    <div class="row">
                        <div class="col-md-12 text-center mb-3">
                            <img class="" src="{{ asset('images/logo/logo.png') }}" style="max-width: 250px; margin-bottom:10px;">
                            <img class="img-fluid" src="https://hanginggardensofbali.com/storage/app/media/hanginggardensofbali.jpg" style="width:100%;">
                        </div>
                        <div class="col-md-12 text-center fs-3">
                            <h3 class="">TIS THE SEASON TO CELEBRATE</h3>
                            <p class="mb-3" style="font-size: 16px;">
                                Following the 2022 theme of Wondrous Seventeen,<br>
                                this year, Hanging Gardens Of Bali will cast an Enchanting Wonderland all over the resort, offering an array of magical experiences blends with a dreamy culinary journey by HGI Corporate Executive Chef Ridwan Hakim,<br>
                                starting from Dec 20, 2022 till Jan 8, 2023<br>
                            </p>
                            <a class="btn btn-default text-decoration-none fs-5" href="https://drive.google.com/file/d/1yr79N7X-KClrH2_ve579l3QQp-XG4PAg/view?usp=share_link" target="blank" style="background-color:#b3a59e; color:white">
                                VIEW DETAIL
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="main">

        <div class="container" style="margin-bottom: 30px;">
            <div class="row">
                <div class="col-xs-12 intro-mobile">
                    <div style="display: block; text-align: center;">
                        <img style="width: 70%" src="{{ asset('images/logo/logo.png') }}">
                    </div>
                    <div class="intro-less-box text-justify">
                        {!! $setting->description !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="container m-t-5">
            <div class="row">
                <div class="col-xs-7 col-image-masonry p-l-5">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="{{ route('mobile.accommodation') }}" class="d-block">
                                <div style=" background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url({{ asset($accommodation_setting->banner_image) }}) center no-repeat" class="villas-image-mry">
                                    <h4 class="title-mry">Accommodation</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 p-r-2_5 p-t-5">
                            <a href="{{ route('mobile.dining') }}" class="d-block">
                                <div style=" background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url({{ asset($dining_setting->banner_image) }}) center no-repeat" class="info-hotel-image-mry">
                                    <h4 class="title-mry">Dinning</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 p-l-2_5 p-t-5">
                            <a href="{{ route('mobile.wedding') }}" class="d-block">
                                <div style=" background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url({{ asset($wedding_setting->banner_image) }}) center no-repeat" class="info-hotel-image-mry">
                                    <h4 class="title-mry">Weddings</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-5 col-image-masonry p-r-5">
                    <div class="row m-0">
                        <div class="col-xs-12 p-r-0 p-l-0">
                            <a href="{{ route('mobile.offer') }}" class="d-block">
                                <div style=" background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url({{-- asset($offer_setting->banner_image) --}}) center no-repeat" class="info-hotel-image-mry">
                                    <h4 class="title-mry">Special Offers</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-12 p-t-5 p-r-0 p-l-0">
                            <a href="https://www.google.com/maps/place/Hanging+Gardens+Of+Bali/@-8.4127016,115.2389444,15z/data=!4m2!3m1!1s0x0:0x1be2fc17d127a6b9?sa=X&ved=2ahUKEwjMqI7ow9_yAhXObSsKHTy_De4Q_BIwHnoECFoQBQ" target="_blank" class="d-block">
                                <div style="background: #b3a59e" class="villas-image-mry"><i class="fa fa-map-marker m-r-5"></i>
                                    <h4 class="title-mry"> Map</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-image-masonry p-t-5 p-r-5">
                    <div class="row m-0">
                        <div class="col-xs-12 p-r-0 p-l-0">
                            <a href="{{ route('mobile.blog') }}" class="d-block">
                                <div style=" background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url({{ asset($blog_setting->banner_image) }}) center no-repeat" class="info-hotel-image-mry">
                                    <h4 class="title-mry">BLOG</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

</x-mobile>
