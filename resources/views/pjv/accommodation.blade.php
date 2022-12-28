@section('home_address')
<section class="py-90">
    <div class="container">
        <div class="row">
            <div class="col-6 text-center">
                <span class="d-block">
                    <h2 class="p-0 m-0 text-uppercase fw-bold">Private Jet Villa</h2>
                    <p class="fw-bold text-uppercase">by Hanging Gardens</p>
                </span>
                <span class="d-block mt-2">
                    {{ $contact->address_text }}
                </span>
            </div>
            <div class="col-6 text-center">
                <span class="d-block">
                    <h2 class="text-uppercase fw-bold">Reservations</h2>
                </span>
                <span class="d-block">
                    Reservations Direct: {{ $contact->phone_no}}
                </span>
                <span class="d-block">
                    Email: {{ $contact->email_text }}
                </span>
            </div>
        </div>
    </div>
</section>
@endsection
@section('meta')
<meta name="title" content="{{ $setting->title }}">
<meta name="description" content="{{$setting->excerpt}}">
<title>{{ $setting->title }}</title>
<meta property="og:url" content="{{ route('accommodation.index') }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $setting->title }}" />
<meta property="og:description" content="{{ $setting->excerpt }}" />
<meta property="og:image" content="{{ asset($setting->image) }}" />
@endsection
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .slider2-wrapper {
        width: 455px;
    }

    .slider2-image {
        height: 680px;
        object-fit: cover;
        object-position: center;
    }

    .slider2-arrow {
        position: absolute;
        z-index: 2;
        top: calc(50% - 20px);
        left: 0;
        width: 100%;
        overflow: hidden;
        padding: 0 25px;
    }

    .slick-arrow {
        width: 40px;
        height: 40px;
        background-color: #6c471d;
        color: #fff;
        border: none;
    }

    .bg-image-fixed {
        background: url("{{ asset($villa->banner_image) }}") no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
        height: 900px;
        margin-bottom: 90px;
    }

    .section1-wrapper {
        width: 100%;
    }

    .section1-image {
        height: auto;
        object-fit: cover;
        object-position: center;
    }

</style>
@endpush
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.slider-section').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        fade: true,
        cssEase: 'linear',
        draggable: false,
        pauseOnDotsHover: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        });
</script>

<script>
    $('.slider-center').slick({
        centerMode: true,
        slidesToShow: 3,
        dots: true,
        infinite: true,
        centerPadding: '0px',
        speed: 500,
        variableWidth: true,
        arrows: true,
        appendArrows: ".slider2-arrow",
        prevArrow: "<div class='float-start rounded-circle border border-secondary d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fas fa-chevron-left'></i></div>",
        nextArrow: "<div class='float-end rounded-circle border border-secondary d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fas fa-chevron-right'></i></div>",
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnDotsHover: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        });
        
</script>
@endpush
<x-p-j-v>
    <section class="slider-section">
        <div class="vh-100 overflow-hidden position-relative">
            <img src="{{ asset($setting->banner_image) }}" class="h-100 w-100 object-fit-cover object-position-center">
        </div>
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <h1 class="mb-3 text-uppercase fw-bold">{{ $setting->title }}</h1>
                    <div>
                        {{ $setting->excerpt }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-image-fixed">
    </section>

    <section class="py-90" style="margin-bottom:90px;">
        <div class="container">
            <div class="position-relative">
                <div class="slider slider-center">
                    @foreach ($villa->images as $data)
                    <div class="slider2-wrapper">
                        <img src="{{ asset($data->image) }}" alt="{{ $data->title }}" class="slider2-image w-100" />
                    </div>
                    @endforeach
                </div>
                <div class="slider2-arrow"></div>
            </div>
            <div class="row justify-content-center pt-90">
                <div class="col-lg-8 text-center">
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-6">

                    <div class="section1-wrapper">
                        <img src="{{ asset($villa->image) }}" alt="{{ $villa->title }}" class="section1-image w-100" />
                    </div>
                </div>
                <div class="col-6 p-5">
                    <h2 class="mb-5 text-uppercase fw-bold">Facilities</h2>
                    <ul style="list-style-type:disc">
                        @foreach ($villa_feature as $data)
                        @foreach (\App\Models\Feature::where('id', '=', $data->feature_id)->get() as $data_feature)
                        <li class="mb-3">{{ $data_feature->title }}</li>
                        @endforeach
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

</x-p-j-v>