@section('home_address')
<section class="py-90">
    <div class="container">
        <div class="row">
            <div class="col-6 text-center">
                <span class="d-block">
                    <h2>Private Jet Villa</h2>
                </span>
                <span class="d-block">
                    {{ $contact->address_text }}
                </span>
            </div>
            <div class="col-6 text-center">
                <span class="d-block">
                    <h2>Reservations</h2>
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
<meta name="title" content="{{ $setting->title. " ".$setting->subtitle }}">
<meta name="description" content="{{$setting->excerpt}}">
<title>{{ $setting->title. " ".$setting->subtitle }}</title>
<meta property="og:url" content="{{ route('index') }}" />
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

    .section1-wrapper {
        width: 595px;
    }

    .section1-image {
        height: 800px;
        object-fit: cover;
        object-position: center;
    }

    .section2-wrapper {
        width: 410px;
    }

    .section2-image {
        height: 550px;
        object-fit: cover;
        object-position: center;
    }

    .section3-bg-wrapper {
        height: 900px !important;
    }

    .section3-content-wrapper {
        height: 700px !important;
    }

    .bg-image-fixed {
        background: url("{{ asset($setting->image3) }}") no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
        height: 850px;
    }

    .header-image img {
        object-fit: cover;
        object-position: center;
    }

    .header-iframe-youtube {
        width: 102%;
        height: 120%;
        top: -10%;
        left: -1%;
        position: absolute;
        pointer-events: none;
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
        autoplaySpeed: 5000,
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
    {{-- <section class="slider-section">
        @foreach ($sliders as $data)
        <div class="vh-100 overflow-hidden position-relative">
            <img src="{{ asset($data->image) }}" class="h-100 w-100 object-fit-cover object-position-center" alt="{{ $data->title }}">
        </div>
        @endforeach
    </section> --}}

    <section class="header-image vh-100 overflow-hidden position-relative">
        {{-- <iframe src="https://www.youtube.com/embed/9RA48trBz24?autoplay=1&mute=1&controls=0&loop=1&rel=0&showinfo=0&iv_load_policy=3&playlist=9RA48trBz24" class="header-iframe-youtube"></iframe> --}}
        <iframe src="https://www.youtube.com/embed/forSx74dkMw?autoplay=1&mute=1&controls=0&loop=1&rel=0&showinfo=0&iv_load_policy=3&list=PLw8fGZ6fiQLA6TnBP_Le72OSgk-bL4qQ0" class="header-iframe-youtube"></iframe>
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <h1 class="mb-1"><i>{{ $setting->title }}</i></h1>
                    <p class="mb-3"><i>{{ $setting->subtitle }}</i></p>
                    <div>{!! $setting->description !!}</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-90 bg-light-gray">
        <div class="container">
            <div class="row pb-5 justify-content-center">
                <div class="col-6 text-center">
                    <h2 class="mb-3"><i>{{ $setting->title1 }}</i></h2>
                </div>
            </div>

            <div class="position-relative">
                <div class="slider slider-center">
                    @foreach ($sliders2 as $data)
                    <div class="slider2-wrapper">
                        <img src="{{ asset($data->image) }}" alt="{{ $data->title }}" class="slider2-image w-100" />
                    </div>
                    @endforeach
                </div>
                <div class="slider2-arrow"></div>
            </div>

            <div class="row pt-5 justify-content-center">
                <div class="col-6 text-center">
                    <div>{!! $setting->excerpt1 !!}</div>
                    <div class="mt-4">
                        <button class="btn btn-primary rounded-0 px-5">Button text</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row pb-5 justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-7 px-4">
                            <h2 class="mb-5"><i>{{ $setting->title2 }}</i></h2>
                            <div class="section1-wrapper">
                                <img src="{{ asset($setting->image1) }}" alt="{{ $data->title }}" class="section1-image w-100" />
                            </div>
                        </div>
                        <div class="col-5 px-4">
                            <div class="section2-wrapper">
                                <img src="{{ asset($setting->image2) }}" alt="{{ $data->title }}" class="section2-image w-100" />
                            </div>
                            <div class="mt-4">
                                {!! $setting->excerpt2 !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-image-fixed pb-90">
        <div class="container-fluid">
            <div class="row justify-content-end align-items-end section3-bg-wrapper">
                <div class="col-9 bg-white">
                    <div class="row justify-content-center align-items-center px-5 section3-content-wrapper pb-5">
                        <div class="col-4 text-center pe-5">
                            <h2 class="mb-3"><i>{{ $setting->title3 }}</i></h2>
                            <div>{!! $setting->excerpt3 !!}</div>
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div class="col-4">
                                    <img src="https://via.placeholder.com/295x395" style="width: 100%">
                                    <h3 class="my-2"><i>Maecenas auctor facilisis rutrum</i></h3>
                                    <div class="py-2">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary px-5 rounded-0">DISCOVER</button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img src="https://via.placeholder.com/295x395" style="width: 100%">
                                    <h3 class="my-2"><i>Maecenas auctor facilisis rutrum</i></h3>
                                    <div class="py-2">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary px-5 rounded-0">DISCOVER</button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img src="https://via.placeholder.com/295x395" style="width: 100%">
                                    <h3 class="my-2"><i>Maecenas auctor facilisis rutrum</i></h3>
                                    <div class="py-2">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary px-5 rounded-0">DISCOVER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="py-90"></div>
    <section>
        {!! $contact->google_map !!}
    </section>
</x-p-j-v>