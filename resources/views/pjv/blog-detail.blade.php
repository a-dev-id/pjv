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
<x-p-j-v>
    <section class="slider-section">
        <div class="vh-100 overflow-hidden position-relative">
            <img src="{{ asset($setting->banner_image) }}" class="h-100 w-100 object-fit-cover object-position-center">
        </div>
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-8">
                    <div class="blog-slider mb-4">
                        <div class="ratio ratio-1x1">
                            <img src="{{ asset($blog->banner_image) }}" class="w-100 object-fit-cover object-position-center">
                        </div>
                    </div>
                    <h1 class="fs-3 fw-bold text-uppercase">{{ $blog->title }}</h1>
                    <h6 class="text-muted mb-4">Posted on Nov 07, 2022</h6>
                    {!! $blog->description !!}
                    <!-- <a href="https://wa.link/7ejw78" target="blank" class="btn btn-gold text-uppercase py-3 fw-bold rounded-0">BOOK HERE</a> -->
                </div>


                <div class="col-12 col-md-4">
                    <h1 class="fs-3 fw-bold text-uppercase mb-4">Most Recent</h1>

                    @foreach ($blogs as $data)
                    <div class="row py-3 border-bottom ">
                        <div class="col-12 col-md-4">
                            <div class="ratio ratio-4x3">
                                <img src="{{ asset($data->banner_image) }}" class="w-100 object-fit-cover object-position-center">
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <h1 class="fs-6 fw-bold">
                                <a href="{{ route('blog.show', [$data->slug]) }}" class="link-dark text-decoration-none">{{ $data->title }}</a>
                            </h1>
                            <h6 class="text-muted">Posted on Nov 07, 2022</h6>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

</x-p-j-v>