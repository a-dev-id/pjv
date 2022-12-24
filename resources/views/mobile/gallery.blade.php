@section('gallery_active', 'active')
@section('meta')
    <title>Hanging Garden of Bali | Homepage</title>
    <meta name="description" content="">
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://hanginggardensofbali.com/m" />
    <meta property="og:image" content="" />
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <style type="text/css">
        .mdi-gallery-1 {
            height: 253px;
        }

        .mdi-gallery-2 {
            height: 125px;
        }

        .mdi-gallery-3 {
            height: 125px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }

        .mdi-gallery-col-1 {
            padding-right: 3px !important;
            padding-left: 3px !important;
            padding-top: 3px !important;
        }

        .mdi-gallery-col-2 {
            padding-bottom: 3px !important;
            padding-right: 3px !important;
            padding-top: 3px !important;
        }

        .mdi-gallery-col-3 {
            padding-right: 3px !important;
        }

        .display-block {
            display: block;
        }

        .contact-deral p {
            font-size: 15px;
            margin-bottom: 20px;
        }

        .mdi-info-contact-btn {
            font-size: 16px;
            color: #666 !important;
        }

        .email-btn {
            margin-top: 20px;
            padding-bottom: 5px;
            text-decoration: underline;
        }

        .phone-btn {
            margin-bottom: 20px;
            text-decoration: underline;
        }

        .btn-view-photos {
            display: unset;
        }

        .contact-deral h1 {
            letter-spacing: -1px;
        }

        .mdi-info-photo-logo {
            width: 200px;
            margin: 20px auto;
            display: block;
        }
    </style>
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js" defer></script>
    <script type="text/javascript">
        function initialize() {
            var mapCanvas = document.getElementById('map_canvas');
            var mapOptions = {
                center: new google.maps.LatLng('', ''),
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                zoomControl: true,
                scaleControl: false,
                scrollwheel: false,
                disableDoubleClickZoom: true,
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);
            var iconBase = 'upload';
            var image = {
                url: "https://hanginggardensofbali.com/themes/mindimedia-theme/assets/themes/minditheme/upload/logo.png",
                size: new google.maps.Size(50, 50),
                scaledSize: new google.maps.Size(50, 50)

            };
            var marker = new google.maps.Marker({
                position: map.getCenter(),
                map: map,
                title: ''
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endpush


<x-mobile>
    <div class="container visible-xs visible-sm m-t-20">
        <div class="row">
            <div class="col-xs-6 p-0 mdi-gallery-col-1">
                <div class="mdi-gallery-1" style="background: url(https://hanginggardensofbali.com/storage/app/uploads/public/613/094/5ad/6130945ad56ed890950919.jpg) no-repeat;background-size: cover;background-position: center;"></div>
            </div>
            <div class="col-xs-6 p-0">
                <div class="col-xs-12 p-0 mdi-gallery-col-2">
                    <div class="mdi-gallery-2" style="background: url(https://hanginggardensofbali.com/storage/app/uploads/public/629/47c/56e/62947c56ecee5771977247.jpg) no-repeat;background-size: cover;background-position: center;"></div>
                </div>
                <div class="col-xs-12 p-0 mdi-gallery-col-3">
                    <a href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/5ad/6130945ad56ed890950919.jpg" data-fancybox="gallery" class="btn-view-photos" data-fancybox-trigger="gallery">
                        <div class="mdi-gallery-3" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(https://hanginggardensofbali.com/storage/app/uploads/public/629/47b/937/62947b93720c0320163935.jpg) no-repeat;background-size: cover;background-position: center;">PHOTO GALLERY</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden">
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/4f9/6130944f9b99d177772576.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/502/6130945025b4e980926964.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/519/6130945196ee0532826247.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/538/61309453896d4142911647.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/549/613094549c9aa913718990.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/54b/61309454b8415338583091.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/561/613094561d8e3594102763.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/564/6130945641bbd776482451.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/574/6130945743349575896035.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/575/613094575855a735881041.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/587/6130945870667924798647.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/588/61309458804b2852647002.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/5c1/6130945c13536630352573.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/5d6/6130945d6cd78703553494.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/613/094/5e5/6130945e56373048974677.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47c/56e/62947c56ecee5771977247.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47c/56f/62947c56f2cc8808370809.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47c/58e/62947c58eff9c617294316.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47c/5a3/62947c5a356e7998601789.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47c/5a9/62947c5a9cce2105280966.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47c/5c7/62947c5c775f5240378759.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47c/5cb/62947c5cbf4bc591522201.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47c/5dd/62947c5dd0727033731366.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47c/5ea/62947c5eacbe7052560732.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47c/5f1/62947c5f1cf58240806283.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47c/603/62947c603d768617929757.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47d/03d/62947d03d9165081774603.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47b/937/62947b93720c0320163935.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47b/938/62947b9382953837465852.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47b/94b/62947b94b77d2069588122.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47b/960/62947b960a02a742238450.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47b/965/62947b96578cb248894884.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47b/974/62947b974e4fe396462525.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47b/984/62947b9846a3d584316577.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47b/988/62947b988a2fd264245066.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47b/997/62947b997b224487262259.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47b/99c/62947b99c5bb7086689895.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47b/9ac/62947b9ac3a7a428763093.jpg" data-fancybox="gallery"></div>
        <div href="https://hanginggardensofbali.com/storage/app/uploads/public/629/47b/9cb/62947b9cb8b0b369727948.jpg" data-fancybox="gallery"></div>
    </div>

    <div class="container visible-xs visible-sm">
        <div class="row">
            <div class="col-xs-12 contact-deral">
                <img class="mdi-info-photo-logo" src="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/hanginggarden-logo.png">
                <h1 style="margin-bottom: 5px;">Hanging Gardens of Bali</h1>
                <!-- <p><strong>Please do not hesitate to contact us</strong></p> -->
                <p><i class="fa fa-map-marker"></i> Buahan, Payangan, 80571, Kabupaten Gianyar - Bali</p>
                <!-- <div style="height: 150px; width: 100%;" id="map_canvas"></div> -->
                <iframe id="mobileMap" src="https://maps.google.com/maps?q=Hanging+Gardens+Of+Bali&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="175" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                <a class="mdi-info-contact-btn email-btn display-block" href="mailto:reservations@hanginggardensofbali.com"><i class="fa fa-envelope"></i>reservations@hanginggardensofbali.com</a>
                <a class="mdi-info-contact-btn phone-btn display-block" href="tel:+62 361 982 700"><i class="fa fa-phone"></i>+62 361 982 700</a>
            </div>
        </div>
    </div>
</x-mobile>
