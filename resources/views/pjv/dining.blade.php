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
<meta property="og:url" content="{{ route('dining.index') }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $setting->title }}" />
<meta property="og:description" content="{{ $setting->excerpt }}" />
<meta property="og:image" content="{{ asset($setting->image) }}" />
@endsection
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .item-wrapper {
        width: 630px;
    }

    .item-image {
        height: 700px;
        object-fit: cover;
        object-position: center;
    }

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

</style>
@endpush
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                <div class="col-7 text-center">
                    <h1 class="mb-3 text-uppercase"><i>{{ $setting->title }}</i></h1>
                    <div>
                        {!! $setting->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-90 bg-light-gray">
        <div class="container">
            <div class="position-relative">
                <div class="slider slider-center">
                    @foreach ($restaurant_images as $data)
                    <div class="slider2-wrapper">
                        <img src="{{ asset($data->image) }}" alt="{{ $data->title }}" class="slider2-image w-100" />
                    </div>
                    @endforeach
                </div>
                <div class="slider2-arrow"></div>
            </div>
        </div>
    </section>

    @php $c = 0; @endphp
    @foreach ($restaurant as $data)
    @php $c +=1; @endphp
    @if ($c == 1)

    <section class="container py-90">
        <div class="row align-items-center">
            <div class="col-6 p-5">
                <h2 class="mb-1 text-uppercase"><i>{{ $data->title }}</i></h2>
                <div class="mb-2 fw-bold"><i>{{ $data->price }}</i></div>
                <div>{!! $data->description !!}</div>
                <div class="mt-4">
                    <button class="btn btn-primary rounded-0 px-5">Button text</button>
                </div>
            </div>
            <div class="col-6">
                <div class="item-wrapper">
                    <img src="{{ asset($data->image) }}" class="item-image w-100">
                </div>
            </div>
        </div>
    </section>

    @elseif ($c == 2)

    <section class="container py-90">
        <div class="row align-items-center">
            <div class="col-6">
                <div class="item-wrapper">
                    <img src="{{ asset($data->image) }}" class="item-image w-100">
                </div>
            </div>
            <div class="col-6 p-5">
                <h2 class="mb-1 text-uppercase"><i>{{ $data->title }}</i></h2>
                <div class="mb-2 fw-bold"><i>{{ $data->price }}</i></div>
                <div>{!! $data->description !!}</div>
                <div class="mt-4">
                    <button class="btn btn-primary rounded-0 px-5">Button text</button>
                </div>
            </div>
        </div>
    </section>

    @php $c = 0; @endphp
    @endif
    @endforeach
    {{-- <section class="bg-light-gray py-90">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <h2 class="mb-3"><i>Donec convallis nisl</i></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum vero autem deserunt quaerat libero sapiente consequatur suscipit, recusandae, quae dolor nihil. Officiis veritatis eveniet voluptatem distinctio soluta, quo laboriosam consequatur voluptas corrupti tempore repellendus voluptates asperiores voluptatibus quaerat placeat eum, excepturi nesciunt earum temporibus, quas unde architecto ipsa aliquid porro! Nesciunt ducimus maiores quam aperiam autem blanditiis vel laboriosam corrupti velit voluptatum sapiente quod pariatur sint perferendis sit?</p>
                </div>
            </div>
        </div>
    </section> --}}
</x-p-j-v>