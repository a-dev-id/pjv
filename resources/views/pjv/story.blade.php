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
<meta name="title" content="{{ $data->title }}">
<meta name="description" content="{{$data->excerpt}}">
<title>{{ $data->title }}</title>
<meta property="og:url" content="{{ route('wedding.index') }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $data->title }}" />
<meta property="og:description" content="{{ $data->excerpt }}" />
<meta property="og:image" content="{{ asset($data->image) }}" />
@endsection
<x-p-j-v>
    <section class="slider-section">
        <div class="vh-100 overflow-hidden position-relative">
            <img src="{{ asset($data->banner_image) }}" class="h-100 w-100 object-fit-cover object-position-center">
        </div>
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="mb-3 text-uppercase"><i>{{ $data->title }}</i></h1>
                    <div>
                        {!! $data->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-p-j-v>