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
<meta name="title" content="{{ $contact->title }}">
<meta name="description" content="{{$contact->excerpt}}">
<title>{{ $contact->title }}</title>
<meta property="og:url" content="{{ route('dining.index') }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $contact->title }}" />
<meta property="og:description" content="{{ $contact->excerpt }}" />
<meta property="og:image" content="{{ asset($contact->image) }}" />
@endsection
@push('css')
@endpush
@push('js')
@endpush
<x-p-j-v>
    <section class="slider-section">
        <div class="vh-100 overflow-hidden position-relative">
            <img src="{{ asset($contact->banner_image) }}" class="h-100 w-100 object-fit-cover object-position-center">
        </div>
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <h1 class="mb-3 text-uppercase"><i>{{ $contact->title }}</i></h1>
                    <div>
                        {{ $contact->excerpt }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-4">
                <div class="my-3 text-center">
                    <img src="{{ asset($contact->phone_icon) }}" class="mb-3">
                    <p>{{ $contact->phone_no }}</p>
                </div>
            </div>
            <div class="col-4">
                <div class="my-3 text-center">
                    <img src="{{ asset($contact->address_icon) }}" class="mb-3">
                    <p>{{ $contact->address_text }}</p>
                </div>
            </div>
            <div class="col-4">
                <div class="my-3 text-center">
                    <img src="{{ asset($contact->email_icon) }}" class="mb-3">
                    <p>{{ $contact->email_text }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row justify-content-center py-5">
            <div class="col-4 text-center">
                <a href="http://wa.me/{{ $contact->whatsapp_no }}" target="_blank" class="btn btn-primary text-uppercase rounded-0 fw-bold d-inline-flex p-0">
                    <span class="px-3 d-flex align-items-center">Chat with Us</span>
                    <div class="px-3 py-2 text-white" style="background-color: #6c471d; border-left:1px solid #fff"><i class="fab fa-whatsapp"></i></div>
                </a>
            </div>
        </div>

        <div class="row justify-content-center pb-90">
            <div class="col-6 text-center">
                <h1 class="my-3 text-uppercase"><i>Press & Media Partnership</i></h1>
                <p>{{ $contact->general_email }}</p>
            </div>
        </div>
    </section>

    <section class="mt-90">
        {!! $contact->google_map !!}
    </section>

</x-p-j-v>