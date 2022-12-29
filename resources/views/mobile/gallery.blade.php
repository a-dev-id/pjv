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
                <div class="mdi-gallery-1" style="background: url({{ asset($villa_setting->banner_image) }}) no-repeat;background-size: cover;background-position: center;"></div>
            </div>
            <div class="col-xs-6 p-0">
                <div class="col-xs-12 p-0 mdi-gallery-col-2">
                    <div class="mdi-gallery-2" style="background: url({{ asset($restaurant_setting->banner_image) }}) no-repeat;background-size: cover;background-position: center;"></div>
                </div>
                <div class="col-xs-12 p-0 mdi-gallery-col-3">
                    <a href="{{ asset($gallery->thumbnail_image) }}" data-fancybox="gallery" class="btn-view-photos" data-fancybox-trigger="gallery">
                        <div class="mdi-gallery-3" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url({{ asset($home_setting->image) }}) no-repeat;background-size: cover;background-position: center;">PHOTO GALLERY</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden">
        @foreach ($galleries as $data)
        <div href="{{ asset($data->thumbnail_image) }}" data-fancybox="gallery" alt="{{ $data->title }}"></div>
        @endforeach
    </div>

    <div class="container visible-xs visible-sm">
        <div class="row">
            <div class="col-xs-12 contact-deral">
                <img class="mdi-info-photo-logo" src="{{ asset('images/logo/logo.png') }}">
                <h1 style="font-weight:bold; padding-bottom:5px; text-transform: uppercase; letter-spacing: 1px;">{{$home_setting->title}}</h1>
                <span style="font-weight:bold;">{{$home_setting->subtitle}}</span>
                <!-- <p><strong>Please do not hesitate to contact us</strong></p> -->
                <p style="margin-top:10px;"><i class="fa fa-map-marker"></i> {{$contact_us_setting->address_text}}</p>
                <!-- <div style="height: 150px; width: 100%;" id="map_canvas"></div> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6976.594655309069!2d115.09404716237573!3d-8.837515676739628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd251f0fa4af799%3A0x82cc528e4e7bd43d!2sMandala%20Airlines%20PK-RII!5e1!3m2!1sen!2sid!4v1672286938409!5m2!1sen!2sid" width="100%" height="175" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <a class="mdi-info-contact-btn email-btn display-block" href="mailto:{{$contact_us_setting->email_text}}"><i class="fa fa-envelope"></i> {{$contact_us_setting->email_text}}</a>
                <a class="mdi-info-contact-btn phone-btn display-block" href="tel:{{$contact_us_setting->phone_no}}"><i class="fa fa-phone"></i> {{$contact_us_setting->phone_no}}</a>
            </div>
        </div>
    </div>
</x-mobile>