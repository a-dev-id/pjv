@section('home_address')
<section class="py-90">
    <div class="container">
        <div class="row">
            <div class="col-6 text-center">
                <span class="d-block">
                    <h2 class="p-0 m-0 text-uppercase">Private Jet Villa</h2>
                    <p class="fw-bold text-uppercase"><i>by Hanging Gardens</i></p>
                </span>
                <span class="d-block">
                    {{ $contact->address_text }}
                </span>
            </div>
            <div class="col-6 text-center">
                <span class="d-block">
                    <h2 class="text-uppercase">Reservations</h2>
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
                    <h1 class="mb-3 text-uppercase"><i>{{ $setting->title }}</i></h1>
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

                            @foreach ($careers as $data)
                            <div class="card mx-3">
                                <div class="card-body d-flex flex-column justify-content-between h-100">
                                    <div class="mb-3">
                                        <h4 class="card-title fw-bold">{{ $data->title }}</h4>
                                        <p class="card-text">{{ $data->excerpt }}</p>
                                    </div>
                                    <div class="mt-1">
                                        <a href="#" class="float-end link-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#careers{{ $data->id }}">Read more <i class="fas fa-long-arrow-alt-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>

                            @section('modal')
                            <div class="modal fade" id="careers{{ $data->id }}" tabindex="-1" aria-labelledby="careers{{ $data->id }}-label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-bold text-uppercase" id="careers{{ $data->id }}-label">{{ $data->title }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {!! $data->description !!}
                                        </div>
                                        <div class="modal-footer">
                                            <a href="http://wa.me/628113800988" target="_blank" class="btn btn-sm btn-success text-uppercase py-2 px-3 rounded-0 me-2"><i class="fa-brands fa-whatsapp pe-1"></i> Chat with Us</a>
                                            <button type="button" class="btn btn-sm btn-outline-secondary text-uppercase py-2 px-3 rounded-0" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endsection
                            @endforeach

                        </div>
                        <div class="press-box-arrows position-absolute w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @yield('modal')
</x-p-j-v>