@section('meta')
<meta name="title" content="A hidden gem is found in the middle of mystical ubud jungle">
<meta name="description" content="Hanging Gardens of Bali is located between Ayung River and ancient Dalem Segara temple. The resort stands on the edge of a stunning valley, surrounded by a picturesque rain forest.">
<title>A hidden gem is found in the middle of mystical ubud jungle | Hanging Gardens of Bali</title>
<meta name="facebook-domain-verification" content="vsrtk1q9nopkeyn6my9m9ldvdb172i" />
<meta property="og:url" content="https://hanginggardensofbali.com" />
<meta property="og:type" content="website" />
<meta property="og:title" content="A hidden gem is found in the middle of mystical ubud jungle | Hanging Gardens of Bali" />
<meta property="og:description" content="Hanging Gardens of Bali is located between Ayung River and ancient Dalem Segara temple. The resort stands on the edge of a stunning valley, surrounded by a picturesque rain forest." />
<meta property="og:image" content="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/header-home.jpg" />
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
        @foreach ($sliders as $data)
        <div class="vh-100 overflow-hidden position-relative">
            <img src="{{ asset($data->image) }}" class="h-100 w-100 object-fit-cover object-position-center" alt="{!! $data->title !!}">
        </div>
        @endforeach
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <h1 class="mb-3"><i>{{ $setting->title }}</i></h1>
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
            <div class="slider slider-center">
                @foreach ($sliders2 as $data)
                <div class="slider2-wrapper">
                    <img src="{{ asset($data->image) }}" alt="{{ $data->title }}" class="slider2-image w-100" />
                </div>
                @endforeach
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19732.80105663574!2d115.093741!3d-8.837301!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x82cc528e4e7bd43d!2sMandala%20Airlines%20PK-RII!5e1!3m2!1sen!2sus!4v1667971356357!5m2!1sen!2sus" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</x-p-j-v>