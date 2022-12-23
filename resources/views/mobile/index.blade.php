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


    <!-- Modal -->
    {{-- <div class="modal fade" id="BannerPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: white; border-radius: 0px!important;">
                <div class="modal-body mb-5 pb-5">
                    <div class="row">
                        <div class="col-md-12 text-center mb-3">
                            <img class="" src="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/hanginggarden-logo.png" style="max-width: 250px; margin-bottom:10px;">
                            <img class="img-fluid" src="https://hanginggardensofbali.com/storage/app/media/hanginggardensofbali.jpg" style="width:100%;">
                        </div>
                        <div class="col-md-12 text-center fs-3">
                            <h3 class="">TIS THE SEASON TO CELEBRATE</h3>
                            <p class="mb-3" style="font-size: 16px;">
                                Following the 2022 theme of Wondrous Seventeen,<br>
                                this year, Hanging Gardens Of Bali will cast an Enchanting Wonderland all over the resort, offering an array of magical experiences blends with a dreamy culinary journey by HGI Corporate Executive Chef Ridwan Hakim,<br>
                                starting from Dec 20, 2022 till Jan 8, 2023<br>
                            </p>
                            <a class="btn btn-default text-decoration-none fs-5" href="https://drive.google.com/file/d/1yr79N7X-KClrH2_ve579l3QQp-XG4PAg/view?usp=share_link" target="blank" style="background-color:#e4c568; color:white">
                                VIEW DETAIL
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="main">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 p-t-15 p-b-15 intro-mobile">
                    <div style="display: block; text-align: center;">
                        <img style="margin-bottom: 20px; width: 70%" src="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/hanginggarden-logo.png">
                    </div>
                    <div class="intro-less-box">
                        <p style="text-align: justify;">The Hanging Gardens of Bali, a luxurious destination in the heart of the jungle. Situated near Payangan, a town village North of Ubud and resting in the centre of the magical island of Gods. Overlooking the Ayung River and ancient Dalem Segara temple, the award-winning resort stands on the edge of a stunning valley, surrounded by lush rain forests and picturesque rice terraces. An award-winning destination, proudly holding the title of the: “World's First Seven Stars Boutique Hotel” and designated as one of the World's most desirable destinations to visit.</p>
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
                                <div style=" background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(https://hanginggardensofbali.com/storage/app/uploads/public/629/472/c16/629472c16d6a7654497780.jpg) center no-repeat" class="villas-image-mry">
                                    <h4 class="title-mry">Accommodation</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 p-r-2_5 p-t-5">
                            <a href="{{ route('mobile.dining') }}" class="d-block">
                                <div style=" background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(https://hanginggardensofbali.com/storage/app/uploads/public/629/473/75e/62947375ebe94992651318.jpeg) center no-repeat" class="info-hotel-image-mry">
                                    <h4 class="title-mry">Dinning</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 p-l-2_5 p-t-5">
                            <a href="https://hanginggardensofbali.com/m/experiences" class="d-block">
                                <div style=" background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(https://hanginggardensofbali.com/storage/app/uploads/public/629/475/66e/62947566e6986187151348.jpeg) center no-repeat" class="info-hotel-image-mry">
                                    <h4 class="title-mry">Weddings</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-5 col-image-masonry p-r-5">
                    <div class="row m-0">
                        <div class="col-xs-12 p-r-0 p-l-0">
                            <a href="https://hanginggardensofbali.com/m/offer" class="d-block">
                                <div style=" background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(https://hanginggardensofbali.com/storage/app/uploads/public/629/47d/036/62947d0361014196666203.jpg) center no-repeat" class="info-hotel-image-mry">
                                    <h4 class="title-mry">Special Offers</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-12 p-t-5 p-r-0 p-l-0">
                            <a href="https://www.google.com/maps/place/Hanging+Gardens+Of+Bali/@-8.4127016,115.2389444,15z/data=!4m2!3m1!1s0x0:0x1be2fc17d127a6b9?sa=X&ved=2ahUKEwjMqI7ow9_yAhXObSsKHTy_De4Q_BIwHnoECFoQBQ" target="_blank" class="d-block">
                                <div style="background: #dcb440" class="villas-image-mry"><i class="fa fa-map-marker m-r-5"></i>
                                    <h4 class="title-mry"> Map</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-image-masonry p-t-5 p-r-5">
                    <div class="row m-0">
                        <div class="col-xs-12 p-r-0 p-l-0">
                            <a href="https://hanginggardensofbali.com/m/blog" class="d-block">
                                <div style=" background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(https://hanginggardensofbali.com/storage/app/uploads/public/629/473/75e/62947375ebe94992651318.jpeg) center no-repeat" class="info-hotel-image-mry">
                                    <h4 class="title-mry">BLOG</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

</x-mobile>