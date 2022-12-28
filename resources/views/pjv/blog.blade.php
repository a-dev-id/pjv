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

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    @foreach ($blogs as $data)
                    <div class="row border-bottom py-3">
                        <div class="col-12 col-lg-3 col-md-4">
                            <div class="ratio ratio-1x1">
                                <img src="{{ asset($data->banner_image) }}" class="w-100 object-fit-cover object-position-center">
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 col-md-8 ps-md-3 d-flex flex-column justify-content-between">
                            <div>
                                <h2 class="fs-4 fw-bold">
                                    <a href="{{ route('blog.show', [$data->slug]) }}" class="link-dark text-decoration-none text-uppercase fw-bold ff-giveaway">{{ $data->title }}</a>
                                </h2>
                                <h6 class="text-muted">Posted on {{date('M d, Y', strtotime($data->created_at))}}</h6>
                                <p>{{ $data->excerpt }}</p>
                            </div>
                            <div class="text-end">
                                <a href="{{ route('blog.show', [$data->slug]) }}" class="link-dark text-decoration-none fw-bold">Read more <i class="fas fa-long-arrow-alt-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="row mt-3">
                        <div class="col-12">
                            {{ $blogs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-p-j-v>