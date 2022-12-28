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
<meta property="og:url" content="{{ route('wedding.index') }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $setting->title }}" />
<meta property="og:description" content="{{ $setting->excerpt }}" />
<meta property="og:image" content="{{ asset($setting->image) }}" />
@endsection
@push('css')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<style type="text/css">
    .press-box-arrows {
        top: calc(50% - 1.5em);
    }

    .press-box-arrows .slick-arrow {
        width: 3em;
        height: 3em;
    }

    .press-box-slides .card {
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
    }

    .press-box-slides .slick-track {
        display: flex !important;
    }

    .press-box-slides .slick-slide {
        height: inherit !important;
    }

</style>
@endpush
@push('js')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $('.press-box-slides').slick({
    		dots: false,
    		infinite: true,
    		speed: 500,
    		centerMode: true,
    		slidesToShow: 3,
    		slidesToScroll: 1,
    		autoplay: true,
    		autoplaySpeed: 3000,
    		arrows: true,
    		appendArrows: ".press-box-arrows",
    		prevArrow: "<div class='float-start rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fas fa-chevron-left'></i></div>",
    		nextArrow: "<div class='float-end rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fas fa-chevron-right'></i></div>",
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
                <div class="col-12 text-center">
                    <h1 class="mb-3 text-uppercase fw-bold">{{ $setting->title }}</h1>
                    <div>
                        {!! $setting->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-90 bg-light-gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="position-relative">
                        <div class="press-box-slides overflow-hidden">
                            @foreach ($press_room as $data)
                            <div class="card mx-3">
                                <div class="card-img-top ratio ratio-4x3">
                                    <img src="{{ asset($data->image) }}" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="card-body">
                                    <h2 class="card-text fs-5 fw-bold">{{ $data->title }}</h2>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="press-box-arrows position-absolute w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-p-j-v>