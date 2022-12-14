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

    <section class="container">
        <div class="row">
            @foreach ($awards as $data)
            <div class="col-12 py-4 border-bottom">
                <h3 class="text-uppercase fw-bold">{{ $data->title }}</h3>
                <h5 class="text-gold">{{ $data->subtitle }}</h5>
                <div class="d-inline-flex">
                    <img src="{{ asset($data->image) }}" class="me-4" style="width: 150px; object-position: center; object-fit: contain;">
                    <div class="text-start mt-3">
                        {{ Str::limit($data->excerpt, 300) }}
                    </div>
                </div>
                <a href="#" class="float-end link-dark text-decoration-none fw-bold" data-bs-toggle="modal" data-bs-target="#awards{{ $data->id }}">Read more <i class="fas fa-long-arrow-alt-right ms-2"></i></a>
            </div>

            <div class="modal fade" id="awards{{ $data->id }}" tabindex="-1" aria-labelledby="awards{{ $data->id }}-label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold text-uppercase" id="awards{{ $data->id }}-label">Award</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ asset($data->image) }}" class="mb-3" style="width: 150px; object-position: center; object-fit: contain;">
                            <h3 class="text-uppercase fw-bold">{{ $data->title }}</h3>
                            <h5 class="text-gold mb-3">{{ $data->subtitle }}</h5>
                            {!! $data->description !!}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-outline-gold text-uppercase py-2 px-3 rounded-0" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</x-p-j-v>